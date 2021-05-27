<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loans;
use Redirect;


class LoansController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
        $this->request =$request;

    }
    public function loans()
    {
        return view('loans')->with([
            'data' => Loans::all()
        ]);
    }
    public function save()
    {
        // save to database
        Loans::create(
            //query - get all data
            $this->request->except('_token')

        );
        return Redirect::route('loans');
    }
    public function loans_create()
    {
       return view('create_form.loans');                

    }
    
}
