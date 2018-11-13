<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
   public function index() {

       $employees = Employee::all();

       return view('about', ['employees' => $employees]);

   }
}
