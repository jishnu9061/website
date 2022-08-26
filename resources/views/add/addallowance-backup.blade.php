@extends('layouts.hmsmain')
@section('content')
<head>
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  -webkit-animation: fadeEffect 1s;
  animation: fadeEffect 1s;
}
.twitter-typeahead, .tt-hint, .tt-input, .tt-menu { width: 100%; }

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}
</style>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

</head>

<body>
  
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'allowances')">Allowances</button>
  <button class="tablinks" onclick="openCity(event, 'reductions')">Deduction</button>
  <button class="tablinks" onclick="openCity(event, 'leavecategories')">Leave Categories</button>
<!--    <button type="submit" class="tablinks btn-success btn btn-lg" type="submit" style="float: right;color: green;"><h4 style="color: black;">Call next</h4></button> -->
</div>

<div id="allowances" class="tabcontent">
 <div style="height: 50px;">
  
</div>


<div class="row">
	<div class="col-md-6 col-lg-6">
		<label>Fixed Allowance</label>
		<form method="post" action="{{url('addallowance')}}">
		@csrf
		<input type="" name="allowance1" class="form-control" placeholder="Allowance Name">
		<input type="" name="allowance1price" id="price" class="form-control price" placeholder="Price per month">
		<input type="" name="allowance1percent" id="percent" class="form-control percent" placeholder="Percent Of Basic pay">
		<button type="submit" class="btn btn-secondary btn-block">Add allowance</button>
	    </form>
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
					<td><button type="submit" class="form-control fa fa-trash"></button></td>
					</form>
				</tr>
				@endforeach
				
			</tbody>
		</table>
	</div>
	<div class="col-md-6 col-lg-6">
		<label>Non-fixed Allowance</label>

		<form method="post" action="{{url('addnonfixedallowance')}}">
		@csrf
		<input type="" name="allowance1" class="form-control" placeholder="Allowance Name" >
		<input type="" name="allowance1price" class="form-control" placeholder="Price per month" readonly="">
		<input type="" name="allowance1percent" class="form-control" placeholder="Percent of BasicPay" readonly="">
				

		<button type="submit" class="btn btn-secondary btn-block">Add allowance</button>
	    </form>
	    <div style="height:50px;">
	    	
	    </div>
	    <table class="table table-bordered">
			<thead>
				<tr>
					<th>
						Allowance Name
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
				@foreach($nondata as $data)
				<tr class="allowdatax">
					<td class="allownamex">{{$data->allowancename}}</td>
					
					<input type="hidden" class="allowidx" value="{{$data->id}}">
					<td><button type="button" id="alloweditx" class="form-control fa fa-edit" data-toggle="modal" data-bs-toggle="modal"
                            data-bs-target="#default"></button></td>
					<form method="post" action="{{url('allowancedelete'.$data->id)}}">
					@csrf
					<input type="hidden" name="delete">
					<td><button type="submit" class="form-control fa fa-trash"></button></td>
					</form>
				</tr>
				@endforeach
				
			</tbody>
		</table>
	</div>
</div>

<div style="height: 50px;">
	
</div>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>


</div>

<div id="reductions" class="tabcontent">

<div style="height: 50px;">
	
</div>

<div class="row">
	<div class="col-md-6 col-lg-6">
		<form method="post" action="{{url('addreduction')}}">
		@csrf
		<input type="" name="allowance1" class="form-control" placeholder="Deduction Name">
		<input type="" name="allowance1price" id="priceredu" class="form-control" placeholder="Price per month">
		<input type="" name="allowance1percent" id="percentredu" class="form-control" placeholder="Percent Of Basic pay">
		<button type="submit" class="btn btn-secondary btn-block">Add Deduction</button>
	    </form>
	</div>
	<div class="col-md-6 col-lg-6">
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
						Delete
					</th>
				</tr>
				
			</thead>
			<tbody>
				@foreach($reductiondata as $data)
				<tr>
					<td>{{$data->allowancename}}</td>
					<td>{{$data->price}}</td>
					<td>{{$data->percent}}</td>
					<td><button type="button" id="alloweditx" class="form-control fa fa-edit" data-toggle="modal" data-bs-toggle="modal"
                            data-bs-target="#editmodal"></button></td>                   
					<form method="post" action="{{url('reductiondelete'.$data->id)}}">
					@csrf
					<input type="hidden" name="delete">
					<td><button type="submit" class="fa fa-trash"></button></td>
					</form>
				</tr>
				@endforeach
				
			</tbody>
		</table>
	</div>
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

<div id="leavecategories" class="tabcontent">
<div style="height: 50px;">
	
</div>
<div class="row">
	<div class="col-md-6 col-lg-6">
		<form method="post" action="{{url('addleavecategory')}}">
		@csrf
		
		<input type="" name="allowance1price"  class="form-control" placeholder="Leave Type">
		<input type="" name="allowance1percent" id="percent" class="form-control" placeholder="No of Days per Month">
		<button type="submit" class="btn btn-secondary btn-block">Add Leave Category</button>
	    </form>
	</div>
	<div class="col-md-6 col-lg-6">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>
						Leave Category
					</th>
					<th>
						Days per 
					</th>
					<th>
						Percent
					</th>
					<th>
						Delete
					</th>
				</tr>
				
			</thead>
			<tbody>
				
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<form method="post" action="{{url('reductiondelete')}}">
					@csrf
					<input type="hidden" name="delete">
					<td><button type="submit" class="fa fa-trash"></button></td>
					</form>
				</tr>
			
				
			</tbody>
		</table>
	</div>
</div>
</div>

<div class="row" id="hidediv">
 <div style="height: 50px;">
  
</div>


<div class="row">
	<div class="col-md-6 col-lg-6">
		<label>Fixed Allowance</label>
		<form method="post" action="{{url('addallowance')}}">
		@csrf
		<input type="" name="allowance1" class="form-control" placeholder="Allowance Name">
		<input type="" name="allowance1price" id="price" class="form-control price" placeholder="Price per month">
		<input type="" name="allowance1percent" id="percent" class="form-control percent" placeholder="Percent Of Basic pay">
		<button type="submit" class="btn btn-secondary btn-block">Add allowance</button>
	    </form>
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
					<td><button type="submit" class="form-control fa fa-trash"></button></td>
					</form>
				</tr>
				@endforeach
				
			</tbody>
		</table>
	</div>
	<div class="col-md-6 col-lg-6">
		<label>Non-fixed Allowance</label>

		<form method="post" action="{{url('addnonfixedallowance')}}">
		@csrf
		<input type="" name="allowance1" class="form-control" placeholder="Allowance Name" >
		<input type="" name="allowance1price" class="form-control" placeholder="Price per month" readonly="">
		<input type="" name="allowance1percent" class="form-control" placeholder="Percent of BasicPay" readonly="">
				

		<button type="submit" class="btn btn-secondary btn-block">Add allowance</button>
	    </form>
	    <div style="height:50px;">
	    	
	    </div>
	    <table class="table table-bordered">
			<thead>
				<tr>
					<th>
						Allowance Name
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
				@foreach($nondata as $data)
				<tr class="allowdatax">
					<td class="allownamex">{{$data->allowancename}}</td>
					
					<input type="hidden" class="allowidx" value="{{$data->id}}">
					<td><button type="button" id="alloweditx" class="form-control fa fa-edit" data-toggle="modal" data-bs-toggle="modal"
                            data-bs-target="#default"></button></td>
					<form method="post" action="{{url('allowancedelete'.$data->id)}}">
					@csrf
					<input type="hidden" name="delete">
					<td><button type="submit" class="form-control fa fa-trash"></button></td>
					</form>
				</tr>
				@endforeach
				
			</tbody>
		</table>
	</div>
</div>

</div>
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
                           <label>Price</label>
                           <input type="text" value="" class="form-control" name="allowaprice" id="allowaprice">
                           </div>
                           <div id="hidepercent">
                           <label>Percent</label>
                           <input type="text" value="" class="form-control " name="allowapercent" id="allowapercent">
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
                         <div class="modal fade text-left" id="editmodal" tabindex="-1" role="dialog"
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
                          <label>Deduction Name</label>
                           <input type="text" value="" class="form-control" name="allowaname" id="allowaname">
                           <div id="hideprice"> 
                           <label>Price</label>
                           <input type="text" value="" class="form-control" name="allowaprice" id="allowaprice">
                           </div>
                           <div id="hidepercent">
                           <label>Percent</label>
                           <input type="text" value="" class="form-control" name="allowapercent" id="allowapercent">
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
                                           Edit
                                        </button>
                                      
                                    </div>
                                      </form>
                                     
                     
                                </div>
                            </div>
 

                        </div>

                        <script>
	  $(document).on('input','.price',function(){
$('.percent').prop('readonly', true);
		
});
	    $(document).on('input','.percent',function(){
$('.price').prop('readonly', true);	

});
  $(document).on('click','#alloweditx',function(){

  var allownamex= $(this).closest('.allowdatax').find('.allownamex').text();
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

     $("#allowaname").val(allownamex);
     $("#allowaprice").val(allowpricex);
     $("#allowapercent").val(allowpercentx);
     $("#allowaid").val(allowidx);
     ;
     })
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



