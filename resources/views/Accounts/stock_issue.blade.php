@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <link href="{{ url('assets/css') }}/select2.min.css" rel="stylesheet" />
    {{-- <link href="{{ url('assets/css') }}/core.css" rel="stylesheet" /> --}}

    <style>.swal-button {

        width:fit-content;


      }
    </style>
    <link rel="stylesheet" href="{{ url('assets/css') }}/sweetalert.css">

	<br>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <h3>Stock Issue</h3>
    {{-- <br> --}}
    <hr>
    <form id="journal_form" method="POST" enctype="multipart/form-data">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
         <h5>Date of Transaction</h5>
        </div>

        <div class="col-md-3">
            <div class="form-group mb-3">
                <input type="date" class="form-control" name="stock_transaction_date" id="stock-transaction-date"  required>
            </div>
@csrf


        </div>
<div class="col-md-6">

    {{-- <button type="button"  class="btn btn-primary"  data-toggle="modal"  data-bs-toggle="modal"
    data-bs-target="#11default"  class="btn btn-secondary">Create Item</button> --}}
</div>


    </div>
    <div class="row">
        <div class="col-md-3"> <h4>TRANSACTION TYPE</h4> </div>
        <div class="col-md-3">
             <select class="form-control" name="stock_transaction_type" id="transaction-type" required>

            <option value="2"> ISSUE </option>

             </select>
            </div>
             <div class="col-md-3">
            <select name="stock_transaction_subtype" required id="stock-transaction-subtype" class="form-control text-center">
                <option value=""> ---Select--- </option>
                {{-- <option value="1"> PURCHASE </option> --}}
                <option value="2"> SALE </option>
                {{-- <option value="2"> SALES RETURN </option> --}}
                <option value="3"> PURCHASE RETURN </option>
                 </select>
                </div>
                <div class="col-md-3">
                    {{-- <select class="form-control">
                   <option value=""> CUSTOMR/SUPPLIER</option>
                   <option value="1"> RECEIPT </option>
                   <option value="2"> ISSUE </option>
                    </select> --}}
                   </div>

    </div>
    <div class="row">
        <div class="col-md-12">
         <table class="table table-striped mt-5" id="debit_table">
             <tr>
                <th>GROUP</th>
                <th>ITEM</th>
                <th>AVL.QTY</th>
                <th>ISSUE QTY</th>
                {{-- <th>TOTAL</th> --}}
                 {{-- <th>DOCUMENT</th> --}}
                 <th>ADD</th>
             </tr>
             <tr >
                <td  width="20%">
                    <select class="form-control" onchange="apply_group_result_item(this.value)" id="transaction-group-select">
                        <option value=""> Select</option>
                        <option value="1"> Raw Materials </option>
                        <option value="2"> Work in Process</option>
                        <option value="3"> Finished Goods</option>
                         </select>
                </td>
                <td width="30%">
                <select class="custom-select2 form-control select2-hidden-accessible select2_function" onchange="check_select_values(this.value)"  style="width: 100%; height: 38px;" id="stock-item-select">
                    <option value=""> Select Item</option>
                  
                </select></td>


                <td width="15%">
                    <input type="number" readonly="readonly"  onchange="calculation_function()" id="quantity-select" class="form-control">
                </td>


                <td  width="15%"><input type="number" id="total-select" class="form-control"></td>
              
                <td width="5%"><button  type="button" class="form-control" onclick="add_debit()" >+</button></td>
            </tr>
            <tr>

            </tr>

         </table>
         <table class="table table-striped mt-3" id="debit_table_calculation">
            <tr>


                 <th>GROUP</th>
                 <th>ITEM</th>
                 <th>QTY</th>
                 
                <th>DELETE</th>
            </tr>
         </table>
        </div>


    </div>
    <div class="row">
        <div class="col-md-12">
        <table class="table table-striped table">
            <tr>
                <th>Total Quantity</th>
                <th><input type="text" readonly="readonly" id="final_sum_amount" class="form-control"></th>
            </tr>
        </table>
        </div>

    </div>


    <div class="row">
        <div class="col-md-12">
        <table class="table table-striped table">
            <tr>
                <th>Remarks</th>
                <th><input type="text" name="stock_transaction_remarks" id="stock-transaction-remarks"  class="form-control" style="height:50px;"></th>
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


</div>
{{-- <script src="{{ url('assets/js') }}/jquery.min.js"></script> --}}

 <script src="{{ url('assets/js') }}/jquery.min.js"></script>


 <script src="{{ url('assets/js') }}/select2.min.js" defer></script>
 <script src="{{ url('assets/js') }}/sweetalert.min.js"></script>


<script>
    $(document).ready(function() {

        $('.select2_function').select2();
    });
</script>

<script>



function check_select_values(value){

    
var trans_type=$("#transaction-type").val();

$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });

    $.ajax({
    url:"{{ route('get_total_number_of_item') }}",
    type:"POST",
    data: {
        item: value,
    },
    success:function (data) {
        //console.log(data);

         $('#quantity-select').val(data);


    }
    })


}


function round(value, exp) {
    if (typeof exp === 'undefined' || +exp === 0)
      return Math.round(value);

    value = +value;
    exp = +exp;

    if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0))
      return NaN;

    // Shift
    value = value.toString().split('e');
    value = Math.round(+(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp)));

    // Shift back
    value = value.toString().split('e');
    return +(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp));
  }


function calculation_function(){


    var trans_type=$("#transaction-type").val();

    if(trans_type==null||trans_type==""){

        swal("Transaction Type Error !", "Please Select The Transaction Type!", "warning");

    }else if(trans_type==1){

       var qty= $("#quantity-select").val();
       var rate= $("#rate-select").val();
        $("#total-select").val(round(parseFloat(qty)*parseFloat(rate),2));


    }else{

    //HERE THE ISSUE SECTION WANT TO DO

    }

}

function apply_group_result_item(value){



    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $.ajax({
        url:"{{ route('get_item_with_group') }}",
        type:"POST",
        data: {
            group: value,
        },
        success:function (data) {
            //console.log(data);

                let html_data = '<option value="">Select</option>';
                data.forEach(function (data) {
                    html_data += `<option value="${data.id}">${data.stock_items_itemcode}--${data.stock_items_name}-[${data.stock_categories_name}--${data.stock_subcategories_name}]</option>`
                });
                $("#stock-item-select").html(html_data);


        }
        })







}






//FOR THE DEBIT SECTION
 function add_debit(){



     var count = $(".itemRow").length;
     count++;
     var htmlRows = '';
      htmlRows += '<tr class="itemRow" id="debit_row_'+count+'">';

        htmlRows += '<td><select class="form-control" required  name="debit_from_account[]" id="transaction_group_select_'+count+'" >';
        htmlRows +='<option value="">Select</option>';
        htmlRows +='<option value="1">Raw Materials</option>';
        htmlRows +='<option value="2">Work in Process</option>';
        htmlRows +='<option value="3">Finished Goods</option>';
         htmlRows += '</select></td>';
         htmlRows += '<td><select class="form-control" required  name="item[]" id="stock_item_select_'+count+'" >';
            htmlRows +='<option value="">Select</option>';
            <?php foreach($items as $acc): ?>
            htmlRows +='<option value="<?php echo $acc->id  ?>">{{ $acc->stock_items_itemcode."--".$acc->stock_items_name." [ ".$acc->stock_categories_name."--".$acc->stock_subcategories_name." ] " }}</option>';
            <?php endforeach; ?>
             htmlRows += '</select></td>';
       //  htmlRows += '<td><input type="text" class="form-control credit_amnt" readonly onchange="total_credit_amount()" name="receipt_qty[]" id="quantity_select_'+count+'"></td>';

        // htmlRows += '<td><input type="text" class="form-control credit_amnt" readonly onchange="total_credit_amount()" name="reciept_rate[]" id="rate_select_'+count+'"></td>';
         htmlRows += '<td><input type="text" class="form-control total_amnt" onchange="total_credit_amount()" name="receipt_qty[]" id="total_select_'+count+'"></td>';
        // htmlRows += '<td><input type="file" class="form-control " name="debit_amount[]" onchange="total_debit_amount()" id="file_select_'+count+'"></td>';
         htmlRows += '<td><button type="button" class="form-control text-danger" onclick="delete_debit_rows('+count+')" id="debit_close_'+count+'">x</button></td>';
         htmlRows += '</tr>';


        var stock_item_select=$("#stock-item-select").val();
        var transaction_group_select=$("#transaction-group-select").val();
         var quantity_select=$("#quantity-select").val();
        var rate_select=$("#rate-select").val();
        var total_select=$("#total-select").val();
     //var file_select=$("#file-select").val();
        var avl_qty=$('#quantity-select').val();
         var iss_qty=$('#total-select').val();
       
         if(parseInt(avl_qty) >= parseInt(iss_qty)){

             
     $("#debit_table_calculation").last().append(htmlRows);
    $("#stock_item_select_"+count+"").val(stock_item_select).change();
    $("#transaction_group_select_"+count+"").val(transaction_group_select).change();
    $("#quantity_select_"+count+"").val(quantity_select);
    $("#rate_select_"+count+"").val(rate_select);
    $("#total_select_"+count+"").val(total_select);
    //$("#file_select_"+count+"").val(file_select);

       

     $("#stock-item-select").val("").change();
     $("#transaction-group-select").val("").change();
     $("#quantity-select").val("");
     $("#rate-select").val("");
     $("#total-select").val("");

    total_debit_amount();

    }else{

//alert("available qty is"+avl_qty);
//alert("issue qty is"+iss_qty);

    swal({title: "Error!",
    text: "The Issue Quantity must be less than the Available Quantity!",
    icon: "error",
    button: "OK"})


 }
 }

 function delete_debit_rows(val){
     $("#debit_row_"+val+"").remove();
     total_debit_amount();
 }

 function total_debit_amount(){

     var calculated_total_sum = 0;
      $("#debit_table_calculation .total_amnt").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum += parseFloat(get_textbox_value);
              }
            });

              //console.log(calculated_total_sum);
              $('#final_sum_amount').val(calculated_total_sum);

 }

//ENDED THE DEBIT SECTION





//started the credit sections




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


var item = new Array();

var receipt_qty = new Array();

$("select[name^='item[]']").each(function(index){
    item.push($(this).val());
});


$("input[name^='receipt_qty[]']").each(function(index){
    receipt_qty.push($(this).val());
});


var stock_transaction_date=$('#stock-transaction-date').val();
var stock_transaction_type=$('#transaction-type').val();
var stock_transaction_subtype=$('#stock-transaction-subtype').val();
var stock_transaction_remarks=$('#stock-transaction-remarks').val();

var form = $('#journal_form');




if ($("#journal_form")[0].checkValidity()){


        //$('#create_btn').hide();
       // $('#creating_btn').show();


        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });

            $.ajax({
            url:"{{ route('create_new_stock_issue') }}", 
            type:"POST",
            data: {
                stock_transaction_date: stock_transaction_date,
                stock_transaction_type: stock_transaction_type,
                stock_transaction_remarks: stock_transaction_remarks,
                stock_transaction_subtype:stock_transaction_subtype,
                item: item,
                receipt_qty: receipt_qty,
            },
            success:function (data) {
                //console.log(data);
                if(data.response="success"){

                    swal({title: "Success!",
                    text: "You Added a Stock Reciept!",
                    icon: "success",
                    button: "OK"})
                    .then((value) => {
                    window.location.reload();
                    });


                }
            }
            })








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



