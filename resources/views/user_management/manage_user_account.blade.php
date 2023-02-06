
@extends('layouts.hmsmain')
@section('content')
   
    <nav style="font-size:15px;">
        <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
        <a href="#" style="color: #1D1D50;">User Management</a> /
        <a href="#" style="color: #1D1D50;">Manage User Departments</a>
  </nav>
  <br><br>
    <div class="container">
        {{-- heading --}}
        <h4 id="hdtpa"><b>Manage Accounts</b></h4>
        <br>



        <!---------------------------------------------- MODAL ---------------------------------------------------------------------->

        {{-- <a href="{{('reg_new_user')}}"><button class="btn btn-primary">Add New User</button></a> --}}
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New User</button>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <!---------------------------------------------- MODAL ---------------------------------------------------------------------->

                <div class="header_wrap">
                    <div class="num_rows">
                        <div class="form-group">
                            <!--		Show Numbers Of Rows 		-->
                            <select class="form-control" aria-label="Page navigation example" name="state" id="maxRows">

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
                                <tr>
                                    <!-- <th class="text-center" >User Code</th> -->
                                    <!-- <th class="text-center" >Name</th> -->
                                    <th class="text-center">User Name</th>
                                    <!-- <th class="text-center" >User Group</th> -->
                                    <th class="text-center">E-mail</th>
                                    <!-- <th class="text-center" >Telephone</th> -->
                                    <th class="text-center">Log Status</th>
                                    <th class="text-center">IP Address</th>
                                    <th class="text-center">Logout Time</th>
                                    <!-- <th class="text-center" >Status</th> -->
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user_list as $list)
                                    <tr>
                                        <!-- <td class="text-center">{{ $list->user_code }}</td>
                                            <td class="text-center">{{ $list->first_name }}</td> -->
                                        <td class="text-center">{{ $list->user_name }}</td>
                                        <!-- <td class="text-center">{{ $list->user_group }}</td> -->
                                        <td class="text-center">{{ $list->email_address }}</td>
                                        <!-- <td class="text-center">{{ $list->telephone_no }}</td> -->
                                        <td class="text-center"></td>
                                        <!-- <td class="text-center"></td> -->
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td scope="row"class="text-center">
                                            <a href="{{ url('user_edit', $list->id) }}"><i style="  color:rgb(13, 1, 56);"
                                                    class="fa fa-edit" aria-hidden="true"></i>
                                                <a href="user_comments"><i style="  color:rgb(13, 1, 56);padding-left:10px"
                                                        class="fas fa-comment" aria-hidden="true"></i>
                                                    <a href="#" data-toggle="modal" data-id="{{ $list->id }}"
                                                        data-name="{{ $list->first_name }}"onclick="deleteuser(this)"
                                                        data-target="#deleteuser"> <i
                                                            style="color:rgb(13, 1, 56);padding-left:10px"class="fas fa-trash-alt"></i>
                                                        {{-- <a href="user_attachments"><i  style="  color:rgb(13, 1, 56);" class="fas fa-paperclip" aria-hidden="true"></i> --}}
                                        </td>
                                        {{-- 
                                        <!-- <td class="text-center">
                                            <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action</button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a href="{{url('user_edit',$list->id)}}" class="dropdown-item" >Edit</a>
                                                    <a href="user_view" class="dropdown-item" >View</a>
                                                    <a href="user_attachments"class="dropdown-item" >Attachment</a>
                                                    <a href="user_comments" class="dropdown-item" >Comments</a>
                                                    <a href="{{url('user_destroy',$list->id)}}" class="dropdown-item" >Delete</a>
                                                </div>
                                            </div> 
                                        </td> --> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--		Start Pagination -->
                    <div class='pagination-container'>
                        <nav>
                            <ul class="pagination">
                                <!--	Here the JS Function Will Add the Rows -->
                            </ul>
                        </nav>
                    </div>
                    <div class="rows_count">Showing 11 to 20 of 91</div>



@endsection
