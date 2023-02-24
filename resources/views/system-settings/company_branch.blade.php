@extends('layouts.hmsmain')
@section('content')
    <style>
        .fa-ban,
        .fa-bell {
            color: red;
        }

        .fa-ban,
        .fa-bell {
            padding: 5px;
        }
        .label_formBranch{
            width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;
        }
        .input_formBranch{
            height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;
        }
        .input_formBranch:active{
            border-color: #1d1d50;
        }
        .dropdown-item:hover{
            */background-color: #1D1D50;
            color:#1d1d50;
        }
        .employee_list_class{
            cursor: pointer;
        }
        .employee_list_class:hover {
            color:#1d1d50;
        }

    </style>
    <nav style="font-size:15px;">
        <a href="{{ url('home') }}" style="color: #1D1D50;">Home</a> /
        <a href="#" style="color: #1D1D50;">Company Setup</a> /
        <a href="#" style="color: #1D1D50;">Branch</a>
    </nav>
    <br>
        <div class="container">
            <div class="row" style="height:50px;">
                <div class="col-sm-4" style="padding-top:5px;">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#addBranch"style="margin-left:10px;    --clr: #1D1D50;
                        --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Create
                    Branch</button>
                </div>
                <div class="col-sm-4" style="">
                    <h3
                        style="border: 0.5px solid #f1d9b0;
                        border-radius: 25px;
                        background-color: #f1d9b0;
                        padding: 3%;
                        width: 100%;
                        height:90%;
                        text-align:center;
                        box-shadow: inset 0 0 3px #d3d0ca;
                        opacity: .9;">
                        <b style="font-size:20px;">Company Branch</b>
                    </h3>
                </div>
                <div class="col-sm-4" style="">
                </div>
            </div>
            <br><br><?php $branch_count_foreach=0; ?>
            <div class="row" style="justify-content: space-between">
                @foreach ($branch_details as $branch){{-- #FFB458   f1d9b0 --}}
                    <div class="card" style="width: 30%;background-color:#f1d9b0;">
                        <div class="p-2" style="display: inline-block; width:fit-content; position: absolute;right: 0; ">
                            @if($branch->status==1)
                                <i class="fa fa-circle" style="color:#0edb7c;"></i>
                                @else
                                <i class="fa fa-circle" style="color:#FF6F61;"></i>
                            @endif
                            <div class="btn-group" >
                                <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" style="border-color:none;border:none;font-weight:bold;"> ⋮ </a>
                                <div class="dropdown-menu" style="*/line-height:5px;">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#viewBranch"data-id="{{ $branch->id }}"
                                    href="#" onclick="viewBranch(this)">View Branch</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#editBranch"data-id="{{ $branch->id }}"
                                        href="#" onclick="editBranch(this)">Edit Branch</a>
                                    <a class="dropdown-item"
                                            href="#"onclick=deleteBranch(this) data-name="{{ $branch->branch_name }}"
                                            data-id="{{ $branch->id }}"data-toggle="modal"
                                            data-target="#deleteBranch">Delete Branch</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="padding-bottom:5px;">
                            <div style="display: flex;">
                                <div class="card-title m-0 " style="padding: 0px 10px 0px 0px; font-size:20px; ">{{ $branch->branch_name }}  </div>
                                <a style="color:#00699F;text-decoration: none;"   href="{{url('employee_list')."?"."search=".$branch->branch_name }}"data-name="{{ $branch->branch_name }}" >
                                <i class="fa fa-users employee_list_class" aria-hidden="true"></i> <span style="font-size: 18px; cursor: default;">{{ $employee_count[$branch_count_foreach] }}</span> </a>
                            </div>
                            <div style="line-height:1.25rem; color:#1d1d50;">
                                    <p class="card-text mt-1 mb-1"> <b> City/Town:</b> {{ $branch->town }}</p>
                                    <p class="card-text mt-1 mb-1" > <b> Address:</b> {{ $branch->address }}</p>
                                    <p class="card-text mt-1 mb-1" > <b> State/Province:</b> </p>
                                    <p class="card-text mt-1 mb-1" > <b> Country:</b> </p>
                                    <p><b><i class="fa fa-envelope" style="color:#00699F" aria-hidden="true"></i></i></b>  {{ $branch->email }}</p>
                                    <p><b><i class="fa fa-phone-square" style="color:#00699F" aria-hidden="true"></i></b>  {{ $branch->telephone }}</p>
                            </div>
                        </div>
                    </div><?php ++$branch_count_foreach;?>
                @endforeach
            </div>
        </div>
        <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
        <div class="modal fade" id="addBranch" style=""> {{-- add branch --}}
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="">
                    <!-- Modal Header -->
                    <div class="modal-header" style="padding:0px">
                        <div style=""><h4 class="text-centre"><b>Create Branch:-</b></h4></div>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body" style="padding:0px">
                        <div class="container">
                            <form method="post" action="{{ url('add_company_branch') }}"
                                enctype="multipart/form-data">
                                <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
                                @csrf
                                <input class="form-control" type="hidden" id=""
                                    name="company_id" value="{{ Auth::user()->company_id }}">
                                <div class="row">
                                    <div class="" style="width: 40%">
                                        <div class=""><span style="color: red">*</span>
                                            <label for="branch_name" class="label_formBranch">Branch Name</label>
                                            <input type="text" placeholder="Branch Name" class="form-control input_formBranch " name="branch_name" id="" value=""required>
                                        </div>
                                    </div>
                                    <div class="" style="width: 20%">
                                        <div class="" style="padding-top:10px;">
                                            <label for="branch_code" class="label_formBranch">Branch Code</label>
                                            <input type="text" placeholder="Branch Code" class="form-control input_formBranch " name="branch_code" id="" value="">
                                        </div>
                                    </div>
                                    <div class="" style="width: 40%">
                                        <div class="" style="padding-top:10px;">
                                            <label for="website" class="label_formBranch">Branch Website</label>
                                            <input type="text" placeholder="Branch Website" class="form-control input_formBranch " name="website" id="" value="">
                                        </div>
                                    </div>
                               </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-1" style="padding-top:10px;">
                                            <label for="paddress" class="label_formBranch">Postal Address:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <textarea rows="4" cols="50" style="border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                 placeholder="Postal Address"name="paddress" class="form-control" type="text"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-1" style="padding-top:10px;">
                                            <label for="physicaladd" class="label_formBranch">Physical Address:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                    <textarea rows="4" cols="50" style="border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                     placeholder="Physical Address" name="physicaladd" class="form-control" type="text"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="" style="width: 33%">
                                        <div class=""><span style="color: red">*</span>
                                            <label for="town" class="label_formBranch">City/Town</label>
                                            <input type="text" placeholder="City/Town" class="form-control input_formBranch " name="town" id="" value=""required>
                                        </div>
                                    </div>
                                    <div class="" style="width: 33.5%">
                                        <div class="" style="padding-top:10px;">
                                            <label for="state" class="label_formBranch">State/Province</label>
                                            <input type="text" placeholder="State/Province" class="form-control input_formBranch " name="state" id="" value="">
                                        </div>
                                    </div>
                                    <div class="" style="width: 33.5%">
                                        <div class="" style="padding-top:10px;">
                                            <label for="country" class="label_formBranch">Country</label>
                                            <input type="text" placeholder="Country" class="form-control input_formBranch " name="country" id="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="" style="width: 30%">
                                        <div class="" style="padding-top:10px;">
                                            <label for="pincode" class="label_formBranch">Zip/Postal Code</label>
                                            <input type="text" placeholder="Zip/Postal Code" class="form-control input_formBranch " name="pincode" id="" value="">
                                        </div>
                                    </div>
                                    <div class="" style="width: 30%">
                                        <div class="" style="padding-top:10px;">
                                            <label for="telephone" class="label_formBranch">Phone Number</label>
                                            <input type="text" placeholder="Phone Number" class="form-control input_formBranch " name="telephone" id="" value="">
                                        </div>
                                    </div>
                                    <div class="" style="width: 40%">
                                        <div class=""><span style="color: red">*</span>
                                            <label for="email" class="label_formBranch">Email</label>
                                            <input type="email" placeholder="Country" class="form-control input_formBranch " name="email" id="" value="@"required>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm">

                                    </div>
                                    <div class="col-sm">

                                    </div>
                                    <div class="col-sm">
                                        <button type="submit" class="btn btn-primary float:right;"
                                            Style="width:50%;color:white;background-color:#1d1d50;">Create</button>
                                        <button type="button" class="btn btn-primary float:left"
                                            Style="width:45%;"data-dismiss="modal">Cancel</button>
                                    </div>
                                 </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="viewBranch" style=""> {{-- view branch --}}
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="">
                    <!-- Modal Header -->
                    <div class="modal-header" style="padding:0px">
                        <div style=""><h4 class="text-centre"><b>Branch details</b></h4></div>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body" style="padding:0px">
                        <div class="container">
                                <div class="row">
                                    <div class="" style="width: 40%">
                                        <div class=""><span style="color: red">*</span>
                                            <label for="branch_name" class="label_formBranch">Branch Name</label>
                                            <input type="text" placeholder="Branch Name" class="form-control input_formBranch " name="" id="v_branch_name" value=""readonly>
                                        </div>
                                    </div>
                                    <div class="" style="width: 20%">
                                        <div class="" style="padding-top:10px;">
                                            <label for="branch_code" class="label_formBranch">Branch Code</label>
                                            <input type="text" placeholder="Branch Code" class="form-control input_formBranch " name="" id="v_branch_name" value=""readonly>
                                        </div>
                                    </div>
                                    <div class="" style="width: 40%">
                                        <div class="" style="padding-top:10px;">
                                            <label for="website" class="label_formBranch">Branch Website</label>
                                            <input type="text" placeholder="Branch Website" class="form-control input_formBranch " name="" id="v_website" value=""readonly>
                                        </div>
                                    </div>
                               </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-1" style="padding-top:10px;">
                                            <label for="paddress" class="label_formBranch">Postal Address:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <textarea rows="4" cols="50" style="border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                 placeholder="Postal Address"name="" id="v_paddress" class="form-control" type="text" readonly></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-1" style="padding-top:10px;">
                                            <label for="physicaladd" class="label_formBranch">Physical Address:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                    <textarea rows="4" cols="50" style="border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                     placeholder="Physical Address" name="" id="e_physicaladd"class="form-control" type="text" readonly></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="" style="width: 33%">
                                        <div class=""><span style="color: red">*</span>
                                            <label for="town" class="label_formBranch">City/Town</label>
                                            <input type="text" placeholder="City/Town" class="form-control input_formBranch " name="" id="v_town" value=""readonly>
                                        </div>
                                    </div>
                                    <div class="" style="width: 33.5%">
                                        <div class="" style="padding-top:10px;">
                                            <label for="state" class="label_formBranch">State/Province</label>
                                            <input type="text" placeholder="State/Province" class="form-control input_formBranch " name="" id="v_state" value=""readonly>
                                        </div>
                                    </div>
                                    <div class="" style="width: 33.5%">
                                        <div class="" style="padding-top:10px;">
                                            <label for="country" class="label_formBranch">Country</label>
                                            <input type="text" placeholder="Country" class="form-control input_formBranch " name="" id="v_country" value=""readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="" style="width: 30%">
                                        <div class="" style="padding-top:10px;">
                                            <label for="pincode" class="label_formBranch">Zip/Postal Code</label>
                                            <input type="text" placeholder="Zip/Postal Code" class="form-control input_formBranch " name="" id="v_pincode" value=""readonly>
                                        </div>
                                    </div>
                                    <div class="" style="width: 30%">
                                        <div class="" style="padding-top:10px;">
                                            <label for="telephone" class="label_formBranch">Phone Number</label>
                                            <input type="text" placeholder="Phone Number" class="form-control input_formBranch " name="" id="v_telephone" value=""readonly>
                                        </div>
                                    </div>
                                    <div class="" style="width: 40%">
                                        <div class=""><span style="color: red">*</span>
                                            <label for="email" class="label_formBranch">Email</label>
                                            <input type="email" placeholder="Country" class="form-control input_formBranch " name="" id="v_email" value=""readonly>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="status" style="width: 100px;margin:0px 2px 2px 0px;font-size:10px;">Staus</label>
                                        <select class="form-select" aria-label="Default select example" title="status"style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"name="" id="v_status"disabled="true">
                                            <option value="0">InActive</option>
                                            <option value="1">Active</option>
                                        </select>
                                    </div>
                                    <div class="col-sm">

                                    </div>
                                    <div class="col-sm">
                                    </div>
                                 </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editBranch" style=""> {{-- Update branch --}}
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="">
                    <!-- Modal Header -->
                    <div class="modal-header" style="padding:0px">
                        <div style=""><h4 class="text-centre"><b>Update Branch</b></h4></div>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body" style="padding:0px">
                        <div class="container">
                            <form method="post"  id="update_branch"
                                enctype="multipart/form-data">
                                <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
                                @csrf
                                <input class="form-control" type="hidden"
                                name="branch_id" id="branch_id" value="">
                                <div class="row">
                                    <div class="" style="width: 40%">
                                        <div class=""><span style="color: red">*</span>
                                            <label for="branch_name" class="label_formBranch">Branch Name</label>
                                            <input type="text" placeholder="Branch Name" class="form-control input_formBranch " name="e_branch_name" id="e_branch_name" value=""required>
                                        </div>
                                    </div>
                                    <div class="" style="width: 20%">
                                        <div class="" style="padding-top:10px;">
                                            <label for="branch_code" class="label_formBranch">Branch Code</label>
                                            <input type="text" placeholder="Branch Code" class="form-control input_formBranch " name="e_branch_code" id="e_branch_name" value="">
                                        </div>
                                    </div>
                                    <div class="" style="width: 40%">
                                        <div class="" style="padding-top:10px;">
                                            <label for="website" class="label_formBranch">Branch Website</label>
                                            <input type="text" placeholder="Branch Website" class="form-control input_formBranch " name="e_website" id="e_website" value="">
                                        </div>
                                    </div>
                               </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-1" style="padding-top:10px;">
                                            <label for="paddress" class="label_formBranch">Postal Address:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <textarea rows="4" cols="50" style="border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                 placeholder="Postal Address"name="e_paddress" id="e_paddress" class="form-control" type="text"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-1" style="padding-top:10px;">
                                            <label for="physicaladd" class="label_formBranch">Physical Address:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                    <textarea rows="4" cols="50" style="border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                     placeholder="Physical Address" name="e_physicaladd" id="e_physicaladd"class="form-control" type="text"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="" style="width: 33%">
                                        <div class=""><span style="color: red">*</span>
                                            <label for="town" class="label_formBranch">City/Town</label>
                                            <input type="text" placeholder="City/Town" class="form-control input_formBranch " name="e_town" id="e_town" value=""required>
                                        </div>
                                    </div>
                                    <div class="" style="width: 33.5%">
                                        <div class="" style="padding-top:10px;">
                                            <label for="state" class="label_formBranch">State/Province</label>
                                            <input type="text" placeholder="State/Province" class="form-control input_formBranch " name="e_state" id="e_state" value="">
                                        </div>
                                    </div>
                                    <div class="" style="width: 33.5%">
                                        <div class="" style="padding-top:10px;">
                                            <label for="country" class="label_formBranch">Country</label>
                                            <input type="text" placeholder="Country" class="form-control input_formBranch " name="e_country" id="e_country" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="" style="width: 30%">
                                        <div class="" style="padding-top:10px;">
                                            <label for="pincode" class="label_formBranch">Zip/Postal Code</label>
                                            <input type="text" placeholder="Zip/Postal Code" class="form-control input_formBranch " name="e_pincode" id="e_pincode" value="">
                                        </div>
                                    </div>
                                    <div class="" style="width: 30%">
                                        <div class="" style="padding-top:10px;">
                                            <label for="telephone" class="label_formBranch">Phone Number</label>
                                            <input type="text" placeholder="Phone Number" class="form-control input_formBranch " name="e_telephone" id="e_telephone" value="">
                                        </div>
                                    </div>
                                    <div class="" style="width: 40%">
                                        <div class=""><span style="color: red">*</span>
                                            <label for="email" class="label_formBranch">Email</label>
                                            <input type="email" placeholder="Country" class="form-control input_formBranch " name="e_email" id="e_email" value=""required>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="status" style="width: 100px;margin:0px 2px 2px 0px;font-size:10px;">Staus</label>
                                        <select class="form-select" aria-label="Default select example" title="status"style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"name="e_status" id="e_status"required>
                                            <option value="0">InActive</option>
                                            <option value="1">Active</option>
                                        </select>
                                    </div>
                                    <div class="col-sm">

                                    </div>
                                    <div class="col-sm">
                                        <button type="submit" class="btn btn-primary float:right;"
                                            Style="width:50%;color:white;background-color:#1d1d50;">Update</button>
                                        <button type="button" class="btn btn-primary float:left"
                                            Style="width:45%;"data-dismiss="modal">Cancel</button>
                                    </div>
                                 </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <div class="modal fade" id="deleteBranch" style=""><!-- delete branch -->
            <div class="modal-dialog modal-lg" style="width:30%;">
                <div class="modal-content">
                    <!---- Modal Header -->
                    <form method="post"  id="delete_branch" action="#" enctype="multipart/form-data"> 
                        @csrf
                        <div class="modal-header" style="padding:0rem 0rem;">
                            <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Delete <span id="deleteBranch_name"></span></b></h4></div>
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
                                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;background-color:#FF6F61;">Yes</button>
                                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">No</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function deleteBranch(param){// delete Branch
                var deleteBranchid = $(param).data('id');
                var deleteBranch_name = $(param).data('name');
                document.getElementById("deleteBranch_name").innerHTML = deleteBranch_name;
                $('#delete_branch').attr('action',"{{ url('delete_company_branch') }}"+"/"+deleteBranchid);
            }
            function editBranch(param){// edit branch get details 
                var branch_id = $(param).data('id');
                $.ajax({
                    type: "GET",
                    url: 'edit_company_branch/'+branch_id,
                    success: function(response){
                        $('#e_branch_name').val(response.result.branch_name);
                        $('#e_branch_code').val(response.result.branch_code);
                        $('#e_website').val(response.result.website);
                        $('#e_paddress').val(response.result.address);
                        $('#e_physicaladd').val(response.result.physical_address);
                        $('#e_town').val(response.result.town);
                        $('#e_state').val(response.result.State);
                        $('#e_country').val(response.result.country);
                        $('#e_pincode').val(response.result.pincode);
                        $('#e_telephone').val(response.result.telephone);
                        $('#e_email').val(response.result.email);
                        $('#e_status').val(response.result.status);
                        $('#branch_id').val(branch_id);
                        $('#update_branch').attr('action',"{{ url('update_company_branch') }}"+"/"+branch_id);
                    }
                });
            }
            function viewBranch(param){// view branch get details 
                var branch_id = $(param).data('id');
                $.ajax({
                    type: "GET",
                    url: 'edit_company_branch/'+branch_id,
                    success: function(response){
                        $('#v_branch_name').val(response.result.branch_name);
                        $('#v_branch_code').val(response.result.branch_code);
                        $('#v_website').val(response.result.website);
                        $('#v_paddress').val(response.result.address);
                        $('#v_physicaladd').val(response.result.physical_address);
                        $('#v_town').val(response.result.town);
                        $('#v_state').val(response.result.State);
                        $('#v_country').val(response.result.country);
                        $('#v_pincode').val(response.result.pincode);
                        $('#v_telephone').val(response.result.telephone);
                        $('#v_email').val(response.result.email);
                        $('#v_status').val(response.result.status);
                    }
                });
            }
        </script>

@endsection

