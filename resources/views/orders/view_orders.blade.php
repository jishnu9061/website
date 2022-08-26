@extends('layouts.hmsmain')
@section('content')
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <div class="spacer" style="height:40px;margin-top: 30px;">
    <h4 style="text-align:center;"class="text-blue h4">Pharmacy Request Items</h4>
  </div>
<table class="table table-hover" id="allpatients" style="margin-top: 40px;">
    <thead>
        <tr>
          <th scope="col">Sl</th>
          <th scope="col">Medicine Name</th>
          <th scope="col">Quantity</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; ?>
        @foreach($orders as $order)
        <tr class="product_data">
          <td><?php echo $no++;?></td>
          <td>{{ $order->medicine }}</td>
          <td>{{ $order->quantity }}</td>
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
