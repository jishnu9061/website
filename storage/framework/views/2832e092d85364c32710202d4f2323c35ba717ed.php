

<?php $__env->startSection('content'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<form method="post" action="monthwise">
        <?php echo csrf_field(); ?>
<div class="row" style="padding-bottom:24px;padding:15px;">

<div class="col-md-3">
<select class="form-control" name="departmentx">
<option value="allstaffs">All Staffs</option>
<?php $__currentLoopData = $deps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option  value="<?php echo e($dep->depname); ?>"><?php echo e($dep->depname); ?></option>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
<div class="col-md-3">

<select id="b" class="form-control" name="year">

<?php for($i=2022;$i<=2080;$i++): ?>
<option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
<?php endfor; ?>
</select>
</div>
<div class="col-md-4" id="selll">
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
<div class="col-md-2">
    <button type="submit" class="btn btn-primary form-control">Submit</button>
</div>

</div>
</form>
<table class="table table-bordered">
	<th id="dayget">
        <td><b>Employee Name</b></td>
        <td><b>Employee Id</b></td>
	<?php for($i=1;$i<=$daysinmonth;$i++): ?>
<td id="daygeton"><?php echo e($i); ?></td>
<?php endfor; ?>
	

	</th>
    <?php $__currentLoopData = $attendancedata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr class="data" id="datax">
    <td></td>

    <td><?php echo e($staff->staffname); ?></td>
    <td id="texst"><?php echo e($staff->staffid); ?></td>
        
<?php
$attendancedatax=DB::table('dailyattendances')->where('month',$month)->where('year',$year)->where('staffname',$staff->staffname)->limit($daysinmonth)->get();
?>

<?php $__currentLoopData = $attendancedatax; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php for($i=1;$i<=$daysinmonth;$i++): ?>
<input type="hidden" id="loop" value="<?php echo e($i); ?>">
<?php endfor; ?>

<td><select id="mark" onchange="myFunction()"
style="padding: 0.25px;
    margin:0;
    color: #000;
    font-size: 12px;
    background: transparent;
    -webkit-appearance: none;
    border-radius:3px;"
>

<option selected value="<?php echo e($t->attendance); ?>"><?php echo e($t->attendance); ?></option>
<?php if($t->attendance != 'P'): ?>
{
<option value="<?php echo e($t->id); ?>P">P</option>
}
<?php endif; ?>
  <option value="<?php echo e($t->id); ?>CL">CL</option>
  <option value="<?php echo e($t->id); ?>ML">ML</option>
  <option id="<?php echo e($t->id); ?>AB" value="<?php echo e($t->id); ?>AB">A</option>
</select> <input type="hidden" class="hiddenalways" value="<?php echo e($t->id); ?>"></td>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>
    <script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>

 

    <script type="text/javascript">

$(function () {
 $('[data-toggle="popover"]').popover()
})
    $(document).on('change','#mark',function(){
        var a=this.value;
      
        var onename = $(this).closest('#datax').find('#hiddenalways').val();
        var qw = $(this).closest('#datax').find('#qw').val();
        
       


        $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
   });
       
        
         $.ajax({
           method:"POST",
           url:"/attendancetostaff",
           data:{
               'a':a,
               'onename':onename,
               
           },
         
           //success: function (response){
             //  alert(response.status);
           //},


         });
   
    })
</script>

<script>
$( document ).ready(function() {
    var sel = $(this).closest('#sele').find('#ds').val();
    
});
</script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/hr/attendanceview.blade.php ENDPATH**/ ?>