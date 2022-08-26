@extends('layouts.hmsmain')
@section('content')
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
<div class="container">
	<br>
  
      <div class="table-responsive">
<table class="table table-hoversa" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Vehicle Name</th>
      <th scope="col">Driver Name</th>
      <th scope="col">Driver Contact</th>
      <th scope="col">Vehicle Type</th>
      <th scope="col">Add Patient</th>
      <th scope="col">Status</th> 
    </tr>
  </thead>
  <tbody>
    <?php $no=1; ?>
 @foreach($ambulance as $amb)
      <tr>
        <td><?php echo $no++;?></td>
          <td>{{ $amb->vehicle_name }}</td>
          <td>{{ $amb->driver_name}}</td>
          <td>{{ $amb->driver_contact }}</td> 
          <td>{{ $amb->vehicle_type }}</td>
          <td><a href="#" class="edits" data-toggle="modal" id="amb_edit" data-bs-toggle="modal"
            data-bs-target="#addpatient"><i class="fas fa-user-plus"></i></a></td>
          {{-- <td>{{ $amb->status}}</td> --}}
          <td id=status> <?php if($amb->status==1)
            {
              ?>
              <i class="badge bg-success">Active</i>
                <?php 
                  }
                  else
                    {
                      ?> 
                      <i class="badge bg-danger">Inactive</i>
                        <?php 
                    }
                ?></td>
      </tr>
 @endforeach
   
    
   
  </tbody>
</table>
      </div>
</div>
  <div class="modal fade text-left" id="addpatient" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                     
                                        

                                    <h5 class="modal-title bb" id="myModalLabel1">Add Ambulance </h5>
                                       
                                     
                                       
                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="{{url('saveamb_details')}}" method="post" > 
                                     @csrf
                                    <div class="modal-body">
                                        
                                         <div class="card-body">
                                
                                    
                        <div class="form-group mb-3">
                            <label>Vehicle Name</label>
			                <input type="text" class="form-control" name="vname" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Vehicle Model</label>
			                <input type="text" class="form-control" name="vmodel" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Year Made</label>
			                <input type="text" class="form-control" name="year" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Driver Name</label>
			                <input type="text" class="form-control" name="dname" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Driver License</label>
			                <input type="text" class="form-control" name="dlicense" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Driver Contact</label>
			                <input type="number" class="form-control" name="contact" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Vehicle Type</label>
			                <input type="text" class="form-control" name="vtype" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Status</label>
			                {{-- <input type="text" class="form-control" name="status" placeholder="" required> --}}
                            <select class="form-control" name="status" required>
                                <option selected="">Select</option>
                                  <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        </div>
                        </div>
                                    

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" >Save</button>
                                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                      </form>
                                     
                     
                                </div>
                            </div>
                        </div>
{{-- <script src="{{ url('assets/js') }}/jquery.min.js"></script> --}}
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script>
  $(function(){
    $("#allpatients").dataTable();
  })
  </script>
@endsection



