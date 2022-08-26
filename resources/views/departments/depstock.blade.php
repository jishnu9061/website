
@extends('layouts.hmsmain')
@section('content')
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <div class="spacer" style="height:40px;margin-top: 30px;">
    
  </div>
<table class="table table-hover" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
     
    </tr>
  </thead>
  <tbody>
 
    @foreach($depstock as $appz) 
    <tr>
      <th>{{$appz->medicine}}</th>
      <td>{{$appz->quantity}}</td>
    
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