
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
    <h3 style="text-align:center"><b><u>Edit History Details</u></b></h3>
     <table class="table table-bordered" style="border: 1px solid">
         <form method="post" action="<?php echo e(url('update_history')); ?>" enctype="multipart/form-data">
             <?php echo csrf_field(); ?>
              <tbody>
                <?php $__currentLoopData = $edit_history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <input type="hidden" name="item_id" value="<?php echo e($data->history_id); ?>" class="form-control">
                <tr>
                    <th style="width:30%" >Date</th>
                    <td> <input type="date" value="<?php echo e($data->history_date); ?>" name='history_date' class="form-control"></td>
                </tr>
                <tr>
                    <th>History Details</th>
                    <td><textarea class="form-control" name="history"><?php echo e($data->history_detailes); ?></textarea></td>
                </tr>
                <tr>
                    <th>Documents</th>
                        <td><img src="<?php echo e(asset('/images/history/'.$data->history_doc)); ?>" style="width:100%;height:50%;"><br><br>
                            <input type="file" name="image" class="form-control">
                        </td>
                </tr>
                <tr>
                    <tr>
                        <th></th>
                        <br>
                        <td><button type="submit" class="btn btn-primary" style="background-color:#435ebe;width:55%;">Update</button></td>
                    </tr>
                </tr><br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </form>
        </table>


    </div>
    <script>
        $(document).ready(function(){
                 $('.searchingBook').select2();
        });
     </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/doctor/edit_history.blade.php ENDPATH**/ ?>