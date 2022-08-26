
@extends('layouts.hmsmain')
@section('content')
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <div class="spacer" style="height:40px;margin-top: 30px;">
    <h3 style="text-align:center"><b><u>Reorder Level</u></b></h3><hr>
  </div>
{{-- <table class="table table-bordered table-striped">
  <thead>
    <tr>

      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Expirydate</th>
     <!--  <th scope="col">Action</th> -->
    </tr>
  </thead>
  <tbody>

    @foreach($reorder as $medicines)

    <tr class="product_data">
      <th scope="row">{{$medicines->Item_name}}</th>
      <td>{{$medicines->purchase_rate}}</td>
      <td>{{$medicines->quantity}}</td>
      <td>{{$medicines->expiry_date}}</td>
      <input type="hidden" value="" class="applicate" name="">
        <input type="hidden" value="" class="applicantname" name="">
          <input type="hidden" value="" class="applicantid" name="">
   <!--    <th><a href="#" class="edits" data-toggle="modal" id="patient" data-bs-toggle="modal"
                            data-bs-target="#default">View</a></th> -->
    </tr>

    @endforeach


  </tbody>
</table> --}}
<table id="example1" class="table table-bordered table-striped" style="width 100%">
    <thead>
      <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Expirydate</th>

      </tr>
    </thead>
      <tbody  id="show_data">
        @foreach ($reorder as $medicines)
          <tr>
            <td>{{$medicines->Item_name}}</td>
            <td>{{$medicines->quantity}}</td>
            <td>{{$medicines->expiry_date}}</td>
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
