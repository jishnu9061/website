@extends('layouts.hmsmain')
@section('content')


{{-- heading --}}
   <div class="container" >            
               <h4 id="hdtpa"><b>Banks</b></h4>
               <br>

               <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#myModal">Add New Bank</button></a>

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
      
      <th scope="col">Bank Name</th>
      <th scope="col">Branch</th> 
      <th scope="col">Actions</th> 

    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td></td>
      <td></td>
      <td> 
        
        <a href="{{url('edit_supplier')}}"><i style="color:rgb(13, 1, 56);" class="fa fa-edit" ></i>
        <span class="m-2"></span>
        <a href="#"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td>

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
                                        <h2 class="text-centre"><b>Add Bank</b></h2>

                                    </div>

                                    <!-- Modal body -->
            <div class="modal-body" >
            <div class="container">
                <form>
                                        
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Bank Name</label>
                  <input type="text" class="form-control"  placeholder="">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Branch</label>
                  <input type="text" class="form-control"  placeholder="">
                </div>

      <div class="modal-footer" style="background-color:#d3e0ed;">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
     </div>

</form>
</div>






@endsection