@extends('layouts.hmsmain')
@section('content')

<body>

  <div>
  {{-- heading --}}
    <h4 id="hdtpa"><b>Leave Days per Year</b></h4>
    <br><br>
     
   </div>
            <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_leave_days')}}"><button class="btn btn-primary">Add Leave Days</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Leave Days</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->

<!-- <a href="{{url('add_leave_days')}}"><button class="btn btn-primary add-btn"style="width: 20%; margin-bottom:5%;">Add Leave Days</button></a>-->
     
<h6 style="text-align:center; ">Leave Days Per Year</h6>

                <table class="table table-bordered" id="new-item">
                    <thead>
                        <tr>
                            <th class="text-center">*</th>
                            <th class="text-center">Year</th>
                            <th class="text-center">Annual Leave Days</th>
                            <th class="text-center">Saturday</th>
                            <th class="text-center">Perfomance</th>
                            <th class="text-center">Pays Relief</th>
                            <th class="text-center">Pl Closed</th>
                            <th class="text-center">Account Closed</th>                           
                            <th class="text-center">Action</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($leave_days as $leave)
                        <tr id="data">
                           
                            <td scope="row" class="text-center">{{ $leave->id }}</td>
                            <td scope="row" class="text-center">{{ $leave->year }}</td>
                            <td scope="row" class="text-center">{{ $leave->annual_leave_day }}</td>
                            <td scope="row" class="text-center">{{ $leave->satuday_working_days }}</td>
                            <td scope="row" class="text-center">{{ $leave->perfomance_duration }}</td>
                            <td scope="row" class="text-center">{{ $leave->pay_relief }}</td>
                            
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td  scope="row"class="text-center">
                        <a href="{{url('edit_leave_days',$leave->id )}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('delete_leave_days',$leave->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td>
           </tr>
           @endforeach
                    </tbody>
                </table>
 <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
 <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header" >
                                        <h2 class="text-centre"><b>Add Leave Days</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_leave_days') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
</div>
@csrf
                <div class="row">
                <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Year</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select type="year" value="" name="year"style="width:100%;">
                            <option>---Select---</option>
                            <option>2025</option>
                            <option>2024</option>
                            <option>2023</option>
                            <option>2022</option>
                            <option>2021</option>
                            <option>2020</option>
                            <option>2019</option>
                            <option>2018</option>
                         

                        </select>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Annual Leave Days</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="leaveday" id="confirm_password" required>
                                <div class="invalid-feedback" style="width: 100%;">
                             
                                </div>
                            </div>
                        </div>
                    </div>
              
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Saturday Working Days</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <select type="text" value="" name="saturday"style="width:100%;">
                            <option>---Select---</option>
                            <option>Not a Working Day</option>
                            <option>Yes (Half Day)</option>
                            <option>Yes (Full Day)</option>
                          
                        </select>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Perfomance Duration</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <select type="text" value="" name="performance"style="width:100%;">
                            <option>---Select---</option>
                            <option>Monthly</option>
                            <option>Quarterly</option>
                            <option>Bi Annual</option>
                            <option>Annual</option>
                        </select>
                    <div class="invalid-feedback" style="width: 100%;">
                     
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Pay Personal Relief</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="pay" id="confirm_password" required>
                </div>
            </div>
        </div>

</div>
<br><div class="row">
                        <div class="col-sm">

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
        </div>
        </form>
</div>
</div>
</div>
</div>

        </body>
        </div>
</html>
  @endsection



                      