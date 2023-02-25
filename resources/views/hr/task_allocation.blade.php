@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">HR</a> /
    <a href="#" style="color: #1D1D50;">Task Allocation</a>
</nav>
<br><br>
<div class="container">
    <h4 id="hdtpa"><b> Task Allocation </b></h4>
    <br>
    <div class="row" style="height:50px;">
        <div class="col-sm-4" style="padding-top:5px;">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add New
                Task</button>
        </div>

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
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Task</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>

                                </tr>
                            </thead>
                            <tbody>



                                <tr>

                                    <td scope="row" class="text-center"></td>
                                    <td scope="row" class="text-center"></td>
                                    <td scope="row" class="text-center"></td>
                                    <td scope="row" class="text-center"></td>
                                    <td scope="row" class="text-center">
                                        <div class="btn-group">
                                            <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" style="border-color:none;"> ⋮ </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ url('view_task_allocation') }}">View
                                                    Task Allocation</a>
                                                {{-- <a class="dropdown-item" href="{{ url('edit_task_allocation') }}">Edit
                                                    Task Allocation</a> --}}
                                                    <a class="dropdown-item" data-toggle="modal"
                                                    data-target="#edit_task_allocation" href="#">Edit Task Allocation</a>
                                                {{-- <a class="dropdown-item" href="#">Delete Task Allocation</a> --}}
                                                <a class="dropdown-item"
                                                href="#"onclick=deletetaskallocation(this) data-id=""data-toggle="modal"
                                                data-target="#delete_task_allocation">Delete Task Allocation</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                        <br>
                    </div>
                    <!-- Start Pagination -->
                    <div class='pagination-container'>
                        <nav>
                            <ul class="pagination">
                                <!-- Here the JS Function Will Add the Rows -->
                            </ul>
                        </nav>
                    </div>
                    <div class="rows_count">Showing 11 to 20 of 100</div>

                    <!-- End of Container -->









                    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h2><b> Add Task </b></h2>

                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">
                                        <form method="post" action="{{ url('') }}" enctype="multipart/form-data">
                                            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
                                            @csrf
                                            <div class="container">
                                                <form>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Employee ID</label>
                                                                <input type="email" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Employee Name</label>
                                                                <input type="email" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Task</label>
                                                                <input type="email" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Department</label>
                                                                <select class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option selected>-- select --</option>
                                                                    <option value="1">Legal</option>
                                                                    <option value="1">Accounts</option>
                                                                    <option value="2">Receptionist</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Description</label>
                                                                <textarea class="form-control" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Task Status</label>
                                                                <select class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option selected>-- select --</option>
                                                                    <option value="1">Open</option>
                                                                    <option value="2">Over Due</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <br>
                                                    <br>
                                                    {{--sub heading --}}
                                                    <h5 id="hdbtb">Timeline</h5>
                                                    <br>


                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Expected Start Date </label>
                                                                <input type="email" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Expected End Date</label>
                                                                <input type="email" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Expected Time (in hours)</label>
                                                                <input type="email" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Duration (days)</label>
                                                                <input type="email" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">

                                                        </div>
                                                        <div class="form-group col-md-4">

                                                        </div>
                                                    </div>



                                                    <br>
                                                    <br>
                                                    {{--sub heading --}}
                                                    <h5 id="hdbtb">Costing</h5>
                                                    <br>


                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Total Costing Amount</label>
                                                                <input type="email" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Total Billing Amount</label>
                                                                <input type="email" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Total Expense Claim</label>
                                                                <input type="email" class="form-control">
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
                                                            <button type="button" class="btn btn-primary float:right;"
                                                                Style="width:45%;" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>




                                                </form>



                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>
{{-- Start Edit Task Allocation --}}
<div class="modal fade" id="edit_task_allocation" style="">
    <!-- edit task allocation -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post" action="" enctype="multipart/form-data" id="addemployee">
                @csrf
                <h5><b>Edit Task Allocation:-</b></h5>

                <div class="row">
                    <div class="" style="*/background-color: #d3d0ca;border-radius:5px;">
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="emp_id"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Employee Id</label>
                                        <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="emp_name"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Employee Name</label>
                                        <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="task"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Task</label>
                                        <input type="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="department"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Department</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>-- select --</option>
                                            <option value="1">Legal</option>
                                            <option value="1">Accounts</option>
                                            <option value="2">Receptionist</option>
                                        </select>
                                </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="description"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Description</label>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="3"></textarea>>
                                    </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="task_status"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Task Status</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- select --</option>
                                        <option value="1">Open</option>
                                        <option value="2">Over Due</option>
                                    </select>
                            </div>
                        </div>
                        <h5><b>Timeline:-</b></h5>
                        <div class="row" style="margin-top: 0px;">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="start_date"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Expected Start Date</label>
                                        <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="end_date"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Expected End Date</label>
                                    <input type="date" class="form-control">
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="time"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Expected Time (in hours)</label>
                                    <input type="text" class="form-control">
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="duration"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Duration (Days)</label>
                                    <input type="email" class="form-control">
                            </div>

                                            <h5><b>Costing:-</b></h5>

                                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                                <label for="total_amount"
                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Total Cost Amount</label>
                                                    <input type="text" class="form-control">
                                            </div>
                                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                                <label for="billing_amount"
                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Total Billing Amount</label>
                                                    <input type="text" class="form-control">
                                            </div>
                                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                                <label for="expense_claim"
                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Total Expense Claim</label>
                                                    <input type="email" class="form-control">
                                            </div>

                            <div class="row document_details " style="margin-bottom: 20px;">
                                {{-- Add More Document details:- javascript --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class style="width: 20%">
                </div>
                <div class="col-sm">

                    <button type="submit" class="btn btn-primary float:right;"
                        style="margin-left: 61%;--clr: #1D1D50;width:19%;
                        --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Update
                    </button>
                    <button type="button" class="btn btn-primary float:left" Style="width:19%;"
                        onclick="history.back()">Cancel</button>
                </div>
        </div>
        </form>
    </div>
</div>
{{-- End edit Quotation --}}
<div class="modal fade" id="delete_task_allocation" style=""> <!-- delete corporate -->
    <div class="modal-dialog modal-lg" style="width:30%;">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post"  id="delete_task_allocation" action="" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="id" value="id">
                <div class="modal-header" style="padding:0rem 0rem;">
                    <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Delete <span id="delete_task_allocation"></span></b></h4></div>
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

                @endsection
