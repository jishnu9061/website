@extends('layouts.hmsmain')
@section('content')

        <h4 class="text-center"><u><b>New Item List</b></u></h4>
       <br>
       <button type="button" class="btn btn-primary" style="background-color:#5e829d;width:25%;"data-toggle="modal" data-target="#myModal"><b>Add New Item</b></button>
       {{-- <button type="button" class="btn btn-primary" style="background-color:#435ebe;width:30%;"data-toggle="modal" data-target="#myModal-1"><b>Manage Category</b></button> --}}

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header" style="background-color:#5e829d">
                <h5 class="text-white">Add New Item</h5>

              </div>

              <!-- Modal body -->
              <div class="modal-body" >
                    <div class="container">
                        <form method="post" action="{{url('create_item')}}">
                            @csrf
                            <div class="row">
                                <div class="col-sm">
                                    <label>Brand Name</>
                                    <input type="text" name="brand_name" class="form-control" placeholder="" required>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-sm">
                                <label>Item Name</>
                                <input type="text" name="item_name" class="form-control" placeholder="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <label>Profit %</label>
                                <input type="text" name="profit_percentage" class="form-control" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="container">

                    </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-primary"  style="background-color:#5e829d;width:25%;" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" style="background-color:#5e829d;width:25%;">Save</button>
              </div>
            </form>

            </div>
          </div>
        </div>

      </div>

    <br>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <table class="table table-bordered" id="allsupplier">
                <thead>
                    <tr>
                        <th class="text-center">Item Id</th>
                        <th class="text-center">Brand Name</th>
                        <th class="text-center">Item Name</th>
                        <th class="text-center">Profit Percentage</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($new_item as $data )

                         <tr id="data">
                            <td class="text-center">{{$data->id}}</td>
                            <td class="text-center" id="brand_name">{{$data->brand_name}}</td>
                            <td class="text-center" id="item_name">{{$data->Item_name}}</td>
                            <td class="text-center" id="profit_percentage">{{$data->profit_percentage}}%</td>
                              <input type="hidden" value="{{$data->id}}" id="item_hidden" class="applicate" name="brand_id_hidden">
                            <td class="text-center"><a href="{{url('delete_item'.$data->id)}}" class="edits" data-toggle="modal" id="edit_item" data-bs-toggle="modal"
                                data-bs-target="#edit"><i class="fas fa-edit" style="color:#5e829d;"></i></a></td>
                            <td class="text-center"><a  onClick="return myFunction();" href="{{url('delete_item'.$data->id)}}" style="color:#5e829d;"><i class="fas fa-trash-alt"></i></a></td>
                         </tr>
                    @endforeach

                </tbody>
            </table>

            {{-- Supplier Modal Edit  Start--> --}}


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#5e829d">
          <h6 class="text-white" >Edit Item Name</h6>
          <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" enctype="multipart/form-data" action="{{url('update_item')}}" >
          @csrf
        <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <label>Brand Name</>
                            <input type="text" name="brand_name" id="edit_brand_name" class="form-control" placeholder="Brand Name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label>Item Name</>
                            <input type="text" name="item_name"  id="edit_Item_name" class="form-control" placeholder="Item Name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label>Profit %</>
                            <input type="text" name="profit_percentage" id="edit_profit_percentage" class="form-control" placeholder="Profit %" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                            <input type="hidden"  id="edit_item_id" name="item_id">

                    </div>
                </div>
                <div class="modal-footer">
                            <button type="button" class="btn btn-primary text-white"   style="width:35%;background-color:#5e829d"  data-bs-dismiss="modal"">Close</button>
                            <button type="submit" style="width:45%;background-color:#5e829d"  class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<!-- Supplier modal Edit End -->
</div>
<!-- Delete  confirmation Message -->
<script>
	function myFunction(){
		if(!confirm("Are you sure to delete this"))
		event.preventDefault();
	}
</script>
<!-- End delete confirmation message -->
</div>

{{-- Search booking script --}}
<script>
    $(document).ready(function(){
             $('.searchingBook').select2();
    });
 </script>
{{-- search booking script end --}}


<!-- Supplier Pagenation -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
    $(function(){
      $("#allsupplier").dataTable();
    })
  </script>
{{-- Supplier Edit start --}}

<script>
    $(document).on('click','#edit_item',function(){

        var item_id = $(this).closest('#data').find('#item_hidden').val();
        var brand_name = $(this).closest('#data').find('#brand_name').text();
        var item_name = $(this).closest('#data').find('#item_name').text();
        var profit_percentage = $(this).closest('#data').find('#profit_percentage').text();

        $("#edit_brand_name").val(brand_name);
        $("#edit_item_name").val(item_name);
        $("#edit_profit_percentage").val(profit_percentage);
        $("#edit_item_id").val(item_id);

});
</script>

{{-- Supplier Edit End --}}
@endsection



