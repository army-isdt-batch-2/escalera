@php $active = 'payslip' @endphp
@extends('layout.main')
@section('title','Create Payslip')
@section('content')

<div class="row align-items-center">
    <div class="col-12 mt-4">
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">
                    <br>
                    <h4>Create Payslip</h4>

                </div>


                <br><br>
                <hr>
                <div class="col-12">
                    <form action="/payslip/create/save" method="post" class="row g-3">
                                @csrf
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Cut-off start</label>
                            <input type="date" class="form-control" name="cutoff_start" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Cut-off end</label>
                            <input type="date" class="form-control" name="cutoff_end" required>
                        </div>

                        <hr>

                        <div class="col-12">
                            <button type="submit" class="btn btn-dark">Process</button>
                        </div>
                    </form>


                </div>



            </div>
        </div>
    </div>

</div>
@endsection