

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
            <form action="<?php echo e(url('editthepatient')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php $__currentLoopData = $editpatient; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <input type="hidden" id="id" name="patientid" value="<?php echo e($data->id); ?>">
                    <div class="mb-3">
                        <label for="username">Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo e($data->firstname); ?>">
                                <div class="invalid-feedback" style="width: 100%;">
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="mb-3">
                                <label for="email">Email<span class="text-muted"></span></label>
                                <input type="email" class="form-control" name="email" id="email" value="<?php echo e($data->email); ?>">
                                    <div class="invalid-feedback">
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="mb-3">
                                <label for="email">Mobile Phone <span class="text-muted"></span></label>
                                    <input type="number" class="form-control" name="phoneno" id="phoneno" value="<?php echo e($data->phoneno); ?>">
                                        <div class="invalid-feedback">
                                        </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                    <textarea class="form-control" name="address" id="address" rows="3" style="width:80%;" value="<?php echo e($data->address); ?>"></textarea>
                                    <div class="invalid-feedback">
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="mb-3">
                                <label for="address">Place</label>
                                    <input type="text" class="form-control" name="place" id="place" cols="2" value="<?php echo e($data->place); ?>">
                                    <div class="invalid-feedback">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-4">
                            <div class="mb-3">
                                <label for="address">Age</label>
                                    <input type="number" class="form-control" name="age" id="age" value="<?php echo e($data->age); ?>">
                                        <div class="invalid-feedback">
                                        </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-4">
                            <div class="mb-3">
                                <label for="address">Date Of Birth</label>
                                    <input type="date" class="form-control" name="dateofbirth" id="dateofbirth" value="<?php echo e($data->dateofbirth); ?>">
                                        <div class="invalid-feedback">
                                        </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <p class="card-title"><b>Gender</b></p>
                                <div class="card-body">
                                    <div id="payCC" class="floatBlock">
                                        <label for="paymentCC"> <input id="paymentCC" name="gender" type="radio" id="male" value="male" <?php if($data->gender=='male') {
                                            echo "checked";} ?>>
                                            Male </label>
                                    </div>
                                    <div id="payInvoice" class="floatBlock">
                                        <label for="paymentInv"> <input id="paymentInv" name="gender" type="radio"id="female" value="female"  <?php if($data->gender=='female') {
                                            echo "checked";} ?>>
                                            Female </label>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-4 col-md-4">
                            <div class="mb-3">
                                <label for="address">Height</label>
                                    <input type="text" class="form-control" name="height" id="height" value="<?php echo e($data->height); ?>">
                                        <div class="invalid-feedback">
                                        </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-4">
                            <div class="mb-3">
                                <label for="address">Weight</label>
                                    <input type="text" class="form-control" name="weight" id="weight" value="<?php echo e($data->weight); ?>">
                                        <div class="invalid-feedback">
                                        </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-4">
                            <div class="mb-3">
                                <label for="address">Temparature</label>
                                    <input type="text" class="form-control" name="temparature" id="temparature" value="<?php echo e($data->temparature); ?>">
                                        <div class="invalid-feedback">
                                        </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                        <h4 class="mb-3">Medical Schemes</h4>
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="scheme1" class="custom-control-input" id="same-address">
                                <label class="custom-control-label" for="same-address">Scheme 1</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="scheme2" class="custom-control-input" id="save-info">
                                    <label class="custom-control-label" for="save-info">Scheme 2</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="scheme3" class="custom-control-input" id="save-info">
                                    <label class="custom-control-label" for="save-info">Scheme 3</label>
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

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/patient/editpatient.blade.php ENDPATH**/ ?>