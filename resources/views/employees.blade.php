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
                            <tr>
                        
                            
                                <th scope="row">#</th>
                                <td>Employee ID</td>
                                <td>Gender</td>
                                <td>Contact</td>
                                <td>Total Earnings</td>
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