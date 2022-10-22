@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <div class="py-5 text-center">
        @if(Session::has('staffregistered'))
        <div class="alert alert-dark" role="alert">
            {{ Session::get('staffregistered')}}
        </div>
        @endif
        @if(Session::has('leavevalidat'))
        <div class="alert alert-dark" role="alert">
            {{ Session::get('leavevalidat')}}
        </div>
        @endif

        <div class="col-sm">



        </div>
        <div>
            <!-- <h2>Add Event</h2>
            <hr class="mb-4">. -->
            <div>
            <div class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Edit Account Details</u></b></span></div><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">

        
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12 order-md-1">

        <form method="post"action="{{url('update_bank_account')}}"id="form">  
          <input type="hidden" name="id" value="{{$bank_details->id}}">
                @csrf
                <div class="row">
                <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Bank</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select type="text" value="" name="bank"style="width:100%;">
                            <option>{{$bank_details->bank}}</option>
                            <option>AFRICAN BANKING CORP LTD</option>
                            <option>AKIBA BANK LTD</option>
                            <option>BANK OF AFRICA LTD</option>
                            <option>BANK OF BARODA</option>
                            <option>BANK OF INDIA</option>
                            <option>BARCLAYS BANK</option>
                            <option>CENTRAL BANK OF KENYA</option>
                            <option>CFC BANK</option>
                            <option>CHASE BANK (K) LTD</option>
                            <option>CITI BANK</option>
                            <option>CO-OPERATIVE BANK</option>
                            <option>COMMERCIAL BANK OF AFRICA</option>
                            <option>CONSOLIDATED BANK</option>
                            <option>CREDIT BANK LTD</option>
                            <option>DEVELOPMENT BANK OF KENYA LIMITED</option>
                            <option>DIAMOND TRUST BANK KENYA LIMITED</option>
                            <option>DIRECT MPESA</option>
                            <option>DUBAI BANK OF KENYA</option>
                            <option>EQUITORIAL COMMERCIAL BANK LTD</option>
                            <option>EQUITY BANK</option>
                            <option>FAMILY BANK LTD</option>
                            <option>FIDELITY BANK</option>
                            <option>FINA BANK LTD</option>
                            <option>GIRO BANK BANDA STREET</option>
                            <option>GUARDIAN BANK</option>
                            <option>HABIB BANK LTD</option>
                            <option>HFCK</option>
                            <option>I & M BANK</option>
                            <option>IMPERIAL BANK</option>
                            <option>KENYA COMMERCIAL BANK</option>
                            <option>MIDDLE EAST BANK</option>
                            <option>MWITO SACCO SOCIETY LTD</option>
                            <option>NATIONAL BANK OF KENYA</option>
                            <option>NIC BANK</option>
                            <option>ORIENTAL COMMERCIAL BANK</option>
                            <option>PARAMOUNT / UNIVERSAL BANK</option>
                            <option>PAYPAL</option>
                            <option>POST BANK</option>
                            <option>PRIME BANK LTD</option>
                            <option>SIDIAN BANK</option>
                            <option>SOUTHERN CREDIT BANKING CORPORATION</option>
                            <option>STANBIC BANK KENYA LTD</option>
                            <option>STANDARD CHARTERED BANK</option>
                            <option>STIMA DT SACCO SOCIETY LIMITED</option>
                            <option>TRANS-NATIONAL BANK</option>
                            <option>VICTORIA COMMERCIAL BANK</option>
                         

                        </select></br>
                                
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Branch</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="branch" id="username" value="{{$bank_details->branch}}"required>
                                
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Account Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="account_name" id="username" value="{{$bank_details->account_name}}"required>

                            </div>
                        </div>
                    </div>



                   
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Account Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="account_no" id="username" value="{{$bank_details->account_number}}"required></br>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Bank Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="bank_code" id="age"value="{{$bank_details->bank_code}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Branch Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="branch_code" id="confirm_password"value="{{$bank_details->branch_code}}" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Telephone Number is required.
                                </div>
                            </div>
                        </div>
                    </div>
              
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Swift Code</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="swift_code" id="confirm_password" value="{{$bank_details->swift_code}}"required>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Mpesa No</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="mpesa_no" id="confirm_password" value="{{$bank_details->mpesa_code}}"required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Telephone Number is required.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Bank G/L Account</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <select type="text" value="" name="bank_gl_ac"style="width:100%;">
                            <option>{{$bank_details->bank_gl_ac}}</option>
                            <option>8004==> Client A/C Sidian Bank</option>
                            <option>8000==>Client Account - Cooperative Bank</option>
                            <option>8008==>Client Account - Cooperative Bank (USD)</option>
                            <option>8003==>Client Account - DTB Bank</option>
                            <option>8006==>Client Account - Equity Bank</option>
                            <option>8009==>Client Account - PayPal</option>
                            <option>8001==>Office Account - Cooperative Bank</option>
                            <option>8010==>Office Account - DIRECT MPESA</option>
                            <option>8002==>Office Account - DIRECT MPESA</option>
                            <option>8010==>Office Account - Stima Sacco Society Ltd</option>
                            <option>8005==>Office Account - Sidian Bank</option>

                        </select>
                </div>
            </div>
        </div>

</div>
<br>



                <div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;">Close</button>
                        </div>
                    </div>
                </div>

</div>






                </tbody>
                </table>
            </div>
        </div>
        <script src="{{ url('assets/js') }}/jquery.min.js"></script>
        <script type="text/javascript">
        $(function() {
            $('[data-toggle="popover"]').popover()
        })


        $(document).on('click', '#testing', function() {
                    $(this).text(' submited ');
                    $('.checkz:checked').each(function() {
                                var allowanceid = this.value;
                                var staffid = $('#staffname').val();


                                $(this).prop('disabled', true);
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });


                                $.ajax({
                                            method: "POST",
                                            url: "/allowancetostaff",
                                            data: {
                                                "_token": "{{ csrf_token()}}",
                                                'allowanceid': allowanceid,
                                                'staffid': staffid,
                                                'status': 'allowance',
                                            },

                                            //success: function (response){
                                            //  alert(response.status);
                                            //},
                                            <
                                            /select>

                                            <
                                            /div> <
                                            div class = "form-group col-md-7" >
                                            <
                                            label
                                            for = "username" > Consulatation Fees < /label> <
                                            div class = "input-group" >
                                            <
                                            div class = "input-group-prepend" >

                                            <
                                            /div> <
                                            input type = "number"
                                            class = "form-control"
                                            name = "cons_fee"
                                            id = "cons_fee"
                                            placeholder = ""
                                            min = "0" >
                                            <
                                            div class = "invalid-feedback"
                                            style = "width: 100%;" >
                                            <
                                            /div> <
                                            /div> <
                                            /div>

                                            <
                                            div class = "col-md-4 col-lg-2" >
                                            <
                                            p class = "card-title" > < b > Sex < /b></p >
                                            <
                                            div class = "card-body" >
                                            <
                                            div class = "form-check" >
                                            <
                                            input class = "form-check-input"
                                            type = "radio"
                                            name = "patienthere"
                                            id = "flexRadioDefault1" >
                                            <
                                            label class = "form-check-label"
                                            for = "flexRadioDefault1" >
                                            Male <
                                            /label> <
                                            /div> <
                                            div class = "form-check" >
                                            <
                                            input class = "form-check-input"
                                            type = "radio"
                                            name = "patienthere"
                                            id = "flexRadioDefault1"
                                            checked >
                                            <
                                            label class = "form-check-label"
                                            for = "flexRadioDefault1" >
                                            Female <
                                            /label> <
                                            /div> <
                                            div class = "form-check" >
                                            <
                                            input class = "form-check-input"
                                            type = "radio"
                                            name = "patienthere"
                                            id = "flexRadioDefault1"
                                            checked >
                                            <
                                            label class = "form-check-label"
                                            for = "flexRadioDefault1" >
                                            Others <
                                            /label> <
                                            /div>

                                            <
                                            /div> <
                                            /div> <
                                            /div>

                                            <
                                            div style = "height:50px;" >

                                            <
                                            div style = "height: 50px;" >

                                            <
                                            /div> <
                                            script src = "{{ url('assets/js') }}/jquery.min.js" >
        </script>
        <script type="text/javascript">
        $(document).on('input', '#price', function() {
            alert('sdf');
            $('#percent').prop('readonly', true);

        });
        $(document).on('input', '#percent', function() {
                    $('#price').prop('readonly', true); <
                    /div>

                    <
                    h6 > Salary And Allowances < /h6>

                        <
                        hr class = "mb-4" >
                        <
                        div class = "row" >
                        <
                        div class = "col-md-4" >
                        <
                        div class = "mb-1" >
                        <
                        label
                    for = "username" > Salary < /label> <
                        div class = "input-group" >
                        <
                        div class = "input-group-prepend" >

                        <
                        /div> <
                        input type = "number"
                    class = "form-control"
                    name = "salary"
                    id = "username"
                    placeholder = "Salary"
                    min = "0" >
                        <
                        div class = "invalid-feedback"
                    style = "width: 100%;" >
                        Salary is required. <
                        /div> <
                        /div> <
                        /div> <
                        /div>

                        <
                        div class = "col-md-4" >
                        <
                        div class = "mb-1" >
                        <
                        label
                    for = "username" > Years of experience < /label> <
                        div class = "input-group" >
                        <
                        div class = "input-group-prepend" >

                        <
                        /div> <
                        input type = "number"
                    class = "form-control"
                    name = "yearsexp"
                    id = "username"
                    placeholder = "Experience"
                    min = "0"
                    max = "70" >
                        <
                        div class = "invalid-feedback"
                    style = "width: 100%;" >
                        Years of experience is required. <
                        /div> <
                        /div> <
                        /div> <
                        /div> <
                        div class = "col-md-4" >
                        <
                        div class = "mb-1" >
                        <
                        label
                    for = "username" > D.O.B < /label> <
                        div class = "input-group" >
                        <
                        div class = "input-group-prepend" >

                        <
                        /div> <
                        input type = "date"
                    class = "form-control"
                    name = "dob"
                    id = "username"
                    placeholder = "DOB" >
                        <
                        div class = "invalid-feedback"
                    style = "width: 100%;" >
                        dob is required. <
                        /div> <
                        /div> <
                        /div> <
                        /div> <
                        /div>

                    {
                        {
                            Session::forget('staffregistered')
                        }
                    } <
                    div class = "row" >
                        <
                        div class = "col-md-4" >
                        <
                        div class = "mb-1" >
                        <
                        label
                    for = "username" > Bank Name < /label> <
                        div class = "input-group" >
                        <
                        div class = "input-group-prepend" >

                        <
                        /div> <
                        input type = "text"
                    class = "form-control"
                    name = "bankname"
                    id = "username"
                    placeholder = "Bank Name" >
                        <
                        div class = "invalid-feedback"
                    style = "width: 100%;" >
                        Bank Name is required. <
                        /div> <
                        /div> <
                        /div> <
                        /div>

                        <
                        div class = "col-md-4" >
                        <
                        div class = "mb-1" >
                        <
                        label
                    for = "username" > Account Number < /label> <
                        div class = "input-group" >
                        <
                        div class = "input-group-prepend" >

                        <
                        /div> <
                        input type = "number"
                    class = "form-control"
                    name = "accountnumber"
                    id = "username"
                    placeholder = "Account Number"
                    min = "0" >
                        <
                        div class = "invalid-feedback"
                    style = "width: 100%;" >
                        Account number is required. <
                        /div> <
                        /div> <
                        /div> <
                        /div> <
                        div class = "col-md-4" >
                        <
                        div class = "mb-1" >
                        <
                        label
                    for = "username" > IFSC code < /label> <
                        div class = "input-group" >
                        <
                        div class = "input-group-prepend" >

                        <
                        /div> <
                        input type = "text"
                    class = "form-control"
                    name = "isfc"
                    id = "username"
                    placeholder = "Ifsc Code" >
                        <
                        div class = "invalid-feedback"
                    style = "width: 100%;" >
                        IFSC Code is required. <
                        /div> <
                        /div> <
                        /div> <
                        /div> <
                        div class = "col-md-12" >
                        <
                        div class = "mb-1" >
                        <
                        br >
                        <
                        h6 > No: of Leaves(Annual) < /h6>

                        <
                        div class = "input-group" >

                        <
                        div class = "input-group-prepend" >
                        <
                        /div> <
                        table class = "table" >
                        <
                        tr >



                        <
                        td >

                        <
                        input type = "hidden"
                    name = "leave_type[]"
                    value = "" > < /td> <
                        td > < input type = "number"
                    class = "form-control"
                    name = "leaves[]"
                    value = ""
                    min = "0"
                    max = "365"
                    width = "auto" > < /td>



                        <
                        /tr> <
                        /table> {
                            {
                                -- < input type = "text"
                                class = "form-control"
                                name = "leavetype"
                                value = ""
                                id = "leavetype"
                                placeholder = "" >
                                    <
                                    div class = "invalid-feedback"
                                style = "width:100%;" > --
                            }
                        } {
                            {
                                -- < /div> --}} <
                                /div> <
                                /div> <
                                /div>

                                <
                                /div> <
                                div style = "height: 50px;" >

                                    <
                                    /div> <
                                    div class = "row" >

                                    <
                                    div class = "col-md-4 col-lg-4" >
                                    <
                                    p > < b > Fixed Allowances < /b></p >
                                    <
                                    table class = "table table-bordered" >
                                    <
                                    tbody >



                                    <
                                    tr >

                                    <
                                    td > < /td> <
                                    input type = "hidden"
                                name = ""
                                value = "" >
                                    <
                                    td > < input type = "checkbox"
                                class = "checkz"
                                name = "allowz[]"
                                value = "" > < /td>

                                    <
                                    /tr>



                                    <
                                    /tbody> <
                                    /table> <
                                    /div> <
                                    /div>

                                    <
                                    div class = "modal"
                                id = "my" >
                                    <
                                    div class = "modal-dialog" >
                                    <
                                    div class = "modal-content" >
                                    <
                                    div class = "modal-header" >
                                    <
                                    div class = "modal-body" >
                                    <
                                    form action = "" >
                                    <
                                    div >
                                    <
                                    input type = "text"
                                name = "type"
                                class = "form-control"
                                placeholder = "Country" >
                                    <
                                    button class = "btn btn-primary sub_btnn"
                                type = "submit" > submit < /button> <
                                    /div> <
                                    /form> <
                                    /div> <
                                    /div> <
                                    /div> <
                                    /div> <
                                    /div> <
                                    /div>

                                    <
                                    script src =
                                    "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                                integrity = "sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                                crossorigin = "anonymous" >
        </script>
        <script src="{{ url('assets/js') }}/jquery.min.js"></script>
        <script type="text/javascript">
        $(function() {
            $('[data-toggle="popover"]').popover()
        })

        $(document).on('click', '#testing1', function() {

                    $(this).text(' submited ');
                    $('.checkz:checked').each(function() {
                                var allowanceid = this.value;
                                var staffid = $('#staffname').val();


                                $(this).prop('disabled', true);
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });


                                $.ajax({
                                            method: "POST",
                                            url: "/allowancetostaff",
                                            data: {
                                                "_token": "{{ csrf_token()}}",
                                                'allowanceid': allowanceid,
                                                'staffid': staffid,
                                                'status': 'reduction',

                                            },

                                            //success: function (response){
                                            //  alert(response.status);
                                            //},


                                            <
                                            div class = "col-md-4 col-lg-4" >
                                            <
                                            p > < b > Non - Fixed Allowances < /b></p >
                                            <
                                            table class = "table table-bordered" >
                                            <
                                            tbody >



                                            <
                                            tr >

                                            <
                                            td > < /td> <
                                            input type = "hidden"
                                            name = ""
                                            value = "" >
                                            <
                                            td > < input type = "number"
                                            class = "checkz"
                                            name = "nonfx[]"
                                            min = "0"
                                            value = "" > < /td>

                                            <
                                            /tr>



                                            <
                                            /tbody> <
                                            /table> <
                                            /div>

                                            <
                                            div class = "col-md-4 col-lg-4" >
                                            <
                                            p > < b > Deductions < /b></p >
                                            <
                                            table class = "table table-bordered" >
                                            <
                                            tbody >



                                            <
                                            tr >

                                            <
                                            td > < /td> <
                                            input type = "hidden"
                                            name = ""
                                            value = "" >
                                            <
                                            td > < input type = "checkbox"
                                            class = "checkz"
                                            name = "category[]"
                                            value = "" > < /td>

                                            <
                                            /tr>



                                            <
                                            /tbody> <
                                            /table> <
                                            /div>

                                            <
                                            /div> <
                                            div class = "row" >
                                            <
                                            div class = "col-md-4" >
                                            <
                                            div class = "mb-1" >
                                            <
                                            label
                                            for = "username" > Staff Status < /label> <
                                            div class = "input-group" >
                                            <
                                            div class = "input-group-prepend" >
                                            <
                                            /div> <
                                            select class = "form-control"
                                            name = "status"
                                            id = "status" >
                                            <
                                            option value = "" > Select < /option>

                                            <
                                            option value = "" > HH < /option>

                                            <
                                            div class = "invalid-feedback"
                                            style = "width: 100%;" >
                                            <
                                            /div> <
                                            /select> <
                                            /div> <
                                            /div> <
                                            /div> <
                                            /div> <
                                            hr class = "mb-4" >

                                            <
                                            button type = "submit"
                                            class = "btn btn-primary btn-lg btn-block"
                                            type = "submit" > Add staffs < /button>

                                            <
                                            /div> <
                                            /div> <
                                            /form> <
                                            /div> <
                                            script src =
                                            "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" >
        </script>
        <script type="text/javascript">
        $('#password, #confirm_password').on('keyup', function() {
            var v = $('#password').val();
            var b = $('#confirm_password').val()
            if (v != b) {
                $('#test').html('Not Matching').css('color', 'red');
            } else {
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
        $(document).ready(function() {
            $('#form').validate({
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phoneno: {
                        required: true
                    }
                    number: {
                        required: true,
                        digits: true

                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
        </script>
        @endsection