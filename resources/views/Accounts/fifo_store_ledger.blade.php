@extends('layouts.hmsmain')
@section('content')
<link rel="stylesheet" href="{{ url('assets/css') }}/sweetalert.css">
<link href="{{ url('assets/css') }}/select2.min.css" rel="stylesheet" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<style>.swal-button {

    width:fit-content;



  }

   tbody, tfoot, tr, td, th {
    border-color: black;
    border-style: solid;
    border-width: 1px;
}
</style>
<div class="container">
<form method="post" action="{{ url('store_ledger')}}">
    @csrf
<table class="table table-striped">
<tr>
<td>GROUP</td>
<td><select class="form-control"  name="transaction_group_select" required  onchange="apply_group_result_item(this.value)" id="transaction-group-select">
    <option value="">Select</option>
    @foreach($stock_groups as $group)
    <option value="{{ $group->id }}" {{ ($group->id==$transaction_group_select) ? "selected":"" }} > {{ $group->stock_groups_name }} </option>
    @endforeach
</select>
</td>
<td>ITEM</td>
<td>
    <select class="custom-select2 form-control select2-hidden-accessible select2_function"  required style="width: 100%; height: 38px;"
     id="stock-item-select" name="item_select">
     @if(!empty($item_select_options))
    @foreach ($item_select_options as $val )

    <option value="{{ $val->id }}" {{ ($val->id==$item_select) ? "selected":"" }}> {{ $val->stock_items_itemcode."--".$val->stock_items_name."-[".$val->stock_categories_name."--".$val->stock_subcategories_name."]"}}</option>

    @endforeach

     @endif

</select>
</td>

</tr>
<tr>
<td>FROM DATE</td>
<td> <input class="form-control" name="from_date" value="{{ $from_date }}" required type="date"> </td>
<td>TO DATE</td>
<td><input class="form-control" name="to_date" value="{{ $to_date }}" required type="date"> </td>
</tr>
<tr>
    <td colspan="3"></td>

    <td align="center"><button class="btn btn-primary" type="submit" > SUBMIT</button></td>
    </tr>
</table>
</form>
	<br>
    <h2>Store Ledger</h2>

        {{-- <button  class="btn btn-primary"  data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default"  class="btn btn-secondary">Create Category</button> --}}
<div class="col-md-12 col-lg-12 col-sm-4">
<table class="table table-striped" style="margin-top: 40px; ">
    <thead>
        <tr>
        <th>Sl no</th>
        <th>Tran Id</th>

        <th>Date</th>
        <th>Item</th>
        <th>Transaction</th>

        <th colspan="3" style="text-align: center; border: 2px solid black;">Reciept</th>
        <th colspan="3" style="text-align: center;border: 2px solid black;">Issue</th>
        <th colspan="3" style="text-align: center; border: 2px solid black;">Balance</th>
       </tr>
       <tr>
           <th></th>
           <th></th>
           <th></th>

           <th></th>
           <th></th>

           <th>Quantity</th>

           <th>Rate</th>

           <th>Amount</th>
           <th>Quantity</th>

           <th>Rate </th>

           <th>Amount</th>
           <th>Quantity</th>
           <th>Rate</th>
           <th>Amount</th>

       </tr>
    </thead>
    <tbody>
     @foreach($opening_values as $val)

     @php


       $query=DB::table('fifo_table_acc')
        ->Leftjoin('stock_transaction_table_acc as a', 'a.id', '=', 'fifo_table_acc.transaction_id')
        ->Leftjoin('stock_items_acc as b', 'b.id', '=', 'fifo_table_acc.item')
        ->Leftjoin('stock_groups_acc as d', 'd.id', '=', 'b.stock_items_groups')
        ->where('fifo_table_acc.transaction_company',Auth::user()->Hospital);

        $query->where('b.stock_items_groups',$transaction_group_select);

            $query->where('b.id',$item_select);

            $query->where('tranaction_date', '<', $from_date);

         $query->where('transaction_type', 1);
         $query->where('fifo_table_acc.id', $val->rec_id);

        $query-> select(
                DB::raw('added_bal_qty as rec_qty'),
                DB::raw('added_bal_amnt as rec_amnt'),
                DB::raw('added_bal_rate as rec_rate'),
                DB::raw('fifo_table_acc.id as reciept_id'),
                );

        $values=$query->get();



        $query1=DB::table('fifo_table_acc')
        ->Leftjoin('stock_transaction_table_acc as a', 'a.id', '=', 'fifo_table_acc.transaction_id')
        ->Leftjoin('stock_items_acc as b', 'b.id', '=', 'fifo_table_acc.item')
        ->Leftjoin('stock_groups_acc as d', 'd.id', '=', 'b.stock_items_groups')
        ->where('fifo_table_acc.transaction_company',Auth::user()->Hospital);

        $query1->where('b.stock_items_groups',$transaction_group_select);

            $query1->where('b.id',$item_select);

            $query1->where('tranaction_date', '<', $from_date);

         $query1->where('transaction_type', 2);
         $query1->where('issue_recpt_id', $val->rec_id);

        $query1-> select(
                DB::raw('SUM(issue_qty) as iss_qty'),
                DB::raw('SUM(issue_amount) as iss_amnt'),
                );

        $values1=$query1->get();





    if(!empty($values[0]->rec_qty)){
        $rec_qty=$values[0]->rec_qty;
    }else{
        $rec_qty=0;
    }
    if(!empty($values[0]->rec_rate)){
        $rec_rate=$values[0]->rec_rate;
    }else{
        $rec_rate=0;
    }

    if(!empty($values[0]->rec_amnt)){
        $rec_amnt=$values[0]->rec_amnt;
    }else{
        $rec_amnt=0;
    }


    if(!empty($values1[0]->iss_qty)){
        $issue_qty=$values1[0]->iss_qty;
    }else{
        $issue_qty=0;
    }


    if(!empty($values1[0]->iss_amnt)){
        $iss_amnt=$values1[0]->iss_amnt;
    }else{
        $iss_amnt=0;
    }

    if(!empty($values1[0]->reciept_id)){
        $reciept_id=$values1[0]->reciept_id;
    }else{
        $reciept_id=0;
    }



     @endphp
        <tr>
        <td colspan="2" ></td>
        <td>
       {{-- {{ date('d M Y',strtotime($val->tranaction_date)) }} --}}
        </td>
            <td colspan="8">

              {{-- {{  print_r($values) }}
              <br><hr>
              {{ print_r($values1) }} --}}
            </td>

            <td>

              {{ $rec_qty-$issue_qty }}

            </td>
            <td>
                {{ $rec_rate }}
             </td>
            <td>
                {{($rec_amnt)-($iss_amnt) }}
            </td>
        </tr>
        @endforeach
        @php
            $no=1;

                $balqty=0;
                $balrate=0;
                $balamount=0;
        @endphp
        @foreach ( $ledger_datas as $row )
         <tr>
            <td>{{ $no++ }}</td>
           <td>{{ $row->transaction_id }}</td>


           <td>{{ date('d M Y',strtotime($row->tranaction_date)) }}</td>
           <td>[{{ $row->stock_items_itemcode }}]<br>
               {{ $row->stock_items_name }}<br>
              [ {{ $row->stock_groups_name }}]
            </td>
           <td>{{ ($row->stock_transaction_type==1)? "RECIEPT" :"ISSUE" }}

           </td>

           <td>{{ $row->receipt_qty  }}
{{--
            @php
                $balqty = $balqty+$row->receipt_qty ;
            @endphp --}}
           </td>

           <td>{{ $row->receipt_rate  }}</td>
           <td>{{ $row->receipt_amount  }}</td>

           <td>{{ $row->issue_qty  }}</td>
           <td>{{ $row->issue_rate  }}</td>

           <td>{{ $row->issue_amount  }}</td>

           <td>{{ $row->balance_qty  }}</td>
           <td>{{ $row->balance_rate  }}</td>
           <td>{{ $row->balance_amount  }}</td>
        </tr>
        @endforeach
       


        @foreach($closing_values as $val)

        @php
   
   
          $query=DB::table('fifo_table_acc')
           ->Leftjoin('stock_transaction_table_acc as a', 'a.id', '=', 'fifo_table_acc.transaction_id')
           ->Leftjoin('stock_items_acc as b', 'b.id', '=', 'fifo_table_acc.item')
           ->Leftjoin('stock_groups_acc as d', 'd.id', '=', 'b.stock_items_groups')
           ->where('fifo_table_acc.transaction_company',Auth::user()->Hospital);
   
           $query->where('b.stock_items_groups',$transaction_group_select);
   
               $query->where('b.id',$item_select);
   
               $query->where('tranaction_date', '<=', $to_date);
   
            $query->where('transaction_type', 1);
            $query->where('fifo_table_acc.id', $val->rec_id);
   
           $query-> select(
                   DB::raw('added_bal_qty as rec_qty'),
                   DB::raw('added_bal_amnt as rec_amnt'),
                   DB::raw('added_bal_rate as rec_rate'),
                   DB::raw('fifo_table_acc.id as reciept_id'),
                   );
   
           $values=$query->get();
   
   
   
           $query1=DB::table('fifo_table_acc')
           ->Leftjoin('stock_transaction_table_acc as a', 'a.id', '=', 'fifo_table_acc.transaction_id')
           ->Leftjoin('stock_items_acc as b', 'b.id', '=', 'fifo_table_acc.item')
           ->Leftjoin('stock_groups_acc as d', 'd.id', '=', 'b.stock_items_groups')
           ->where('fifo_table_acc.transaction_company',Auth::user()->Hospital);
   
           $query1->where('b.stock_items_groups',$transaction_group_select);
   
               $query1->where('b.id',$item_select);
   
               $query1->where('tranaction_date', '<=', $to_date);
   
            $query1->where('transaction_type', 2);
            $query1->where('issue_recpt_id', $val->rec_id);
   
           $query1-> select(
                   DB::raw('SUM(issue_qty) as iss_qty'),
                   DB::raw('SUM(issue_amount) as iss_amnt'),
                   );
   
           $values1=$query1->get();
   
   
   
   
   
       if(!empty($values[0]->rec_qty)){
           $rec_qty=$values[0]->rec_qty;
       }else{
           $rec_qty=0;
       }
       if(!empty($values[0]->rec_rate)){
           $rec_rate=$values[0]->rec_rate;
       }else{
           $rec_rate=0;
       }
   
       if(!empty($values[0]->rec_amnt)){
           $rec_amnt=$values[0]->rec_amnt;
       }else{
           $rec_amnt=0;
       }
   
   
       if(!empty($values1[0]->iss_qty)){
           $issue_qty=$values1[0]->iss_qty;
       }else{
           $issue_qty=0;
       }
   
   
       if(!empty($values1[0]->iss_amnt)){
           $iss_amnt=$values1[0]->iss_amnt;
       }else{
           $iss_amnt=0;
       }
   
       if(!empty($values1[0]->reciept_id)){
           $reciept_id=$values1[0]->reciept_id;
       }else{
           $reciept_id=0;
       }
   
   
   
        @endphp
           <tr>
           <td colspan="2" ></td>
           <td>
          {{-- {{ date('d M Y',strtotime($val->tranaction_date)) }} --}}
           </td>
               <td colspan="8">
   
                 {{-- {{  print_r($values) }}
                 <br><hr>
                 {{ print_r($values1) }} --}}
               </td>
   
               <td>
   
                 {{ $rec_qty-$issue_qty }}
   
               </td>
               <td>
                   {{ $rec_rate }}
                </td>
               <td>
                   {{($rec_amnt)-($iss_amnt) }}
               </td>
           </tr>
           @endforeach
















                </tbody>
</table>
</div>
</div>


  <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">



                                    <h5 class="modal-title bb" id="myModalLabel1"> Add Stock Category</h5>



     <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
         <i data-feather="x"></i>
          </button>
             </div>
              <form action="{{url('save_stock_categories')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <label> Category Name </label>
			                <input type="text" class="form-control" name="stock_categories_name" placeholder="" required>
                        </div>

                        </div>
                        </div>


                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" >Save</button>
                                        <button type="button" class="btn btn-alert" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                      </form>


                                </div>
                            </div>
                        </div>

                        <div class="modal fade text-left" id="edit" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">



                                    <h5 class="modal-title bb" id="myModalLabel1">Edit Group</h5>



                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="{{url('update_stock_categories')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <input type="hidden" id="cat-id" name="id">
                            <label>Category Name</label>
			                <input type="text" class="form-control" required name="stock_categories_name" id="expanse_type_name">
                        </div>

                        </div>
                        </div>


                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" >Update</button>
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                      </form>


                                </div>
                            </div>
                        </div>

                        <script src="{{ url('assets/js') }}/jquery.min.js"></script>
                        <script src="{{ url('assets/js') }}/sweetalert.min.js"></script>

 <script src="{{ url('assets/js') }}/select2.min.js" defer></script>


<script>
    $(document).ready(function() {

        $('.select2_function').select2();
    });
</script>
<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
  })
  </script>

  <script>
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



    function values_edit(val1,val2,val3){

        $("#expanse_type_name").val(val2);
       $('#cat-id').val(val1);
      };

      function delete_stock_category(value){


        swal({
            title: "Are You Sure ? ",
            text: "The category Should be deleted",
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
                    url:"{{ route('delete_stock_category') }}",
                    type:"POST",
                    data: {
                        id: value,

                    },
                    success:function (data) {
                        //console.log(data);
                        if(data.response==1){

                            swal({title: "Success!",
                            text: "Category Deleted!",
                            icon: "success",
                            button: "OK"})
                            .then((value) => {
                            window.location.reload();
                            });


                        }else{


                            swal({title: "Error!",
                            text: "Category cannot Deleted because items are existing with this category!",
                            icon: "error",
                            button: "OK"})


                        }
                    }
                    })



            } else {
             // swal("Transaction is not proceeded!");
            }
          });

      }
  </script>

@endsection



