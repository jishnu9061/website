@extends('layouts.hmsmain')
@section('content')
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <div class="spacer" style="height:40px;margin-top: 30px;">
    
  </div>
  <div class="table-responsive">
<table class="table table-hover" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Address</th>
      <th scope="col">Age</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Department</th>
      <th scope="col">By Stander</th>
      <th scope="col">Edit </th>
      <th scope="col">View </th>
      <th scope="col">Bill</th>
    </tr>
  </thead>
  <tbody>
 
    @foreach($patients as $patient)
    
    <tr class="product_data" id="data">
      <th scope="row">{{$patient->id}}</th>
      <td id="firstname">{{$patient->firstname}}</td>
      <td id="paddress">{{$patient->address}}</td>
      <td id="p_age">{{$patient->age}}</td>
      <td id="pphoneno">{{$patient->phoneno}}</td>
      <td id="pDepartment">{{$patient->Department}}</td>
      <td>{{$patient->bystander_name.'['.$patient->contact_no.']'}}</td>
      <input type="hidden" id="p_id" value="{{$patient->id}}" name="">
      <td><a href="#" class="edits" data-toggle="modal" id="patient_edit" data-bs-toggle="modal"
        data-bs-target="#exampleModalLong"><i class="fas fa-edit"></i></a></td>
      <td><a href="{{url('view_cltypatient'.$patient->id)}}"><i class="fas fa-eye"></i></a></td>
      <td><a href="{{url('casuality_billing'.$patient->id)}}"><i class="fa fa-file-pdf"></i></a></td>
    </tr>
   
    @endforeach
    
   
  </tbody>
</table>
  </div>

<form action="update_cpatient" method="POST" >
  @csrf
    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
        <!-- Medium modal -->
         <div class="col-md-4 col-sm-12 mb-30">
            
            
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            
                            <div class="modal-body">
                                <form id="add-event">
                                    <div class="modal-body">
                                        <h4 style="text-align:center;" class="text-blue h4 mb-10">Edit Patient</h4>
                                        <hr class="mb-4">                            
                                        <div class="form-group">
                                            <input type="hidden" id="pt_id" value="" name="pt_id">
                                            <label>Patient Name</label>
                                            <input type="text" class="form-control" id="patient_n" name="patient_n" placeholder="patient name">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" id="patient_a" name="patient_a" placeholder="address"></textarea>
                                          
                                        </div>
                                        <div class="form-group">
                                            <label>Age</label>
                                            <input type='number' class="form-control" id="patient_age" name="patient_age" placeholder="age">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile No</label>
                                            <input type='number' class="form-control" id="patient_m" name="patient_m"  placeholder="mobile no">   
                                        </div>
                                        <div class="form-group">
                                            <label>Department</label>
                                            <input type='text' class="form-control" id="patient_d" name="patient_d" placeholder="department">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" >Save changes</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        
    </div>
</form>
                         
                       
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
  
    $(document).on('click','#patient_edit',function(){
    //var itemvalue = $(this).val();
   var fnam = $(this).closest('#data').find('#firstname').text();
   var add = $(this).closest('#data').find('#paddress').text();
   var age=$(this).closest('#data').find('#p_age').text();
   var mob = $(this).closest('#data').find('#pphoneno').text();
   var dpt = $(this).closest('#data').find('#pDepartment').text();
   var id = $(this).closest('#data').find('#p_id').val();
  
  
    $("#patient_n").val(fnam);
    $("#patient_a").val(add);
    $('#patient_age').val(age);
    $("#patient_m").val(mob);
    $("#patient_d").val(dpt);
    $('#pt_id').val(id);
  
  });
  </script>     
  @endsection