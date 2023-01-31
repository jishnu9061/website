@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:17px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> / 
  <a href="#" style="color: #1D1D50;">HR</a> /
  <a href="{{url('recruitment')}}" style="color: #1D1D50;">Recruitment</a> /
  <a href="{{url('view_job_applications')}}" style="color: #1D1D50;">View Job Applications</a> /
  <a href="#" style="color: #1D1D50;">View Job Application Details</a>
<br><br>
<!doctype html>
<html lang="en">
<div class="container">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View Job Post</title>

    </head>

    <body>
        <div class="container">

            {{-- heading --}}
            <h4 id="hdtpa"><b> Job Application Details</b></h4>
            <br><br>

        </div>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{url('')}}" id="form">


                        @csrf


                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label>First Name:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control" id="firstname" value="Mark" disabled>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Required Field.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label>Last Name:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control" id="lastname" value="Otto" disabled>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Required Field.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label>Email address:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="email" class="form-control" id="email" value="mark@gmail.com"
                                            disabled>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Required Field.
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label>Phone Number:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control" id="phone" value="98-34567891" disabled>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Required Field.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label>Qualification:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control" id="qualification" value="LLB" disabled>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Required Field.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label>Work Experience:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control" id="work experience" value="5" disabled>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Required Field.
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label>Upload CV:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input class="form-control" type="file" id="formFile" disabled>
                                        <div class="form-text">Select CV file (TXT, PDF or Word DOC)</div>
                                    </div>


                                    <div class="invalid-feedback" style="width: 100%;">
                                        Required Field.
                                    </div>
                                  </div>
                            </div>
                        </div>
                </div>

                <div class="row">
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Accepted</button>

                        <button type="button" class="btn btn-primary float:left" Style="width:45%;">Rejected</button>
                        <br>
                        <br>
                    </div>
                </div>
            </div>



            </form>




            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous">
            </script>
            <script src="{{ url('assets/js') }}/jquery.min.js"></script>

        </div>
    </body>
</div>

</html>
@endsection