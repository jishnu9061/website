@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">HR</a> /
    <a href="{{url('timesheet')}}" style="color: #1D1D50;">Time Sheet</a> /
    <a href="#" style="color: #1D1D50;">Time Sheet Month</a>
</nav>
<br><br>
<div class="container">
    <h4 id="hdtpa"><b>Time Sheet/Month</b></h4>
    <br>

<br>




<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('timesheetweek') }}"  style="font-size:15px;">Week</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ url('timesheetmonth') }}"  style="font-size:17px;">Month</a>
        </li>

    </ul>

    <br>
</div>

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add File
    </button></a> -->


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

                    <th scope="col">Date</th>
                    <th scope="col">Time In</th>
                    <th scope="col">Time Out</th>
                    <th scope="col">Over Time</th>
                    <th scope="col">View</th>

                </tr>
            </thead>
            <tbody>

                <tr>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="monthviewsheet"><i style="color:rgb(13, 1, 56);" class="far fa-eye"></i>

                    </td>

                </tr>

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



                @endsection
