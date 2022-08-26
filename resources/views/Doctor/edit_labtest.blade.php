@extends('layouts.hmsmain')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<div class="container">
    <div class="py-5 text-center">
        @if(Session::has('staffregistered'))
            <div class="alert alert-dark" role="alert">
                {{ Session::get('staffregistered')}}
            </div>
        @endif
        @if(Session::has('appointed'))
            <div class="alert alert-dark" role="alert">
                {{ Session::get('appointed')}}
            </div>
        @endif
        @if(Session::has('noappointmentstoday'))
            <div class="alert alert-dark" role="alert">
                {{ Session::get('noappointmentstoday')}}
            </div>
        @endif
    </div>
    <div class="row">
        {{-- <div class="col-md-4 col-lg-4"  style="padding-top: 6px;">
          <h6>Patient Id:{{$appointments[0]->patientid}}</h6>
          <h6>Patient Name:{{$appointments[0]->firstname}}</h6>
          <h6>Address:{{$appointments[0]->address}}</h6>
          <h6>Age/Sex:{{$appointments[0]->age}}Y/{{$appointments[0]->gender}}</h6>
      </div>
        <div class="col-md-5 col-lg-5" style="padding-top: 6px;">
          <h6>{{ date('d-m-Y')}}</h6>
          <h6 id='ct6'></h6>
        </div>
        <div class="col-md-3 col-lg-3">
            <h6>Token No</h6>
              <button class="btn btn-secondary">
                    {{$appointments[0]->token}}
                </button>
        </div> --}}
  </div>
</div>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <div class="container">
        <div class="py-5 text-center">
            {{-- @if(Session::has('patientaltered'))
                <div class="alert alert-dark" role="alert">
                    {{ Session::get('patientaltered')}}
                </div>
            @endif --}}
            <h2>Edit Lab Test</h2>
            <p class="lead">just analize that human</p>
            <hr class="mb-4">
        </div>
        {{-- <form method="post" action="{{url('')}}" method="post" enctype="multipart/form-data"> --}}
            @csrf
            {{-- @foreach ($edit_test as $detail) --}}
            {{-- <input type="hidden" name="_token" value="BVi3FKxMVh9hcWdqBXHfdDsdDGUf4DsXzg0fJwiG"> --}}
            <div class="row">
                <div class="col-sm">
                    <div class="col-sm">
                        <label for="">Date</label>
                        <input type="datetime-local" class="form-control" name="tests_date" id="tests_date" <?php foreach($edit_test as $detail):?> value="{{date(('Y-m-d\TH:i:s'),strtotime($detail->date))}}" <?php endforeach;?>><br>
                        <input type="hidden" name="tests_id" id="tests_id" value="{{$edit_test[0]->patientlab_id}}">
                    </div>
                    <div class="col-sm">
                        <label for="">Lab Name</label>
                        <select class="form-control" aria-label="Default select example" name="testlab_name" id="testlab_name" style="pointer-events:none">
                            <option value="">Select</option>
                            @foreach ($lab_dept as $dept2)
                            {{-- <option value="{{ $dept2->lab_deptid}}">{{$dept2->lab_deptname}}</option> --}}
                            <option  class="dropdown-item" value="{{$dept2->lab_deptid }}"{{ ($dept2->lab_deptid  == $detail->lab_name)? "selected" : "" }}>{{$dept2->lab_deptname}}</option>
                          @endforeach      
                        </select>
                    </div>
                </div>
                
                <div class="col-sm">
                    <div class="col-sm">
                        <label for="">Added By</label>
                            <select class="form-control" aria-label="Default select example" name="dr_name" id="dr_name" style="pointer-events:none">
                                <option value="">Select</option>
                                @foreach ($users as $key2)
                                 <option value="{{$key2->name}}" {{ ($key2->id==Auth::user()->id) ? "selected" : "" }} >{{$key2->name}}</option>
                                 @endforeach                                                             
                            </select><br>
                    </div>
                    <div class="col-sm">
                        <label for="">Departments</label>
                            <select class="form-control" aria-label="Default select example" name="dr_depmt" id="dr_depmt" style="pointer-events:none">
                                <option value="">Select</option>
                                 @foreach ($dept as $key1)
                                 <option value="{{$key1->departments}}" {{ ($key1->departments==Auth::user()->departments) ? "selected" : "" }} >{{$key1->departments}}</option>
                                 @endforeach                       
                            </select>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('update_labtest') }}" method="get" enctype="multipart/form-data">
                        @csrf
                      <table class="table table-borderless  order-list1" id="tab_logic">
                                <thead>
                                    <tr>
                                        <th style="color: white;">Tests</th>
                                        <th><input type="button" class="add_Row adRow" id="add_row" value="Add"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($edit_test as $detail1)
                                    @if(!empty($detail1->test))
                                    <tr>
                                        <td style="width:auto"> 
                                            <input type="hidden" name="tests_id" id="tests_id" value="{{$edit_test[0]->patientlab_id}}">
                                            <input type="hidden" name="lab_type" value="1">
                                            <input type="hidden" name="presc_item_id[]" value="{{ $detail1->id}}"class="form-control">
                                           <select class="form-select select_groups product"data-row-id="row_3" id="product_detailes" name="testname[]"  style="width:100%;">
                                        <option selected>Select</option>
                                        @foreach($labtests as $labtest)

                                        <option value="{{$labtest->id}}" {{ ($labtest->id == $detail1->test) ? "selected" : "" }} >{{$labtest->name}}</option>
                                        @endforeach
                                            </select>
                                        </td>
                                        <td><a href="{{url('delete_preclab'.$detail1->id)}}"><button type="button" class="add_Row adRow ibtnDel " style="width:auto;"><i class="fas fa-backspace"></i></button></a></td>
                                    </tr>
                                    @endif
                                    @endforeach           

                                </tbody>
                      </table>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" style="background-color:#5e829d;width:20%;">Update</button>
                      </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form method="post" action="{{url('update_labtest')}}" enctype="multipart/form-data">
                        @csrf
                    <table class="table table-borderless order-list2" id="tab_logic1">
                          <thead>
                              <tr>
                                  <th style="color: white;">Profiles</th>
                                  <th><input type="button" class="add_Row adRow" id="add_Row_again" value="Add"></th>
                              </tr>

                          </thead>
                              <tbody>
                                @foreach ($edit_test as $detail1)
                                @if(!empty($detail1->profile))
                                  <tr>
                           <td style="width:auto">
                            <input type="hidden" name="tests_id" id="tests_id" value="{{$edit_test[0]->patientlab_id}}">
                            <input type="hidden" name="lab_type" value="2">
                            <input type="hidden" name="presc_item_id[]" value="{{ $detail1->id}}"class="form-control">
                            <select class="form-select select_groups product" data-row-id="row_3" id="product_detailes" name="profilename[]" style="width:100%;">
                                <option>Select</option>
                                @foreach($labprofiles as $labprofile)
                                <option value="{{$labprofile->id}}" {{ ($labprofile->id == $detail1->profile) ? "selected" : "" }} >{{$labprofile->name}}</option>
                               @endforeach                       
                            </select>
                            </td>
                            <td><a href="{{url('delete_preclab'.$detail1->id)}}"><button type="button" class="add_Row adRow ibtnDel " style="width:auto;"><i class="fas fa-backspace"></i></button></a></td>
                                  </tr>
                                  @endif
                                  @endforeach
                              </tbody>
                      </table>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" style="background-color:#5e829d;width:20%;">Update</button>
                      </div>
                    </form>
                    </div>
            </div>
                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-primary text-white" data-bs-dismiss="modal" style="width:20%;background-color:#5e829d" data-dismiss="modal" onclick="goBack()"> <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block"></span>Close</button>
                        <button type="submit" class="btn btn-primary" style="background-color:#5e829d;width:20%;">Update</button>
                    </div> --}}
                    {{-- @endforeach --}}
        {{-- </form> --}}
    </div>
    <script>
        function goBack() 
        {
         window.history.back();
        }
    </script>
    <script src="{{ url('assets/js') }}/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        var counter = 0;
        $("#add_row").on("click", function() {
          var newRow = $("<tr>");
          var cols = "";
    
          cols +='<td><select name="testname1[]" class="form-select select2" style="width:100%;><option value="">Select</option> <?php foreach($labtests as $row):?><option value="<?php echo $row->id ;?>"><?php echo $row->name;?> </option><?php endforeach;?></select></td>'
          cols += '<td><button type="button" class="add_Row adRow ibtnDel " style="width:auto;"><i class="fas fa-backspace"></i></button></a></td>';
          newRow.append(cols);
    
          var defVal = $("select[name=acctname]").find(":selected").val();
          if (defVal) {
            $("select[name=accountName]").find(`option[value=${defVal}]`).hide();
          }
          $("table.order-list1").append(newRow);
          setValCashVal('accountName'.concat(counter));
          bindScript();
          counter++;
        });
    
        // delete function
        $("table.order-list1").on("click", ".ibtnDel", function(_event) {
          $(this).closest("tr").remove();
          counter -= 1
        });
    
      });
    
    
    
      </script>
       <script type="text/javascript">
        $(document).ready(function() {
        var counter = 0;
    
        $("#add_Row_again").on("click", function() {
    
          var newRow = $("<tr>");
          var cols = "";
    
          cols +='<td><select name="profilename1[]" class="form-select select2" style="width:100%;><option value="">Select</option> <?php foreach($labprofiles as $row):?><option value="<?php echo $row->id;?>"><?php echo $row->name;?> </option><?php endforeach;?></select></td>'
    
          cols += '<td><button type="button" class="add_Row adRow ibtnDel " style="width:30%;"><i class="fas fa-backspace"></i></button></a></td>';
          newRow.append(cols);
    
          var defVal = $("select[name=acctname]").find(":selected").val();
          if (defVal) {
            $("select[name=accountName]").find(`option[value=${defVal}]`).hide();
          }
          $("table.order-list2").append(newRow);
          setValCashVal('accountName'.concat(counter));
          bindScript();
          counter++;
        });
    
        // delete function
        $("table.order-list2").on("click", ".ibtnDel", function(_event) {
          $(this).closest("tr").remove();
          counter -= 1
        });
    
      });
    
    
    
      </script>
    <script>
        $('#mydatatable').dataTable({
            colReorder: true,
            order: [],
            pageLength: 0,
            lengthMenu: [10,20, 40, 60, 80, 90, 100],
        });
    </script>
@endsection
