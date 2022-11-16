@extends('layouts.hmsmain')
@section('content')

                
    <h4 id="hdtpa"><b>File List</b></h4>
    <br><br>
            </div>
            <div>
                <!-- <div class="btn btn-primary"
                    style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Corporate Client List</u></b></span></div><br>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                    crossorigin="anonymous">

            </div> -->
            <div >
                <input class="btn btn-primary" type="button" value="All">
                <input class="btn btn-primary" type="button" value="Open">
                <input class="btn btn-primary" type="button" value="Pending">
                <input class="btn btn-primary" type="button" value="Closed">
             </div>
<br>

                <div id="mydatatable_filter" class="dataTables_filter">
                    <label><input type="search" class="box" placeholder="search" aria-controls="mydatatable"></label>
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal-1">Columns
                  </button>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalb">Filter
                  </button>
                </div>
                {{-- <a href="{{('add-corporate')}}"><button class="btn btn-primary">Add Corporate</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">New
                  File</button>


                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalaa">temp
                    </button
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Filter
                  </button> -->
                </div><br>
                {{-- <a href="{{('add-corporate')}}"><button class="btn btn-primary">Add Corporate</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">New
                  File</button><br>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="new-item">
                                <thead>
                                    <tr>
                                        <!-- <th class="text-center"> <input type="checkbox"></th> -->
                                      
                                        <th class="text-center">*</th>
                                        <th class="text-center">File No</th>
                                        <th class="text-center">Client</th>
                                        <th class="text-center">File Name</th>
                                        <th class="text-center">File Open</th>
                                        <th class="text-center">Responsible<br>Advocate</th>
                                        <th class="text-center">Most Recent Progress</th>
                                        <th class="text-center">Date Closed</th>
                                        <th class="text-center">File&Fee Balances</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($file_list as $list)
                                    
                                        <tr id="data">
                                          
                                            <td scope="row">{{$list->id}}</td>
                                            <td scope="row">{{$list->id}}</td>
                                            <td scope="row">{{$list->Client_name}}</td>
                                            <td scope="row">{{$list->File_name}}</td>
                                            <td scope="row">{{$list->opening_date}}</td>
                                            <td scope="row">{{$list->responsible_advocate}}</td>
                                            <td scope="row">{{$list->recent_progress}}</td>
                                            <td scope="row">{{$list->closing_date}}</td>
                                            <td scope="row">{{$list->amount}}</td>
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                            <!-- <td scope="row"></td> -->
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                            <br>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"style="color:#1D1D50;">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#"style="color:#1D1D50;">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#"style="color:#1D1D50;">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#"style="color:#1D1D50;">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"style="color:#1D1D50;">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add-new-file') }}"
                                                enctype="multipart/form-data">

                                                @csrf
                                                <h4>Matter</h4>
                <div class="row">
                   
                   
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Client</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="client" id="age" value="" >
                            </div>
                        </div>
                    </div>
                
                <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="email" class="form-control" name="email" id="age" value="" >
                            </div>
                        </div>
                    </div>
<!-- </div>
<br>

                <div class="row"> -->
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Telephone</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" class="form-control" name="phone" id="age" value="" >
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="address" id="age" value="" >
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">File Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="file_type" value=""
                                    id="confirm_password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Opening Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="date" class="form-control" name="open_date" id="age" value=""
                                 min="0" max="99">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Close Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="date" class="form-control" name="close_date" id="age" value=""
                                 min="0" max="99">
                            </div>
                        </div>
                    </div>
                    
                <div class="row">
               
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Comments</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control" id="form7Example7" rows="2" name="comments"></textarea><br>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <br>
                <h4>Notification</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="email" class="form-control" name="notifi_email" value=""
                                    id="confirm_password"><br>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                <h4>Contacts</h4>
                <div class="row">
                <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Telephone</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" class="form-control" name="con_phone" value=""
                                    id="confirm_password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email" class="form-control" name="con_email" value=""><br>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <h4>Cutom Fields</h4>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email" class="form-control" name="email" value=""
                                    id="confirm_password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="email" class="form-control" name="email" value=""
                                    id="confirm_password"><br>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <br>
                <h4>Billing</h4>
                <div class="row">
                   
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Amount</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="amount" value=""
                                    id="confirm_password"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <h4>Task</h4>
                    <div class="row">
                    <div class="col-md-8">
                        <div class="mb-1">
                            <label for="username">Task</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="task" id="cars">
                                    <option >Select</option>
                                    <option >Residensial</option>
                                    <option >Non Residensial</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="mb-1">
                            <label for="username"></label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <a href="{{url('add-task')}}" ><i class="fa fa-plus" style="font-size:24px"></i></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <br>
              
                   <div class="row">
                       <div class="col-sm">

                       </div>
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
<div class="modal" id="mymodal">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <div class="modal-body">
                   <form action="">
                       <div>
                           <input type="text" name="type" class="form-control" placeholder="Client Type">
                           <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
</div>
<div class="modal" id="my">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <div class="modal-body">
                   <form action="">
                       <div>
                           <input type="text" name="type" class="form-control" placeholder="Country">
                           <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
</div>

        <br>

                  <!-- COLUMNS -->
                   <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add-new-file') }}"
                                                enctype="multipart/form-data">

                                                @csrf
                                                <h4>Matter</h4>
                <div class="row">
                   
                   
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Client</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="client" id="age" value="" >
                            </div>
                        </div>
                    </div>
                
                <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="email" class="form-control" name="email" id="age" value="" >
                            </div>
                        </div>
                    </div>
<!-- </div>
<br>

                <div class="row"> -->
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Telephone</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" class="form-control" name="phone" id="age" value="" >
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="address" id="age" value="" >
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">File Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="file_type" value=""
                                    id="confirm_password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Opening Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="date" class="form-control" name="open_date" id="age" value=""
                                 min="0" max="99">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Close Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="date" class="form-control" name="close_date" id="age" value=""
                                 min="0" max="99">
                            </div>
                        </div>
                    </div>
                    
                <div class="row">
               
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Comments</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control" id="form7Example7" rows="2" name="comments"></textarea><br>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <br>
                <h4>Notification</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="email" class="form-control" name="notifi_email" value=""
                                    id="confirm_password"><br>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                <h4>Contacts</h4>
                <div class="row">
                <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Telephone</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" class="form-control" name="con_phone" value=""
                                    id="confirm_password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email" class="form-control" name="con_email" value=""><br>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <h4>Cutom Fields</h4>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email" class="form-control" name="email" value=""
                                    id="confirm_password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="email" class="form-control" name="email" value=""
                                    id="confirm_password"><br>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <br>
                <h4>Billing</h4>
                <div class="row">
                   
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Amount</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="amount" value=""
                                    id="confirm_password"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <h4>Task</h4>
                    <div class="row">
                    <div class="col-md-8">
                        <div class="mb-1">
                            <label for="username">Task</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="task" id="cars">
                                    <option >Select</option>
                                    <option >Residensial</option>
                                    <option >Non Residensial</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="mb-1">
                            <label for="username"></label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <a href="" data-toggle="modal" data-target="#myModal-task"><i class="fa fa-plus" style="font-size:24px"></i></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <br>
              
                   <div class="row">
                       <div class="col-sm">

                       </div>
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
<div class="modal" id="mymodal">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <div class="modal-body">
                   <form action="">
                       <div>
                           <input type="text" name="type" class="form-control" placeholder="Client Type">
                           <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
</div>
<div class="modal" id="my">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <div class="modal-body">
                   <form action="">
                       <div>
                           <input type="text" name="type" class="form-control" placeholder="Country">
                           <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
</div>

                  <!-- END COLUMNS -->


      


                <!-- The Modal -->
                <div class="modal fade" id="editmed">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header" >
                                <h4 class="text-white">Edit Medicine</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <form method="post" action="{{url('update_medicine')}}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <h4 class="text-center"><b>Medicine Details</b></h4><br>
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="">Brand Name</label>

                                            </div>
                                            <div class="col-sm">
                                                <label for="">Medicine Name</label>
                                                <input type="text" id="edit_medicine_name" name="medicine_name"
                                                    class="form-control" required><br>
                                            </div>
                                            <div class="col-sm">
                                                <div class="col-sm">
                                                    <label for="">Medicine Group</label>


                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Client Ref.No or(Case No)</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="client_ref_no" id="age" value="" min="0" max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Age is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Our File Ref No</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="our_file_ref_no" value=""
                                                                    id="confirm_password">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">File Name/Subject</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="file_name" id="age" value=""
                                                                 min="0" max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Age is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Approval Partner</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                
                                                                </div>
                                                                <select name="approval_partner" id="cars">
                                                                    <option >Select</option>
                                                                    <option >Residensial</option>
                                                                    <option >Non Residensial</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Customer Name</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="customer_name" value=""
                                                                    id="confirm_password">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Amount</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="narration" class="form-control" name="amount" value=""
                                                                    id="confirm_password">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-1">
                                                            <label for="username">Workflow</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                
                                                                </div>
                                                                <select name="workflow" id="cars">
                                                                    <option >Select</option>
                                                                    <option >In Progress</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">Customer Tel</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" class="form-control" name="telephone" value=""
                                                                        id="confirm_password">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Password is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">Customer E-mail</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="email" class="form-control" name="email" value=""
                                                                        id="confirm_password">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Password is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">Customer Address</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <textarea class="form-control" name="address" id="floatingTextarea"></textarea>
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Password is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                      
                                                    </div>
                                                </div>
                                                <br>
                                                    <div class="modal-footer" >
                                                        <button type="submit" class="btn btn-primary"
                                                            data-dismiss="modal"
                                                            style="width:15%;background-color:white;color:black">Close</button>
                                                        <button type="submit" class="btn btn-primary"
                                                            style="width:15%;background-color:white;color:black">Save</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>





                            </div>

                            </form>

                        </div>
                    </div>
                </div>

            </div>

            <br>










            <div class="modal fade" id="myModalaa">
                
          
                <div class="modal-dialog modal-lg">

                   
                    <div class="modal-content " style="padding-left: 150px; ">


                        <ul class="p-2" style="position: absolute; z-index:100; background-color:rgb(243, 242, 227);  display: flex;
                        flex-direction: column;
                        justify-content: space-between;
                        align-items: center; left:0px; top:0px; height:100%; line-height: 15.6; list-style-type:none;   ">
                            <li><a id="gg"  class="btn btn-primary " href="#sef">Task</a> </li>
                            <li><a id="gg"  class="btn btn-primary " href="#see">Billing</a> </li>
                            <li><a id="gg"  class="btn btn-primary " href="#sed">Custom Fields</a> </li>
                            <li><a id="gg"  class="btn btn-primary " href="#sec">Contacts</a> </li>
                            <li><a id="gg"  class="btn btn-primary " href="#seb">Notification</a> </li>
                            <li><a id="gg"  class="btn btn-primary " href="#sea">Matter</a> </li>

                        </ul>

                        
                        {{-- <nav style=" " class="navbar navbar-expand-lg navbar-light bg-light fixed">
                            <a class="navbar-brand" href="#">Navbar</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                              <div class="navbar-nav">
            
                                <a  class="nav-item nav-link active" href="#sea">hgh</a>
                                <a  class="nav-item nav-link active" href="#seb">yjgj</a>
                                <a  class="nav-item nav-link active" href="#sec">yuyu</a>
                                <a  class="nav-item nav-link active" href="#sed">yutyiu</a>
                                <a  class="nav-item nav-link active" href="#see">yiyi</a>
            
            
            
                                
                              </div>
                            </div>
                          </nav> --}}







                 









                        <!-- Modal Header -->
                        <div class="modal-header" >
                            <h2 class="text-centre"><b>Add New File</b></h2>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container">
                             
                                <form method="post" action="{{ url('add-new-file') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h5 id="sea">Matter</h5>

                                    <form >
                                        
                                        <div class="form-row">
                                          <div class="col">
                                            <input type="text" class="form-control" placeholder="First name">
                                          </div>
                                         
                                        </div>
                                        <br>
                                        <div class="form-row">

                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Last name">
                                          </div>
                                          
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Last name">
                                          </div>

                                         </div>

                                         <br>
                                         <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Example textarea</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                          </div>

                                          <div class="form-row">


                                            <div class="col">
                                          <select class="form-control">
                                            <option>Default select</option>
                                            <option>Default select</option>
                                            <option>Default select</option>
                                          </select>
                                        </div>

                                          <div class="col">

                                          <select class="form-control">
                                            <option>Default select</option>
                                            <option>Default select</option>
                                            <option>Default select</option>
                                          </select>

                                        </div>


                                        

                                        </div>
<br>

                                        <div class="form-row">

                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Last name">
                                              </div>
                                              
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Last name">
                                              </div>
    
                                             </div>
                                             <br>


                                             <div class="form-row">


                                                <div class="col">
                                              <select class="form-control">
                                                <option>Default select</option>
                                                <option>Default select</option>
                                                <option>Default select</option>
                                              </select>
                                            </div>
    
                                              <div class="col">
    
                                              <select class="form-control">
                                                <option>Default select</option>
                                                <option>Default select</option>
                                                <option>Default select</option>
                                              </select>
    
                                            </div>
    
                                            <br>
                                            
    
                                            </div>

                                            <br>
                                            
                                            <div class="form-row">


                                                <div class="col">
                                              <select class="form-control">
                                                <option>Default select</option>
                                                <option>Default select</option>
                                                <option>Default select</option>
                                              </select>
                                            </div>
    
                                      
    
    
                                            
    
                                            </div>
                                            <br>
                                            <div class="form-row">

                                                <div class="col">
                                                    <input type="date" class="form-control" placeholder="Last name">
                                                  </div>
                                                  
                                                <div class="col">
                                                    <input type="date" class="form-control" placeholder="Last name">
                                                  </div>
        
                                                 </div>
                                                 <br>

                                                 <div class="form-row">

                                                    <div class="col">
                                                        <input type="date" class="form-control" placeholder="Last name">
                                                      </div>
                                                      
                                                    <div class="col">
                                                        <input type="date" class="form-control" placeholder="Last name">
                                                      </div>
            
                                                     </div>

                                                     <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Satisfied</label>
                                                      </div>
                                                      <br>
                                                      <br><br><br>
                                                   

                                                    

                                                    <h5 id="seb">Notification</h5>
                                                    

                                                      <div class="form-row">
                                                      

                                                        <div class="col">
                                                            <input type="text" class="form-control" placeholder="Last name">
                                                          </div>
                                                          
                                                
                
                                                         </div>
                                                         <br>

                                                         <div class="p-1 m-1" style="background-color:aliceblue; font-size:10px; border: 1px solid;">
                                                            this text used only
                                                            <br> for demo purpose
                                                        </div>

                                                        <br><br><br>

                                                        <h5 id="sec">Contacts</h5>
                                                         
                                                             <div class="form-row">

                                                                
                                                                    <div class="col">
                                                                        <select class="form-control">
                                                                          <option>Default select</option>
                                                                          <option>Default select</option>
                                                                          <option>Default select</option>
                                                                        </select>
                                                                      </div>
                              
                                                                  
                                                                  
                                                                <div class="col">
                                                                    <input type="text" class="form-control" placeholder="Last name">
                                                                  </div>
                        
                                                                 </div>

                                                                 <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                    <label class="form-check-label" for="inlineCheckbox1">Satisfied</label>
                                                                  </div>
                                                                  <br><br><br>

                                                                  <h5 id="sed">Custom Fields</h5>
                                                                 
                                                                 
                                                                  <div class="p-1 m-1" style="background-color:aliceblue; font-size:10px; border: 1px solid;">
                                                                    this text used only
                                                                    <br> for demo purpose
                                                                </div>
                                                                <br>
                                                                  <div class="form-row">

                                                                
                                                                    <div class="col">
                                                                        <select class="form-control">
                                                                          <option>Default select</option>
                                                                          <option>Default select</option>
                                                                          <option>Default select</option>
                                                                        </select>
                                                                      </div>
    
                                                                 </div>
                                                                 <br>

                                                                 <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                    <label class="form-check-label" for="inlineCheckbox1">Satisfied</label>
                                                                  </div>
                                                                  <br>
                                                                 <div class="form-row">
                                                                    

                                                                        <div class="col">
                                                                            <input type="Date" class="form-control" placeholder="Last name">
                                                                          </div>
                                                                          
                                                                      </div>
                                                                      
                                                                      <br><br><br>
                                                                      <h5 id="sed">Billing</h5>

                                                                      <div class="p-1 m-1" style="background-color:aliceblue; font-size:10px; border: 1px solid;">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                            <label class="form-check-label" for="inlineCheckbox1">Satisfied</label>
                                                                          </div>
                                                                         this text used only
                                                                         <br> for demo purpose
                                                                     </div>

                                                                     <div class="form-row">

                                                                     <div class="col">
                                                                        <select class="form-control">
                                                                          <option>Default select</option>
                                                                          <option>Default select</option>
                                                                          <option>Default select</option>
                                                                        </select>
                                                                      </div>
                                                                    </div>
                                                                    <h6 id="see">Billing</h6>
                                                                   

                                                                    <div class="form-check form-check-inline col">
                                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                        <label class="form-check-label" for="inlineCheckbox1">Satisfied</label>
                                                                      </div>
                                                                      <h6>Billing</h6>  
                                                                      

                                                                    
                                                                      <div class="form-check form-check-inline col">
                                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                        <label class="form-check-label" for="inlineCheckbox1">Satisfied</label>
                                                                    </div>
                                                                    <br><br><br>
                                                                        <h5 id="sef">Task</h5>
                                                                        <div class="p-1 m-1" style="background-color:aliceblue; font-size:10px; border: 1px solid;">
                                                                            this text used only
                                                                            <br> for demo purpose
                                                                        </div>

                                                                        <h6 >Task List</h6>
                                                                        
                                                                     <div class="form-row">

                                                                        <div class="col">
                                                                           <select class="form-control">
                                                                             <option>Default select</option>
                                                                             <option>Default select</option>
                                                                             <option>Default select</option>
                                                                           </select>
                                                                         </div>
                                                                       </div>
                                                                 </div>

                                                                </form>

                                      {{-- bj --}}






















                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header" >
                                        <h2 class="text-centre"><b>Add New File</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add-corporate') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                        <form method="post" action="" id="form">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Client</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">

                                                                            </div>
                                                                            <select name="client_type" id="cars">
                                                                                <option>Select</option>
                                                                                <option>Accord University</option>
                                                                                <option>Accounts And Books</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Associate Handling</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">

                                                                            </div>
                                                                            <select name="associate_handling" id="cars"
                                                                                disabled>
                                                                                <option>Corporate</option>
                                                                                <option>Individual</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Opening Date</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"></div>
                                                                            <input type="date" class="form-control" name="opening_date" id="age" value="" min="0" max="99">
                                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                                Age is required.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Approval Partner</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                            
                                                                            </div>
                                                                            <select name="approval_partner" id="cars">
                                                                                <option >Select</option>
                                                                                <option >Residensial</option>
                                                                                <option >Non Residensial</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Customer Name</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"></div>
                                                                            <input type="text" class="form-control" name="customer_name" value=""
                                                                                id="confirm_password">
                                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                                Password is required.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Amount</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"></div>
                                                                            <input type="narration" class="form-control" name="amount" value=""
                                                                                id="confirm_password">
                                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                                Password is required.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                         
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                            <div class="mb-1">
                                                                                <label for="username">Customer E-mail</label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend"></div>
                                                                                    <input type="email" class="form-control" name="email" value=""
                                                                                        id="confirm_password">
                                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                                        Password is required.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mb-1">
                                                                                <label for="username">Customer Address</label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend"></div>
                                                                                    <textarea class="form-control" name="address" id="floatingTextarea"></textarea>
                                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                                        Password is required.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                      
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="modal-footer">
                                                              
                                                                <button type="submit" class="btn btn-primary"
                                                                    data-dismiss="modal"
                                                                    style="width:15%;;">Close</button>
                                                                <button type="submit" class="btn btn-primary"
                                                                    style="width:15%;">Save</button>
                                                            </div>
                                                               

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                        <script>
                            function myFunction() {
                                if (!confirm("Are you sure to delete this"))
                                    event.preventDefault();
                            }
                        </script>
                        <script>
                            $(function() {
                                $("#new-item").dataTable();
                            })
                        </script>

                        {{-- Search booking script --}}
                        <script>
                            $(document).ready(function() {
                                $('.searchingBook').select2();
                            });
                        </script>
                        {{-- search booking script end --}}
                        <!-- Delete  confirmation Message -->
                        <script>
                            function myFunction() {
                                if (!confirm("Are you sure to delete this"))
                                    event.preventDefault();
                            }
                        </script>
                        <!-- End delete confirmation message -->

                        <script src="{{ url('assets/js') }}/jquery.min.js"></script>
                        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
                        <script type="text/javascript" charset="utf8"
                            src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

                        {{-- Supplier Edit start --}}

                        <script>
                            $(document).on('click', '#edit_medicine_details', function() {

                                var medicine_id_hidden = $(this).closest('#data').find('#medicine_id_hidden').val();
                                var medicine_name = $(this).closest('#data').find('#medicine_name_1').val();
                                var medicine_brand_name = $(this).closest('#data').find('#medicine_brand_name').val();
                                var medicine_group = $(this).closest('#data').find('#medicine_group').val();
                                var medicicine_category_name = $(this).closest('#data').find('#medicine_category_name1').val();
                                var medicine_generic_name = $(this).closest('#data').find('#medicine_generic_name').val();
                                var medicine_manufactuure_name = $(this).closest('#data').find('#medicine_manufactuure_name').val();
                                var medicine_supplier_name = $(this).closest('#data').find('#medicine_supplier_name').val();
                                var medicine_minimum_level = $(this).closest('#data').find('#medicine_minimum_level').val();
                                var medicine_reorder_level = $(this).closest('#data').find('#medicine_reorder_level').val();
                                var medicine_unit_packing = $(this).closest('#data').find('#medicine_unit_packing').val();
                                var medicine_composition = $(this).closest('#data').find('#medicine_composition').val();
                                var medicine_notes = $(this).closest('#data').find('#medicine_notes').val();
                                var medicine_images = $(this).closest('#data').find('#medicine_images').val();



                                $("#edit_id").val(medicine_id_hidden);
                                $("#edit_medicine_name").val(medicine_name);
                                $("#edit_brand_name").val(medicine_brand_name);
                                $("#edit_medicine_group").val(medicine_group);
                                $("#edit_category_name").val(medicine_category_name);
                                $("#edit_generic_name").val(medicicine_genric_name);
                                $("#edit_manufacture_name").val(medicine_manufactuure_name);
                                $("#edit_supplier_name").val(medicine_supplier_name);
                                $("#edit_minimum_level").val(medicine_minimum_level);
                                $("#edit_reorder").val(medicine_reorder_level);
                                $("#edit_minimum_level").val(medicine_minimum_level);
                                $("#edit_unit_packing").val(medicine_unit_packing);
                                $("#edit_medicine_details1").val(medicine_composition);
                                $("#edit_medicine_note").val(medicine_notes);
                                $("#edit_image").val(medicine_images);
                            });
                        </script>
                        {{-- Supplier Edit End --}}
                    @endsection
