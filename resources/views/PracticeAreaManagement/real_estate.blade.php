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
            @foreach($view_estate as $list)
            <tr>

                <td>{{$list->file_no}}</td>
                <td>{{$list->matter_type}}</td>
                <td>{{$list->buyer}}</td>
                <td>{{$list->attroney}}</td>
                <td>{{$list->property}}</td>
                <td>{{$list->selling_realtor}}</td>
                <td><a href="{{ url('view_real_estate') }}"><i style="color:rgb(13, 1, 56);" class="fa fa-eye"></i><span
                            class="m-1"></span>
                        <a href="{{ url('edit_real_estate',$list->id) }}"><i style="color:rgb(13, 1, 56);"
                                class="fa fa-edit"></i><span class="m-1"></span>
                            <a href="{{ url('delete_real_estate',$list->id) }}"> <i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i></td>


            </tr>
            @endforeach

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
                    <form method="post" action="{{url('add_real_estate')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="container">

                            <div class="row">
                            <div class="col-md-4">
                                            <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">File No</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="file_no" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                            <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="client_name"  placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                            <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="matter_type"  placeholder="">
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
                                            <input type="text" class="form-control" name="buyer"  placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                            <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="attroney"  placeholder="">
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
                                            <textarea class="form-control" rows="2" name="property" ></textarea>
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
                                            <textarea class="form-control" rows="2" name="close_statement" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                            <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Listing Realtor</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" rows="2" name="listing_realtor" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                            <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Selling Realtor</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" rows="2" name="selling_realtor" ></textarea>
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
                                            <input type="text" class="form-control" placeholder="" name="company_title">
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
                                         
                                            <input type="file" class="form-control" name="support_detail" >
                                        </div>
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






            @endsection