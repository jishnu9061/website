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
                @if (request()->path() == 'company_list')
                <li class="sidebar-item ">
                    <a href="company_list" class='sidebar-link'style="background-color: #1D1D50;color:white;">
                        <i id="icon" class="fa-regular fa-user"  style="font-weight: 300;color:white;"></i>
                            <span style="padding-left: 20px">Manage company</span>
                @else
                <li class="sidebar-item ">
                    <a href="company_list" class='sidebar-link'>
                        <i id="icon" class="fa-regular fa-user"  style="font-weight: 300;"></i>
                            <span style="padding-left: 20px">Manage company</span>
                @endif
                    </a>
                </li>
                {{-- Management company end --}}
                {{-- super admin setup start --}}
                {{-- super admin setup end --}}
                @endif

        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>