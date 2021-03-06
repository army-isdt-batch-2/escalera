@php $active = 'department' @endphp
@extends('layout.main')
@section('title','Create Department')
@section('content')
    
        <div class="row align-items-center">
            <div class="col-12 mt-4"> 
                <div class="card">
                    <div class="card-body row p-5">
                        <div class="col-10">
                            <br>
                            <h4>Create Department</h4>
                            
                        </div>
                        
                
                        <br><br>
                        <hr>
                        <div class="col-12">
                            <form action="{{ URL::route('department.create.save') }}" method="post" class="row g-3">
                            @csrf
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Department</label>
                                    <input type="text" class="form-control" name="department" required>
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn btn-dark">Save</button>
                                </div>
                            </form>
                            
                        </div>

                        

                    </div>
                </div>
            </div>
        </div>
@endsection                