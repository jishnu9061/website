@extends('layouts.hmsmain')
@section('content')
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Creditor List</b></h4>
    <br>

    <div class="row align-items-start">
        <div class="col">
            <label class="form-label">Date From</label>
            <input type="date" class="form-control">
        </div>
        <div class="col">
            <label class="form-label">Date To</label>
            <input type="date" class="form-control">
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

                    <th scope="col">G/L Account</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Total Due</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="{{ url('') }}"><i style="color:rgb(13, 1, 56);" class="fa fa-eye"></i><span
                                class="m-2"></span>
                            <a href="{{ url('') }}"><i style="color:rgb(13, 1, 56);" class="fa fa-edit"></i><span
                                    class="m-2"></span>
                                <a href="{{url('')}}"> <i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i>
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

@endsection