
@extends('layouts.hmsmain')
@section('content')
    




{{-- heading --}}
  <div class="container">
      <h4 id="hdtpa"><b>Purchase Order Reports</b></h4>
      <br>

       <div class="row align-items-start">
          <div class="col">
            <label class="form-label">Date From</label>
            <input type="date" class="form-control" >
          </div>
          <div class="col">
            <label class="form-label">Date To</label>
            <input type="date" class="form-control" >
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
         <table class="table text-center">
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
                <td><a href="{{url('purchase_view',$list->purchase_id)}}"> <i style="color:rgb(13, 1, 56);"class="fa fa-eye"></i><span class="m-2"></span>
                      <a href="{{url('edit_purchase',$list->purchase_id)}}"><i style="color:rgb(13, 1, 56);" class="fa fa-edit" ></i>
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
