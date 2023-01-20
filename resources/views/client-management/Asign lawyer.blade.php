@extends('layouts.hmsmain')
@section('content')

{{-- <div class="spacer" style="height:40px;margin-top: 30px;"> --}}

    <h4 id="hdtpa"><b>Asign Lawyer</b></h4>



<br><br>


<button class="btn btn-primary add-btn" data-toggle="modal" data-target="#myModal">Add Client</button></a>



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
        <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.."
            class="form-control">
    </div>



    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="table-responsive">
                <table class="table table-striped table-class" id="table-id">

                    <thead>
                        <tr>
                            {{-- <!-- <th class="text-center"> No</th> --> --}}
                            <th class="text-center"> Client Number</th>
                            <th class="text-center">Client Type</th>
                            <th class="text-center">Client Name</th>
                            <th class="text-center">File Number</th>
                            <th class="text-center">Lawyer Name</th>
                            <th class="text-center">Court Name</th>
                            <th class="text-center">Actions</th>

                            <!-- <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th> -->
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($asign_lawyer as $lawyer)

                        <tr class="text-center" id="">

                            <td scope="row" class="text-center" id="">{{$lawyer->client_number}}</td>
                            <td scope="row" class="text-center" id="">{{$lawyer->client_type}}</td>
                            <td scope="row" class="text-center" id="">{{$lawyer->client_name}}</td>
                            <td scope="row" class="text-center" id="">{{$lawyer->file_number}}</td>
                            <td scope="row" class="text-center" id="">{{$lawyer->lawyer_name}}</td>
                            <td scope="row" class="text-center" id="">{{$lawyer->court_name}}</td>
                            

                            {{-- <td scope="row" class="text-center">
                                <a href="{{url('view-client')}}">

                            </td> --}}

                            <td scope="row" class="text-center">
                                <a href="{{url('view_lawyer',$lawyer->id)}}"><i style="color:rgb(13, 1, 56);"class="fa fa-eye"></i><span class="m-1"></span><span class="m-1"></span>

                                <a href="{{url('edit_lawyer',$lawyer->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>

                                <a href="{{url('delete_lawyer',$lawyer->id)}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i>

                            </td>

                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>























            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h2 class="text-center"><b>Add Individual Client</b></h2>

                        </div>

                        <!------------------------ Modal body ------------------------>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" action="{{url('add_lawyer')}}">
                        @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-1">
                                                        <label>Client Number</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control"
                                                                name="client_number" id="" value="">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Name is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-1">
                                                        <label>Client Type</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <select name="client_type" id="">
                                                                <option value="Individual">Individual</option>
                                                                <option value="Corporate">Corporate</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-1">
                                                        <label>Client Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <select name="client_name" id="">
                                                                <option value="residential">Select</option>
                                                                <option value="residential">Residential</option>
                                                                <option value="non-residential">Non-Residential
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-md-6">
                                                    <div class="mb-1">
                                                        <label>File Number</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control"
                                                                name="file_number" id="" value="" min="0"
                                                                max="99">
                                                            <div class="invalid-feedback" style="width: 100%;">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-1">
                                                        <label>Lawyer Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <select name="lawyer_name" id="">
                                                                <option>Kenya</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-1">
                                                        <label>Court Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control"
                                                                name="court_name" value="" id="">
                                                            <div class="invalid-feedback" style="width: 100%;">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                               



                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <br>
                                                            <button type="submit" class="btn btn-primary"
                                                                style="width:45%;">Save</button>
                                                            <button type="button" class="btn btn-primary"
                                                                data-dismiss="modal"
                                                                style="width:45%;">Cancel</button>
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
            </div>








@endsection
