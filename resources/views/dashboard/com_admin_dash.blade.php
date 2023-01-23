@extends('layouts.hmsmain')
@section('content')
<li class="sidebar-item  has-sub">// first menu
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
<li class="sidebar-item  has-sub">// second menu
    <a href="#" class='sidebar-link'>
        <i id="icon" class="fa fa-university"  style="font-weight: 300;"></i>
            <span>Client Management</span>
    </a>
    @php
        $admin = array("manage_user_account", "change_user_password", "manage_user_roles", "view_roles_per_user", "manage_user_group", "manage_user_department", "manage_towns");
    @endphp
    @if (in_array(request()->path(), $admin))
        <ul class="submenu" style="display: block;">
        @else
            <ul class="submenu" style="display: none;">
    @endif
        @if(request()->path()== "manage_user_account")// first submenu start
            <li class="submenu-item ">
                <a href="{{url('manage_user_account')}}" class='sidebar-link'>
                    <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Manage Accounts</span>
            @else
            <li class="submenu-item ">
                <a href="{{url('manage_user_account')}}" class='sidebar-link'>
                    <span>Manage Accounts</span>
        @endif
                </a>
            </li>//first submenu end
        @if(request()->path()== "change_user_password")// second submenu start
            <li class="submenu-item ">
                <a href="{{url('change_user_password')}}" class='sidebar-link'>
                    <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Change Password</span>
            @else
            <li class="submenu-item ">
                <a href="{{url('change_user_password')}}" class='sidebar-link'>
                    <span>Manage Accounts</span>
        @endif
                </a>
            </li>//second submenu end
        @if(request()->path()== "change_user_password")// 3rd submenu start
            <li class="submenu-item ">
                <a href="{{url('change_user_password')}}" class='sidebar-link'>
                    <span  style="margin-left:0px;font-align:center;">●</span><span style="margin-left:5px">Change Password</span>
        @else
            <li class="submenu-item ">
                <a href="{{url('change_user_password')}}" class='sidebar-link'>
                    <span>Manage Accounts</span>
        @endif
                </a>
            </li>//3rd submenu end            
    </ul>
</li>