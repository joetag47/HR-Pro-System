<?php

namespace App\Http\Controllers\Company;

use App\DataTables\Company\EmployeeDataTable;
use App\Http\Controllers\Controller;
use App\Models\Company\Department;
use App\Models\Company\Employee;
use App\Models\Company\EmployeeEducation;
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

            $employee = Employee::query()->create($this->dumpEmployee($data));

            if (!empty($data['education_history'])){

                foreach (json_decode($data['education_history'][0]) as $history) {

                    $education_collection->push($this->dumpWorkExperience((array)$history, $employee->id));
                }

            }

            DB::table('employee_education')->insert($education_collection->toArray());

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

        return view('company.employees.edit', compact('employee', 'departments', 'history_collection'));
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

                $data['id_file'] = null;
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
    //        full_name
//email
//date_of_birth
//place_of_birth
//gender
//residential_address
//digital_address
//phone_number
//identity_type
//id_file
//fathers_name
//father_deceased
//mothers_name
//mother_deceased
//marital_status
//children
//dependants
//next_of_kin_name
//next_of_kin_relationship
//next_of_kin_address
//next_of_kin_phone
//date_employed
//date_of_exit
//department
//position
//experience
//        work_experience

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
            'experience' => $data['experience'],
        ];
    }
}
