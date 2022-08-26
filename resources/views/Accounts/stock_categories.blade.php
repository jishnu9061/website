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
    <h2>Stock Categories</h2>

        <button  class="btn btn-primary"  data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default"  class="btn btn-secondary">Create Category</button>

      <div class="table-responsive">
<table class="table table-striped" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Category Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
@php
$no=1;
@endphp
 @foreach($stock_categories as $ledcat)
      <tr class="product_data" class="data">
          <td id="name">{{$no++ }}</td>
          <td id="expanse-name">{{ $ledcat->stock_categories_name }}</td>
          <input type="hidden" id="id" value="{{ $ledcat->id }}" name="">
               <td>


                <a href="#" class="edits"    data-toggle="modal" id="amb_edit" data-bs-toggle="modal"
                   data-bs-target="#edit"><i class="fas fa-edit" onclick="values_edit(`{{$ledcat->id}}`,`{{$ledcat->stock_categories_name}}`);" >
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
<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
  })
  </script>

  <script>
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



