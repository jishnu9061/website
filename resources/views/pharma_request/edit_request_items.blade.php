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
    <h3 style="text-align:center">Edit Request Detailes</h3><br>

        {{-- <table class="table table-bordered" style="border: 1px solid"> --}}
        <form method="post" action="{{url('update_request_items')}}" enctype="multipart/form-data">
            @csrf
            @foreach($request_detailes as $data)
                <input type="hidden" name="request_intendid" value="{{$data->request_intendid}}" class="form-control">
                <div class="row">
                    <div class="col-sm">
                        <label for="">Request Date</label>
                            <input type="date" name="request_date" value="{{date('Y-m-d',strtotime($data->request_intenddate))}}" class="form-control">
                    </div>
                    <div class="col-sm">
                        <label for="">Request Department</label>
                        <input type="text" name="request_department" value="{{($data->department)}}" class="form-control" readonly>
                    </div>
                    <div class="col-sm">
                        <label for="">Added By</label>
                            <select class="form-select" aria-label="Default select example" name="request_added_by" style="pointer-events: none;" >
                                <option value="">Select</option>
                                @foreach($users as $key1)
                                    <option value="{{$key1->id}}" {{ ($key1->id == Auth::user()->id) ? "selected" : "" }} > {{ $key1->name }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
                <br>
                <h4 style="text-align:center"><b>Request Items</b></h4><br>
                    <div class="row clearfix">
                        <div class="col-sm">
                            <table class="table table-bordered table-hover" id="tab_logic">
                                <tr>
                                    <td class="" style="width:70%">Item Name</td>
                                    <td class="">Requested Quantity</td>
                                </tr>
                                <tbody>
                                    @foreach ($requested_items as $row1)
                                        <tr>
                                            <input type="hidden" name="item_id" value="{{$row1->request_intendid}}" class="form-control">
                                            <td>
                                                <select class="form-select" aria-label="select example" name="item_name[]" id="item_name">
                                                    <option value="">Select</option>
                                                        @foreach($medicine_detailes as $val)
                                                            <option value="{{$val->id}}" {{ ($val->id == $row1->medicine) ? "selected" : "" }} >{{$val->Item_name}}</option>
                                                        @endforeach
                                                </select>
                                            </td>
                                            <td><input type="text" name="quantity[]" class="form-control text-right calculate" value="{{$row1->requested_quantity}}"></td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- <h4 style="text-align:center"><b>Add New Purchase</b></h4><br>
                    <div class="row clearfix">
                        <div class="col-sm">
                            <table class="table table-bordered table-hover order-list" id="tab_logic1">
                                <tr>
                                    <td class="" style="width:50%">Item Name</td>
                                    <td class="">Requested Quantity</td>
                                    <td> <input type="button" class="btn btn-primary" id="add_Row" style="background-color:#435ebe;width:100%;" value="Add">  </td>
                                </tr>
                                <tbody>
                                    <tr>
                                        <td>
                                            <select class="form-select" aria-label="select example" name="item_name[]" id="item_name">
                                                <option value="">Select</option>
                                                    @foreach($medicine_detailes as $val)
                                                        <option value="{{$val->id}}"> {{$val->Item_name}}--{{$val->brand_name}}--{{$val->category_name}}</option>
                                                    @endforeach
                                            </select>
                                        </td>
                                        <td><input type="text" name="quantity[]" id="quantity_" class="form-control text-right edit_purchase"></td>
                                        <td><button type="button" class="add-Row ibtnDel btn btn-primary text-white " style="background-color:#435ebe;width:100%;color:white;">Remove</button><td>
                                        <input type="hidden" class="form-control" id="purchase_id" name="purchase_id">
                                    </tr>
                                </tbody>
                            </table> --}}
                            <div class="row">
                                <div class="col-sm">
                                </div>
                                <div class="col-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" class="form-control" id="purchase_id" name="purchase_id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary text-white" onclick="window.history.back()" style="width:15%;background-color:#435ebe" >Close</button>
                        <button type="submit" class="btn btn-primary" style="background-color:#435ebe;width:15%;">Update</button>
                    </div>
                </div>
            @endforeach
        </form>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        var total = 0;
        // add new product row on invoice
        var cloned = $('#tab_logic1 tr:last').clone();
        $("#add_Row").click(function (e) {
            e.preventDefault();
            cloned.clone().appendTo('#tab_logic1');
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
                    // console.log(totalQuantity);
}
});

$('.edit_grand_total').val(parseFloat(totalQuantity).toFixed(2));
}


});


</script>
<script>

    $(document).ready(function () {
    $('#tab_logic1').on('change keyup paste', '.edit_purchase', function() {
        updateTotals(this);
        calculateTotal();
    });

    function updateTotals(elem) {
        var tr = $(elem).closest('tr'),
            quantity = $('[name="quantity[]"]', tr).val(),
            price = $('[name="price[]"]', tr).val(),
            percent = $('[name="total[]"]', tr).val(),
            subtotal = parseInt(quantity) * parseFloat(price);
        $('.total', tr).val(subtotal.toFixed(2));
    }

    function calculateTotal(){
        // updateTotals();
        // var grandTotal =  $('.calculate-sub', tr).val(subtotal.toFixed(2));
            var total = 0;
            $('.total').each(function(){
            grand=($(this).val()) ;
            if ($.isNumeric(grand)) {

                total += parseFloat(grand);
                console.log(total);
}
});

// $(('.edit_grand_total').val(parseFloat(totalQuantity).toFixed(2))+val(parseFloat(total).toFixed(2)));
var curr_g_total= $('.edit_grand_total').val();
$('.edit_grand_total').val(parseFloat(curr_g_total)+parseFloat(total));

}
    });
    </script>

@endsection
