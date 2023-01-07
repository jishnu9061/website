
@extends('layouts.hmsmain')
@section('content')
<html>
  
        <style>

</style>  
<body>
<div class="container">
 
  

    
            <!-- <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Manage Towns </u></b></span></button><br> -->
                {{-- heading --}}
    <h4 id="hdtpa"><b>Manage Towns</b></h4>
    <br>
           
     
            
            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_town')}}"><button class="btn btn-primary">Add Town</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Town</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    
<!---------------------------------------------------- MODAL ---------------------------------------------------------------------->
    <!-- <a href="{{('add_user_department')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add Department</button></a> -->
   
    <div class="header_wrap">
      <div class="num_rows">
        <div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
         <select class  ="form-control" aria-label="Page navigation example" name="state" id="maxRows">

          <option value="5">5</option>
          <option value="10">10</option>
           <option value="15">15</option>
           <option value="20">20</option>
           <option value="50">50</option>
           <option value="70">70</option>
           <option value="100">100</option>
          <option value="5000">Show ALL Rows</option>
          </select>
         
        </div>
      </div>
      <div class="tb_search">
<input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
      </div>
   


    <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">List of Towns</h3>
    <div class="table-responsive">   
    <table class="table table-striped table-class" id= "table-id">
      
      <thead>

                        <tr>
                        <!-- <th class="text-center" >No</th> -->
                        <th class="text-center" >Town/City</th>
                     <th class="text-center" >Action</th>
                      
                   
                    </tr>
</thead>
             <tbody>
            @foreach($manage_towns  as $town)
                    <tr>
                        <!-- <td  class="text-center">{{$town->id}}</td> -->
                        <td  class="text-center">{{$town->Town_City}}</td>
                      
                        <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                                 <a href="{{url('edit_town',$town->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                                 <span class="m-2"></span>
                                 <a href="{{url('delete_town',$town->id)}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td>
                  
                     </tr>
                     @endforeach
                     </tbody>
                     </table><br>
</div >  
<!--		Start Pagination -->
<div class='pagination-container'>
      <nav>
        <ul class="pagination">
         <!--	Here the JS Function Will Add the Rows -->
        </ul>
      </nav>
    </div>
    <div class="rows_count">Showing 11 to 20 of 100</div>

 <!-- 		End of Container -->
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header" >
                                        <h2 class="text-centre"><b>Add Town</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{url('add_town') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->   
@csrf
<div class="row">
                <div class="col-lg-6 col-md-6 offset-md-3" >
                            <label for="username">Town/City</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="Town_City" id="username" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
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

        </body>
</div>
</html>

  @endsection
      














   