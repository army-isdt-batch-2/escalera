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
                            <tr>
                        
                            
                                <th scope="row">#</th>
                                <td>Base Range</td>
                                <td>Monthly</td>
                                <td>Employee</td>
                                <td>Employer</td>
                                <td>Created</td>
                                <td>Updated</td>
                                <td>Action</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div> 
        </div>
    </div>  
@endsection                 