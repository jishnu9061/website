
@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
  <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
  <a href="#" style="color: #1D1D50;">System Setup</a> /
  <a href="#" style="color: #1D1D50;">Menu Access Configuration</a>
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
   
   
    <!-- <h2 >Court List</h2><br>
    <a href="{{url('add_court')}}"  class="btn btn-primary"style="color:white;background-color:rgb(13, 1, 56);" >Add Court</a><br><br> -->
    <!-- <h2 style="text-align:center; text-shadow: 2px 1px;">Menu Access Configuration</h2>
 <hr class="mb-4">. -->
 
 {{-- heading --}}
 <div class="container">
    {{-- <h4 id="hdtpa"><b> Menu Access Configuration </b></h4> --}}
    <div class="row" style="height:50px;">
      <div class="col-sm-4" style="padding-top:5px;">
      </div>
      <div class="col-sm-4" style="">
          <h4
              style="border: 0.5px solid #f1d9b0;
              border-radius: 25px;
              background-color: #f1d9b0;
              padding: 2%;
              width: 100%;
              height:90%;
              text-align:center;
              box-shadow: inset 0 0 3px #d3d0ca;
              opacity: .9;">
              <b style="font-size:18px;">Menu Access Configuration</b>
          </h4>
      </div>
      <div class="col-sm-4" style="">
      </div>
  </div>
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
    
<form>
<h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">WakiliCMS Menu Configuration</h3>
<div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
    <thead>          
                        <tr>
                        <!-- <th class="text-center" >*</th> -->
                        <th class="text-center" >Description</th>
                        <th class="text-center" >ADM</th>
                        <th class="text-center">PTN</th>
                        <th class="text-center" >ADV</th>
                        <th class="text-center" >ACC</th>
                        <th class="text-center">BDM</th>
                        <th class="text-center" >HRM</th>
                        <th class="text-center">SEC</th>
                        <th class="text-center" >PPL</th>
                        <th class="text-center" >INT</th>
                        <th class="text-center">CLK</th>
                        <th class="text-center" >LA</th>
                        <th class="text-center">SADV</th>
                        <th class="text-center" >ASSADV</th>
                        <th class="text-center" >RCPT</th>
                        <th class="text-center">SPT</th>
                        <th class="text-center" >PA</th>
                        <th class="text-center">ICT</th>
                        <th class="text-center" >OA</th>
                       
                 </tr>
                </thead>
                <tbody>
            
                    <tr>
                        <!-- <td  class="text-center" >1</td> -->
                        <td class="text-center" ></td>
                        <td  class="text-center" ></td>
                        <td class="text-center" ></td>
                        <td  class="text-center" ></td>
                        <td class="text-center" ></td>
                        <td  class="text-center"></td>
                        <td class="text-center" ></td>
                        <td  class="text-center" ></td>
                        <td class="text-center" ></td>
                        <td  class="text-center" ></td>
                        <td class="text-center" ></td>
                        <td  class="text-center" ></td>
                        <td class="text-center"></td>
                        <td class="text-center" ></td>
                        <td class="text-center" ></td>
                        <td  class="text-center"></td>
                        <td class="text-center" ></td>
                        <td class="text-center" ></td>
                        <td class="text-center" ></td>
                        </tr>
                   </tbody>  
                    </table>
</div>
                    <!-- <input type="submit"value="Update" name="submit"style="background-color:rgb(13, 1, 56);color: white;margin-left:50%;">  -->
                </form><br>
               	{{-- <!--		Start Pagination -->
  <div class='pagination-container'>
      <nav>
        <ul class="pagination">
         <!--	Here the JS Function Will Add the Rows -->
        </ul>
      </nav>
    </div>
    <div class="rows_count">Showing 11 to 20 of 100</div>

 <!-- 		End of Container -->
                --}}
                <!--		Start Pagination -->
                <div class='pagination-container'>
                    <nav>
                        <ul class="pagination">
                            <li data-page="prev">
                                <span>
                                    < <span class="sr-only">(current)
                                </span></span>
                            </li>
                            <li data-page="next" id="prev">
                                <span> > <span class="sr-only">(current)</span></span>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="rows_count"></div>
</div>
                <!-- 		End of Container -->



<div class="row">   
                        
                        <div class="col-sm">
    
                            <button type="submit" class="btn btn-primary float:right;" Style="width:40%;">Update</button>
                        
                            <br>
                        </div>
                    
        </div>

</div>
<br>
</div>  
</body>

</html>
<br>
  @endsection
      
