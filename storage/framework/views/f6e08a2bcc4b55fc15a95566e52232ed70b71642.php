
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
<style>
    .under_line
    {
        text-decoration: none;
    }
    .sample{
        width: 20px;
    height: 20px;
    border-radius: 0.5rem;
    background-color: red;
    float: right;
    display: flex;
    align-items: center;
    justify-content: center;
    }
    .sample_1{
        width: 20px;
    height: 20px;
    border-radius: 0.5rem;
    background-color: green;
    float: right;
    display: flex;
    align-items: center;
    justify-content: center;
    }
    .sample_2{
        width: 20px;
    height: 20px;
    border-radius: 0.5rem;
    background-color: blue;
    float: right;
    display: flex;
    align-items: center;
    justify-content: center;
    }
</style>
<?php if(Session::has('nopatient')): ?>

   <div class="alert alert-dark" role="alert">
   <?php echo e(Session::get('nopatient')); ?>

   </div>
                          
<?php endif; ?>
<br>
<div class="row">
    <div class="col-md-6 col-lg-6">
    <h3 style="color:#435ebe;">Operation Theatre</h3>
    </div>
    <div class="col-md-2 col-lg-2">
        <i class="badge bg-info">Available</i>
    </div>
    <div class="col-md-2 col-lg-2">
        <i class="badge bg-danger">Not Available</i>
    </div>
</div>
     <?php echo e(Session::forget('nopatient')); ?>

 <hr class="mb-4">
           
                        <div class="row datas">
                            
                           <?php $__currentLoopData = $procedure; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                              <?php if($data->status==1): ?> 
                          
                               <div class="col-3 col-lg-3 col-md-3 edits">

                               
                                  <div class="card" style="background-color:rgba(238, 213, 233, 0.911);">
                                   
                                    <a class="under_line" href="<?php echo e(url('calendar_event')); ?>" target="_blank"> <div class="card-body px-1 py-1-2" data-toggle="modal" id="patient" data-bs-toggle="modal"

                            <?php if($data->status==1): ?>:
                            data-bs-target="#default1" 
                            <?php else: ?>
                            data-bs-target="#default2" 
                            <?php endif; ?>
                           
                            
                            >
                                        <div class="row">
                                            <div class="col-md-3">
                                            <?php
                                                    if($data->status==1){
                                                        $color_name="#0dcaf0";
                                                        $ot_status="Available";
                                                    }
                                                    
                                                    // elseif($data->status==2){
                                                    //     $color_name="green";
                                                    //     $ot_status="Active";

                                                    // }
                                            
                                                    else{
                                                        $color_name="red"  ;
                                                        $ot_status="Unavailable";

                                                    }
                                                   

                                                ?>
                                                
                                                <div class="stats-icon purple" >
                                                    <i class="fas fa-bed" style="color:<?php echo e($color_name); ?>;"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                
                                                <h5 style="color:rgba(22, 175, 48, 0.87);"><?php echo e($data->theatre_name); ?></h5>
                                                <h6 style="color:rgba(36, 211, 20, 0.781);"><?php echo e($ot_status); ?></h6>
                                                <input type="hidden" id="ot_id" value="<?php echo e($data->id); ?>">
                                                <input type="hidden" id="ot_name" value="<?php echo e($data->theatre_name); ?>">
                                                <input type="hidden" id="" value="<?php echo e($data->department); ?>">
                                                <input type="hidden" id="" value="<?php echo e($data->depname); ?>">
                                                <input type="hidden" id="" value="<?php echo e($data->status); ?>">
                                            </div>
                                            
  
                                        </div>
                                    </div></a>
                                    
                                  </div>
                                  
                                  </div>
                                  <?php endif; ?>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                                  </div>
                                  
 <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/procedure/procedure_view.blade.php ENDPATH**/ ?>