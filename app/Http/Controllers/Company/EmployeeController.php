<?php

namespace App\Http\Controllers\Company;

use App\DataTables\Company\EmployeeDataTable;
use App\Http\Controllers\Controller;
use App\Models\Company\Department;
use App\Models\Company\Employee;
use App\Models\Company\EmployeeEducation;
use App\Models\EmployeeChildren;
use App\Traits\CompanyServices;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    use CompanyServices;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(EmployeeDataTable $dataTable)
    {
        return $dataTable->render('company.employees.index');
    }

    public function create()
    {
        $departments = Department::query()->where('company_id', auth()->user()->company_id)->orderBy('id', 'DESC')->get();

        return view('company.employees.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validate = Validator::make($data, $this->validateEmployee());

        if ($validate->fails())
            return back()->withInput()->withErrors($validate->errors()->first());


        DB::beginTransaction();

        try {

            $education_collection = collect();

            if (!empty($request->file('id_file'))) {

                $data['id_file'] = $this->performUpload($request->file('id_file'), 'employee/id/');

            }else{

                $data['id_file'] = null;
            }

            if (!empty($request->file('profile_picture'))) {

                $data['profile_picture'] = $this->performUpload($request->file('profile_picture'), 'employee/profile_picture/');

            }else{

                $data['profile_picture'] = null;
            }

            $employee = Employee::query()->create($this->dumpEmployee($data));


            if (!empty($data['education_history']) && !empty((array)$data['education_history'][0])){

                foreach (json_decode($data['education_history'][0], true) as $history) {

                    if (!empty($history['institution']))
                        $education_collection->push($this->dumpWorkExperience((array)$history, $employee->id));
                }

                if (!empty($education_collection))
                    DB::table('employee_education')->insert($education_collection->toArray());

            }


            $children_collection = collect();

            if (!empty($data['children_list']) && !empty((array)$data['children_list'][0])){

                foreach (json_decode($data['children_list'][0], true) as $children) {

                    if (!empty($children['child_name']) && !empty($children['child_dob'])  && !empty($children['child_gender'])){

                        $children_collection->push($this->dumpChildren((array)$children, $employee->id));
                    }

                }

                if (!empty($children_collection))
                    DB::table('employee_childrens')->insert($children_collection->toArray());

            }

            $dependants_collection = collect();

            if (!empty($data['dependants_list']) && !empty((array)$data['dependants_list'][0])){

                foreach (json_decode($data['dependants_list'][0], true) as $dependant) {

                    if (!empty($dependant['dependant_name']) && !empty($dependant['dependant_age'])) {
                        $dependants_collection->push($this->dumpDependants((array)$dependant, $employee->id));
                    }
                }

                if (!empty($dependants_collection))
                    DB::table('employee_dependants')->insert($dependants_collection->toArray());

            }



            DB::commit();

            session()->flash('success', "Employee: $employee->name successfully created.");

            return redirect()->route('company.employee.index');

        } catch (\Exception $e){

            DB::rollBack();

            $this->logCompanyServiceInfo(':: EMPLOYEE CREATE ERROR ::', "{$e->getMessage()} :: {$e->getLine()}");

            return back()->withInput()->withErrors('Employee could not be created. Kindly try again');

        }

    }

    public function details(Employee $employee)
    {

        return view('company.employees.details', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        $departments = Department::query()->where('company_id', auth()->user()->company_id)->orderBy('id', 'DESC')->get();

        $history_collection = collect();

        $children_collection = collect();

        $dependant_collection = collect();

        if (!empty($employee->getChildren)){
            foreach ($employee->getChildren as $child){
                $children_collection->push([
                    'child_name' => $child->name,
                    'child_dob' => $child->dob,
                    'child_gender' => $child->gender,
                ]);
            }
        }

        if (!empty($employee->education)){
            foreach ($employee->education as $education){
                $history_collection->push([
                    'institution' => $education->institution,
                    'institution_address' => $education->address,
                    'institution_from' => $education->from,
                    'institution_to' => $education->to,
                    'institution_certificate' => $education->certificate,
                ]);
            }
        }

        if (!empty($employee->getDependants)){
            foreach ($employee->getDependants as $dependant) {
                $dependant_collection->push([
                    'dependant_name' => $dependant->name,
                    'dependant_age' => $dependant->age
                ]);
            }
        }

        return view('company.employees.edit', compact('employee', 'children_collection', 'departments', 'history_collection', 'dependant_collection'));
    }

    public function update(Request $request, Employee $employee)
    {
        $data = $request->all();

        $validate = Validator::make($data, $this->validateEmployee($employee->id));

        if ($validate->fails())
            return back()->withInput()->withErrors($validate->errors()->first());


        DB::beginTransaction();

        try {

            if (!empty($request->file('id_file'))) {

                if (File::exists($employee->id_file))
                    File::delete($employee->id_file);

                $data['id_file'] = $this->performUpload($request->file('id_file'), 'employee/id/');

            }else{

                $data['id_file'] = $employee->id_file;
            }

            if (!empty($request->file('profile_picture'))) {

                if (File::exists($employee->profile_picture))
                    File::delete($employee->profile_picture);

                $data['profile_picture'] = $this->performUpload($request->file('profile_picture'), 'employee/profile_picture/');

            }else{

                $data['profile_picture'] = $employee->profile_picture;
            }



            $employee->update($this->dumpEmployee($data));


            if (!empty($data['education_history'])){

                foreach (json_decode($data['education_history'][0]) as $history) {

                    $education = EmployeeEducation::query()->where('employee_id', $employee->id)->where('institution', (array)$history->institution)->first();

                    if (!empty($education))
                        $education->update($this->dumpWorkExperience((array) $history, $employee->id));
                    else
                        EmployeeEducation::query()->create($this->dumpWorkExperience((array) $history, $employee->id));

                }

            }

            DB::table('employee_childrens')->where('employee_id', $employee->id)->delete();

            $children_collection = collect();

            if (!empty($data['children_list']) && !empty((array)$data['children_list'][0])){

                foreach (json_decode($data['children_list'][0], true) as $children) {

                    if (!empty($children['child_name']) && !empty($children['child_dob'])  && !empty($children['child_gender'])){

                        $children_collection->push($this->dumpChildren((array)$children, $employee->id));
                    }

                }

                if (!empty($children_collection))
                    DB::table('employee_childrens')->insert($children_collection->toArray());

            }

            DB::table('employee_dependants')->where('employee_id', $employee->id)->delete();

            $dependant_collection = collect();

            $dependants_collection = collect();

            if (!empty($data['dependants_list']) && !empty((array)$data['dependants_list'][0])){

                foreach (json_decode($data['dependants_list'][0], true) as $dependant) {

                    if (!empty($dependant['dependant_name']) && !empty($dependant['dependant_age'])) {
                        $dependants_collection->push($this->dumpDependants((array)$dependant, $employee->id));
                    }
                }

                if (!empty($dependants_collection))
                    DB::table('employee_dependants')->insert($dependants_collection->toArray());

            }


            DB::commit();

            session()->flash('success', "Employee: $employee->name successfully created.");

            return redirect()->route('company.employee.index');

        } catch (\Exception $e){

            DB::rollBack();

            $this->logCompanyServiceInfo(':: EMPLOYEE UPDATE ERROR ::', "{$e->getMessage()} :: {$e->getLine()}");

            return back()->withInput()->withErrors('Employee could not be updated. Kindly try again');
        }
    }


    public function removeHistory(EmployeeEducation $education)
    {
        return $education;
    }

    public function delete(Employee $employee)
    {
        DB::beginTransaction();
        try {

            DB::table('employee_childrens')->where('employee_id', $employee->id)->delete();

            DB::table('employee_education')->where('employee_id', $employee->id)->delete();

            $employee->delete();

            DB::commit();

            return $this->successResponse('Employee deleted successfully');

        } catch (\Exception $e){

            DB::rollBack();

            $this->logCompanyServiceInfo(':: EMPLOYEE DELETE ERROR ::', "{$e->getMessage()} :: {$e->getLine()}");

            return back()->withInput()->withErrors('Employee could not be created. Kindly try again');

        }
    }

    public function validateEmployee($id = null)
    {
        return [
            'full_name' => 'required',
            'email' => 'required|email|unique:employees,email,'.$id,
            'date_of_birth' => 'required',
            'place_of_birth' => 'required',
            'gender' => 'required',
            'residential_address' => 'required',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:18',
            'identity_type' => 'required',
            'id_file.*' => 'mime:pdf,xlsx,xls,docx,doc,png,jpg,jpeg|max:5048',
            'fathers_name' => 'required',
            'mothers_name' => 'required',
            'marital_status' => 'required',
            'date_employed' => 'required',
            'department' => 'required',
            'position' => 'required',
            'job_description' => 'required'
        ];
    }

    public function dumpWorkExperience($data, $employee)
    {
        return [
            'employee_id' => $employee,
            'institution' => $data['institution'] ?? null,
            'address' => $data['institution_address'] ?? null,
            'from' => !empty($data['institution_from']) ? $data['institution_from'] : null,
            'to' => !empty($data['institution_to']) ? $data['institution_to'] : null,
            'certificate' => $data['institution_certificate'] ?? null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    public function dumpChildren($data, $employee)
    {
        return [
            'employee_id' => $employee,
            'name' => $data['child_name'] ?? null,
            'dob' => $data['child_dob'] ?? null,
            'gender' => $data['child_gender'] ?? null,
        ];
    }

    public function dumpDependants($data, $employee)
    {
        return [
            'employee_id' => $employee,
            'name' => $data['dependant_name'] ?? null,
            'age' => $data['dependant_age'] ?? null,
        ];
    }

    public function dumpEmployee($data)
    {
        return [
            'name' => $data['full_name'],
            'email' => $data['email'],
            'company_id' => auth()->user()->company_id,
            'date_of_birth' => $data['date_of_birth'],
            'place_of_birth' => $data['place_of_birth'],
            'gender' => $data['gender'],
            'residential_address' => $data['residential_address'],
            'digital_address' => $data['digital_address'],
            'phone_number' => $data['phone_number'],
            'identity_type' => $data['identity_type'],
            'id_file' => $data['id_file'],
            'mothers_name' => $data['mothers_name'],
            'fathers_name' => $data['fathers_name'],
            'father_deceased' => isset($data['father_deceased']) ? true : false,
            'mother_deceased' => isset($data['mother_deceased']) ? true : false,
            'marital_status' => $data['marital_status'],
            'children' => $data['children'],
            'dependants' => $data['dependants'],
            'next_of_kin_name' => $data['next_of_kin_name'],
            'next_of_kin_relationship' => $data['next_of_kin_relationship'],
            'next_of_kin_address' => $data['next_of_kin_address'],
            'next_of_kin_phone' => $data['next_of_kin_phone'],
            'date_employed' => $data['date_employed'],
            'date_of_exit' => $data['date_of_exit'],
            'department_id' => $data['department'],
            'position' => $data['position'],
            'profile_picture' => $data['profile_picture'],
            'job_description' => $data['job_description'],
            'experience' => $data['experience'],
        ];
    }
}
