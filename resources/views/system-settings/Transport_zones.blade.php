@extends('layouts.hmsmain')
@section('content')



  <div>
  {{-- heading --}}
    <h4 id="hdtpa"><b>Transport Zones</b></h4>
    <br><br>
    
   </div>

           
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_transport_zone')}}"><button class="btn btn-primary">Add Transport Zone</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" 
                >Add Transport Zone</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->

            <h6 style="text-align:center; color:#1D1D50;">List of Transport Zones</h6>

                <table class="table table-bordered" id="new-item">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Zone Name</th>
                            <th class="text-center">Zone Area</th>
                            <th class="text-center">Cost(Kshs)</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
</tr>
                    </thead>
                    <tbody>
                    @foreach($transport_zone as $detail)
                        <tr id="data">
                            <td scope="row" class="text-center">{{$detail->id }}</td>
                            <td scope="row" class="text-center">{{$detail->zone_name }}</td>
                            <td scope="row" class="text-center">{{$detail->zone_areas }}</td>
                            <td scope="row" class="text-center">{{$detail->cost }}</td>
                            <td scope="row" class="text-center"></td>
                            <td  scope="row"class="text-center">
                        <a href="{{url('edit_transport_zone',$detail->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('delete_transport_zone',$detail->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td>
</tr>
                    </tbody>
                    @endforeach
                </table>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h2 class="text-centre"><b>Add Transport Zone</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_transport_zone') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
@csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Zone Name</label>

                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="zone_name" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                     
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Zone Areas</label>

                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="zone_areas" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
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
                </form>
</div>
</div>
</div>
</div>

        </body>
        </div>
</html>

@endsection