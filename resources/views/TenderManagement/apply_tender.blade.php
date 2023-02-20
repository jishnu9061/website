@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Tender Management</a> /
    <a href="#" style="color: #1D1D50;">Apply Tender</a>
</nav>
<br><br>


{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b> Apply Tender </b></h4>
    <br><br>
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

                    <th scope="col">From Date</th>
                    <th scope="col">To Date</th>
                    <th scope="col">Item</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>

                @foreach($apply_tender as $list)
                <tr>
                    <td>{{$list->from_date}}</td>
                    <td>{{$list->to_date}}</td>
                    <td>{{$list->item}}</td>
                    <td>{{$list->description}}</td>
                    <td><span class="badge bg-success">Opened</span></td>
                    <td scope="row" class="text-center">
                            <div class="btn-group">
                                <a class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="border-color:none;"> ⋮ </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{url('view_apply_tender',$list->id)}}">View Tender Details</a>
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

@endsection