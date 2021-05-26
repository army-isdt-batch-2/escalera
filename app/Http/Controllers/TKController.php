<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timekeeping;
use Redirect;

class TKController extends Controller
{   
    protected $request;
    
    public function __construct(Request $request)
    {
        $this->request =$request;

    }
    public function timekeeping()
    {
        return view('TK');
    }
    public function save()
    {
        // save to database
        $data = $this->request->except('_token');
        //model
        Timekeeping::create($data);

        return Redirect::route('timekeeping');
    }
}
