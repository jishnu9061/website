
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
   
        <div class="col-sm">




    <div class="container">
    <h4 id="hdtpa"><b>Over Time</b></h4>
    <br>
 
      
              
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
    
	

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <br>
                    <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
	
                            <thead>

                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Task</th>
                                    <th class="text-center">View</th>
                                  
                                </tr>
                            </thead>
                            <tbody>

                              
                                
                                <tr>
                                  
                                    <td scope="row" class="text-center"></td>
                                    <td scope="row" class="text-center"></td>
                                    <td scope="row" class="text-center"></td>
                                    <td scope="row" class="text-center"><a href="{{ url('view_over_time') }}"><i
                                                style="color:black;" class="far fa-eye" aria-hidden="true"></i>
                                            <a onClick="return myFunction();" href=""></a></td>
                                </tr>
                             
                            </tbody>
                        </table>
                        <br>
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

                

                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h2 class="text-center"><b>Add Instruction</b></h2>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <form method="post" action="{{ url('file_new_instruction') }}"
                                        enctype="multipart/form-data">
                                        @csrf



                                        <div class="row">



                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username"> Date(to)</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <input type="date" class="form-control" name="date"
                                                            id="username" required>
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Number is required.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Client</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <select name="client" id="cars">
                                                            <option>select</option>
                                                            <option>demo 2</option>
                                                            <option>demo 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">File</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <select name="file" id="cars">
                                                            <option>select</option>
                                                            <option>demo 2</option>
                                                            <option>demo 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <br>
                                        <div class="row">


                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Instruction Type</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <select name="instruction" id="cars">
                                                            <option>select</option>
                                                            <option>demo 2</option>
                                                            <option>demo 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Instruction Category</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <select name="category" id="cars">
                                                            <option>select</option>
                                                            <option>demo 2</option>
                                                            <option>demo 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Receiver</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <select name="receiver" id="cars">
                                                            <option>select</option>
                                                            <option>demo 2</option>
                                                            <option>demo 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="test" style="height:20px;"></div>
                              



                            <div class="row">


                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Currency</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="currency" id="cars">
                                                <option>select</option>
                                                <option>demo 2</option>
                                                <option>demo 3</option>



                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Exchange Rate</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="exchange" id="age">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Incorporation is required
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Turn-Around Time</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="turn_around" id="cars">
                                                <option>select</option>
                                                <option>demo 2</option>
                                                <option>demo 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="username">Priority</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="priority" id="cars">
                                                <option>select</option>
                                                <option>demo 2</option>
                                                <option>demo 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="username">Amount</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="amount" id="age">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Incorporation is required
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-1">
                                        <label for="username">Details</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" id="form7Example7" rows="3" name="details"></textarea>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <hr class="mb-4">

                            <div class="row">


                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Send Notification To</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="send_notification" id="cars">
                                                <option>select</option>
                                                <option>demo 2</option>
                                                <option>demo 3</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                   
            <br>
            <!-- <div class="container">
                    <div class="row">
                      <div class="col-sm">
                      </div>
                      <div class="col-sm">
                      </div>
                      <div class="col-sm">
                        <button type="submit" class="btn btn-primary float:right" style="width:45%">Save</button>
                        <button type="submit" class="btn btn-primary float:left"style="width:45%">Close</button>
                      </div>
                    </div>
                  </div>
</form> -->
            <div class="row">
                <div class="col-sm">

                </div>
                <div class="col-sm">

                </div>
                <div class="col-sm">
                    <br>
                    <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                    <button type="submit" class="btn btn-primary float:left" Style="width:45%;">Cancel</button>
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

</body>
</html>
@endsection
