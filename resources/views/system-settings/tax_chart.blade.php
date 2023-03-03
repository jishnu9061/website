@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">System Setup</a> /
    <a href="{{url('other_confgn')}}" style="color: #1D1D50;">Other Configurations</a> /
    <a href="#" style="color: #1D1D50;">Tax Chart</a>
</nav>
<br><br>
<head>
<style>
  .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}
.pagination {
margin: 0;
}

.pagination li:hover{
cursor: pointer;
}

.header_wrap {
padding:30px 0;
}
.num_rows {
width: 20%;
float:left;
}
.tb_search{
width: 20%;
float:right;
}
.pagination-container {
width: 70%;
float:left;
}

.rows_count {
width: 20%;
float:right;
text-align:right;
color: #999;
}

</style>
<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 50px;
        height: 20px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #6c757d;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 15px;
        width: 15px;
        left: 4px;
        bottom: 2.5px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .check:checked+.slider {
        background-color: #0edb7c;
    }

    .check:focus+.slider {
        box-shadow: 0 0 1px #0edb7c;
    }

    .check:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }
    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }



 
        </style>
</head>


{{-- heading --}}
<div class="container">
<h4 id="hdtpa"><b>Tax Chart</b></h4>



            <br>
            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->

{{-- <a href="{{('add_tax_chart')}}"><button class="btn btn-primary">Add Tax Chart</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Tax Chart</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

<!---------------------------------------------- MODAL ---------------------------------------------------------------------->


    <div class="header_wrap">
      <div class="num_rows">
        <div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
         <select class  ="form-control" aria-label="Page navigation example" name="state" id="maxRows">

          <option value="5">5</option>
          <option value="10">10</option>
           <option value="15">15</option>
           <option value="20">20</option>
           <option value="50">50</option>
           <option value="70">70</option>
           <option value="100">100</option>
          <option value="5000">Show ALL Rows</option>
          </select>

        </div>
      </div>
      <div class="tb_search">
<input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
      </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
<thead>
 <tr>
                    <!-- <th class="text-center" >No</th> -->
                    <th class="text-center" >Tax Brand</th>
                    <th class="text-center" >Lower Limit</th>
                    <th class="text-center">Upper Limit</th>
                    <th class="text-center" >Rate(%)</th>
                    <th class="text-center" >Status</th>
                    <th class="text-center">Action</th>
             </tr>
            </thead>
            <tbody>

                    @foreach($tax_chart as $chart_tax)

                    <tr class="text-center">
                        <!-- <td>{{$chart_tax->id}}</td> -->
                        <td>{{$chart_tax->tax_brand}}</td>
                        <td>{{$chart_tax->lower_limit}}</td>
                        <td>{{$chart_tax->upper_limit}}</td>
                        <td>{{$chart_tax->rate}}</td>
                        <td class="text-center"><label class="switch">
                            <input type="checkbox" data-id="{{ $chart_tax->id }}"
                                onclick="changestatus(this)" id="status" class="check"
                                {{$chart_tax->status == 1 ? 'checked' : '' }}>
                            <span class="slider round"></span>
                        </label>
                    </td>
                        {{-- <td  scope="row"class="text-center"><!--<a href="{{url('view_company_details')}}"><i  style=" color:rgb(13, 1, 56);" class="fa fa-eye" aria-hidden="true"></i> -->
                        <a href="{{url('edit_tax_chart',$chart_tax->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <span class="m-2"></span>
                        <a href="{{url('delete_tax_chart',$chart_tax->id)}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td>
                   --}}
                   <td scope="row"class="text-center">
                    <div class="btn-group">
                        <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" style="border-color:none;"> ⋮ </a>

                   <div class="dropdown-menu">
                    {{-- <a class="dropdown-item"
                        href="{{url('edit_tax_chart',$chart_tax->id)}}">Edit Tax Chart</a> --}}
                    <a class="dropdown-item" data-toggle="modal"
                                                data-target="#edit_taxchart" href="#">Edit Tax Chart</a>
                    <a class="dropdown-item"
                        {{-- href="{{url('delete_tax_chart',$chart_tax->id)}}">Delete Tax Chart</a> --}}
                        <a href="#"onclick=deletetaxchart(this) data-id="{{ $chart_tax->id }}"data-toggle="modal"
                            data-target="#delete_taxchart">Delete General Practice</a>
                </div>
                    </td>
                        </tr>
                        @endforeach
                    </tbody>

                        </table>
    </div>
    </div>
    </div><br>
</div>
<!--		Start Pagination -->
<div class='pagination-container'>
      <nav>
        <ul class="pagination">
         <!--	Here the JS Function Will Add the Rows -->
        </ul>
      </nav>
    </div>
    <div class="rows_count">Showing 11 to 20 of 100</div>
</div>
</div>
 <!-- 		End of Container -->

   {{-- <!-- The Modal --> Create Tax Chart --}}
   <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header" style="padding:0rem 0rem;">
                <div style="padding:1rem 1rem;">
                    <h4 class="text-centre"><b>Add Tax Chart</b></h4>
                </div>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">

                    <form method="post" action="{{ url('add_tax_chart') }}" enctype="multipart/form-data" >
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="file_no"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Tax Brand:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <input type="text"  id="" name="taxband"value="" class="form-control">
                                                <div class="invalid-feedback" style="width: 100%;">
                                                Required Field.
                                                </div>
                                            </div>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            File No is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                    <label for="client_name"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Lower Limit:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text"  id="" name="limit"value="" class="form-control" >
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Required Field.
                                            </div>
                                        </div>
                                        </div>
                                </div>
                                <div class="" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                    <label for="matter_type"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Upper Limit:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text"  id="" name="ulimit"value=""class="form-control">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Required Field.
                                            </div>
                                        </div>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Client No is required.
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="" style="width: 33%">
                                     {{-- <div class=""><span style="color: red">*</span> --}}
                                        <label for="other_party"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Rate (%):</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <input type="text"  id="" name="rate"value=""class="form-control">
                                                <div class="invalid-feedback" style="width: 100%;">
                                                Required Field.
                                                </div>
                                            </div>
                                    {{-- </div> --}}
                                </div>
                                <div class="" style="width: 33%">
                                    {{-- <div class=""><span style="color: red">*</span> --}}
                                        <label for="attorney"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Factor With Housing:</label>
                                           <div class="input-group">
                                               <div class="input-group-prepend"></div>
                                               <select type="text" value="" id="" name="withhousing">
                                                <option>Select</option>
                                             <option>Yes</option>
                                           <option>No</option>
                                         </select>
                                           </div>
                                   {{-- </div> --}}
                               </div>
                                <div class="" style="width: 33%">
                                    {{-- <div class=""><span style="color: red">*</span> --}}
                                    <label for="attorney"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Without Housing:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <select type="text" value="" id="" name="wouthousing">
                                                <option>Select</option>
                                             <option>Yes</option>
                                           <option>No</option>
                                         </select>
                                {{-- </div> --}}
                                </div>
                                
                                
                           
                        </div>
                        <div class="row">
                            <div class="row">
                                <div class="" style="width: 50%;">
                                </div>
                                <div class="" style="width: 0%"></div>
                                <div class="col-sm" style="padding-right: 0px;width: 50%">
                                    <br>
                                    <button type="submit" onclick="return Validate()" class="btn btn-primary float:right;"
                                        Style="width:45%;" value="submit">Save</button>
                                    <button type="button" class="btn btn-primary float:left"
                                        Style="width:45%;"data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                        </form>
                </div>
                    <br>
                </div>
            </div>
        </div>
   </div>
</div>
</div>
{{-- Start Edit Tax Chart--}}
<div class="modal fade" id="edit_taxchart" style="">
    <!-- edit  -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post" action="" enctype="multipart/form-data" id="addemployee">
                @csrf
                <h5><b>Edit Tax Chart:-</b></h5>

                <div class="row">
                    <div class="" style="*/background-color: #d3d0ca;border-radius:5px;">
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for=""
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Tax Brand</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text"  id="" name="taxband"value="" class="form-control">
                                            <div class="invalid-feedback" style="width: 100%;">
                                            Required Field.
                                            </div>
                                        </div>


                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for=""
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Lower Limit</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text"  id="" name="limit"value="" class="form-control" >
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Required Field.
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for=""
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Upper Limit</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text"  id="" name="ulimit"value=""class="form-control">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Required Field.
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for=""
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Rate(%)</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text"  id="" name="rate"value=""class="form-control">
                                            <div class="invalid-feedback" style="width: 100%;">
                                            Required Field.
                                            </div>
                                        </div>
                                </div>
                            </div>


                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for=""
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Factor With Housing</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <select type="text" value="" id="" name="withhousing">
                                            <option></option>
                                         <option>Yes</option>
                                       <option>No</option>
                                     </select>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Required Field.
                                        </div>
                                    </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for=""
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Without Housing</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <select type="text" value="" id="" name="wouthousing">
                                            <option></option>
                                           
                            <option>Yes</option>
                            <option>No</option>
                                </select>
                                      <div class="invalid-feedback" style="width: 100%;">
                                            Required Field.
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="row document_details " style="margin-bottom: 20px;">
                            {{-- Add More Document details:- javascript --}}

                    </div>
                </div>
            </div>
            <div class style="width: 20%">
            </div>
            <div class="col-sm">

                <button type="submit" class="btn btn-primary float:right;"
                    style="margin-left: 61%;--clr: #1D1D50;width:19%;
                    --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Update
                </button>
                <button type="button" class="btn btn-primary float:left" Style="width:19%;"
                    onclick="history.back()">Cancel</button>
            </div>

    </form>
    </div>
</div>
</div>
{{-- End edit corporate client --}}
<div class="modal fade" id="delete_taxchart" style=""> <!-- delete -->
    <div class="modal-dialog modal-lg" style="width:30%;">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post"  id="delete_taxchart" action="{{url('delete_tax_chart',$chart_tax->id)}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="id" value="id">
                <div class="modal-header" style="padding:0rem 0rem;">
                    <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Delete <span id="delete_taxchart"></span></b></h4></div>
                </div>
                <!-- Modal body -->
                <div class="modal-body" >
                    <div class="container">
                        <div class="row"><h6><b><span>Are you sure?</span></b></h6>
                        </div>
                            <div class="row">
                                <div class="" style="width: 30%;">
                                </div>
                                <div lass="" style="width: 0%"></div>
                                <div class="col-sm" style="padding-right: 0px;width: 70%;">
                                    <br>
                                    <button type="submit" class="btn btn-primary float:right;" Style="width:45%;background-color:#DD4132;">Yes</button>
                                    <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

<script>
    function changestatus(param) { // change copany status
        var status = $(param).prop('checked') == true ? 1 : 0;
        var user_id = $(param).data('id');
        $.ajax({
            type: "post",
            dataType: "json",
            url: "{{ route('changestatus_taxchart') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                'status': status,
                'id': user_id
            },
            success: function(data) {
                toastr.options.closeButton = true;
                toastr.options.closeMethod = 'fadeOut';
                toastr.options.closeDuration = 1;
                toastr.success(data.success);
            }
        });
    }


</script>
  @endsection



