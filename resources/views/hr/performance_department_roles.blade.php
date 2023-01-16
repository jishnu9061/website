@extends('layouts.hmsmain')
@section('content')
{{--sub heading --}}
       <br>
        <div class='container'>
        <h4 id="hdtpa"><b>Departments</b></h4><br>
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
            <table class="table table-striped table-class" id="table-id">
                
                <thead>
                    <tr class="text-center">
                        <th>Department Name</th>
                        <th>View Designation</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach( $departments as $department)
                        <tr class="text-center">
                            <input id="t_id" type="hidden" value="">
                            <td>{{ $department->department_name }}</td>
                            <td>
                            <a href="{{"performance_department_roles",$department->id}}"> <i style="color:rgb(13, 1, 56);"class="fa fa-eye"></i><span class="m-1"></span>
                            <a href=""> <i style="color:rgb(13, 1, 56);"class="fa fa-edit"></i><span class="m-1"></span>
                            </td>
                    @endforeach          
                    </tr>
                   
                <tbody>
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
        <div class="rows_count">Showing 11 to 20 of 91</div>

        <!-- 		End of Container -->
    </div>



  @endsection
      






    


   