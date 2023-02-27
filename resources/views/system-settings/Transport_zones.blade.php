@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">System Setup</a> /
    <a href="#" style="color: #1D1D50;">Transport Zones</a>
</nav>
<br><br>
<html>
<div class="container">
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
input[type='file'] {
    opacity: 0
}

input[type='file'] {
    color: rgba(0, 0, 0, 0)
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
    
    .add_decduct {
        text-decoration: none;
        display: inline-block;
        */width: 30px;
        height: 30px;
        background: #8bc34a;
        font-size: 2rem;
        font-weight: bold;
        color: #1d1d50;
        justify-content: space-evenly;
        align-items: center;
        line-height: 0.9;
        cursor: pointer;
    }
    
    .decduct_input {
        padding: 8px 10px;
        width: 20%;
        border-radius: 5px;
        border-color: #1d1d50;
    }
    
    #e_passmessage {
        display: block;
        color: #1d1d50;
        position: relative;
    }
    
    /* Add a green text color and a checkmark when the requirements are right */
    .passvalid {
        color: green;
        margin: 0px;
        font-size: 10px;
    }
    
    .passvalid:before {
        position: relative;
        left: 0px;
        content: "✔";
    }
    
    /* Add a red text color and an "x" when the requirements are wrong */
    .passinvalid {
        color: red;
        margin: 0px;
        font-size: 10px;
        padding-left: 10px;
    }
    
    .passinvalid:before {
        position: relative;
        left: 0px;
        content: "✖";
    }
        </style>
</head>
<body>

  
  {{-- heading --}}
  <div class="container">
    {{-- <h4 id="hdtpa"><b>Transport Zones</b></h4> --}}
    <div class="row" style="height:50px;">
        <div class="col-sm-4" style="padding-top:5px;">
        </div>
        <div class="col-sm-4" style="">
            <h4
                style="border: 0.5px solid #f1d9b0;
                border-radius: 25px;
                background-color: #f1d9b0;
                padding: 2%;
                width: 100%;
                height:90%;
                text-align:center;
                box-shadow: inset 0 0 3px #d3d0ca;
                opacity: .9;">
                <b style="font-size:18px;">Transport Zones</b>
            </h4>
        </div>
        <div class="col-sm-4" style="">
        </div>
    </div>
    <br>
    
   

           
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_transport_zone')}}"><button class="btn btn-primary">Add Transport Zone</button></a> --}}
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" 
                >Add Transport Zone</button> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#myModal"style="margin-left:10px;    --clr: #1D1D50;
            --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add Transport Zone</button>
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
               
<h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">List of Transport Zones</h3>

<div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
                    <thead>
                        <tr>
                            <!-- <th class="text-center">No</th> -->
                            <th class="text-center">Zone Name</th>
                            <th class="text-center">Zone Area</th>
                            <th class="text-center">Cost(Kshs)</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
</tr>
                    </thead>
                    <tbody>
                    @foreach($transport_zone as $detail)
                        <tr class="text-center" id="data">
                            <!-- <td>{{$detail->id }}</td> -->
                            <td>{{$detail->zone_name }}</td>
                            <td>{{$detail->zone_areas }}</td>
                            <td>{{$detail->cost }}</td>
                            <td class="text-center"><label class="switch">
                                <input type="checkbox" data-id="{{ $detail->id }}"
                                    onclick="changestatus(this)" id="status" class="check"
                                    {{ $detail->status == 1 ? 'checked' : '' }}>
                                <span class="slider round"></span>
                            </label>
                        </td>
                            {{-- <td>
                        <a href="{{url('edit_transport_zone',$detail->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <span class="m-2"></span>
                        <a href="{{url('delete_transport_zone',$detail->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td> --}}
                           <td scope="row"class="text-center">
                            <div class="btn-group">
                                <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" style="border-color:none;"> ⋮ </a>

                           <div class="dropdown-menu">
                            <a class="dropdown-item"
                                {{-- href="{{url('edit_transport_zone',$detail->id)}}">Edit Transport Zone</a> --}}
                                <a class="dropdown-item" data-toggle="modal"
                                                    data-target="#edit_transport_zones" href="#">Edit Transport Zones
                                                          
                                                            </a>
                            <a class="dropdown-item"
                                {{-- href="{{url('delete_transport_zone',$detail->id)}}">Delete Transport Zone</a> --}}
                                <a href="#"onclick=deletetransport(this) data-id="{{ $detail->id }}"data-toggle="modal"
                                    data-target="#deleteTransport">Delete Transport Zone</a>
                        </div>
                            </td>
</tr>
@endforeach
                    </tbody>
                   
                </table>
</div>
{{-- <!--		Start Pagination -->
<div class='pagination-container'>
      <nav>
        <ul class="pagination">
         <!--	Here the JS Function Will Add the Rows -->
        </ul>
      </nav>
    </div>
    <div class="rows_count">Showing 11 to 20 of 100</div>

 <!-- 		End of Container --> --}}
 <!--		Start Pagination -->
 <div class='pagination-container'>
     <nav>
         <ul class="pagination">
             <li data-page="prev">
                 <span>
                     < <span class="sr-only">(current)
                 </span></span>
             </li>
             <li data-page="next" id="prev">
                 <span> > <span class="sr-only">(current)</span></span>
             </li>
         </ul>
     </nav>
 </div>
 <div class="rows_count"></div>
</div>
 <!-- 		End of Container -->
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h2 class="text-centre"><b>Add Transport Zone</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_transport_zone') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
@csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Zone Name</label>

                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="zone_name" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                     
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Zone Areas</label>

                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="zone_areas" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Cost(Kshs)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="cost" id="age">
                            </div>
                        </div>
                    </div>
                 </div>
                <br>
             
                <div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
                </form>
</div>
</div>
</div>
</div>
{{-- Start Edit Transport Zones --}}
<div class="modal fade" id="edit_transport_zones" style="">
    <!-- Edit Transport Zones-->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post" action="{{ url('') }}" enctype="multipart/form-data" id="addemployee">
                @csrf
                <h5><b>Edit Transport Zones:-</b></h5>

                <div class="row">
                    <div class="" style="*/background-color: #d3d0ca;border-radius:5px;">
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                   <label for="zone_name"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Zone Name
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
        
                                        </div>
                                        <input type="text" class="form-control" name="zone_name" id="age">
                                        <div class="invalid-feedback" style="width: 100%;">
                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                   <label for="zone_areas"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Zone Areas
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
            
                                            </div>
                                            <input type="text" class="form-control" name="zone_areas" id="age">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Incorporation is required
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                        <label for="cost"
                                         style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Cost(Kshs)
                                         </label>

                                         <div class="input-group">
                                            <div class="input-group-prepend">
            
                                            </div>
                                            <input type="text" class="form-control" name="cost" id="age">
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                            </div>
                        
                            <div class="col-sm-4">
                            </div>
                        </div>
                        <div class="doc_contanier"style="*/background-color:orange;">
                          
                            <div class="row document_details " style="margin-bottom: 20px;">
                                {{-- Add More Document details:- javascript --}}
                            </div>
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
        </div>
        </form>
    </div>
</div>
{{-- End edit billable activity --}}
<div class="modal fade" id="deleteTransport" style=""> <!-- delete transport zones -->
    <div class="modal-dialog modal-lg" style="width:30%;">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post"  id="delete_transport_zones" action="{{url('delete_transport_zone',$detail->id)}}" enctype="multipart/form-data"> 
                @csrf
                <input type="hidden" id="id" value="id">
                <div class="modal-header" style="padding:0rem 0rem;">
                    <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Delete <span id="delete_transport"></span></b></h4></div>
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
        </body>
        </div>
</html>
<script>
    function changestatus(param) { // change copany status
        var status = $(param).prop('checked') == true ? 1 : 0;
        var user_id = $(param).data('id');
        $.ajax({
            type: "post",
            dataType: "json",
            url: "{{ route('changestatus_transportzones') }}",
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