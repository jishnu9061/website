@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <div class="py-5 text-center">
        <div>
            <h2 style="text-align:center; ">New Client Services</h2>
            <hr class="mb-4">.

        </div>
    </div>
    <div class="row">
        <div class="col-md-12 order-md-1">
            <form method="post" action="" id="form">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Receipt No</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="receipt" id="username" value=""
                                    placeholder="Receipt No" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Receipt No is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="name" id="username" value=""
                                    placeholder="Name" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Mobile</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="mobile" id="username" value=""
                                    placeholder="mobile" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Amount Paid</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="amount" id="username" value=""
                                    placeholder="Amount Paid" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="date" id="username" value=""
                                    placeholder="Date" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="email" id="username" value=""
                                    placeholder="email" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="code" id="cars">
                                    <option value="volvo"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Payment Method</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="payment" id="cars">
                                    <option value="volvo"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <button type="submit" class="btn btn-primary submit_btn_btn">Submit</button>
                            <a href="{{route('client-index')}}" type="button" class="btn btn-primary "
                                style="width:30%; margin-top:30px; padding:8px">Back</a>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>

</div>


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
                            /div> <
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