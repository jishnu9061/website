@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Office Administration</a> /
    <a href="#" style="color: #1D1D50;">Supplier Monthly Schedule</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">

<h4 id="hdtpa"><b>Supplier Monthly Schedule</b></h4>
<br>




    <div class="table-responsive">
        <table class="table text-center">
            <thead>
                <tr>

                    <th scope="col">Invoice No</th>
                    <th scope="col">Invoice Date</th>
                    <th scope="col">Description</th>
                    <th scope="col">Exp Account</th>
                    <th scope="col">Original Currency</th>
                    <th scope="col">Amount (KES)</th>
                    <th scope="col">WHT Amt (KES)</th>
                    <th scope="col">WHV Amt (KES)</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <td colspan="10"><b>ABC CONSULT</b></td>
                </tr>
                <tr>
                    <td>0285</td>
                    <td>22-12-20222</td>
                    <td> payment for business cards, vouchers, brandings, staff id, door labels.</td>
                    <td>Caroline Ratemo</td>
                    <td>1.00 (KES)</td>
                    <td>29,850.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td><span class="badge bg-success">Approved</span></td>
                    <td><a href="{{ url('view_supplier_invoice_Details') }}"><i style="color:rgb(13, 1, 56);"
                                class="fa fa-eye"></i>
                            <a data-toggle="modal" data-target="#myModal"><i style="  color:rgb(13, 1, 56);"
                                    class="fas fa-comment" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td>0678</td>
                    <td>21-12-20222</td>
                    <td> printing 300pcs of business cards for client.</td>
                    <td> Business Development & Marketing</td>
                    <td>1.00 (KES)</td>
                    <td>2,100.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td><span class="badge bg-success">Approved</span></td>
                    <td><a href="{{ url('view_supplier_invoice_Details') }}"><i style="color:rgb(13, 1, 56);"
                                class="fa fa-eye"></i>
                                <a data-toggle="modal" data-target="#myModal"><i style="  color:rgb(13, 1, 56);"
                                    class="fas fa-comment" aria-hidden="true"></i></td>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">Total ABC CONSULT</td>
                    <td>31,950.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                </tr>

                <tr>
                    <td colspan="10"><b>ABERDARE DOWNSTREAM MINERAL WATER</b></td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>20-12-20222</td>
                    <td> payment for 20L 5 bottles of water for office.</td>
                    <td>Caroline Ratemo</td>
                    <td>1.00 (KES)</td>
                    <td>1,900.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td><span class="badge bg-success">Approved</span></td>
                    <td><a href="{{ url('view_supplier_invoice_Details') }}"><i style="color:rgb(13, 1, 56);"
                                class="fa fa-eye"></i>
                                <a data-toggle="modal" data-target="#myModal"><i style="  color:rgb(13, 1, 56);"
                                    class="fas fa-comment" aria-hidden="true"></i></td>
                    </td>
                </tr>
                <tr>
                    <td>026</td>
                    <td>19-12-20222</td>
                    <td> Amount paid for 5 bottles 20L of office drinking water.</td>
                    <td> Business Development & Marketing</td>
                    <td>1.00 (KES)</td>
                    <td>1,900.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td><span class="badge bg-success">Approved</span></td>
                    <td><a href="{{ url('view_supplier_invoice_Details') }}"><i style="color:rgb(13, 1, 56);"
                                class="fa fa-eye"></i>
                                <a data-toggle="modal" data-target="#myModal"><i style="  color:rgb(13, 1, 56);"
                                    class="fas fa-comment" aria-hidden="true"></i></td>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">Total ABERDARE DOWNSTREAM MINERAL WATER</td>
                    <td>3,800.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                </tr>

                <tr>
                    <td colspan="5"><b>TOTAL</b></td>
                    <td>35,750.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                </tr>


            </tbody>
        </table>
    </div>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl" style="width: 35%">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header" style="padding:0rem 0rem;">
                    <div style="padding:1rem 1rem;">
                        <h4 class="text-centre"><b>Edit Supplier Credit Note</b></h4>
                    </div>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <div class="" style="width: 97%">
                            <div class=""><span style="color: red">*</span>
                                <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Client No is required.
                                </div>
                            </div>
                        </div>
                        <div class="" style="width: 97%">
                            <div class=""><span style="color: red">*</span>
                                <label for="inputEmail4">Send To</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>select</option>
                                    <option value="1">supplier 1</option>
                                    <option value="2">supplier 2</option>
                                    
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Client No is required.
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="" style="width: 50%;">
                            </div>
                            <div lass="" style="width: 0%"></div>
                            <div class="col-sm" style="padding-right: 0px;width: 50%">
                                <br>
                                <button type="submit" onclick="return Validate()"
                                    class="btn btn-primary float:right;" Style="width:45%;">Submit</button>
                                <button type="button" class="btn btn-primary float:left"
                                    Style="width:45%;"data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection