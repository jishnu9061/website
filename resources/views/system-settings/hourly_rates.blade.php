@extends('layouts.hmsmain')
@section('content')
<div class="container">

<div>
{{-- heading --}}
    <h4 id="hdtpa"><b>Hourly Rates</b></h4>
    <br><br>
     
   </div>
            
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_hourly_rates')}}"><button class="btn btn-primary">Add User Hourly Rates</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add User Hourly Rates</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<!-- <a href="{{url('add_hourly_rates')}}"><button class="btn btn-primary add-btn"style="width: 25%; margin-bottom:5%;">Add User Hourly Rates</button></a>-->
       

            <h6 style="text-align:center; ">Hourly Rates</h6>

                <table class="table table-bordered" id="new-item">
                    <thead>
                        <tr>
                            
                            <th class="text-center">*</th>
                            <th class="text-center">User / Staff</th>
                            <th class="text-center">Currency</th>
                            <th class="text-center">Amount</th>                           
                            <th class="text-center">Action</th>
                       </tr>
                    </thead>
                    <tbody>
                    @foreach($hourly_rate as $rate)
                        <tr id="data">
                        
                            <td scope="row" class="text-center">{{ $rate->id }}</td>
                            <td scope="row" class="text-center">{{ $rate->user_staff }}</td>
                            <td scope="row" class="text-center">{{ $rate->currency }}</td>
                            <td scope="row" class="text-center">{{ $rate->amount }}</td>
                            <td  scope="row"class="text-center">
                        <a href="{{url('edit_hourly_rates',$rate->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('delete_hourly_rates',$rate->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
    <br>
      <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h2 class="text-centre"><b>Add User Hourly Rate</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_hourly_rates') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
@csrf
                <div class="row">
                <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">User / Staff</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select type="text" value="" name="user"style="width:100%;">
                            <option>--Select---</option>
                                <option>Alekeen W Benson</option>
                                <option>Cedric Opara</option>
                                <option>Corrine Auma</option>
                                <option>Evans Munene</option>
                                <option>Florance Muthama</option>
                                <option>George Njoroge</option>
                                <option>Gichui Kirogo</option>
                                <option>Hillary Wamunyolo Casmir</option>
                                <option>Jackline Ogwemo</option>
                                <option>John Wachira</option>
                                <option>Jukius Mburu</option>
                                <option>Kevin Kavila</option>
                                <option>Martin Kyalo</option>
                                <option>Mike Ogutu </option>
                                <option>Owino PH Onyango</option>
                                <option>Princess Caroline</option>
                                <option>Sarah Gladys</option>
                                <option>Thagichu Nyaga</option>
                                <option>Wambua Musyoka</option>
 </select></br>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Currency</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select type="text" value="" name="currency"style="width:100%;">
                            <option>---Select---</option>
                            <option>KES</option>
                            <option>USD</option>
                            <option>EUR</option>
                            <option>GBP</option>
                            <option>AUD</option>
                            <option>CAD</option>
                            <option>SEK</option>
                            <option>DKK</option>
                            <option>JPY</option>
                            <option>CHF</option>
                            <option>HKD</option>
                          
                        </select>
                               
                                <div class="invalid-feedback" style="width: 100%;">
                              
                                </div>
                            </div>
                        </div>
                    </div>
             

        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Hourly Rate</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="rate" id="confirm_password" required>
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
                            <br>
                            <br>
                        </div>
                    </div>
        </div>
        </form>
</div>
</div>
</div>
</div>

        </body>
        </div>
</html>
  @endsection
      