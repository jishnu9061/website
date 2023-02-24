
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
                    {{-- <a class="dropdown-item"
                        href="{{url('edit_purchase',$list->id)}}">Edit Purchase</a> --}}
                        <a class="dropdown-item" data-toggle="modal"
                        data-target="#edit_purchase_order" href="#">Edit Purchase Order
                    </a>
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

 {{-- Start Edit Purchase Order  --}}
<div class="modal fade" id="edit_purchase_order" style="">
    <!-- edit purchase order  -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post" id="update_corporate" action="" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" id="corporateid" value="corporateid">
                <h5><b>Edit Purchase Order:-</b></h5>

                <div class="row">
                    <div class="" style="*/background-color: #d3d0ca;border-radius:5px;">
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="purchase_date"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Purchase Date</label>
                                        
                                        <td><input class="form-control" type="date" value="{{$list->purchase_date}}"
                                                aria-label="Disabled input example" name="date"></td>
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="purchase_no"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Purchase No</label>
                        <td><input class="form-control" type="number" value="{{$list->purchase_order_number}}"
                                aria-label="Disabled input example" name="number"></td>
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="payment_type"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Payment Type</label>
                                        <td><input class="form-control" type="text" value="{{$list->payment_type}}"
                                                aria-label="Disabled input example" name="payment"></td>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="supplier"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Supplier</label>
                        <td><input class="form-control" type="text" value="{{$list->supplier_name}}"
                                aria-label="Disabled input example" name="supplier"></td>
                                </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="status"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Status</label>
                                    <select class="form-select" aria-label="Default select example" name="status">
                                        <option value="order-placed">order-placed</option>
                                        <option value="verified">verified</option>
                                        <option value="cancel">cancel</option>
                                    </select>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="item_name"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Item Name</label>
                                    <td><input class="form-control" type="text" value=""
                                        aria-label="Disabled input example"></td>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 0px;">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="item_no"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Item No</label>
                                        <td><input class="form-control" type="text" value=""
                                            aria-label="Disabled input example"></td>
                                </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="quantity"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Quantity</label>
                                    <td><input class="form-control" type="text" value=""
                                        aria-label="Disabled input example"></td>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="price"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Price</label>
                                    <td><input class="form-control" type="text" value=""
                                        aria-label="Disabled input example"></td>
                            </div>

                        </div>
                        <div class="row" style="margin-top: 0px;">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="total"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Total</label>
                                        <td><input class="form-control" type="text" value=""
                                            aria-label="Disabled input example"></td>
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="grand_total"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Grand Total</label>
                                        <td><input type="text" placeholder="" class="form-control"></td>
                                       
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="advance_amount"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Advance Amount</label>
                                        <td><input type="text" placeholder="" class="form-control"></td>
                                        
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 0px;">
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="pending_amount"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Pending Amount</label>
                                    <td><input type="text" placeholder="" class="form-control"></td>
                            </div>
                           
                        </div>
                           <div class="row document_details " style="margin-bottom: 20px;">
                                {{-- Add More Document details:- javascript --}}
                            </div>
                        </div>
                    </div>
             
                <div class style="width: 20%">
                </div>
                <div class="col-sm">
             
                    <button type="submit" class="btn btn-primary float:right;"
                        style="margin-left: 61%;--clr: #1D1D50;width:19%;
                        --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Update
                    </button>
                    <button type="button" class="btn btn-primary float:left" Style="width:19%;"
                        onclick="history.back()">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
    




@endsection
