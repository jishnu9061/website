

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<div class="spacer" style="height:40px;margin-top: 30px;"></div>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>View All Appointments</h3>
                <p class="text-subtitle text-muted"></p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
            </div>
        </div>
    </div>
    <section class="section">
        <table class="table table-striped table-bordered" id="mydatatable">
            <thead>
                <tr>
                    <th>Appointment Date</th>
                    <th>Patient ID</th>
                    <th>Patient Name</th>
                    <th>Department</th>
                    <th>Doctor</th>
                    <th>Token No</th>
                    <th>Details</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $todaysappz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="table table-hover">
                        <td><?php echo e(date('d-m-Y H:i:s',strtotime($appz->appointmentdate))); ?></td>
                        <td><?php echo e($appz->patientid); ?></td>
                        <td><?php echo e($appz->firstname); ?></td>
                        <td><?php echo e($appz->Department); ?></td>
                        <td><?php echo e($appz->name); ?></td>
                        <td><?php echo e($appz->token); ?></td>
                        <td><a href="<?php echo e(url('Consultation'.$appz->id.'/'.$appz->patientid)); ?>" style="color:green;"><i class="fab fa-atlassian"></i></a></td>
                        <td><?php echo e($appz->status); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script>
    $('#mydatatable').dataTable({
        colReorder: true,
        order: [],
        pageLength: 0,
        lengthMenu: [10,20, 40, 60, 80, 90, 100],
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/doctor/todaysappointments.blade.php ENDPATH**/ ?>