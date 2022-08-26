
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
        <button type="button" class="btn btn-primary"  data-toggle="modal" data-bs-toggle="modal" data-bs-target="#surgery_modal" style="float:right; width:150px; position: relative;
        left: 81%; margin-bottom: 12px;">Add</button>
	    </form>
	    <br>
	    <section class="section">
		    <table class="table table-striped table-bordered" id="mydatatable">
			    <thead>
				    <tr>
					    <th>Sl</th>
                        <th>Surgery Name</th>
					    <th>Department</th>
					    <th>Edit</th>
          			    <th>Delete</th>
				    </tr>
			    </thead>
                <tbody>
                    <?php $no=1;?>
                    <?php $__currentLoopData = $sur_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $surgery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="table">
                       <td><?php echo $no++;?></td>
                       <td><?php echo e($surgery->surgery_name); ?></td>
                       <td><?php echo e($surgery->depname); ?></td>
                       <td><a href="#" class="edit" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#edit_surmodal" onclick="edit_surtypes('<?php echo e($surgery->id); ?>','<?php echo e($surgery->surgery_name); ?>','<?php echo e($surgery->surgery_dept); ?>')"><i class="fas fa-edit"></i></a></td>
                       <td><a href="<?php echo e(url('delete_surgery'.$surgery->id)); ?>"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </section>
    </div>
    <div class="modal fade" id="surgery_modal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header" style="background-color:#5e829d">
                    <h4 class="text-white"><b>Add Surgery Types</b></h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="<?php echo e(url('add_surtypes')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                                <label>Surgery Name</label>
                                <input type="text" value="" id="surgery_name" class="form-control" name="surgery_name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Department</label>
                                <select class="form-select" aria-label="Default select example" name="surgery_dept" id="surgery_dept">
                                    <option value="">Select</option>
                                    <?php $__currentLoopData = $dept; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($department->id); ?>"><?php echo e($department->depname); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"style="width: 25%" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="edit_surmodal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header" style="background-color:#5e829d">
                    <h4 class="text-white"><b>Edit Surgery Types</b></h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="<?php echo e(url('update_surtypes')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                                <label>Surgery Name</label>
                                <input type="hidden" name="sur_id" id="sur_id">
                                <input type="text" value="" id="sur_name" class="form-control" name="sur_name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Department</label>
                                <select class="form-select" aria-label="Default select example" name="sur_dept" id="sur_dept">
                                    <option value="">Select</option>
                                    <?php $__currentLoopData = $dept; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($department->id); ?>"><?php echo e($department->depname); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"style="width: 25%" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
<script>
    function edit_surtypes(val1,val2,val3)
    {
      $('#sur_id').val(val1);
      $('#sur_name').val(val2);
      $('#sur_dept').val(val3).change();
    }

</script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/surgery/view_surgerytypes.blade.php ENDPATH**/ ?>