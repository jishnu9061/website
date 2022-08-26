
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
        <h4 class="text-center">Payment List</h4>
       <br>
       <button type="button" class="btn btn-primary" style="background-color:#435ebe;width:35%;"data-toggle="modal" data-target="#myModal"><b>Add Payment Type</b></button>
       

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header" style="background-color:#435ebe">
                <h5 class="text-white">Add Payment Type</h5>

              </div>

              <!-- Modal body -->
              <div class="modal-body">
                    <div class="container">
                        <form method="post" action="<?php echo e(url('add_payment_type')); ?>">
                            <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="payment_name" class="form-control" placeholder="Payment Name" required><br>
                            </div>
                        </div>
                    </div>
                    <div class="container">

                    </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-primary"  style="background-color:#435ebe;width:35%;" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" style="background-color:#435ebe;width:25%;">Save</button>
              </div>
            </form>

            </div>
          </div>
        </div>

      </div>

    <br>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <table class="table table-bordered" id="allsupplier">
                <thead>
                    <tr>
                        <th class="text-center">Payment Id</th>
                        <th class="text-center">Payment Type Name</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>

                    </tr>
                </thead>
                <tbody>
                         <?php $__currentLoopData = $payment_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <tr id="data">
                            <td class="text-center"><?php echo e($data->payment_id); ?></td>
                            <td class="text-center" id="payment_type"><?php echo e($data->payment_name); ?></td>
                              <input type="hidden" value="<?php echo e($data->payment_id); ?>" id="payment_type_id" class="applicate" name="payment_type_id">

                              <td class="text-center"><a href="<?php echo e(url('edit_payment_type'.$data->payment_id)); ?>" class="edits" data-toggle="modal" id="edit_payment_type" data-bs-toggle="modal"
                                data-bs-target="#edit"><i class="fas fa-edit" style="color:#435ebe;"></i></a></td>

                            <td class="text-center"><a  onClick="return myFunction();" href="<?php echo e(url('delete_payment_type'.$data->payment_id)); ?>" style="color:#435ebe;"><i class="fas fa-trash-alt"></i></a></td>
                         </tr>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
            


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#435ebe">
          <h6 class="text-white" >Edit Payment Type</h6>
          <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" enctype="multipart/form-data" action="<?php echo e(url('update_payment_type')); ?>" >
          <?php echo csrf_field(); ?>
        <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                                <input type="text" class="form-control" id="edit-payment-type" name="edit_payment_type" placeholder="Payment Type" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <input type="hidden"  id="edit-payment-id" name="edit_payment_id">

                        </div>
                    </div>


                </div>

                <div class="modal-footer">
                            <button type="button" class="btn btn-primary text-white"   style="width:40%;background-color:#435ebe"  data-bs-dismiss="modal">Close</button>
                            <button type="submit" style="width:50%;background-color:#435ebe"  class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<!-- Supplier modal Edit End -->
</div>
<!-- Delete  confirmation Message -->
<script>
	function myFunction(){
		if(!confirm("Are you sure to delete this"))
		event.preventDefault();
	}
</script>
<!-- End delete confirmation message -->
</div>


<script>
    $(document).ready(function(){
             $('.searchingBook').select2();
    });
 </script>


<!-- Supplier Pagenation -->
<script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
    $(function(){
      $("#allsupplier").dataTable();
    })
  </script>


<script>
    $(document).on('click','#edit_payment_type',function(){

        var payment_id = $(this).closest('#data').find('#payment_type_id').val();
        var payment_name = $(this).closest('#data').find('#payment_type').text();

        $("#edit-payment-type").val(payment_name);
        $("#edit-payment-id").val(payment_id);
});
</script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/store/create_payment_type.blade.php ENDPATH**/ ?>