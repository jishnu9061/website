@extends('layouts.hmsmain')
@section('content')
<html>
<div class="container">
    
<head>
<script>
            var loadFile = function(event) {
                var image = document.getElementById('output');
                image.src = URL.createObjectURL(event.target.files[0]);
            };
            </script>
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    </div>
    <br>
    <br>
    <label>
                                                    <input type="file"  accept="image/jpeg, image/png, image/jpg" name="image" id="file"  style="display:none;"onchange="loadFile(event)" >
                                                        <span class="btn btn-primary"><span
                                                                class="fa fa-plus"></span>ADD LOGO</span>
                                                    </label>
                                                    <img id="output" width="10%" />	
 @csrf

   <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-1">
                                                            <label>Company Name</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="name"
                                                                    id="name" value="">
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
                                                                <input type="text" class="form-control" name="address"
                                                                    id="address" value="">
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
                                                                <input type="text" class="form-control" name="city"
                                                                    id="city" value="">
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
                                                                <input type="text" class="form-control" name="website"
                                                                    id="website" value="" min="0" max="99">
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
                                                                <input type="email" class="form-control" name="email"
                                                                    id="email" value="">
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
                                                                <select name="type" id="type" style="width:100%;">
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
                                                                <input type="text" class="form-control" name="pinnum"
                                                                    id="pinnum" value="">
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
                                                                <input type="text" class="form-control" name="vatnum"
                                                                    id="vatnum" value="">
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
                                                        <button type="submit" class="btn btn-primary float:right;"
                                                            Style="width:45%;">Save</button>
                                                        <button type="button" class="btn btn-primary float:left"
                                                            Style="width:45%;" data-dismiss="modal">Cancel</button>
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