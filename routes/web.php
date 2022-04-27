<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\EmployeeRegistrationController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\StaffsController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\CssSelector\Node\FunctionNode;

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



Route::middleware(['guest'])->group(function(){
    // Student Registration
    Route::get('/students/registration', [RegistrationController::class, 'create']);
    Route::post('/students/registration', [RegistrationController::class, 'store'])->name('students.register');
   
    // Employee Registration
    Route::get('/employee/registration', [EmployeeRegistrationController::class, 'create']);
    Route::post('/employee/registration', [EmployeeRegistrationController::class, 'store'])->name('employee.register');
    
    
    //Student Login
    Route::get('/student/login', [StudentsController::class, 'create']);
    

    //Employee Login
    Route::get('/employee/login', [SessionsController::class, 'create']);
    Route::post('dashboard', [SessionsController::class, 'store'])->name('user.login');

});
    

Route::middleware(['auth'])->group(function(){
      //Students Dashboard
      Route::get('/students/dashboard', [StudentsController::class, 'studentDashboard']);
      Route::get('/students/request', [StudentsController::class, 'request']);
      Route::get('/students/request-list', [StudentsController::class, 'list'])->name('students.request-list');
      Route::post('students/request', [StudentsController::class, 'storeRequest'])->name('students.request');
      Route::get('/students/profile', [StudentsController::class, 'profile']);
      Route::put('/students/profile', [StudentsController::class, 'update'])->name('student.update');
      
      //Staffs Dashboard
      Route::get('/staffs/dashboard', [SessionsController::class, 'staffDashboard'])->name('staffs.dashboard');
      Route::get('/staffs/requests', [StaffsController::class, 'requestList'])->name('staffs.requests');
      Route::get('approve/{id}', [StaffsController::class, 'approve'])->name('staffs.approve');
      Route::get('/staffs/approved-requests', [StaffsController::class, 'approvedList'])->name('staffs.approvedList');
      Route::get('tor/{id}', [StaffsController::class, 'process'])->name('staffs.tor');
      Route::post('staffs/saveTOR', [StaffsController::class, 'saveProcess'])->name('staffs.saveTOR');
      Route::get('/staffs/generate-tor', [PDFController::class, 'generatePDF']);

      //Admin Dashboard
      Route::get('/admin/dashboard', [SessionsController::class, 'adminDashboard'])->name('admins.dashboard');
      Route::post('/admin/addCourse-Subject', [AdminsController::class, 'storeCS'])->name('admins.store');
      //Logout
      Route::post('logout', [SessionsController::class, 'destroy']);
});

