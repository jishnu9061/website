@extends('layouts.hmsmain')
@section('content')
<li class="sidebar-item  has-sub">// First menu
    <a href="#" class='sidebar-link'>
        <i id="icon" class="fa-regular fa-user"  style="font-weight: 300;"></i>
            <span>User Management</span>
    </a>
    @php
        $admin = array("manage_user_account", "change_user_password", "manage_user_roles", "view_roles_per_user", "manage_user_group", "manage_user_department", "manage_towns");
    @endphp
        @if (in_array(request()->path(), $admin))
            <ul class="submenu" style="display: block;">
        @else
            <ul class="submenu" style="display: none;">
        @endif
        @if(request()->path()== "manage_user_account")// 1st submenu start
            <li class="submenu-item ">
                <a href="{{url('manage_user_account')}}" class='sidebar-link'>
                    <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Manage Accounts</span>
        @else
            <li class="submenu-item ">
                <a href="{{url('manage_user_account')}}" class='sidebar-link'>
                    <span>Manage Accounts</span>
        @endif
                </a>
            </li>//1st submenu end
        @if(request()->path()== "change_user_password")// 2nd submenu start
            <li class="submenu-item ">
                <a href="{{url('change_user_password')}}" class='sidebar-link'>
                    <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Change Password</span>
        @else
            <li class="submenu-item ">
                <a href="{{url('change_user_password')}}" class='sidebar-link'>
                    <span>Change Password</span>
        @endif
                </a>
            </li>//2nd submenu end
        @if(request()->path()== "manage_user_roles")// 3rd submenu start
            <li class="submenu-item ">
                <a href="{{url('manage_user_roles')}}" class='sidebar-link'>
                    <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Manage Roles</span>
        @else
            <li class="submenu-item ">
                <a href="{{url('manage_user_roles')}}" class='sidebar-link'>
                    <span>Manage Roles</span>
        @endif
                </a>
            </li>    //3rd submenu end
        @if(request()->path()== "view_roles_per_user")// 4th submenu start
            <li class="submenu-item ">
                <a href="{{url('view_roles_per_user')}}" class='sidebar-link'>
                    <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">View Roles</span>
        @else
            <li class="submenu-item ">
                <a href="{{url('view_roles_per_user')}}" class='sidebar-link'>
                    <span>View Roles</span>
        @endif
                </a>
            </li>  //4th submenu end
        @if(request()->path()== "manage_user_group")// 5th submenu start
            <li class="submenu-item ">
                <a href="{{url('manage_user_group')}}" class='sidebar-link'>
                    <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Manage Groups</span>
        @else
            <li class="submenu-item ">
                <a href="{{url('manage_user_group')}}" class='sidebar-link'>
                    <span>Manage Groups</span>
        @endif
                </a>
            </li>  //5th submenu end
        @if(request()->path()== "manage_user_department")// 6th submenu start
            <li class="submenu-item ">
                <a href="{{url('manage_user_department')}}" class='sidebar-link'>
                    <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Manage Departments</span>
        @else
            <li class="submenu-item ">
                <a href="{{url('manage_user_department')}}" class='sidebar-link'>
                    <span>Manage Departments</span>
        @endif
                </a>
            </li>  //6th submenu end
        @if(request()->path()== "manage_towns")// 7th submenu start
            <li class="submenu-item ">
                <a href="{{url('manage_towns')}}" class='sidebar-link'>
                    <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Manage Towns</span>
        @else
            <li class="submenu-item ">
                <a href="{{url('manage_towns')}}" class='sidebar-link'>
                    <span>Manage Towns</span>
        @endif
                </a>
            </li>  //7th submenu end
    </ul>
</li>
<li class="sidebar-item  has-sub">// Second menu
    <a href="#" class='sidebar-link'>
        <i id="icon" class="fa fa-university"  style="font-weight: 300;"></i>
            <span>Client Management</span>
    </a>
    @php
        $admin = array("corporate-list", "client_list", "communication-list", "complaint-list", "asign-lawyer");
    @endphp
    @if (in_array(request()->path(), $admin))
        <ul class="submenu" style="display: block;">
        @else
            <ul class="submenu" style="display: none;">
    @endif
        @if(request()->path()== "corporate-list")// 1st-> 1st  submenu start
            <li class="submenu-item ">
                <a href="{{url('corporate-list')}}" class='sidebar-link'>
                    <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Corporate Client List</span>
            @else
            <li class="submenu-item ">
                <a href="{{url('corporate-list')}}" class='sidebar-link'>
                    <span>Corporate Client List</span>
        @endif
                </a>
            </li>//1st-> 1st submenu end
        @if(request()->path()== "client_list")//1st->2nd submenu start
            <li class="submenu-item ">
                <a href="{{url('client_list')}}" class='sidebar-link'>
                    <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Individual Client List</span>
            @else
            <li class="submenu-item ">
                <a href="{{url('client_list')}}" class='sidebar-link'>
                    <span>Individual Client List</span>
        @endif
                </a>
            </li>//1st->2nd submenu end
        @if(request()->path()== "communication-list")// 2nd submenu start
            <li class="submenu-item ">
                <a href="{{url('communication-list')}}" class='sidebar-link'>
                    <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Communication Details</span>
        @else
            <li class="submenu-item ">
                <a href="{{url('communication-list')}}" class='sidebar-link'>
                    <span>Communication Details</span>
        @endif
                </a>
            </li>//2nd submenu end
        @if(request()->path()== "complaint-list")// 3rd submenu start
            <li class="submenu-item ">
                <a href="{{url('complaint-list')}}" class='sidebar-link'>
                    <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Complaint Register Details</span>
        @else
            <li class="submenu-item ">
                <a href="{{url('complaint-list')}}" class='sidebar-link'>
                    <span>Complaint Register Details</span>
        @endif
                </a>
            </li>//3rd submenu end
        @if(request()->path()== "asign-lawyer")// 4th submenu start
            <li class="submenu-item ">
                <a href="{{url('asign-lawyer')}}" class='sidebar-link'>
                    <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Assign Lawyer</span>
        @else
            <li class="submenu-item ">
                <a href="{{url('asign-lawyer')}}" class='sidebar-link'>
                    <span>Assign Lawyer</span>
        @endif
                </a>
            </li>//4th submenu end
    </ul>
</li>
<li class="sidebar-item  has-sub">// Third menu
    <a href="#" class='sidebar-link'>
        <i id="icon" class="far fa-folder"  style="font-weight: 300;"></i>
            <span>File Management</span>
    </a>
    @php
        $admin = array("corporate-list", "client_list", "communication-list", "complaint-list", "asign-lawyer");
    @endphp
    @if (in_array(request()->path(), $admin))
        <ul class="submenu" style="display: block;">
        @else
            <ul class="submenu" style="display: none;">
    @endif
        @if(request()->path()== "corporate-list")// 1st-> 1st  submenu start
            <li class="submenu-item ">
                <a href="{{url('corporate-list')}}" class='sidebar-link'>
                    <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Corporate Client List</span>
            @else
            <li class="submenu-item ">
                <a href="{{url('corporate-list')}}" class='sidebar-link'>
                    <span>Corporate Client List</span>
        @endif
                </a>
            </li>//1st-> 1st submenu end
</li>
<li class="sidebar-item  has-sub">// Fourth menu
                <a href="#" class='sidebar-link'>
                    <i id="icon" class="fa fa-th-large"  style="font-weight: 300;"></i>
                        <span>HR</span>
                </a>
                @php
                    $admin = array("staffs", "recruitment", "performance_department", "loans", "payslip", "attendanceview", "attendance", "timesheet", "task_allocation", "leave_request_details", "attendance_sheet", "bank_names", "internal_memos");
                @endphp
                @if (in_array(request()->path(), $admin))
                    <ul class="submenu" style="display: block;">
                    @else
                        <ul class="submenu" style="display: none;">
                @endif
                    @if(request()->path()== "staffs")// 1st-> 1st  submenu start
                        <li class="submenu-item ">
                            <a href="{{url('staffs')}}" class='sidebar-link'>
                                <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Staff Details</span>
                        @else
                        <li class="submenu-item ">
                            <a href="{{url('staffs')}}" class='sidebar-link'>
                                <span>Staff Details</span>
                    @endif
                            </a>
                        </li>//1st-> 1st submenu end
                    @if(request()->path()== "recruitment")// 2nd submenu start
                        <li class="submenu-item ">
                            <a href="{{url('recruitment')}}" class='sidebar-link'>
                                <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Recruitment</span>
                    @else
                        <li class="submenu-item ">
                            <a href="{{url('recruitment')}}" class='sidebar-link'>
                                <span>Recruitment</span>
                    @endif
                            </a>
                        </li>//2nd submenu end
                    @if(request()->path()== "performance_department")// 3rd submenu start
                        <li class="submenu-item ">
                            <a href="{{url('performance_department')}}" class='sidebar-link'>
                                <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Performance</span>
                    @else
                        <li class="submenu-item ">
                            <a href="{{url('performance_department')}}" class='sidebar-link'>
                                <span>Performance</span>
                    @endif
                            </a>
                        </li>//3rd submenu end
                    @if(request()->path()== "loans")// 4th submenu start
                        <li class="submenu-item ">
                            <a href="{{url('loans')}}" class='sidebar-link'>
                                <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Loans</span>
                    @else
                        <li class="submenu-item ">
                            <a href="{{url('loans')}}" class='sidebar-link'>
                                <span>Loans</span>
                    @endif
                            </a>
                        </li>//4th submenu end
                    @if(request()->path()== "payslip")// 5th submenu start
                        <li class="submenu-item ">
                            <a href="{{url('payslip')}}" class='sidebar-link'>
                                <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Payslip</span>
                    @else
                        <li class="submenu-item ">
                            <a href="{{url('payslip')}}" class='sidebar-link'>
                                <span>Payslip</span>
                    @endif
                            </a>
                        </li>//5th submenu end
                    @if(request()->path()== "attendanceview")// 6th submenu start
                        <li class="submenu-item ">
                            <a href="{{url('attendanceview')}}" class='sidebar-link'>
                                <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Attendance (Manual)</span>
                    @else
                        <li class="submenu-item ">
                            <a href="{{url('attendanceview')}}" class='sidebar-link'>
                                <span>Attendance (Manual)</span>
                    @endif
                            </a>
                        </li>//6th submenu end
                    @if(request()->path()== "attendance")// 7th submenu start
                        <li class="submenu-item ">
                            <a href="{{url('attendance')}}" class='sidebar-link'>
                                <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Attendance CSV</span>
                    @else
                        <li class="submenu-item ">
                            <a href="{{url('attendance')}}" class='sidebar-link'>
                                <span>Attendance CSV</span>
                    @endif
                            </a>
                        </li>//7th submenu end
                    @if(request()->path()== "timesheet")// 8th submenu start
                        <li class="submenu-item ">
                            <a href="{{url('timesheet')}}" class='sidebar-link'>
                                <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Time Sheet</span>
                    @else
                        <li class="submenu-item ">
                            <a href="{{url('timesheet')}}" class='sidebar-link'>
                                <span>Time Sheet</span>
                    @endif
                            </a>
                        </li>//8th submenu end
                    @if(request()->path()== "task_allocation")// 9th submenu start
                        <li class="submenu-item ">
                            <a href="{{url('task_allocation')}}" class='sidebar-link'>
                                <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Task Allocation</span>
                    @else
                        <li class="submenu-item ">
                            <a href="{{url('task_allocation')}}" class='sidebar-link'>
                                <span>Task Allocation</span>
                    @endif
                            </a>
                        </li>//9th submenu end
                    @if(request()->path()== "task_allocation")// 9th submenu start
                        <li class="submenu-item ">
                            <a href="{{url('task_allocation')}}" class='sidebar-link'>
                                <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Task Allocation</span>
                    @else
                        <li class="submenu-item ">
                            <a href="{{url('task_allocation')}}" class='sidebar-link'>
                                <span>Task Allocation</span>
                    @endif
                            </a>
                        </li>//9th submenu end
                    @if(request()->path()== "leave_request_details")// 10th submenu start
                        <li class="submenu-item ">
                            <a href="{{url('leave_request_details')}}" class='sidebar-link'>
                                <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Leave Request Details</span>
                    @else
                        <li class="submenu-item ">
                            <a href="{{url('leave_request_details')}}" class='sidebar-link'>
                                <span>Leave Request Details</span>
                    @endif
                            </a>
                        </li>//10th submenu end


@endsection
