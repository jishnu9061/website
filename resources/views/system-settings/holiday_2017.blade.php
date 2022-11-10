@extends('layouts.hmsmain')
@section('content')
<html>
  <div class="container">
    <head>
</head>
<body>
  <form>
<!-- <h2>Weekend and Holidays</h2><br><br> -->


          {{-- heading --}}
<h4 id="hdtpa"><b>Weekend and Holidays</b></h4>
<br><br>
  <a href="{{url('add_new_holiday')}}"><button type="button" class="btn btn-primary add-btn" style="width:30%" > Add New Holiday / Weekend Date</button></a>
<p style="color:black;"><a href="{{url('holiday_2017')}}"style="color:blue; font-size:x-small;">2017</a> | <a href="{{url('holiday_2018')}}"style="color:blue;font-size:x-small;">2018</a> | <a href="{{url('holiday_2019')}}"style="color:blue;font-size:x-small;">2019</a> | <a href="{{url('holiday_2020')}}"style="color:blue;font-size:x-small;">2020</a> | <a href="{{url('holiday_2021')}}"style="color:blue;font-size:x-small;">2021</a> | <a href="{{url('holiday_2022')}}"style="color:blue;font-size:x-small;">2022</a><br><br>
<h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Weekend & Holiday Dates - 2017</h3>
<table class="table table-bordered" id="new-item">
  <thead>
    <tr>
    <th>Sl No:</th>
    <th>Date</th>
    <th>Day</th>
    <th>Delete</th>
</tr>
        </thead>
        <tbody>
  <tr>
    <td>  </td>
    <td>   </td>
    <td>    </td>
    <td><a href="del_db" target="_blank"style="color:blue;">Delete</a></td>
</tr>
        </tbody>
</table><br><br>
</form>
<!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->
    </body>
</div>
</html>
@endsection