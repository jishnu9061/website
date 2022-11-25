
@extends('layouts.hmsmain')
@section('content')
    




{{-- heading --}}
  <div class="container">
      <h4 id="hdtpa"><b>Purchase Order Reports</b></h4>
      <br>

       <div class="row align-items-start">
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
         <table class="table text-center">
            <thead>
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Order Number</th>
                <th scope="col">Supplier</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>

                <td>25-11-2022</td>
                <td>C15P125</td>
                <td>Supplier1</td>
                <td>Order-Placed</td>
                <td><a href="{{url('purchase_view')}}"> <i style="color:rgb(13, 1, 56);"class="fa fa-eye"></i><span class="m-2"></span>
                      <a href="{{url('edit_purchase')}}"><i style="color:rgb(13, 1, 56);" class="fa fa-edit" ></i>
                </td>
                
              </tr>
            
             
            </tbody>
          </table> 

    
    </div>

  </div>





@endsection
