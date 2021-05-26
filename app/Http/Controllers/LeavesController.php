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
        return view('leaves');
    }
    public function save()
    {
        // save to database
        $data = $this->request->except('_token');
        //model
        Leaves::create($data);

        return Redirect::route('leaves');
    }
}
