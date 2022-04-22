<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Employee;
use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\Hash;

class EmployeeRegistrationController extends Controller
{
    public function create(){
        return view ('sessions.register');
    }

    public function store(StoreEmployeeRequest $request){
        try {
            $id = IdGenerator::generate(['table'=>'employees', 'field'=>'employee_id', 'length'=>'10', 'prefix'=>date('ym')]);

            $employee = Employee::create(array_merge($request->validated(), ['employee_id'=> $id]));

            User::create(array_merge($request->validated(), ['password' => Hash::make('password'), 'employee_id' => $employee->id]));
        } catch (Exception $exception) {
            return $exception->getMessage();
        }
    }
}
