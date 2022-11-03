@extends('layouts.hmsmain')
@section('content')

<div class="container">
 <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ url('assets/css') }}/sweetalert.css">

 <style>
 .swal-button {

        width:fit-content;

}


    </style>



{{-- heading --}}
  <h4 id="hdtpa"><b>Ledger Accounts Listing</b></h4>
  <br><br>
  
  <div class="row">
    <div class="col-md-12 order-md-1">
        <form method="post" action="{{ url('ledger')}}">
             @csrf
             
             <div class="row">
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">From Date</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="date" name="ledger_from" required value="{{$ledger_from}}"  class="form-control">
            <div class="invalid-feedback" style="width: 100%;">
                 required
            </div>
        </div>
    </div>
</div>

<div class="col-md-4">
                <div class="mb-1">
                    <label for="username">To Date</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="date"  name="ledger_to" required value="{{$ledger_to}}"  class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-1">
                    <label for="username">Account</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <select class="form-control" name="ledger_account" >
                    <option value=""> Select Account</option>
                    @foreach($account as $acc):
                     <option value="{{ $acc->id }}" {{($ledger_account==$acc->id) ? "selected" :""}}  > {{ $acc->accounts_name." [ ".$acc->ledgeraccount_subcategories." ] " }}</option>
                    @endforeach;

                </select>
                </div>
                </div>
            </div>

        </div>

<br>
<br>
<div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                           
                            <button type="submit" class="btn btn-primary" float:right; Style="width:45%;">Search</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"onclick="history.back()">Cancel</button>
                        </div>
                    </div>
                </div>
                </div>                 



                    <br>
<br>



      

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



<table class="table table-striped">

<tr>
<th colspan="2">
 <h6 class="text-center">
 {{ strtoupper($key->accounts_name." [ ".$key->ledgeraccount_subcategories." ] ") }}
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



                    @foreach($debit_transactions as $debit)
                    <tr>
                        <td>
                            {{ date('M d Y ',strtotime($debit->journal_date)) }}

                        </td>
                        <td>
                            @php
                                $crediter_name = DB::table('journal_items as q')
                                ->Leftjoin('journal_transactions','journal_transactions.id','=','q.journal_items_transaction')
                                ->Leftjoin('ledgeraccounts','ledgeraccounts.id','=','q.journal_transaction_account')
                                ->where('q.journal_items_type',1)
                                ->where('journal_items_transaction',$debit->journal_items_transaction)
                                ->whereBetween('journal_transactions.journal_date', [$ledger_from, $ledger_to])
                                ->select('accounts_name')
                                ->first();
                            @endphp
                             {{ "To  ".$crediter_name->accounts_name." A/c" }}
                        </td>


                        <td>
                            {{ $debit->journal_items_amount }}
                        </td>


                    </tr>
                    @endforeach

                    @if($sum_debit_transaction<$sum_credit_transaction)
                    <tr>
                        <td>
                            {{ date('M d Y',strtotime($ledger_to)) }}
                        </td>
                        <td>

                @switch($key->accounts_subcategory)
                    @case(2)
                {{ "To Trading Account c/d" }}
                        @break
                     @case(3)
                        {{ "To P & L Account c/d" }}
                                @break
                     @case(4)
                            {{ "To P & L Account c/d" }}
                                 @break
        

                    @default
                    {{ "To Balance c/d" }}
                @endswitch

                        </td>
                        <td>
                            {{ $sum_credit_transaction - $sum_debit_transaction }}
                        </td>
                    </tr>
                    @endif

                    {{-- <tr>

                        <td colspan="2"></td>
                        <td>
                            {{ max($sum_credit_transaction,$sum_debit_transaction) }}
                        </td>
                    </tr> --}}

                    </table>

    </th>
<th>
                    <table class="table .table-bordered ledger_table" border="2" >
                                        <tr>
                                            <th>Date</th>
                                            <th>Particulars</th>
                                            <th>Amount</th>
                                        </tr>
                                        @foreach($credit_transactions as $credit)

                                        @php
                                            $debitor_name = DB::table('journal_items as q')
                                            ->Leftjoin('journal_transactions','journal_transactions.id','=','q.journal_items_transaction')
                                            ->Leftjoin('ledgeraccounts','ledgeraccounts.id','=','q.journal_transaction_account')
                                            ->where('q.journal_items_type',2)
                                            ->where('journal_items_transaction',$credit->journal_items_transaction)
                                            ->whereBetween('journal_transactions.journal_date', [$ledger_from, $ledger_to])
                                            ->select('*')
                                            ->get()
                                        @endphp



                                        @foreach ($debitor_name as $deb )
                    <tr>
                        <td>
                            {{ date('M d Y ',strtotime($credit->journal_date)) }}

                        </td>
                        <td>





                             {{ "By  ".$deb->accounts_name." A/c" }}


                        </td>


                        <td>
                            {{ $deb->journal_items_amount }}
                        </td>


                    </tr>
                    @endforeach
                    @endforeach

                    @if($sum_debit_transaction>$sum_credit_transaction)
                    <tr>
                        <td>
                            {{ date('M d Y',strtotime($ledger_to)) }}
                        </td>
                        <td>
                          {{-- {{ "By Balance c/d" }} --}}


                          @switch($key->accounts_subcategory)
                          @case(2)
                      {{ "By Trading Account c/d" }}
                              @break

                              @case(3)
                      {{ "By P & L Account c/d" }}
                              @break

                              @case(4)
                      {{ "By P & L Account c/d" }}
                              @break

                          @default
                          {{ "By Balance c/d" }}
                      @endswitch
                        </td>
                        <td>
                            {{ $sum_debit_transaction - $sum_credit_transaction }}
                        </td>
                    </tr>
                    @endif
                    {{-- <tr>

                        <td colspan="2"></td>
                        <td>
                            {{ max($sum_credit_transaction,$sum_debit_transaction) }}
                        </td>
                    </tr> --}}
                                        </table>

                    </th>
                    </tr>
<tr>
<td style="text-align:right;">
   <b><h5> {{ max($sum_credit_transaction,$sum_debit_transaction) }}</h5></b>
</td>
<td style="text-align:right;">
    <b><h5> {{ max($sum_credit_transaction,$sum_debit_transaction) }}</h5></b>
</td>
</tr>

                    </table>

<br>
@endforeach
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
                  //  url:"{{ route('delete_full_journal_transaction') }}",
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

@endsection



