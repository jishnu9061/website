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
            border-radius: 2rem;margin:0px 20px; ">Company Admin </span>
        </li>
        @if(Auth::user()->role == '2')
        <li id="1" class="sidebar-item  has-sub">{{-- First menu --}}
            <a href="#" class='sidebar-link'>
                <i id="icon" class="fa-regular fa-user" style="font-weight: 300;"></i>
                <span style="margin-left: 1rem;">Company</span>
            </a>
            @php
            $admin = array("company_branch", "change_user_password", "manage_user_roles", "view_roles_per_user",
            "manage_user_group", "manage_user_department", "manage_towns");
            @endphp
            @if (in_array(request()->path(), $admin))
            <ul class="submenu" style="display: block;">
                @else
                <ul class="submenu" style="display: none;">
                    @endif
                    @if(request()->path()== "company_branch"){{--1st submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('company_branch')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Manage Branches</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('company_branch')}}" class='sidebar-link'>
                            <span>Manage Branches</span>
                            @endif
                        </a>
                    </li>{{--1st submenu end--}}
                </ul>
        </li>
        <li id="2" class="sidebar-item  has-sub">{{--  Second menu--}}
            <a href="#" class='sidebar-link'>
                <i id="icon" class="fa fa-university" style="font-weight: 300;"></i>
                <span style="margin-left: 1rem;">Client Management</span>
            </a>
            @php
            $admin = array("corporate-list", "client_list", "communication-list", "complaint-list", "asign-lawyer");
            @endphp
            @if (in_array(request()->path(), $admin))
            <ul class="submenu" style="display: block;">
                @else
                <ul class="submenu" style="display: none;">
                    @endif
                    @if(request()->path()== "corporate-list"){{--1st-> 1st  submenu start  --}}
                    <li class="submenu-item ">
                        <a href="{{url('corporate-list')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Corporate Client List</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('corporate-list')}}" class='sidebar-link'>
                            <span>Corporate Client List</span>
                            @endif
                        </a>
                    </li>{{--  1st-> 1st submenu end--}}
                    @if(request()->path()== "client_list"){{-- 1st->2nd submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('client_list')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Individual Client List</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('client_list')}}" class='sidebar-link'>
                            <span>Individual Client List</span>
                            @endif
                        </a>
                    </li>{{-- 1st->2nd submenu end --}}
                    @if(request()->path()== "communication-list"){{-- 2nd submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('communication-list')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Client Communication</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('communication-list')}}" class='sidebar-link'>
                            <span>Client Communication</span>
                            @endif
                        </a>
                    </li>{{-- 2nd submenu end --}}
                    @if(request()->path()== "complaint-list"){{-- 3rd submenu start --}}
                    <li class="submenu-item " style="background-color:#1D1D50 ; color:white;">
                        <a href="{{url('complaint-list')}}" class='sidebar-link'>
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Complaint Register</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('complaint-list')}}" class='sidebar-link'>
                            <span>Complaint Register</span>
                            @endif
                        </a>
                    </li>{{--3rd submenu end  --}}
                    @if(request()->path()== "asign-lawyer"){{--4th submenu start  --}}
                    <li class="submenu-item ">
                        <a href="{{url('asign-lawyer')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Assign Lawyer</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('asign-lawyer')}}" class='sidebar-link'>
                            <span>Assign Lawyer</span>
                            @endif
                        </a>
                    </li>{{-- 4th submenu end --}}
                </ul>
        </li>
        <li id="3" class="sidebar-item  has-sub">{{-- Third menu --}}
            <a href="#" class='sidebar-link'>
                <i id="icon" class="far fa-folder" style="font-weight: 300;"></i>
                <span style="margin-left: 1rem;">File Management</span>
            </a>
            @php
            $admin = array("file-list", "file-progress-list", "file-archive", "file-list-progress-report", "bringup",
            "file-progress-report", "file-status-summary", "client-monthly-file-status", "staff-monthly-status-report",
            "diary-management", "work-flow", "template-category", "document-manager", "file_instruction",
            "office_instructions", "instructions_report", "file-report", "file-opened-report", "file-closed-report",
            "file-pending", "file-pending-approval", "instructions-past", "file_managementindex", "Safe_management",
            "Request_staff_item", "Process_Request", "outgoing-letters", "incomming-letters", "safe-register-report",
            "safe-item-request");
            @endphp
            @if (in_array(request()->path(), $admin))
            <ul class="submenu" style="display: block;">
                @else
                <ul class="submenu" style="display: none;">
                    @endif
                    @if(request()->path()== "file-list"){{-- 1st  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('file-list')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Manage Files</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('file-list')}}" class='sidebar-link'>
                            <span>Manage Files</span>
                            @endif
                        </a>
                    </li>{{-- 1st submenu end --}}
                    @if(request()->path()== "file-progress-list"){{-- 2nd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('file-progress-list')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">File
                                Progress/Bringups</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('file-progress-list')}}" class='sidebar-link'>
                            <span>File Progress/Bringups</span>
                            @endif
                        </a>
                    </li>{{--  2nd submenu end--}}
                    @if(request()->path()== "file-archive"){{-- 3rd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('file-archive')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">File
                                Archive</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('file-archive')}}" class='sidebar-link'>
                            <span>File Archive</span>
                            @endif
                        </a>
                    </li>{{-- 3rd submenu end --}}
                    @if(request()->path()== "file-list-progress-report"){{-- 4th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('file-list-progress-report')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">File
                                List Progress Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('file-list-progress-report')}}" class='sidebar-link'>
                            <span>File List Progress Report</span>
                            @endif
                        </a>
                    </li>{{-- 4th submenu end --}}
                    @if(request()->path()== "bringup"){{-- 5th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('bringup')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Bringup Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('bringup')}}" class='sidebar-link'>
                            <span>Bringup Report</span>
                            @endif
                        </a>
                    </li>{{-- 5th submenu end --}}
                    @if(request()->path()== "file-progress-report"){{-- 6th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('file-progress-report')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">File
                                Progress Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('file-progress-report')}}" class='sidebar-link'>
                            <span>File Progress Report</span>
                            @endif
                        </a>
                    </li>{{--6th submenu end  --}}
                    @if(request()->path()== "file-status-summary"){{-- 7th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('file-status-summary')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">File
                                Status Report Summary</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('file-status-summary')}}" class='sidebar-link'>
                            <span>File Status Report Summary</span>
                            @endif
                        </a>
                    </li>{{-- 7th submenu end --}}
                    @if(request()->path()== "client-monthly-file-status"){{-- 8th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('client-monthly-file-status')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Monthly File Status Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('client-monthly-file-status')}}" class='sidebar-link'>
                            <span>Monthly File Status Report</span>
                            @endif
                        </a>
                    </li>{{-- 8th submenu end --}}
                    @if(request()->path()== "staff-monthly-status-report"){{-- 9th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('staff-monthly-status-report')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Monthly Staff Status Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('staff-monthly-status-report')}}" class='sidebar-link'>
                            <span>Monthly Staff Status Report</span>
                            @endif
                        </a>
                    </li>{{-- 9th submenu end --}}
                    @if(request()->path()== "diary-management"){{-- 10th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('diary-management')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Diary
                                Management</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('diary-management')}}" class='sidebar-link'>
                            <span>Diary Management</span>
                            @endif
                        </a>
                    </li>{{-- 10th submenu end --}}
                    @if(request()->path()== "work-flow"){{-- 11th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('work-flow')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Workflow Management</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('work-flow')}}" class='sidebar-link'>
                            <span>Workflow Management</span>
                            @endif
                        </a>
                    </li>{{-- 11th submenu end --}}
                    @if(request()->path()== "template-category"){{-- 12th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('template-category')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Document Templates</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('template-category')}}" class='sidebar-link'>
                            <span>Document Templates</span>
                            @endif
                        </a>
                    </li>{{-- 12th submenu end --}}
                    @if(request()->path()== "document-manager"){{-- 13th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('document-manager')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Document Manager(DMS)</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('document-manager')}}" class='sidebar-link'>
                            <span>Document Manager(DMS)</span>
                            @endif
                        </a>
                    </li>{{-- 13th submenu end --}}
                    @if(request()->path()== "file_instruction"){{-- 14th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('file_instruction')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">File
                                Instructions</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('file_instruction')}}" class='sidebar-link'>
                            <span>File Instructions</span>
                            @endif
                        </a>
                    </li>{{-- 14th submenu end --}}
                    @if(request()->path()== "office_instructions"){{-- 15th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('office_instructions')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Office Instructions</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('office_instructions')}}" class='sidebar-link'>
                            <span>Office Instructions</span>
                            @endif
                        </a>
                    </li>{{-- 15th submenu end --}}
                    @if(request()->path()== "instructions_report"){{-- 16th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('instructions_report')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Instructions Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('instructions_report')}}" class='sidebar-link'>
                            <span>Instructions Report</span>
                            @endif
                        </a>
                    </li>{{-- 16th submenu end --}}
                    @if(request()->path()== "file-report"){{-- 17th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('file-report')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">File
                                Reports</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('file-report')}}" class='sidebar-link'>
                            <span>File Reports</span>
                            @endif
                        </a>
                    </li>{{-- 17th submenu end --}}
                    @if(request()->path()== "file-opened-report"){{-- 18th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('file-opened-report')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Files
                                Opened Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('file-opened-report')}}" class='sidebar-link'>
                            <span>Files Opened Report</span>
                            @endif
                        </a>
                    </li>{{-- 18th submenu end --}}
                    @if(request()->path()== "file-closed-report"){{-- 19th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('file-closed-report')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Files
                                Closed Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('file-closed-report')}}" class='sidebar-link'>
                            <span>Files Closed Report</span>
                            @endif
                        </a>
                    </li>{{-- 19th submenu end --}}
                    @if(request()->path()== "file-pending") {{-- 20th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('file-pending')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Files
                                Pending Closure</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('file-pending')}}" class='sidebar-link'>
                            <span>Files Pending Closure</span>
                            @endif
                        </a>
                    </li>{{-- 20th submenu end --}}
                    @if(request()->path()== "file-pending-approval"){{-- 21st  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('file-pending-approval')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Files
                                Pending Approval</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('file-pending-approval')}}" class='sidebar-link'>
                            <span>Files Pending Approval</span>
                            @endif
                        </a>
                    </li>{{-- 21st submenu end --}}
                    @if(request()->path()== "instructions-past"){{-- 22nd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('instructions-past')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Instructions Past TAT</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('instructions-past')}}" class='sidebar-link'>
                            <span>Instructions Past TAT</span>
                            @endif
                        </a>
                    </li>{{-- 22nd submenu end --}}
                    @if(request()->path()== "file_managementindex"){{-- 23rd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('file_managementindex')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Unallocated Files Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('file_managementindex')}}" class='sidebar-link'>
                            <span>Unallocated Files Report</span>
                            @endif
                        </a>
                    </li>{{-- 23rd submenu end --}}
                    @if(request()->path()== "Safe_management"){{-- 24th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('Safe_management')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Safe
                                Manangement</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('Safe_management')}}" class='sidebar-link'>
                            <span>Safe Manangement</span>
                            @endif
                        </a>
                    </li>{{-- 24th submenu end --}}
                    @if(request()->path()== "Request_staff_item"){{-- 25th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('Request_staff_item')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Request Safe Item</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('Request_staff_item')}}" class='sidebar-link'>
                            <span>Request Safe Item</span>
                            @endif
                        </a>
                    </li>{{-- 25th submenu end --}}
                    @if(request()->path()== "Process_Request"){{-- 26th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('Process_Request')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Process Request</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('Process_Request')}}" class='sidebar-link'>
                            <span>Process Request</span>
                            @endif
                        </a>
                    </li>{{-- 26th submenu end --}}
                    @if(request()->path()== "outgoing-letters"){{-- 27th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('outgoing-letters')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Outgoing Letters</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('outgoing-letters')}}" class='sidebar-link'>
                            <span>Outgoing Letters</span>
                            @endif
                        </a>
                    </li>{{-- 27th submenu end --}}
                    @if(request()->path()== "incomming-letters"){{-- 28th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('incomming-letters')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Incoming Letters</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('incomming-letters')}}" class='sidebar-link'>
                            <span>Incoming Letters</span>
                            @endif
                        </a>
                    </li>{{-- 28th submenu end --}}
                    {{--@if(request()->path()== "incomming-letters") 29th  submenu start
                            <li class="submenu-item " >
                                <a href="{{url('incomming-letters')}}"
                    class='sidebar-link'style="background-color:#1D1D50 ; color:white;">
                    <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Incoming
                        Letters</span>
                    @else
                    <li class="submenu-item ">
                        <a href="{{url('incomming-letters')}}" class='sidebar-link'>
                            <span>Incoming Letters</span>
                            @endif
                        </a>
                    </li> 29thsubmenuend --}}
                    @if(request()->path()== "safe-register-report"){{-- 30th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('safe-register-report')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Safe
                                Register Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('safe-register-report')}}" class='sidebar-link'>
                            <span>Safe Register Report</span>
                            @endif
                        </a>
                    </li>{{-- 30th submenu end --}}
                    @if(request()->path()== "safe-item-request"){{-- 31st  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('safe-item-request')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Safe
                                Item Request Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('safe-item-request')}}" class='sidebar-link'>
                            <span>Safe Item Request Report</span>
                            @endif
                        </a>
                    </li>{{-- 31st submenu end --}}
                </ul>
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
        <li class="sidebar-item  has-sub">{{-- Sixth menu --}}
            <a href="#" class='sidebar-link'>
                <i id="icon" class="fas fa-database" style="font-weight: 300;"></i>
                <span style="margin-left: 1rem;">Store & Inventory</span>
            </a>
            @php
            $admin = array("stock_list", "add_categories", "manage_items", "request_item", "item_movement", "re_order");
            @endphp
            @if (in_array(request()->path(), $admin))
            <ul class="submenu" style="display: block;">
                @else
                <ul class="submenu" style="display: none;">
                    @endif
                    @if(request()->path()== "stock_list"){{-- 1st  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('stock_list')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Stock
                                List</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('stock_list')}}" class='sidebar-link'>
                            <span>Stock List</span>
                            @endif
                        </a>
                    </li>{{-- 1st submenu end --}}
                    @if(request()->path()== "add_categories"){{-- 2nd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('add_categories')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Manage Categories</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('add_categories')}}" class='sidebar-link'>
                            <span>Manage Categories</span>
                            @endif
                        </a>
                    </li>{{-- 2nd submenu end --}}
                    @if(request()->path()== "manage_items"){{-- 3rd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('manage_items')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Manage Items</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('manage_items')}}" class='sidebar-link'>
                            <span>Manage Items</span>
                            @endif
                        </a>
                    </li>{{--  3rd submenu end --}}
                    @if(request()->path()== "request_item"){{-- 4th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('request_item')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">View
                                Request</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('request_item')}}" class='sidebar-link'>
                            <span>View Request</span>
                            @endif
                        </a>
                    </li>{{-- 4th submenu end --}}
                    @if(request()->path()== "item_movement"){{-- 5th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('item_movement')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Item
                                Movement Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('item_movement')}}" class='sidebar-link'>
                            <span>>Item Movement Report</span>
                            @endif
                        </a>
                    </li>{{-- 5th submenu end --}}
                    @if(request()->path()== "re_order"){{-- 6th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('re_order')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Re-order Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('re_order')}}" class='sidebar-link'>
                            <span>>Re-order Report</span>
                            @endif
                        </a>
                    </li>{{-- 6th submenu end --}}
                </ul>
        </li>
        <li class="sidebar-item  has-sub">{{-- Seventh menu --}}
            <a href="#" class='sidebar-link'>
                <i id="icon" class="far fa-clipboard" style="font-weight: 300;"></i>
                <span style="margin-left: 1rem;">Procurement</span>
            </a>
            @php
            $admin = array("purchase_order/".Auth::user()->company_id, "purchase_order_report", "supplier");
            @endphp
            @if (in_array(request()->path(), $admin))
            <ul class="submenu" style="display: block;">
                @else
                <ul class="submenu" style="display: none;">
                    @endif
                    @if(request()->path()== "purchase_order/".Auth::user()->company_id){{-- 1st  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('purchase_order/'.Auth::user()->company_id)}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">New
                                Purchase Orders</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('purchase_order/'.Auth::user()->company_id)}}" class='sidebar-link'>
                            <span>New Purchase Orders</span>
                            @endif
                        </a>
                    </li>{{-- 1st submenu end --}}
                    @if(request()->path()==
                    "purchase_order_report/".Auth::user()->company_id){{-- 2nd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('purchase_order_report/'.Auth::user()->company_id)}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Purchase Orders reports</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('purchase_order_report/'.Auth::user()->company_id)}}" class='sidebar-link'>
                            <span>Purchase Orders reports</span>
                            @endif
                        </a>
                    </li>{{-- 2nd submenu end --}}
                    @if(request()->path()== "supplier/".Auth::user()->company_id){{-- 3rd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('supplier/'.Auth::user()->company_id)}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Supplier</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('supplier/'.Auth::user()->company_id)}}" class='sidebar-link'>
                            <span>Supplier</span>
                            @endif
                        </a>
                    </li>{{-- 3rd submenu end --}}
                </ul>
        </li>
        <li class="sidebar-item  has-sub">{{--  Eighth menu --}}
            <a href="#" class='sidebar-link'>
                <i id="icon" class="fa fa-bar-chart" style="font-weight: 300;"></i>
                <span style="margin-left: 1rem;">Practice Management</span>
            </a>
            @php
            $admin = array("family_law", "personal_injury", "general_practice", "estate_plan", "real_estate",
            "criminal_law", "civil_litigation", "business_law", "guardianship_law", "probate_law",
            "workers_compensation", "practice_area");
            @endphp
            @if (in_array(request()->path(), $admin))
            <ul class="submenu" style="display: block;">
                @else
                <ul class="submenu" style="display: none;">
                    @endif
                    @if(request()->path()== "family_law"){{-- 1st  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('family_law')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Family Law</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('family_law')}}" class='sidebar-link'>
                            <span>Family Law</span>
                            @endif
                        </a>
                    </li>{{-- 1st submenu end --}}
                    @if(request()->path()== "personal_injury"){{-- 2nd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('personal_injury')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Personal Injury</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('personal_injury')}}" class='sidebar-link'>
                            <span>Personal Injury</span>
                            @endif
                        </a>
                    </li>{{-- 2nd submenu end --}}
                    @if(request()->path()== "general_practice"){{--  3rd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('general_practice')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">General Practice</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('general_practice')}}" class='sidebar-link'>
                            <span>General Practice</span>
                            @endif
                        </a>
                    </li>{{-- 3rd submenu end --}}
                    @if(request()->path()== "estate_plan"){{-- 4th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('estate_plan')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Estate Planning</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('estate_plan')}}" class='sidebar-link'>
                            <span>Estate Planning</span>
                            @endif
                        </a>
                    </li>{{-- 4th submenu end --}}
                    @if(request()->path()== "real_estate"){{-- 5th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('real_estate')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Real
                                Estate</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('real_estate')}}" class='sidebar-link'>
                            <span>Real Estate</span>
                            @endif
                        </a>
                    </li>{{-- 5th submenu end --}}
                    @if(request()->path()== "criminal_law"){{-- 6th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('criminal_law')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Criminal Law</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('criminal_law')}}" class='sidebar-link'>
                            <span>Criminal Law</span>
                            @endif
                        </a>
                    </li>{{-- 6th submenu end --}}
                    @if(request()->path()== "civil_litigation"){{-- 7th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('civil_litigation')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Civil
                                Litigation</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('civil_litigation')}}" class='sidebar-link'>
                            <span>Civil Litigation</span>
                            @endif
                        </a>
                    </li>{{-- 7th submenu end --}}
                    @if(request()->path()== "business_law"){{-- 8th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('business_law')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Businesss Law</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('business_law')}}" class='sidebar-link'>
                            <span>Businesss Law</span>
                            @endif
                        </a>
                    </li>{{-- 8th submenu end --}}
                    @if(request()->path()== "guardianship_law"){{-- 9th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('guardianship_law')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Guardianship Law</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('guardianship_law')}}" class='sidebar-link'>
                            <span>Guardianship Law</span>
                            @endif
                        </a>
                    </li>{{-- 9th submenu end --}}
                    @if(request()->path()== "probate_law"){{-- 10th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('probate_law')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Probate Law</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('probate_law')}}" class='sidebar-link'>
                            <span>Probate Law</span>
                            @endif
                        </a>
                    </li>{{-- 10th submenu end --}}
                    @if(request()->path()== "workers_compensation"){{-- 11th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('workers_compensation')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Workers Compensation</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('workers_compensation')}}" class='sidebar-link'>
                            <span>Workers Compensation</span>
                            @endif
                        </a>
                    </li>{{-- 11th submenu end --}}
                    @if(request()->path()== "practice_area"){{-- 12th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('practice_area')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Practice Area</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('practice_area')}}" class='sidebar-link'>
                            <span>Practice Area</span>
                            @endif
                        </a>
                    </li>{{-- 12th submenu end --}}
                </ul>
        </li>
        <li class="sidebar-item  has-sub">{{-- Nineth menu --}}
            <a href="#" class='sidebar-link'>
                <i id="icon" class="fa fa-book" style="font-weight: 300;"></i>
                <span style="margin-left: 1rem;">E- Library</span>
            </a>
            @php
            $admin = array("subject_category/".Auth::user()->company_id, "subject", "file", "precedence", "site");
            @endphp
            @if (in_array(request()->path(), $admin))
            <ul class="submenu" style="display: block;">
                @else
                <ul class="submenu" style="display: none;">
                    @endif
                    @if(request()->path()== "subject_category/".Auth::user()->company_id){{-- 1st  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('subject_category/'.Auth::user()->company_id)}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Book
                                Category</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('subject_category/'.Auth::user()->company_id)}}" class='sidebar-link'>
                            <span>Book Category</span>
                            @endif
                        </a>
                    </li>{{-- 1st submenu end --}}
                    @if(request()->path()== "subject/".Auth::user()->company_id){{-- 2nd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('subject/'.Auth::user()->company_id)}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Subject</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('subject/'.Auth::user()->company_id)}}" class='sidebar-link'>
                            <span>Subject</span>
                            @endif
                        </a>
                    </li>{{-- 2nd submenu end --}}
                    @if(request()->path()== "file/".Auth::user()->company_id){{-- 3rd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('file/'.Auth::user()->company_id)}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">File</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('file/'.Auth::user()->company_id)}}" class='sidebar-link'>
                            <span>File</span>
                            @endif
                        </a>
                    </li>{{-- 3rd submenu end --}}
                    @if(request()->path()== "precedence/".Auth::user()->company_id){{-- 4th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('precedence/'.Auth::user()->company_id)}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Precedence Register</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('precedence/'.Auth::user()->company_id)}}" class='sidebar-link'>
                            <span>Precedence Register</span>
                            @endif
                        </a>
                    </li>{{-- 4th submenu end --}}
                    @if(request()->path()== "site/".Auth::user()->company_id){{-- 5th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('site/'.Auth::user()->company_id)}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Legal
                                Sites</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('site/'.Auth::user()->company_id)}}" class='sidebar-link'>
                            <span>Legal Sites</span>
                            @endif
                        </a>
                    </li> {{-- 5th submenu end --}}
                </ul>
        </li>
        <li class="sidebar-item  has-sub">{{-- Tenth menu --}}
            <a href="#" class='sidebar-link'>
                <i id="icon" class="fa fa-handshake-o" style="font-weight: 300;"></i>
                <span style="margin-left: 1rem;">Tender Management</span>
            </a>
            @php
            $admin = array("tender_details", "apply_tender", "tender_applied_details");
            @endphp
            @if (in_array(request()->path(), $admin))
            <ul class="submenu" style="display: block;">
                @else
                <ul class="submenu" style="display: none;">
                    @endif
                    @if(request()->path()== "tender_details"){{-- 1st  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('tender_details')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Tender Details</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('tender_details')}}" class='sidebar-link'>
                            <span>Tender Details</span>
                            @endif
                        </a>
                    </li>{{-- 1st submenu end --}}
                    @if(request()->path()== "apply_tender"){{-- 2nd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('apply_tender')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Apply
                                Tender</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('apply_tender')}}" class='sidebar-link'>
                            <span>Apply Tender</span>
                            @endif
                        </a>
                    </li>{{-- 1st submenu end --}}
                    @if(request()->path()== "tender_applied_details"){{-- 3rd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('tender_applied_details')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Tender Applied Details</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('tender_applied_details')}}" class='sidebar-link'>
                            <span>Tender Applied Details</span>
                            @endif
                        </a>
                    </li>{{-- 3rd submenu end --}}
                </ul>
        </li>
        <li class="sidebar-item  has-sub">{{-- Eleventh menu --}}
            <a href="#" class='sidebar-link'>
                <i id="icon" class="fa fa-briefcase" style="font-weight: 300;"></i>
                <span style="margin-left: 1rem;">Office Administration</span>
            </a>
            @php
            $admin = array("creditor_list", "creditors_aging_report", "supplier_expense_report", "pay_supplier_invoice",
            "supplier_credit_notes", "supplier_invoice", "supplier_monthly_schedule", "suppliers_list", "balance",
            "cheque", "file_office", "Payment", "budget", "contractual_supplier", "payments_transfer", "payment_report",
            "petty_payment", "petty_report", "settled_fee", "settlement_report", "undeposited_fund");
            @endphp
            @if (in_array(request()->path(), $admin))
            <ul class="submenu" style="display: block;">
                @else
                <ul class="submenu" style="display: none;">
                    @endif
                    @if(request()->path()== "creditor_list"){{-- 1st  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('creditor_list')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Creditor List</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('creditor_list')}}" class='sidebar-link'>
                            <span>Creditor List</span>
                            @endif
                        </a>
                    </li>{{-- 1st submenu end --}}
                    @if(request()->path()== "creditors_aging_report"){{-- 2nd submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('creditors_aging_report')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Creditors Aging Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('creditors_aging_report')}}" class='sidebar-link'>
                            <span>Creditors Aging Report</span>
                            @endif
                        </a>
                    </li>{{-- 2nd submenu end --}}
                    @if(request()->path()== "supplier_expense_report"){{-- 3rd submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('supplier_expense_report')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Supplier Expense Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('supplier_expense_report')}}" class='sidebar-link'>
                            <span>Supplier Expense Report</span>
                            @endif
                        </a>
                    </li>{{-- 3rd submenu end --}}
                    @if(request()->path()== "pay_supplier_invoice"){{-- 4th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('pay_supplier_invoice')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Pay
                                Supplier Invoice</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('pay_supplier_invoice')}}" class='sidebar-link'>
                            <span>Pay Supplier Invoice</span>
                            @endif
                        </a>
                    </li>{{-- 4th submenu end --}}
                    @if(request()->path()== "supplier_credit_notes"){{-- 5th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('supplier_credit_notes')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Supplier Credit Notes</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('supplier_credit_notes')}}" class='sidebar-link'>
                            <span>Supplier Credit Notes</span>
                            @endif
                        </a>
                    </li>{{--5th submenu end  --}}
                    @if(request()->path()== "supplier_invoice"){{-- 6th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('supplier_invoice')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Supplier Invoice</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('supplier_invoice')}}" class='sidebar-link'>
                            <span>Supplier Invoice</span>
                            @endif
                        </a>
                    </li>{{-- 6th submenu end --}}
                    @if(request()->path()== "supplier_monthly_schedule"){{-- 7th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('supplier_monthly_schedule')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Supplier Monthly Schedule</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('supplier_monthly_schedule')}}" class='sidebar-link'>
                            <span>Supplier Monthly Schedule</span>
                            @endif
                        </a>
                    </li>{{-- 7th submenu end --}}
                    @if(request()->path()== "suppliers_list"){{-- 8th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('suppliers_list')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Supplier List</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('suppliers_list')}}" class='sidebar-link'>
                            <span>Supplier List</span>
                            @endif
                        </a>
                    </li>{{-- 8th submenu end --}}
                    @if(request()->path()== "balance"){{-- 9th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('balance')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Balance on Client Trust</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('balance')}}" class='sidebar-link'>
                            <span>Balance on Client Trust</span>
                            @endif
                        </a>
                    </li>{{-- 9th submenu end --}}
                    @if(request()->path()== "cheque"){{-- 10th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('cheque')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Cheque Cancellation</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('cheque')}}" class='sidebar-link'>
                            <span>Cheque Cancellation</span>
                            @endif
                        </a>
                    </li>{{-- 10th submenu end --}}
                    @if(request()->path()== "file_office"){{-- 11th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('file_office')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">File
                                - Office Journals</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('file_office')}}" class='sidebar-link'>
                            <span>File - Office Journals</span>
                            @endif
                        </a>
                    </li>{{-- 11th submenu end --}}
                    @if(request()->path()== "Payment"){{-- 12th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('Payment')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">File
                                Payments & Transfer</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('Payment')}}" class='sidebar-link'>
                            <span>File Payments & Transfer</span>
                            @endif
                        </a>
                    </li>{{-- 12th submenu end --}}
                    @if(request()->path()== "budget"){{-- 13th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('budget')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Monthly Budget planner</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('budget')}}" class='sidebar-link'>
                            <span>Monthly Budget planner</span>
                            @endif
                        </a>
                    </li>{{-- 13th submenu end --}}
                    @if(request()->path()== "contractual_supplier"){{-- 14th submenu start --}}
                    <li class="submenu-item " style="background-color:#1D1D50 ; color:white;">
                        <a href="{{url('contractual_supplier')}}" class='sidebar-link'>
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Non-Contractual Suppliers Voucher</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('contractual_supplier')}}" class='sidebar-link'>
                            <span>Non-Contractual Suppliers Voucher</span>
                            @endif
                        </a>
                    </li>{{-- 14th submenu end --}}
                    @if(request()->path()== "payments_transfer"){{-- 15th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('payments_transfer')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Office Payments Transfers</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('payments_transfer')}}" class='sidebar-link'>
                            <span>Office Payments Transfers</span>
                            @endif
                        </a>
                    </li>{{-- 15th submenu end --}}
                    @if(request()->path()== "payment_report"){{-- 16th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('payment_report')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Payment Reports</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('payment_report')}}" class='sidebar-link'>
                            <span>Payment Reports</span>
                            @endif
                        </a>
                    </li>{{-- 16th submenu end --}}
                    @if(request()->path()== "petty_payment"){{-- 17th submenu start --}}
                    <li class="submenu-item " style="background-color:#1D1D50 ; color:white;">
                        <a href="{{url('petty_payment')}}" class='sidebar-link'>
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Petty
                                Cash Payments</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('petty_payment')}}" class='sidebar-link'>
                            <span>Petty Cash Payments</span>
                            @endif
                        </a>
                    </li>{{--  17th submenu end --}}
                    @if(request()->path()== "petty_report"){{-- 18th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('petty_report')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Petty
                                Cash Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('petty_report')}}" class='sidebar-link'>
                            <span>Petty Cash Report</span>
                            @endif
                        </a>
                    </li>{{-- 18th submenu end --}}
                    @if(request()->path()== "settled_fee"){{-- 19th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('settled_fee')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Settled Paid Legal Fees</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('settled_fee')}}" class='sidebar-link'>
                            <span>Settled Paid Legal Fees</span>
                            @endif
                        </a>
                    </li>{{-- 19th submenu end --}}
                    @if(request()->path()== "settlement_report"){{-- 20th submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('settlement_report')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Settlement Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('settlement_report')}}" class='sidebar-link'>
                            <span>Settlement Report</span>
                            @endif
                        </a>
                    </li>{{-- 20th submenu end --}}
                    @if(request()->path()== "undeposited_fund"){{-- 21st submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('undeposited_fund')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Undeposited Funds Report</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('undeposited_fund')}}" class='sidebar-link'>
                            <span>Undeposited Funds Report</span>
                            @endif
                        </a>
                    </li>{{-- 21st submenu end --}}
                </ul>
        </li>
        <li class="sidebar-item  has-sub">{{-- Twelveth menu --}}
            <a href="#" class='sidebar-link'>
                <i id="icon" class="fa fa-address-book-o" style="font-weight: 300;"></i>
                <span style="margin-left: 1rem;">CRM</span>
            </a>
            @php
            $admin = array("Corporate", "view-registration", "lead", "follow-up", "Quotation", "manage_tasks",
            "projects", "expense", "crm_panel");
            @endphp
            @if (in_array(request()->path(), $admin))
            <ul class="submenu" style="display: block;">
                @else
                <ul class="submenu" style="display: none;">
                    @endif
                    @if(request()->path()== "Corporate"){{-- 1st  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('Corporate')}}" class='sidebar-link'
                            tyle="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Corporate Customers</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('Corporate')}}" class='sidebar-link'>
                            <span>Corporate Customers</span>
                            @endif
                        </a>
                    </li>{{-- 1st submenu end --}}
                    @if(request()->path()== "view-registration"){{-- 2nd  submenu start --}}
                    <li class="submenu-item " s>
                        <a href="{{url('view-registration')}}" class='sidebar-link'
                            tyle="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Individual Customers</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('view-registration')}}" class='sidebar-link'>
                            <span>Individual Customers</span>
                            @endif
                        </a>
                    </li>{{-- 2nd submenu end --}}
                    @if(request()->path()== "lead"){{-- 3rd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('lead')}}" class='sidebar-link' style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Leads</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('lead')}}" class='sidebar-link'>
                            <span>Leads</span>
                            @endif
                        </a>
                    </li>{{-- 3rd submenu end --}}
                    @if(request()->path()== "follow-up"){{-- 4th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('follow-up')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Client Follow Up</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('follow-up')}}" class='sidebar-link'>
                            <span>Client Follow Up</span>
                            @endif
                        </a>
                    </li>{{-- 4th submenu end --}}
                    @if(request()->path()== "Quotation"){{-- 5th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('Quotation')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Client Quotation</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('Quotation')}}" class='sidebar-link'>
                            <span>Client Quotation</span>
                            @endif
                        </a>
                    </li>{{-- 5th submenu end --}}
                    @if(request()->path()== "manage_tasks"){{-- 6th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('manage_tasks')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Manage Tasks</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('manage_tasks')}}" class='sidebar-link'>
                            <span>Manage Tasks</span>
                            @endif
                        </a>
                    </li>{{-- 6th submenu end --}}
                    @if(request()->path()== "projects"){{-- 7th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('projects')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Projects</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('projects')}}" class='sidebar-link'>
                            <span>Projects</span>
                            @endif
                        </a>
                    </li>{{-- 7th submenu end --}}
                    @if(request()->path()== "expense"){{-- 8th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('expense')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Expense Reports</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('expense')}}" class='sidebar-link'>
                            <span>Expense Reports</span>
                            @endif
                        </a>
                    </li>{{-- 8th submenu end --}}
                    @if(request()->path()== "crm_panel"){{-- 9th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('crm_panel')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">CRM
                                Panel</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('crm_panel')}}" class='sidebar-link'>
                            <span>CRM Panel</span>
                            @endif
                        </a>
                    </li>{{-- 9th submenu end --}}
                </ul>
        </li>
        <li class="sidebar-item  has-sub">{{-- Thirteenth menu --}}
            <a href="#" class='sidebar-link'>
                <i id="icon" class="fa fa-gear" style="font-weight: 300;"></i>
                <span style="margin-left: 1rem;">System Setup</span>
            </a>
            @php
            $admin = array("company_details", "weekend_holiday", "other_confgn", "file_types", "invoice_items",
            "currency_list", "database_backup", "Transport_zones", "billable_activities", "bank_details",
            "leave_days_year", "hourly_rates", "partner_revenue_share", "menu_access_configuration", "useful_links");
            @endphp
            @if (in_array(request()->path(), $admin))
            <ul class="submenu" style="display: block;">
                @else
                <ul class="submenu" style="display: none;">
                    @endif
                    @if(request()->path()== "company_details"){{-- 1st  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('company_details')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Company</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('company_details')}}" class='sidebar-link'>
                            <span>Company</span>
                            @endif
                        </a>
                    </li>{{-- 1st submenu end --}}
                    @if(request()->path()== "weekend_holiday"){{-- 2nd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('weekend_holiday')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Weekends and Holidays</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('weekend_holiday')}}" class='sidebar-link'>
                            <span>Weekends and Holidays</span>
                            @endif
                        </a>
                    </li>{{-- 2nd submenu end --}}
                    @if(request()->path()== "other_confgn"){{-- 3rd  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('other_confgn')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Other
                                Configurations</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('other_confgn')}}" class='sidebar-link'>
                            <span>Other Configurations</span>
                            @endif
                        </a>
                    </li>{{-- 3rd submenu end --}}
                    @if(request()->path()== "file_types"){{-- 4th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('file_types')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">File
                                Types</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('file_types')}}" class='sidebar-link'>
                            <span>File Types</span>
                            @endif
                        </a>
                    </li>{{-- 4th submenu end --}}
                    @if(request()->path()== "invoice_items"){{-- 5th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('invoice_items')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Invoice Items</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('invoice_items')}}" class='sidebar-link'>
                            <span>Invoice Items</span>
                            @endif
                        </a>
                    </li>{{-- 5th submenu end --}}
                    @if(request()->path()== "currency_list"){{-- 6th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('currency_list')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Currency List</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('currency_list')}}" class='sidebar-link'>
                            <span>Currency List</span>
                            @endif
                        </a>
                    </li>{{-- 6th submenu end --}}
                    @if(request()->path()== "database_backup"){{-- 7th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('database_backup')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Database Backup</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('database_backup')}}" class='sidebar-link'>
                            <span>Database Backup</span>
                            @endif
                        </a>
                    </li>{{-- 7th submenu end --}}
                    @if(request()->path()== "Transport_zones"){{-- 8th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('Transport_zones')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Transport Zones</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('Transport_zones')}}" class='sidebar-link'>
                            <span>Transport Zones</span>
                            @endif
                        </a>
                    </li>{{-- 8th submenu end --}}
                    @if(request()->path()== "billable_activities"){{-- 9th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('billable_activities')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Billable Activities</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('billable_activities')}}" class='sidebar-link'>
                            <span>Billable Activities</span>
                            @endif
                        </a>
                    </li>{{-- 9th submenu end --}}
                    @if(request()->path()== "bank_details"){{-- 10th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('bank_details')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Bank
                                Account Details</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('bank_details')}}" class='sidebar-link'>
                            <span>Bank Account Details</span>
                            @endif
                        </a>
                    </li>{{-- 10th submenu end --}}
                    @if(request()->path()== "leave_days_year"){{-- 11th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('leave_days_year')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Leave
                                Days Per Year</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('leave_days_year')}}" class='sidebar-link'>
                            <span>Leave Days Per Year</span>
                            @endif
                        </a>
                    </li>{{-- 11th submenu end --}}
                    @if(request()->path()== "hourly_rates"){{-- 12th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('hourly_rates')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Hourly Rates</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('hourly_rates')}}" class='sidebar-link'>
                            <span>Hourly Rates</span>
                            @endif
                        </a>
                    </li>{{-- 12th submenu end --}}
                    @if(request()->path()== "menu_access_configuration"){{-- 13th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('menu_access_configuration')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Menu
                                Access Configuration</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('menu_access_configuration')}}" class='sidebar-link'>
                            <span>Menu Access Configuration</span>
                            @endif
                        </a>
                    </li>{{-- 13th submenu end --}}
                    @if(request()->path()== "useful_links"){{-- 14th  submenu start --}}
                    <li class="submenu-item ">
                        <a href="{{url('useful_links')}}" class='sidebar-link'
                            style="background-color:#1D1D50 ; color:white;">
                            <span style="margin-left:0px;font-align:center;">●</span><span
                                style="margin-left:5px">Useful Link</span>
                            @else
                    <li class="submenu-item ">
                        <a href="{{url('useful_links')}}" class='sidebar-link'>
                            <span>Useful Link</span>
                            @endif
                        </a>
                    </li>{{-- 14th submenu end --}}
                </ul>
        </li>
        @endif
    </ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>