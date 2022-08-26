
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
    <h3 style="text-align:center"><b><u>Edit Item Details</u></b></h3>
     <table class="table table-bordered" style="border: 1px solid">
         <form method="post" action="<?php echo e(url('item_update')); ?>" enctype="multipart/form-data">
             <?php echo csrf_field(); ?>
              <tbody>
                <?php $__currentLoopData = $item_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <input type="hidden" name="item_id" value="<?php echo e($data->id); ?>" class="form-control">

                <tr>
                    <th>Item Image</th>
                        <td><img src="<?php echo e(asset('/image/medicine/'.$data->upload_image)); ?>" style="width:100%;height:50%;"><br><br>
                            <input type="file" name="editimage" class="form-control">
                        </td>
                </tr>
                <tr>
                    <th style="width:30%" >Item Name</th>
                    <td> <input value="<?php echo e($data->Item_name); ?>" name='item_name' class="form-control"></td>
                </tr>
                <tr>
                    <th>Brand Name</th>
                    <td><select class="form-select contrl searchingBook"   name="brand_name" aria-label="Default select example" required>
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($brand->brand_name); ?>"  <?php echo e((strcmp($data->brand_name,$brand->brand_name)==0) ? "selected":""); ?> >  <?php echo e($brand->brand_name); ?>   </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                </tr>
                <tr>
                    <th>Item Group</th>
                    <td><select class="form-select contrl searchingBook"  name="item_group" aria-label="Default select example" required>
                        
                        <?php $__currentLoopData = $medicine_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groups): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($groups->group_name); ?>"  <?php echo e((strcmp($data->item_group,$groups->group_name)==0) ? "selected":""); ?> >  <?php echo e($groups->group_name); ?>   </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select></td>
                </tr>
                <tr>
                    <th>Category Name</th>
                    <td><select class="form-select contrl searchingBook"   name="category_name" aria-label="Default select example" required>
                        <option>Select</option>

                        <?php $__currentLoopData = $medicine_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->category_name); ?>"  <?php echo e((strcmp($data->category_name,$category->category_name)==0) ? "selected":""); ?> >  <?php echo e($category->category_name); ?>   </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select></td>
                </tr>
                <tr>
                    <th>Generic Name</th>
                    <td><select class="form-select contrl searchingBook" name="genric_name" aria-label="Default select example" required>
                        <option>Select</option>
                        <?php $__currentLoopData = $generic1_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $generic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($generic->generic_name); ?>"  <?php echo e((strcmp($data->generic_name,$generic->generic_name)==0) ? "selected":""); ?> >  <?php echo e($generic->generic_name); ?>   </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select></td>
                </tr>
                <tr>
                    <th>Minimum Level</th>
                    <td><input value="<?php echo e($data->minimum_level); ?>" name="minimum_level" class="form-control" required></td>
                </tr>
                <tr>
                    <th>Reorder Level</th>
                    <td><input value="<?php echo e($data->reorder_level); ?>" name="reorder" class="form-control" required ></td>
                </tr>
                <tr>
                    <th>Medicine Composition</th>
                    <td><textarea class="form-control" name="medicine_composition"><?php echo e($data->medicine_composition); ?></textarea></td>
                </tr>
                <tr>
                    <th>Medicine Details</th>
                        <td><textarea class="form-control" name="item_details"><?php echo e($data->notes); ?></textarea></td>
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


<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\erp-globaleyet\resources\views/store/edit_medicine_details.blade.php ENDPATH**/ ?>