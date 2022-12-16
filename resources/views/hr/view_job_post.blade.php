@extends('layouts.hmsmain')
@section('content')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Job Post</title>

</head>


<div class="container">


    <body>

        <div>
            {{-- heading --}}
            <h4 id="hdtpa"><b>View Job Post</b></h4>
            <br><br>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{url('update_job_post')}}" id="form">
                        <input type="hidden" name="id" value="{{$job_details->id}}">

                        @csrf

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <!-- <form method="post" action="{{url('create_job_post')}}"> -->

                                    <label for="job title" class="form-label">Job Title</label>
                                    <input type="money" class="form-control" name="job_title"
                                        aria-describedby="salaryrange" value="{{$job_details->job_title}}" disabled>
                                    <!-- <select class="form-select" name="job_title">
                    <option >{{$job_details->job_title}}</option>
                    <option value="junior Advocate">junior Advocate</option>
                    <option value="Mid Senior Advocate">Mid Senior Advocate</option>
                    <option value="Senior Advocate">Senior Advocate</option>
                  </select> -->
                                </div>
                                <div class="mb-3">
                                    <label for="qualification" class="form-label">Qualification</label>
                                    <input type="money" class="form-control" name="qualification"
                                        aria-describedby="salaryrange" value="{{$job_details->qualification}}" disabled>
                                    <!-- <select class="form-select" name="qualification">
                    <option selected>{{$job_details->qualification}}</option>
                    <option value="LLB">LLB</option>
                    <option value="LLM">LLM</option>
                  </select> -->
                                </div>
                                <div class="mb-3">
                                    <label for="employment type" class="form-label">Employment Type</label>
                                    <input type="money" class="form-control" name="employment_type"
                                        aria-describedby="salaryrange" value="{{$job_details->employment_type}}"
                                        disabled>
                                    <!-- <select class="form-select" name="employment_type">
                    <option selected>{{$job_details->employment_type}}</option>
                    <option value="Full-Time">Full-Time</option>
                    <option value="Part-Time">Part-Time</option>
                  </select> -->
                                </div>
                                <div class="mb-3">
                                    <label for="job type" class="form-label">Job Type</label>
                                    <input type="money" class="form-control" name="job_type"
                                        aria-describedby="salaryrange" value="{{$job_details->job_type}}" disabled>
                                    <!-- <select class="form-select" name="job_type">
                    <option selected>{{$job_details->job_type}}</option>
                    <option value="Permanent">Permanent</option>
                    <option value="Temporary">Temporary</option>
                  </select> -->
                                </div>
                                <div class="mb-3">
                                    <label for="starting date" class="form-label">Starting Date to Apply</label>
                                    <input type="date" class="form-control" name="start_date"
                                        aria-describedby="startingdate" value="{{$job_details->start_date}}" disabled>
                                </div>
                            </div>

                            <!-- column-2 -->

                            <div class="col">
                                <div class="mb-3">
                                    <label for="job location" class="form-label">Job Location</label>
                                    <input type="money" class="form-control" name="job_location"
                                        aria-describedby="salaryrange" value="{{$job_details->job_location}}" disabled>
                                    <!-- <select class="form-select" name="job_location">
                    <option selected>{{$job_details->job_location}}</option>
                    <option value="Nairobi">Nairobi</option>
                    <option value="Kenya">Kenya</option>
                  </select> -->
                                </div>
                                <div class="mb-3">
                                    <label for="work experience" class="form-label">Work Experience</label>
                                    <input type="money" class="form-control" name="work_experience"
                                        aria-describedby="salaryrange" value="{{$job_details->work_experience}}"
                                        disabled>
                                    <!-- <select class="form-select" name="work_experience">
                    <option selected>{{$job_details->work_experience}}</option>
                    <option value="0-1">0-1</option>
                    <option value="1-2">1-2</option>
                    <option value="2-3">2-3</option>
                    <option value="3-4">3-4</option>
                    <option value="4-5">4-5</option>
                  </select> -->
                                </div>
                                <div class="mb-3">
                                    <label for="job nature" class="form-label">Job Nature</label>
                                    <input type="money" class="form-control" name="job_nature"
                                        aria-describedby="salaryrange" value="{{$job_details->job_nature}}" disabled>
                                    <!-- <select class="form-select" name="job_nature">
                    <option selected>{{$job_details->job_nature}}</option>
                    <option value="Onsite">Onsite</option>
                    <option value="Hybrid">Hybrid</option>
                    <option value="Remote">Remote</option>
                  </select> -->
                                </div>
                                <div class="mb-3">
                                    <label for="salary range" class="form-label">Salary Range</label>
                                    <input type="money" class="form-control" name="salary_range"
                                        aria-describedby="salaryrange" value="{{$job_details->salary_range}}" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="ending date" class="form-label">Ending Date to Apply</label>
                                    <input type="date" class="form-control" name="end_date"
                                        aria-describedby="endingdate" value="{{$job_details->end_date}}" disabled>
                                </div>
                            </div>


                            <!-- Job Description -->
                            <div class="mb-3">
                                <label for="job description" class="form-label">Job Description</label>
                                <textarea class="form-control" name="job_description" rows="3"
                                    disabled>{{$job_details->job_description}}</textarea>
                            </div>

                            <!-- Responsibilities -->
                            <div class="mb-3">
                                <label for="job responsibilities" class="form-label">Job Responsibilities</label>
                                <textarea class="form-control" name="job_responsibilities" rows="3"
                                    disabled>{{$job_details->job_responsibilities}}</textarea>
                            </div>
                        </div>


                        <!-- Buttons -->
                        <!-- <div class="row">
                                <div class="col-sm">

                                </div>
                                <div class="col-sm">

                                </div>
                                <div class="col-sm">

                                    <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                                        onclick="history.back()">Cancel</button>
                                </div>
                            </div> -->

                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
                            crossorigin="anonymous"></script>

    </body>
</div>

</html>
@endsection