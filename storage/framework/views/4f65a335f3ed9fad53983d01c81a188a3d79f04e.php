
<?php $__env->startSection('content'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    </head>
    <style>
        .btn-width {
            width: 10%;
        }
    </style>
    <div>
        <div class="container">
            <h3 style="text-align:center"><u><b>Add Payment</b></u></h3><br>
            
            
            <?php $__currentLoopData = $ledger_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                 <form action="<?php echo e(url('update_installment_details')); ?>" method="post"
                    enctype="multipart/form-data" id="submit-form">

                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($row->purchase_id); ?>">
                    <div style="width:60%; margin:0 auto;">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="col-sm-12">

                                    <input type="hidden" class="form-control" name="amount" id="pending-amount"
                                        value="<?php echo e($row->pending_amount); ?>">
                                </div>
                                <div class="col-sm-12">
                                    <label>Amount</label>
                                    <input type="text" class="form-control" id="installment-amount" name="amount"
                                        value="" required>
                                </div>
                                <div class="col-sm-12">
                                    <label>Balance Amount</label>
                                    <input type="text" class="form-control" name="pending_amount" id="result"
                                        value="<?php echo e($row->pending_amount); ?>">
                                </div>
                                <div class="col-sm-12">
                                    <label>Paid Date</label>
                                    <input type="date" class="form-control" name="date" value="" required>
                                </div>
                                <br>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-primary text-white" onclick="window.history.back()" style="background-color:#607080;width:20%;" >Close</button> -->
                                    <a type="button" class="btn btn-primary" style="background-color:#607080;width:20%;"
                                        href="<?php echo e(url('supplier_ledger_details' . $row->purchase_id)); ?>">Close</a>
                                        <button type="submit" class="btn btn-primary" style="background-color:#607080;width:20%;">Update</button>
                                </div>
                            </div>
                            <br>

                        </div>
                    </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </form>
    </div>
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
    <script>
        $(function() {
            $('#foo').on('submit', function(e) {
                e.preventDefault();
                setTimeout(function() {
                    window.location.reload();
                }, 0);
                this.submit();
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\globalerp\resources\views/store/update_amount.blade.php ENDPATH**/ ?>