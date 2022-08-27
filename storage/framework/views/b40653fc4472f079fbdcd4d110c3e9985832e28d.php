
<?php $__env->startSection('content'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  


</head>

<body>
    <div class="container">
        <h3 class="text-center"><b><u>Item Datails</u></b></h3>
       <br>
       <button type="button" class="btn btn-primary" style="width:18%;background-color:#3e699b;"data-toggle="modal" data-target="#myModal"><b>Add Items</b></button><br><br>


        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header" style="background-color:#3e699b">
                <h4 class="text-white">Add Item</h4>

              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <div class="container">
                    <form method="post" action="<?php echo e(url('create_new_item')); ?>">
                        <?php echo csrf_field(); ?>
                    <div class="row">
                        
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <input type="text" name="item_name" class="form-control" placeholder="Item Name" required><br>
                                <select class="form-select contrl searchingBook"  name="brand_name" aria-label="Default select example">
                                    <option>Select Brand Name</option>
                                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option ><?php echo e($brand->brand_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select><br>
                            </div>
                        </div>      
                        <div class="col-md-12">
                            <div class="col-md-12">  
                            <select class="form-select contrl searchingBook" name="item_group" aria-label="Default select example">
                                <option>Select Item Group</option>
                                <?php $__currentLoopData = $medicine_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groups): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option ><?php echo e($groups->group_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select><br>
                            <select class="form-select contrl searchingBook"  name="category_name" aria-label="Default select example">
                                <option>Select Item Category</option>
                                <?php $__currentLoopData = $medicine_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option ><?php echo e($category->category_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select><br>


                        </div>
                    </div>

                </div>
                <div class="container">

                </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-primary"  style="background-color:#3e699b;width:20%;" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" style="background-color:#3e699b;width:20%;">Save</button>
              </div>
            </form>

            </div>
          </div>
        </div>

      </div>
        <!-- The Modal -->
        

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <table class="table table-bordered" id="new-item">
                <thead>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Item Name</th>
                        <th class="text-center">View</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $item_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr id="data">
                            <td  scope="row" class="text-center"><?php echo e($data->id); ?></td>
                            <td  scope="row" class="text-center" id="medicine_name_1"><?php echo e($data->Item_name); ?></td>
                            <td  scope="row"class="text-center"><a href="<?php echo e(url('view_new_items'.$data->id)); ?>"><i  style="color:#435ebe;" class="fa fa-eye" aria-hidden="true"></i></td>
                           <input type="hidden" value="<?php echo e($data->id); ?>" id="medicine_id_hidden" class="applicate" name="supplier_id_hidden">
                            <td  scope="row"class="text-center"><a href="<?php echo e(url('edit_item'.$data->id)); ?>"><i  style="color:#435ebe;" class="fa fa-edit" aria-hidden="true"></i></td>
                            <td class="text-center"><a  onClick="return myFunction();" href="<?php echo e(url('item_delete'.$data->id)); ?>" style="color:#435ebe;"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
           

 <!-- The Modal -->
 <div class="modal fade" id="editmed">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#435ebe">
        <h4 class="text-white">Edit Medicine</h4>

      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container">
            <form method="post" action="<?php echo e(url('update_medicine')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <h4 class="text-center"><b>Medicine Details</b></h4><br>
                <div class="row">
                    <div class="col-sm">
                        <label for="">Brand Name</label>
                        <select class="form-select contrl searchingBook" id="edit_brand_name"  name="brand_name" aria-label="Default select example" required>
                            <option>Select</option>
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option ><?php echo e($brand->brand_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select><br>
                    </div>
                    <div class="col-sm">
                        <label for="">Medicine Name</label>
                        <input type="text" id="edit_medicine_name" name="medicine_name" class="form-control" required><br>
                    </div>
                    <div class="col-sm">
                        <div class="col-sm">
                            <label for="">Medicine Group</label>
                            <select class="form-select contrl searchingBook" id="edit_medicine_group"  name="medicine_group" aria-label="Default select example">
                                <option>Select</option>
                                <?php $__currentLoopData = $medicine_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groups): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option ><?php echo e($groups->group_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select><br>
                        </div>

                    </div>
                    <div class="col-sm">
                          <label for="">Medicine Category Name</label>
                        <select class="form-select contrl searchingBook" id="edit_category_name"  name="category_name" aria-label="Default select example">
                            <option>Select</option>
                            <?php $__currentLoopData = $medicine_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option ><?php echo e($category->category_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select><br>

                    </div>

                  </div>
                  <div class="row">
                    <div class="col-sm">
                        <label for="">Generic name</label>
                        <select class="form-select contrl searchingBook" id="edit_generic_name"  name="genric_name" aria-label="Default select example">
                            <option>Select</option>
                            <?php $__currentLoopData = $generic1_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $generic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option ><?php echo e($generic->generic_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select><br>
                    </div>
                        <div class="col-sm">
                         <label>Manufacturer Name</label>
                        <select class="form-select contrl searchingBook" placeholder="Select" id="edit_manufacture_name" name="manufacture_name" aria-label="Default select example" >
                            <option>Select</option>
                            <?php $__currentLoopData = $manufacturer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option ><?php echo e($test->manufactuers_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select><br>
                    </div>
                    <div class="col-sm">
                        <label>Supplier Name</label>
                            <select class="form-select contrl searchingBook" id="edit_supplier_name" name="supplier_name" aria-label="Default select example">
                                <option>Select</option>
                                
                            </select><br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm">
                        <label for="">Minimum Level</label>
                            <input type="text" id="edit_minimum_level" name="minimum_level" class="form-control"><br>
                    </div>
                    <div class="col-sm">
                        <label>Reorder Level</label>
                            <input type="text" name="reorder" id="edit_reorder"  class="form-control" placeholder=""><br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm">
                        <label class="text-color:white;">Unit/Packing</Label>
                            <input type="text" name="unit_packing" id="edit_unit_packing"  class="form-control" placeholder=""><br>
                    </div>
                    <div class="col-sm">
                        <label>Upload Medicine Image</label>
                        <input type="file" name="editimage" id="edit_image"  class="form-control" placeholder="Image"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <label>Medicine Composition</label>
                                <textarea class="form-control" id="edit_medicine_details1" name="medicine_detailss"  rows="3" placeholder="" ></textarea><br>
                        </div>
                        <div class="col-sm">
                            <label>Notes</label>
                                <textarea class="form-control" id="edit_medicine_note" name="medicine_note"  rows="3" placeholder="" ></textarea><br>
                        </div>
                    </div>
                    <br>

                      <div class="row">
                        <div class="col-md-6">
                                <input type="hidden" class="form-control" id="edit_id" name="method_id">

                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary text-white"   style="width:15%;background-color:#435ebe"  data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" style="background-color:#435ebe;width:15%;">Update</button>
                    </div>
                </div>
        <div class="container">

        </div>
      </div>

    </form>

    </div>
  </div>
</div>

</div>

<br>
<!-- Supplier modal Edit End -->

<!-- Delete  confirmation Message -->

<!-- End delete confirmation message -->
</div>
<script>
    function myFunction(){
        if(!confirm("Are you sure to delete this"))
        event.preventDefault();
    }
</script>
<script>
    $(function(){
      $("#new-item").dataTable();
    })
  </script>


<script>
    $(document).ready(function(){
             $('.searchingBook').select2();
    });
 </script>

<!-- Delete  confirmation Message -->
  <script>
    function myFunction(){
        if(!confirm("Are you sure to delete this"))
        event.preventDefault();
    }
</script>
<!-- End delete confirmation message -->

<script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>



<script>
    $(document).on('click','#edit_medicine_details',function(){

        var medicine_id_hidden = $(this).closest('#data').find('#medicine_id_hidden').val();
        var medicine_name = $(this).closest('#data').find('#medicine_name_1').val();
        var medicine_brand_name = $(this).closest('#data').find('#medicine_brand_name').val();
        var medicine_group = $(this).closest('#data').find('#medicine_group').val();
        var medicicine_category_name = $(this).closest('#data').find('#medicine_category_name1').val();
        var medicine_generic_name = $(this).closest('#data').find('#medicine_generic_name').val();
        var medicine_manufactuure_name = $(this).closest('#data').find('#medicine_manufactuure_name').val();
        var medicine_supplier_name = $(this).closest('#data').find('#medicine_supplier_name').val();
        var medicine_minimum_level = $(this).closest('#data').find('#medicine_minimum_level').val();
        var medicine_reorder_level = $(this).closest('#data').find('#medicine_reorder_level').val();
        var medicine_unit_packing = $(this).closest('#data').find('#medicine_unit_packing').val();
        var medicine_composition = $(this).closest('#data').find('#medicine_composition').val();
        var medicine_notes = $(this).closest('#data').find('#medicine_notes').val();
        var medicine_images = $(this).closest('#data').find('#medicine_images').val();



           $("#edit_id").val( medicine_id_hidden);
           $("#edit_medicine_name").val(medicine_name);
           $("#edit_brand_name").val(medicine_brand_name);
           $("#edit_medicine_group").val(medicine_group);
           $("#edit_category_name").val(medicine_category_name);
           $("#edit_generic_name").val(medicicine_genric_name);
           $("#edit_manufacture_name").val(medicine_manufactuure_name);
           $("#edit_supplier_name").val( medicine_supplier_name);
           $("#edit_minimum_level").val(medicine_minimum_level);
           $("#edit_reorder").val(medicine_reorder_level);
           $("#edit_minimum_level").val(medicine_minimum_level);
           $("#edit_unit_packing").val(medicine_unit_packing);
           $("#edit_medicine_details1").val(medicine_composition);
           $("#edit_medicine_note").val(medicine_notes);
           $("#edit_image").val(medicine_images);
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\erp-globaleyet\resources\views/store/add_medicine.blade.php ENDPATH**/ ?>