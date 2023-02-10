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
            border-radius: 2rem;margin:0px 20px; ">Hr department </span>
        </li>
        <li class="sidebar-item  has-sub">{{-- Fourth menu --}}
            <a href="#" class='sidebar-link'>
                <i id="icon" class="fa fa-th-large" style="font-weight: 300;"></i>
                <span style="margin-left: 1rem;">HR</span>
            </a>
            @php
            $admin = array('employee_list/'.Auth::user()->company_id,'add_staff',"staffs", "recruitment",
            "performance_department", "loans", "payslip", "attendanceview", "attendance", "timesheet",
            "task_allocation", "leave_request_details", "attendance_sheet", "bank_names", "internal_memos");
            @endphp
            @if (in_array(request()->path(), $admin))
            <ul class="submenu" style="display: block;">
                @else
                <ul class="submenu" style="display: none;">
                    @endif
                    @if(request()->path()== 'employee_list/'.Auth::user()->company_id){{-- 0th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('employee_list/'.Auth::user()->company_id)}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Employee List</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('employee_list/'.Auth::user()->company_id)}}" class='sidebar-link'>
                            <span>Employee List</span>
                            @endif
                        </a>
                    </li>{{-- 0th submenu end --}}
                    @if(request()->path()== 'create_employee/'.Auth::user()->company_id){{-- 0_1th  submenu start --}}
                    <li class="submenu-item " >
                        <a href="{{url('create_employee/'.Auth::user()->company_id)}}" class='sidebar-link'style="background-color:#1D1D50 ; color:white;">
                            <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Add Employee</span>
                    @else
                        <li class="submenu-item ">
                            <a href="{{url('create_employee/'.Auth::user()->company_id)}}" class='sidebar-link'>
                            <span>Add Employee</span>
                    @endif
                        </a>
                    </li>{{-- 0_1th submenu end --}}
                    @if(request()->path()== "staffs"){{-- 1st  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('staffs')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Manage Staffs</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('staffs')}}" class='sidebar-link'>
                            <span>Manage Staffs</span>
                            @endif
                        </a>
                    </li>{{-- 1st submenu end --}}
                    @if(request()->path()== "recruitment"){{-- 2nd submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('recruitment')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Recruitment</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('recruitment')}}" class='sidebar-link'>
                            <span>Recruitment</span>
                            @endif
                        </a>
                    </li>{{-- 2nd submenu end --}}
                    @if(request()->path()== "performance_department"){{-- 3rd submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('performance_department')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Performance</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('performance_department')}}" class='sidebar-link'>
                            <span>Performance</span>
                            @endif
                        </a>
                    </li>{{-- 3rd submenu end --}}
                    @if(request()->path()== "loans"){{-- 4th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('loans')}}" class='sidebar-link' style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Loans</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('loans')}}" class='sidebar-link'>
                            <span>Loans</span>
                            @endif
                        </a>
                    </li>{{-- 4th submenu end --}}
                    @if(request()->path()== "payslip"){{-- 5th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('payslip')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Payslip(Bulk)</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('payslip')}}" class='sidebar-link'>
                            <span>Payslip(Bulk)</span>
                            @endif
                        </a>
                    </li>{{-- 5th submenu end --}}
                    @if(request()->path()== "attendanceview"){{-- 6th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('attendanceview')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Attendance (Manual)</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('attendanceview')}}" class='sidebar-link'>
                            <span>Attendance (Manual)</span>
                            @endif
                        </a>
                    </li>{{-- 6th submenu end --}}
                    @if(request()->path()== "attendance"){{-- 7th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('attendance')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Attendance (CSV Uploaded)</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('attendance')}}" class='sidebar-link'>
                            <span>Attendance (CSV Uploaded)</span>
                            @endif
                        </a>
                    </li>{{-- 7th submenu end --}}
                    @if(request()->path()== "timesheet"){{-- 8th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('timesheet')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Time
                                Sheet</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('timesheet')}}" class='sidebar-link'>
                            <span>Time Sheet</span>
                            @endif
                        </a>
                    </li>{{-- 8th submenu end --}}
                    @if(request()->path()== "task_allocation")// 9th submenu start
                    <li class="submenu-item ">
                        <a href="{{url('task_allocation')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Task
                                Allocation</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('task_allocation')}}" class='sidebar-link'>
                            <span>Task Allocation</span>
                            @endif
                        </a>
                    </li>{{-- 9th submenu end --}}
                    @if(request()->path()== "task_allocation"){{-- 9th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('task_allocation')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Task
                                Allocation</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('task_allocation')}}" class='sidebar-link'>
                            <span>Task Allocation</span>
                            @endif
                        </a>
                    </li>{{-- 9th submenu end --}}
                    @if(request()->path()== "leave_request_details"){{-- 10th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('leave_request_details')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Leave
                                Request Details</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('leave_request_details')}}" class='sidebar-link'>
                            <span>Leave Request Details</span>
                            @endif
                        </a>
                    </li>{{-- 10th submenu end --}}
                    @if(request()->path()== "attendance_sheet"){{-- 11th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('attendance_sheet')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Attendance Sheet</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('attendance_sheet')}}" class='sidebar-link'>
                            <span>Attendance Sheet</span>
                            @endif
                        </a>
                    </li>{{-- 11th submenu end --}}
                    @if(request()->path()== "bank_names"){{-- 12th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('bank_names')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Add
                                Bank</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('bank_names')}}" class='sidebar-link'>
                            <span>Add Bank</span>
                            @endif
                        </a>
                    </li>{{-- 12th submenu end --}}
                    @if(request()->path()== "internal_memos"){{-- 13th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('internal_memos')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Internal Memos</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('internal_memos')}}" class='sidebar-link'>
                            <span>Internal Memos</span>
                            @endif
                        </a>
                    </li>{{-- 13th submenu end --}}
                </ul>
        </li>
    </ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>