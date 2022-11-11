@extends('layouts.hmsmain')
@section('content')
<div class="container">
	
    {{-- heading --}}
  <h4 id="hdtpa"><b>Budget Category</b></h4>
  <br>
        <button  class="btn btn-primary "  data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default" style="width: 25%">Add Category</button>

        <div class="container">
    <div class="header_wrap">
      <div class="num_rows">
        <div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
         <select class  ="form-control" aria-label="Page navigation example" name="state" id="maxRows">

          <option value="5">5</option>
          <option value="10">10</option>
           <option value="15">15</option>
           <option value="20">20</option>
           <option value="50">50</option>
           <option value="70">70</option>
           <option value="100">100</option>
          <option value="5000">Show ALL Rows</option>
          </select>
         
        </div>
      </div>
      <div class="tb_search">
<input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
      </div>
    </div>
<br>
    <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Budget Category</th>
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
<!--		Start Pagination -->
<div class='pagination-container'>
      <nav>
        <ul class="pagination">
         <!--	Here the JS Function Will Add the Rows -->
        </ul>
      </nav>
    </div>
    <div class="rows_count">Showing 11 to 20 of 100</div>

 <!-- 		End of Container -->
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">



          
            <h2 class="text-centre"><b>Add Budget Category</b></h2>


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



