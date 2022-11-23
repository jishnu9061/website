@extends('layouts.hmsmain')
@section('content')

  
  <h4 id="hdtpa"><b>Vendor Performance Report</b></h4>
  
          <br>


        <!-- <div class="container"  Style="width:50%; float:center;">

         <div class="mb-3">
           <label class="form-label">Supplier</label>
           <select class="form-select">
              <option selected>---select---</option>
              <option value="1">supplier 1</option>
              <option value="2">supplier 2</option>
           </select>

          </div>
        </div>

                        
                        <br>
                        <div class="text-center">
                       
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">View</button>       
                        <span class="m-2"></span>
                        <button type="button" class="btn btn-primary">Cancel</button>

                    </div> -->
                    
                    


  <div>                 
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Add New Supplier</button>
  </div>
  

<br>
 <!-- table -->
 <div class="table-responsive">
 <table class="table">
            <thead>
              <tr class="text-center">
                <th scope="col">Item Name</th>
                <th scope="col">Supplier</th>
                <th scope="col">Actions</th>
                <th scope="col">Details</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">

                <td></td>
                <td></td>
                <td><a href="#"> <i style="color:rgb(13, 1, 56);"class="fa fa-eye"></i><span class="m-1"></span>
                      <a href="#"><i style="color:rgb(13, 1, 56);" class="fa fa-edit" ></i><span class="m-1"></span>
                      <a href="#"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td>
                <td><button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">Details</button></td>
        
              </tr>
             
            </tbody>
          </table> 
        </div>





<!-- Modal -->

<div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header --> 
                               
  
                                <div class="modal-header">
                                <div class="container">
                <h4><b>Vendor Details</b></h4>
                <br>

                               

                                <!-- Modal body -->
                                <div class="modal-body">


<div class="container">
    
    
         <!-- table -->
         <div class="table-responsive">
         <table class="table">
            <thead>
              <tr>
                <th scope="col">Item ID</th>
                <th scope="col">Item Name</th>
                <th scope="col">Quantity Ordered</th>
                <th scope="col">Actual Delivery Date</th>
                <th scope="col">Quantity Delivered</th>
                <th scope="col">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>

                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea></td>
                
              </tr>
        
            </tbody>
          </table> 
           
          <br>

       



    </div>   
    </div>   
    <!-- button -->
    
            <div class="modal-footer" style="background-color:#d3e0ed;">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Print</button>
            </div>
         </div>











                    

@endsection