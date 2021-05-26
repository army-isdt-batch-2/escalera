<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payslip;
use Redirect;

class PayslipController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
        $this->request =$request;

    }

    public function payslip()
    {
        return view('payslip');
    }
    
    public function save()
    {
        // save to database
        $data = $this->request->except('_token');
        //model
        Payslip::create($data);

        return Redirect::route('payslip');
    }
}

