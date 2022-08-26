
<?php $__env->startSection('content'); ?>
<?php if(Session::has('attendanceuploded')): ?>

   <div class="alert alert-dark" role="alert">
   <?php echo e(Session::get('attendanceuploded')); ?>

   </div>
                          
<?php endif; ?>
<form method="POST" action="<?php echo e(route('importProject')); ?>" enctype="multipart/form-data">
   <?php echo csrf_field(); ?>
<div class="container" style="background-color: #eaeeff;padding: 50px;">	
<div class="row" id="data">
<label>Upload Csv</label>

	<div class="col-md-6 col-lg-6">
	<input type="file" class="form-control" id="months" name="file" placeholder="Upload Csv">	
	
	</div>
	<div class="col-md-6 col-lg-6">
	<button type="submit" id="submitloan" class="btn btn-primary btn-block">Submit</button>

	</div>

</div>
<br>

</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/hr/attendance.blade.php ENDPATH**/ ?>