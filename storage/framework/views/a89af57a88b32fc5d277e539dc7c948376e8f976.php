
<?php $__env->startSection('content'); ?>
    <?php if(Session::has('depadded')): ?>
        <div class="alert alert-dark" role="alert">
            <?php echo e(Session::get('depadded')); ?>

        </div>
    <?php endif; ?>
    <?php if(Session::has('depdeleted')): ?>
        <div class="alert alert-dark" role="alert">
            <?php echo e(Session::get('depdeleted')); ?>

        </div>
    <?php endif; ?>
    <?php if(Session::has('depupdated')): ?>
        <div class="alert alert-dark" role="alert">
            <?php echo e(Session::get('depupdated')); ?>

        </div>
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <div class="row" style="padding-top: 13px;">
	    
	    
        <button type="button" class="btn btn-primary"  data-toggle="modal" data-bs-toggle="modal" data-bs-target="#labdeptModal" style="float:right; width:150px; position: relative;
        left: 81%; margin-bottom: 12px;">Add</button>
	    </form>
	    <br>
	    <section class="section">
		    <table class="table table-striped table-bordered" id="mydatatable">
			    <thead>
				    <tr>
					    <th> Sl</th>
                        <th>Lab</th>
					    <th>Department</th>
                        <th>Floor</th>
					    <th>Edit</th>
          			    <th>Delete</th>
				    </tr>
			    </thead>
			    <tbody>
                    <?php $no=1; ?>
                    <?php $__currentLoopData = $labdept; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="table ">
                        <td><?php echo $no++;?></td>
                        <td><?php echo e($dept->lab_deptname); ?></td>
                        <td><?php echo e($dept->depname); ?></td>
                        <td><?php echo e($dept->floor_name); ?></td>
                        <input type="hidden" value="<?php echo e($dept->lab_deptid); ?>" id="depmt_id" class="applicate" name="department_id">
                        <td><a href="#" class="edits" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#labdep_edit"><i class="fas fa-edit" style="color:#607080" onclick="values_edit(`<?php echo e($dept->lab_deptid); ?>`,`<?php echo e($dept->lab_deptname); ?>`,`<?php echo e($dept->dep_name); ?>`,'<?php echo e($dept->floor_id); ?>');"></i></a></td>
      				    <td><a onClick="return myFunction();" href="<?php echo e(url('delete_labdepartment'.$dept->lab_deptid )); ?>"><i class="fas fa-trash-alt" style="color:#607080"></i></a></td>
                     </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
		    </table>
	    </section>
    </div>
    
    <div class="modal fade" id="labdeptModal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header" style="background-color:#5e829d">
                    <h4 class="text-white"><b>Add Lab Department</b></h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="<?php echo e(url('lab_departments')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                                <label>Lab Name</label>
                                <input type="text" class="form-control" name="labdept_name" placeholder="" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Department</label>
                                <select class="form-select" aria-label="Default select example" name="dept_name" id="dept_name">
                              
                                    <option value="">Select</option>
                                        <?php $__currentLoopData = $dprmt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($key1->id); ?>"><?php echo e($key1->depname); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label>Floor</label>
                                <select class="form-select" aria-label="Default select example" name="floor_name" id="floor_name">
                              
                                    <option value="">Select</option>
                                        <?php $__currentLoopData = $lab_floor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value->floor_id); ?>"><?php echo e($value->floor_name); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="hidden" class="form-control" id="edit_id" name="medicine_id">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary text-white" data-bs-dismiss="modal"style="width:20%;background-color:#5e829d" data-dismiss="modal"> <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block"></span>Close</button>
                                <button type="submit" class="btn btn-primary" style="background-color:#5e829d;width:20%;">Save</button>
                            </div>
                            <div class="container"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="modal fade" id="labdep_edit">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header" style="background-color:#5e829d">
                    <h4 class="text-white"><b>Edit Department</b></h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="<?php echo e(url('update_labdepartment')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                                <label>Lab Name</label>
                                <input type="hidden" id="dept_id" value="" name="dept_id">
       	                    <input type="text" class="form-control" id="dep_modal_name" name="dep_modal_name" >
                            </div>
                            <div class="form-group mb-3">
                                <label>Department</label>
                                <select class="form-select" aria-label="Default select example" name="dept_modal_name" id="dept_modal_name">
                          
                                <option value="">Select</option>
                                    <?php $__currentLoopData = $dprmt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($key2->id); ?>"><?php echo e($key2->depname); ?></option>
                                    
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            </select>
                            </div>
                            <div class="form-group mb-3">
                                <label>Floor</label>
                                <select class="form-select" aria-label="Default select example" name="floor_modal_name" id="floor_modal_name">
                              
                                    <option value="">Select</option>
                                        <?php $__currentLoopData = $lab_floor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value2->floor_id); ?>"><?php echo e($value2->floor_name); ?></option>
                                         
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>
                            </div>
                            <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" id="editid1" name="hiddenid">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary text-white" data-bs-dismiss="modal"style="width:20%;background-color:#5e829d" data-dismiss="modal"> <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block"></span>Close</button>
                            
                            <button type="submit" class="btn btn-primary" style="background-color:#5e829d;">Update</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php echo e(Session::forget('depadded')); ?>

        <?php echo e(Session::forget('depdeleted')); ?>

        <?php echo e(Session::forget('depupdated')); ?>

    </div>
    <script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
    
     <script>
        function values_edit(val1,val2,val3,val4){
    
            $("#dep_modal_name").val(val2);
           $('#dept_id').val(val1);
           $('#dept_modal_name').val(val3).change();
        //    alert(val4);
           $('#floor_modal_name').val(val4).change();
    
          };
    </script>
    <script type="text/javascript" charset="utf8" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/lab_department/labdept_view.blade.php ENDPATH**/ ?>