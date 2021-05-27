<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leaves;
use Redirect;


class LeavesController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
        $this->request =$request;

    }

    public function leaves()
    {
        return view('leaves')->with([
            'data' => Leaves::all()
        ]);
    }
    public function save()
    {
        // save to database
        Leaves::create(
            //query - get all data
            $this->request->except('_token')

        );

        return Redirect::route('leaves');
    }
    public function leaves_create()
    {
       return view('create_form.leaves');                

    }
}
