@extends('layouts.hmsmain')
@section('content')


{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>General Practice</b></h4>
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
                    <th scope="col">Client Name</th>
                    <th scope="col">Matter Type</th>
                    <th scope="col">Other Party</th>
                    <th scope="col">Case Details</th>
                    <!-- <th scope="col">Matter Stage</th> -->
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>

                @foreach($view_practice as $list)
                <tr>

                    <td>{{$list->file_no}}</td>
                    <td>{{$list->client_name}}</td>
                    <td>{{$list->matter_type}}</td>
                    <td>{{$list->other_party}}</td>
                    <td>{{$list->case_details}}</td>
                    <!-- <td>Negotation</td> -->
                    <td><a href="{{ url('view_general_practice') }}"><i style="color:rgb(13, 1, 56);"
                                class="fa fa-eye"></i><span class="m-2"></span>
                            <a href="{{ url('edit_general_practice',$list->id) }}"><i style="color:rgb(13, 1, 56);"
                                    class="fa fa-edit"></i><span class="m-2"></span>
                                <a href="{{ url('delete_practice',$list->id) }}"> <i style="color:rgb(13, 1, 56);"
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


</div>







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
                    <form method="post" enctype="multipart/form-data" action="{{url('add_practice')}}">


                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">File No</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control" name="file_no" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control" name="client_name" placeholder="">
                                    </div>
                                </div>
                            </div>
                       
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="text" class="form-control" name="matter_type" placeholder="">
                                </div>
                            </div>
                        </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label">Other Party</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="other_party" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="attorney" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control" name="case_details" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label">Witness</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="witness" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                            <span class="m-2"></span>
                            <input type="file" class="form-control" name="detail">
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