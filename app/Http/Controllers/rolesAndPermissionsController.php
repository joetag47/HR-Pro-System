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
        return view('rolesandpermissions.roleindex', compact('permissions'));
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        Role::create(['name' =>$request->name]);
        return back();
    }

}
