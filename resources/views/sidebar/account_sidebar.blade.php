<div class="sidebar-wrapper active" style="top:80px;border-top-right-radius: 6px;height:auto;transition: all 1s;">
    {{-- <div class="sidebar-header"style="padding-left: 20px;padding-right: 10px;padding-bottom:0px;">
        <div class="d-flex justify-content-between">
            <div class="logo"class="logo" style="background-color:#dfc79d;
                                                 border-radius:100% 100% 100% 100%;
                                                 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                                                 height:70px;width:70px; margin-left:px;
                                                 background:  #d0d3cd50 -webkit-linear-gradient(left,  #ffffff15, rgb(255, 255, 255)) repeat 0 0 / 200px;
                                                 animation: sweep 5.5s ease-in-out infinite;
                                                 animation-direction:reverse;">
                <a href="{{url('home')}}">
    <img id="cr_logo" src="{{asset('/') }}assets//images/Logo cra.png" alt="CRA"
        style="margin-top:8px;height:60px;width:60px;">
    </a>
</div>
</div>
<div class="toggler"
    style="text-align:center;height:auto;width:150px;color:#1D1D50;line-height: 80%;padding-left:10px;padding-top:10px; ">
    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
    {{ $copmany_name_for_sidebar->company_name }}
</div> --}}
{{-- </div> --}}
<div id="demo" class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title" style="background-color:#1D1D50;color: #dcdce7; text-align:center; font-size:16px;border: 0.1px solid #0606067d;
            border-radius: 2rem;margin:0px 20px; ">Account Department </span>
        </li>
        <li class="sidebar-item  has-sub">{{-- Fifth menu --}}
            <a href="#" class='sidebar-link'>
                <i id="icon" class="fa fa-chart-line" style="font-weight: 300;"></i>
                <span style="margin-left: 1rem;">Accounts</span>
            </a>
            @php
            $admin = array("ledger_acount_categories", "ledger_acount_subcategories", "ledger_budget_category",
            "ledger_acounts", "ledger", "journal", "budget_forecasting", "budget_forecat_dept", "i_p_bank_bal",
            "reconcile_bank_entries", "bank_recon_report", "expense_report", "m_c_report", "vat_report", "", "",
            "profitandlossaccount", "trialbalance", "balancesheet", "", "cash_flow_stmt", "");
            @endphp
            @if (in_array(request()->path(), $admin))
            <ul class="submenu" style="display: block;">
                @else
                <ul class="submenu" style="display: none;">
                    @endif
                    @if(request()->path()== "ledger_acount_categories"){{-- 1st  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('ledger_acount_categories')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Account Type</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('ledger_acount_categories')}}" class='sidebar-link'>
                            <span>Account Type</span>
                            @endif
                        </a>
                    </li>{{-- 1st submenu end --}}
                    @if(request()->path()== "ledger_acount_subcategories"){{-- 2nd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('ledger_acount_subcategories')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Account Category</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('ledger_acount_subcategories')}}" class='sidebar-link'>
                            <span>Account Category</span>
                            @endif
                        </a>
                    </li>{{-- 2nd submenu end --}}
                    @if(request()->path()== "ledger_budget_category"){{-- 3rd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('ledger_budget_category')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Budget Group</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('ledger_budget_category')}}" class='sidebar-link'>
                            <span>Budget Group</span>
                            @endif
                        </a>
                    </li>{{-- 3rd submenu end --}}
                    @if(request()->path()== "ledger_acounts"){{-- 4th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('ledger_acounts')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Ledger Account</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('ledger_acounts')}}" class='sidebar-link'>
                            <span>Ledger Account</span>
                            @endif
                        </a>
                    </li>{{-- 4th submenu end --}}
                    @if(request()->path()== "ledger"){{-- 5th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('ledger')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Ledger Listing</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('ledger')}}" class='sidebar-link'>
                            <span>Ledger Listing</span>
                            @endif
                        </a>
                    </li>{{-- 5th submenu end --}}
                    @if(request()->path()== "journal"){{-- 6th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('journal')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Journal</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('journal')}}" class='sidebar-link'>
                            <span>Journal</span>
                            @endif
                        </a>
                    </li>{{-- 6th submenu end --}}
                    @if(request()->path()== "budget_forecasting"){{-- 7th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('budget_forecasting')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Budget Forecasting</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('budget_forecasting')}}" class='sidebar-link'>
                            <span>Budget Forecasting</span>
                            @endif
                        </a>
                    </li>{{-- 7th submenu end --}}
                    @if(request()->path()== "budget_forecat_dept"){{-- 8th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('budget_forecat_dept')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Budget Forecasting Department</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('budget_forecat_dept')}}" class='sidebar-link'>
                            <span>Budget Forecasting Department</span>
                            @endif
                        </a>
                    </li>{{-- 8th submenu end --}}
                    @if(request()->path()== "i_p_bank_bal"){{-- 9th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('i_p_bank_bal')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">i/p
                                Bank Balance</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('i_p_bank_bal')}}" class='sidebar-link'>
                            <span>i/p Bank Balance</span>
                            @endif
                        </a>
                    </li>{{-- 9th submenu end --}}
                    @if(request()->path()== "reconcile_bank_entries"){{-- 10th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('reconcile_bank_entries')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Reconcile Bank Entries</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('reconcile_bank_entries')}}" class='sidebar-link'>
                            <span>Reconcile Bank Entries</span>
                            @endif
                        </a>
                    </li>{{-- 10th submenu end --}}
                    @if(request()->path()== "bank_recon_report"){{--11th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('bank_recon_report')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Bank
                                Reconciliation Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('bank_recon_report')}}" class='sidebar-link'>
                            <span>Bank Reconciliation Report</span>
                            @endif
                        </a>
                    </li>{{-- 11th submenu end --}}
                    @if(request()->path()== "expense_report"){{-- 12th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('expense_report')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Expense Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('expense_report')}}" class='sidebar-link'>
                            <span>Expense Report</span>
                            @endif
                        </a>
                    </li>{{-- 12th submenu end --}}
                    @if(request()->path()== "m_c_report"){{-- 13th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('m_c_report')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Monthly Comparative Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('m_c_report')}}" class='sidebar-link'>
                            <span>Monthly Comparative Report</span>
                            @endif
                        </a>
                    </li>{{-- 13th submenu end --}}
                    @if(request()->path()== "vat_report"){{-- 14th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('vat_report')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">V.A.T
                                Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('vat_report')}}" class='sidebar-link'>
                            <span>V.A.T Report</span>
                            @endif
                        </a>
                    </li>{{-- 14th submenu end --}}
                    @if(request()->path()== ""){{-- 15th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('')}}" class='sidebar-link' style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Withholding TAX(WHT) Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('')}}" class='sidebar-link'>
                            <span>Withholding TAX(WHT) Report</span>
                            @endif
                        </a>
                    </li>{{-- 15th submenu end --}}
                    @if(request()->path()== ""){{-- 16th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('')}}" class='sidebar-link' style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Withholding VAT(WHV) Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('')}}" class='sidebar-link'>
                            <span>Withholding VAT(WHV) Report</span>
                            @endif
                        </a>
                    </li>{{-- 16th submenu end --}}
                    @if(request()->path()== "profitandlossaccount"){{-- 17th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('profitandlossaccount')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Income and Expenditure Statement</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('profitandlossaccount')}}" class='sidebar-link'>
                            <span>Income and Expenditure Statement</span>
                            @endif
                        </a>
                    </li>{{-- 17th submenu end --}}
                    @if(request()->path()== "trialbalance"){{-- 18th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('trialbalance')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Trial
                                Balance</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('trialbalance')}}" class='sidebar-link'>
                            <span>Trial Balance</span>
                            @endif
                        </a>
                    </li>{{-- 18th submenu end --}}
                    @if(request()->path()== "balancesheet"){{-- 19th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('balancesheet')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Balance Sheet</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('balancesheet')}}" class='sidebar-link'>
                            <span>Balance Sheet</span>
                            @endif
                        </a>
                    </li>{{-- 19th submenu end --}}
                    @if(request()->path()== ""){{-- 20th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('')}}" class='sidebar-link' style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Budget Analysis</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('')}}" class='sidebar-link'>
                            <span>Budget Analysis</span>
                            @endif
                        </a>
                    </li>{{-- 20th submenu end --}}
                    @if(request()->path()== "cash_flow_stmt"){{-- 21st  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('cash_flow_stmt')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Cash
                                Flow Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('cash_flow_stmt')}}" class='sidebar-link'>
                            <span>Cash Flow Report</span>
                            @endif
                        </a>
                    </li>{{-- 21st submenu end --}}
                    @if(request()->path()== ""){{-- 22nd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('')}}" class='sidebar-link' style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Partners Current Account</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('')}}" class='sidebar-link'>
                            <span>Partners Current Account</span>
                            @endif
                        </a>
                    </li>{{-- 22nd submenu end --}}
                </ul>
        </li>
    </ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>