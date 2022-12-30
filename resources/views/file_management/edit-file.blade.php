@extends('layouts.hmsmain')
@section('content')
<div class="container">

    <h4 id="hdtpa"><b>Edit File</b></h4>
    <br><br>




    <div class="container">
        <form method="post" action="{{url('update')}}" id="form">
            @csrf
            <!-- <h4><b> Matter </b></h4> -->

            <div class="row">

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="username">Client</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>---select---</option>
                            <option value="1">client1</option>
                            <option value="2">client2</option>
                            <option value="3">client3</option>
                        </select>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="username">Associative Handling</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <select name="assoc_handling" id="cars">
                                <option>Select</option>
                                <option>Residensial</option>
                                <option>Non Residensial</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="username">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <input type="email" class="form-control" name="email" id="age" value="{{$edit->email}}">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="username">Telephone</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="number" class="form-control" name="phone" id="age" value="{{$edit->phone}}">
                            <div class="invalid-feedback" style="width: 100%;">
                                Age is required.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="username">Address</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="address" id="age" value="{{$edit->address}}">
                            <div class="invalid-feedback" style="width: 100%;">
                                Age is required.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="username">File Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <select>
                                <option value="">---select---</option>
                                <option value="">file 1</option>
                                <option value="">file 2</option>
                                <option value="">file 3</option>

                            </select>
                            <!-- <input type="text" class="form-control" name="file_name" value=""
                                                        id="confirm_password"> -->
                            <div class="invalid-feedback" style="width: 100%;">
                                Password is required.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="username">Responsible Advocate</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="advocate" id="age" value="" min="0" max="99">
                            <div class="invalid-feedback" style="width: 100%;">
                                Age is required.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="username">Most Recent Progress</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="recent_progress" id="age" value="" min="0"
                                max="99">
                            <div class="invalid-feedback" style="width: 100%;">
                                Age is required.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="username">Work Flow</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="work_flow" id="age" value="" min="0" max="99">
                            <div class="invalid-feedback" style="width: 100%;">
                                Age is required.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="">Practice Area</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <select>
                                <option value="select">---select---</option>
                                <option value="Family Law">Family Law</option>
                                <option value="Personal Injury">Personal Injury</option>
                                <option value="General Practice">General Practice</option>
                                <option value="Estate Planning">Estate Planning</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Criminal Law">Criminal Law</option>
                                <option value="Civil Litigation">Civil Litigation</option>
                                <option value="Business Law">Business Law</option>
                                <option value="Guardianship Law">Guardianship Law</option>
                                <option value="Probate Law">Probate Law</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="username">Opening Date</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <input type="date" class="form-control" name="close_date" id="age"
                                value="{{ $edit->open_date}}" min="0" max="99">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="username">Closing Date </label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <input type="date" class="form-control" name="close_date" id="age"
                                value="{{ $edit->close_date}}" min="0" max="99">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Status</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <select>
                                <option value="select">---select---</option>
                                <option value="">Opened</option>
                                <option value="">Pending</option>
                                <option value="">Closed</option>

                            </select>
                            <div class="invalid-feedback" style="width: 100%;">
                                Password is required.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="mb-1">
                        <label for="username">Comments</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <textarea class="form-control" id="form7Example7" rows="2" name="comments"
                                value="{{$edit->comments}}"></textarea><br>
                            <div class="invalid-feedback" style="width: 100%;">
                                Password is required.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <hr>
            <br>

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Notification</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <input type="email" class="form-control" name="con_email" value="{{ $edit->con_email}}"><br>
                            <div class="invalid-feedback" style="width: 100%;">
                                Password is required.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Telephone No.</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <input type="number" class="form-control" name="con_phone" value="{{ $edit->con_phone}}"
                                id="confirm_password"><br>
                            <div class="invalid-feedback" style="width: 100%;">
                                Password is required.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Billing</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <input type="text" class="form-control" name="amount" value="{{ $edit->amount}}"
                                id="confirm_password"><br>
                            <div class="invalid-feedback" style="width: 100%;">
                                Password is required.
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
                    <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                    <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                        onclick="history.back()">Cancel</button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection






















<!-- <div class="row">
    <div class="col-md-12">
        <form method="post" action="{{url('update')}}" id="form">
            @csrf
            <div class="row">

                <input type="hidden" value="{{$id}}" name="id">
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="username">Client</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <input type="text" class="form-control" name="client" id="age" value="{{$edit->client}}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="username">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <input type="email" class="form-control" name="email" id="age" value="{{$edit->email}}">
                        </div>
                    </div>
                </div> -->
<!-- </div>
<br>

               <div class="row"> -->
<!-- <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Telephone</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="number" class="form-control" name="phone" id="age" value="{{$edit->phone}}">
                            <div class="invalid-feedback" style="width: 100%;">
                                Age is required.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Address</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="address" id="age" value="{{$edit->address}}">
                            <div class="invalid-feedback" style="width: 100%;">
                                Age is required.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">File Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="file_name" value="{{$edit->file_name}}"
                                id="confirm_password">
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
                        <label for="username">Opening Date</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="date" class="form-control" name="open_date" id="age"
                                value="{{ $edit->open_date}}" min="0" max="99">
                            <div class="invalid-feedback" style="width: 100%;">
                                Age is required.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Close Date</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <input type="date" class="form-control" name="close_date" id="age"
                                value="{{ $edit->close_date}}" min="0" max="99">
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Comments</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control" id="form7Example7" rows="2" name="comments"
                                    value="{{$edit->comments}}"></textarea><br>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <br> -->
<!-- <h4>Notification</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="email" class="form-control" name="notifi_email"
                                    value="{{ $edit->notifi_email}}"><br>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4>Contacts</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Telephone</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" class="form-control" name="con_phone" value="{{ $edit->con_phone}}"
                                    id="confirm_password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email" class="form-control" name="con_email"
                                    value="{{ $edit->con_email}}"><br>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

<!-- <h4>Cutom Fields</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email" class="form-control" name="email" value="{{ $edit->client}}"
                                    id="confirm_password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="email" class="form-control" name="email" value="{{ $edit->client}}"
                                    id="confirm_password"><br>
                            </div>
                        </div>
                    </div>

                </div>
                <br> -->
<!-- <h4>Billing</h4>
                <div class="row">

                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Amount</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="amount" value="{{ $edit->amount}}"
                                    id="confirm_password"><br>
                            </div>
                        </div>
                    </div>
                </div> -->

<!-- <h4>Task</h4>
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-1">
                            <label for="username">Task</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="task" id="cars">
                                    <option>{{ $edit->task}}</option>
                                    <option>Select</option>
                                    <option>Residensial</option>
                                    <option>Non Residensial</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="mb-1">
                            <label for="username"></label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <a href="{{url('add-task')}}"><i class="fa fa-plus" style="font-size:24px"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <br> -->

<!-- <div class="row">
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                            onclick="history.back()">Cancel</button>
                    </div>
                </div> -->

</form>
</div>
</div>
</div>

</body>

</html>
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
                                        "_token": "{{ csrf_token() }}",
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
                        div > < /
                        div > <
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
                                        "_token": "{{ csrf_token() }}",
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
