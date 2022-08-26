
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="py-5 text-center">
 <?php if(Session::has('patientregistered')): ?>

   <div class="alert alert-dark" role="alert">
   <?php echo e(Session::get('patientregistered')); ?>

   </div>
                          
<?php endif; ?>
  

    <h2>Add patient</h2>
    <p class="lead">just analize that human</p>
         <hr class="mb-4">
  </div>

  <div class="row">

     <div class="col-md-12 order-md-1"> 
    
     <form method="post" action="<?php echo e(url('catualitypatient')); ?>">
	     <?php echo csrf_field(); ?>
        <div class="mb-3">
          <label for="username">Name</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="text" class="form-control" name="firstname" id="username" placeholder="Name">
            <div class="invalid-feedback" style="width: 100%;">
              Name is required.
            </div>
          </div>
        </div>
<div class="row">
    
  <div class="col-md-12 col-lg-12">
     <div class="mb-3">
          <label for="email">Address<span class="text-muted"></span></label>
          <input type="textarea" class="form-control" name="address" id="address" placeholder="Address">
          <div class="invalid-feedback">
            Please enter  address.
          </div>
        </div>
  </div>
</div>

        <div class="row">
        <div class="col-md- col-md-4">
           <div class="mb-3">
          <label for="address">Age</label>
          <input type="number" class="form-control" name="age" id="age" placeholder="Age">
          <div class="invalid-feedback">
            Please enter age.
          </div>
        </div>
        </div> 
        <div class="col-md-4 col-lg-4">
          <div class="mb-3">
               <label for="email">Mobile No <span class="text-muted"></span></label>
               <input type="number" class="form-control" name="phoneno" id="email" placeholder="mobile no">
               <div class="invalid-feedback">
                 Please enter a valid phone no.
               </div>
             </div>
       </div>
          <div class="col-md-4 col-lg-4">
                <p class="card-title"><b>Sex</b></p>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                               Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                               Female
                            </label>
                       
                      
                    </div>
                </div>
            </div>
        </div>
        

         <div class="mb-3">
          <label for="address">Disease</label>
          <input type="textarea" class="form-control" name="disease" id="address" placeholder="What's the problem" required>
          <div class="invalid-feedback">
            Patients disease.
          </div>
        </div>
        <hr class="mb-4"> 
        <div class="row">
        <div class="col-md-6 col-lg-6">
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
         </div>
         <div class="col-md-6 col-lg-6">
            <h4 class="mb-3">Reviews</h4>
           <div>
           <input type="text" name="reviews" class="form-control" placeholder="write something">
          </div>
            </div>
        </div>
        
        <hr class="mb-4">

        <button type="submit" class="btn btn-primary btn-lg btn-block" type="submit">Add patient</button>
     
    </div>
  </div>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/casuality/patientdetails.blade.php ENDPATH**/ ?>