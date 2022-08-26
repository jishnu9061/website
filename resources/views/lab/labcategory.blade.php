@extends('layouts.hmsmain')
@section('content')
<div class="container">
	<br>
    <div class="col-md-2">
        <button href="#" class="edits" data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default" class="btn btn-block btn-secondary">Add</button>
      </div>
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
  
 @foreach($labcat as $lab)
      <tr class="product_data" id="data">
          <td id="name">{{ $lab->id }}</td>
          <td id="model">{{ $lab->name }}</td>
         
               <input type="hidden" id="amb_id" value="{{$lab->id}}" name="">
               <td><a href="#" class="edits" data-toggle="modal" id="amb_edit" data-bs-toggle="modal"
                   data-bs-target="#edit"><i class="fas fa-edit"></i></a></td>
                   <td><a href="{{ url('dellabcat'.$lab->id) }}"><i class="fas fa-trash-alt"></i></a></td>
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
                                     
                                        

                                    <h5 class="modal-title bb" id="myModalLabel1">Add Lab Category </h5>
                                       
                                     
                                       
                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="{{url('labcategory')}}" method="post" > 
                                     @csrf
                                    <div class="modal-body">
                                        
                                         <div class="card-body">
                                
                                    
                        <div class="form-group mb-3">
                            <label>Category Name</label>
			                <input type="text" class="form-control" name="labcatname" placeholder="" required>
                        </div>
 
    
 
                        </div>
                        </div>
                                    

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" style="width:25% " >Save</button>
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
                                     
                                        

                                    <h5 class="modal-title bb" id="myModalLabel1">edit </h5>
                                       
                                     
                                       
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
                            <label>Status</label>
			                {{-- <input type="text" class="form-control" name="status" placeholder="" required> --}}
                            <select class="form-control" name="status" >
                                <option selected="" id="astatus" >Select</option>
                                  <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        </div>
                        </div>
                                    

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" style="width:25% ;" >Save</button>
                                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
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
  
    $(document).on('click','#amb_edit',function(){
    //var itemvalue = $(this).val();
   var vehicle_n = $(this).closest('#data').find('#name').text();
   var vehicle_M= $(this).closest('#data').find('#model').text();
   var year_m = $(this).closest('#data').find('#year').text();
   var driver_n = $(this).closest('#data').find('#drname').text();

  
    $("#vname").val(vehicle_n);
    $("#vmodel").val(vehicle_M);
    $('#ymade').val(year_m);
    $("#dr_name").val(driver_n);

  
  });
  </script>     

@endsection



