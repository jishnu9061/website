@extends('layouts.hmsmain')
@section('content')
<link rel="stylesheet" href="{{ url('assets/css') }}/sweetalert.css">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<style>.swal-button {

    width:fit-content;





  }
</style>
<div class="container">
	<br>
    <h2>Stock Items</h2>

        <button  class="btn btn-primary"  data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default"  class="btn btn-secondary">Create Items</button>

      <div class="table-responsive">
<table class="table table-striped" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Code</th>
      <th scope="col">Group</th>
      <th scope="col">Category</th>
      <th scope="col">Sub Category</th>
      <th scope="col">Description</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
@php
$no=1;
@endphp
 @foreach($stock_items as $ledcat)
      <tr class="product_data" class="data">
          <td id="name">{{$no++ }}</td>
          <td id="expanse-name">{{ $ledcat->stock_items_name }}</td>
          <td id="expanse-name">{{ $ledcat->stock_items_itemcode }}</td>
          <td id="expanse-name">{{ $ledcat->stock_groups_name }}</td>
          <td id="expanse-name">{{ $ledcat->stock_categories_name }}</td>
          <td id="expanse-name">{{ $ledcat->stock_subcategories_name }}</td>
          <td id="expanse-name">{{ $ledcat->stock_items_desc }}</td>
          <input type="hidden" id="id" value="{{ $ledcat->id }}" name="">
               <td>


                <a href="#" class="edits"    data-toggle="modal" id="amb_edit" data-bs-toggle="modal"
                   data-bs-target="#edit"><i class="fas fa-edit" onclick="values_edit(`{{$ledcat->id}}`,
                       `{{$ledcat->stock_items_name}}`
                       ,`{{$ledcat->stock_items_cat}}`
                       ,`{{$ledcat->stock_items_subcat}}`
                       ,`{{$ledcat->stock_items_desc}}`
                       ,`{{$ledcat->stock_items_itemcode}}`
                       ,`{{$ledcat->stock_items_groups}}`
                       );" >
                </i></a>

            </td>
                   <td>


         {{-- <a onclick="return confirm('Are you sure ?');" href="{{ url('delete_ledger_accounts_categories/'.$ledcat->id) }}"> --}}
            <a  onclick="delete_stock_category({{ $ledcat->id }})">
            <i class="fas fa-trash-alt"></i>
            </a>

        {{-- </a> --}}

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



                                    <h5 class="modal-title bb" id="myModalLabel1"> Add Stock Items</h5>



     <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
         <i data-feather="x"></i>
          </button>
             </div>
              <form action="{{url('save_stock_items')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">

                                                              <div class="card-body">

                     <div class="form-group mb-3">
                         <label> Item Code </label>
                             <input type="text" class="form-control" name="stock_items_itemcode" placeholder="Item Code" required>
                        </div>
                        <div class="form-group mb-3">
                            <label> Item Name </label>
			                <input type="text" class="form-control" name="stock_items_name" placeholder="Item Name" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Category </label>
			             <select class="form-control" required name="stock_items_cat" required>
                            <option value="">Select</option>
                            @foreach($stock_cat as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->stock_categories_name }}</option>
                            @endforeach
                         </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Sub Category </label>
			             <select class="form-control" required name="stock_items_subcat" required>
                            <option value="">Select</option>
                            @foreach($stock_subcat as $subcat)
                            <option value="{{ $subcat->id }}">{{ $subcat->stock_subcategories_name }}</option>
                            @endforeach
                         </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Group</label>
			             <select class="form-control" required name="stock_items_groups" required>
                            <option value="">Select</option>
                            @foreach($stock_groups as $group)
                            <option value="{{ $group->id }}"> {{ $group->stock_groups_name }} </option>
                            @endforeach
                         </select>
                        </div>
                        <div class="form-group mb-3">
                            <label> Item Description </label>
			                <input type="text" class="form-control" style="height:100px;" name="stock_items_desc" >
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



                                    <h5 class="modal-title bb" id="myModalLabel1">Edit Stock Item</h5>



                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <form action="{{url('update_stock_items')}}" method="post" >
                                        @csrf
                                       <div class="modal-body">

                                            <div class="card-body">
                        <input type="hidden" name="id" id="item-id" value="" >

                        <div class="form-group mb-3">
                            <label> Item Code </label>
                            <input type="text" class="form-control" name="stock_items_itemcode" id="item-code" placeholder="Item Code" required>
                        </div>

                           <div class="form-group mb-3">
                               <label> Item Name </label>
                               <input type="text" class="form-control" name="stock_items_name" id="item-name" placeholder="Item Name" required>
                           </div>

                           <div class="form-group mb-3">
                               <label>Category </label>
                            <select class="form-control" required name="stock_items_cat" id="item-cat" required>
                               <option value="">Select</option>
                               @foreach($stock_cat as $cat)
                               <option value="{{ $cat->id }}">{{ $cat->stock_categories_name }}</option>
                               @endforeach
                            </select>
                           </div>
                           <div class="form-group mb-3">
                               <label>Sub Category </label>
                            <select class="form-control" id="item-subcat" required name="stock_items_subcat" required>
                               <option value="">Select</option>
                               @foreach($stock_subcat as $subcat)
                               <option value="{{ $subcat->id }}">{{ $subcat->stock_subcategories_name }}</option>
                               @endforeach
                            </select>
                           </div>
                           <div class="form-group mb-3">
                            <label>Group</label>
			             <select class="form-control" id="item-group" required name="stock_items_groups" required>
                            <option value="">Select</option>
                            @foreach($stock_groups as $group)
                            <option value="{{ $group->id }}"> {{ $group->stock_groups_name }} </option>
                            @endforeach
                         </select>
                        </div>
                           <div class="form-group mb-3">
                               <label> Item Description </label>
                               <input type="text" class="form-control" id="item-desc" style="height:100px;" name="stock_items_desc" >
                           </div>
                           </div>
                           </div>


                                       <div class="modal-footer">
                                           <button type="submit" class="btn btn-primary" >Update</button>
                                           <button type="button" class="btn btn-alert" data-bs-dismiss="modal">Cancel</button>
                                       </div>
                                         </form>



                                </div>
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
    function values_edit(val1,val2,val3,val4,val5,val6,val7){

        $('#item-id').val(val1);
        $("#item-name").val(val2);
        $("#item-cat").val(val3).change();
        $("#item-subcat").val(val4).change();
        $("#item-desc").val(val5);
        $("#item-code").val(val6);
        $("#item-group").val(val7);
      };

      function delete_stock_category(value){


        swal({
            title: "Are You Sure ? ",
            text: "The Stock Item Will be deleted !",
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
                    url:"{{ route('delete_stock_items') }}",
                    type:"POST",
                    data: {
                        id: value,

                    },
                    success:function (data) {
                        //console.log(data);
                        if(data.response==1){

                            swal({title: "Success!",
                            text: "Stock Item Deleted!",
                            icon: "success",
                            button: "OK"})
                            .then((value) => {
                            window.location.reload();
                            });


                        }else{

                            swal({title: "Error!",
                            text: "Category cannot Deleted because Stock Transactions are existing with this Item !",
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



