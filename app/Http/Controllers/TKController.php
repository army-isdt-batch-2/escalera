<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TKController extends Controller
{
    public function timekeeping()
    {
        return view('TK');
    }
}
