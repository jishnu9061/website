@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Client Management</a> /
    <a href="#" style="color: #1D1D50;">Complaint Register Details</a>
</nav>
<br><br>

<html>
    <head>
<style>
.pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}
.pagination {
margin: 0;
}

.pagination li:hover{
cursor: pointer;
}

.header_wrap {
padding:30px 0;
}
.num_rows {
width: 20%;
float:left;
}
.tb_search{
width: 20%;
float:right;
}
.pagination-container {
width: 70%;
float:left;
}

.rows_count {
width: 20%;
float:right;
text-align:right;
color: #999;
}
</style>



</head>

<body>


            <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;">
            <b><u>Complaint Register</u></b> -->
            {{-- heading --}}
            <div class="container">
            <h4 id="hdtpa"><b>Complaint Register Details</b></h4>
            <br>


        <div>
         <button class="btn btn-primary add-btn" Style="width:20%" data-toggle="modal" data-target="#myModal">Add New Complaint</button>
        </div>




    <div class="header_wrap">
      <div class="num_rows">
        <div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
         <select class  ="form-control" aria-label="Page navigation example" name="state" id="maxRows">

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
      <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
      </div>


            <!-- <input type="text"  placeholder="Search for Client" title="Type in a name"> -->




        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
                        <thead>
                            <tr>

                                <!-- <th class="text-center"> No</th> -->
                                <th class="text-center">Date</th>
                                <th class="text-center">Client Type</th>
                                <th class="text-center">Files</th>
                                <th class="text-center">Client Institution</th>
                                <th class="text-center">Contact</th>
                                <th class="text-center">Complaint Description</th>
                                <th class="text-center">Actions</th>
                                <!-- <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $complaint_list as $list)
                            <tr id="data">
                                <!-- <td scope="row" class="text-center">{{$list->id }}</td> -->
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->date}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->client_type}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->files}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->customer_name}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->telephone_no}}</td>
                                <td scope="row" class="text-center">{{$list->complaint_description}}</td>
                                <td scope="row"class="text-center">
                                    <div class="btn-group">
                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" style="border-color:none;"> ⋮ </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" data-toggle=""
                                                data-target=""
                                                href="{{url('view-Complaint',$list->id)}}">View Document
                                            </a>
                                             <a href="#" class="dropdown-item" href="" data-toggle="modal"
                                                data-target="#editModal" data-id="{{$list->id }}" onclick="editcomplaint(this)">Edit complaint</a>
  <a class="dropdown-item" data-toggle="modal"
                                                data-target="#deletecompany"
                                                href="">Delete complaint
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
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
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <h5><b>Add New Complaint:-</b></h5>
                            <!-- Modal Header -->
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form method="post" action="{{url('add-Complaint')}}" id="form">
                                                @csrf
                                                
                                                    <div class="row">
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="date" class="form-control" name="date"
                                                                    id="username" value=""  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Name is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client Type</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                </div>
                                                                <select name="type" id="cars"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                    <option>Select</option>
                                                                    <option>Corporate</option>
                                                                    <option>Individual</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Files</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="files" id="cars"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                    <option>Select</option>
                                                                    <option>File 1</option>
                                                                    <option>File 2</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client Name</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <!-- <input type="text" class="form-control" name="name"
                                                                    id="age" value="" min="0" max="99"> -->
                                                                    <select name="Staff" id="cars"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                    <option>Select</option>
                                                                    <option>client 1</option>
                                                                    <option>client 2</option>
                                                                    <option>client 3</option>
                                                                    <option>client 4</option>
                                                                </select>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Age is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Staff Handling</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="Staff" id="cars"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                    <option>Select</option>
                                                                    <option>Staff 1</option>
                                                                    <option>Staff 2</option>
                                                                    <option>Staff 3</option>
                                                                    <option>Staff 4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Customer Name</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                {{-- <select name="customer_name" id=""   style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                    <option>Select</option>
                                                                    <option>File 1</option>
                                                                    <option>File 2</option>
                                                                </select> --}}
                                                                <input type="text" name="customername" style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                <div class="row">
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Complaint About</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="Complaint" id="cars"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                    <option>Select</option>
                                                                    <option>Person</option>
                                                                    <option>Company</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Telephone No</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="Telephone"
                                                                    id="age" value="" min="0" max="99"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Age is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email Address</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="email" class="form-control" name="email"
                                                                    value="" id="password"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Others</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="Others"
                                                                    value="" id="confirm_password"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Action Plan</label>
                                                            <div class="input-group">
                                                                <textarea class="form-control" id="form7Example7"
                                                                    rows="3" name="plan"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"></textarea>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Action Plan is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Complaint Description</label>
                                                            <div class="input-group">
                                                                <textarea class="form-control" id="form7Example7"
                                                                    rows="3" name="Description"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"></textarea>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Complaint Description is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                  
                                                <div class="row">
                                                   

                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm">

                                                        </div>
                                                        <div class="col-sm">

                                                        </div>
                                                        <div class="col-sm">
                                                            <br>
                                                            <button type="submit" class="btn btn-primary float:right;"
                                                                Style="width:45%;">Submit</button>
                                                            <button type="button" class="btn btn-primary float:left" data-dismiss="modal"
                                                                Style="width:45%;">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <h5><b>Add New Complaint:-</b></h5>
                            <!-- Modal Header -->
                            <!-- Modal body -->
                            <input type="hidden" name="id" id="id">
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form method="post" action="{{url('update-Complaint')}}" id="update_complaint">
                                                @csrf
                                                
                                                    <div class="row">
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="date" class="form-control" name="dateid" id="dateid"
                                                                    id="username" value=""  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Name is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client Type</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                </div>
                                                                <select id="client" name="client"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                    <option>Select</option>
                                                                    <option>Corporate</option>
                                                                    <option>Individual</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Files</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="files" id="files"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                    <option>Select</option>
                                                                    <option>File 1</option>
                                                                    <option>File 2</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                   
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Staff Handling</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="staff" id="staff"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                    <option>Select</option>
                                                                    <option>Staff 1</option>
                                                                    <option>Staff 2</option>
                                                                    <option>Staff 3</option>
                                                                    <option>Staff 4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Customer Name</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                {{-- <select name="customer_name" id=""   style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                    <option>Select</option>
                                                                    <option>File 1</option>
                                                                    <option>File 2</option>
                                                                </select> --}}
                                                                <input type="text" name="customername" id="customername" style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Complaint About</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="complaint" id="complaint"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                    <option>Select</option>
                                                                    <option>Person</option>
                                                                    <option>Company</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                <div class="row">
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Telephone No</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="telephone"
                                                                    id="telephone" value="" min="0" max="99"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Age is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email Address</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="email" class="form-control" name="emailid"
                                                                    value="" id="emailid"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Others</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="othersid"
                                                                    value="" id="othersid"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    
                                                    <div class="" style="width: 50%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Action Plan</label>
                                                            <div class="input-group">
                                                                <textarea class="form-control" id="plan"
                                                                    rows="3" name="plan"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"></textarea>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Action Plan is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 49%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Complaint Description</label>
                                                            <div class="input-group">
                                                                <textarea class="form-control" id="description"
                                                                    rows="3" name="description"  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"></textarea>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Complaint Description is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                  
                                                <div class="row">
                                                   

                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm">

                                                        </div>
                                                        <div class="col-sm">

                                                        </div>
                                                        <div class="col-sm">
                                                            <br>
                                                            <button type="submit" class="btn btn-primary float:right;"
                                                                Style="width:45%;">Submit</button>
                                                            <button type="button" class="btn btn-primary float:left" data-dismiss="modal"
                                                                Style="width:45%;">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="deletecompany" style="">
                    <!-- delete company -->
                    <div class="modal-dialog modal-lg" style="width:30%;">
                        <div class="modal-content">
                            <!---- Modal Header -->
                            <form method="post" id="delete_company" action="#" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" id="deleteuniqueid" value="uniqueid">
                                <div class="modal-header" style="padding:0rem 0rem;">
                                    <div style="padding:1rem 1rem;">
                                        <h4 class="text-centre"><b>Delete <span id="deletcompany_name"></span></b></h4>
                                    </div>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <h6><b><span>Are you sure?</span></b></h6>
                                        </div>
                                        <div class="row">
                                            <div class="" style="width: 30%;">
                                            </div>
                                            <div lass="" style="width: 0%"></div>
                                            <div class="col-sm" style="padding-right: 0px;width: 70%;">
                                                <br>
                                                <button type="submit" class="btn btn-primary float:right;"
                                                    Style="width:45%;background-color:#DD4132;">Yes</button>
                                                <button type="button" class="btn btn-primary float:left"
                                                    Style="width:45%;"data-dismiss="modal">No</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                  <script>
                     function editcomplaint(param) {
            var id = $(param).data('id');
            $.ajax({
                type: 'GET',
                url: 'edit_complaint/' + id,

                success: function(response) {
                    $('#id').val(response.result.id);
                    $('#dateid').val(response.result.date);
                    $('#client').val(response.result.client_type);
                    $('#files').val(response.result.files);
                    $('#customername').val(response.result.customer_name);
                    $('#staff').val(response.result.staff_handling);
                    $('#complaint').val(response.result.complaint_about);
                    $('#telephone').val(response.result.telephone_no);
                    $('#emailid').val(response.result.email);
                    $('#othersid').val(response.result.others);
                    $('#plan').val(response.result.action_plan);
                    $('#description').val(response.result.complaint_description);
                    $('#update_complaint').attr('action', "{{url('update-Complaint')}}" + "/" + id);
                }
            });
        }
        </script>


                <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("new-item");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</body>
</html>



                @endsection
