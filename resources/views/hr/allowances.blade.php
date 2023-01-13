@extends('layouts.hmsmain')
@section('content')
<div class="container">
<h4 id="hdtpa"><b>Allowances</b></h4>
<br>
<div class="row">
       <div class="col-md-4">
        <div class="mb-1">
            <label >Title</label>
            <div class="input-group">
                <div class="input-group-prepend"></div>
                <input type="text" class="form-control" name="title" id="title" value="">
                <div class="invalid-feedback" style="width: 100%;">
                Required Field.
                </div>
            </div>
        </div>
    </div>
<div class="col-md-4">
        <div class="mb-1">
            <label>Amount</label>
            <div class="input-group">
                <div class="input-group-prepend"></div>
                <input type="text" class="form-control" name="amount" id="amount" value="">
                <div class="invalid-feedback" style="width: 100%;">
                    Required Field.
                </div>
            </div>
        </div>
     </div>

     <div class="col-md-4">
        <div class="mb-1">

            <br>
            <div class="input-group">
                {{-- <div class="input-group-prepend"></div> --}}
                <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                <div class="invalid-feedback" style="width: 100%;">
                Required Field.
                </div>
            </div>
        </div>
    </div>

       {{-- <div class="col-md-4">
    <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
        </div> --}}
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



 <div class="tab-content" id=" ">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

        <br>
<div class="table-responsive">
    <table class="table table-striped table-class" id="table-id">

        <thead>

            <tr>

                <th class="text-center">Name</th>
                <th class="text-center">Title</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td scope="row" class="text-center"></td>
                <td scope="row" class="text-center"></td>
                <td scope="row" class="text-center"></td>
                <td scope="row" class="text-center">
                    <a href=""><i style="color:rgb(13, 1, 56);"class="fa fa-eye"></i><span class="m-1"></span>
                    <a href=""><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                    {{-- <a href=""> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i> --}}


                </td>
            </tr>


        </tbody>
    </table>
</div>
    <div class='pagination-container'>
        <nav>
            <ul class="pagination">
                <!-- Here the JS Function Will Add the Rows -->
            </ul>
        </nav>
    </div>
    <div class="rows_count">Showing 11 to 20 of 100</div>
    </div>
@endsection
