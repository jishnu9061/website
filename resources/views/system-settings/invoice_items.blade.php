
@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">System Setup</a> /
    <a href="#" style="color: #1D1D50;">Invoice Items</a>
</nav>
<br><br>
<head>
<style>
  .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}
.pagination {
margin: 0;
}

.pagination li:hover{
cursor: pointer;
}

.header_wrap {
padding:30px 0;
}
.num_rows {
width: 20%;
float:left;
}
.tb_search{
width: 20%;
float:right;
}
.pagination-container {
width: 70%;
float:left;
}

.rows_count {
width: 20%;
float:right;
text-align:right;
color: #999;
}
</style>
</head>
<div class="container">
  {{-- heading --}}
   {{-- <h4 id="hdtpa"><b>Invoice Items</b></h4> --}}
  <div class="row" style="height:50px;">
    <div class="col-sm-4" style="padding-top:5px;">
    </div>
    <div class="col-sm-4" style="">
        <h4
            style="border: 0.5px solid #f1d9b0;
            border-radius: 25px;
            background-color: #f1d9b0;
            padding: 2%;
            width: 100%;
            height:90%;
            text-align:center;
            box-shadow: inset 0 0 3px #d3d0ca;
            opacity: .9;">
            <b style="font-size:18px;">Invoice Items</b>
        </h4>
    </div>
    <div class="col-sm-4" style="">
    </div>
</div>
  <br>



          <!---------------------------------------------- MODAL ---------------------------------------------------------------------->

{{-- <a href="{{('add_invoice_item')}}"><button class="btn btn-primary">Add New Item</button></a> --}}
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Item</button> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#myModal"style="margin-left:10px;    --clr: #1D1D50;
            --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add New Item</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
        <!-- <a href="{{('add_invoice_item')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add New Item</button></a><br> -->

    <div class="header_wrap">
      <div class="num_rows">
        <div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
         <select class  ="form-control" aria-label="Page navigation example" name="state" id="maxRows">

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
<input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
      </div>



        <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Invoice Item List</h3>
    <!-- <div class="container"> -->
    <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
                  <thead>
                        <tr>
                        <!-- <th class="text-center" >No</th> -->
                        <th class="text-center">Item Code</th>
                        <th class="text-center" >Item Category</th>
                        <th class="text-center">Item Name</th>
                        <th class="text-center">Description</th>
                        <th class="text-center" >Sales Tax Code</th>
                        <!-- <th class="text-center">G/L Account</th>.....note: g/l account changed as income account-->
                         <th class="text-center">Income Account</th>
                        <th class="text-center">Action</th>

                    </tr>
    </thead>
    <tbody>
    @foreach($invoice_item as $invoice)
 <tr>
    <!-- <td  class="text-center" >{{ $invoice->id }}</td> -->
                        <td >{{ $invoice->item_code }}</td>
                        <td>{{ $invoice->item_category }}</td>
                        <td >{{ $invoice->item_name }}</td>
                        <td >{{ $invoice->description }}</td>
                        <td >{{ $invoice->sales_tax_code }}</td>
                        <td  >{{ $invoice->income_account }}</td>
                        {{-- <td  scope="row"class="text-center">
                        <a href="{{url('edit_invoice_item',$invoice->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <span class="m-2"></span>
                        <a href="{{url('delete_invoice_item',$invoice->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td> --}}
                           <td scope="row"class="text-center">
                            <div class="btn-group">
                                <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" style="border-color:none;"> ⋮ </a>

                           <div class="dropdown-menu">
                            <a class="dropdown-item"
                                {{-- href="{{url('edit_invoice_item',$invoice->id)}}">Edit Invoice Item</a> --}}
                                <a class="dropdown-item" data-toggle="modal"
                                                    data-target="#edit_invoice_items" href="#">Edit Invoice Item

                                                            </a>
                            <a class="dropdown-item"
                                {{-- href="{{url('delete_invoice_item',$invoice->id)}}">Delete Invoice Item</a> --}}
                                <a href="#"onclick=deleteinvoice(this) data-id="{{ $invoice->id }}"data-toggle="modal"
                                    data-target="#deleteInvoice">Delete Invoice Item</a>
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
         <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header" >
                                        <h2 class="text-centre"><b>Add New Item</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" >
                                        <div class="container">
                                            <form method="post" action="{{ url('add_invoice_item') }}"
                                                enctype="multipart/form-data">
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
@csrf
       <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                        <label >Type Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="typename"value="" class="form-control" >
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Comments:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="comments"value=""class="form-control" >
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="mb-1">
                            <label>Item Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="iname"value=""class="form-control" >
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                        <label >Item Category:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="category"style="width:100%;">
                                <option>---select---</option>
                                <option>Fees</option>
                                <option>Disbursements w/VAT</option>
                                <option>Disbursements w/o VAT</option>
                            </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Sales Tax Code:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="sales_tax_code"style="width:100%;">
                                <option>---select---</option>
                                <option>Non-Taxable</option>
                                <option>Taxable</option>
                            </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="mb-1">
                            <label>Income Account:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="account"style="width:92%;">
                                <option>---select---</option>
                                <option>1000====Income from Legal Fees</option>
                                <option>1100====Other Income</option>
                                <option>1101====Other Income - Vatable Disbursements</option>
                                <option>1102====Other Income - Miscellaneous Income</option>
                                <option>1103====Other Income - Interest Earned</option>
                                <option>1104====Other Income - Loan Administration Fees</option>
                                <option>9500====Other Income - Client gets Account Payable - Cooperative Bank</option>
                                </select>
                                <div class="col-md-1">
                     <a href="{{url('add_gl_account')}}"> <i style="font-size:20px; color:rgb(13, 1, 56);" class="bi bi-plus-circle-fill"> </i></a>
                </div>

                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>
                    <div class="row">
         <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">Cancel</button>
                            <br>
                            <br>
                        </div>
                    </div>
        </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
{{-- Start Edit Invoice Items --}}
<div class="modal fade" id="edit_invoice_items" style="">
    <!-- edit invoice -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post" action="{{ url('') }}" enctype="multipart/form-data" id="addemployee">
                @csrf
                <h5><b>Edit Invoice Items:-</b></h5>

                <div class="row">
                    <div class="" style="*/background-color: #d3d0ca;border-radius:5px;">
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="type_name"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Type Name
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text"  id="" name="typename"value="" class="form-control" >
                                            <div class="invalid-feedback" style="width: 100%;">
                                            Required Field.
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="comments"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Comments
                                        Type</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text"  id="" name="comments"value=""class="form-control" >
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Required Field.
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="item_name"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Item Name
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text"  id="" name="iname"value=""class="form-control" >
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Required Field.
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="item_category"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Item Category</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <select type="text" value="" id="" name="category"style="width:100%;">
                                            <option>---select---</option>
                                            <option>Fees</option>
                                            <option>Disbursements w/VAT</option>
                                            <option>Disbursements w/o VAT</option>
                                        </select>
                                            <div class="invalid-feedback" style="width: 100%;">
                                            Required Field.
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="salestax_code"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Sales Tax Code</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <select type="text" value="" id="" name="sales_tax_code"style="width:100%;">
                                        <option>---select---</option>
                                        <option>Non-Taxable</option>
                                        <option>Taxable</option>
                                    </select>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Required Field.
                                        </div>
                                    </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="income_account"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Income Account
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <select type="text" value="" id="" name="account"style="width:92%;">
                                        <option>---select---</option>
                                        <option>1000====Income from Legal Fees</option>
                                        <option>1100====Other Income</option>
                                        <option>1101====Other Income - Vatable Disbursements</option>
                                        <option>1102====Other Income - Miscellaneous Income</option>
                                        <option>1103====Other Income - Interest Earned</option>
                                        <option>1104====Other Income - Loan Administration Fees</option>
                                        <option>9500====Other Income - Client gets Account Payable - Cooperative Bank</option>
                                        </select>
                                        <div class="col-md-1">


                                        <div class="invalid-feedback" style="width: 100%;">
                                            Required Field.
                                        </div>
                                    </div>
                            </div>
                            <div class="row document_details " style="margin-bottom: 20px;">
                                {{-- Add More Document details:- javascript --}}
                            </div>
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
        </div>
        </form>
    </div>
</div>
{{-- End edit invoice items --}}
<div class="modal fade" id="deleteInvoice" style=""> <!-- delete Invoice Items -->
    <div class="modal-dialog modal-lg" style="width:30%;">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post"  id="deleteInvoice" action="" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="id" value="id">
                <div class="modal-header" style="padding:0rem 0rem;">
                    <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Delete <span id="deleteInvoice"></span></b></h4></div>
                </div>
                <!-- Modal body -->
                <div class="modal-body" >
                    <div class="container">
                        <div class="row"><h6><b><span>Are you sure?</span></b></h6>
                        </div>
                            <div class="row">
                                <div class="" style="width: 30%;">
                                </div>
                                <div lass="" style="width: 0%"></div>
                                <div class="col-sm" style="padding-right: 0px;width: 70%;">
                                    <br>
                                    <button type="submit" class="btn btn-primary float:right;" Style="width:45%;background-color:#DD4132;">Yes</button>
                                    <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
        </body>
    </div>
</html>
  @endsection















