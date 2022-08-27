

<?php $__env->startSection('content'); ?>
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <div class="spacer" style="height:40px;margin-top: 30px;">

  </div>
<table class="table table-bordered" id="allpatients" style="margin-top: 40px;width:auto;" >
  <thead>
    <tr>
      <th scope="col">Employee Id</th>
      <th scope="col">Name</th>
      
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Sex</th>
      <!-- <th scope="col">Edit</th> -->
      <th scope="col">Manage</th>
    </tr>
  </thead>
  <tbody>

    <?php $__currentLoopData = $allusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alluser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr id="data">
      <input id="t_id" type="hidden" value="<?php echo e($alluser->id); ?>">
      <th scope="row"><?php echo e($alluser->uniqueid); ?></th>
      <th id="t_name" ><?php echo e($alluser->name); ?></th>
      
      <th id="t_email"><?php echo e($alluser->email); ?></th>
      <th id="t_phone"><?php echo e($alluser->phone); ?></th>
      <td id="t_sex"><?php echo e($alluser->sex); ?></td>
      <!-- <td><a href="#" class="edits" data-toggle="modal" id="stafedit" data-bs-toggle="modal"
                   data-bs-target="#default"><i class="fas fa-edit"></i></a></td> -->

      <?php if( Auth::user()->role == 'Department Admin' ): ?>
      <td><a href="<?php echo e(url('managedepstaff'.$alluser->uniqueid)); ?>" style="color: green"><i class="fab fa-atlassian"></i></a></td>
      <?php else: ?>
      <td><a href="<?php echo e(url('managestaff'.$alluser->uniqueid)); ?>" style="color: green"><i class="fab fa-atlassian"></i></a></td>
      <?php endif; ?>
      <!--
     <td><a href="<?php echo e(url('viewstaff'.$alluser->id)); ?>">View</a></td>
      <td><a href="<?php echo e(url('giveallowance'.$alluser->uniqueid)); ?>">Allowance</a></td>
      <td><a href="<?php echo e(url('givereduction'.$alluser->uniqueid)); ?>">Reduction</a></td> -->
     <!--  <?php if($alluser->status == 'disable'): ?>
      <th ><a href="<?php echo e(url('disableuser'.$alluser->id)); ?>"><?php echo e($alluser->status); ?></a></th>
      <?php else: ?>
      <th ><a href="<?php echo e(url('enableuser'.$alluser->id)); ?>"><?php echo e($alluser->status); ?></a></th>
      <?php endif; ?> -->
<!--       <td><a href="<?php echo e(url('staffsalary'.$alluser->uniqueid)); ?>" style="color: green">Salary</a></td>
      <form action="<?php echo e(url('dutyschedule')); ?>" method="post">
      <?php echo csrf_field(); ?>
      <input type="hidden" name="staffname" value="<?php echo e($alluser->name); ?>">
      <input type="hidden" name="staffid" value="<?php echo e($alluser->uniqueid); ?>">
      <td><button type="submit" style="color: black">Schedule</button></td> -->
      </form>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">



                                    <h5 class="modal-title bb" id="myModalLabel1">Edit Staff</h5>



                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="<?php echo e(url('editstafff')); ?>" method="post" >
                                     <?php echo csrf_field(); ?>
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <label>Name</label>
                         <input type="hidden" class="form-control" id="Id" name="Id" placeholder="" >
			                <input type="text" class="form-control" id="Name" name="Name" placeholder="" >
                        </div>
                        <div class="form-group mb-3">
                            <label>Role</label>
			                <input type="text" class="form-control" id="Role" name="Role" placeholder="" >
                        </div>
                        <div class="form-group mb-3">
                            <label>Phone</label>
			                <input type="text" class="form-control" id="Phone" name="Phone" placeholder="" >
                        </div>
                        <div class="form-group mb-3">
                            <label>Email</label>
			                <input type="text" class="form-control"  id="Email" name="Email" placeholder="" >
                        </div>
                        <div class="form-group mb-3">
                            <label>Salary</label>
			                <input type="text" class="form-control" id="Salary" name="Salary" placeholder="">
                        </div>
                        <div class="form-group mb-3">
                            <label>Experience</label>
			                <input type="text" class="form-control" id="Experience" name="Experience" placeholder="" >
                        </div>
                        <div class="form-group mb-3">
                            <label>Department</label>
			                <input type="text" class="form-control" id="Department" name="Department" placeholder="" >
                        </div>
                        <div class="form-group mb-3">
                            <label>Dob</label>
			                <input type="text" class="form-control" id="Dob" name="Dob" placeholder="" >
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
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script>
  $(function(){
    $("#allpatients").dataTable();
  })
  </script>
  <script>
        $(document).on('click','#stafedit',function(){
    //var itemvalue = $(this).val();
    var t_id = $(this).closest('#data').find('#t_id').val();
   var t_name = $(this).closest('#data').find('#t_name').text();
   var t_role= $(this).closest('#data').find('#t_role').text();
   var t_department = $(this).closest('#data').find('#t_department').text();
   var t_email = $(this).closest('#data').find('#t_email').text();
   var t_phone = $(this).closest('#data').find('#t_phone').text();
   var t_sex = $(this).closest('#data').find('#t_sex').text();
   var t_dob = $(this).closest('#data').find('#t_dob').text();


   $("#Id").val(t_id);
    $("#Name").val(t_name);
    $("#Role").val(t_role);
    $('#Phone').val(t_phone);
    $("#Email").val(t_email);
    $("#Salary").val(driver_n);
    $("#Experience").val(driver_n);
    $("#Department").val(t_department);
    $("#Sex").val(t_sex);
    $("#Dob").val(t_dob);


  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/add/allstaffs.blade.php ENDPATH**/ ?>