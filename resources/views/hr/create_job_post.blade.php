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
                <label for="job title" class="form-label">Job Title</label>
                <input type="text" class="form-control" id="job title" aria-describedby="jobtitle">
            </div>
            <div class="mb-3">
                <label for="qualification" class="form-label">Qualification</label>
                <select class="form-select" id="qualification">
                    <option selected>---select---</option>
                    <!-- <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option> -->
                  </select>
              </div>
            <div class="mb-3">
                <label for="employment type" class="form-label">Employment Type</label>
                <select class="form-select" id="employment type">
                    <option selected>---select---</option>
                    <!-- <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option> -->
                  </select>
            </div>  
            <div class="mb-3">
                <label for="job type" class="form-label">Job Type</label>
                <select class="form-select" id="job type">
                    <option selected>---select---</option>
                    <!-- <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option> -->
                  </select>
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
                <select class="form-select" id="job location">
                    <option selected>---select---</option>
                    <!-- <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option> -->
                  </select>
            </div>
              <div class="mb-3">
                <label for="work experience" class="form-label">Work Experience</label>
                <input type="text" class="form-control" id="work experience" aria-describedby="workexperience">
          </div>
            <div class="mb-3">
                <label for="job nature" class="form-label">Job Nature</label>
                <select class="form-select" id="job nature">
                    <option selected>---select---</option>
                    <!-- <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option> -->
                  </select>
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
        <button type="submit" class="btn btn-primary" style="width: 100px;">Submit</button>
        <span class="p-3"></span>
        <button type="button" class="btn btn-primary" style="width: 100px;">Cancel</button>
      </div>    
     </div>     




    <!-- <div class="row">
        <div class="col-md-12">
            <form method="post" action="" id="form"> -->
                @csrf
               
                <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">advocate</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="code" id="cars">
                                <option>---select---</option>
                                    <option>Alekeen W Benson</option>
                                    <option>Corrine Auma</option>
                                    <option>Gichui Kirogo</option>
                                    <option>Hillary Wamunyolo Casmir</option>
                                    <option>Princess Caroline</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Year</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="code" id="cars">
                                <option>---select---</option>
                                <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                    <option>2024</option>
                                    <option>2025</option>
                                    <option>2026</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br> -->
                <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="job title">Job Title</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="" id="job title" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label for="qualification" class="form-label">Qualification</label>
                <select class="form-select" id="qualification">
                    <option selected>---select---</option>
                 </select>
                           <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">March</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" class="form-control" name="" id="username" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <br> -->
                <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="employment type">Employment Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="" id="employment type" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="job type">Job Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="" id="job type" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">June</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" class="form-control" name="" id="username" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <br> -->
                <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="job location">Job Location</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="" id="job location" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="work experience">Work Experience</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" class="form-control" name="" id="work experience" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">September</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" class="form-control" name="" id="username" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <br> -->
                <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="job nature">Job Nature</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="" id="job nature" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="salary range">Salary Range</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" class="form-control" name="" id="salary range" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">December</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" class="form-control" name="" id="username" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>

                </div> -->




                <!-- <div class="row">
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;">Close</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>

</div>
</div> -->

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>

@endsection