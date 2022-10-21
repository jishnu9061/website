@extends('layouts.hmsmain')
@section('content')


 


     {{-- heading --}}
     <h4 id="hdtpa"><b>Client Invoicing</b></h4>
     <br><br>
   
  
     <br>
          
         {{--sub heading --}}
      <h5 id="hdbtb">Billable Items</h5>
      <br>
        
   
    <!-- <h2 class="text-center">Configuration Details</h2><br> -->
   
   
  
  <div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('capture_billable_items')}}"><img class="logo_size"src="assets\image\Company.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" > Capture Billable Item</button></a></div>
    <div class="col-sm-4 " ><a href="{{url('view_bill')}}"><img class="logo_size"src="assets\image\Weekend and Holidays.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" >View Billable Item</button></a></div>
   

</div>
<br>
    {{--sub heading --}}
    <h5 id="hdbtb">Fee Notes & Credit</h5>
    <br>


  <div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('drn_fee_notes')}}"><img class="logo_size"src="assets\image\Manage User Accounts.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Fee Notes / DRN / Interim Fee Notes</button></a></div>

    <div class="col-sm-4 " > <a href="{{url('credit_notes')}}"><img class="logo_size"src="assets\image\Change user password.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" > Credit Notes</button></a></div>

    <div class="col-sm-4 " ><img class="logo_size"src="assets\image\Manage user group.png" alt=""><a href="{{url('quotation')}}"><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Qutation / Perfoma Fee Notes</button></a></div>




    
    

</div>
<br>

  {{--sub heading --}}
  <h5 id="hdbtb">Receipts</h5>
  <br>

<div class="row sm">
    <div class="col-sm-4 " ><img class="logo_size"src="assets\image\Database backup.png" alt=""> <a href="{{url('issue-receipt')}}"><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Issue Client Receipt</button></a></div>
    <div class="col-sm-4 " ><img class="logo_size"src="assets\image\Transport zones.png" alt=""> <a href="{{url('receipt-reprint')}}"><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Receipt Re-Print</button></a></div>
    <div class="col-sm-4 " > <img class="logo_size"src="assets\image\Billable activity.png" alt=""><a href="{{url('reverse-receipt')}}"><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Reverce Receipt</button></a></div>
    <div class="col-sm-4 " ><img class="logo_size"src="assets\image\Bank account detail.png" alt=""> <a href="{{url('receipt-report')}}"><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Receipts Report</button></a></div>
    
</div>
<br>
  {{--sub heading --}}
  <h5 id="hdbtb">Reports</h5>
  <br>



    
  
  <div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('debtors_aging_report')}}"><img class="logo_size"src="assets\image\Menu access configuration.png" alt=""><button type="button"style="width:70%;" class="btn btn-primary btn_align_btn" >Debtors Aging Reports</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('debtors_list')}}"><img class="logo_size"src="assets\image\Useful links.png" alt=""><button type="button"style="width:70%;" class="btn btn-primary btn_align_btn" >Debtors List</button></a></div>
    <div class="col-sm-4 " ><a href="{{url('fee_note_items_billed')}}"><img class="logo_size"src="assets\image\Database backup.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Fee Note Item Billed</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('fee_note_items_received')}}"><img class="logo_size"src="assets\image\Transport zones.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Fee Note Item Received</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('fee_note_report')}}"><img class="logo_size"src="assets\image\Billable activity.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Outstanding Fee Note Report</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('other_reports')}}"><img class="logo_size"src="assets\image\Bank account detail.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Other Reports</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('quotation_item_report')}}"><img class="logo_size"src="assets\image\Billable activity.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Quotation Item Reportt</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('fee_expected_advocate')}}"><img class="logo_size"src="assets\image\Bank account detail.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Fee Expected Per Advocate</button></a></div>
    
    
 
</div>







  @endsection
      






    


   