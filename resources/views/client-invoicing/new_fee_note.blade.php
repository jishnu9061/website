@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <div class="">


        <div>
            <div class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>
                        New Fee Note</u></b></span></div><br><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">

        </div>
    </div>
    <br>
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
                                <input type="text" class="form-control" name="" id="username"style="height:100px;border: 1px solid rgb(13, 1, 56);" value="" required>
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




                <div class="row">
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;">Close</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>

</div>




@endsection