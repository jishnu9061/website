@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
               
               <h4 id="hdtpa"><b>Civil Litigation</b></h4>
               <br>

  
               <input class="btn btn-primary" type="button" value="Add New Matter" data-toggle="modal" data-target="#myModal">
 <br>


               <div class="header_wrap">
                    <div class="num_rows">
                        <div class="form-group">
                            <!--		Show Numbers Of Rows 		-->
                            <select class="form-control" aria-label="Page navigation example" name="state" id="maxRows">

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
                        <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()"
                            placeholder="Search.." class="form-control">
                    </div>
                    </div>
                


<div class="table-responsive">

<table class="table text-center">
  <thead>
    <tr>
      
      <th scope="col">Matter Info</th>
      <th scope="col">Plaintiff</th> 
      <th scope="col">Matter Type</th>
      <th scope="col">Defendent</th>
      <th scope="col">Attroney</th>
      <th scope="col">Actions</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>2016-10-155-ER/AP</td>
      <td>Charles Norris</td>
      <td>Civil Dispute</td>
      <td>jean C. Van Damme</td>
      <td>Deway Cheatum</td>
      <td><a href="{{ url('view_civil_litigation') }}"><i style="color:rgb(13, 1, 56);"class="fa fa-eye"></i><span class="m-1"></span>
          <a href="{{ url('edit_civil_litigation') }}"><i style="color:rgb(13, 1, 56);" class="fa fa-edit" ></i><span class="m-1"></span>
          <a href="#"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td>
      
    </tr>
    
  </tbody>
</table>

    <table class="table text-center">
        <thead>
            <tr>

                <th scope="col">Matter Info</th>
                <th scope="col">Plaintiff</th>
                <th scope="col">Matter Type</th>
                <th scope="col">Defendent</th>
                <th scope="col">Attroney</th>
                <th scope="col">Actions</th>

            </tr>
        </thead>
        <tbody>

        @foreach($view_litigation as $list)
            <tr>

                <td>{{$list->matter_info}}</td>
                <td>{{$list->plaintiff}}</td>
                <td>{{$list->matter_type}}</td>
                <td>{{$list->defendent}}</td>
                <td>{{$list->attroney}}</td>
                <td><a href="{{ url('view_civil_litigation') }}"><i style="color:rgb(13, 1, 56);"
                            class="fa fa-eye"></i><span class="m-1"></span>
                        <a href="{{ url('edit_civil_litigation',$list->id)}}"><i style="color:rgb(13, 1, 56);"
                                class="fa fa-edit"></i><span class="m-1"></span>
                            <a onClick="return myFunction();"  href="{{ url('delete_civil_litigation',$list->id)}}"> <i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i></td>

            </tr>
            @endforeach

        </tbody>
    </table>

</div>



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
                                        <h2 class="text-centre"><b>Add Matter</b></h2>

                                    </div>

                                    <!-- Modal body -->
                  <div class="modal-body" >
                      <div class="container">
                        <form method="post" enctype="multipart/form-data"> 
                        <div class="container">
      <div class="row">
    <div class="col">
           <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                    <input type="text" class="form-control" placeholder="">
                        </div>
    </div>
    <div class="col">
        <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Plaintiff</label>
                    <input type="text" class="form-control" placeholder="">
                        </div>
    </div>
    <div class="col">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <input type="text" class="form-control" placeholder="">
                        </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Defendent</label>
                    <input type="text" class="form-control" placeholder="">
                        </div>
    </div>
    <div class="col">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Attroney</label>
                    <textarea class="form-control" rows="2"></textarea>
                        </div>
    </div>
    <div class="col">
     <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                    <textarea class="form-control" rows="2"></textarea>
                        </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Plaintiff's Insurer</label>
                    <textarea class="form-control" rows="2"></textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Plaintiff's Witness</label>
                    <textarea class="form-control" rows="2"></textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Plaintiff's Expert</label>
                    <textarea class="form-control" rows="2"></textarea>
                        </div>  
    </div>
    </div>
    <div class="row">
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Defendant's Insurer</label>
                    <textarea class="form-control" rows="2"></textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Defendant's Witness</label>
                    <textarea class="form-control" rows="2"></textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Defendant's Expert</label>
                    <textarea class="form-control" rows="2"></textarea>
                        </div>  
    </div>


    <div class="row">
    <div class="col">
      
    </div>
  </div>
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                    <span class="m-2"></span>
                    <input type="file" class="form-control" >
                        </div>
      </div>
  </div>


      <div class="modal-footer" style="background-color:#d3e0ed;">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
     </div>

</form>
</div>











@endsection