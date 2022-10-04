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
    <div>
        <button class="btn btn-primary"
        style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Edit Company Details</u></b></span></button><br>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    </div>
    <br>
    <br>
    <!-- <h2>Add Company Details</h2> -->
   
    <a href=""><button class="btn btn-primary add-btn">Add Logo</button></a><br><br><br>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="" id="form">  
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Company Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="number" id="username" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Company Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="number" id="username" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
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
                                <input type="text" class="form-control" name="number" id="username" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
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
                                <input type="text" class="form-control" name="corporation" id="age" value="" min="0" max="99">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
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
                                <input type="text" class="form-control" name="number" id="username" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
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
                                <select name="country" id="cars"style=width>
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
                            <label for="username">PIN NO</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="number" id="username" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">VAT NO</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="number" id="username" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
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
                                <input type="text" class="form-control" name="corporation" id="age" value="" min="0" max="99">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">NSSF Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="corporation" id="age" value="" min="0" max="99">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
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
</div >
</html>
@endsection