@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <div class="py-5 text-center">
        @if(Session::has('patientregistered'))
            <div class="alert alert-dark" role="alert">
                {{ Session::get('patientregistered')}}
            </div>
        @endif
        <h2>Add patient</h2>
        <p class="lead">just analize that human</p>
        <hr class="mb-4">
    </div>
    <div class="row">
        <div class="col-md-12 order-md-1">
            <form method="post" action="{{url('addpatient')}}">
	        @csrf
                <div class="mb-3">
                    <label for="username">Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <input type="text" class="form-control" name="firstname" id="username" placeholder="Name" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Name is required.
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label for="email">Email<span class="text-muted"></span></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="enter emaiil">
                                <div class="invalid-feedback">
                                    Please enter a valid email.
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label for="email">Mobile Phone <span class="text-muted"></span></label>
                            <input type="number" class="form-control" name="phoneno" id="email" placeholder="phoneno">
                                <div class="invalid-feedback">
                                    Please enter a valid phone no.
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                    <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                            <textarea class="form-control" name="address" id="address" rows="3" style="width:80%;"placeholder="address"></textarea>
                                <div class="invalid-feedback">
                                    Please enter  address.
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label for="address">Place</label>
                            <input type="text" class="form-control" name="place" id="place" cols="2" placeholder="Place">
                                <div class="invalid-feedback">
                                    Please enter Place.
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-4">
                        <div class="mb-3">
                            <label for="address">Age</label>
                            <input type="number" class="form-control" name="age" id="age" placeholder="Age" required>
                                <div class="invalid-feedback">
                                    Please enter age.
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4">
                        <div class="mb-3">
                            <label for="address">Date Of Birth</label>
                            <input type="date" class="form-control" name="dateofbirth" id="address" placeholder="Address" required>
                                <div class="invalid-feedback">
                                    Please enter  Birthday.
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <p class="card-title"><b>Gender</b></p>
                        <div class="card-body">
                            <div id="payCC" class="floatBlock">
                                <label for="paymentCC"> <input id="paymentCC" name="gender" type="radio" value="male" /> male  </label>
                            </div>
                            <div id="payInvoice" class="floatBlock">
                                <label for="paymentInv"> <input id="paymentInv" name="gender" type="radio" value="female" /> female </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4">
                        <div class="mb-3">
                            <label for="address">Height</label>
                            <input type="text" class="form-control" name="height" id="height" placeholder="Height">
                                <div class="invalid-feedback">
                                    Please enter  height
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4">
                        <div class="mb-3">
                            <label for="address">Weight</label>
                            <input type="text" class="form-control" name="weight" id="weight" placeholder="Weight">
                                <div class="invalid-feedback">
                                    Please enter  weight
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4">
                        <div class="mb-3">
                            <label for="address">Temparature</label>
                            <input type="text" class="form-control" name="temparature" id="temparature" placeholder="Temparature">
                                <div class="invalid-feedback">
                                    Please enter  temparature
                                </div>
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <h4 class="mb-3">Medical Schemes</h4>
                <div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="scheme1" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">Scheme 1</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="scheme2" class="custom-control-input" id="save-info">
                            <label class="custom-control-label" for="save-info">Scheme 2</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="scheme3" class="custom-control-input" id="save-info">
                            <label class="custom-control-label" for="save-info">Scheme 3</label>
                    </div>
                </div>
                <hr class="mb-4">
                <button type="submit" class="btn btn-primary btn-lg btn-block" type="submit">Add patient</button>
            </div>
        </div>
    </form>
</div>
@endsection
<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script src="{{ url('assets/js') }}/select2.min.js" defer></script>
<script src="{{ url('assets/js') }}/sweetalert.min.js"></script>

<script type="text/javascript">
        function getdepartmentdoctor(value)
        {
            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $.ajax({
            url:"{{ route('getdepartmentdoctor') }}",
            type:"POST",
            data:{
                "_token": "{{ csrf_token() }}",
                group:value,
            },
            success:function (data) {
            console.log(data);

                let html_data = '<option value="">Select</option>';
                data.forEach(function (data) {
                    html_data += `<option value="${data.name}">${data.name}]</option>`
                });
                $("#depdoctor").html(html_data);


        }
        });
  }
</script>
