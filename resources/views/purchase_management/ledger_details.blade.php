@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
<h4 id="hdtpa"><b>Payment Details</b></h4>
<br>


<div class="container">
    <br>
    <!-- table -->
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th scope="col">Order No</th>
                    <th scope="col">Purchase Date</th>
                    <th scope="col">Total</th>
                    <th scope="col">Advance</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Update Amount</th>
                    <th scope="col">Details</th>

                </tr>
            </thead>
            <tbody>
                @foreach($ledger_details as $list)
                <tr class="text-center">

                    <td><input type="text" class="form-control" value="{{$list->purchase_order_number}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$list->purchase_date}}" disabled></td>
                    <td><input type="text" class="form-control calculate-sub" value="{{$list->grand_total}}" disabled>
                    </td>
                    <td><input type="text" class="form-control advance" value="{{$list->advance_amount}}" disabled></td>
                    <td><input type="text" class="form-control balance" value="{{$list->pending_amount}}" disabled></td>
                    <td>
                        <a href="{{url('ledger_add_payment',$list->purchase_id)}}"><input type="button" class="btn btn-primary"  value="Add Amount"></a>
                    </td>
                    <td>
                    <a href="{{url('view_ledger_details',$list->purchase_id)}}"><button type="button" class="btn btn-primary">View</button></a>
                    </td>

                </tr>
                @endforeach
                <tr>
                    <td colspan="5"></td>
                    <td><input type="text" placeholder="Grand Total" class="form-control" disabled></td>

                    <td><input type="text" class="form-control invoice-sub-total" value="" disabled></td>

                <tr>
                    <td colspan="5"></td>
                    <td><input type="text" placeholder="Total Advance" class="form-control" disabled></td>
                    <td><input type="text" class="form-control invoice_advance" disabled></td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td><input type="text" placeholder="Total Balance" class="form-control" disabled></td>
                    <td><input type="text" class="form-control total_balance" disabled></td>
                </tr>

            </tbody>
        </table>
    </div>
    <br>





    <div class="text-center">

        <button type="button" class="btn btn-primary">Print</button>
        <span class="m-2"></span>
        <button type="button" class="btn btn-primary" onclick="history.back()">Close</button>


    </div>





    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->


   


    <!---------------------------------------------- MODAL-1 ---------------------------------------------------------------------->


    <div class="modal fade" id="myModal1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="text-centre"><b>View Paid Details</b></h2>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Paid Date</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td><input class="form-control" type="text" value=""
                                            aria-label="Disabled input example" disabled readonly></td>
                                    <td><input class="form-control" type="text" value=""
                                            aria-label="Disabled input example" disabled readonly></td>

                                </tr>

                            </tbody>
                        </table>




                        <!-- Modal Footer -->

                        <div>
                            <button type="button" class="btn btn-primary" style="float:right;"
                                data-dismiss="modal">Close</button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8"
    src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

    calculateTotal();
    calculateadvance();
    calculatebalance();


    function calculateTotal() {
       
        var grand_total = 0;
        $('.calculate-sub').each(function() {
            total = ($(this).val());
            if ($.isNumeric(total)) {

                grand_total += parseFloat(total);
            }
        });

        $('.invoice-sub-total').val(parseFloat(grand_total).toFixed(2));
    }


    function calculateadvance(){

         var total_advance = 0;
         $('.advance').each(function(){
            advance = ($(this).val());
            if($.isNumeric(advance)){
                total_advance += parseFloat(advance);
            }
         });

         $('.invoice_advance').val(parseFloat(total_advance).toFixed(2));
    }

    function calculatebalance(){

        var total_balance = 0;

        $('.balance').each(function(){
            balance = ($(this).val());
            if($.isNumeric(balance)){
                total_balance  += parseFloat(balance);
            }
        });

        $('.total_balance').val(parseFloat(total_balance).toFixed(2));
    }


    
});


</script>


<script></script>




<!---------------------------------------------- MODAL-1 ---------------------------------------------------------------------->







@endsection