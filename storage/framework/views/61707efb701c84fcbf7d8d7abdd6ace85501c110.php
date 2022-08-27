
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<div class="container">
	<br>
    <div class="col-md-2">
        <button href="#" class="edits" data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default" class="btn btn-block btn-secondary">Add</button>
      </div>
      <div class="table-responsive">
<table class="table table-striped" id="allpatients" style="margin-top: 40px;" id="mydatatable">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Role Name</th>
      <th scope="col">Previlages</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
 
    <?php $__currentLoopData = $userroles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <tr>
      <th scope="row"><?php echo e($appz->id); ?></th>
      <th><?php echo e($appz->name); ?></th>
                     <td><a href="#" class="edits" data-toggle="modal" id="view_previlages" data-bs-toggle="modal"
                   data-bs-target="#view_prev"><i class="fas fa-eye"></i></a></td>
     
   

               <input type="hidden" id="amb_id" value="<?php echo e($appz->id); ?>" name="">
               <td><a href="#" class="edits" data-toggle="modal" id="amb_edit" data-bs-toggle="modal"
                   data-bs-target="#edit" onclick="edit_details('<?php echo e($appz->id); ?>','<?php echo e($appz->name); ?>')"><i class="fas fa-edit"></i></a></td>
                   <td><a href="<?php echo e(url('delete_roles'.$appz->name)); ?>"><i class="fas fa-trash-alt"></i></a></td>
      </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
    
   
  </tbody>
</table>
      </div>
</div>
  <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                     
                                        

                                    <h5 class="modal-title bb" id="myModalLabel1">Add Roles </h5>
                                       
                                     
                                       
                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="<?php echo e(url('saverole_details')); ?>" method="post" > 
                                     <?php echo csrf_field(); ?>
                                    <div class="modal-body">
                                        
                                         <div class="card-body">
                                
                                    
                        <div class="form-group mb-3">
                            <label>Role Name</label>
			                <input type="text" class="form-control" name="name" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Previlages</label>
                            <hr>
			          <div class="row">
			          	<div class="col-md-6">
			          		<p>Add Staffs</p>
			          		<input type="checkbox" value="Add Staffs|addstaffs"  name="prev[]">
			          	</div>
			          	<div class="col-md-6">
			          		<p>Manage Staffs</p>
			          		<input type="checkbox" value="Manage Staffs|staffs"  name="prev[]">			          		
			          	</div>			          	
			          </div>
			          <div class="row">
			          	<div class="col-md-6">
			          		<p>Attendance</p>
			          		<input type="checkbox" value="Attendance|attendance" name="prev[]">
			          	</div>
			          	<div class="col-md-6">
			          		<p>Payslip</p>
			          		<input type="checkbox" value="Payslip|payslip" name="prev[]">			          		
			          	</div>			          	
			          </div>
			          	<div class="row">
			          	<div class="col-md-6">
			          		<p>Leaves</p>
			          		<input type="checkbox" value="Leaves|leaves" name="prev[]">
			          	</div>
			          	<div class="col-md-6">
			          		<p>Loans</p>
			          		<input type="checkbox" value="Loans|loans" name="prev[]">			          		
			          	</div>			          	
			          </div>
			          <div class="row">
			          	<div class="col-md-6">
			          		<p>Duty Schedule</p>
			          		<input type="checkbox" value="Duty Schedule|dutyshedule" name="prev[]">
			          	</div>
			          	<div class="col-md-6">
			          		<p>Apply Leave</p>
			          		<input type="checkbox" value="Leave Application|applyleave" name="prev[]">			          		
			          	</div>			          	
			          </div>
                <div>
             
                     
                </div>               
                		          			          
                        </div>

                        </div>
                        </div>
                                    

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary"  style="width: 25%" >Save</button>
                                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                      </form>
                                     
                     
                                </div>
                            </div>
                        </div>
                        <div class="modal fade text-left" id="edit" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                 <h5 class="modal-title bb" id="myModalLabel1">edit roles</h5> 
                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="<?php echo e(url('update_roles')); ?>" method="post" > 
                                     <?php echo csrf_field(); ?>
                                    <div class="modal-body">
                                        
                                         <div class="card-body">
                                
                                    
                        <div class="form-group mb-3">
                            <input type="hidden" id="roll_id" name="ambu_id">
                            <label>Role Name</label>
			                <input type="text" class="form-control" name="vname" id="vname">
                        </div>
                        <div class="form-group mb-3">
                            <label>Previlages</label>
			                <input type="text" class="form-control" name="vmodel" id="vmodel">
                        </div>
 

                        </div>
                        </div>
                                    

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" style="width: 25%" >Save</button>
                                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                      </form>
                                     
                     
                                </div>
                            </div>
                        </div>
<script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
  })
  
    $(document).on('click','#view_previlages',function(){

  
  });
  </script> 
  <script>
    function edit_details(val1,val2)
    {
        $('#roll_id').val(val1);
		$('#vname').val(val2);
	}
  </script>
  <script>
    $('#mydatatable').dataTable({
        colReorder: true,
        order: [],
        pageLength: 0,
        lengthMenu: [10,20, 40, 60, 80, 90, 100],
    });
</script>    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/hospitals/usermanagement.blade.php ENDPATH**/ ?>