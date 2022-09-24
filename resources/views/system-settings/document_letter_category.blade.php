@extends('layouts.hmsmain')
@section('content')
<html>
   <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <style>
         /* h2
        {
            font-size:large;
            font-weight:bold;
             color:rgb(13, 1, 56); 
             background-color:rgb(177, 127, 62);
             padding:15px;
            } */
            /* .container{
                border:1px solid black;
         margin-left:0px;
         width:auto;
         height:100%;
         width:40%;
         } */

         table{
              
                border:hidden;
                font-size:medium;
                color:black;
            
            }
           th,td,tr{
            border:hidden;
            color:black;

           }
        </style>
    </head>
    <body>
    <!-- <h2 >Add Court</h2><br> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">Document Letter Categories </h2>
    <hr class="mb-4">.
   

<div class="card">
 
  <div class="card-body">
    <div id="table" class="table-editable">
    <span class="table-add float-right mb-3 mr-2"
        ><a href="#!" class="text-primary"
          ><i class="fas fa-plus fa-2x" aria-hidden="true"style=" color:rgb(13, 1, 56);"></i></a
      ></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Code</th>
            <!-- <th class="text-center">Edit</th> -->
            <th class="text-center">Delete</th>
         
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="pt-3-half" contenteditable="true">1</td>
            <td class="pt-3-half"style="text-align:left;" contenteditable="true">Client</td>
            <!-- <td  class="pt-3-half" ><a href="{{url('#')}}">Edit</td> -->
            <td>
              <span class="table-remove"
                ><button type="button" class="btn btn-primary  btn-rounded btn-sm my-0">
                  Remove
                </button></span
              >
            </td>
           
       
          <tr>
            <td class="pt-3-half" contenteditable="true">2</td>
            <td class="pt-3-half"style="text-align:left;"  contenteditable="true">Supplier</td>
            <!-- <td  class="pt-3-half" ><a href="{{url('#')}}">Edit</td> -->
            <td>
              <span class="table-remove"
                ><button type="button" class="btn btn-primary  btn-rounded btn-sm my-0">
                  Remove
                </button></span
              >
            </td>

            <tr>
            <td class="pt-3-half" contenteditable="true">3</td>
            <td class="pt-3-half" style="text-align:left;" contenteditable="true">Staff</td>
            <!-- <td  class="pt-3-half" ><a href="{{url('#')}}">Edit</td> -->
            <td>
              <span class="table-remove"
                ><button type="button" class="btn btn-primary  btn-rounded btn-sm my-0">
                  Remove
                </button></span
              >
            </td>

            <tr>
            <td class="pt-3-half" contenteditable="true">4</td>
            <td class="pt-3-half"style="text-align:left;"  contenteditable="true">Office</td>
            <!-- <td  class="pt-3-half" ><a href="{{url('#')}}">Edit</td> -->
            <td>
              <span class="table-remove"
                ><button type="button" class="btn btn-primary  btn-rounded btn-sm my-0">
                  Remove
                </button></span
              >
            </td>
            <tr>
            <td class="pt-3-half" contenteditable="true">5</td>
            <td class="pt-3-half" style="text-align:left;" contenteditable="true">Customers</td>
            <!-- <td  class="pt-3-half" ><a href="{{url('#')}}">Edit</td> -->
            <td>
              <span class="table-remove"
                ><button type="button" class="btn btn-primary  btn-rounded btn-sm my-0">
                  Remove
                </button></span
              >
            </td>
           
        </tbody>
      </table>
    </div>
  </div>
</div>
<script>
    const $tableID = $('#table'); const $BTN = $('#export-btn'); const $EXPORT = $('#export');
  const newTr = `
  <tr class="hide">
    <td class="pt-3-half" contenteditable="true">Example</td>
    <td class="pt-3-half" contenteditable="true">Example</td>
    <td class="pt-3-half" contenteditable="true">Example</td>
    
   
    <td>
      <span class="table-remove"
        ><button
          type="button"
          class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light"
        >
          Remove
        </button></span
      >
    </td>
  </tr>
  `;
  $('.table-add').on('click', 'i', () => {
    const $clone = $tableID.find('tbody
        tr ').last().clone(true).removeClass('
        hide table - line '); if ($tableID.find('
        tbody tr ').length ===
        0) {
        $('tbody').append(newTr);
    }
    $tableID.find('table').append($clone);
});
$tableID.on('click', '.table-remove', function() {
    $(this).parents('tr').detach();
});
$tableID.on('click', '.table-up', function() {
    const $row = $(this).parents('tr');
    if ($row.index() === 0) {
        return;
    }
    $row.prev().before($row.get(0));
});
$tableID.on('click',
    '.table-down',
    function() {
        const $row = $(this).parents('tr');
        $row.next().after($row.get(0));
    }); // A few jQuery helpers for exporting only jQuery.fn.pop
= [].pop;
jQuery.fn.shift = [].shift;
$BTN.on('click', () => {
    const $rows =
        $tableID.find('tr:not(:hidden)');
    const headers = [];
    const data = []; // Get the headers
    (add special header logic here) $($rows.shift()).find('th:not(:empty)').each(function() {
        headers.push($(this).text().toLowerCase());
    }); // Turn all existing rows into a loopable
    array $rows.each(function() {
        const $td = $(this).find('td');
        const h = {}; // Use the
        headers from earlier to name our hash keys headers.forEach((header, i) => {
            h[header] =
                $td.eq(i).text();
        });
        data.push(h);
    }); // Output the result
    $EXPORT.text(JSON.stringify(data));
});
    </script>
<!-- Editable table -->
    
      

    <!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->
            
</body>
</html>
@endsection