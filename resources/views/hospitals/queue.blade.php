@extends('layouts.hmsmain')
@section('content')
<div class="container">
	<br>
<div class="row">

	@foreach($queues as $queue)
	<div class="col-lg-2 col-md-2" style="padding: 5px;">
	<h6>{{$queue[0]->Department}}</h6>
	</div>
	
	<div class="col-lg-2 col-md-2" style="padding: 5px;">
		<form action="{{url('callthepatient'.$queue[0]->patientid)}}" method="post">
			@csrf
		<button class="btn btn-secondary" style="width: 100px;">	
		<h6>{{$queue[0]->patientid}}</h6>
		</button>
		<input type="hidden" name="patientid" value="{{$queue[0]->patientid}}">
	    </form>

    </div>
    <div class="col-md-1 col-lg-1 ">
    	 <i class="fa fa-user" style="padding-top:18px;"></i>
    </div>
      <div class="col-md-1 col-lg-1 ">
    	 <i class="fa fa-user" style="padding-top:18px;"></i>
    </div>
     <div class="col-md-1 col-lg-1 ">
    	 <i class="fa fa-user" style="padding-top:18px;"></i>
    </div>
     <div class="col-md-1 col-lg-1 ">
    	 <i class="fa fa-user" style="padding-top:18px;"></i>
    </div>
     <div class="col-md-1 col-lg-1 ">
    	 <i class="fa fa-user" style="padding-top:18px;"></i>
    </div>
     <div class="col-md-1 col-lg-1 ">
    	 <i class="fa fa-user" style="padding-top:18px;"></i>
    </div>
     <div class="col-md-1 col-lg-1 ">
    	 <i class="fa fa-user" style="padding-top:18px;"></i>
    </div>
     <div class="col-md-1 col-lg-1 ">
    	 <i class="fa fa-user" style="padding-top:18px;"></i>
    </div>
	@endforeach
	
<div style="padding-top: 30px;"> 
  @for($i=0;$i<=3;$i++)
   <div>
   	<h4>{{$count[$i]->Department}}</h4>
     @for($a=0;$a<$count[$i]->total;$a++)
    <i class="fa fa-user"></i>
   	@endfor
   </div>
   @endfor
</div>
	
</div>
</div>
@endsection