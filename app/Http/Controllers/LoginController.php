<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
       return view('login');                

    }
    public function table()
    {
       return view('table');                

    }
    public function layout()
    {
       return view('layout');                

    }
    public function form()
    {
       return view('form');                

    }
    public function department_create()
    {
       return view('create_form.departments');                

    }
    public function employees_create()
    {
       return view('create_form.employees');                

    }
    public function loans_create()
    {
       return view('create_form.loans');                

    }
    public function leaves_create()
    {
       return view('create_form.leaves');                

    }
    public function MD_create()
    {
       return view('create_form.MD');                

    }
    public function payslip_create()
    {
       return view('create_form.payslip');                

    }
    public function TK_create()
    {
       return view('create_form.TK');                

    }
    public function TK_view()
    {
       return view('view.TKview');                

    }
    public function payslip_view()
    {
       return view('view.payslip');                

    }
}
