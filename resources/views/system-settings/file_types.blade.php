
@extends('layouts.hmsmain')
@section('content')

    

<div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>File Types</u></b></span></button><br>
            
     </div>
            <br>
          
            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_file_types')}}"><button class="btn btn-primary">Add New File Type</button></a>--}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New File Type</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
        <!-- <a href="{{('add_file_types')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add New File Type</button></a> <br> -->
         
  <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">List Of File Types</h3>
    <!-- <div class="container"> -->
      <div class="mydiv">
      <table class="table table-bordered" id="new-item">
                  <thead>
                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center">File Type Name</th>
                        <th class="text-center" >Short Name</th>
                        <th class="text-center">Retainer Period</th>
                        <th class="text-center">Approvers</th>
                        <th class="text-center" >Status</th>
                        <th class="text-center">Action</th>
                        
                    </tr>
    </thead>
    <tbody>
    @foreach($file_types as $file)
<tr>
                        <td>{{$file->id}}</td>
                        <td>{{$file->file_type}}</td>
                        <td>{{$file->short_name}}</td>
                        <td>{{$file->retainer_period}}</td>
                        <td>{{$file->approvers}}</td>
                        <td></td>
                        <td  scope="row"class="text-center">
                        <a href="{{url('edit_file_types',$file->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('view_file_types',$file->id)}}"><i  style="  color:rgb(13, 1, 56);" class="	far fa-file" aria-hidden="true"></i>
                        <a href="{{url('delete_file_types',$file->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td>
                           </tr>
                           @endforeach
                    </tbody>
</table>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add New File Type</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_file_types') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
@csrf
       <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >File Type Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="name"value="" class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Short Names:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="sname"value="" class="form-control" >
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >Retainer Period(Years):</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number"  id="" name="year"value=""class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Approver(s):</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="approver"style="width:100%;">
                                <option>Choose Approver...</option>
                                <option>Alekeen W Benson</option>
                                <option>Cedric Opara</option>
                                <option>Corrine Auma</option>
                                <option>Evans Munene</option>
                                <option>Florance Muthama</option>
                                <option>George Njoroge</option>
                                <option>Gichui Kirogo</option>
                                <option>Hillary Wamunyolo Casmir</option>
                                <option>Jackline Ogwemo</option>
                                <option>John Wachira</option>
                                <option>Jukius Mburu</option>
                                <option>Kevin Kavila</option>
                                <option>Martin Kyalo</option>
                                <option>Mike Ogutu </option>
                                <option>Owino PH Onyango</option>
                                <option>Princess Caroline</option>
                                <option>Sarah Gladys</option>
                                <option>Thagichu Nyaga</option>
                                <option>Wambua Musyoka</option>
                              </select>
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
        </body>
      </div>
</html>
  @endsection
      














   