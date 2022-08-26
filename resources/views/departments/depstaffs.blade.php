@extends('layouts.hmsmain')
@section('content')
<!-- RH: this is bootstrap 5 tabbed panel -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Doctors</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Nurses</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Pharmacists</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#lab" role="tab" aria-controls="contact" aria-selected="false">Lab Assistants</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <table class="table table-hover" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email ID</th>
      <th scope="col">Phone</th>
      <th scope="col">Salary</th>
      <th scope="col">Yrs of Exp</th>

     
      
    </tr>
  </thead>
  <tbody>
 
    @foreach($doctors as $appz)
    
    <tr>
      <th scope="row">{{$appz->name}}</th>
      <th>{{$appz->email}}</th>
      <td>{{$appz->phone}}</td>
      <td>{{$appz->salary}}</td>
      <td>{{$appz->yearsexp}}</td>

    
    </tr>
   
    @endforeach
    
   
  </tbody>
</table>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <table class="table table-hover" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email ID</th>
      <th scope="col">Phone</th>
      <th scope="col">Salary</th>
      <th scope="col">Yrs of Exp</th>

     
      
    </tr>
  </thead>
  <tbody>
 
    @foreach($nurses as $appz)
    
    <tr>
      <th scope="row">{{$appz->name}}</th>
      <th>{{$appz->email}}</th>
      <td>{{$appz->phone}}</td>
      <td>{{$appz->salary}}</td>
      <td>{{$appz->yearsexp}}</td>

    
    </tr>
   
    @endforeach
    
   
  </tbody>
</table>
  </div>
  <div class="tab-pane fade" id="lab" role="tabpanel" aria-labelledby="profile-tab">
  <table class="table table-hover" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email ID</th>
      <th scope="col">Phone</th>
      <th scope="col">Salary</th>
      <th scope="col">Yrs of Exp</th>

     
      
    </tr>
  </thead>
  <tbody>
 
    @foreach($labs as $appz)
    
    <tr>
      <th scope="row">{{$appz->name}}</th>
      <th>{{$appz->email}}</th>
      <td>{{$appz->phone}}</td>
      <td>{{$appz->salary}}</td>
      <td>{{$appz->yearsexp}}</td>

    
    </tr>
   
    @endforeach
    
   
  </tbody>
</table>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      <div>
  <table class="table table-hover" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email ID</th>
      <th scope="col">Phone</th>
      <th scope="col">Salary</th>
      <th scope="col">Yrs of Exp</th>

     
      
    </tr>
  </thead>
  <tbody>
 
    @foreach($pharma as $appz)
    
    <tr>
      <th scope="row">{{$appz->name}}</th>
      <th>{{$appz->email}}</th>
      <td>{{$appz->phone}}</td>
      <td>{{$appz->salary}}</td>
      <td>{{$appz->yearsexp}}</td>

    
    </tr> 
    @endforeach 
   
  </tbody>
</table>
</div>
  </div>
</div>
@endsection