@extends('layouts.hmsmain')
@section('content')


  
        
 {{-- heading --}}
 <h4 id="hdtpa"><b>Performance</b></h4>
 <br><br>
      
    
       {{--sub heading --}}
       <h5 id="hdbtb">Departments</h5>
       <br>
  
    
  
  <div class="row sm">
    @foreach($departments as $department)
    <div class="col-sm-4 " ><a href="{{ url('hr_department') }}"><img class="logo_size"src="assets\image\Bring up report.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" >{{ $department->department_name }}</button></a></div>
    @endforeach
  </div>



  @endsection
      






    


   