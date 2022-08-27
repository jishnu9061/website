
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
        
        <div class="">
            <table id="example1" class="table table-bordered table-striped " style="width:100%" >
                <tr>
                    <th style="text-align:center">Added Date</th>
                    <th style="text-align:center"><?php echo e(date('d-m-Y H:i:s',strtotime($view_desc[0]->date))); ?></th>
                </tr>
                <tr>
                    <th style="text-align:center">Lab Name</th>
                    <th style="text-align:center"><?php echo e($view_desc[0]->lab_deptname); ?></th>
                </tr>
                
            </table>
        </div>
    </div>
    <br>
    <div class="container">
    <div class="py-5 text-center">
        <h2><b>Prescribed Lab Test</b></h2>
        
    </div>
    
    <section class="section">
        <table class="table table-striped table-bordered" id="mydatatable">
            <thead>
                <tr class="table table-hover">
                    <th scope="col">Sl</th>
                    <th scope="col">Test</th>
                    <th scope="col">Combo Test</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1;?>
                <?php $__currentLoopData = $view_desc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo e($key->name); ?></td>
                        <td><?php echo e($key->profile); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </section>
    </div>
</body>
<?php $__env->stopSection(); ?>


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

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/Doctor/view_clinical_observation.blade.php ENDPATH**/ ?>