<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeeCategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\LeaveApplicationController;
use App\Http\Controllers\LeaveCategoryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MaritalStatusController;
use App\Http\Controllers\PayGradeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserGroupController;
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



Route::resources([
    'users' => UserController::class,
    'user-groups' => UserGroupController::class,
    // 'employees' => EmployeeController::class,
    'employee-categories' => EmployeeCategoryController::class,
    'leave-applications' => LeaveApplicationController::class,
    'leave-categories' => LeaveCategoryController::class,
    'branches' => BranchController::class,
    'locations' => LocationController::class,
    'pay-grades' => PayGradeController::class,
    'departments' => DepartmentController::class,
    'designations' => DesignationController::class,
    'genders' => GenderController::class,
    'marital-statuses' => MaritalStatusController::class,
    'user-groups' => UserGroupController::class,

]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
