@extends('layouts.hmsmain')
@section('content')
    <nav style="font-size:15px;">
        <a href="{{ url('home') }}" style="color: #1D1D50;">Home</a> /
        <a href="#" style="color: #1D1D50;">System Setup</a> /
        <a href="#" style="color: #1D1D50;">Hourly Rates</a>
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

                .pagination li:hover {
                    cursor: pointer;
                }

                .header_wrap {
                    padding: 30px 0;
                }

                .num_rows {
                    width: 20%;
                    float: left;
                }

                .tb_search {
                    width: 20%;
                    float: right;
                }

                .pagination-container {
                    width: 70%;
                    float: left;
                }

                .rows_count {
                    width: 20%;
                    float: right;
                    text-align: right;
                    color: #999;
                }
            </style>
        </head>


        {{-- heading --}}
        <div class="container">
            {{-- <h4 id="hdtpa"><b>Hourly Rates</b></h4> --}}
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
                        <b style="font-size:18px;">Hourly Rates</b>
                    </h4>
                </div>
                <div class="col-sm-4" style="">
                </div>
            </div>
            <br>
                <!---------------------------------------------- MODAL ---------------------------------------------------------------------->

            {{-- <a href="{{('add_hourly_rates')}}"><button class="btn btn-primary">Add User Hourly Rates</button></a> --}}
            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add User Hourly Rates</button> --}}
            <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#myModal"style="margin-left:10px;    --clr: #1D1D50;
            --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add
                Add User Hourly Rates</button>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
                    <!-- <a href="{{ url('add_hourly_rates') }}"><button class="btn btn-primary add-btn"style="width: 25%; margin-bottom:5%;">Add User Hourly Rates</button></a>-->

                    <div class="header_wrap">
                        <div class="num_rows">
                            <div class="form-group">
                                <!--		Show Numbers Of Rows 		-->
                                <select class="form-control" aria-label="Page navigation example" name="state"
                                    id="maxRows">

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
                            <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()"
                                placeholder="Search.." class="form-control">
                        </div>
                        <!-- <h6 style="text-align:center; ">Hourly Rates</h6> -->
                         <div class="table-responsive">
                            <table class="table table-striped table-class" id="table-id">
                                <thead>
                                    <tr>
                                        <!-- <th class="text-center">*</th> -->
                                        <th class="text-center">User / Staff</th>
                                        <th class="text-center">Currency</th>
                                        <th class="text-center">Amount</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hourly_rate as $rate)
                                        <tr id="data">
                                            <!-- <td scope="row" class="text-center">{{ $rate->id }}</td> -->
                                            <td scope="row" class="text-center">{{ $rate->user_staff }}</td>
                                            <td scope="row" class="text-center">{{ $rate->currency }}</td>
                                            <td scope="row" class="text-center">{{ $rate->amount }}</td>
                                            {{-- <td  scope="row"class="text-center">
                        <a href="{{url('edit_hourly_rates',$rate->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <span class="m-2"></span>
                        <a href="{{url('delete_hourly_rates',$rate->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td> --}}
                                            <td scope="row"class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" style="border-color:none;"> ⋮ </a>

                                                    <div class="dropdown-menu">
                                                        {{-- <a class="dropdown-item"
                                                            href="{{ url('edit_hourly_rates', $rate->id) }}">Edit Hourly
                                                            Rate</a> --}}
                                                            <a class="dropdown-item" data-toggle="modal"
                                                    data-target="#edit_hourly_rate" href="#">Edit Hourly
                                                            Rate
                                                            </a>
                                                        <a class="dropdown-item" {{-- href="{{url('delete_hourly_rates',$rate->id)}}" data-toggle="modal" data-id="{{$rate->id }}"onclick="deletecompany(this)" data-target="#deletecompany">Delete Hourly Rate</a> --}}
                                                            href="#"onclick=deleterate(this)
                                                            data-id=""data-toggle="modal"
                                                            data-target="#deleteRate">Delete Hourly Rate</a>
                                                    </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- 		End of Container -->
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
                                                            <select type="text" value=""
                                                                name="user"style="width:100%;">
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
                                                            <select type="text" value=""
                                                                name="currency"style="width:100%;">
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
                                                            <input type="text" class="form-control" name="rate"
                                                                id="confirm_password" required>
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
                                                    <button type="submit" class="btn btn-primary float:right;"
                                                        Style="width:45%;">Save</button>
                                                    <button type="button" class="btn btn-primary float:left"
                                                        Style="width:45%;"data-dismiss="modal">Cancel</button>
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
                     {{-- Start Edit Hourly Rate --}}
    <div class="modal fade" id="edit_hourly_rate" style="">
        <!-- Edit Hourly Rate -->
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!---- Modal Header -->
                <form method="post" action="{{ url('') }}" enctype="multipart/form-data" id="addemployee">
                    @csrf
                    <h5><b>Edit Hourly Rate:-</b></h5>

                    <div class="row">
                        <div class="" style="*/background-color: #d3d0ca;border-radius:5px;">
                            <div class="row">
                                <div class="" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                       <label for="username"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">User / Staff
                                        </label>
                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            </div>
                                                            <select type="text" value=""
                                                                name="user"style="width:100%;">
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
                                <div class="" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                       <label for="username"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Currency
                                            </label>
                                     <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <select type="text" value=""
                                                                name="currency"style="width:100%;">
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
                                <div class="" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                            <label for="username"
                                             style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Hourly Rate
                                             </label>

                                       <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <input type="text" class="form-control" name="rate"
                                                                id="confirm_password" required>
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
    {{-- End edit hourly rate --}}
                    <div class="modal fade" id="deleteRate" style="">
                        <!-- delete hourly rate -->
                        <div class="modal-dialog modal-lg" style="width:30%;">
                            <div class="modal-content">
                                <!---- Modal Header -->
                                <form method="post" id="delete_hourly_rate" action="{{ url('delete_hourly_rates') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" id="id" value="id">
                                    <div class="modal-header" style="padding:0rem 0rem;">
                                        <div style="padding:1rem 1rem;">
                                            <h4 class="text-centre"><b>Delete <span id="delete_rate"></span></b></h4>
                                        </div>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <h6><b><span>Are you sure?</span></b></h6>
                                            </div>
                                            <div class="row">
                                                <div class="" style="width: 30%;">
                                                </div>
                                                <div lass="" style="width: 0%"></div>
                                                <div class="col-sm" style="padding-right: 0px;width: 70%;">
                                                    <br>
                                                    <button type="submit" class="btn btn-primary float:right;"
                                                        Style="width:45%;background-color:#DD4132;">Yes</button>
                                                    <button type="button" class="btn btn-primary float:left"
                                                        Style="width:45%;"data-dismiss="modal">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
