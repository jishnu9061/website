
<?php $__env->startSection('content'); ?>
<div class="container">

    <style>.swal-button {

        width:fit-content;





      }
    </style>
    
    <link rel="stylesheet" href="<?php echo e(url('assets/css')); ?>/sweetalert.css">

	<br>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <h3>Edit Transaction</h3>
    
    <hr>
    <form id="journal_form" method="POST" >
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
         <h5>Date of Transaction</h5>
        </div>
      
        <div class="col-md-3">
            <div class="form-group mb-3">
                <input type="date" value="<?php echo e(date('Y-m-d',strtotime($journal_transaction->journal_date))); ?>" class="form-control" name="journal_date" id="journal-date"  required>
            </div>
<?php echo csrf_field(); ?>
        </div>


    </div>
    <div class="row">
        <div class="col-md-6"> <h4>DEBIT</h4> </div>
        <div class="col-md-6"><h4>CREDIT</h4> </div>
    </div>
    <div class="row">

        <div class="col-md-6">
            <table class="table table-striped" id="update_credit_table">
                <tr>

                    <th>ACCOUNT</th>
                    <th>AMOUNT</th>
                    <th>ACTION</th>
                </tr>
                <?php $__currentLoopData = $journal_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $journal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($journal->journal_items_type==2): ?>
                <tr>
                    <td>
                        <select class="form-control"  name="edit_credit_company[]" >
                            <option value=""> Select Account</option>
                            <?php $__currentLoopData = $account; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value="<?php echo e($acc->id); ?>" <?php echo e(($acc->id == $journal->journal_transaction_account) ? "selected" : ""); ?> > <?php echo e($acc->accounts_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;

                        </select>

                    </td>
                    <td>
                        <input type="text" onchange="total_credit_amount()" name="edit_credit_amount[]"  value="<?php echo e($journal->journal_items_amount); ?>" class="form-control credit_amount_update">

                    </td>
                    <td>
                        <input type="hidden" name="edit_credit_trans_item[]" value="<?php echo e($journal->journal_id); ?>">

                        <button  type="button"  class="form-control btn-danger delete"  value="<?php echo e($journal->journal_id); ?>" ><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table table-striped" id="update_debit_table">
                <tr>

                    <th>ACCOUNT</th>
                    <th>AMOUNT</th>
                    <th>ACTION</th>
                </tr>
                <?php $__currentLoopData = $journal_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $journal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($journal->journal_items_type==1): ?>
                <tr>
                    <td>
                        <select class="form-control" name="edit_debit_company[]" >
                            <option value=""> Select Account</option>
                            <?php $__currentLoopData = $account; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value="<?php echo e($acc->id); ?>" <?php echo e(($acc->id == $journal->journal_transaction_account) ? "selected" : ""); ?> > <?php echo e($acc->accounts_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;

                        </select>

                    </td>
                    <td>
                        <input type="text" name="edit_debit_amount[]"  onchange="total_debit_amount()" value="<?php echo e($journal->journal_items_amount); ?>" class="form-control debit_amount_update">

                    </td>
                    <td>
                        <input type="hidden" name="edit_debit_trans_item[]" value="<?php echo e($journal->journal_id); ?>">
                        <button  type="button" class="form-control btn-danger delete" value="<?php echo e($journal->journal_id); ?>" ><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>

    <div class="row">


        <div class="col-md-6">
            <table class="table table-striped"  id="credit_table">
                <tr>


                </tr>
                <tr>


                    <td width="50%"><select class="form-control"  id="credit-to-select" >
                        <option value=""> Select Account</option>
                        <?php $__currentLoopData = $account; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
                         <option value="<?php echo e($acc->id); ?>"> <?php echo e($acc->accounts_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;

                    </select></td>
                    <td><input type="text"  id="credit_amount" class="form-control"></td>

                    <td><button type="button" class="form-control" onclick="add_credit()" >+</button></td>

                </tr>
            <hr/>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table table-striped" id="debit_table">
                <tr>
                </tr>
                <tr >

                   <td width="50%">
                   <select class="form-control"  id="debit-from-select">
                       <option value=""> Select Account</option>
                       <?php $__currentLoopData = $account; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
                        <option value="<?php echo e($acc->id); ?>"> <?php echo e($acc->accounts_name); ?></option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;

                   </select></td>

                   <td><input type="text" id="debit_amount" class="form-control"></td>
                   <td><button  type="button" class="form-control" onclick="add_debit()" >+</button></td>
               </tr>
   <hr/>
            </table>
           </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <table class="table table-striped table">
            <tr>
                <th>Debit Total</th>
                <th><input type="text" readonly="readonly" id="credit_total_amount" class="form-control"></th>

            </tr>
        </table>
        </div>
        <div class="col-md-6">
            <table class="table table-striped table">
                <tr>
                    <th>Credit Total</th>
                    <th><input type="text" readonly="readonly" id="debit_total_amount" class="form-control"></th>

                </tr>
            </table>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
        <table class="table table-striped table">
            <tr>
                <th>Narration</th>
                <th><input type="text"  value="<?php echo e($journal_transaction->journal_narration); ?>" name="journal_narration" id="journal-narration"  class="form-control" required style="height:50px;"></th>
            </tr>
            <tr>
                <th colspan="1">

                </th>
                <th ><button class="btn btn-primary" style="float:right;" onclick="test()"  type="button">Update</button></th>
            </tr>
        </table>
        </div>
    </form>

    </div>

</div>



</div>
<script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
<script src="<?php echo e(url('assets/js')); ?>/sweetalert.min.js"></script>

<script>

//FOR THE DEBIT SECTION
 function add_debit(){



     var count = $(".itemRow").length;
     count++;
     var htmlRows = '';
      htmlRows += '<tr class="itemRow" id="debit_row_'+count+'">';
     htmlRows += '<td><select class="form-control" required  name="debit_from_account[]" id="debit_from_account_'+count+'" >';
        <?php foreach($account as $key): ?>
        htmlRows +='<option value="<?php echo $key->id  ?>"><?php echo ucfirst($key->accounts_name); ?></option>';
        <?php endforeach; ?>
         htmlRows += '</select></td>';
         
         htmlRows += '<td><input type="text" class="form-control debit_amnt" name="debit_amount[]" onchange="total_debit_amount()" id="debit_amount_'+count+'"></td>';
         htmlRows += '<td><button type="button" class="form-control text-danger" onclick="delete_debit_rows('+count+')" id="debit_close_'+count+'">x</button></td>';
         htmlRows += '</tr>';


    var debit_from_account_select=$("#debit-from-select").val();
    var debit_to_account_select=$("#debit-to-select").val();
     var debit_amount_select=$("#debit_amount").val();

         if(debit_amount_select.length>0){
     $("#debit_table").last().append(htmlRows);



    $("#debit_from_account_"+count+"").val(debit_from_account_select).change();
    $("#debit_to_account_"+count+"").val(debit_to_account_select).change();
    $("#debit_amount_"+count+"").val(debit_amount_select);

         }
     $("#debit_amount").val("");

    $("#debit-from-select").val("").change();
    $("#debit-to-select").val("").change();

    total_debit_amount();

 }

 function delete_debit_rows(val){
     $("#debit_row_"+val+"").remove();
     total_debit_amount();
 }

 function total_debit_amount(){

     var calculated_total_sum = 0;
    var calculated_total_sum_debit_update = 0;

      $("#debit_table .debit_amnt").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum += parseFloat(get_textbox_value);
              }
            });

            $("#update_debit_table .debit_amount_update").each(function () {
                var get_textbox_value_debit_update = $(this).val();
                if ($.isNumeric(get_textbox_value_debit_update)) {
                   calculated_total_sum_debit_update += parseFloat(get_textbox_value_debit_update);
                   }
                 });

              $('#debit_total_amount').val(calculated_total_sum + calculated_total_sum_debit_update );
 }

 total_debit_amount();
//ENDED THE DEBIT SECTION





//started the credit sections

function add_credit(){

    var count = $(".itemRow1").length;
        count++;
    var htmlRows = '';
        htmlRows += '<tr class="itemRow1" id="credit_row_'+count+'">';
        
        htmlRows += '<td><select class="form-control" required name="credit_to_account[]" id="credit_to_account_'+count+'" >';
            <?php foreach($account as $key): ?>
            htmlRows +='<option value="<?php echo $key->id  ?>"><?php echo ucfirst($key->accounts_name); ?></option>';
            <?php endforeach; ?>
             htmlRows += '</select></td>';
        htmlRows += '<td><input type="text" class="form-control credit_amnt" onchange="total_credit_amount()" name="credit_amount[]" id="credit_amount_'+count+'"></td>';
        htmlRows += '<td><button type="button" class="form-control text-danger" onclick="delete_credit_rows('+count+')" id="credit_close_'+count+'">x</button></td>';
        htmlRows += '</tr>';


    var credit_from_account_select=$("#credit-from-select").val();
    var credit_to_account_select=$("#credit-to-select").val();
    var credit_amount_select=$("#credit_amount").val();

        if(credit_amount_select.length>0){
    $("#credit_table").last().append(htmlRows);



   $("#credit_from_account_"+count+"").val(credit_from_account_select).change();
   $("#credit_to_account_"+count+"").val(credit_to_account_select).change();
   $("#credit_amount_"+count+"").val(credit_amount_select);

        }
    $("#credit_amount").val("");

   $("#credit-from-select").val("").change();
   $("#credit-to-select").val("").change();

   total_credit_amount();


}


function delete_credit_rows(val){
    $("#credit_row_"+val+"").remove();
    total_credit_amount();
}

function total_credit_amount(){

    var calculated_total_sum1 = 0;
    var calculated_total_sum_credit_update = 0;
     $("#credit_table .credit_amnt").each(function () {
          var get_textbox_value1 = $(this).val();
          if ($.isNumeric(get_textbox_value1)) {
             calculated_total_sum1 += parseFloat(get_textbox_value1);
             }
           });

             //console.log(calculated_total_sum);
             $("#update_credit_table .credit_amount_update").each(function () {
                var get_textbox_value_credit_update = $(this).val();
                if ($.isNumeric(get_textbox_value_credit_update)) {
                   calculated_total_sum_credit_update += parseFloat(get_textbox_value_credit_update);
                   }
                 });

                 //console.log(calculated_total_sum_credit_update);

     $('#credit_total_amount').val(calculated_total_sum1 + calculated_total_sum_credit_update );

}

total_credit_amount();


function test(){


var credit_amount = new Array();
var credit_fromaccount = new Array();
var credit_toaccount = new Array();
var debit_amount = new Array();
var debit_fromaccount = new Array();
var debit_toaccount = new Array();




var edit_debit_account = new Array();
var edit_debit_amount = new Array();
var edit_debit_trans_item = new Array();
var edit_credit_account = new Array();
var edit_credit_amount = new Array();
var edit_credit_trans_item = new Array();




$("input[name^='credit_amount[]']").each(function(index){
    credit_amount.push($(this).val());
});

$("select[name^='credit_from_account[]']").each(function(index){
    credit_fromaccount.push($(this).val());
});

$("select[name^='credit_to_account[]']").each(function(index){
    credit_toaccount.push($(this).val());
});

$("input[name^='debit_amount[]']").each(function(index){
    debit_amount.push($(this).val());
});

$("select[name^='debit_from_account[]']").each(function(index){
    debit_fromaccount.push($(this).val());
});

$("select[name^='debit_to_account[]']").each(function(index){
    debit_toaccount.push($(this).val());
});





$("select[name^='edit_debit_company[]']").each(function(index){
    edit_debit_account.push($(this).val());
});
$("input[name^='edit_debit_amount[]']").each(function(index){
    edit_debit_amount.push($(this).val());
});
$("input[name^='edit_debit_trans_item[]']").each(function(index){
    edit_debit_trans_item.push($(this).val());
});



$("select[name^='edit_credit_company[]']").each(function(index){
    edit_credit_account.push($(this).val());
});
$("input[name^='edit_credit_amount[]']").each(function(index){
    edit_credit_amount.push($(this).val());
});
$("input[name^='edit_credit_trans_item[]']").each(function(index){
    edit_credit_trans_item.push($(this).val());
});



var journal_date=$('#journal-date').val();
var journal_hospital=$('#journal-hospital').val();
var journal_narration=$('#journal-narration').val();
var debit_total=$('#debit_total_amount').val();
var credit_total=$('#credit_total_amount').val();

//console.log(credit_amount);
//console.log(credit_account);
//console.log(debit_account);
//console.log(debit_amount);
//console.log(journal_date);
var form = $('#journal_form');




if ($("#journal_form")[0].checkValidity()){

    if(debit_total!==credit_total){

        swal({
            title: "Total Debit Amount and Credit Amount Are not Eqal !",
            text: "You can press ok button to continue or return back by pressing the cancel button",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {

                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });

                    $.ajax({
                    url:"<?php echo e(route('update_new_journal')); ?>",
                     datatype: 'JSON',
                    type:"POST",
                    data: {
                        credit_amount: credit_amount,
                        credit_from_account: credit_fromaccount,
                        credit_to_account: credit_toaccount,
                        debit_amount: debit_amount,
                        debit_from_account: debit_fromaccount,
                        debit_to_account: debit_toaccount,
                        journal_date: journal_date,
                        journal_hospital: journal_hospital,
                        journal_narration: journal_narration,

                        edit_debit_account: edit_debit_account,
                        edit_debit_amount: edit_debit_amount,
                        edit_debit_trans_item: edit_debit_trans_item,
                        edit_credit_account: edit_credit_account,
                        edit_credit_amount: edit_credit_amount,
                        edit_credit_trans_item: edit_credit_trans_item,
                        transaction_id:<?php echo e($journal_transaction->transaction_id); ?>,
                    },
                    success:function (data) {
                        //console.log(data);
                        if(data.response="success"){

                            swal({title: "Success!",
                            text: "You Added the Transaction!",
                            icon: "success",
                            button: "OK"})
                            .then((value) => {
                            //window.history.back();
                            path = "<?php echo e(route('journal')); ?>";
                            window.location.href = path;
                            });


                        }
                    }
                    })



            } else {
              swal("Transaction is not proceeded!");
            }
          });
    }else{

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });

            $.ajax({
            url:"<?php echo e(route('update_new_journal')); ?>",
            datatype: 'JSON',
            type:"POST",
            data: {
                 credit_amount: credit_amount,
                        credit_from_account: credit_fromaccount,
                        credit_to_account: credit_toaccount,
                        debit_amount: debit_amount,
                        debit_from_account: debit_fromaccount,
                        debit_to_account: debit_toaccount,
                        journal_date: journal_date,
                        journal_hospital: journal_hospital,
                        journal_narration: journal_narration,

                        edit_debit_account: edit_debit_account,
                        edit_debit_amount: edit_debit_amount,
                        edit_debit_trans_item: edit_debit_trans_item,
                        edit_credit_account: edit_credit_account,
                        edit_credit_amount: edit_credit_amount,
                        edit_credit_trans_item: edit_credit_trans_item,
                        transaction_id:<?php echo e($journal_transaction->transaction_id); ?>,
            },
            success:function (data) {
                //console.log(data);
                if(data.response="success"){

                    swal({title: "Success!",
                    text: "You Added the Transaction!",
                    icon: "success",
                    button: "OK"})
                    .then((value) => {
                   // window.history.back();
                   path = "<?php echo e(route('journal')); ?>";
                    window.location.href = path;
                    });


                }
            }
            })
    }







}
else{
//Validate Form
$("#journal_form")[0].reportValidity();
}

}





</script>

<script>


$(".delete").on('click', function(event) {
   var journal_items_id = this.value;
   // $(this).closest("tr").remove();
   // total_debit_amount();
   // total_credit_amount();

   swal({
    title: "Are you sure?",
    text: "Once deleted, that purticular transaction will be deleted!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {


    if (willDelete) {




      $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $.ajax({
        url:"delete_journalitems_frontend/"+journal_items_id,

        datatype: 'JSON',
        type:'post',
        data: {
            journal_items_id: journal_items_id,

        },
        success:function(data){
             console.log((data));
            if(data.response=="success"){
                console.log((data.response));
             $(this).closest("tr").remove();
             total_debit_amount();
             total_credit_amount();
               swal(" The transaction has been deleted!", {
        icon: "success",
      });

            }
        }
        })

      $(this).closest("tr").remove();
    total_debit_amount();
    total_credit_amount();

    } else {

    }
  });


});

</script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\erp-globaleyet\resources\views/Accounts/edit_journal.blade.php ENDPATH**/ ?>