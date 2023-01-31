@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:17px;">
  <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> / 
  <a href="#" style="color: #1D1D50;">HR</a> /
  <a href="{{url('recruitment')}}" style="color: #1D1D50;">Recruitment</a> /
  <a href="{{url('job_posts')}}" style="color: #1D1D50;">Job Posts</a> /
  <a href="#" style="color: #1D1D50;">View Job Posts</a> 
</nav>
<br>
<div class="container">


    <div>
        {{-- heading --}}
        <h4 id="hdtpa"><b>View Job Post</b></h4>
        <br><br>

    </div>

    <form method="post" action="{{url('update_job_post')}}" id="form">
        <input type="hidden" name="id" value="{{$job_details->id}}">

        @csrf

        <div class="table-responsive">
            <table class="table table-hover" style="border: 1px solid">

                @csrf
                <tbody>


                    <tr>
                        <th>Job Title :</th>
                        <td>{{$job_details->job_title}}</td>
                    </tr>
                    <tr>
                        <th>Qualification :</th>
                        <td>{{$job_details->qualification}}</td>
                    </tr>
                    <tr>
                        <th>Employment Type :</th>
                        <td>{{$job_details->employment_type}}</td>
                    </tr>
                    <tr>
                        <th>Job Type :</th>
                        <td>{{$job_details->job_type}}</td>
                    </tr>
                    <tr>
                        <th>Starting Date to Apply :</th>
                        <td>{{$job_details->start_date}}</td>
                    </tr>
                    <tr>
                        <th>Job Location :</th>
                        <td>{{$job_details->job_location}}</td>
                    </tr>
                    <tr>
                        <th>Work Experience :</th>
                        <td>{{$job_details->work_experience}}</td>
                    </tr>
                    <tr>
                        <th>Job Nature :</th>
                        <td>{{$job_details->job_nature}}</td>
                    </tr>
                    <tr>
                        <th>Salary Range:</th>
                        <td>{{$job_details->salary_range}}</td>
                    </tr>
                    <tr>
                        <th>Ending Date to Apply :</th>
                        <td>{{$job_details->end_date}}</td>
                    </tr>
                    <tr>
                        <th>Job Description :</th>
                        <td>{{$job_details->job_description}}</td>
                    </tr>
                    <tr>
                        <th>Job Responsibilities :</th>
                        <td>{{$job_details->job_responsibilities}}</td>
                    </tr>

                </tbody>
            </table>
        </div>

    </form>



</div>


@endsection

