
@extends('layouts.hmsmain')
@section('content')

  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

  <div class="spacer" style="height:40px;margin-top: 30px;">

  </div>
<table class="table table-hover" id="allpatients" style="margin-top: 40px;">

  <tbody>



    <tr>
       <th scope="row">Name</th>
      <td scope="row">{{$viewpatient->firstname}}</td>
    </tr>
    <tr>
        <th>Address</th>
       <td>{{$viewpatient->address}}</td>
       </tr>
     <tr>
       <th>Phone Number</th>
      <td>{{$viewpatient->phoneno}}</td>
      </tr>
       <tr>
         <th>Email</th>
      <td>{{$viewpatient->email}}</td>
      </tr>
       <tr>
         <th>Age</th>
      <td>{{$viewpatient->age}}</td>
      </tr>
      <tr>
        <th>Date Of Birth</th>
     <td>{{date('d-m-Y',strtotime($viewpatient->dateofbirth))}}</td>
     </tr>
     <tr>
        <th>Gender</th>
     <td>{{$viewpatient->gender}}</td>
     </tr>
       <tr>
        <th></th>
      <th><a href="{{url('editpatient'.$viewpatient->id)}}">edit</a></th>
    </tr>




  </tbody>
</table>
@endsection
