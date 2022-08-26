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
    <th scope="col">Id</th>
      <th scope="col">Medicine Name</th>
      <th scope="col">Medicine Category</th>
      <th scope="col">Purchase Price</th>
      <th scope="col">Selling Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Expiery-Date</th>
      <th scope="col">Alert_stock</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
     <!--  <th scope="col">Action</th> -->
    </tr>
  </thead>
  <tbody>

    @foreach($allmedicines as $medicines)

    <tr id="data">
    <th scope="row">{{$medicines->id}}</th>
      <td scope="row" id="medicine_name">{{$medicines->medicinename}}</td>
      <td scope="row" id="medicine_category">{{$medicines->medicine_category}}</td>
      <td scope="row" id="purchase_price">{{$medicines->purchase_price}}</td>
      <td scope="row" id="selling_price">{{$medicines->selling_price}}</td>
      <td scope="row" id="quantity">{{$medicines->quantity}}</td>
      <td scope="row" id="exp_date">{{$medicines->expirydate}}</td>
      <td scope="row" id="minimum_stock">{{$medicines->minimum_stock}}</td>
      <input type="hidden" value="{{$medicines->id}}" id="medicine_id" class="applicate" name="medicine_id">
      <td><a href="{{url('update_medicine'.$medicines->id)}}" class="edits" data-toggle="modal" id="sup_edit" data-bs-toggle="modal"
        data-bs-target="#edit"><i class="fas fa-edit"></i></a></td>
      <td><a href="{{url('delete_medicines'.$medicines->id)}}"><i class="fas fa-trash-alt"></i></a></td>
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
      <input type="text" class="form-control"  name="medicine_name" required>
      <br>
      <label class="form-label">Medicine_category</label>
        <input type="text" class="form-control"  name="medicine_category" required >
        <br>

        <input type="hidden" id="idzid" value="" name="spl_id">
        <label class="form-label">Purchase_Price</label>
        <input type="text" class="form-control"  name="purchase_price" required >
        <br>
        <label class="form-label">Selling_Price</label>
        <input type="text" class="form-control"  name="selling_price" required >
        <br>
        <label class="form-label">Quantity</label>
        <input type="number" class="form-control" name="quantity" required>
        <br>
        <label class="form-label">Expiry_Date</label>
        <input type="date" class="form-control"  name="exp_date" required>
        <br>
        <br>
        <label class="form-label">Minimum_Stock</label>
        <input type="text" class="form-control"  name="minimum_stock" required>
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

<!-- Medicine Edit Modal-->

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
        <input type="text" class="form-control" id="med_name" name="medicine_name" required>
        <br>
        <input type="hidden" id="idzid" value="" name="med_id">
        <label>Medicine_Ctegory</label>
        <input type="text" class="form-control" id="med_category" name="medicine_category" required>
        <br>
        <label>Purchase_Price</label>
        <input type="text" class="form-control" id="med_purchase_price" name="purchase_price" required>
        <br>
        <label>Selling_Price</label>
        <input type="text" class="form-control" id="med_selling_price" name="selling_price" required>
        <br>
        <label>Quantity</label>
        <input type="number" class="form-control" id="med_quantity" name="quantity" required>
        <br>
        <br>
        <label>Expiery_Date</label>
        <input type="date" class="form-control" id="med_exp_date" name="exp_date" required>
        <br>
        <label>Minimum_Stock</label>
        <input type="text" class="form-control" id="med_minimum_stock" name="minimum_stock" required>
        <br>
      </div>
      <div class="row">
        <div class="col-md-6">

        <input type="hidden" class="form-control" id="idzidss" name="med_id">
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

  $(document).on('click','#sup_edit',function(){

  //var itemvalue = $(this).val();
 var medicine_name = $(this).closest('#data').find('#medicine_name').text();
 var medicine_category = $(this).closest('#data').find('#medicine_category').text();
 var purchase_price = $(this).closest('#data').find('#purchase_price').text();
 var selling_price = $(this).closest('#data').find('#selling_price').text();
 var quantity = $(this).closest('#data').find('#quantity').text();
 var exp_date = $(this).closest('#data').find('#exp_date').text();
 var minimum_stock = $(this).closest('#data').find('#minimum_stock').text();
 var medicine_id = $(this).closest('#data').find('#medicine_id').val();


  $("#med_name").val(medicine_name);
  $("#med_category").val(medicine_category);
  $("#med_purchase_price").val(purchase_price);
  $("#med_selling_price").val(selling_price);
  $("#med_quantity").val(quantity);
  $("#med_exp_date").val(exp_date);
  $("#med_minimum_stock").val(minimum_stock);
  $("#idzidss").val(medicine_id);

});
</script>

  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <!-- <script>
  $(function(){
    $("#allpatients").dataTable();
  })
  </script> -->
@endsection


