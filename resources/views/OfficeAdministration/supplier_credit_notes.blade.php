@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Office Administration</a> /
    <a href="#" style="color: #1D1D50;">Supplier Credit Notes</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Supplier Credit Notes</b></h4>
    <br>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> New Credit
        Notes</button></a>


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
                                <th class="text-center">Date</th>
                                <th class="text-center">Doc No.</th>
                                <th class="text-center">Supplier</th>
                                <th class="text-center">Invoice No.</th>
                                <th class="text-center">Amount</th>
                                <th class="text-center">Approval</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>

                            </tr>
                        </thead>
                        <tbody>


                            <tr class="text-center">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td scope="row" class="text-center">
                                    <a href="{{url('view_supplier_credit')}}"> <i style="color:rgb(13, 1, 56);"
                                            class="fa fa-eye"></i> <span class="m-1"></span>
                                        <a href="{{ url('edit_supplier_credit') }}"><i style="color:rgb(13, 1, 56);"
                                                class="fa fa-edit"></i> <span class="m-1"></span>
                                            <a href="{{url('')}}"> <i style="color:rgb(13, 1, 56);"
                                                    class="fas fa-trash-alt"></i>
                                </td>

                            </tr>

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

                <!-- 		End of Container -->





            </div>
        </div>
    </div>




    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="text-centre"><b>Add Credit Notes</b></h2>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" enctype="multipart/form-data" action="{{url('')}}">
                            @csrf
                            <div class="container">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <div class="mb-3">
                                            <label for="inputEmail4">Date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="mb-3">
                                            <label for="inputEmail4">Branch</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Nairobi</option>
                                                <option value="1"></option>
                                                <option value="2"></option>
                                                <option value="3"></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="mb-3">
                                            <label for="inputEmail4">Credit Note No.</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <div class="mb-3">
                                            <label for="inputEmail4">Supplier</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>choose a supplier</option>
                                                <option value="1">supplier 1</option>
                                                <option value="2">supplier 2</option>
                                                <option value="3">supplier 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="mb-3">
                                            <label for="inputEmail4">Attach to Invoice</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>None</option>
                                                <option value="1"></option>
                                                <option value="2"></option>
                                                <option value="3"></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <div class="mb-3">
                                            <label for="inputEmail4">Currency</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>KES</option>
                                                <option value="1"></option>
                                                <option value="2"></option>
                                                <option value="3"></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <div class="mb-3">
                                            <label for="inputEmail4">Exchange Rate </label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <div class="mb-3">
                                            <label for="inputEmail4">Client</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>--- select ---</option>
                                                <option value="1">client 1</option>
                                                <option value="2">client 2</option>
                                                <option value="3">client 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="mb-3">
                                            <label for="inputEmail4">File</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>--- select ---</option>
                                                <option value="1">file 1</option>
                                                <option value="2">file 2</option>
                                                <option value="3">file 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="mb-3">
                                            <label for="inputEmail4">Financial Account</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>--- select ---</option>
                                                <option value="1">Acc 1</option>
                                                <option value="2">Acc 2</option>
                                                <option value="3">Acc 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <div class="mb-3">
                                            <label for="inputEmail4">Partner Drawings Account</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>--- select ---</option>
                                                <option value="1">Acc 1</option>
                                                <option value="2">Acc 2</option>
                                                <option value="3">Acc 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="mb-3">
                                            <label for="inputEmail4">Partner Drawings Item</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>--- select ---</option>
                                                <option value="1">item 1</option>
                                                <option value="2">item 2</option>
                                                <option value="3">item 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="mb-3">
                                            <label for="inputEmail4">Amount</label>
                                            <input type="text" class="form-control">
                                            <div class="form-text">(inclusive of VAT & Excise Duty)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <div class="mb-3">
                                            <label for="inputEmail4">Description</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="mb-3">
                                            <label for="inputEmail4">VAT Tax</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>VAT (@0%)</option>
                                                <option value="1">VAT (@5%)</option>
                                                <option value="2">VAT (@10%)</option>
                                                <option value="3">VAT (@15%)</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <button type="button" class="btn btn-primary">Add Entry</button>


                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-sm">

                                    </div>
                                    <div class="col-sm">
                                        <button type="submit" class="btn btn-primary " Style="width:50%;">Post Credit
                                            Note</button>
                                        <button type="button" class="btn btn-primary " Style="width:45%;"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                    <div class="col-sm">

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
@endsection