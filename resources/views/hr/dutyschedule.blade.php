@extends('layouts.hmsmain')
@section('content')

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
      <input type="hidden" class="form-control" name="staffid" value="{{$staffid}}">
       <h6 style="text-align:center;">{{$staffname}}</h6>
       <br>
        <h6 style="text-align:center;">{{$staffid}}</h6>
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
            @foreach($schedule as $duty)
                <tr>
                    <td>{{$duty->fromdate}}</td>
                    <td>{{$duty->todate}}</td>
                    <td>{{$duty->fromtime}}</td>
                    <td>{{$duty->totime}}</td>
                    <form method="post" action="{{url('dutydelete'.$duty->id)}}">
                    @csrf
                    <input type="hidden" name="delete">
                <input type="hidden" class="form-control" name="staffid" value="{{$staffid}}">
                <input type="hidden" class="form-control" name="staffname" value="{{$staffname}}">

                    <td><button type="submit" class="fa fa-trash"></button></td>
                    </form>
                </tr>
            @endforeach
                
            </tbody>
        </table>
@endsection