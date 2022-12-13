@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}

<h4 id="hdtpa"><b>Businesss Law</b></h4>
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

                <th scope="col">Matter Info</th>
                <th scope="col">Client</th>
                <th scope="col">Matter Type</th>
                <th scope="col">Corporation</th>
                <th scope="col">Case Details</th>
                <th scope="col">Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach($view_business as $list)
            <tr>

                <td>{{$list->matter_info}}</td>
                <td>{{$list->client_name}}</td>
                <td>{{$list->matter_type}}</td>
                <td>{{$list->corporation}}</td>
                <td>{{$list->case_details}}</td>
                <td><a href="{{url('view_business_law') }}"><i style="color:rgb(13, 1, 56);"
                            class="fa fa-eye"></i><span class="m-2"></span>
                        <a href="{{url('edit_business_law',$list->id) }}"><i style="color:rgb(13, 1, 56);"
                                class="fa fa-edit"></i><span class="m-2"></span>
                            <a href="{{url('delete_business_law',$list->id) }}"> <i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i></td>

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
                    <form method="post" action="{{url('add_business_law')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="matter_info" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Client</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="client_name" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="matter_type" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
</br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Corporation</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" rows="2" name="corporation"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label" >Case Details</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" rows="2" name="case_details"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="exampleFormControlInput1" class="form-label">Supporting
                                            Details</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <span class="m-2"></span>
                                            <input type="file" class="form-control" name="supporting">
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