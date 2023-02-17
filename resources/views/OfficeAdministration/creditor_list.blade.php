@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Office Administration</a> /
    <a href="#" style="color: #1D1D50;">Creditor List</a>
</nav>
<br><br>

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Creditor List</b></h4>
    <br>
    <br>


    </form>



    <form action="{{url('creditor_list')}}" method="post" enctype="multipart/form-data">
        @csrf



        <div class="form-row">
            <div class="form-group col-md-5">
                <input type="date" class="form-control" placeholder="" aria-label="First name">
                <div class="form-text">From Date</div>
            </div>
            <div class="form-group col-md-5">
                <input type="date" class="form-control" placeholder="" aria-label="Last name">
                <div class="form-text">To Date</div>
            </div>
            <div class="form-group col-md-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </form>


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

                    <th scope="col">G/L Account</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Total Due</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>
                    
                    <td scope="row" class="text-center">
                                        <div class="btn-group">
                                            <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" style="border-color:none;"> ⋮ </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{url('')}}">View Creditor List</a>
                                                <a class="dropdown-item" href="{{url('')}}">Edit Creditor List</a>
                                                <a class="dropdown-item" href="#">Delete  Creditor List</a>

                                            </div>
                                        </div>
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