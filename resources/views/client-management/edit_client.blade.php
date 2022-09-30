@extends('layouts.hmsmain')
@section('content')
<div class="container">
  <div class="py-5 text-center">


<div>
    <h2 style="text-align:center;">Add New Client</h2>
    <hr class="mb-4">.
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <div class="container mt-5">
      <button type="button" class="btn btn-primary client_btn" data-bs-toggle="modal" data-bs-target="#mymodal">Add Client Type</button>
      <!-- <button type="button" class="btn btn-primary country_btn" data-bs-toggle="modal" data-bs-target="#my">Add Country</button> -->
  </div>
</div>
</div>
  <div class="row">
            <div class="col-md-12 order-md-1">
                <form method="post" action="" id="form">
	                @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Client Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="text" class="form-control" name="number" id="username" value="" placeholder="Number" >
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Name is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                              <label for="username">Client Type</label>
                                <div class="input-group">
                                  <div class="input-group-prepend">

                                  </div>
                                  <select name="type" id="cars">
                                  <option value="volvo">Select</option>
                                  <option value="volvo">Corporate</option>
                                  <option value="volvo">Individual</option>
                                  </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-1">
                            <label for="username">Citizen Status</label>
                                <div class="input-group">
                                      <div class="input-group-prepend">

                                      </div>
                                      <select name="citizen" id="cars">
                                      <option value="volvo">Select</option>
                                      <option value="volvo">Residensial</option>
                                      <option value="volvo">Non Residensial</option>
                                      </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Country</label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <select name="country" id="cars">
                                    <option value="volvo">Select</option>
                                    <option value="volvo">Kenya</option>
                                    <option value="volvo">South Africa</option>
                                    <option value="volvo">India</option>
                                    <option value="volvo">America</option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Telephone No</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="password" class="form-control" name="telephone" value="" id="confirm_password" placeholder="telephone">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Password is required.
                                            </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Fax No</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control" name="faxno" id="age" value="" placeholder="Fax no" min="0" max="99">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Age is required.
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Email Address</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="email" class="form-control" name="email" value="" id="password" placeholder="Email">
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Password is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Brought In By</label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                    </div>
                                    <select name="brought" id="cars">
                                    <option value="volvo"></option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-1">
                            <label for="username">Status Reporting Day</label>
                              <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="status" id="cars">
                                <option value="volvo"></option>
                                </select>
                              </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                          <div class="mb-1">
                            <label for="username">Client Source</label>
                              <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="source" id="cars">
                                <option value="volvo">Select</option>
                                <option value="volvo">Excisting Client</option>
                                <option value="volvo">Online</option>
                                </select>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Client Source Narration</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="narration" class="form-control" name="conpassword" value="" id="confirm_password" placeholder="Narration">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Password is required.
                                            </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Client Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control" name="name" value="" id="confirm_password" placeholder="Name">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Password is required.
                                            </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                            <label for="username">Client Industry</label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <select name="industry" id="cars">
                                    <option value="volvo">Select</option>
                                    <option value="volvo">Commerce</option>
                                    <option value="volvo">Construction</option>
                                    <option value="volvo">Education</option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Pin No</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control" name="pin" id="age" value="" placeholder="Pin No" min="0" max="99">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Age is required.
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Postal Address</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="text" class="form-control" name="address" value="" id="password" placeholder="Address">
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Password is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Postal Code</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control" name="code" value="" id="confirm_password" placeholder="Postal Code">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Password is required.
                                            </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Town</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control" name="town" id="age" value="" placeholder="Town" min="0" max="99">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Age is required.
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <div class="input-group">     
                                    <label for="cars"> Physical Address</label>
                                      <textarea class="form-control" id="form7Example7" rows="3"></textarea>
                                      <div class="invalid-feedback" style="width: 100%;">
                                          Postal Address is required.
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                              <label for="username">Notes</label>
                                <div class="input-group">                     
                                  <textarea class="form-control" id="form7Example7" rows="3"></textarea>
                                  <div class="invalid-feedback" style="width: 100%;">
                                     Postal Address is required.
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
 
                  
                      <button type="submit" class="btn btn-primary col-md-6">Save Changes</button>
                      <button type="button" class="btn  submit_btn col-md-6">Back</button>
                      
                      </div>

                    </div>
                </form>
            </div>
  </div>
</div>

</div> 
  <div class="modal" id="mymodal">
          <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <div class="modal-body">
                    <form action="">
                      <div>
                        <input type="text" name="type" class="form-control" placeholder="Client Type">
                        <button class="btn btn-primary sub_btnn" type="submit" >submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>
  <div class="modal" id="my">
          <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <div class="modal-body">
                    <form action="">
                      <div>
                        <input type="text" name="type" class="form-control" placeholder="Country">
                        <button class="btn btn-primary sub_btnn" type="submit" >submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script type="text/javascript">
 $(function () {
  $('[data-toggle="popover"]').popover()
})


     $(document).on('click','#testing',function(){
      $(this).text(' submited ');
            $('.checkz:checked').each(function() {
   var allowanceid=this.value;
   var staffid = $('#staffname').val();


         $(this).prop('disabled', true);
         $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });


          $.ajax({
            method:"POST",
            url:"/allowancetostaff",
            data:{
               "_token": "{{ csrf_token()}}",
                'allowanceid':allowanceid,
                'staffid':staffid,
                'status':'allowance',
            },

            //success: function (response){
              //  alert(response.status);
            //},
         </select>

          </div>
          <div class="form-group col-md-7">
            <label for="username">Consulatation Fees</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="number" class="form-control" name="cons_fee" id="cons_fee" placeholder="" min="0">
                    <div class="invalid-feedback" style="width: 100%;">
                    </div>
                </div>
        </div>

            <div class="col-md-4 col-lg-2">
                <p class="card-title"><b>Sex</b></p>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="patienthere" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                               Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="patienthere" id="flexRadioDefault1"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Female
                            </label>
                      </div>
                      <div class="form-check">
                            <input class="form-check-input" type="radio" name="patienthere" id="flexRadioDefault1"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Others
                            </label>
                      </div>

                </div>
            </div>
     </div>

      <div style="height:50px;">

<div style="height: 50px;">

</div>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script type="text/javascript">
	  $(document).on('input','#price',function(){
	  	alert('sdf');
$('#percent').prop('readonly', true);

});
	    $(document).on('input','#percent',function(){
$('#price').prop('readonly', true);
     </div>

     <h6>Salary And Allowances</h6>

<hr class="mb-4">
      <div class="row">
          <div class="col-md-4">
           <div class="mb-1">
          <label for="username">Salary</label>
          <div class="input-group">
            <div class="input-group-prepend">

            </div>
         <input type="number" class="form-control" name="salary" id="username" placeholder="Salary" min="0">
            <div class="invalid-feedback" style="width: 100%;">
              Salary is required.
            </div>
          </div>
        </div>
          </div>

          <div class="col-md-4">
            <div class="mb-1">
          <label for="username">Years of experience</label>
          <div class="input-group">
            <div class="input-group-prepend">

            </div>
             <input type="number" class="form-control" name="yearsexp" id="username" placeholder="Experience" min="0" max="70">
            <div class="invalid-feedback" style="width: 100%;">
              Years of experience is required.
            </div>
          </div>
        </div>
          </div>
          <div class="col-md-4">
            <div class="mb-1">
          <label for="username">D.O.B</label>
          <div class="input-group">
            <div class="input-group-prepend">

            </div>
             <input type="date" class="form-control" name="dob" id="username" placeholder="DOB">
            <div class="invalid-feedback" style="width: 100%;">
              dob is required.
            </div>
          </div>
        </div>
          </div>
        </div>

          {{ Session::forget('staffregistered')}}
 <div class="row">
          <div class="col-md-4">
           <div class="mb-1">
          <label for="username">Bank Name</label>
          <div class="input-group">
            <div class="input-group-prepend">

            </div>
              <input type="text" class="form-control" name="bankname" id="username" placeholder="Bank Name">
            <div class="invalid-feedback" style="width: 100%;">
              Bank Name is required.
            </div>
          </div>
        </div>
          </div>

          <div class="col-md-4">
            <div class="mb-1">
          <label for="username">Account Number</label>
          <div class="input-group">
            <div class="input-group-prepend">

            </div>
             <input type="number" class="form-control" name="accountnumber" id="username" placeholder="Account Number" min="0">
            <div class="invalid-feedback" style="width: 100%;">
              Account number is required.
            </div>
          </div>
        </div>
          </div>
          <div class="col-md-4">
            <div class="mb-1">
          <label for="username">IFSC code</label>
          <div class="input-group">
            <div class="input-group-prepend">

            </div>
             <input type="text" class="form-control" name="isfc" id="username" placeholder="Ifsc Code">
            <div class="invalid-feedback" style="width: 100%;">
              IFSC Code is required.
            </div>
          </div>
        </div>
        </div>
        <div class="col-md-12">
            <div class="mb-1">
              <br>
            <h6>No: of Leaves(Annual)</h6>

                <div class="input-group">

            <div class="input-group-prepend">
            </div>
            <table class="table">
                <tr>
        


    <td>

         <input type="hidden" name="leave_type[]" value=""></td>
         <td><input type="number" class="form-control" name="leaves[]" value="" min="0" max="365" width="auto"></td>

  

    </tr>
            </table>
            {{-- <input type="text" class="form-control" name="leavetype"value=""id="leavetype" placeholder="">
            <div class="invalid-feedback" style="width:100%;"> --}}
            {{-- </div> --}}
        </div>
    </div>
</div>

        </div>
<div style="height: 50px;">

</div>
<div class="row">

   <div class="col-md-4 col-lg-4">
    <p><b>Fixed Allowances</b></p>
      <table class="table table-bordered">
   <tbody>



      <tr>

         <td></td>
         <input type="hidden" name="" value="">
         <td><input type="checkbox" class="checkz" name="allowz[]" value=""></td>

      </tr>
  


   </tbody>
</table>
   </div>
</div>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script type="text/javascript">
 $(function () {
  $('[data-toggle="popover"]').popover()
})

     $(document).on('click','#testing1',function(){

            $(this).text(' submited ');
            $('.checkz:checked').each(function() {
   var allowanceid=this.value;
   var staffid = $('#staffname').val();


         $(this).prop('disabled', true);
         $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });


          $.ajax({
            method:"POST",
            url:"/allowancetostaff",
            data:{
               "_token": "{{ csrf_token()}}",
                'allowanceid':allowanceid,
                'staffid':staffid,
                'status':'reduction',

            },

            //success: function (response){
              //  alert(response.status);
            //},


       <div class="col-md-4 col-lg-4">
        <p><b>Non-Fixed Allowances</b></p>
      <table class="table table-bordered">
   <tbody>


   
      <tr>

         <td></td>
         <input type="hidden" name="" value="">
         <td><input type="number" class="checkz" name="nonfx[]" min="0" value=""></td>

      </tr>
   


   </tbody>
</table>
   </div>

    <div class="col-md-4 col-lg-4">
      <p><b>Deductions</b></p>
      <table class="table table-bordered">
   <tbody>


     
      <tr>

         <td></td>
         <input type="hidden" name="" value="">
         <td><input type="checkbox" class="checkz" name="category[]" value=""></td>

      </tr>
  


   </tbody>
</table>
   </div>

</div>
<div class="row">
    <div class="col-md-4">
        <div class="mb-1">
            <label for="username">Staff Status</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <select class="form-control" name="status" id="status">
                        <option value="">Select</option>
                    
                            <option value="">HH</option>
                   
                        <div class="invalid-feedback" style="width: 100%;">
                        </div>
                    </select>
                </div>
        </div>
    </div>
</div>
        <hr class="mb-4">

        <button type="submit" class="btn btn-primary btn-lg btn-block" type="submit">Add staffs</button>

    </div>
  </div>
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $('#password, #confirm_password').on('keyup', function () {
  var v=$('#password').val();
  var b=$('#confirm_password').val()
  if(v!=b)
  {
    $('#test').html('Not Matching').css('color', 'red');
  }
  else
  {
     $('#test').html('Matching').css('color', 'green');
  }
  if ($('#password').val() == $('#confirm_password').val()) {

    $('#message').html('Matching').css('color', 'green');
  } else
    $('#message').html('Not Matching').css('color', 'red');
});
</script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
   <script>
    $(document).ready(function () {
    $('#form').validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phoneno:{
              required:true
            }
            number: {
                required: true,
                digits: true

            },
        },
          errorElement: 'span',
          errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
          },
          highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
          },
          unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
          }
    });
});
</script>
@endsection
