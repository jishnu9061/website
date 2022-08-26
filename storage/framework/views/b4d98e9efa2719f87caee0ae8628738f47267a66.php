
<?php $__env->startSection('content'); ?>
	<div style="height: 20px;">
		
	</div>

<table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        From Date
                    </th>
                    <th>
                        To Date
                    </th>
                    <th>
                        Time from
                    </th>
                    <th>
                        To
                    </th>
                     <th>
                        Where
                    </th>
                </tr>
                
            </thead>
            <tbody>
            <?php $__currentLoopData = $schedule; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($duty->fromdate); ?></td>
                    <td><?php echo e($duty->todate); ?></td>
                    <td><?php echo e($duty->fromtime); ?></td>
                    <td><?php echo e($duty->totime); ?></td>
       
                    <td></td>
                 
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/doctor/dutyschedulefetch.blade.php ENDPATH**/ ?>