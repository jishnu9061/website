
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="py-5 text-center">
        <?php if(Session::has('detailupdate')): ?>
            <div class="alert alert-dark" role="alert">
                <?php echo e(Session::get('detailupdate')); ?>

            </div>
        <?php endif; ?>
        <h2>Manage <?php echo e($users->name); ?> [<?php echo e($users->uniqueid); ?>]</h2>
    </div>
    <h6>Basic Details</h6>
    <hr class="mb-4">
        <div class="row">
            <div class="col-md-12 order-md-1">
                <form method="post" action="<?php echo e(url('editstafff')); ?>" id="form">
	                <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Staff Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="text" class="form-control" name="name" id="username" value="<?php echo e($users->name); ?>" placeholder="Name" required>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Name is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Staff Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="hidden" value="<?php echo e($users->id); ?>" name="id">
                                    <input type="email" class="form-control" name="email" id="email" value="<?php echo e($users->email); ?>" placeholder="Email" required>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Policy No is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Staff Phone number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="number" class="form-control" name="phoneno" id="username" value="<?php echo e($users->phone); ?>" placeholder="Phone no" required min="0" max="9999999999">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Phone No: is required.
                                            </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Age</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="number" class="form-control" name="age" id="age" value="<?php echo e($users->age); ?>" placeholder="Age" min="0" max="99">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Age is required.
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Change Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="password" class="form-control" name="password" value="" id="password" placeholder="staff Password">
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Password is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Confirm Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="password" class="form-control" name="conpassword" value="" id="confirm_password" placeholder="Confirm Password">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Password is required.
                                            </div>
                                    </div>
                            </div>
                            <div id="test" style="height:20px;"></div>
                        </div>
                    </div>
                    <label for="username">Address</label>
                        <textarea class="form-control" name="address">
                            <?php echo e($users->address); ?>

                        </textarea>
                        <div id="test" style="height:20px;"></div>
                        <div class="row">
                            
                            
                            <div class="form-group col-md-7">
                            <label for="username">Joining Date</label>
                            <div class="form-group col-md-7">
                                <input class="form-control" type="text" name="date_of_joining" id="date_of_joining" value="<?php echo e(date('d-m-Y',strtotime($users->date_of_joining))); ?>">
                            </div>
                            </div>
                            
                            <div class="col-md-4 col-lg-2">
                                <p class="card-title"><b>Sex</b></p>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="patienthere" id="flexRadioDefault1" <?php echo e(($users->sex == 'male') ? "checked" : ""); ?>>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="patienthere" id="flexRadioDefault1"
                                            <?php echo e(($users->sex == 'female') ? "checked" : ""); ?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Female
                                                </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="patienthere" id="flexRadioDefault1" <?php echo e(($users->sex == 'others') ? "checked" : ""); ?>>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Others
                                            </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="height:50px;"></div>
                        <h6>Salary And Allowances</h6>
                        <hr class="mb-4">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="username">Salary</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="number" class="form-control" name="salary" value="<?php echo e($users->salary); ?>" id="username" placeholder="Salary" min="0">
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    Salary is required.
                                                </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="username">Years of experience</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="number" class="form-control" name="yearsexp" value="<?php echo e($users->yearsexp); ?>" id="username" placeholder="Experience" min="0" max="70">
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    Years of experience is required.
                                                </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="username">D.O.B</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="date" class="form-control" name="dob" id="username" value="<?php echo e($users->dob); ?>" placeholder="DOB">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                dob is required.
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo e(Session::forget('staffregistered')); ?>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="username">Bank Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control" name="bankname" value="<?php echo e($users->bank); ?>" id="username" placeholder="Bank Name">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Bank Name is required.
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="username">Account Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                            <input type="number" class="form-control" name="accountnumber" value="<?php echo e($users->account_no); ?>" id="username" placeholder="Account Number" min="0">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Account number is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">IFSC code</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                                <input type="text" class="form-control" name="isfc" id="username" value="<?php echo e($users->ifsc); ?>" placeholder="Ifsc Code">
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        IFSC Code is required.
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-1">
                                            <br>
                                            <h6>No: of Leaves(Annual)</h6>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                    <table class="table">
                                                        <tr>
                                                            <?php $__currentLoopData = $leavetype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <td><?php echo e($data->leave_type); ?>

                                                                <input type="hidden" name="leave_type[]" value="<?php echo e($data->id); ?>"></td>
                                                                <td><input type="number" class="form-control" name="leaves[]" value="<?php echo e($data->allotted_leaves); ?>" min="0" max="365" width="auto"></td>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<div style="height: 50px;">

</div>
<div class="row">

   <div class="col-md-4 col-lg-4">
    <p><b>Fixed Allowances</b></p>
      <table class="table table-bordered">
   <tbody>


      <?php $__currentLoopData = $allowancedata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>

         <td><?php echo e($data->allowancename); ?></td>
         <input type="hidden" name="<?php echo e($data->allowancename); ?>" value="<?php echo e($data->allowancename); ?>">
         <td><input type="checkbox" class="checkz" name="allowz[]" value="<?php echo e($data->id); ?>"></td>

      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


   </tbody>
</table>
   </div>

       <div class="col-md-4 col-lg-4">
        <p><b>Non-Fixed Allowances</b></p>
      <table class="table table-bordered">
   <tbody>

    <?php $__currentLoopData = $allowancedata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>

       <td><?php echo e($data->allowancename); ?></td>
       <input type="hidden" name="<?php echo e($data->allowancename); ?>" value="<?php echo e($data->allowancename); ?>">
       <td><input type="checkbox" class="checkz" name="allowz[]" value="<?php echo e($data->id); ?>"></td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



   </tbody>
</table>
   </div>

    <div class="col-md-4 col-lg-4">
      <p><b>Deductions</b></p>
      <table class="table table-bordered">
   <tbody>


      <?php $__currentLoopData = $deductiondata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>

         <td><?php echo e($data->allowancename); ?></td>
         <input type="hidden" name="<?php echo e($data->allowancename); ?>" value="<?php echo e($data->allowancename); ?>">
         <td><input type="checkbox" class="checkz" name="category[]" value="<?php echo e($data->id); ?>"></td>

      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


   </tbody>
</table>
   </div>

</div>
<div class="row">
    <div class="col-md-4">
        <div class="mb-1">
            <label for="username">Staff Status</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <select class="form-control" name="status" id="status">

                        <?php $__currentLoopData = $staffstatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($key->status); ?>" <?php echo e(($key->status == $users->status) ? "selected" : ""); ?>><?php echo e($key->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="invalid-feedback" style="width: 100%;">
                        </div>
                    </select>
                </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-1">
            <label for="username">Status Date</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input type="text" name="status_date" id="status_date" class="form-control" value="<?php echo e(date('d-m-Y',strtotime($users->releving_date))); ?>">
                    
                </div>
        </div>
    </div>
</div>
        <hr class="mb-4">

        <button type="submit" class="btn btn-primary btn-lg btn-block" type="submit">Update Details</button>

    </div>
  </div>
  </form>
  <?php echo e(Session::forget('detailupdate')); ?>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $('#password, #confirm_password').on('keyup', function () {
  var v=$('#password').val();
  var b=$('#confirm_password').val()
  if(v!=b)
  {
    $('#test').html('Not Matching').css('color', 'red');
  }
  else
  {
     $('#test').html('Matching').css('color', 'green');
  }
  if ($('#password').val() == $('#confirm_password').val()) {

    $('#message').html('Matching').css('color', 'green');
  } else
    $('#message').html('Not Matching').css('color', 'red');
});
</script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
   <script>
    $(document).ready(function () {
    $('#form').validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phoneno:{
              required:true
            }
            number: {
                required: true,
                digits: true

            },
        },
          errorElement: 'span',
          errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
          },
          highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
          },
          unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
          }
    });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/hr/editstaf.blade.php ENDPATH**/ ?>