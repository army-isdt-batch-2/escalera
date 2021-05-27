<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use Redirect;

class EmployeesController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
        $this->request =$request;

    }

    public function employees()
    {
        return view('employees')->with([
            'data' => Employees::all()
        ]);
    }
    public function save()
    {
        // save to database
        Employees::create(
            //query - get all data
            $this->request->except('_token')

        );

        return Redirect::route('employees');
    }
    public function employees_create()
    {
       return view('create_form.employees');                

    }
}
