
<?php $__env->startSection('content'); ?>
<!-- RH: this is bootstrap 5 tabbed panel -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#insure" role="tab" aria-controls="profile" aria-selected="false">Insurance</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Appointments</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Lab</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#lab" role="tab" aria-controls="contact" aria-selected="false">Surgeries</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#lab" role="tab" aria-controls="contact" aria-selected="false">Billing Details</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="consult-tab"><br>
        <div class="container" style="background-color: #eaeeff;padding: 50px;">
        <br>
        <div class="row" >
            <div class="col-md-6 col-lg-6">
                <label><b>Name :</b><?php echo e($patname); ?></label><br><br>
                <label><b>Phone :</b><?php echo e($patphn); ?></label><br><br>
                <label><b>Address :</b><?php echo e($pataddrs); ?></label><br><br>
                <label><b>Age :</b><?php echo e($patage); ?></label><br><br>
                <label><b>Email :</b><?php echo e($patemail); ?></label><br><br>
            </div>
            <div class="col-md-6 col-lg-6">
            </div>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <div class="container">
  <table class="table table-hover" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Department</th>
      <th scope="col">Consultant</th>
      <th scope="col">Clinical Observation</th>
      <th scope="col">Prescribed Medicines</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

    <?php $__currentLoopData = $apps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr id="product_data">
      <td><?php echo e($app->appointmentdate); ?></td>
      <td><?php echo e($app->Department); ?></td>
      <td><?php echo e($app->consultant); ?></td>
      <input type="hidden" value="<?php echo e($app->prescription); ?>" name="" id="product_apps">
      <input type="hidden" value="<?php echo e($app->medicine); ?>"     name="" id="product_meds">
      <td><a href="" id="obs" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#default"><i class="fas fa-eye"></i></a></td>
      <td><a href="" id="pres" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#defaulter"><i class="fas fa-eye"></i></a></td>
      <td></td>
    </tr>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
</table>

  <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">



          <h5 class="modal-title bb" id="myModalLabel1">Patient Name : <?php echo e($patname); ?></h5>



                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
   <!--                                   <form action="<?php echo e(url('clinicalnotes')); ?>" method="post" >
                                     <?php echo csrf_field(); ?> -->
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Observations</label>

                            <textarea class="form-control" name="clinicalnotes" id="observs" rows="3" readonly="" style="height: 200px;"></textarea>

                        </div>

                        </div>
                                    </div>
                                    <input type="hidden" id="roomcategory" value="" name="roomcategory">
                                    <input type="hidden" id="roomno" value="" name="roomno">


                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>

<!--                                         <button type="submit" class="btn btn-primary ml-1" >
                                           Approve
                                        </button> -->

                                    </div>
                                    <!--   </form> -->


                                </div>
                            </div>
                        </div>
                          <div class="modal fade text-left" id="defaulter" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">



          <h5 class="modal-title bb" id="myModalLabel1">Patient Name : <?php echo e($patname); ?></h5>



                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
   <!--                                   <form action="<?php echo e(url('clinicalnotes')); ?>" method="post" >
                                     <?php echo csrf_field(); ?> -->
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Medicines</label>

                            <textarea class="form-control" name="clinicalnotes" id="medix" rows="3" readonly="" style="height: 200px;"></textarea>

                        </div>

                        </div>
                                    </div>
                                    <input type="hidden" id="roomcategory" value="" name="roomcategory">
                                    <input type="hidden" id="roomno" value="" name="roomno">


                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>



                                    </div>
                                    <!--   </form> -->


                                </div>
                            </div>
                        </div>
                        <script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>

                        <script>
  $(".modal").on("hidden.bs.modal", function(){
    $(".modal-title").html("");
});
  $(document).on('click','#obs',function(){

  var prescription= $(this).closest('#product_data').find('#product_apps').val();
   var medicinex= $(this).closest('#product_data').find('#applicantname').val();
    var valuew= $(this).closest('.product_data').find('.applicantid').val();

     $("#observs").val(prescription);
     $("#medix").val(medicinex);
     $("#notez").val(value);

     ;
     })
    $(document).on('click','#pres',function(){

  var prescription= $(this).closest('#product_data').find('#product_apps').val();
  var medicinex= $(this).closest('#product_data').find('#product_meds').val();
  var valuew= $(this).closest('.product_data').find('.applicantid').val();

     $("#observs").val(prescription);
     $("#medix").val(medicinex);
     $("#notez").val(value);

     ;
     })
</script>

</div>
  </div>
  <div class="tab-pane fade" id="lab" role="tabpanel" aria-labelledby="profile-tab">
  <table class="table table-hover" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th>Department</th>
      <th>Phone</th>
      <th>Salary</th>
      <th>Yrs of Exp</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      <div>
  <table class="table table-hover" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email ID</th>
      <th scope="col">Phone</th>
      <th scope="col">Salary</th>
      <th scope="col">Yrs of Exp</th>



    </tr>
  </thead>
  <tbody>



  </tbody>
</table>
</div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/patient/detailspatient.blade.php ENDPATH**/ ?>