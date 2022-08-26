@extends('layouts.hmsmain')
@section('content')
<style>
    .btn-width{
        width:10%;
    }
</style>

<div class="container">
    <h3 style="text-align:center"><b><u>Purchase Details</u></b></h3><hr>

        <table class="table table-bordered" style="border: 1px solid">
         <form method="post" action="{{url('add_stock')}}" enctype="multipart/form-data">
            @csrf
                <tbody>
                    <tr>
                        @foreach($purchasedata as $row)
                            <input type="hidden" name="purchse_id" value="{{$row->id}}" class="form-control">
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="">Purchase Date</label>
                                            <input type="text" value="{{$row->purchase_date}}" name="purchase_date" class="form-control" required readonly><br>
                                    </div>
                                    <div class="col-sm">
                                        <label for="">Order No</label>
                                            <input type="text" value="{{$row->purchase_orderno}}" name="purchase_order" class="form-control" required readonly><br>
                                    </div>
                                     <div class="col-sm">
                                        <label for="">Payment Type</label>
                                            <input type="text" value="{{$row->payment_name}}" name="payment_type" class="form-control" required readonly><br>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <div class="row">

                                    <div class="col-sm">
                                        <label for="">Supplier</label>
                                        <input type="text" value="{{$row->supplier_name}}" name="supplier" class="form-control" required readonly><br>

                                    </div>
                                    <div class="col-sm">
                                        <label for="">Manufacturer</label>
                                        <input type="text" value="{{$row->manufactuers_name}}" name="manufacturer" class="form-control" required readonly><br>
                                    </div>


                                </div>
                                @endforeach
                            </tr>
                            <hr>



                            <h3 style="text-align:center"><b><u>Item Details</u></b></h3>
                            <hr>
                            <tr>

                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th style="width:45%">Items</th>
                                    <th style="width:15%">Batch</th>
                                    <th style="width:10%">Qty</th>
                                    <th style="width:15%">Rate</th>
                                    <th>Profit%</th>
                                    <th style="width:20%">S.Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach( $purchase_item as $purchase)
                                  <tr>
                                    <td><input type="text" value="{{$purchase->Item_name}}"  name="item_name[]" class="form-control" required readonly></td>
                                    <td><input type="text" value="{{$purchase->batch_no}}" name="batch_no[]" class="form-control" required readonly></td>
                                    <td> <input type="text"value="{{$purchase->quantity}}" name="quantity[]" id="Qty" class="form-control" required readonly></td>
                                    <td><input type="text" value="{{$purchase->price}}" name="purchase_rate[]" id="purchase-rate" class="form-control" required readonly></td>
                                    <td><input type="text" value="{{$purchase->profit_percentage}}" id="profit-percentage" name="profit_percentage[]" class="form-control" required readonly></td>
                                    <td><input name="sales_price[]" type="text" id="tprice" value="<?php echo ($purchase->price)*($purchase->quantity)*(($purchase->profit_percentage)/100)+($purchase->price)*($purchase->quantity); ?>" class="form-control" required readonly></td>
                                  </tr>
                                  @endforeach
                                </tbody>
                            </table>
                </tbody>
            </form>
    </table>
</div>
    <script>
        $(document).ready(function(){
                 $('.searchingBook').select2();
        });
     </script>
@endsection

