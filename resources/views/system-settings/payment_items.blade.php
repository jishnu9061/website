
@extends('layouts.hmsmain')
@section('content')
<html>
<div class="container">
 
 

   <body>
<!-- <h2 style="text-align:center; text-shadow: 2px 1px;"></h2>
  <div>
     <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Payment Items</u></b></span></button><br>
   </div>
            <br> -->
            {{-- heading --}}
  <h4 id="hdtpa"><b>Payment Items</b></h4>
  <br><br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_payment_item')}}"><button class="btn btn-primary">Add Payment Item</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Payment Item</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
        <!-- <a href="{{('add_payment_item')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add Payment Item</button></a><br><br> -->
     
    <!-- <div class="container"> -->
    <div class="table-responsive"> 
      <table class="table table-bordered" id="new-item">
                  <thead>
                        <tr>
                        <th class="text-center" >No</th>
                        <!-- <th class="text-center">Item Code</th> -->
                        <th class="text-center">Item Group</th>
                        <th class="text-center" >Item Name</th>
                        <th class="text-center" >Item Comments</th>
                        <th class="text-center" >Item Short Names</th>
                        <th class="text-center" >Status</th>
                        <th class="text-center">Action</th>
                     
                    </tr>
    </thead>
    <tbody>
    @foreach($payment_items as $payment)
        <tr>
                        <td>{{$payment->id}}</td>
                        <!-- <td>{{$payment->item_code}}</td> -->
                        <td>{{$payment->item_group}}</td>
                        <td>{{$payment->item_name}}</td>
                        <td>{{$payment->item_comment}}</td>
                        <td>{{$payment->item_shortname}}</td>
                        <td></td>
                        <td  scope="row"class="text-center">
                        <a href="{{url('edit_payment_item',$payment->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('delete_payment_item',$payment->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td>
                           </tr>
 @endforeach
                        </tbody>
                    </table>
                <div class="class"style="text-align:right;">
                <select style="width:10%;height:100%;color:rgb(13, 1, 56);font-size:small;background-color:#FFFBF4;"type="text" value="" name="type">
    <option>Active Category</option>
    <option>De-Active Category</option>
 
</select>
<input type="button"value="Go" name="close"style="background-color:#FFFBF4;color: rgb(13, 1, 56); ">
    </div>
    <br>
    <br>
     <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header" >
                                        <h2 class="text-centre"><b>Add Payment Item</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" >
                                        <div class="container">
                                            <form method="post" action="{{ url('add_payment_item') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
    </div>
    @csrf
    <div class="row">
    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Item Code:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="icode" id="" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="mb-1">
                        <label >Item Group:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="igroup"style="width:100%;">
                                    <option>---Select---</option>
                                   
                    <option>01-Legal Fees</option>
                    <option>02-Vatable Disbursement(Telephone,Postage,Transport etc)</option>
                    <option>03-Client Funds</option>
                    <option>99-VAT Amount</option>
                    <option>04-Non-Vatable Disbursement(Stamp Duty,Registration Fees etc)</option>
                    
                                </select>
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
                                <input type="text" class="form-control" name="iname" id="" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>
              
            <div class="row">
                   
                  
                    <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >Item Comments:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="icomments" id="" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Item Short Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="ishortname" id="" value="">
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
      














   