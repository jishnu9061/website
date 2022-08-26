@extends('layouts.hmsmain')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  {{-- <div class="spacer" style="height:40px;margin-top: 30px;"> --}}


</head>

<body>

    <div class="container">
        <h3 style="text-align:center"><b><u>Order Details</u></b></h3>

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header" style="background-color:#607080">
                <h4 class="text-white"><b>Purchase Order Request</b></h4>

              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <div class="container">
                    <form method="post" action="{{url('view_purchse_print')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm">
                                <label for="">Manufacturer</label>
                                <select class="form-select" aria-label="Default select example" name="manufacturer">
                                    <option value="">Select</option>
                                    @foreach($manufact as $key)
                                        <option value="{{$key->id}}">{{$key->manufactuers_name}}</option>
                                    @endforeach
                                  </select>
                                  <div class="col-sm">
                                      <label for="">Purchase Date</label>
                                      <input type="date" name="purchase_date" id="purchase_date" class="form-control"><br>
                                  </div>
                            </div>
                            <div class="col-sm">
                                    <label for="">Purchase Order Number</label>
                                     <input type="text" name="purchase_number" id="purchase_number" class="form-control" value="@if (!empty($purc_order->purchase_orderno)){{$purc_order->purchase_orderno}}@else{{strtoupper(uniqid())}}@endif"><br>
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-sm">
                                <label for="">Payment Type</label>
                                        <select class="form-select" aria-label="Default select example" id="payment_type" name="payment_type" required>
                                            <option value="">Select</option>
                                            @foreach ($payment_type as $key1)
                                             <option value="{{$key1->payment_id}}">{{$key1->payment_name}}</option>
                                            @endforeach
                                        </select>
                            </div>
                            <div class="col-sm">
                                <label for="">Supplier</label>
                                        <select class="form-select" aria-label="Default select example" name="supplier" id="supplier">
                                            <option value="">Select</option>
                                            @foreach ($supplier as $key2)
                                             <option value="{{$key2->id}}">{{$key2->supplier_name}}</option>
                                            @endforeach
                                        </select>
                            </div>
                            <div class="col-sm">
                                <label for="">Status</label>
                                <input type="text" value={{'Order-Placed'}} name="status" id="purchase_date" class="form-control" readonly><br>
                            </div>
                            </div>
                            <br>
                            <h4 style="text-align:center"><b>Purchase Details</b></h4><br>
                                <div class="row clearfix">

                                    <div class="col-sm">

                                        <table class="table table-bordered order-list" id="tab_logic">

                                            <tr>
                                                <td class="" style="width:25%">Item Name</td>
                                                <td class="">Batch No</td>
                                                {{-- <td class="">Expiry Date</td> --}}
                                                <td class="">Quantity</td>
                                                <td class="">Price</td>
                                                <td class="">Total</td>
                                                <td> <input type="button" class="btn btn-primary" id="add_Row" style="background-color:#607080;width:100%;" value="Add">  </td>
                                            </tr>
                                        <tbody>
                                            <tr>
                                                <td><select class="form-select"  aria-label="select example" name="item_name[]" id="item_name">
                                                    <option value="">Select</option>
                                                    @foreach ($item_name  as $row)
                                                        <option value="{{$row->id}}">{{$row->Item_name}}--{{$row->brand_name}}--{{$row->category_name}}</option>
                                                    @endforeach
                                                  </select></td>
                                                <td><input type="text" name="batch_no[]" id="batch_no_" class="form-control"  placeholder="Batch No"></td>
                                                <td><input type="text" name="quantity[]" id="quantity_" class="form-control text-right calculate"></td>
                                                <td><input type="text" name="price[]" id="price_" class="form-control calculate" placeholder="0.00"></td>
                                                <td><input type="text" name="total[]" id="total_" class="form-control calculate-sub"  placeholder="0.00"></td>
                                                <td><button type="button" class="add-Row ibtnDel btn btn-primary text-white " style="background-color:#607080;width:100%;color:white;">Remove</button><td>
                                            </tr>
                                        </table>
                                        <div class="row">
                                            <div class="col-sm">
                                            </div>
                                            <div class="col-sm">
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <td scope="col">Grand Total</td>
                                                        <td><input type="text" class="form-control invoice-sub-total" value="" name="grand_totall" id="grand_totall_" readonly></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="modal fade" id="myModal-2">
                                    <div class="modal-dialog modal-xm">
                                      <div class="modal-content">

                                      <!-- Modal Header -->
                                      <div class="modal-header" style="background-color:#607080">
                                        <h4 class="text-white"><b>Advance Payment</b></h4>

                                      </div>

                                      <!-- Modal body -->
                                      <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{url('add_advance_pyment')}}" enctype="multipart/form-data">
                                                {{-- <input type="hidden" name="pending_amount" value="{{0}}" class="form-control" placeholder="Advance Amount"><br> --}}
                                                @csrf
                                                    <div class="col-sm">

                                                        {{-- <input type="text" class="form-control invoice-sub-total" value="{{$data->grand_total}}" name="grand_totall" id="grand_totall_" readonly> --}}
                                                        <label for="">Advance Amount</label>
                                                        <input type="hidden" name="advance_id" class="form-control"><br>
                                                        <input type="text" name="advance_amount" value="" class="form-control" placeholder="Advance Amount"><br>
                                                        <input type="hidden" name="pending_amount" value="" class="form-control" placeholder="Advance Amount"><br>

                                                    </div>
                                                   <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary text-white" onclick="window.history.back()" style="background-color:#607080;width:20%;" >Close</button>
                                                            <button type="submit" class="btn btn-primary" style="background-color:#607080;width:20%;">Save</button>
                                                        </div>
                                            </div>

                                      </div>


                                    </form>

                                    </div>
                                  </div>
                                </div>
                                </div>
                                  </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" class="form-control" id="edit_id" name="medicine_id">
                                    </div>
                                </div>

                                <div class="modal-footer" >
                                    <button type="button" class="btn btn-primary text-white" style="width:10%;background-color:#607080" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" style="background-color:#607080;width:10%;"data-toggle="modal" data-target="#myModal-2"><b>Save</b></button>
                    </div>


                    </div>

              </div>


            </form>

            </div>
          </div>
        </div>

      </div>
      <br>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <table class="table table-bordered" id="allsupplier">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Order Number</th>
                        <th class="text-center">Manufacturer</th>
                        <th class="text-center">Supplier</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">View</th>
                        <th class="text-center">Edit</th>
                        {{-- <th class="text-center">return</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($purc_order as $data)
                        <tr id="data">
                            <td  scope="row" class="text-center">{{$data->id}}</td>
                            <td  scope="row" class="text-center">{{date('d-m-Y',strtotime($data->purchase_date))}}</td>
                            <td  scope="row" class="text-center">{{$data->purchase_orderno}}</td>
                            <td  scope="row" class="text-center">{{$data->manufactuers_name}}</td>
                            <td  scope="row" class="text-center" id="sup_name_x">{{$data->supplier_name}}</td>
                            <td  scope="row" class="text-center" id="sup_name_x">{{$data->status}}</td>
                            <td  scope="row"class="text-center"><a href="{{url('purchase_detailes_view'.$data->id)}}"><i  style="color:#435ebe;" class="fa fa-eye" aria-hidden="true"></i></td>
                            <td><a href="{{url('edit_purchase_detailes'.$data->id)}}"><i  style="color:#435ebe;" class="fa fa-edit" aria-hidden="true"></i></td>

                            {{-- <a href="{{url('edit_purchase_detailes'.$data->id)}}"><i  style="color:#435ebe;" class="fa fa-eye" aria-hidden="true"></i></td> --}}
                            {{-- <td  scope="row"class="text-center"><a href="{{url('return_detailes'.$data->id)}}"><i  style="color:#435ebe;" class="fa fa-reply-all" aria-hidden="true"></i></td> --}}

                        </tr>
                    @endforeach
                </tbody>
            </table>

<div class="modal fade" id="myModal-1">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#435ebe">
        <h4 class="text-white"><b>Add New Items</b></h4>

      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container">
            <form method="post" action="{{url('create_purchase_medicine')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm">
                        <label for="">Item Name</label>
                        <input type="text" name="medicine_name" class="form-control" placeholder="New Item"><br>
                </div>
                    <div class="col-sm">
                        <label for="">Manufacturer Name</label>
                        <select class="form-select" aria-label="Default select example" name="manufacture_name">
                            <option value="">Select</option>
                            @foreach($manufact as $key)
                                <option value="{{$key->id}}">{{$key->manufactuers_name}}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="col-sm">
                        <label for="">Supplier Name</label>
                        <select class="form-select" aria-label="Default select example" name="supplier_name" id="supplier_name">
                            <option value="">Select</option>
                            @foreach ($supplier as $key2)
                             <option value="{{$key2->id}}">{{$key2->supplier_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm">
                        <label for="">Profit %</label>
                        <input type="text" name="profit_percentage" class="form-control" placeholder="Profit %"><br>
                </div>

                    </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary text-white" style="width:20%;background-color:#435ebe" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" style="background-color:#435ebe;width:20%;">Save</button>
                        </div>
            </div>
            <div class="container">



            </div>
      </div>


    </form>

    </div>
  </div>
</div>


</div>

<br>
<!-- Supplier modal Edit End -->

<!-- Delete  confirmation Message -->
<script>
	function myFunction(){
		if(!confirm("Are you sure to delete this"))
		event.preventDefault();
	}
</script>

<!-- End delete confirmation message -->
</div>

{{-- Search booking script --}}
<script>
    $(document).ready(function(){
             $('.searchingBook').select2();
    });
 </script>
{{-- search booking script end --}}
<!-- Delete  confirmation Message -->
  <script>
    function myFunction(){
        if(!confirm("Are you sure to delete this"))
        event.preventDefault();
    }
</script>
<!-- End delete confirmation message -->

<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

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

@endsection
