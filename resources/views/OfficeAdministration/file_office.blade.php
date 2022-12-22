@extends('layouts.hmsmain')
@section('content')
<div class="container">

    <h4 id="hdtpa"><b>File - Office Journals</b></h4>



    <br>

    <br>

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


        <br>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped  order-list" id="table_field">
                    <thead>
                        <tr>
                            <th>Valid Date</th>
                            <th>Client</th>
                            <th>File</th>
                            <th>Txn Type</th>
                            <th>Discription</th>
                            <th>Amount</th>

                            <th>ADD</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td style="width:10%;">

                                <input type="date" class="form-control" name="valid" id="age">
                            </td>
                            <td style="width:25%;">
                                <select class="form-control select_group product" data-row-id="row_3"
                                    id="product_detailes" name="client[]" style="width:100%;">
                                    <option selected>Select</option>
                                    <option value="assets">Type 1</option>
                                </select>
                            </td>
                            <td style="width:25%;">
                                <select class="form-control select_group product" data-row-id="row_3"
                                    id="product_detailes" name="file[]" style="width:100%;">
                                    <option selected>Select</option>
                                    <option value="assets">Type 1</option>
                                </select>
                            </td>
                            <td style="width:25%;">
                                <select class="form-control select_group product" data-row-id="row_3"
                                    id="product_detailes" name="txn[]" style="width:100%;">
                                    <option selected>Select</option>
                                    <option value="assets">Type 1</option>
                                </select>
                            </td>

                            <td style="width:35%;">

                                <input type="text" class="form-control" name="description" id="age">
                            </td>
                            <td style="width:15%;">

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