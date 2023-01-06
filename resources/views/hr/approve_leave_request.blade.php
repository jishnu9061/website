@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <h4 id="hdtpa"><b> Approve Leave Request </b></h4>
    <br>

   

    <div class="header_wrap">
        <div class="num_rows">
            <div class="form-group">
            
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


<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

        <br>
        <div class="table-responsive">
            <table class="table table-striped table-class" id="table-id">

                <thead>

                    <tr>
                        <th class="text-center">Staff</th>
                        <th class="text-center">Leave Type</th>
                        <th class="text-center">Leave Date</th>
                        <th class="text-center">Days</th>
                        <th class="text-center">Apply Date</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>

                    </tr>
                </thead>
                <tbody>



                    <tr>

                        <td scope="row" class="text-center"></td>
                        <td scope="row" class="text-center"></td>
                        <td scope="row" class="text-center"></td>
                        <td scope="row" class="text-center"></td>
                        <td scope="row" class="text-center"></td>
                        <td scope="row" class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pending
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#" value="Pending">Pending</a>
                                  <a class="dropdown-item" href="#">Accepted</a>
                                  <a class="dropdown-item" href="#">Rejected</a>

                                </div>
                              </div>
                        </td>
                        <td scope="row" class="text-center">
                            <a href="{{url('edit_leave_request')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                            


                        </td>
                   
                   
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
