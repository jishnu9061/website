@extends('layouts.hmsmain')
@section('content')
@if(Session::has('attendanceuploded'))

<div class="alert alert-dark" role="alert">
    {{ Session::get('attendanceuploded')}}
</div>

@endif

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Attendance CSV</b></h4>
    <br>
   

    <div class="card">

        <div class="card-body">

            <form method="POST" action="{{route('importProject')}}" enctype="multipart/form-data">
                @csrf

                <div class="row" id="data">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <label>Upload Csv</label>
                        <input type="file" class="form-control" id="months" name="file" placeholder="Upload Csv">
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>

                <br>
                <div class="row" id="data">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <button type="submit" id="submitloan" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-primary" onclick="history.back()">Cancel</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection