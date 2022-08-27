
<?php $__env->startSection('content'); ?>
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <div class="spacer" style="height:40px;margin-top: 30px;">
    
  </div>
<table class="table table-bordered" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Employee Id</th>
      <th scope="col">Name</th>
      
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">PaySlip</th>
    </tr>
  </thead>
  <tbody>
 
    <?php $__currentLoopData = $staffs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alluser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <tr>
      <th scope="row"><?php echo e($alluser->uniqueid); ?></th>
      <th><?php echo e($alluser->name); ?></th>
      
      <th><?php echo e($alluser->email); ?></th>
      <th><?php echo e($alluser->phone); ?></th>
      
      <form method="post" action="<?php echo e(url('allstaffsal')); ?>">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="uniq" value="<?php echo e($alluser->uniqueid); ?>">
        <input type="hidden" name="hiddenmonth" value="<?php echo e($month); ?>">
        <input type="hidden" name="hiddenyear" value="<?php echo e($year); ?>">
      <td><button type="submit"><i class="fab fa-atlassian" style="color: green"></button></i></td>
      </form>

<!--       <td><a href="<?php echo e(url('viewstaff'.$alluser->id)); ?>">View</a></td>
      <td><a href="<?php echo e(url('giveallowance'.$alluser->uniqueid)); ?>">Allowance</a></td>
      <td><a href="<?php echo e(url('givereduction'.$alluser->uniqueid)); ?>">Reduction</a></td> -->
     <!--  <?php if($alluser->status == 'disable'): ?>
      <th ><a href="<?php echo e(url('disableuser'.$alluser->id)); ?>"><?php echo e($alluser->status); ?></a></th>
      <?php else: ?>
      <th ><a href="<?php echo e(url('enableuser'.$alluser->id)); ?>"><?php echo e($alluser->status); ?></a></th>
      <?php endif; ?> -->
<!--       <td><a href="<?php echo e(url('staffsalary'.$alluser->uniqueid)); ?>" style="color: green">Salary</a></td>
      <form action="<?php echo e(url('dutyschedule')); ?>" method="post"> 
      <?php echo csrf_field(); ?>
      <input type="hidden" name="staffname" value="<?php echo e($alluser->name); ?>">
      <input type="hidden" name="staffid" value="<?php echo e($alluser->uniqueid); ?>">
      <td><button type="submit" style="color: black">Schedule</button></td> -->
      </form>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"> </script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"> </script>
  <script>
  $(function(){
    $("#allpatients").dataTable();
  })
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/hr/generatepayslip.blade.php ENDPATH**/ ?>