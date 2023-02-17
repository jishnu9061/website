
@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
  <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
  <a href="#" style="color: #1D1D50;">System Setup</a> /
  <a href="{{url('other_confgn')}}" style="color: #1D1D50;">Other Configurations</a> /
  <a href="#" style="color: #1D1D50;">Notifications</a>
</nav>
<br><br>
<html>
  <div class="container">
   <head>
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

   </head>
   <body>
   {{-- heading --}}
  {{-- <h4 id="hdtpa"><b>WakiliCMS Notification Config</b></h4> --}}
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
            <b style="font-size:18px;">WakiliCMS Notification Config</b>
        </h4>
    </div>
    <div class="col-sm-4" style="">
    </div>
</div>
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
<!-- <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>WakiliCMS Notification Config</u></b></span></button><br>
           
     </div>
            <br>
            <br> -->
    <form>
    <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
	
<thead>
                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center" >Item</th>
                        <th class="text-center" >Email Notification</th>
                        <th class="text-center" >SMS Notification</th>
                    </tr>
             
</thead>
<tbody>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center">  <input type="checkbox" id="emailnotfn" name="emailnotfn"></td>
                        <td class="text-center">  <input type="checkbox" id="smsnotfn" name="smsnotfn" ></td>
                     </tr>
</tbody>
                    </table>
</div>
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
                    <br>
                    <div class="class"style="text-align:center;">
                    <button type="submit" class="btn btn-primary float:right;" Style="width:10%;">Update</button>
</div > 
</div >   
</form>
        </body>
        </div >   
</html>

  @endsection
      














   