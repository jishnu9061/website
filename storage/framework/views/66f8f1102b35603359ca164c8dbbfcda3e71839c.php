
<?php $__env->startSection('content'); ?>
<style>
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
    <h5 style="color:#435ebe;">Ambulance Service</h5>
    </div>
    <div class="col-md-2 col-lg-2">
        <i class="badge bg-success">Available</i>
    </div>
    <div class="col-md-2 col-lg-2">
        <i class="badge bg-info">Running</i>
    </div>
    <div class="col-md-2 col-lg-2">
        <i class="badge bg-danger">Inactive</i>
    </div>
</div>
     <?php echo e(Session::forget('nopatient')); ?>

 <hr class="mb-4">
           
                        <div class="row datas">
                            
                           <?php $__currentLoopData = $ambulance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <div class="col-3 col-lg-3 col-md-3 edits">

                               <form action="<?php echo e(url('allocateamb')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                  <div class="card" >
                                    <div class="card-body px-1 py-1-2" data-toggle="modal" id="patient" data-bs-toggle="modal"

                            
                            <?php if($data->status==1): ?>:
                            data-bs-target="#default" 
                            <?php elseif($data->status==2): ?>
                            data-bs-target="#default1" 
                            <?php else: ?>
                            data-bs-target="#default2" 
                            <?php endif; ?>
                           
                            
                            >
                                        <div class="row">
                                            <div class="col-md-3">
                                            <?php
                                                    if($data->status==1){
                                                        $color_name="green";
                                                        $ambulance_status="Available";
                                                    }
                                                    
                                                    elseif($data->status==2){
                                                        $color_name="#0dcaf0";
                                                        $ambulance_status="Running";

                                                    }
                                            
                                                    else{
                                                        $color_name="red"  ;
                                                        $ambulance_status="Unavailable";

                                                    }
                                                   

                                                ?>
                                                
                                                <div class="stats-icon purple" >
                                                    <i class="fas fa-ambulance" style="color:<?php echo e($color_name); ?>;"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                
                                                <input type="hidden" id="pfrom" value="<?php echo e($data->from); ?>">
                                                <input type="hidden" id="pto" value="<?php echo e($data->to); ?>">
                                               
                                                <h6 class="text-muted font-semibold"><?php echo e($data->id); ?></h6>
                                                <h6 class="text-muted font-semibold"><?php echo e($ambulance_status); ?></h6>
                                                <input type="hidden" id="amb_id" value="<?php echo e($data->id); ?>">
                                                <input type="hidden" id="veh_name" value="<?php echo e($data->vehicle_name); ?>">
                                                <input type="hidden" id="d_name" value="<?php echo e($data->driver_name); ?>">
                                                <input type="hidden" id="d_contact" value="<?php echo e($data->driver_contact); ?>">
                                                <input type="hidden" id="v_type" value="<?php echo e($data->vehicle_type); ?>">
                                                <input type="hidden" id="p_name" value="<?php echo e($data->patient_name); ?>">
                                                <input type="hidden" id="pid" value="<?php echo e($data->patient); ?>">
                                            </div>
                                            
  
                                        </div>
                                    </div>
                                    <?php if(isset($data->patient)): ?>
                                       
                                   
                                    <?php else: ?>

                                     
                                     <?php endif; ?>
                                  </div>
                                  </form>
                                  </div>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  

                                  </div>


                                  
                            
                               
                        <div class="modal fade text-left" id="" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
                                     <form action="<?php echo e(url('addamb_patient')); ?>" method="post" > 
                                     <?php echo csrf_field(); ?>
                                    <div class="modal-body">
                                        
                                         <div class="card-body">
                                        <div class="modal-body">
                                            <h4 style="text-align:center;" class="text-blue h4 mb-10">Ambulance Call Details</h4>
                                            <hr class="mb-4"> 
                                            <div class="row">
                                                    <div class="col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                        <input type="text" class="form-control" id="ambulance_id" name="ambulance_id">
                                                        
                                                        <label><b>Vehicle Name</b></label>
                                                        <input type="text" class="form-control" id="v_name" name="v_name" placeholder="vehicle name">
                                                
                                            
                                                    </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                        <label>Driver Name</label>
                                                        <input type="text" class="form-control" id="driver_name" name="driver_name" placeholder="driver name">
                                                
                                            
                                                    </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                        <label>Driver Contact</label>
                                                        <input type="text" class="form-control" id="driver_contact" name="driver_contact" placeholder="mobile no">
                                                
                                            
                                                    </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                        <label>Vehicle Type</label>
                                                        <input type="text" class="form-control" id="vehicle_type" name="vehicle_type" placeholder="vehicle type">
                                                
                                            
                                                    </div>
                                                    </div>
                                                    
                                                </div>                          
                                            
                                            
                                            
                                                <div class="row">
                                                    <div class="col-md-4 col-lg-4">
                                                  <div class="form-group">
                                                  <label>Add Patient</label>
                                                  <input type='number' class="form-control" id="patient_id" name="patient_id" placeholder="patient" onchange="patient_data(this.value)">
                                                  </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                        <label>Patient Name</label>
                                                        <input type='text' class="form-control" id="display_pt_name" name="display_pt_name" placeholder="patient name">
                                                        </div>
                                                          </div>
                                                          <div class="col-md-2 col-lg-2">
                                                            <div class="form-group">
                                                                <label><?php
                                                                ?></label>
                                                                <?php if($data->status="running"){?>
                                                                    
                                                  <?php }?>
                                                            </div>
                                                              </div>
                                                </div>
                                    </div>
                                    
                        
                      
                        </div>
                                    </div>
                                    


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            Close
                                        </button>
                                        
                                        <button type="submit" class="btn btn-primary ml-1" >
                                           Add
                                        </button>
                                      
                                    </div>
                                      </form>
                                     
                     
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="default" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    
                                    <div class="modal-body">
                                        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
                                        <form action="<?php echo e(url('addamb_patient')); ?>" method="post" > 
                                        <?php echo csrf_field(); ?>
                                            <div class="modal-body">
                                                <h4 style="text-align:center;" class="text-blue h4 mb-10">Ambulance Call </h4>
                                                <hr class="mb-4">
                                                <div class="row">
                                                  <div class="col-md-4 col-lg-4">
                                                    <div class="form-group">
                                                    <label>Ambulance Id</label>
                                                    <input type="text" id="ambu_id" name="ambulance_id" class="form-control" value="<?php echo e($data->id); ?>">
                                                    </div>
                                                  </div>
                                                    <div class="col-md-2 col-lg-2">
                                                    </div>
                                                    <div class="col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <?php
                                                                 date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
                                                            ?>
                                                        <label>Date&Time</label>
                                                        <input type="text" id="date" name="date"  value="<?php echo date('d-m-Y H:i'); ?>" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label>patient Id</label>
                                                        <input type="text" id="display_pt_id" name="patient_id" class="form-control" onchange="patient_data(this.value)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 col-lg-9">
                                                        <div class="mb-3">
                                                            <div class="form-group">
                                                        <label>Patient Name</label>
                                                        <input type="text" id="display_pname" name="patient_name" class="form-control" placeholder="name">
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-6 col-lg-6">
                                                      <div class="mb-3">
                                                      <label>From</label>
                                                      <input type="text" id="from" name="from" class="form-control" placeholder="start place">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6 col-lg-6">
                                                    <div class="mb-3">
                                                    <label>To</label>
                                                    <input type="text" id="to" name="to" class="form-control" placeholder="destination">
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6">
                                                        <div class="mb-3">
                                                        <label>Distance</label>
                                                        <input type="text" id="distance" name="distance" class="form-control" placeholder="distance">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6">
                                                        <div class="mb-3">
                                                        <label>Amount</label>
                                                        <input type="text" id="amount" name="amount" class="form-control" placeholder="Rs">
                                                        </div>
                                                    </div>
                                                </div>
                                              <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="mb-3">
                                                    <label>Paid Status</label>
                                                    <select class="form-control" name="pstatus" required>
                                                        <option selected="">Select</option>
                                                        <option value="1">Paid</option>
                                                        <option value="0">Un Paid</option>
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                  <div class="mb-3">
                                                  <label>Trip Status</label>
                                                  <select class="form-control" name="tstatus" required>
                                                    <option selected="">Select</option>
                                                      <option value="2">Running</option>
                                                    <option value="1">Available</option>
                                                    <option value="0">Finish</option>
                                                </select>
                                              </div>
                                              </div>
                                            </div>
                                          </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                                             <button type="submit" class="btn btn-primary ml-1" >
                                           Add
                                        </button>
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                      </div>
                      
                      <div class="modal fade" id="default1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                
                                <div class="modal-body">
                                    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
                                    <form action="" method="post" > 
                                    <?php echo csrf_field(); ?>
                                        <div class="modal-body">
                                            <h4 style="text-align:center;" class="text-blue h4 mb-10">Patient Details </h4>
                                            <hr class="mb-4">
                                            <div class="row">
                                                <div class="col-md-8 col-lg-8">
                                                </div>
                                                <div class="col-md-4 col-lg-4">
                                                    <div class="form-group">
                                                    <label>Ambulance Id</label>
                                                    <input type="text" id="cambu_id" name="cambu_id" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-lg-3">
                                                    <div class="form-group">
                                                    <label>patient Id</label>
                                                    <input type="text" id="a_pid" name="a_pid" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" id="cambu2_id" name="cambu_id" class="form-control">
                                                    <label>patient Name</label>
                                                    <input type="text" id="a_pname" name="a_pname" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-lg-3">
                                                    <div class="form-group">
                                                    <br>
                                                    <a href="<?php echo e(url('cancel_patient')); ?>" style="background-color:red;" class="btn btn-primary" type="submit">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                    <label>From</label>
                                                    <input type="text" id="p_from" name="p_from" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                    <label>To</label>
                                                    <input type="text" id="p_to" name="p_to" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                
                                            
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                      
                        
<script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
<script>
  $(".modal").on("hidden.bs.modal", function(){
    $(".modal-title").html("");
});
$(document).on('click','.edits',function(){
     //var itemvalue = $(this).val();
     
     var ambid = $(this).find('#amb_id').val();
    // var veh_name = $(this).find('#veh_name').val();
    // var d_name = $(this).find('#d_name').val();
    // var d_contact = $(this).find('#d_contact').val();
    // var v_type = $(this).find('#v_type').val()
    var pt_name = $(this).find('#p_name').val();
    var pt_id = $(this).find('#pid').val();
    var pt_from = $(this).find('#pfrom').val();
    var pt_to = $(this).find('#pto').val();
   
    
    

    
   

    $("#ambu_id").val(ambid);
    $("#cambu_id").val(ambid);
    $("#cambu2_id").val(ambid);
    //  $("#userinmodal").text(value);
    //  $("#roominmodal").text(roomvalue);
    //  $("#myModalLabel1").text(value);
    //  $("#v_name").val(veh_name);
    //  $("#driver_name").val(d_name);
    //  $("#driver_contact").val(d_contact);
    //  $("#vehicle_type").val(v_type);
     $("#a_pname").val(pt_name);
     $("#a_pid").val(pt_id);
     $("#p_from").val(pt_from);
     $("#p_to").val(pt_to);

       

     
      

    
  //var itemvalue = $(this).closest('.datas').find('.prodname').val();

     ;
     })


$(document).ready(function(){
    $("#pat").hide();
    $("#pat1").hide();
    $('#patient').click(function() {
    $(this).closest('.patt').find('#pat').show();
    $("#pat1").show();
    });
});
//vipin
function patient_data(val){
 var pt_id=val;
        $.ajax({
            url: '<?php echo e(url("ambpatient_details")); ?>',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "POST",
            data: {patient_id: pt_id},
            dataType: 'json',
            success: function (data) {
                console.log(data);
                // $("#display_pt_id").val(data.id );
                $("#display_pname").val(data.firstname);
                // $("#display_pt_address").val(data.address);
                // $("#display_pt_age").val(data.age);
                // $("#display_pt_mobile").val(data.phoneno);
            }
        })
}
//vipin
</script>
              
 <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/ambulance/casualityamb_view.blade.php ENDPATH**/ ?>