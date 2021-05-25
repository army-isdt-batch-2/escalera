@php $active = 'department' @endphp
@extends('layout.main')
@section('title','Department Test')
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
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Description</th>
                            </tr>
                            </thead>
                        <tbody>
                            <tr>
                        
                            
                                <th scope="row">#</th>
                                <td>Department</td>
                                <td>Created</td>
                                <td>Updated</td>
                                <td>Action</td>

                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                               
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                               
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                               
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div> 
        </div>
    </div>  
@endsection                