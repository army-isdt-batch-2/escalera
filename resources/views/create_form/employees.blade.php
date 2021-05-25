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
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Contact</label>
                                <input type="telephone" class="form-control" id="inputPassword4">
                            </div>

                                <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Birthday</label>
                                <input type="date" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-md-12">
                                <label for="inputState" class="form-label">Gender</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        
                        </div>
                        <div class="col-md-8">
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Address</label>
                                
                                <textarea rows="7" class="form-control"></textarea>

                            </div>

                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Department</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>Depart 1</option>
                                <option>Depart 2</option>
                                <option>Depart 3</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Designation</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Basic Rate Per Day</label>
                            <input type="number" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">PhilHealth Contribution Table</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>1. P 10,000 - Below - (P 275.00 monthly)</option>
                                <option>2. P 10,000 - Above - (P 575.00 monthly)</option>
                                <option>1. P Exempted123 - (P 012 monthly)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">SSS Contribution Table</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>Depart 1</option>
                                <option>Depart 2</option>
                                <option>Depart 3</option>
                                <option>Depart 3</option>
                                <option>Depart 3</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">PAGIBIG Contribution Table</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>Depart 1</option>
                                <option>Depart 2</option>
                                <option>Depart 3</option>
                                <option>Depart 3</option>
                                <option>Depart 3</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Income Tax Table</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>Depart 1</option>
                                <option>Depart 2</option>
                                <option>Depart 3</option>
                                <option>Depart 3</option>
                                <option>Depart 3</option>
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