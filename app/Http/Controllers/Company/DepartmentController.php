<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('company.departments.index');
    }

    public function store(Request $request)
    {
        return $request->all();
    }

    public function update(Request $request, Department $department)
    {
        return [$request->all(), $department];
    }

    public function delete(Department $department)
    {
        return $department;
    }
}
