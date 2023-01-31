
@extends('layouts.hmsmain')
@section('content') 
<nav style="font-size:17px;">
  <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> / 
  <a href="#" style="color: #1D1D50;">HR</a> /
  <a href="#" style="color: #1D1D50;">Reviewed Applications</a>
</nav>
<br><br>
<div class="container">
<h4 id="hdtpa"><b>Reviewed Details</b></h4>

    </div>
    <br>


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
	 
            <table class="table"> 
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Qualification</th>
                  <th scope="col">Work Experience</th>
                  <th scope="col">Status</th>
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
                  <td><span class="badge badge-success">Accepted</span></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>John</td>
                  <td>Paul</td>
                  <td>jp@gmail.com</td>
                  <td>98-76543210</td>
                  <td>LLB</td>
                  <td>1</td>
                  <td><span class="badge badge-danger">Rejected</span></td>
                </tr>
              </tbody>
            </table>
           </div>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>

@endsection