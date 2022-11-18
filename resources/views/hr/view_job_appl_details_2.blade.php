

@extends('layouts.hmsmain')
@section('content') 
<!doctype html>
<html lang="en">
<div class="container">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Job Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
  </head>
  <body>
  <div class="container">
<html lang="en">

<body>

    <div>
    {{-- heading --}}
    <h4 id="hdtpa"><b>View Job Application Details</b></h4>
    <br><br>
        
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{url('')}}" id="form">  
            
            
            @csrf
<form>  




<div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >First Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" id="firstname"value="John"disabled>
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
                                <input type="text" class="form-control" id="lastname"value="Paul"disabled>
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
                        <label >Email address:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email" class="form-control" id="email"value="jp@gmail.com"disabled>
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
                                <input type="text" class="form-control" id="phone"value="98-76543210"disabled>
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
                        <label >Qualification:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" id="qualification"value="LLB"disabled>
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
                                <input type="text" class="form-control" id="work experience"value="1"disabled>
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
                                <input class="form-control" type="file" id="formFile"disabled>
            <div class="form-text">Select CV file (TXT, PDF or  Word DOC)</div>
            </div>


                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
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
                            <button type="submit" class="btn btn-success float:right;" Style="width:45%;">Accepted</button>
                           
                            <button type="button" class="btn btn-danger float:left" Style="width:45%;">Rejected</button>
                            <br>
                            <br>
                        </div>
                    </div>
        </div>



 </form>
    



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>
  
</div>
  </body>
</html>
@endsection


