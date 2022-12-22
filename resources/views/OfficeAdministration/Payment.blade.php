@extends('layouts.hmsmain')
@section('content')
<div class="container">

    <h4 id="hdtpa"><b>File Payments & Transfer</b></h4>



    <br>

    <br>
    <div style="text-align: center;">
        <input class="btn btn-primary" type="button" value="View File Balance">
        <input class="btn btn-primary" type="button" value="View File Details">
       
    </div>
    <br>
    <br>

    <form method="post" action="" id="form">
        @csrf

        <div class="row">

            <div class="col-md-6">
                <div class="mb-1">
                    <label for="username"> Date</label>
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
                    <label for="username">Type Of Transaction</label>
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
                    <label for="username">Item Type</label>
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
                    <label for="username">Client</label>
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

            <div class="col-md-4">
                <div class="mb-1">
                    <label for="username">File</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <select name="event" id="cars">
                            <option>KES</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="mb-1">
                    <label for="username">Account Type</label>
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

            <div class="col-md-4">
                <div class="mb-1">
                    <label for="username">Account To Withdraw from</label>
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
        <hr class="style1">
        <br>
        <div class="row">

        <div class="col-md-6">
                <div class="mb-1">
                    <label for="username">Current</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <select name="event" id="cars">
                            <option>KES</option>
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
                    <label for="username">Exchange Rate</label>
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


        <br>
        <hr class="style1">
        <br>
        <div class="row">

<div class="col-md-6">
        <div class="mb-1">
            <label for="username">Description</label>
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
            <label for="username">Authorised Amount</label>
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

<br>
        <hr class="style1">
        <br>
        <div class="row">

<div class="col-md-6">
        <div class="mb-1">
            <label for="username">Reference No</label>
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
            <label for="username">Receiver</label>
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
<br>
<br>

<div class="row">
    <a href="" class="fa fa-share" style="font-size:12px;"><span class="m-1"></span>Send To Billing</a>
</div>
       


        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm">

            </div>
            <div class="col-sm">
                <br>
                <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Execute</button>
                <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                    onclick="history.back()">Cancel</button>
            </div>
        </div>



</div>










@endsection