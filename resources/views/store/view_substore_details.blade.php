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
    <div class="tab-content" id="myTabContent">
     <h3 style="text-align:center"><b><u>Substore Details</u></b></h3><br>
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <table class="table table-bordered" id="allsupplier">
                <thead>
                    <tr>
                        {{-- <th class="text-center">Sl No</th> --}}
                        <th class="text-center">Substore Name</th>
                         <th class="text-center">DEpartment Name</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $substore_details as $data)
                         <tr id="data">
                            {{-- <td  scope="row" class="text-center">{{$data->id}}</td> --}}
                            <td  scope="row" class="text-center" id="sup_name_x">{{$data->sub_store_name}}</td>
                            <td  scope="row" class="text-center" id="sup_name_x">{{$data->department_name}}</td>
                            <td  scope="row"class="text-center"><a href="{{url('edit_substore'.$data->id)}}"><i  style="color:#435ebe;" class="fa fa-edit" aria-hidden="true"></i></td>
                            <td  scope="row"class="text-center"><a href="{{url('delete_substore'.$data->id)}}"><i  style="color:#435ebe;" class="fa fa-trash"  onclick="return confirm('Are you sure you want to delete this item?');" aria-hidden="true"></i></td>
                            <a href="{{url('view_purchase_details_stock')}}">
                            
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


    cols += '<td><input type="text" class="form-control" id="cashdeb' + counter + '" data-action="sumDebit" name="debit" placeholder="Debit amount"/></td>';
    cols += '<td><button type="button" class="adRow ibtnDel" style="width:70%;">x</button></a></td>';
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
