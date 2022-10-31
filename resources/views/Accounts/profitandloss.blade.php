@extends('layouts.hmsmain')
@section('content')
 <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ url('assets/css') }}/sweetalert.css">

 <style>.swal-button {

        width:fit-content;





      }
{{-- table{
box-shadow:none !important;
} --}}

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
    <h2 id="manufacturing123"></h2><h2> PROFIT & LOSS ACCOUNT</h2>

      <div class="table-responsive">
          <br>
          <table class="table table-striped table">
              <tr>
                  <form method="post" action="{{ url('profitandlossaccount') }}">
                      @csrf
                  <td>From Date</td>
                  <td><input type="date" name="ledger_from" required value="{{$ledger_from}}"  class="form-control"></td>
                  <td>To Date</td>
                  <td><input type="date"  name="ledger_to" required value="{{$ledger_to}}"  class="form-control"></td>


              </tr>
              <tr>
                {{--  <td>Account</td>
                <td colspan="2">

                 <select class="form-control" name="ledger_account" >
                    <option value=""> Select Account</option>
                    @foreach($account as $acc):
                     <option value="{{ $acc->id }}" {{($ledger_account==$acc->id) ? "selected" :""}}  > {{ $acc->accounts_name }}</option>
                    @endforeach;

                </select>

                </td>  --}}
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
    <th colspan="5" class="text-center"> <h5 class="manufacturing_heading">MANUFACTURING,</h5><h5> PROFIT & LOSS ACCOUNT</h5></th>
    </tr>
    <tr>
        <th colspan="5">
            @if(!empty($ledger_from)&&!empty($ledger_to))
            <h6 class="text-center"> From<strong>
                 {{date('d M, Y',strtotime($ledger_from))}}</strong> To <strong>{{date('d M, Y',strtotime($ledger_to))}}</strong> </h6>
             @endif
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
                @php

                    $dr_opening_stock=0;
                    $dr_production=0;

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

                @if($sum_debit_transaction>$sum_credit_transaction)





                            @if($key->accounts_subcategory==1)
                            @if($key->accounts_category==19)


                            <tr class="manufacturing_heading">
                                <td style="font-size:13px;">{{"TO ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                <td style="font-size:14px;">{{ $sum_debit_transaction - $sum_credit_transaction }}</td>
                            </tr>
                                    @php
                                        $dr_opening_stock +=$sum_debit_transaction - $sum_credit_transaction;
                                    @endphp
                            @endif
                            @if($key->accounts_category==20)


                            <tr class="manufacturing_heading">
                                <td style="font-size:13px;">{{"TO ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                <td style="font-size:14px;">{{ $sum_debit_transaction - $sum_credit_transaction }}</td>
                            </tr>
                                    @php
                                        $dr_opening_stock +=$sum_debit_transaction - $sum_credit_transaction;
                                    @endphp
                            @endif

                            @if($key->accounts_category<>20 && $key->accounts_category<>19)


                            <tr class="manufacturing_heading">
                                <td style="font-size:13px;">{{"TO ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                <td style="font-size:14px;">{{ $sum_debit_transaction - $sum_credit_transaction }}</td>
                            </tr>
                                    @php
                                        $dr_opening_stock +=$sum_debit_transaction - $sum_credit_transaction;
                                    @endphp
                            @endif


                            @endif

{{-- Stock in hand --}}

                            @if($key->accounts_subcategory==7)
                            @if($key->accounts_category==19)


                            <tr class="manufacturing_heading">
                                <td style="font-size:13px;">{{"TO ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                <td style="font-size:14px;">{{ $sum_debit_transaction - $sum_credit_transaction }}</td>
                            </tr class="manufacturing_heading">
                                    @php
                                        $dr_opening_stock +=$sum_debit_transaction - $sum_credit_transaction;
                                    @endphp
                            @endif
                            @if($key->accounts_category==20)


                            <tr class="manufacturing_heading">
                                <td style="font-size:13px;">{{"TO ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                <td style="font-size:14px;">{{ $sum_debit_transaction - $sum_credit_transaction }}</td>
                            </tr>
                                    @php
                                        $dr_opening_stock +=$sum_debit_transaction - $sum_credit_transaction;
                                    @endphp
                            @endif

                            @if($key->accounts_category<>20 && $key->accounts_category<>19)


                            <tr class="manufacturing_heading">
                                <td style="font-size:13px;">{{"TO ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                <td style="font-size:14px;">{{ $sum_debit_transaction - $sum_credit_transaction }}</td>
                            </tr>
                                    @php
                                        $dr_opening_stock +=$sum_debit_transaction - $sum_credit_transaction;
                                    @endphp
                            @endif


                            @endif

{{-- ended stock in hand --}}


                            {{-- @if($key->accounts_subcategory==9 )
                            <tr>
                                <td style="font-size:13px;">{{"TO ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                <td style="font-size:14px;">{{ $sum_debit_transaction - $sum_credit_transaction }}</td>
                            </tr>
                            @php
                                $dr_opening_stock +=$sum_debit_transaction - $sum_credit_transaction;
                             @endphp

                            @endif --}}






                    {{-- @if($key->accounts_subcategory==6)
                    <tr>
                        <td style="font-size:13px;">{{"TO ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                        <td style="font-size:14px;">{{ $sum_debit_transaction - $sum_credit_transaction }}</td>
                    </tr>
                    @php
                        $dr_production +=$sum_debit_transaction - $sum_credit_transaction;
                     @endphp

                    @endif --}}

                @endif

                @endif


                @endforeach
                {{--  <tr>
                    <td></td>
                    <td class="text-dark"><b>{{ $dr_opening_stock+$dr_production}}</b></td>

                </tr>  --}}

            </table>
        </th>




        <th colspan="2">

            <table class="table table-striped">
                <tr>
                    <th>Particulars</th>
                    <th>Amount</th>
                </tr>

                @php
                    $cr_closing_stock=0;
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

                @if($sum_debit_transaction<$sum_credit_transaction)


                                            @if($key->accounts_subcategory==1 )
                                            @if($key->accounts_category==19 )


                                            <tr class="manufacturing_heading">
                                                <td style="font-size:13px;">{{"BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                                <td style="font-size:14px;">{{ $sum_credit_transaction-$sum_debit_transaction }}</td>
                                            </tr>
                                                    @php
                                                        $cr_closing_stock += $sum_credit_transaction-$sum_debit_transaction;
                                                    @endphp
                                            @endif
                                            @if($key->accounts_category==20 )


                                            <tr class="manufacturing_heading">
                                                <td style="font-size:13px;">{{"BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                                <td style="font-size:14px;">{{ $sum_credit_transaction-$sum_debit_transaction }}</td>
                                            </tr>
                                                    @php
                                                        $cr_closing_stock += $sum_credit_transaction-$sum_debit_transaction;
                                                    @endphp
                                            @endif
                                            @if($key->accounts_category<>20 && $key->accounts_category<>19 )


                                            <tr class="manufacturing_heading">
                                                <td style="font-size:13px;">{{"BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                                <td style="font-size:14px;">{{ $sum_credit_transaction-$sum_debit_transaction }}</td>
                                            </tr>
                                                    @php
                                                        $cr_closing_stock += $sum_credit_transaction-$sum_debit_transaction;
                                                    @endphp
                                            @endif
                                            @endif

                                            @if($key->accounts_subcategory==7 )
                                            @if($key->accounts_category==19 )


                                            <tr class="manufacturing_heading">
                                                <td style="font-size:13px;">{{"BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                                <td style="font-size:14px;">{{ $sum_credit_transaction-$sum_debit_transaction }}</td>
                                            </tr>
                                                    @php
                                                        $cr_closing_stock += $sum_credit_transaction-$sum_debit_transaction;
                                                    @endphp
                                            @endif
                                            @if($key->accounts_category==20 )


                                            <tr class="manufacturing_heading">
                                                <td style="font-size:13px;">{{"BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                                <td style="font-size:14px;">{{ $sum_credit_transaction-$sum_debit_transaction }}</td>
                                            </tr>
                                                    @php
                                                        $cr_closing_stock += $sum_credit_transaction-$sum_debit_transaction;
                                                    @endphp
                                            @endif

                                            @if($key->accounts_category<>20 && $key->accounts_category<>19 )


                                            <tr class="manufacturing_heading">
                                                <td style="font-size:13px;">{{"BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                                <td style="font-size:14px;">{{ $sum_credit_transaction-$sum_debit_transaction }}</td>
                                            </tr>
                                                    @php
                                                        $cr_closing_stock += $sum_credit_transaction-$sum_debit_transaction;
                                                    @endphp
                                            @endif

                                            @endif


                                            {{-- @if($key->accounts_subcategory==9 )
                                            <tr>
                                                <td style="font-size:13px;">{{"BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                                <td style="font-size:14px;">{{ $sum_credit_transaction-$sum_debit_transaction }}</td>
                                            </tr>
                                            @php
                                                $cr_closing_stock +=$sum_credit_transaction-$sum_debit_transaction;
                                            @endphp

                                            @endif --}}




                @endif

                @endif

                @endforeach

                @php
                    $cr_manufacturing_bal=($dr_opening_stock+$dr_production)-$cr_closing_stock ;
                   $cost_goods_trans_to_trande= ($dr_opening_stock+$dr_production)-$cr_closing_stock
                 @endphp

@if(!empty($cost_goods_trans_to_trande))



                <tr>
                    <td style="font-size:13px;">By Cost of Goods manufactured during<br> the year transferred to Trading A/c</td>

                    <td >{{ $cost_goods_trans_to_trande }}</td>
                </tr>

@else
<style>
    #manufacturing123{
    display: none;
    }
.manufacturing_heading{
display: none;
}


    </style>
 @endif

                {{--  <tr>
                    <td></td>
                    <td class="text-dark"><b>{{ ($cr_manufacturing_bal)+$cr_closing_stock }}</b></td>
                </tr>  --}}

            </table>

        </th>
    </tr>











<tr>
<td></td>
<td class="text-dark"><b>{{ $dr_opening_stock+$dr_production}}</b></td>
<td></td>
<td class="text-dark"><b>{{ ($cr_manufacturing_bal)+$cr_closing_stock }}</b></td>
</tr>

    <tr class="text-center" >

        <th colspan="2">

            <table class="table table-striped">

                {{-- @php
                    $dr_opening_stock=0;
                    $dr_production=0;
                @endphp --}}
                @php
                                $dr_finished_goods=0;
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

                @if($sum_debit_transaction>$sum_credit_transaction)





                            @if($key->accounts_subcategory==2 && $key->accounts_category<>21 )
                            <tr>
                                <td style="font-size:13px;">{{"TO ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                <td style="font-size:14px;">{{ $sum_debit_transaction - $sum_credit_transaction }}</td>
                            </tr>
                                    @php
                                        $dr_finished_goods +=$sum_debit_transaction - $sum_credit_transaction;
                                     @endphp
                            @endif
                            @if($key->accounts_category==21 )
                            <tr>
                                <td style="font-size:13px;">{{"TO ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                <td style="font-size:14px;">{{ $sum_debit_transaction - $sum_credit_transaction }}</td>
                            </tr>
                                    @php
                                        $dr_finished_goods +=$sum_debit_transaction - $sum_credit_transaction;
                                     @endphp
                            @endif



                @endif

                @endif


                @endforeach
@if(!empty($cr_manufacturing_bal))
                <tr>
                    <td>
                      To Cost of Goods manufactured during the year transferred from Manufacturing A/c
                    </td>
                    <td>
                        {{ $cr_manufacturing_bal }}
                    </td>
                </tr>
@endif

            </table>
        </th>


        <th colspan="2">

            <table class="table table-striped">


                @php
                    $cr_closing_stock=0;
                    $cr_trading=0;
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

                @if($sum_debit_transaction<$sum_credit_transaction)


                                            @if($key->accounts_subcategory==3 && $key->accounts_category==14 )
                                            <tr>
                                                <td style="font-size:13px;">{{"BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                                <td style="font-size:14px;">{{ $sum_credit_transaction-$sum_debit_transaction }}</td>
                                            </tr>
                                                    @php
                                                        $cr_trading += $sum_credit_transaction-$sum_debit_transaction;
                                                    @endphp
                                            @endif

                                            @if($key->accounts_subcategory==3 && $key->accounts_category==15 )
                                            <tr>
                                                <td style="font-size:13px;">{{"BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                                <td style="font-size:14px;">{{ $sum_credit_transaction-$sum_debit_transaction }}</td>
                                            </tr>
                                                    @php
                                                        $cr_trading += $sum_credit_transaction-$sum_debit_transaction;
                                                    @endphp
                                            @endif

                                             @if($key->accounts_subcategory==3 && $key->accounts_category==16 )
                                            {{-- <tr>
                                                <td style="font-size:13px;">{{"BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                                <td style="font-size:14px;">{{ $sum_credit_transaction-$sum_debit_transaction }}</td>
                                            </tr> --}}
                                            {{-- @php
                                                $cr_trading +=$sum_credit_transaction-$sum_debit_transaction;
                                            @endphp --}}

                                            @endif




                @endif

                @endif

                @endforeach



                {{--  <tr>
                    <td></td>
                    <td class="text-dark"><b>{{ $cr_trading }}</b></td>
                </tr>  --}}
            </table>

        </th>
    </tr>












    <tr>

    </tr>
    <tr>
        {{-- <th colspan="2">
            <table class="table">
                <tr> --}}
                    <td><b>To Gross Profit c/d </b></td>
                    <td class="text-right" style="text-align:right"><b> {{  $cr_trading-($dr_finished_goods+$cr_manufacturing_bal) }}  </b> </td>
                {{-- </tr> --}}
<td></td>
<td></td>
                {{--  <tr>
                    <td></td>
                    <td class="text-dark text-right" style="text-align:right"><b>{{  $cr_trading }}</b></td>
                </tr>  --}}
            {{-- </table>
        </th>


        <th colspan="2"></th> --}}
    </tr>
<tr>
<td></td>
<td class="text-dark text-right" style="text-align:right" ><b>{{  $cr_trading }}</b></td>
<td></td>
<td class="text-dark text-right" style="text-align:right"><b>{{  $cr_trading }}</b></td>
</tr>
    <tr>
        <th colspan="2">
            <table class="table table-striped">
                @php
                    $expanse=0;
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

                            @if($sum_debit_transaction>$sum_credit_transaction)


                                                        @if($key->accounts_subcategory==4  )
                                                        <tr>
                                                            <td style="font-size:13px;">{{"BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                                            <td style="font-size:14px;">{{ $sum_debit_transaction-$sum_credit_transaction}}</td>
                                                        </tr>
                                                                @php
                                                                    $expanse+= $sum_debit_transaction-$sum_credit_transaction;
                                                                @endphp
                                                        @endif

                                                        @if($key->accounts_subcategory==11 )
                                                        <tr>
                                                            <td style="font-size:13px;">{{"BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                                            <td style="font-size:14px;">{{$sum_debit_transaction - $sum_credit_transaction }}</td>
                                                        </tr>
                                                        @php
                                                            $expanse +=$sum_debit_transaction-$sum_credit_transaction;
                                                        @endphp

                                                        @endif






                            @endif


                            @endif


                            @endforeach
                {{-- <tr>
                    <td>
                        To Net Profit
                    </td>
                    <td> --}}
                        {{-- @php
                        $subvalue=$dr_finished_goods+$cr_manufacturing_bal;
                        $final_values= $cr_trading-$subvalue;
                    @endphp
                        <b>{{  $final_values-$expanse }}</b> --}}
                        </td>
                {{-- </tr> --}}

            </table>
        </th>


        <th colspan="2">
        <table class="table table-striped">

        <tr>
        <td>By Gross Profit b/d</td>
        <td>{{$cr_trading-($dr_finished_goods+$cr_manufacturing_bal)}}</td>
        </tr>

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

                    @if($sum_debit_transaction<$sum_credit_transaction)


                                                @if($key->accounts_subcategory==3 && $key->accounts_category==16)
                                                <tr>
                                                    <td style="font-size:13px;">{{"BY ".strtoupper($key->accounts_name)." [ ".$key->subcat_name." ] "}}</td>
                                                    <td style="font-size:14px;">{{ $sum_credit_transaction-$sum_debit_transaction }}</td>
                                                </tr>
                                                        @php
                                                            $cr_trading += $sum_credit_transaction-$sum_debit_transaction;
                                                        @endphp
                                                @endif




                    @endif

                    @endif

                    @endforeach




        </table>

        </th>

    </tr>
    <tr>
<td><b>To Net Profit</b></td>
<td>@php
    $subvalue=$dr_finished_goods+$cr_manufacturing_bal;
    $final_values= $cr_trading-$subvalue;
@endphp
    <b>{{  $final_values-$expanse }}</b></td>
<td></td>
<td></td>
    </tr>
        <tr>
            <td width="55%"></td>
            <td class="text-dark text-right"><b>{{($final_values-$expanse)+$expanse}}</b></td>
            <td width="55%"></td>
            <td class="text-dark text-right"><b>{{$cr_trading-($dr_finished_goods+$cr_manufacturing_bal)}}</b></td>
        </tr>
</table>
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



