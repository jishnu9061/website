@extends('layouts.hmsmain')
@section('content')

<div class="container">
{{-- heading --}}
             <h4 id="hdtpa"><b>Stock List Report</b></h4>

<br>
<div class="header_wrap">
    <div class="num_rows">
        <div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
         <select class  ="form-control" aria-label="Page navigation example" name="state" id="maxRows">

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
      <!-- search box -->
      <div class="tb_search">
<input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
      </div>
</div>


             <div class="table-responsive">
        <table class="table table-striped table-class" id="table-id">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Item Name</th>
          <th colspan="2" class="table-active">Opening Stock</th>
          <th colspan="2" class="table-active">Purchase</th>
          <th colspan="2" class="table-active">Balance</th>
          <th colspan="2" class="table-active">Consumption</th>
          <th colspan="2" class="table-active">Closing Stock</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <td colspan="2" class="table-active"></td>
          <td>Quantity</td>
          <td>Amount</td>
          <td>Quantity</td>
          <td>Amount</td>
          <td>Quantity</td>
          <td>Amount</td>
          <td>Quantity</td>
          <td>Amount</td>
          <td>Quantity</td>
          <td>Amount</td>
        </tr>
        <td colspan="2" class="table-active">Total</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
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