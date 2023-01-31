@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:17px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Stores and Inventory</a> /
    <a href="{{url('request_item')}}" style="color: #1D1D50;">Requested Item Details</a> /
    <a href="#" style="color: #1D1D50;">View Request</a>
</nav>
<br><br>

<div class="container">

    {{-- heading --}}
    <h4 id="hdtpa"><b>View Request Items</b></h4>
    <br>

    <div class="card">

        <div class="card-body">
            <form method="post" action="" id="form">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Requested Date</label>
                            <div class="input-group">

                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="date" id="username" value="01/12/22"
                                    placeholder="" required disabled>
                                <div class="invalid-feedback" style="width: 100%;">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Requested By</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="category_name" id="age"
                                    value="Department Head" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Department</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="category_name" value="Hr Department"
                                    id="age" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="text-center">
                    <h4><b>Item Details </b></h4>
                </div>
                <br>

                <div class="row clearfix">
                    <div class="table-responsive">
                        <div class="col-sm">

                            <table class="table table-striped table-class" id="tab_logic">
                                <tbody class="text-center">
                                    <tr>
                                        <th class="" style="width:25%">Category</th>
                                        <th class="">Item Type</th>
                                        <th class="">item Name</th>
                                        <th class="">Quantity</th>
                                        <!-- <td class="">View</td> -->


                                    </tr>

                                    <tr>
                                        <td><input type="text" name="price[]" id="price_" class="form-control calculate"
                                                disabled value="Stationary"></td>

                                        <td><input type="text" name="price[]" id="price_" class="form-control calculate"
                                                disabled value="Book"></td>

                                        <td><input type="text" name="price[]" id="price_" class="form-control calculate"
                                                disabled value="Book 150 pages"></td>


                                        <td><input type="text" name="price[]" id="price_" class="form-control calculate"
                                                disabled Value="5"></td>

                                        </td>
                                        <!-- <td><a href="issue_view_requst"><button type="button" class="add-Row ibtnDel btn btn-primary text-white "
                                                style="background-color:#607080;width:100%;color:black;">Next</button></a>
                                        </td> -->
                                    </tr>
                            </table>
                            <div class="row">
                                <div class="col-sm">
                                </div>
                                <div class="col-sm">
                                    <table class="table table-bordered">


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <!-- <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                                onclick="history.back()">Cancel</button> -->
                            <a href="issue_view_requst"><button type="button" class="btn btn-primary float:left"
                                    style="float:right;width:50%;margin-right:10%;"
                                    Style="width:100%;">Next</button></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<!-- Supplier modal Edit End -->

<!-- Delete  confirmation Message -->
<script>
function myFunction() {
    if (!confirm("Are you sure to delete this"))
        event.preventDefault();
}
</script>

<!-- End delete confirmation message -->

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
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js">
</script>
<script type="text/javascript" charset="utf8"
    src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {

    // add new product row on invoice
    var cloned = $('#tab_logic tr:last').clone();
    $("#add_Row").click(function(e) {
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

    function calculateTotal() {
        // updateTotals();
        var grandTotal = 0.0;
        var totalQuantity = 0;
        $('.calculate-sub').each(function() {
            grandTotal = ($(this).val());
            if ($.isNumeric(grandTotal)) {

                totalQuantity += parseFloat(grandTotal);
            }
        });

        $('.invoice-sub-total').val(parseFloat(totalQuantity).toFixed(2));
    }

});
</script>

<script>
$(function() {
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
        var result = grandTotal - advanceAmount;

        $("#result").val(result);
    }
});
</script>
@endsection
