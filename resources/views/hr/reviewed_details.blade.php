
@extends('layouts.hmsmain')
@section('content') 
<div class="container">
<h4 id="hdtpa"><b>Reviewed Details</b></h4>
    <br><br>
    </div>
    <br>


    <div class="container">
        <div class="shadow-sm auto bg-body rounded"> 
            <nav class="navbar bg-light">
             <a class="navbar-brand">Reviewed Applications</a>
               <button class="btn btn-outline-success" type="button">View All</button> 
            </nav>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="table-responsive">  
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
                  <td>1234567891</td>
                  <td>LLB</td>
                  <td>5</td>
                  <td><span class="badge badge-success">Accepted</span></td>
                </tr>

              </tbody>
            </table>
           </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>

@endsection