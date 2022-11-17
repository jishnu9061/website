@extends('layouts.hmsmain')
@section('content') 
<div class="container">
<h4 id="hdtpa"><b>View job Application</b></h4>
  
    </div>
    <br>

   
      <!-- <div class="shadow-sm auto bg-body rounded"> 
     <nav class="navbar bg-light">
      <a class="navbar-brand">Applications</a>
        <button class="btn btn-outline-success" type="button">View All</button> 
      </nav>
      </div>
      <br> -->
<!--       
  <div class="container-fluid">
    <nav class="navbar bg-light" style="height:50%";>
     <a class="navbar-brand"><b>Senior Advocate</b> Job Applications</a>
     <button class="btn btn-outline-success" type="button">View All</button> 
    </nav>
  </div> -->


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
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Qualification</th>
          <th scope="col">Work Experience</th>
          <th scope="col">Action</th>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>mark@gmail.com</td>
          <td>98-34567891</td>
          <td>LLB</td>
          <td>5</td>
          <td> <a href="{{url('view_job_appl_details_1')}}"class="btn btn-primary" type="button">Details</td>
          <!-- <td><input class="btn btn-primary" type="button" value="Details" data-toggle="modal" data-target="#myModal"></td> -->
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>John</td>
          <td>Paul</td>
          <td>jp@gmail.com</td>
          <td>98-76543210</td>
          <td>LLB</td>
          <td>1</td>
          <td> <a href="{{url('view_job_appl_details_2')}}"class="btn btn-primary" type="button">Details</td>
          <!-- <td><input class="btn btn-primary" type="button" value="Details" data-toggle="modal" data-target="#Modal2"></td> -->
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








   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>

@endsection