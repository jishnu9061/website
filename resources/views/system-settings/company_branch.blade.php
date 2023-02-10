@extends('layouts.hmsmain')
@section('content')
    <nav style="font-size:15px;">
        <a href="{{ url('home') }}" style="color: #1D1D50;">Home</a> /
        <a href="#" style="color: #1D1D50;">System Setup</a> /
        <a href="{{ url('other_confgn') }}" style="color: #1D1D50;">Other Configurations</a> /
        <a href="#" style="color: #1D1D50;">Company Branch</a>
    </nav>
    <br><br>
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
            <h4 id="hdtpa"><b>Company Branch</b></h4>
            <br>
            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->

            {{-- <a href="{{('add_company_branch')}}"><button class="btn btn-primary">Add Branch</button></a> --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Branch</button>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
                    <!-- <a href="{{ 'add_company_branch' }}"><button class="btn btn-primary add-btn">Add Branch </button></a><br><br> -->


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


                        <div class="table-responsive">
                            <table class="table table-striped table-class" id="table-id">
                                <thead>
                                    <tr class="text-center">
                                        <!-- <th>Sl No</th> -->
                                        <th>Branch Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                </thead>
                                </tr>
                                <tbody>
                                    @foreach ($branch_details as $branch)
                                        <tr class="text-center">
                                            {{-- <td>{{ $branch->id }}</td> --}}
                                            <td>{{$branch->branch_name}}</td>
                                            <td>{{$branch->address}}</td>
                                            <td>{{$branch->email}}</td>
                                            <td style="color:green;font-weight:bold;"></td>
                                            <td scope="row">
                                                <a href="{{ url('edit_company_branch', $branch->id) }}"><i
                                                        style="  color:rgb(13, 1, 56);" class="fa fa-edit"
                                                        aria-hidden="true"></i>
                                                    <span class="m-2"></span>
                                                    <a href="{{ url('delete_company_branch', $branch->id) }}"><i
                                                            style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt"
                                                            aria-hidden="true"></i>
                                            </td>
                                    @endforeach
                                    </tr>
                                </tbody>


                            </table>
                            <br>
                            <!--		Start Pagination -->
                            <div class='pagination-container'>
                                <nav>
                                    <ul class="pagination">
                                        <!--	Here the JS Function Will Add the Rows -->
                                    </ul>
                                </nav>
                            </div>
                            <div class="rows_count">Showing 11 to 20 of 100</div>

                            <!-- 		End of Container -->

                            <!-- <div class="class"style="text-align:right;">
                            <select style="width:10%;height:100%;color:rgb(13, 1, 56);font-size:small;background-color:#FFFBF4;"type="text" value="" >
                <option>Activate Category</option>
                <option>De-Activate Category</option>
                <option>Delete Category</option> -->
                            <!-- </select>
            <input type="button"value="Go" name="close"style="background-color:#FFFBF4;color: rgb(13, 1, 56); ">
                </div>
                </div>
                <br>
                <br>
                </div> -->

                            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h2 class="text-centre"><b>Add Branch</b></h2>

                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="container">
                                                <form method="post" action="{{ url('add_company_branch') }}"
                                                    enctype="multipart/form-data">
                                                    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
                                                    @csrf
                                                    <div class="row">
                                                        @foreach($company_id as $data)
                                                        <input class="form-control" type="hidden" id=""
                                                            name="company_id" value="{{ $data->company_id }}">
                                                        @endforeach    
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label>Branch No:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input class="form-control" type="text"
                                                                        id="bnum" name="bnum" value="">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Required Field.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label>Branch Code:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" id="bcode" name="bcodes"
                                                                        class="form-control" value="">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Required Field.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Branch Name:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" id="bname"
                                                                        name="bname"class="form-control"
                                                                        value="">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Required Field.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">Postal Address:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>

                                                                    <textarea rows="4" cols="50" name="paddress" class="form-control" type="text"></textarea>
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Required Field.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">Physical Address:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <textarea rows="4" cols="50" name="physicaladd" class="form-control" type="text"></textarea>

                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Required Field.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Tel:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" id="tel" name="tel"
                                                                        class="form-control" value="">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Required Field.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Mobile:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" id="mobile" name="mobile"
                                                                        class="form-control" value="">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Required Field.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Fax:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" id="fax" name="fax"
                                                                        class="form-control" value="">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Required Field.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Town:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <select name="town"
                                                                        id="town"style="width:100%;">
                                                                        <option>---select---</option>
                                                                        <option>Nairobi </option>
                                                                        <option>Kisumu</option>
                                                                        <option>Nakuru</option>
                                                                        <option>Mombasa</option>
                                                                        <option>Thika</option>
                                                                        <option>Malindi</option>
                                                                    </select>

                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Required Field.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Email:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="email" id="email"
                                                                        name="email"class="form-control"
                                                                        value="">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Required Field.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Website:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" id="website" name="website"
                                                                        class="form-control">
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

                                                        </div>
                                                        <div class="col-sm">
                                                            <br>
                                                            <button type="submit" class="btn btn-primary float:right;"
                                                                Style="width:45%;">Save</button>
                                                            <button type="button" class="btn btn-primary float:left"
                                                                Style="width:45%;"data-dismiss="modal">Cancel</button>
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
