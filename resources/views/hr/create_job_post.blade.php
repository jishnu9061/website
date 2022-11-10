@extends('layouts.hmsmain')
@section('content') 
<div class="container">
<h4 id="hdtpa"><b>Create a Job Post</b></h4>
    <br><br>
    </div>
    <br>

    
    <div class="container">
        <div class="row">
          <div class="col">
            <div class="mb-3">
            <form method="post" action="{{url('create_job_post')}}" id="form">
                @csrf
                <label for="job title" class="form-label">Job Title</label>
                <select class="form-select" name="job_title">
                    <option selected>---select---</option>
                    <option value="junior Advocate">junior Advocate</option>
                    <option value="Mid Senior Advocate">Mid Senior Advocate</option>
                    <option value="Senior Advocate">Senior Advocate</option>
                  </select>
            </div>
            <div class="mb-3">
                <label for="qualification" class="form-label">Qualification</label>
                <select class="form-select" name="qualification">
                    <option selected>---select---</option>
                    <option value="LLB">LLB</option>
                    <option value="LLM">LLM</option>
                  </select>
              </div>
            <div class="mb-3">
                <label for="employment type" class="form-label">Employment Type</label>
                <select class="form-select" name="employment_type">
                    <option selected>---select---</option>
                    <option value="Full-Time">Full-Time</option>
                    <option value="Part-Time">Part-Time</option>
                  </select>
            </div>  
            <div class="mb-3">
                <label for="job type" class="form-label">Job Type</label>
                <select class="form-select" name="job_type">
                    <option selected>---select---</option>
                    <option value="Permanent">Permanent</option>
                    <option value="Temporary">Temporary</option>
                  </select>
            </div>  
            <div class="mb-3">
                <label for="starting date" class="form-label">Starting Date to Apply</label>
                <input type="date" class="form-control" name="start_date" aria-describedby="startingdate">
            </div>
         </div>
            
        <!-- column-2 -->
          
          <div class="col">
            <div class="mb-3">
                <label for="job location" class="form-label">Job Location</label>
                <select class="form-select" name="job_location">
                    <option selected>---select---</option>
                    <option value="Nairobi">Nairobi</option>
                    <option value="Kenya">Kenya</option>
                  </select>
            </div>
              <div class="mb-3">
                <label for="work experience" class="form-label">Work Experience</label>
                <select class="form-select" name="work_experience">
                    <option selected>---select---</option>
                    <option value="0-1">0-1</option>
                    <option value="1-2">1-2</option>
                    <option value="2-3">2-3</option>
                    <option value="3-4">3-4</option>
                    <option value="4-5">4-5</option>
                  </select>
          </div>
            <div class="mb-3">
                <label for="job nature" class="form-label">Job Nature</label>
                <select class="form-select" name="job_nature">
                    <option selected>---select---</option>
                    <option value="Onsite">Onsite</option>
                    <option value="Hybrid">Hybrid</option>
                    <option value="Remote">Remote</option>
                  </select>
          </div>
          <div class="mb-3">
            <label for="salary range" class="form-label">Salary Range</label>
            <input type="money" class="form-control" name="salary_range" aria-describedby="salaryrange">
        </div>
        <div class="mb-3">
            <label for="ending date" class="form-label">Ending Date to Apply</label>
            <input type="date" class="form-control" name="end_date" aria-describedby="endingdate">
          </div> 
        </div>
        

     <!-- Job Description -->
        <div class="mb-3">
            <label for="job description" class="form-label">Job Description</label>
            <textarea class="form-control" name="job_description" rows="3"></textarea>
          </div>

    <!-- Responsibilities -->
    <div class="mb-3">
        <label for="job responsibilities" class="form-label">Job Responsibilities</label>
        <textarea class="form-control" name="job_responsibilities" rows="3"></textarea>
      </div>
</div>
     

    <!-- Buttons -->
    
    <div class="container">
      <div class="text-center">
        <button type="submit" class="btn btn-primary" style="width: 100px;">Submit</button>
        <span class="p-3"></span>
        <button type="button" class="btn btn-primary" style="width: 100px;">Cancel</button>
      </div>    
     </div>     

</form>


   
               
             

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>

@endsection