@extends('layouts.hmsmain')
@section('content')


{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Monthly Budget planner</b></h4>
    <br>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add File
    </button></a>
    <br>
    <br>
    <a href="">2022</a><span class="m-1"></span><a href="">2021</a><span class="m-1"></span> <a href="">2020</a><span
        class="m-1"></span><a href="">2019</a>


    <br>
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
    </div>



    <div class="table-responsive">
        <table class="table text-center">
            <thead>
                <tr>

                    <th scope="col">*</th>
                    <th scope="col">Month</th>
                    <th scope="col">Payment Stary</th>
                    <th scope="col">Payment End</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Print</th>


                </tr>
            </thead>
            <tbody>

                <tr>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="editfile"><i style="color:rgb(13, 1, 56);" class="fa fa-print">
                    </td>



                    </thead>
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



<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h2 class="text-centre"><b>Add Budget</b></h2>
                <br>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                <div style="text-align: center;">
        <input class="btn btn-primary" type="button" value="View File Balance">
        <input class="btn btn-primary" type="button" value="View File Details">
       
    </div>
    <br>
                    <form>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="username">Client</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <select name="event" id="cars">
                                            <option>---select---</option>
                                            <option>family law</option>
                                            <option>insurance</option>
                                            <option>accident</option>
                                            <option>event </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="username">File</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <select name="event" id="cars">
                                            <option>---select---</option>
                                            <option>family law</option>
                                            <option>insurance</option>
                                            <option>accident</option>
                                            <option>event </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                          
                        </div>
                        <br>
                        <div class="row">
                        <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="username">Financial Account</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <select name="event" id="cars">
                                            <option>---select---</option>
                                            <option>family law</option>
                                            <option>insurance</option>
                                            <option>accident</option>
                                            <option>event </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="username">Payment Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <input type="date" class="form-control" name="user" id="age">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Incorporation is required
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <hr class="style1">
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="username">Currency</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <select name="event" id="cars">
                                            <option>KES</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="username">Exchange Rate</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <input type="text" class="form-control" name="user" id="age">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Incorporation is required
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="mb-1">
                                    <label for="username">Discription</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <textarea rows="4" cols="50" name="paddress" class="form-control"
                                            type="text"></textarea>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Incorporation is required
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <br>
                    

<div class="row">
<div class="col-md-6">
                                <div class="mb-1">
                                    <label for="username">Amount</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <input type="text" class="form-control" name="user" id="age">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Incorporation is required
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
                                    Style="width:50%;">Save</button>
                                <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                                    data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                </div>

                </form>
            </div>











            @endsection