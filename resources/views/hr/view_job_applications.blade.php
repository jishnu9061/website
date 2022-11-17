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
      
  <div class="container-fluid">
    <nav class="navbar bg-light" style="height:50%";>
     <a class="navbar-brand"><b>Senior Advocate</b> Job Applications</a>
     <button class="btn btn-outline-success" type="button">View All</button> 
    </nav>
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
          <td>1234567891</td>
          <td>LLB</td>
          <td>5</td>
          <td><input class="btn btn-primary" type="button" value="Details" data-toggle="modal" data-target="#myModal"></td>
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
   <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header" >
                                        <h2 class="text-centre"><b>View Application Details</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" >
                                        <div class="container">
                                            <form method="post" action="{{url('add_letter_category')}}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
@csrf
<form>  
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname">
            </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname">
            </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email">
            </div>
      
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone">
            </div>

        <div class="mb-3">
                <label for="qualification" class="form-label">Qualification</label>
                <input type="text" class="form-control" id="qualification">
                </div>
    
        <div class="mb-3">
                <label for="work experience" class="form-label">Work Experience</label>
                <input type="text" class="form-control" id="work experience">
                </div>
      
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload CV</label>
            <input class="form-control" type="file" id="formFile">
            <div class="form-text">Select CV file (TXT, PDF or  Word DOC)</div>
            </div>

        </form>

        <div class="text-center">
            <button type="submit" class="btn btn-success">Accepted</button>
            <span class="p-3"></span>
            <button type="submit" class="btn btn-danger">Rejected</button>
        </div>



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>

@endsection