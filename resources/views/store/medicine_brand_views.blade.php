@extends('layouts.hmsmain')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  {{-- <div class="spacer" style="height:40px;margin-top: 30px;"> --}}


</head>

<body>
    <div class="container">
        <h4 class="text-center">Brand List</h4>
       <br>
       <button type="button" class="btn btn-primary" style="background-color:#435ebe;width:25%;"data-toggle="modal" data-target="#myModal"><b>Add Brand Name</b></button>
       {{-- <button type="button" class="btn btn-primary" style="background-color:#435ebe;width:30%;"data-toggle="modal" data-target="#myModal-1"><b>Manage Category</b></button> --}}

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header" style="background-color:#435ebe">
                <h5 class="text-white">Add Brand Name</h5>

              </div>

              <!-- Modal body -->
              <div class="modal-body">
                    <div class="container">
                        <form method="post" action="{{url('create_brand')}}">
                            @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="brand_name" class="form-control" placeholder="Brand Name" required><br>
                            </div>
                        </div>
                    </div>
                    <div class="container">

                    </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-primary"  style="background-color:#435ebe;width:25%;" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" style="background-color:#435ebe;width:20%;">Save</button>
              </div>
            </form>

            </div>
          </div>
        </div>

      </div>

    <br>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <table class="table table-bordered" id="allsupplier">
                <thead>
                    <tr>
                        <th class="text-center">Brand Id</th>
                        <th class="text-center">Brand Name</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>

                    </tr>
                </thead>
                <tbody>
                         @foreach($brand_name as $data )
                         <tr id="data">
                            <td class="text-center">{{$data->id}}</td>
                            <td class="text-center" id="brand_name_x">{{$data->brand_name}}</td>
                              <input type="hidden" value="{{$data->id}}" id="brand_hidden" class="applicate" name="brand_id_hidden">
                            <td class="text-center"><a href="{{url('update_brand'.$data->id)}}" class="edits" data-toggle="modal" id="edit_brand" data-bs-toggle="modal"
                                data-bs-target="#edit"><i class="fas fa-edit" style="color:#435ebe;"></i></a></td>
                            <td class="text-center"><a  onClick="return myFunction();" href="{{url('delete_brand'.$data->id)}}" style="color:#435ebe;"><i class="fas fa-trash-alt"></i></a></td>
                         </tr>
                         @endforeach

                </tbody>
            </table>
            {{-- Supplier Modal Edit  Start--> --}}


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#435ebe">
          <h6 class="text-white" >Edit Brand Name</h6>
          <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" enctype="multipart/form-data" action="{{url('update_brand')}}" >
          @csrf
        <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                                <input type="text" class="form-control" id="edit_brand_name" name="brand_name1" placeholder="Brand Name" required><br>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <input type="hidden" class="form-control" id="edit_id123" name="brand_id">

                        </div>
                    </div>


                </div>

                <div class="modal-footer">
                            <button type="button" class="btn btn-primary text-white"   style="width:30%;background-color:#435ebe"  data-bs-dismiss="modal"">Close</button>
                            <button type="submit" style="width:35%;background-color:#435ebe"  class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<!-- Supplier modal Edit End -->
</div>
<!-- Delete  confirmation Message -->
<script>
	function myFunction(){
		if(!confirm("Are you sure to delete this"))
		event.preventDefault();
	}
</script>
<!-- End delete confirmation message -->
</div>

{{-- Search booking script --}}
<script>
    $(document).ready(function(){
             $('.searchingBook').select2();
    });
 </script>
{{-- search booking script end --}}

<!-- Supplier Pagenation -->
<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
    $(function(){
      $("#allsupplier").dataTable();
    })
  </script>
{{-- Supplier Edit start --}}

<script>
    $(document).on('click','#edit_brand',function(){

        var brand_id = $(this).closest('#data').find('#brand_hidden').val();
        var brand_name = $(this).closest('#data').find('#brand_name_x').text();

        $("#edit_brand_name").val(brand_name);
        $("#edit_id123").val(brand_id);
});
</script>
{{-- Supplier Edit End --}}
@endsection



