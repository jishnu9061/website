@extends('layouts.hmsmain')
@section('content')

  <div class="container">
  <h4 id="hdtpa"><b>Vendor Details</b></h4>
  

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
                
       
  
 <!-- table -->
 <div class="table-responsive">
 <table class="table">
            <thead>
              <tr class="text-center">
                <th scope="col">Vendor</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Actions</th>
                <th scope="col">Payment Details</th>
                
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
              
                <td>Bin</td>
                <td>1234567891</td>
                <td><a href="{{url('view_supplier')}}"> <i style="color:rgb(13, 1, 56);"class="fa fa-eye"></i><span class="m-2"></span>
                      <a href="{{url('edit_supplier')}}"><i style="color:rgb(13, 1, 56);" class="fa fa-edit" ></i><span class="m-2"></span>
                      <a href="#"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td>
                <td> <a href="{{url('ledger_details')}}" button type="button" class="btn btn-primary">View</button></td>
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





                    

@endsection