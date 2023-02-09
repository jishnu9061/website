@extends('layouts.hmsmain')
    @section('content')
        <nav style="font-size:15px;">
            <a href="{{url('home')}}" style="color: #1D1D50;">home</a>/
            <a href="#" style="color: #1D1D50;">HR</a>/
            <a href="#" style="color: #1D1D50;">Employee List</a>
        </nav>
        <br>
        <br>
        <style>
            .pagination>li>span {
                position: relative;
                float: left;
                padding: 6px 12px;
                margin-left: -1px;
                line-height: 1.42857143;
                color: #337ab7;
                text-decoration: none;
                background-color: #fff;
                border: 1px solid #ddd;
                }
            .pagination {
            margin: 0;
            }

            .pagination li:hover{
            cursor: pointer;
            }

            .header_wrap {
            padding:30px 0;
            }
            .num_rows {
            width: 20%;
            float:left;
            }
            .tb_search{
            width: 20%;
            float:right;
            }
            .pagination-container {
            width: 70%;
            float:left;
            }

            .rows_count {
            width: 20%;
            float:right;
            text-align:right;
            color: #999;
            }
            input[type='file'] {
            opacity:0    
            }
            input[type='file'] {
            color: rgba(0, 0, 0, 0)
            }
        </style>
        <style>
            .switch {
              position: relative;
              display: inline-block;
              width: 50px;
              height: 20px;
            }
            
            .switch input { 
              opacity: 0;
              width: 0;
              height: 0;
            }
            
            .slider {
              position: absolute;
              cursor: pointer;
              top: 0;
              left: 0;
              right: 0;
              bottom: 0;
              background-color: #6c757d;
              -webkit-transition: .4s;
              transition: .4s;
            }
            
            .slider:before {
              position: absolute;
              content: "";
              height: 15px;
              width: 15px;
              left: 4px;
              bottom: 2.5px;
              background-color: white;
              -webkit-transition: .4s;
              transition: .4s;
            }
            
            .check:checked + .slider {
              background-color: #0edb7c;
            }
            
            .check:focus + .slider {
              box-shadow: 0 0 1px #0edb7c;
            }
            
            .check:checked + .slider:before {
              -webkit-transform: translateX(26px);
              -ms-transform: translateX(26px);
              transform: translateX(26px);
            }
            
            /* Rounded sliders */
            .slider.round {
              border-radius: 34px;
            }
            
            .slider.round:before {
              border-radius: 50%;
            }
            /* The message box is shown when the user clicks on the password field */
            #passmessage {
            display:none;
            color: #1d1d50;
            position: relative;
            }
            #e_passmessage {
            display:none;
            color: #1d1d50;
            position: relative;
            }
            /* Add a green text color and a checkmark when the requirements are right */
            .passvalid {
            color: green;
            margin: 0px;
            font-size: 10px;
            }

            .passvalid:before {
            position: relative;
            left: 0px;
            content: "✔";
            }

            /* Add a red text color and an "x" when the requirements are wrong */
            .passinvalid {
            color: red;
            margin: 0px;
            font-size: 10px;
            padding-left: 10px;
            }

            .passinvalid:before {
            position: relative;
            left: 0px;
            content: "✖";
            }
        </style>
         
        <div class="container" >
            {{-- heading --}}
            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
            <div class="row" style="height:50px;">
                <div class="col-sm-4" style="padding-top:5px;">
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createmyModal"style="margin-left:10px;    --clr: #1D1D50;
                    --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Create Company</button> --}}
                </div>
                <div class="col-sm-4" style="">
                    <h4  style="border: 0.5px solid #f1d9b0;
                        border-radius: 25px;
                        background-color: #f1d9b0;
                        padding: 2%;
                        width: 100%;
                        height:90%;
                        text-align:center;
                        box-shadow: inset 0 0 3px #d3d0ca;
                        opacity: .9;">
                    <b style="font-size:18px;">Employee List</b></h4>
                  </div>
                  <div class="col-sm-4" style="">
                  </div>  
            </div>
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
                <div class="header_wrap" style="padding:8px;">
                    <div class="num_rows">
                        <div class="form-group">
                 	        <!--		Show Numbers Of Rows 		-->
                               <select class  ="form-control" aria-label="Page navigation example" name="state" id="maxRows" style="width: 40%;">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="70">70</option>
                                <option value="100">100</option>
                                <option value="5000">Show All</option>
                            </select>
                        </div>
                    </div>
                    <div class="tb_search">
                        <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search Company" class="form-control">
                    </div>
                    <div class="table-responsive">
                        <table  class="table table-striped table-class" id= "table-id" >
                            <thead>
                                <tr>
                                    <th class="text-center" style="width:4%;">Sl.No</th>
                                    <th class="text-center" style="width:4%;">UniqueId</th>
                                    <th class="text-center" style="width:50%;text">Employee Name</th>
                                    <th class="text-center" style="width:8%;">Department</th>
                                    <th class="text-center" style="width:4%;">Branch</th>
                                    <th class="text-center" >Designation</th>
                                    <th class="text-center" >Email</th>
                                    <th class="text-center" >Contant no</th>
                                    <th class="text-center" style="width:4%;">Status</th>
                                    <th class="text-center"style="width:3%;" >Action</th>
                                </tr>
                            </thead>
                            <tbody><?php $i=0; ?><?php  //$i++; //print_r($all_employee);die;?>
                                @foreach ($all_employee as $employee )
                                    <?php  $i++; //dd($employee);?>
                                    <tr>
                                        <td class="text-center">{{ $i }}</td>
                                        <td class="text-center">{{ $employee['uniqueid'] }}</td>
                                        <td class=""><div style="display: flex;">
                                            <div><img id="employee_image" src="{{asset('/') }}/images/faces/{{ $employee['photo'] }}" alt="" style="border-radius:50%;height:40px;width:40px;border-color:rgb(random(255), random(255), random(255));border-style: solid;"></div>
                                            <div style="padding-left: 5px">
                                                {{ $employee['name'] }}</td>
                                            </div>
                                        </div>
                                        <td class="text-center">{{ $employee['depart'] }}</td>
                                        <td class="text-center">{{ $employee['barnch'] }}</td>
                                        <td class="text-center">{{ $employee['designation'] }}</td>
                                        <td class="text-center">{{ $employee['email'] }}</td>
                                        <td class="text-center">{{ $employee['contact'] }}</td>
                                        <td class="text-center"></td>
                                        <td scope="row"class="text-center">
                                            {{-- <a href="{{url('edit_company',$user->uniqueid)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i> --}}
                                            {{-- <a href="#" data-toggle="modal" data-id="{{ $employee['uniqueid'] }}"  data-target="#editcompany"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i> --}}
                                            {{-- <a href="{{url('#',$user->uniqueid)}}"> <i style="color:rgb(13, 1, 56);padding-left:15px"class="fas fa-trash-alt"></i> --}}
                                            {{-- <a href="#" data-toggle="modal" data-id="{{ $employee['uniqueid'] }}" data-name="{{ $employee['name'] }}"  data-target="#deletecompany"> <i style="color:rgb(13, 1, 56);padding-left:25px"class="fas fa-trash-alt"></i> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--		Start Pagination -->
                    <div class='pagination-container'>
                        <nav>
                            <ul class="pagination">
                                <li data-page="prev">
                                    <span>
                                        < <span class="sr-only">(current)</span>
                                </li>
                                <li data-page="next" id="prev">
                                    <span> > <span class="sr-only">(current)</span></span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="rows_count"></div>
                </div>
            </div>    
            </div>
        </div>
        <!-- 		End of Container -->
        <!---------------------------------------------- MODAL ---------------------------------------------------------------------->  
        <div class="modal fade" id="createmyModal" style=""> <!-- create company -->
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!---- Modal Header -->
                    <form method="post" action="{{ url('reg_company') }}" enctype="multipart/form-data"> 
                        @csrf
                        <div class="modal-header" style="padding:0rem 0rem;">
                            <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Create Company</b></h4></div>
                            <div style="align-self:left;padding:0rem 2.5rem;">
                                <img id="blah" src="#" alt="" style="width:50px;height:60px;" />
                                <label for="imgInp" style="margin-left: 9px;text-align:center;width:80px;height:30px;
                                padding-right:-7px;color:#1D1D50;background-color: #f1d9b0;border-radius: 5px;">
                                <span style="color: red">*</span>User Img
                                <input accept="image/*" type='file' id="imgInp" name="logo" style="width:0px;height:0px;"required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Logo required.
                                </div></label>
                                <script>
                                    imgInp.onchange = evt => {
                                    const [file] = imgInp.files
                                    if (file) {
                                    blah.src = URL.createObjectURL(file)
                                    }}
                                </script>
                            </div>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body" >
                            <div class="container">
                                <div class="row"><h6><b><span>Enter Company Details:-</span></b></h6> 
                                </div>
                                    <div class="row">
                                        <div class="" style="width: 50%">
                                            <div class=""><span style="color: red">*</span>
                                                <label for="company_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Company Name</label>
                                                <input type="text" placeholder="Enter Company Name " style="width=45%" class="form-control" name="company_name" id="" value=""required>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    Company Name is required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="width: 50%">
                                            <div class=""><span style="color: red">*</span>
                                                <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">company Type</label>
                                                <input type="text" placeholder="Enter Company type " style="width=45%" class="form-control" name="company_type" id="" value=""required>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    company Type is required.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="" style="width: 70%">
                                            <div class="">
                                                <label for="company_name" style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Address:</label>
                                                <input type="text" placeholder="Enter Address " style="width=45%" class="form-control" name="address" id="" value="">
                                            </div>
                                        </div>
                                        <div class="" style="width: 30%">
                                            <div class=""><span style="color: red">*</span>
                                                <label for="company_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">City/State/Country:</label>
                                                <input type="text" placeholder="City/State/Country" style="width=45%" class="form-control" name="city" id="" value="">
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    City/State/Country is required.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="" style="width: 40%">
                                            <div class="">
                                                <label for="username" style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Postal Code</label>
                                                <input type="text" placeholder="Enter Postal Code " style="width=45%" class="form-control" name="postal_code" id="" value="">
                                            </div>
                                        </div>
                                        <div class="" style="width: 60%">
                                            <div class="">
                                                <label for="company_name" style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">GSTin</label>
                                                <input type="text" placeholder="Enter GSTin " style="width=45%" class="form-control" name="GSTin" id="" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row"><h6><b><span>Enter Admin Details:-</span></b></h6>
                                    </div>
                                    <div class="row" style="height:150px;">
                                        <div style="height:100%;width:70%;padding-right:0px;">
                                            <div class="row" style="height:50%;width:100%;">
                                                <div class="" style="width: 50%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="company_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">User Name</label>
                                                        <input type="text" placeholder="Enter User Name " style="width=45%" class="form-control" name="username" id="" value=""required>
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            User Name is required.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 50%;padding-right:0px;">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email </label>
                                                        <input type="email" placeholder="Enter Email " style="width=45%" class="form-control" name="email" id="" value="@"required>
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Email is required.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="height:50%;width:100%;">
                                                <div class="" style="width: 50%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="company_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Password</label>
                                                        <input type="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z]).{8,}"style="width=45%" class="form-control" name="password" id="checkpass" value=""required>
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Password is required.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 50%;padding-right:0px;">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="company_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Comform Password</label>
                                                        <input type="password" placeholder="Comform Password" style="width=45%" class="form-control" name="password_1" id="checkpass_1" value=""required>
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Comform Password is required.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="height:100%;width:30%;text-align:center;">
                                            <img id="blah_1" src="#" alt="" style="max-width: 100%;; height: auto;" /><br>
                                            <label for="imgInp_1" style=" text-align: center;
                                                                        width: 112px;
                                                                        height: 30px;
                                                                        color: #ebebf1;
                                                                        background-color: #1d1d50;
                                                                        border-radius: 5px;
                                                                        margin-top: 10px;">
                                            <span style="color: red">*</span>companylogo
                                            <input accept="image/*" type='file' id="imgInp_1" name="com_logo" style="width:0px;height:0px;"required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Logo required.
                                            </div></label>
                                            <script>
                                                imgInp_1.onchange = evt => {
                                                const [file] = imgInp_1.files
                                                if (file) {
                                                blah_1.src = URL.createObjectURL(file)
                                                }}
                                            </script>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="" style="width: 50%;">
                                            <div id="passmessage">
                                                <h6 style="margin:0px;">Password must contain the following:</h6>
                                                <div class="row" style="width: 100%;">
                                                    <div style="width: 40%;">
                                                        <ul id="passletter" class="passinvalid">A <b>letter</b> </ul>
                                                        <ul id="passnumber" class="passinvalid">A <b>number</b></ul>
                                                    </div>
                                                    <div style="width: 50%;">
                                                        <ul id="passlength" class="passinvalid">Minimum <b>8 characters</b></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div lass="" style="width: 0%"></div>
                                        <div class="col-sm" style="padding-right: 0px;width: 50%">
                                            <br>
                                            <button type="submit" onclick="return Validate()" class="btn btn-primary float:right;" Style="width:45%;">Create</button>
                                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editcompany" style=""><!-- edit/update company -->
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!---- Modal Header -->
                    <form method="post"  id="update_company" action="#" enctype="multipart/form-data"> 
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="uniqueid" value="uniqueid">
                        <div class="modal-header" style="padding:0rem 0rem;">
                            <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Edit details</b></h4></div>
                            <div style="align-self:left;padding:0rem 2.5rem;">
                                <img id="e_blah" src="#" alt=""  style="width:50px;height:60px;" />
                                <label for="e_imgInp" style="margin-left: 9px;text-align:center;width:80px;height:30px;
                                padding-right:-7px;color:#1D1D50;background-color: #f1d9b0;border-radius: 5px;">
                                <span style="color: red">*</span>User Img
                                <input accept="image/*" type='file' id="e_imgInp" name="e_logo" style="width:0px;height:0px;">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Logo required.
                                </div></label>
                                <script>
                                    e_imgInp.onchange = evt => {
                                    const [file] = e_imgInp.files
                                    if (file) {
                                        e_blah.src = URL.createObjectURL(file)
                                    }}
                                </script>
                            </div>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body" >
                            <div class="container">
                                <div class="row"><h6><b><span>Enter Company Details:-</span></b></h6> 
                                </div>
                                    <div class="row">
                                        <div class="" style="width: 50%">
                                            <div class=""><span style="color: red">*</span>
                                                <label for="company_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Company Name</label>
                                                <input type="text" placeholder="Enter Company Name " style="width=45%" class="form-control" name="company_name" id="company_name" value=""required>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    Company Name is required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="width: 50%">
                                            <div class=""><span style="color: red">*</span>
                                                <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">company Type</label>
                                                <input type="text" placeholder="Enter Company type " style="width=45%" class="form-control" name="company_type" id="company_type" value=""required>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    company Type is required.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="" style="width: 70%">
                                            <div class="">
                                                <label for="company_name" style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Address:</label>
                                                <input type="text" placeholder="Enter Address " style="width=45%" class="form-control" name="address" id="address" value="">
                                            </div>
                                        </div>
                                        <div class="" style="width: 30%">
                                            <div class=""><span style="color: red">*</span>
                                                <label for="company_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">City/State/Country:</label>
                                                <input type="text" placeholder="City/State/Country" style="width=45%" class="form-control" name="city" id="city" value="">
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    City/State/Country is required.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="" style="width: 40%">
                                            <div class="">
                                                <label for="username" style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Postal Code</label>
                                                <input type="text" placeholder="Enter Postal Code " style="width=45%" class="form-control" name="postal_code" id="postal_code" value="">
                                            </div>
                                        </div>
                                        <div class="" style="width: 60%">
                                            <div class="">
                                                <label for="company_name" style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">GSTin</label>
                                                <input type="text" placeholder="Enter GSTin " style="width=45%" class="form-control" name="GSTin" id="GSTin" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row"><h6><b><span>Enter Admin Details:-</span></b></h6>
                                    </div>
                                    <div class="row" style="height:150px;">
                                        <div style="height:100%;width:70%;padding-right:0px;">
                                            <div class="row" style="height:50%;width:100%;">
                                                <div class="" style="width: 50%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="company_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">User Name</label>
                                                        <input type="text" placeholder="Enter User Name " style="width=45%" class="form-control" name="username" id="username" value=""required>
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            User Name is required.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 50%;padding-right:0px;">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email </label>
                                                        <input type="email" placeholder="Enter Email " style="width=45%" class="form-control" name="email" id="email" value="@"required>
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Email is required.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="height:50%;width:100%;">
                                                <div class="" style="width: 50%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="company_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Password</label>
                                                        <input type="password" placeholder="**********" style="width=45%"pattern="(?=.*\d)(?=.*[a-z]).{8,}" class="form-control" name="password" id="e_password" value="">
                                                    </div>
                                                </div>
                                                <div class="" style="width: 50%;padding-right:0px;">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="company_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Comform Password</label>
                                                        <input type="password" placeholder="**********" style="width=45%" class="form-control" name="password_1" id="e_password_1" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="height:100%;width:30%;text-align:center;">
                                            <img id="e_blah_1" src="#" alt="" style="max-width: 100%; max-height: 100%;" /><br>
                                            <label for="e_imgInp_1" style=" text-align: center;
                                                                        width: 112px;
                                                                        height: 30px;
                                                                        color: #ebebf1;
                                                                        background-color: #1d1d50;
                                                                        border-radius: 5px;
                                                                        margin-top: 10px;">
                                            <span style="color: red">*</span>companylogo
                                            <input accept="image/*" type='file' id="e_imgInp_1" name="e_com_logo" style="width:0px;height:0px;">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Logo required.
                                            </div></label>
                                            <script>
                                                e_imgInp_1.onchange = evt => {
                                                const [file] = e_imgInp_1.files
                                                if (file) {
                                                    e_blah_1.src = URL.createObjectURL(file)
                                                }}
                                            </script>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="" style="width: 50%;">
                                            <div id="e_passmessage">
                                                <h6 style="margin:0px;">Password must contain the following:</h6>
                                                <div class="row" style="width: 100%;">
                                                    <div style="width: 40%;">
                                                        <ul id="e_passletter" class="passinvalid">A <b>letter</b> </ul>
                                                        <ul id="e_passnumber" class="passinvalid">A <b>number</b></ul>
                                                    </div>
                                                    <div style="width: 50%;">
                                                        <ul id="e_passlength" class="passinvalid">Minimum <b>8 characters</b></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div lass="" style="width: 0%"></div>
                                        <div class="col-sm" style="padding-right: 0px;width: 50%;">
                                            <br>
                                            <button type="submit" onclick="return e_Validate()"class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="deletecompany" style=""><!-- delete company -->
            <div class="modal-dialog modal-lg" style="width:30%;">
                <div class="modal-content">
                    <!---- Modal Header -->
                    <form method="post"  id="delete_company" action="#" enctype="multipart/form-data"> 
                        @csrf
                        <input type="hidden" id="deleteuniqueid" value="uniqueid">
                        <div class="modal-header" style="padding:0rem 0rem;">
                            <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Delete <span id="deletcompany_name"></span></b></h4></div>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body" >
                            <div class="container">
                                <div class="row"><h6><b><span>Are you sure?</span></b></h6> 
                                </div>
                                    <div class="row">
                                        <div class="" style="width: 30%;">
                                        </div>
                                        <div lass="" style="width: 0%"></div>
                                        <div class="col-sm" style="padding-right: 0px;width: 70%;">
                                            <br>
                                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;background-color:#DD4132;">Yes</button>
                                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">No</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            function changestatus(param){// change copany status 
                var status = $(param).prop('checked') == true ? 1 : 0; 
                var user_id = $(param).data('id'); 
                $.ajax({
                    type: "post",
                    dataType: "json",
                    url: "{{route('changestatus_com')}}",
                    data: {"_token": "{{ csrf_token() }}",'status': status, 'user_id': user_id},
                    success: function(data){
                        toastr.options.closeButton = true;
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 1;
                        toastr.success(data.success);
                    }
                });
            }
            function editcompany(param){// edit company get details 
                var uniqueid = $(param).data('id');
                $.ajax({
                    type: "GET",
                    url: 'edit_company/'+uniqueid,
                    success: function(response){
                        $('#GSTin').val(response.result.GSTin);
                        $('#address').val(response.result.address);
                        $('#city').val(response.result.city);
                        $('#e_blah_1').attr('src','{{asset('/') }}/images/logo/'+response.result.company_logo);
                        $('#company_name').val(response.result.company_name);
                        $('#company_type').val(response.result.company_type);
                        $('#company_website').val(response.result.company_website);
                        $('#email').val(response.result.email);
                        $('#e_blah').attr('src','{{asset('/') }}/images/faces/'+response.result.photo_path);
                        $('#postal_code').val(response.result.postal_code);
                        $('#username').val(response.result.users_name);
                        $('#password').val(response.result.password);
                        $('#uniqueid').val(uniqueid);
                        $('#update_company').attr('action',"{{ url('update_company') }}"+"/"+uniqueid);
                    }
                });
            }
            function deletecompany(param){// edit company get details 
                var deleteuniqueid = $(param).data('id');
                var deletecompany_name = $(param).data('name');
                $('#deleteuniqueid').val(deleteuniqueid);
                $('#deletcompany_name').html(deletecompany_name);
                document.getElementById("deletcompany_name").innerHTML = deletecompany_name;
                $('#delete_company').attr('action',"{{ url('delete_company') }}"+"/"+deleteuniqueid);
            }
            //createt password validation start
            var checkpass = document.getElementById("checkpass");
            var passletter = document.getElementById("passletter");
            var passnumber = document.getElementById("passnumber");
            var passlength = document.getElementById("passlength");
            checkpass.onfocus = function() {// for password validation display
                document.getElementById("passmessage").style.display = "block";
            }
            checkpass.onblur = function() {// for password validation hide
                document.getElementById("passmessage").style.display = "none";
            }
            checkpass.onkeyup = function() {
                // Validate lowercase letters
                var lowerCaseLetters = /[a-z]/g;
                if(checkpass.value.match(lowerCaseLetters)) {  
                    passletter.classList.remove("passinvalid");
                    passletter.classList.add("passvalid");
                } else {
                    passletter.classList.remove("passvalid");
                    passletter.classList.add("passinvalid");
                }
                // Validate numbers
                var numbers = /[0-9]/g;
                if(checkpass.value.match(numbers)) {  
                    passnumber.classList.remove("passinvalid");
                    passnumber.classList.add("passvalid");
                } else {
                    passnumber.classList.remove("passvalid");
                    passnumber.classList.add("passinvalid");
                }
                // Validate length
                if(checkpass.value.length >= 8) {
                    passlength.classList.remove("passinvalid");
                    passlength.classList.add("passvalid");
                } else {
                    passlength.classList.remove("passvalid");
                    passlength.classList.add("passinvalid");
                }
            }
            function Validate() {// to  check password and conform password are same
                var password = document.getElementById("checkpass").value;
                var confirmPassword = document.getElementById("checkpass_1").value;
                if (password != confirmPassword) {
                    alert("Please enter same password in both");
                    return false;
                }
                return true;
            }
            // create password validation end here
            // edit password validation start
            var e_checkpass = document.getElementById("e_password");
            var e_passletter = document.getElementById("e_passletter");
            var e_passnumber = document.getElementById("e_passnumber");
            var e_passlength = document.getElementById("e_passlength");
            e_checkpass.onfocus = function() {// for password validation display
                document.getElementById("e_passmessage").style.display = "block";
            }
            e_checkpass.onblur = function() {// for password validation hide
                document.getElementById("e_passmessage").style.display = "none";
            }
            e_checkpass.onkeyup = function() {
                // Validate lowercase letters
                var lowerCaseLetters = /[a-z]/g;
                if(e_checkpass.value.match(lowerCaseLetters)) {  
                    e_passletter.classList.remove("passinvalid");
                    e_passletter.classList.add("passvalid");
                } else {
                    e_passletter.classList.remove("passvalid");
                    e_passletter.classList.add("passinvalid");
                }
                // Validate numbers
                var numbers = /[0-9]/g;
                if(e_checkpass.value.match(numbers)) {  
                    e_passnumber.classList.remove("passinvalid");
                    e_passnumber.classList.add("passvalid");
                } else {
                    e_passnumber.classList.remove("passvalid");
                    e_passnumber.classList.add("passinvalid");
                }
                // Validate length
                if(e_checkpass.value.length >= 8) {
                    e_passlength.classList.remove("passinvalid");
                    e_passlength.classList.add("passvalid");
                } else {
                    e_passlength.classList.remove("passvalid");
                    e_passlength.classList.add("passinvalid");
                }
            }
            function e_Validate() {// to  check password and conform password are same
                var e_password = document.getElementById("e_password").value;
                var e_confirmPassword = document.getElementById("e_password_1").value;
                if (e_password != e_confirmPassword) {
                    alert("Please enter same password in both");
                    return false;
                }
                return true;
            }
            // edit password validation end here
        </script>

@endsection