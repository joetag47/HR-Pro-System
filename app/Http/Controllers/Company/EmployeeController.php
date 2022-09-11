<?php

namespace App\Http\Controllers\Company;

use App\DataTables\Company\EmployeeDataTable;
use App\Http\Controllers\Controller;
use App\Traits\CompanyServices;
use Illuminate\Http\Request;

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
        return view('company.employees.create');
    }

    public function store(Request $request)
    {
        return $request->all();
    }
}
