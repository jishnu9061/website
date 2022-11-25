@extends('layouts.hmsmain')
@section('content')
<section>

  
        
 {{-- heading --}}
 <h4 id="hdtpa"><b>Practice Area Management</b></h4>
 <br>
  
    
  
  <div class="row sm">

    <div class="row sm">
            <div class="col-sm-4 "> <a href="{{ url('family_law') }}"><img class="logo_size"
                        src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">Family Law</button></a></div>
            <div class="col-sm-4 "> <a href="{{ url('personal_injury') }}"><img class="logo_size"
                        src="assets\image\File list progress report.png" alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">Personal Injury</button></a></div>
            <div class="col-sm-4 "> <a href="{{ url('general_practice') }}"><img class="logo_size"
                        src="assets\image\File list progress report.png" alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">General Practice</button></a></div>
            <div class="col-sm-4 "> <a href="{{ url('') }}"><img class="logo_size"
                        src="assets\image\File list progress report.png" alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">Estate Planning</button></a></div>
            <div class="col-sm-4 "> <a href="{{ url('') }}"><img class="logo_size"
                        src="assets\image\File list progress report.png" alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">Real Estate</button></a></div>
            <div class="col-sm-4 "> <a href="{{ url('') }}"><img class="logo_size"
                        src="assets\image\File list progress report.png" alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">Criminal Law</button></a></div>
            <div class="col-sm-4 "> <a href="{{ url('') }}"><img class="logo_size"
                        src="assets\image\File list progress report.png" alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">Civil Litigation</button></a></div>
            <div class="col-sm-4 "> <a href="{{ url('') }}"><img class="logo_size"
                        src="assets\image\File list progress report.png" alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">Business Law</button></a></div>
            <div class="col-sm-4 "> <a href="{{ url('') }}"><img class="logo_size"
                        src="assets\image\File list progress report.png" alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">Guardianship Law</button></a></div>
            <div class="col-sm-4 "> <a href="{{ url('') }}"><img class="logo_size"
                        src="assets\image\File list progress report.png" alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">Probate Law</button></a></div>
            
    
    </div>
  </div>


</section>
  @endsection