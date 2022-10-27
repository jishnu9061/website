
@extends('layouts.hmsmain')
@section('content')
<html>
 
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
    {{-- heading --}}
<h4 id="hdtpa"><b>Tax Charts</b></h4>
<br><br>
   

            <br>
     
<div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('tax_chart')}}"><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn"> Tax Chart</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('tax_excise')}}"><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn">Tax Excise</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('tax_vat')}}"><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Tax VAT</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('tax_wht')}}"><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn"> Tax WHT</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('tax_wht-vat')}}"><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn"> Tax VAT-WHT</button></a></div>
</div>
</body>
</div>
</html>

  @endsection
      














   