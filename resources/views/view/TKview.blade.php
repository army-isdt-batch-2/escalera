@php $active = 'time' @endphp
@extends('layout.main')
@section('title','Timekeeping View')
@section('content')
    <div class="row align-items-center">
        <div class="col-12 mt-4">
            
            <div class="card">
                <div class="card-body row p-5">
                    <div class="col-10">
                        <br>
                        <h4>Attendance for May 25, 2021</h4>
                        
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
                            <th class="text-muted" scope="col"></th>
                            <th class="text-muted" scope="col">Reg In</th>
                            <th class="text-muted" scope="col">Reg Out</th>
                            <th class="text-muted" scope="col">Reg Hr</th>
                            <th class="text-muted" scope="col">OT Hr</th>
                            <th class="text-muted" scope="col">Night Diff Hr</th>
                            <th class="text-muted" scope="col">Early Hr</th>
                            <th class="text-muted" scope="col">Tardy Hr</th>
                            <th class="text-muted" scope="col">Double Pay</th>
                            <th class="text-muted" scope="col"></th>
                               
                            </tr>
                            
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <img width="50px" src="https://w7.pngwing.com/pngs/773/503/png-transparent-emoticon-computer-icons-smiley-wink-smiley-miscellaneous-logo-smiley.png" alt="">
                                    <br>
                                    <small>Ryan Escalera</small>
                                </th>
                                <td>
                                    <input type="time" class="form-control">
                                </td>
                                <td>
                                    <input type="time" class="form-control">
                                </td>
                                <td>0hrs</td>
                                <td>0hrs</td>
                                <td>0hrs</td>
                                <td>0hrs</td>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-dark">Save</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div> 
        </div>
    </div>  
@endsection                 