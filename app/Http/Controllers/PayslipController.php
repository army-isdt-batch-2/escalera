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
        return view('payslip')->with([
            'data' => Payslip::all()
        ]);
    }
    
    public function save()
    {
        // save to database
        Payslip::create(
            //query - get all data
            $this->request->except('_token')

        );

        return Redirect::route('payslip');
    }
    public function payslip_create()
    {
       return view('create_form.payslip');                

    }
    public function payslip_view()
    {
       return view('view.payslip');                

    }
}

