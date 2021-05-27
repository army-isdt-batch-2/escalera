@php $active = 'employees' @endphp
@extends('layout.main')
@section('title','Empoloyees')
@section('content')
    <div class="row align-items-center">
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body row p-5">
                    <div class="col-10">
                        <br>
                        <h4>All Employees</h4>
                        
                    </div>
                    
                    
                    <div class="col-2 text-end"> 
                        <a href="/employees/create" class="btn btn-dark pull-right">Create</a>
                    </div> 
                    
                    
                    
                    
                    <br><br>
                    <hr>

                    <div class="col-9">
                    </div>
                    <div class="col-3 text-end"> 
                        
                        <input type="text" class="form-control" placeholder="Search">
                        
                    </div> 

                    
                    <br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Employee ID</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Total Earnings</th>
                                <th scope="col">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($data as $x)
                            <tr>
                                <th scope="row">
                                    <img width="50px" src="https://w7.pngwing.com/pngs/773/503/png-transparent-emoticon-computer-icons-smiley-wink-smiley-miscellaneous-logo-smiley.png" alt="">
                                    <br>
                                    <small>Ryan Escalera</small>
                                </th>



                                <th scope="row">{{ $x->id }}</th> 
                                <th scope="row">{{ $x->photo }}</th>  
                                <th scope="row">{{ $x->first_name }}</th> 
                                <th scope="row">{{ $x->last_name }}</th>  
                                <th scope="row">{{ $x->middle_name }}</th> 
                                <th scope="row">{{ $x->contact_number }}</th>      
                                <th scope="row">{{ $x->address }}</th> 
                                <th scope="row">{{ $x->birthday }}</th>    
                                <th scope="row">{{ $x->gender }}</th> 
                                <th scope="row">{{ $x->department_id }}</th>  
                                <th scope="row">{{ $x->designation }}</th> 
                                <th scope="row">{{ $x->basic_rate_perday }}</th>      
                                <th scope="row">{{ $x->sss }}</th> 
                                <th scope="row">{{ $x->philhealth }}</th>
                                <th scope="row">{{ $x->pagibig }}</th> 
                                <th scope="row">{{ $x->tax }}</th>                                                    
                                <th scope="row">{{ $x->created_at }}</th> 
                                <th scope="row">{{ $x->updated_at }}</th> 
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>

                </div>
            </div> 
        </div>
    </div>  
@endsection                 