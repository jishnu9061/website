
@extends('layouts.hmsmain')
@section('content')
<html>
    <div class="container">
   <head>
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <style >
          body
        {
          background-color: white;
        }
  th, td ,tr{
               border: 1px solid  gray ;
                border-collapse: collapse;
}
table{
    outline: 1px solid  gray;
}
 </style>
   </head>
   <body>
   
    <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Tax Charts</u></b></span></button><br>
          
     </div>
            <br>
     
<div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('tax_chart')}}"><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn"> Tax Chart</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('tax_excise')}}"><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn">Tax Excise</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('tax_vat')}}"><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Tax VAT</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('tax_wht')}}"><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn"> Tax WHT</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('tax_vat-wht')}}"><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn"> Tax VAT-WHT</button></a></div>
</div>
</body>
</div>
</html>

  @endsection
      














   