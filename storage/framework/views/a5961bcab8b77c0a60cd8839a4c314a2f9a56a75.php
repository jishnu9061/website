

<?php $__env->startSection('content'); ?>
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <div class="spacer" style="height:40px;margin-top: 30px;">
    <h3 style="text-align:center"><b><u>Reorder Level</u></b></h3><hr>
  </div>

<table id="example1" class="table table-bordered table-striped" style="width 100%">
    <thead>
      <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Expirydate</th>

      </tr>
    </thead>
      <tbody  id="show_data">
        <?php $__currentLoopData = $reorder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicines): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($medicines->Item_name); ?></td>
            <td><?php echo e($medicines->quantity); ?></td>
            <td><?php echo e($medicines->expiry_date); ?></td>
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

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/Pharmacy/reorder.blade.php ENDPATH**/ ?>