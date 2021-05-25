<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayslipController extends Controller
{
    public function payslip()
    {
        return view('payslip');
    }
}
