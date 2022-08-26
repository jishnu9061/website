@extends('layouts.hmsmain')
@section('content')
<div class="container">
	<br>
    <h2>Add Budget Categories</h2>

        <button  class="btn btn-primary "  data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default" style="width: 25%">Add</button>

      <div class="table-responsive">
<table class="table table-striped" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Groups</th>
      <th scope="col">Description</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
    @php
    $no=1;
    @endphp
     @foreach ($budget_cat as $key )
         <tr>
            <td>{{ $no++}}</td>
            <td>{{ $key->budget_name }}</td>
            <td>{{ $key->budget_desc }}</td>
            <td>
                @if($key->budget_update_privilage == 0)
                <a href="#" class="edits" data-toggle="modal" data-bs-toggle="modal"
                data-bs-target="#edit_budget" onclick="edit_values('{{ $key->id }}','{{ $key->budget_name }}','{{ $key->budget_desc }}')"><i class="fa fa-edit"></i></a>
                @endif
            </td>
            <td>
                @if($key->budget_update_privilage == 0)
                <a onclick="return confirm('Are you sure ?');" href="{{ url('delete_ledger_budget_category/'.$key->id) }}"><i class="fa fa-trash-alt"></i></a>
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



            <h5 class="modal-title bb" id="myModalLabel1"> Add Budget Categories </h5>



           <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
             <i data-feather="x"></i>
           </button>
            </div>
             <form action="{{url('save_ledger_budget_category')}}" method="post" >
                @csrf
                <div class="modal-body">

                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Budget Name </label>
                               <input type="text" class="form-control" name="budget_cat_name" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Description </label>
                                <textarea  class="form-control" name="budget_cat_desc">

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
{{-- edit modal --}}
<div class="modal fade text-left" id="edit_budget" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">



            <h5 class="modal-title bb" id="myModalLabel1"> Edit Budget Categories </h5>



           <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
             <i data-feather="x"></i>
           </button>
            </div>
             <form action="{{url('update_ledger_budget_category')}}" method="post" >
                @csrf
                <div class="modal-body">

                    <div class="card-body">
                         <input type="hidden" name="budget_id" id="budget_id">
                        <div class="form-group mb-3">
                            <label>Budget Name </label>
                               <input type="text" class="form-control" name="edit_budget_name" id="edit_budget_name">
                        </div>
                        <div class="form-group mb-3">
                            <label>Description </label>
                                <textarea  class="form-control" name="edit_budget_desc" id="edit_budget_desc">

                                </textarea>
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
{{-- end --}}
<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
  })
  </script>
<script>
 function edit_values(val1,val2,val3) 
 {
   $('#budget_id').val(val1);
   $('#edit_budget_name').val(val2);
   $('#edit_budget_desc').val(val3);
 }
</script>
@endsection



