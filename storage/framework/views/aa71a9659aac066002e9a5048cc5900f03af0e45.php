
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
<div class="container">
    <h3 style="text-align:center"><u><b>Add Payment</b></u></h3><br>
    
            <?php $__currentLoopData = $ledger_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <form action="<?php echo e(url('add_installment'.$row->purchase_id)); ?>" method="post" enctype="multipart/form-data">

                <?php echo csrf_field(); ?>
                <input type="hidden"  name="id" value="<?php echo e($row->id); ?>">
                    </div>
                        <div style="width:60%; margin:0 auto;">
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="col-sm-12">

                                            <input type="hidden" class="form-control" name="amount" id="pending-amount" value="<?php echo e($row->pending_amount); ?>">
                                     </div>
                                    <div class="col-sm-12">
                                        <label>Amount</label>
                                            <input type="text" class="form-control" id="installment-amount" name="amount" value="" required>
                                     </div>
                                     <div class="col-sm-12">
                                        <label>Balance Amount</label>
                                            <input type="text" class="form-control" name="pending_amount" id="result" value="<?php echo e($row->pending_amount); ?>">
                                            </div>
                                <div class="col-sm-12">
                                    <label>Paid Date</label>
                                         <input type="date" class="form-control" name="date" value="" required>
                                </div>
                                <br>
                            <div class="modal-footer">
                                
                                <a type="button" class="btn btn-primary" style="background-color:#607080;width:20%;" href="<?php echo e(url('manufacturer_ledger_details'.$row->id)); ?>">Close</a>
                                    <button type="submit" class="btn btn-primary" style="background-color:#607080;width:20%;">Save</button>
                                </div>
                            </div>
                            <br>

                        </div>
                      </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {

                $('#pending-amount').keyup(function() {
                  recalc();
                });

                $('#installment-amount').keyup(function() {
                  recalc();
                });

                function recalc() {
                  var pendingAmount = $("#pending-amount").val();
                  var installmentAmount = $("#installment-amount").val();
                  var result = pendingAmount - installmentAmount;

                  $("#result").val(result);
                }
              });
            </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/store/update_ledger_amount.blade.php ENDPATH**/ ?>