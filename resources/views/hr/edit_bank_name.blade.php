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
                    <button type="button" class="btn btn-primary float:right;" onclick="history.back();">Cancel</button>
                </div>

                <div class="form-group col-md-4">
                </div>
            </div>






            <!-- 
             <div class="row">
                <input type="hidden" name="id" value="{{$edit_bank->id}}">
                <div class="col-md-12">
                    <div class="mb-1">
                        <label for="username">Bank Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <input type="text" id="w3review" rows="4" cols="50" class="form-control"
                                value="{{$edit_bank->bank_name}}" name="bank_name" id="username">

                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="mb-1">
                        <label for="username">Branch</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <input type="text" class="form-control" value="{{$edit_bank->branch}}" name="branch"
                                id="username">

                            <br>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row text-center">

                <div class="col-sm">
                    <br>
                    <button type="submit" class="btn btn-primary float:right;">Update</button>
                    <button type="button" class="btn btn-primary float:right;" onclick="history.back();">Cancel</button>
                </div>
            </div> -->

        </form>
    </div>


    @endsection