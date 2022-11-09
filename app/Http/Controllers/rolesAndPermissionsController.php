<?php

namespace App\Http\Controllers;

use App\DataTables\Company\DepartmentDataTable;
use App\DataTables\userManagement\UsersDataTable;
use App\DataTables\roles\RolesDataTable;
use App\Models\Company\Department;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class rolesAndPermissionsController extends Controller
{

    public function index(RolesDataTable $dataTable)
    {
        $roles = Role::all();
        return view('rolesandpermissions.roleindex', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('rolesandpermissions.create', compact('permissions', 'permission_groups'));
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
//        Validating User Input
        $request->validate([
           'name'=>'required|max:100|unique:roles'
            ],[
                'name.required'=>'Please enter a role name'
        ]);

//        Process User Input
        $role = Role::create(['name' =>$request->name]);
//        $role = DB::table('roles')->where('name', $request->name)->first();

        $permissions = $request->input('permissions');

        if(!empty($permissions)){
            $role->syncPermissions($permissions);
        }
        return back();
    }

}
