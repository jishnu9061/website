@extends('layouts.hmsmain')
@section('content')




<!-- <h2 style="color: #070344;  text-align:center;"><b>Customer Registration</b></h2> -->


<!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px">
                <b><u>Client Registration</u></b></span> -->
{{-- heading --}}

<h4 id="hdtpa"><b>New Purchase Order</b></h4>
<br>




<div>
    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New
            Purchase</button></a>

        <!-- <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#myModal1">Add New Item</button></a> -->

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
                <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.."
                    class="form-control">
            </div>




            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive">
                        <table class="table table-striped table-class" id="table-id">

                            <thead>
                                <tr>
                                    <th class="text-center">Order Number</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Vendor</th>
                                    <th class="text-center">Unit</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">View</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach($purchase_order as $list)

                                <tr class="text-center">
                                    <td>{{$list->purchase_order_number}}</td>
                                    <td>{{$list->purchase_date}}</td>
                                    <td></td>
                                    <td></td>
                                    <td>{{$list->status}}</td>
                                    <td scope="row" class="text-center">
                                        <a href="{{url('view_purchase_order',$list->purchase_id)}}"> <i
                                                style="color:rgb(13, 1, 56);" class="fa fa-eye"></i>
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







                    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h2><b>Add New Purchase</b></h2>

                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">
                                        <form method="post" action="{{url('store_purchase')}}"
                                            enctype="multipart/form-data">
                                            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Purchase Date</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <input type="date" class="form-control" name="date"
                                                                    id="username" required>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Number is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Purchase Order Number</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <input type="text" class="form-control" name="text"
                                                                    id="username" required>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Number is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Payment Type</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="distributed" id="cars">
                                                                    <option>select</option>
                                                                    <option>By Cash</option>
                                                                    <option>By Cheque</option>
                                                                    <option>By Bank Transfer</option>
                                                                </select>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Number is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Supplier</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="distributed" id="cars">
                                                                    <option>select</option>
                                                                    <option>ABC Ltd</option>
                                                                    <option>Moon Ltd</option>

                                                                </select>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Number is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Status</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <input type="text" class="form-control" id="username"
                                                                    value="Order-Placed" required>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Number is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <br>
                                                <br>







                                                <!-- <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Purchase Date</label>
                                                        <input type="date" class="form-control" name="date">
                                                        <br>
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Supplier</label>

                                                        <select class="form-select" aria-label="Default select example"
                                                            name="supplier">
                                                            <option selected>Select</option>
                                                            <option value="ABC Ltd">ABC Ltd</option>
                                                            <option value="Moon Ltd">Moon Ltd</option>

                                                    </div>
                                                    <div class="col">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Purchase Order Number</label>
                                                        <input type="text" class="form-control"
                                                            value="@if (!empty($purc_order->purchase_orderno)) {{ $purc_order->purchase_orderno }}@else{{ strtoupper(uniqid()) }} @endif">
                                                        <input type="text" class="form-control" name="number">


                                                        <br>
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Status</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Order-Placed"
                                                            aria-label="Disabled input example" value="Order-Placed"
                                                            name="Order-Placed">
                                                    </div>
                                                    <div class="col">
                                                        <label for="exampleFormControlInput1" class="form-label">Payment
                                                            Type</label>

                                                        <select class="form-select" aria-label="Default select example"
                                                            name="Payment">
                                                            <option selected>---select---</option>
                                                            <option value="Cash">Cash</option>
                                                            <option value="cheque">Bank Transfer</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <br> -->

                                                <div class="text-center">
                                                    <h4><b>Purchase Items</b></h4>
                                                </div>
                                                <br>
                                                <!-- table -->

                                                <div class="row clearfix container">

                                                    <div class="col-sm">

                                                        <table class="table table-bordered order-list" id="tab_logic">

                                                            <tr>
                                                                <td class="">Item ID</td>
                                                                <td class="" style="width:25%">Item Name</td>
                                                                <td class="">Quantity</td>
                                                                <td class="">Price</td>
                                                                <td class="">Total</td>
                                                                <td> <input type="button" class="btn btn-primary"
                                                                        id="add" value="Add" Style="width:100%;">
                                                                </td>
                                                            </tr>

                                                        </table>
                                                        <div class="row">
                                                            <div class="col-sm">
                                                            </div>
                                                            <div class="col-sm">
                                                                <table class="table table-bordered">

                                                                    <tr>
                                                                        <td scope="col">Grand Total</td>
                                                                        <td><input type="text"
                                                                                class="form-control invoice-sub-total"
                                                                                value="" name="grand_totall"
                                                                                id="grand_totall_" readonly>
                                                                        </td>
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
                                                            <div class="modal-header">
                                                                <h4><b>Advance Payment</b></h4>

                                                            </div>

                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                                <div class="container">
                                                                    <form method="post"
                                                                        action="{{ url('store_purchase') }}"
                                                                        enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="col-sm" id="form_logic">
                                                                            <label for="">Grand Total</label>
                                                                            <input type="text"
                                                                                class="form-control invoice-sub-total"
                                                                                placeholder="Grand Total "
                                                                                id="grand-total" name="grand_total"
                                                                                value="0" readonly>

                                                                            <brform_logic>

                                                                                <brform_logic> <br>

                                                                                    <label for="">Advance Amount</label>
                                                                                    <input type="text"
                                                                                        class="form-control total"
                                                                                        placeholder="Advance Amount"
                                                                                        id="advance-amount"
                                                                                        name="advance_amount"
                                                                                        value=""><br>
                                                                                    <label for="">Pending Amount</label>
                                                                                    <input type="text"
                                                                                        class="form-control calculate_price"
                                                                                        value{{ 0 }} placeholder=""
                                                                                        id="result"
                                                                                        name="pending_amount" value="0"
                                                                                        readonly><br>
                                                                        </div>

                                                                        <div>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Save</button>
                                                                            <button type="button"
                                                                                class="btn btn-primary"
                                                                                data-dismiss="modal">Close</button>
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
                    <div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary" Style="width:50%;" data-toggle="modal"
                                data-target="#myModal-2">Save</button>
                            <button type="button" class="btn btn-primary" Style="width:45%;"
                                data-dismiss="modal">Close</button>
                        </div>
                    </div>



                </div>

            </div>


            </form>

        </div>
    </div>
</div>

</div>
<br>

<br>
<!-- Supplier modal Edit End -->

<!-- Delete  confirmation Message -->
<script>
function myFunction() {
    if (!confirm("Are you sure to delete this"))
        event.preventDefault();
}
</script>

<!-- End delete confirmation message -->
</div>

{{-- Search booking script --}}
<script>
$(document).ready(function() {
    $('.searchingBook').select2();
});
</script>
{{-- search booking script end --}}
<!-- Delete  confirmation Message -->
<script>
function myFunction() {
    if (!confirm("Are you sure to delete this"))
        event.preventDefault();
}
</script>
<!-- End delete confirmation message -->

<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8"
    src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {

    var html =

        '<tr> <td><input type="text" name="batch_no[]"id="batch_no_" class="form-control"placeholder="Item No"></td>    <td><select class="form-select" aria-label="select example" name="item_name[]"  id="item_name"> <option value="">Select</option><option>Demo Item</option></select></td>   <td><input type="text" name="quantity[]" id="quantity_" class="form-control text-right calculate"></td>   <td><input type="text" name="price[]" id="price_" class="form-control calculate" placeholder="0.00"></td>   <td><input type="text" name="total[]" id="total_" class="form-control calculate-sub" placeholder="0.00"></td>    <td><button type="button" class="add-Row ibtnDel btn btn-primary text-white" id="remove"  style="background-color:#607080;width:100%;color:white;">Remove</button><td></tr>';


    $("#add").click(function() {
        $("#tab_logic").append(html);
    });

    $("#tab_logic").on('click', '#remove', function() {
        $(this).closest('tr').remove();
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
        console.log(tr);
        $('.calculate-sub', tr).val(subtotal.toFixed(2));
    }

    function calculateTotal() {
        // updateTotals();

        var totalQuantity = 0;
        $('.calculate-sub').each(function() {
            grandTotal = ($(this).val());
            if ($.isNumeric(grandTotal)) {

                totalQuantity += parseFloat(grandTotal);
            }
        });

        $('.invoice-sub-total').val(parseFloat(totalQuantity).toFixed(2));
    }

    $("#form_logic").on('change keyup paste', '.total', function() {
        calculateprice(this);
    });

    function calculateprice(elem) {

        var div = $(elem).closest('div'),
            GrandTotal = $('[name="grand_total"]', div).val(),
            AdvanceAmount = $('[name="advance_amount"]', div).val(),
            PendingAmount = $('[name="pending_amount"]', div).val(),
            subtotals = parseInt(GrandTotal) - parseFloat(AdvanceAmount);
        $('.calculate_price', div).val(subtotals.toFixed(2));
    }

});
</script>



{{-- Supplier Edit End --}}
@endsection