
<?php $__env->startSection('content'); ?>
<div class="container">
    <div style="height:20px;">
</div>
<?php if(Session::has('nouser')): ?>
   <div class="alert alert-dark" role="alert">
   <?php echo e(Session::get('nouser')); ?>

   </div>
<?php endif; ?>
<?php if(Session::has('loanadded')): ?>
   <div class="alert alert-dark" role="alert">
   <?php echo e(Session::get('loanadded')); ?>

   </div>
<?php endif; ?>

<form method="post" action="<?php echo e(url('addloan')); ?>">
    <?php echo csrf_field(); ?>
<div class="row">
                                            <div class="col-md-3">
                          <div class="form-group mb-3">
                            <label>Employees Id</label>
                      <input type="text" class="form-control" name="id" placeholder="" required>
                        </div>
                                            </div>
                                            <div class="col-md-3">
                         <div class="form-group mb-3">
                            <label>Loan Amount</label>
                      <input type="text" class="form-control" name="amount" placeholder="" required>
                        </div>
                                            </div>
                                             <div class="col-md-3">
                           <div class="form-group mb-3">
                            <label>Loan Term</label>
                      <input type="text" class="form-control" name="term" placeholder="" required>
                        </div>
                                            </div>
                                             <div class="col-md-3">
                            <div class="form-group mb-3">
                            <button type="submit"  class="btn btn-block btn-secondary" style="margin-top:24px;">Add</button>
                        </div>
                                            </div>
                                        </div>
</form>
<table class="table table-bordered" style="margin-top: 40px;">
            <thead>
                <tr>
                    <th>
                        Employee Id
                    </th>
                    <th>
                        Loan Amount
                    </th>
                    <th>
                        Amount Paid
                    </th>
                    <th>
                        Balance Left
                    </th>
                     <th>
                        Loan Term
                    </th>
                                         <th>
                        Deduction
                    </th>

                                         <th>
                        Status
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
                
            </thead>
            <tbody>
            <?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loan->uniqueid); ?></td>
                    <td><?php echo e($loan->totalamount); ?></td>
                    <td><?php echo e($loan->amountpaid); ?></td>
                    <td><?php echo e($loan->balanceleft); ?></td>
                    <td><?php echo e($loan->duration); ?></td>
                    <td><?php echo e($loan->deduct); ?></td>
            
                    <td><?php echo e($loan->status); ?></td>
                    <form method="post" action="<?php echo e(url('loandelete'.$loan->id)); ?>">
					<?php echo csrf_field(); ?>
					<input type="hidden" name="delete">
					<td><button type="submit" onclick="return confirm('Are you sure?')" class="fa fa-trash"></button></td>
					</form>
                    
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </table>
        <?php echo e(Session::forget('nouser')); ?>

        <?php echo e(Session::forget('loanadded')); ?>

    </div>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/hr/loans.blade.php ENDPATH**/ ?>