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
        return view('MD')->with([
            'data' => Deduction::all()
        ]);
    }
    public function save()
    {
        // save to database
        Deduction::create(
            //query - get all data
            $this->request->except('_token')

        );

        return Deduction::route('mandatorydeduction');
    }
    public function MD_create()
    {
       return view('create_form.MD');                

    }
    
}
