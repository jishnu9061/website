@extends('layouts.hmsmain')
@section('content')

<div class="container">

    <h4 id="hdtpa"><b> Expense Reports </b></h4>
    <br>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add
        Expense </button>


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



        <!-- table -->

        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col"> Date </th>
                        <th scope="col"> Staff </th>
                        <th scope="col"> Expense Reference </th>
                        <th scope="col"> Task Assigned By </th>
                        <th scope="col"> Status </th>
                        <th scope="col"> Action </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="{{url('view_expense')}}"> <i style="color:rgb(13, 1, 56);" class="fa fa-eye"></i><span
                                    class="m-2"></span>
                                <a href="{{url('edit_expense')}}"><i style="color:rgb(13, 1, 56);" class="fa fa-edit"></i><span
                                        class="m-2"></span>
                                    <a href="{{url('')}}"><i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i>
                        </td>

                    </tr>
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
        <div class="rows_count">Showing 11 to 20 of 100</div>

        <!-- 		End of Container -->

    </div>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="text-center"><b>Add Expense </b></h2>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="" enctype="multipart/form-data">

                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="date" class="form-control" name="" id="username" required>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Staff Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" name="" id="username" required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Number is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Expense Reference</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" name="" id="username" required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Number is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Customer Type</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <select name="" id="cars">
                                                <option>select</option>
                                                <option>Individual</option>
                                                <option>Corporate</option>

                                            </select>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Number is required.
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Task Assigned By</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <select name="" id="cars">
                                                <option>select</option>
                                                <option>Marketing Department</option>
                                                <option></option>
                                            </select>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Billing Amount</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" name="" id="username" required>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Description</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <textarea class="form-control" rows="2"></textarea>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Status</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <select name="" id="cars">
                                                <option>Open</option>
                                                <option>In progress</option>
                                                <option>Pending</option>
                                                <option>Complete</option>
                                            </select>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Number is required.
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Supporting
                                            Details</label>
                                        <span class="m-2"></span>
                                        <input type="file" class="form-control" name="support_detail">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-sm">

                                </div>
                                <div class="col-sm">

                                </div>
                                <div class="col-sm">
                                    <br>
                                    <button type="submit" class="btn btn-primary float:right;"
                                        Style="width:45%;">Save</button>
                                    <button type="button" class="btn btn-primary float:right;" Style="width:45%;"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection