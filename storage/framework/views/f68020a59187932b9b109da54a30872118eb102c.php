
<?php $__env->startSection('content'); ?>
<form action="<?php echo e(url('generatebbulkpayslip')); ?>">
    <?php echo csrf_field(); ?>
<div class="row" style="background-color: #e0eaf4; padding:20px;">
<div class="col-md-3">
<select id="b" class="form-control" name="year">

<?php for($i=2022;$i<=2080;$i++): ?>
<option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
<?php endfor; ?>
</select>
</div>

<div class="col-md-3">
<select id="b" class="form-control" name="month" id="sele">

<option id="01" value="01">January</option>
<option  value="02">February</option>
<option  value="03">March</option>
<option  value="04">April</option>
<option  value="05">May</option>
<option  value="06">June</option>
<option  value="07">July</option>
<option  value="08">August</option>
<option  value="09">September</option>
<option  value="10">October</option>
<option  value="11">November</option>
<option  value="12">December</option>

</select>	
</div>
<div class="col-md-6">
<button type="submit" class="btn btn-secondary btn-block">Generate Payslip
           </button>

</div>
</div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/hr/payslipbulk.blade.php ENDPATH**/ ?>