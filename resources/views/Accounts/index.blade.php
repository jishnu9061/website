@extends('layouts.hmsmain')
@section('content')

<style>.swal-button {

    width:fit-content;





  }
</style>
<div class="container">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ url('assets/css') }}/sweetalert.css">
	<br>
    {{-- heading --}}
  <h4 id="hdtpa"><b>Ledger Accounts</b></h4>
  <br><br>
   

        <button  class="btn btn-primary "  data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default"  class="btn btn-secondary">Add Account</button>

      <div class="table-responsive">
<table class="table table-striped" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Account Name</th>
      <th scope="col">Type</th>
      <th scope="col">Group</th>
      <th scope="col">Budget</th>
      <th scope="col">Description </th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
@php
$no=1;
@endphp
 @foreach($ledger_account as $exp_type)
      <tr class="product_data" class="data">
          <td id="name">{{$no++ }}</td>
          <td id="expanse-name">{{ $exp_type->accounts_name }}</td>
          <td id="expanse_status">{{ $exp_type->category_name}}</td>
          <td id="expanse_status">{{ $exp_type->subcategory_name}}</td>
          <td>{{ $exp_type->budget_name }} {{ $exp_type->budget_name }} </td>
          <td id="expanse_status">{{ $exp_type->accounts_desc}}</td>

               <input type="hidden" id="expanse_type_id" value="{{$exp_type->id}}" name="">
               <td>
{{-- @if($exp_type->accounts_update_privilage==0) --}}


                <a href="#" class="edits"    data-toggle="modal" id="amb_edit" data-bs-toggle="modal"
                   data-bs-target="#edit"><i class="fas fa-edit" onclick="values_edit(`{{$exp_type->id}}`,`{{$exp_type->category_id}}`,`{{$exp_type->subcategory_id}}`,`{{$exp_type->accounts_name}}`,`{{$exp_type->accounts_desc}}`,'{{ $exp_type->budget_id }}');" >
                       </i></a>
  {{-- @endif --}}
                    </td>
                   <td>

                    @if($exp_type->accounts_update_privilage==0)
                    <a onclick="delete_function({{ $exp_type->id }})" ><i class="fas fa-trash-alt"></i></a>
                    @endif
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



                                    <h5 class="modal-title bb" id="myModalLabel1"> Add Ledger Accounts </h5>



     <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
         <i data-feather="x"></i>
          </button>
             </div>
              <form action="{{url('save_ledger_acounts')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <label> Account Name </label>
			                <input type="text" class="form-control" name="accounts_name" placeholder="" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Type</label>
                           <select class="form-control" name="accounts_category" id="account_cat" required>
                               <option value=""> Select</option>
                               @foreach($category as $cat):
                                <option value="{{ $cat->id }}" > {{ $cat->ledgeraccount_categories }}</option>
                               @endforeach;

                           </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Group</label>

                           <select class="form-control" name="accounts_subcategory"   required>
                            <option value=""> Select</option>
                            @foreach($subcategory as $subcat):
                            <option value="{{ $subcat->id }}" > {{ $subcat->ledgeraccount_subcategories }} </option>
                           @endforeach;
                        </select>
                        </div>
                        <div class="form-group mb-3">
                            <label> Budget </label>
                           <select class="form-control" name="budget_cat" id="budget_cat"  required>
                               <option value=""> Select</option>
                               @foreach($budget_cat as $budget):
                               <option value="{{ $budget->id }}" > {{ $budget->budget_name }} </option>
                              @endforeach;
                           </select>
                        </div>


                        <div class="form-group mb-3">
                            <label>Description </label>
			                <textarea  class="form-control" name="accounts_desc">

                            </textarea>
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



                                    <h5 class="modal-title bb" id="myModalLabel1">Edit Ledger Acconts</h5>



                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="{{url('update_ledger_acounts')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <input type="hidden" id="id" name="id">
                            <label>Account Name</label>
			                <input type="text" class="form-control"  required name="accounts_name"  id="expanse_type_name" >
                        </div>

                        <div class="form-group mb-3">
                            <label> Type </label>
                           <select class="form-control" name="accounts_category" id="account_cat_edit" required>
                               <option value=""> Select</option>
                               @foreach($category as $cat):
                                <option value="{{ $cat->id }}" > {{ $cat->ledgeraccount_categories }}</option>
                               @endforeach;

                           </select>
                        </div>
                        <div class="form-group mb-3">
                            <label> Group </label>
                           <select class="form-control" name="accounts_subcategory" id="account_subcat_edit"  required>
                               <option value=""> Select</option>
                               @foreach($subcategory as $subcat):
                               <option value="{{ $subcat->id }}" > {{ $subcat->ledgeraccount_subcategories }} </option>
                              @endforeach;
                           </select>
                        </div>
                        <div class="form-group mb-3">
                            <label> Budget </label>
                            <select class="form-control" name="editbudget_cat" id="editbudget_cat"  required>
                                <option value=""> Select</option>
                                @foreach($budget_cat as $budget):
                                <option value="{{ $budget->id }}" > {{ $budget->budget_name }} </option>
                               @endforeach;
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label>Desctiption</label>
                            <textarea class="form-control" name="accounts_desc"   id="expanse-type-status">

                            </textarea>
                        </div>
                        </div>
                        </div>


                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" >Save</button>
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
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
    function values_edit(val1,val2,val3,val4,val5,val6){


        $("#account_cat_edit").val(val2).change();
        $("#account_subcat_edit").val(val3).change();
        $("#expanse_type_name").val(val4);
       $("#expanse-type-status").val(val5);
       $('#id').val(val1);
       $('#editbudget_cat').val(val6).change();
      };


      function delete_function(val){

        swal({
            title: "Are You Sure ? ",
            text: "The complete transaction related to this account will be deleted",
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
                    url:"{{ route('delete_ledger_accounts') }}",
                    type:"POST",
                    data: {
                        account_id : val,

                    },
                    success:function (data) {
                        //console.log(data);
                        if(data.response===1){

                            swal({title: "Success!",
                            text: "Account Deleted!",
                            icon: "success",
                            button: "OK"})
                            .then((value) => {
                            window.location.reload();
                            });


                        }else{

                            swal({title: "Error!",
                            text: "Account could not deleted because some transactions related to this account are exist  !",
                            icon: "error",
                            button: "OK"});

                        }
                    }
                    })



            } else {
              //swal("Transaction is not proceeded!");
            }
          });
    }
  </script>

@endsection



