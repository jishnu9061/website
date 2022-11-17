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
    
      
            <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;">
            <b><u>Complaint Register</u></b> -->
            {{-- heading --}}
            <div class="container">
            <h4 id="hdtpa"><b>Complaint Register</b></h4>
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
                                <th class="text-center">Client</th>
                                <th class="text-center">Files</th>
                                <th class="text-center">Customer Institution</th>
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
                                <td class="text-center"><a href="{{url('view-Complaint',$list->id)}}"><i style="color:black;"
                                            class="fa fa-eye" aria-hidden="true"></i></a>
                                            <span class="m-1"></span>
                                <a href="{{url('edit_complaint',$list->id )}}"><i style="color:black;"
                                            class="fa fa-edit" aria-hidden="true"></i>
                                            <span class="m-1"></span>
                                        <a onClick="return myFunction();"
                                            href="{{url('delete-Complaint',$list->id)}}" style="color:black;"><i
                                                class="fas fa-trash-alt"></i></a>
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
                                <h2 class="text-center"><b>Add New Complaint</b></h2>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form method="post" action="{{url('add-Complaint')}}" id="form">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Date</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="date" class="form-control" name="date"
                                                                    id="username" value="">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Name is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Client Type</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                </div>
                                                                <select name="type" id="cars">
                                                                    <option>Select</option>
                                                                    <option>Corporate</option>
                                                                    <option>Individual</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Files</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="files" id="cars">
                                                                    <option>Select</option>
                                                                    <option>File 1</option>
                                                                    <option>File 2</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Customer Name</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="name"
                                                                    id="age" value="" min="0" max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Age is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Staff Handling</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="Staff" id="cars">
                                                                    <option>Select</option>
                                                                    <option>Staff 1</option>
                                                                    <option>Staff 2</option>
                                                                    <option>Staff 3</option>
                                                                    <option>Staff 4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Complaint About</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="Complaint" id="cars">
                                                                    <option>Select</option>
                                                                    <option>Person</option>
                                                                    <option>Company</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Telephone No</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="Telephone"
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
                                                            <label for="username">Others</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="Others"
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
                                                    <div class="col-md-6">
                                                        <div class="mb-1">
                                                            <label for="username">Action Plan</label>
                                                            <div class="input-group">
                                                                <textarea class="form-control" id="form7Example7"
                                                                    rows="3" name="plan"></textarea>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Action Plan is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-1">
                                                            <label for="username">Complaint Description</label>
                                                            <div class="input-group">
                                                                <textarea class="form-control" id="form7Example7"
                                                                    rows="3" name="Description"></textarea>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Complaint Description is required.
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

                <!-- The Modal -->


                <!-- Modal body -->



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