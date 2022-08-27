
<?php $__env->startSection('content'); ?>
<style>
    .btn-width{
        width:10%;
    }
</style>

<div class="container">
    <h3 style="text-align:center"><b><u>Add stocks <?php echo e($id); ?></u></b></h3><hr>

        <table class="table table-bordered" style="border: 1px solid">
         <form method="post" action="<?php echo e(url('add_stock')); ?>" enctype="multipart/form-data" id="add-stock">
            <?php echo csrf_field(); ?>
                <tbody>

                    <input type="hidden" name="purchase_id" value="<?php echo e($id); ?>" class="form-control">


                            <tr>
                                <?php $__currentLoopData = $purchase_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="">Order No</label>
                                        <input type="text" value="<?php echo e($row->purchase_orderno); ?>" name="purchase_order" class="form-control" required readonly><br>
                                    </div>
                                    <div class="col-sm">
                                        <label for="">Stock Added Date</label>
                                            <input type="date" value="<?php echo e($row->purchase_date); ?>" name="date" class="form-control"><br>
                                    </div>
                                    <div class="col-sm">
                                    <label for="">Purchase Date</label>
                                        <input type="text" value="<?php echo e($row->purchase_date); ?>" name="purchase_date" class="form-control" required readonly><br>
                                </div>
                                <div class="col-sm">
                                    <label for="">Payment Type</label>
                                    <input type="text" value="<?php echo e($row->payment_name); ?>" name="payment_type" class="form-control" required readonly><br>

                                </div>
                            </tr>
                            <tr>
                                <div class="row">

                                    <div class="col-sm">
                                        <label for="">Supplier</label>
                                        <input type="text" value="<?php echo e($row->supplier_name); ?>" name="supplier" class="form-control" required readonly><br>

                                    </div>
                                    <div class="col-sm">
                                        <label for="">Manufacturer</label>
                                        <input type="text" value="<?php echo e($row->manufacturer); ?>" name="manufacturer" class="form-control" required readonly><br>
                                    </div>
                                    <div class="col-sm">
                                        <label for="">Overhead Charges</label>
                                        <input type="text" name="overhead_charges" class="form-control"><br>
                                    </div>
                                    
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <hr>
                            <h3 style="text-align:center"><b><u>Item Details</u></b></h3>
                            <hr>
                                <table class="table table-hover" style="width:100%">
                                <thead>
                                  <tr>
                                    <th style="width:35%">Items</th>
                                    <th style="width:15%">Batch</th>
                                    <th style="width:10%">Qty</th>
                                    <th style="width:15%">Rate</th>
                                    <th style="width:5%">Profit%</th>
                                    <th style="width:15%">S.Price</th>
                                    <th style="width:20%">Expiry Date</th>

                                </tr>
                                </thead>
                                <tbody>

                                   <?php $__currentLoopData = $purchase_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                    <td><input type="text" value="<?php echo e($purchase->Item_name); ?>"  name="item_name[]" class="form-control" required readonly></td>
                                    <td><input type="text" value="<?php echo e($purchase->batch_no); ?>" name="batch_no[]" class="form-control" required readonly></td>
                                    <td> <input type="text"value="<?php echo e($purchase->quantity); ?>" name="quantity[]" id="Qty" class="form-control" readonly></td>
                                    <td><input type="text" value="<?php echo e($purchase->price); ?>" name="purchase_rate[]" id="purchase-rate" class="form-control" required readonly></td>
                                    <td><input type="text" value="<?php echo e($purchase->profit_percentage); ?>" id="profit-percentage" name="profit_percentage[]" class="form-control" required readonly></td>
                                    <td><input name="sales_price[]" type="text" id="tprice" value="<?php echo ($purchase->price)*($purchase->quantity)*(($purchase->profit_percentage)/100)+($purchase->price)*($purchase->quantity); ?>" class="form-control" required readonly></td>
                                    <td><input style="width:100%" type="date" value="" name="expiry_date[]" class="form-control" required></td>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tr>


                                </tbody>
                              </table>
                              <br>
            </tbody>

        </form>
        </table>


    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/store/view_stock_add_details.blade.php ENDPATH**/ ?>