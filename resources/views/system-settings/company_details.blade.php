@extends('layouts.hmsmain')
@section('content')
<html>
    <div class="container">
   <head>
   
<style>
    #upload_button input[type=file] 
    {
        display:none;
    }
        </style>
</head>
<body>
<div>
{{-- heading --}}
    <h4 id="hdtpa"><b>Company Details</b></h4>
    <br><br>
   
  </div>
 <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
  {{-- <a href="{{('add_company_details')}}"><button class="btn btn-primary">Add Company Details</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Company Details</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
                      
<!---------------------------------------------- MODAL ------------------------------------------------------------------------->
<!---------------------------------------------- MODAL ------------------------------------------------------------------------->
           
{{-- <a href="{{('add_company_branch')}}"><button class="btn btn-primary">Add Branch</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal2">Add Branch</button>
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
    <!-- <th>Sl No</th> -->
    <th>Company Name</th>
    <th>Company Address</th>
    <th>Town/City</th>
    {{-- <th>Logo</th> --}}
    <th>Action</th>
  
  </tr>
  </thead>
        <tbody>
        @foreach($company_details as $company)

  <tr>
    <!-- <td>{{$company->id}}</td> -->
    <td>{{$company->company_name}}</td>
    <td>{{$company->address}}</td>
    <td>{{$company->town}}</td>
    {{-- <td>{{$company->logo}}</td> --}}
   
    <!-- <td>CRA</td>
    <td>Stima Investment Plaza 1,3rd Floor,Mushembi Rd, Parklands </td>
    <td>Nairobi, Kenya</td>
    <td></td>  -->

                                        <td scope="row" class="text-center"><a
                                                href="{{url('edit_company_details',$company->id)}}">
                                                <i style="  color:rgb(13, 1, 56);" class="fa fa-edit"
                                                    aria-hidden="true"></i></td>

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
      <input type="file" name="logo" ngf-select ng-model="new_files" ng-change="fs.uploadFiles(new_files)" multiple>
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

                                                @csrf
                                                <div id="upload_button">
                                                    <label>
                                                        <input type="file" name="image" ngf-select ng-model="new_files"
                                                            ng-change="fs.uploadFiles(new_files)" multiple>
                                                        <span class="btn btn-primary"> <span
                                                                class="fa fa-plus"></span>&nbsp;&nbsp;ADD LOGO</span>
                                                    </label>
                                                </div>
                                                <br><br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-1">
                                                            <label>Company Name</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="name"
                                                                    id="name" value="CRA">
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
                                                                    id="address"
                                                                    value="Stima Investment Plaza 1,3rd Floor,Mushembi Rd, Parklands">
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
                                                                    id="city" value="Nairobi, Kenya">
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
                                                    <div class="col-md-6">
                                                        <div class="mb-1">
                                                            <label for="username">NHIF Code</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="nhifcode"
                                                                    id="nhifcode" value="" min="0" max="99">
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
                                                                <input type="text" class="form-control" name="nnum"
                                                                    id="nnum" value="" min="0" max="99">
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
                        <!----------------------------------------------Company_branch MODAL ---------------------------------------------------------------------->

                        <div class="modal fade" id="Modal2">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add Branch</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_company_branch') }}"
                                                enctype="multipart/form-data">
                                                <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label>Branch No:</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input class="form-control" type="bnumber" id="bnum"
                                                                    name="bnum" value="">
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
                                                                <input type="text" id="bcode" name="bcodes"
                                                                    class="form-control" value="">
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
                                                                <input type="text" id="bname" name="bname"
                                                                    class="form-control" value="">
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

                                                                <textarea rows="4" cols="50" name="paddress"
                                                                    class="form-control" type="text"></textarea>
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
                                                                <textarea rows="4" cols="50" name="physicaladd"
                                                                    class="form-control" type="text"></textarea>

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
                                                                <input type="number" id="tel" name="tel"
                                                                    class="form-control" value="">
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
                                                                <input type="number" id="mobile" name="mobile"
                                                                    class="form-control" value="">
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
                                                                <input type="text" id="fax" name="fax"
                                                                    class="form-control" value="">
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
                                                                <select name="town" id="town" style="width:100%;">
                                                                    <option>---select---</option>
                                                                    <option>Nairobi </option>
                                                                    <option>Kisumu</option>
                                                                    <option>Nakuru</option>
                                                                    <option>Mombasa</option>
                                                                    <option>Thika</option>
                                                                    <option>Malindi</option>
                                                                </select>
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
                                                                <input type="email" id="email" name="email"
                                                                    class="form-control" value="">
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
                                                                <input type="text" id="website" name="website"
                                                                    class="form-control">
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
</div>

</html>

@endsection