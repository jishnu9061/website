
<?php $__env->startSection('content'); ?>
 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <link rel="stylesheet" href="<?php echo e(url('assets/css')); ?>/sweetalert.css">

 <style>.swal-button {

        width:fit-content;





      }

      .ledger_table ,tr,td,th {

        border-color:rgb(165, 162, 162);
        border-width:2px;
      }
    </style>

<div class="container">

	<br>
    <h2>Trial Balance</h2>

      <div class="table-responsive">
          <br>
          <table class="table table-striped table">
              <tr>
                  <form method="post" action="<?php echo e(url("trialbalance")); ?>">
                      <?php echo csrf_field(); ?>
                  <td>From Date</td>
                  <td><input type="date" name="ledger_from" required value="<?php echo e($ledger_from); ?>"  class="form-control"></td>
                  <td>To Date</td>
                  <td><input type="date"  name="ledger_to" required value="<?php echo e($ledger_to); ?>"  class="form-control"></td>


              </tr>
              <tr>
                <td>Account</td>
                <td colspan="2">

                 <select class="form-control" name="ledger_account" >
                    <option value=""> Select Account</option>
                    <?php $__currentLoopData = $account; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
                     <option value="<?php echo e($acc->id); ?>" <?php echo e(($ledger_account==$acc->id) ? "selected" :""); ?>  >
                         <?php echo e(strtoupper($acc->accounts_name." [ ".$acc->ledgeraccount_subcategories." ] ")); ?>


                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;

                </select>

                </td>
                <td>
                 <button class="btn btn-primary" type="submit"  style="width:fit-content;">Search</button>
                </td>

              </tr>

            </form>
          </table>

<br>




<table class="table table-striped">
    <tr>
    <th colspan="3"> <h5 class="text-center">TRIAL BALANCE</h5></th>
    </tr>
    <tr>
        <th colspan="3">
            <?php if(!empty($ledger_from)&&!empty($ledger_to)): ?>
            <h6 class="text-center"> From<strong>
                 <?php echo e(date('d M, Y',strtotime($ledger_from))); ?></strong> To <strong><?php echo e(date('d M, Y',strtotime($ledger_to))); ?></strong> </h6>
             <?php endif; ?>
                </th>

        </tr>
    <tr class="text-center">
        <th>Particulars</th>
        <th>Dr.</th>
        <th>Cr.</th>
    </tr>
    <?php
    $dr_sum=0;
    $cr_sum=0;
    ?>
    <?php $__currentLoopData = $ledger_account_result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


    <?php



    $debit_transactions = DB::table('journal_items as q')
                    ->Leftjoin('journal_transactions','journal_transactions.id','=','q.journal_items_transaction')
                    ->Leftjoin('ledgeraccounts','ledgeraccounts.id','=','q.journal_transaction_account')
                    ->where('q.journal_items_type',2)
                    ->where('journal_transaction_account',$key->id)
                    ->whereBetween('journal_transactions.journal_date', [$ledger_from, $ledger_to])
                    ->orderBy('q.journal_items_addedon', 'asc')
                    ->get();

    $sum_debit_transaction=DB::table('journal_items as q')
        ->Leftjoin('journal_transactions','journal_transactions.id','=','q.journal_items_transaction')
        ->where('journal_transaction_account',$key->id)
        ->where('q.journal_items_type',2)
        ->whereBetween('journal_transactions.journal_date', [$ledger_from, $ledger_to])
        ->sum('q.journal_items_amount');



     $credit_transactions = DB::table('journal_items as q')
                    ->Leftjoin('journal_transactions','journal_transactions.id','=','q.journal_items_transaction')
                    ->Leftjoin('ledgeraccounts','ledgeraccounts.id','=','q.journal_transaction_account')
                    ->where('q.journal_items_type',1)
                    ->where('journal_transaction_account',$key->id)
                    ->whereBetween('journal_transactions.journal_date', [$ledger_from, $ledger_to])
                    ->orderBy('q.journal_items_addedon', 'asc')
                    ->get();

     $sum_credit_transaction=DB::table('journal_items as q')
                    ->Leftjoin('journal_transactions','journal_transactions.id','=','q.journal_items_transaction')
                    ->where('journal_transaction_account',$key->id)
                    ->where('q.journal_items_type',1)
                    ->whereBetween('journal_transactions.journal_date', [$ledger_from, $ledger_to])
                    ->sum('journal_items_amount');




?>
<?php if($sum_debit_transaction < $sum_credit_transaction || $sum_debit_transaction > $sum_credit_transaction): ?>
    <tr>
        <td>
            <?php echo e(strtoupper($key->accounts_name." [ ".$key->ledgeraccount_subcategories." ] ")); ?>

        </td>
        <td class="text-center">

            <?php if($sum_debit_transaction>$sum_credit_transaction): ?>

            
            <?php
                $dr_sum += $sum_debit_transaction - $sum_credit_transaction;
            ?>

              <?php echo e($sum_debit_transaction - $sum_credit_transaction); ?>


      <?php endif; ?>

        </td>
        <td class="text-center"> <?php if($sum_debit_transaction<$sum_credit_transaction): ?>

            
            <?php

            $cr_sum += $sum_credit_transaction-$sum_debit_transaction;

            ?>


            <?php echo e($sum_credit_transaction-$sum_debit_transaction); ?>


             <?php endif; ?></td>
    </tr>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr class="text-center">
        <td></td>
        <td><strong><?php echo e($dr_sum); ?></strong></td>
        <td><strong><?php echo e($cr_sum); ?></strong></td>
    </tr>

</table>








      </div>
</div>







 <script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
<script src="<?php echo e(url('assets/js')); ?>/sweetalert.min.js"></script>

<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
  })
  </script>



<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/Accounts/trial_balance.blade.php ENDPATH**/ ?>