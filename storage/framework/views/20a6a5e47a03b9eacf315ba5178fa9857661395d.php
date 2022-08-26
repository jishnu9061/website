
<?php $__env->startSection('content'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
    
</div>
<br>
<div class="container">
    <h3 style="text-align:center"><b><u>Edit Purchase Details</u></b></h3><br>
         <form method="post" action="<?php echo e(url('update_purchase_items')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php $__currentLoopData = $purchase_order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            


                <input type="hidden" name="purchase_id" value="<?php echo e($data->id); ?>"class="form-control">


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
                                    
                                    <td style="width:20%"><select class="form-select" aria-label="Default select example" name="manufacturer">
                                        <option value="">Select</option>
                                        <?php $__currentLoopData = $manufact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key->id); ?>" <?php echo e(($key->id == $data->manufactuers_id) ? "selected" : ""); ?> > <?php echo e($key->manufactuers_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select></td>
                                    <td style="width:20%"> <input type="date" name="purchase_date"  value="<?php echo e($data->Purchase_date); ?>"class="form-control" required></td>
                                    <td style="width:20%"><input type="text" name="purchase_number" value="<?php echo e($data->purchase_orderno); ?>" class="form-control" style="pointer-events: none;" ></td>
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
                                        <?php $__currentLoopData = $payment_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key1->payment_id); ?>" <?php echo e(($key1->payment_id == $data->payment_id) ? "selected" : ""); ?>> <?php echo e($key1->payment_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select></td>
                                    <td scope="col"><select class="form-select" aria-label="Default select example" name="supplier">
                                        <option value="">Select</option>
                                        <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key->id); ?>" <?php echo e(($key->id == $data->supplier_id) ? "selected" : ""); ?> > <?php echo e($key->supplier_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select></td>
                                    <td scope="col"><select class="form-select" aria-label="Default select example" name="status">
                                        <option value="Order Placed" <?php if($data->status == "OrderPlaced"): ?>selected="selected" <?php endif; ?>>Order Placed</option>
                                        <option value="Delivered" <?php if($data->status == "Delivered"): ?>selected="selected" <?php endif; ?>>Delivered</option>
                                        <option value="Verified" <?php if($data->status == "Verified"): ?>selected="selected" <?php endif; ?>>Verified</option>
                                        <option value="Cancelled" <?php if($data->status == "Varifided"): ?>selected="selected" <?php endif; ?>>Cancelled</option>
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

                                    <?php $__currentLoopData = $purchase_order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <input type="hidden" name="item_id[]" value="<?php echo e($row->id); ?>"class="form-control">
                                        <tr>
                                            <td>
                                                <select class="form-select" aria-label="select example"  name="item_name[]" id="item_name" reaquired>
                                                    <option value="">Select</option>
                                                    <?php $__currentLoopData = $medicines_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($val->id); ?>" <?php echo e(($val->id == $row->item_name) ? "selected" : ""); ?> ><?php echo e($val->Item_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                  </select>
                                            </td>
                                            <td><input type="text" name="batch_no[]" id="batch_no" class="form-control" value="<?php echo e($row->batch_no); ?>" reaquired></td>
                                            <td><input type="text" name="quantity[]" id="quantity" class="form-control  calculate"  value="<?php echo e($row->quantity); ?>" reaquired></td>
                                            <td><input type="text" name="price[]" id="price" class="form-control calculate"  value="<?php echo e($row->price); ?>" reaquired></td>
                                            <td><input type="text" name="total[]" id="total" class="form-control calculate-sub" value="<?php echo e($row->total); ?>" reaquired></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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
                                            <td><input type="text" class="form-control" id="exampleFormControlInput1" name="advance_amount" value="<?php echo e($data->advance_amount); ?>" id="advance-amount" readonly></td>
                                          </tr>
                                          <tr>
                                            <td scope="col">Pending Amount</td>
                                            <td><input type="text" class="form-control" name="pending_amount" value="<?php echo ($data->grand_total)-($data->advance_amount);?>" id="result" readonly></td>
                                          </tr>
                                         

                                      </table>
                                      <div class="row">
                                          
                                          
                                            <button type="button" class="btn btn-primary text-white" onclick="window.history.back()" style="width:35%;background-color:#3e699b" >Close</button>
                                            <button type="submit" class="btn btn-primary" style="background-color:#3e699b;width:35%;">Update</button>
                                          
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


                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </div>
                    </div>
                </div>
            </form>
        <script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\globalerp\resources\views/store/edit_purchase_detailes.blade.php ENDPATH**/ ?>