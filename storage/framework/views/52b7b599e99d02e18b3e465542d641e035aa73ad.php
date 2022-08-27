
<?php $__env->startSection('content'); ?>
<?php if(Session::has('nopatient')): ?>

   <div class="alert alert-dark" role="alert">
   <?php echo e(Session::get('nopatient')); ?>

   </div>

<?php endif; ?>

     <?php echo e(Session::forget('nopatient')); ?>

 <hr class="mb-4">
                                      <div class="container">
<div class="row">



<div class="col-md-7">
<?php if( Auth::user()->role == 'Department Admin' ): ?>
<form method="post" action="depbeds">
<?php else: ?>
<form method="post" action="beds">
<?php endif; ?>

    <?php echo csrf_field(); ?>
    <select class="custom-select btn btn-secondary dropdown-toggle col-md-12" name="roomcat" id="inlineFormCustomSelectPref">
        <option selected>Departments</option>
         <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option  class="dropdown-item" value="<?php echo e($dept->depname); ?>"><?php echo e($dept->depname); ?></option>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select>
                             <select class="custom-select btn btn-secondary dropdown-toggle col-md-12" name="roomcat" id=                  "inlineFormCustomSelectPref">
                      <option selected>Room Category</option>
                       <?php $__currentLoopData = $roomcats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roomm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option  class="dropdown-item" value="<?php echo e($roomm->category); ?>"><?php echo e($roomm->category); ?></option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </select>
</div>
<div class="col-md-5">
  <button
 type="submit" class="form-control btn btn-primary btn-block">
    Search
  </button>
  </form>
</div>
</div>


                           </div>
                           <br><br>

                        <div class="row datas">

                           <?php $__currentLoopData = $room; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <div class="col-1 col-lg-1 col-md-1 editsx" style="padding-bottom: 20px;" data-toggle="modal" id="patient" data-bs-toggle="modal"
                        <?php if($data->allocateduser): ?>

                      data-bs-target="#default"
                      <?php else: ?>
                      data-bs-target="#default2"
                      <?php endif; ?>
                      >

                               <form action="<?php echo e(url('allocateroom')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                              <div class="stats-icon purple" >
                                                <i class="fas fa-bed" style="color:<?php echo e($data->css); ?>;"></i>
                                                </div>
                                                     <input type="hidden" class="bedid"  value="<?php echo e($data->id); ?>" name="somthing" id="beduniqid">
                                                     <input type="hidden" class="allocuser"  value="<?php echo e($data->allocateduser); ?>" name="allocuser">

                               </form>
                                  </div>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                  </div>




                                 <hr class="mb-4">
                           <div class="row">

                           </div>
                           <br>



             <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">

              <h5 class="modal-title bb" id="myModalLabel1">Patient Id : </h5>
          <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>

                                    <div class="modal-body">

                                         <div class="card-body">
                                           <label for="exampleFormControlTextarea1" class="form-label">Room No</label>
                                           <form action="<?php echo e(url('removepatientfrombed')); ?>" method="post" >
                                       <?php echo csrf_field(); ?>

                                           <input type="text" id="aa" name="roomnom" class="form-control"><br>

                                        <label for="exampleFormControlTextarea1" class="form-label">Patient</label>

                                        <input type="hidden" id="roomcategory1" value="" name="roomcategory">
                                       <input type="text" id="cc" name="patientid" class="form-control">
                                       <button type="submit" class="form-control btn btn-danger">Remove Patient</button>
                                      </form>
                        <div class="form-group mb-3">
                        <form action="<?php echo e(url('allocateroom')); ?>" method="post" >
                                     <?php echo csrf_field(); ?>
                            <label for="exampleFormControlTextarea1" class="form-label">Add Clinical notes</label>

                            <textarea class="form-control" name="clinicalnotes" id="notez" rows="3"></textarea>

                        </div>

                        </div>
                                    </div>
                                    <input type="hidden" id="roomcategory" value="" name="roomcategory">
                                    <input type="hidden" id="roomno" value="" name="roomno">

                                    <input type="hidden" value="<?php echo e($cat); ?>" name="roomcat">
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>

                                        <button type="submit" class="btn btn-primary ml-1">
                                           Add
                                        </button>

                                    </div>
                                      </form>


                                </div>
                            </div>
                        </div>

                        <div class="modal fade text-left" id="default2" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">

              <h5 class="modal-title bb" id="myModalLabel1">Patient Id : </h5>
          <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="<?php echo e(url('allocateroom')); ?>" method="post" >
                                     <?php echo csrf_field(); ?>
                                    <div class="modal-body">

                                         <div class="card-body">
                                           <label for="exampleFormControlTextarea1" class="form-label">Room No</label>
                                       <input type="text" id="aaa" name="roomnom" class="form-control"><br>

                                        <label for="exampleFormControlTextarea1" class="form-label">Add Patient</label>
                                       <input type="text" id="cc" name="patientid" class="form-control" placeholder="Enter Patient Id">


                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Add Clinical notes</label>

                            <textarea class="form-control" name="clinicalnotes" id="notez" rows="3"></textarea>

                        </div>

                        </div>
                                    </div>
                                    <input type="hidden" id="roomcategory" value="" name="roomcategory">
                                    <input type="hidden" id="roomno" value="" name="roomno">

                                    <input type="hidden" value="<?php echo e($cat); ?>" name="roomcat">
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>

                                        <button type="submit" class="btn btn-primary ml-1">
                                           Add
                                        </button>

                                    </div>
                                      </form>


                                </div>
                            </div>
                        </div>

<script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
<script>
  $(".modal").on("hidden.bs.modal", function(){
    $(".modal-title").html("");
});
$(document).on('click','.editsx',function(){
     //var itemvalue = $(this).val();

    var valuez = $(this).find('.bedid').val();
    var value = $(this).find('.user').val();
    var roomvalue = $(this).find('.userroom').val();
    var categoryvalue = $(this).find('.categoryname').val();
    var notez = $(this).find('.notes').val();
    var allocuser = $(this).find('.allocuser').val();

    //var namevalue = $(this).find('.username').val();

     $("#userinmodal").text(value);
     $("#roominmodal").text(roomvalue);
     $("#myModalLabel1").text(value);
     $("#aa").val(valuez);
     $("#aaa").val(valuez);
     $("#bb").val(value);
     $("#cc").val(allocuser);
     $("#notez").val(notez);


  //var itemvalue = $(this).closest('.datas').find('.prodname').val();
     ;
     })


$(document).ready(function(){
    $("#pat").hide();
    $("#pat1").hide();
    $('#patient').click(function() {
    $(this).closest('.patt').find('#pat').show();
    $("#pat1").show();
    });
});
</script>

 <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/patient/beds.blade.php ENDPATH**/ ?>