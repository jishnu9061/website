
@extends('admindashboard.admindashboardtemplate')

@section('content')


                    <div class="spacer">
                    </div>
                   <br><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Products
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="active btn btn-focus" type="button" data-toggle="modal" data-target="#adminproductsmodal">Create new product</button>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Image</th>
                                               <th class="text-center">Name</th>
                                                <th class="text-center">Price</th>
                                                <th class="text-center">Store</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Actions</th>
                                                 
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($adminproducts as $product)
                                            <tr class="datas">
                                             
                                                <td class="text-center text-muted">#345</td>
                                                <td>
                                                   
                                                    <div class="widget-content p-0 ">
                                                        <div class="widget-content-wrapper ">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="100"  src="{{ URL::asset('storage/'.$product->image) }}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2"> 
                                                               <input type="hidden" value="{{$product->id}}" class="prodid" name="">
                                                              <input type="hidden" value="{{$product->name}}" class="prodname" name="">
                                                                <input type="hidden" value="{{$product->price}}" class="prodprice" name="">
                                                                  <input type="hidden" value="{{$product->category}}" class="prodcategory" name="">
                                                                   <input type="hidden" value="{{$product->store}}" class="prodstore" name="">
                                                                <div id="prodname" value="{{$product->name}}" class="widget-heading "></div>
                                                                 <div id="prodstore" value="{{$product->store}}" class="widget-heading "></div>
                                                                <div id="prodprice" class="widget-subheading opacity-7 prodprice"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                </td>
                                                 <td class="text-center" value="{{$product->category}}">{{$product->name}}</td>
                                                  <td class="text-center" value="{{$product->category}}">{{$product->price}}</td>
                                                <td class="text-center" value="{{$product->store}}">{{$product->store}}</td>
                                                <td class="text-center">
                                                    <div class="badge badge-warning">Ready</div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" value="{{$product->id}}" id="PopoverCustomT-1" class="btn btn-primary btn-sm edits" data-toggle="modal" data-target="#adminproductseditmodal" data-item-id="{{$product->id}}">edit</button>
                                                     <button type="button" value="{{$product->id}}" id="PopoverCustomT-1" class="btn btn-danger btn-sm delete" data-toggle="modal" data-target="#adminproductsdeletemodal" data-item-id="{{$product->id}}">delete</button>
                                                </td>
                                                 
                                                 
                                            </tr>

                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-center text-center card-footer">
                                        
                                        {{$adminproducts->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>


@endsection

<div class="modal fade" id="adminproductsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<div class="modal fade" id="adminproductsdeletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <form action="{{url('deleteproduct')}}" method="post" enctype="multipart/form-data" >
          @csrf
        <h5 class="modal-title" id="exampleModalLabel">sure to delete  <span name="somethingg" id="spamm"></span> ?</h5>
        <input type="hidden" name="something" id="inp">
        
      </div>
      <div class="modal-body">
       
      
         
       
         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary">Yes</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

<div class="modal fade" id="adminproductseditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('editproduct')}}" method="post" enctype="multipart/form-data" >
            @csrf
          <div class="form-group">
            <label for="recipient-name"  class="col-form-label">Name</label>
            <input type="text" name="productname" id="editproductname" class="form-control"  required="">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Price</label>
            <input type="text" name="productprice"  class="form-control" id="editproductprice"  required="">
          </div>
              <div class="form-group">
            <label for="recipient-name" class="col-form-label">Store</label>
            <input type="text" name="productstore"  class="form-control" id="editproductstore"  required="">
          </div>
         <!--   <div class="form-group">
            <label for="recipient-name" class="col-form-label">Category</label>
         <select class="custom-select my-1 mr-sm-2" name="productcategory" id="inlineFormCustomSelectPref">
    <option id ="editproductcategory" selected>Choose...</option>
    <option value="1">Fruits</option>
    <option value="2">Vegetables</option>
    <option value="3">Grocery</option>
  </select>

          </div>
        -->
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Image</label>
            <input type="file"  class="form-control" id="productprice" name="productfile" />
          </div>
         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit product</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

<script src="{{ url('assets/js') }}/jquery.min.js"></script>
 <script>
     $(function () {
  $('[data-toggle="popover"]').popover()
})

     $(document).on('click','.edits',function(){
     //var itemvalue = $(this).val();
    var namevalue = $(this).closest('.datas').find('.prodname').val();
    var pricevalue = $(this).closest('.datas').find('.prodprice').val();
    var categoryvalue = $(this).closest('.datas').find('.prodstore').val();


     $("#editproductname").val(namevalue);
       $("#editproductprice").val(pricevalue);
         $("#editproductstore").val(categoryvalue);


  //var itemvalue = $(this).closest('.datas').find('.prodname').val();
alert(itemvalue);
$('#productname').val(_this.find('.prodname').text());
$('#productprice').val(_this.find('.prodprice').text());
     ;
     })
      $(document).on('click','.delete',function(){
     //var itemvalue = $(this).val();
   
    var id= $(this).closest('.datas').find('.prodid').val();

    var name= $(this).closest('.datas').find('.prodname').val();
    


     $("#spamm").text(name);
      $("#inp").val(id);
     


  //var itemvalue = $(this).closest('.datas').find('.prodname').val();
alert(itemvalue);
$('#productname').val(_this.find('.prodname').text());
$('#productprice').val(_this.find('.prodprice').text());
     ;
     })
 </script>

<script type="text/javascript">

 $(document).ready(function() {
    // This WILL work because we are listening on the 'document', 
    // for a click on an element with an ID of #test-element
    $(document).on("click",".edits",function() {
        alert("click bound to document listening for #test-element");
    });   
$(document).on('click','.edits',function()
{
  alert('hh');
var _this=$(this).parents('tr');

$('#productname').val(_this.find('.productname').text());
$('#productprice').val(_this.find('.productprice').text());
});
</script>