@extends('layouts.hmsmain')
@section('content')
{{-- heading --}}
<h4 id="hdtpa"><b>Office Administration</b></h4>
<br>

{{--sub heading --}}
<h5 id="hdbtb"> Suppliers </h5>
<br>

<div class="row">
    <div class="col-sm-4 "> <a href="{{ url('creditor_list') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Creditor List</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('creditors_aging_report') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Creditors Aging Report</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('supplier_expense_report') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn"> Supplier Expense Report</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('pay_supplier_invoice') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Pay Supplier Invoice</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('supplier_credit_notes') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Supplier Credit Notes</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('supplier_invoice') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Supplier Invoice</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('supplier_monthly_schedule') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Supplier Monthly Schedule</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('suppliers_list') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Supplier List</button></a>
    </div>


</div>

<br><br>

{{--sub heading --}}
<h5 id="hdbtb"> Transactions </h5>
<br>

<div class="row">
    <div class="col-sm-4 "> <a href="{{ url('balance') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Balance on Client Trust</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('cheque') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Cheque Cancellation</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('file_office') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">File - Office Journals</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('Payment') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">File Payments & Transfer</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('budget') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Monthly Budget planner</button></a>
    </div>

    <div class="col-sm-4 "> <a href="{{ url('contractual_supplier') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Non-Contractual Suppliers Voucher</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('payments_transfer') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Office Payments Transfers</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('payment_report') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Payment Reports</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('petty_payment') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Petty Cash Payments</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('petty_report') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Petty Cash Report</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('settled_fee') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Settled Paid Legal Fees </button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('settlement_report') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Settlement Report</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('undeposited_fund') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Undeposited Funds Report</button></a>
    </div>

</div>


@endsection