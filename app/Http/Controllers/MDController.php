<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MDController extends Controller
{
    public function mandatorydeduction()
    {
        return view('MD');
    }
}