@extends('layouts.hmsmain')
@section('content')


<section >
    {{-- heading --}}
    <h4 id="hdtpa"><b>Accounts</b></h4>
    <br><br>
  
 
 
         
{{--sub heading --}}
{{-- <h5 id="hdbtb">Maintenance</h5>
<br> --}}
 
   <div class="row sm">
    <div class="col-sm-4 "> <a href="{{url('ledger_acount_categories')}}"><img class="logo_size"src="assets\image\Account Type.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn"> Account Type</button></a></div>
     <div class="col-sm-4 "> <a href="{{ url('ledger_acount_subcategories') }}"><img class="logo_size" src="assets\image\Groups.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Groups</button></a></div>
     <div class="col-sm-4 "> <a href="{{ url('ledger_budget_category') }}"><img class="logo_size"src="assets\image\Budget Category.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Budget Category</button></a></div>
    </div>
    <br>
        
    {{--sub heading --}}
    <h5 id="hdbtb">Chart of Accounts</h5>
    <br>

    <div class="row sm">
        <div class="col-sm-4"> <a href="{{ url('ledger_acounts') }}"><img class="logo_size"src="assets\image\Ledger account.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Ledger Account</button></a></div>
        <div class="col-sm-4"> <a href="{{ url('ledger') }}"><img class="logo_size"src="assets\image\Ledger.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Ledger Listing</button></a></div>
        <div class="col-sm-4"> <a href="{{ url('journal') }}"><img class="logo_size"src="assets\image\Journal.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Journal</button></a></div>
        <div class="col-sm-4"> <a href="{{ url('') }}"><img class="logo_size"src="assets\image\Journal.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Profit & Loss Account</button></a></div>

 <!-------------------------------------------new-------------------------------------------------------------------- -->  
        <div class="col-sm-4"> <a href="{{ url('budget_forecating') }}"><img class="logo_size"src="assets\image\Balance Sheet.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Budget Forecasting</button></a></div>
        <div class="col-sm-4"> <a href="{{ url('budget_forecating_dept') }}"><img class="logo_size"src="assets\image\Balance Sheet.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Budget Forecasting Department</button></a></div>
<!-------------------------------------------new-------------------------------------------------------------------- -->
</div>
    <br>
                
                
    {{--sub heading --}}
    <h5 id="hdbtb">Bank Reconciliation</h5>
    <br>   
    <div class="row sm"> 
         <div class="col-sm-4"> <a href="{{ url('ip_bank_bal') }}"><img class="logo_size"src="assets\image\Expense Report.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">i/p Bank Balance</button></a></div>
        <div class="col-sm-4"> <a href="{{ url('re_bank_entries') }}"><img class="logo_size"src="assets\image\Ledger.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Reconcile Bank Entries</button></a></div>
        <div class="col-sm-4"> <a href="{{ url('bank_recon_rep') }}"><img class="logo_size"src="assets\image\Journal.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Bank Reconciliation Report</button></a></div>
    </div>
    <br>  

    <h5 id="hdbtb">General Ledger Report</h5>
    <br>   
    <div class="row sm"> 
    <div class="col-sm-4"> <a href="{{ url('expense_report') }}"><img class="logo_size"src="assets\image\Expense Report.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Expense Report</button></a></div>
         <div class="col-sm-4"> <a href="{{ url('m_c_report') }}"><img class="logo_size"src="assets\image\Journal.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Monthly Comparative Report</button></a></div>
         <div class="col-sm-4"> <a href="{{ url('vat_report') }}"><img class="logo_size"src="assets\image\Journal.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">V.A.T Report</button></a></div>
         <div class="col-sm-4"> <a href="{{ url('') }}"><img class="logo_size"src="assets\image\Journal.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Fixed Deposit Report</button></a></div>
         <div class="col-sm-4"> <a href="{{ url('') }}"><img class="logo_size"src="assets\image\Journal.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Withholding Tax(WHT) Report</button></a></div>
         <div class="col-sm-4"> <a href="{{ url('') }}"><img class="logo_size"src="assets\image\Journal.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Withholding VAT(WHV) Report</button></a></div>
    </div>
    <br>  

    <h5 id="hdbtb">Financial Report</h5>
    <br>   
    <div class="row sm"> 
        <div class="col-sm-4"> <a href="{{ url('i_e_stmnt') }}"><img class="logo_size"src="assets\image\Balance Sheet.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn">Income & Expenditure Statement</button></a></div>
        <div class="col-sm-4"> <a href="{{ url('trialbalance') }}"><img class="logo_size"src="assets\image\Trial Balance.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Trial Balance</button></a></div>
        <div class="col-sm-4"> <a href="{{ url('profitandlossaccount') }}"><img class="logo_size"src="assets\image\Profit & loss.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Profit And loss Account</button></a></div>
        <div class="col-sm-4"> <a href="{{ url('balancesheet') }}"><img class="logo_size"src="assets\image\Balance Sheet.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Balance Sheet</button></a></div>
        <div class="col-sm-4"> <a href="{{ url('') }}"><img class="logo_size"src="assets\image\Bank account detail.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Budget Analysis</button></a></div>
        <div class="col-sm-4"> <a href="{{ url('cash_flow_stmt') }}"><img class="logo_size"src="assets\image\Invoice Items.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Cash Flow Report</button></a></div>
        <div class="col-sm-4"> <a href="{{ url('') }}"><img class="logo_size"src="assets\image\Invoice Items.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn">Partners Current Account</button></a></div>
    </div>
    <br>  




                                        <!-- <div class="col-sm-4"> <a href="{{ url('stock_section') }}"><img class="logo_size"
                                            src="assets\image\Stock Reciept.png" alt=""><button type="button" style="width:70%;"
                                            class="btn btn-primary btn_align_btn">Stock Reciept</button></a></div>>
                                            <div class="col-sm-4"> <a href="{{ url('stock_issue') }}"><img class="logo_size"
                                                src="assets\image\Stock issues.png" alt=""><button type="button" style="width:70%;"
                                                class="btn btn-primary btn_align_btn">Stock Issue</button></a></div>
                                                <div class="col-sm-4"> <a href="{{ url('store_ledger') }}"><img class="logo_size"
                                                    src="assets\image\Store Ledger.png" alt=""><button type="button" style="width:70%;"
                                                    class="btn btn-primary btn_align_btn">Store Ledger</button></a></div>
                                                    <div class="col-sm-4"> <a href="{{ url('stock_categories') }}"><img class="logo_size"
                                                        src="assets\image\Stock Category.png" alt=""><button type="button" style="width:70%;"
                                                        class="btn btn-primary btn_align_btn">Stock Categories</button></a></div>
                                                        <div class="col-sm-4"> <a href="{{ url('stock_subcategories') }}"><img class="logo_size"
                                                            src="assets\image\Stock sub Category.png" alt=""><button type="button" style="width:70%;"
                                                            class="btn btn-primary btn_align_btn">Stock Sub Categories</button></a></div>
                                                            <div class="col-sm-4"> <a href="{{ url('stock_items') }}"><img class="logo_size"
                                                                src="assets\image\Stock Items.png" alt=""><button type="button" style="width:70%;"
                                                                class="btn btn-primary btn_align_btn">Stock Items</button></a></div> -->
                                                                
             </div>
           
    
     
               
                 
            
            
 
             </section>

             @endsection