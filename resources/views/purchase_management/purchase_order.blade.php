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
            <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#myModal">Add New Purchase</button></a>
                
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
                        <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()"
                            placeholder="Search.." class="form-control">
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


                                    <tr class="text-center">
                                        <td>62C67947652DC</td>
                                        <td>23-11-2022</td>
                                        <td>ABC Ltd</td>
                                        <td>10</td>
                                        <td>Order-Placed</td>
                                        <td scope="row" class="text-center">
                                        <a href="{{url('view_purchase_order')}}"> <i style="color:rgb(13, 1, 56);"class="fa fa-eye"></i>
                                        </td>

                                    </tr>

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
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header" >
                                        <h2><b>Add New Purchase</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" >
                                        <div class="container">
                                            <form method="post" action="{{ url('purchase_order') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
    
<div class="container">
  <div class="row">
    <div class="col">
    <label for="exampleFormControlInput1" class="form-label">Purchase Date</label>
  <input type="date" class="form-control" >
  <br>
  <label for="exampleFormControlInput1" class="form-label">Supplier</label>
    <select class="form-select" aria-label="Default select example">
        <option selected>---select---</option>
        <option value="1">Supplier 1</option>
        <option value="2">Supplier2</option>
    </select>
</div>
   <div class="col">
   <label for="exampleFormControlInput1" class="form-label">Purchase Order Number</label>
  <input type="text" class="form-control" >
    
  <br>
  <label for="exampleFormControlInput1" class="form-label">Status</label>
  <input class="form-control" type="text" placeholder="Order-Placed" aria-label="Disabled input example" disabled>
    
    </div>
    <div class="col">
  <label for="exampleFormControlInput1" class="form-label">Payment Type</label>
  <select class="form-select" aria-label="Default select example">
        <option selected>---select---</option>
        <option value="1">Cash</option>
        <option value="2">Bank Transfer</option>
    </select>  
  </div>
</div>
<br>
<br>

<div class="text-center">
<h4><b>Purchase Items</b></h4>
</div>
<br>
 <!-- table -->

                                    <div class="row clearfix">

                                        <div class="col-sm">

                                            <table class="table table-bordered order-list" id="tab_logic">

                                                <tr> <td class="">Item ID</td>
                                                    <td class="" style="width:25%">Item Name</td>
                                                    <td class="">Quantity</td>
                                                    <td class="">Price</td>
                                                    <td class="">Total</td>
                                                    <td> <input type="button" class="btn btn-primary" id="add_Row"
                                                            style="background-color:#607080;width:100%;" value="Add">
                                                    </td>
                                                </tr>
                                                <tbody>
                                                    <tr>
                                                        
                                                        <td><input type="text" name="batch_no[]" id="batch_no_"
                                                                class="form-control" placeholder="Item No"></td>
                                                                <td><select class="form-select" aria-label="select example"
                                                                name="item_name[]" id="item_name">
                                                                <option value="">Select</option>
                                                              
                                                                    <option value="">
                                                                      
                                                                    </option>
                                                             
                                                            </select></td>
                                                        <td><input type="text" name="quantity[]" id="quantity_"
                                                                class="form-control text-right calculate"></td>
                                                        <td><input type="text" name="price[]" id="price_"
                                                                class="form-control calculate" placeholder="0.00"></td>
                                                        <td><input type="text" name="total[]" id="total_"
                                                                class="form-control calculate-sub" placeholder="0.00">
                                                        </td>
                                                        <td><button type="button"
                                                                class="add-Row ibtnDel btn btn-primary text-white "
                                                                style="background-color:#607080;width:100%;color:white;">Remove</button>
                                                        <td>
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
                                                                    class="form-control invoice-sub-total" value=""
                                                                    name="grand_totall" id="grand_totall_" readonly>
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
                                                <div class="modal-header" style="background-color:#607080">
                                                    <h4 class="text-white"><b>Advance Payment</b></h4>

                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <form method="post" action="{{ url('purchase_order') }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="col-sm">
                                                                <label for="">Grand Total</label>
                                                                <input type="text"
                                                                    class="form-control invoice-sub-total"
                                                                    placeholder="Grand Total " id="grand-total"
                                                                    name="grand_total" value="0" readonly><br>
                                                                <label for="">Advance Amount</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Advance Amount" id="advance-amount"
                                                                    name="advance_amount" value=""><br>
                                                                <label for="">Pending Amount</label>
                                                                <input type="text" class="form-control"
                                                                    value{{ 0 }} placeholder=""
                                                                    id="result" name="pending_amount" value="0"
                                                                    readonly><br>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary text-white"
                                                                    onclick="window.history.back()"
                                                                    style="background-color:#607080;width:20%;">Close</button>
                                                                <button type="submit" class="btn btn-primary"
                                                                    style="background-color:#607080;width:20%;" >Save</button>
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

            <div class="modal-footer">
                <button type="button" class="btn btn-primary text-white" style="width:10%;background-color:#607080"
                    data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"
                    style="background-color:#607080;width:10%;"data-toggle="modal"
                    data-target="#myModal-2"><b>Save</b></button>
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
 
        
            {{-- Supplier Edit End --}}
            @endsection