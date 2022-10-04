@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <div class="py-5 text-center">

        <div>
            <!-- <h2 style="text-align:center; ">Edit Quotation</h2>
            <hr class="mb-4">. -->
            <div>
                <button class="btn btn-primary"
                    style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Edit
                            Quotation</u></b></span></button><br>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                    crossorigin="anonymous">

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
                            <label for="username">Document Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="document" id="cars">
                                    <option value="volvo"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Issue Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="date" class="form-control" name="issue" id="age" value=""
                                    placeholder="corporation" min="0" max="99">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Customer</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="customer" id="cars">
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
                            <label for="username">Client Ref No</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="ref" id="age" value="" placeholder=""
                                    min="0" max="99">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Currency</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="currency" id="cars">
                                    <option value="volvo"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Exchange Rate</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="rate" value="" id="confirm_password"
                                    placeholder="">
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
                            <label for="username">Approver</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="approver" id="cars">
                                    <option value="volvo"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Bank Account</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="account" id="cars">
                                    <option value="volvo"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Billing Information</label>
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
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">To The Attender Of</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="attender" value="" id="confirm_password"
                                    placeholder="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Subject/Tittle</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="subject" value="" id="confirm_password"
                                    placeholder="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- <h2 style="text-align:center; text-shadow: 2px 1px;"> Quotation Items</h2> -->
                <div>
                    <button class="btn btn-primary"
                        style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Quotation
                                Items</u></b></span></button><br>
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
                        rel="stylesheet"
                        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                        crossorigin="anonymous">

                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="type" id="cars">
                                    <option value="volvo"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Particulers Of Service Rendered</label>
                            <div class="input-group">
                                <textarea class="form-control" id="form7Example7" rows="2"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Postal Address is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Amount</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="pin" id="age" value="" placeholder=""
                                    min="0" max="99">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">V.A.T</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="vat" id="cars">
                                    <option value="volvo"></option>
                                </select>
                            </div>
                        </div>
                    </div>
</div>
                    <br>
                    <div>
                        <a href=""><button class="btn btn-primary " >New
                                Item</button></a>
                    
                    <a href=""><button class="btn btn-primary "
                           >Delete Item</button></a>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Comments</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="comments" value="" id="password"
                                    placeholder="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Comments is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- <div class="container">
                        <div class="row">
                            <div class="col-sm">

                            </div>
                            <div class="col-sm">
                                <button type="submit" class="btn btn-primary submit_btn_btn">Submit</button>
                                <a href="{{route('client-index')}}" type="button" class="btn btn-primary "
                                    style="width:30%; margin-top: 30px; padding:8px;">Back</a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-sm">

                    <div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary float:right;"
                                Style="width:50%;">Submit</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;">Back</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
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
                                    /div> < /
                                    div > <
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
                                    /label> < /
                                    div > <
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
                                    /label> < /
                                    div > <
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
                                    /label> < /
                                    div >

                                    <
                                    /div> < /
                                    div > <
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
                /div> < /
                div > <
                /div> < /
                div >

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
                /div> < /
                div > <
                /div> < /
                div > <
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
                /div> < /
                div > <
                /div> < /
                div > <
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
                /div> < /
                div > <
                /div> < /
                div >

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
                /div> < /
                div > <
                /div> < /
                div > <
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
                /div> < /
                div > <
                /div> < /
                div > <
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
                /tr> < /
                table > {
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
                        -- < /div> --}} < /
                        div > <
                            /div> < /
                            div >

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
                            /tbody> < /
                            table > <
                            /div> < /
                            div > <
                            script src = "{{ url('assets/js') }}/jquery.min.js" >
</script>
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
                                    /tbody> < /
                                    table > <
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
                                    /tbody> < /
                                    table > <
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
                                    /div> < /
                                    select > <
                                    /div> < /
                                    div > <
                                    /div> < /
                                    div > <
                                    hr class = "mb-4" >

                                    <
                                    button type = "submit"
                                    class = "btn btn-primary btn-lg btn-block"
                                    type = "submit" > Add staffs < /button>

                                    <
                                    /div> < /
                                    div > <
                                    /form> < /
                                    div > <
                                    script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" >
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