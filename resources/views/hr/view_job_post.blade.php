<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Job Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
  </head>
  <body>
    <div class="container">
      <h1>View Job Post</h1>
    </div><br>
    <div class="container">
        <div class="row">
          <div class="col">
            <div class="mb-3">
                <label for="job title" class="form-label">Job Title</label>
                <input type="text" class="form-control" id="job title" aria-describedby="jobtitle">
            </div>
            <div class="mb-3">
                <label for="qualification" class="form-label">Qualification</label>
                <input type="text" class="form-control" id="qualification" aria-describedby="qualification">
              </div>
            <div class="mb-3">
                <label for="employment type" class="form-label">Employment Type</label>
                <input type="text" class="form-control" id="employment type" aria-describedby="employmenttype">
            </div>  
            <div class="mb-3">
                <label for="job type" class="form-label">Job Type</label>
                <input type="text" class="form-control" id="job type" aria-describedby="jobtype">
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
                <input type="text" class="form-control" id="job location" aria-describedby="joblocation">
            </div>
              <div class="mb-3">
                <label for="work experience" class="form-label">Work Experience</label>
                <input type="text" class="form-control" id="work experience" aria-describedby="workexperience">
          </div>
            <div class="mb-3">
                <label for="job nature" class="form-label">Job Nature</label>
                <input type="text" class="form-control" id="job nature" aria-describedby="jobnature">
          </div>
          <div class="mb-3">
            <label for="salary range" class="form-label">Salary Range</label>
            <input type="money" class="form-control" id="salary range" aria-describedby="salaryrange">
        </div>
        <div class="mb-3">
            <label for="ending date" class="form-label">Ending Date to Apply</label>
            <input type="date" class="form-control" id="ending date" aria-describedby="endingdate">
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
     

    <!-- Buttons -->
    <div class="container">
      <div class="text-center">
        <button type="submit" class="btn btn-primary" style="width: 100px;">Apply</button>
        <span class="p-3"></span>
        <button type="button" class="btn btn-secondary" style="width: 100px;">Cancel</button>
      </div>    
     </div>     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  </body>
</html>