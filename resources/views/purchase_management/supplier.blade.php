@extends('layouts.hmsmain')
@section('content')





{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Supplier </b></h4>
    <br>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add
    Supplier </button>


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
                        <th scope="col">Supplier Name</th>
                        <th scope="col">Product Supply</th>
                        <th scope="col">Supplier Name</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td></td>
                        <td></td>
                        <td><a href="{{url('view_supplier')}}"> <i style="color:rgb(13, 1, 56);"
                                    class="fa fa-eye"></i><span class="m-2"></span>
                                <a href="{{url('edit_supplier')}}"><i style="color:rgb(13, 1, 56);"
                                        class="fa fa-edit"></i><span class="m-2"></span>
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="text-center"><b>Add Supplier </b></h2>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="" enctype="multipart/form-data">

                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="username">Supplier  Name</label>
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

                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="username">Product Supply</label>
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
                                        <label for="username">TAX ID</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="" id="username" required>
                                            <br>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Contact No</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="" id="username" required>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="email" class="form-control" name="" id="username" required>
                                            <br>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-1">
                                            <label for="username">Address</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">

                                                </div>
                                                <textarea class="form-control" rows="3"></textarea>
                                                <br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-1">
                                            <label for="username">City</label>
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
                                    <div class="col-md-6">
                                        <div class="mb-1">
                                            <label for="username">State</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">

                                                </div>
                                                <input type="text" class="form-control" name="" id="username" required>
                                                <br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-1">
                                            <label for="username">PIN code</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">

                                                </div>
                                                <input type="text" class="form-control" name="" id="username" required>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-1">
                                        <label for="username">Product Details</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" rows="3"></textarea>

                                            <br>
                                        </div>
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
                                    <br>
                                    <button type="submit" class="btn btn-primary float:right;"
                                        Style="width:45%;">Save</button>
                                    <button type="button" class="btn btn-primary float:right;"
                                        data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>





    @endsection