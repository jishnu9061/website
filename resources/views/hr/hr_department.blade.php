@extends('layouts.hmsmain')
@section('content')
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <div class="spacer" style="height:40px;margin-top: 30px;">
    
  </div>
<table class="table table-bordered" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Employee Id</th>
      <th scope="col">Name</th>
      <th scope="col">Rating</th>
    </tr>
  </thead>
  <tbody>
    @foreach($staffs as $alluser)
    <tr>
      <th scope="row">{{$alluser->uniqueid}}</th>
      <th>{{$alluser->username}}</th>
      <th><a href="{{url('quarterly_performance_form')}}"><i style="color:black;" class="fas fa-angle-right" aria-hidden="true"></i></a></th>
    <tr>  
    @endforeach
  </tbody>
</table>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"> </script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"> </script>
  <script>
  $(function(){
    $("#allpatients").dataTable();
  })
  </script>
@endsection