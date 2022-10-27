
@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
<h4 id="hdtpa"><b>Description Selections</b></h4>
<br><br>


            <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_desc_sel')}}"><button class="btn btn-primary">Add Description Selection</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Description Selection</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
  <!-- <a href="{{('add_desc_sel')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add Description Selection</button></a><br><br> -->
<table class="table table-bordered" id="new-item">
                  <thead>
                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center">Description Selection Name</th>
                        <th class="text-center" >Selection Description</th>
                        <th class="text-center" >Status</th>
                        <th class="text-center" >Action</th>
                      
      </thead>
      <tbody>
      @foreach($description_selection as $description)
      
                    </tr>
                    <tr>
                        <td>  {{$description->id}}</td>
                        <td>{{$description->Description_Selection_Name}}</td>
                        <td >{{$description->Selection_Description}}</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        
                        <td  scope="row"class="text-center"><!--<a href="{{url('view_company_details')}}"><i  style=" color:rgb(13, 1, 56);" class="fa fa-eye" aria-hidden="true"></i> -->
                        <a href="{{url('edit_desc_sel',$description->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('delete_desc_sel',$description->id)}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td>
                    </tr>
                    @endforeach
      </tbody>
                   
                </table>
                <div class="class"style="text-align:right;">
                <select style="width:10%;height:100%;color:rgb(13, 1, 56);font-size:small;background-color:#FFFBF4;"type="text" value="" >
    <option>Activate Category</option>
    <option>De-Activate Category</option>
   
</select>
<input type="button"value="Go" name="close"style="background-color:#FFFBF4;color: rgb(13, 1, 56); ">
    </div>
    <br>
    <br>
  <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
  <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add Description Selection</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_desc_sel') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->  
    @csrf
<div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >Description Selection Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="desselname"value=""class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Selection Description:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="seldes" id="" value="">
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
        </div>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>


    </div>

    <!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->


  @endsection
      














   