
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<div class="container">
    <div class="py-5 text-center">
        <?php if(Session::has('staffregistered')): ?>
            <div class="alert alert-dark" role="alert">
                <?php echo e(Session::get('staffregistered')); ?>

            </div>
        <?php endif; ?>
        <?php if(Session::has('appointed')): ?>
            <div class="alert alert-dark" role="alert">
                <?php echo e(Session::get('appointed')); ?>

            </div>
        <?php endif; ?>
        <?php if(Session::has('noappointmentstoday')): ?>
            <div class="alert alert-dark" role="alert">
                <?php echo e(Session::get('noappointmentstoday')); ?>

            </div>
        <?php endif; ?>
    </div>
    <div class="row">
        
  </div>
</div>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <div class="container">
        <div class="py-5 text-center">
            
            <h2>Edit Lab Test</h2>
            <p class="lead">just analize that human</p>
            <hr class="mb-4">
        </div>
        
            <?php echo csrf_field(); ?>
            
            
            <div class="row">
                <div class="col-sm">
                    <div class="col-sm">
                        <label for="">Date</label>
                        <input type="datetime-local" class="form-control" name="tests_date" id="tests_date" <?php foreach($edit_test as $detail):?> value="<?php echo e(date(('Y-m-d\TH:i:s'),strtotime($detail->date))); ?>" <?php endforeach;?>><br>
                        <input type="hidden" name="tests_id" id="tests_id" value="<?php echo e($edit_test[0]->patientlab_id); ?>">
                    </div>
                    <div class="col-sm">
                        <label for="">Lab Name</label>
                        <select class="form-control" aria-label="Default select example" name="testlab_name" id="testlab_name" style="pointer-events:none">
                            <option value="">Select</option>
                            <?php $__currentLoopData = $lab_dept; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <option  class="dropdown-item" value="<?php echo e($dept2->lab_deptid); ?>"<?php echo e(($dept2->lab_deptid  == $detail->lab_name)? "selected" : ""); ?>><?php echo e($dept2->lab_deptname); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                        </select>
                    </div>
                </div>
                
                <div class="col-sm">
                    <div class="col-sm">
                        <label for="">Added By</label>
                            <select class="form-control" aria-label="Default select example" name="dr_name" id="dr_name" style="pointer-events:none">
                                <option value="">Select</option>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($key2->name); ?>" <?php echo e(($key2->id==Auth::user()->id) ? "selected" : ""); ?> ><?php echo e($key2->name); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                             
                            </select><br>
                    </div>
                    <div class="col-sm">
                        <label for="">Departments</label>
                            <select class="form-control" aria-label="Default select example" name="dr_depmt" id="dr_depmt" style="pointer-events:none">
                                <option value="">Select</option>
                                 <?php $__currentLoopData = $dept; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($key1->departments); ?>" <?php echo e(($key1->departments==Auth::user()->departments) ? "selected" : ""); ?> ><?php echo e($key1->departments); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                       
                            </select>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <form action="<?php echo e(route('update_labtest')); ?>" method="get" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                      <table class="table table-borderless  order-list1" id="tab_logic">
                                <thead>
                                    <tr>
                                        <th style="color: white;">Tests</th>
                                        <th><input type="button" class="add_Row adRow" id="add_row" value="Add"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $edit_test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(!empty($detail1->test)): ?>
                                    <tr>
                                        <td style="width:auto"> 
                                            <input type="hidden" name="tests_id" id="tests_id" value="<?php echo e($edit_test[0]->patientlab_id); ?>">
                                            <input type="hidden" name="lab_type" value="1">
                                            <input type="hidden" name="presc_item_id[]" value="<?php echo e($detail1->id); ?>"class="form-control">
                                           <select class="form-select select_groups product"data-row-id="row_3" id="product_detailes" name="testname[]"  style="width:100%;">
                                        <option selected>Select</option>
                                        <?php $__currentLoopData = $labtests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $labtest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <option value="<?php echo e($labtest->id); ?>" <?php echo e(($labtest->id == $detail1->test) ? "selected" : ""); ?> ><?php echo e($labtest->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </td>
                                        <td><a href="<?php echo e(url('delete_preclab'.$detail1->id)); ?>"><button type="button" class="add_Row adRow ibtnDel " style="width:auto;"><i class="fas fa-backspace"></i></button></a></td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>           

                                </tbody>
                      </table>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" style="background-color:#5e829d;width:20%;">Update</button>
                      </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form method="post" action="<?php echo e(url('update_labtest')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                    <table class="table table-borderless order-list2" id="tab_logic1">
                          <thead>
                              <tr>
                                  <th style="color: white;">Profiles</th>
                                  <th><input type="button" class="add_Row adRow" id="add_Row_again" value="Add"></th>
                              </tr>

                          </thead>
                              <tbody>
                                <?php $__currentLoopData = $edit_test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(!empty($detail1->profile)): ?>
                                  <tr>
                           <td style="width:auto">
                            <input type="hidden" name="tests_id" id="tests_id" value="<?php echo e($edit_test[0]->patientlab_id); ?>">
                            <input type="hidden" name="lab_type" value="2">
                            <input type="hidden" name="presc_item_id[]" value="<?php echo e($detail1->id); ?>"class="form-control">
                            <select class="form-select select_groups product" data-row-id="row_3" id="product_detailes" name="profilename[]" style="width:100%;">
                                <option>Select</option>
                                <?php $__currentLoopData = $labprofiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $labprofile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($labprofile->id); ?>" <?php echo e(($labprofile->id == $detail1->profile) ? "selected" : ""); ?> ><?php echo e($labprofile->name); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                       
                            </select>
                            </td>
                            <td><a href="<?php echo e(url('delete_preclab'.$detail1->id)); ?>"><button type="button" class="add_Row adRow ibtnDel " style="width:auto;"><i class="fas fa-backspace"></i></button></a></td>
                                  </tr>
                                  <?php endif; ?>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </tbody>
                      </table>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" style="background-color:#5e829d;width:20%;">Update</button>
                      </div>
                    </form>
                    </div>
            </div>
                    
                    
        
    </div>
    <script>
        function goBack() 
        {
         window.history.back();
        }
    </script>
    <script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        var counter = 0;
        $("#add_row").on("click", function() {
          var newRow = $("<tr>");
          var cols = "";
    
          cols +='<td><select name="testname1[]" class="form-select select2" style="width:100%;><option value="">Select</option> <?php foreach($labtests as $row):?><option value="<?php echo $row->id ;?>"><?php echo $row->name;?> </option><?php endforeach;?></select></td>'
          cols += '<td><button type="button" class="add_Row adRow ibtnDel " style="width:auto;"><i class="fas fa-backspace"></i></button></a></td>';
          newRow.append(cols);
    
          var defVal = $("select[name=acctname]").find(":selected").val();
          if (defVal) {
            $("select[name=accountName]").find(`option[value=${defVal}]`).hide();
          }
          $("table.order-list1").append(newRow);
          setValCashVal('accountName'.concat(counter));
          bindScript();
          counter++;
        });
    
        // delete function
        $("table.order-list1").on("click", ".ibtnDel", function(_event) {
          $(this).closest("tr").remove();
          counter -= 1
        });
    
      });
    
    
    
      </script>
       <script type="text/javascript">
        $(document).ready(function() {
        var counter = 0;
    
        $("#add_Row_again").on("click", function() {
    
          var newRow = $("<tr>");
          var cols = "";
    
          cols +='<td><select name="profilename1[]" class="form-select select2" style="width:100%;><option value="">Select</option> <?php foreach($labprofiles as $row):?><option value="<?php echo $row->id;?>"><?php echo $row->name;?> </option><?php endforeach;?></select></td>'
    
          cols += '<td><button type="button" class="add_Row adRow ibtnDel " style="width:30%;"><i class="fas fa-backspace"></i></button></a></td>';
          newRow.append(cols);
    
          var defVal = $("select[name=acctname]").find(":selected").val();
          if (defVal) {
            $("select[name=accountName]").find(`option[value=${defVal}]`).hide();
          }
          $("table.order-list2").append(newRow);
          setValCashVal('accountName'.concat(counter));
          bindScript();
          counter++;
        });
    
        // delete function
        $("table.order-list2").on("click", ".ibtnDel", function(_event) {
          $(this).closest("tr").remove();
          counter -= 1
        });
    
      });
    
    
    
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

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/Doctor/edit_labtest.blade.php ENDPATH**/ ?>