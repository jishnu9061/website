@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
        <h4 id="hdtpa"><b>Vendor Ledger Details</b></h4>
        <br>                         
                                              
    
<div class="container">
<br>
 <!-- table -->
 <div class="table-responsive">
 <table class="table">
            <thead>
              <tr class="text-center">
                <th scope="col">Order No</th>
                <th scope="col">Purchase Date</th>
                <th scope="col">Total</th>
                <th scope="col">Advance</th>
                <th scope="col">Balance</th>
                <th scope="col">Update Amount</th>
                <th scope="col">Paid Details</th>
        
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">

              <td><input type="text" placeholder="12C45F78JK" class="form-control" disabled></td>
              <td><input type="text" placeholder="24-11-2022" class="form-control" disabled></td>
              <td><input type="text"  placeholder="1000" class="form-control" disabled></td>
              <td><input type="text"  placeholder="400" class="form-control" disabled></td>
              <td><input type="text"  placeholder="600" class="form-control" disabled></td>
              <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Amount</button></td>
              <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">View</button></td>
             
              </tr>
              <tr class="text-center">

              <td><input type="text" placeholder="34C67F89JK" class="form-control" disabled></td>
              <td><input type="text" placeholder="25-11-2022" class="form-control" disabled></td>
              <td><input type="text"  placeholder="2000" class="form-control" disabled></td>
              <td><input type="text"  placeholder="500" class="form-control" disabled></td>
              <td><input type="text"  placeholder="1500" class="form-control" disabled></td>
              <td><button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">Add Amount</button></td>
              <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">View</button></td>
              
              </tr>
              <tr>
              <td colspan="4"></td>
            <td><input type="text"  placeholder="Grand Total" class="form-control" disabled></td>
            <td><input type="text"  placeholder="3000" class="form-control" disabled></td>
              </tr>
              <tr>
              <td colspan="4"></td>
            <td><input type="text"  placeholder="Total Advance" class="form-control" disabled></td>
            <td><input type="text"  placeholder="900" class="form-control" disabled></td>
              </tr>
              <tr>
              <td colspan="4"></td>
            <td><input type="text"  placeholder="Total Balance" class="form-control" disabled></td>
            <td><input type="text"  placeholder="2100" class="form-control" disabled></td>
              </tr>
            </tbody>
          </table> 
        </div>
        <br>





            <div class="text-center">

                <button type="button" class="btn btn-primary" style="width:20%">Print</button>
                
            </div>





<!---------------------------------------------- MODAL ---------------------------------------------------------------------->


<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header" >
                                        <h2 class="text-centre"><b>Add Payment</b></h2>
                                    </div>

                                    <!-- Modal body -->
                <div class="modal-body" >
                <div class="container">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Amount</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Balance Amount</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Payment Date</label>
                  <input type="date" class="form-control" id="exampleFormControlInput1">
                </div>
    









                                         <!-- Modal Footer -->
    
            <div class="modal-footer" style="background-color:#d3e0ed;">
            
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                
            </div>
             </div>
              </div>
                  </div>
                       </div>                                                                 
                            </div>            
                           


<!---------------------------------------------- MODAL-1 ---------------------------------------------------------------------->    


<div class="modal fade" id="myModal1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header" >
                                        <h2 class="text-centre"><b>View Paid Details</b></h2>
                                    </div>

                                    <!-- Modal body -->
                <div class="modal-body" >
                <div class="container">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">Paid Date</th>
      <th scope="col">Amount</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>

      <td><input class="form-control" type="text" value="24-11-2022" aria-label="Disabled input example" disabled readonly></td>
      <td><input class="form-control" type="text" value="2000" aria-label="Disabled input example" disabled readonly></td>
      
    </tr>

  </tbody>
</table>
                
    


<!-- Modal Footer -->

         <div class="modal-footer" style="background-color:#d3e0ed" >
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>


            </div>
             </div>
              </div>
                  </div>
                       </div>                                                                 
                            </div>            
                           


<!---------------------------------------------- MODAL-1 ---------------------------------------------------------------------->    







@endsection