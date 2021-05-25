@php $active = 'loans' @endphp
@extends('layout.main')
@section('title','Create Loans')
@section('content')

<div class="row align-items-center">
    <div class="col-12 mt-4">
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">
                    <br>
                    <h4>Apply Leaves</h4>

                </div>


                <br><br>
                <hr>
                <div class="col-12">
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Employee ID</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Designation</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>

                        <div class="col-md-4">
                            <div class="col-md-12">
                                <label for="inputState" class="form-label">Loan type</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>Depart 1</option>
                                    <option>Depart 2</option>
                                    <option>Depart 3</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Loan Amount</label>
                                <input type="number" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Months Payable</label>
                                <input type="number" class="form-control" id="inputPassword4">
                            </div>


                        </div>

                        <div class="col-md-8">
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Notes</label>

                                <textarea rows="7" class="form-control"></textarea>

                            </div>

                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark">Apply</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection