@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}



<!-- Modal Header -->
<div class="modal-header">
    <h2 class="text-centre"><b>Add Payment</b></h2>
</div>

<!-- Modal body -->
<div class="modal-body">
    <div class="container">
        
            <form method="post" action="{{url('update_ledger_add_payment')}}">
                @csrf
                <input type="hidden" value="{{$ledger_add_payment->id }}" name="purchase_id">
                <br>
                <input type="hidden" value="{{$ledger_add_payment->pending_amount}}" id="pending-amount">
                <div class="mb-3" id="form_logic">
                    <label for="exampleFormControlInput1" class="form-label">Amount</label>
                    <input type="text" class="form-control" name="amount" id="installment-amount">
                
                <br>
                    <label for="exampleFormControlInput1" class="form-label">Balance Amount</label>
                    <input type="text" class="form-control " name="pending_amount"
                        id="result" value="{{$ledger_add_payment->pending_amount}}">
                
               <br>
                    <label for="exampleFormControlInput1" class="form-label">Payment Date</label>
                    <input type="date" class="form-control" name="date" id="exampleFormControlInput1">
                </div>

                <br>

                <div>

                    <button type="submit" class="btn btn-primary" style="width:20%">Save</button>
                    <button type="button" class="btn btn-primary" style="width:15%" data-dismiss="modal">Close</button>

                </div>
            </form>
        
    </div>
</div>

<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8"
    src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script type="text/javascript">

        $(document).ready(function() {

            $('#pending-amount').keyup(function() {
                recalc();
            });

            $('#installment-amount').keyup(function() {
                recalc();
            });

            function recalc() {
                var pendingAmount = $("#pending-amount").val();
                var installmentAmount = $("#installment-amount").val();
                var result = pendingAmount - installmentAmount;

                $("#result").val(result);
            }
        });
   
</script>


@endsection