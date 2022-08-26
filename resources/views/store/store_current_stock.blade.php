@extends('layouts.hmsmain')
@section('content')
<style>
    .btn-width{
        width:10%;
    }
</style>

<div class="container">
   <table class="table table-bordered" style="border: 1px solid">

         <form method="post" action="{{url('issue_stock_details')}}" enctype="multipart/form-data" id="add-stock">
            @csrf
                <tbody>



                        <h3 style="text-align:center"><b><u>Issued Item Details</u></b></h3>
                                <table class="table table-hover" style="width:100%">


                                    <br>
                                <thead>
                                  <tr>
                                   {{-- <th style="width:18%">Purchase Date</th> --}}
                                   <th style="width:18%">Expiry Date</th>
                                    <th style="width:45%">Items</th>
                                    <th style="width:10%">Batch</th>
                                    <th style="width:10%">Available Quantity</th>
                                    <th style="width:10%">Issued Quantity</th>


                                </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $pqty=0;
                                        $iqty=0;
                                        $cqty=0;
                                    @endphp



                                @foreach($purchase_item as $purchase)
                                  <tr>
                                    <input type="hidden" name="department" value="" class="form-control">
                                    <input type="hidden" name="id[]" id="" value="{{$purchase->id}}"/>
                                    <input type="hidden" name="item_id[]" value="{{$purchase->Item_name}}"class="form-control">
                                     {{-- <td><input type="text" value="{{$purchase->purchase_date}}"  name="item_name[]" class="form-control" required readonly></td> --}}
                                      <td><input type="text" value="{{$purchase->expiry_date}}"  name="expiry_date[]" class="form-control" required readonly></td>
                                    <td><input type="text" value="{{$purchase->Item_name}}"  name="item_name[]" class="form-control" required readonly></td>
                                    <td><input type="text" value="{{$purchase->batch_no}}" name="batch_no[]" class="form-control" required readonly></td>
                                    <td><input type="text"value="{{$purchase->quantity}}"
                                         name="available_quantity[]"  class="form-control" required>
                                         @php
                                             $pqty += $purchase->quantity;
                                         @endphp
                                        </td>
                                    <td><input type="text" value="{{$purchase->issued_quantity}}" name="issued_quantity[]" class="form-control" requird>
                                        @php
                                       $iqty += $purchase->issued_quantity;
                                        @endphp
                                    </td>
                                    <input type="hidden" value="<?php echo ($purchase->quantity)-($purchase->issued_quantity)?>" name="current_stock[]" id="purchase-rate" class="form-control" requird>
                                    @php
                                    $cqty += $purchase->current_stock;
                                    @endphp
                                </td>
                                </tr>
                                @endforeach
                                </tbody>
                              </table>



                              <div class="row">
                                <div class="col-sm">
                                </div>
                                <div class="col-sm">
                                    <br>
                                    <table class="table table-bordered">
                                          <tr>
                                            <td scope="col"><b>Avalable Quantity</b></td>
                                            <td> <input type="text"value="{{$pqty}}"
                                                name="available_quantity[]"  class="form-control" required>

                                               </td>
                                          </tr>
                                          <tr>
                                            <td scope="col"><b>Issued Quantity</b></td>
                                            <td><input type="text" value="{{$iqty}}" class="form-control" id="exampleFormControlInput1" name="advance_amount" value="" id="grand_totall" readonly></td>
                                          </tr>
                                          <tr>
                                            <td scope="col"><b>Current Stock</b></td>
                                            <td><input type="text" class="form-control" value="{{$cqty}}" name="pending_amount" value="" id="exampleFormControlInput1" readonly></td>
                                          </tr>

                                      </table>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <button type="button" class="btn btn-primary text-white" onclick="window.history.back()" style="background-color:#1a3c62;width:100%;" >Close</button>
                                           </div>
                                          <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary" style="background-color:#1a3c62;width:100%;">Issued</button>
                                          </div>
                                      </div>
                                      <br>

                                </div>
                            </div>
                        </div>
                              <div class="row">
                                  <div class="col-sm-3"></div>
                                  <div class="col-sm-3"></div>
                                  <div class="col-sm-3"></div>

                              </div>
                            </form>
                        </table>
                    </div>

@endsection

