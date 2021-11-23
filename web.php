<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\TodosController;

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
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/companies',[CompaniesController::class,'companies']);
Route::get('/newcompany',[CompaniesController::class,'newcompany']);
Route::post('/add-company',[CompaniesController::class,'addCompany'])->name('add-company');
Route::get('/readcompanies',[CompaniesController::class,'listCompanies']);
Route::get('/update-company/{id}',[CompaniesController::class,'updateCompany'])->name('update-company');
Route::get('/delete-company/{id}',[CompaniesController::class,'deleteCompany'])->name('deletecompany');
Route::post('/edit-company',[CompaniesController::class,'editCompany'])->name('edit-company');

Route::get('/employees',[EmployeesController::class,'employees']);
Route::get('/newemployee',[EmployeesController::class,'newemployee']);
Route::post('/add-employee',[EmployeesController::class,'addEmployee'])->name('add-employee');
Route::get('/reademployees',[EmployeesController::class,'listEmployees']);
Route::get('/update-employee/{id}',[EmployeesController::class,'updateEmployees'])->name('update-employee');
Route::get('/delete-employee/{id}',[EmployeesController::class,'deleteEmployee'])->name('deleteemployee');
Route::post('/edit-employee',[EmployeesController::class,'editEmployee'])->name('edit-employee');


Route::get('/todos',[TodosController::class,'todos']);
Route::post('/add-task',[TodosController::class,'addTask'])->name('add-task');
Route::get('/readtasks',[TodosController::class,'listTasks']);
Route::get('/update-task/{id}',[TodosController::class,'updateTask'])->name('update-task');
Route::get('/delete-task/{id}',[TodosController::class,'deleteTask'])->name('delete-task');
Route::post('/edit-task',[TodosController::class,'editTask'])->name('edit-task');