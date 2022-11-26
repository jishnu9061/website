@extends('layouts.hmsmain')
@section('content')


{{-- heading --}}
   <div class="container" >            
               <h4 id="hdtpa"><b>Practice Area</b></h4>
               <br>

               <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#myModal">Add New Practice Area</button></a>

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
      
      <th scope="col">Practice Area</th>
      <th scope="col">Actions</th> 

    </tr>
  </thead>
  <tbody>
    
    <tr>
      
      <td>Family Law</td>
      <td>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fa fa-edit" ></i><span class="m-2"></span>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt" ></i>
      </td>

    </tr>
    <tr>
      <td>Personal Injury</td>
      <td>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fa fa-edit" ></i><span class="m-2"></span>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt" ></i>
      </td>  
    </tr>
    <tr>
      <td>General Practice</td>
      <td>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fa fa-edit" ></i><span class="m-2"></span>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt" ></i>
      </td>  
    </tr>
    <tr>
      <td>Estate Planning</td>
      <td>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fa fa-edit" ></i><span class="m-2"></span>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt" ></i>
      </td>  
    </tr>
    <tr>
      <td>Real Estate</td>
      <td>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fa fa-edit" ></i><span class="m-2"></span>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt" ></i>
      </td>  
    </tr>
    <tr>
      <td>Criminal Law</td>
      <td>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fa fa-edit" ></i><span class="m-2"></span>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt" ></i>
      </td>  
    </tr>
    <tr>
      <td>Civil Litigation</td>
      <td>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fa fa-edit" ></i><span class="m-2"></span>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt" ></i>
      </td>  
    </tr>
    <tr>
      <td>Business Law</td>
      <td>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fa fa-edit" ></i><span class="m-2"></span>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt" ></i>
      </td>  
    </tr>
    <tr>
      <td>Guardianship</td>
      <td>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fa fa-edit" ></i><span class="m-2"></span>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt" ></i>
      </td>  
    </tr>
    <tr>
      <td>Probate Law</td>
      <td>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fa fa-edit" ></i><span class="m-2"></span>
      <a href=""><i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt" ></i>
      </td>  
    </tr>
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


</div>



<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header" >
                                        <h2 class="text-centre"><b>Add Practice Area</b></h2>

                                    </div>

                                    <!-- Modal body -->
            <div class="modal-body" >
            <div class="container">
                <form>
                                        
                  <div class="mb-3">                                       
                  <input class="form-control form-control-lg" type="text" placeholder="" aria-label=".form-control-lg example">
                  </div>

      <div class="modal-footer" style="background-color:#d3e0ed;">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
     </div>

</form>
</div>











@endsection