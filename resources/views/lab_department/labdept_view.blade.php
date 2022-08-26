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
    <div class="row" style="padding-top: 13px;">
	    {{-- <div class="col-md-6">
		    <div class="form-group">
			    <form method="post" action="{{url('new_department')}}">
			        @csrf
			        <input type="text" name="department_name" class="form-control" placeholder="Add Departmets" required>
		    </div>
	    </div> --}}
	    {{-- <div class="col-md-6">
		    <div class="form-group">
			    <button type="submit" class="btn btn-primary btn-block">Add Department</button>
		    </div>
	    </div> --}}
        <button type="button" class="btn btn-primary"  data-toggle="modal" data-bs-toggle="modal" data-bs-target="#labdeptModal" style="float:right; width:150px; position: relative;
        left: 81%; margin-bottom: 12px;">Add</button>
	    </form>
	    <br>
	    <section class="section">
		    <table class="table table-striped table-bordered" id="mydatatable">
			    <thead>
				    <tr>
					    <th> Sl</th>
                        <th>Lab</th>
					    <th>Department</th>
                        <th>Floor</th>
					    <th>Edit</th>
          			    <th>Delete</th>
				    </tr>
			    </thead>
			    <tbody>
                    <?php $no=1; ?>
                    @foreach($labdept as $dept)
                    <tr class="table ">
                        <td><?php echo $no++;?></td>
                        <td>{{$dept->lab_deptname}}</td>
                        <td>{{$dept->depname}}</td>
                        <td>{{$dept->floor_name}}</td>
                        <input type="hidden" value="{{$dept->lab_deptid }}" id="depmt_id" class="applicate" name="department_id">
                        <td><a href="#" class="edits" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#labdep_edit"><i class="fas fa-edit" style="color:#607080" onclick="values_edit(`{{$dept->lab_deptid }}`,`{{$dept->lab_deptname}}`,`{{$dept->dep_name}}`,'{{$dept->floor_id }}');"></i></a></td>
      				    <td><a onClick="return myFunction();" href="{{url('delete_labdepartment'.$dept->lab_deptid )}}"><i class="fas fa-trash-alt" style="color:#607080"></i></a></td>
                     </tr>
                     @endforeach
                </tbody>
		    </table>
	    </section>
    </div>
    {{-- add dept modal --}}
    <div class="modal fade" id="labdeptModal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header" style="background-color:#5e829d">
                    <h4 class="text-white"><b>Add Lab Department</b></h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="{{url('lab_departments')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label>Lab Name</label>
                                <input type="text" class="form-control" name="labdept_name" placeholder="" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Department</label>
                                <select class="form-select" aria-label="Default select example" name="dept_name" id="dept_name">
                              
                                    <option value="">Select</option>
                                        @foreach ($dprmt as $key1 )
                                        <option value="{{$key1->id}}">{{$key1->depname}}</option>
                                      @endforeach 
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label>Floor</label>
                                <select class="form-select" aria-label="Default select example" name="floor_name" id="floor_name">
                              
                                    <option value="">Select</option>
                                        @foreach ($lab_floor as $value )
                                        <option value="{{$value->floor_id }}">{{$value->floor_name}}</option>
                                      @endforeach 
                                </select>
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End dept modal --}}

    <div class="modal fade" id="labdep_edit">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header" style="background-color:#5e829d">
                    <h4 class="text-white"><b>Edit Department</b></h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="{{url('update_labdepartment')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label>Lab Name</label>
                                <input type="hidden" id="dept_id" value="" name="dept_id">
       	                    <input type="text" class="form-control" id="dep_modal_name" name="dep_modal_name" >
                            </div>
                            <div class="form-group mb-3">
                                <label>Department</label>
                                <select class="form-select" aria-label="Default select example" name="dept_modal_name" id="dept_modal_name">
                          
                                <option value="">Select</option>
                                    @foreach ($dprmt as $key2 )
                                    <option value="{{ $key2->id }}">{{ $key2->depname }}</option>
                                    {{-- <option value="{{$key2->id}}" {{ ($key2->id==$dept->dep_name ) ? "selected" : "" }} >{{$key2->depname}}</option> --}}
                                  @endforeach 
                            </select>
                            </div>
                            <div class="form-group mb-3">
                                <label>Floor</label>
                                <select class="form-select" aria-label="Default select example" name="floor_modal_name" id="floor_modal_name">
                              
                                    <option value="">Select</option>
                                        @foreach ($lab_floor as $value2 )
                                        <option value="{{$value2->floor_id }}">{{$value2->floor_name}}</option>
                                         {{-- <option value="{{$value2->floor_id}}" {{ ($value2->floor_id==$l_foor->floor) ? "selected" : "" }} >{{$value2->floor_name}}</option> --}}
                                      @endforeach 
                                </select>
                            </div>
                            <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" id="editid1" name="hiddenid">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary text-white" data-bs-dismiss="modal"style="width:20%;background-color:#5e829d" data-dismiss="modal"> <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block"></span>Close</button>
                            {{-- <button type="submit" class="btn btn-primary" style="background-color:#5e829d;width:20%;">Upload</button> --}}
                            <button type="submit" class="btn btn-primary" style="background-color:#5e829d;">Update</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{ Session::forget('depadded')}}
        {{ Session::forget('depdeleted')}}
        {{ Session::forget('depupdated')}}
    </div>
    <script src="{{ url('assets/js') }}/jquery.min.js"></script>
    {{-- <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
        // $(document).on('click','#dep_edit',function()
        // {
        //     var department_name = $(this).closest('#data1').find('#dep_name').text();
        //     // var department_main = $(this).closest('#data1').find('# main_dp').text();
        //     var department_id = $(this).closest('#data1').find('#depmt_id').val();
        //     $("#dep_modal_name").val(department_name);
        //     $("#dept_id").val(department_id);
        // });
    </script> --}}
     <script>
        function values_edit(val1,val2,val3,val4){
    
            $("#dep_modal_name").val(val2);
           $('#dept_id').val(val1);
           $('#dept_modal_name').val(val3).change();
        //    alert(val4);
           $('#floor_modal_name').val(val4).change();
    
          };
    </script>
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
@endsection
