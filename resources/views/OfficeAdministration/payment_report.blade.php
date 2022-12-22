@extends('layouts.hmsmain')
@section('content')
<div class="container">

    <h4 id="hdtpa"><b>Payment Reports</b></h4>



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
        <div class="continer" style="width:70%; margin-left: auto; margin-right: auto;">
            <form method="post" action="" id="form">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Type of payment</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="event" id="cars">
                                    <option>---select---</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Mode of payment</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="event" id="cars">
                                    <option>---select---</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                    </div>


                </div>

                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Bank Account</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="event" id="cars">
                                    <option>---select---</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Currency</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="event" id="cars">
                                    <option>---select---</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                    </div>


                </div>

                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Transaction period</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="user" id="age">
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
                                <input type="text" class="form-control" name="user" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
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
                <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Submit</button>
                <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                    onclick="history.back()">Cancel</button>
            </div>
        </div>



    </div>








    @endsection