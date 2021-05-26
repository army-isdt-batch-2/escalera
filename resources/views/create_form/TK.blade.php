@php $active = 'time' @endphp
@extends('layout.main')
@section('title','Create Timekeeping')
@section('content')

<div class="row align-items-center">
    <div class="col-12 mt-4">
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">
                    <br>
                    <h4>Add Attendance Record</h4>

                </div>


                <br><br>
                <hr>
                <div class="col-12">
                    <form action="/department/create/save" method="post" class="row g-3">
                                @csrf
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Attendance Date</label>
                            <input type="date" class="form-control" name="date" required>
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