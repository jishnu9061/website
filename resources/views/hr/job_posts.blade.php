@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">HR</a> /
    <a href="{{url('recruitment')}}" style="color: #1D1D50;">Recruitment</a> /
    <a href="#" style="color: #1D1D50;">Job Posts</a>
</nav>
<br>
<div class="container">
    <h4 id="hdtpa"><b> Job Post Details</b></h4>
    <br>

    <!-- <nav class="navbar bg-light">
  <div class="container-fluid">
   <nav class="navbar bg-light" style="height:50%";>
    <a class="navbar-brand">Job Posts</a>
    <button class="btn btn-outline-success" type="button">View All</button>
   </nav>
  </div>
  </nav>
  <br> -->
    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->


    <div class="row" style="height:50px;">
        <div class="col-sm-4" style="padding-top:5px;">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Create
                Job Post</button>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <!---------------------------------------------- MODAL ---------------------------------------------------------------------->



                <!-- <input class="btn btn-primary" type="button" value="Create Job Post" data-toggle="modal" data-target="#myModal1">
  <br>
  <br> -->
                <div class="header_wrap">
                    <div class="num_rows">
                        <div class="form-group">
                            <!--		Show Numbers Of Rows 		-->
                            <select class="form-control" aria-label="Page navigation example" name="state" id="maxRows">

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
                        <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()"
                            placeholder="Search.." class="form-control">
                    </div>
                </div>



                <div class="table-responsive">
                    <table class="table table-striped table-class" id="table-id">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Job Title</th>
                                <th scope="col">Location</th>
                                <th scope="col">Qualification</th>
                                <th scope="col">Work Experience</th>
                                <th scope="col">Action</th>

                        </thead>
                        <tbody>
                            @foreach($job_details as $job)
                            <tr class="text-center">
                                <td>{{$job->job_title}}</td>
                                <td>{{$job->job_location}}</td>
                                <td>{{$job->qualification}}</td>
                                <td>{{$job->work_experience}}</td>
                                  <td scope="row" class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" style="border-color:none;"> ⋮ </a>
                                                    <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                            href="{{url('view_job_post',$job->id)}}">View Job Details</a>
                                                        <a class="dropdown-item"
                                                            href="{{url('edit_job_post',$job->id)}}">Edit Job Details</a>
                                                        <a class="dropdown-item"
                                                            href="{{url('delete_job_post',$job->id)}}">Delete Job Details</a>

                                                    </div>
                                                </div>
                                            </td>
                                    --}}
                                    <!-- <td><input class="btn btn-primary" type="button" value="View" data-toggle="modal" data-target="#myModal2"></td> -->
                                    {{-- <td class="text-center">
                      <div class="dropdown">
                            <button style="background-color:#FFFBF4;"class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="{{url('view_job_post',$job->id)}}" class="dropdown-item" >View</a>

                                    <a href="{{url('edit_job_post',$job->id)}}" class="dropdown-item">Edit</a>

                                    <a href="{{url('delete_job_post',$job->id)}}" class="dropdown-item">Delete</a>

                </div>
            </div>

            </td> --}}
            @endforeach
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









        <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h2 class="text-centre"><b>Create Job Post</b></h2>

                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container">
                            <form method="post" action="{{ url('create_job_post') }}" enctype="multipart/form-data">
                                <!---------------------------------------------- MODAL ---------------------------------------------------------------------->




                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <!-- <form method="post" action="{{url('create_job_post')}}"> -->

                                            <label for="job title" class="form-label">Job Title</label>
                                            <!-- <input type="text" class="form-control" name="job_title" aria-describedby="jobtitle"> -->
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
                                                <option value="legaladvisor">Legal Advisor</option>
                                                <option value="hr">Hr</option>
                                                <option value="Accountant">Accountant</option>
                                                <option value="receptionist">Receptionist</option>

                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="starting date" class="form-label">Starting Date to Apply</label>
                                            <input type="date" class="form-control" name="start_date"
                                                aria-describedby="startingdate">
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
                                            <input type="money" class="form-control" name="salary_range"
                                                aria-describedby="salaryrange">
                                        </div>
                                        <div class="mb-3">
                                            <label for="ending date" class="form-label">Ending Date to Apply</label>
                                            <input type="date" class="form-control" name="end_date"
                                                aria-describedby="endingdate">
                                        </div>
                                    </div>


                                    <!-- Job Description -->
                                    <div class="mb-3">
                                        <label for="job description" class="form-label">Job Description</label>
                                        <textarea class="form-control" name="job_description" rows="3"></textarea>
                                    </div>

                                    <!-- Responsibilities -->
                                    <div class="mb-3">
                                        <label for="job responsibilities" class="form-label">Job
                                            Responsibilities</label>
                                        <textarea class="form-control" name="job_responsibilities" rows="3"></textarea>
                                    </div>
                                </div>


                                <!-- Buttons -->

                                <div class="row">
                                    <div class="col-sm">

                                    </div>
                                    <div class="col-sm">

                                    </div>
                                    <div class="col-sm">
                                        <br>
                                        <button type="submit" class="btn btn-primary float:right;"
                                            Style="width:45%;">Save</button>
                                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                                            data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection