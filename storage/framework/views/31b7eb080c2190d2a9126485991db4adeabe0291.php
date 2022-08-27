
<?php $__env->startSection('content'); ?>
<div class="container">
	<br>
    <h2>Add Budget Categories</h2>

        <button  class="btn btn-primary "  data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default" style="width: 25%">Add</button>

      <div class="table-responsive">
<table class="table table-striped" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Groups</th>
      <th scope="col">Description</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $no=1;
    ?>
     <?php $__currentLoopData = $budget_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
            <td><?php echo e($no++); ?></td>
            <td><?php echo e($key->budget_name); ?></td>
            <td><?php echo e($key->budget_desc); ?></td>
            <td>
                <?php if($key->budget_update_privilage == 0): ?>
                <a href="#" class="edits" data-toggle="modal" data-bs-toggle="modal"
                data-bs-target="#edit_budget" onclick="edit_values('<?php echo e($key->id); ?>','<?php echo e($key->budget_name); ?>','<?php echo e($key->budget_desc); ?>')"><i class="fa fa-edit"></i></a>
                <?php endif; ?>
            </td>
            <td>
                <?php if($key->budget_update_privilage == 0): ?>
                <a onclick="return confirm('Are you sure ?');" href="<?php echo e(url('delete_ledger_budget_category/'.$key->id)); ?>"><i class="fa fa-trash-alt"></i></a>
                <?php endif; ?>
            </td>
         </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
      </div>
</div>
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">



            <h5 class="modal-title bb" id="myModalLabel1"> Add Budget Categories </h5>



           <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
             <i data-feather="x"></i>
           </button>
            </div>
             <form action="<?php echo e(url('save_ledger_budget_category')); ?>" method="post" >
                <?php echo csrf_field(); ?>
                <div class="modal-body">

                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Budget Name </label>
                               <input type="text" class="form-control" name="budget_cat_name" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Description </label>
                                <textarea  class="form-control" name="budget_cat_desc">

                                </textarea>
                        </div>

            
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" >Save</button>
                    <button type="button" class="btn btn-alert" data-bs-dismiss="modal">Cancel</button>
                </div>
             </form>
        </div>
    </div>
</div>

<div class="modal fade text-left" id="edit_budget" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">



            <h5 class="modal-title bb" id="myModalLabel1"> Edit Budget Categories </h5>



           <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
             <i data-feather="x"></i>
           </button>
            </div>
             <form action="<?php echo e(url('update_ledger_budget_category')); ?>" method="post" >
                <?php echo csrf_field(); ?>
                <div class="modal-body">

                    <div class="card-body">
                         <input type="hidden" name="budget_id" id="budget_id">
                        <div class="form-group mb-3">
                            <label>Budget Name </label>
                               <input type="text" class="form-control" name="edit_budget_name" id="edit_budget_name">
                        </div>
                        <div class="form-group mb-3">
                            <label>Description </label>
                                <textarea  class="form-control" name="edit_budget_desc" id="edit_budget_desc">

                                </textarea>
                        </div>

            
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" >Update</button>
                    <button type="button" class="btn btn-alert" data-bs-dismiss="modal">Cancel</button>
                </div>
             </form>
        </div>
    </div>
</div>

<script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
  })
  </script>
<script>
 function edit_values(val1,val2,val3) 
 {
   $('#budget_id').val(val1);
   $('#edit_budget_name').val(val2);
   $('#edit_budget_desc').val(val3);
 }
</script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\cra_project\CRA\resources\views/Accounts/budget_categories.blade.php ENDPATH**/ ?>