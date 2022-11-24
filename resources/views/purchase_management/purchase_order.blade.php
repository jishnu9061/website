@extends('layouts.hmsmain')
@section('content')



    
        <!-- <h2 style="color: #070344;  text-align:center;"><b>Customer Registration</b></h2> -->
        
            
                <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px">
                <b><u>Client Registration</u></b></span> -->
                {{-- heading --}}
               
                <h4 id="hdtpa"><b>New Purchase Order</b></h4>
                <br>
            

       

        <div>  
            <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#myModal">Add New Purchase</button></a>
                
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#myModal1">Add New Item</button></a> -->
          
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
                



                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="table-responsive">
                            <table class="table table-striped table-class" id="table-id">

                                <thead>
                                    <tr>
                                        <th class="text-center">Order Number</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Suppliers</th>
                                        <th class="text-center">Unit</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">View</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    <tr id="data">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td scope="row" class="text-center">
                                        <a href="{{url('view_purchase_order')}}"> <i style="color:rgb(13, 1, 56);"class="fa fa-eye"></i>
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





                        
                       
                        <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header" >
                                        <h2><b>Add New Purchase</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" >
                                        <div class="container">
                                            <form method="post" action="{{ url('create_job_post') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
    
<div class="container">
  <div class="row">
    <div class="col">
    <label for="exampleFormControlInput1" class="form-label">Purchase Date</label>
  <input type="date" class="form-control" >
  <br>
  <label for="exampleFormControlInput1" class="form-label">Supplier</label>
    <select class="form-select" aria-label="Default select example">
        <option selected>---select---</option>
        <option value="1">Supplier 1</option>
        <option value="2">Supplier2</option>
    </select>
</div>
   <div class="col">
   <label for="exampleFormControlInput1" class="form-label">Purchase Order Number</label>
  <input type="text" class="form-control" >
    
  <br>
  <label for="exampleFormControlInput1" class="form-label">Status</label>
  <input class="form-control" type="text" placeholder="Order-Placed" aria-label="Disabled input example" disabled>
    
    </div>
    <div class="col">
  <label for="exampleFormControlInput1" class="form-label">Payment Type</label>
  <select class="form-select" aria-label="Default select example">
        <option selected>---select---</option>
        <option value="1">Cash</option>
        <option value="2">Bank Transfer</option>
    </select>  
  </div>
</div>
<br>
<br>

<div class="text-center">
<h4><b>Purchase Items</b></h4>
</div>
<br>
 <!-- table -->
 <div class="table-responsive">
 <table class="table">
            <thead>
              <tr class="text-center">
                <th scope="col">Item ID</th>
                <th scope="col">Item Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Total</th>
                <th><button type="button" class="btn btn-primary">Add</button></th> 
        
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">

                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><button type="button" class="btn btn-secondary">Remove</button></td>
                
              </tr>
              <tr>
              <td colspan="4" ><h6 style="float:right"><b> Grand Total </b></h6></td>
              <td colspan="2"><input type="text" class="form-control"></td>
              </tr>
             
            </tbody>
          </table> 
        </div>
        





<!-- Modal Footer -->
            <div class="modal-footer" style="background-color:#d3e0ed">
                
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                
            </div>


   </form>
   </div>
   </div>

   </div>
   </div>
</div>




       @csrf
        
            {{-- Supplier Edit End --}}
            @endsection