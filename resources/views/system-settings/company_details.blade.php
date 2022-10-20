@extends('layouts.hmsmain')
@section('content')

<html>
<div class="container">

<head>
    <title>Company</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="public/assets/css/logo">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <style>
    #upload_button input[type=file] 
    {
        display:none;
    }
        </style>
</head>
<body>
<div>
   <button class="btn btn-primary"style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px">
   <b><u>Company Details</u></b></span></button><br>
  </div>
  <br>
  <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
  {{-- <a href="{{('add_company_details')}}"><button class="btn btn-primary">Add Company Details</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Company Details</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
  <!-- <a href="{{('add_company_details')}}"><button class="btn btn-primary add-btn" style="width:20%;">Add Company Details</button></a><br><br> -->
  <h1 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;"><b>Company</b></h1>
   <div class="table-responsive">  
<table class="table table-bordered" id="new-item">
  <thead>
  <tr>
    <th>Sl No</th>
    <th>Company Name</th>
    <th>Company Address</th>
    <th>Town/City</th>
    <th>Logo</th>
    <th>Action</th>
  
  </tr>
  </thead>
        <tbody>
        @foreach($company_details as $company)
  <tr>
    <td>{{$company->id}}</td>
    <td>{{$company->company_name}}</td>
    <td>{{$company->address}}</td>
    <td>{{$company->town_city}}</td>
    <td>{{$company->Add_Logo}}</td>
   
    <!-- <td>CRA</td>
    <td>Stima Investment Plaza 1,3rd Floor,Mushembi Rd, Parklands </td>
    <td>Nairobi, Kenya</td>
    <td></td> -->
    
<td  scope="row"class="text-center"><a href="{{url('edit_company_details',$company->id)}}">
<i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i></td>

@endforeach
</tr>
        </tbody>
</table>
<br><br>
</div>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add Company Details</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_company_details') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
@csrf
<div id="upload_button">
    <label>
      <input type="file" name="image" ngf-select ng-model="new_files" ng-change="fs.uploadFiles(new_files)" multiple>
      <span class="btn btn-primary"> <span class="fa fa-plus"></span>&nbsp;&nbsp;ADD LOGO</span>
    </label>
  </div>
 <br><br>
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
                            <label for="username">Town-City</label>
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
                           <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                           <button type="button" class="btn btn-primary float:left" Style="width:45%;"   data-dismiss="modal">Cancel</button>
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