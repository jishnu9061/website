@extends('layouts.hmsmain')
@section('content')
<div style="padding-top: 25px;">
    <form method="POST" action="{{url('requestitems_save')}}">
      @csrf
  <div class="row">
    <div class="col-md-6">
      <input type="text" name="medicine" id="searchmed" class="typeahead form-control" placeholder="Medicine Name" required>
    </div>
    <div class="col-md-2">
      <input type="number" name="quantity" id="dds" class="form-control" placeholder="Quantity" required>
    </div>
    <div class="col-md-2">
      <select class="form-control" name="supplires" required>
        <option value="">Select</option>
            @foreach ($supplier as $sup )
                <option value="{{ $sup->suppliername }}">{{ $sup->suppliername }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-2">
      <button type="submit" class="btn btn-block btn-secondary">Add</button>
    </div>

  </div>
  </form>
  <div style="height: 60px;">

  </div>
  <table class="table table-striped" id="allpatients" style="margin-top: 40px;">
    <thead>
      <tr>
        <th scope="col">Sl</th>
        <th scope="col">Medicine Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Supplires</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; ?>
      @foreach($request as $item)
      <tr>
        <td><?php echo $no++;?></td>
        <td>{{ $item->medicines_name }}</td>
        <td>{{ $item->quantity }}</td>
        <td>{{ $item->suppliers }}</td>
      </tr>
      @endforeach
    </tbody>
    </table>
    </div>
    @endsection
