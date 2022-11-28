@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
               
               <h4 id="hdtpa"><b>Real Estate</b></h4>
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
                        <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()"
                            placeholder="Search.." class="form-control">
                    </div>
                    </div>
                


<div class="table-responsive">
<table class="table text-center">
  <thead>
    <tr>
      
      <th scope="col">File No</th>
      <th scope="col">Matter Type</th>
      <th scope="col">Buyer</th>
      <th scope="col">Attorney</th>
      <th scope="col">Property Details</th>
      <th scope="col">Closing Details</th>
      <th scope="col">Closing Statement</th>
      <th scope="col">Listing Realtor</th>
      <th scope="col">Selling Realtor</th>
      <th scope="col">Title Company</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>62G5585W</td>
      <td>Sell</td>
      <td>Patrick</td>
      <td>Dewey Cheatum and Howe</td>
      <td>1522, Los Angles pin:123 456</td>
      <td>Atty Review & Inspection: 26-11-2022 closing Date: 30-11-2022</td>
      <td>Total Payable:$222,120.35</td>
      <td>Michael Simmons</td>
      <td>Joan Ferrata</td>
      <td>Fidelity National</td>

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










@endsection