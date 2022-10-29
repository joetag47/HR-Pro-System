<?php

use App\Http\Controllers\Company\DepartmentController;
use App\Http\Controllers\Company\EmployeeController;
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
    return view('auth.login');
})->middleware(['auth', 'role:admin'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('company/profile')->group(function () {

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
