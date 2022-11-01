@extends('layouts.hmsmain')
@section('content')
<div class="container">

    <style>.swal-button {

        width:fit-content;




      }
    </style>
    {{--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">  --}}
    {{-- <link rel="stylesheet" href="{{ url('assets/css') }}/sweetalert.css"> --}}
    <link rel="stylesheet" href="{{ url('assets/css') }}/sweetalert.css">

	<br>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- heading --}}
  <h4 id="hdtpa"><b>Create Transaction</b></h4>
  <br><br>
    <!-- <h3>Create Transaction</h3> -->
    {{-- <br> --}}
    
    <form id="journal_form" method="POST" enctype="multipart/form-data">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
         <h5>Date of Transaction</h5>
        </div>

        <div class="col-md-3">
            <div class="form-group mb-3">
                <input type="date" class="form-control" name="journal_date" id="journal-date"  required>
            </div>
@csrf


        </div>
<div class="col-md-6">

    <button type="button"  class="btn btn-primary"  data-toggle="modal"  data-bs-toggle="modal"
    data-bs-target="#default"  class="btn btn-secondary">Create Account</button>
</div>


    </div>
    <div class="row">
        <div class="col-md-6"> <h4>DEBIT</h4> </div>
        <div class="col-md-6"><h4>CREDIT</h4> </div>
    </div>
    <div class="row">
        <div class="col-md-6">
         <table class="table table-striped" id="debit_table">
             <tr>

                 <th>ACCOUNT</th>
                 {{--  <th>TO</th>   --}}
                 <th>AMOUNT</th>
                 <th>ADD</th>
             </tr>
             <tr >

                <td width="50%">
                <select class="form-control"  id="debit-from-select">
                    <option value=""> Select Account</option>
                    @foreach($account as $acc):
                     <option value="{{ $acc->id }}"> {{ $acc->accounts_name." [ ".$acc->ledgeraccount_categories." ] " }}</option>
                    @endforeach;

                </select></td>
                {{--  <td width="50%">
                    <select class="form-control"  id="debit-to-select">
                        <option value=""> Select Account</option>
                        @foreach($account as $acc):
                         <option value="{{ $acc->id }}"> {{ $acc->accounts_name }}</option>
                        @endforeach;

                    </select></td>  --}}
                <td><input type="text" id="debit_amount" class="form-control"></td>
                <td><button  type="button" class="form-control" onclick="add_debit()" >+</button></td>
            </tr>
<hr/>
         </table>
        </div>

        <div class="col-md-6">
            <table class="table table-striped"  id="credit_table">
                <tr>

                    {{--  <th>FROM</th>  --}}
                    <th>ACCOUNT</th>
                    <th>AMOUNT</th>
                    <th>ADD</th>
                </tr>
                <tr>

                    {{--  <td width="50%"><select class="form-control"  id="credit-from-select" >
                        <option value=""> Select Account</option>
                        @foreach($account as $acc):
                         <option value="{{ $acc->id }}"> {{ $acc->accounts_name }}</option>
                        @endforeach;

                    </select></td>  --}}
                    <td width="50%"><select class="form-control"  id="credit-to-select" >
                        <option value=""> Select Account</option>
                        @foreach($account as $acc):
                         <option value="{{ $acc->id }}"> {{ $acc->accounts_name." [ ".$acc->ledgeraccount_categories." ] " }}</option>
                        @endforeach;

                    </select></td>
                    <td><input type="text"  id="credit_amount" class="form-control"></td>

                    <td><button type="button" class="form-control" onclick="add_credit()" >+</button></td>

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
                <th><input type="text" readonly="readonly" id="debit_total_amount" class="form-control"></th>
            </tr>
        </table>
        </div>
        <div class="col-md-6">
            <table class="table table-striped table">
                <tr>
                    <th>Credit Total</th>
                    <th><input type="text" readonly="readonly" required id="credit_total_amount" class="form-control"></th>
                </tr>
            </table>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
        <table class="table table-striped table">
            <tr>
                <th>Narration</th>
                <th><input type="text" name="journal_narration" id="journal-narration"  class="form-control" required style="height:50px;"></th>
            </tr>
            <tr>
                <th colspan="1">

                </th>
                <th ><button class="btn btn-primary" id="create_btn" style="float:right;" onclick="test()"  type="button">Create</button>
                    <button class="btn btn-primary" type="button" id="creating_btn" style="display:none;float:right;" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Creating...
                      </button>
                
                </th>
            </tr>
        </table>
        </div>
    </form>

    </div>

</div>
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">



                <h5 class="modal-title bb" id="myModalLabel1"> Add Ledger Accounts </h5>



                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form id="account_form" >
                <div class="modal-body">

                    <div class="card-body">


                        <div class="form-group mb-3">
                            <label> Account Name </label>
                            <input type="text" class="form-control" id="accounts-name" name="accounts_name" placeholder="" required>
                        </div>

                        <div class="form-group mb-3">
                            <label> Type </label>

                            <select class="form-control" id="accounts-subcategory" required>
                                <option value=""> Select</option>
                                @foreach($subcategory as $subcat):
                                <option value="{{ $subcat->id }}"> {{ $subcat->ledgeraccount_subcategories }} </option>
                                @endforeach;
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label> Group </label>
                            <select class="form-control" name="accounts_category" id="account-cat" required>
                                <option value=""> Select</option>
                                @foreach($category as $cat):
                                <option value="{{ $cat->id }}"> {{ $cat->ledgeraccount_categories }}</option>
                                @endforeach;

                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label> Budget </label>
                            <select class="form-control" name="budget_cat" id="budget_cat" required>
                                <option value=""> Select</option>
                                @foreach($budget_cat as $budget):
                                <option value="{{ $budget->id }}"> {{ $budget->budget_name }}</option>
                                @endforeach;

                            </select>
                        </div>


                        <div class="form-group mb-3">
                            <label>Description </label>
                            <textarea class="form-control" name="accounts_desc" id="accounts-desc">

                            </textarea>
                        </div>



                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" onclick="save_ledger_account()" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-alert" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>


        </div>
    </div>
</div>

</div>
{{-- <script src="{{ url('assets/js') }}/jquery.min.js"></script> --}}
<script src="{{ url('assets/js') }}/jquery.min.js"></script>

{{-- <script src="{{ url('assets/js') }}/sweetalert.min.js"></script> --}}
<script src="{{ url('assets/js') }}/sweetalert.min.js"></script>

<script>

//FOR THE DEBIT SECTION
 function add_debit(){



     var count = $(".itemRow").length;
     count++;
     var htmlRows = '';
      htmlRows += '<tr class="itemRow" id="debit_row_'+count+'">';
     htmlRows += '<td><select class="form-control" required  name="debit_from_account[]" id="debit_from_account_'+count+'" >';
        <?php foreach($account as $key): ?>
        htmlRows +='<option value="<?php echo $key->id  ?>"><?php echo  $key->accounts_name." [ ".$key->ledgeraccount_categories." ] "; ?></option>';
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
      $("#debit_table .debit_amnt").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum += parseFloat(get_textbox_value);
              }
            });

              //console.log(calculated_total_sum);
              $('#debit_total_amount').val(calculated_total_sum);

 }

//ENDED THE DEBIT SECTION





//started the credit sections

function add_credit(){

    var count = $(".itemRow1").length;
        count++;
    var htmlRows = '';
        htmlRows += '<tr class="itemRow1" id="credit_row_'+count+'">';
        htmlRows += '<td><select class="form-control" required name="credit_to_account[]" id="credit_to_account_'+count+'" >';
            <?php foreach($account as $key): ?>
            htmlRows +='<option value="<?php echo $key->id  ?>"><?php echo  $key->accounts_name." [ ".$key->ledgeraccount_categories." ] "; ?></option>';
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
     $("#credit_table .credit_amnt").each(function () {
          var get_textbox_value1 = $(this).val();
          if ($.isNumeric(get_textbox_value1)) {
             calculated_total_sum1 += parseFloat(get_textbox_value1);
             }
           });

             //console.log(calculated_total_sum);
             $('#credit_total_amount').val(calculated_total_sum1);

}


function test(){
    

var credit_amount = new Array();
var credit_fromaccount = new Array();
var credit_toaccount = new Array();
var debit_amount = new Array();
var debit_fromaccount = new Array();
var debit_toaccount = new Array();

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


var journal_date=$('#journal-date').val();
var journal_hospital=$('#journal-hospital').val();
var journal_narration=$('#journal-narration').val();
var debit_total=$('#debit_total_amount').val();
var credit_total=$('#credit_total_amount').val();

//console.log(credit_amount);

//console.log(credit_toaccount.length);
//console.log(debit_fromaccount.length);
if(credit_toaccount.length>1 && debit_fromaccount.length>1){

    swal({
        title: "Error!",
        text: "You cannot do more than 1 transaction on  debit and credit side at the same time",
        icon: "error",
        buttons: true,
        dangerMode: true,
      });

    return false;

}


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

                $('#create_btn').hide();
                $('#creating_btn').show();

                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });

                    $.ajax({
                    url:"{{ route('create_new_journal') }}",
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
                    },
                    success:function (data) {
                        //console.log(data);
                        if(data.response="success"){

                            swal({title: "Success!",
                            text: "You Added the Transaction!",
                            icon: "success",
                            button: "OK"})
                            .then((value) => {
                            window.location.reload();
                            });


                        }
                    }
                    })



            } else {
              swal("Transaction is not proceeded!");
            }
          });
    }else{
        $('#create_btn').hide();
        $('#creating_btn').show();
        

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });

            $.ajax({
            url:"{{ route('create_new_journal') }}",
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
            },
            success:function (data) {
                //console.log(data);
                if(data.response="success"){

                    swal({title: "Success!",
                    text: "You Added the Transaction!",
                    icon: "success",
                    button: "OK"})
                    .then((value) => {
                    window.location.reload();
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

<script type="text/javascript">

function save_ledger_account(){

    var accounts_name=$('#accounts-name').val();
    var accounts_subcategory=$('#accounts-subcategory').val();
    var account_cat=$('#account-cat').val();
    var accounts_desc=$('#accounts-desc').val();



    if ($("#account_form")[0].checkValidity()){





                    $.ajaxSetup({
                        headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                        });

                        $.ajax({
                        url:"{{ route('create_new_ledger_account') }}",
                        type:"POST",
                        data: {
                            accounts_name: accounts_name,
                            accounts_subcategory: accounts_subcategory,
                            account_cat: account_cat,
                            accounts_desc: accounts_desc,

                        },
                        success:function (data) {
                            //console.log(data);
                            if(data.response="success"){

                               swal({title: "Success!",
                               text: "Account Created!",
                               icon: "success",
                               button: "OK"})



                             let html_data = '<option value="">Select</option>';
                             data.accounts.forEach(function (data) {
                                 html_data += `<option value="${data.id}">${data.accounts_name}[ ${data.ledgeraccount_categories} ]</option>`
                             });
                             $("#debit-from-select").html(html_data);
                             $("#credit-to-select").html(html_data);


                             $('#accounts-name').val('');
                            $('#accounts-subcategory').val('');
                              $('#account-cat').val('');
                            $('#accounts-desc').val('');
                            $('#default').modal('toggle');

                            }
                        }
                        })



    }
    else{

    swal({title: "Error!",
    text: "Please Fill All the Required Fields!",
    icon: "error",
    button: "OK"})
    .then((value) => {

    //window.location.reload();


    });



    }



}

</script>


@endsection



