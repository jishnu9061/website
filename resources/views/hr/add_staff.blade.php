@extends('layouts.hmsmain')
    @section('content')
        <nav style="font-size:15px;">
            <a href="{{url('home')}}" style="color: #1D1D50;">home</a>/
            <a href="#" style="color: #1D1D50;">HR</a>/
            <a href="#" style="color: #1D1D50;">Add Employee</a>
        </nav>

    <style>
        th {
            width: 30%;
        }
        .outer{
            border-color: #1d1d50;
            width=45%;
            border-radius: 7px;
        }
    </style>
    <div class="container">
        <div class="row" style="height:50px;">
            <div class="col-sm-4" style="padding-top:5px;">
            </div>
            <div class="col-sm-4" style="">
                <h4  style="border: 0.5px solid #f1d9b0;
                    border-radius: 25px;
                    background-color: #f1d9b0;
                    padding: 2%;
                    width: 100%;
                    height:90%;
                    text-align:center;
                    box-shadow: inset 0 0 3px #d3d0ca;
                    opacity: .9;">
                <b style="font-size:18px;">Add Employee</b></h4>
              </div>
              <div class="col-sm-4" style="">
              </div>  
        </div>

        <form method="post" action="{{ url('addstaffss') }}" enctype="multipart/form-data" id="addemployee" >
            @csrf
            <h4><b>Personal Details:-</b></h4>
            <div class="row" style="*/background-color:orange;height:600px">
                <div class=""style="*/background-color: #d3d0ca;width:80%;border-radius:5px;">
                    <div class="row">
                        <div class="" style="width: 50%">
                            <div class=""><span style="color: red">*</span>
                                <label for="first_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">First Name</label>
                                <input type="text" placeholder="Enter First Name " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="first_name" id="" value=""required>
                            </div>
                        </div>
                        <div class="" style="width: 50%">
                            <div class=""><span style="color: red">*</span>
                                <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Last Name</label>
                                <input type="text" placeholder="Enter Last Name " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                            </div>
                        </div>
                                    <div class="" style="width: 50%">
                            <div class=""><span style="color: red">*</span>
                                <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">ID Number</label>
                                <input type="text" placeholder="ID Number " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                            </div>
                        </div>
                                    <div class="" style="width: 50%">
                            <div class=""><span style="color: red">*</span>
                                <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Associated Users</label>
                                <input type="text" placeholder="Associated Users " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                            </div>
                        </div>
                                    <div class="" style="width: 50%">
                            <div class=""><span style="color: red">*</span>
                                <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Practice Group</label>
                                <input type="text" placeholder="Practice Group " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                            </div>
                        </div>
                                    <div class="" style="width: 50%">
                            <div class=""><span style="color: red">*</span>
                                <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Job Title</label>
                                <input type="text" placeholder="Job Title " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                            </div>
                        </div>
                                    <div class="" style="width: 50%">
                            <div class=""><span style="color: red">*</span>
                                <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Level</label>
                                <input type="text" placeholder="Level " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                            </div>
                        </div>
                                    <div class="" style="width: 50%">
                            <div class=""><span style="color: red">*</span>
                                <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Salary Band</label>
                                <input type="text" placeholder="Salary Band " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                            </div>
                        </div>
                                    <div class="" style="width: 50%">
                            <div class=""><span style="color: red">*</span>
                                <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Reporting To</label>
                                <input type="text" placeholder="Reporting To " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                            </div>
                        </div>

                    </div>
                    
                    <div class="row" style="margin-top: 10px;">
                        <div class="" style="width: 30%">
                            <div class=""><span style="color: red">*</span>
                                <label for="dob" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date of Birth</label>
                                <input type="date" onclick="agecalcul(this)" placeholder="Date of Birth" title="Date of Birth"style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="dob" id="dob" value=""required>
                            </div>
                        </div>
                        <div class="" style="width: 10%">
                            <div class="">
                                <label for="age" style="text-align:center;width: 100%;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Age</label>
                                <input type="text" placeholder="Age" style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="age" id="age" value=""readonly>
                            </div>
                        </div>
                        <div class="" style="width: 30%">
                            <div class=""><span style="color: red">*</span>
                                <label for="gender" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Gender</label>
                                <select class="form-select" aria-label="Default select example" style="border-color: #1d1d50;width=45%;border-radius: 7px;" name="gender"id="" required>
                                    <option>Select gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="" style="width: 30%">
                            <div class="">
                                <label for="blood_group" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Blood Group</label>
                                <select class="form-select" aria-label="Default select example" style="border-color: #1d1d50;width=45%;border-radius: 7px;" name="blood_group"id="" >
                                    <option>Select Blood Group</option>
                                    <option value="A+">A+</option><option value="A-">A-</option>
                                    <option value="B+">B+</option><option value="B-">B-</option>
                                    <option value="O+">O+</option><option value="O-">O-</option>
                                    <option value="AB+">AB+</option><option value="AB-">AB-</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row"style="margin-top: 10px;">
                        <div style="width:40%">
                            <div class=""><span style="color: red">*</span>
                                <label for="permanent_addr" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Premanent Address</label>
                                <textarea class="outer" rows="4" cols="41" placeholder="Enter Premanent Address" name="permanent_addr" form="addemployee"></textarea>                           
                            </div>
                        </div>
                        <div style="width:60%">
                            <div class="row">
                                <div class="" style="width:50%;"><span style="color: red">*</span>
                                    <label for="city" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">City</label>
                                    <input type="text" placeholder="City " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="city" id="" value=""required>
                                </div>
                                <div class="" style="width:50%;"><span style="color: red">*</span>
                                    <label for="state" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">State</label>
                                    <input type="text" placeholder="State " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="state" id="" value=""required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="" style="width:50%;"><span style="color: red">*</span>
                                    <label for="country" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Country</label>
                                    <input type="text" placeholder="Country " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="country" id="" value=""required>
                                </div>
                                <div class="" style="width:50%;"><span style="color: red">*</span>
                                    <label for="contact_no" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Contact No</label>
                                    <input type="text" placeholder="Contact No " style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px" class="form-control" name="contact_no" id="" value=""required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="*/background-color:#d3d0ca;width:20%;border-radius:8%;">
                        <label for="passport_photo" style="margin-left: 15%;text-align:center;width:70%;height:30px;margin-top:10px;
                        padding-right:-7px;color:white;background-color: #1d1d50;border-radius: 5px;font-weight:bold;">
                        <span style="color: red">*</span>Employee photo
                        <input accept="image/*" type='file' id="passport_photo" name="passport_photo" style="width:0px;height:0px;"required/>
                        <div class="invalid-feedback" style="width: 100%;">Logo required.</div>
                        </label>
                        <img id="passport" src="{{asset('/') }}images/faces/vector_img_passport.png"  alt="Passport Size Photo" style="border-style: solid;border-color: black;width:90%;height:200px;margin:5% 5% 15% 5%" />
                        <script>
                            passport_photo.onchange = evt => {
                            const [file] = passport_photo.files
                            if (file) {
                                passport.src = URL.createObjectURL(file)
                            }}
                        </script>
                </div>
            </div>
            <div class="row" style="*/background-color:orange;height:130px">
                <div class=""style="*/background-color: #d3d0ca;width:65%;border-radius:5px;">
                    <div class="row">
                        <div class="" style="width: 50%">
                            <div class=""><span style="color: red">*</span>
                                <label for="educ_qualif" style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Education Qualification</label>
                                <input type="text" placeholder="Education Qualification " style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="educ_qualif" id="" value=""required>
                            </div>
                        </div>
                        <div class="" style="width: 50%">
                            <div class=""><span style="color: red">*</span>
                                <label for="passport_no" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Passport No</label>
                                <input type="text" placeholder="Passport No " style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="passport_no" id="" value=""required>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 5px;">
                        <div class="" style="width: 50%">
                            <div class=""><span style="color: red">*</span>
                                <label for="email" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email</label>
                                <input type="email" placeholder="Email" style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="email" id="" value="@"required>
                            </div>
                        </div>
                        <div class="" style="width: 50%">
                            <div class=""><span style="color: red">*</span>
                                <label for="pan_no" style="width: 100px;margin:0px 2px 2px 0px;font-size:10px;">Pan No</label>
                                <input type="text" placeholder="Pan No " style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="pan_no" id="" value=""required>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="*/background-color:#d3d0ca;width:35%;border-radius:8%;">
                        <label for="employ_sign" style="margin-left: 15%;text-align:center;width:70%;height:30px;margin-top:0px;
                        padding-right:-7px;color:white;background-color: #1d1d50;border-radius: 5px;font-weight:bold;">
                        <span style="color: red">*</span>Employee Signature
                        <input accept="image/*" type='file' id="employ_sign" name="employ_sign" style="width:0px;height:0px;"required/>
                        <div class="invalid-feedback" style="width: 100%;">Logo required.</div>
                        </label>
                        <img id="employ_signatue" src=""  alt="Employee Signature" style="width:80%;height:80px;margin:0% 5% 5% 5%" />
                        <script>
                            employ_sign.onchange = evt => {
                            const [file] = employ_sign.files
                            if (file) {
                                employ_signatue.src = URL.createObjectURL(file)
                            }}
                        </script>
                </div>
            </div>
            <br>
            <h4><b>Job Information:-</b></h4>
            <div class="row">
                <div class="" style="width: 33%">
                    <div class=""><span style="color: red">*</span>
                        <label for="department" style="width: 100px;margin:0px 2px 2px 0px;font-size:10px;">Department</label>
                        <select class="form-select" aria-label="Default select example" style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"name="department" id="department"required>
                            <option value="">Select Department</option>
                            @foreach($departments  as $dept)
                                    <option value="{{$dept->id}}">{{$dept->depname}}</option>
                            @endforeach
                        </select>
                    </div>
                </div><?php $role=[]; ?>
                <div class="" style="width: 33%">
                    <div class=""><span style="color: red">*</span>
                        <label for="position" style="width: 100px;margin:0px 2px 2px 0px;font-size:10px;">Position</label>
                        <select class="form-select" aria-label="Default select example" style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"name="position" id="position"required>
                        </select>
                    </div>
                </div>
            </div> 
            <br>
                <div class="row">
                    <div class="col-sm">
                    </div>
                    <div class style="width: 20%">
                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;" style="margin-left:10px;--clr: #1D1D50;width:180px;
                        --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add Employee</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                            onclick="history.back()">Cancel</button>
                    </div>
                </div>
                    <h4><b>Branch:-</b></h4>
            <div class="row" style="*/background-color:orange;">
                <div class=""style="*/background-color: #d3d0ca;width:80%;border-radius:5px;">
                    <div class="row">
                                    <div class="" style="width: 50%">
                            <div class=""><span style="color: red">*</span>
                                <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Branch</label>
                                <input type="text" placeholder="Branch " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                            </div>
                        </div>
                                    <div class="" style="width: 50%">
                            <div class=""><span style="color: red">*</span>
                                <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Mobile Number</label>
                                <input type="text" placeholder="Mobile Number " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                            </div>
                        </div>
                                    <div class="" style="width: 50%">
                            <div class=""><span style="color: red">*</span>
                                <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email Address</label>
                                <input type="text" placeholder="Email Address " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                            </div>
                        </div>     
                    </div>  </div>

                    <h4><br><b>Relative:-</b></h4>
                    <div class="row" style="*/background-color:orange;">
                        <div class=""style="*/background-color: #d3d0ca;width:80%;border-radius:5px;">
                            <div class="row">
                                            <div class="" style="width: 50%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Next of kin name</label>
                                        <input type="text" placeholder="Next of kin name " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                                    </div>
                                </div>
                                            <div class="" style="width: 50%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Relation</label>
                                        <input type="text" placeholder="Relation " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                                    </div>
                                </div>
                                            <div class="" style="width: 50%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Telephone Number</label>
                                        <input type="text" placeholder="Telephone Number " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                                    </div>
                                </div>   </div>   </div>    
                          

                                            <h4><br><b>Salary:-</b></h4>
                    <div class="row" style="*/background-color:orange;">
                        <div class=""style="*/background-color: #d3d0ca;width:80%;border-radius:5px;">
                            <div class="row">
                                            <div class="" style="width: 50%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Basic Salary</label>
                                        <input type="text" placeholder="Basic Salary " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                                    </div>
                                </div>
                                            <div class="" style="width: 50%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Partners Drawing</label>
                                        <input type="text" placeholder="Partners Drawing " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                                    </div>
                                </div>
                                            <div class="" style="width: 50%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">N.S.S.F Number</label>
                                        <input type="text" placeholder="N.S.S.F Number " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                                    </div>
                                </div> 
                                <div class="" style="width: 50%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">N.H.I.F Number</label>
                                        <input type="text" placeholder="N.H.I.F Number " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                                    </div>
                                </div>   
                                <div class="" style="width: 50%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="last_name" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">KRA PIN Number</label>
                                        <input type="text" placeholder="KRA PIN Number " style="border-color: #1d1d50;width=45%;border-radius: 7px;" class="form-control" name="last_name" id="" value=""required>
                                    </div>
                                </div> </div>   </div>
  
                                
                    
                    
                    
                
        </form>
    </div>
    <script>

        $('#department').on('change', function() {// select department
           var deptid = $(this).val();
           if(deptid) {
               $.ajax({
                   url: 'getrole/'+deptid,
                   type: "GET",
                   data : {"_token":"{{ csrf_token() }}"},
                   dataType: "json",
                   success:function(data)
                   {
                     if(data){
                        $('#position').empty();
                        $('#position').append('<option hidden>Choose Position</option>'); 
                        $.each(data, function(key, position){
                            $('select[name="position"]').append('<option value="'+ key +'">' + position.role+ '</option>');
                        });
                    }else{
                        $('#position').empty();
                    }
                 }
               });
           }else{
             $('#position').empty();
           }
        });

    </script>
@endsection
