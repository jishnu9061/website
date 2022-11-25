@extends('layouts.hmsmain')
@section('content')
<html>

<head>
    <style>


    </style>

</head>

<body>
    <div class="container">
        <!-- <h2 style="color: #070344;  text-align:center;"><b>Customer Registration</b></h2> -->
        <div>
            <div>
                <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px">
                <b><u>Client Registration</u></b></span> -->
                {{-- heading --}}
                <h4 id="hdtpa"><b>Item Request</b></h4>
                <br>
            </div>

        </div>
        <div>
            <!-- <button type="button" class="btn btn-primary complaint_btn btn " data-toggle="modal"
                data-target="#myModal">Request Item</button></a> -->
            <!--filter-->
           
           

            <!--filter end-->


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
                                        <th class="text-center">Request Date</th>
                                        <th class="text-center">User Request</th>
                                        <th class="text-center">Item Rerusted</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    <tr id="data">
                                        <td scope="row" class="text-center"></td>
                                        <td scope="row" class="text-center"></td>
                                        <td scope="row" class="text-center"></td>
                                        <td scope="row" class="text-center"></td>
                                        <td scope="row" class="text-center"></td>
                                        <td scope="row" class="text-center">
                                            <!-- <a href="edit_request_item"><i style="  color:rgb(13, 1, 56);"
                                                    class="fa fa-edit"></i> -->
                                                    <a href="view_requst"> <i style="color:rgb(13, 1, 56);"
                                                        class="far fa-arrow-alt-circle-right "></i>
                                                <!-- <a href=""> <i style="color:rgb(13, 1, 56);"
                                                        class="fas fa-trash-alt"></i> -->



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


                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h2 class="text-center"><b>Add Request</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 order-md-1">
                                                    <form method="post" action="" id="form">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-1">
                                                                    <label for="username">Date</label>
                                                                    <div class="input-group">

                                                                        <div class="input-group-prepend"></div>
                                                                        <input type="date" class="form-control"
                                                                            name="date" id="username" value=""
                                                                            placeholder="" required>
                                                                        <div class="invalid-feedback"
                                                                            style="width: 100%;">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-1">
                                                                    <label for="username">User Request</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend"></div>

                                                                        <select name="user_request" id="username"
                                                                            style="width:100%;">
                                                                            <option>---select--- </option>
                                                                            <option>name 1 </option>
                                                                            <option>name 2</option>
                                                                            <option>name 3</option>


                                                                        </select>
                                                                        <div class="invalid-feedback"
                                                                            style="width: 100%;">
                                                                            Town is required.
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-1">
                                                                    <label for="username">Department</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend"></div>

                                                                        <select name="branch" id="username"
                                                                            style="width:100%;">
                                                                            <option>---select--- </option>
                                                                            <option>name 1 </option>
                                                                            <option>name 2</option>
                                                                            <option>name 3</option>


                                                                        </select>
                                                                        <div class="invalid-feedback"
                                                                            style="width: 100%;">
                                                                            Town is required.
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>
                                                        <br>
                                                        <div>
                                                            <h4 id="hdtpa"><b>Item </b></h4>
                                                        </div>
                                                        <br>
                                                       
                                    <div class="row clearfix">

                                        <div class="col-sm">

                                            <table class="table table-striped table-class" id="tab_logic">

                                                <tr>
                                                    <td class="" style="width:25%">Category</td>
                                                    
                                                 
                                                    <td class="">Item Name</td>
                                                    <td class="">Quantity</td>
                                                  
                                                    <td> <input type="button" class="btn btn-primary" id="add_Row"
                                                            style="background-color:#607080;width:100%;" value="Add">
                                                    </td>
                                                </tr>
                                                <tbody>
                                                    <tr>
                                                        <td><select class="form-select" aria-label="select example"
                                                                name="item_name[]" id="item_name">
                                                                <option value="">Select</option>
                                                              
                                                                    <option value="">
                                                                    
                                                                    </option>
                                                           
                                                            </select></td>
                                                            <td><select class="form-select" aria-label="select example"
                                                                name="item_name[]" id="item_name">
                                                                <option value="">Select</option>
                                                              
                                                                    <option value="">
                                                                    
                                                                    </option>
                                                           
                                                            </select></td>
                                                     
                                                       
                                                        <td><input type="text" name="price[]" id="price_"
                                                                class="form-control calculate" placeholder="0"></td>
                                                     
                                                        </td>
                                                        <td><button type="button"
                                                                class="add-Row ibtnDel btn btn-primary text-white "
                                                                style="background-color:#607080;width:100%;color:white;">Remove</button>
</td>
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
                                 

            <div class="modal-footer">
                <button type="button" class="btn btn-primary text-white" style="width:10%;background-color:#607080"
                data-dismiss="modal">cancel</button>
                <button type="submit" class="btn btn-primary"
                    style="background-color:#607080;width:10%;"
                    ><b>Save</b></button>
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
    @endsection
