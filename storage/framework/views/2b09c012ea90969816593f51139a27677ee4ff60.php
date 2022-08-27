
<?php $__env->startSection('content'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    
    </head>
    <style>
        .btn-width {
            width: 10%;
        }
    </style>
    <div>
        <div class="container">
            <h3 style="text-align:center"><u><b>Add Department Stores</b></u></h3><br>
            <div style="width:50%; margin:0 auto;">
                <div class="card w-20">
                    <div class="card-body">
                        <table>
                            <tbody>
                                <form method="post" action="<?php echo e(url('add_substore')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="col-sm-12">
                                        <label>Department</label>
                                        <select class="form-select" aria-label="Default select example" id="payment_type"
                                            name="department_name" required>
                                            <option value="">Select</option>
                                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($department->id); ?>"><?php echo e($department->depname); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <br>
                            </tbody>
                        </table>
                        <table class="table table-bordered" id="dynamicAddRemove">
                            <tr>
                                <th>Substore Name</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="sub_store_name[]" placeholder="Enter Substore Name"
                                        class="form-control" />
                                </td>
                                <td><button type="button" name="add" id="dynamic-ar" style="width:100%"
                                        class="btn btn-outline-primary">Add</button></td>
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-outline-primary btn-block">Save</button>
                    </form>
                        <br>



                    </div>


                </div>
                <br>
            </div>
        </div>
        <div>




        </div>
    </div>
    </div>
    </div>

  <!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="sub_store_name[' + i +
            ']" placeholder="Enter Substore Name" class="form-control" /></td><td><button type="button" style="width:100%" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/store/substore_details.blade.php ENDPATH**/ ?>