@extends('layouts.hmsmain')
@section('content')
    @if(Session::has('depadded'))
        <div class="alert alert-dark" role="alert">
            {{ Session::get('depadded')}}
        </div>
    @endif
    @if(Session::has('depdeleted'))
        <div class="alert alert-dark" role="alert">
            {{ Session::get('depdeleted')}}
        </div>
    @endif
    @if(Session::has('depupdated'))
        <div class="alert alert-dark" role="alert">
            {{ Session::get('depupdated')}}
        </div>
    @endif
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <style>.swal-button {

        width:fit-content;

      }
    </style>
    <div class="container">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="{{ url('assets/css') }}/sweetalert.css">
        <br>
        <h2>Manage Pharmacy Sub-department</h2>
        <button  class="btn btn-primary " data-toggle="modal" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-secondary">Add Pharmacy Sub</button>
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="mydatatable">
			        <thead>
				        <tr>
					        <th>
						        Sub Pharmacy
					        </th>
                            <th>
						        Floor Name
					        </th>
                            <th>
                                View
                            </th>
					        <th>
						        Edit
					        </th>
          			        <th>
						        Delete
					        </th>
				        </tr>
			        </thead>
			        <tbody>
			        @foreach($phar_dept as $data1)
				        <tr class="table table-hover" id="data1">
					        <td class="sub_dept" id="sub_dept">{{$data1->phar_sub_deptname}}</td>
					        <td class="sub_dept" id="sub_dept">{{$data1->floor_name}}</td>
					        <input type="hidden" value="{{$data1->phar_deptid}}" id="department_id" class="applicate" name="department_id">
                            <td><a href="{{url('view_dept_sub'.$data1->phar_deptid)}}"><i  style="color:#435ebe;" class="fa fa-eye" aria-hidden="true"></i></td>
                            <td><a href="{{url('edit_dep_sub'.$data1->phar_deptid)}}"><i style="color:#435ebe;" class="fa fa-edit" aria-hidden="true"></i></a></td>
                            <td><a onclick="return confirm('Are you sure ?');" href="{{ url('delete_pharma_dept/'.$data1->phar_deptid) }}"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
		            @endforeach
                    </tbody>
		        </table>
            </div>
    </div>
    {{-- add modal --}}
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header" style="background-color:#5e829d">
                    <h4 class="text-white"><b>Add Pharmacy Sub Department</b></h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="{{url('add_pharmacy_sub')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm">
                                    <div class="col-sm">
                                        <label for="">Pharmacy Sub</label>
			                            <input type="text" class="form-control" name="pharmacy_sub" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="col-sm">
                                        <label for="">Floor</label>
			                            <select class="form-select"  aria-label="select example" name="floor" id="floor">
                                            <option value="">Select</option>
                                            @foreach ($floor  as $row1)
                                                <option value="{{$row1->floor_id}}">{{$row1->floor_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="container">
                                <div class="row clearfix">
                                    <div class="col-md-12 column">
                                        <table class="table table-bordered table-hover order-list" id="tab_logic">
                                            <tr>
                                                <td style="width:60%"><b>Department</b></td>
                                                <td><input type="button" class="add_Row adRow" style="width:100%" id="add_Row" value="Add Row"></td>
                                            </tr>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select class="form-select"  aria-label="select example" name="department[]" id="department">
                                                            <option value="">Select</option>
                                                            @foreach ($dept  as $row)
                                                                <option value="{{$row->id}}">{{$row->depname}}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td><button type="button" class="add-Row ibtnDel btn btn-primary text-white " style="background-color:#5e829d;width:100%;color:white;">Remove</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="hidden" class="form-control" id="edit_id" name="medicine_id">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary text-white" data-bs-dismiss="modal"style="width:20%;background-color:#5e829d" data-dismiss="modal"> <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block"></span>Close</button>
                                <button type="submit" class="btn btn-primary" style="background-color:#5e829d;width:20%;">Save</button>
                            </div>
                            <div class="container"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}

        {{ Session::forget('depadded')}}
        {{ Session::forget('depdeleted')}}
        {{ Session::forget('depupdated')}}
    </div>
    <script src="{{ url('assets/js') }}/jquery.min.js"></script>
    <script src="{{ url('assets/js') }}/sweetalert.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
        $('#mydatatable').dataTable({
            colReorder: true,
            order: [],
            pageLength: 0,
            lengthMenu: [10,20, 40, 60, 80, 90, 100],
        });
    </script>
    <script>
        function values_edit(val1,val2,val3)
        {
            $("#pharmacy_sub").val(val2);
            $("#department").val(val3).change();
            $('#id').val(val1);
        };
    </script>
    <script type="text/javascript">
        $(document).ready(function () {

            // add new product row on invoice
            var cloned = $('#tab_logic tr:last').clone();
            $("#add_Row").click(function (e) {
                e.preventDefault();
                cloned.clone().appendTo('#tab_logic');
            });
            $("table.order-list").on("click", ".ibtnDel", function(_event) {
                $(this).closest("tr").remove();
                counter -= 1
              });
    });
    </script>
@endsection
