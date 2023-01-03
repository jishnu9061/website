@extends('layouts.hmsmain')
@section('content')


{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>File Upload</b></h4>
    <br>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add File
    </button></a>

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

                    <th scope="col">Subject</th>
                    <th scope="col">Book/File Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($view_file as $list)

                <tr>

                    <td>{{$list->subject}}</td>
                    <td>{{$list->file_name}}</td>
                    <td>{{$list->discription}}</td>
                    <td>
                        <a href="viewfile"><i style="color:rgb(13, 1, 56);" class="fa fa-eye"></i><span class="m-2"></span>
                        <a href="{{url('editfile',$list->id)}}"><i style="color:rgb(13, 1, 56);" class="fa fa-edit"></i><span class="m-2"></span>
                            <a href="{{url('delete_file',$list->id)}}"><i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i>
                            
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



<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h2 class="text-centre"><b>Add File</b></h2>
                <br>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form action="{{url('add_file')}}" method="post">
                        @csrf

                        <div class="row">

                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="username">Date Of Upload</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <input type="date" class="form-control" name="upload_date" id="age">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Incorporation is required
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="username">Subject</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <select name="subject" id="cars">
                                            <option>---select---</option>
                                            <option>family law</option>
                                            <option>insurance</option>
                                            <option>accident</option>
                                            <option>event </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="username">Book/File Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <input type="text" class="form-control" name="file_name" id="age">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Incorporation is required
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="username">Auther</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <input type="text" class="form-control" name="auther" id="age">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Incorporation is required
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="username">Publisher</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <input type="text" class="form-control" name="publisher" id="age">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Incorporation is required
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="username">Uploaded By</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <input type="text" class="form-control" name="upload_by" id="age">
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
                                        <textarea rows="4" cols="50" name="discription"
                                                                    class="form-control" type="text"></textarea>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Incorporation is required
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <br>
                        <br>



                        <div class="row">

                            <h5 id="hdbtb">Upload </h5>

                        </div>
                        <br>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="username">Upload E-file</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <input type="file" class="form-control" name="e_file" id="age">
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
                                                            <button type="button" class="btn btn-primary float:left"
                                                                Style="width:45%;" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                </div>

                </form>
            </div>











            @endsection