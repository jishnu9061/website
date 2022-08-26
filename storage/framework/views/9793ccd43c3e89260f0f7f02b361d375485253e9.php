
<?php $__env->startSection('content'); ?>
<style>
    .btn-width{
        width:10%;
    }
</style>
<div>
    
</div>
<br>
<div class="container">
    <h3 style="text-align:center">Manufacturer Details</h3><br><br>
    <table class="table table-bordered" style="border: 1px solid">
        <?php $__currentLoopData = $manufacturer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo csrf_field(); ?>
        <tbody >
            <tr>
                <th style="width:30%" >Manufacturer Name</th>
                <td><?php echo e($data->manufactuers_name); ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo e($data->email); ?></td>
            </tr>
                <th>Phone</th>
                <td><?php echo e($data->contact_no); ?></td>
            </tr>
            <tr>
                <th>Mobile</th>
                    <td><?php echo e($data->mobile); ?></td>
            </tr>
            <tr>
                <th>Fax</th>
                    <td><?php echo e($data->fax); ?></td>
            </tr>
            <tr>
                <th>Phone</th>
                    <td><?php echo e($data->contact_no); ?></td>
            </tr>
            <tr>
                <th>Address</th>
                    <td><?php echo e($data->address); ?></td>
            </tr>
            <tr>
                 <th>City</th>
                     <td><?php echo e($data->city); ?></td>
            </tr>
            <tr>
                <th>State</th>
                    <td><?php echo e($data->state); ?></td>
            </tr>
            <tr>
                <th>Country</th>
                    <td><?php echo e($data->country); ?></td>
            </tr>
            <tr>
                <th>Postal Code</th>
                    <td><?php echo e($data->zipcode); ?></td>
            </tr>
            <tr>
                <th>Details</th>
                    <td><?php echo e($data->details); ?></td>
            </tr>


        </tbody>
    </table>
</div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\globalerp\resources\views/store/manufactuers_details.blade.php ENDPATH**/ ?>