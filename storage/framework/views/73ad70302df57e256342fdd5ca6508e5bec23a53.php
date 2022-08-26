
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
    <h2>Ledger</h2>

      <div class="table-responsive">
          <br>
          <table class="table table-striped table">
              <tr>
                  <form method="post" action="<?php echo e(url("ledger")); ?>">
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
                     <option value="<?php echo e($acc->id); ?>" <?php echo e(($ledger_account==$acc->id) ? "selected" :""); ?>  > <?php echo e($acc->accounts_name." [ ".$acc->ledgeraccount_subcategories." ] "); ?></option>
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



<table class="table table-striped">

<tr>
<th colspan="2">
 <h6 class="text-center">
 <?php echo e(strtoupper($key->accounts_name." [ ".$key->ledgeraccount_subcategories." ] ")); ?>

 </h6>
</th>
</tr>

<tr>
    <th>
                    <table class="table .table-bordered" border="2">


                    <tr>
                        <th>Date</th>
                        <th>Particulars</th>
                        <th>Amount</th>
                    </tr>



                    <?php $__currentLoopData = $debit_transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $debit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e(date('M d Y ',strtotime($debit->journal_date))); ?>


                        </td>
                        <td>
                            <?php
                                $crediter_name = DB::table('journal_items as q')
                                ->Leftjoin('journal_transactions','journal_transactions.id','=','q.journal_items_transaction')
                                ->Leftjoin('ledgeraccounts','ledgeraccounts.id','=','q.journal_transaction_account')
                                ->where('q.journal_items_type',1)
                                ->where('journal_items_transaction',$debit->journal_items_transaction)
                                ->whereBetween('journal_transactions.journal_date', [$ledger_from, $ledger_to])
                                ->select('accounts_name')
                                ->first();
                            ?>
                             <?php echo e("To  ".$crediter_name->accounts_name." A/c"); ?>

                        </td>


                        <td>
                            <?php echo e($debit->journal_items_amount); ?>

                        </td>


                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($sum_debit_transaction<$sum_credit_transaction): ?>
                    <tr>
                        <td>
                            <?php echo e(date('M d Y',strtotime($ledger_to))); ?>

                        </td>
                        <td>

                <?php switch($key->accounts_subcategory):
                    case (2): ?>
                <?php echo e("To Trading Account c/d"); ?>

                        <?php break; ?>
                     <?php case (3): ?>
                        <?php echo e("To P & L Account c/d"); ?>

                                <?php break; ?>
                     <?php case (4): ?>
                            <?php echo e("To P & L Account c/d"); ?>

                                 <?php break; ?>
        

                    <?php default: ?>
                    <?php echo e("To Balance c/d"); ?>

                <?php endswitch; ?>

                        </td>
                        <td>
                            <?php echo e($sum_credit_transaction - $sum_debit_transaction); ?>

                        </td>
                    </tr>
                    <?php endif; ?>

                    

                    </table>

    </th>
<th>
                    <table class="table .table-bordered ledger_table" border="2" >
                                        <tr>
                                            <th>Date</th>
                                            <th>Particulars</th>
                                            <th>Amount</th>
                                        </tr>
                                        <?php $__currentLoopData = $credit_transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $credit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <?php
                                            $debitor_name = DB::table('journal_items as q')
                                            ->Leftjoin('journal_transactions','journal_transactions.id','=','q.journal_items_transaction')
                                            ->Leftjoin('ledgeraccounts','ledgeraccounts.id','=','q.journal_transaction_account')
                                            ->where('q.journal_items_type',2)
                                            ->where('journal_items_transaction',$credit->journal_items_transaction)
                                            ->whereBetween('journal_transactions.journal_date', [$ledger_from, $ledger_to])
                                            ->select('*')
                                            ->get()
                                        ?>



                                        <?php $__currentLoopData = $debitor_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e(date('M d Y ',strtotime($credit->journal_date))); ?>


                        </td>
                        <td>





                             <?php echo e("By  ".$deb->accounts_name." A/c"); ?>



                        </td>


                        <td>
                            <?php echo e($deb->journal_items_amount); ?>

                        </td>


                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($sum_debit_transaction>$sum_credit_transaction): ?>
                    <tr>
                        <td>
                            <?php echo e(date('M d Y',strtotime($ledger_to))); ?>

                        </td>
                        <td>
                          


                          <?php switch($key->accounts_subcategory):
                          case (2): ?>
                      <?php echo e("By Trading Account c/d"); ?>

                              <?php break; ?>

                              <?php case (3): ?>
                      <?php echo e("By P & L Account c/d"); ?>

                              <?php break; ?>

                              <?php case (4): ?>
                      <?php echo e("By P & L Account c/d"); ?>

                              <?php break; ?>

                          <?php default: ?>
                          <?php echo e("By Balance c/d"); ?>

                      <?php endswitch; ?>
                        </td>
                        <td>
                            <?php echo e($sum_debit_transaction - $sum_credit_transaction); ?>

                        </td>
                    </tr>
                    <?php endif; ?>
                    
                                        </table>

                    </th>
                    </tr>
<tr>
<td style="text-align:right;">
   <b><h5> <?php echo e(max($sum_credit_transaction,$sum_debit_transaction)); ?></h5></b>
</td>
<td style="text-align:right;">
    <b><h5> <?php echo e(max($sum_credit_transaction,$sum_debit_transaction)); ?></h5></b>
</td>
</tr>

                    </table>

<br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





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
                  //  url:"<?php echo e(route('delete_full_journal_transaction')); ?>",
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




<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/Accounts/ledger.blade.php ENDPATH**/ ?>