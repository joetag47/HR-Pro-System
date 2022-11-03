<?php

namespace App\Http\Controllers;

use App\DataTables\Company\DepartmentDataTable;
use App\DataTables\userManagement\UsersDataTable;
use App\Models\Company\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class userManagementController extends Controller
{
//    public function index(){
//        return view('userManagement.index');
//    }

    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('userManagement.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validate = Validator::make($data, $this->validateFields());

        if ($validate->fails())
            return $this->failureResponse($validate->errors()->first());

        DB::beginTransaction();

        $check_users = User::query()->where('email', $data['email'])
            ->where('company_id', auth()->user()->company->id)->first();

        if (!empty($check_users))
            return $this->failureResponse("Email: {$check_users->email} already exists");

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

    public function delete(User $user)
    {
        DB::beginTransaction();
        try {

            DB::table('users')->where('department_id', $user->id)
                ->update(['department_id' => null]);

            DB::table('users')->where('department_id', $user->id)
                ->update(['department_id' => null]);

            $user->delete();

            DB::commit();

            return $this->successResponse("User: {$user->name} successfully deleted");

        } catch (\Exception $e){
            DB::rollBack();

            $this->logCompanyServiceInfo(':: USER DELETE ERROR ::', "{$e->getMessage()} :: {$e->getCode()}");

            return $this->failureResponse('User could not be deleted. Kindly try again');
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
