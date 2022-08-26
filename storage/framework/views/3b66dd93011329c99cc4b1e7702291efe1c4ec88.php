
<?php $__env->startSection('content'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>


  


</head>

<body>

        <h4 class="text-center"><b><u>Inventory Management Method</u></b></h4>


<div class="tab-content" id="myTabContent">

    <div class="tab-pane fade show active" id="" role="" aria-labelledby="">
        


        
        <table class="table table-hover">

            <thead>
              <tr>
                <th>Method</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $met): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr id="data">
                <td><?php echo e($met->stock_method); ?></td>
                <input type="hidden" value="<?php echo e($met->id); ?>" id="hideinvtid">
                <a type="button" href="<?php echo e(url('accounting_method'.$met->id)); ?>" class="edits" data-toggle="modal"
                      data-bs-toggle="modal"
                    data-bs-target="#edit"></a>


                        <td> <?php if($met->id==$method[0]->accounting_method): ?>

                        <button type="button" class="btn btn-success" enabled style="width:50%">Activated</button>
                    </td>

                    <?php else: ?>
                        <button type="button" class="btn btn-danger"  data-toggle="modal"

                         data-target='<?php echo e(($method[0]->accounting_method>0) ? "":" #myModal"); ?>'

                     id="edit_methodz" style="width:50%">Activate</button>

                    <?php endif; ?>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
        <br>

        <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title"><b>Inventory Method</b></h4>
        </div>
        <div class="modal-body">
          <p>First submit your profit margin and after select the Inventory method.Once select an Inventory method you cant rechanged.</p>
        </div>
        <form method="post" action="<?php echo e(url('accounting_method')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
        <div class="modal-footer">
            <input type="hidden" id="edit_method_modalzz" name="edit_method_modalzz">
            <button type="button" class="btn btn-primary text-white" style="width:30%;background-color:#435ebe" data-dismiss="modal">Close</button>
            <button type="submit" href="" style="width:30%;background-color:#435ebe" class="btn btn-primary text-white">Accept</button>

        </div>
        <input type="hidden" class="form-control" id="edit_method" name="hiddenid">
    </form>
      </div>
    </div>
</div>

</div>
</div>



<script>
    $(document).on('click','#edit_methodz',function(){

        var method_id = $(this).closest('#data').find('#hideinvtid').val();

        $("#edit_method_modalzz").val(method_id);
});
</script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/store/inventory_method.blade.php ENDPATH**/ ?>