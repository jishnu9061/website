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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
</head>

<body>
  
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Serve</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Details</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Billing</button>
</div>

<div id="London" class="tabcontent">
  <div style="padding-top: 25px;">
  <form method="POST" action="{{url('addmed')}}">
    @csrf
<div class="row">
  <div class="col-md-7">
    <input type="text" name="searchmed" id="searchmed" class="form-control">
  </div>
  <div class="col-md-2">
    <input type="number" name="searchmed" id="dds" class="form-control">
  </div>
  <div class="col-md-3">
    <button type="submit" class="btn  btn-block btn-secondary">Add</button>
  </div>
  
</div> 
</form> 
<div style="height: 60px;">
  
</div>
  <table class="table table-striped">
    <tr>
      <th>Name</th>
      <th>Quantity</th>
      <th>Price</th>
    </tr>
    <tr>
      <td>ewq</td>
      <td>ewq</td>
      <td>ewq</td>
    </tr>
    <tr>
      <td>edvwq</td>
      <td>ewvq</td>
      <td>edwdvq</td>
    </tr>
  </table>
  </div>
</div>

<div id="Paris" class="tabcontent">
   <div class="row">

    <div class="col-md-12 order-md-1">
    
     <form method="post" action="{{url('pharmacyserved')}}" enctype="multipart/form-data">
        @csrf
   <div class="row">
    <input type="hidden" value="{{$appz}}" name="hideid">
   <input type="hidden" name="appz" value="">
    <div class="col-md-6 col-lg-6"  style="padding-top: 6px;">
      <p>Notes</p>
     <textarea class="form-control" name="notes" style="height: 200px;" readonly=""> 
          {{$prescription}}
     </textarea>
        
    </div>
    <div class="col-md-6 col-lg-6" style="padding-top: 6px;">
     <ul class="list-group">
      @foreach($appzfiles as $files)
  <a href="{{url('filedownload'.$files->id)}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
    <div class="flex-column">
      file
      <p><small></small></p>
      <span class="badge badge-info badge-pill"> 2 Copies in Stock</span>
    </div>
    <div class="image-parent">

       <i class="fas fa-download"></i>
    </div>
  </a>
       @endforeach

</ul>

@if(Session::has('nopharmques'))
<div style="padding-top: 100px;">
  

   <div class="alert alert-dark" role="alert">
   {{ Session::get('nopharmques')}}
   </div>  
   </div>                    
@endif
    </div>

  </div>
   {{ Session::forget('nopharmques')}}     
 <div class="spacer" style="padding: 20px;">
     
   </div>

          
 <div class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Upload docs</h5>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                           
                            <!-- Basic file uploader -->
                            <input type="file" name="files" class="basic-filepond">
                        </div>
                    </div>
                </div>
            </div>
           <div class="col-md-3">
            <a href="{{url('medicine')}}">
          <button type="button" class="btn btn-success btn-block btn-lg" type="submit" style="margin-top: 80px;">Medicine</button>
          </a>
          </div>
          <div class="col-md-3">
          <button type="submit" class="btn btn-primary btn-block btn-lg" type="submit" style="margin-top: 80px;">Close</button>
          </div>
            </div>

<!-- <div class="row">
  <div class="col-md-6 col-lg-6">
     
  </div>
  <div class="col-md-6 col-lg-6">
     <div class="mb-3">
          <label for="email">Next Appointment<span class="text-muted"></span></label>
          <input type="date" class="form-control" name="nextappointment" id="email" placeholder="phoneno">
          <div class="invalid-feedback">
            Please enter a valid phone no.
          </div>
        </div>
  </div>
</div> -->
      
        <hr class="mb-4">
        <div class="row">
          <div class="col-md-6">
            
          </div>
          <div class="col-md-3">
            
          </div>
          <div class="col-md-3">
          
          </div>
        </div>
       
     
    </div>
  </div> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
<div id="hidediv" style="padding-top: 30px;">

   <form method="POST" action="{{url('addmed')}}">
    @csrf
<div class="row">
  <div class="col-md-7">
    <input type="text" name="searchmed" id="searchmed" class="typeahead form-control">
  </div>
  <div class="col-md-2">
    <input type="number" name="searchmed" id="dds" class="form-control">
  </div>
  <div class="col-md-3">
    <button type="submit" class="btn  btn-block btn-secondary">Add</button>
  </div>
  
</div> 
</form> 
<div style="height: 60px;">
  
</div>
  <table class="table table-striped">
    <tr>
      <th>Name</th>
      <th>Quantity</th>
      <th>Price</th>
    </tr>
    <tr>
      <td>ewq</td>
      <td>ewq</td>
      <td>ewq</td>
    </tr>
    <tr>
      <td>edvwq</td>
      <td>ewvq</td>
      <td>edwdvq</td>
    </tr>
  </table>
</div>
  
    <script type="text/javascript">
    var path = "{{ route('searchmeds') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
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
<!-- <div class="container">
  <div class="py-5 text-center">


 
  </div>
<div class="container"> 
    <div class="row">
  	<div class="col-md-4 col-lg-4"  style="padding-top: 6px;">
  		<h6>df</h6>
        
  	</div>
  	<div class="col-md-5 col-lg-5" style="padding-top: 6px;">
  		<h6 id='ct6'></h6>
  	</div>
  	<div class="col-md-3 col-lg-3">
   
  		<h6>Token No</h6>

  		<button class="btn btn-secondary btn-block btn-lg">
             
             {{$token}}
  		</button>

     
  	</div>
  </div>
  </div>
   <div class="spacer" style="padding: 20px;">
     
   </div>
     <hr class="mb-4">
  <div class="row">

    <div class="col-md-12 order-md-1">
    
     <form method="post" action="{{url('pharmacyserved')}}" enctype="multipart/form-data">
	      @csrf
   <div class="row">
   	<input type="hidden" value="{{$appz}}" name="hideid">
   <input type="hidden" name="appz" value="">
    <div class="col-md-6 col-lg-6"  style="padding-top: 6px;">
      <p>Notes</p>
     <textarea class="form-control" name="notes" style="height: 200px;" readonly=""> 
          {{$prescription}}
     </textarea>
        
    </div>
    <div class="col-md-6 col-lg-6" style="padding-top: 6px;">
     <ul class="list-group">
     	@foreach($appzfiles as $files)
  <a href="{{url('filedownload'.$files->id)}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
    <div class="flex-column">
      file
      <p><small></small></p>
      <span class="badge badge-info badge-pill"> 2 Copies in Stock</span>
    </div>
    <div class="image-parent">

       <i class="fas fa-download"></i>
    </div>
  </a>
       @endforeach

</ul>

@if(Session::has('nopharmques'))
<div style="padding-top: 100px;">
	

   <div class="alert alert-dark" role="alert">
   {{ Session::get('nopharmques')}}
   </div>  
   </div>                    
@endif
    </div>

  </div>
   {{ Session::forget('nopharmques')}}     
 <div class="spacer" style="padding: 20px;">
     
   </div>

          
 <div class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Upload docs</h5>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                           
                            <!-- Basic file uploader -->
      <!--                       <input type="file" name="files" class="basic-filepond">
                        </div>
                    </div>
                </div>
            </div>
           <div class="col-md-3">
           	<a href="{{url('medicine')}}">
        	<button type="button" class="btn btn-success btn-block btn-lg" type="submit" style="margin-top: 80px;">Medicine</button>
        	</a>
        	</div>
        	<div class="col-md-3">
        	<button type="submit" class="btn btn-primary btn-block btn-lg" type="submit" style="margin-top: 80px;">Close</button>
        	</div>
            </div> -->

<!-- <div class="row">
  <div class="col-md-6 col-lg-6">
     
  </div>
  <div class="col-md-6 col-lg-6">
     <div class="mb-3">
          <label for="email">Next Appointment<span class="text-muted"></span></label>
          <input type="date" class="form-control" name="nextappointment" id="email" placeholder="phoneno">
          <div class="invalid-feedback">
            Please enter a valid phone no.
          </div>
        </div>
  </div>
</div> -->
      
       <!--  <hr class="mb-4">
        <div class="row">
        	<div class="col-md-6">
        		
        	</div>
        	<div class="col-md-3">
        		
        	</div>
        	<div class="col-md-3">
        	
        	</div>
        </div>
       
     
    </div>
  </div>
  
  </form>
</div>
<div class="container">
   
            </div> --> 


@endsection