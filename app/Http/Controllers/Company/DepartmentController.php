<?php

namespace App\Http\Controllers\Company;

use App\DataTables\Company\DepartmentDataTable;
use App\Http\Controllers\Controller;
use App\Models\Company\Department;
use App\Traits\CompanyServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
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
        return [$request->all(), $department];
    }

    public function delete(Department $department)
    {
        return $department;
    }

    public function fetch(Department $department)
    {
        return response()->json([
            'data' => $department,
            'url' => route('company.department.update', $department->id)
        ]);
    }

    public function validateFields()
    {
        return [
            'name' => 'required',
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
