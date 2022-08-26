@extends('layouts.hmsmain')
@section('content')
<head>
	    <meta name="csrf-token" content="{{ csrf_token() }}">
<style>
.row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display:         flex;
  flex-wrap: wrap;
}
.row > [class*='col-'] {
  display: flex;
  flex-direction: column;
}
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="home-tab" data-bs-toggle="tab" href="#allowances" role="tab" aria-controls="home" aria-selected="true">Allowances</a>
  </li>
    <li class="nav-item" role="presentation">
    <a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#reductions" role="tab" aria-controls="profile" aria-selected="false">Deductions</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#leavecategories" role="tab" aria-controls="profile" aria-selected="false">Leave Categories</a>
  </li>

</ul>


</head>

<body>

<div class="tab-content" id="myTabContent">
 <div class="tab-pane fade" id="allowances" role="tabpanel" aria-labelledby="home-tab">
    <button type="button" class="btn-primary btn-sm"  data-toggle="modal" data-bs-toggle="modal"
    data-bs-target="#addallowance" style="float:right; width:150px;">Add New Allowance</button>
 <div style="height: 50px;">

</div>


<div class="row">
	<div class="col-md-6 col-lg-6">
		<h4>Fixed Allowances</h4>
		<hr>

	    <div style="height:50px;">

	    </div>
	    <table class="table table-bordered">
			<thead>
				<tr>
					<th>
						Allowance Name
					</th>
					<th>
						Amount
					</th>
					<th>
						Percent
					</th>
					<th>
						Edit
					</th>
					<th>
						Delete
					</th>
				</tr>

			</thead>
			<tbody >
				@foreach($allowancedata as $data)
				<tr class="allowdatax">
					<td class="allownamex">{{$data->allowancename}}</td>
					<td class="allowpricex">{{$data->price}}</td>
					<td class="allowpercentx">{{$data->percent}}</td>
					<input type="hidden" class="allowidx" value="{{$data->id}}">
					<td><button type="button" id="alloweditx" class="form-control fa fa-edit" data-toggle="modal" data-bs-toggle="modal"
                            data-bs-target="#default"></button></td>
					<form method="post" action="{{url('allowancedelete'.$data->id)}}">
					@csrf
					<input type="hidden" name="delete">
					<td><button type="submit" onclick="return confirm('Are you sure?')" class="form-control fa fa-trash"></button></td>
					</form>
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>
	<div class="col-md-6 col-lg-6">


		<h4>Non-Fixed Allowances</h4>
		<hr>


	    <div style="height:50px;">

	    </div>
	    <table class="table table-bordered">
			<thead>
				<tr>
					<th>
						Allowance Name
					</th>
                    <!-- <th>
						Amount
					</th> -->
					<th>
						Edit
					</th>
					<th>
						Delete
					</th>
				</tr>

			</thead>
			<tbody >
				@foreach($nondata as $data)
				<tr class="allowdatax">
					<td class="allownamex">{{$data->allowancename}}</td>
					<!-- <td class="allowpricex">{{$data->price}}</td> -->
					<input type="hidden" class="allowidx" value="{{$data->id}}">
					<td><button type="button" id="alloweditx" class="form-control fa fa-edit" data-toggle="modal" data-bs-toggle="modal"
                            data-bs-target="#default"></button></td>
					<form method="post" action="{{url('allowancedelete'.$data->id)}}">
					@csrf
					<input type="hidden" name="delete">
					<td><button type="submit" onclick="return confirm('Are you sure?')" class="form-control fa fa-trash"></button></td>
					</form>
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>
</div>

<div style="height: 50px;">

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</div>

<div class="tab-pane fade show active" id="reductions" role="tabpanel" aria-labelledby="profile-tab">

<div style="height: 50px;">

</div>



	<div class="container">
		<button type="button" class="btn-primary"  data-toggle="modal" data-bs-toggle="modal"
                            data-bs-target="#addreduction" style="float:right;width:auto;padding:5px;padding-left:15px;padding-right:15px;margin-bottom:10px;">Add New Deduction</button>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>
						Deduction Name
					</th>
					<th>
						Amount
					</th>
					<th>
						Percent
					</th>
                    <th>
                        Edit
                    </th>
					<th>
						Delete
					</th>
				</tr>

			</thead>
			<tbody>
				@foreach($reductiondata as $data)
				<tr id="deddat">
					<td id="rednametd">{{$data->allowancename}}</td>
					<td id="redpricetd">{{$data->price}}</td>
					<td id="redpercenttd">{{$data->percent}}</td>
                    <input type="hidden" value="{{$data->id}}" id="redidtd">
					<td><button type="button" id="deddeditx" class="form-control fa fa-edit" data-toggle="modal" data-bs-toggle="modal"
                            data-bs-target="#deddeditmodal"></button></td>
					<form method="post" action="{{url('reductiondelete'.$data->id)}}">
					@csrf
					<input type="hidden" name="delete">
					<td><button type="submit" onclick="return confirm('Are you sure?')" class="fa fa-trash"></button></td>
					</form>
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>


<div style="height: 50px;">

</div>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script type="text/javascript">
	  $(document).on('input','#priceredu',function(){

$('#percentredu').prop('readonly', true);

});
	    $(document).on('input','#percentredu',function(){
$('#priceredu').prop('readonly', true);

});
</script>



</div>

<div class="tab-pane fade" id="leavecategories" role="tabpanel" aria-labelledby="profile-tab">


<div style="height: 50px;">

</div>

<div class="container">
    <button type="button" class="btn-primary"  data-toggle="modal" data-bs-toggle="modal"
                        data-bs-target="#addleavetype" style="float:right;width:auto;padding:5px;padding-left:15px;padding-right:15px;margin-bottom:10px;">Add Leave Type</button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                    Leave Type
                </th>
                <th>
                   Abbreviation
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Delete
                </th>
            </tr>

        </thead>
        <tbody>
            @foreach($leavetype as $data)
            <tr id="levdat">
                <td id="levdattyp">{{$data->leave_type}}</td>
                <td id="levdatabr">{{$data->abbreviation}}</td>
                <td><button type="button" id="levdatedt" class="form-control fa fa-edit" data-toggle="modal" data-bs-toggle="modal"
                        data-bs-target="#editleave"></button></td>
                <form method="post" action="{{url('leavetypedelete'.$data->id)}}">
                @csrf
                <input type="hidden" value="{{$data->id}}" id="fnduniqid" name="delete">
                <td><button type="submit" onclick="return confirm('Are you sure?')" class="fa fa-trash"></button></td>
                </form>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>

</div>

<!--  Allowance Add Modal -->
  <div class="modal fade text-left" id="addallowance" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title bb" id="myModalLabel1"> </h5>
                                     <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#fixd" role="tab" aria-controls="home" aria-selected="true">Fixed Allowance</a>
  </li>
    <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#nonfixd" role="tab" aria-controls="profile" aria-selected="false">Non-fixed Allowance</a>
  </li>


</ul>
<div class="tab-content" id="myTabContent">
 <div class="tab-pane fade show active" id="fixd" role="tabpanel" aria-labelledby="home-tab">

 	   <form action="{{url('addallowance')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"></label>

                          <br>
                          <label>Allowance Name</label>
                           <input type="text" value="" class="form-control" name="allowance1" required>

                           <label>Amount</label>
                           <input type="number" value="" id="price" class="form-control" name="allowance1price"  min="0" required>


                           <label>Percent</label>
                           <input type="number" value="" id="percent" class="form-control " name="allowance1percent"  min="0">


                        </div>

                        </div>
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>

                                        <button type="submit" class="btn btn-primary ml-1">
                                           Submit
                                        </button>

                                    </div>
                                      </form>
 </div>
 <div class="tab-pane fade" id="nonfixd" role="tabpanel" aria-labelledby="profile-tab">

 <form action="{{url('addnonfixedallowance')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">
                              <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"></label>

                          <br>
                          <label>Allowance Name</label>
                           <input type="text" value="" class="form-control" name="allowance1">

                           <!-- <label>Amount</label>
                           <input type="text" value="" class="form-control" name="allowance1price"> -->

                        </div>

                        </div>
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>

                                        <button type="submit" class="btn btn-primary ml-1">
                                           Submit
                                        </button>

                                    </div>
                                      </form>
 </div>
</div>



                                </div>
                            </div>


                        </div>
 <!--  Reduction Add Modal -->

	      <div class="modal fade text-left" id="addreduction" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title bb" id="myModalLabel1"> </h5>
                                     <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>


 	   <form action="{{url('addreduction')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"></label>

                          <br>
                          <label>Deduction Name</label>
                           <input type="text" value="" class="form-control" name="allowance1" required>

                           <label>Amount</label>
                           <input type="number" value="" id="reddprice" class="form-control" name="allowance1price" min="0">


                           <label>Percent</label>
                           <input type="number" value="" id="reddpercent" class="form-control" name="allowance1percent" min="0">


                        </div>

                        </div>
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>

                                        <button type="submit" class="btn btn-primary ml-1">
                                           Submit
                                        </button>

                                    </div>
                                      </form>




 </div>
</div>



                                </div>
 <!-- leave types modal  -->
	      <div class="modal fade text-left" id="addleavetype" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title bb" id="myModalLabel1"> </h5>
                   <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                          aria-label="Close">
                          <i data-feather="x"></i>
                      </button>
                  </div>


<form action="{{url('addleavetype')}}" method="post" >
                   @csrf
                  <div class="modal-body">

                       <div class="card-body">


      <div class="form-group mb-3">
          <label for="exampleFormControlTextarea1" class="form-label"></label>

        <br>
        <label>Leave Type</label>
         <input type="text" value="" class="form-control" name="leavetype" required>

         <label>Abbreviation(2 letters)</label>
         <input type="text"  class="form-control" name="abbreviation"
  pattern="[A-Za-z]{2}" title="Should Be a Two letters">

      </div>

      </div>
                  </div>


                  <div class="modal-footer">
                      <button type="button" class="btn" data-bs-dismiss="modal">
                          <i class="bx bx-x d-block d-sm-none"></i>
                          <span class="d-none d-sm-block">Close</span>
                      </button>

                      <button type="submit" class="btn btn-primary ml-1">
                         Submit
                      </button>

                  </div>
                    </form>




</div>
</div>



              </div>
<!-- leave types ended -->

<!--  Allowance Edit Modal -->
  <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">



    <h5 class="modal-title bb" id="myModalLabel1"> </h5>



                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="{{url('editdeallowance')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"></label>

                          <br>
                          <label>Allowance Name</label>
                           <input type="text" value="" class="form-control" name="allowaname" id="allowaname">
                           <div id="hideprice">
                           <label>Amount</label>
                           <input type="number" value="" class="form-control" name="allowaprice" id="allowaprice" min="0">
                           </div>
                           <div id="hidepercent">
                           <label>Percent</label>
                           <input type="number" value="" class="form-control " name="allowapercent" id="allowapercent" min="0">
                           </div>
                           <input type="hidden" id="allowaid" name="allowaid">
                        </div>

                        </div>
                                    </div>
                                    <input type="hidden" id="roomcategory" value="" name="roomcategory">
                                    <input type="hidden" id="roomno" value="" name="roomno">



                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>

                                        <button type="submit" class="btn btn-primary ml-1" >
                                           Edit It
                                        </button>

                                    </div>
                                      </form>


                                </div>
                            </div>


                        </div>

    <!--  Deduction Edit Modal -->
                         <div class="modal fade text-left" id="deddeditmodal" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">



    <h5 class="modal-title bb" id="myModalLabel1"> </h5>



                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="{{url('editdereduction')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"></label>

                          <br>
                          <label>Deduction Name</label>
                           <input type="text" value="" class="form-control" name="redctaname" id="redctaname">
                           <div id="hideredddprice">
                           <label>Amount</label>
                           <input type="number" value="" class="form-control" name="redctaprice" id="redctaprice" min="0">
                           </div>
                           <div id="hideredddpercent">
                           <label>Percent</label>
                           <input type="number" value="" class="form-control" name="redctapercent" id="redctapercent" min="0">
                           </div>
                           <input type="hidden" id="redctaid" name="redctaid">
                        </div>

                        </div>
                                    </div>
                                    <input type="hidden" id="roomcategory" value="" name="roomcategory">
                                    <input type="hidden" id="roomno" value="" name="roomno">



                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>

                                        <button type="submit" class="btn btn-primary ml-1" >
                                           Edit
                                        </button>

                                    </div>
                                      </form>


                                </div>
                            </div>


                        </div>
{{-- deduction ended --}}

{{-- edit leave type --}}
<div class="modal fade text-left" id="editleave" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
         <h5 class="modal-title bb" id="myModalLabel1"> </h5>

                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="{{url('editleavetype')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"></label>

                          <br>
                          <label>Leave Type</label>
                           <input type="text" value="" class="form-control" name="leave_type" id="leave_type_modl">
                           <input type="hidden" id="id" name="id">
                        </div>
                        <label>Abbreviation</label>
                 <input type="text" value="" class="form-control" name="abbr_type" id="abbr_type_modl"  pattern="[A-Za-z]{2}" title="Should Be a Two letters">
                        </div>
                                    </div>
                                    <input type="hidden" id="leevuniqids" value="" name="leevuniqids">
                                   



                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>

                                        <button type="submit" class="btn btn-primary ml-1" >
                                           Edit
                                        </button>

                                    </div>
                                      </form>


                                </div>
                            </div>


                        </div>
                    {{-- end leave type --}}
                        <script>
	  $(document).on('click','#price',function(){

$('#percent').val('');
 $("#price").prop('required',true);
 $("#percent").prop('required',false);


});
	    $(document).on('click','#percent',function(){
            $('#price').val('');
         
           $("#percent").prop('required',true);
           $("#price").prop('required',false);  

});
$(document).on('input','#reddprice',function(){

$('#reddpercent').val('');



});
	    $(document).on('input','#reddpercent',function(){
            $('#reddprice').val('');
         
           

});

  $(document).on('click','#alloweditx',function(){

  var allownamex= $(this).closest('.allowdatax').find('.allownamex').text();
//   var allownaprice= $(this).closest('.allowdatax').find('.allownaprice').text();
   var allowpricex= $(this).closest('.allowdatax').find('.allowpricex').text();
    var allowpercentx= $(this).closest('.allowdatax').find('.allowpercentx').text();
    var allowidx= $(this).closest('.allowdatax').find('.allowidx').val();

    if(allowpricex == '')
    {

      $("#hideprice").hide();
      $("#hidepercent").show();

    }
        if(allowpercentx == '')
    {

      $("#hidepercent").hide();
      $("#hideprice").show();
    }
    if(allowpercentx == '' && allowpricex == '')
    {
        $("#hidepercent").hide();
      $("#hideprice").hide();
    }
    // if(allownaprice == '')
    // {

    //   $("#hideprice").hide();
    //   $("#hidepercent").show();

    // }
     $("#allowaname").val(allownamex);
    //  $("#allowance1price").val(allownaprice);
     $("#allowaprice").val(allowpricex);
     $("#allowapercent").val(allowpercentx);
     $("#allowaid").val(allowidx);
     ;
     })
</script>

<script>
    $(document).on('click','#deddeditx',function(){
       
        var rednametd= $(this).closest('#deddat').find('#rednametd').text(); 
        var redpricetd= $(this).closest('#deddat').find('#redpricetd').text(); 
        var redpercenttd= $(this).closest('#deddat').find('#redpercenttd').text(); 
        var redidtd= $(this).closest('#deddat').find('#redidtd').val(); 
        if(redpricetd == '')
    {

      $("#hideredddprice").hide();
      $("#hideredddpercent").show();

    }
        if(redpercenttd == '')
    {

      $("#hideredddpercent").hide();
      $("#hideredddprice").show();
    }
        
            $("#redctaname").val(rednametd);
            $("#redctaprice").val(redpricetd);
            $("#redctapercent").val(redpercenttd);
            $("#redctaid").val(redidtd);
    });	
</script>

<script>
    	  $(document).on('click','#levdatedt',function(){
            var levdattyp= $(this).closest('#levdat').find('#levdattyp').text(); 
            var levdatabr= $(this).closest('#levdat').find('#levdatabr').text(); 
            var fnduniqid= $(this).closest('#levdat').find('#fnduniqid').val(); 
            
            $("#leave_type_modl").val(levdattyp);
            $("#abbr_type_modl").val(levdatabr);
            $("#leevuniqids").val(fnduniqid);
            
           

});
    </script>

<script>
    $(document).on('click','.tablinks',function(){
      $("#hidediv").hide();
    })
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
@endsection



