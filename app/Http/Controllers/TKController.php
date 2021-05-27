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
        return view('TK')->with([
            'data' => Timekeeping::all()
        ]);
    }
    public function save()
    {
        // save to database
        Timekeeping::create(
            //query - get all data
            $this->request->except('_token')

        );

        return Redirect::route('timekeeping');
    }
    public function TK_create()
    {
       return view('create_form.TK');                

    }
    public function TK_view()
    {
       return view('view.TKview');                

    }
}
