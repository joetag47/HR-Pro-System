<?php

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Company\DepartmentController;
use App\Http\Controllers\Company\EmployeeController;
use App\Http\Controllers\Company\ProfileController;
use App\Http\Controllers\rolesAndPermissionsController;
use App\Http\Controllers\userManagementController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

//Middleware role auth added
Route::get('/', function () {
    dd('hello world');
    return view('auth.login');
});

Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


Route::prefix('company/profile')->group(function () {

    Route::get('/', [ProfileController::class, 'index'])->name('company.profile.index');
    Route::post('update', [ProfileController::class, 'updateCompany'])->name('company.profile.update');
    Route::get('employees/datatable', [ProfileController::class, 'getEmployees'])->name('company.getEmployees');
    Route::get('departments/datatable', [ProfileController::class, 'getDepartments'])->name('company.getDepartments');

    #=================================== DEPARTMENT ROUTES =============================================#
    Route::prefix('departments')->group(function () {
        Route::get('/', [DepartmentController::class, 'index'])->name('company.department.index');
        Route::post('store', [DepartmentController::class, 'store'])->name('company.department.store');
        Route::post('{department}/update', [DepartmentController::class, 'update'])->name('company.department.update');
        Route::post('{department}/delete', [DepartmentController::class, 'delete'])->name('company.department.delete');
        Route::post('{department}/fetch', [DepartmentController::class, 'fetch'])->name('company.department.fetch');
    });

    #=================================== EMPLOYEE ROUTES ===============================================#
    Route::prefix('employees')->group(function () {
        Route::get('/', [EmployeeController::class, 'index'])->name('company.employee.index');
        Route::get('create', [EmployeeController::class, 'create'])->name('company.employee.create');
        Route::post('store', [EmployeeController::class, 'store'])->name('company.employee.store');
        Route::get('{employee}/edit', [EmployeeController::class, 'edit'])->name('company.employee.edit');
        Route::post('{employee}/update', [EmployeeController::class, 'update'])->name('company.employee.update');
        Route::get('{employee}/details', [EmployeeController::class, 'details'])->name('company.employee.details');
        Route::any('{employee}/delete', [EmployeeController::class, 'delete'])->name('company.employee.delete');
        Route::any('{education}/history/delete', [EmployeeController::class, 'removeHistory'])->name('company.employee.remove.history');
    });
});

Route::prefix('users')->group(function () {

    #=================================== USER MANAGEMENT ROUTES =============================================#
    Route::get('/', [userManagementController::class, 'index'])->name('userManagement.index');
    Route::post('store', [userManagementController::class, 'store'])->name('userManagement.store');
    Route::post('{users}/fetch', [userManagementController::class, 'fetch'])->name('userManagement.fetch');
    Route::post('{user}/delete', [userManagementController::class, 'delete'])->name('userManagement.delete');

    #=================================== ROLE MANAGEMENT ROUTES =============================================#
    Route::prefix('roles')->group(function () {
        Route::get('/', [rolesAndPermissionsController::class, 'index'])->name('rolesandpermissions.roleindex');
        Route::get('create', [rolesAndPermissionsController::class, 'create'])->name('rolesandpermissions.create');
        Route::post('store', [rolesAndPermissionsController::class, 'store'])->name('rolesandpermissions.store');
//        Route::post('{users}/fetch', [userManagementController::class, 'fetch'])->name('userManagement.fetch');
//        Route::resource('/roles', RoleController::class);
//        Route::resource('permissions', PermissionController::class);
//        Route::post('{user}/delete', [userManagementController::class, 'delete'])->name('userManagement.delete');
    });
});
