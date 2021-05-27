@php $active = 'mandatory' @endphp
@extends('layout.main')
@section('title','Mandatory Deduction')
@section('content')
    <div class="row align-items-center">
        <div class="col-12 mt-4">
            
            <div class="card">
                <div class="card-body row p-5">
                    <div class="col-10">
                        <br>
                        <h4>All Mandatory Deduction</h4>
                        
                    </div>
                    
                    
                    <div class="col-2 text-end"> 
                        <a href="/mandatorydeduction/create" class="btn btn-dark pull-right">Create</a>
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
                                <th scope="col">Base Range</th>
                                <th scope="col">MOnthly</th>
                                <th scope="col">Employee</th>
                                <th scope="col">Monte</th>
                                <th scope="col">Total</th>
                                <th scope="col">Balance</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($data as $x)
                                    <tr>
                                        <th scope="row">{{ $x->id }}</th> 
                                        <th scope="row">{{ $x->contribution_type }}</th>  
                                        <th scope="row">{{ $x->base_range }}</th> 
                                        <th scope="row">{{ $x->monthly_contribution }}</th>  
                                        <th scope="row">{{ $x->employee_share }}</th> 
                                        <th scope="row">{{ $x->employer_share }}</th>                                                       
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