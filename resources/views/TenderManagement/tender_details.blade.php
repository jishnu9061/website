@extends('layouts.hmsmain')
@section('content')


{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Tender Details</b></h4>
    <br>
    

    <input class="btn btn-primary" type="button" value="Add New Tender" data-toggle="modal" data-target="#myModal">
    <br>


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

                    <th scope="col">From Date</th>
                    <th scope="col">To Date</th>
                    <th scope="col">Item</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>

                <tr>

                    <td>17-12-2022</td>
                    <td>31-12-2022</td>
                    <td>Chairs</td>
                    <td>Teak wooden material chairs required. </td>
                    <td><span class="badge bg-success">Opened</span></td>
                    <td><a href="view_tender_details"><i style="color:rgb(13, 1, 56);" class="fa fa-eye"></i><span
                                class="m-2"></span>
                            <a href="edit_tender_details"><i style="color:rgb(13, 1, 56);" class="fa fa-edit"></i><span class="m-2"></span>
                                <a href=""> <i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i></td>

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







<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h2 class="text-centre"><b>Add Tender</b></h2>

            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form method="post" enctype="multipart/form-data" action="{{url('')}}">
                        @csrf
                        <div class="container">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">From Date</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">To Date</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Item</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputCity">Category</label>
                                    <select class="form-select form-select-lg mb-3"
                                        aria-label=".form-select-lg example">
                                        <option selected>--- select ---</option>
                                        <option value="1">Furniture</option>
                                        <option value="2">Stationary</option>

                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputZip">Quantity</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputAddress">Description</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="inputZip">Status</label>
                                    <div class="alert alert-success text-center" role="alert">
                                        Opened
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer" style="background-color:#d3e0ed;">
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>





            @endsection