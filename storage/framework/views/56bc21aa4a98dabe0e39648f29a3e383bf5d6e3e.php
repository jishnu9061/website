
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
        <button type="button" class="btn btn-primary"  data-toggle="modal" data-bs-toggle="modal" data-bs-target="#theatre_modal" style="float:right; width:150px; position: relative;
        left: 81%; margin-bottom: 12px;">Add</button>
	    </form>
	    <br>
	    <section class="section">
		    <table class="table table-striped table-bordered" id="mydatatable">
			    <thead>
				    <tr>
					    <th> Sl</th>
                        <th>Operation Theatre</th>
					    <th>Department</th>
                        <th>Status</th>
					    <th>Edit</th>
          			    <th>Delete</th>
				    </tr>
			    </thead>
			    <tbody>
                    <?php $no=1; ?>
                    <?php $__currentLoopData = $theatre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="table ">
                        <td><?php echo $no++;?></td>
                        <td><?php echo e($key->theatre_name); ?></td>
                        <td><?php echo e($key->depname); ?></td>
                        <td> <?php if($key->status==1)
                            {
                              ?>
                              <i class="badge bg-info">Available</i>
                                <?php 
                                  }
                                  else
                                    {
                                      ?> 
                                      <i class="badge bg-danger">Not Available</i>
                                        <?php 
                                    }
                            ?>
                                </td>
                        <input type="hidden" value="<?php echo e($key->id); ?>" id="depmt_id" class="applicate" name="department_id">
                        <td><a href="#" class="edit" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#theatre_edit" onclick="values_edit('<?php echo e($key->id); ?>','<?php echo e($key->theatre_name); ?>','<?php echo e($key->department); ?>','<?php echo e($key->status); ?>')"><i class="fas fa-edit"></i></a></td>
                        <td><a onClick="return myFunction();" href="<?php echo e(url('delete_theatre'.$key->id )); ?>"><i class="fas fa-trash-alt"></i></a></td>
                     </tr>   
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
		    </table>
	    </section>
    </div>
    
    <div class="modal fade" id="theatre_modal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header" style="background-color:#5e829d">
                    <h4 class="text-white"><b>Add Opration Theatre</b></h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="<?php echo e(url('add_theatrecat')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                                <label>Opration Theatre</label>
                                <input type="text" class="form-control" name="theatre_name" placeholder="" required>
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
                                <label>Status</label>
                                <select class="form-select" aria-label="Default select example" name="ot_status" id="ot_status">
                              
                                    <option value="">Select</option>
                                    <option value="1">Available</option>
                                    <option value="0">Not Available</option>
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
    
    
    <div class="modal fade" id="theatre_edit">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header" style="background-color:#5e829d">
                    <h4 class="text-white"><b>Edit Opration Theatre</b></h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="<?php echo e(url('update_theatrecat')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                                <label>Opration Theatre</label>
                                <input type="text" class="form-control" name="theatre_n" id="theatre_n">
                                <input type="hidden" name="theatre_id" id="theatre_id">
                            </div>
                            <div class="form-group mb-3">
                                <label>Department</label>
                                <select class="form-select" aria-label="Default select example" name="depmt_name" id="depmt_name">
                              
                                    <option value="">Select</option>
                                        <?php $__currentLoopData = $dprmt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($key1->id); ?>"><?php echo e($key1->depname); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label>Status</label>
                                <select class="form-select" aria-label="Default select example" name="theatre_status" id="theatre_status">
                              
                                    <option value="">Select</option>
                                    <option value="1">Available</option>
                                    <option value="0">Not Available</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary text-white" data-bs-dismiss="modal"style="width:20%;background-color:#5e829d" data-dismiss="modal"> <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block"></span>Close</button>
                                <button type="submit" class="btn btn-primary" style="background-color:#5e829d;">Update</button>
                            </div>
                            <div class="container"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function values_edit(val1,val2,val3,val4)
        {
          $('#theatre_id').val(val1);
          $('#theatre_n').val(val2);
          $('#depmt_name').val(val3).change();
          $('#theatre_status').val(val4).change();
        }

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

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/theatre/theatre_view.blade.php ENDPATH**/ ?>