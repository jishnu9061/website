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
<body>
    <div class="col-md-12">
        <h3 style="text-align:center"><b><u>Requested Details</u></b></h3><br>
      <table id="example1" class="table table-bordered" style="border: 1px solid" >
          <tr>
            <th class="text-center">Request Date</th>
              <td class="text-center">{{date('d-m-Y',strtotime($requested_items[0]->request_intenddate))}}</td>
          </tr>
          <!-- <tr>
            <th class="text-center">Department</th>
              <td class="text-center">{{$requested_items[0]->department}}</td>
          </tr> 
         <tr> -->
            <th class="text-center">Added By</th>
              <td class="text-center">{{$requested_items[0]->name}}</td>
          </tr>
                            <tr>
            <th class="text-center">Status</th>
              <td class="text-center">{{$requested_items[0]->request_statusname}}</td>
          </tr>
        </table>

      </div>
     <!--  </div>
    </div>
  </div> -->
      <div class="box-header with-border">
        <h3 style="text-align:center"><b><u>Item Details</u></b></h3><br>
          <div class="box-tools pull-right">
          </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <!-- /.box-header -->
            <table id="example1" class="table table-bordered table-striped" style="width 100%">
              <thead>
                <tr>
                  <th class="text-center">Items</th>
                  <th class="text-center">Requested Quantity</th>
                  <th class="text-center">Batch No</th>
                  <th class="text-center">Issued Quantity</th>
                  {{-- <th class="text-center">Action</th> --}}
                </tr>
              </thead>
                <tbody  id="show_data">
                  {{-- @foreach ($requested_items as $row)
                  <!-- <input type="hidden" name="requested_id" value="{{$row->request_intend}}" class="form-control"> -->
                  <tr>
                      <td  class="text-center">{{$row->Item_name}}</td>
                      <td  class="text-center">{{$row->requested_quantity}}</td>
                      <td  class="text-center"></td>
                      <td  class="text-center"></td>
                    </tr>
                  @endforeach --}}
                </tbody>
            </table>
</div>
</div>
<div style="height: 50px;">

</div>



<script src="{{ url('assets/js') }}/jquery.min.js"></script>

@endsection



