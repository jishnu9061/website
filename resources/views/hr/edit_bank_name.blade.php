@extends('layouts.hmsmain')
@section('content')
<html>

<head>

</head>

<body>

    <div class="container">
        <br>
        <div>
            <h4 id="hdtpa"><b>Update Bank</b></h4>
            <br>
        </div>

        <div class="card">

            <div class="card-body">


                <form method="post" action="{{url('update_bank')}}" id="form">
                    @csrf
                    <div class="form-row">
                        <input type="hidden" name="id" value="{{$edit_bank->id}}">
                        <div class="form-group col-md-4">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Bank Name</label>
                            <input type="text" class="form-control" id="w3review" value="{{$edit_bank->bank_name}}"
                                name="bank_name" id="username">

                            <br>

                            <label for="inputEmail4">Branch</label>
                            <input type="text" class="form-control" id="inputEmail4" value="{{$edit_bank->branch}}"
                                name="branch" id="username">

                        </div>

                        <div class="form-group col-md-4">
                        </div>
                    </div>

                    <br>

                    <div class="form-row">
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