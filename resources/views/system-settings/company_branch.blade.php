@extends('layouts.hmsmain')
@section('content')
<style>
    .fa-ban , .fa-bell{
        color: red;
    }
    .fa-ban , .fa-bell{
        padding: 5px;
    }

</style>
    <nav style="font-size:15px;">
        <a href="{{ url('home') }}" style="color: #1D1D50;">Home</a> /
        <a href="#" style="color: #1D1D50;">System Setup</a> /
        <a href="{{ url('other_confgn') }}" style="color: #1D1D50;">Other Configurations</a> /
        <a href="#" style="color: #1D1D50;">Company Branch</a>
    </nav>
    <br><br>
    <div class="container">

      
        {{-- heading --}}
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
                        <b style="font-size:18px;">Company Branch</b>
                    </h4>
                </div>
                <div class="col-sm-4" style="">
                </div>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal"
            data-target="#myModal"style="margin-left:10px;    --clr: #1D1D50;
        --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add Branch</button>
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Branch</button> --}}
            {{-- <h4 id="hdtpa"><b>Company Branch</b></h4> --}}
            <br><br>

            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->

            {{-- <a href="{{('add_company_branch')}}"><button class="btn btn-primary">Add Branch</button></a> --}}
          
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
                    <!-- <a href="{{ 'add_company_branch' }}"><button class="btn btn-primary add-btn">Add Branch </button></a><br><br> -->


           
                    <div class="card" style="width: 18rem;">
                        <div class="p-2" style="display: inline-block; width:fit-content; position: absolute;right: 0; ">
                            <i class="fa fa-ban"></i>
                            <i class="fa fa-bell"></i>
                        </div>
                        <img class="card-img-top" src="https://t4.ftcdn.net/jpg/02/81/89/73/360_F_281897358_3rj9ZBSZHo5s0L1ug7uuIHadSxh9Cc75.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div style="  display: flex;
                            flex-wrap: wrap;
                            justify-content: space-around;align-items: center;">
                          <div class="card-title m-0" style="padding: 0px; font-size:15px; ">Branch Name</div>
                          <div class="" style="">
                            <a href=""><i
                                    style="  color:rgb(13, 1, 56);" class="fa fa-eye"
                                    aria-hidden="true"></i> </a>
                                <span class="m-1"></span>
                            <a href=""><i
                                    style="  color:rgb(13, 1, 56);" class="fa fa-edit"
                                    aria-hidden="true"></i> </a>
                                <span class="m-1"></span>
                            <a href=""><i
                                    style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt"
                                    aria-hidden="true"></i> </a>
                                <span class="m-1"></span>
                            <a href=""><i
                                    style="  color:rgb(13, 1, 56);" class="fa fa-add"
                                    aria-hidden="true"></i> </a>
                          </div>
                            </div>
  
                          <p class="card-text mt-1 mb-1"> <b> Address:</b> Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <b><p class="mb-1">Email:</p></b>
                            <p class="mb-1">Architect & Engineer</p>
                          
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
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
                                            {{-- <td scope="row">
                                                <a href="{{ url('edit_company_branch', $branch->id) }}"><i
                                                        style="  color:rgb(13, 1, 56);" class="fa fa-edit"
                                                        aria-hidden="true"></i>
                                                    <span class="m-2"></span>
                                                    <a href="{{ url('delete_company_branch', $branch->id) }}"><i
                                                            style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt"
                                                            aria-hidden="true"></i>
                                            </td> --}}
                                            <td scope="row"class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" style="border-color:none;"> ⋮ </a>
                
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ url('edit_company_branch', $branch->id) }}">Edit Branch</a>
                                                        <a class="dropdown-item"
                                                            {{-- href="{{ url('delete_company_branch', $branch->id) }}">Delete Branch</a> --}}
                                                            <a href="#"onclick=deletebranch(this) data-id="{{ $branch->id }}"data-toggle="modal"
                                                                data-target="#deleteBranch">Delete Branch</a>
                                                    </div>
                                                </div>
                                            </td>
                                    @endforeach
                                    </tr>
                                </tbody>


                            </table>
                            <br>
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
                            <div class="modal fade" id="deleteBranch" style=""> <!-- delete company branch -->
                                <div class="modal-dialog modal-lg" style="width:30%;">
                                    <div class="modal-content">
                                        <!---- Modal Header -->
                                        <form method="post"  id="delete_branch" action="{{ url('delete_company_branch') }}" enctype="multipart/form-data"> 
                                            @csrf
                                            <input type="hidden" id="id" value="id">
                                            <div class="modal-header" style="padding:0rem 0rem;">
                                                <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Delete <span id="delete_branch"></span></b></h4></div>
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
                    @endsection
