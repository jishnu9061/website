@extends('layouts.hmsmain')
@section('content')
<html>
    <div class="container">

</head>

<body>

    <div class="col-sm">



    </div>
    <div class="container">
        <!-- <h3 class="text-center" style="color: #070344;"><b>File List</b></h3> -->
        <div>
        {{-- heading --}}
    <h4 id="hdtpa"><b>Billable Activities</b></h4>
    <br><br>
           
</div>
            
       <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_billable_activities')}}"><button class="btn btn-primary">Add Activity</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Activity</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->


            <h6 style="text-align:center; color:#1D1D50;">List of Billable/Non Billable Activities</h6>
            <div class="table-responsive">    
                <table class="table table-bordered" id="new-item">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Type</th>
                            <!-- <th class="text-center">Code</th> -->
                            <th class="text-center">Activity Name</th>
                            <th class="text-center">Cost(Kshs)</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
           </tr>
                    </thead>
                    <tbody>
                    @foreach($billable_activities as $activity)
                        <tr id="data">
                            <td>{{$activity->id}}</td>
                            <td>{{$activity->type}}</td>
                            <td>{{$activity->activity_name}}</td>
                            <td>{{$activity->cost}}</td>
                            <td></td>
                            <td  scope="row"class="text-center">
                        <a href="{{url('edit_billable_activities',$activity->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('delete_billable_activities',$activity->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
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
                                    <div class="modal-header">
                                        <h2 class="text-centre"><b>Add Activity</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_billable_activities') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->   
@csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Activity Type</label>

                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select type="text" value="" id="" name="type"style="width:100%;">
                                <option>--Select---</option>
                                <option>Billable Activity</option>
                                <option>Non-Billable Activity</option>
                                
                            </select>
                                <div class="invalid-feedback" style="width: 100%;">
                               
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Activity Name</label>

                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="name" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                            
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Cost(Kshs)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="cost" id="age">
                            </div>
                        </div>
                    </div>


                </div>
                <br>
             <div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">Cancel</button>
                        </div>
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

   
 