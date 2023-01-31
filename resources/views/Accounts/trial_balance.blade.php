@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:17px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Accounts</a> /
    <a href="#" style="color: #1D1D50;">Trial Balance</a>
</nav>
<br><br>
 <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ url('assets/css') }}/sweetalert.css">

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
                  <form method="post" action="{{ url('trialbalance')}}">
                      @csrf
                  <td>From Date</td>
                  <td><input type="date" name="ledger_from" required value="{{$ledger_from}}"  class="form-control"></td>
                  <td>To Date</td>
                  <td><input type="date"  name="ledger_to" required value="{{$ledger_to}}"  class="form-control"></td>


              </tr>
              <tr>
                <td>Account</td>
                <td colspan="2">

                 <select class="form-control" name="ledger_account" >
                    <option value=""> Select Account</option>
                    @foreach($account as $acc):
                     <option value="{{ $acc->id }}" {{($ledger_account==$acc->id) ? "selected" :""}}  >
                         {{ strtoupper($acc->accounts_name." [ ".$acc->ledgeraccount_subcategories." ] ") }}

                        </option>
                    @endforeach;

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
            @if(!empty($ledger_from)&&!empty($ledger_to))
            <h6 class="text-center"> From<strong>
                 {{date('d M, Y',strtotime($ledger_from))}}</strong> To <strong>{{date('d M, Y',strtotime($ledger_to))}}</strong> </h6>
             @endif
                </th>

        </tr>
    <tr class="text-center">
        <th>Particulars</th>
        <th>Dr.</th>
        <th>Cr.</th>
    </tr>
    @php
    $dr_sum=0;
    $cr_sum=0;
    @endphp
    @foreach($ledger_account_result as $key)


    @php



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




@endphp
@if($sum_debit_transaction < $sum_credit_transaction || $sum_debit_transaction > $sum_credit_transaction)
    <tr>
        <td>
            {{ strtoupper($key->accounts_name." [ ".$key->ledgeraccount_subcategories." ] ") }}
        </td>
        <td class="text-center">

            @if($sum_debit_transaction>$sum_credit_transaction)

            {{--  {{ "By Balance c/d" }}  --}}
            @php
                $dr_sum += $sum_debit_transaction - $sum_credit_transaction;
            @endphp

              {{ $sum_debit_transaction - $sum_credit_transaction }}

      @endif

        </td>
        <td class="text-center"> @if($sum_debit_transaction<$sum_credit_transaction)

            {{--  {{ "To Balance c/d" }}  --}}
            @php

            $cr_sum += $sum_credit_transaction-$sum_debit_transaction;

            @endphp


            {{ $sum_credit_transaction-$sum_debit_transaction }}

             @endif</td>
    </tr>
@endif
    @endforeach
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr class="text-center">
        <td></td>
        <td><strong>{{ $dr_sum }}</strong></td>
        <td><strong>{{ $cr_sum }}</strong></td>
    </tr>

</table>



{{--  {!! $journal_transaction->links() !!}  --}}
{{--  {!! $journal_transaction->appends(['journal_from' => '10-12-2022',])->links() !!}  --}}
{{--  Showing {{ $journal_transaction->firstItem() }}–{{ $journal_transaction->lastItem() }} of {{ $journal_transaction->total() }} results  --}}


      </div>
</div>







 <script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script src="{{ url('assets/js') }}/sweetalert.min.js"></script>

<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
  })
  </script>



@endsection



