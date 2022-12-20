    <!DOCTYPE html>
    <html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRA</title>

        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="{{asset('/') }}assets/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/all.css">
        <link rel="stylesheet" href="{{asset('/') }}assets/vendors/iconly/bold.css">

        <link rel="stylesheet" href="{{asset('/') }}assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" href="{{asset('/') }}assets/vendors/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="{{asset('/') }}assets/css/app.css">
        <link rel="stylesheet" href="{{asset('/') }}assets/css/customstyle.css">
        <link rel="shortcut icon" href="{{asset('/') }}assets/images/favicon.html" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous" />

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        {{-- vipin --}}
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" /> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
        {{-- vipin --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css"
            href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <!-- vinu -->

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="fonts/icomoon/style.css">

        <link rel="stylesheet" href="{{asset('/') }}assets/css/sub.css">
        <link rel="stylesheet" href="{{asset('/') }}assets/css/sub1.scss">


        <link rel="stylesheet" href="{{asset('/') }}assets/css/c.css">


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="table.js"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Make Simple Javascript Timer</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
        </script>
        <!-- b -->
        <style>
        #icon {
            color: #1D1D50
        }

        #subm {
            color: #070344;
        }

        body {
            background-color: #F4F4F6;
            
        
        }

        html {
            scroll-behavior: smooth;
            
           
        }

        .pagination>li>span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #337ab7;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }

        .pagination {
            margin: 0;
        }

        .pagination li:hover {
            cursor: pointer;
        }

        .header_wrap {
            padding: 30px 0;
        }

        .num_rows {
            width: 20%;
            float: left;
        }

        .tb_search {
            width: 20%;
            float: right;
        }

        .pagination-container {
            width: 70%;
            float: left;
        }

        .rows_count {
            width: 20%;
            float: right;
            text-align: right;
            color: #999;
        }

        /* time */
        #stopwatch-container {
            border: 5px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            margin: 0px auto 0;
            width: fit-content;
            padding: 7px 10px;
            border-radius: 5px;
            border: 1px solid #b9b9b9;
        }

        #stopwatch {
            margin: 0 auto;
            text-align: center;
            font-size: 20px;
        }

        #buttons-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        #buttons-container button {
            outline: none;
            cursor: pointer;
            color: #fff;
            background-color: #a4a4a4;
            border: none;
            border-radius: 5px;
            font-size: 15px;
            margin: 0 10px;
            padding: 3px 8px;
        }

        #buttons-container button:active {
            opacity: 0.7;
        }
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
                <div class="sidebar-wrapper active"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">

                    <div class="sidebar-header">
                        <div class="d-flex justify-content-between">
                            <div class="logo">
                                <a href="{{ url('home') }}">
                                    <!-- {{-- <img src="assets/images/logo/logo.png" alt="Logo" srcset=""> --}} -->

                                    <img id="cr_logo" src="{{asset('/') }}assets//images/Logo cra.png" alt="CRA">
                                    

                                </a>
                            </div>
                            {{-- <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div> --}}
                        </div>
                    </div>
                    <div class="sidebar-menu">
                        <ul class="menu">
                            <li class="sidebar-title" style="color: #1D1D50; text-align:center; font-size:16px; ">
                                DASHBOARD</li>
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
                            $admin = array("usermanagement",
                            "adddepartments","add_labdept","add_surgery_types","adddepartmentadmin","addroomstypes","addroomtypes","beds","Add_Ambulance_details");
                            $lab = array("labcategory", "labtests", "labprofile","patlabtest","alllabtestsview");
                            $hr = array("addallowance", "addstaffs",
                            "staffs","loans","payslip","attendance","attendanceview","payslipbulk","generatepayslip","managestaff");
                            $accounts = array("ledger_acount_categories",
                            "ledger_acount_subcategories","ledger_budget_category",
                            "ledger_acounts","expense_report","journal","ledger","trialbalance","profitandlossaccount");
                            $doctor = array("Consultation", "todaysappointments",
                            "reappointments","allpatients","dutyschedulefetch","applyleave");
                            $casuality = array("casuality_patient", "ambulance_details");
                            $pharmacy = array("serving", "manage_biils","allmedicinez", "allmedicinez","serving",
                            "manage_biils");
                            $counter = array("todaysappointmentsall", "appointment","patientregistration",
                            "patientinsurance");
                            $store=array("addsuppliers", "view_manufacturers","view_medicine",
                            "view_medicine_category","view_medicine_type","view_unit","view_medicine_group","view_brand_name","view_generic_name","reorder","view_purchase","stock_details","accounting_method","payment_type");
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

                        <li class="submenu-item  has-sub" style="list-style:none;">
                            <a href="{{url('user_management')}}" class='sidebar-link'>
                                <i class="fa-regular fa-user" id="icon"></i>
                                <span> User Management</span>
                            </a>

                        </li>


                        <li class="submenu-item has-sub " style="list-style:none;">
                            <a id="sblm" href="{{url('client-index')}}" class='sidebar-link'>
                                <i class="fa fa-university" id="icon"></i>
                                <span>Client Management</span>
                            </a>
                        </li>

                        @endif
                        @if(Auth::user()->role == 'hospitaladmin')
                        <li class="submenu-item has-sub " style="list-style:none;">
                            <a href="{{url('file_managementindex')}}" class='sidebar-link'>
                                <i class="far fa-folder" id="icon" style="font-weight: 300;"></i>
                                <span>File Management</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::user()->role == 'hr' || Auth::user()->role == 'hospitaladmin')
                        @php
                        $hr = array("addallowance", "addstaffs",
                        "staffs","loans","payslip","attendance","attendanceview","payslipbulk","generatepayslip","managestaff");
                        @endphp




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


                        <li class="submenu-item" style="list-style:none;">
                            <a href="{{url('hrindex')}}" class='sidebar-link'>
                                <i class="fa fa-th-large" id="icon"></i>
                                <span>HR</span>
                            </a>
                        </li>




                        {{-- <li class="submenu-item ">
                                        <a href="{{url('addallowance')}}" class='sidebar-link'>
                        <span id="subm">Settings</span>
                        </a>
                        </li> --}}
                        {{-- <li class="submenu-item ">
                                        <a href="{{url('addstaffs')}}" class='sidebar-link'>
                        <span id="subm">Add Staffs</span>
                        </a>
                        </li> --}}
                        {{-- <li class="submenu-item ">
                                        <a href="{{url('staffs')}}" class='sidebar-link'>
                        <span id="subm">Manage Staffs</span>
                        </a>
                        </li> --}}
                        {{-- <li class="submenu-item ">
                                        <a href="{{url('loans')}}" class='sidebar-link'>
                        <span id="subm">Loans</span>
                        </a>
                        </li> --}}
                        {{-- <li class="submenu-item ">
                                        <a href="{{url('payslip')}}" class='sidebar-link'>
                        <span id="subm">Payslip(Bulk)</span>
                        </a>
                        </li> --}}
                        {{-- <li class="submenu-item ">
                                        <a href="{{url('payslipbulk')}}" class='sidebar-link'>
                        <span>Payslip(Individual)</span>
                        </a>
                        </li> --}}
                        {{-- <li class="submenu-item ">
                                        <a href="{{url('attendanceview')}}" class='sidebar-link'>
                        <span id="subm">Attendance(Manual)</span>
                        </a>
                        </li> --}}
                        {{-- <li class="submenu-item ">
                                        <a href="{{url('attendance')}}" class='sidebar-link'>
                        <<<<<<< Updated upstream <span id="subm">Attendance(CSV Upload)</span>
                            </a>
                            </li> --}}
                            {{-- </li> --}}
                            @endif

                            @if(Auth::user()->role == 'account' || Auth::user()->role == 'hospitaladmin')
                            @php
                            $accounts = array("ledger_acount_categories",
                            "ledger_acount_subcategories","ledger_budget_category",
                            "ledger_acounts","expense_report","journal","ledger","trialbalance","profitandlossaccount","balancesheet","stock_section","stock_issue","store_ledger","stock_categories","stock_subcategories","stock_items");
                            @endphp

                            <li class="submenu-item" style="list-style:none;">
                                <a href="{{url('accindex')}}" class='sidebar-link'>
                                    <i class="fa fa-chart-line" id="icon"></i>
                                    <span>Accounts</span>
                                </a>
                            </li>
                            <li class="submenu-item" style="list-style:none;">
                                <a href="{{url('Store_&_Inventory_index')}}" class='sidebar-link'>
                                    <i class="fas fa-database" id="icon"></i>
                                    <span>Store & Inventory</span>
                                </a>
                            </li>
                            </li>
                            <li class="submenu-item" style="list-style:none;">
                                <a href="{{url('purchase_index')}}" class='sidebar-link'>
                                    <i class="far fa-clipboard" id="icon"></i>
                                    <span>Procurement </span>
                                </a>
                            </li>
                            <li class="submenu-item" style="list-style:none;">
                                <a href="{{url('practice_area_index')}}" class='sidebar-link'>
                                    <i class="fa fa-bar-chart" id="icon"></i>
                                    <span>Practice Management</span>
                                </a>
                            </li>
                            <li class="submenu-item" style="list-style:none;">
                                <a href="{{url('libraryindex')}}" class='sidebar-link'>
                                    <i class="fa fa-book" id="icon"></i>
                                    <span>E- Library</span>
                                </a>
                            </li>
                            <li class="submenu-item" style="list-style:none;">
                                <a href="{{url('tender_index')}}" class='sidebar-link'>
                                    <i class="fa fa-handshake-o" id="icon"></i>
                                    <span>Tender Management</span>
                                </a>

                            </li>
                            <li class="submenu-item has-sub" style="list-style:none;">
                                <a href="{{url('system_setup')}}" class='sidebar-link'>
                                    <i class="fa fa-gear" id="icon"></i>
                                    <span>System Setup</span>
                                </a>
                            </li>
                        
                           
                            {{-- @if (in_array(request()->path(), $accounts))
                                       <ul class="submenu" style="display: block;">
                                     @else
                                     <ul class="submenu" style="display: none;">
                                      @endif
                                           <li class="submenu-item  ">
                                                <a href="{{ url('ledger_acount_categories') }}" class=" sidebar-link">
                            <span id="subm">Account Type</span></a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ url('ledger_acount_subcategories') }}" class="sidebar-link">
                                    <span id="">Groups</span></a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ url('ledger_budget_category') }}" class="sidebar-link">
                                    <span id="subm">Budget Category</span></a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ url('ledger_acounts') }}" class=" sidebar-link">
                                    <span id="subm">Ledger Account</span>
                                </a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ url('expense_report') }}" class=" sidebar-link">
                                    <span id="subm">Expense Report</span>
                                </a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ url('journal') }}" class=" sidebar-link">
                                    <span id="subm">Journal</span>
                                </a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ url('ledger') }}" class=" sidebar-link">
                                    <span id="subm">Ledger</span></a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ url('trialbalance') }}" class=" sidebar-link">
                                    <span id="subm">Trial Balance</span></a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ url('profitandlossaccount') }}" class=" sidebar-link">
                                    <span id="subm">Profit And loss Account</span></a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ url('balancesheet') }}" class=" sidebar-link">
                                    <span id="subm">Balance Sheet</span></a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ url('stock_section') }}" class=" sidebar-link">
                                    <span id="subm">Stock Reciept </span></a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ url('stock_issue') }}" class=" sidebar-link">
                                    <span id="subm">Stock Issue </span></a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ url('store_ledger') }}" class=" sidebar-link">
                                    <span id="subm">Store Ledger </span></a>
                            </li>

                            <li class="submenu-item ">
                                <a href="{{ url('stock_categories') }}" class=" sidebar-link">
                                    <span id="subm">Stock Categories </span></a>
                            </li>

                            <li class="submenu-item ">
                                <a href="{{ url('stock_subcategories') }}" class=" sidebar-link">
                                    <span id="subm">Stock Sub Categories </span></a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ url('stock_items') }}" class=" sidebar-link">
                                    <span id="subm">Stock Items </span></a>
                            </li>
                            </ul>
                            {{-- </li> --}}
                            @endif
                            @if(Auth::user()->role == 'store' || Auth::user()->role == 'hospitaladmin')
                            @php
                            $store=array("addsuppliers", "view_manufacturers","view_medicine",
                            "view_medicine_category","view_medicine_type","view_unit","view_medicine_group","view_brand_name","view_generic_name","reorder","view_purchase","stock_details","accounting_method","payment_type");
                            @endphp
                            <li class="sidebar-item  has-sub">
                                {{-- <a href="{{url('home')}}" class='sidebar-link'>
                                <i class="bi bi-shop" id="icon"></i>
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
                                                <a href="{{url('view_stock_details')}}" class="
                                        sidebar-link"><span>Manage Stock</span></a>
                            </li>
                            </ul>
                            </li> --}}
                            <li class="sidebar-item  has-sub">
                                <a href="#" class="sidebar-link">
                                    <i class="" style="font-weight: 400;"></i>
                                    <span>Settings</span>
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
                            {{-- @if(Auth::user()->role == 'hr' || Auth::user()->role == 'hospitaladmin')
                                @php
                                    $hr = array("addallowance", "addstaffs", "staffs","loans","payslip","attendance","attendanceview","payslipbulk","generatepayslip","managestaff");
                                @endphp
                              
                                <li class="submenu-item has-sub " style="list-style:none;">
                                        <a id="sblm" href="{{url('client_invoicingindex')}}" class='sidebar-link' >
                            <i class="fa fa-newspaper" id="icon"></i>
                            <span> Client Invoicing</span>
                            </a>
                            </li>
                            @endif
                            @if(Auth::user()->role == 'hospitaladmin')
                            <li class="sidebar-item  has-sub">
                                <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                    <i id="icon" class="	fas fa-user-graduate" style="font-weight: 300;"></i>
                                    <span>Client Deck</span>
                                </a>

                            </li>
                            @endif

                            @if(Auth::user()->role == 'hospitaladmin')
                            <li class="sidebar-item  has-sub">
                                <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                    <i id="icon" class="fa fa-shield" style="font-weight: 300;"></i>
                                    <span>Office Administrations</span>
                                </a>

                            </li>
                            @endif
                            @if(Auth::user()->role == 'hospitaladmin')
                            <li class="sidebar-item  has-sub">
                                <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                    <i id="icon" class="fas fa-file-invoice-dollar" style="font-weight: 300;"></i>
                                    <span>Accounting & Finance</span>
                                </a>

                            </li>
                            @endif

                            @if(Auth::user()->role == 'hospitaladmin')
                            <li class="sidebar-item  has-sub">
                                <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                    <i id="icon" class="fa fa-sliders" style="font-weight: 300;"></i>
                                    <span>Tools & ad ons</span>
                                </a>

                            </li>
                            @endif
                            <!-- @if(Auth::user()->role == 'hospitaladmin')
                                <li class="sidebar-item  has-sub">
                                    <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                        <i id="icon" class="fa fa-cog"  style="font-weight: 300;"></i>
                                            <span>System Settings</span>
                                    </a>
                                   
                                    </li>
                            @endif -->

                            @if(Auth::user()->role == 'hospitaladmin')
                            <li class="sidebar-item  has-sub">
                                <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                    <i id="icon" class="far fa-file-alt" style="font-weight: 300;"></i>
                                    <span>Report Generation</span>
                                </a>

                            </li>
                            @endif
                            @if(Auth::user()->role == 'hospitaladmin')
                            <li class="sidebar-item  has-sub">
                                <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                    <i id="icon" class="fab fa-playstation" style="font-weight: 300;"></i>
                                    <span>Practice Area</span>
                                </a>

                            </li>
                            @endif

                            @if(Auth::user()->role == 'hospitaladmin')
                            <li class="sidebar-item  has-sub">
                                <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                    <i id="icon" class="far fa-sun" style="font-weight: 300;"></i>
                                    <span>Perfomance</span>
                                </a>

                            </li>
                            @endif
                            @if(Auth::user()->role == 'hospitaladmin')
                            <li class="sidebar-item  has-sub">
                                <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                    <i id="icon" class="fas fa-hand-holding" style="font-weight: 300;"></i>
                                    <span>Requirement</span>
                                </a>

                            </li>
                            @endif

                            @if(Auth::user()->role == 'hospitaladmin')
                            <li class="sidebar-item  has-sub">
                                <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                    <i id="icon" class="fas fa-layer-group" style="font-weight: 300;"></i>
                                    <span>Petty Cash</span>
                                </a>

                            </li>
                            @endif
                            @if(Auth::user()->role == 'hospitaladmin')
                            <li class="sidebar-item  has-sub">
                                <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                    <i id="icon" class="fas fa-piggy-bank" style="font-weight: 300;"></i>

                                    <span>Store, Inventory</span>
                                </a>

                            </li>
                            @endif

                            @if(Auth::user()->role == 'hospitaladmin')
                            <li class="sidebar-item  has-sub">
                                <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                    <i id="icon" class="fas fa-coins" style="font-weight: 300;"></i>
                                    <span>Fixed Asset</span>
                                </a>

                            </li>
                            @endif
                            @if(Auth::user()->role == 'hospitaladmin')
                            <li class="sidebar-item  has-sub">
                                <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                    <i id="icon" class="fa fa-user-circle" style="font-weight: 300;"></i>
                                    <span>User Accounts</span>
                                </a>

                            </li>
                            @endif

                            @if(Auth::user()->role == 'hospitaladmin')
                            <li class="sidebar-item  has-sub">
                                <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                    <i id="icon" class="fab fa-cloudscale" style="font-weight: 300;"></i>
                                    <span>LPO Management</span>
                                </a>

                            </li>
                            @endif
                            @if(Auth::user()->role == 'hospitaladmin')
                            <li class="sidebar-item  has-sub">
                                <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                    <i id="icon" class="fas fa-atom" style="font-weight: 300;"></i>
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
                            </li> --}}


                    </div>

                    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>

                </div>
            </div>



            <div id="main">

                {{-- <header class="mb-3"> --}}
                {{-- <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a> --}}
                {{-- </header> --}}
                {{-- <div class="page-heading" > --}}
                {{-- <h3 style="color:#c30147;">{{Auth::user()->Hospital}}</h3> --}}
                {{-- <h3 style="color:#c30147;">ERP Global</h3> --}}
                {{-- </div> --}}

                {{-- <nav  class=" navbar navbar-light bg-light" id="ff">
              <a class="navbar-brand" href="#">Fixed top</a>
              </nav> --}}


                <nav  class=" newstyle1 navbar navbar-expand-lg  sticky-top navbar-light bg-white">
                    <a id="backbtn" href="javascript:history.back()" style=" color: #070344;
                                            font-size: 35px;">
                        <i id="bkbtnicon" class="far fa-arrow-alt-circle-left"></i></a>

                    <a class="navbar-brand pl-4" href="#">
                        <img src="{{asset('/') }}assets//images/faces/lawemb.png" height="40px" class="d-inline-block align-top" alt="">
                        

                    </a>


                    <div class="nav-item dropdown">
                        <button class=" dropdown-toggle-x btn btn-primary p-1" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img data-toggle="tooltip" data-placement="top" title="Menu"
                                style="height: 35px; width: 35px;" id="cr_logo" src="{{asset('/') }}assets//images/Logo cra.png"
                                alt="CRA">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('user_management')}}">User Management</a>
                            <a class="dropdown-item" href="{{url('client-index')}}">Client Management</a>
                            {{-- <div class="dropdown-divider"></div> --}}
                            <a class="dropdown-item" href="{{url('file_managementindex')}}">File Management</a>
                            <a class="dropdown-item" href="{{url('system_setup')}}">System Setup</a>

                            <a class="dropdown-item" href="{{url('hrindex')}}">HR</a>

                            <a class="dropdown-item" href="{{url('accindex')}}">Accounts</a>

                        </div>
                    </div>


                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse ml-2" id="navbarTogglerDemo01">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="font-bold text-uppercase nav-link" href="#"> {{ Auth::user()->name }} <span
                                        class="sr-only">(current)</span></a>
                                {{-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> --}}
                            </li>

                            <li class="nav-item">
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-primary my-2 my-sm-0" type="submit"><i
                                            class="fa fa-search"></i></button>
                                </form>
                                {{-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> --}}
                            </li>
                        </ul>

                        <ul class="navbar-nav mr-auto lg-pl-3">

                            <li class="nav-item dropdown">
                                <button class=" dropdown-toggle-x btn btn-primary p-1" href="#" id="navbarDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Create New <i class="fa fa-plus-square"></i>
                                </button>


                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{url('user_management')}}">Time entry</a>
                                    <a class="dropdown-item" href="{{url('client-index')}}">Expense entry</a>
                                    {{-- <div class="dropdown-divider"></div> --}}
                                    <a class="dropdown-item" href="{{url('file_managementindex')}}">Task</a>
                                    <a class="dropdown-item" href="{{url('file_managementindex')}}">Matter</a>
                                    <a class="dropdown-item" href="{{url('file_managementindex')}}">Contact</a>
                                    <a class="dropdown-item" href="{{url('file_managementindex')}}">Record payment</a>
                                    <a class="dropdown-item" href="{{url('file_managementindex')}}">Client funds
                                        request</a>
                                    <a class="dropdown-item" href="{{url('file_managementindex')}}">Email log</a>
                                    <a class="dropdown-item" href="{{url('file_managementindex')}}">Phone log</a>
                                    <a class="dropdown-item" href="{{url('file_managementindex')}}">Secure message</a>
                                    <a class="dropdown-item" href="{{url('file_managementindex')}}">Event</a>
                                    <a class="dropdown-item" href="{{url('file_managementindex')}}">Note</a>

                                </div>
                            </li>
                        </ul>
    
                      
                  
                        

                    
                        {{-- <div id="stopwatch-container" >
      <p  id="stopwatch">00:00:00:00 </p>
      <div id="buttons-container">
        <button onclick="main()" id="main-btn" class="btn">Start</button>
        <button onclick="reset()" id="reset-btn" class="btn">Reset</button>
      </div>
    </div> 
</div>    --}}

                        <div id="navr" style="margin-right: .5%;">

                            <div style=" text-decoration: none; list-style:none;">

                                <a type="button" class="btn btn-outline-primary" style="text-align: center"
                                    class="text-muted mb-0 " href="{{url('logt')}}"><i
                                        class="fas fa-sign-out-alt"></i>LogOut

                                </a>
                            </div>
                        </div>
                </nav>


                {{-- <a href="javascript:history.back()"  class="btn btn-primary" >Back</a>
                                                                                    <div style="margin-left: 83%;margin-top: -8%;">
                                                                                    <div class="avatar avatar-xl">
                                                                                    <img  style="margin-left: 28%;" src="assets/images/faces/CRAHqLogo.png" alt="Face 1">
                                                                                </div>
                                                                                <h5 class="font-bold"> {{ Auth::user()->name }}
                </h5>
                <h6 class="text-muted mb-0"><a href="{{url('logt')}}"> <i class="fas fa-sign-out-alt"></i> </i> Log
                        Out</a></h6>

            </div> --}}
            <br>
            <section class="newstyle container-fluid bg-white p-4 mt-2">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        @yield('content')
                    </div>
                </section>
            </section>

            <br>
            <footer id="ftr" class="newstyle2 container-fluid bg-white p-4 mt-2 border-top">
                <div class="footer clearfix mb-0 text-muted">

                    <div class="container text-center">
                        <p class="">2022 &copy; Globaleyet</p>
                    </div>
                    <!-- <div class="float-end">
                                                            
                                                            <p> <a class="pr-3" href="#"><i style="color: green;" class="	fa fa-level-up"></i> </a>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="https://www.globaleyet.com/">globaleyet</a></p>
                                                        </div> -->
                </div>
            </footer>

        </div>
        </div>

        <!-- time -->
        <script>
        //globle variables
        var stopwatch = document.getElementById('stopwatch');
        var mainButton = document.getElementById('main-btn');
        var startTime = 0;
        var elapsedTime = 0;
        var timeoutId = null;

        //method to operate start and stop function
        function main() {
            if (mainButton.innerHTML === 'Start') {
                startTime = Date.now();
                startStopwatch();
                mainButton.innerHTML = 'Stop';
            } else {
                elapsedTime += Date.now() - startTime;
                clearTimeout(timeoutId);
                mainButton.innerHTML = 'Start';
            }
        }

        //method to reset the stopwatch
        function reset() {
            elapsedTime = 0;
            startTime = Date.now();
            clearTimeout(timeoutId);
            mainButton.innerHTML = 'Start';
            displayTime(0, 0, 0, 0);
        }

        //method to start the stopwatch
        function startStopwatch() {

            //run setTimeout() and save id
            timeoutId = setTimeout(function() {
                //calculate elapsed time
                const time = Date.now() - startTime + elapsedTime;

                //calculate different time measurements based on elapsed time
                const milliseconds = parseInt((time % 1000) / 10)
                const seconds = parseInt((time / 1000) % 60)
                const minutes = parseInt((time / (1000 * 60)) % 60)
                const hour = parseInt((time / (1000 * 60 * 60)) % 24);

                //display time
                displayTime(hour, minutes, seconds, milliseconds);

                //calling same method again recursively 
                startStopwatch();
            }, 100);
        }

        //method to display time in '00:00:00:00' format
        function displayTime(hour, minutes, seconds, milliseconds) {
            hour = hour < 10 ? '0' + hour : hour;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            milliseconds = milliseconds < 10 ? '0' + milliseconds : milliseconds;
            stopwatch.innerHTML = hour + ':' + minutes + ':' + seconds + ':' + milliseconds;
        }
        </script>
        <!-- time -->
        <script>
        getPagination('#table-id');
        $('#maxRows').trigger('change');

        function getPagination(table) {

            $('#maxRows').on('change', function() {
                $('.pagination').html(''); // reset pagination div
                var trnum = 0; // reset tr counter 
                var maxRows = parseInt($(this).val()); // get Max Rows from select option

                var totalRows = $(table + ' tbody tr').length; // numbers of rows 
                $(table + ' tr:gt(0)').each(function() { // each TR in  table and not the header
                    trnum++; // Start Counter 
                    if (trnum > maxRows) { // if tr number gt maxRows

                        $(this).hide(); // fade it out 
                    }
                    if (trnum <= maxRows) {
                        $(this).show();
                    } // else fade in Important in case if it ..
                }); //  was fade out to fade it in 
                if (totalRows > maxRows) { // if tr total rows gt max rows option
                    var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..  
                    //	numbers of pages 
                    for (var i = 1; i <= pagenum;) { // for each page append pagination li 
                        $('.pagination').append('<li data-page="' + i + '">\
                                                                                        <span>' + i++ + '<span class="sr-only">(current)</span></span>\
                                                                                        </li>').show();
                    } // end for i 


                } // end if row count > max rows
                $('.pagination li:first-child').addClass('active'); // add active class to the first li 


                //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
                showig_rows_count(maxRows, 1, totalRows);
                //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT

                $('.pagination li').on('click', function(e) { // on click each page
                    e.preventDefault();
                    var pageNum = $(this).attr('data-page'); // get it's number
                    var trIndex = 0; // reset tr counter
                    $('.pagination li').removeClass('active'); // remove active class from all li 
                    $(this).addClass('active'); // add active class to the clicked 


                    //SHOWING ROWS NUMBER OUT OF TOTAL
                    showig_rows_count(maxRows, pageNum, totalRows);
                    //SHOWING ROWS NUMBER OUT OF TOTAL



                    $(table + ' tr:gt(0)').each(function() { // each tr in table not the header
                        trIndex++; // tr index counter 
                        // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                        if (trIndex > (maxRows * pageNum) || trIndex <= ((maxRows * pageNum) -
                                maxRows)) {
                            $(this).hide();
                        } else {
                            $(this).show();
                        } //else fade in 
                    }); // end of for each tr in table
                }); // end of on click pagination list
            });
            // end of on select change 

            // END OF PAGINATION 

        }




        // SI SETTING
        $(function() {
            // Just to append id number for each row  
            default_index();

        });

        //ROWS SHOWING FUNCTION
        function showig_rows_count(maxRows, pageNum, totalRows) {
            //Default rows showing
            var end_index = maxRows * pageNum;
            var start_index = ((maxRows * pageNum) - maxRows) + parseFloat(1);
            var string = 'Showing ' + start_index + ' to ' + end_index + ' of ' + totalRows + ' entries';
            $('.rows_count').html(string);
        }

        // CREATING INDEX
        // function default_index() {
        //   $('table tr:eq(0)').prepend('<th> ID </th>')

        // 					var id = 0;

        // 					$('table tr:gt(0)').each(function(){	
        // 						id++
        // 						$(this).prepend('<td>'+id+'</td>');
        // 					});
        // }

        // All Table search script
        function FilterkeyWord_all_table() {

            // Count td if you want to search on all table instead of specific column

            var count = $('.table').children('tbody').children('tr:first-child').children('td').length;

            // Declare variables
            var input, filter, table, tr, td, i;
            input = document.getElementById("search_input_all");
            var input_value = document.getElementById("search_input_all").value;
            filter = input.value.toLowerCase();
            if (input_value != '') {
                table = document.getElementById("table-id");
                tr = table.getElementsByTagName("tr");

                // Loop through all table rows, and hide those who don't match the search query
                for (i = 1; i < tr.length; i++) {

                    var flag = 0;

                    for (j = 0; j < count; j++) {
                        td = tr[i].getElementsByTagName("td")[j];
                        if (td) {

                            var td_text = td.innerHTML;
                            if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                                //var td_text = td.innerHTML;  
                                //td.innerHTML = 'shaban';
                                flag = 1;
                            } else {
                                //DO NOTHING
                            }
                        }
                    }
                    if (flag == 1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            } else {
                //RESET TABLE
                $('#maxRows').trigger('change');
            }
        }
        </script>



        <script>
        $("a.sidebar-link").click(function() {
            $("a.sidebar-link").css("background-color", "");
            $(this).css("background-color", "#F5E9D4");
        });
        </script>


        <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("sidebar-link");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
        </script>

        <script>
        {
            {
                -- // const myElement = document.getElementById("subm");
                // myElement.style.color = "red" --}}
                {
                    {
                        --
        </script> --}}
    </body>


    <!-- Mirrored from zuramai.github.io/mazer/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Aug 2021 11:16:21 GMT -->

    </html>