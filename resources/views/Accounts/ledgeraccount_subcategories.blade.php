@extends('layouts.hmsmain')
@section('content')
<div class="container">
	<br>
    <h2>Add Groups</h2>

        <button  class="btn btn-primary "  data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default"  class="btn btn-secondary">Add Groups</button>

      <div class="table-responsive">
<table class="table table-striped" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      {{-- <th scope="col">Category</th> --}}
      <th scope="col">Groups</th>
      <th scope="col">Description </th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
@php
$no=1;
@endphp
 @foreach($ledgeraccount_subcategories as $ledcat)
      <tr class="product_data" class="data">
          <td id="name">{{$no++ }}</td>
          {{-- <td id="expanse-name">{{ $ledcat->ledgeraccount_categories }}</td> --}}
          <td id="expanse-name">{{ $ledcat->ledgeraccount_subcategories }}</td>
          <td id="expanse_status">{{ $ledcat->ledgeraccount_subcategories_desc }}</td>
          <input type="hidden" id="id" value="{{ $ledcat->id }}" name="">
               <td>
    @if($ledcat->accountssub_update_privilage == 0)
                <a href="#" class="edits"    data-toggle="modal" id="amb_edit" data-bs-toggle="modal"
                   data-bs-target="#edit"><i class="fas fa-edit" onclick="values_edit(`{{$ledcat->id}}`,`{{$ledcat->cat_id}}`,`{{$ledcat->ledgeraccount_subcategories}}`,`{{$ledcat->ledgeraccount_subcategories_desc}}`);" ></i></a>
                   @endif
                </td>
                   <td>
    @if($ledcat->accountssub_update_privilage == 0)
                    <a onclick="return confirm('Are you sure ?');" href="{{ url('delete_ledger_accounts_subcategories/'.$ledcat->id) }}"><i class="fas fa-trash-alt"></i></a>
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



                                    <h5 class="modal-title bb" id="myModalLabel1"> Groups </h5>



     <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
         <i data-feather="x"></i>
          </button>
             </div>
              <form action="{{url('save_ledger_acounts_subcategories')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">

                                         <div class="card-body">

                                            {{-- <div class="form-group mb-3">
                                                <label> Category </label>
                                               <select class="form-control" name="ledgeraccount_categories"  required>
                                                   <option value=""> Select</option>
                                                   @foreach($categories as $cat):
                                                    <option value="{{ $cat->id }}" > {{ $cat->ledgeraccount_categories }}</option>
                                                   @endforeach;

                                               </select>
                                            </div> --}}

                        <div class="form-group mb-3">
                            <label>Group Name </label>
			                <input type="text" class="form-control" name="ledgeraccount_subcategories" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Description </label>
			                <textarea  class="form-control" name="ledgeraccount_subcategories_desc">

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



                                    <h5 class="modal-title bb" id="myModalLabel1">Edit Account Type</h5>



                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="{{url('update_ledger_acount_subcategories')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">

                                        <div class="modal-body">

                                            <div class="card-body">

                                               {{-- <div class="form-group mb-3">
                                                   <label> Category </label>
                                                  <select class="form-control" name="ledgeraccount_categories" id="sub-cat"  required>
                                                      <option value=""> Select</option>
                                                      @foreach($categories as $cat):
                                                       <option value="{{ $cat->id }}" > {{ $cat->ledgeraccount_categories }}</option>
                                                      @endforeach;

                                                  </select>
                                               </div> --}}

                           <div class="form-group mb-3">
                               <label>Account Type Name </label>
                               <input type="text" class="form-control" name="ledgeraccount_subcategories" id="subcat-name" placeholder="" required>
                           </div>
                           <div class="form-group mb-3">
                               <label>Description </label>
                               <textarea  class="form-control" name="ledgeraccount_subcategories_desc" id="subcat-desc">

                               </textarea>
                           </div>


                           <input type="hidden" name="sub_cat_id" id="sub-cat-id" >
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
    function values_edit(val1,val2,val3,val4){

               // $('#sub-cat').val(val2).change();
                $("#sub-cat-id").val(val1);
                $("#subcat-name").val(val3);
                $("#subcat-desc").val(val4);

      };
  </script>

@endsection



