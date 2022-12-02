@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}

<h4 id="hdtpa"><b>Real Estate</b></h4>
<br>

<input class="btn btn-primary" type="button" value="Add New Matter" data-toggle="modal" data-target="#myModal">
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

                <th scope="col">File No</th>
                <th scope="col">Matter Type</th>
                <th scope="col">Buyer</th>
                <th scope="col">Attorney</th>
                <th scope="col">Property Details</th>
                <th scope="col">Selling Realtor</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td>62G5585W</td>
                <td>Sell</td>
                <td>Patrick</td>
                <td>Dewey Cheatum</td>
                <td>1522, Los Angles pin:123 456</td>
                <td>Joan Ferrata</td>
                <td><a href="{{ url('view_real_estate') }}"><i style="color:rgb(13, 1, 56);" class="fa fa-eye"></i><span
                            class="m-1"></span>
                        <a href="{{ url('edit_real_estate') }}"><i style="color:rgb(13, 1, 56);"
                                class="fa fa-edit"></i><span class="m-1"></span>
                            <a href="#"> <i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i></td>


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

<!-- End of Container -->






<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h2 class="text-centre"><b>Add Matter</b></h2>

            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form method="post" enctype="multipart/form-data">
                        <div class="container">

                            <div class="row">
                            <div class="col-md-4">
                                            <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">File No</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                            <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                            <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-md-4">
                                            <div class="mb-1">
                                  
                                        <label for="exampleFormControlInput1" class="form-label">Buyer</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                            <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                            <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Property
                                            Details</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-md-4">
                                            <div class="mb-1">
                                   
                                        <label for="exampleFormControlInput1" class="form-label">Closing
                                            Statement</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                            <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Listing Realtor</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                            <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Selling Realtor</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-md-6">
                                            <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Company Title</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                            <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Supporting
                                            Details</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                         
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                      

                        <div class="modal-footer" style="background-color:#d3e0ed;">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                </div>

                </form>
            </div>






            @endsection