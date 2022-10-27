
@extends('layouts.hmsmain')
@section('content')

  {{-- heading --}}
  <h4 id="hdtpa"><b>Court List</b></h4>
  <br><br>


            <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_court')}}"><button class="btn btn-primary">Add Court</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Court</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
                        <!-- {{-- <a href="{{('add_court_category')}}"><button class="btn btn-primary">Add New Court Category</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal2">Add New Court Category</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br> -->
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
        <!-- <a href="{{('add_court')}}"><button class="btn btn-primary add-btn">Add Court</button></a> -->
        <!-- <a href="{{('add_court_category')}}"><button class="btn btn-primary add-btn">Add New Court Category</button></a><br><br> -->
 <div class="table-responsive"> 
      <table class="table table-bordered" id="new-item">
                  <thead>
                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center" >Court Category</th>
                        <th class="text-center" >Court Name</th>
                        <th class="text-center" >Action</th>
                     
                    </tr>
    </thead>
    <tbody>
    @foreach($court as $court_details)
                    
                    <tr>
                        <td>{{$court_details->id}}</td>
                      
                        <td>{{$court_details->court_category}}</td>
                        <td>{{$court_details->court_name}}</td>
                        <td  scope="row"class="text-center">
                        <a href="{{url('edit_court',$court_details->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('delete_court',$court_details->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td>
                    </tr>

                    @endforeach 
    </tbody>
                </table>
                <div class="class"style="text-align:right;">
                <select style="width:10%;height:100%;color:rgb(13, 1, 56);font-size:small;background-color:#FFFBF4;"type="text" value="" name="type">
    <!-- <option>Delete Court</option> -->
    <option>Active Category</option>
</select>
<input type="button"value="Go" name="close"style="color:rgb(13, 1, 56);background-color:#FFFBF4; ">
    </div>
    <br>
    <br>
      <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add court</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_court') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    

    @csrf
            <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                        <label >Date:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="Date" class="form-control" id="" name="date"value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Court Category:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="courtcat">
                                    <option>Select</option>
                                   
                    <option>Supreme Court</option>
                    <option>Court Of Appeal</option>
                    <option>High Court</option>
                    <option>Industrial Court</option>
                    <option>Magistrate Court</option>
                    <option>Islamic Court</option>
                    <option>Labour Court</option>
                    <option>East Africa Court</option>
                    <option>Small Claim Court</option>
                    <option>Others</option>
                                </select>
                              <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="mb-1">
                            <label>Court Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="courtname"value=""class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
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
 <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
 <div class="modal fade" id="Modal2">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add New Court Category</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_court_category') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
@csrf
            <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >Category No:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" id="" name="catnum"value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Category Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="catname"value=""class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
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
      














   