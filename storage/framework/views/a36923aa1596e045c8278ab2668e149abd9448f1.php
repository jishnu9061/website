

<?php $__env->startSection('content'); ?>
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <div class="spacer" style="height:40px;margin-top: 30px;">
    
  </div>
<table class="table table-hover" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Patient ID</th>
      <th scope="col">surgery</th>
      <th scope="col">surgerydate</th>
      <th scope="col">nextappointment</th>
     
    </tr>
  </thead>
  <tbody>
 
    <?php $__currentLoopData = $todaysappz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <tr>
      <th scope="row"><?php echo e($appz->id); ?></th>
      <th><?php echo e($appz->patientid); ?></th>
      <td><?php echo e($appz->surgery); ?></td>
      <td><?php echo e($appz->surgerydate); ?></td>
      <td><?php echo e($appz->nextappointment); ?></td>
    
    </tr>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
   
  </tbody>
</table>


                          
                         
                       
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script>
  $(function(){
    $("#allpatients").dataTable();
  })
  </script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/doctor/reappointments.blade.php ENDPATH**/ ?>