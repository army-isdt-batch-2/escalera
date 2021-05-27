<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Redirect;

class DepartmentController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
        $this->request =$request;

    }
    
    public function department()
    {
        return view('department')->with([
            'data' => Department::all()
        ]);
    }
    public function save()
    {
        // save to database
        Department::create(
            //query - get all data
            $this->request->except('_token')

        );

        return Redirect::route('department');
    }
    public function department_create()
    {
       return view('create_form.departments');                

    }
    
}
