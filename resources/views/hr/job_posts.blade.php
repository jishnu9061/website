
@extends('layouts.hmsmain')
@section('content') 
<div class="container">
<h4 id="hdtpa"><b>Job Posts</b></h4>
    <br><br>
    </div>
    <br>

      <div class="container">
         <nav class="navbar navbar-expand-lg bg-light">
          <span class="p-3"></span>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder=" Job Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </nav>
    <br>
    <br>

  <div class="main-container">
      
          <div class="container">
            <div class="shadow auto bg-body rounded">  
              <img src="assets/images/Logo cra.png" alt="CRA" id="logo" class="float-end" width="80">
            <div class="p-3 mb-2 bg-light text-dark">
              
            <h3><b>Senior Advocate</b></h3>
            <h5>CRA Advocate Team</h5>
            <br>
            <p i class="fa fa-map-marker"></i><span class="p-1"></span>Kenya </p><br>
            <p i class="fa fa-graduation-cap"></i><span class="p-1"></span>LLB </p><br>
            <p i class="fa fa-briefcase"></i><span class="p-1"></span>4-5 Years</p><br>
            <p i class="fa fa-history"></i><span class="p-1"></span>Permanent</p>
            <br><br>
            <button type="button" class="btn btn-primary">Share<span class="p-1"></span><i class="fa fa-share-alt"></i></button>
            <span class="p-2"></span>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">View Job<span class="p-1"></span><i class="fa fa-arrow-right"></i></button>
           </div>
           </div>
          </div>
        
       
          <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header" >
                                        <h2 class="text-centre"><b>View Job</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" >
                                        <div class="container">
                                            <form method="post" action="{{url('add_letter_category')}}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
@csrf
     
<div class="container">
        <div class="row">
          <div class="col">
            <div class="mb-3">
                <label for="job title" class="form-label">Job Title</label>
                <input type="text" class="form-control" id="job title">
            </div>
            <div class="mb-3">
                <label for="qualification" class="form-label">Qualification</label>
                <input type="text" class="form-control" id="qualification">
                <!-- <select class="form-select" id="qualification">
                    <option selected>---select---</option> 
                     <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select> -->
              </div>
            <div class="mb-3">
                <label for="employment type" class="form-label">Employment Type</label>
                <input type="text" class="form-control" id="employment type">
                <!-- <select class="form-select" id="employment type">
                    <option selected>---select---</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select> -->
            </div>  
            <div class="mb-3">
                <label for="job type" class="form-label">Job Type</label>
                <input type="text" class="form-control" id="job type">
                <!-- <select class="form-select" id="job type">
                    <option selected>---select---</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select> -->
            </div>  
            <div class="mb-3">
                <label for="starting date" class="form-label">Starting Date to Apply</label>
                <input type="date" class="form-control" id="starting date" aria-describedby="startingdate">
            </div>
         </div>
            
        <!-- column-2 -->
          
          <div class="col">
            <div class="mb-3">
                <label for="job location" class="form-label">Job Location</label>
                <input type="text" class="form-control" id="job location">
            </div>
              <div class="mb-3">
                <label for="work experience" class="form-label">Work Experience</label>
                <input type="text" class="form-control" id="work experience">
          </div>
            <div class="mb-3">
                <label for="job nature" class="form-label">Job Nature</label>
                <input type="text" class="form-control" id="job nature">
                <!-- <select class="form-select" id="job nature">
                    <option selected>---select---</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select> -->
          </div>
          <div class="mb-3">
            <label for="salary range" class="form-label">Salary Range</label>
            <input type="money" class="form-control" id="salary range">
        </div>
        <div class="mb-3">
            <label for="ending date" class="form-label">Ending Date to Apply</label>
            <input type="date" class="form-control" id="ending date">
          </div> 
        </div>
        

     <!-- Job Description -->
        <div class="mb-3">
            <label for="job description" class="form-label">Job Description</label>
            <textarea class="form-control" id="job description" rows="3"></textarea>
          </div>

    <!-- Responsibilities -->
    <div class="mb-3">
        <label for="job responsibilities" class="form-label">Job Responsibilities</label>
        <textarea class="form-control" id="job responsibilities" rows="3"></textarea>
      </div>
</div>
<br> 
<button type="button" class="btn btn-primary" style="width: 100px;">Delete</button>
    
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>

@endsection

  
    
