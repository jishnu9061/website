

<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="py-5 text-center">
 <?php if(Session::has('patientregistered')): ?>

   <div class="alert alert-dark" role="alert">
   <?php echo e(Session::get('patientregistered')); ?>

   </div>

<?php endif; ?>


    <h2>Patient Register</h2>
         <hr class="mb-4">
  </div>
<?php

if($_POST){
  echo "<script>
                             if ( window.history.replaceState ) {
                                 window.history.replaceState( null, null, window.location.href );
                             }
                         </script>";}
?>
  <div class="row">

     <div class="col-md-12 order-md-1">
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
     <form method="post" action="<?php echo e(url('addcatualities')); ?>">
	     <?php echo csrf_field(); ?>
       <div class="row">
        <div class="col-md-7 col-lg-7">
          
            <a href="#" class="edits" data-toggle="modal" id="patient_edit" data-bs-toggle="modal"
            data-bs-target="#exampleModalLong"><i class="fas fa-book"></i></a>
        </div>
          <div class="col-md-5 col-lg-5 text-end">
            <a href="<?php echo e(url('catuality_register')); ?>"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="">
                Add Patient
              </button></a>
          </div>

      </div>
        <div class="mb-3">
          <label for="username">Patient Name</label>
          <div class="input-group">
            <div class="input-group-prepend">

            </div>
            <?php echo csrf_field(); ?>
            <select class="form-control searchingBook" onchange="patient_data(this.value)" name="patient_name">
              <option value="">Select</option>
                  <?php $__currentLoopData = $patient; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($data->id); ?>" <?php
                       if(!empty($patient_id)) { if($data->id==$patient_id){ echo "selected" ;}  }
                      ?> ><?php echo e($data->firstname); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            <div class="invalid-feedback" style="width: 100%;">
              Name is required.
            </div>
          </div>
      </div>
        <div class="row">
          <div class="col-md-6 col-lg-6">
              <div class="mb-3">
              <label>Visiting Type</label>
              <select class="form-control" name="visiting">
                <option value="emergency" selected>Emergency</option>
                <option value="normal">Normal</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
              </select>
              <div class="invalid-feedback">
                Please enter type.
              </div>
          </div>
          </div>
          <div class="col-md-3 col-lg-3">
              <div class="mb-3">
              <label>Date</label>
              <div><input class="form-control" type="text" name="date" value="<?php echo date('d-m-Y'); ?>" /></div>
              <div class="invalid-feedback">
                Please enter date.
              </div>
          </div>
          </div>
          <div class="col-md-3 col-lg-3">
            <div class="mb-3">
              <?php
                date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
              ?>
            <label>Time</label>
            <div><input class="form-control" type="time" value="<?php echo date('H:i:s'); ?>" /></div>
            <div class="invalid-feedback">
              Please enter date.
            </div>
        </div>
        </div>
      </div>
        <div class="py-5 text-center">
        <h4>Bystander Details</h4>
        <hr class="mb-4">
        </div>

        <div class="row">
          <div class="col-md-4 col-md-4">
             <div class="mb-3">
            <label for="address">Bystander Name</label>
            <input type="text" class="form-control" name="b_name" id="username" placeholder="bystander name" required>
            <div class="invalid-feedback">
              Please enter name.
            </div>
          </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="mb-3">
                 <label for="email">Address <span class="text-muted"></span></label>
                 <input type="textarea" class="form-control" name="address" id="address" placeholder="address">
                 <div class="invalid-feedback">
                   Please enter address.
                 </div>
               </div>
         </div>
         <div class="col-md-4 col-lg-4">
          <div class="mb-3">
               <label for="email">Mobile No <span class="text-muted"></span></label>
               <input type="number" class="form-control" name="phoneno" id="email" placeholder="mobile no">
               <div class="invalid-feedback">
                 Please enter a valid phone no.
               </div>
             </div>
       </div>
          </div>

        <hr class="mb-4">

        <button type="submit" class="btn btn-primary btn-lg btn-block" type="submit">Register</button>

    </div>
  </div>
  </form>
</div>
<div class="col-md-4 col-sm-12 mb-30">


  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">

              <div class="modal-body">
                  <form id="add-event">
                      <div class="modal-body">
                          <h4 style="text-align:center;" class="text-blue h4 mb-10">Patient Details</h4>
                          <hr class="mb-4">
                          <div class="row">
                            <div class="col-md-9 col-lg-9">
                            </div>
                            <div class="col-md-3 col-lg-3">
                              <label>Patient Id</label>
                              <input type="text" id="display_pt_id" class="form-control" >
                              </div>
                        </div>
                          <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="mb-3">
                                <label>Patient Name</label>
                                <input type="text" id="display_pt_name" class="form-control" >
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="mb-3">
                                <label>Address</label>
                                <input type="text" id="display_pt_address" class="form-control" >
                                </div>
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-6 col-lg-6">
                              <div class="mb-3">
                              <label>Age</label>
                              <input type="text" id="display_pt_age" class="form-control" >
                          </div>
                          </div>
                          <div class="col-md-6 col-lg-6">
                            <div class="mb-3">
                            <label>Mobile No</label>
                            <input type="text" id="display_pt_mobile" class="form-control" >
                        </div>
                        </div>
                      </div>
                    </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                  </div>
              </form>
          </div>

      </div>
  </div>
</div>

</div>

<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script>
  $(document).ready(function(){
           $('.searchingBook').select2();
  });

  function patient_data(val){
 var pt_id=val;
        $.ajax({
            url: '<?php echo e(url("patient_details")); ?>',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "POST",
            data: {patient_id: pt_id},
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $("#display_pt_id").val(data.id );
                $("#display_pt_name").val(data.firstname);
                $("#display_pt_address").val(data.address);
                $("#display_pt_age").val(data.age);
                $("#display_pt_mobile").val(data.phoneno);
            }
        })











  }
</script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/casuality/patientregister.blade.php ENDPATH**/ ?>