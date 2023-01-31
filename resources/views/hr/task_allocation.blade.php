@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:17px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> / 
    <a href="#" style="color: #1D1D50;">HR</a> /
    <a href="#" style="color: #1D1D50;">Task Allocation</a>
</nav>
<br><br>
<div class="container">
    <h4 id="hdtpa"><b> Task Allocation </b></h4>
    <br>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Task</button>

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
                                    <a href="{{ url('view_task_allocation') }}"><i style="color:black;"
                                            class="far fa-eye"></i></a>
                                    <span class="m-2"></span>
                                    <a href="{{ url('edit_task_allocation') }}"><i style="  color:rgb(13, 1, 56);"
                                            class="fa fa-edit"></i>
                                        <span class="m-2"></span>
                                        <a href="#"> <i style=" color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i></a>
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
            @endsection