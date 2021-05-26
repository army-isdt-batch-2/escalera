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
        return view('employees');
    }
    public function save()
    {
        // save to database
        $data = $this->request->except('_token');
        //model
        Employees::create($data);

        return Redirect::route('employees');
    }
}
