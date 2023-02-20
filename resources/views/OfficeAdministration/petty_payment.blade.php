@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Office Administration</a> /
    <a href="#" style="color: #1D1D50;">Petty Cash Payments</a>
</nav>
<br><br>
<div class="container">

<h4 id="hdtpa"><b>Petty Cash Payments</b></h4>
<br>
    <br>
    <div class="card">

<div class="card-body">
        <form method="post" action="" id="form">
            @csrf

            <div class="row">

                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Date</label>
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


                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Branch</label>
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
                        <label for="username">Petty Cash A/C </label>
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
                        <label for="username">Expense Account </label>
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
                        <label for="username">Voucher Number</label>
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

                <div class="col-md-12">
                    <div class="mb-1">
                        <label for="username">Description</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <textarea class="form-control" rows="3"></textarea>
                            <div class="invalid-feedback" style="width: 100%;">
                                Incorporation is required
                            </div>
                        </div>
                    </div>
                </div>



            </div>


            <br>
            <div class="row">

                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="username">Net Amount</label>
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
                        <label for="username">VAT Amount</label>
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
<hr>
<br>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="username">Paid To</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <select name="event" id="cars">
                                <option>--Select--</option>
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
                        <label for="username">Invoice Numer</label>
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

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="username">Paid To (Name)</label>
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
                        <label for="username">Pin No</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <input type="text" class="form-control" name="user" id="age">
                            <div class="invalid-feedback" style="width: 100%;">
                                Incorporation is required
                            </div>
                        </div>
                        <button class="doc-button" style="margin-top:10px; width:23%;">Add Item</button>



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
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Execute</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                            onclick="history.back()">Cancel</button>
                    </div>
                </div>
</form>
</div>


            </div>










            @endsection