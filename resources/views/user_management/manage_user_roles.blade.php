
@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Company Setup</a> /
    <a href="#" style="color: #1D1D50;">Manage Job Titles</a>
</nav>
<br><br>
        <div class="container">
            {{-- heading --}}
            <h4 id="hdtpa"><b>Manage Job Titles/Positions</b></h4>
            <br>

            <i><h2> Under construction</h2></i>
            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div style="display:none;">
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
                    </div>
                </div>
            </div>
        </div>
                        <!-- 		End of Container -->
                        <!---------------------------------------------- MODAL ---------------------------------------------------------------------->


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
