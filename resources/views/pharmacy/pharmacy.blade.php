@extends('layouts.hmsmain')
@section('content')
<div class="container">
	
		 <div class="row">
  	<div class="col-md-3 col-lg-3">
  		<h6>{{$appz}}</h6>
        
  	</div>
  	<div class="col-md-4 col-lg-4" >
  		<h6 id='ct6'></h6>
  	</div>
  	<div class="col-md-2 col-lg-2">
   
  		<h6>Token No : </h6>
  		
     
  	</div>
      <div class="col-md-2 col-lg-2">
   
      <h6>Total queues : {{$appz}}</h6>
     
     
    </div>

  </div>
  <div style="height: 20px;">
    
  </div>
  <div class="container" >
   <div class="container" style="background-color: white;border: 100px;">
    <h6>Prescription:</h6>
    {!! nl2br(e($prescription)) !!}
    
  </div>
  <div class="container" style="background-color: white;border: 100px;">
    <h6>Lab:</h6>
    {!! nl2br(e($lab)) !!}
    
  </div>
  <div class="container" style="background-color: white;border: 100px;">
   <h6>Medicine</h6>
    {!! nl2br(e($medicine)) !!} 
  </div>

  </div>
  <a href="download/{{$id}}" download="{{$id}}"><button type="button" class="btn btn-primary">Download</button></a>
	<audio id="audio" src="http://www.soundjay.com/button/beep-07.wav" autoplay="false" ></audio>
<button onclick="playSound();"> Play</button>

</div>
<script>
  function playSound() {
  var sound = document.getElementById("audio");
  sound.play();
}
</script>
<script>function display_ct6() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
x1 = x1 + " - " +  hours + ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
document.getElementById('ct6').innerHTML = x1;
display_c6();
 }
 function display_c6(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct6()',refresh)
}
display_c6()
</script>
@endsection