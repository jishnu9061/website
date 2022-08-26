@extends('layouts.hmsmain')
@section('content')
<head>
    <style>
    body {font-family: Arial;}

    /* Style the tab */
    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 6px 12px;
      -webkit-animation: fadeEffect 1s;
      animation: fadeEffect 1s;
    }
    .twitter-typeahead, .tt-hint, .tt-input, .tt-menu { width: 100%; }

    /* Fade in tabs */
    @-webkit-keyframes fadeEffect {
      from {opacity: 0;}
      to {opacity: 1;}
    }

    @keyframes fadeEffect {
      from {opacity: 0;}
      to {opacity: 1;}
    }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    </head>

<div class="container">
   <table class="table table-bordered" style="border: 1px solid">

         <form method="post" action="{{url('issue_stock_details')}}" enctype="multipart/form-data" id="add-stock">
            @csrf
                <tbody>
                    <div class="col-md-12">
                        <h3 style="text-align:center"><b><u>Issue Details</u></b></h3><br>
                      <table id="example1" class="table table-bordered" style="border: 1px solid" >
                          <tr>
                            <input type="hidden" name="request_id" id="" value=""/>
                            <th class="text-center">Issued Date</th>
                              <td class="text-center"><input type="date" name="date" class="form-control" value="{{date('Y-m-d', time())}}" id="exampleInputPassword1" placeholder=""></td>
                          </tr>
                          {{-- <tr>
                            <th class="text-center">Department</th>
                              <td class="text-center"><select class="form-select"  aria-label="select example" name="department" id="" required>
                                <option value="">Select</option>
                                @foreach ($departments  as $department)
                                    <option value="{{$department->id}}">{{$department->depname}}</option>
                                @endforeach
                              </select></td>
                          </tr> --}}
                         <tr>
                            <th class="text-center">Issued By</th>
                              <td class="text-center"><select class="form-select" aria-label="Default select example" name="issued_by" id="added_by" style="pointer-events:none" required>
                                <option value="">Select</option>
                                    @foreach ($users as $key2)
                                        <option value="{{$key2->id}}" {{ ($key2->id==Auth::user()->id) ? "selected" : "" }} >{{$key2->name}}</option>
                                    @endforeach
                            </select></td>
                          </tr>
                                            <tr>
                            <th class="text-center">Status</th>
                              <td class="text-center"><select class="form-select"  aria-label="select example" name="status" id="" required>
                                <option value="">Select</option>
                                @foreach ( $request_status  as $request)
                                    <option value="{{$request->request_statusid}}">{{$request->request_statusname}}</option>
                                @endforeach
                              </select></td>
                          </tr>
                        </table>

                      </div>
                    <br>


                        <h3 style="text-align:center"><b><u>Issued Item Details</u></b></h3>
                                <table class="table table-hover" style="width:100%">
                                <br>
                                <thead>
                                  <tr>
                                   {{-- <th style="width:18%">Purchase Date</th> --}}
                                   <th style="width:18%">Expiry Date</th>
                                   <th style="width:10%">Batch</th>
                                    <th style="width:45%">Items</th>
                                    <th style="width:10%">Current Quantity</th>
                                    <th style="width:10%">Issued Quantity</th>


                                </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $pqty=0;
                                        $iqty=0;
                                        $cqty=0;
                                    @endphp
                                     <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-3"></div>

                                     </div>

                                   @foreach($purchase_order as $purchase)
                                  <tr>
                                    <input type="text" name="medicine_id" value="{{$purchase->total_stock}}" class="form-control">
                                    <input type="hidden" name="medicine_id" value="{{$purchase->medicine_id}}" class="form-control">
                                    <input type="hidden" name="id[]" id="" value="{{$purchase->id}}"/>
                                    <input type="hidden" name="item_id[]" value="{{$purchase->Item_name}}"class="form-control">
                                     {{-- <td><input type="text" value="{{$purchase->purchase_date}}"  name="item_name[]" class="form-control" required readonly></td> --}}
                                      <td><input type="text" value="{{$purchase->expiry_date}}"  name="expiry_date[]" class="form-control" required readonly></td>
                                      <td><input type="text" value="{{$purchase->batch_no}}" name="batch_no[]" class="form-control" required readonly></td>
                                    <td><input type="text" value="{{$purchase->Item_name}}"  name="item_name[]" class="form-control" required readonly></td>
                                    <input type="hidden"value="{{$purchase->quantity}}"
                                         name="quantity[]"  class="form-control" id="available-quantity" required>
                                         @php
                                             $pqty += $purchase->quantity;
                                         @endphp
                                        </td>
                                        <td>

                                        <input type="text" value="{{$purchase->quantity}}" name="current_stock[]" id="current-stock"  class="form-control" requird readonly>
                                        @php
                                               $cqty += $purchase->quantity;
                                         @endphp
                                       </td>
                                    <td><input type="text" value="{{0}}" name="issued_quantity[]" value="{{$purchase->issued_quantity}}" id="issued-quantity" class="form-control" requird>
                                        @php
                                       $iqty += $purchase->issued_quantity;
                                        @endphp
                                    </td>
                                </td>
                                </tr>
                                @endforeach
                                </tbody>
                              </table>



                              <div class="row">
                                <div class="col-sm">
                                </div>
                                <div class="col-sm">
                                    <br>
                                    <table class="table table-bordered">

                                          <tr>
                                            <td scope="col"><b>Total Quantity</b></td>
                                            <td> <input type="text" value="{{$pqty}}"
                                                name="quantity_available"   class="form-control" readonly>

                                               </td>
                                          </tr>
                                          <tr>
                                            {{-- <td scope="col"><b>Issued Quantity</b></td> --}}
                                            <td><input type="hidden" value="{{$iqty}}" class="form-control" id="exampleFormControlInput1" name="quantity_issued" value="" id="grand_totall" readonly></td>
                                          </tr>


                                      </table>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <button type="button" class="btn btn-primary text-white" onclick="window.history.back()" style="background-color:#1a3c62;width:100%;" >Close</button>
                                           </div>
                                          <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary" style="background-color:#1a3c62;width:100%;">Issued</button>
                                          </div>
                                      </div>
                                      <br>

                                </div>
                            </div>
                        </div>
                              <div class="row">
                                  <div class="col-sm-3"></div>
                                  <div class="col-sm-3"></div>
                                  <div class="col-sm-3"></div>

                              </div>
                            </form>
                        </table>
                    </div>


@endsection

