
@extends('layouts.hmsmain')
@section('content')
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <div class="spacer" style="height:40px;margin-top: 30px;">
    <a href="#" class="edits" data-toggle="modal" id="create" data-bs-toggle="modal"
    data-bs-target="#default"><button class="
    btn btn-primary">Add Medicines</button></a>
  </div>
  <br>
<table class="table table-hover" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
    
      <th scope="col">Medicine Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Expiery-Date</th>
      <th scope="col">Stock_balance</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
     <!--  <th scope="col">Action</th> -->
    </tr>
  </thead>
  <tbody>
 
    @foreach($allmedicines as $medicines)
    
    <tr id="data">
      <th scope="row">{{$medicines->medicinename}}</th>
      <td>{{$medicines->price}}</td>
      <td>{{$medicines->quantity}}</td>
      <td>{{$medicines->expirydate}}</td>
      <td>{{$medicines->alert_stock}}</td>
      <input type="hidden" value="{{$medicines->id}}" class="applicate" name="">
      <td><a href="#" class="edits" data-toggle="modal" id="medicine_edit" data-bs-toggle="modal"
        data-bs-target="#edit"><i class="fas fa-edit"></i></a></td>
      <td><a href=""><i class="fas fa-trash-alt"></i></a></td>
    </tr>
   
    @endforeach
  </tbody>
</table>
<div class="row">
  <div class="col-md-4">

  </div>
  <div class="col-md-4">
  {{$allmedicines->links()}}
    </div>
    <div class="col-md-4">
    
    </div>
</div>



<div class="modal fade" id="default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Medicines</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" enctype="multipart/form-data" action="{{url('save_medicine')}}">
        @csrf
      <div class="modal-body">
      <label for="validation_medicine" class="form-label">Medicine Name</label>
      <input type="text" class="form-control" id="validation_medicine" name="medicine_name" required>
      <br>
        <!-- <input type="hidden" id="idzid" value="" name="spl_id"> -->
        <label  for="validation_price" class="form-label">Price</label>
        <input type="text" class="form-control" id="validation_price" name="price" required >
        <br>
        <label for="validation_quantity" class="form-label">Quantity</label>
        <input type="number" class="form-control" id="validation_quantity" name="quantity" required>
        <br>
        <label for="validation_expiry_date" class="form-label">Expiry_Date</label>
        <input type="date" class="form-control" id="validation_expiry_date" name="exp_date" required>
        <br>
        <br>
        <label for="validation_alert_stock" class="form-label">Alert_Stock</label>
        <input type="text" class="form-control" id="validation_alert_stock" name="balance_stock" required>
        <br>
      </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Medicine Edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Medicines</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" enctype="multipart/form-data" action="{{url('update_medicine')}}">
        @csrf
      <div class="modal-body">
        <label>Medicine_Name</label>
        <input type="text" class="form-control" id="med_name" name="medicine_name">
        <br>
        <input type="hidden" id="hidden_id"   name="med_id">
        <label>Price</label>
        <input type="text" class="form-control" id="med_price"  name="price">
        <br>
        <label>Quantity</label>
        <input type="number" class="form-control" id="med_quantity"  name="quantity">
        <br>
        <br>
        <label>Expiery_Date</label>
        <input type="date" class="form-control" id="med_exp_date"  name="exp_date">
        <br>
        <label>Alert_Stocke</label>
        <input type="text" class="form-control" id="med_balance_stock" name="balance_stock">
        <br>
      </div>
      <div class="row">
        <div class="col-md-6">
            
        </div>
        <div class="col-md-6">
            <input type="hidden" class="form-control" id="editid" name="hiddenid">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script>
  $(function () {
$('[data-toggle="popover"]').popover()
})

  $(document).on('click','#test',function(){
      alert('afasf');
  //var itemvalue = $(this).val();
 var medicine_name = $(this).closest('#data').find('#medicine_name').text();
 var price = $(this).closest('#data').find('#price').text();
 var quantity = $(this).closest('#data').find('#quantity').text();
 var exp_date = $(this).closest('#data').find('#exp_date').text();
 var alert_stock = $(this).closest('#data').find('#balance_stock').text();
 var medicine_id = $(this).closest('#data').find('#medicine_id').val();


  $("#med_name").val(medicine_name);
  $("#med_price").val(price);
  $("#med_quantity").val(quantity);
  $("#med_balance_stock").val(exp_date);
  $("#med_balance_stock").val(exp_date);
  $("#hidden_id").val(medicine_id);

});
</script>

  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script>
  $(function(){
    $("#allpatients").dataTable();
  })
  </script>
@endsection

                          
            