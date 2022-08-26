@extends('layouts.hmsmain')
@section('content')
<div class="container">
<div class="row">
	@foreach($queues as $queue)
	<div class="col-lg-2 col-md-2">
	<h6>{{$queue[0]->Department}}</h6>
	</div>
	<div class="col-lg-1 col-md-1">
		<form action="{{url('callthepatient'.$queue[0]->patientid)}}" method="post">
			@csrf
		<button class="btn btn-secondary" style="width: 100px;">	
		<h6>{{$queue[0]->patientid}}</h6>
		</button>
		<input type="hidden" name="patientid" value="{{$queue[0]->patientid}}">
	    </form>

    </div>
 <br>
    <div class="col-lg-9 col-md-9">
	<h6></h6>
    </div>

	@endforeach
   @for($i=0;$i<=3;$i++)
   <div>
   	<h4>{{$count[$i]->Department}}</h4>
     @for($a=0;$a<=$count[$i]->total;$a++)
    <i class="fa fa-user"></i>
   	@endfor
   </div>
   @endfor
<!--<div class="col-lg-8 col-md-8">
   @foreach($count as $cnt)
   	<div class="col-lg-1 col-md-1">
		@for($i=0;$i<=$cnt->total;$i++)
		
		<h6>{{$i}}</h6>
	
		@endfor
	</div>

   @endforeach
  	<div>
  	-->
</div>
</div>
@endsection