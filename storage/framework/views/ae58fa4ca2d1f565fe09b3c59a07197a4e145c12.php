
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
	    <div class="col-md-6">
		    <div class="form-group">
			    <form method="post" action="<?php echo e(url('new_department')); ?>">
			        <?php echo csrf_field(); ?>
			        <input type="text" name="department_name" class="form-control" placeholder="Add Departmets" required>
		    </div>
	    </div>
	    <div class="col-md-6">
		    <div class="form-group">
			    <button type="submit" class="btn btn-primary btn-block">Add Department</button>
		    </div>
	    </div>
	    </form>
	    <br>
	    <section class="section">
		    <table class="table table-striped table-bordered" id="mydatatable">
			    <thead>
				    <tr>
					    <th>
						    Id
					    </th>
					    <th>
						    Department
					    </th>
					    <th>
						    Edit
					    </th>
          			    <th>
						    Delete
					    </th>
				    </tr>
			    </thead>
			    <tbody>
			        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				        <tr class="table table-hover" id="data1">
					        <td class="dep_id" id="dep_id"><?php echo e($data->id); ?></td>
					        <td class="dep_name1" id="dep_name1"><?php echo e($data->depname); ?></td>
					        <input type="hidden" value="<?php echo e($data->id); ?>" id="department_id" class="applicate" name="department_id">
					        <td><a href="#" class="edits" id="dep_edit" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#dep-edit"><i class="fas fa-edit" style="color:#607080"></i></a></td>
      				        <td><a onClick="return myFunction();" href="<?php echo e(url('delete_department'.$data->id)); ?>"><i class="fas fa-trash-alt" style="color:#607080"></i></a></td>
                        </tr>
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
		    </table>
	    </section>
    </div>
    <div class="modal fade" id="dep-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Department</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form method="POST" enctype="multipart/form-data" action="<?php echo e(url('update_department')); ?>">
                    <?php echo csrf_field(); ?>
                        <div class="modal-body">
                            <input type="hidden" id="idzid" value="" name="dep_id">
       	                    <input type="text" class="form-control" id="dep_modal_name" name="department_name" >
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" id="editid1" name="hiddenid">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"style="width: 25%" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-cancel">Update</button>
                        </div>
                </form>
            </div>
        </div>
        <?php echo e(Session::forget('depadded')); ?>

        <?php echo e(Session::forget('depdeleted')); ?>

        <?php echo e(Session::forget('depupdated')); ?>

    </div>
    <script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
        $(document).on('click','#dep_edit',function()
        {
            var department_name = $(this).closest('#data1').find('#dep_name1').text();
            var department_id = $(this).closest('#data1').find('#dep_id').text();
            $("#dep_modal_name").val(department_name);
            $("#idzid").val(department_id);
        });
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

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/hospitals/adddepartments.blade.php ENDPATH**/ ?>