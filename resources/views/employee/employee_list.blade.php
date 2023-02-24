@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">home</a>/
    <a href="#" style="color: #1D1D50;">HR</a>/
    <a href="#" style="color: #1D1D50;">Employee List</a>
</nav>
<br>
<br>
<style>
.pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}

.pagination {
    margin: 0;
}

.radio {
    display: block;
    position: relative;
    padding-left: -5px;
    margin-bottom: 2px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.round_radio {
    display: block;
    position: relative;
    padding-left: 15px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.pagination li:hover {
    cursor: pointer;
}

.header_wrap {
    padding: 30px 0;
}

.num_rows {
    width: 20%;
    float: left;
}

.tb_search {
    width: 20%;
    float: right;
}

.pagination-container {
    width: 70%;
    float: left;
}

.rows_count {
    width: 20%;
    float: right;
    text-align: right;
    color: #999;
}

input[type='file'] {
    opacity: 0
}

input[type='file'] {
    color: rgba(0, 0, 0, 0)
}
</style>
<style>
.switch {
    position: relative;
    display: inline-block;
    width: 50px;
    height: 20px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #6c757d;
    -webkit-transition: .4s;
    transition: .4s;
}

.slider:before {
    position: absolute;
    content: "";
    height: 15px;
    width: 15px;
    left: 4px;
    bottom: 2.5px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

.check:checked+.slider {
    background-color: #0edb7c;
}

.check:focus+.slider {
    box-shadow: 0 0 1px #0edb7c;
}

.check:checked+.slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
    border-radius: 34px;
}

.slider.round:before {
    border-radius: 50%;
}

/* The message box is shown when the user clicks on the password field */
#passmessage {
    display: none;
    color: #1d1d50;
    position: relative;
}

#e_passmessage {
    display: none;
    color: #1d1d50;
    position: relative;
}

/* Add a green text color and a checkmark when the requirements are right */
.passvalid {
    color: green;
    margin: 0px;
    font-size: 10px;
}

.passvalid:before {
    position: relative;
    left: 0px;
    content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.passinvalid {
    color: red;
    margin: 0px;
    font-size: 10px;
    padding-left: 10px;
}

.passinvalid:before {
    position: relative;
    left: 0px;
    content: "✖";
}
</style>
<style>
        th {width: 30%;}
        .outer{border-color: #1d1d50;width=45%;border-radius: 7px;}
        .add_doc{text-decoration: none;display: inline-block;*/width: 30px;height: 30px;background: #8bc34a;font-size: 2rem;
            font-weight: bold;color: #1d1d50;align-items: center;line-height: 0.7;*/display: flex;justify-content: center;
            align-items: center;cursor: pointer;}
        .exdocdelete{text-decoration: none;display: inline-block;background: #f44336;color: #1d1d50;font-size: 1.5rem;
            font-weight:bold;width: 30px;height: 30px;margin-left: auto;display: flex;justify-content: center;align-items: center;
            cursor: pointer;}
        .docflex{display: flex;gap:1.5rem;margin-bottom: 15px;}
        .doc_warp{display: flex;justify-content: space-evenly;align-items: center;width: 100%;margin-bottom: 20px;
            padding-bottom:15px;}
        .doc_contanier{max-width: 600px;border-radius: 5px;padding: 20px;*/box-shadow: 0 2px 2px 43px black;}
        .doc_input{padding: 8px 10px;width: 50%;border-radius: 5px;border-color: #1d1d50;}
        .doc_input:focus{
            outline: 1px solid #efefef;
        }
        .add_decduct{
            text-decoration: none;
            display: inline-block;
            */width: 30px;
            height: 30px;
            background: #8bc34a;
            font-size: 2rem;
            font-weight: bold;
            color: #1d1d50;
            justify-content: space-evenly;
            align-items: center;
            line-height: 0.9;
            cursor: pointer;
        }
        .decduct_input{
            padding: 8px 10px;
            width: 20%;
            border-radius: 5px;
            border-color: #1d1d50;
        }
        #e_passmessage {
            display:block;
            color: #1d1d50;
            position: relative;
            }
            /* Add a green text color and a checkmark when the requirements are right */
            .passvalid {
            color: green;
            margin: 0px;
            font-size: 10px;
            }

            .passvalid:before {
            position: relative;
            left: 0px;
            content: "✔";
            }

            /* Add a red text color and an "x" when the requirements are wrong */
            .passinvalid {
            color: red;
            margin: 0px;
            font-size: 10px;
            padding-left: 10px;
            }

            .passinvalid:before {
            position: relative;
            left: 0px;
            content: "✖";
            }
    </style>

<div class="container">
    {{-- heading --}}
    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
    <div class="row" style="height:50px;">
        <div class="col-sm-4" style="padding-top:5px;">
            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createmyModal"style="margin-left:10px;    --clr: #1D1D50;
                    --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Create Company</button> --}}
        </div>
        <div class="col-sm-4" style="">
            <h4 style="border: 0.5px solid #f1d9b0;
                        border-radius: 25px;
                        background-color: #f1d9b0;
                        padding: 2%;
                        width: 100%;
                        height:90%;
                        text-align:center;
                        box-shadow: inset 0 0 3px #d3d0ca;
                        opacity: .9;">
                <b style="font-size:18px;">Employee List</b>
            </h4>
        </div>
        <div class="col-sm-4" style="">
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
            <div class="header_wrap" style="padding:8px;">
                <div class="num_rows">
                    <div class="form-group">
                        <!--		Show Numbers Of Rows 		-->
                        <select class="form-control" aria-label="Page navigation example" name="state" id="maxRows"
                            style="width: 40%;">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="70">70</option>
                            <option value="100">100</option>
                            <option value="5000">Show All</option>
                        </select>
                    </div>
                </div>
                <div class="tb_search">
                    <input type="text" id="search_input_all"   onkeyup="FilterkeyWord_all_table()"
                        placeholder="Search Company" class="form-control" value="{{ $search }}">
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-class" id="table-id">
                        <thead>
                            <tr>
                                <th class="text-center" style="width:4%;">Sl.No</th>
                                <th class="text-center" style="width:4%;">UniqueId</th>
                                <th class="text-center" style="width:50%;text">Employee Name</th>
                                <th class="text-center" style="width:8%;">Department</th>
                                <th class="text-center" style="width:4%;">Branch</th>
                                <th class="text-center">Designation</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Contant no</th>
                                <th class="text-center" style="width:4%;">Status</th>
                                <th class="text-center" style="width:3%;">Action</th>
                            </tr>
                        </thead>
                        <tbody><?php $i=0; ?><?php  //$i++; //print_r($all_employee);die;?>
                            @foreach ($all_employee as $employee )
                            <?php  $i++; //dd($employee);?>
                            <tr>
                                <td class="text-center">{{ $i }}</td>
                                <td class="text-center">{{ $employee['uniqueid'] }}</td>
                                <td class="">
                                    <div style="display: flex;">
                                        <div><img id="employee_image"
                                                src="{{asset('/') }}/images/faces/{{ $employee['photo'] }}" alt=""
                                                style="border-radius:50%;height:40px;width:40px;border-color:rgb(random(255), random(255), random(255));border-style: solid;">
                                        </div>
                                        <div style="padding-left: 5px">
                                            {{ $employee['name'] }}
                                </td>
                </div>
            </div>
            <td class="text-center">{{ $employee['depart'] }}</td>
            <td class="text-center">{{ $employee['barnch']??null }}</td>
            <td class="text-center">{{ $employee['designation'] }}</td>
            <td class="text-center">{{ $employee['email'] }}</td>
            <td class="text-center">{{ $employee['contact'] }}</td>
            <td class="text-center">
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </td>
            <td scope="row" class="text-center">
                <div class="btn-group">
                    <a class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        style="border-color:none;"> ⋮ </a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" data-toggle="modal" data-target="#edit_personal_details" href="#">edit Personal
                            details</a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#change_destination" href="#">change destination</a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#change_status" href="#">change status</a>

                    </div>
                </div>
                {{-- <a href="{{url('edit_company',$user->uniqueid)}}"><i style="  color:rgb(13, 1, 56);"
                    class="fa fa-edit" aria-hidden="true"></i> --}}
                {{-- <a href="#" data-toggle="modal" data-id="{{ $employee['uniqueid'] }}" data-target="#editcompany"><i
                    style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i> --}}
                {{-- <a href="{{url('#',$user->uniqueid)}}"> <i style="color:rgb(13, 1, 56);padding-left:15px"
                    class="fas fa-trash-alt"></i> --}}
                {{-- <a href="#" data-toggle="modal" data-id="{{ $employee['uniqueid'] }}"
                data-name="{{ $employee['name'] }}" data-target="#deletecompany"> <i
                    style="color:rgb(13, 1, 56);padding-left:25px" class="fas fa-trash-alt"></i> --}}
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
        <!--		Start Pagination -->
        <div class='pagination-container'>
            <nav>
                <ul class="pagination">
                    <li data-page="prev">
                        <span>
                            < <span class="sr-only">(current)
                        </span>
                    </li>
                    <li data-page="next" id="prev">
                        <span> > <span class="sr-only">(current)</span></span>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="rows_count"></div>
    </div>
</div>
</div>
</div>
<!-- 		End of Container -->

<!----------------------------------------------------------- START EMPLOYEE DETAILS -------------------------------------------------------->

<div class="modal fade" id="edit_personal_details" style="">
    <!-- create company -->
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post" action="{{ url('') }}" enctype="multipart/form-data" id="addemployee">
                @csrf
                <h5><b>Personal Details:-</b></h5>

                <div class="row" style="*/background-color:orange;height:280px">
                    <div class="" style="*/background-color: #d3d0ca;width:80%;border-radius:5px;">
                        <div class="row">
                            <div class="" style="width: 50%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="first_name"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">First
                                        Name</label>
                                    <input type="text" placeholder="Enter First Name "
                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                        class="form-control" name="first_name" id="" value="" required>
                                </div>
                            </div>
                            <div class="" style="width: 50%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="last_name"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Last
                                        Name</label>
                                    <input type="text" placeholder="Enter Last Name "
                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                        class="form-control" name="last_name" id="" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 0px;">
                            <div class="" style="width: 30%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="dob"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date
                                        of Birth</label>
                                    <input type="date" onclick="agecalcul(this)" placeholder="Date of Birth"
                                        title="Date of Birth"
                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                        class="form-control" name="dob" id="dob" value="" required>
                                </div>
                            </div>
                            <div class="" style="width: 10%">
                                <div class="">
                                    <label for="age"
                                        style="text-align:center;width: 100%;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Age</label>
                                    <input type="text" placeholder="Age"
                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                        class="form-control" name="age" id="age" value="" readonly>
                                </div>
                            </div>
                            <div class="" style="width: 30%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="gender"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Gender</label>
                                    <select class="form-select" aria-label="Default select example"
                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                        name="gender" id="" required>
                                        <option>Select gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="" style="width: 30%">
                                <div class="">
                                    <label for="email"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email
                                        address</label>
                                    <input type="email" placeholder="Email address "
                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                        class="form-control" name="email" id="" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 0px;">
                            <div style="width:40%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="postal_addr"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Postal
                                        Address</label>
                                    <textarea class="outer" rows="4" style="width:100%;" cols="41"
                                        placeholder="Postal Address" name="postal_addr" form="addemployee"></textarea>
                                </div>
                            </div>
                            <div style="width:60%">
                                <div class="row">
                                    <div class="" style="width:50%;"><span style="color: red">*</span>
                                        <label for="city"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Town/City</label>
                                        <input type="text" placeholder="Town/City "
                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                            class="form-control" name="city" id="" value="" required>
                                    </div>
                                    <div class="" style="width:50%;"><span style="color: red">*</span>
                                        <label for="postal_code"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Postal
                                            Code</label>
                                        <input type="text" placeholder="Postal Code "
                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                            class="form-control" name="postal_code" id="" value="" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="" style="width:50%;"><span style="color: red">*</span>
                                        <label for="national_type"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Nationality
                                            Type</label>
                                        <input type="text" placeholder="Nationality Type "
                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                            class="form-control" name="national_type" id="" value="" required>
                                    </div>
                                    <div class="" style="width:50%;"><span style="color: red">*</span>
                                        <label for="contact_no"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Contact
                                            No</label>
                                        <input type="text" placeholder="Contact No "
                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                            class="form-control" name="contact_no" id="" value="" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="*/background-color:#d3d0ca;width:20%;border-radius:8%;">
                        <label for="passport_photo"
                            style="margin-left: 15%;text-align:center;width:70%;height:30px;margin-top:10px;
                        padding-right:-7px;color:white;background-color: #1d1d50;border-radius: 5px;font-weight:bold;cursor: pointer;">
                            <span style="color: red">*</span>Employee photo
                            <input accept="image/*" type='file' id="passport_photo" name="passport_photo"
                                style="width:0px;height:0px;" required />
                            <div class="invalid-feedback" style="width: 100%;">Logo required.</div>
                        </label>
                        <img id="passport" src="{{asset('/') }}images/faces/vector_img_passport.png"
                            alt="Passport Size Photo"
                            style="border-style: solid;border-color: black;width:90%;height:200px;margin:5% 5% 15% 5%" />
                        <script>
                        passport_photo.onchange = evt => {
                            const [file] = passport_photo.files
                            if (file) {
                                passport.src = URL.createObjectURL(file)
                            }
                        }
                        </script>
                    </div>
                </div>
                <h5 style="margin-top:-20px;margin-bottom:0px"><b>Emergency Contact Person:-</b></h5>
                <div class="row" style="*/background-color:orange;height:120px">
                    <div class="" style="*/background-color: #d3d0ca;width:65%;border-radius:5px;">
                        <div class="row" style="margin-top:0px">
                            <div class="" style="width: 50%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="kin_name"
                                        style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Next
                                        of Kin Name</label>
                                    <input type="text" placeholder="Next of Kin Name"
                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                        class="form-control" name="kin_name" id="" value="" required>
                                </div>
                            </div>
                            <div class="" style="width: 50%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="kin_relation"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Relation</label>
                                    <input type="text" placeholder="Relation " title="Relation"
                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                        class="form-control" name="kin_relation" id="" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 0px;">
                            <div class="" style="width: 50%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="kin_contact_no"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Contact
                                        No</label>
                                    <input type="text" placeholder="Contact No " title="Contact No"
                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                        class="form-control" name="kin_contact_no" id="" value="" required>
                                </div>
                            </div>
                            <div class="" style="background-color:#eee5d4;width: 50%;border-radius:5%;margin-top:15px">
                            </div>
                        </div>
                    </div>
                    <div style="*/background-color:#d3d0ca;width:35%;border-radius:8%;">
                        <label for="employ_sign"
                            style="margin-left: 15%;text-align:center;width:70%;height:30px;margin-top:0px;
                        padding-right:-7px;color:white;background-color: #1d1d50;border-radius: 5px;font-weight:bold;cursor: pointer;">
                            <span style="color: red">*</span>Employee Signature
                            <input accept="image/*" type='file' id="employ_sign" name="employ_sign"
                                style="width:0px;height:0px;" required />
                            <div class="invalid-feedback" style="width: 100%;">Logo required.</div>
                        </label>
                        <img id="employ_signatue" src="" alt="Employee Signature"
                            style="width:80%;height:70px;margin:0% 5% 5% 5%" />
                        <script>
                        employ_sign.onchange = evt => {
                            const [file] = employ_sign.files
                            if (file) {
                                employ_signatue.src = URL.createObjectURL(file)
                            }
                        }
                        </script>
                    </div>
                </div>
              
            
               
                
    
                    <div class style="width: 20%">
                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;"
                            style="margin-left: 61%;--clr: #1D1D50;width:19%;
                        --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add Employee</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:19%;"
                            onclick="history.back()">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-------------------------------------------------------------- END EMPLOYEE DETAILS -------------------------------------------------------->

<!-------------------------------------------------------------- START CHANGE DESTINATION ---------------------------------------------------->
<div class="modal fade" id="change_destination" style="">
    <!-- create company -->
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post" action="{{ url('') }}" enctype="multipart/form-data" id="addemployee">
                @csrf
                <h5 style="margin-top:10px;margin-bottom:0px"><b>Job Information:-</b></h5>
                <div class="row" style="margin-top:0px">
                    <div class="" style="width: 25%">
                        <div class=""><span style="color: red">*</span>
                            <label for="department"
                                style="width: 100px;margin:0px 2px 2px 0px;font-size:10px;">Department</label>
                            <select class="form-select" aria-label="Default select example" title="Department"
                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                name="department" id="department" required>
                                <option value="">Select Department</option>

                            </select>
                        </div>
                    </div>
                    <div class="" style="width: 25%">
                        <div class=""><span style="color: red">*</span>
                            <label for="job_title" style="width: 100px;margin:0px 2px 2px 0px;font-size:10px;">Job
                                Tile</label>
                            <select class="form-select" aria-label="Default select example" title="Job Tile"
                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;" name="job_title"
                                id="job_title" required>
                                <option value="">Choose Job Tile</option>
                            </select>
                        </div>
                    </div>
                    <div class="" style="width: 25%">
                        <div class=""><span style="color: red">*</span>
                            <label for="branch"
                                style="width: 100px;margin:0px 2px 2px 0px;font-size:10px;">Branch</label>
                            <select class="form-select" aria-label="Default select example" title="Branch"
                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;" name="branch"
                                id="branch" required>
                                <option value="">Choose Branch</option>

                            </select>
                        </div>
                    </div>
                    <div class="" style="width: 25%">
                        <div class=""><span style="color: red">*</span>
                            <label for="reporting_to"
                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Reporting
                                To</label>
                            <input type="text" placeholder="Reporting To " title="Reporting To"
                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                class="form-control" name="reporting_to" id="" value="" required>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:0px">
                    <div class="" style="width: 25%">
                        <div class=""><span style="color: red">*</span>
                            <label for="doj"
                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date of
                                Employment</label>
                            <input type="date" placeholder="Date of Employment" title="Date of Employment"
                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                class="form-control" name="doj" id="doj" value="" required>
                        </div>
                    </div>
                    <div class="" style="width: 15%">
                        <div class=""><span style="color: red">*</span>
                            <label for="process_payroll"
                                style="width: 100px;margin:0px 2px 2px 0px;font-size:10px;">Process Payroll</label>
                            <select class="form-select" aria-label="Default select example" title="Process Payroll"
                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                name="process_payroll" id="process_payroll" required>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="" style="width: 30%">
                        <div class=""><span style="color: red">*</span>
                            <label for="contract_type"
                                style="width: 100px;margin:0px 2px 2px 0px;font-size:10px;">Employment contract</label>
                            <select class="form-select" aria-label="Default select example" title="Employment contract"
                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                name="contract_type" id="contract_type" required>
                                <option value="">Select Contract Type</option>
                                <option value="perm">Permantent(PERM)</option>
                                <option value="temp">Temporary(TEMP)</option>
                            </select>
                        </div>
                    </div>
                    <div class="" style="width: 25%;display:none;">
                        <div class=""><span style="color: red">*</span>
                            <label for="eoc"
                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">End of
                                Contract</label>
                            <input type="date" placeholder="End of Contract" title="End of Contract"
                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                class="form-control" name="eoc" id="eoc" value="">
                        </div>
                    </div>
                </div>
                <h5 style="margin-top:20px;margin-bottom:0px"><b>Salary Details:-</b></h5>
                <div class="row" style="margin-top:0px">
                    <div class="" style="width: 25%">
                        <div class=""><span style="color: red">*</span>
                            <label for="basic_salary" style="width: 100px;margin:0px 2px 2px 0px;font-size:10px;">Basic
                                Salary</label>
                            <input type="number" placeholder="Basic Salary" title="Basic Salary"
                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                class="form-control" name="basic_salary" id="basic_salary" value="" required>
                            </select>
                        </div>
                    </div>
                    <div class="" style="width: 25%">
                        <div class=""><span style="color: red">*</span>
                            <label for="parters_drawing"
                                style="width: 100px;margin:0px 2px 2px 0px;font-size:10px;">Parters Drawing</label>
                            <input type="number" placeholder="Parters Drawing" title="Parters Drawing"
                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                class="form-control" name="parters_drawing" id="parters_drawing" value="" required>
                            </select>
                        </div>
                    </div>
                    <div class="" style="width: 25%">
                        <div class=""><span style="color: red">*</span>
                            <label for="payroll_decduction"
                                style="width: 100px;margin:0px 2px 2px 0px;font-size:10px;">Payroll decduction</label>
                            <select class="form-select" aria-label="Default select example" title="Payroll decduction"
                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                name="payroll_decduction" id="payroll_decduction" required>
                                <option value="">Payroll decduction From</option>
                                <option value="basic_salary">From Basic Salary</option>
                                <option value="parters_drawing">From Payroll decduction</option>
                            </select>
                        </div>
                    </div>
                    <div class="" style="width: 25%">
                        <div class=""><span style="color: red">*</span>
                            <label for="taxed"
                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">should be
                                Taxed?</label>
                            <select class="form-select" aria-label="Default select example" title="should be Taxed?"
                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;" name="taxed"
                                id="taxed" required>
                                <option value="">should be Taxed?</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="doc_contanier" style="*/background-color:orange;width:50%;height:auto">
                        <div class="doc_warp">
                            <h6>Add More Document details:-</h6>
                            <a class="add_doc">&plus;</a>
                        </div>
                        <div class="row document_details " style="margin-bottom: 20px;">
                            {{-- Add More Document details:- javascript --}}
                        </div>
                    </div>
                    <div class="doc_contanier" style="*/background-color:green;width:50%;height:auto">
                        <div class="doc_warp">
                            <h6>Add More <span style="color:red;font-weight:bold;"> Decduction percentage</span>:-</h6>
                            <a herf="#" class=" add_decduct ">&plus;</a>
                        </div>
                        <div class="row decduct_details " style="margin-bottom: 20px;">
                            <div class="docflex">
                                <label style="width:50%;" class="doc_input">Pension Rate(%)</label>
                                <input type="number" class="decduct_input" placeholder="%" name="pension_percent">
                                {{-- Add More Decduction percentage javascript --}}
                            </div>
                        </div>
                    </div>
                </div>
                <h5 style="margin-top:-45px;margin-bottom:0px"><b>Bank details:-</b></h5>
                <div class="row" style="margin-top:0px">
                    <div class="" style="width: 25%">
                        <div class=""><span style="color: red">*</span>
                            <label for="bank_name"
                                style="width: 100px;margin:0px 2px 2px 0px;font-size:10px;">Bank</label>
                            <input type="text" placeholder="Bank" title="Bank"
                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                class="form-control" name="bank_name" id="bank" value="" required>
                            </select>
                        </div>
                    </div>
                    <div class="" style="width: 25%">
                        <div class=""><span style="color: red">*</span>
                            <label for="acc_no" style="width: 100px;margin:0px 2px 2px 0px;font-size:10px;">Account
                                Number</label>
                            <input type="text" placeholder="Account Number" title="Account Number"
                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                class="form-control" name="acc_no" id="acc_no" value="" required>
                            </select>
                        </div>
                    </div>
                    <div class="" style="width: 25%">
                        <div class=""><span style="color: red">*</span>
                            <label for="bank_branch" style="width: 100px;margin:0px 2px 2px 0px;font-size:10px;">Bank
                                Branch</label>
                            <input type="text" placeholder="Bank Branch" title="Bank Branch"
                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                class="form-control" name="bank_branch" id="bank_branch" value="" required>
                        </div>
                    </div>
                    <div class="" style="width: 25%">
                        <div class=""><span style="color: red">*</span>
                            <label for="bank_code"
                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Bank
                                code</label>
                            <input type="text" placeholder="Bank code" title="Bank code"
                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                class="form-control" name="bank_code" id="bank_code" value="" required>
                        </div>
                    </div>
                </div>
                <h5 style="margin-top:20px;margin-bottom:10px"><b>Upload Related Document ( '<i>pdf</i> ' ) :-</b></h5>
                <div class="row">
                    <div style="width: 20%">
                        <label for=""
                            style="margin-left: 15%;text-align:center;width:80%;height:70%;margin-top:10px;
                    padding-right:-7px;color:white;background-color: #1d1d50;border-radius: 5px;font-weight:bold;cursor: pointer;"
                            id="upload_doc">
                            Add Documnet</label>
                    </div>
                    <div id="upload_con" style="width: 60%">
                        {{-- Upload Related Document javascript --}}
                    </div>
                </div>
             
                
                    <div class style="width: 20%">
                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;"
                            style="margin-left:61%;--clr: #1D1D50;width:19%;
                        --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add Employee</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:19%;"
                            onclick="history.back()">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
        $('#department').on('change', function() {// select department to job title  ---start
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
                        $('#job_title').empty();
                        $('#job_title').append('<option hidden>Choose Job Title</option>'); 
                        $.each(data, function(key, position){
                            $('select[name="job_title"]').append('<option value="'+ position.id +'">' + position.role+ '</option>');
                        });
                    }else{
                        $('#job_title').empty();
                    }
                 }
               });
           }else{
             $('#job_title').empty();
           }
        });// select department to job title  ---start



        function exdocremoveinput(){// Add More Document details author@udayan --start
            this.parentElement.remove();
        }
        const adddoc = document.querySelector(" .add_doc ");
        const exdocinput = document.querySelector(" .document_details ");
        let m =0;
        function exdocaddinput(){
            const exdocname = document.createElement("input");
            exdocname.type="text";
            exdocname.className="doc_input";
            exdocname.placeholder = "Enter Document ID Name";
            exdocname.name="exdoc["+m+"][0]";

            const docidnumber = document.createElement("input");
            docidnumber.type="text";
            docidnumber.className="doc_input";
            docidnumber.placeholder = "Enter Document ID no.";
            docidnumber.name="exdoc["+m+"][1]";

            const btndele = document.createElement("a");
            btndele.className="exdocdelete";
            btndele.innerHTML = "&times;"

            const exdocflex =document.createElement("div");
            exdocflex.className="docflex";
            
            btndele.addEventListener("click",exdocremoveinput);

            exdocinput.appendChild(exdocflex);
            exdocflex.appendChild(exdocname);
            exdocflex.appendChild(docidnumber);
            exdocflex.appendChild(btndele);
            ++i;
        }
        adddoc.addEventListener("click",exdocaddinput);// Add More Document details author@udayan --end
    


        function decductremoveinput(){// Add More Decduction percentage author@udayan --start
            this.parentElement.remove();
        }
        const add_decduct = document.querySelector(" .add_decduct  ");
        const decduct_details = document.querySelector(" .decduct_details ");
        let p=0;
        function add_decduct_input(){
            const decductname = document.createElement("input");
            decductname.type="text";
            decductname.className="doc_input";
            decductname.placeholder = "Enter Decduction Name";
            decductname.name="decduct["+p+"][0]"

            const decductnumber = document.createElement("input");
            decductnumber.type="number";
            decductnumber.className="decduct_input";
            decductnumber.placeholder = "%";
            decductnumber.name="decduct["+p+"][1]"

            const decductdele = document.createElement("a");
            decductdele.className="exdocdelete";
            decductdele.innerHTML = "&times;"

            const decductflex =document.createElement("div");
            decductflex.className="docflex";
            
            decductdele.addEventListener("click",decductremoveinput);

            decduct_details.appendChild(decductflex);
            decductflex.appendChild(decductname);
            decductflex.appendChild(decductnumber);
            decductflex.appendChild(decductdele);
            ++p;

        }
        add_decduct.addEventListener("click",add_decduct_input);// Add More Decduction percentage author@udayan --end

        
        
        function uploadremoveinput(){// Add More Decduction percentage author@udayan --start
            this.parentElement.remove();
        }
        const upload_doc = document.querySelector(" #upload_doc  ");
        const upload_con = document.querySelector(" #upload_con ");
        let l=0;
        function upload_doc_fn(){
            const uplaodname = document.createElement("input");
            uplaodname.type="text";
            uplaodname.className="doc_input";
            uplaodname.placeholder = "Enter Document Name";
            uplaodname.name = "updoc["+l+"][0]";

            const uploaddoc = document.createElement("input");
            uploaddoc.type="file";
            uploaddoc.accept="application/pdf";
            uploaddoc.style.width = "60%";
            uploaddoc.className="decduct_input";
            uploaddoc.placeholder = "uploaddoc";
            uploaddoc.name = "updoc["+l+"][1]";

            const uploaddele = document.createElement("a");
            uploaddele.className="exdocdelete";
            uploaddele.innerHTML = "&times;"

            const uploadflex =document.createElement("div");
            uploadflex.className="docflex";

            uploaddele.addEventListener("click",uploadremoveinput);

            upload_con.appendChild(uploadflex);
            uploadflex.appendChild(uplaodname);
            uploadflex.appendChild(uploaddoc);
            uploadflex.appendChild(uploaddele);
            ++l;
        }
        upload_doc.addEventListener("click",upload_doc_fn);// Add More Decduction percentage author@udayan --end

    
    
    </script>
<!-------------------------------------------------------------- END CHANGE DESTINATION ------------------------------------------------------>

<!-------------------------------------------------------------- START CHANGE STATUS --------------------------------------------------------->
<div class="modal fade" id="change_status" style="">
    <!-- create company -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post" action="{{ url('') }}" enctype="multipart/form-data" id="addemployee">
                @csrf
                <h5><b>Employee Status:-</b></h5>

                <div class="row" style="">
                <div class="" style="width: 30%">
                                <div class="">
                                    <label for="status"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:15px;margin-top: 17%;margin-left: 118%;">Status</label>
                                    <select class="form-select" aria-label="Default select example"
                                        style="height:35px;border-color: #1d1d50;width:100%;margin-left: 118%;margin-bottom: 7%; border-radius: 7px;"
                                        name="gender" id="" required>
                                        <option>Select</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                        <option value="3">Suspended</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                                
                   
                    <div class style="width: 20%">
                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;"
                            style="margin-left: 61%;--clr: #1D1D50;width:19%;
                        --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add Employee</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:19%;"
                            onclick="history.back()">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-------------------------------------------------------------- END CHANGE STATUS ----------------------------------------------------------->



<div class="modal fade" id="deletecompany" style="">
    <!-- delete company -->
    <div class="modal-dialog modal-lg" style="width:30%;">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post" id="delete_company" action="#" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="deleteuniqueid" value="uniqueid">
                <div class="modal-header" style="padding:0rem 0rem;">
                    <div style="padding:1rem 1rem;">
                        <h4 class="text-centre"><b>Delete <span id="deletcompany_name"></span></b></h4>
                    </div>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <h6><b><span>Are you sure?</span></b></h6>
                        </div>
                        <div class="row">
                            <div class="" style="width: 30%;">
                            </div>
                            <div lass="" style="width: 0%"></div>
                            <div class="col-sm" style="padding-right: 0px;width: 70%;">
                                <br>
                                <button type="submit" class="btn btn-primary float:right;"
                                    Style="width:45%;background-color:#DD4132;">Yes</button>
                                <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                                    data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    
        window.onload = function() {
            $(document).ready(function(){
                var s_count = $('.table').children('tbody').children('tr:first-child').children('td').length;
                var s_input, s_filter, s_table, s_tr, s_td, s_i;
                s_input = document.getElementById("search_input_all");
                var s_input_value = document.getElementById("search_input_all").s_value;
                s_filter = s_input.value.toLowerCase();
                if (s_input_value != '') {
                    s_table = document.getElementById("table-id");
                    s_tr = s_table.getElementsByTagName("tr");
                    for (s_i = 1; s_i < s_tr.length; s_i++) {
                        var s_flag = 0;
                        for (s_j = 0; s_j < s_count; s_j++) {
                            s_td = s_tr[s_i].getElementsByTagName("td")[s_j];
                            if (s_td) {

                                var s_td_text = s_td.innerHTML;
                                if (s_td.innerHTML.toLowerCase().indexOf(s_filter) > -1) {
                                    //var td_text = td.innerHTML;  
                                    //td.innerHTML = 'shaban';
                                    s_flag = 1;
                                } else {
                                    //DO NOTHING
                                }
                            }
                        }
                        if (s_flag == 1) {
                            s_tr[s_i].style.display = "";
                        } else {
                            s_tr[s_i].style.display = "none";
                        }
                    }
                } else {
                    $('#maxRows').trigger('change');
                }
            });
        }
    
</script>



@endsection