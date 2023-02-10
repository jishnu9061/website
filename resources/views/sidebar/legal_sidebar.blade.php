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
            border-radius: 2rem;margin:0px 20px; ">Legal department </span>
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
    </ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>