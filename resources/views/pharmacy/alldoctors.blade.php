
@extends('layouts.hmsmain')
@section('content')
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <div class="spacer" style="height:40px;margin-top: 30px;">
    
  </div>
<table class="table table-hover" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
    
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Department</th>
     <!--  <th scope="col">Expirydate</th> -->
     <!--  <th scope="col">Action</th> -->
    </tr>
  </thead>
  <tbody>
 
    @foreach($alldoctors as $doctors)
    
    <tr class="product_data">
      <th scope="row">{{$doctors->uniqueid}}</th>
      <td>{{$doctors->name}}</td>
      <td>{{$doctors->departments}}</td>
      <!-- <td></td> -->
      <input type="hidden" value="" class="applicate" name="">
        <input type="hidden" value="" class="applicantname" name="">
          <input type="hidden" value="" class="applicantid" name="">
   <!--    <th><a href="#" class="edits" data-toggle="modal" id="patient" data-bs-toggle="modal"
                            data-bs-target="#default">View</a></th> -->
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

  <div class="modal fade" id="editpatientmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('addproduct')}}" method="post" enctype="multipart/form-data" >
          @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" name="productname" class="form-control" id="productname"  required="">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Price</label>
            <input type="text" name="productprice" class="form-control" id="productprice"  required="">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Store</label>
            <input type="text" name="productstore" class="form-control" id="productstore"  required="">
          </div>
          <!--  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Category</label>
         <select class="custom-select my-1 mr-sm-2" name="productcategory" id="inlineFormCustomSelectPref">
    <option selected>Choose...</option>
    <option value="fruit">Fruits</option>
    <option value="vegetable">Vegetables</option>
    <option value="grocery">Grocery</option>
         </select>

          </div>
          -->
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Image</label>
            <input type="file"  class="form-control" id="productprice" name="productfile" required="" />
          </div>
         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add product</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
@endsection