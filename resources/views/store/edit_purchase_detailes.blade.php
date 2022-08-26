@extends('layouts.hmsmain')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        </head>
<style>
    .btn-width{
        width:10%;
    }
</style>
<div>
    {{-- <a type="button" href="{{url('view_manufacturers')}}"class="btn btn-outline-primary btn-width ">Back</a> --}}
</div>
<br>
<div class="container">
    <h3 style="text-align:center"><b><u>Edit Purchase Details</u></b></h3><br>
         <form method="post" action="{{url('update_purchase_items')}}" enctype="multipart/form-data">
            @csrf
            @foreach( $purchase_order as $data)
            {{-- {{dd( $purchase_order)}} --}}


                <input type="hidden" name="purchase_id" value="{{$data->id}}"class="form-control">


                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">Manufacturer</th>
                                    <th scope="col">Purchase Date</th>
                                    <th scope="col">Purchase Number</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    {{-- {{"hello".$data->purchase_date}} --}}
                                    <td style="width:20%"><select class="form-select" aria-label="Default select example" name="manufacturer">
                                        <option value="">Select</option>
                                        @foreach($manufact as $key)
                                            <option value="{{$key->id}}" {{($key->id == $data->manufactuers_id) ? "selected" : "" }} > {{$key->manufactuers_name}}</option>
                                        @endforeach
                                      </select></td>
                                    <td style="width:20%"> <input type="date" name="purchase_date"  value="{{$data->Purchase_date}}"class="form-control" required></td>
                                    <td style="width:20%"><input type="text" name="purchase_number" value="{{$data->purchase_orderno}}" class="form-control" style="pointer-events: none;" ></td>
                                  </tr>
                                  <tr>
                                    <thead>
                                        <tr>
                                          <th scope="col">Payment Type</th>
                                          <th scope="col">Supplier</th>
                                          <th scope="col">Status</th>
                                        </tr>
                                      </thead>
                                  </tr>
                                  <tr>

                                    <td scope="col"><select class="form-select" aria-label="Default select example" name="payment_type">
                                        <option value="">Select</option>
                                        @foreach($payment_type as $key1)
                                            <option value="{{$key1->payment_id}}" {{($key1->payment_id == $data->payment_id) ? "selected" : "" }}> {{$key1->payment_name}}</option>
                                        @endforeach
                                      </select></td>
                                    <td scope="col"><select class="form-select" aria-label="Default select example" name="supplier">
                                        <option value="">Select</option>
                                        @foreach($supplier as $key)
                                            <option value="{{$key->id}}" {{ ($key->id == $data->supplier_id) ? "selected" : "" }} > {{$key->supplier_name}}</option>
                                        @endforeach
                                      </select></td>
                                    <td scope="col"><select class="form-select" aria-label="Default select example" name="status">
                                        <option value="Order Placed" @if ($data->status == "OrderPlaced")selected="selected" @endif>Order Placed</option>
                                        <option value="Delivered" @if ($data->status == "Delivered")selected="selected" @endif>Delivered</option>
                                        <option value="Verified" @if ($data->status == "Verified")selected="selected" @endif>Verified</option>
                                        <option value="Cancelled" @if ($data->status == "Varifided")selected="selected" @endif>Cancelled</option>
                                    </select></td>
                                  </tr>
                                </tbody>
                              </table>
                            <table class="table table-bordered table-hover" id="tab_logic">
                                <thead>
                                  <tr>
                                    <th scope="col" Style="width:25%">Item Name</th>
                                    <th scope="col">Batch No</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Total</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>

                                    @foreach ( $purchase_order as $row)
                                    <input type="hidden" name="item_id[]" value="{{ $row->id}}"class="form-control">
                                        <tr>
                                            <td>
                                                <select class="form-select" aria-label="select example"  name="item_name[]" id="item_name" reaquired>
                                                    <option value="">Select</option>
                                                    @foreach($medicines_details as $val)
                                                        <option value="{{$val->id}}" {{ ($val->id == $row->item_name) ? "selected" : "" }} >{{ $val->Item_name }}</option>
                                                    @endforeach
                                                  </select>
                                            </td>
                                            <td><input type="text" name="batch_no[]" id="batch_no" class="form-control" value="{{$row->batch_no}}" reaquired></td>
                                            <td><input type="text" name="quantity[]" id="quantity" class="form-control  calculate"  value="{{$row->quantity}}" reaquired></td>
                                            <td><input type="text" name="price[]" id="price" class="form-control calculate"  value="{{$row->price}}" reaquired></td>
                                            <td><input type="text" name="total[]" id="total" class="form-control calculate-sub" value="{{$row->total}}" reaquired></td>
                                        </tr>
                                    @endforeach


                                </tbody>
                              </table>
                    </div>

                            <div class="row">
                                <div class="col-sm">
                                </div>
                                <div class="col-sm">
                                    <table class="table table-bordered">
                                          <tr>
                                            <td scope="col">Grand Total</td>
                                            <td><input type="text" class="form-control invoice-sub-total" value="" id="exampleFormControlInput1" name="grand_totall" id="grand-total" readonly></td>
                                          </tr>
                                          <tr>
                                            <td scope="col">Advance Amount</td>
                                            <td><input type="text" class="form-control" id="exampleFormControlInput1" name="advance_amount" value="{{$data->advance_amount}}" id="advance-amount" readonly></td>
                                          </tr>
                                          <tr>
                                            <td scope="col">Pending Amount</td>
                                            <td><input type="text" class="form-control" name="pending_amount" value="<?php echo ($data->grand_total)-($data->advance_amount);?>" id="result" readonly></td>
                                          </tr>
                                         

                                      </table>
                                      <div class="row">
                                          {{-- <div class="col-sm">
                                           </div> --}}
                                          {{-- <div class="col-sm"> --}}
                                            <button type="button" class="btn btn-primary text-white" onclick="window.history.back()" style="width:35%;background-color:#3e699b" >Close</button>
                                            <button type="submit" class="btn btn-primary" style="background-color:#3e699b;width:35%;">Update</button>
                                          {{-- </div>
                                          <div class="col-sm">

                                        </div> --}}
                                      </div>

                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="modal fade" id="myModal-2">
                        <div class="modal-dialog modal-xm">
                          <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header" style="background-color:#435ebe">
                            <h4 class="text-white"><b>Advance Payment</b></h4>

                          </div>

                          <!-- Modal body -->


                            @endforeach


                        </div>
                    </div>
                </div>
            </form>
        <script src="{{ url('assets/js') }}/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {

                // add new product row on invoice
                var cloned = $('#tab_logic tr:last').clone();
                $("#add_Row").click(function (e) {
                    e.preventDefault();
                    cloned.clone().appendTo('#tab_logic');
                });
                $("table.order-list").on("click", ".ibtnDel", function(_event) {
                    $(this).closest("tr").remove();
                    counter -= 1
                  });
                calculateTotal();

                $('#tab_logic').on('change keyup paste', '.calculate', function() {
                    updateTotals(this);
                    calculateTotal();
                });

                function updateTotals(elem) {
                    var tr = $(elem).closest('tr'),
                        quantity = $('[name="quantity[]"]', tr).val(),
                        price = $('[name="price[]"]', tr).val(),
                        percent = $('[name="total[]"]', tr).val(),
                        subtotal = parseInt(quantity) * parseFloat(price);
                    $('.calculate-sub', tr).val(subtotal.toFixed(2));
                }

                function calculateTotal(){
                    // updateTotals();
                    var grandTotal = 0.0;
                    var totalQuantity = 0;
                        $('.calculate-sub').each(function(){
                        grandTotal =($(this).val()) ;
                        if ($.isNumeric(grandTotal)) {

                            totalQuantity += parseFloat(grandTotal);
        }
        });

        $('.invoice-sub-total').val(parseFloat(totalQuantity ).toFixed(2) );
        }

        });
        </script>

        <script>
            $(function(){
              $("#allsupplier").dataTable();
            })
          </script>

        <script>
            $(document).ready(function() {
              $(".select_group").select2();
              // $("#description").wysihtml5();
            });

        // delete function
        $("table.order-list").on("click", ".ibtnDel", function(_event) {
            $(this).closest("tr").remove();
            counter -= 1
          });
        </script>
        <script>
        $(document).ready(function() {

            $('#grand-total').keyup(function() {
              recalc();
            });
            $('#advance-amount').keyup(function() {
              recalc();
            });



            function recalc() {
              var grandTotal = $("#grand-total").val();
              var advanceAmount = $("#advance-amount").val();
              var result = parseInt(grandTotal)-parseInt(advanceAmount);
              $("#result").val(result);
            }
          });
        </script>
@endsection
