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

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Practice
        Area</button></a>

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
                    <td>
                        <a href="{{url('edit_practice_area',$list->id)}}"><i style="color:rgb(13, 1, 56);" class="fa fa-edit"></i><span
                                class="m-2"></span>
                            <a href="{{url('delete_practice_area',$list->id)}}"><i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i>
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











            @endsection