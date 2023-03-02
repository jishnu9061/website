@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="#" style="color: #1D1D50;">Guardianship Law</a>
</nav>
<br><br>
{{-- heading --}}

<h4 id="hdtpa"><b>Guardianship Law</b></h4>
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

                <th scope="col">Matter Info</th>
                <th scope="col">Petitioner</th>
                <th scope="col">Matter Type</th>
                <th scope="col">Disabled Person</th>
                <th scope="col">Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach($guardian_list as $list)
            <tr>

                <td>{{$list->matter_info}}</td>
                <td>{{$list->petitioner}}</td>
                <td>{{$list->matter_type}}</td>
                <td>{{$list->disable_person}}</td>
                {{-- <td><a href="{{ url('view_guardianship_law',$list->id) }}"><i style="color:rgb(13, 1, 56);"
                            class="fa fa-eye"></i><span class="m-2"></span>
                        <a href="{{ url('edit_guardianship_law',$list->id) }}"><i style="color:rgb(13, 1, 56);"
                                class="fa fa-edit"></i><span class="m-2"></span>
                            <a href="{{ url('delete_guardian',$list->id) }}"> <i style="color:rgb(13, 1, 56);"
                                    class="fas fa-trash-alt"></i></td> --}}
                                    <td scope="row"class="text-center">
                                        <div class="btn-group">
                                            <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" style="border-color:none;"> ⋮ </a>

                                       <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="{{ url('view_guardianship_law',$list->id) }}">View Guardianship Law</a>
                                        <a class="dropdown-item"
                                            href="{{ url('edit_guardianship_law',$list->id) }}">Edit Guardianship Law</a>
                                        <a class="dropdown-item"
                                            href="{{ url('delete_guardian',$list->id) }}">Delete Guardianship Law</a>
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




 {{-- <!-- The Modal --> Create New matter --}}
 <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header" style="padding:0rem 0rem;">
                <div style="padding:1rem 1rem;">
                    <h4 class="text-centre"><b>Add Matter</b></h4>
                </div>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">

                    <form method="post" action="{{url('add_guardian')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="" style="width: 32%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="matter_info"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Matter Info:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <input type="text" class="form-control" value="" name="matter_info" required>
                                            </div>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            File No is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="width: 32%">
                                    <div class=""><span style="color: red">*</span>
                                    <label for="petitioner"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Petitioner:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" value="" name="petitioner" required>
                                        </div>
                                        </div>
                                </div>
                                <div class="" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                    <label for="matter_type"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Matter Type:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" value="" name="matter_type" required>
                                        </div>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Client No is required.
                                    </div>
                                    {{-- </div> --}}
                                </div>
                            </div>

                            <div class="row">
                                <div class="" style="width: 100%">
                                     {{-- <div class=""><span style="color: red">*</span> --}}
                                        <label for="disabled_person"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Disabled Person:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <input type="text" class="form-control" value=""
                                                    name="disable_person" required>
                                            </div>
                                    {{-- </div> --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="" style="width: 50%">
                                    {{-- <div class=""><span style="color: red">*</span> --}}
                                    <label for="attorney"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Attorney:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <textarea class="form-control" rows="2" name="attroney" required></textarea>
                                        </div>

                                {{-- </div> --}}
                                </div>


                                <div class="" style="width: 50%">
                                    {{-- <div class=""><span style="color: red">*</span> --}}
                                    <label for="disability_details"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Disability Details:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <textarea class="form-control" rows="2"
                                                name="disadility_details" required></textarea>
                                        </div>
                                    <div class="invalid-feedback" style="width: 100%;">
                                    </div>
                                {{-- </div> --}}
                                </div>
                            </div>

                            <div class="row">
                                <div class="" style="width: 100%">
                                    <div class="case_details">
                                        <label for="username"
                                            style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Case Details:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <textarea class="form-control" rows="2" name="case_details" required></textarea>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="" style="width: 50%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="guardian"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Guardian:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <input type="text" class="form-control" placeholder="" name="guardian" required>
                                            </div>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Email is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="width: 50%">
                                    <div class="">
                                        <label for="guardian_details"
                                            style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Guardian Details:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <input type="text" class="form-control" placeholder="" name="guardian" required>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="" style="width: 100%">
                                    {{-- <div class=""><span style="color: red">*</span> --}}
                                    <label for="supporting_details"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Supporting Details:</label>
                                        <span class="m-2"></span>
                                        <input type="file" class="form-control" name="support_details" required>

                                    {{-- </div> --}}
                                </div>
                            </div>


                    </div>


                </div>
                <div class="row">
                    <div class="row">
                        <div class="" style="width: 50%;">
                        </div>
                        <div class="" style="width: 0%"></div>
                        <div class="col-sm" style="padding-right: 0px;width: 50%">
                            <br>
                            <button type="submit" onclick="return Validate()" class="btn btn-primary float:right;"
                                Style="width:45%;" value="submit">Save</button>
                            <button type="button" class="btn btn-primary float:left"
                                Style="width:45%;"data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
                    </form>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection
