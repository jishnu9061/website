@extends('layouts.hmsmain')
@section('content')

  
  <h4 id="hdtpa"><b>Cost Variation Report</b></h4>
  
          <br>


        <div class="container" Style="width:50%; float:center;">

         <div class="mb-3">
           <label class="form-label">Inventory Item</label>
           <select class="form-select">
              <option selected>---select---</option>
              <option value="1">item 1</option>
              <option value="2">item 2</option>
           </select>

          </div>
        </div>
                        
                        <br>
                        <div class="text-center">
                       
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">View Report</button>       
                        <span class="m-2"></span>
                        <button type="button" class="btn btn-primary" onclick="history.back()">Cancel</button>

                    </div>
                    
                    




<!-- Modal -->

<div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header --> 
                               
  
                                <div class="modal-header">
                                <div class="container">
                <h4><b>Cost Variation Report</b></h4>
                <br>

                               

                                <!-- Modal body -->
                                <div class="modal-body">


<div class="container">
<div class="mb-3"  Style="width:50%; float:center;">
        <label class="form-label">Item Name</label>
        <input type="text" class="form-control" >
    </div>
    <br>
    
         <!-- table -->
         <div class="table-responsive">
         <table class="table">
            <thead>
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Item Number</th>
                <th scope="col">Quantity Ordered</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Total</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>

                <td></td>
                <td></td>
                <td></td>
                <td></td>
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