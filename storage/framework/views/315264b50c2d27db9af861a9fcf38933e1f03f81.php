
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="py-5 text-center">
 <?php if(Session::has('patinsurance')): ?>

   <div class="alert alert-dark" role="alert">
   <?php echo e(Session::get('patinsurance')); ?>

   </div>
                          
<?php endif; ?>
  

    <h2>Add patient insurance</h2>
   
  </div>

  <div class="row">

    <div class="col-md-12 order-md-1">
    
     <form method="post" action="<?php echo e(url('addpatinsurance')); ?>">
	      <?php echo csrf_field(); ?>
      
         <div class="mb-1">
          <label for="username">Patient responsible for bill</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="text" class="form-control" name="name" id="username" placeholder="Name" required>
            <div class="invalid-feedback" style="width: 100%;">
              Name is required.
            </div>
          </div>
        </div>
        	
        		<div class="mb-1">
          <label for="username">Address(if have change)</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="text" class="form-control" name="address" id="username" placeholder="Address" required>
            <div class="invalid-feedback" style="width: 100%;">
              Address is required.
            </div>
          </div>
        </div>
        	
        	<div class="mb-1">
          <label for="username">Phone Number</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="number" class="form-control" name="phone" id="username" placeholder="Phone" required>
            <div class="invalid-feedback" style="width: 100%;">
              Phone Number is required.
            </div>
          </div>
        </div>
       

      
        
          <div class="row">
        	<div class="col-md-4"> 
           <div class="mb-1">
          <label for="username">Occupation</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="text" class="form-control" name="occupation" id="username" placeholder="Group no" required>
            <div class="invalid-feedback" style="width: 100%;">
              Group no is required.
            </div>
          </div>
        </div>
        	</div>
        
        	<div class="col-md-4"> 
        		<div class="mb-1">
          <label for="username">Employer</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="text" class="form-control" name="employer" id="username" placeholder="Employer" required>
            <div class="invalid-feedback" style="width: 100%;">
              Policy No is required.
            </div>
          </div>
        </div>
        	</div>
        	<div class="col-md-4"> 
        		<div class="mb-1">
          <label for="username">Employer Ph no</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="text" class="form-control" name="empphoneno" id="username" placeholder="Employer Phone no" required>
            <div class="invalid-feedback" style="width: 100%;">
              Co payment is required.
            </div>
          </div>
        </div>
        	</div>

        </div>
          <div class="mb-1">
          <label for="username">Employer Address</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="textarea" class="form-control" name="empaddress" id="username" placeholder="Employer Address" required>
            <div class="invalid-feedback" style="width: 100%;">
              Employer address is required.
            </div>
          </div>
        </div>

      <div class="row">
        	<div class="col-md-4"> 
           <div class="mb-1">
          <label for="username">Group no</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="text" class="form-control" name="groupno" id="username" placeholder="Group no" required>
            <div class="invalid-feedback" style="width: 100%;">
              Group no is required.
            </div>
          </div>
        </div>
        	</div>
        
        	<div class="col-md-4"> 
        		<div class="mb-1">
          <label for="username">Policy No</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="text" class="form-control" name="policyno" id="username" placeholder="Policy No" required>
            <div class="invalid-feedback" style="width: 100%;">
              Policy No is required.
            </div>
          </div>
        </div>
        	</div>
        	<div class="col-md-4"> 
        		<div class="mb-1">
          <label for="username">Co Payment</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="text" class="form-control" name="copayment" id="username" placeholder="Co payment" required>
            <div class="invalid-feedback" style="width: 100%;">
              Co payment is required.
            </div>
          </div>
        </div>
        	</div>

        </div>
       <br>
         <div class="row">
            <div class="col-md-4 col-lg-4">
                <p class="card-title"><b>Is this person a patient here</b></p>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="patienthere" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                               Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="patienthere" id="flexRadioDefault1"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                       
                      
                    </div>
                </div>
            </div>

             <div class="col-md-4 col-lg-4">
               
                     <p class="card-title"><b>Is this patient covered by insurance</b></p>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                               No
                            </label>
                        </div>
                      
                  
                </div>
            </div>

            <div class="col-md-4"> 
        		<div class="mb-1">
          <label for="username">Birthday</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="date" class="form-control" name="bday" id="username" placeholder="birthday" required>
            <div class="invalid-feedback" style="width: 100%;">
              birthday is required.
            </div>
          </div>
        </div>
        	</div>
          
        </div>
      
        <hr class="mb-4">
        <button type="submit" class="btn btn-primary btn-lg btn-block" type="submit">Add patient insurance</button>
     <?php echo e(Session::forget('patinsurance')); ?>

    </div>
  </div>
  </form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/patient/patinsurance.blade.php ENDPATH**/ ?>