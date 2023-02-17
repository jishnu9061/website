@extends('layouts.hmsmain')
@section('content')

<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="#" style="color: #1D1D50;">Family Law</a>
</nav>
<br><br>

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Family Law</b></h4>
    <br>


    {{-- <input class="btn btn-primary" type="button" value="Add New Matter" data-toggle="modal" data-target="#myModal"> --}}
    <button type="button" class="btn btn-primary" data-toggle="modal"
    data-target="#myModal"style="margin-left:10px;    --clr: #1D1D50;
--outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add New Matter</button>
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

                    <th scope="col">File No</th>
                    <th scope="col">Client Name</th>
                    <th scope="col">Matter Type</th>
                    <th scope="col">Other Party</th>
                    <th scope="col">Case Detail</th>
                    <th scope="col">Attorney</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach($view_law as $list)
                <tr>

                    <td>{{$list->file_no}}</td>
                    <td>{{$list->client_name}}</td>
                    <td>{{$list->matter_type}}</td>
                    <td>{{$list->other_party}}</td>
                    <td>{{$list->case_details}}</td>
                    <td>{{$list->attorney}}</td>
                    {{-- <td><a href="{{ url('view_family_law',$list->id) }}"><i style="color:rgb(13, 1, 56);"
                                class="fa fa-eye"></i><span class="m-2"></span>
                            <a href="{{ url('edit_family_law',$list>id) }}"><i style="color:rgb(13, 1, 56);"
                                    class="fa fa-edit"></i><span class="m-2"></span>
                                <a href="{{url('delete_law',$list->id)}}"> <i style="color:rgb(13, 1, 56);"
                                        class="fas fa-trash-alt"></i></td> --}}
                                        <td scope="row"class="text-center">
                                            <div class="btn-group">
                                                <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" style="border-color:none;"> ⋮ </a>

                                           <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{ url('view_family_law',$list->id) }}">View Family Law</a>
                                            <a class="dropdown-item"
                                                href="{{ url('edit_family_law',$list->id) }}">Edit Family Law</a>
                                            <a class="dropdown-item"
                                                href="{{url('delete_law',$list->id)}}">Delete Family Law</a>
                                        </div>
                                            </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>



    {{-- <!--		Start Pagination -->
    <div class='pagination-container'>
        <nav>
            <ul class="pagination">
                <!--	Here the JS Function Will Add the Rows -->
            </ul>
        </nav>
    </div>
    <div class="rows_count">Showing 11 to 20 of 100</div>

    <!-- 		End of Container --> --}}

    <!--		Start Pagination -->
    <div class='pagination-container'>
        <nav>
            <ul class="pagination">
                <li data-page="prev">
                    <span>
                        < <span class="sr-only">(current)
                    </span></span>
                </li>
                <li data-page="next" id="prev">
                    <span> > <span class="sr-only">(current)</span></span>
                </li>
            </ul>
        </nav>
    </div>
    <div class="rows_count"></div>
</div>
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
                    <form method="post" enctype="multipart/form-data" action="{{url('add_family_law')}}">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="username" >File No</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" placeholder="" name="file_no"
                                                id="username" required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Postal Code is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="username" >Client Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" placeholder="" name="client_name"
                                                id="username" required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Postal Code is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="username" >Matter Type</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" placeholder="" name="matter_type"
                                                id="username" required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Postal Code is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="username">Other Party</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" placeholder="" name="other_party"
                                                id="username" required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Postal Code is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="username" >Attorney</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" placeholder="" name="attorney"
                                                id="username" required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Postal Code is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="username" >Case Details</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <textarea class="form-control" rows="2" name="case_details"
                                                id="username" required></textarea>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Postal Code is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="username">Marriage
                                            Details</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <textarea class="form-control" rows="2" name="marrige"
                                                id="username" required></textarea>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Postal Code is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="username" >Property
                                            Details</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <textarea class="form-control" rows="2" name="property"
                                                id="username" required></textarea>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Postal Code is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="username">Child Details</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <textarea class="form-control" rows="2" name="child_details"
                                                id="username" required></textarea>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Postal Code is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col">

                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username" >Supporting Details</label>
                                <span class="m-2"></span>
                                <input type="file" class="form-control" name="support_detail" id="username" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Postal Code is required.
                                </div>
                            </div>
                        </div>
                </div>
                <br>
                <br>

                <div class="container text-center">
                    <button type="submit" class="btn btn-primary" style="width:20%">Save</button>
                    <button type="button" class="btn btn-primary" style="width:20%" data-dismiss="modal">Close</button>
                </div>
            </div>

            </form>
        </div>





        @endsection
