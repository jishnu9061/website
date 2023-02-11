@extends('layouts.hmsmain')
@section('content')
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <div class="spacer" style="height:40px;margin-top: 30px;">
    
  </div>
<table class="table table-bordered" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Employee Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">PaySlip</th>
    </tr>
  </thead>
  <tbody>
 

    @foreach($staffs as $alluser)
    
    <tr>
      <td scope="row">{{$alluser->uniqueid}}</td>
      <td>{{$alluser->username}}</td>
      <td>{{$alluser->email}}</td> 
    <form method="post" action="{{url('')}}">
        @csrf
        <input type="hidden" name="uniq" value="{{$alluser->uniqueid}}">
        <input type="hidden" name="hiddenmonth" value="{{$month}}">
        <input type="hidden" name="hiddenyear" value="{{$year}}">
      <td><button type="submit"><i class="fab fa-atlassian" style="color: green"></button></i></td>
      </form>
    </tr>  

<!--       <td><a href="{{url('viewstaff'.$alluser->id)}}">View</a></td>
      <td><a href="{{url('giveallowance'.$alluser->uniqueid)}}">Allowance</a></td>
      <td><a href="{{url('givereduction'.$alluser->uniqueid)}}">Reduction</a></td> -->
     <!--  @if($alluser->status == 'disable')
      <th ><a href="{{url('disableuser'.$alluser->id)}}">{{$alluser->status}}</a></th>
      @else
      <th ><a href="{{url('enableuser'.$alluser->id)}}">{{$alluser->status}}</a></th>
      @endif -->
<!--       <td><a href="{{url('staffsalary'.$alluser->uniqueid)}}" style="color: green">Salary</a></td>-->
      <form action="{{url('dutyschedule')}}" method="post"> 
      @csrf
       <input type="hidden" name="staffname" value="{{$alluser->username}}">
      <input type="hidden" name="staffid" value="{{$alluser->uniqueid}}">
      </form>
      </tr>
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