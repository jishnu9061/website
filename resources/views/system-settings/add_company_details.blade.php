@extends('layouts.hmsmain')
@section('content')
<html>
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
    <!-- <style>
    #upload_button input[type=file] 
    {
        display:none;
    }
        </style> -->
 
    <div>
        <button class="btn btn-primary"
        style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Add Company Details</u></b></span></button><br>
       
    </div>
    <br>
    <br>
    <div id="upload_button">
    <label>
      <input type="file" name="image" ngf-select ng-model="new_files" ng-change="fs.uploadFiles(new_files)" multiple>
      <span class="btn btn-primary"> <span class="fa fa-plus"></span>&nbsp;&nbsp;ADD LOGO</span>
    </label>
  </div>
 <br><br>
 

   <!-- <input type="file" id="img" name="img" value="ADD LOGO" ><br><br> -->
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="" id="form">  
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label >Company Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="name" id="name" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Company Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="address" id="address" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>
 <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Town/City</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="city" id="city" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                     <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Company Website</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="website" id="website" value="" min="0" max="99">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div>
<div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label for="username">Company Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email" class="form-control" name="email" id="email" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                     <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Company Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="type" id="type"style="width:100%;">
                                <option>---Select--- </option>
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
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">PIN No</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="pinnum" id="pinnum" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">VAT No</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="vatnum" id="vatnum" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>

 <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">NHIF Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="nhifcode" id="nhifcode" value="" min="0" max="99">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">NSSF Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="nnum" id="nnum" value="" min="0" max="99">
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
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save </button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;">Cancel</button>
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