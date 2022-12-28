@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <h4 id="hdtpa"><b> Internal Memos </b></h4>
    <br>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Memo</button>

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
    </div>



    <div class="table-responsive">
        <table class="table text-center">
            <thead>
                <tr>

                    <th scope="col">Date</th>
                    <th scope="col">Memo From</th>
                    <th scope="col">Memo To</th>
                    <th scope="col">Department</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="{{ url('view_memo') }}"><i style="color:rgb(13, 1, 56);" class="fa fa-eye"></i><span
                                class="m-2"></span>
                            <a href="{{ url('edit_memo') }}"><i style="color:rgb(13, 1, 56);"
                                    class="fa fa-edit"></i><span class="m-2"></span>
                                <a href="{{ url('') }}"> <i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i>
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


    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->

    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="text-centre"><b>Add Memo</b></h2>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="{{url('')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Date</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <input type="date" class="form-control" placeholder=""
                                                    name="matter_info">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Memo From</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <input type="text" class="form-control" placeholder="" name="executor">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Memo To</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <input type="text" class="form-control" placeholder=""
                                                    name="matter_type">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Subject</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <input type="text" class="form-control" placeholder=""
                                                    name="matter_info">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Department</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <input type="text" class="form-control" placeholder=""
                                                    name="matter_info">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Description</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Supporting
                                                Details</label>
                                            <span class="m-2"></span>
                                            <input type="file" class="form-control" name="supporting_details">
                                        </div>
                                    </div>
                                    <br>

                                    <div>
                                        <button type="button" class="btn btn-primary float-right"
                                            data-dismiss="modal">Close</button>
                                        <span class="m-2"></span>
                                        <button type="submit" class="btn btn-primary float-right">Save</button>
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