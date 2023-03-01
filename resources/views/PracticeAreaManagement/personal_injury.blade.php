@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="#" style="color: #1D1D50;">Personal Injury</a>
</nav>
<br><br>
<html>

<head>
    <style>


    </style>

</head>

<body>
    <div class="container">

        <div>
            <div>

                {{-- heading --}}
                <h4 id="hdtpa"><b>Personal Injury</b></h4>
                <br>
            </div>

        </div>
        <!--filter-->



        <!--filter end-->
        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">New
                  Details</button> --}}
                  <button type="button" class="btn btn-primary" data-toggle="modal"
                  data-target="#myModal"style="margin-left:10px;    --clr: #1D1D50;
              --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">New
              Details</button>
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


            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <div class="table-responsive">
                        <table class="table table-striped table-class" id="table-id">

                            <thead>
                                <tr>

                                    <th class="text-center">File No</th>
                                    <th class="text-center">Client Name</th>
                                    <th class="text-center">Matter Type</th>
                                    <th class="text-center">Other Party</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Matter Stage</th>
                                    <th class="text-center">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach($personalinjury as $list)

                                <tr id="data">

                                    <td class="text-center">{{$list->id}}</td>
                                    <td class="text-center"></td>
                                    <td class="text-center">{{$list->matter_type}}</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    {{-- <td class="text-center"><a href="{{url('view_injury',$list->id)}}"><i style="color:black;" class="fa fa-eye"
                                        aria-hidden="true"></i>
                                    <a href="{{url('edit_injury',$list->id)}}"><i style="color:black;" class="fa fa-edit"
                                            aria-hidden="true"></i>
                                        <a onClick="return myFunction();" href="{{url('delete_injury',$list->id)}}" style="color:black;"><i
                                                class="fas fa-trash-alt"></i></a></td> --}}
                                                <td scope="row"class="text-center">
                                                    <div class="btn-group">
                                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" style="border-color:none;"> ⋮ </a>

                                                   <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{url('view_injury',$list->id)}}">View Injury</a>
                                                    <a class="dropdown-item"
                                                        href="{{url('edit_injury',$list->id)}}">Edit Injury</a>
                                                    <a class="dropdown-item"
                                                        href="{{url('delete_injury',$list->id)}}">Delete Injury</a>
                                                </div>
                                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>

                    </div>

                    {{-- <!--		Start Pagination -->
                    <div class='pagination-container'>
                        <nav>
                            <ul class="pagination">
                                <!--	Here the JS Function Will Add the Rows -->
                            </ul>
                        </nav>
                    </div>
                    <div class="rows_count">Showing 11 to 20 of 100</div>


                    <!-- 		End of Container --> --}}
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
                </div>
                    <!-- 		End of Container -->

                    {{-- <!-- The Modal --> Create New matter --}}
   <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header" style="padding:0rem 0rem;">
                <div style="padding:1rem 1rem;">
                    <h4 class="text-centre"><b>Matter Details</b></h4>
                </div>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">

                    <form method="post" action="{{ url('add_injury') }}" enctype="multipart/form-data" >
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="" style="width: 50%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="matter_info"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Matter Info:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">

                                                </div>
                                                <input type="text" class="form-control" name="matter_info" id="age">
                                                <!-- <select name="box_type" id="cars">
                                                <option>select</option>
                                                                            <option>Box Type 1</option>
                                                                            <option>Box Type 2</option>
                                                                            <option>Box Type 3</option>
                                                                            <option>Box Type 4</option>

                                                </select> -->

                                            </div>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            File No is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="width: 50%">
                                    <div class=""><span style="color: red">*</span>
                                    <label for="matter_type"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Matter Type:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="matter_type" id="age">
                                            <datalist id="cityname" style="width:100%;" >
                                                                            <option value="Book"></option>
                                                                            <option value="Pen"></option>
                                                                            <option value="Ink"></option>
                                                                        </datalist>
                                            <!-- <select name="box_type" id="cars">
                                            <option>select</option>
                                                                        <option>Box Type 1</option>
                                                                        <option>Box Type 2</option>
                                                                        <option>Box Type 3</option>
                                                                        <option>Box Type 4</option>

                                            </select> -->
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Incorporation is required
                                            </div>
                                        </div>
                                        </div>
                                </div>
                            </div>
                                <h4 class="text-centre"><b>Plaintiff</b></h4>
                            <div class="row">
                                <div class="" style="width: 50%">
                                    <div class=""><span style="color: red">*</span>
                                    <label for="incident_details"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Incident Details:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="incident" id="age">
                                            <!-- <select name="box_type" id="cars">
                                                                        <option>select</option>
                                                                        <option>Box Type 1</option>
                                                                        <option>Box Type 2</option>
                                                                        <option>Box Type 3</option>
                                                                        <option>Box Type 4</option>

                                            </select> -->

                                        </div>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Client No is required.
                                    </div>
                                    </div>
                                </div>

                                <div class="" style="width: 50%">
                                     <div class=""><span style="color: red">*</span>
                                        <label for="damage_details"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Damage Details:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">

                                                </div>
                                                <input type="text" class="form-control" name="damage" id="age">
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="" style="width: 50%">
                                    <div class=""><span style="color: red">*</span>
                                    <label for="health_insurer"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Health Insurer:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="insurer" id="age">
                                            <!-- <select name="box_type" id="cars">
                                            <option>select</option>
                                                                        <option>Box Type 1</option>
                                                                        <option>Box Type 2</option>
                                                                        <option>Box Type 3</option>
                                                                        <option>Box Type 4</option>

                                            </select> -->
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Incorporation is required
                                            </div>
                                        </div>

                                </div>
                                </div>

                                <div class="" style="width: 50%">
                                    <div class=""><span style="color: red">*</span>
                                    <label for="policy_details"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Insurance Policy:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="policy_detail" id="age">
                                            <!-- <select name="box_type" id="cars">
                                            <option>select</option>
                                                                        <option>Box Type 1</option>
                                                                        <option>Box Type 2</option>
                                                                        <option>Box Type 3</option>
                                                                        <option>Box Type 4</option>

                                            </select> -->
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Incorporation is required
                                            </div>
                                        </div>
                                    <div class="invalid-feedback" style="width: 100%;">
                                    </div>
                                </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="" style="width: 100%">
                                    <div class="marriage_details">
                                        <label for="defendant"
                                            style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Defendant:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">

                                                </div>
                                                <input type="text" class="form-control" name="defendent" id="age">
                                                <!-- <select name="box_type" id="cars">
                                                <option>select</option>
                                                                            <option>Box Type 1</option>
                                                                            <option>Box Type 2</option>
                                                                            <option>Box Type 3</option>
                                                                            <option>Box Type 4</option>

                                                </select> -->
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    Incorporation is required
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="" style="width: 50%;">
                        </div>
                        <div class="" style="width: 0%"></div>
                        <div class="col-sm" style="padding-right: 0px;width: 50%">
                            <br>
                            <button type="submit" onclick="return Validate()" class="btn btn-primary float:right;"
                                Style="width:45%;" value="submit">Save</button>
                            <button type="button" class="btn btn-primary float:left"
                                Style="width:45%;"data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
                    </form>
            </div>
            <br>
        </div>
    </div>
</div>





            <!-- Delete  confirmation Message -->

            <!-- End delete confirmation message -->
        </div>



        <!--filter-->
        <script>
        function myFunction() {
            if (!confirm("Are you sure to delete this"))
                event.preventDefault();
        }
        </script>
        <script>
        $(function() {
            $("#new-item").dataTable();
        })
        </script>

        {{-- Search booking script --}}
        <script>
        $(document).ready(function() {
            $('.searchingBook').select2();
        });
        </script>
        {{-- search booking script end --}}
        <!-- Delete  confirmation Message -->
        <script>
        function myFunction() {
            if (!confirm("Are you sure to delete this"))
                event.preventDefault();
        }
        </script>
        <!-- End delete confirmation message -->

        <script src="{{ url('assets/js') }}/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js">
        </script>
        <script type="text/javascript" charset="utf8"
            src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js">
        </script>

        {{-- Supplier Edit start --}}

        <script>
        $(document).on('click', '#edit_medicine_details', function() {

            var medicine_id_hidden = $(this).closest('#data').find('#medicine_id_hidden')
                .val();
            var medicine_name = $(this).closest('#data').find('#medicine_name_1').val();
            var medicine_brand_name = $(this).closest('#data').find('#medicine_brand_name')
                .val();
            var medicine_group = $(this).closest('#data').find('#medicine_group').val();
            var medicicine_category_name = $(this).closest('#data').find(
                '#medicine_category_name1').val();
            var medicine_generic_name = $(this).closest('#data').find(
                '#medicine_generic_name').val();
            var medicine_manufactuure_name = $(this).closest('#data').find(
                '#medicine_manufactuure_name').val();
            var medicine_supplier_name = $(this).closest('#data').find(
                '#medicine_supplier_name').val();
            var medicine_minimum_level = $(this).closest('#data').find(
                '#medicine_minimum_level').val();
            var medicine_reorder_level = $(this).closest('#data').find(
                '#medicine_reorder_level').val();
            var medicine_unit_packing = $(this).closest('#data').find(
                '#medicine_unit_packing').val();
            var medicine_composition = $(this).closest('#data').find(
                '#medicine_composition').val();
            var medicine_notes = $(this).closest('#data').find('#medicine_notes').val();
            var medicine_images = $(this).closest('#data').find('#medicine_images').val();



            $("#edit_id").val(medicine_id_hidden);
            $("#edit_medicine_name").val(medicine_name);
            $("#edit_brand_name").val(medicine_brand_name);
            $("#edit_medicine_group").val(medicine_group);
            $("#edit_category_name").val(medicine_category_name);
            $("#edit_generic_name").val(medicicine_genric_name);
            $("#edit_manufacture_name").val(medicine_manufactuure_name);
            $("#edit_supplier_name").val(medicine_supplier_name);
            $("#edit_minimum_level").val(medicine_minimum_level);
            $("#edit_reorder").val(medicine_reorder_level);
            $("#edit_minimum_level").val(medicine_minimum_level);
            $("#edit_unit_packing").val(medicine_unit_packing);
            $("#edit_medicine_details1").val(medicine_composition);
            $("#edit_medicine_note").val(medicine_notes);
            $("#edit_image").val(medicine_images);
        });
        </script>
        {{-- Supplier Edit End --}}
        @endsection
