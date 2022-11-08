@extends('layouts.hmsmain')
@section('content')
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
    <div class="container">
        <div>
            <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;">
            <b><u>Individual Client List</u></b> -->
            {{-- heading --}}
            <h4 id="hdtpa"><b>Individual Client List</b></h4>
            <br>
        </div>




        
        <button class="btn btn-primary add-btn" data-toggle="modal" data-target="#myModal">Add Client</button></a>

        <div class="container">
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
    </div>


        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
               <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
	
                        <thead>
                            <tr>
                                <th class="text-center"> No</th>
                                <th class="text-center"> Client No</th>
                                <th class="text-center">Client Name</th>
                                <th class="text-center">Email Address</th>
                                <th class="text-center">Services Offered</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Add Documents</th>
                                <th class="text-center">VIew</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $client_list as $list_client)
                            <tr id="data">
                                <td scope="row" class="text-center">{{$list_client->individual_id }}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list_client->client_number}}
                                </td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list_client->client_name}}
                                </td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list_client->email_address}}
                                </td>
                                <td scope="row" class="text-center" id="medicine_name_1"></td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list_client->client_type}}
                                </td>
                                <td scope="row" class="text-center"><a href="{{url('view-client')}}">
                                        <a href="{{url('create-document')}}"><button style="width:90%; ">Add
                                                Documents</button></a></td>
                                <td><a href="{{url('show-client',$list_client->individual_id )}}"><i style="color:black;"
                                            class="fa fa-eye" aria-hidden="true"></i></td></a>
                                <td><a href="{{url('edit_person',$list_client->individual_id)}}"><i style="color:black;"
                                            class="fa fa-edit" aria-hidden="true"></i></td>
                                <td>
                                <a onClick="return myFunction();" href="{{url('delete-client',$list_client->individual_id)}}"
                                        style="color:black;"><i class="fas fa-trash-alt"></i></a>
                                </td>
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

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h2 class="text-center"><b>Add Individual Client</b></h2>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" action="{{url('add_newclient')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Client Number</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="number"
                                                                id="username" value="">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Name is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Client_type</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <select name="type" id="cars">
                                                                <option value="Individual">Individual</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Citizen Status</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <select name="citizen" id="cars">
                                                                <option value="Residensial">Residensial</option>
                                                                <option value="Non Residensial">Non Residensial</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Certificate Of Incorporation</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="incorporation"
                                                                id="age" value="" min="0" max="99">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Age is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Country</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <select name="country" id="cars">
                                                                <option value="Kenya">Kenya</option>
                                                                <option value="South Africa">South Africa</option>
                                                                <option value="India">India</option>
                                                                <option value="America">America</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Telephone No</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="telephone"
                                                                value="" id="confirm_password">
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
                                                        <label for="username">Fax No</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="faxno"
                                                                id="age" value="" min="0" max="99">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Age is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Email Address</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="email" class="form-control" name="email"
                                                                value="" id="password">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Password is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Web Site</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="website"
                                                                value="" id="confirm_password">
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
                                                        <label for="username">Brought In By</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            </div>
                                                            <select name="brought">
                                                                <option value="Agent">Agent</option>
                                                                <option value="Staff">Staff</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Status Reporting Day</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <select name="status" id="cars">
                                                                <option value="Monday">Monday</option>
                                                                <option value="Tuesday">Tuesday</option>
                                                                <option value="Wednesday">Wednesday</option>
                                                                <option value="Thursday">Thursday</option>
                                                                <option value="Friday">Friday</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Client Source</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <select name="source" id="cars">
                                                                <option value="Excisting Client">Excisting Client
                                                                </option>
                                                                <option value="Online">Online</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Client Source Narration</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="narration"
                                                                value="" id="confirm_password">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Password is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Client Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="name" value=""
                                                                id="confirm_password">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Password is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Client Industry</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <select name="industry" id="cars">
                                                                <option value="Commerce">Commerce</option>
                                                                <option value="Construction">Constrḍuction</option>
                                                                <option value="Education">Education</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Pin No</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="pin" id="age"
                                                                value="" min="0" max="99">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Age is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Postal Address</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="address"
                                                                value="" id="password">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Password is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Postal Code</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="code" value=""
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
                                                        <label for="username">Town</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="town" id="age"
                                                                value="" min="0" max="99">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Age is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Physical Address</label>
                                                        <div class="input-group">
                                                            <textarea class="form-control" id="form7Example7" rows="3"
                                                                name="physical"></textarea>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Postal Address is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Notes</label>
                                                        <div class="input-group">
                                                            <textarea class="form-control" id="form7Example7" rows="3"
                                                                name="notes"></textarea>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Postal Address is required.
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
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary"
                                                        style="width:15%;background-color:white;color:black">save</button>
                                                    <button type="button" class="btn btn-primary"
                                                        style="width:15%;background-color:white;color:black">Cancel</button>
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



            <!-- The Modal -->


            <!-- Modal body -->



            <script src="{{ url('assets/js') }}/jquery.min.js"></script>
            <script type="text/javascript" charset="utf8"
                src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
            <script type="text/javascript" charset="utf8"
                src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js">
            </script>


            @endsection