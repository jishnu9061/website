
@extends('layouts.hmsmain')
@section('content')
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <div class="spacer" style="height:40px;margin-top: 30px;">
    
  </div>
<table class="table table-hover" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Patient ID</th>
      <th scope="col">surgery</th>
      <th scope="col">surgerydate</th>
      <th scope="col">nextappointment</th>
      <th scope="col">Details</th>
      <th scope="col">Status</th>
      <th scope="col">Discharge</th>
    </tr>
  </thead>
  <tbody>
 
    @foreach($ips as $appz)
    
    <tr>
      <th scope="row">{{$appz->id}}</th>
      <th>{{$appz->patientid}}</th>
      <td>{{$appz->surgery}}</td>
      <td>{{$appz->surgerydate}}</td>
      <td>{{$appz->nextappointment}}</td>
      <td><a href="{{url('managepatient'.$appz->id)}}" style="color: green"><i class="fab fa-atlassian"></i></a></td>
      <td>{{$appz->status}}</td>
      <td><a href="{{url('dischargepatient'.$appz->patientid)}}"> <button class="edits" class="btn btn-block btn-secondary btn-lg" style="width: auto !important;">Discharge</button></a></td>
    </tr>
   
    @endforeach
    
   
  </tbody>
</table>


                          
                         
                       
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script>
  $(function(){
    $("#allpatients").dataTable();
  })
  </script>
  @endsection