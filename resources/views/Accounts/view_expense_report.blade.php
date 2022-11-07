@extends('layouts.hmsmain')
@section('content')
<!-- <!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRA</title> -->

    <!-- <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/') }}assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/all.css">
    <link rel="stylesheet" href="{{asset('/') }}assets/vendors/iconly/bold.css"> -->
<!-- </head>
<br/> -->
<!-- <a href="javascript:history.back()"  class="btn btn-primary" style="margin-bottom:10px;margin-left:20px;">Back</a> -->
<div class="container">
	<br>
  {{-- heading --}}
  <h4 id="hdtpa"><b>Expense Report</b></h4>
  <br><br>
    

        {{-- <button  class="btn btn-primary "  data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default"  class="btn btn-secondary">Add Groups</button> --}}

      <div class="table-responsive">
<table class="table table-striped" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Account No </th>
      <th scope="col">Staff Salaries and bonus</th>
      <th scope="col">Insurances</th>
      <th scope="col">Partners Benifits</th>
      <th scope="col">Assets</th>
      <th scope="col">Office administration Expenses</th>
      <th scope="col">Marketing and Branding Budget</th>
      <th scope="col">Travel & Entertainment</th>
      <th scope="col">Office Rent & Service Charge</th>
      <th scope="col">Information & Technology Costs</th>
      <th scope="col">Other Administrative Costs</th>
      <th scope="col">Audit,Accountancy & Strategic Plan Consultancy Fees</th>
      <th scope="col">Projected Taxes</th>
      <th scope="col">Telecommunication Costs</th>

    </tr>
  </thead>
  <tbody>
      <tr>
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
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    
  </tbody>
</table>

      </div>
</div>
</html>
@endsection



