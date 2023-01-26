@extends('layouts.cra_superadmin_ly')
    @section('content')
        <nav style="font-size:12px;">
            <a href="{{url('superadminhome')}}" style="color: #1D1D50;">home</a> / 
            <a href="#" style="color: #1D1D50;">Manage company-Comapany List</a>
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
                                    <th class="text-center" style="width:4%;">UniqueId</th>
                                    <th class="text-center" >Company Name</th>
                                    <th class="text-center" >User Name</th>
                                    <th class="text-center" >City/state</th>
                                    <th class="text-center" >Expires On</th>
                                    <th class="text-center" style="width:6%;">Status</th>
                                    <th class="text-center" >Action</th>
                                </tr>
                            </thead>
                            <tbody><?php $i=0; ?>
                                @foreach ($user_list as $user )
                                    <?php  $i++; ?>
                                    <tr>
                                        <td class="text-center">{{ $i }}</td>
                                        <td class="text-center">{{ $user->uniqueid }}</td>
                                        <td class="text-center">{{ $user->company_name }}</td>
                                        <td class="text-center">{{ $user->users_name }}</td>
                                        <td class="text-center">{{ $user->city }}</td>
                                        <td class="text-center"><i>U/C..</i></td>
                                        <td class="text-center"><label class="switch">
                                            <input type="checkbox" data-id="{{ $user->uniqueid }}" onclick="changestatus(this)" id="status" class="check" {{ $user->status == 1 ? 'checked' : '' }}>
                                            <span class="slider round"></span>
                                          </label>
                                        </td>
                                        <td scope="row"class="text-center">
                                            <a href="{{url('edit_company',$user->uniqueid)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                                            <a href="#"><i  style="  color:rgb(13, 1, 56);" class="fas fa-eye" aria-hidden="true"></i>
                                            <a href="{{url('#',$user->uniqueid)}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i>
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
                                        < <span class="sr-only">(current)
                                    </span></span>
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
                                                        <input type="password" placeholder="Password" style="width=45%" class="form-control" name="password" id="" value=""required>
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Password is required.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 50%;padding-right:0px;">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="company_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Comform Password</label>
                                                        <input type="password" placeholder="Comform Password" style="width=45%" class="form-control" name="password_1" id="" value=""required>
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
                                    <br>
                                    <div class="row">
                                        <div class="col-sm"></div>
                                        <div class="col-sm"></div>
                                        <div class="col-sm" style="padding-right: 0px;">
                                            <br>
                                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Create</button>
                                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">Cancel</button>
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
        <script>// change copany status @author:udayan
                function changestatus(param){
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
        </script>

@endsection