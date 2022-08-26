
@extends('layouts.hmsmain')
@section('content')
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <div class="spacer" style="height:40px;margin-top: 30px;">
    
  </div>
<table class="table table-hover" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col">Category</th>
      <th scope="col">Rooms</th>
      <th scope="col">AcRooms</th>
 
     
    </tr>
  </thead>
  <tbody>
 
    @foreach($allhospitals as $hospitals)
    
    <tr>
      <th scope="row">{{$hospitals->name}}</th>
      <th>{{$hospitals->location}}</th>
      <th>{{$hospitals->category}}</th>
      <th>{{$hospitals->rooms}}</th>
      <th>{{$hospitals->acrooms}}</th>
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