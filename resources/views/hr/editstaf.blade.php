@extends('layouts.hmsmain')
@section('content')


<div class="container">
            <h4 id="hdtpa"><b>Edit Staffs</b></h4>
            <br>
        </div>
  <br>
  <h4>Basic Details</h4>
  <br>

        <div class="container">
  <div class="row align-items-start">
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control"  placeholder="">
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" class="form-control"  placeholder="">
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
  <input type="text" class="form-control"  placeholder="">
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Age</label>
  <input type="text" class="form-control"  placeholder="">
</div>
    </div>  
  </div>
  <div class="row align-items-center">
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="text" class="form-control" placeholder="">
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
  <input type="text" class="form-control"  placeholder="">
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Date of Joining</label>
  <input type="date" class="form-control"  placeholder="">
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Gender</label>
  <select class="form-select" aria-label="Default select example">
  <option selected>--- select ---</option>
  <option value="1">Male</option>
  <option value="2">Female</option>
  <option value="3">Others</option>
</select>
</div>
    </div>
  </div>
  <div class="row align-items-end">
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Departments</label>
  <select class="form-select" aria-label="Default select example">
  <option selected>--- select ---</option>
  <option value="1">Legal Department</option>
  <option value="2">HR Department</option>
  <option value="3">Accounts Department</option>
</select>
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Roles</label>
  <select class="form-select" aria-label="Default select example">
  <option selected>--- select ---</option>
  <option value="1">HR Manager</option>
  <option value="2">Jr.Advocate</option>
  <option value="3">Sr.Advocate</option>
</select>
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Status</label>
  <select class="form-select" aria-label="Default select example">
  <option selected>--- select ---</option>
  <option value="1">Active</option>
  <option value="2">Inactive</option>
  <option value="3">Resigned</option>
  <option value="3">Suspended</option>
</select>
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Status Date</label>
  <input type="date" class="form-control"  placeholder="">
</div>
    </div>
  </div>
</div>
<br>
<h4>Address</h4>
<br>
<div class="container">
  <div class="row align-items-start">
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Postal Address</label>
  <input type="text" class="form-control"  placeholder="">
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Branch</label>
  <select class="form-select" aria-label="Default select example">
  <option selected>--- select ---</option>
  <option value="1">Nairobi</option>
  
</select>
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Postal Cide</label>
  <input type="text" class="form-control"  placeholder="">
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Town / City</label>
  <select class="form-select" aria-label="Default select example">
  <option selected>--- select ---</option>
  <option value="1">Nairobi</option>
  
</select>
</div>
</div>
    </div>
  </div>
  <br>
<h4>Account Details</h4>
<br>


  <div class="container">
  <div class="row align-items-start">
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Basic Salary (Kshs)</label>
  <input type="text" class="form-control"  placeholder="">
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Partners Drawing</label>
  <input type="text" class="form-control"  placeholder="">
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">N.S.S.F Number</label>
  <input type="text" class="form-control"  placeholder="">
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">N.H.I.F Number</label>
  <input type="text" class="form-control"  placeholder="">
</div>
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">CRA PIN Number</label>
  <input type="text" class="form-control"  placeholder="">
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Should be Tax ?</label>
  <select class="form-select" aria-label="Default select example">
  <option selected>Yes</option>
  <option value="1">No</option>
 
</select>
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Payroll deductions</label>
  <select class="form-select" aria-label="Default select example">
  <option selected>From Salary</option>
  <!-- <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option> -->
</select>
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Company NSSF Contribution</label>
  <select class="form-select" aria-label="Default select example">
  <option selected>Deduct by Company</option>
  <!-- <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option> -->
</select>
</div>
    </div>
  </div>
  <div class="row align-items-end">
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Leave Days Per Year</label>
  <input type="text" class="form-control"  placeholder="">
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Pension Rate (as % of Basic)</label>
  <select class="form-select" aria-label="Default select example">
  <option selected>5</option>
  <!-- <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option> -->
</select>
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  
</div>
    </div>
  </div>
</div>
<br>
<h4>Bank Details</h4>
<br>

<div class="container">
  <div class="row align-items-start">
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Bank Name</label>
  <select class="form-select" aria-label="Default select example">
  <option selected>--- select ---</option>
  <option value="1">UBA Kenya Bank Ltd</option>
  <option value="2">Co-operative Bank</option>
  <option value="3">Suntra Inverstment Bank Ltd</option>
  <option value="3">Sterling Inverstment Bank Ltd</option>
  <option value="3">Prime Bank</option>
  <option value="3">Paramount Bank</option>
</select>
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Account Number</label>
  <input type="text" class="form-control"  placeholder="">
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Branch</label>
  <input type="text" class="form-control"  placeholder="">
</div>
    </div>
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Branch Code</label>
  <input type="text" class="form-control"  placeholder="">
</div>
    </div>
  </div>
<br>


<div class="container">
  <div class="row align-items-start">
    <div class="col">
      
    </div>
    <div class="col">
      
    </div>
    <div class="col">
      
    </div>
    <div class="col">
      <button type="button" class="btn btn-primary">Update</button>
      <span class="m-2"></span>
      <button type="button" class="btn btn-primary" onclick="history.back();">Cancel</button>
    </div>
  </div>







@endsection
