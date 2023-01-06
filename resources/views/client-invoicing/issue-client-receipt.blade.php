@extends('layouts.hmsmain')
@section('content')
<div class="container">

    {{-- heading --}}
    <h4 id="hdtpa"><b>Issue Client Receipt</b></h4>
    <br><br>




    <div class="row">
        <form method="post" action="" id="form">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Transaction Date</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="date" class="form-control" name="" id="username" value="">
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Client</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <select name="" id="cars">
                                <option value="volvo">Choose a Client</option>
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
                            <select name="" id="cars">
                                <option value="volvo">Choose a file</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Branch</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <select name="" id="cars">
                                <option value="volvo">Nairobi</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Mode Of Receipt</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <select name="" id="cars">
                                <option value="volvo">Select receipt mode</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Amount Type</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <select name="" id="cars">
                                <option value="volvo">---select---</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Account to Allocate to</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <select name="" id="cars">
                                <option value="volvo"></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Currency</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <select name="" id="cars">
                                <option value="volvo">KES</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Exchange Rate</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="" id="username" value="">
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Next Receipt No</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="" id="username" value="">
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Received From</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="" id="username" value="">
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <table class="table table-bordered" id="new-item">
                <thead>
                    <tr>
                        <th class="text-center">Items</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="data">
                        <td scope="row" class="text-center" id="medicine_name_1"> <input type="text"
                                class="form-control" name="" id="username" value=""></td>
                        <td scope="row" class="text-center" id="medicine_name_1"> <input type="text"
                                class="form-control" name="" id="username" value=""></td>
                        <td scope="row" class="text-center" id="medicine_name_1"> <input type="text"
                                class="form-control" name="" id="username" value=""></td>
                        <td scope="row" class="text-center" id="medicine_name_1"> <button type="submit"
                                class="btn btn-primary float:right;" Style="width:100%;">Add</button></td>
                    </tr>
                </tbody>
            </table>


            <div class="row">
                <div class="col-sm">

                </div>
                <div class="col-sm">

                </div>
                <div class="col-sm">
                    <br>
                    <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Submit</button>
                    <button type="button" class="btn btn-primary float:right;" Style="width:45%;"
                        onclick="history.back()">Cancel</button>

                </div>
            </div>
    </div>





</div>

@endsection