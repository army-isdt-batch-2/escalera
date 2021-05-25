@php $active = 'mandatory' @endphp
@extends('layout.main')
@section('title','Create Mandatory Deduction')
@section('content')

<div class="row align-items-center">
    <div class="col-12 mt-4">
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">
                    <br>
                    <h4>Add Contribution Table</h4>

                </div>


                <br><br>
                <hr>
                <div class="col-12">
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Contribution Type</label>
                            <select id="inputState" class="form-select">
                                <option selected>Tax</option>
                                <option>SSS</option>
                                <option>PhilHealth</option>
                                <option>Pagibig</option>
                            </select>
                        </div>
                        <div class="col-md-8">

                            <label for="inputPassword4" class="form-label">Base Range</label>
                            <input type="text" class="form-control" id="inputPassword4">

                        </div>

                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Monthly Contribution</label>
                            <input type="number" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Employee Share</label>
                            <input type="number" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Employer Share</label>
                            <input type="number" class="form-control" id="inputPassword4">
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