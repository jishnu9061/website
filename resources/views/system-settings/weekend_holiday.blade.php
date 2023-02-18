@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">System Setup</a> /
    <a href="#" style="color: #1D1D50;">Weekends and Holidays</a>
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

</head>

<div class="container">
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
                    <b style="font-size:18px;">Weekends and Holidays</b>
                </h4>
            </div>
            <div class="col-sm-4" style="">
            </div>
        </div>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->

                <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#myModal"style="margin-left:10px;    --clr: #1D1D50;
            --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add New Holiday / Weekend Date</button>
                <p><a href="{{url('holiday_2017')}}"style="color:blue; font-size:x-small;">2017</a> | <a href="{{url('holiday_2018')}}"style="color:blue;font-size:x-small;">2018</a> | <a href="{{url('holiday_2019')}}"style="color:blue;font-size:x-small;">2019</a> | <a href="{{url('holiday_2020')}}"style="color:blue;font-size:x-small;">2020</a> | <a href="{{url('holiday_2021')}}"style="color:blue;font-size:x-small;">2021</a> | <a href="{{url('holiday_2022')}}"style="color:blue;font-size:x-small;">2022</a></p>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<!-- <a href="{{url('add_new_holiday')}}"><button type="button" class="btn btn-primary add-btn" style="width:30%" > Add New Holiday / Weekend Date</button></a>
<p><a href="{{url('holiday_2017')}}"style="color:blue; font-size:x-small;">2017</a> | <a href="{{url('holiday_2018')}}"style="color:blue;font-size:x-small;">2018</a> | <a href="{{url('holiday_2019')}}"style="color:blue;font-size:x-small;">2019</a> | <a href="{{url('holiday_2020')}}"style="color:blue;font-size:x-small;">2020</a> | <a href="{{url('holiday_2021')}}"style="color:blue;font-size:x-small;">2021</a> | <a href="{{url('holiday_2022')}}"style="color:blue;font-size:x-small;">2022</a></p><br><br> -->
<div class="container">
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

<h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Weekends & Holidays Dates - 2022</h3>
        <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
            <thead>
              <tr class="text-center">
                <!-- <th>Sl No:</th> -->
                <th>Date</th>
                <th>Day</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($holiday_details as $holiday)
              <tr>
              <!-- <td>{{$holiday->id}}</td> -->
    <td>{{$holiday->Date}}</td>
    <td>{{$holiday->Day}}</td>

                {{-- <td  scope="row" class="text-center"><!--<a href="{{url('view_company_details')}}"><i  style=" color:rgb(13, 1, 56);" class="fa fa-eye" aria-hidden="true"></i> -->
                        <a href="{{url('edit_holiday',$holiday->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <span class="m-2"></span>
                        <a href="{{url('delete_holiday',$holiday->id)}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td> --}}
                            <td scope="row"class="text-center">
                                <div class="btn-group">
                                    <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" style="border-color:none;"> ⋮ </a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="{{url('edit_holiday',$holiday->id)}}">Edit Holiday</a>
                                        <a class="dropdown-item"
                                            {{-- href="{{url('delete_holiday',$holiday->id)}}">Delete Holiday</a> --}}
                                            <a href="#"onclick=deleteholiday(this) data-id="{{ $holiday->id }}"data-toggle="modal"
                                                data-target="#deleteHoliday">Delete Holiday</a>
                                    </div>
                                </div>
                            </td>
             </tr>
             @endforeach
           </tbody>
</table>
</div >

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
    </div>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h2 class="text-centre"><b>Add New Holiday / Weekend Date</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_new_holiday') }}"
                                                enctype="multipart/form-data">
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
@csrf
        <div class="row">

                    <div class="col-md-6">
                        <div class="mb-1">
                            <label >Date:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="date" class="form-control" name="date" id="date" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
             <div class="col-md-6">
                        <div class="mb-1">
                            <label>Day:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="day" class="form-control" name="day" id="day" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>


                    <div class="row">
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
</div>
</body>
</div>
<div class="modal fade" id="deleteHoliday" style=""> <!-- delete holiday -->
    <div class="modal-dialog modal-lg" style="width:30%;">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post"  id="delete_holiday" action="{{url('delete_holiday')}}" enctype="multipart/form-data"> 
                @csrf
                <input type="hidden" id="id" value="id">
                <div class="modal-header" style="padding:0rem 0rem;">
                    <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Delete <span id="delete_holiday"></span></b></h4></div>
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
</html>
@endsection
