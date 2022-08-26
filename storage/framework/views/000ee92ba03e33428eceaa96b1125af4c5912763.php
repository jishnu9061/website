

<?php $__env->startSection('content'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<div class="container">
    <div class="py-5 text-center">
        
        <h2>Edit patient</h2>
        <p class="lead">just analize that human</p>
        <hr class="mb-4">
    </div>
    <div class="row">
        <div class="col-md-12 order-md-1">
            <form action="<?php echo e(url('update_appointment')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php $__currentLoopData = $edit_appointment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <input type="hidden" id="id" name="appointmentid" value="<?php echo e($data->id); ?>">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <label for="username">Patient Id</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                    <input type="text" class="form-control" name="pat_id" id="pat_id" value="<?php echo e($data->patientid); ?>" disabled>
                                    <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="mb-3">
                                <label for="username">Patient Name<span class="text-muted"></span></label>
                                <input type="username" class="form-control" name="pat_name" id="pat_name" value="<?php echo e($data->firstname); ?>" disabled>
                                    <div class="invalid-feedback">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="mb-3">
                                <label for="email">Appointment Date&Time<span class="text-muted"></span></label>
                                    <input type="datetime-local" class="form-control" name="app_date" id="app_date" value="<?php echo e(date(('Y-m-d\TH:i'),strtotime($data->appointmentdate))); ?>">
                                        <div class="invalid-feedback">
                                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Department</label>
                                    <select class="form-control" id='sel_depart' name='sel_depart'>
                                        <option value='0'>Select department</option>
                                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option  class="dropdown-item" value="<?php echo e($department->depname); ?>" <?php echo e(($department->depname == $data->Department) ? "selected" : ""); ?>><?php echo e($department->depname); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <div class="invalid-feedback">
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="mb-3">
                                <label for="address">Doctor</label>
                                <select class="form-control" id='sel_emp' name='sel_emp'>
                                    <option value='0'>Select Doctor</option>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option  class="dropdown-item" value="<?php echo e($user->id); ?>" <?php echo e(($user->id == $data->doctor) ? "selected" : ""); ?>><?php echo e($user->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <div class="invalid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" type="submit">Update patient</button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type='text/javascript'>

        $(document).ready(function(){

          // Department Change
          $('#sel_depart').change(function(){

             // Department id
             var id = $(this).val();

             // Empty the dropdown
             $('#sel_emp').find('option').not(':first').remove();

             // AJAX request
             $.ajax({
               url: 'getdoctordetails'+id,
               type: 'get',
               dataType: 'json',
               success: function(response){

                 var len = 0;
                 if(response['data'] != null){
                   len = response['data'].length;
                 }

                 if(len > 0){
                   // Read data and create <option >
                   for(var i=0; i<len; i++){

                     var id = response['data'][i].id;
                     var name = response['data'][i].name;

                     var option = "<option value='"+id+"'>"+name+"</option>";

                     $("#sel_emp").append(option);
                   }
                 }

               }
            });
          });

        });

        </script>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/patient/edit_appointment.blade.php ENDPATH**/ ?>