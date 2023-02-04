@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">User Management</a> /
    <a href="#" style="color: #1D1D50;">Manage User Roles</a>
</nav>
<br><br>
        <!-- <button class="btn btn-primary"
                            style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Manage Roles</u></b></span></button><br>
                      -->
        <div class="container">
            {{-- heading --}}
            <h4 id="hdtpa"><b>Manage Roles</b></h4>
            <br>


            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->

            {{-- <a href="{{('add_user_roles')}}"><button class="btn btn-primary">Add New Role</button></a> --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New
                Role</button>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
                    <!-- <a href="{{ 'add_user_roles' }}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add User Role</button></a> -->

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

                        <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">User Roles
                        </h3>
                        <div class="table-responsive">
                            <table class="table table-striped table-class" id="table-id">



                                <thead>

                                    <tr>
                                        {{-- <th class="text-center" >No</th> --}}
                                        <th class="text-center">Role Name</th>
                                        {{-- <th class="text-center" >Users</th> --}}
                                        <th class="text-center">Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user_role as $role)
                                        <tr>
                                            {{-- <td  class="text-center">{{$role->id}}</td> --}}
                                            <td class="text-center">{{ $role->role_name }}</td>
                                            {{-- <td class="text-center"></td> --}}
                                            <td scope="row"class="text-center">
                                                <!--<a href="{{ url('view_company_details') }}"><i  style=" color:rgb(13, 1, 56);" class="fa fa-eye" aria-hidden="true"></i> -->
                                                <a href="{{ url('edit_user_roles', $role->id) }}"><i
                                                        style="  color:rgb(13, 1, 56);padding-left:10px" class="fa fa-edit"
                                                        aria-hidden="true"></i>
                                                    <span class="m-2"></span>
                                                    {{-- <a href="{{ url('user_role_destroy', $role->id) }}"> <i
                                                                style="color:rgb(13, 1, 56);padding-left:10px"class="fas fa-trash-alt"></i> --}}
                                                    <a href="#" data-toggle="modal" data-id="{{ $role->id }}"
                                                        data-name="{{ $role->role_name }}"onclick="deleterole(this)"
                                                        data-target="#deleterole"> <i
                                                            style="color:rgb(13, 1, 56);padding-left:10px"class="fas fa-trash-alt"></i>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table><br>
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

                        <!-- 		End of Container -->
                        <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h2 class="text-centre"><b>Add New Role</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_user_roles') }}"
                                                enctype="multipart/form-data">
                                                <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12 ">
                                                        <label>Role Name:</label>
                                                        <div class="row">
                                                            <div class="col-md-11">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" id="" name="role_name"
                                                                        value="" class="form-control">
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
                        </div>
                    </div>
                    <div class="modal fade" id="deleterole" style="">
                        <!-- delete company -->
                        <div class="modal-dialog modal-lg" style="width:30%;">
                            <div class="modal-content">
                                <!---- Modal Header -->
                                <form method="post" id="delete_role" action="#" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" id="deleteid" value="id">
                                    <div class="modal-header" style="padding:0rem 0rem;">
                                        <div style="padding:1rem 1rem;">
                                            <h4 class="text-centre"><b>Delete <span id="deletrole_name"></span></b>
                                            </h4>
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
            </div>
        </div>
            <script>
                function deleteuser(param) { // delete role 
                    var deleteid = $(param).data('id');
                    var deleterole_name = $(param).data('role_name');
                    $('#deleteid').val(deleteid);
                    $('#deletrole_name').html(deleterole_name);
                    document.getElementById("deleterole_name").innerHTML = deleterole_name;
                    $('#delete_role').attr('action', "{{ url('delete_user_roles') }}" + "/" + deleteid);
                }
            </script>
@endsection
