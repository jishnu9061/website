@extends('layouts.hmsmain')
@section('content')
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Creditor Aging Report</b></h4>
    <br>

    <div class="row align-items-start">
        <div class="col">
            <label class="form-label">Date</label>
            <input type="date" class="form-control">
        </div>
        <div class="col">
            <!-- <label class="form-label">Date To</label>
            <input type="date" class="form-control"> -->
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
    </div>



    <div class="table-responsive">
        <table class="table text-center">
            <thead>
                <tr>

                    <th scope="col">Supplier ID</th>
                    <th scope="col">Supplier Name</th>
                    <th scope="col">Total Due</th>
                    <th scope="col">Current</th>
                    <th scope="col">1 - 30 Days</th>
                    <th scope="col">31 - 60 Days</th>
                    <th scope="col">61 - 90 Days</th>
                    <th scope="col">> 90 Days</th>

                </tr>
            </thead>
            <tbody>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

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

@endsection