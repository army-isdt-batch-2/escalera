@php $active = 'department' @endphp
@extends('layout.main')
@section('title','Department')
@section('content')
    <div class="row align-items-center">
        <div class="col-12 mt-4"> 
            <div class="card">
                <div class="card-body row p-5">
                    <div class="col-10">
                        <br>
                        <h4>All Products</h4>
                        
                    </div>
                    
                    
                    <div class="col-2 text-end"> 
                        <a href="/department/create" class="btn btn-dark pull-right">Create</a>
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
                                <th class="text-muted" scope="col">#</th>
                                <th class="text-muted" scope="col">Department</th>
                                <th class="text-muted" scope="col">Created</th>
                                <th class="text-muted" scope="col">Updated</th>
                                <th class="text-muted" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $x)
                            <tr>
                                <th scope="row">{{ $x->id }}</th> 
                                <th scope="row">{{ $x->department }}</th>                    
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