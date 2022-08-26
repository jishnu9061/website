
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
         <h3 style="text-align:center"><b><u>Maufacturer Paid Details</u></b></h3><br>


      </div>

    <br>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <table class="table table-hover" id="allsupplier">
                <thead>
                    <tr>
                        <th class="text-center">Paid Date</th>
                        <th class="text-center">Amount</th>
                    </tr>
                </thead>
                <tbody>

                     <?php $__currentLoopData = $installment_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr id="data">
                             <input type="hidden" name="id" id="" value="<?php echo e($details->purchase_id); ?>">
                            <td  class="text-center" style="width:15%"><input type="text" value="<?php echo e($details->manufact_paid_date); ?>"  name="expiry_date[]" class="form-control text-center" readonly ></td>
                            <td  class="text-center" style="width:18%"><input type="text" value="<?php echo e($details->amount); ?>"  name="expiry_date[]" class="form-control text-center" readonly></td>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tr>

                </tbody>
            </table>
            



<script>
	function myFunction(){
		if(!confirm("Are you sure to delete this"))
		event.preventDefault();
	}
</script>
<!-- End delete confirmation message -->

<script>
    $(document).ready(function(){
             $('.searchingBook').select2();
    });
 </script>


<script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
    $(function(){
      $("#allsupplier").dataTable();
    })
  </script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\erp-globaleyet\resources\views/store/view_mamufacturer_installment_details.blade.php ENDPATH**/ ?>