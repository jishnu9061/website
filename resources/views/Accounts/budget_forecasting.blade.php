@extends('layouts.hmsmain')
@section('content')


<div class="container">

  <div>
    <div>
    {{-- heading --}}
    <h4 id="hdtpa"><b>Budget Forecasting</b></h4>
    <br><br>
   
          </div>
          
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
  {{-- <a href="{{('')}}"><button class="btn btn-primary">Create New Budget</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Create New Budget</button>
                
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->


          <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Budget Projection - 2022</h3>
          <div class="table-responsive">
          <table class="table table-bordered" id="new-item">
            <thead>
              <tr>
                <th>Sl No:</th>
                <th>Account Number</th>
                <th>Account Name</th>
                <th>Actual Income & Expense 2021</th>
                <th>Jan 2022</th>
                <th>Feb 2022</th>
                <th>Mar 2022</th>
                <th>Apr 2022</th>
                <th>May 2022</th>
                <th>Jun 2022</th>
                <th>Jul 2022</th>
                <th>Aug 2022</th>
                <th>Sep 2022</th>
                <th>Oct 2022</th> 
                <th>Nov 2022</th>
                <th>Dec 2022</th>
                <th>Action</th>
            
             
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan = "18"  style="color: #1D1D50;font-weight: bold;">Reciepts: &nbsp;&nbsp;&nbsp; <a href="{{('add_account')}}"style="color: #1D1D50;font-weight: normal;">Add Account</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="{{('')}}"style="color: #1D1D50;font-weight: normal">View Chart</a></td>
                </tr>
                <tr>
             
              <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
 
                <td  scope="row"class="text-center">
                    <!-- <a href="{{url('')}}"><i  style=" color:rgb(13, 1, 56);" class="fa fa-eye" aria-hidden="true"></i> -->
                        <a href="{{url('')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('')}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td>
                        
             </tr>
            
                        
             </tr>
           </tbody>
</table><br><br>
</div >
<div>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h2 class="text-centre"><b>Create Budget Projection</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->       
@csrf






<div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >Choose Year:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="year"class="form-control"style="width:100%;">
                                <option>---select---</option>
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
                            </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Budget Type:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="type"class="form-control"style="width:100%;">
                                <option>---select---</option>
                                <option></option>
                                <option></option>
                            </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                     </div>
                     <div class="row">
                     <div class="col-md-6">
                        <div class="mb-1">
                            <label>choose how you want to create budget</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="budget"class="form-control"style="width:92%;">
                                <option>---select---</option>
                                <option></option>
                                <option></option>
                            
                                </select>
                           <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>





 
                    <div class="row">
                        <div class="col-sm">

                        </div>
                       
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
        
</div>
            </form>
            </div>
    </div>
</div>
</div>
</div>
</body>
</div>
</html>
@endsection