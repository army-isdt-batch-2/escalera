@php $active = 'leaves' @endphp
@extends('layout.main')
@section('title','Leaves')
@section('content')
    <div class="row align-items-center">
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body row p-5">
                    <div class="col-10">
                        <br>
                        <h4>All Leaves</h4>
                        
                    </div>
                    
                    
                    <div class="col-2 text-end"> 
                        <a href="/leaves/create" class="btn btn-dark pull-right">Create</a>
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
                                <th scope="col">Leave Type</th>
                                <th scope="col">Start</th>
                                <th scope="col">End ID Earnings</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($data as $x)
                                <tr>
                                    <th scope="row">{{ $x->id }}</th> 
                                    <th scope="row">{{ $x->employee_id }}</th>  
                                    <th scope="row">{{ $x->full_name }}</th> 
                                    <th scope="row">{{ $x->designation }}</th>  
                                    <th scope="row">{{ $x->leave_type }}</th> 
                                    <th scope="row">{{ $x->start }}</th>      
                                    <th scope="row">{{ $x->end }}</th> 
                                    <th scope="row">{{ $x->notes }}</th>                                                       
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