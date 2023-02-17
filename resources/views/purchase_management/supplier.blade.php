@extends('layouts.hmsmain')
@section('content')


<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Procurement</a> /
    <a href="#" style="color: #1D1D50;">Supplier</a>
</nav>
<br><br>



{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Vendor</b></h4>
    <br>

    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add
        Vendor</button> --}}
        <button type="button" class="btn btn-primary" data-toggle="modal"
        data-target="#myModal"style="margin-left:10px;    --clr: #1D1D50;
    --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add Vendor</button>

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



        <!-- table -->

        <div class="table-responsive">
            <table class="table text-center" id="table-id">
                <thead>
                    <tr>
                        <th scope="col">Vendor Name</th>
                        <th scope="col">Product Supply1</th>
                        <th scope="col">Payment Details</th>
                        <th scope="col">Action</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($suppliers as $list)
                    <tr>
                        <td>{{$list->supplier_name}}</td>
                        <td></td>
                        <td> <a href="{{url('ledger_details',$list->supplier_name)}}"> <button type="button" class="btn btn-primary">Show
                                    Payment</button></a></td>
                        {{-- <td><a href="{{url('view_supplier',$list->id)}}"> <i style="color:rgb(13, 1, 56);"
                                    class="fa fa-eye"></i><span class="m-2"></span>
                                <a href="{{url('edit_supplier',$list->id)}}"><i style="color:rgb(13, 1, 56);"
                                        class="fa fa-edit"></i><span class="m-2"></span>
                                    <a href="{{url('delete_supplier',$list->id)}}"><i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i>
                        </td> --}}
                        <td scope="row"class="text-center">
                            <div class="btn-group">
                                <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" style="border-color:none;"> ⋮ </a>

                           <div class="dropdown-menu">
                            <a class="dropdown-item"
                                href="{{url('view_supplier',$list->id)}}">View Supplier</a>
                            <a class="dropdown-item"
                                href="{{url('edit_supplier',$list->id)}}">Edit Supplier</a>
                            <a class="dropdown-item"
                                href="{{url('delete_supplier',$list->id)}}">Delete Supplier</a>
                        </div>
                            </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
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
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="text-center"><b>Add Vendor </b></h2>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="{{url('store_supplier')}}" enctype="multipart/form-data">

                            @csrf
                            <input type="hidden" name="company_id" value="{{Auth::user()->company_id}}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="username">Vendor Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="name" id="username" required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Number is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="username">TAX ID</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="tax_id" id="username"
                                                required>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="username">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="email" class="form-control" name="email" id="username"
                                                required>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="username">Contact No</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="contact" id="username"
                                                required>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-1">
                                        <label for="username">Address</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" rows="2" name="Address"></textarea>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">City</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <select class="form-select" aria-label="Default select example" name="City">
                                                <option selected>-- select --</option>
                                                <option value="Nairobi">Nairobi</option>
                                                <option value="Kisumu">Kisumu</option>
                                                <option value="Mombasa">Mombasa</option>
                                            </select>
                                            <!-- <input type="text" class="form-control" name="" id="username" required> -->
                                            <br>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Provinces</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <select class="form-select" aria-label="Default select example"
                                                name="Provinces">
                                                <option selected>-- select --</option>
                                                <option value="Nairobi">Nairobi</option>
                                                <option value="Central">Central</option>
                                                <option value="Coast">Coast</option>
                                                <option value="Eastern">Eastern</option>
                                                <option value="North Eastern">North Eastern</option>
                                                <option value="Nyanza">Nyanza</option>
                                                <option value="Rift Valley">Rift Valley</option>
                                                <option value="Western">Western</option>
                                            </select>
                                            <!-- <input type="text" class="form-control" name="" id="username" required> -->
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">PIN code</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="pincode" id="username"
                                                required>
                                            <br>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-1">

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-1">

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
                                    <button type="button" class="btn btn-primary float:right;"
                                        data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>





    @endsection
