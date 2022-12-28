@extends('layouts.hmsmain')
@section('content')


{{-- heading --}}
<h4 id="hdtpa"><b>View Billable Items</b></h4>
<br><br>

<div class="text-center">
    <div style="padding:1px;">
        <input class="btn btn-primary" type="button" value="Today">
        <input class="btn btn-primary" type="button" value="This Week">
        <input class="btn btn-primary" type="button" value="Last week">
        <input class="btn btn-primary" type="button" value="This Month">
        <input class="btn btn-primary" type="button" value="Last Month">
        <input class="btn btn-primary" type="button" value="This Quarter">
        <input class="btn btn-primary" type="button" value="Last Quarter">
        <input class="btn btn-primary" type="button" value="This Year">
        <input class="btn btn-primary" type="button" value="Last Year">


    </div>
</div>
<br>



<div class="row">


    <div class="col-md-12 order-md-1">

        <form method="post" action="" id="form">
            @csrf

            <div class="row">


                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Client</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <select name="country" id="cars">
                                <option value="volvo"></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">File</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <select name="country" id="cars">
                                <option value="volvo"></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Transaction Period</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="date" class="form-control" name="name" value="" id="confirm_password">
                            <div class="invalid-feedback" style="width: 100%;">
                                Password is required.
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <br>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                    </div>
                    <div class="col-sm">
                    </div>
                    <div class="col-sm">
                        <button type="submit" class="btn btn-primary float:right" style="width:45%">Save</button>
                        <button type="button" class="btn btn-primary float:left" style="width:45%"
                            onclick="history.back()">Close</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>


@endsection