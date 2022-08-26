@extends('layouts.hmsmain')
@section('content')
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
<div class="container">
	<br>
  <div class="row">
    <div class="col-md-7 col-lg-7">
    </div>
  <div class="col-md-5 col-lg-5 text-end">
        {{-- <button href="#" class="edits" data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default" class="btn btn-block btn-primary">Add</button> --}}
        <button type="button"  data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default" class="edits" data-toggle="modal" data-target="">
          Add 
        </button>
      </div>
  </div>
  <br>

      <div class="table-responsive scrollbar">
      
<table class="table table-hover " id="allpatients" style="margin-top: 40px;  ">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Vehicle Name</th>
      <th scope="col">Vehicle Model</th>
      <th scope="col">Year Make</th>
      <th scope="col">Driver Name</th>
      <th scope="col">Driver License</th>
      <th scope="col">Driver Contact</th>
      <th scope="col">Vehicle Type</th>
      <th scope="col">Status</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
        
    </tr>
  </thead>
  <tbody style="background-color:white;">
    <?php $no=1; ?>
 @foreach($ambulance as $amb)
      <tr class="product_data" id="data">
        <td><?php echo $no++;?></td>
          <td id="name">{{ $amb->vehicle_name }}</td>
          <td id="model">{{ $amb->vehicle_model }}</td>
          <td id="year">{{ $amb->year_made }}</td>
          <td id="drname">{{ $amb->driver_name}}</td>
          <td id="licence">{{ $amb->driver_license }}</td>
          <td id="contact">{{ $amb->driver_contact }}</td> 
          <td id="type">{{ $amb->vehicle_type }}</td>
          {{-- <td>{{ $amb->status}}</td> --}}
          <td id=amb_status> <?php if($amb->status==1)
            {
              ?>
              <i class="badge bg-success">Available</i>
                <?php 
                  }
                  elseif($amb->status==2)
                    {
                      ?> 
                      <i class="badge bg-info">Running</i>
                        <?php 
                    }
                else
                {
                  ?> 
                  <i class="badge bg-danger">Inactive</i>
                    <?php 
                }
            ?>
                </td>
               <input type="hidden" id="amb_id" value="{{$amb->id}}" name="">
               <td><a href="#" class="edits" data-toggle="modal" id="amb_edit" data-bs-toggle="modal"
                   data-bs-target="#edit"><i class="fas fa-edit"></i></a></td>
                   <td><a href="{{ url('delete_ambulance'.$amb->id) }}"><i class="fas fa-trash-alt"></i></a></td>
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
                                     
                                        

                                    <h5 class="modal-title bb" id="myModalLabel1">Add Ambulance </h5>
                                       
                                     
                                       
                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="{{url('saveamb_details')}}" method="post" > 
                                     @csrf
                                    <div class="modal-body">
                                        
                                         <div class="card-body scroll-bar-sub">
                                
                                    
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
                                  <option value="2">Running</option>
                                <option value="1">Available</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        </div>
                        </div>
                                    

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" style="width:25%">Save</button>
                                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
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
                                     
                                        

                                    <h5 class="modal-title bb" id="myModalLabel1">edit Ambulance </h5>
                                       
                                     
                                       
                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="{{url('update_details')}}" method="post" > 
                                     @csrf
                                    <div class="modal-body">
                                        
                                         <div class="card-body">
                                
                                    
                        <div class="form-group mb-3">
                            <input type="hidden" id="id" name="ambu_id">
                            <label>Vehicle Name</label>
			                <input type="text" class="form-control" name="vname" id="vname">
                        </div>
                        <div class="form-group mb-3">
                            <label>Vehicle Model</label>
			                <input type="text" class="form-control" name="vmodel" id="vmodel">
                        </div>
                        <div class="form-group mb-3">
                            <label>Year Made</label>
			                <input type="text" class="form-control" name="year" id="ymade">
                        </div>
                        <div class="form-group mb-3">
                            <label>Driver Name</label>
			                <input type="text" class="form-control" name="dr_name" id="dr_name">
                        </div>
                        <div class="form-group mb-3">
                            <label>Driver License</label>
			                <input type="text" class="form-control" name="dlicense" id="dlic">
                        </div>
                        <div class="form-group mb-3">
                            <label>Driver Contact</label>
			                <input type="number" class="form-control" name="contact" id="dct">
                        </div>
                        <div class="form-group mb-3">
                            <label>Vehicle Type</label>
			                <input type="text" class="form-control" name="vtype" id="vtype">
                        </div>
                        <div class="form-group mb-3">
                            <label>Status</label>
			                {{-- <input type="text" class="form-control" name="status" placeholder="" required> --}}
                            <select class="form-control" name="status" >
                                <option id="astatus" >Select</option>
                                <option value="2">Running</option>
                              <option value="1">Available</option>
                              <option value="0">Inactive</option>
                            </select>
                            {{-- <select class="form-control" name="status">
                              <option selected="" id="astatus">Select</option>
                              <option value="1">Available</option>
                              <option value="0">Inactive</option>
                          </select> --}}
                        </div>
                        </div>
                        </div>
                                    

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" style="width:25%" >Save</button>
                                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                      </form>
                                     
                     
                                </div>
                            </div>
                        </div>
                        
<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script>
  $(function(){
    $("#allpatients").dataTable();
  })
  </script>
<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
  })
  
    $(document).on('click','#amb_edit',function(){
    //var itemvalue = $(this).val();
   var vehicle_n = $(this).closest('#data').find('#name').text();
   var vehicle_M= $(this).closest('#data').find('#model').text();
   var year_m = $(this).closest('#data').find('#year').text();
   var driver_n = $(this).closest('#data').find('#drname').text();
   var driver_l= $(this).closest('#data').find('#licence').text();
   var driver_con = $(this).closest('#data').find('#contact').text();
   var vehicle_ty = $(this).closest('#data').find('#type').text();
   var status = $(this).closest('#data').find('#amb_status').text();
   var a_id=$(this).closest('#data').find('#amb_id').val();
  
    $("#vname").val(vehicle_n);
    $("#vmodel").val(vehicle_M);
    $('#ymade').val(year_m);
    $("#dr_name").val(driver_n);
    $("#dlic").val(driver_l);
    $('#dct').val(driver_con);
    $("#vtype").val(vehicle_ty);
    $("#astatus").text(status);
    $('#id').val(a_id);
  
  });
  </script>
@endsection



