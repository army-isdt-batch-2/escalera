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
                    <form action="{{ URL::route('loans.create.save') }}" method="post" class="row g-3">
                                @csrf
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Employee ID</label>
                            <input type="text" class="form-control" name="employee_id" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="full_name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Designation</label>
                            <input type="text" class="form-control" name="designation" required>
                        </div>

                        <div class="col-md-4">
                            <div class="col-md-12">
                                <label for="inputState" class="form-label">Loan type</label>
                                <select id="inputState" class="form-select" name="loan_type" required>
                                    <option selected>Choose...</option>
                                    <option>Depart 1</option>
                                    <option>Depart 2</option>
                                    <option>Depart 3</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Loan Amount</label>
                                <input type="number" class="form-control" name="loan_amount" required>
                            </div>
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Months Payable</label>
                                <input type="number" class="form-control" name="months_payable" required>
                            </div>


                        </div>

                        <div class="col-md-8">
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Notes</label>

                                <textarea rows="7" class="form-control" name="notes" required></textarea>

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