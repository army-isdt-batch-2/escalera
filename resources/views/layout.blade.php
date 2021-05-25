@php $active = 'layout' @endphp
@extends('layout.main')
@section('title','Layout Test')
@section('content')
    <div class="row align-items-center">
        <div class="col-12 mt-4">
            
            <div class="card">
                <div class="card-body row">
                    <div class="col-10">
                    
                        <h4>All Records</h4>
                        
                    </div>
                    
                    
                    <div class="col-2 text-end"> 
                        <button class="btn btn-dark pull-right">Create</button>
                    </div> 
                    
                    
                    
                    
                    <br><br>
                    <hr>

                    <div class="col-9">
                    </div>
                    <div class="col-3 text-end"> 
                        
                        <input type="text" class="form-control" placeholder="Search">
                        
                    </div> 

                    

                    <table class="table">
                        <thead>
                            
                        </thead>
                        <tbody>
                            <tr>
                        
                            
                                <th scope="row">#</th>
                                <td>First</td>
                                <td>Last</td>
                                <td>Handle</td>

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