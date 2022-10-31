
@extends('layouts.hmsmain')
@section('content')
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
  <h4 id="hdtpa"><b>Staff Details</b></h4>
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
<div class="table-responsive">
<table class="table table-striped table-class" id= "table-id">
  <thead>
    <tr>
        <!-- <th>Sl No</th> -->
        <th>User Id</th>
        <th>Name</th>
        <th>Email</th>
         <th>Phone</th> 
        <th>Action</th>

    </tr>
</thead>
<tbody>
@foreach($allusers as $alluser)
<tr>
  <input id="t_id" type="hidden" value="{{$alluser->id}}">
  <td>{{$alluser->uniqueid}}</td>
  <td>{{$alluser->name}}</td>
  <td>{{$alluser->email}}</td>
  <td>{{$alluser->phone}}</td>
  <td><a href="{{url('managestaff'.$alluser->uniqueid)}}" style="color:rgb(13, 1, 56);"><i class="fa fa-edit"></i></a></td>
  @endforeach 
</tr>
 <tbody>
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
    <div class="rows_count">Showing 11 to 20 of 91</div>

 <!-- 		End of Container -->


  <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">



                                    <h5 class="modal-title bb" id="myModalLabel1">Edit Staff</h5>



                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="{{url('editstafff')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">

                                         <div class="card-body">


                        <div class="form-group mb-3">
                            <label>Name</label>
                         <input type="hidden" class="form-control" id="Id" name="Id" placeholder="" >
			                <input type="text" class="form-control" id="Name" name="Name" placeholder="" >
                        </div>
                        <div class="form-group mb-3">
                            <label>Role</label>
			                <input type="text" class="form-control" id="Role" name="Role" placeholder="" >
                        </div>
                        <div class="form-group mb-3">
                            <label>Phone</label>
			                <input type="text" class="form-control" id="Phone" name="Phone" placeholder="" >
                        </div>
                        <div class="form-group mb-3">
                            <label>Email</label>
			                <input type="text" class="form-control"  id="Email" name="Email" placeholder="" >
                        </div>
                        <div class="form-group mb-3">
                            <label>Salary</label>
			                <input type="text" class="form-control" id="Salary" name="Salary" placeholder="">
                        </div>
                        <div class="form-group mb-3">
                            <label>Experience</label>
			                <input type="text" class="form-control" id="Experience" name="Experience" placeholder="" >
                        </div>
                        <div class="form-group mb-3">
                            <label>Department</label>
			                <input type="text" class="form-control" id="Department" name="Department" placeholder="" >
                        </div>
                        <div class="form-group mb-3">
                            <label>Dob</label>
			                <input type="text" class="form-control" id="Dob" name="Dob" placeholder="" >
                        </div>
                 </div>
                        </div>


                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" >Save</button>
                                        <button type="button" class="btn btn-alert" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                      </form>


                                </div>
                            </div>
                        </div>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script>
  $(function(){
    $("#allpatients").dataTable();
  })
  </script>
  <script>
        $(document).on('click','#stafedit',function(){
    //var itemvalue = $(this).val();
    var t_id = $(this).closest('#data').find('#t_id').val();
   var t_name = $(this).closest('#data').find('#t_name').text();
   var t_role= $(this).closest('#data').find('#t_role').text();
   var t_department = $(this).closest('#data').find('#t_department').text();
   var t_email = $(this).closest('#data').find('#t_email').text();
   var t_phone = $(this).closest('#data').find('#t_phone').text();
   var t_sex = $(this).closest('#data').find('#t_sex').text();
   var t_dob = $(this).closest('#data').find('#t_dob').text();


   $("#Id").val(t_id);
    $("#Name").val(t_name);
    $("#Role").val(t_role);
    $('#Phone').val(t_phone);
    $("#Email").val(t_email);
    $("#Salary").val(driver_n);
    $("#Experience").val(driver_n);
    $("#Department").val(t_department);
    $("#Sex").val(t_sex);
    $("#Dob").val(t_dob);


  });
</script>
@endsection
