@extends('layouts.hmsmain')
@section('content')
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
                    <label >Apply Date</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="date"  id="" name="applydate"value="{{$leave_request->apply_date}}" class="form-control" >
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
                            <select name="leavetype" id="cars"required>
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
                <div class="col-md-12">
                    <div class="mb-1">
                    <label >Leave Date </label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="date"  id="" name="leavedate1"value="{{$leave_request->leave_date}}"class="form-control">
                            <div class="invalid-feedback" style="width: 100%;">
                            Required Field.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-1">
                        <label></label>
                        
                            </div> <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="date"  id="" name="exchangerate"value=""class="form-control">
                            <div class="invalid-feedback" style="width: 100%;">
                                Required
                        </div>
                    </div>
                 </div>
                </div> <br>

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-1">
                        <label >Reason</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                               <textarea type="text" class="form-control"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div> 
                            </div>
                        </div>
                    </div> <br>

                    <div class="col-md-12">
                        <div class="mb-1">
                            <label>Attach File</label>
                            
                                </div> <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="file"  id="" name="exchangerate"value=""class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required
                            </div>
                        </div>
                     </div>
                    </div>
                <div class="row">
     <div class="col-sm">

                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">Cancel</button>
                        <br>
                        <br>
                    </div>
                </div>
    </div>
</form>
</div>
</div>
</div>

















    @endsection