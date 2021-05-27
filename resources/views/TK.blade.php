@php $active = 'time' @endphp
@extends('layout.main')
@section('title','Timekeeping')
@section('content')
    <div class="row align-items-center">
        <div class="col-12 mt-4">
            
            <div class="card">
                <div class="card-body row p-5">
                    <div class="col-10">
                        <br>
                        <h4>All Timekeeping</h4>
                        
                    </div>
                    
                    
                    <div class="col-1 text-end"> 
                        <a href="/timekeeping/create" class="btn btn-dark pull-right">Create</a>
                    </div> 
                    <div class="col-1 text-end"> 
                        <a href="/timekeeping/view" class="btn btn-dark pull-right">View</a>
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
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                                
                               
                            </tr>
                            
                        </thead>
                        <tbody>
                                 @foreach($data as $x)
                                    <tr>
                                        <th scope="row">{{ $x->id }}</th> 
                                        <th scope="row">{{ $x->date }}</th>                                                       
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