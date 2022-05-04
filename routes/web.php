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
      Route::post('/students/profileUpdate', [StudentsController::class, 'update'])->name('student.update');
      Route::get('/students/about', [StudentsController::class, 'about']);
      
      //Staffs Dashboard
      Route::get('/staffs/dashboard', [SessionsController::class, 'staffDashboard'])->name('staffs.dashboard');
      Route::get('/staffs/requests', [StaffsController::class, 'requestList'])->name('staffs.requests');
      Route::get('approve/{id}', [StaffsController::class, 'approve'])->name('staffs.approve');
      Route::post('approve/request', [StaffsController::class, 'approveRequest'])->name('staffs.approveRequest');
      Route::get('/staffs/approved-requests', [StaffsController::class, 'approvedList'])->name('staffs.approvedList');
      Route::get('/staffs/approved-requests-rush', [StaffsController::class, 'approvedListRush'])->name('staffs.approvedListRush');
      Route::get('tor/{id}', [StaffsController::class, 'process'])->name('staffs.tor');
      Route::post('staffs/saveTOR', [StaffsController::class, 'saveProcess'])->name('staffs.saveTOR');
      Route::get('staffs/records', [StaffsController::class, 'records'])->name('staffs.records');
      Route::get('view/tor/{id}', [StaffsController::class, 'show'])->name('staffs.showtor');
      Route::get('staffs/tor/{id}', [StaffsController::class, 'editTor'])->name('staffs.editTor');
      Route::get('staffs/about', [StaffsController::class, 'about']);
      Route::get('staffs/profile', [StaffsController::class, 'profile']);
      Route::post('staffs/profileUpdate', [StaffsController::class, 'updateProfile'])->name('staffs.profileUpdate');
      Route::get('/staffs/generate-tor', [PDFController::class, 'generatePDF'])->name('staffs.generate');

      //Admin Dashboard
      Route::get('/admin/dashboard', [SessionsController::class, 'adminDashboard'])->name('admins.dashboard');
      Route::post('/admin/addCourse-Subject', [AdminsController::class, 'storeCS'])->name('admins.store');
      Route::get('/admin/addCourse&Subjects', [AdminsController::class, 'create']);
      Route::get('admin/about', [AdminsController::class, 'view']);
      Route::get('admin/profile', [AdminsController::class, 'profile']);
      //Logout
      Route::post('logout', [SessionsController::class, 'destroy']);
});

Route::get('admin/GradesAndRemarks', [AdminsController::class, 'add']);
Route::post('admin/addGradesAndRemarks', [AdminsController::class, 'addGrades'])->name('admin.grades');