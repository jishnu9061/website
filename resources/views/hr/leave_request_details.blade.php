@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <h4 id="hdtpa"><b> Leave Request Details </b></h4>
    <br>
    {{-- Modal --}}
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Apply Leave</button>
    {{-- Modal --}}
    <a href="{{url('approve_leave_request')}}"> <button type="button" class="btn btn-primary"> Approve Leave Request</button></a>
    <a href="{{url('leave_balance')}}"> <button type="button" class="btn btn-primary">Leave Balance</button></a>
    <div class="header_wrap">
        <div class="num_rows">
            <div class="form-group">
                <!--		Show Numbers Of Rows 		-->
                <select class="form-control" aria-label="Page navigation example" name="state" id="maxRows">

                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="70">70</option>
                    <option value="100">100</option>
                    <option value="5000">Show ALL Rows</option>
                </select>

            </div>
        </div>
        <div class="tb_search">
            <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.."
                class="form-control">
        </div>


        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-class" id="table-id">

                        <thead>

                            <tr>
                                <th class="text-center">Emp Id</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Department</th>
                                <th class="text-center">Leave Type</th>
                                <th class="text-center">Apply Date</th>
                                <th class="text-center">From Date</th>
                                <th class="text-center">To Date</th>
                                <th class="text-center">Date From</th>
                                <th class="text-center">Date To</th>
                                <th class="text-center">Number Of Days</th>
                                <th class="text-center">Leave Date From</th>
                                <th class="text-center">Leave Date To</th>
                                <th class="text-center">Reason</th>
                                <th class="text-center">Upload Document</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Remarks</th>
                                <th class="text-center">Action</th>

                            </tr>
                        </thead>
                        <tbody>


                            <tr>

                                <td scope="row" class="text-center">{{$leave->id}}</td>
                                <td scope="row" class="text-center">{{$leave->name}}</td>
                                <td scope="row" class="text-center">{{$leave->department}}</td>
                                <td scope="row" class="text-center">{{$leave->leave_type}}</td>
                                <td scope="row" class="text-center">{{$leave->apply_date}}</td>
                                <td scope="row" class="text-center">{{$leave->date_from}}</td>
                                <td scope="row" class="text-center">{{$leave->date_to}}</td>
                                <td scope="row" class="text-center">{{$leave->reason}}</td>
                                <td scope="row" class="text-center">{{$leave->document}}</td>
                                <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Requested
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#" value="Pending">Requested</a>
                                          <a class="dropdown-item" href="#">Accepted</a>
                                          <a class="dropdown-item" href="#">Rejected</a>

                                        </div>
                                      </div>
                            </td>
                            <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center">
                                    <a href=""><i style="color:rgb(13, 1, 56);"class="fa fa-eye"></i><span class="m-1"></span>
                                    <a href=""><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                                    {{-- <a href=""> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i> --}}


                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
                    <div class='pagination-container'>
                        <nav>
                            <ul class="pagination">
                                <!-- Here the JS Function Will Add the Rows -->
                            </ul>
                        </nav>
                    </div>
                    <div class="rows_count">Showing 11 to 20 of 100</div>
 <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" >

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h2 class="text-centre"><b>Leave Request</b></h2>

                                </div>

                                <!-- Modal body -->
                                <div class="modal-body" >
                                    <div class="container">
                                        <form method="post" action="{{ url('addleaverequest') }}"
                                            enctype="multipart/form-data">
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
@csrf

<div class="row">
    <div class="col-md-6">
        <div class="mb-1">
        <label >Name</label>
            <div class="input-group">
                <div class="input-group-prepend"></div>
                {{-- <input type="text"  id="" name="name"value="" class="form-control" > --}}
                <div class="invalid-feedback" style="width: 100%;">
                Required Field.
                </div>
                <select name="name" id="cars"required>
                    <option>---Select--- </option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>

                </select>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-1">
        <label >Department</label>
            <div class="input-group">
                <div class="input-group-prepend"></div>
                {{-- <input type="text"  id="" name="department"value="" class="form-control" > --}}
                <div class="invalid-feedback" style="width: 100%;">
                Required Field.
                </div>
                <select name="department" id="cars"required>
                    <option>---Select--- </option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>

                </select>
            </div>
        </div>
    </div>
</div>
   <div class="row">
                <div class="col-md-6">
                    <div class="mb-1">
                    <label >Apply Date</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="date"  id="" name="apply_date"value="" class="form-control" >
                            <div class="invalid-feedback" style="width: 100%;">
                            Required Field.
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label>Type</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <select name="leave_type" id="cars"required>
                                <option>---Select--- </option>
                                <option>Full Day</option>
                                <option>For Noon</option>
                                <option>After Noon</option>
                                <option>Casual Leave</option>
                                <option>Medical Leave</option>

                            </select>
                        </div>

                    </div>
                 </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <div class="mb-1">
                    <label >Date From </label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="date"  id="" name="date_from"value=""class="form-control">
                            <div class="invalid-feedback" style="width: 100%;">
                            Required Field.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label>Date To</label>

                            </div> <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="date"  id="" name="date_to"value=""class="form-control">
                            <div class="invalid-feedback" style="width: 100%;">
                                Required
                        </div>
                    </div>
                 </div>
                </div>
                <div class="row">
                 <div class="col-md-6">
                    <div class="mb-1">
                        <label>Number Of Days</label>

                            </div> <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="number"  id="" name="number_of_days"value=""class="form-control">
                            <div class="invalid-feedback" style="width: 100%;">
                                Required
                        </div>
                    </div>
                 </div>



                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >Reason</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                               <textarea type="text" name="reason" class="form-control"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div> <br>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Upload Document</label>

                                </div> <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="file"  id="" name="document"value=""class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required
                            </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-1">
                        <label >Remarks</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                               <textarea type="text" name="remarks" class="form-control"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div> <br>
                    </div>
                <div class="row">
     <div class="col-sm">
        <div class="mb-1">
            <label>Status</label>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Requested
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#" value="Pending">Requested</a>
                  <a class="dropdown-item" href="#">Accepted</a>
                  <a class="dropdown-item" href="#">Rejected</a>

                </div>
              </div>
        </div>
                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">Cancel</button>
                        <br>
                        <br>
                    </div>
                </div>

</form>
</div>
</div>
</div>
</div>





@endsection
