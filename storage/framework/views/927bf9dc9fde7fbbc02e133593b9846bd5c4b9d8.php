
<?php $__env->startSection('content'); ?>
<div class="container">
	<br>
    <div class="col-md-2">
        <button href="#" class="edits" data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default" class="btn btn-block btn-secondary">Add</button>
      </div>
      <div class="table-responsive">
<table class="table table-hover" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Reference Range</th>
      <th scope="col">Unit</th>
      <th scope="col">Method</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>

 <?php $__currentLoopData = $labtest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr class="product_data" id="data">
          <td id="oneid"><?php echo e($lab->id); ?></td>
          <td id="onename"><?php echo e($lab->name); ?></td>
          <td id="onecat"><?php echo e($lab->category); ?></td>
          <td id="oneprice"><?php echo e($lab->price); ?></td>
          <td id="oneref"><?php echo e($lab->reference_range); ?></td>
          <td id="oneunit"><?php echo e($lab->unit); ?></td>
          <td id="onemethod"><?php echo e($lab->method); ?></td>
          <input type="hidden" id="amb_id" value="<?php echo e($lab->id); ?>" name="">
          <td><a href="#" class="edits" data-toggle="modal" id="amb_edit" data-bs-toggle="modal" data-bs-target="#edit"><i class="fas fa-edit"></i></a></td>
          <td><a href="<?php echo e(url('dellabtest'.$lab->id)); ?>"><i class="fas fa-trash-alt"></i></a></td>
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
                                    <h5 class="modal-title bb" id="myModalLabel1">Add Lab Tests</h5>
                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                   <form action="<?php echo e(url('labtests')); ?>" method="post">
                                     <?php echo csrf_field(); ?>
                                    <div class="modal-body">
                                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Test Name</label>
			                <input type="text" class="form-control" id="labtestname" name="labtestname" placeholder="" required >
                        </div>
                         <div class="form-group mb-3">
                            <label>Category Name</label>
                       <select class="form-control searchingBook" id="departments" name="labcatname" required>
                <option value="">Select Category</option>
                <?php $__currentLoopData = $labcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option><?php echo e($data->name); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                        </div>
                      <div class="form-group mb-3">
                            <label>Price</label>
                      <input type="number" class="form-control" id="labprice" name="labprice" placeholder="" required>
                        </div>
                      <div class="form-group mb-3">
                            <label>Reference Range</label>
                      <input type="text" class="form-control" name="labref" id="labref" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Unit</label>
                      <input type="text" class="form-control" name="labunit" id="labunit" placeholder="" required>
                        </div>
                    <div class="form-group mb-3">
                            <label>Method</label>
                      <input type="text" class="form-control" id="labmethod" name="labmethod" placeholder="" required>
                        </div>
                        </div>
                        </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" style="width:25% ">Save</button>
                                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
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



                                    <h5 class="modal-title bb" id="myModalLabel1">edit  </h5>



                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="<?php echo e(url('update_lab_tests')); ?>" method="post" >
                                     <?php echo csrf_field(); ?>
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <input type="hidden"  name="editid" id="editid">
                            <label> Name</label>
			                <input type="text" class="form-control" name="editname" id="editname">
                        </div>
                               <div class="form-group mb-3">

                            <label> Category</label>
                      <input type="text" class="form-control" name="editcategory" id="editcategory">
                        </div>
                                                <div class="form-group mb-3">

                            <label> Price</label>
                      <input type="text" class="form-control" name="editprice" id="editprice">
                        </div>
                                                <div class="form-group mb-3">

                            <label> Reference Range</label>
                      <input type="text" class="form-control" name="editreference" id="editreference">
                        </div>
                                                <div class="form-group mb-3">

                            <label> Unit</label>
                      <input type="text" class="form-control" name="editunit" id="editunit">
                        </div>
                                                <div class="form-group mb-3">

                            <label> Method</label>
                      <input type="text" class="form-control" name="editmethod" id="editmethod">
                        </div>

                        </div>
                        </div>


                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary"style="width:25% " >Save</button>
                                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
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

    $(document).on('click','#amb_edit',function(){
    //var itemvalue = $(this).val();
   var oneid = $(this).closest('#data').find('#oneid').text();

   var onename = $(this).closest('#data').find('#onename').text();
   var onecat= $(this).closest('#data').find('#onecat').text();
   var oneprice = $(this).closest('#data').find('#oneprice').text();
   var oneunit = $(this).closest('#data').find('#oneunit').text();
   var oneref = $(this).closest('#data').find('#oneref').text();
   var onemethod = $(this).closest('#data').find('#onemethod').text();



    $("#editid").val(oneid);
    $("#editname").val(onename);
    $('#editcategory').val(onecat);
    $("#editprice").val(oneprice);
    $("#editunit").val(oneunit);
    $('#editreference').val(oneref);
    $("#editmethod").val(onemethod);


  });
  </script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/lab/labtests.blade.php ENDPATH**/ ?>