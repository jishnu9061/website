@extends('layouts.hmsmain')
@section('content')
    <nav style="font-size:15px;">
        <a href="{{ url('home') }}" style="color: #1D1D50;">Home</a> /
        <a href="#" style="color: #1D1D50;">E-Library</a> /
        <a href="#" style="color: #1D1D50;">Book Category</a>
    </nav>
    <br><br>

    {{-- heading --}}
    <div class="container">
        <h4 id="hdtpa"><b>Book Category Details</b></h4>
        <br>

        <div class="row" style="height:50px;">
            <div class="col-sm-4" style="padding-top:5px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
                    style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add
                    Category</button>
            </div>


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
                            <th scope="col">Category</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($view_category as $list)
                            <tr>
                                <td>{{ $list->title }}</td>
                                <td scope="row" class="text-center">
                                    <div class="btn-group">
                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            style="border-color:none;"> ⋮ </a>
                                        <div class="dropdown-menu">

                                            <a class="dropdown-item" href="{{ url('editsubject_category', $list->id) }}">Edit
                                                Book Category</a>
                                            <a class="dropdown-item"
                                                href="{{ url('deletesubject_category', $list->id) }}">Delete Book
                                                Category</a>

                                        </div>
                                    </div>
                                </td>
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
            <div class="modal-dialog modal-lg" style="width: 35%">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h2 class="text-center"><b>Add Category</b></h2>

                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container">
                            <form method="post" action="{{url('new_categories')}}" id="form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-1">
                                            <label for="username">Category Name</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">

                                                </div>
                                                <input type="text" class="form-control"
                                                    name="category_name" id="age">
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <br>
                                <br>
                                <div style="text-align: right;">
                                <button  style="float: right;" type="submit" class="btn btn-primary">Cancel</button>
                                <button  style="float: right;" type="button" class="btn btn-primary"
                                    data-dismiss="modal">Add</button>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            @endsection
