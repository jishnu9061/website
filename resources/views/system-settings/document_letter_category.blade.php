@extends('layouts.hmsmain')
@section('content')
<html>
 <div class="container">
   <head>

    </head>
    <body>
    {{-- heading --}}
<h4 id="hdtpa"><b>Document Letter Categories</b></h4>
<br><br>
   
   

<div class="card">
 
  <div class="card-body">
    <div id="table" class="table-editable">
    <span class="table-add float-right mb-3 mr-2"
        ><a href="#!" class="text-primary"
          ><i class="fas fa-plus fa-2x" aria-hidden="true"style=" color:rgb(13, 1, 56);"></i></a
      ></span>
      <table class="table table-bordered" id="new-item">
        <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Code</th>
            <!-- <th class="text-center">Edit</th> -->
            <th class="text-center">Action</th>
         
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="pt-3-half" contenteditable="true">1</td>
            <td class="pt-3-half"style="text-align:left;" contenteditable="true">Client</td>
            <!-- <td  class="pt-3-half" ><a href="{{url('#')}}">Edit</td> -->
            <td  scope="row"class="text-center">
                        <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a  href="{{url('#')}}" onClick="return myFunction();"  style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a>
                    </td>
           
       
          <tr>
            <td class="pt-3-half" contenteditable="true">2</td>
            <td class="pt-3-half"style="text-align:left;"  contenteditable="true">Supplier</td>
            <!-- <td  class="pt-3-half" ><a href="{{url('#')}}">Edit</td> -->
            <td  scope="row"class="text-center">
                        <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a  href="{{url('#')}}" onClick="return myFunction();"  style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a>
                    </td>
            <tr>
            <td class="pt-3-half" contenteditable="true">3</td>
            <td class="pt-3-half" style="text-align:left;" contenteditable="true">Staff</td>
            <!-- <td  class="pt-3-half" ><a href="{{url('#')}}">Edit</td> -->
            <td  scope="row"class="text-center">
                        <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a  href="{{url('#')}}" onClick="return myFunction();"  style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a>
                    </td>

            <tr>
            <td class="pt-3-half" contenteditable="true">4</td>
            <td class="pt-3-half"style="text-align:left;"  contenteditable="true">Office</td>
            <!-- <td  class="pt-3-half" ><a href="{{url('#')}}">Edit</td> -->
            <td  scope="row"class="text-center">
                        <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a  href="{{url('#')}}" onClick="return myFunction();"  style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a>
                    </td>
            <tr>
            <td class="pt-3-half" contenteditable="true">5</td>
            <td class="pt-3-half" style="text-align:left;" contenteditable="true">Customers</td>
            <!-- <td  class="pt-3-half" ><a href="{{url('#')}}">Edit</td> -->
            <td  scope="row"class="text-center">
                        <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a  href="{{url('#')}}" onClick="return myFunction();"  style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a>
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
</div>
</html>
@endsection