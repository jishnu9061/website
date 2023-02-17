
@extends('layouts.hmsmain')
@section('content')


<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Procurement</a> /
    <a href="#" style="color: #1D1D50;">Purchase Order Report</a>
</nav>
<br><br>



{{-- heading --}}
  <div class="container">
      <h4 id="hdtpa"><b>Purchase Order Reports</b></h4>
      <br>
      <br>


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
                        <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()"
                            placeholder="Search.." class="form-control">
                    </div>



       <!-- table -->

       <div class="table-responsive">
         <table class="table text-center" id="table-id">
            <thead>
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Order Number</th>
                <th scope="col">Supplier</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($purchase_order_report as $list)
              <tr>
                <td>{{$list->purchase_date}}</td>
                <td>{{$list->purchase_order_number}}</td>
                <td>{{$list->supplier_name}}</td>
                <td>{{$list->status}}</td>
                {{-- <td><a href="{{url('purchase_view',$list->id)}}"> <i style="color:rgb(13, 1, 56);"class="fa fa-eye"></i><span class="m-2"></span>
                      <a href="{{url('edit_purchase',$list->id)}}"><i style="color:rgb(13, 1, 56);" class="fa fa-edit" ></i>
                </td> --}}
                <td scope="row"class="text-center">
                    <div class="btn-group">
                        <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" style="border-color:none;"> ⋮ </a>

                   <div class="dropdown-menu">
                    <a class="dropdown-item"
                        href="{{url('purchase_view',$list->id)}}">View Purchase</a>
                    <a class="dropdown-item"
                        href="{{url('edit_purchase',$list->id)}}">Edit Purchase</a>
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





@endsection
