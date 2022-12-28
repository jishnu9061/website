@extends('layouts.hmsmain')
@section('content')


{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Tender Applied Details</b></h4>
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

                    <th scope="col">Supplier Name</th>
                    <th scope="col">Item</th>
                    <th scope="col">Description</th>
                    <th scope="col">View</th>
                    <th scope="col">Status</th>

                </tr>
            </thead>
            <tbody>
                @foreach($tender_applied_details as $list)
                <tr>
                    <td>{{$list->supplier_name}}</td>
                    <td>{{$list->item_name}}</td>
                    <td>{{$list->description}}</td>
                    <td>
                        <a href="{{url('view_tender_applied',$list->id)}}"><i style="color:rgb(13, 1, 56);" class="fa fa-eye"></i>
                    </td>
                    <td></td>
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