@extends('layouts.hmsmain')
@section('content')
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  {{-- <div class="spacer" style="height:40px;margin-top: 30px;">
    <a href="#" class="edits" data-toggle="modal" id="create" data-bs-toggle="modal"
    data-bs-target="#default"><button class="
    btn btn-primary">Add Medicines</button></a>
  </div> --}}
  <br>
  <div class="container">

    <!-- Button to Open the Modal -->
    <button type="button" style="width:20%" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><b> +</b> Generate Bill</button>

    </button>

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
                            <input type="" name="searchmed" id="searchmed" class="typeahead form-control" value=" {{ date('d D M Y H:i:s A') }}" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="text-dark">Patient Type</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="">Select</option>
                                    <option value="0">OPD</option>
                                    <option value="1">IPD</option>
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
                                    @foreach ($med_cat as $key)
                                        <option value="{{ $key->id }}">{{ $key->medicine_category}}</option>
                                    @endforeach
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


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script>
  $(function(){
    $("#allpatients").dataTable();
  })
  </script>
@endsection


