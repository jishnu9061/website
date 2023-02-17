@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Office Administration</a> /
    <a href="#" style="color: #1D1D50;">Supplier Invoice</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">

<h4 id="hdtpa"><b>Supplier Invoices</b></h4>
<br>


    <div class="row" style="height:50px;">
        <div class="col-sm-4" style="padding-top:5px;">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Capture
                Invoice</button>
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
                                    <th class="text-center">Invoice No.</th>
                                    <th class="text-center">Invoice Date</th>
                                    <th class="text-center">Exp Account</th>
                                    <th class="text-center">Total Amount</th>
                                    <th class="text-center">Amount Paid</th>
                                    <th class="text-center">Approved By</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach($view_list as $list)

                                <tr class="text-center">

                                    <td>{{$list->id}}</td>
                                    <td>{{$list->invoice_date}}</td>
                                    <td>{{$list->account}}</td>
                                    <td>{{$list->amount}}</td>
                                    <td></td>
                                    <td>{{$list->approver}}</td>
                                    <td><span class="badge bg-success">Approved</span></td>
                                    <td scope="row" class="text-center">
                                        <div class="btn-group">
                                            <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" style="border-color:none;"> ⋮ </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{url('view_supplier_invoice')}}">View
                                                    Supplier Invoice</a>
                                                <a class="dropdown-item" href="{{url('edit_supplier_invoice')}}">Edit
                                                    Supplier Invoice</a>
                                                <a class="dropdown-item" href="#">Delete Supplier Invoice</a>

                                            </div>
                                        </div>
                                    </td>

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
                        <h2 class="text-centre"><b>Capture Multiple Vouchers</b></h2>

                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container">
                            <form method="post" enctype="multipart/form-data" action="{{url('add_supplier_invoice')}}">
                                @csrf
                                <div class="container">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="mb-3">
                                                <label for="inputEmail4">Invoice Date</label>
                                                <input type="date" name="invoice_date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="mb-3">
                                                <label for="inputEmail4">Invoice Number</label>
                                                <input type="text" name="invoice_number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="mb-3">
                                                <label for="inputEmail4">Supplier</label>
                                                <select class="form-select" name="supplier"
                                                    aria-label="Default select example">
                                                    <option selected>select an option</option>
                                                    <option value="1">supplier 1</option>
                                                    <option value="2">supplier 2</option>
                                                    <option value="3">supplier 3</option>
                                                </select>
                                                <button type="button" class="btn btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="mb-3">
                                                <label for="inputEmail4">Branch</label>
                                                <select class="form-select" name="branch"
                                                    aria-label="Default select example">
                                                    <option selected>Nairobi</option>
                                                    <option value="1"></option>
                                                    <option value="2"></option>
                                                    <option value="3"></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="mb-3">
                                                <label for="inputEmail4">L.P.O Number</label>
                                                <select class="form-select" name="ipo_number"
                                                    aria-label="Default select example">
                                                    <option selected>--select--</option>
                                                    <option value="1"></option>
                                                    <option value="2"></option>
                                                    <option value="3"></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="mb-3">
                                                <label for="inputEmail4">Due Date for Payment</label>
                                                <input type="date" name="due_date" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="mb-3">
                                                <label for="inputEmail4">Approver</label>
                                                <select class="form-select" name="approver"
                                                    aria-label="Default select example">
                                                    <option selected>-- select approver --</option>
                                                    <option value="1">approver 1</option>
                                                    <option value="2">approver 2</option>
                                                    <option value="3">approver 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="mb-3">

                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="mb-3">

                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="mb-3">
                                                <label for="inputEmail4">Currency</label>
                                                <select class="form-select" name="currency"
                                                    aria-label="Default select example">
                                                    <option selected>KES</option>
                                                    <option value="1"></option>
                                                    <option value="2"></option>
                                                    <option value="3"></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="mb-3">
                                                <label for="inputEmail4">Exchange Rate</label>
                                                <input type="text" name="exchange_rate" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="mb-3">
                                                <label for="inputEmail4">Withholding Tax</label>
                                                <select class="form-select" name="holding_tax"
                                                    aria-label="Default select example">
                                                    <option selected>WHT(0%)</option>
                                                    <option value="1">WHT(5%)</option>
                                                    <option value="2">WHT(10%)</option>
                                                    <option value="3">WHT(15%)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="mb-3">
                                                <label for="inputEmail4">Withholding VAT</label>
                                                <input type="text" name="holding_vat" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="mb-3">
                                                <label for="inputEmail4">Voucher Date</label>
                                                <input type="date" name="voucher_date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="mb-3">
                                                <label for="inputEmail4">Voucher Number</label>
                                                <input type="text" name="voucher_number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="mb-3">
                                                <label for="inputEmail4">Client</label>
                                                <select class="form-select" name="client"
                                                    aria-label="Default select example">
                                                    <option selected>choose a client</option>
                                                    <option value="1">client 1</option>
                                                    <option value="2">client 2</option>
                                                    <option value="3">client 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="mb-3">
                                                <label for="inputEmail4">File</label>
                                                <select class="form-select" name="file"
                                                    aria-label="Default select example">
                                                    <option selected>choose a file</option>
                                                    <option value="1">file 1</option>
                                                    <option value="2">file 2</option>
                                                    <option value="3">file 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="mb-3">
                                                <label for="inputEmail4">Financial Account</label>
                                                <select class="form-select" name="account"
                                                    aria-label="Default select example">
                                                    <option selected>choose a financial account</option>
                                                    <option value="1">Acc 1</option>
                                                    <option value="2">Acc 2</option>
                                                    <option value="3">Acc 3</option>
                                                </select>
                                                <button type="button" class="btn btn-primary"
                                                    style="margin-top:8px;">Add</button>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <div class="mb-3">
                                                <label for="inputEmail4">Partner Drawings Item</label>
                                                <select class="form-select" name="drawings"
                                                    aria-label="Default select example">
                                                    <option selected>--- select ---</option>
                                                    <option value="1">item 1</option>
                                                    <option value="2">item 2</option>
                                                    <option value="3">item 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="mb-3">
                                                <label for="inputEmail4">Partner Drawings Item</label>
                                                <select class="form-select" name="drawings_item"
                                                    aria-label="Default select example">
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
                                                <input type="text" name="amount" class="form-control">
                                                <div class="form-text">(inclusive of VAT & Excise Duty)</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="mb-3">
                                                <label for="inputEmail4">VAT Tax</label>
                                                <select class="form-select" name="vat_tax"
                                                    aria-label="Default select example">
                                                    <option selected>VAT (@0%)</option>
                                                    <option value="1">VAT (@5%)</option>
                                                    <option value="2">VAT (@10%)</option>
                                                    <option value="3">VAT (@15%)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <div class="mb-3">
                                                <label for="inputEmail4">Description</label>
                                                <textarea class="form-control" name="description" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="mb-3">

                                            </div>
                                        </div>

                                    </div>
                                    <button type="button" class="btn btn-primary">Add Voucher</button>
                                </div>



                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-sm">

                                    </div>
                                    <div class="col-sm">
                                        <button type="submit" class="btn btn-primary " Style="width:50%;">Post
                                            Bill</button>
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

    @endsection