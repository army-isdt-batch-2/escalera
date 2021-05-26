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
        return view('department');
    }
    public function save()
    {
        // save to database
        $data = $this->request->except('_token');
        //model
        Department::create($data);

        return Redirect::route('department');
    }
    
}
