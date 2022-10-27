@extends('layouts.hmsmain')
@section('content')



  <div>
    <button class="btn btn-primary"
    style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>Weekend and Holidays</u></b></button>
  
          </div>
          <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
  {{-- <a href="{{('add_new_holiday')}}"><button class="btn btn-primary">Add New Holiday / Weekend Date</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Holiday / Weekend Date</button>
                <p><a href="{{url('holiday_2017')}}"style="color:blue; font-size:x-small;">2017</a> | <a href="{{url('holiday_2018')}}"style="color:blue;font-size:x-small;">2018</a> | <a href="{{url('holiday_2019')}}"style="color:blue;font-size:x-small;">2019</a> | <a href="{{url('holiday_2020')}}"style="color:blue;font-size:x-small;">2020</a> | <a href="{{url('holiday_2021')}}"style="color:blue;font-size:x-small;">2021</a> | <a href="{{url('holiday_2022')}}"style="color:blue;font-size:x-small;">2022</a><br><br>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<!-- <a href="{{url('add_new_holiday')}}"><button type="button" class="btn btn-primary add-btn" style="width:30%" > Add New Holiday / Weekend Date</button></a>
<p><a href="{{url('holiday_2017')}}"style="color:blue; font-size:x-small;">2017</a> | <a href="{{url('holiday_2018')}}"style="color:blue;font-size:x-small;">2018</a> | <a href="{{url('holiday_2019')}}"style="color:blue;font-size:x-small;">2019</a> | <a href="{{url('holiday_2020')}}"style="color:blue;font-size:x-small;">2020</a> | <a href="{{url('holiday_2021')}}"style="color:blue;font-size:x-small;">2021</a> | <a href="{{url('holiday_2022')}}"style="color:blue;font-size:x-small;">2022</a><br><br> -->
          <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Weekend & Holiday Dates - 2022</h3>
          <table class="table table-bordered" id="new-item">
            <thead>
              <tr>
                <th>Sl No:</th>
                <th>Date</th>
                <th>Day</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($holiday_details as $holiday)
              <tr>
              <td>{{$holiday->id}}</td>
    <td>{{$holiday->Date}}</td>
    <td>{{$holiday->Day}}</td>
 
                <td  scope="row"class="text-center"><!--<a href="{{url('view_company_details')}}"><i  style=" color:rgb(13, 1, 56);" class="fa fa-eye" aria-hidden="true"></i> -->
                        <a href="{{url('edit_holiday',$holiday->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('delete_holiday',$holiday->id)}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td>
                        
             </tr>
             @endforeach
           </tbody>
</table><br><br>
</div >
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add New Holiday / Weekend Date</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
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
</html>
@endsection