@extends('layouts.hmsmain')
@section('content')
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Corporate Customers </b></h4>
    <br>



    <div>
        <button type="button" class="btn btn-primary complaint_btn btn " data-toggle="modal"
            data-target="#myModal">Register Customers</button></a>
    </div>




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

                                <!-- <th class="text-center">No</th> -->
                                <th class="text-center">Name</th>
                                <th class="text-center">Address</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Email</th>
                               
                                <th class="text-center">Action</th>

                            </tr>

                        </thead>
                        <tbody>
                            @foreach($Corporates_list as $list)


                            <tr class="text-center" id="data">

                                <td>{{$list->Name}}</td>
                                <td>{{$list->Address}}</td>
                                <td>{{$list->Phone}}</td>
                                <td>{{ $list->Email}}</td>
                               
                                <td scope="row">

                                    <span class="m-2"></span>
                                    <a href="{{url('view_Corporate',$list->Id)}}"><i style="color:black;"
                                            class="fa fa-eye" aria-hidden="true"></i></a>
                                    <span class="m-2"></span>
                                    <a href="{{url('edit_Corporate',$list->Id)}}"><i style="color:black;"
                                            class="fa fa-edit" aria-hidden="true"></i></a>

                                    <span class="m-2"></span>
                                    <a onClick="return myFunction();" href="{{url('drop_Corporate',$list->Id)}}"
                                        style="color:black;"><i class="fas fa-trash-alt"></i></a>
                                    <input type="hidden" value="" id="medicine_id_hidden" class="applicate"
                                        name="supplier_id_hidden">

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
                <div class="rows_count">Showing 11 to 20 of 100</div>
            </div>
            <!-- 		End of Container -->


            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h2 class="text-center"><b>Register Corporate Customers</b></h2>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 order-md-1">
                                        <form method="post" action="{{url('add_Corporate')}}" id="form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username"> Name</label>
                                                        <div class="input-group">

                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="name"
                                                                id="username" value="" placeholder="" required>
                                                            <!-- <input type="text" class="form-control" name="name"
                                                                    id="username" value="" placeholder="Client name"
                                                                    required> -->
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Customer Name is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">GST Office</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="office"
                                                                id="username" value="" placeholder="" required>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Postal Code is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">GST Number</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="gst"
                                                                id="username" value="" placeholder="" required>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Postal Code is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Social Security Number</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="security"
                                                                id="username" value="" placeholder="" required>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Postal Code is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Customer Authority</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="customer"
                                                                id="username" value="" placeholder="" required>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Postal Code is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Phone</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="phone"
                                                                id="username" value="" placeholder="" required>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Postal Code is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">FAX</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="fax"
                                                                id="username" value="" placeholder="" required>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Postal Code is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Email</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="email" class="form-control" name="email"
                                                                id="username" value="" placeholder="" required>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Postal Code is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Web</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="web"
                                                                id="username" value="" placeholder="" required>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Postal Code is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Country</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <select name="country" id="cars">
                                                                <option>---select---</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4 </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">State</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <select name="state" id="state">
                                                                <option>---select---</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4 </option>
                                                            </select>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Postal Code is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">City</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <select name="city" id="city">
                                                                <option>---select---</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4 </option>
                                                            </select>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Postal Code is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Town</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="town"
                                                                id="username" value="" placeholder="" required>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Postal Code is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Post Code</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="post"
                                                                id="username" value="" placeholder="" required>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Postal Code is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Address</label>
                                                        <div class="input-group">
                                                            <textarea class="form-control" id="form7Example7" rows="2"
                                                                name="address"></textarea>
                                                            <div class="invalid-feedback" style="width: 100%;">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                           
                                            <br>
                                            <!-- <h4 style="text-align:center">Contact Persons</h4> -->




                                            <div class="row">
                                                <div class="col-sm">

                                                </div>
                                                <div class="col-sm">

                                                </div>
                                                <div class="col-sm">
                                                    <br>
                                                    <button type="submit" class="btn btn-primary float:right;"
                                                        Style="width:50%;">Save</button>
                                                    <button type="button" class="btn btn-primary float:left"
                                                        Style="width:45%;" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>


                                        </form>
                                    </div>


                                    @endsection