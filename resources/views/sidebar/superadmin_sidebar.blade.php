    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo"class="logo" style="background-color:#dfc79d; border-radius:100% 100% 100% 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19); height:125px;width:125px; margin-left:25px; background:  #d0d3cd50 -webkit-linear-gradient(left,  #ffffff15, rgb(255, 255, 255)) repeat 0 0 / 200px;
                animation: sweep 5.5s ease-in-out infinite;animation-direction:reverse;">
                    <a href="{{url('superadminhome')}}">
                    <img id="cr_logo" src="{{asset('/') }}assets//images/Logo cra.png" alt="CRA" style="margin-top:16px;">
                </a>
                </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div id="demo" class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title" style="color: #1D1D50; text-align:center; font-size:16px; ">DASHBOARD<br><span style="font-size:14px;">Super Admin </span>
            </li>
                @if(Auth::user()->role == '1')
                {{-- Management company start --}}
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i id="icon" class="fa-regular fa-user"  style="font-weight: 300;"></i>
                            <span>Management company</span>
                    </a>
                    @php
                        $admin = array("company_list", "Add_company",);
                    @endphp
                    @if (in_array(request()->path(), $admin))
                        <ul class="submenu" style="display: block;">
                        @else
                            <ul class="submenu" style="display: none;">
                    @endif
                    @if (request()->path() == 'company_list')
                        <li class="submenu-item " >
                            <a href="{{url('company_list')}}" class='sidebar-link' style="background-color: #1D1D50;color:white;">
                                </span><span> Company List</span>
                    @else
                        <li class="submenu-item " >
                            <a href="{{url('company_list')}}" class='sidebar-link'>
                                <span>Company List</span>
                    @endif
                            </a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{url('Add_company')}}" class='sidebar-link'>
                                <span>Add Company</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Management company end --}}
                {{-- super admin setup start --}}
                <li class="sidebar-item  ">
                    <a href="{{url('superadminhome')}}" class='sidebar-link'>
                        <i id="icon" class="fa-regular fa-user"  style="font-weight: 300;"></i>
                            <span>SuperAdmin setup</span>
                    </a>
                    @php
                        $admin = array("usermanagement", "adddepartments","add_labdept","add_surgery_types","adddepartmentadmin","addroomstypes","addroomtypes","beds","Add_Ambulance_details");
                    @endphp
                    @if (in_array(request()->path(), $admin))
                        <ul class="submenu" style="display: block;">
                        @else
                            <ul class="submenu" style="display: none;">
                    @endif
                    </ul>
                </li>
                {{-- super admin setup end --}}
                @endif

        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>