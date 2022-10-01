@extends('layouts.hmsmain')
@section('content')
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <title>Company Details</title>
    <!-- <link rel="stylesheet" href="assets/css/cstyle.css">  -->
    <style>
    label {

        font-size: medium;
        width: 200px;
        display: inline-block;
        color: rgb(13, 1, 56);
        margin-left: 50px;

    }

    input {
        width: 450px;
        height: 30px;
        color: black;

    }

    a.button1 {
        margin-left: 50px;
        display: inline-block;
        padding: 0.35em 1.2em;
        background-color: rgb(13, 1, 56);
        margin: 0 0.3em 0.3em 0;
        border-radius: 0.12em;
        box-sizing: border-box;
        text-decoration: none;
        font-weight: 300;
        color: rgb(240, 205, 10);
        text-align: center;
        transition: all 0.2s;

    }


    a.button2 {
        margin-left: 50px;
        display: inline-block;
        padding: 0.35em 1.2em;
        background-color: #f0e7ce;
        margin: 0 0.3em 0.3em 0;
        border-radius: 0.12em;
        border-color: rgb(13, 1, 56);
        box-sizing: border-box;
        text-decoration: none;
        font-weight: 300;
        color: rgb(13, 1, 56);
        text-align: center;
        transition: all 0.2s;
        outline: auto;
    }
    </style>
</head>

<body>
    <!-- <h2>Add Company Details</h2> -->
    <button class="btn btn-primary"
        style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-width:150%"><span
            class="font-size-lg">Edit Company Details</span></button><br><br><br>
    {{-- <h3 style="text-align:center;"><u><b>Edit Company Details</b></u></h3><br> --}}
    <a href=""><button class="btn btn-primary add-btn">Add Logo</button></a><br><br><br>

    <form>

        <!-- <div class="container">
        <form class="form-horizontal" action="/action_page.php"> -->

        <!-- <a href="#" class="btn btn-primary" style="margin-left:50px;background-color:rgb(13, 1, 56);color: rgb(238, 196, 105); font-weight: bold;width: 90%;">Add Company</a><br><br> -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="username">Company Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" id="address" name="number" value="" size="10"><br>
                            <div class="invalid-feedback" style="width: 100%;">
                                Client Number is required.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="username">Company Address</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" id="address" name="address" value="" size="10"><br>
                            <div class="invalid-feedback" style="width: 100%;">
                                Company Address is required.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="username">Town/City</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" id="address" name="town" value="" size="10"><br>
                            <div class="invalid-feedback" style="width: 100%;">
                                Town is required.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="username">Company Website</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" id="address" name="website" value="" size="10"><br>
                            <div class="invalid-feedback" style="width: 100%;">
                                Company Website is required.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="username">Company Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" id="address" name="Email" value="" size="10"><br>
                            <div class="invalid-feedback" style="width: 100%;">
                                Company Email is required.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="username">Company Type</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <select value="" style="padding:3.5px" name="type">
                                <option> select </option>
                                <option>Partnership</option>
                                <option>Sole partership</option>
                                <option>LLP</option>
                                <option>LTD</option>
                                <option>LLC</option>
                                <option>Others</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="username">PIN NO</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" id="address" name="PIN" value="" size="10"><br>
                            <div class="invalid-feedback" style="width: 100%;">
                                PIN NO is required.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="username">VAT NO</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" id="address" name="vat" value="" size="10"><br>
                            <div class="invalid-feedback" style="width: 100%;">
                                VAT NO is required.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="username">NHIF Code</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" id="address" name="NHIF" value="" size="10"><br>
                            <div class="invalid-feedback" style="width: 100%;">
                            NHIF Code is required.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="username">NSSF Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" id="address" name="NSSF" value="" size="10"><br>
                            <div class="invalid-feedback" style="width: 100%;">
                            NSSF Number is required.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <button class="btn btn-primary float-left" style="width:50%">Close</button>
        <button class="btn btn-primary float-right" style="width:50%">Submit</button>

        </div>
        </div>
        </div>
        </div>
    </form>
    <!-- </div> -->
    <!-- <form>
     <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
    </form> -->
</body>

</html>
@endsection