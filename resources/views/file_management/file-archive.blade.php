@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{ url('home') }}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">File Management</a> /
    <a href="#" style="color: #1D1D50;">File Archive</a>
</nav>
<br><br>
<style>
.pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}

.pagination {
    margin: 0;
}

.pagination li:hover {
    cursor: pointer;
}

.header_wrap {
    padding: 30px 0;
}

.num_rows {
    width: 20%;
    float: left;
}

.tb_search {
    width: 20%;
    float: right;
}

.pagination-container {
    width: 70%;
    float: left;
}

.rows_count {
    width: 20%;
    float: right;
    text-align: right;
    color: #999;
}
</style>
<div class="container">
    <div>
        <h4 id="hdtpa"><b>File Archive</b></h4>
    </div>
    <div class="row" style="height:50px;">
    <div class="col-sm-4" style="padding-top:5px;">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add Box No</button>
    </div>
    <!--
            <div id="mydatatable_filter" class="dataTables_filter">
                <label><input type="search" class="box" placeholder="search" aria-controls="mydatatable"></label>
            </div> -->
    
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
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-class" id="table-id">
                        <thead>
                            <tr>
                                <!-- <th class="text-center">*</th> -->
                                <th class="text-center">Archive No</th>
                                <th class="text-center">Archive Date</th>
                                <th class="text-center">Client Name</th>
                                <th class="text-center">File Number</th>
                                <!-- <th class="text-center">File Name</th> -->
                                <th class="text-center">File Closed Number</th>
                                <th class="text-center">Date Closed</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($file_progress_list as $list)
                            <tr id="data">
                                <!-- <td scope="row" class="text-center">{{ $list->id }}</td> -->
                                <td scope="row" class="text-center">Box No :<b>{{ $list->number }}</b></td>
                                <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center">{{ $list->client }}</td>
                                <td scope="row" class="text-center">{{ $list->file_name }}</td>
                                <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center">{{ $list->close_date }}</td>
                                <td scope="row" class="text-center">
                                    <div class="btn-group">
                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            style="border-color:none;"> ⋮ </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#" onclick=viewbox(this)
                                                data-id="{{ $list->id }}" data-toggle="modal" data-target="#viewmyModal"
                                                href="{{url('view-list',$list->id)}}">View File
                                            </a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#edit_box_no"  href="#">Edit File
                                            </a>
                                            <a class="dropdown-item" href="{{url('delete-box-no',$list->id)}}">Delete
                                                File </a>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
        <!--		end Pagination -->
    </div>
</div>
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
  
            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form method="post" action="{{ url('add-box-no') }}" enctype="multipart/form-data">
                        @csrf
                        <h4 class=""><b>Add Box No:-</b></h4>
                        <div class="row">
                            <div class="col-md-6" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="box_type"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Box
                                        Type</label>
                                    <select class="form-select" aria-label="Default select example"
                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                        name="box_type" id="" required>
                                        <option>.....select.....</option>
                                        <option>Box Type 1</option>
                                        <option>Box Type 2</option>
                                        <option>Box Type 3</option>
                                        <option>Box Type 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="box_no"
                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Box
                                        No</label>
                                    <input type="text" placeholder=""
                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                        class="form-control" name="box_no" id="" value="" required>
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
                                    Style="width:45%;">Save</button>
                                <button type="button" Style="width:45%;" class="btn btn-primary float:right;"
                                    data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<!-------------------------------------------------------- START EDIT BOX NO -------------------------------------------------------------------->
<div class="modal fade" id="edit_box_no">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
           
            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form method="post" action="{{ url('') }}" enctype="multipart/form-data">
                        @csrf
                        <h4 class=""><b>Edit Box No:-</b></h4>
                        <div class="row">
                            <div class="col-md-6" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="box_type"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Box
                                        Type</label>
                                    <select class="form-select" aria-label="Default select example"
                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                        name="box_type" id="" required>
                                        <option>.....select.....</option>
                                        <option>Box Type 1</option>
                                        <option>Box Type 2</option>
                                        <option>Box Type 3</option>
                                        <option>Box Type 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="box_no"
                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Box
                                        No</label>
                                    <input type="text" placeholder=""
                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                        class="form-control" name="box_no" id="" value="" required>
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
                                    Style="width:45%;">Save</button>
                                <button type="button" Style="width:45%;" class="btn btn-primary float:right;"
                                    data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-------------------------------------------------------- END EDIT BOX NO ---------------------------------------------------------------------->
<!------------Modal-View---------------->

<div class="modal fade" id="viewmyModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h2 class="text-center"><b>View Box No</b></h2>

            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form method="post" action="{{ url('view-box-no') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" id="id" value="id">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="username">Archive Number</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <input type="text" class="form-control" name="archive_number"
                                            id="archive_number">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Incorporation is required
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="username">Archive Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <input type="date" class="form-control" name="archive_date" id="archive_date">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="username">Client Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        </div>
                                        <input type="text" class="form-control" name="client_name" id="client_name">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Incorporation is required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="username">File Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        </div>
                                        <input type="text" class="form-control" name="file_number" id="file_number">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="username">File Closed Number</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <input type="text" class="form-control" name="file_closednumber"
                                            id="file_closednumber">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Incorporation is required
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="username">Date Closed</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <input type="date" class="form-control" name="date_closed" id="date_closed">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
function viewbox(param) { // view archive details
    var uniqueid = $(param).data('id');
    console.log(uniqueid);
    $.ajax({
        type: "GET",
        url: 'view_box_no/' + uniqueid,
        success: function(response) {
            $('#archive_number').val(response.result.archive_number);
            $('#archive_date').val(response.result.archive_date);
            $('#client_name').val(response.result.client_name);
            $('#file_number').val(response.result.file_number);
            $('#file_closednumber').val(response.result.file_closednumber);
            $('#date_closed').val(response.result.date_closed);

        }
    });
}
</script>

@endsection