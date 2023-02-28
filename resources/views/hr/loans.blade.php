@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">HR</a> /
    <a href="#" style="color: #1D1D50;">Loans</a>
</nav>
<br><br>
<div class="container">
    <div style="height:20px;">
    </div>
    @if(Session::has('nouser'))
    <div class="alert alert-dark" role="alert">
        {{ Session::get('nouser')}}
    </div>
    @endif
    @if(Session::has('loanadded'))
    <div class="alert alert-dark" role="alert">
        {{ Session::get('loanadded')}}
    </div>
    @endif


    {{-- heading --}}
    <div class="container">
        <h4 id="hdtpa"><b>Loans</b></h4>
        <br>


        {{-- <form method="post" action=""> --}}
        @csrf
        <div class="row">
            <div class="col-md-3">
                <div class="form-group mb-3">
                    <label>Employees Id</label>
                    <input type="text" class="form-control" name="id" placeholder="" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group mb-3">
                    <label>Loan Amount</label>
                    <input type="text" class="form-control" name="amount" placeholder="" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group mb-3">
                    <label>Loan Term</label>
                    <input type="text" class="form-control" name="term" placeholder="" required>
                </div>
            </div>
            <div class="col-md-3" style="margin-top:3%">
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
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


            {{-- </form> --}}
            <div class="table-responsive">
                <table class="table table-striped table-class" id="table-id">
                    <thead>
                        <tr class="text-center">
                            <th>
                                Employee Id
                            </th>
                            <th>
                                Loan Amount
                            </th>
                            <th>
                                Amount Paid
                            </th>
                            <th>
                                Balance Left
                            </th>
                            <th>
                                Loan Term
                            </th>
                            <th>
                                Deduction
                            </th>

                            <th>
                                Status
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach($loans as $loan)
                        <tr class="text-center">
                            <td>{{$loan->uniqueid}}</td>
                            <td>{{$loan->totalamount}}</td>
                            <td>{{$loan->amountpaid}}</td>
                            <td>{{$loan->balanceleft}}</td>
                            <td>{{$loan->duration}}</td>
                            <td>{{$loan->deduct}}</td>

                            <td>{{$loan->status}}</td>
                            <td scope="row" class="text-center">
                            {{-- <form method="" action="">
                                @csrf
                                <input type="hidden" name="delete">
                                <td scope="row" class="text-center">
                                    <div class="btn-group">
                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            style="border-color:none;"> ⋮ </a>
                                            <a class="dropdown-item"
                                            {{-- <a onclick="return confirm('Are you sure?');" class="dropdown-item"
                                                href="{{url('loandelete'.$loan->id)}}">Delete Loan Details</a> --}}

                                    {{-- </div>
                                </td> --}}
                            {{-- </form> --}}
                            <div class="btn-group">
                                <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" style="border-color:none;"> ⋮ </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item"
                                         href="#"onclick=deleteloan(this) data-id="{{$loan->id}}"data-toggle="modal"
                                            data-target="#delete_loan">Delete Loan</a>
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
            {{ Session::forget('nouser')}}
            {{ Session::forget('loanadded')}}
        </div>
        <div class="modal fade" id="delete_loan" style=""> <!-- delete loan -->
            <div class="modal-dialog modal-lg" style="width:30%;">
                <div class="modal-content">
                    <!---- Modal Header -->
                    <form method="post"  id="delete_loan" action="{{url('loandelete'.$loan->id)}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="id" value="id">
                        <div class="modal-header" style="padding:0rem 0rem;">
                            <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Delete <span id="delete_loan"></span></b></h4></div>
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
        @endsection
