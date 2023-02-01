@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="{{url('practice_area#')}}" style="color: #1D1D50;">Practice Area</a> /
    <a href="#" style="color: #1D1D50;">Edit Practice Area</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Edit Practice Area</b></h4>
    <br>
    <br>

    <div class="card">

        <div class="card-body">

            <form method="post" action="{{url('')}}" id="form">
                @csrf
                <div class="form-row">
                    <input type="hidden" name="id" value="">
                    <div class="form-group col-md-4">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Practice Area</label>
                        <input type="text" class="form-control" id="w3review" value="Practice Area" name="bank_name"
                            id="username">
                    </div>

                    <div class="form-group col-md-4">
                    </div>
                </div>

                <br>

                <div class="form-row text-center">
                    <div class="form-group col-md-4">
                    </div>

                    <div class="form-group col-md-4">
                        <button type="submit" class="btn btn-primary float:right;">Update</button>
                        <button type="button" class="btn btn-primary float:right;"
                            onclick="history.back();">Cancel</button>
                    </div>

                    <div class="form-group col-md-4">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>




@endsection