@extends('layouts.hmsmain')
@section('content')

<!DOCTYPE html>
<html lang="en">
        
<div class="container">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

</head>
<body>

    <div>
        <button class="btn btn-primary"
        style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Add Company Branch</u></b></span></button><br>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{url('add_company_branch')}}"  id="form">  
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label >Branch No:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input  class="form-control" type="text"  id="bnum" name="bnum" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Branch Code:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="bcode" name="bcodes" class="form-control" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Branch Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="bname" name="bname"class="form-control"  value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <br>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Postal Address:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                               
                                <textarea rows="4" cols="50" name="paddress" class="form-control"  type="text"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Physical Address:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea rows="4" cols="50" name="physicaladd" class="form-control"  type="text"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                        <label for="username">Tel:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number"  id="tel" name="tel" class="form-control"  value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-4">
                        <div class="mb-1">
                        <label for="username">Mobile:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number"  id="mobile" name="mobile" class="form-control"  value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Fax:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="fax" name="fax" class="form-control"  value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Town:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" id="town" name="town" class="form-control" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Email:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email"  id="email" name="email"class="form-control"  value="" >
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Website:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" id="website" name="website" class="form-control" >
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
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

  
    </body>
</html>
@endsection