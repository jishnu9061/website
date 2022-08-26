
<?php $__env->startSection('content'); ?>
<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
</head>
<body>
<div class="container">
    <div class="py-5 text-center">
        
        <h2>Edit Prescription</h2>
        <hr class="mb-4">
    </div>
    <div class="row">
        <div class="col-md-12 order-md-1">
            <form action="<?php echo e(url('update_prescription')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Department</th>
                            <th scope="col">Consultant</th>
                            
                            

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width:20%"> <input type="text" name="date" value="<?php echo e(date('d-m-Y H:i:s',strtotime($edit_presc[0]->presc_date))); ?>"class="form-control" readonly></td>
                            <td style="width:20%"> <input type="text" name="department"  value="<?php echo e($edit_presc[0]->presc_department); ?>"class="form-control" readonly></td>
                            <td style="width:20%"> <input type="text" name="addedby"  value="<?php echo e($edit_presc[0]->name); ?>"class="form-control" readonly></td>
                            
                            
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-12 column">
                        <h4 style="text-align:center"><b>Edit Medicines</b></h4><br>

                        <table class="table table-striped order-list" id="change_medicine">
                            <tr>
                                <th>Medicines</th>
                                <th>Dosage</th>
                                <th>Instruction</th>
                                <th>Sub Pharmacy</th>
                                <th>Floor</th>
                                <th>Action</th>
                            </tr>
                            <?php $__currentLoopData = $edit_presc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <input type="hidden" name="presc_id[]" id="presc_id" value="<?php echo e($row->presc_medid); ?>">
                                <tr>
                                    
                                    <td>
                                        <select class="form-control"  aria-label="select example" name="item_name[]" id="item_name">
                                            <option value="">Select</option>
                                            <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($key->id); ?>" <?php echo e(($key->id == $row->presc_medicine) ? "selected" : ""); ?> ><?php echo e($key->Item_name); ?>--<?php echo e($key->item_group); ?>--<?php echo e($key->category_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="dosage[]" id="dosage_" class="form-control text-right calculate" value="<?php echo e($row->presc_dosage); ?>">
                                    </td>
                                    <td>
                                        <input type="text" name="instruction[]" id="instruction_" class="form-control text-right calculate" value="<?php echo e($row->presc_instruction); ?>">
                                    </td>
                                    <td>
                                        <select class="form-control"  aria-label="select example" name="sub_pharmacy[]" id="sub_pharmacy">
                                            <option value="">Select</option>
                                            <?php $__currentLoopData = $sub_pharmacy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_dept1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option class="dropdown-item" value="<?php echo e($sub_dept1->phar_deptid); ?>"<?php echo e(($sub_dept1->phar_deptid == $row->presc_subdept) ? "selected" : ""); ?> ><?php echo e($sub_dept1->phar_sub_deptname); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control"  aria-label="select example" name="sub_pharmacy[]" id="sub_pharmacy">
                                            <option value="">Select</option>
                                            <?php $__currentLoopData = $floor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $floor1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option class="dropdown-item" value="<?php echo e($floor1->floor_id); ?>"<?php echo e(($floor1->floor_id == $row->presc_floor) ? "selected" : ""); ?> ><?php echo e($floor1->floor_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </td>
                                <td>
                                    <button type="button" class="add-Row ibtnDel btn btn-primary text-white " style="background-color:#5e829d;width:100%;color:white;">Remove</button>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <h4 style="text-align:center"><b>Add Medicines</b></h4><br>
                            <table class="table table-bordered table-hover order-list" id="tab_logic">
                                <tr>
                                    <td style="width:30%"><b>Medicines</b></td>
                                    <td style="width:20%"><b>Dosage</b></td>
                                    <td style="width:10%"><b>Instruction</b></td>
                                    <td style="width:20%"><b>Sub Pharmacy</b></td>
                                    <td style="width:20%"><b>Floor</b></td>
                                    <td><input type="button" class="add_Row adRow" style="width:100%" id="add_Row" value="Add Row"></td>
                                </tr>
                                <tbody>

                                <input type="hidden" name="prescription[]" id="presc_id" value="<?php echo e($row->presc_id); ?>">
                                        <tr>
                                            <td>
                                                <select class="form-select"  aria-label="select example" name="medicine_name[]" id="medicine_name">
                                                    <option value="">Select</option>
                                                    <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($key->id); ?>"><?php echo e($key->Item_name); ?>--<?php echo e($key->item_group); ?>--<?php echo e($key->category_name); ?>(<?php echo e($key->quantity); ?>)</option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="dosage1[]" id="dosage1_" class="form-control text-right calculate">
                                            </td>
                                            <td>
                                                <input type="text" name="instruction1[]" id="instruction1_" class="form-control text-right calculate">
                                            </td>
                                            <td>
                                                <select class="form-control" aria-label="Default select example" name="sub_dept" id="sub_dept">
                                                    <option value="0">Select</option>
                                                        <?php $__currentLoopData = $sub_pharmacy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option class="dropdown-item" value="<?php echo e($sub1->phar_deptid); ?>"><?php echo e($sub1->phar_sub_deptname); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" id="floor" name="floor">
                                                    <option value='0'>Select</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button type="button" class="add-Row ibtnDel btn btn-primary text-white " style="background-color:#5e829d;width:100%;color:white;">Remove</button>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary text-white" onclick="window.history.back()" style="width:35%;background-color:#3e699b" >Close</button>
                        <button type="submit" class="btn btn-primary" style="background-color:#3e699b;width:35%;">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        // add new product row on invoice
        var cloned = $('#tab_logic tr:last').clone();
        $("#add_Row").click(function (e) {
            e.preventDefault();
            cloned.clone().appendTo('#tab_logic');
        });
        $("table.order-list").on("click", ".ibtnDel", function(_event) {
            $(this).closest("tr").remove();
            counter -= 1
          });
});
</script>
<script>
    $(document).ready(function() {
      $(".select_group").select2();
      // $("#description").wysihtml5();
    });

// delete function
$("table.order-list").on("click", ".ibtnDel", function(_event) {
    $(this).closest("tr").remove();
    counter -= 1
  });

</script>
<script type='text/javascript'>
    $(document).ready(function(){
        // Department Change
        $('#sub_dept').change(function(){
            // Department id
            var id = $(this).val();
            // Empty the dropdown
            $('#floor').find('option').not(':first').remove();
            // AJAX request
            $.ajax({
                    url: 'get_subdept_floor'+id,
                    type: 'get',
                    dataType: 'json',
                    success: function(response)
                    {
                        // console.log(response);
                        var len = 0;
                        if(response['data'] != null)
                        {
                            len = response['data'].length;
                        }
                        if(len > 0)
                        {
                            // Read data and create <option>
                            for(var i=0; i<len; i++)
                            {
                                var floor_id = response['data'][i].floor_id;
                                var floor_name = response['data'][i].floor_name;
                                var option = "<option value='"+floor_id+"'>"+floor_name+"</option>";
                                // $('#floor').append("<option value=''>Select</option>");
                                $("#floor").append(option);

                            }
                        }
                    }
                });
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/doctor/edit_prescription.blade.php ENDPATH**/ ?>