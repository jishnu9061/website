
@extends('layouts.hmsmain')
@section('content')
<html>
<div class="container">
   <head>
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

   </head>
   <body>
<div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Invoice Items</u></b></span></button><br>
</div>
            <br>
          <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_invoice_item')}}"><button class="btn btn-primary">Add New Item</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Item</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
        <!-- <a href="{{('add_invoice_item')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add New Item</button></a><br> -->
            <br>
       
        <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Invoice Item List</h3>
    <!-- <div class="container"> -->
    <div class="table-responsive"> 
      <table class="table table-bordered" id="new-item">
                  <thead>
                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center">Item Code</th>
                        <th class="text-center" >Item Category</th>
                        <th class="text-center">Item Name</th>
                        <th class="text-center">Description</th>
                        <th class="text-center" >Sales Tax Code</th>
                        <th class="text-center">G/L Account</th>
                        <th class="text-center">Action</th>
                  
                    </tr>
    </thead>
    <tbody>
 <tr>
    <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  scope="row"class="text-center">
                        <a href="{{url('edit_invoice_item')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('delete_invoice_items')}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td>
                      
                    </tr>
                </tbody>
</table>
         <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add New Item</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_invoice_item') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->  
@csrf
       <div class="row">
                    <div class="col-md-6">
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
                    <div class="col-md-6">
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
                                <select type="text" value="" id="" name="code"style="width:100%;">
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
        </body>
    </div>
</html>
  @endsection
      














   