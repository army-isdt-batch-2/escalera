<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deduction;
use Redirect;


class MDController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
        $this->request =$request;

    }
    public function mandatorydeduction()
    {
        return view('MD');
    }
    public function save()
    {
        // save to database
        $data = $this->request->except('_token');
        //model
        Leaves::create($data);

        return Deduction::route('mandatorydeduction');
    }
    
}
