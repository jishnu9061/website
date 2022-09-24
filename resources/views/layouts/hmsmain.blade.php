<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRA</title>

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/') }}assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/all.css">
    <link rel="stylesheet" href="{{asset('/') }}assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="{{asset('/') }}assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{asset('/') }}assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('/') }}assets/css/app.css">
    <link rel="stylesheet" href="{{asset('/') }}assets/css/customstyle.css">
    <link rel="shortcut icon" href="{{asset('/') }}assets/images/favicon.html" type="image/x-icon">
    <link rel="stylesheet"href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    {{-- vipin --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    {{-- vipin --}}


<!-- vinu -->

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

  
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  
  <link rel="stylesheet" href="{{asset('/') }}assets/css/sub.css">
  <link rel="stylesheet" href="{{asset('/') }}assets/css/c.css">

<!-- b -->
<style> #icon {
color: #1D1D50
} 

#subm {
                    color: #070344;
                }
                /* .sidebar-item .has sub .sidebar-link .fa-regular .fa-user {
                    color: #000;

                } */
               
              
</style>
    
</head>
<body>


 

 <!-- ======= Header ======= -->
 {{-- <header id="header" class="header fixed-top d-flex align-items-center"> --}}

<!-- <div class="d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <img class="cr_logo" src="assets/img/cr_logo.jpeg" alt="">
    <span class="d-none d-lg-block">CR</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div> -->
<!-- End Logo -->

{{-- <div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Search..." title="Enter search keyword">
    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
  </form>
</div><!-- End Search Bar --> --}}



{{-- <nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon--> --}}







{{-- 
    <li class="nav-item  pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <!-- <img src="add-icon--line-iconset--iconsmind-29.png" alt="Profile" class="rounded-circle"> -->
        <span class="d-none d-md-block dropdown-toggle ps-2">Quick Link</span>
      </a><!-- End Profile Iamge Icon -->

    
    </li><!-- End Profile Nav --> --}}

    
    {{-- <li class="nav-item  pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        {{-- <img src="add-icon--line-iconset--iconsmind-29.png" alt="Profile" class="rounded-circle"> --}}
        {{-- <span class="d-none d-md-block  ps-2">Addon</span>
      </a><!-- End Profile Iamge Icon --> --}}

    
    {{-- </li><!-- End Profile Nav --> --}}
    {{-- <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number">4</span>
      </a><!-- End Notification Icon -->

      

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <li class="dropdown-header">
          You have 4 new notifications
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-exclamation-circle text-warning"></i>
          <div>
            <h4>Lorem Ipsum</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>30 min. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-x-circle text-danger"></i>
          <div>
            <h4>Atque rerum nesciunt</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>1 hr. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-check-circle text-success"></i>
          <div>
            <h4>Sit rerum fuga</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>2 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-info-circle text-primary"></i>
          <div>
            <h4>Dicta reprehenderit</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>4 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="dropdown-footer">
          <a href="#">Show all notifications</a>
        </li>

      </ul><!-- End Notification Dropdown Items -->

    </li><!-- End Notification Nav -->

    <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-chat-left-text"></i>
        <span class="badge bg-success badge-number">3</span>
      </a><!-- End Messages Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
        <li class="dropdown-header">
          You have 3 new messages
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Maria Hudson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>4 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Anna Nelson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>6 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
            <div>
              <h4>David Muldon</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>8 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="dropdown-footer">
          <a href="#">Show all messages</a>
        </li>

      </ul><!-- End Messages Dropdown Items -->

    </li><!-- End Messages Nav -->

    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>Kevin Anderson</h6>
          <span>Web Designer</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
            <i class="bi bi-question-circle"></i>
            <span>Need Help?</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation --> --}}

{{-- </header><!-- End Header --> --}}



    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="{{ url('home') }}">
                                <!-- {{-- <img src="assets/images/logo/logo.png" alt="Logo" srcset=""> --}} -->
                                
                            <img  id="cr_logo" src="assets/images/Logo cra.png"  alt="CRA">
                                
                            </a>
                        </div>
                        {{-- <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div> --}}
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title"></li>
                            {{-- @if(Auth::user()->role == 'superadmin')
                                <li class="sidebar-item  has-sub">
                                    <a href="#" class='sidebar-link'>
                                        <i class="bi bi-stack"></i>
                                            <span>Register main</span>
                                    </a>
                                    <ul class="submenu ">
                                        <li class="submenu-item ">
                                            <a href="{{url('hospitals')}}" class='sidebar-link'>Add hospitals</a>
                                        </li>
                                        <li class="submenu-item ">
                                            <a href="{{url('admins')}}" class='sidebar-link'>Add Admins</a>
                                        </li>
                                        <li class="submenu-item ">
                                            <a href="{{url('allhospitals')}}" class='sidebar-link'>All hospitals</a>
                                        </li>
                                    </ul>
                                </li>
                            @endif --}}
                            @if(Auth::user()->role == 'hospitaladmin')
                                <li class="sidebar-item  has-sub">
                                    <!-- <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                        <i class="fa-regular fa-user"  style="font-weight: 300;"></i>
                                            <span>User Management</span>
                                    </a> -->
                                    @php
                                        $admin = array("usermanagement", "adddepartments","add_labdept","add_surgery_types","adddepartmentadmin","addroomstypes","addroomtypes","beds","Add_Ambulance_details");
                                        $lab = array("labcategory", "labtests", "labprofile","patlabtest","alllabtestsview");
                                        $hr = array("addallowance", "addstaffs", "staffs","loans","payslip","attendance","attendanceview","payslipbulk","generatepayslip","managestaff");
                                        $accounts = array("ledger_acount_categories", "ledger_acount_subcategories","ledger_budget_category", "ledger_acounts","expense_report","journal","ledger","trialbalance","profitandlossaccount");
                                        $doctor = array("Consultation", "todaysappointments", "reappointments","allpatients","dutyschedulefetch","applyleave");
                                        $casuality = array("casuality_patient", "ambulance_details");
                                        $pharmacy = array("serving", "manage_biils","allmedicinez", "allmedicinez","serving", "manage_biils");
                                        $counter = array("todaysappointmentsall", "appointment","patientregistration", "patientinsurance");
                                        $store=array("addsuppliers", "view_manufacturers","view_medicine", "view_medicine_category","view_medicine_type","view_unit","view_medicine_group","view_brand_name","view_generic_name","reorder","view_purchase","stock_details","accounting_method","payment_type");
                                        $operation_t=array("theatre_category");
                                    @endphp
                                    @if (in_array(request()->path(), $admin))
                                        <ul class="submenu" style="display: block;">
                                        @else
                                            <ul class="submenu" style="display: none;">
                                    @endif
                                    
                                    <li class="submenu-item ">
                                        <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                            <span>Add Roles</span>
                                        </a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="{{url('adddepartments')}}" class='sidebar-link'>
                                            <span>Add Departments</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                                </li>

                                <li class="submenu-item has-sub " style="list-style:none;">
                                        <a id="sblm" href="{{url('client-index')}}" class='sidebar-link' >
                                        <i  class="fas fa-chalkboard-teacher" id="icon"></i>
                                            <span > Client Management</span>
                                        </a>
                                </li>

    

                              

                             


                            @endif
                            @if(Auth::user()->role == 'hospitaladmin')
                            <li class="submenu-item has-sub " style="list-style:none;">
                                        <a href="{{url('file_managementindex')}}" class='sidebar-link'>
                                        <i class="far fa-folder-open" id="icon" style="font-weight: 300;"></i>
                                            <span>File Management</span>
                                        </a>
                                </li>
                            @endif
                            @if(Auth::user()->role == 'hr' || Auth::user()->role == 'hospitaladmin')
                                @php
                                    $hr = array("addallowance", "addstaffs", "staffs","loans","payslip","attendance","attendanceview","payslipbulk","generatepayslip","managestaff");
                                @endphp

                                

                                <li class="submenu-item " style="list-style:none;">
                                    <a href="{{url('system_setup')}}" class='sidebar-link'>
                                        <i class="fa fa-gear" id="icon"></i>
                                            <span>System Setup</span>
                                    </a>
                            </li>
                                    <!-- <ul class="submenu">

                                    <li class="submenu-item ">
                                        <a href="{{url('system_setup')}}" class='sidebar-link'>
                                            <span id="subm">Setup</span>
                                        </a>
                                    </li>

                                   
                                    <li class="submenu-item ">
                                        <a href="{{url('company_details')}}" class='sidebar-link'>
                                            <span id="subm">Company</span>
                                        </a>
                                    </li>
                                    
                                    <li class="submenu-item ">
                                        <a href="{{url('weekend_holiday')}}" class='sidebar-link'>
                                            <span id="subm">Holidays</span>
                                        </a>
                                    </li> -->

                                    <!-- <li class="submenu-item ">
                                        <a href="{{url('configu_ration')}}" class='sidebar-link'>
                                            <span id="subm">Configurations</span>
                                        </a>
                                    </li> -->

                                     <!-- <li class="submenu-item ">
                                        <a href="{{url('other_confgn')}}" class='sidebar-link'>
                                            <span id="subm">Other Configurations</span>
                                        </a>
                                    </li> -->

                                    <!-- <li class="submenu-item ">
                                        <a href="{{url('company_branch')}}" class='sidebar-link'>
                                            <span id="subm">Company Branch</span>
                                        </a>
                                    </li> -->
                                   
                                    <!-- </ul>
                                </li> -->


                                <li class="sidebar-item  has-sub">
                                    <a href="{{url('home')}}" class='sidebar-link'>
                                        <i class="bi bi-grid-fill" style="font-weight: 400;" id="icon"></i>
                                            <span>HR</span>
                                    </a>
                                    @if (in_array(request()->path(),$hr))
                                        <ul class="submenu" style="display: block;">
                                        @else
                                            <ul class="submenu" style="display: none;">
                                    @endif
                                    <li class="submenu-item ">
                                        <a href="{{url('addallowance')}}" class='sidebar-link'>
                                            <span id="subm">Settings</span>
                                        </a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="{{url('addstaffs')}}" class='sidebar-link'>
                                            <span id="subm">Add Staffs</span>
                                        </a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="{{url('staffs')}}" class='sidebar-link'>
                                            <span id="subm">Manage Staffs</span>
                                        </a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="{{url('loans')}}" class='sidebar-link'>
                                            <span id="subm">Loans</span>
                                        </a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="{{url('payslip')}}" class='sidebar-link'>
                                            <span id="subm">Payslip(Bulk)</span>
                                        </a>
                                    </li>
                                    {{-- <li class="submenu-item ">
                                        <a href="{{url('payslipbulk')}}" class='sidebar-link'>
                                            <span>Payslip(Individual)</span>
                                        </a>
                                    </li> --}}
                                    <li class="submenu-item ">
                                        <a href="{{url('attendanceview')}}" class='sidebar-link'>
                                            <span id="subm">Attendance(Manual)</span>
                                        </a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="{{url('attendance')}}" class='sidebar-link'>
                                            <span id="subm">Attendance(CSV Upload)</span>
                                        </a>
                                    </li>
                                </ul>
                                </li>
                            @endif
                            
                            @if(Auth::user()->role == 'account' || Auth::user()->role == 'hospitaladmin')
                                @php
                                    $accounts = array("ledger_acount_categories", "ledger_acount_subcategories","ledger_budget_category", "ledger_acounts","expense_report","journal","ledger","trialbalance","profitandlossaccount","balancesheet","stock_section","stock_issue","store_ledger","stock_categories","stock_subcategories","stock_items");
                                @endphp



                            <li class="sidebar-item  has-sub">
                                <a href="{{url('home')}}" class="sidebar-link">
                                <i class="fa fa-chart-line" style="font-weight: 400;" id="icon"></i>

                                           <span>Accounts</span>
                                       </a>
                                   @if (in_array(request()->path(), $accounts))
                                       <ul class="submenu" style="display: block;">
                                     @else
                                     <ul class="submenu" style="display: none;">
                                      @endif
                                           <li class="submenu-item  ">
                                                <a href="{{ url('ledger_acount_categories') }}" class=" sidebar-link">
                                                <span>Account Type</span></a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="{{ url('ledger_acount_subcategories') }}" class="sidebar-link">
                                               <span  id="subm">Groups</span></a>
                                           </li>
                                           <li class="submenu-item ">
                                                <a href="{{ url('ledger_budget_category') }}" class="sidebar-link">
                                                <span  id="subm">Budget Category</span></a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="{{ url('ledger_acounts') }}" class=" sidebar-link">
                                               <span  id="subm">Ledger Account</span>
                                           </a>
                                           </li>
                                           <li class="submenu-item ">
                                            <a href="{{ url('expense_report') }}" class=" sidebar-link">
                                            <span  id="subm">Expense Report</span>
                                        </a>
                                        </li>
                                           <li class="submenu-item ">
                                               <a href="{{ url('journal') }}" class=" sidebar-link" >
                                               <span  id="subm">Journal</span>
                                           </a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="{{ url('ledger') }}" class=" sidebar-link">
                                                   <span  id="subm">Ledger </span></a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="{{ url('trialbalance') }}" class=" sidebar-link">
                                                   <span  id="subm">Trial Balance </span></a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="{{ url('profitandlossaccount') }}" class=" sidebar-link">
                                                   <span  id="subm">Profit And loss Account </span></a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="{{ url('balancesheet') }}" class=" sidebar-link">
                                                   <span  id="subm">Balance Sheet </span></a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="{{ url('stock_section') }}" class=" sidebar-link">
                                                   <span  id="subm">Stock Reciept </span></a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="{{ url('stock_issue') }}" class=" sidebar-link">
                                                   <span  id="subm">Stock Issue </span></a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="{{ url('store_ledger') }}" class=" sidebar-link">
                                                   <span  id="subm">Store Ledger </span></a>
                                           </li>

                                           <li class="submenu-item ">
                                               <a href="{{ url('stock_categories') }}" class=" sidebar-link">
                                                   <span  id="subm">Stock Categories </span></a>
                                           </li>

                                           <li class="submenu-item ">
                                               <a href="{{ url('stock_subcategories') }}" class=" sidebar-link">
                                                   <span  id="subm">Stock Sub Categories </span></a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="{{ url('stock_items') }}" class=" sidebar-link">
                                                   <span  id="subm">Stock Items </span></a>
                                           </li>
                                       </ul>
                                   </li>
                                   @endif
                            @if(Auth::user()->role == 'store' || Auth::user()->role == 'hospitaladmin')
                                @php
                                    $store=array("addsuppliers", "view_manufacturers","view_medicine", "view_medicine_category","view_medicine_type","view_unit","view_medicine_group","view_brand_name","view_generic_name","reorder","view_purchase","stock_details","accounting_method","payment_type");
                                @endphp
                                <li class="sidebar-item  has-sub">
                                    {{-- <a href="{{url('home')}}" class='sidebar-link'>
                                        <i class="bi bi-shop" id="icon" ></i>
                                            <span>Inventory </span>
                                    </a> --}}
                                    @if (in_array(request()->path(),$store))
                                        <ul class="submenu" style="display: block;">
                                            @else
                                            <ul class="submenu" style="display:none;">
                                    @endif
                                    <li class="submenu-item  ">
                                        <a href="{{url('addsuppliers')}}" class=" sidebar-link">
                                            <span>Suppliers</span></a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="{{url('view_manufacturers')}}" class=" sidebar-link">
                                            <span>Manufacturers</span></a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="{{url('show_items_details')}}" class=" sidebar-link">
                                            <span>Items</span>
                                        </a>
                                    </li>
                                    


                                    <!-- <li class="submenu-item ">
                                        <a href="{{url('view_request')}}" class=" sidebar-link">
                                            <span>Requested Items</span></a>
                                    </li> -->
                                    <!-- <li class="submenu-item ">
                                        <a href="{{url('display_issued_stock')}}" class=" sidebar-link">
                                            <span>Issued Items</span></a>
                                    </li> -->
                                    <li class="submenu-item ">
                                        <a href="{{url('store_reorder')}}" class=" sidebar-link">
                                            <span>Reorder Level</span></a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="{{url('empty_stock')}}" class=" sidebar-link">
                                            <span>Empty Stock</span></a>
                                    </li>
                                    <!-- <li class="submenu-item ">
                                        <a href="{{url('show_substore')}}" class=" sidebar-link">
                                            <span>Sub Stores</span></a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="{{url('view_substore')}}" class=" sidebar-link">
                                            <span>Sub Store Details</span></a>
                                    </li> -->
                                    <!-- <li class="submenu-item ">
                                        <a href="{{url('view_substore_details')}}" class=" sidebar-link">
                                            <span>Add Department Stores</span></a>
                                    </li> -->
                                    <li class="sidebar-item  has-sub">
                                        <a href="#" class="sidebar-link">
                                            <i class="fa fa-purchase" style="font-weight: 400;"></i>
                                                <span>Purchase</span>
                                        </a>
                                        <ul class="submenu" style="display: none;">
                                            <li class="submenu-item  ">
                                                <a href="{{url('view_purchase')}}" class=" sidebar-link">
                                                    <span>New Purchase</span>
                                                </a>
                                                <a href="{{url('received_order_detailes')}}" class=" sidebar-link">
                                                    <span>manage_purchase</span>
                                                </a>
                                                <a href="{{url('received_order_detailes')}}" class=" sidebar-link">
                                                    <span>Purchase Return</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    {{-- <li class="sidebar-item  has-sub">
                                        <a href="#" class="sidebar-link">
                                            <i class="" style="font-weight: 400;"></i>
                                                <span>Stock</span>
                                        </a>
                                        <ul class="submenu" style="display: none;">
                                            <li class="submenu-item  ">
                                                <a href="{{url('view_stock_details')}}" class=" sidebar-link"><span>Manage Stock</span></a>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    <li class="sidebar-item  has-sub">
                                        <a href="#" class="sidebar-link">
                                            <i class="" style="font-weight: 400;"></i>
                                                <span >Settings</span>
                                        </a>




                                        
                                        <ul class="submenu" style="display: none;">
                                            <!-- <li class="submenu-item  ">
                                                <a href="{{ url('accounting_method')}}" class=" sidebar-link">
                                                    <span>Inventory method</span>
                                                </a>
                                            </li> -->
                                            <li class="submenu-item ">
                                                <a href="{{ url('payment_type')}}" class=" sidebar-link">
                                                    <span>Payment Type</span></a>
                                            </li>
                                            <li class="submenu-item ">
                                                <a href="{{url('view_medicine_category')}}" class=" sidebar-link">
                                                <span>Item Category</span>
                                            </a>
                                            </li>
                                            {{-- <li class="submenu-item ">
                                                <a href="{{ url('view_medicine_type') }}" class=" sidebar-link" >
                                                <span>Item Type</span>
                                            </a>
                                            </li>
                                            <li class="submenu-item ">
                                                <a href="{{ url('view_unit') }}" class=" sidebar-link">
                                                    <span>Units</span></a>
                                            </li>
                                            <li class="submenu-item ">
                                                <a href="{{ url('view_medicine_group') }}" class=" sidebar-link">
                                                    <span>Item Group</span></a>
                                            </li> --}}
                                            {{-- <li class="submenu-item ">
                                                <a href="{{ url('view_brand_name') }}" class=" sidebar-link">
                                                    <span>Brand Name</span></a>
                                            </li> --}}
                                        </ul>
                                    </li>
                                </li>


                                
                            @endif

                           
                    </ul>
                    @if(Auth::user()->role == 'hr' || Auth::user()->role == 'hospitaladmin')
                                @php
                                    $hr = array("addallowance", "addstaffs", "staffs","loans","payslip","attendance","attendanceview","payslipbulk","generatepayslip","managestaff");
                                @endphp
                                <li class="sidebar-item  has-sub">
                                    <a href="{{url('home')}}" class='sidebar-link'>
                                        <i id="icon" class="bi bi-grid-fill" style="font-weight: 400;"></i>
                                            <span>Client Invoicing</span>
                                    </a>
                                    @if (in_array(request()->path(),$hr))
                                        <ul class="submenu" style="display: block;">
                                        @else
                                            <ul class="submenu" style="display: none;">
                                    @endif
                                    <li class="submenu-item ">
                                        <a href="{{url('addallowance')}}" class='sidebar-link'>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                   
                                </ul>
                                </li>
                            @endif
                    @if(Auth::user()->role == 'hospitaladmin')
                                <li class="sidebar-item  has-sub">
                                    <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                        <i id="icon" class="	fas fa-user-graduate"  style="font-weight: 300;"></i>
                                            <span>Client Deck</span>
                                    </a>
                                   
                                    </li>
                            @endif

                            @if(Auth::user()->role == 'hospitaladmin')
                                <li class="sidebar-item  has-sub">
                                    <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                        <i id="icon" class="fas fa-user-cog"  style="font-weight: 300;"></i>
                                            <span>Office Administrations</span>
                                    </a>
                                   
                                    </li>
                            @endif
                            @if(Auth::user()->role == 'hospitaladmin')
                                <li class="sidebar-item  has-sub">
                                    <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                        <i id="icon" class="fas fa-file-invoice-dollar"  style="font-weight: 300;"></i>
                                            <span>Accounting & Finance</span>
                                    </a>
                                   
                                    </li>
                            @endif

                            @if(Auth::user()->role == 'hospitaladmin')
                                <li class="sidebar-item  has-sub">
                                    <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                        <i id="icon" class="fa fa-cogs"  style="font-weight: 300;"></i>
                                            <span>Tools & ad ons</span>
                                    </a>
                                   
                                    </li>
                            @endif
                            @if(Auth::user()->role == 'hospitaladmin')
                                <li class="sidebar-item  has-sub">
                                    <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                        <i id="icon" class="fa fa-cog"  style="font-weight: 300;"></i>
                                            <span>System Settings</span>
                                    </a>
                                   
                                    </li>
                            @endif

                            @if(Auth::user()->role == 'hospitaladmin')
                                <li class="sidebar-item  has-sub">
                                    <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                        <i id="icon" class="far fa-file-alt"  style="font-weight: 300;"></i>
                                            <span>Report Generation</span>
                                    </a>
                                   
                                    </li>
                            @endif
                            @if(Auth::user()->role == 'hospitaladmin')
                                <li class="sidebar-item  has-sub">
                                    <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                        <i id="icon" class="fab fa-playstation"  style="font-weight: 300;"></i>
                                            <span>Practice Area</span>
                                    </a>
                                   
                                    </li>
                            @endif

                            @if(Auth::user()->role == 'hospitaladmin')
                                <li class="sidebar-item  has-sub">
                                    <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                        <i id="icon" class="far fa-sun"  style="font-weight: 300;"></i>
                                            <span>Perfomance</span>
                                    </a>
                                   
                                    </li>
                            @endif
                            @if(Auth::user()->role == 'hospitaladmin')
                                <li class="sidebar-item  has-sub">
                                    <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                        <i id="icon" class="fas fa-hand-holding"  style="font-weight: 300;"></i>
                                            <span>Requirement</span>
                                    </a>
                                   
                                    </li>
                            @endif

                            @if(Auth::user()->role == 'hospitaladmin')
                                <li class="sidebar-item  has-sub">
                                    <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                        <i id="icon" class="fas fa-layer-group"  style="font-weight: 300;"></i>
                                            <span>Petty Cash</span>
                                    </a>
                                   
                                    </li>
                            @endif
                            @if(Auth::user()->role == 'hospitaladmin')
                                <li class="sidebar-item  has-sub">
                                    <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                        <i id="icon" class="fas fa-piggy-bank"  style="font-weight: 300;"></i>
                                            <span>Inventory</span>
                                            <span>Store ,Inventory</span>
                                    </a>
                                   
                                    </li>
                            @endif

                            @if(Auth::user()->role == 'hospitaladmin')
                                <li class="sidebar-item  has-sub">
                                    <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                        <i id="icon" class="fas fa-coins"  style="font-weight: 300;"></i>
                                            <span>Fixed Asset</span>
                                    </a>
                                   
                                    </li>
                            @endif
                            @if(Auth::user()->role == 'hospitaladmin')
                                <li class="sidebar-item  has-sub">
                                    <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                        <i id="icon" class="as fa-user-circle"  style="font-weight: 300;"></i>
                                            <span>User Accounts</span>
                                    </a>
                                   
                                    </li>
                            @endif

                            @if(Auth::user()->role == 'hospitaladmin')
                                <li class="sidebar-item  has-sub">
                                    <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                        <i id="icon" class="fas fa-chart-pie"  style="font-weight: 300;"></i>
                                            <span>LPO Management</span>
                                    </a>
                                   
                                    </li>
                            @endif
                            @if(Auth::user()->role == 'hospitaladmin')
                                <li class="sidebar-item  has-sub">
                                    <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                        <i id="icon" class="fas fa-atom"  style="font-weight: 300;"></i>
                                            <span>E-Library</span>
                                    </a>
                                   
                                    </li>
                            @endif


                            <li class="sidebar-item  has-sub">
                                <a href="" class='sidebar-link'>
                                    <i class="fa fa-gear" id="icon"></i>
                                        <span>Settings</span>
                                </a>
                                <ul class="submenu">

                                    <li class="submenu-item ">
                                        <a href="{{url('u_details')}}" class='sidebar-link'>
                                            <span id="subm">User</span>
                                        </a>
                                    </li>
                               
                                <li class="submenu-item ">
                                    <a href="{{url('company_details')}}" class='sidebar-link'>
                                        <span id="subm">Company</span>
                                    </a>
                                </li>
                                
                                <li class="submenu-item ">
                                    <a href="{{url('weekend_holiday')}}" class='sidebar-link'>
                                        <span id="subm">Holidays</span>
                                    </a>
                                </li>

                                <li class="submenu-item ">
                                    <a href="{{url('configu_ration')}}" class='sidebar-link'>
                                        <span id="subm">Configurations</span>
                                    </a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{url('company_branch')}}" class='sidebar-link'>
                                        <span id="subm">Company Branch</span>
                                    </a>
                                </li>
                               
                                </ul>
                            </li>

                                    
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">

            <header >
                
             {{-- <header class="mb-3"> --}}
                {{-- <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a> --}}
             {{-- </header> --}}
             {{-- <div class="page-heading" > --}}
                {{-- <h3 style="color:#c30147;">{{Auth::user()->Hospital}}</h3> --}}
                {{-- <h3 style="color:#c30147;">ERP Global</h3> --}}
             {{-- </div> --}}

<div class="container">

    
    
    {{-- <nav  class=" navbar navbar-light bg-light" id="ff">
        <a class="navbar-brand" href="#">Fixed top</a>
      </nav> --}}



             <nav class="navbar navbar-light  justify-content-between" >
                <a id="backbtn" href="javascript:history.back()"  ><i class="far fa-arrow-alt-circle-left"></i></a>

                <div id="navr" style="margin-top: -10%;"   >

                   
                        <ul style="text-align: center; text-decoration: none; list-style:none;">
                            <li style="align-items: center" class="avatar avatar-xl" style="margin-left: 28%;"> 
                                <img   src="assets/images/faces/lawemb.png" alt="Face 1">
                            </li>
                            
                    <li><a style="text-align: center" class="font-bold text-uppercase"> {{ Auth::user()->name }}</a></li>
                    <li><a style="text-align: center" class="text-muted mb-0" href="{{url('logt')}}"> <i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                  </ul>
                 
                </div>
              </nav>
             
            </div>
             {{-- <a href="javascript:history.back()"  class="btn btn-primary" >Back</a>
             <div style="margin-left: 83%;margin-top: -8%;">
                <div class="avatar avatar-xl">
                    <img  style="margin-left: 28%;" src="assets/images/faces/CRAHqLogo.png" alt="Face 1">
                </div>
                <h5 class="font-bold"> {{ Auth::user()->name }}</h5>
                <h6 class="text-muted mb-0"><a href="{{url('logt')}}"> <i class="fas fa-sign-out-alt"></i> </i> Log Out</a></h6>
               
             </div> --}}

            </header>


            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        @yield('content')
                    </div>
                </section>
            </div>
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Globaleyet</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="https://www.globaleyet.com/">globaleyet</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('/')}}assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{asset('/')}}assets/js/bootstrap.bundle.min.js"></script>

    <script src="{{asset('/')}}assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="{{asset('/')}}assets/js/pages/dashboard.js"></script>

    <script src="{{asset('/')}}assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
        var mquery = window.matchMedia("(max-width:767.98px)");
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
         <script>
             $(document).ready(function () {
                 var SITEURL = "{{ url('/') }}";
                 $.ajaxSetup({
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
                 });
                 var calendar = $('#full_calendar_events').fullCalendar({
                     editable: true,
                     editable: true,
                     events: SITEURL + "/calendar-event",
                     displayEventTime: true,
                     eventRender: function (event, element, view) {
                         if (event.allDay === 'true') {
                             event.allDay = true;
                         } else {
                             event.allDay = false;
                         }
                     },
                     selectable: true,
                     selectHelper: true,
                     select: function (event_start, event_end, allDay) {
                         var event_name = prompt('Event Name:');
                         if (event_name) {
                             var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD HH:mm:ss");
                             var event_end = $.fullCalendar.formatDate(event_end, "Y-MM-DD HH:mm:ss");
                             $.ajax({
                                 url: SITEURL + "/calendar-crud-ajax",
                                 data: {
                                     event_name: event_name,
                                     event_start: event_start,
                                     event_end: event_end,
                                     type: 'create'
                                 },
                                 type: "POST",
                                 success: function (data) {
                                     displayMessage("Event created.");
                                     calendar.fullCalendar('renderEvent', {
                                         id: data.id,
                                         title: event_name,
                                         start: event_start,
                                         end: event_end,
                                         allDay: allDay
                                     }, true);
                                     calendar.fullCalendar('unselect');
                                 }
                             });
                         }
                     },
                     eventDrop: function (event, delta) {
                         var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                         var event_end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                         $.ajax({
                             url: SITEURL + '/calendar-crud-ajax',
                             data: {
                                 title: event.event_name,
                                 start: event_start,
                                 end: event_end,
                                 id: event.id,
                                 type: 'edit'
                             },
                             type: "POST",
                             success: function (response) {
                                 displayMessage("Event updated");
                             }
                         });
                     },
                     eventClick: function (event) {
                         var eventDelete = confirm("Are you sure?");
                         if (eventDelete) {
                             $.ajax({
                                 type: "POST",
                                 url: SITEURL + '/calendar-crud-ajax',
                                 data: {
                                     id: event.id,
                                     type: 'delete'
                                 },
                                 success: function (response) {
                                     calendar.fullCalendar('removeEvents', event.id);
                                     displayMessage("Event removed");
                                 }
                             });
                         }
                     }
                 });
             });
             function displayMessage(message) {
                 toastr.success(message, 'Event');
             }
         </script>

         <script>$("a.sidebar-link").click(function(){
            $("a.sidebar-link").css("background-color", "");
          $(this).css("background-color", "#F5E9D4");
        });</script>

<script>

// const myElement = document.getElementById("subm");
// myElement.style.color = "red"


</script>
</body>


<!-- Mirrored from zuramai.github.io/mazer/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Aug 2021 11:16:21 GMT -->

</html>