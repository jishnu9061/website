@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Office Administration</a> /
    <a href="#" style="color: #1D1D50;">Office Payments Transfers</a>
</nav>
<br><br>
<div class="container">
<h4 id="hdtpa"><b>Office Payments Transfers</b></h4>
<br>

 
    <div class="card">

<div class="card-body">
    <form method="post" action="" id="form">
        @csrf

        <div class="row">

            <div class="col-md-6">
                <div class="mb-1">
                    <label for="username">Transaction Date</label>
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


        </div>
        <br>
        <div class="row">

            <div class="col-md-6">
                <div class="mb-1">
                    <label for="username">Account Type from</label>
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
        <div class="row">

            <div class="col-md-6">
                <div class="mb-1">
                    <label for="username">Currency</label>
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
        <div class="row">

            <div class="col-md-6">
                <div class="mb-1">
                    <label for="username">Ref No</label>
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
</div>

</div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped  order-list" id="table_field">
                        <thead>
                            <tr>
                                <th style="width:10%;">Valid Date</th>
                                <th style="width:20%;">Account Type</th>
                                <th style="width:20%;">Account To Allocate to</th>
                                <th style="width:27%;">Description</th>
                                <th style="width:10%;">Amount</th>
                                <th style="width:10%;">VAT</th>

                                <th>ADD</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td>

                                    <input type="date" class="form-control" name="valid" id="age">
                                </td>
                                <td>
                                    <select class="form-control select_group product" data-row-id="row_3"
                                        id="product_detailes" name="client[]" style="width:100%;">
                                        <option selected>Select</option>
                                        <option value="assets">Type 1</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control select_group product" data-row-id="row_3"
                                        id="product_detailes" name="file[]" style="width:100%;">
                                        <option selected>Select</option>
                                        <option value="assets">Type 1</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control select_group product" data-row-id="row_3"
                                        id="product_detailes" name="txn[]" style="width:100%;">
                                        <option selected>Select</option>
                                        <option value="assets">Type 1</option>
                                    </select>
                                </td>

                                <td>

                                    <input type="text" class="form-control" name="description" id="age">
                                </td>
                                <td>

                                    <input type="text" class="form-control" name="amount" id="age">
                                </td>

                                <td> <input type="button" class="btn btn-primary float:right;" id="add" value="ADD">
                                </td>
                                <input type="hidden" class="form-control" name="client" id="username" value=""
                                    placeholder="File" required>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

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
</form>


</div>










@endsection