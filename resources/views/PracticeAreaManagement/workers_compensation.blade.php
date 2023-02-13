@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="#" style="color: #1D1D50;">Workers Compensation</a>
</nav>
<br><br>
{{-- heading --}}

<h4 id="hdtpa"><b>Workers Compensation</b></h4>
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
    <table class="table text-center" id="table-id">
        <thead>
            <tr>

                <th scope="col">Matter Info</th>
                <th scope="col">Petitioner</th>
                <th scope="col">Matter Type</th>
                <th scope="col">Respondent</th>
                <th scope="col">Insurer</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($view_employee as $list)
            <tr>

                <td>{{$list->matter_info}}</td>
                <td>{{$list->petitioner}}</td>
                <td>{{$list->matter_type}}</td>
                <td>{{$list->respondent}}</td>
                <td>{{$list->insurer}}</td>
                <td><a href="{{ url('view_workers_compensation',$list->id) }}"><i style="color:rgb(13, 1, 56);"
                            class="fa fa-eye"></i><span class="m-1"></span>
                        <a href="{{ url('edit_workers_compensation',$list->id) }}"><i style="color:rgb(13, 1, 56);"
                                class="fa fa-edit"></i><span class="m-1"></span>
                            <a href="{{ url('delete_workers_compensation',$list->id) }}"> <i
                                    style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i></td>


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
                    <form method="post" enctype="multipart/form-data" action="{{url('add_workers_compensation')}}">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" value="" name="matter_info" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Petitioner</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" value="" name="petitioner" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" value="" name="matter_type" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Respondent</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" value="" name="respondent" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" value="" name="attroney" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Insurer</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <textarea class="form-control" rows="2" name="insurer" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Adjuster</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" placeholder="" name="adjuster" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <textarea class="form-control" rows="2" name="case_detail" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Employee Doctor</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" placeholder=""
                                                name="employee_doctor" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Employment &
                                                Benefit Details</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <input type="text" class="form-control" placeholder=""
                                                    name="benefit_detail" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Supporting
                                                Details</label>
                                            <span class="m-2"></span>
                                            <input type="file" class="form-control" name="supporting_details" required>
                                        </div>
                                    </div>
                                </div>

                            </div>



                        </div>
                        <br>
                        <br>





                        <div class="container text-center">
                            <button type="submit" class="btn btn-primary" style="width:15%">Save</button>
                            <button type="button" class="btn btn-primary" style="width:15%"
                                data-dismiss="modal">Close</button>
                        </div>
                </div>

                </form>
            </div>






            @endsection