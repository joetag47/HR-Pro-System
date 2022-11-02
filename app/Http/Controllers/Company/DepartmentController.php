<?php

namespace App\Http\Controllers\Company;

use App\DataTables\Company\DepartmentDataTable;
use App\Http\Controllers\Controller;
use App\Models\Company\Department;
use App\Traits\CompanyServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class
DepartmentController extends Controller
{

    use CompanyServices;

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(DepartmentDataTable $dataTable)
    {
        return $dataTable->render('company.departments.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validate = Validator::make($data, $this->validateFields());

        if ($validate->fails())
            return $this->failureResponse($validate->errors()->first());

        DB::beginTransaction();

        $check_dept = Department::query()->where('name', $data['name'])
            ->where('company_id', auth()->user()->company->id)->first();

        if (!empty($check_dept))
            return $this->failureResponse("Department with name: {$check_dept->name} already exists");

        try {

            $department = Department::query()->create($this->dumpDepartment($data));

            DB::commit();

            return $this->successResponse("Department: {$department->name} successfully created");

        } catch (\Exception $e){

            DB::rollBack();

            $this->logCompanyServiceInfo(':: DEPARTMENT CREATE ERROR ::', "{$e->getMessage()} :: {$e->getCode()}");

            return $this->failureResponse('Department could not be created. Kindly try again');
        }
    }

    public function update(Request $request, Department $department)
    {
        $data = $request->all();

        $validate = Validator::make($data, $this->validateFields($department->id));

        if ($validate->fails())
            return $this->failureResponse($validate->errors()->first());

        DB::beginTransaction();

        try {

            $department->update($this->dumpDepartment($data));

            DB::commit();

            return $this->successResponse("Department: {$department->name} successfully updated");

        } catch (\Exception $e){

            DB::rollBack();

            $this->logCompanyServiceInfo(':: DEPARTMENT UPDATE ERROR ::', "{$e->getMessage()} :: {$e->getCode()}");

            return $this->failureResponse('Department could not be updated. Kindly try again');
        }


    }

    public function delete(Department $department)
    {
        DB::beginTransaction();
        try {

            DB::table('employees')->where('department_id', $department->id)
                ->update(['department_id' => null]);

            DB::table('users')->where('department_id', $department->id)
                ->update(['department_id' => null]);

            $department->delete();

            DB::commit();

            return $this->successResponse("Department: {$department->name} successfully deleted");

        } catch (\Exception $e){
            DB::rollBack();

            $this->logCompanyServiceInfo(':: DEPARTMENT DELETE ERROR ::', "{$e->getMessage()} :: {$e->getCode()}");

            return $this->failureResponse('Department could not be deleted. Kindly try again');
        }

    }

    public function fetch(Department $department)
    {
        return response()->json([
            'data' => $department,
            'url' => route('company.department.update', $department->id)
        ]);
    }

    public function validateFields($department = null)
    {
        return [
            'name' => 'required|unique:departments,name,'.$department,
            'description' => 'nullable'
        ];
    }

    public function dumpDepartment($data)
    {
        return [
            'name' => $data['name'],
            'company_id' => auth()->user()->company->id,
            'description' => $data['description']
        ];
    }
}
