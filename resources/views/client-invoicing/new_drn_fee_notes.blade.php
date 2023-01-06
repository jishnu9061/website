@extends('layouts.hmsmain')
@section('content')

<div class="container">
    {{-- heading --}}
    <h4 id="hdtpa"><b>New Fee Note</b></h4>
    <br><br>

    <div class="row">
        <div class="col-md-12">
            <form method="post" action="" id="form">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Document Type:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                    <option>---select---</option>
                                    <option>Fee Note</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Fee Note Number:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" class="form-control" name="" id="username" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Fee Note Date:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="date" class="form-control" name="" id="username" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Client:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                    <option>choose a client...</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">File:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                    <option>choose a file...</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Invoice sent to?:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                    <option>---Select---</option>
                                    <option>Main Client</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr class="mb-4">

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Billing Information:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea rows="4" cols="50" name="comment" form="" class="form-control"
                                    type="text"></textarea>
                                <!-- <input type="text" class="form-control" name="" id="username"style="height:100px;border: 1px solid rgb(13, 1, 56);" value="" required> -->
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr class="mb-4">

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Date Due :</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="date" class="form-control" name="" id="username" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Currency:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                    <option>---select---</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Exchange Rate:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" class="form-control" name="" id="username" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">User Assigned:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                    <option>---select---</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Partner to Approve:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                    <option>---select---</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">With holding Tax:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                    <option>---Select---</option>
                                    <option>Main Client</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Without holding VAT:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                    <option>---select---</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Bank Account:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                    <option>---select---</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Mode of Delivery:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                    <option>---Select---</option>
                                    <option>Main Client</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr class="mb-4">
                <br>


                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">To the attention of:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="" id="username" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Subject/Title:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="" id="username" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="container text-center">

                    <span>
                        <h4><b> Fee Note Items </b></h4>
                    </span>

                </div>
                <br>


                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Item Type:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                    <option>---select---</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Item Category:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                    <option>---select category---</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Amount:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" class="form-control" name="" id="username" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Particulars of Service Rendered:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea rows="4" cols="50" name="comment" form="" class="form-control"
                                    type="text"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">V.A.T:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                    <option>---select---</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
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
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">New
                                Item</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;">Delete
                                Item</button>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-13">
                        <div class="mb-1">
                            <label for="username">Notes:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea rows="4" cols="50" name="comment" form="" class="form-control"
                                    type="text"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
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
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save Fee
                            Note</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                            onclick="history.back()">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



</div>


@endsection