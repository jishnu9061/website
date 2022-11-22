
@extends('layouts.hmsmain')
@section('content')
    




{{-- heading --}}
  <div class="container">
      <h4 id="hdtpa"><b>Purchase Order Reports</b></h4>
      <br>

      <div class="container"  Style="width:50%; float:center;">

    <div class="mb-3">
        <label class="form-label">Report Type</label>
        <select class="form-select">
            <option selected>All Documents</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>

    </div>
    <div class="mb-3">
        <label class="form-label">Date From</label>
        <input type="date" class="form-control" >
    </div>
    <div class="mb-3">    
        <label class="form-label">Date To</label>
        <input type="date" class="form-control" >
    </div>
    <br>

<!-- button -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">View Report</button></a>
    <span class="m-2"></span>
    <button type="button" class="btn btn-primary">Cancel</button>

</div>
</div>




<!-- Modal -->

<div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header --> 
                               
  
                                <div class="modal-header">
                                <div class="container">
                <h4><b>View Purchase Order Reports</b></h4>
                <br>

                               

                                <!-- Modal body -->
                                <div class="modal-body">


<div class="container">
    
        <div class="row align-items-start">
          <div class="col">
            <label class="form-label">Report Type</label>
            <input type="text" class="form-control" >
            <!-- <select class="form-select">
                <option selected>All Documents</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select> -->
          </div>
          <div class="col">
            <label class="form-label">Date From</label>
            <input type="date" class="form-control" >
          </div>
          <div class="col">
            <label class="form-label">Date To</label>
            <input type="date" class="form-control" >
          </div>
        </div>
        
        <br>
         <!-- table -->
         <div class="table-responsive">
         <table class="table">
            <thead>
              <tr>
                <th scope="col">Item ID</th>
                <th scope="col">Item Name</th>
                <th scope="col">Expected Delivery Date</th>
                <th scope="col">Supplier</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>

                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea></td>
                <td></td>
                
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
