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
        <h4 class="text-center">Item Group List</h4>
       <br>
       <button type="button" class="btn btn-primary" style="background-color:#435ebe;width:35%;"data-toggle="modal" data-target="#myModal"><b>Add Item Group</b></button>
       {{-- <button type="button" class="btn btn-primary" style="background-color:#435ebe;width:30%;"data-toggle="modal" data-target="#myModal-1"><b>Manage Category</b></button> --}}

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header" style="background-color:#435ebe">
                <h5 class="text-white">Add item Group</h5>

              </div>

              <!-- Modal body -->
              <div class="modal-body">
                    <div class="container">
                        <form method="post" action="{{url('create_medicine_group')}}">
                            @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="group_name" class="form-control" placeholder="Group Name" required><br>
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
                        <th class="text-center">Group Id</th>
                        <th class="text-center">Group Name</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>

                    </tr>
                </thead>
                <tbody>
                         @foreach($medicine_groups as $data )
                         <tr id="data">
                            <td class="text-center">{{$data->id}}</td>
                            <td class="text-center" id="group_name_x">{{$data->group_name}}</td>
                              <input type="hidden" value="{{$data->id}}" id="group_hidden" class="applicate" name="group_id_hidden">
                            <td class="text-center"><a href="{{url('update_group'.$data->id)}}" class="edits" data-toggle="modal" id="edit_group" data-bs-toggle="modal"
                                data-bs-target="#edit"><i class="fas fa-edit" style="color:#435ebe;"></i></a></td>
                            <td class="text-center"><a  onClick="return myFunction();" href="{{url('delete_group'.$data->id)}}" style="color:#435ebe;"><i class="fas fa-trash-alt"></i></a></td>
                         </tr>
                         @endforeach

                </tbody>
            </table>
            {{-- Supplier Modal Edit  Start--> --}}


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#435ebe">
          <h6 class="text-white" >Edit Medicine Group</h6>
          <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" enctype="multipart/form-data" action="{{url('update_group')}}" >
          @csrf
        <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                                <input type="text" class="form-control" id="edit_group_name" name="group_name1" placeholder="Category Name" required><br>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <input type="hidden" class="form-control" id="edit_id123" name="group_id">

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
    $(document).on('click','#edit_group',function(){

        var group_id = $(this).closest('#data').find('#group_hidden').val();
        var group_name = $(this).closest('#data').find('#group_name_x').text();

        $("#edit_group_name").val(group_name);
        $("#edit_id123").val(group_id);
});
</script>
{{-- Supplier Edit End --}}
@endsection



