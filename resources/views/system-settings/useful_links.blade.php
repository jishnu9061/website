
@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
  <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
  <a href="#" style="color: #1D1D50;">System Setup</a> /
  <a href="#" style="color: #1D1D50;">Useful Links</a>
</nav>
<br><br>
<html>
<div class="container">
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
    </form>
    <!-- <h2 >Court List</h2><br>
    <a href="{{url('add_court')}}"  class="btn btn-primary"style="color:white;background-color:rgb(13, 1, 56);" >Add Court</a><br><br> -->
    <!-- <h2 style="text-align:center; text-shadow: 2px 1px;">Useful Link</h2>
       
        <hr class="mb-4">. -->
        
        {{-- heading --}} 
        <div class="container">
    <h4 id="hdtpa"><b>Useful Link</b></h4>
    
   
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
  

       
        
    <!-- <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Useful Links</h3> -->
    <!-- <div class="container"> -->
     
    <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
	
                  <thead>
                        <tr>
                        <!-- <th class="text-center" >*</th> -->
                        <th class="text-center">Link</th>
                        <th class="text-center" >Action</th>
                        
                    </tr>
<thead>
    <tbody>
                    <tr>
                        <!-- <td  class="text-center" ></td> -->
                        <td  class="text-center" ></td>
                        <td  class="text-center"></td>
                    </tr>

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

</form> 
        </body>
        </div>
</html>
  @endsection
      














   