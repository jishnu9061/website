@extends('layouts.hmsmain')
@section('content')
<div class="container">
	<br>
    <h2>Manage Floor</h2>
    <button class="btn btn-primary" data-toggle="modal" id="patient" data-bs-toggle="modal" data-bs-target="#default" class="btn btn-secondary">Add Floor</button>
    <div class="table-responsive">
        <table class="table table-striped" id="allpatients" style="margin-top: 40px;">
            <thead>
                <tr>
                    <th scope="col">Floor Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($floor as $key)
                    <tr class="product_data" class="data">
                        <td id="expanse-name">{{ $key->floor_name }}</td>
                        <input type="hidden" id="id" value="{{ $key->floor_id }}" name="">
                        <td><a href="#" class="edits" data-toggle="modal" id="amb_edit" data-bs-toggle="modal" data-bs-target="#edit"><i class="fas fa-edit" onclick="values_edit(`{{$key->floor_id}}`,`{{$key->floor_name}}`);" ></i></a></td>
                        <td><a onclick="return confirm('Are you sure ?');" href="{{ url('delete_floor/'.$key->floor_id) }}"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title bb" id="myModalLabel1">Add Floor</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
            </div>
            <form action="{{url('save_floor')}}" method="post" >
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Floor Name</label>
			                <input type="text" class="form-control" name="floor_name" placeholder="" required>
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
<div class="modal fade text-left" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title bb" id="myModalLabel1">Edit Floor</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
            </div>
            <form action="{{url('update_floor')}}" method="post" >
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Floor Name</label>
			                <input type="text" class="form-control" required name="floor_name" id="floor_name">
                            <input type="hidden" id="floor_id" value="{{ $key->floor_id }}" name="floor_id">
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
    function values_edit(val1,val2){

        $("#floor_name").val(val2);
       $('#cat-floor_id').val(val1);
      };
  </script>

@endsection



