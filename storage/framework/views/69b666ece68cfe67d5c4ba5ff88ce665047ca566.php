
<?php $__env->startSection('content'); ?>
<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
<body>
    <div class="">
        <h3 style="text-align:center"><b><u>Patient Details</u></b></h3><br>
        <div class="">
            <table id="example1" class="table table-bordered table-striped " style="width 100%" >
                <tr>
                    <th style="text-align:center">patient Id</th>
                    <td style="text-align:center"><?php echo e($patient[0]->id); ?></td>
                </tr>
                <tr>
                    <th style="text-align:center">Patient Name</th>
                    <td style="text-align:center"><?php echo e($patient[0]->firstname); ?></td>
                </tr>
                <tr>
                    <th style="text-align:center">Age/Sex</th>
                    <td style="text-align:center"><?php echo e($patient[0]->age); ?>/<?php echo e($patient[0]->gender); ?></td>
                </tr>
                <tr>
                    <th style="text-align:center">Address</th>
                    <td style="text-align:center"><?php echo e($patient[0]->address); ?></td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <div class="container">
    <div class="py-5 text-center">
        <?php if(Session::has('appointmentbooked')): ?>
            <div class="alert alert-dark" role="alert">
                <?php echo e(Session::get('appointmentbooked')); ?>

            </div>
        <?php endif; ?>
        <h2>Book An appointment</h2>
        <hr class="mb-4">
    </div>
    <div class="row">
        <div class="col-md-12 order-md-1">
            <form method="post" action="<?php echo e(url('bookappointment')); ?>">
	            <?php echo csrf_field(); ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-lg-3">
                            <label for="username">Token No:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="hidden" name="patient_id" id="patient_id" value="<?php echo e($patient[0]->id); ?>">
                                    <input type="text" name="token_number" class="form-control" id="token_number">
                                </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="mb-3">
                                <?php date_default_timezone_set("Asia/Calcutta"); ?>
                                <label for="username">Appointment Date&Time</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                            <input type="datetime-local" class="form-control" name="appointment_date" id="appointment_date" value="<?php echo date('Y-m-d');echo 'T';echo date ('H');echo ':';echo date('i');echo ':';echo date('s')?>">                                            <div class="invalid-feedback" style="width: 100%;"></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <label for="username">Select Department</label>
                            <select class="form-control" id='sel_depart' name='sel_depart'>
                                <option value='0'>Select department</option>
                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option  class="dropdown-item" value="<?php echo e($department->depname); ?>" ><?php echo e($department->depname); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="username">Select Doctor</label>
                            <select class="form-control" id='sel_emp' name='sel_emp' onchange="get_Charges(this.value)">
                                <option value='0'>Select Employee</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="cons_fee">Consultation Fees</label>
                            <input type="text" class="form-control" id='consultation_fee1' name='cons_fee'>
                        </div>
                        <div class="col-md-4">
                            <label for="username">Registration Fees</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="reg_fee" id="reg_fee">
                            </div>
                        </div>
                    </div>

  <?php echo e(Session::forget('appointmentbooked')); ?>

        <hr class="mb-4">
        <button type="submit" class="btn btn-primary btn-lg btn-block" type="submit">Book Appointment</button>

    </div>
  </div>
  </form>
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
                    success: function(response)
                    {
                        // console.log(response);
                        var len = 0;
                        if(response['data'] != null)
                        {
                            len = response['data'].length;
                        }
                        if(len > 0)
                        {
                            // Read data and create <option >
                            for(var i=0; i<len; i++)
                            {
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

    function get_Charges(sel_emp) {
        $("#consultation_fee").html("consultation_fee");

        $.ajax({
            url: 'get_cons_fees',
            type: "POST",
            data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                sel_emp: sel_emp},
            dataType: 'json',
            success: function (res) {
                console.log(res);
                if (res) {
                    $('#consultation_fee1').val(res[0].consultation_fee);
                }
                 else {
                }
            }
        });
    }

</script>

<script type="text/javascript">
   const dateInput = document.querySelector('#date-input')

const localDt =_=>  // return local Date time
  {
  let now = new Date()
  now.setMinutes(now.getMinutes() - now.getTimezoneOffset())
  now.setSeconds(0)       // remove seconds
  now.setMilliseconds(0) // remove milliseconds
  return now
  }

// usage :
dateInput.valueAsDate = localDt()  // init date value
  </script>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/patient/appointment.blade.php ENDPATH**/ ?>