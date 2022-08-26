
<?php $__env->startSection('content'); ?>
<Style>
    .table-head
    {
        color:white;
    }
</Style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<div class="spacer" style="height:40px;margin-top: 30px;"></div>
<div class="page-heading">
        <h3 style="text-align:center"><b><u>Prescribed Test Detalis</u></b></h3>
        <br>
        
        <div class="row">
            <div class="col-md-4 col-lg-4"  style="padding-top: 6px;">
                <h6>Patient Id:<?php echo e($test_details[0]->patient_id); ?></h6>
                <h6>Patient Name:<?php echo e($patient[0]->firstname); ?></h6>
                <h6>Age/Sex:<?php echo e($patient[0]->age); ?>Y/<?php echo e($patient[0]->gender); ?></h6>
                
            </div>
            <div class="col-md-4 col-lg-4"  style="padding-top: 6px;">
                
            </div>
            <div class="col-md-4 col-lg-4"  style="padding-top: 6px;">
                <h6>Date:<?php echo e(date('d-m-Y H:i:s',strtotime($test_details[0]->date))); ?></h6>
                <h6>Docter:<?php echo e($test_details[0]->added_by); ?></h6>
                <h6>Department:<?php echo e($test_details[0]->department); ?></h6>
                <h6>Lab Name:<?php echo e($test_details[0]->lab_deptname); ?></h6>
                
            </div>
        </div>
        <br>
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
                <?php $__currentLoopData = $patient_test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tests): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo e($tests->test_name); ?></td>
                    <td><?php echo e($tests->combo_name); ?></td>
                  </tr>  
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            </tbody>
        </table>
    </section>
</div>
    <script>
        $('#mydatatable').dataTable({
            colReorder: true,
            order: [],
            pageLength: 0,
            lengthMenu: [10,20, 40, 60, 80, 90, 100],
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/lab/display_details.blade.php ENDPATH**/ ?>