@extends('layouts.hmsmain')
@section('content')
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <div class="spacer" style="height:40px;margin-top: 30px;">
    
  </div>
<table class="table table-hover" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
       <th scope="col">Sl</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Address</th>
      <th scope="col">Age</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Department</th>
    </tr>
  </thead>
  <tbody>
 
    {{-- @php
        print_r($viewpatient);
        die;
    @endphp --}}
    <?php $no=1; ?>
    @foreach($viewpatient as $view)
    
    <tr>
      <th scope="row">{{$no++ }}</th>
      <td>{{$view->firstname}}</td>
      <td>{{$view->address}}</td>
      <td>{{$view->age}}</td>
      <td>{{$view->phoneno}}</td>
      <td>{{$view->Department}}</td>
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