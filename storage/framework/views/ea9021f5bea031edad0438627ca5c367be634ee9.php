
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
    <h3 style="text-align:center"><b><u>Item Details</u></b></h3><br>
    <table class="table table-bordered" style="border: 1px solid">
        <?php $__currentLoopData = $item_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo csrf_field(); ?>
        <tbody >
            <tr>
                 <th>Item Image</th>
                     <td><img src="<?php echo e(asset('/image/medicine/'.$data->upload_image)); ?>" style="width:100%;height:50%;"></td>
            </tr>
            <tr>
                <th style="width:30%" >Item Name</th>
                <td> <input value="<?php echo e($data->Item_name); ?>"class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Brand Name</th>
                <td><input value="<?php echo e($data->brand_name); ?>"class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Item Group</th>
                <td><input value="<?php echo e($data->item_group); ?>" class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Item Category</th>
                <td><input value="<?php echo e($data->category_name); ?>" class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Generic Name</th>
                <td><input value="<?php echo e($data->generic_name); ?>" class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Minimum Level</th>
                <td><input value="<?php echo e($data->minimum_level); ?>" class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Reorder Level</th>
                <td><input value="<?php echo e($data->reorder_level); ?>" class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Item(Medicine)Composition</th>
                <td><textarea class="form-control" readonly><?php echo e($data->medicine_composition); ?></textarea></td>
            </tr>
            <tr>
                <th>Item Details</th>
                    <td><textarea class="form-control" readonly><?php echo e($data->notes); ?></textarea></td>
            </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\erp-globaleyet\resources\views/store/view_item_details.blade.php ENDPATH**/ ?>