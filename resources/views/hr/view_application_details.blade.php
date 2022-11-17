
@extends('layouts.hmsmain')
@section('content') 
<div class="container">
<h4 id="hdtpa"><b>View Application Details</b></h4>

    </div>
    <br>


    <div class="container">
    <form>  
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname">
            </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname">
            </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email">
            </div>
      
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone">
            </div>

        <div class="mb-3">
                <label for="qualification" class="form-label">Qualification</label>
                <input type="text" class="form-control" id="qualification">
                </div>
    
        <div class="mb-3">
                <label for="work experience" class="form-label">Work Experience</label>
                <input type="text" class="form-control" id="work experience">
                </div>
      
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload CV</label>
            <input class="form-control" type="file" id="formFile">
            <div class="form-text">Select CV file (TXT, PDF or  Word DOC)</div>
            </div>

        </form>
           
        <div class="text-center">
            <button type="button" class="btn btn-success">Accepted</button>
            <span class="p-3"></span>
            <button type="button" class="btn btn-danger">Rejected</button>
        </div>
      
    

    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>

@endsection
