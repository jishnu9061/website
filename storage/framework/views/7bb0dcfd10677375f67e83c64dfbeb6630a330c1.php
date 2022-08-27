
<?php $__env->startSection('content'); ?>
<div class="container">
	<br>
    <h2>Account Type</h2>


      <div class="table-responsive">
<table class="table table-striped" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      
      <th scope="col">Account Type</th>
      
      
      

    </tr>
  </thead>
  <tbody>
<?php
$no=1;
?>
 <?php $__currentLoopData = $ledgeraccount_subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ledcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr class="product_data" class="data">
          <td id="name"><?php echo e($no++); ?></td>
          
          <td id="expanse-name"><?php echo e($ledcat->ledgeraccount_subcategories); ?></td>
          
          <input type="hidden" id="id" value="<?php echo e($ledcat->id); ?>" name="">
               
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



                                    <h5 class="modal-title bb" id="myModalLabel1"> Account Types </h5>



     <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
         <i data-feather="x"></i>
          </button>
             </div>
              <form action="<?php echo e(url('save_ledger_acounts_subcategories')); ?>" method="post" >
                                     <?php echo csrf_field(); ?>
                                    <div class="modal-body">

                                         <div class="card-body">

                                            

                        <div class="form-group mb-3">
                            <label>Account Type Name </label>
			                <input type="text" class="form-control" name="ledgeraccount_subcategories" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Description </label>
			                <textarea  class="form-control" name="ledgeraccount_subcategories_desc">

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







                        <div class="modal fade text-left" id="edit" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">



                                    <h5 class="modal-title bb" id="myModalLabel1">Edit Account Type</h5>



                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="<?php echo e(url('update_ledger_acount_subcategories')); ?>" method="post" >
                                     <?php echo csrf_field(); ?>
                                    <div class="modal-body">

                                        <div class="modal-body">

                                            <div class="card-body">

                                               

                           <div class="form-group mb-3">
                               <label>Account Type Name </label>
                               <input type="text" class="form-control" name="ledgeraccount_subcategories" id="subcat-name" placeholder="" required>
                           </div>
                           <div class="form-group mb-3">
                               <label>Description </label>
                               <textarea  class="form-control" name="ledgeraccount_subcategories_desc" id="subcat-desc">

                               </textarea>
                           </div>


                           <input type="hidden" name="sub_cat_id" id="sub-cat-id" >
                           </div>
                        </div>
                        </div>


                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" >Save</button>
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
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
    function values_edit(val1,val2,val3,val4){

               // $('#sub-cat').val(val2).change();
                $("#sub-cat-id").val(val1);
                $("#subcat-name").val(val3);
                $("#subcat-desc").val(val4);

      };
  </script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\globalerp\resources\views/Accounts/ledgeraccount_subcategories.blade.php ENDPATH**/ ?>