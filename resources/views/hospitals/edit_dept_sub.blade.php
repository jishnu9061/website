@extends('layouts.hmsmain')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        </head>
<style>
    .btn-width{
        width:10%;
    }
</style>
<div>
    {{-- <a type="button" href="{{url('view_manufacturers')}}"class="btn btn-outline-primary btn-width ">Back</a> --}}
</div>
<br>
<div class="container">
    <h3 style="text-align:center"><b><u>Edit Department Sub</u></b></h3><br>
         <form method="post" action="{{url('update_phar_dept')}}" enctype="multipart/form-data">
            @csrf
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Main Department</th>
                        <th scope="col">Sub Department</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width:20%"> <input type="text" name="main_dept" value="{{$edit_sub_dept[0]->dept_id}}"class="form-control" readonly></td>
                        <td style="width:20%"> <input type="text" name="sub_dept"  value="{{$edit_sub_dept[0]->phar_sub_deptname}}"class="form-control" readonly></td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Floor Name</th>

                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td style="width:20%"> <input type="text" name="main_dept" value="{{$edit_sub_dept[0]->floor_name}}"class="form-control" readonly></td>
                    </tr>
                </tbody>
            </table>
            <h4 style="text-align:center"><b><u>Departments And Floor</u></b></h4><br>
            <div class="row clearfix">
                <div class="col-sm">
                    <table class="table table-bordered table-hover" id="tab_logic">
                        <thead>
                            <tr>
                                <th scope="col" Style="width:40%">Departments</th>
                                {{-- <th scope="col" Style="width:40%">Floor</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($edit_sub_dept as $row)
                                <input type="hidden" name="phar_sub_dept[]" value="{{$row->id}}"class="form-control">
                                <tr>
                                    <td>
                                        <select class="form-select" aria-label="select example"  name="departments[]" id="departments" reaquired>
                                            <option value="">Select</option>
                                            @foreach($dept as $val)
                                                <option value="{{$val->id}}" {{ ($val->id == $row->dept) ? "selected" : "" }} >{{ $val->depname }}</option>
                                             @endforeach
                                        </select>
                                    </td>
                                    {{-- <td>
                                        <select class="form-select" aria-label="select example"  name="floor[]" id="floor" reaquired>
                                            <option value="">Select</option>
                                            @foreach($floor as $floor1)
                                                <option value="{{$floor1->floor_id}}" {{ ($floor1->floor_id == $row->floor) ? "selected" : "" }} >{{ $floor1->floor_name }}</option>
                                            @endforeach
                                        </select>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="row">
                        <button type="button" class="btn btn-primary text-white" onclick="window.history.back()" style="width:35%;background-color:#3e699b" >Close</button>
                        <button type="submit" class="btn btn-primary" style="background-color:#3e699b;width:35%;">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal-2">
        <div class="modal-dialog modal-xm">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header" style="background-color:#435ebe">
                    <h4 class="text-white"><b>Advance Payment</b></h4>
                </div>
                <!-- Modal body -->
            </div>
        </div>
    </div>
</form>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>
@endsection
