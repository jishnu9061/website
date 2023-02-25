@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">HR</a> /
    <a href="#" style="color: #1D1D50;">Attendance Sheet</a>
</nav>
<br><br>
{{-- heading --}}
  <div class="container">
   <h4 id="hdtpa"><b>Attendance Sheet</b></h4>
   <br>

{{--

   <meta name="csrf-token" content="{{ csrf_token() }}">
   <form method="post" action="monthwise">
           @csrf
   <div class="row" style="padding-bottom:24px;padding:15px;">

   <div class="col-md-3">
   <select class="form-control" name="departmentx">
   <option value="allstaffs">All Staffs</option>
   {{-- @foreach($deps as $dep)
   <option  value="{{$dep->depname}}">{{$dep->depname}}</option>

   @endforeach --}}
   {{-- </select>
   </div>
   <div class="col-md-3">

   <select id="b" class="form-control" name="year">

   @for($i=2022;$i<=2080;$i++)
   <option value="{{$i}}">{{$i}}</option>
   @endfor
   </select>
   </div>
   <div class="col-md-4" id="selll">
   <select id="b" class="form-control" name="month" id="sele">

   <option id="01" value="01">January</option>
   <option  value="02">February</option>
   <option  value="03">March</option>
   <option  value="04">April</option>
   <option  value="05">May</option>
   <option  value="06">June</option>
   <option  value="07">July</option>
   <option  value="08">August</option>
   <option  value="09">September</option>
   <option  value="10">October</option>
   <option  value="11">November</option>
   <option  value="12">December</option>

   </select>
   </div>
   <div class="col-md-2">
       <button type="submit" class="btn btn-primary form-control">Submit</button>
   </div>  --}}

   </form>
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










 <div class="row">
    <div class="col-md-6">
        <div class="mb-1">
        <label >Date</label>
            <div class="input-group">
                <div class="input-group-prepend"></div>
                <input type="date"  id="" name="apply_date"value="" class="form-control" >
                <div class="invalid-feedback" style="width: 100%;">
                Required Field.
                </div>

            </div>
        </div>
    </div>
    <div class="col-sm">
        <br>
        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Get</button>
</div>
</div><br><br>
<br>



 {{-- //*----------------Sheet-------------------------------------------------------------//* --}}

 <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

        <br>
        <div class="table-responsive">
            <table class="table table-striped table-class" id="table-id">

                <thead>

                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Department</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Action</th>


                    </tr>
                </thead>
                <tbody>



                    <tr>

                        <td scope="row" class="text-center"></td>
                        <td scope="row" class="text-center"></td>
                        <td scope="row" class="text-center"></td>
                        <td scope="row" class="text-center"></td>
                        <td scope="row" class="text-center">


                            {{-- <a href="{{url('view_attendance')}}"><i style="color:rgb(13, 1, 56);"class="fa fa-eye"></i><span class="m-1"></span> --}}

                            {{-- <a href="{{url('delete_leave_request',$leave->id)}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i> --}}
                                <div class="btn-group">
                                    <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" style="border-color:none;"> ⋮ </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                        href="#">View Attendance</a>
                                    </div>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>





















{{-- ------------------------------End--------------------------------------- --}}

       <div class='pagination-container'>
        <nav>
          <ul class="pagination">
           <!--	Here the JS Function Will Add the Rows -->
          </ul>
        </nav>
      </div>
      <div class="rows_count">Showing 11 to 20 of 100</div>

   <!-- 		End of Container -->

      <script src="{{ url('assets/js') }}/jquery.min.js"></script>



      <script type="text/javascript">

  $(function () {
   $('[data-toggle="popover"]').popover()
  })
      $(document).on('change','#mark',function(){
          var a=this.value;

          var onename = $(this).closest('#datax').find('#hiddenalways').val();
          var qw = $(this).closest('#datax').find('#qw').val();




          $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
     });


           $.ajax({
             method:"POST",
             url:"/attendancetostaff",
             data:{
                 'a':a,
                 'onename':onename,

             },

             //success: function (response){
               //  alert(response.status);
             //},


           });

      })
  </script>

  <script>
  $( document ).ready(function() {
      var sel = $(this).closest('#sele').find('#ds').val();

  });
  </script>















   @endsection
