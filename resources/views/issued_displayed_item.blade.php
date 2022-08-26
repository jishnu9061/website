@extends('layouts.hmsmain')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  {{-- <div class="spacer" style="height:40px;margin-top: 30px;"> --}}
</head>
<body>
    <div class="container">
        <h4 style="text-align:center"><b>Request Details</b></h4><br>
       <br>
       <button type="button" class="btn btn-primary" style="background-color:#5e829d;width:35%;"data-toggle="modal" data-target="#myModal"><b>Add Request</b></button><br>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header" style="background-color:#5e829d">
                <h4 class="text-white"><b>Add Request Items</b></h4></div>

              <!-- Modal body -->
              <div class="modal-body">
                <div class="container">
                    <form method="post" action="{{url('add_request_items')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm">
                                <div class="col-sm">
                                    <input type="hidden" name="request_intendid">
                                    <label for="">Request Date</label>
                                    <input type="date" name="request_date" id="request_date" value="{{date('Y-m-d', time())}}" class="form-control"><br>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="col-sm">
                                    <label for="">Request Department</label>
                                    <input type="hidden" name="id">
                                    <input type="text" name="department" id="department" value="{{$department[0]->depname}}" class="form-control"><br>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="col-sm">
                                    <label for="">Request Added By</label>
                                        <select class="form-select" aria-label="Default select example" name="added_by" id="added_by" style="pointer-events:none">
                                            <option value="">Select</option>
                                                @foreach ($users as $key2)
                                                    <option value="{{$key2->id}}" {{ ($key2->id==Auth::user()->id) ? "selected" : "" }} >{{$key2->name}}</option>
                                                @endforeach
                                        </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row clearfix">
                              <div class="col-md-12 column">
                                <h4 style="text-align:center"><b>Items Details</b></h4><br>
                                <table class="table table-bordered table-hover order-list" id="tab_logic">
                                 <tr>
                                        <td style="width:40%"><b>Item Name</b></td>
                                        <td style="width:20%"><b>Requested Quantity</b></td>
                                        <td><input type="button" class="add_Row adRow" style="width:100%" id="add_Row" value="Add Row"></td>
                                    </tr>
                                  <tbody>
                                    <tr>
                                        <td><select class="form-select"  aria-label="select example" name="item_name[]" id="item_name">
                                            <option value="">Select</option>
                                            @foreach ($medicines  as $row)
                                                <option value="{{$row->id}}">{{$row->Item_name}}</option>
                                            @endforeach
                                          </select></td>
                                        <td><input type="text" name="quantity[]" id="quantity_" class="form-control text-right calculate"></td>
                                        <td><button type="button" class="add-Row ibtnDel btn btn-primary text-white " style="background-color:#5e829d;width:100%;color:white;">Remove</button><td>
                                    </tr>

                                  </tbody>
                                </table>
                            </div>
                            </div>
                          </div>
                         <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" id="edit_id" name="medicine_id">
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary text-white" style="width:20%;background-color:#5e829d" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" style="background-color:#5e829d;width:20%;">Save</button>
                                </div>
                    </div>
                    <div class="container">



                    </div>
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
                        <th class="text-center">Requested Date</th>
                        <th class="text-center">Requested Department</th>
                        <th class="text-center">Requested Addedby</th>
                        <th class="text-center">Requested Status</th>
                        <th class="text-center">View</th>
                        <th class="text-center">Edit</th>
                        <!-- <th class="text-center">Delete</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($requested_items as $data)
                         <tr id="data">
                            <td  scope="row" class="text-center">{{date('d-m-Y',strtotime($data->request_intenddate))}}</td>
                            <td  scope="row" class="text-center" id="sup_name_x">{{$data->department}}</td>
                            <td  scope="row" class="text-center" id="sup_name_x">{{$data->name}}</td>
                            <td  scope="row" class="text-center" id="sup_name_x">{{$data->request_statusname}}</td>
                            <td  scope="row"class="text-center"><a href="{{url('view_request_items'.$data->request_intendid)}}"><i  style="color:#435ebe;" class="fa fa-eye" aria-hidden="true"></i></td>
                            <input type="hidden" value="" id="medicine_id_hidden" class="applicate" name="supplier_id_hidden"> <td  scope="row"class="text-center"><a href="{{url('edit_request_items'.$data->request_intendid)}}"><i  style="color:#435ebe;" class="fa fa-edit" aria-hidden="true"></i></td>
                         <!--  -->
                        </tr>
                    @endforeach
                </tbody>
            </table>



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
<!-- Delete  confirmation Message -->
  <script>
    function myFunction(){
        if(!confirm("Are you sure to delete this"))
        event.preventDefault();
    }
</script>
<!-- End delete confirmation message -->

<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        // add new product row on invoice
        var cloned = $('#tab_logic tr:last').clone();
        $("#add_Row").click(function (e) {
            e.preventDefault();
            cloned.clone().appendTo('#tab_logic');
        });
        $("table.order-list").on("click", ".ibtnDel", function(_event) {
            $(this).closest("tr").remove();
            counter -= 1
          });
});
</script>
<script>
    $(function(){
      $("#allsupplier").dataTable();
    })
</script>
<script>
    $(document).ready(function() {
      $(".select_group").select2();
      // $("#description").wysihtml5();
    });

// delete function
$("table.order-list").on("click", ".ibtnDel", function(_event) {
    $(this).closest("tr").remove();
    counter -= 1
  });

</script>
<script>
    $(document).ready(function() {
  var counter = 0;

  $("#add_Row").on("click", function() {
    var newRow = $("<tr>");
    var cols = "";

    newRow.append(cols);

    var defVal = $("select[name=acctname]").find(":selected").val();
    if (defVal) {
      $("select[name=accountName]").find(`option[value=${defVal}]`).hide();
    }
    $("table.order-list").append(newRow);
    setValCashVal('accountName'.concat(counter));
    bindScript();
    counter++;
  });

  // delete function
  $("table.order-list").on("click", ".ibtnDel", function(_event) {
    $(this).closest("tr").remove();
    counter -= 1
  });

});
</script>

@endsection
