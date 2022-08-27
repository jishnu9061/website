
<?php $__env->startSection('content'); ?>
<div class="container">
             <div class="content">
                <div class="mheader">
                        <h5 class="modal-title bb" id="myModalLabel1">Add Patient's Lab Tests</h5>
                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                   <form action="<?php echo e(url('alllabtests')); ?>" method="post">
                                     <?php echo csrf_field(); ?>
                                    <div class="modal-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                          <div class="form-group mb-3">
                            <label>Patient's Id</label>
                      <input type="text" class="form-control" name="id" placeholder="" required>
                        </div>
                                            </div>
                                            <div class="col-md-3">
                         <div class="form-group mb-3">
                            <label>Patient's Name</label>
                      <input type="text" class="form-control" name="name" placeholder="" required>
                        </div>
                                            </div>
                                             <div class="col-md-3">
                           <div class="form-group mb-3">
                            <label>Patient's Phone Number</label>
                      <input type="text" class="form-control" name="phoneno" placeholder="" required>
                        </div>
                                            </div>
                                             <div class="col-md-3">
                            <div class="form-group mb-3">
                            <label>Patient's Address</label>
                      <input type="text" class="form-control" name="address" placeholder="">
                        </div>
                                            </div>
                                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                  <table class="table table-borderless  order-list" id="tab_logic">
                                            <thead>
                                                <tr>
                                                    <th>Tests</th>
                                           <th></th>

                                                </tr>

                                            </thead>
                                                <tbody>
                                                    <tr>
                                             <td style="width:auto"> <select class="form-control select_group product"data-row-id="row_3" id="              product_detailes" name="testname[]"  style="width:100%;"  ><option selected>Select</option><?php foreach ($labtests as $key):?>
                                            <option value="<?php echo $key->name ?>"><?php echo $key->name;?></option>
                                                                        <?php endforeach;?>
                                                                    </select>
                                                        </td>


                                                        <td> <input type="button" class="add_Row adRow" id="add_Row" value="Add"></td>
                                                    </tr>
                                                </tbody>
                                        </table>
                            </div>
                            <div class="col-md-6">
                                      <table class="table table-borderless  order-list2" id="tab_logic">
                                            <thead>
                                                <tr>
                                                    <th>Profiles</th>
                                           <th></th>

                                                </tr>

                                            </thead>
                                                <tbody>
                                                    <tr id="z">
                                             <td style="width:auto" id="x"> <select class="form-control select_group product"data-row-id="row_3" id="              product_detailes" name="profilename[]" style="width:100%;" ><option selected>Select</option><?php foreach ($labprofiles as $key):?>
                                            <option value="<?php echo $key->id ?>" ><?php echo $key->name;?></option>
                                                                        <?php endforeach;?>
                                                                    </select>
                                                        </td>


                                                        <td>
                                                            <button type="button" class="add_Row adRow" id="add_Row_again">
                                                                <i class="fas fa-plus"></i>
                                                            </button></td>
                                                    </tr>
                                                </tbody>
                                        </table>
                            </div>
                        </div>

                        </div>
                        </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" >Save</button>

                                    </div>
                                      </form>
                                </div>


</div>
<script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>

<!-- Table add row -->
<script type="text/javascript">
  $(document).ready(function() {
  var counter = 0;

  $("#add_Row").on("click", function() {
    var newRow = $("<tr>");
    var cols = "";

    cols +='<td><select name="testname[]" class="form-control select2" style="width:100%;><option value="">Select</option> <?php foreach($labtests as $row):?><option value="<?php echo $row->name ;?>"><?php echo $row->name;?> </option><?php endforeach;?></select></td>'

    cols += '<td><button type="button" class="add_Row adRow ibtnDel " style="width:auto;"><i class="fas fa-backspace"></i></button></a></td>';
    newRow.append(cols);

    var defVal = $("select[name=acctname]").find(":selected").val();
    if (defVal) {
      $("select[name=accountName]").find(`option[value=${defVal}]`).hide();
    }
    $("table.order-list").append(newRow);
    setValCashVal('accountName'.concat(counter));
    bindScript();
    counter++;
  });

  // delete function
  $("table.order-list").on("click", ".ibtnDel", function(_event) {
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

    cols +='<td><select name="profilename[]" class="form-control select2" style="width:100%;><option value="">Select</option> <?php foreach($labprofiles as $row):?><option value="<?php echo $row->name ;?>"><?php echo $row->name;?> </option><?php endforeach;?></select></td>'

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
    $(function () {
  $('[data-toggle="popover"]').popover()
  })
    $(document).on('click','#h',function(){
    //var itemvalue = $(this).val();
   var vw = $(this).closest('#data').find('#name').text();
    $("#gfh").val(h);
  });
  </script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/lab/labtestpat.blade.php ENDPATH**/ ?>