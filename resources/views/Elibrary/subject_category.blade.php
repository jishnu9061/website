@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">E-Library</a> /
    <a href="#" style="color: #1D1D50;">Book Category</a>
</nav>
<br><br>

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Book Category Details</b></h4>
    <br>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Category
    </button></a>

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
            @foreach($view_category as $list)
                <tr>
                    <td>{{$list->title}}</td>
                    <td>
                        <a href="{{url('editsubject_category',$list->id)}}"><i style="color:rgb(13, 1, 56);" class="fa fa-edit"></i><span class="m-2"></span>
                            <a href="{{url('deletesubject_category',$list->id)}}"><i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i>

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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h2 class="text-centre"><b>Add Category</b></h2>
                <br>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form action="{{url('add_subject_category')}}" method="post">
                        @csrf

                        <div class="row">

                            <div class="col-md-3">
                            </div>
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="username">Category</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <input type="text" class="form-control" name="title" id="age">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Incorporation is required
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-3">
                                </div>
                            </div>




                            <br>
                            <br>






                            <div class="row">
                                <div class="col-sm">

                                </div>
                                <div class="col-sm">

                                </div>
                                <div class="col-sm">
                                    <br>
                                    <button type="submit" class="btn btn-primary float:right;"
                                        Style="width:50%;">Save</button>
                                    <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                                        data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

                @endsection