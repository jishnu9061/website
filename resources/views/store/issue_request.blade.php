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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
<body>
    <div>
        <div>
          <table id="" class="table table-bordered table-striped " style="width 100%" >
              <tr>
                <th class="text-center">Request Date</th>
                  <td class="text-center">{{date('d-m-Y',strtotime($issue_request[0]->date))}}</td>
              </tr>
              <tr>
                <th class="text-center">Department</th>
                  <td class="text-center">{{$issue_request[0]->depname}}</td>
              </tr>
            </table>
          </div>
        </div>
        <br>

      <div class="box-header with-border">
        <h3 class="text-center"><b><u>Requested Item Detailes</u></b></h3>
          <div class="box-tools pull-right">
          </div>
      </div>
      <br>
      <div class="col-md-12">
        <div class="form-group">
            <table id="example1" class="table table-bordered table-striped" style="width 100%">
                <thead>
                    <tr>
                        <th class="text-center">Requested Items</th>
                        <th class="text-center">Requested Quantity</th>
                        <th class="text-center">Issued Quantiy</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody  id="show_data">
                    @foreach ($issue_request as $row)
                        <tr>
                            <td class="text-center">{{$row->Item_name}}</td>
                            <td class="text-center">{{$row->Quantity}}</td>
                            <td class="text-center">{{0}}</td>
                            {{-- <td class="text-center">
                                @php
                                    $query2 = DB::table('medicines_details')
                                    ->where('medicines_details.id',$row->medicine)
                                    ->sum('medicines_details.quantity');
                                @endphp

                                {{$query2}}</td> --}}
                             {{-- <td>{{$row->name}}</td> --}}
                                <input type="hidden" name="item_id" value="{{$row->id}}" class="form-control">
                            <td  scope="row"class="text-center"> <a type="button"  href="{{url('store_issued_items'.$row->request_intendid)}}"class="btn btn-primary" style="background-color:#1a3c62;width:100%;">Issue</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div style="height: 50px;">
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	  $(document).on('input','#price',function(){
$('#percent').prop('readonly', true);

});
	    $(document).on('input','#percent',function(){
$('#price').prop('readonly', true);

});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</div>
<div id="allowances" class="tabcontent">

<div style="height: 50px;">

</div>

<div style="height: 50px;">

</div>
<div class="row">
   <div class="col-md-6 col-lg-6">
      <div class="container">


         {{-- <div style="height: 15px;"></div>
         <h6 style="text-align: center;">{{$staffdata->name}}</h6>
         <hr class="mb-4">
         <input type="hidden" name="staffid" id="staffname" value="{{$staffdata->uniqueid}}">
         <div style="height: 10px;"></div>
         <button id="testing" class="btn btn-secondary btn-block">Submit</button>
      </div>
   </div>
    <div class="col-md-6 col-lg-6">
      <table class="table table-bordered">
   <tbody>


      @foreach($allowancedata as $data)
      <tr>

         <td>{{$data->allowancename}}</td>
         <input type="hidden" name="{{$data->allowancename}}" value="{{$data->allowancename}}">
         <td><input type="checkbox" class="checkz" name="aaa" value="{{$data->id}}"></td> --}}

      {{-- </tr>
      @endforeach --}}


   </tbody>
</table>
   </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
 $(function () {
  $('[data-toggle="popover"]').popover()
})


     $(document).on('click','#testing',function(){
      $(this).text(' submited ');
            $('.checkz:checked').each(function() {
   var allowanceid=this.value;
   var staffid = $('#staffname').val();


         $(this).prop('disabled', true);
         $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });


          $.ajax({
            method:"POST",
            url:"/allowancetostaff",
            data:{
               "_token": "{{ csrf_token()}}",
                'allowanceid':allowanceid,
                'staffid':staffid,
                'status':'allowance',
            },

            //success: function (response){
              //  alert(response.status);
            //},


          });
         })
     ;
     })
</script>

<div style="height: 50px;">

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	  $(document).on('input','#price',function(){
	  	alert('sdf');
$('#percent').prop('readonly', true);

});
	    $(document).on('input','#percent',function(){
$('#price').prop('readonly', true);

});
</script>



</div>
<div id="deductions" class="tabcontent">

<div style="height: 50px;">

</div>
<div class="row">
   <div class="col-md-6 col-lg-6">
      <div class="container">


         {{-- <div style="height: 15px;"></div>
         <h6 style="text-align: center;">{{$staffdata->name}}</h6>
         <hr class="mb-4">
         <input type="hidden" name="staffid" id="staffname" value="{{$staffdata->uniqueid}}">
         <div style="height: 10px;"></div>
         <button id="testing1" class="btn btn-secondary btn-block">Submit</button>
      </div>
   </div>
    <div class="col-md-6 col-lg-6">
      <table class="table table-bordered">
   <tbody> --}}


      {{-- @foreach($deductiondata as $data)
      <tr id="myTableRow">


         <td>{{$data->allowancename}}</td>
         <input type="hidden" name="{{$data->allowancename}}" value="{{$data->allowancename}}">
         <td><input type="checkbox" class="checkz" name="aaa" value="{{$data->id}}"      ></td>
        <!-- <td><button type="button" id="deleteredrow"><i class="fas fa-backspace"></i></button></td> -->
      </tr>
      @endforeach --}}


   </tbody>
</table>

   </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
 $(function () {
  $('[data-toggle="popover"]').popover()
})

     $(document).on('click','#testing1',function(){

            $(this).text(' submited ');
            $('.checkz:checked').each(function() {
   var allowanceid=this.value;
   var staffid = $('#staffname').val();


         $(this).prop('disabled', true);
         $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });


          $.ajax({
            method:"POST",
            url:"/allowancetostaff",
            data:{
               "_token": "{{ csrf_token()}}",
                'allowanceid':allowanceid,
                'staffid':staffid,
                'status':'reduction',

            },

            //success: function (response){
              //  alert(response.status);
            //},


          });
         })
     ;
     })
</script>


<div style="height: 50px;">

</div>

<script type="text/javascript">
	  $(document).on('input','#price',function(){
	  	alert('sdf');
$('#percent').prop('readonly', true);

});
	    $(document).on('input','#percent',function(){
$('#price').prop('readonly', true);

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
<div id="loans" class="tabcontent">
<div style="height: 50px;">

</div>
{{-- <div class="container" style="background-color: #eaeeff;padding: 50px;">
<div class="row" id="data">
	<div class="col-md-4 col-lg-4">
	<input type="number" class="form-control" id="loanamount" name="loanamount" placeholder="Loan Amount">
<input type="hidden" value="{{$users->uniqueid}}" id="uniqid">
	</div>
	<div class="col-md-4 col-lg-4">
	<input type="number" class="form-control" id="months" name="months" placeholder="Repayment Months">

	</div>
	<div class="col-md-4 col-lg-4">
	<button type="button" id="submitloan" class="btn btn-primary btn-block">Add Loan</button>

	</div>

</div> --}}
<br>

</div>

<div class="container" style="padding: 50px;">
	 <table class="table table-bordered">
   <thead>
   	  <tr>
   	     <th >Total Amount</th>
   	     <th>Amount Paid</th>
   	     <th>Balance Left</th>
   	     <th >Duration<br>(Months)</th>
   	     <th>Monthly Deduction</th>
   	     <th>Loan Reason</th>
   	     <th>Status</th>
   	  </tr>
   </thead>
   <tbody>
    {{-- @foreach($loans as $loan)
   <tr>
         <td>{{$loan->totalamount}}</td>
         <td>{{$loan->amountpaid}}</td>
         <td>{{$loan->balanceleft}}</td>
         <td>{{$loan->duration}}</td>
         <td>{{$loan->deduct}}</td>
         <td>{{$loan->loanreoson}}</td>
         <td>{{$loan->status}}</td>
      </tr>
      @endforeach --}}
      <tr>
         <td id="tot">&nbsp;&nbsp;&nbsp;</td>
         <td></td>
         <td ></td>
         <td id="dur">&nbsp;&nbsp;&nbsp;</td>
         <td></td>
         <td></td>
         <td id="del"></td>
      </tr>
   </tbody>
</table>
</div>

<script type="text/javascript">
	  $(document).on('input','#price',function(){
$('#percent').prop('readonly', true);

});

	    $(document).on('click','#submitloan',function(){
	  var months = $(this).closest('#data').find('#months').val();
	  var loanamount = $(this).closest('#data').find('#loanamount').val();
	  var uniqid = $(this).closest('#data').find('#uniqid').val();
    $('#tot').append((loanamount) + "<br />");
     $('#dur').append((months) + "<br />");
   $('#del').append(("<button id='uf' class='form-control'>del</button>") + "<br />");
 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });

          $.ajax({
            method:"POST",
            url:"/addloan",
            data:{

                'loanamount':loanamount,
                'months':months,
                'uniqid':uniqid

            },

            //success: function (response){
              //  alert(response.status);
            //},

          });
});
</script>
<script type="text/javascript">
   $(document).on('click','#uf',function(){
    $(this).closest('tr').remove();

  });
</script>


</div>
<div id="dutyschedule" class="tabcontent">
<div style="height: 50px;">

</div>
 <form action="{{url('dutyschedule')}}">
        @csrf
<div>
  <div class="row" style="background-color: #e0eaf4; padding:20px;">
     <div class="col-md-4">
      <p>From</p>
        <input type="date" class="form-control" name="fromdate">
     </div>
     <div class="col-md-4">
      <p>To</p>
      <input type="date" class="form-control" name="todate">
     </div>
     <div class="col-md-4">
      <div style="border: 2px solid white;border-radius:10px;padding: 6px;">
      {{-- <input type="hidden" class="form-control" name="staffid" value="{{$staffid}}"> --}}
       <br>
      </div>
     </div>
  </div>
  <div style="height: 20px;">

  </div>
  <div class="row" style="background-color: #e0eaf4; padding:20px;">
     <div class="col-md-4">
      <p><b>Timings :</b> From</p>
          <select class="custom-select btn btn-light dropdown-toggle col-md-12" name="fromtime" id="inlineFormCustomSelectPref">
    <option selected>from</option>
    <option  class="dropdown-item" value="12:00 AM">12:00 AM</option>
    <option  class="dropdown-item" value="1:00 AM">1:00 AM</option>
    <option  class="dropdown-item" value="2:00 AM">2:00 AM</option>
    <option  class="dropdown-item" value="3:00 AM">3:00 AM</option>
    <option  class="dropdown-item" value="4:00 AM">4:00 AM</option>
    <option  class="dropdown-item" value="5:00 AM">5:00 AM</option>
    <option  class="dropdown-item" value="6:00 AM">6:00 AM</option>
    <option  class="dropdown-item" value="7:00 AM">7:00 AM</option>
    <option  class="dropdown-item" value="8:00 AM">8:00 AM</option>
    <option  class="dropdown-item" value="9:00 AM">9:00 AM</option>
    <option  class="dropdown-item" value="10:00 AM">10:00 AM</option>
    <option  class="dropdown-item" value="11:00 AM">11:00 AM</option>
    <option  class="dropdown-item" value="12:00 PM">12:00 PM</option>
    <option  class="dropdown-item" value="1:00 PM">1:00 PM</option>
    <option  class="dropdown-item" value="2:00 PM">2:00 PM</option>
    <option  class="dropdown-item" value="3:00 PM">3:00 PM</option>
    <option  class="dropdown-item" value="4:00 PM">4:00 PM</option>
    <option  class="dropdown-item" value="5:00 PM">5:00 AM</option>
    <option  class="dropdown-item" value="6:00 PM">6:00 AM</option>
    <option  class="dropdown-item" value="7:00 PM">7:00 PM</option>
    <option  class="dropdown-item" value="8:00 PM">8:00 PM</option>
    <option  class="dropdown-item" value="9:00 PM">9:00 PM</option>
    <option  class="dropdown-item" value="10:00 PM">10:00 PM</option>
    <option  class="dropdown-item" value="11:00 PM">11:00 PM</option>

         </select>
     </div>
     <div class="col-md-4">
      <p>To</p>
      <select class="custom-select btn btn-light dropdown-toggle col-md-12" name="totime" id="inlineFormCustomSelectPref">
    <option selected>to</option>

    <option  class="dropdown-item" value="">12:00 AM</option>
    <option  class="dropdown-item" value="">1:00 AM</option>
    <option  class="dropdown-item" value="">2:00 AM</option>
    <option  class="dropdown-item" value="">3:00 AM</option>
    <option  class="dropdown-item" value="">4:00 AM</option>
    <option  class="dropdown-item" value="">5:00 AM</option>
    <option  class="dropdown-item" value="">6:00 AM</option>
    <option  class="dropdown-item" value="">7:00 AM</option>
    <option  class="dropdown-item" value="">8:00 AM</option>
    <option  class="dropdown-item" value="">9:00 AM</option>
    <option  class="dropdown-item" value="">10:00 AM</option>
    <option  class="dropdown-item" value="">11:00 AM</option>
    <option  class="dropdown-item" value="">12:00 PM</option>
    <option  class="dropdown-item" value="">1:00 PM</option>
    <option  class="dropdown-item" value="">2:00 PM</option>
    <option  class="dropdown-item" value="">3:00 PM</option>
    <option  class="dropdown-item" value="">4:00 PM</option>
    <option  class="dropdown-item" value="">5:00 AM</option>
    <option  class="dropdown-item" value="">6:00 AM</option>
    <option  class="dropdown-item" value="">7:00 PM</option>
    <option  class="dropdown-item" value="">8:00 PM</option>
    <option  class="dropdown-item" value="">9:00 PM</option>
    <option  class="dropdown-item" value="">10:00 PM</option>
    <option  class="dropdown-item" value="">11:00 PM</option>

         </select>
     </div>
     <div class="col-md-4" style="padding-top:40px;" >
      <button type="submit" class="btn btn-secondary btn-block" >Submit</button>
     </div>
  </div>
</div>
</form>

<table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        From Date
                    </th>
                    <th>
                        To Date
                    </th>
                    <th>
                        Time from
                    </th>
                    <th>
                        To
                    </th>
                     <th>
                        Action
                    </th>
                </tr>

            </thead>
            <tbody>
            {{-- @foreach($schedule as $duty)
                <tr>
                    <td>{{$duty->fromdate}}</td>
                    <td>{{$duty->todate}}</td>
                    <td>{{$duty->fromtime}}</td>
                    <td>{{$duty->totime}}</td>
                    <form method="post" action="{{url('dutydelete'.$duty->id)}}">
                    @csrf
                    <input type="hidden" name="delete">
                <input type="hidden" class="form-control" name="staffid" value="{{$staffid}}">


                    <td><button type="button"  onClick="$(this).closest('tr').remove();" class="btn"><i class="fas fa-backspace"></i></button></td>
                    </form>
                </tr>
            @endforeach --}}

            </tbody>
        </table>
</div>
<div style="height: 50px;">

</div>
<div class="container" id="hidediv" style="background-color:#eaeeff;padding: 50px;">
<div class="row">
	<div class="col-md-6 col-lg-6">
		{{-- <label><b>Name :</b> {{$users->name}}</label><br><br>
		<label><b>Id :</b> {{$users->uniqueid}}</label><br><br>
		<label><b>Role :</b> {{$users->role}}</label><br><br>
		<label><b>Phone :</b> {{$users->phone}}</label><br><br>
		<label><b>Email :</b> {{$users->email}}</label><br><br>

	</div>
	<div class="col-md-6 col-lg-6">
		<label><b>Salary :</b> {{$users->salary}}</label><br><br>
		<label><b>Experience :</b> {{$users->yearsexp}}</label><br><br>
		<label><b>Role :</b> {{$users->role}}</label><br><br>
		<label><b>Department :</b> {{$users->departments}}</label><br><br>
    <label><b>D.O.B :</b> {{$users->dob}}</label><br><br>
    <label><b>Joining Date</b>@php $newtime = strtotime($users->created_at);
$users->time = date('d M, Y',$newtime); @endphp {{$users->time}}</label><br><br> --}}

	</div>
</div>
</div>
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



