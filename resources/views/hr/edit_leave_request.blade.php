@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:17px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> / 
    <a href="#" style="color: #1D1D50;">HR</a> /
    <a href="{{url('leave_request_details')}}" style="color: #1D1D50;">Leave Request Details</a> /
    <a href="#" style="color: #1D1D50;">Edit Leave Request Details</a>
</nav>
<br><br>
<div class="container">
    <h4 id="hdtpa"><b> Edit Details </b></h4>
    <br>
 
   
    <form method="post" action="{{url('update_leave_request')}}"
    enctype="multipart/form-data">
    
    
   
    <input type="hidden" name="id" value="{{$leave_request->id}}">
  
    @csrf

    <div class="row">
        <div class="col-md-6">
            <div class="mb-1">
            <label >Name</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    {{-- <input type="text"  id="" name="name"value="{{$leave_request->name}}" class="form-control" > --}}
                    <div class="invalid-feedback" style="width: 100%;">
                    Required Field.
                    </div>
                        <select name="name" id="cars">
                            <option >{{ $leave_request->name}}</option>
                        </select> 
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-1">
            <label >Department</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    {{-- <input type="text"  id="" name="department"value="{{$leave_request->department}}" class="form-control" > --}}
                    <div class="invalid-feedback" style="width: 100%;">
                    Required Field.
                    </div>
                    <select name="department" id="cars">
                        <option >{{ $leave_request->department}}</option>
                    </select> 
                </div>
            </div>
        </div>
    </div>
   <div class="row">
                <div class="col-md-6">
                    <div class="mb-1">
                    <label >Apply Date</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="date"  id="" name="apply_date"value="{{$leave_request->apply_date}}" class="form-control" >
                            <div class="invalid-feedback" style="width: 100%;">
                            Required Field.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label>Leave Type</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <select name="leave_type" id="cars"required>
                                <option>{{$leave_request->leave_type}}</option>
                                <option>Full Day</option>
                                <option>Half Day</option>
                                <option>Casual Leave</option>
                                <option>Medical Leave</option>
                              
                                
                            </select>
                        </div>
                        
                    </div>
                 </div>
                </div>
    <div class="row">
                <div class="col-md-6">
                    <div class="mb-1">
                    <label >From Date</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="date"  id="" name="date_from"value="{{$leave_request->date_from}}"class="form-control">
                            <div class="invalid-feedback" style="width: 100%;">
                            Required Field.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label>To Date</label>
                        
                            </div> <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="date"  id="" name="date_to"value="{{$leave_request->date_to}}"class="form-control">
                            <div class="invalid-feedback" style="width: 100%;">
                                Required
                        </div>
                    </div>
                 </div>
                </div> <br>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-1">
                <label>Number Of Days</label>

                    </div> 
                    <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="number"  id="" name="number_of_days"value=""class="form-control">
                    <div class="invalid-feedback" style="width: 100%;">
                        Required
                </div>
            </div>
         </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >Reason</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                               <textarea type="text" name="reason" value="{{$leave_request->reason}}"class="form-control"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div> 
                            </div>
                        </div>
                    </div> <br>
    <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Upload Document</label>
                            
                                
                                <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="file"  id="" name="Upload Document" value="{{$leave_request->document}}"class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                            </div>
                        </div> 
                     </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >Remarks</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                               <textarea type="text" name="remarks" class="form-control"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div> <br>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="mb-1">
                                <label>Status</label>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Requested
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#" value="Pending">Requested</a>
                                  <a class="dropdown-item" href="#">Accepted</a>
                                  <a class="dropdown-item" href="#">Rejected</a>
                
                                </div>
                              </div>
                        </div>
                                    </div>
                                    <div class="col-sm">
                
                                    </div>
                                    <div class="col-sm">
                                        <br>
                                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">Cancel</button>
                                        <br>
                                        <br>
                                    </div>
                                </div>
           
    
</form>

</div>


















    @endsection