
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(url('assets/css')); ?>/sweetalert.css">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<style>.swal-button {

    width:fit-content;





  }
</style>
<div class="container">
	<br>
    <h2>Stock Sub Categories</h2>

        <button  class="btn btn-primary"  data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default"  class="btn btn-secondary">Create Sub Category</button>

      <div class="table-responsive">
<table class="table table-striped" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Subcategory Name</th>
      <th scope="col">Category</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
<?php
$no=1;
?>
 <?php $__currentLoopData = $stock_subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ledcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr class="product_data" class="data">
          <td id="name"><?php echo e($no++); ?></td>
          <td id="expanse-name"><?php echo e($ledcat->stock_subcategories_name); ?></td>
          <td id="expanse-name"><?php echo e($ledcat->stock_categories_name); ?></td>
          <input type="hidden" id="id" value="<?php echo e($ledcat->id); ?>" name="">
               <td>
                <a href="#" class="edits"    data-toggle="modal" id="amb_edit" data-bs-toggle="modal"
                   data-bs-target="#edit">
                   <i class="fas fa-edit" onclick="values_edit(`<?php echo e($ledcat->id); ?>`,`<?php echo e($ledcat->stock_subcategories_name); ?>`,`<?php echo e($ledcat->stock_subcategories_category); ?>`);" >
                </i></a>

            </td>
                   <td>

            <a  onclick="delete_stock_category(<?php echo e($ledcat->id); ?>)">
            <i class="fas fa-trash-alt"></i>
            </a>

        

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



                                    <h5 class="modal-title bb" id="myModalLabel1"> Add Stock Sub Category</h5>



     <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
         <i data-feather="x"></i>
          </button>
             </div>
              <form action="<?php echo e(url('save_stock_subcategories')); ?>" method="post" >
                                     <?php echo csrf_field(); ?>
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <label> Sub Category Name </label>
			                <input type="text" class="form-control" name="stock_subcategories_name" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Category </label>
			             <select class="form-control" required name="stock_subcategories_category" required>
                            <option value="">Select</option>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->stock_categories_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </select>
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



                                    <h5 class="modal-title bb" id="myModalLabel1">Edit Sub Category</h5>



                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="<?php echo e(url('update_stock_subcategories')); ?>" method="post" >
                                     <?php echo csrf_field(); ?>
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <input type="hidden" id="cat-id" name="id">
                            <label>Sub Category Name</label>
			                <input type="text" class="form-control" required name="stock_subcategories_name" id="expanse_type_name">
                        </div>
                        <div class="form-group mb-3">

                            <label>Category</label>
			                <select class="form-control" required id="stock_cat_edit" name="stock_subcategories_category" required>
                                <option value="">Select</option>
                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->stock_categories_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             </select>
                        </div>

                        </div>
                        </div>


                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" >Update</button>
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
    function values_edit(val1,val2,val3){

        $("#expanse_type_name").val(val2);
       $('#cat-id').val(val1);
       $('#stock_cat_edit').val(val3).change();

      };

      function delete_stock_category(value){


        swal({
            title: "Are You Sure ? ",
            text: "The Sub category Should be deleted",
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
                    url:"<?php echo e(route('delete_stock_subcategory')); ?>",
                    type:"POST",
                    data: {
                        id: value,

                    },
                    success:function (data) {
                        //console.log(data);
                        if(data.response==1){

                            swal({title: "Success!",
                            text: "Sub Category Deleted!",
                            icon: "success",
                            button: "OK"})
                            .then((value) => {
                            window.location.reload();
                            });


                        }else{


                            swal({title: "Error!",
                            text: "Sub Category cannot Deleted because items are existing with this Sub category!",
                            icon: "error",
                            button: "OK"})


                        }
                    }
                    })



            } else {
             // swal("Transaction is not proceeded!");
            }
          });

      }
  </script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/Accounts/stock_subcategories.blade.php ENDPATH**/ ?>