
<?php $__env->startSection('content'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    


    </head>

    <body>

        <div class="container">
            <h3 style="text-align:center"><b><u>Purchase Order Details</u></b></h3><br>
            <button type="button" class="btn btn-primary" style="background-color:#607080;width:18%;"data-toggle="modal"
                data-target="#myModal"><b>Add New Purchase</b></button>
            <button type="button" class="btn btn-primary" style="background-color:#607080;width:15%;"data-toggle="modal"
                data-target="#myModal-1"><b>Add New Item</b></button>
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
                                <form method="post" action="<?php echo e(url('view_purchse_print')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="col-sm">
                                            <label for="">Manufacturer</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="manufacturer">
                                                <option value="">Select</option>
                                                <?php $__currentLoopData = $manufact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($key->id); ?>"><?php echo e($key->manufactuers_name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="col-sm">
                                            <label for="">Purchase Date</label>
                                            <input type="date" name="purchase_date" id="purchase_date"
                                                class="form-control"><br>
                                        </div>
                                        <div class="col-sm">
                                            <label for="">Purchase Order Number</label>
                                            <input type="text" name="purchase_number" id="purchase_number"
                                                class="form-control"
                                                value="<?php if(!empty($purc_order->purchase_orderno)): ?> <?php echo e($purc_order->purchase_orderno); ?><?php else: ?><?php echo e(strtoupper(uniqid())); ?> <?php endif; ?>"><br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm">
                                            <label for="">Payment Type</label>
                                            <select class="form-select" aria-label="Default select example"
                                                id="payment_type" name="payment_type" required>
                                                <option value="">Select</option>
                                                <?php $__currentLoopData = $payment_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($key1->payment_id); ?>"><?php echo e($key1->payment_name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="col-sm">
                                            <label for="">Supplier</label>
                                            <select class="form-select" aria-label="Default select example" name="supplier"
                                                id="supplier">
                                                <option value="">Select</option>
                                                <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($key2->id); ?>"><?php echo e($key2->supplier_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="col-sm">
                                            <label for="">Status</label>
                                            <input type="text" value=<?php echo e('Order-Placed'); ?> name="status"
                                                id="purchase_date" class="form-control" readonly><br>
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
                                                    
                                                    <td class="">Quantity</td>
                                                    <td class="">Price</td>
                                                    <td class="">Total</td>
                                                    <td> <input type="button" class="btn btn-primary" id="add_Row"
                                                            style="background-color:#607080;width:100%;" value="Add">
                                                    </td>
                                                </tr>
                                                <tbody>
                                                    <tr>
                                                        <td><select class="form-select" aria-label="select example"
                                                                name="item_name[]" id="item_name">
                                                                <option value="">Select</option>
                                                                <?php $__currentLoopData = $item_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($row->id); ?>">
                                                                        <?php echo e($row->Item_name); ?>--<?php echo e($row->brand_name); ?>--<?php echo e($row->category_name); ?>

                                                                    </option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select></td>
                                                        <td><input type="text" name="batch_no[]" id="batch_no_"
                                                                class="form-control" placeholder="Batch No"></td>
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
                                                        <?php
                                                            $grand_total = 0;
                                                        ?>
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
                                                        <form method="post" action="<?php echo e(url('add_advance_payment')); ?>"
                                                            enctype="multipart/form-data">
                                                            <?php echo csrf_field(); ?>
                                                            <div class="col-sm">
                                                                <label for="">Grand Total</label>
                                                                <input type="text"
                                                                    class="form-control invoice-sub-total"
                                                                    placeholder="Grand Total " id="grand-total"
                                                                    name="grand_total" value="0" readonly><br>
                                                                <label for="">Advance Amount</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Advance Amount" id="advance-amount"
                                                                    name="advance_amount" value="0"><br>
                                                                <label for="">Pending Amount</label>
                                                                <input type="text" class="form-control"
                                                                    value<?php echo e(0); ?> placeholder=""
                                                                    id="result" name="pending_amount" value="0"
                                                                    readonly><br>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary text-white"
                                                                    onclick="window.history.back()"
                                                                    style="background-color:#607080;width:20%;">Close</button>
                                                                <button type="submit" class="btn btn-primary"
                                                                    style="background-color:#607080;width:20%;">Save</button>
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
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <table class="table table-bordered" id="allsupplier">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Order Number</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Manufacturer</th>
                            <th class="text-center">Supplier</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">view</th>
                            <th class="text-center">Print</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $purc_order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr id="data">
                                <td scope="row" class="text-center"><?php echo e($data->id); ?></td>
                                <td scope="row" class="text-center"><?php echo e($data->purchase_orderno); ?></td>
                                <td scope="row" class="text-center">
                                    <?php echo e(date('d-m-Y', strtotime($data->purchase_date))); ?></td>
                                <td scope="row" class="text-center"><?php echo e($data->manufactuers_name); ?></td>
                                <td scope="row" class="text-center" id="sup_name_x"><?php echo e($data->supplier_name); ?></td>
                                <td scope="row" class="text-center" id="sup_name_x"><?php echo e('Order-Placed'); ?></td>
                                <td scope="row"class="text-center"><a
                                        href="<?php echo e(url('view_purchase_detailes' . $data->id)); ?>"><i style="color:#435ebe;"
                                            class="fa fa-eye" aria-hidden="true"></i></td>
                                <td scope="row"class="text-center"><a href="<?php echo e(url('print' . $data->id)); ?>"><i
                                            style="color:#435ebe;" class="fa fa-print" aria-hidden="true"></i></td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                    <form method="post" action="<?php echo e(url('create_purchase_medicine')); ?>"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="">Item Name</label>
                                                <input type="text" name="medicine_name" class="form-control"
                                                    placeholder="New Item"><br>
                                            </div>
                                            <div class="col-sm">
                                                <label for="">Manufacturer Name</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="manufacture_name">
                                                    <option value="">Select</option>
                                                    <?php $__currentLoopData = $manufact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($key->id); ?>"><?php echo e($key->manufactuers_name); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="col-sm">
                                                <label for="">Supplier Name</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="supplier_name" id="supplier_name">
                                                    <option value="">Select</option>
                                                    <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($key2->id); ?>"><?php echo e($key2->supplier_name); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="col-sm">
                                                <label for="">Profit %</label>
                                                <input type="text" name="profit_percentage" class="form-control"
                                                    placeholder="Profit %"><br>
                                            </div>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary text-white"
                                                style="width:20%;background-color:#435ebe"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary"
                                                style="background-color:#435ebe;width:20%;">Save</button>
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
                function myFunction() {
                    if (!confirm("Are you sure to delete this"))
                        event.preventDefault();
                }
            </script>

            <!-- End delete confirmation message -->
        </div>

        
        <script>
            $(document).ready(function() {
                $('.searchingBook').select2();
            });
        </script>
        
        <!-- Delete  confirmation Message -->
        <script>
            function myFunction() {
                if (!confirm("Are you sure to delete this"))
                    event.preventDefault();
            }
        </script>
        <!-- End delete confirmation message -->

        <script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
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
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/store/view_purchase.blade.php ENDPATH**/ ?>