@extends('layouts.hmsmain')
@section('content')
<div class="container">
	<br>
    <h2>Account Types</h2>

        <button  class="btn btn-primary"  data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default"  class="btn btn-secondary">Create Account Type</button>

      <div class="table-responsive">
<table class="table table-striped" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Account Type</th>
      <th scope="col">Description </th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
@php
$no=1;
@endphp
 @foreach($ledgeraccount_categories as $ledcat)
      <tr class="product_data" class="data">
          <td id="name">{{$no++ }}</td>
          <td id="expanse-name">{{ $ledcat->ledgeraccount_categories }}</td>
          <td id="expanse_status">{{ $ledcat->ledgeraccount_categories_desc}}</td>
          <input type="hidden" id="id" value="{{ $ledcat->id }}" name="">
               <td>
@if($ledcat->categories_update_privilage==0)


                <a href="#" class="edits"    data-toggle="modal" id="amb_edit" data-bs-toggle="modal"
                   data-bs-target="#edit"><i class="fas fa-edit" onclick="values_edit(`{{$ledcat->id}}`,`{{$ledcat->ledgeraccount_categories}}`,`{{$ledcat->ledgeraccount_categories_desc}}`);" >
                </i></a>
                @endif
            </td>
                   <td>
                    @if($ledcat->categories_update_privilage==0)

         <a onclick="return confirm('Are you sure ?');" href="{{ url('delete_ledger_accounts_categories/'.$ledcat->id) }}">
            <i class="fas fa-trash-alt"></i></a>
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



                                    <h5 class="modal-title bb" id="myModalLabel1"> Add Account Types </h5>



     <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
         <i data-feather="x"></i>
          </button>
             </div>
              <form action="{{url('save_ledger_acounts_categories')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <label> Account Type </label>
			                <input type="text" class="form-control" name="ledgeraccount_categories" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Description </label>
			                <textarea  class="form-control" name="ledgeraccount_categories_desc">

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



                                    <h5 class="modal-title bb" id="myModalLabel1">Edit Group</h5>



                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="{{url('update_ledger_acount_categories')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <input type="hidden" id="cat-id" name="id">
                            <label>Account Type</label>
			                <input type="text" class="form-control" required name="ledgeraccount_categories" id="expanse_type_name">
                        </div>

                        <div class="form-group mb-3">
                            <label>Status</label>
                            <textarea class="form-control" name="ledgeraccount_categories_desc"   id="expanse-type-status">

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
<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
  })
  </script>

  <script>
    function values_edit(val1,val2,val3){

        $("#expanse_type_name").val(val2);
       $("#expanse-type-status").val(val3);
       $('#cat-id').val(val1);
      };
  </script>

@endsection



