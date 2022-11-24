<?php

namespace App\Http\Controllers\Company;

use App\DataTables\Company\CompanyDepartmentDataTable;
use App\DataTables\Company\CompanyEmployeeDataTable;
use App\DataTables\Company\EmployeeDataTable;
use App\Http\Controllers\Controller;
use App\Models\Company\BusinessType;
use App\Models\Company\Company;
use App\Models\User;
use App\Traits\CompanyServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    use CompanyServices;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(CompanyEmployeeDataTable $employees, CompanyDepartmentDataTable $departments)
    {
        $business_types = BusinessType::query()->get();

        $company = Company::query()->where('id', auth()->user()->company_id)->first();

        $employees = $employees->html();

        $departments = $departments->html();

        return view('company.profile.index', compact('business_types', 'company', 'employees', 'departments'));
    }


    public function getEmployees(CompanyEmployeeDataTable $employees)
    {
        return $employees->render('company.profile.index');
    }

    public function getDepartments(CompanyDepartmentDataTable $departments)
    {
        return $departments->render('company.profile.index');
    }

    public function updateCompany(Request $request)
    {
        $data = $request->all();

        $company = Company::query()->where('id', auth()->user()->company->id)->first();


        if (!empty($company)) {
            $validator = Validator::make($data, [
                'name_of_organization' => 'required',
                'sector' => 'required',
                'email' => 'required|email',
                'address' => 'required',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:18',
                'logo' => 'nullable|image|mimes:jpeg,jpg,png|max:3024'
            ]);

//            return $this->generateResponse(auth()->user()->company);

            if ($validator->fails()){
                return $this->generateResponse($validator->errors()->first(), 'error');
            }

            DB::beginTransaction();

            try {
                if (!empty($request->file('logo'))){

                    if (File::exists($company->logo))
                        File::delete($company->logo);

                    $data['logo'] = $this->performUpload($request->file('logo'), "company/{$company->id}/");
                }else{
                    $data['logo'] = $company->logo;
                }

                $company->update($this->dumpCompanyData($data));

                DB::commit();

                return $this->generateResponse(['company' => $company, 'logo' => asset($company->logo)]);

            } catch (\Exception $exception){

                $this->logCompanyServiceInfo(':: COMPANY UPDATE ERROR :: ', $exception->getMessage());

                return $this->generateResponse('Company could not be updated. Kindly contact administrator', 'error');
            }
        }

        return $this->generateResponse('Company does not exist.', 'error');


    }


    public function dumpCompanyData($data)
    {
        return [
            'name' => $data['name_of_organization'],
            'sector_id' => $data['sector'],
            'address' => $data['address'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'logo' => $data['logo'],
            'description' => $data['description']
        ];
    }
}
