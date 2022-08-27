
<?php $__env->startSection('content'); ?>

<style>.swal-button {

    width:fit-content;





  }
</style>
<div class="container">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <link rel="stylesheet" href="<?php echo e(url('assets/css')); ?>/sweetalert.css">
	<br>
    <h2>Ledger Accounts</h2>

        <button  class="btn btn-primary "  data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default"  class="btn btn-secondary">Add Account</button>

      <div class="table-responsive">
<table class="table table-striped" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Account Name</th>
      <th scope="col">Group</th>
      <th scope="col">Type</th>
      <th scope="col">Description </th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
<?php
$no=1;
?>
 <?php $__currentLoopData = $ledger_account; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr class="product_data" class="data">
          <td id="name"><?php echo e($no++); ?></td>
          <td id="expanse-name"><?php echo e($exp_type->accounts_name); ?></td>
          <td id="expanse_status"><?php echo e($exp_type->category_name); ?></td>
          <td id="expanse_status"><?php echo e($exp_type->subcategory_name); ?></td>
          <td id="expanse_status"><?php echo e($exp_type->accounts_desc); ?></td>

               <input type="hidden" id="expanse_type_id" value="<?php echo e($exp_type->id); ?>" name="">
               <td>



                <a href="#" class="edits"    data-toggle="modal" id="amb_edit" data-bs-toggle="modal"
                   data-bs-target="#edit"><i class="fas fa-edit" onclick="values_edit(`<?php echo e($exp_type->id); ?>`,`<?php echo e($exp_type->category_id); ?>`,`<?php echo e($exp_type->subcategory_id); ?>`,`<?php echo e($exp_type->accounts_name); ?>`,`<?php echo e($exp_type->accounts_desc); ?>`);" >
                       </i></a>
  
                    </td>
                   <td>

                    <?php if($exp_type->accounts_update_privilage==0): ?>
                    <a onclick="delete_function(<?php echo e($exp_type->id); ?>)" ><i class="fas fa-trash-alt"></i></a>
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



                                    <h5 class="modal-title bb" id="myModalLabel1"> Add Ledger Accounts </h5>



     <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
         <i data-feather="x"></i>
          </button>
             </div>
              <form action="<?php echo e(url('save_ledger_acounts')); ?>" method="post" >
                                     <?php echo csrf_field(); ?>
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <label> Account Name </label>
			                <input type="text" class="form-control" name="accounts_name" placeholder="" required>
                        </div>

                        <div class="form-group mb-3">
                            <label> Type </label>

                           <select class="form-control" name="accounts_subcategory"   required>
                            <option value=""> Select</option>
                            <?php $__currentLoopData = $subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
                            <option value="<?php echo e($subcat->id); ?>" > <?php echo e($subcat->ledgeraccount_subcategories); ?> </option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;
                        </select>
                        </div>

                        <div class="form-group mb-3">
                            <label> Group </label>
                           <select class="form-control" name="accounts_category" id="account_cat" required>
                               <option value=""> Select</option>
                               <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
                                <option value="<?php echo e($cat->id); ?>" > <?php echo e($cat->ledgeraccount_categories); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;

                           </select>
                        </div>


                        <div class="form-group mb-3">
                            <label>Description </label>
			                <textarea  class="form-control" name="accounts_desc">

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



                                    <h5 class="modal-title bb" id="myModalLabel1">Edit Ledger Acconts</h5>



                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="<?php echo e(url('update_ledger_acounts')); ?>" method="post" >
                                     <?php echo csrf_field(); ?>
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <input type="hidden" id="id" name="id">
                            <label>Account Name</label>
			                <input type="text" class="form-control"  required name="accounts_name"  id="expanse_type_name" >
                        </div>

                        <div class="form-group mb-3">
                            <label> Type </label>
                           <select class="form-control" name="accounts_subcategory" id="account_subcat_edit"  required>
                               <option value=""> Select</option>
                               <?php $__currentLoopData = $subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
                               <option value="<?php echo e($subcat->id); ?>" > <?php echo e($subcat->ledgeraccount_subcategories); ?> </option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;
                           </select>
                        </div>
                        <div class="form-group mb-3">
                            <label> Group </label>
                           <select class="form-control" name="accounts_category" id="account_cat_edit" required>
                               <option value=""> Select</option>
                               <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
                                <option value="<?php echo e($cat->id); ?>" > <?php echo e($cat->ledgeraccount_categories); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;

                           </select>
                        </div>


                        <div class="form-group mb-3">
                            <label>Desctiption</label>
                            <textarea class="form-control" name="accounts_desc"   id="expanse-type-status">

                            </textarea>
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
                        <script src="<?php echo e(url('assets/js')); ?>/sweetalert.min.js"></script>
<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
  })
  </script>

  <script>
    function values_edit(val1,val2,val3,val4,val5){


        $("#account_cat_edit").val(val2).change();
        $("#account_subcat_edit").val(val3).change();
        $("#expanse_type_name").val(val4);
       $("#expanse-type-status").val(val5);
       $('#id').val(val1);
      };


      function delete_function(val){

        swal({
            title: "Are You Sure ? ",
            text: "The complete transaction related to this account will be deleted",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {

                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });

                    $.ajax({
                    url:"<?php echo e(route('delete_ledger_accounts')); ?>",
                    type:"POST",
                    data: {
                        account_id : val,

                    },
                    success:function (data) {
                        //console.log(data);
                        if(data.response===1){

                            swal({title: "Success!",
                            text: "Account Deleted!",
                            icon: "success",
                            button: "OK"})
                            .then((value) => {
                            window.location.reload();
                            });


                        }else{

                            swal({title: "Error!",
                            text: "Account could not deleted because some transactions related to this account are exist  !",
                            icon: "error",
                            button: "OK"});

                        }
                    }
                    })



            } else {
              //swal("Transaction is not proceeded!");
            }
          });
    }
  </script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/Accounts/index.blade.php ENDPATH**/ ?>