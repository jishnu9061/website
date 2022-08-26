@extends('layouts.hmsmain')
@section('content')
<!-- RH: this is bootstrap 5 tabbed panel -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Billing</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Serve</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Details</a>
        {{-- </li>
    {{-- <li class="nav-item" role="presentation">
      <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#lab" role="tab" aria-controls="contact" aria-selected="false">Manufacturer Advance</a>
    </li>  --}}
    </ul>
    <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  {{-- <div class="spacer" style="height:40px;margin-top: 30px;"> --}}
</head>
<body>
    <div id="London" class="tabcontent">
        <div style="padding-top: 25px;">
            <form method="POST" action="{{url('serving')}}">
                @csrf
            <div class="container">

  <!-- Button to Open the Modal -->
  <button type="button" style="width:20%" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><b> +</b> Generate Bill</button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header bg-primary">
          <h4 class="text-white">Pharmacy Bill</h4>
          {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                <div class="form-group">
                    <label class="text-dark">Bill No</label>
                   <input type="text" name="searchmed" id="searchmed" class="typeahead form-control" value="{{ $id = "PO-".date('my') . substr(uniqid(), 9, 12)}}" required>
                </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <?php date_default_timezone_set('Asia/Kolkata') ?>
                        <label class="text-dark">Date</label>
                        <input type="" name="searchmed" id="searchmed" value=" {{ date('d D M Y H:i:s A') }}" class="typeahead form-control" placeholder="">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="text-dark">Patient Type</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected="">Select</option>
                                <option>IPD</option>
                                <option>OPD</option>
                            </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="text-dark">IPD/OPD No</label>
                            <input type="text" name="searchmed" id="searchmed" class="typeahead form-control">
                    </div>
                </div>
                <div class="col-sm-2">
                     <div class="form-group">
                     <label class="text-dark">Patient Name</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select</option>
                            <option>IPD</option>
                            <option>OPD</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="text-dark">Doctor Name</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select</option>
                            <option>IPD</option>
                            <option>OPD</option>
                        </select>
                    </div>
            </div>

        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="text-dark">Category Name</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="">Select</option>
                            </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="text-dark">Medicine Name</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>select</option>
                                <option>IPD</option>
                            </select>
                    </div>
                </div>
                 <div class="col-sm-2">
                    <div class="form-group">
                        <label class="text-dark">Batch No</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select</option>
                                <option>IPD</option>
                            </select>
                    </div>
                </div>
                <div class="col-sm-2">
                     <div class="form-group">
                         <label class="text-dark">Expiary</label>
                        <input type="text" name="searchmed" readonly id="searchmed" class="typeahead form-control" placeholder="">
                    </div>
                </div>
                 <div class="col-sm-1">
                     <div class="form-group">
                         <label class="text-dark">Quantity</label>
                        <input type="text" name="searchmed" id="searchmed" class="typeahead form-control" placeholder="">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                         <label class="text-dark">Price</label>
                            <input type="text" name="searchmed" id="searchmed" class="typeahead form-control" placeholder="">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                         <label class="text-dark">Amount</label>
                            <input type="text" name="searchmed" id="searchmed" class="typeahead form-control" placeholder="">

                    </div>

                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                         <label class="text-white">Add</label>
                            <button type="button" style="width:50%" class="btn btn-primary" data-toggle="modal" data-target="#myModal">+</button>
                    </div>

                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                         <label class="text-dark">Note</label>
                         <textarea class="form-control" style="width:100%" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                        <br>
                        <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                    <th scope="row"class="text-dark">Total</th>
                                    <td> <input type="text" name="searchmed" id="searchmed" class="typeahead form-control" placeholder=""></td>
                                    </tr>
                                    <tr>
                                    <th scope="row"class="text-dark">Discount</th>
                                    <td><input type="text" name="searchmed" id="searchmed" class="typeahead form-control" placeholder=""></td>
                                    </tr>
                                    <tr>
                                    <th scope="row"class="text-dark">Tax</th>
                                    <td colspan="2"><input type="text" name="searchmed" id="searchmed" class="typeahead form-control" placeholder=""></td>
                                   </tr>
                                    <tr>
                                    <th scope="row"class="text-dark">Net Amount</th>
                                    <td colspan="2"><input type="text" name="searchmed" id="searchmed" class="typeahead form-control" placeholder=""></td>
                                   </tr>
                                </tbody>
                                </table>
                    </div>

            </div>
        </div>

    </div>
</div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" style="width:10%" class="btn btn-primary" data-dismiss="modal">Close</button>
           <button type="button" style="width:10%" class="btn btn-primary">Save</button>
        </div>

      </div>
    </div>
  </div>

</div>

</form>

<div style="height:40px;">

</div>
 <table class="table table-bordered">
     <tr>
         <th>Bill No</th>
         <th>Date</th>
      <th>OPD/IPD No</th>
      <th>Patient Name</th>
      <th>Action</th>
    </tr>
   {{-- @foreach($servedmedz as $meds)
    <tr>
      <td>{{$meds->medicinename}}</td>
      <td>{{$meds->quantity}}</td>
      <td>{{$meds->totalprice}}</td>
    </tr>
    @endforeach --}}
     {{-- <tr>
      <td></td>
      <td>Total</td>
      <td>{{$counts}}</td>
    </tr> --}}
  </table>
  </div>
</div>

<div id="Paris" class="tabcontent">
   <div class="row">

    <div class="col-md-12 order-md-1">

    <form method="post" action="#" enctype="multipart/form-data">
        @csrf
   <div class="row">
    <input type="hidden" value="{{$appz}}" name="hideid">
   <input type="hidden" name="appz" value="">
    <div class="col-md-6 col-lg-6"  style="padding-top: 6px;">
      <p>Notes</p>
     <textarea class="form-control" name="notes" style="height: 200px;" readonly="">
          {{$prescription}}
     </textarea>

    </div>
    <div class="col-md-6 col-lg-6" style="padding-top: 6px;">
     <ul class="list-group">
      @foreach($appzfiles as $files)
  <a href="{{url('filedownload'.$files->id)}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
    <div class="flex-column">
      file
      <p><small></small></p>

    </div>
    <div class="image-parent">

       <i class="fas fa-download"></i>
    </div>
  </a>
       @endforeach

</>

@if(Session::has('nopharmques'))
<div style="padding-top: 100px;">


   <div class="alert alert-dark" role="alert">
   {{ Session::get('nopharmques')}}
   </div>
   </div>
@endif
    </div>

  </div>
   {{ Session::forget('nopharmques')}}
 <div class="spacer" style="padding: 20px;">

   </div>


 <div class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Upload docs</h5>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <!-- Basic file uploader -->
                            <input type="file" name="files" class="basic-filepond" multiple>
                        </div>
                    </div>
                </div>
            </div>
           <div class="col-md-3">

          </div>
          <div class="col-md-3">
            <a href="{{url('pharmacyserved'.$appz)}}">
          <button type="button" class="btn btn-primary btn-block btn-lg" type="submit" style="margin-top: 80px;">Close</button>
          </div>
          </a>
            </div>

<div class="row">
  <div class="col-md-6 col-lg-6">

  </div>
  <div class="col-md-6 col-lg-6">
     <div class="mb-3">
          <label for="email">Next Appointment<span class="text-muted"></span></label>
          <input type="date" class="form-control" name="nextappointment" id="email" placeholder="phoneno">
          <div class="invalid-feedback">
            Please enter a valid phone no.
          </div>
        </div>
  </div>
</div>

        <hr class="mb-4">
        <div class="row">
          <div class="col-md-6">

          </div>
          <div class="col-md-3">

          </div>
          <div class="col-md-3">

          </div>
        </div>


    </div>
  </div>
</div>



<script src="{{ url('assets/js') }}/jquery.min.js"></script>


<div class="container">
  <div class="py-5 text-center">



  </div>
<div class="container">
    <div class="row">
    <div class="col-md-4 col-lg-4"  style="padding-top: 6px;">
      <h6>df</h6>

    </div>
    <div class="col-md-5 col-lg-5" style="padding-top: 6px;">
      <h6 id='ct6'></h6>
    </div>
    <div class="col-md-3 col-lg-3">

      <h6>Token No</h6>

      <button class="btn btn-secondary btn-block btn-lg">

             {{$token}}
      </button>


    </div>
  </div>
  </div>
   <div class="spacer" style="padding: 20px;">

   </div>
     <hr class="mb-4">
  <div class="row">

    <div class="col-md-12 order-md-1">

     <form method="post" action="{{url('')}}" enctype="multipart/form-data">
        @csrf
   <div class="row">
    <input type="hidden" value="{{$appz}}" name="hideid">
   <input type="hidden" name="appz" value="">
    <div class="col-md-6 col-lg-6"  style="padding-top: 6px;">
      <p>Notes</p>
     <textarea class="form-control" name="notes" style="height: 200px;" readonly="">
          {{$prescription}}
     </textarea>

    </div>
    <div class="col-md-6 col-lg-6" style="padding-top: 6px;">
     <ul class="list-group">
      @foreach($appzfiles as $files)
  <a href="{{url('filedownload'.$files->id)}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
    <div class="flex-column">
      file
      <p><small></small></p>
      <span class="badge badge-info badge-pill"> 2 Copies in Stock</span>
    </div>
    <div class="image-parent">

       <i class="fas fa-download"></i>
    </div>
  </a>
       @endforeach

</ul>

@if(Session::has('nopharmques'))
<div style="padding-top: 100px;">


   <div class="alert alert-dark" role="alert">
   {{ Session::get('nopharmques')}}
   </div>
   </div>
@endif
    </div>

  </div>
   {{ Session::forget('nopharmques')}}
 <div class="spacer" style="padding: 20px;">

   </div>


 <div class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Upload docs</h5>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <!-- Basic file uploader -->
                       <input type="file" name="files" class="basic-filepond">
                        </div>
                    </div>
                </div>
            </div>
           <div class="col-md-3">
            <a href="{{url('medicine')}}">
          <button type="button" class="btn btn-success btn-block btn-lg" type="submit" style="margin-top: 80px;">Medicine</button>
          </a>
          </div>
          <div class="col-md-3">
          <button type="submit" class="btn btn-primary btn-block btn-lg" type="submit" style="margin-top: 80px;">Close</button>
          </div>
            </div>

<div class="row">
  <div class="col-md-6 col-lg-6">

  </div>
  <div class="col-md-6 col-lg-6">
     <div class="mb-3">
          <label for="email">Next Appointment<span class="text-muted"></span></label>
          <input type="date" class="form-control" name="nextappointment" id="email" placeholder="phoneno">
          <div class="invalid-feedback">
            Please enter a valid phone no.
          </div>
        </div>
  </div>
</div>

     <hr class="mb-4">
        <div class="row">
          <div class="col-md-6">

          </div>
          <div class="col-md-3">

          </div>
          <div class="col-md-3">

          </div>
        </div>


    </div>
  </div>

  </form>
</div>
<div class="container">

            </div>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


@endsection
