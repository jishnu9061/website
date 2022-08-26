@extends('layouts.hmsmain')
@section('content')
    @if(Session::has('depadded'))
        <div class="alert alert-dark" role="alert">
            {{ Session::get('depadded')}}
        </div>
    @endif
    @if(Session::has('depdeleted'))
        <div class="alert alert-dark" role="alert">
            {{ Session::get('depdeleted')}}
        </div>
    @endif
    @if(Session::has('depupdated'))
        <div class="alert alert-dark" role="alert">
            {{ Session::get('depupdated')}}
        </div>
    @endif
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <div class="row" style="padding-top: 13px;">
	    <div class="col-md-6">
		    <div class="form-group">
			    <form method="post" action="{{url('save_casu_type')}}">
			        @csrf
			        <input type="text" name="casu_type" class="form-control" placeholder="Add Type" required>
		    </div>
	    </div>
	    <div class="col-md-6">
		    <div class="form-group">
			    <button type="submit" class="btn btn-primary btn-block">Add Type</button>
		    </div>
	    </div>
	    </form>
	    <br>
	    <section class="section">
		    <table class="table table-striped table-bordered" id="mydatatable">
			    <thead>
				    <tr>
					    <th>
						    Type
					    </th>
					    <th>
						    Edit
					    </th>
          			    <th>
						    Delete
					    </th>
				    </tr>
			    </thead>
			    <tbody>
			        @foreach($casu_type as $type)
				        <tr class="table table-hover" id="data1">
					        <td class="type_name" id="type_name">{{$type->casu_name}}</td>
					        <input type="hidden" value="{{$type->id}}" id="type_id" class="applicate" name="type_id">
					        <td><a href="#" class="edits" id="dep_edit" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#dep-edit"><i class="fas fa-edit" style="color:#607080"></i></a></td>
      				        <td><a onClick="return myFunction();" href="{{url('delete_casuality_type'.$type->id)}}"><i class="fas fa-trash-alt" style="color:#607080"></i></a></td>
                        </tr>
		            @endforeach
                </tbody>
		    </table>
	    </section>
    </div>
    <div class="modal fade" id="dep-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Type</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form method="POST" enctype="multipart/form-data" action="{{url('update_casu_type')}}">
                    @csrf
                        <div class="modal-body">
       	                    <input type="text" class="form-control" id="type_name1" name="type_name1" >
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" id="type_id1" name="type_id1">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"style="width: 25%" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-cancel">Update</button>
                        </div>
                </form>
            </div>
        </div>
        {{ Session::forget('depadded')}}
        {{ Session::forget('depdeleted')}}
        {{ Session::forget('depupdated')}}
    </div>
    <script src="{{ url('assets/js') }}/jquery.min.js"></script>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
        $(document).on('click','#dep_edit',function()
        {
            var type_name = $(this).closest('#data1').find('#type_name').text();
            var type_id = $(this).closest('#data1').find('#type_id').val();
            $("#type_name1").val(type_name);
            $("#type_id1").val(type_id);
        });
    </script>
    <script type="text/javascript" charset="utf8" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
        $('#mydatatable').dataTable({
            colReorder: true,
            order: [],
            pageLength: 0,
            lengthMenu: [10,20, 40, 60, 80, 90, 100],
        });
    </script>
@endsection
