@extends('layouts.cra_superadmin_ly')
    @section('content')
        <nav style="font-size:12px;">
            <a href="{{url('superadminhome')}}" style="color: #1D1D50;">home</a> / 
            <a href="#" style="color: #1D1D50;">Management company-Comapany List</a>
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
        <div class="container" >
        {{-- heading --}}
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
            <div class="row" style="height:50px;">
                <div class="col-sm-4" style="padding-top:5px;">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"style="margin-left:10px;    --clr: #1D1D50;
                    --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Create Company</button>
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
                    <b style="font-size:18px;">Company List</b></h4>
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
                                    <th class="text-center" >Company Name</th>
                                    <th class="text-center" >Users</th>
                                    <th class="text-center" >City/state</th>
                                    <th class="text-center" >Expires In</th>
                                    <th class="text-center" style="width:6%;">Status</th>
                                    <th class="text-center" >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user_list as $list)
                                    <tr>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td  scope="row"class="text-center">
                                            <a href="{{url('user_edit',$list->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                                            <a href="user_comments"><i  style="  color:rgb(13, 1, 56);" class="fas fa-comment" aria-hidden="true"></i>
                                            <a href="{{url('user_destroy',$list->id)}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i>
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
                            <!--	Here the JS Function Will Add the Rows -->
                            </ul>
                        </nav>
                    </div>
                    <div class="rows_count">Showing 11 to 20 of 91</div>
                </div>
            </div>    
            </div>
        </div>
        <!-- 		End of Container -->
        <div class="modal fade" id="myModal" style="">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!---- Modal Header -->
                    <form method="post" action="{{ url('reg_company') }}" enctype="multipart/form-data"> 
                        @csrf
                        <div class="modal-header" style="padding:0rem 0rem;">
                        <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Create Company</b></h4></div>
                        <div style="align-self:left;padding:0rem 2.5rem;">
                            <img id="blah" src="#" alt="" style="width:50px;height:60px;" />
                            <label for="imgInp" style="margin-left: 9px;text-align:center;width:70px;height:30px;
                            padding-right:-7px;color:#1D1D50;background-color: #f1d9b0;border-radius: 5px;">
                             <span style="color: red">*</span>Upload
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
                                
    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->      
                                    
                                    <div class="row"><h6><b><span>Enter Company Details:-</span></b></h6> </div>
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
                                    <div class="row"><h6><b><span>Enter proprietor Details:-</span></b></h6> </div>
                                    <div class="row">
                                        <div class="" style="width: 35%">
                                            <div class=""><span style="color: red">*</span>
                                                <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">First Name</label>
                                                <input type="text" placeholder="Enter First Name " style="width=45%" class="form-control" name="first_name" id="" value=""required>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    First Name is required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="width: 35%">
                                            <div class=""><span style="color: red">*</span>
                                                <label for="company_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Last Name</label>
                                                <input type="text" placeholder="Enter Last Name " style="width=45%" class="form-control" name="last_name" id="" value=""required>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    Last Name is required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="width: 30%">
                                            <div class=""><span style="color: red">*</span>
                                                <label for="company_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">User Name</label>
                                                <input type="text" placeholder="Enter User Name " style="width=45%" class="form-control" name="username" id="" value=""required>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    User Name is required.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="" style="width: 35%">
                                            <div class=""><span style="color: red">*</span>
                                                <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email </label>
                                                <input type="email" placeholder="Enter Email " style="width=45%" class="form-control" name="email" id="" value="@"required>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    Email is required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="width: 35%">
                                            <div class=""><span style="color: red">*</span>
                                                <label for="company_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Password</label>
                                                <input type="password" placeholder="Password" style="width=45%" class="form-control" name="password" id="" value=""required>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    Password is required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="width: 30%">
                                            <div class=""><span style="color: red">*</span>
                                                <label for="company_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Comform Password</label>
                                                <input type="password" placeholder="Comform Password" style="width=45%" class="form-control" name="password_1" id="" value=""required>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    Comform Password is required.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm"></div>
                                        <div class="col-sm"></div>
                                        <div class="col-sm" style="padding-right: 0px;">
                                            <br>
                                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>                     
    @endsection