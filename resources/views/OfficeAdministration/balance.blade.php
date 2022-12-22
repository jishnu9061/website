@extends('layouts.hmsmain')
@section('content')
<div class="container">

    <h4 id="hdtpa"><b>Balance on Client Trust</b></h4>



    <br>
    <div style="text-align: center;">
        <input class="btn btn-primary" type="button" value="Today">
        <input class="btn btn-primary" type="button" value="This Week">
        <input class="btn btn-primary" type="button" value="Last Week">
        <input class="btn btn-primary" type="button" value="This Month">
        <input class="btn btn-primary" type="button" value="Last Month">
        <input class="btn btn-primary" type="button" value="This Quater ">
        <input class="btn btn-primary" type="button" value="Last Quater">
        <input class="btn btn-primary" type="button" value="This Year">
        <input class="btn btn-primary" type="button" value="Last Year">
    </div>





<br>
<br>
<div>
    <form method="post" action="" id="form">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="mb-1">
                    <label for="username">Transaction period</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="date" class="form-control" name="user" id="age">
                        <div class="invalid-feedback" style="width: 100%;">
                            Incorporation is required
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="mb-1">
                    <label for="username">To</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="date" class="form-control" name="user" id="age">
                        <div class="invalid-feedback" style="width: 100%;">
                            Incorporation is required
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <br>

        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm">

            </div>
            <div class="col-sm">
                <br>
                <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Search</button>
                <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                    onclick="history.back()">Cancel</button>
            </div>
        </div>



</div>








@endsection