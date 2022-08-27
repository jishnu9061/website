
<?php $__env->startSection('content'); ?>
 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <link rel="stylesheet" href="<?php echo e(url('assets/css')); ?>/sweetalert.css">

 <style>.swal-button {

        width:fit-content;

      }
    </style>

<div class="container">

	<br>
    <h2>Journal</h2>

        <a href="<?php echo e(url("create_transaction")); ?>"><button  class="btn btn-primary"> Create Transaction</button></a>

      <div class="table-responsive">
          <br>
          <table class="table table-striped ">
              <tr>
                  <form method="post" action="<?php echo e(url("journal")); ?>">
                      <?php echo csrf_field(); ?>
                  <td>From Date</td>
                  <td><input type="date" value="<?php echo e($journal_from); ?>"  name="journal_from" required  class="form-control"></td>
                  <td>To Date</td>
                  <td><input type="date" value="<?php echo e($journal_to); ?>"   name="journal_to" required class="form-control"></td>
                  <td><button class="btn btn-primary" type="submit" value="search" style="width:fit-content;">Search</button></td>
                  
                </form>
              </tr>
          </table>
<table class="table table-striped" id="allpatients" style="margin-top: 40px; margin-bottom:0px; border-color:black; padding:0;">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Date</th>
        <th>

         <table class="table  border-none shadow-none" style="margin-bottom:0px" >
      <tr>

      <th>Purticulars</th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th>Debit</th>

      <th>Credit</th>


      </tr>
      </table>



        </th>
      
      <th scope="col">Action</th>

    </tr>
       <tr>
      <th scope="col"></th>
      <th scope="col"></th>
        <th>

    <table class="table table" >

      </table>
        </th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
<?php
$no=1;
?>
 <?php $__currentLoopData = $journal_transaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php

         $journal_debit_items=DB::table('journal_items as q')
        ->Leftjoin('ledgeraccounts as a', 'a.id', '=', 'q.journal_transaction_account')
        ->Leftjoin('ledgeraccount_subcategories as z', 'z.id', '=', 'a.accounts_subcategory')
        ->Leftjoin('ledgeraccount_categories as b', 'b.id', '=', 'a.accounts_category')
        ->select('q.*','q.id as journal_id','b.ledgeraccount_categories as cat_name', 'a.accounts_name as from_name','a.id as from_id','z.ledgeraccount_subcategories as subcat_name')
        ->where('q.journal_items_transaction',$jr->transaction_id)
        ->orderBy('q.journal_items_type', 'desc')
        ->get();

            ?>

           

      <tr class="product_data" class="data">
          <td id="name"><?php echo e($no++); ?></td>
          <td ><?php echo e(date('d M Y',strtotime($jr->journal_date))); ?></td>
          <td>
                            <table class="table table" >
                            <tr>
                                    <th></th>
                                <th></th>
                                <th></th>

                                <th></th>

                            </tr>


                            <?php $__currentLoopData = $journal_debit_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>


                                <td>

                                <?php if($key->journal_items_type==1): ?>
                                To  <?php echo e(ucfirst($key->from_name." [ ".$key->cat_name." ] ")); ?> A/c &nbsp;   <br>
                                 <?php elseif($key->journal_items_type==2): ?>
                                <?php echo e(ucfirst($key->from_name." [ ".$key->cat_name." ] ")); ?> A/c &nbsp; Dr.<br>

                                <?php endif; ?>


                                </td>
                                <td>

                                    <?php if($key->journal_items_type==2): ?>
                                    <?php echo e($key->journal_items_amount); ?>

                                    <?php endif; ?>

                                    </td>


                                <td>
                                <?php if($key->journal_items_type==1): ?>

                                <?php echo e($key->journal_items_amount); ?>


                                <?php endif; ?>

                                </td>







                                </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                                <br>
                                <?php echo e("( ".$jr->journal_narration." )"); ?>


          </td>
             
                 <td>

                    <a href="<?php echo e(url('edit_journal/').$jr->transaction_id); ?>" class="edits" ><i class="fas fa-edit" ></i></a>
                   <a onclick="delete_journal(<?php echo e($jr->transaction_id); ?>)"><i class="fas fa-trash-alt"></i></a></td>
      </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



  </tbody>

</table>


<div style="float:right; margin-top:10px;">
<?php echo $journal_transaction->links(); ?>


Showing <?php echo e($journal_transaction->firstItem()); ?>–<?php echo e($journal_transaction->lastItem()); ?> of <?php echo e($journal_transaction->total()); ?> results
</div>

      </div>
</div>







 <script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
<script src="<?php echo e(url('assets/js')); ?>/sweetalert.min.js"></script>

<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
  })
  </script>

  <script>



      function delete_journal(value){

                            swal({
                    title: "Are you sure?",
                    text: "Once deleted,The complete datas in that trasnsaction will be deleted!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {



                        swal("Poof! Transaction has been deleted!", {
                        icon: "success",
                        });

                        $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });

                    $.ajax({
                    url:"<?php echo e(route('delete_full_journal_transaction')); ?>",
                    type:"POST",
                    data: {
                        journal_transaction_id: value,
                    },
                    success:function (data) {
                        //console.log(data);
                        if(data.response="success"){

                            swal({title: "Success!",
                            text: "You Deleted the Transaction!",
                            icon: "success",
                            button: "OK"})
                            .then((value) => {
                            window.location.reload();
                            });


                        }
                    }
                    })



                    } else {
                        swal("Not Deleted!");
                    }
                    });
      }
  </script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\erp-globaleyet\resources\views/Accounts/journal.blade.php ENDPATH**/ ?>