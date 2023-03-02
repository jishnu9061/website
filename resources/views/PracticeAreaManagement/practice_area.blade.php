@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="#" style="color: #1D1D50;">Practice Area</a>
</nav>
<br><br>

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Practice Area</b></h4>
    <br>

    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Practice
        Area</button></a> --}}
        <button type="button" class="btn btn-primary" data-toggle="modal"
        data-target="#myModal"style="margin-left:10px;    --clr: #1D1D50;
    --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add Practice
    Area</button>
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

                    <th scope="col">Practice Area</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach($practice_area as $list)
                <tr>
                    <td>{{$list->practice_area}}</td>
                    {{-- <td>
                        <a href="{{url('edit_practice_area',$list->id)}}"><i style="color:rgb(13, 1, 56);" class="fa fa-edit"></i><span
                                class="m-2"></span>
                            <a href="{{url('delete_practice_area',$list->id)}}"><i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i>
                    </td> --}}
                    <td scope="row"class="text-center">
                        <div class="btn-group">
                            <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" style="border-color:none;"> ⋮ </a>

                       <div class="dropdown-menu">
                        <a class="dropdown-item"
                            href="{{url('edit_practice_area',$list->id)}}">Edit Practice Area</a>
                        <a class="dropdown-item"
                            href="{{url('delete_practice_area',$list->id)}}">Delete Practice Area</a>
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

 {{-- <!-- The Modal --> Create New matter --}}
 <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header" style="padding:0rem 0rem;">
                <div style="padding:1rem 1rem;">
                    <h4 class="text-centre"><b>Add New Practice Area</b></h4>
                </div>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">

                    <form method="post" action="{{url('store_practice_area')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="" style="width: 100%">
                                    {{-- <div class=""><span style="color: red">*</span> --}}
                                        <input class="form-control form-control-lg" type="text" placeholder="" name="area"
                                        aria-label=".form-control-lg example">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            File No is required.
                                        </div>
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

{{-- <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h2 class="text-centre"><b>Add New Practice Area</b></h2>

            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form action="{{url('store_practice_area')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input class="form-control form-control-lg" type="text" placeholder="" name="area"
                                aria-label=".form-control-lg example">
                        </div>

                        <div>
                            <br>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                </div>

                </form>
            </div>
 --}}










            @endsection
