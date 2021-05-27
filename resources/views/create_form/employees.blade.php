@php $active = 'employees' @endphp
@extends('layout.main')
@section('title','Create Employee')
@section('content')

<div class="row align-items-center">
    <div class="col-12 mt-4"> 
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">
                    <br>
                    <h4>Create Employees</h4>

                </div>


                <br><br>
                <hr>
                <div class="col-12">
                    <form action="{{ URL::route('employees.create.save') }}" method="post" class="row g-3">
                                @csrf
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Photo</label>
                            <input type="file" class="form-control" name="photo" required>
                        </div>
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="first_name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="last_name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" name="middle_name" required>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Contact</label>
                                <input type="telephone" class="form-control" name="contact_number" required>
                            </div>

                                <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Birthday</label>
                                <input type="date" class="form-control" name="birthday" required>
                            </div>
                            <div class="col-md-12">
                                <label for="inputState" class="form-label">Gender</label>
                                <select class="form-control" name="gender" required>
                                    <option selected>Choose...</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        
                        </div>
                        <div class="col-md-8">
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Address</label>
                                
                                <textarea rows="7" class="form-control" name="address"></textarea>

                            </div>

                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Department</label>
                            <select id="inputState" class="form-select" name="deparment_id" required>
                                <option value="0">Choose...</option>
                                <option value="1">Depart 1</option>
                                <option value="2">Depart 2</option>
                                <option value="3">Depart 3</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Designation</label>
                            <input type="text" class="form-control" name="designation" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Basic Rate Per Day</label>
                            <input type="number" class="form-control" name="basic_rate_perday" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">PhilHealth Contribution Table</label>
                            <select id="inputState" class="form-select" name="philhealth" required>
                                <option value="0">Choose...</option>
                                <option value="1">1. P 10,000 - Below - (P 275.00 monthly)</option>
                                <option value="2">2. P 10,000 - Above - (P 575.00 monthly)</option>
                                <option value="3">1. P Exempted123 - (P 012 monthly)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">SSS Contribution Table</label>
                            <select id="inputState" class="form-select" name="sss" required>
                                <option value="0">Choose...</option>
                                <option value="1">Depart 1</option>
                                <option value="2">Depart 2</option>
                                <option value="3">Depart 3</option>
                                
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">PAGIBIG Contribution Table</label>
                            <select id="inputState" class="form-select" name="pagibig" required>
                                <option value="0">Choose...</option>
                                <option value="1">Depart 1</option>
                                <option value="2">Depart 2</option>
                                <option value="3">Depart 3</option>
                              
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Income Tax Table</label>
                            <select id="inputState" class="form-select" name="tax" required>
                                <option value="0">Choose...</option>
                                <option value="1">Depart 1</option>
                                <option value="2">Depart 2</option>
                                <option value="3">Depart 3</option>
                           
                            </select>
                        </div>
                        <div class="col-12"></div>
                        <br><br>
                        <hr>
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