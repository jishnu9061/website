@extends('layouts.hmsmain')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  {{-- <div class="spacer" style="height:40px;margin-top: 30px;"> --}}


</head>

<body>
    <div class="container">
        <h3 class="text-center"><b><u>Manufacturer Datails</u></b></h3>
       <br>
       <button type="button" class="btn btn-primary" style="width:18%;"data-toggle="modal" data-target="#myModal"><b>Add Manufacturer</b></button>


        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header" style="background-color:#435ebe">
                <h4 class="text-white">Add Manufacturer</h4>

              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <div class="container">
                    <form method="post" action="{{url('add_manufacturers')}}">
                        @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="manufacturer_name" class="form-control" placeholder="Manufacturer Name" required><br>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" id="percent" class="form-control" placeholder="Email" required><br>
                            <input type="text" name="contact_no" id="percent" class="form-control" placeholder="Phone" required><br>
                            <input type="text" name="mobile" id="percent" class="form-control" placeholder="Mobile No" required><br>
                            <input type="text" name="fax" id="percent" class="form-control" placeholder="Fax" ><br>
                            <textarea class="form-control z-depth-1" name="address" id="exampleFormControlTextarea6" rows="3" placeholder="Address" required></textarea>

                        </div>
                        <div class="col-md-6">
                            <input type="text" name="city" id="percent" class="form-control" placeholder="City"><br>
                            <input type="text" name="state" id="percent" class="form-control" placeholder="State"><br>
                            <input type="text" name="country" id="percent" class="form-control" placeholder="Country"><br>

                                        <input type="text" name="postal_code" class="form-control" placeholder="Postal Code"><br>
                                        <textarea class="form-control z-depth-1" name="details" id="exampleFormControlTextarea6" rows="3" placeholder="Details"></textarea><br>


                        </div>
                    </div>

                </div>
                <div class="container">

                </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-primary"  style="background-color:#435ebe;width:20%;" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" style="background-color:#435ebe;width:20%;">Save</button>
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
                        <th class="text-center">Id</th>
                        <th class="text-center">Manufacturer</th>
                        <th class="text-center">Contact</th>
                        <th class="text-center">View</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>
                        <th class="text-center">Payment Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($manufacturers as $data)
                        <tr id="data">
                            <td  scope="row" class="text-center">{{$data->id}}</td>
                            <td  scope="row" class="text-center" id="manfact_name_x">{{$data->manufactuers_name}}</td>
                            <td  scope="row"class="text-center" id="manufact_mobile">{{$data->mobile}}</td>
                            <td  scope="row"class="text-center"><a href="{{url('view_manufacturer_details'.$data->id)}}"><i  style="color:#435ebe;" class="fa fa-eye" aria-hidden="true"></i></td>
                            <input type="hidden" value="{{$data->id}}" id="manfact_hidden" class="applicate" name="supplier_id_hidden">
                            <td class="text-center"><a href="{{url('update_manufacturer'.$data->id)}}" class="edits" data-toggle="modal" id="sup_edit_manufactuer" data-bs-toggle="modal"
                                data-bs-target="#edit"><i class="fas fa-edit" style="color:#435ebe;"></i></a></td>
                            <td class="text-center"><a  onClick="return myFunction();" href="{{url('delete_manufacturer'.$data->id)}}" style="color:#435ebe;"><i class="fas fa-trash-alt"></i></a></td>
                            <td  class="text-center"> <a type="button" class="btn btn-primary" style="width:50%" href="{{url('manufacturer_ledger_details'.$data->id)}}"><b>View</b></a></td>
                            <input type="hidden" id="manfact_email" value="{{$data->email}}">
                            <input type="hidden" id="manfact_phone" value="{{$data->contact_no}}">
                            <input type="hidden" id="manfact_mobile" value="{{$data->mobile}}">
                            <input type="hidden" id="manfact_fax" value="{{$data->fax}}">
                            <input type="hidden" id="manfact_address" value="{{$data->address}}">
                            <input type="hidden" id="manfact_city" value="{{$data->city}}">
                            <input type="hidden" id="manfact_state" value="{{$data->state}}">
                            <input type="hidden" id="manfact_country" value="{{$data->country}}">
                            <input type="hidden" id="manfact_postal_code" value="{{$data->zipcode}}">
                            <input type="hidden" id="manufact_details" value="{{$data->details}}">
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- Supplier Modal Edit  Start--> --}}


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#435ebe">
          <h4 class="text-white" >Edit Manufacturer</h4>
          <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" enctype="multipart/form-data" action="{{url('update_manufacturer')}}">
          @csrf
        <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                                <input type="text" class="form-control" id="edit_name_z" name="manufacturer_name" placeholder="Manufacturer Name" required><br>
                    </div>
                    <div class="col-md-6">
                                <input type="email" class="form-control" id="edit_email" name="email"placeholder="Email" ><br>
                                <input type="text" class="form-control" id="edit_phone" name="phone" placeholder="Phone" ><br>
                                <input type="text" class="form-control" id="edit_mobile" name="mobile"placeholder="Mobile" ><br>
                                <input type="text" class="form-control" id="edit_fax" name="fax"placeholder="Fax" ><br>
                                <textarea class="form-control z-depth-1" name="address" id="edit_sup_address" rows="3" placeholder="Address" required ></textarea><br>
                    </div>
                    <div class="col-md-6">
                                <input type="text" name="city" id="edit_sup_city" class="form-control" placeholder="City" required><br>
                                <input type="text" name="state" id="edit_state" class="form-control" placeholder="State" required><br>
                                <input type="text" name="country" id="edit_country" class="form-control" placeholder="Country" required><br>
                                <input type="text" name="postal_code" class="form-control" id="edit_postal_code" placeholder="Postal Code" required ><br>
                                <textarea class="form-control z-depth-1" name="details" id="edit_manu_details" rows="3" placeholder="Manufacterur Details" ></textarea>

                    </div>
                </div>
                <div class="row">
                        <div class="col-md-6">
                                <input type="hidden" class="form-control" id="edit_id123" name="manufact_id">

                        </div>
                         <div class="col-md-6">
                                <input type="hidden" class="form-control" id="editid" name="hiddenid">
                        </div>
                        </div>
                <div class="modal-footer">
                            <button type="button" class="btn btn-primary text-white"   style="width:20%;background-color:#435ebe"  data-bs-dismiss="modal"">Close</button>
                            <button type="submit" style="width:20%;background-color:#435ebe"  class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<!-- Supplier modal Edit End -->

{{-- Supplier Ledger --}}

 <!-- The Modal -->
  <div class="modal fade" id="myModal-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-body">
            <h3 class="text-center"><b><u>Manufacturer Ledger Details</u></b></h3>
            <div Class="container box">

                </form>
                <div>
                <table class="table  table-bordered " id="allpatients" style="width:100%">
                        <thead>
                            <tr>
                                <th>Order No</th>
                                <th>Date</th>
                                <th>Manufacturer</th>
                                <th>Advance</th>
                                <th>Balance</th>
                                <th>Next Payment</th>
                            </tr>

                        </thead>
                        <tbody >
                        </tbody>
                    </table>

              </table>
            </div>
            <div class="row">
                <div class="col-sm">
                </div>
                <div class="col-sm">
                </div>
                <div class="col-sm">
                    <button type="button" class="btn btn-secondary" style="width:100%" data-dismiss="modal">Close</button>
                </div>
            </div>


        </div>

        <!-- Modal footer -->
        <div>

        </div>

      </div>
    </div>
  </div>

</div>



        </div>


<div style="height: 50px;">

</div>





</div>


<!-- Supplier modal Edit End -->

<!-- Delete  confirmation Message -->
<script>
	function myFunction(){
		if(!confirm("Are you sure to delete this"))
		event.preventDefault();
	}
</script>
<!-- End delete confirmation message -->

<div id="supply_ledger" class="tabcontent">
 <div style="height:20px;">

</div>

{{-- supplier Ledger --}}


<div style="height: 50px;">

</div>











</div>
<div id="issue" class="tabcontent">
 <div style="height:20px;">

</div>






</div>

{{-- Search booking script --}}
<script>
    $(document).ready(function(){
             $('.searchingBook').select2();
    });
 </script>
{{-- search booking script end --}}

<!-- Supplier Pagenation -->


<!-- Delete  confirmation Message -->
  <script>
    function myFunction(){
        if(!confirm("Are you sure to delete this"))
        event.preventDefault();
    }
</script>
<!-- End delete confirmation message -->

<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
    $(function(){
      $("#allsupplier").dataTable();
    })
  </script>
{{-- Supplier Edit start --}}

<script>
    $(document).on('click','#sup_edit_manufactuer',function(){

        var manufact_id = $(this).closest('#data').find('#manfact_hidden').val();
        var manufact_name = $(this).closest('#data').find('#manfact_name_x').text();
        var manufact_email = $(this).closest('#data').find('#manfact_email').val();
        var manufact_phone = $(this).closest('#data').find('#manfact_phone').val();
        var manufact_mobile = $(this).closest('#data').find('#manfact_mobile').val();
        var manufact_fax = $(this).closest('#data').find('#manfact_fax').val();
        var manufact_address = $(this).closest('#data').find('#manfact_address').val();
        var manufact_city = $(this).closest('#data').find('#manfact_city').val();
        var manufact_state = $(this).closest('#data').find('#manfact_state').val();
        var manufact_country = $(this).closest('#data').find('#manfact_country').val();
        var manufact_postal_code = $(this).closest('#data').find('#manfact_postal_code').val();
        var manufact_detailss = $(this).closest('#data').find('#manufact_details').val();




        $("#edit_name_z").val(manufact_name);
        $("#edit_email").val( manufact_email);
        $("#edit_phone").val( manufact_phone);
        $("#edit_mobile").val( manufact_mobile);
        $("#edit_fax").val( manufact_fax);
        $("#edit_sup_address").val(manufact_address);
        $("#edit_sup_city").val(manufact_city);
        $("#edit_state").val( manufact_state);
        $("#edit_country").val(manufact_country);
        $("#edit_postal_code").val(manufact_postal_code);
        $("#edit_manu_details").val(manufact_detailss);
        $("#edit_id123").val(manufact_id);
});
</script>
{{-- Supplier Edit End --}}
@endsection



