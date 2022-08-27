
<?php $__env->startSection('content'); ?>
 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <link rel="stylesheet" href="<?php echo e(url('assets/css')); ?>/sweetalert.css">

 <style>.swal-button {

        width:fit-content;





      }


      .ledger_table ,tr,td,th {

        border-color:rgb(165, 162, 162);
        border-width:2px;
        font-size:15px;
      }

      .ledger_table, tr, td, th{

border-width:0px;
      }





    </style>

<div class="container">

	<br>
    <h2 id="manufacturing123">MANUFACTURING,</h2><h2>TRADING AND PROFIT & LOSS ACCOUNT</h2>

      <div class="table-responsive">
          <br>
          <table class="table table-striped table">
              <tr>
                  <form method="post" action="<?php echo e(url("profitandlossaccount")); ?>">
                      <?php echo csrf_field(); ?>
                  <td>From Date</td>
                  <td><input type="date" name="ledger_from" required value="<?php echo e($ledger_from); ?>"  class="form-control"></td>
                  <td>To Date</td>
                  <td><input type="date"  name="ledger_to" required value="<?php echo e($ledger_to); ?>"  class="form-control"></td>


              </tr>
              <tr>
                
                <td></td>
                <td></td>
                <td></td>
                <td>
                 <button class="btn btn-primary" type="submit"  style="width:200px; float:right;">Search</button>
                </td>

              </tr>

            </form>
          </table>

<br>







<table class="table table-striped">
    <tr>
    <th colspan="5" class="text-center"> <h5 class="manufacturing_heading">MANUFACTURING,</h5><h5>TRADING AND PROFIT & LOSS ACCOUNT</h5></th>
    </tr>
    <tr>
        <th colspan="5">
            <?php if(!empty($ledger_from)&&!empty($ledger_to)): ?>
            <h6 class="text-center"> From<strong>
                 <?php echo e(date('d M, Y',strtotime($ledger_from))); ?></strong> To <strong><?php echo e(date('d M, Y',strtotime($ledger_to))); ?></strong> </h6>
             <?php endif; ?>
                </th>

        </tr>
    <tr class="text-center" >

        <th colspan="2">Dr.</th>

        <th colspan="2">Cr.</th>
    </tr>

    <tr class="text-center">

        <th colspan="2">

            <table class="table table-striped" >
                <tr>
                    <th>Particulars</th>
                    <th>Amount</th>
                </tr>
                <?php

                    $dr_opening_stock=0;
                    $dr_production=0;

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

                <?php if($sum_debit_transaction>$sum_credit_transaction): ?>





                            <?php if($key->accounts_subcategory==1): ?>
                            <?php if($key->accounts_category==19): ?>


                            <tr class="manufacturing_heading">
                                <td style="font-size:13px;"><?php echo e("TO ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                <td style="font-size:14px;"><?php echo e($sum_debit_transaction - $sum_credit_transaction); ?></td>
                            </tr>
                                    <?php
                                        $dr_opening_stock +=$sum_debit_transaction - $sum_credit_transaction;
                                    ?>
                            <?php endif; ?>
                            <?php if($key->accounts_category==20): ?>


                            <tr class="manufacturing_heading">
                                <td style="font-size:13px;"><?php echo e("TO ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                <td style="font-size:14px;"><?php echo e($sum_debit_transaction - $sum_credit_transaction); ?></td>
                            </tr>
                                    <?php
                                        $dr_opening_stock +=$sum_debit_transaction - $sum_credit_transaction;
                                    ?>
                            <?php endif; ?>

                            <?php if($key->accounts_category<>20 && $key->accounts_category<>19): ?>


                            <tr class="manufacturing_heading">
                                <td style="font-size:13px;"><?php echo e("TO ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                <td style="font-size:14px;"><?php echo e($sum_debit_transaction - $sum_credit_transaction); ?></td>
                            </tr>
                                    <?php
                                        $dr_opening_stock +=$sum_debit_transaction - $sum_credit_transaction;
                                    ?>
                            <?php endif; ?>


                            <?php endif; ?>



                            <?php if($key->accounts_subcategory==7): ?>
                            <?php if($key->accounts_category==19): ?>


                            <tr class="manufacturing_heading">
                                <td style="font-size:13px;"><?php echo e("TO ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                <td style="font-size:14px;"><?php echo e($sum_debit_transaction - $sum_credit_transaction); ?></td>
                            </tr class="manufacturing_heading">
                                    <?php
                                        $dr_opening_stock +=$sum_debit_transaction - $sum_credit_transaction;
                                    ?>
                            <?php endif; ?>
                            <?php if($key->accounts_category==20): ?>


                            <tr class="manufacturing_heading">
                                <td style="font-size:13px;"><?php echo e("TO ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                <td style="font-size:14px;"><?php echo e($sum_debit_transaction - $sum_credit_transaction); ?></td>
                            </tr>
                                    <?php
                                        $dr_opening_stock +=$sum_debit_transaction - $sum_credit_transaction;
                                    ?>
                            <?php endif; ?>

                            <?php if($key->accounts_category<>20 && $key->accounts_category<>19): ?>


                            <tr class="manufacturing_heading">
                                <td style="font-size:13px;"><?php echo e("TO ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                <td style="font-size:14px;"><?php echo e($sum_debit_transaction - $sum_credit_transaction); ?></td>
                            </tr>
                                    <?php
                                        $dr_opening_stock +=$sum_debit_transaction - $sum_credit_transaction;
                                    ?>
                            <?php endif; ?>


                            <?php endif; ?>




                            






                    

                <?php endif; ?>

                <?php endif; ?>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                

            </table>
        </th>




        <th colspan="2">

            <table class="table table-striped">
                <tr>
                    <th>Particulars</th>
                    <th>Amount</th>
                </tr>

                <?php
                    $cr_closing_stock=0;
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

                <?php if($sum_debit_transaction<$sum_credit_transaction): ?>


                                            <?php if($key->accounts_subcategory==1 ): ?>
                                            <?php if($key->accounts_category==19 ): ?>


                                            <tr class="manufacturing_heading">
                                                <td style="font-size:13px;"><?php echo e("BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                                <td style="font-size:14px;"><?php echo e($sum_credit_transaction-$sum_debit_transaction); ?></td>
                                            </tr>
                                                    <?php
                                                        $cr_closing_stock += $sum_credit_transaction-$sum_debit_transaction;
                                                    ?>
                                            <?php endif; ?>
                                            <?php if($key->accounts_category==20 ): ?>


                                            <tr class="manufacturing_heading">
                                                <td style="font-size:13px;"><?php echo e("BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                                <td style="font-size:14px;"><?php echo e($sum_credit_transaction-$sum_debit_transaction); ?></td>
                                            </tr>
                                                    <?php
                                                        $cr_closing_stock += $sum_credit_transaction-$sum_debit_transaction;
                                                    ?>
                                            <?php endif; ?>
                                            <?php if($key->accounts_category<>20 && $key->accounts_category<>19 ): ?>


                                            <tr class="manufacturing_heading">
                                                <td style="font-size:13px;"><?php echo e("BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                                <td style="font-size:14px;"><?php echo e($sum_credit_transaction-$sum_debit_transaction); ?></td>
                                            </tr>
                                                    <?php
                                                        $cr_closing_stock += $sum_credit_transaction-$sum_debit_transaction;
                                                    ?>
                                            <?php endif; ?>
                                            <?php endif; ?>

                                            <?php if($key->accounts_subcategory==7 ): ?>
                                            <?php if($key->accounts_category==19 ): ?>


                                            <tr class="manufacturing_heading">
                                                <td style="font-size:13px;"><?php echo e("BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                                <td style="font-size:14px;"><?php echo e($sum_credit_transaction-$sum_debit_transaction); ?></td>
                                            </tr>
                                                    <?php
                                                        $cr_closing_stock += $sum_credit_transaction-$sum_debit_transaction;
                                                    ?>
                                            <?php endif; ?>
                                            <?php if($key->accounts_category==20 ): ?>


                                            <tr class="manufacturing_heading">
                                                <td style="font-size:13px;"><?php echo e("BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                                <td style="font-size:14px;"><?php echo e($sum_credit_transaction-$sum_debit_transaction); ?></td>
                                            </tr>
                                                    <?php
                                                        $cr_closing_stock += $sum_credit_transaction-$sum_debit_transaction;
                                                    ?>
                                            <?php endif; ?>

                                            <?php if($key->accounts_category<>20 && $key->accounts_category<>19 ): ?>


                                            <tr class="manufacturing_heading">
                                                <td style="font-size:13px;"><?php echo e("BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                                <td style="font-size:14px;"><?php echo e($sum_credit_transaction-$sum_debit_transaction); ?></td>
                                            </tr>
                                                    <?php
                                                        $cr_closing_stock += $sum_credit_transaction-$sum_debit_transaction;
                                                    ?>
                                            <?php endif; ?>

                                            <?php endif; ?>


                                            




                <?php endif; ?>

                <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php
                    $cr_manufacturing_bal=($dr_opening_stock+$dr_production)-$cr_closing_stock ;
                   $cost_goods_trans_to_trande= ($dr_opening_stock+$dr_production)-$cr_closing_stock
                 ?>

<?php if(!empty($cost_goods_trans_to_trande)): ?>



                <tr>
                    <td style="font-size:13px;">By Cost of Goods manufactured during<br> the year transferred to Trading A/c</td>

                    <td ><?php echo e($cost_goods_trans_to_trande); ?></td>
                </tr>

<?php else: ?>
<style>
    #manufacturing123{
    display: none;
    }
.manufacturing_heading{
display: none;
}


    </style>
 <?php endif; ?>

                

            </table>

        </th>
    </tr>











<tr>
<td></td>
<td class="text-dark"><b><?php echo e($dr_opening_stock+$dr_production); ?></b></td>
<td></td>
<td class="text-dark"><b><?php echo e(($cr_manufacturing_bal)+$cr_closing_stock); ?></b></td>
</tr>

    <tr class="text-center" >

        <th colspan="2">

            <table class="table table-striped">

                
                <?php
                                $dr_finished_goods=0;
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

                <?php if($sum_debit_transaction>$sum_credit_transaction): ?>





                            <?php if($key->accounts_subcategory==2 && $key->accounts_category<>21 ): ?>
                            <tr>
                                <td style="font-size:13px;"><?php echo e("TO ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                <td style="font-size:14px;"><?php echo e($sum_debit_transaction - $sum_credit_transaction); ?></td>
                            </tr>
                                    <?php
                                        $dr_finished_goods +=$sum_debit_transaction - $sum_credit_transaction;
                                     ?>
                            <?php endif; ?>
                            <?php if($key->accounts_category==21 ): ?>
                            <tr>
                                <td style="font-size:13px;"><?php echo e("TO ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                <td style="font-size:14px;"><?php echo e($sum_debit_transaction - $sum_credit_transaction); ?></td>
                            </tr>
                                    <?php
                                        $dr_finished_goods +=$sum_debit_transaction - $sum_credit_transaction;
                                     ?>
                            <?php endif; ?>



                <?php endif; ?>

                <?php endif; ?>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php if(!empty($cr_manufacturing_bal)): ?>
                <tr>
                    <td>
                      To Cost of Goods manufactured during the year transferred from Manufacturing A/c
                    </td>
                    <td>
                        <?php echo e($cr_manufacturing_bal); ?>

                    </td>
                </tr>
<?php endif; ?>

            </table>
        </th>


        <th colspan="2">

            <table class="table table-striped">


                <?php
                    $cr_closing_stock=0;
                    $cr_trading=0;
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

                <?php if($sum_debit_transaction<$sum_credit_transaction): ?>


                                            <?php if($key->accounts_subcategory==3 && $key->accounts_category==14 ): ?>
                                            <tr>
                                                <td style="font-size:13px;"><?php echo e("BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                                <td style="font-size:14px;"><?php echo e($sum_credit_transaction-$sum_debit_transaction); ?></td>
                                            </tr>
                                                    <?php
                                                        $cr_trading += $sum_credit_transaction-$sum_debit_transaction;
                                                    ?>
                                            <?php endif; ?>

                                            <?php if($key->accounts_subcategory==3 && $key->accounts_category==15 ): ?>
                                            <tr>
                                                <td style="font-size:13px;"><?php echo e("BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                                <td style="font-size:14px;"><?php echo e($sum_credit_transaction-$sum_debit_transaction); ?></td>
                                            </tr>
                                                    <?php
                                                        $cr_trading += $sum_credit_transaction-$sum_debit_transaction;
                                                    ?>
                                            <?php endif; ?>

                                             <?php if($key->accounts_subcategory==3 && $key->accounts_category==16 ): ?>
                                            
                                            

                                            <?php endif; ?>




                <?php endif; ?>

                <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                
            </table>

        </th>
    </tr>












    <tr>

    </tr>
    <tr>
        
                    <td><b>To Gross Profit c/d </b></td>
                    <td class="text-right" style="text-align:right"><b> <?php echo e($cr_trading-($dr_finished_goods+$cr_manufacturing_bal)); ?>  </b> </td>
                
<td></td>
<td></td>
                
            
    </tr>
<tr>
<td></td>
<td class="text-dark text-right" style="text-align:right" ><b><?php echo e($cr_trading); ?></b></td>
<td></td>
<td class="text-dark text-right" style="text-align:right"><b><?php echo e($cr_trading); ?></b></td>
</tr>
    <tr>
        <th colspan="2">
            <table class="table table-striped">
                <?php
                    $expanse=0;
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

                            <?php if($sum_debit_transaction>$sum_credit_transaction): ?>


                                                        <?php if($key->accounts_subcategory==4  ): ?>
                                                        <tr>
                                                            <td style="font-size:13px;"><?php echo e("BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                                            <td style="font-size:14px;"><?php echo e($sum_debit_transaction-$sum_credit_transaction); ?></td>
                                                        </tr>
                                                                <?php
                                                                    $expanse+= $sum_debit_transaction-$sum_credit_transaction;
                                                                ?>
                                                        <?php endif; ?>

                                                        <?php if($key->accounts_subcategory==11 ): ?>
                                                        <tr>
                                                            <td style="font-size:13px;"><?php echo e("BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                                            <td style="font-size:14px;"><?php echo e($sum_debit_transaction - $sum_credit_transaction); ?></td>
                                                        </tr>
                                                        <?php
                                                            $expanse +=$sum_debit_transaction-$sum_credit_transaction;
                                                        ?>

                                                        <?php endif; ?>






                            <?php endif; ?>


                            <?php endif; ?>


                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                        
                        </td>
                

            </table>
        </th>


        <th colspan="2">
        <table class="table table-striped">

        <tr>
        <td>By Gross Profit b/d</td>
        <td><?php echo e($cr_trading-($dr_finished_goods+$cr_manufacturing_bal)); ?></td>
        </tr>

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

                    <?php if($sum_debit_transaction<$sum_credit_transaction): ?>


                                                <?php if($key->accounts_subcategory==3 && $key->accounts_category==16): ?>
                                                <tr>
                                                    <td style="font-size:13px;"><?php echo e("BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "); ?></td>
                                                    <td style="font-size:14px;"><?php echo e($sum_credit_transaction-$sum_debit_transaction); ?></td>
                                                </tr>
                                                        <?php
                                                            $cr_trading += $sum_credit_transaction-$sum_debit_transaction;
                                                        ?>
                                                <?php endif; ?>




                    <?php endif; ?>

                    <?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




        </table>

        </th>

    </tr>
    <tr>
<td><b>To Net Profit</b></td>
<td><?php
    $subvalue=$dr_finished_goods+$cr_manufacturing_bal;
    $final_values= $cr_trading-$subvalue;
?>
    <b><?php echo e($final_values-$expanse); ?></b></td>
<td></td>
<td></td>
    </tr>
        <tr>
            <td width="55%"></td>
            <td class="text-dark text-right"><b><?php echo e(($final_values-$expanse)+$expanse); ?></b></td>
            <td width="55%"></td>
            <td class="text-dark text-right"><b><?php echo e($cr_trading-($dr_finished_goods+$cr_manufacturing_bal)); ?></b></td>
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




<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/Accounts/profitandloss.blade.php ENDPATH**/ ?>