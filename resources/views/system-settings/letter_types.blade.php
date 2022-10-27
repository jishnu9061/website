
@extends('layouts.hmsmain')
@section('content')

  {{-- heading --}}
  <h4 id="hdtpa"><b>Letter Category</b></h4>
  <br><br>

            <br>
   <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_letter_category')}}"><button class="btn btn-primary">Add Letter Category</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Letter Category</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
        <!-- <a href="{{('add_letter_category')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add Letter Category</button></a><br><br> -->
    
    <!-- <div class="container"> -->
      <div class="table-responsive">
      <table class="table table-bordered" id="new-item">
                  <thead>
                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center">Letter Category</th>
                        <th class="text-center">Letter types</th>
                        <th class="text-center" >Status</th>
                        <th class="text-center" >Action</th>
                      
                    </tr>
<thead>
    <tbody>
    @foreach($letter_types as $letter)
        <tr>
                        <td >{{$letter->id}}</td>
                        <td>{{$letter->letter_category}}</td>
                        <td>{{$letter->letter_type}}</td>
                        <td></td>
                        <td  scope="row"class="text-center">
                        <a href="{{url('edit_letter_type',$letter->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('delete_letter_type',$letter->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td>
                       
                    </tr>

                   
    </tbody>
    @endforeach
                    
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
                                        <h2 class="text-centre"><b>Add Letter Category</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{url('add_letter_category')}}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
@csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 offset-md-3" >
                    <label >Letter Category:</label>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                            <select type="text" value="" id="" name="lettercat"style="width:100%;">
                                <option>---Select---</option>
                                <option>Client</option>
                            <option>Supplier</option>
                            <option>Staff</option>
                            <option>Office</option>
                            <option>Customers</option>
                            </select>
                            <div class="invalid-feedback" style="width: 100%;">
                            Required Field.
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-1">
                    <a href="{{url('document_letter_category')}}"> <i style="font-size:20px; color:rgb(13, 1, 56);" class="bi bi-plus-circle-fill"> </i></a>
                </div> -->
            </div>
            
            <div class="row">
                <div class="col-md-11">
                <label >Letter Types:</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" name="lettertype" id="" value="">
                    <div class="invalid-feedback" style="width: 100%;">
                    Required Field.
                </div>
            </div>
        </div>
       
                <div class="col-md-11">
                <label >Letter Type Name:</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" name="lettertypname" id="" value="">
                    <div class="invalid-feedback" style="width: 100%;">
                    Required Field.
                </div>
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
      














   