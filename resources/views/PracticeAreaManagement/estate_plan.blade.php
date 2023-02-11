@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="#" style="color: #1D1D50;">Estate Planning</a>
</nav>
<br><br>
{{-- heading --}}

<h4 id="hdtpa"><b>Estate Planning</b></h4>
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
                <th scope="col">Client</th>
                <th scope="col">Matter Type</th>
                <th scope="col">Estate Details</th>
                <th scope="col">Trust</th>
                <th scope="col">Property Details</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($view_plan as $list)
            <tr>
                <td>{{$list->file_no}}</td>
                <td>{{$list->client_name}}</td>
                <td>{{$list->matter_type}}</td>
                <td>{{$list->estate_details}}</td>
                <td>{{$list->trust}}</td>
                <td>{{$list->property_details}}</td>
                <td><a href="{{ url('view_estate_plan',$list->id) }}"><i style="color:rgb(13, 1, 56);" class="fa fa-eye"></i><span
                            class="m-1"></span>
                        <a href="{{ url('edit_estate_plan',$list->id) }}"><i style="color:rgb(13, 1, 56);"
                                class="fa fa-edit"></i><span class="m-1"></span>
                            <a href="{{ url('delete_estate_plan',$list->id) }}"> <i style="color:rgb(13, 1, 56);"
                                    class="fas fa-trash-alt"></i></td>
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

<!-- 		End of Container -->







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
                    <form method="post" action="{{url('add_estate_plan')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">File No</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" placeholder="" name="file_no">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" placeholder="" name="client_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" placeholder="" name="matter_type">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Estate Details</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <textarea class="form-control" rows="2" placeholder=""
                                                name="estate_details"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Trust</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <textarea class="form-control" rows="2" placeholder=""
                                                name="trust"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Property
                                            Details</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <textarea class="form-control" rows="2" name="property_details"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Accountant</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" placeholder="" name="accoundant">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Financial
                                            Advisor</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" placeholder="" name="financier">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">

                                </div>
                            </div>

                            <div class="row">
                                <div class="col">

                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                                <span class="m-2"></span>
                                <input type="file" class="form-control" name="support">
                            </div>
                        </div>
                </div>
                <br>
                <br>


                <div class="container text-center">
                    <button type="submit" class="btn btn-primary" style="width:15%">Save</button>
                    <button type="button" class="btn btn-primary" style="width:15%" data-dismiss="modal">Close</button>
                </div>
            </div>

            </form>
        </div>











        @endsection