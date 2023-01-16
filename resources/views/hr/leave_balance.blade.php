@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <h4 id="hdtpa"><b>Leave Balance</b></h4>
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
      {{-- <h5><b>Total Leaves=21</b></h5> --}}

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-class" id="table-id">

                        <thead>

                            <tr>
                                <th class="text-center">Apply Date</th>
                                <th class="text-center">Type</th>
                                <th class="text-center">Number Of Days</th>
                                <th class="text-center">Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" class="text-center">16.01.2023</td>
                                <td scope="row" class="text-center">Medical Leave</td>
                                <td scope="row" class="text-center">1</td>
                                <td scope="row" class="text-center">20</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
                    <div class='pagination-container'>
                        <nav>
                            <ul class="pagination">
                                <!-- Here the JS Function Will Add the Rows -->
                            </ul>
                        </nav>
                    </div>
                    <div class="rows_count">Showing 11 to 20 of 100</div>


























    @endsection