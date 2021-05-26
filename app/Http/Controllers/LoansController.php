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
        return view('loans');
    }
    public function save()
    {
        // save to database
        $data = $this->request->except('_token');
        //model
        Loans::create($data);

        return Redirect::route('loans');
    }
    
}
