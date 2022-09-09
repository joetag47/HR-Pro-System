<?php

use App\Http\Controllers\Company\DepartmentController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

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
});
