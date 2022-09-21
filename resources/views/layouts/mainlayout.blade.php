<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS</title>

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/all.css">
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.html" type="image/x-icon">
    <link rel="stylesheet"href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html">

                                <img src="assets/images/logo/logo.png" alt="Logo" srcset="">
                            </a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                          <ul class="menu">
                        <li class="sidebar-title">Menu</li>



                          @if(Auth::user()->role == 'superadmin')

                        <li class="sidebar-item active ">
                            <a href="{{url('home')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                      <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Register main</span>
                            </a>
                            <ul class="submenu ">
                                 <li class="submenu-item ">
                                    <a href="{{url('hospitals')}}">Add hospitals</a>
                                </li>

                                <li class="submenu-item ">
                                    <a href="{{url('admins')}}">Add Admins</a>
                                </li>

                                 <li class="submenu-item ">
                                    <a href="{{url('allhospitals')}}">All hospitals</a>
                                </li>


                            </ul>
                        </li>

                           @endif
                        @foreach($key as $k)
                          <li class="sidebar-item">
                            <a href="{{url($k->previlages)}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>{{$k->text}}</span>
                            </a>
                          </li>
                        @endforeach
                      @if(Auth::user()->role == 'hospitaladmin')

                      <li class="sidebar-item  has-sub">
                      <a href="{{url('usermanagement')}}" class='sidebar-link'>
<i class="fa-regular fa-user"  style="font-weight: 300;"></i>
                                <span>User Management</span>
                            </a>
                            <ul class="submenu" style=";">
                                <span>Admin</span>
                            </a>
                            <ul class="submenu" style=";">
                            <li class="submenu-item ">
                           <a href="{{url('usermanagement')}}" class='sidebar-link'>

                                <span>Admin</span>
                            </a>

                                </li>

                                <li class="submenu-item ">
                                <a href="{{url('adddepartments')}}" class='sidebar-link'>

                                <span>Add Departments</span>
                            </a>                                </li>

                                <li class="submenu-item ">
                                <a href="{{url('adddepartmentadmin')}}" class='sidebar-link'>

                                <span>Add Department Admin</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('addroomstypes')}}" class='sidebar-link'>

                                <span>Add Room Types</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('addroomtypes')}}" class='sidebar-link'>

                                <span>Add Rooms</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('beds')}}" class='sidebar-link'>

                                <span>Room Management</span>
                            </a>
                                </li>

                                <li class="submenu-item ">
                                <a href="{{url('allocatebedsandrooms')}}" class='sidebar-link'>

                                <span>Add Beds</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('Add_Ambulance_details')}}" class='sidebar-link'>

                            <span>Ambulance Services</span>
                         </a>
                                </li>
                            </ul>
                        </li>
<!--
                          <li class="sidebar-item active ">
                            <a href="{{url('usermanagement')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>User Management</span>
                            </a>
                        </li>

                          <li class="sidebar-item">
                            <a href="{{url('adddepartments')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Add Departments</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{url('adddepartmentadmin')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Add Department Admin</span>
                            </a>
                        </li>
                          <li class="sidebar-item">
                            <a href="{{url('allocatebedsandrooms')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Add Beds</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('Add_Ambulance_details')}}" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Ambulance Services</span>
                             </a>
                           </li>
                           @endif


                            @if(Auth::user()->role == 'lab')

                            <li class="sidebar-item  has-sub">
                            <a href="{{url('home')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill" style="font-weight: 400;"></i>
                                <span>LAB</span>
                            </a>
                            <ul class="submenu" style="display: none;">
                                <li class="submenu-item ">
                                <a href="{{url('labcategory')}}" class='sidebar-link'>

                                <span>Lab Category</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('labtests')}}" class='sidebar-link'>

                                <span>Lab Tests</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('labprofile')}}" class='sidebar-link'>

                                <span>Lab Profile</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('patlabtest')}}" class='sidebar-link'>

                                <span>Patient's Lab test</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('alllabtestsview')}}" class='sidebar-link'>

                                <span>All Lab Tests</span>
                            </a>
                                </li>
                            </ul>
                        </li>


                        <!-- <li class="sidebar-item active ">
                            <a href="{{url('home')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Lab</span>
                            </a>
                        </li>
                      <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Lab</span>
                            </a>
                            <ul class="submenu">
                                 <li class="submenu-item">
                                    <a href="{{url('addstaffs')}}">Lab Tests</a>
                                </li>
                                 <li class="submenu-item">
                                    <a href="{{url('staffs')}}">All staffs</a>
                                </li>

                            </ul>
                        </li>
                         <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Salary</span>
                            </a>
                            <ul class="submenu">
                                 <li class="submenu-item">
                                    <a href="{{url('addsalary')}}">Add salary</a>
                                </li>
                                 <li class="submenu-item">
                                    <a href="{{url('addallowance')}}">Add allowance</a>
                                </li>

                            </ul>
                        </li> -->

                           @endif
                           @if(Auth::user()->role == 'HR'|| Auth::user()->role == 'hospitaladmin')

                           <li class="sidebar-item  has-sub">
                           <a href="{{url('home')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill" style="font-weight: 400;"></i>
                                <span>HR</span>
                            </a>
                            <ul class="submenu" style="display: none;">
                                <li class="submenu-item ">
                                <a href="{{url('addallowance')}}" class='sidebar-link'>

                                <span>Settings</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('addstaffs')}}" class='sidebar-link'>

                                <span>Add Staffs</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('staffs')}}" class='sidebar-link'>

                                <span>Manage Staffs</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                  <a href="{{url('loans')}}" class='sidebar-link'>

                                <span>Loans</span>
                            </a>
                                </li>
                                 <li class="submenu-item ">
                                 <a href="{{url('attendance')}}" class='sidebar-link'>

                                <span>Attendance</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('manualattendance')}}" class='sidebar-link'>

                                <span>Manual Attendance</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('payslip')}}" class='sidebar-link'>

                                <span>Payslip</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('attendanceview')}}" class='sidebar-link'>

                                <span>Attendance</span>
                            </a>
                                </li>
                            </ul>
                        </li>



                        <li class="sidebar-item  has-sub">
                     <a href="#" class="sidebar-link">
                     <i class="fa fa-chart-line" style="font-weight: 400;"></i>

                                <span>Accounts</span>
                            </a>
                            <ul class="submenu" style="display: none;">
                                <li class="submenu-item  ">
                                    <a href="{{ url('ledger_acount_categories') }}" class=" sidebar-link">
                                        <span>Account Categories</span></a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('ledger_acount_subcategories') }}" class=" sidebar-link">
                                        <span>Account Subcategories </span></a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('ledger_acounts') }}" class=" sidebar-link">
                                    <span>Ledger Types</span>
                                </a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('journal') }}" class=" sidebar-link" >
                                    <span>Journal</span>
                                </a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('ledger') }}" class=" sidebar-link">
                                        <span>Ledger </span></a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('trialbalance') }}" class=" sidebar-link">
                                        <span>Trial Balance </span></a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('profitandlossaccount') }}" class=" sidebar-link">
                                        <span>Profit And loss Account </span></a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('balancesheet') }}" class=" sidebar-link">
                                        <span>Balance Sheet </span></a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('stock_section') }}" class=" sidebar-link">
                                        <span>Stock </span></a>
                                </li>
                            </ul>
                        </li>

                           @endif








                             {{-- @if(Auth::user()->role == 'Doctor'|| Auth::user()->role == 'hospitaladmin') --}}


                        <li class="sidebar-item  has-sub">
                        <a href="{{url('home')}}" class='sidebar-link'>
                        <i class="fa fa-stethoscope" style="font-weight: 400;"></i>
                                <span>Doctor</span>
                            </a>
                            <ul class="submenu" style="display: none;">
                                <li class="submenu-item ">
                                <a href="{{url('Consultation')}}" class='sidebar-link'>

                                <span>Consultation</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('todaysappointments')}}" class='sidebar-link'>

                                <span>Today's Appointments</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('reappointments')}}" class='sidebar-link'>

                                <span>Re Apppointments</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('allpatients')}}" class='sidebar-link'>

                                <span>All Patients</span>
                            </a>

                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('depqueue')}}" class='sidebar-link'>

                                <span>Queue</span>
                            </a>

                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('dutyschedulefetch')}}" class='sidebar-link'>

                                <span>Duty Schedule</span>
                            </a>

                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('applyleave')}}" class='sidebar-link'>

                                <span>Apply leave</span>
                            </a>

                                </li>
                            </ul>
                        </li>


                           {{-- @endif --}}

                          @if(Auth::user()->role == 'pharma'|| Auth::user()->role == 'hospitaladmin')

                          <li class="sidebar-item  has-sub">
                          <a href="{{url('home')}}" class='sidebar-link'>
                          <i class="fa fa-book-medical " style="font-weight: 400;"></i>

                                <span>Pharmacy</span>
                            </a>
                            <ul class="submenu" style="display: none;">
                                <li class="submenu-item ">
                                <a href="{{url('serving')}}" class='sidebar-link'>

                                <span>Serve</span>
                            </a>

                                </li>
                                <li class="submenu-item ">
                                {{-- <a href="{{url('addmedicines')}}" class='sidebar-link'>

                                <span>Add Medicines</span>
                            </a> --}}
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('manage_biils')}}" class='sidebar-link'>

                                <span>Billing</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('allmedicinez')}}" class='sidebar-link'>

                                <span>All Medicines</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('serving')}}" class='sidebar-link'>

                                <span>Serve</span>
                            </a>

                                </li>
                                <li class="submenu-item ">
                                {{-- <a href="{{url('addmedicines')}}" class='sidebar-link'>

                                <span>Add Medicines</span>
                            </a> --}}
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('manage_biils')}}" class='sidebar-link'>

                                <span>Billing</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('allmedicinez')}}" class='sidebar-link'>

                                <span>All Medicines</span>
                            </a>
                                </li>
                              </li>
                                <li class="submenu-item ">
                                <a href="{{url('alldoctors')}}" class='sidebar-link'>
                                <span>Doctors</span>
                            </a>

                                </li>
                                <li class="submenu-item ">

                            <a href="{{url('reorder')}}" class='sidebar-link'>

                                <span>Reorder</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('expired')}}" class='sidebar-link'>

                                <span>Expired Items</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('request_items')}}" class='sidebar-link'>

                                <span>Request Item</span>
                            </a>
                                </li>
                            </ul>
                        </li>





                           @endif
                         @if(Auth::user()->role == 'counter'|| Auth::user()->role == 'hospitaladmin')

                         <li class="sidebar-item  has-sub">
                        <a href="{{url('home')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Counter</span>
                            </a>
                            <ul class="submenu" style="display: none;">
                                <li class="submenu-item ">
                                <a href="{{url('counter')}}" class='sidebar-link'>

                                <span>Counter</span>
                             </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('todaysappointmentsall')}}" class='sidebar-link'>

                                <span>Today's Appointments</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('appointment')}}" class='sidebar-link'>

                                <span>Apppointment</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                 <a href="{{url('allpatients')}}" class='sidebar-link'>

                                <span>All Patients</span>
                            </a>
                                </li>
                                  <li class="submenu-item ">
                                  <a href="{{url('patientregistration')}}" class='sidebar-link'>

                                <span>Patientregistration</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('patientinsurance')}}" class='sidebar-link'>

                                <span>Patient Insurance</span>
                            </a>
                                </li>
                            </ul>
                        </li>





                           @endif

                           @if(Auth::user()->role == 'Department Admin')
                           <li class="sidebar-item  has-sub">
                        <a href="{{url('home')}}" class='sidebar-link'>
                                <span>Dashboard</span>
                            </a>
                            <ul class="submenu" style="display: none;">
                                <li class="submenu-item ">
                                <a href="{{url('depstaffs')}}" class='sidebar-link'>

                                <span>Staffs</span>
                             </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('depstock')}}" class='sidebar-link'>

                                <span>Stock</span>
                             </a>

                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('depbeds')}}" class='sidebar-link'>

                                <span>Beds</span>
                             </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('deppats')}}" class='sidebar-link'>

                                <span>Patients</span>
                             </a>
                                </li>
                                 <li class="submenu-item ">
                                 <a href="{{url('depleaves')}}" class='sidebar-link'>

                                <span>Manage Leaves</span>
                             </a>
                                </li>
                            </ul>
                        </li>



                           @endif






                           @if(Auth::user()->role == 'casuality'|| Auth::user()->role == 'hospitaladmin' )



<li class="sidebar-item  has-sub">
<a href="{{url('home')}}" class='sidebar-link'>
     <i class="bi bi-grid-fill"></i>
     <span>Casuality</span>
 </a>
 <ul class="submenu" style="display: none;">
     <li class="submenu-item ">
     <a href="#" class='sidebar-link'>

     <span>Patient Queue</span>
 </a>
     </li>
     <li class="submenu-item ">
     <a href="{{url('casuality_patient')}}" class='sidebar-link'>

        <span>Add Casualities</span>
    </a>
     </li>
     <li class="submenu-item ">
     <a href="{{url('all_catualitypatients')}}" class='sidebar-link'>

     <span>All Patients</span>
 </a>
     </li>
     <li class="submenu-item ">
     <a href="#" class='sidebar-link'>

        <span>Duty Doctors</span>
    </a>
     </li>
     <li class="submenu-item ">
     <a href="#" class='sidebar-link'>

        <span>Duty Nurses</span>
     </a>
     </li>
     <li class="submenu-item ">
     <a href="#" class='sidebar-link'>

        <span>Nursing Notes</span>
     </a>
     </li>
     <li class="submenu-item ">
     {{-- <a href="{{url('Add_Ambulance_details')}}" class='sidebar-link'>

        <span>Ambulance Services</span>
     </a> --}}
     </li>
     <li class="submenu-item ">
     <a href="{{url('ambulance_details')}}" class='sidebar-link'>

         <span>Ambulance Services</span>
      </a>
     </li>
     <li class="submenu-item ">
     <a href="{{url('beds')}}" class='sidebar-link'>

         <span>Room Management</span>
     </a>
     </li>
 </ul>
</li>






   @endif


   @if(Auth::user()->role == 'nurse'|| Auth::user()->role == 'hospitaladmin')


<li class="sidebar-item  has-sub">
<a href="{{url('home')}}" class='sidebar-link'>
<i class="fa fa-user-nurse" style="font-weight: 400;"></i>
    <span>Nurse</span>
</a>
<ul class="submenu" style="display: none;">
    <li class="submenu-item ">
    <a href="#" class='sidebar-link'>

    <span>Duty Nurses</span>
</a>

    </li>
    <li class="submenu-item ">
    <a href="todaysappointments" class='sidebar-link'>

    <span>Todays Appointments</span>
</a>
    </li>
    <li class="submenu-item ">
    <a href="beds" class='sidebar-link'>

    <span>Beds</span>
</a>
    </li>
    <li class="submenu-item ">
    <a href="#" class='sidebar-link'>

       <span>Medicine Stock</span>
   </a>
    </li>
    <li class="submenu-item ">
    <a href="#" class='sidebar-link'>

       <span>Patients Ward Details</span>
   </a>
    </li>
    <li class="submenu-item ">
    <a href="#" class='sidebar-link'>

       <span>Cleaning Staff</span>
    </a>
    </li>
    <li class="submenu-item ">
    <a href="#" class='sidebar-link'>

       <span>Injection/Dressing Room </span>
    </a>
    </li>
    <li class="submenu-item ">
    <a href="{{url('dutyschedulefetch')}}" class='sidebar-link'>

    <span>Duty Schedule</span>
</a>
    </li>
    <li class="submenu-item ">
    <a href="applyleave" class='sidebar-link'>

       <span>Apply Leave</span>
    </a>
    </li>
</ul>
</li>



  @endif







                           @if(Auth::user()->role == 'casuality'|| Auth::user()->role == 'hospitaladmin' )



<li class="sidebar-item  has-sub">
<a href="{{url('home')}}" class='sidebar-link'>
     <i class="bi bi-grid-fill"></i>
     <span>Casuality</span>
 </a>
 <ul class="submenu" style="display: none;">
     <li class="submenu-item ">
     <a href="#" class='sidebar-link'>

     <span>Patient Queue</span>
 </a>
     </li>
     <li class="submenu-item ">
     <a href="{{url('casuality_patient')}}" class='sidebar-link'>

        <span>Add Casualities</span>
    </a>
     </li>
     <li class="submenu-item ">
     <a href="{{url('all_catualitypatients')}}" class='sidebar-link'>

     <span>All Patients</span>
 </a>
     </li>
     <li class="submenu-item ">
     <a href="#" class='sidebar-link'>

        <span>Duty Doctors</span>
    </a>
     </li>
     <li class="submenu-item ">
     <a href="#" class='sidebar-link'>

        <span>Duty Nurses</span>
     </a>
     </li>
     <li class="submenu-item ">
     <a href="#" class='sidebar-link'>

        <span>Nursing Notes</span>
     </a>
     </li>
     <li class="submenu-item ">
     {{-- <a href="{{url('Add_Ambulance_details')}}" class='sidebar-link'>

        <span>Ambulance Services</span>
     </a> --}}
     </li>
     <li class="submenu-item ">
     <a href="{{url('ambulance_details')}}" class='sidebar-link'>

         <span>Ambulance Services</span>
      </a>
     </li>
     <li class="submenu-item ">
     <a href="{{url('beds')}}" class='sidebar-link'>

         <span>Room Management</span>
     </a>
     </li>
 </ul>
</li>






   @endif


   @if(Auth::user()->role == 'nurse'|| Auth::user()->role == 'hospitaladmin')


<li class="sidebar-item  has-sub">
<a href="{{url('home')}}" class='sidebar-link'>
<i class="fa fa-user-nurse" style="font-weight: 400;"></i>
    <span>Nurse</span>
</a>
<ul class="submenu" style="display: none;">
    <li class="submenu-item ">
    <a href="#" class='sidebar-link'>

    <span>Duty Nurses</span>
</a>

    </li>
    <li class="submenu-item ">
    <a href="todaysappointments" class='sidebar-link'>

    <span>Todays Appointments</span>
</a>
    </li>
    <li class="submenu-item ">
    <a href="beds" class='sidebar-link'>

    <span>Beds</span>
</a>
    </li>
    <li class="submenu-item ">
    <a href="#" class='sidebar-link'>

       <span>Medicine Stock</span>
   </a>
    </li>
    <li class="submenu-item ">
    <a href="#" class='sidebar-link'>

       <span>Patients Ward Details</span>
   </a>
    </li>
    <li class="submenu-item ">
    <a href="#" class='sidebar-link'>

       <span>Cleaning Staff</span>
    </a>
    </li>
    <li class="submenu-item ">
    <a href="#" class='sidebar-link'>

       <span>Injection/Dressing Room </span>
    </a>
    </li>
    <li class="submenu-item ">
    <a href="{{url('dutyschedulefetch')}}" class='sidebar-link'>

    <span>Duty Schedule</span>
</a>
    </li>
    <li class="submenu-item ">
    <a href="applyleave" class='sidebar-link'>

       <span>Apply Leave</span>
    </a>
    </li>
</ul>
</li>



  @endif


                           @if(Auth::user()->role == 'store'|| Auth::user()->role == 'hospitaladmin')

                           <li class="sidebar-item  has-sub">
                           <a href="{{url('home')}}" class='sidebar-link'>
                           <i class="bi bi-shop"  ></i>
                                <span>Store</span>
                            </a>
                            <ul class="submenu" style="display:none;">
                            <li class="submenu-item ">
                                <a href="{{url('addsuppliers')}}" class='sidebar-link'>

                                <span>All Suppliers</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('view_manufacturers')}}" class='sidebar-link'>

                                <span>All manufacturers</span>
                            </a>
                                </li>
                                <li class="sidebar-item  has-sub">
                                <a href="#" class="sidebar-link">

                                           <span>Medicine</span>
                                       </a>
                                       <ul class="submenu" style="display: none;">
                                        <li class="submenu-item ">
                                            <a href="{{ url('view_medicine') }}" >All Medicines</a>
                                        </li>

                                           <li class="submenu-item ">
                                               <a href="{{url('view_medicine_category')}}">Category</a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="{{ url('view_medicine_type') }}">Medicine Type</a>
                                           </li>
                                           <li class="submenu-item ">
                                            <a href="{{ url('view_unit') }}">Unit</a>
                                            </li>
                                            <li class="submenu-item ">
                                                <a href="{{ url('view_medicine_group') }}">Medicine Groups</a>
                                                </li>
                                            <li class="submenu-item ">
                                                <a href="{{ url('view_brand_name') }}">Brand name</a>
                                            </li>
                                            <li class="submenu-item ">
                                                    <a href="{{ url('view_generic_name') }}">Generic name</a>
                                            </li>

                                       </ul>
                                   </li>

                                <li class="submenu-item ">
                                <a href="{{url('view_purchase')}}" class='sidebar-link'>

                                <span>Purchase Management</span>
                              </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('addroomstypes')}}" class='sidebar-link'>

                                <span>Add Room Types</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('addroomtypes')}}" class='sidebar-link'>

                                <span>Add Rooms</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('beds')}}" class='sidebar-link'>

                                <span>Room Management</span>
                            </a>
                                </li>

                                <li class="submenu-item ">
                                <a href="{{url('allocatebedsandrooms')}}" class='sidebar-link'>

                                <span>Add Beds</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('Add_Ambulance_details')}}" class='sidebar-link'>

                            <span>Ambulance Services</span>
                         </a>
                                </li>
                            </ul>
                        </li>

                           @endif

                           <li class="sidebar-item  has-sub">
                           <a href="{{url('home')}}" class='sidebar-link'>
                           <i class="bi bi-shop"  ></i>
                                <span>Store</span>
                            </a>
                            <ul class="submenu" style="display: none;">
                                <li class="submenu-item ">
                                <a href="{{url('addsuppliers')}}" class='sidebar-link'>

                                <span>All Suppliers</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('view_manufacturers')}}" class='sidebar-link'>

                                <span>All manufacturers</span>
                            </a>
                                </li>
                                <li class="sidebar-item  has-sub">
                                <a href="#" class="sidebar-link">

                                           <span>Medicine</span>
                                       </a>
                                       <ul class="submenu" style="display: none;">

                                        <li class="submenu-item ">
                                            <a href="{{ url('view_medicine') }}" >All Medicines</a>
                                        </li>

                                           <li class="submenu-item ">
                                               <a href="{{url('view_medicine_category')}}">Category</a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="{{ url('view_medicine_type') }}">Medicine Type</a>
                                           </li>
                                           <li class="submenu-item ">
                                            <a href="{{ url('view_unit') }}">Unit</a>
                                            </li>
                                            <li class="submenu-item ">
                                                <a href="{{ url('view_medicine_group') }}">Medicine Groups</a>
                                                </li>
                                            <li class="submenu-item ">
                                                <a href="{{ url('view_brand_name') }}">Brand name</a>
                                            </li>
                                            <li class="submenu-item ">
                                                    <a href="{{ url('view_generic_name') }}">Generic name</a>
                                            </li>

                                       </ul>
                                   </li>

                                   <li class="sidebar-item  has-sub">
                                   <li class="submenu-item   has-sub">
                                        <a href="#" class="sidebar-link">

                                  <span>Settings</span>
                              </a>

                                </li>
                                       <ul class="submenu" style="display: none;">
                                        <li class="submenu-item ">
                                        <a href="{{ url('payment_type') }}">Payment Type</a>
                                        </li>
</ul>
</li>
<!--

                            <li class="submenu-item ">
                              <a href="{{url('view_purchase')}}" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Purchase Management</span>
                              </a>
                            </li> -->
                            <!-- <li class="submenu-item ">
                                <a href="{{ url('payment_type') }}">Payment Type</a>
                                </li> -->
                            <!-- <a href="{{url('stock_details')}}" class='sidebar-link'>
                            </li>
                             <li class="sidebar-item  has-sub">
                            <a href="#" class="sidebar-link">

                                  <span>Settings</span>
                              </a>

                                       <ul class="submenu" style="display: none;">
                                        <li class="submenu-item ">
                                        <a href="{{ url('payment_type') }}">Payment Type</a>
                                        </li>
                                      </ul>
                                     </li>
                            <a href="{{url('stock_details')}}" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Stock Management</span>
                            </a> -->

                            <li class="submenu-item ">
                                <a href="{{url('reorder')}}" class='sidebar-link'>
                                    <span>Reorder Level</span>
                                </a>
                            </li>
                            <li class="submenu-item ">

                            <li class="submenu-item   has-sub">
                            <a href="{{url('view_purchase')}}" class='sidebar-link'>

                              <span>Purchase Management</span>
                          </a>

                                </li>
                            <li class="submenu-item   has-sub">
                            <a href="{{url('stock_details')}}" class='sidebar-link'>

                               <span>Stock Management</span>
                           </a>

                                </li>
                                        <li class="submenu-item   has-sub">
                                        <a href="#" class="sidebar-link">

                                  <span>Settings</span>
                              </a>

                                </li>
                                <li class="submenu-item   has-sub">
                                <a href="{{url('reorder')}}" class='sidebar-link'>

                            <span>Reorder Level</span>
                        </a>

                                </li>
                                <li class="submenu-item   has-sub">
                                <a href="{{url('view_request')}}" class='sidebar-link'>

                                   <span>Request Items</span>
                               </a>


                                </li>
                                 <li class="submenu-item   has-sub">
                                 <a href="{{url('serveitems')}}" class='sidebar-link'>

                                   <span>Serve Items</span>
                               </a>

                                </li>
                                    <li class="submenu-item  has-sub">
                                    <a href="{{url('allmedicinez')}}" class='sidebar-link'>

                                   <span>All Medicines</span>
                                </a>

                                </li>
                                    <li class="submenu-item  has-sub">
                                    <a href="{{url('pharma_orders')}}" class='sidebar-link'>

                                    <span>Orders</span>
                                 </a>
                                </li>


                                   </li>




                           <!-- <li class="sidebar-item  has-sub">
                           <a href="{{url('home')}}" class='sidebar-link'>
                           <i class="bi bi-shop"  ></i>
                                <span>Store</span>
                            </a>
                            <ul class="submenu" style="display: none;">
                                <li class="submenu-item ">
                                <a href="{{url('addsuppliers')}}" class='sidebar-link'>

                                <span>All Suppliers</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('view_manufacturers')}}" class='sidebar-link'>

                                <span>All manufacturers</span>
                            </a>
                                </li>
                                <li class="sidebar-item  has-sub">
                                <a href="#" class="sidebar-link">

                                           <span>Medicine</span>
                                       </a>
                                       <ul class="submenu" style="display: none;">

                                        <li class="submenu-item ">
                                            <a href="{{ url('view_medicine') }}" >All Medicines</a>
                                        </li>

                                           <li class="submenu-item ">
                                               <a href="{{url('view_medicine_category')}}">Category</a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="{{ url('view_medicine_type') }}">Medicine Type</a>
                                           </li>
                                           <li class="submenu-item ">
                                            <a href="{{ url('view_unit') }}">Unit</a>
                                            </li>
                                            <li class="submenu-item ">
                                                <a href="{{ url('view_medicine_group') }}">Medicine Groups</a>
                                                </li>
                                            <li class="submenu-item ">
                                                <a href="{{ url('view_brand_name') }}">Brand name</a>
                                            </li>
                                            <li class="submenu-item ">
                                                    <a href="{{ url('view_generic_name') }}">Generic name</a>
                                            </li>

                                       </ul>
                                   </li>

                                   <li class="sidebar-item  has-sub">
                                   <a href="#" class="sidebar-link">

                                  <span>Settings</span>
                              </a>
                                       <ul class="submenu" style="display: none;">
                                        <li class="submenu-item ">
                                        <a href="{{ url('payment_type') }}">Payment Type</a>
                                        </li>
</ul>


                            <li class="submenu-item ">
                                <a href="{{url('reorder')}}" class='sidebar-link'>
                                    <span>Reorder Level</span>
                                </a>
                            </li>
                            <li class="submenu-item ">

                            <li class="submenu-item   has-sub">
                            <a href="{{url('view_purchase')}}" class='sidebar-link'>

                              <span>Purchase Management</span>
                          </a>

                                </li>
                            <li class="submenu-item   has-sub">
                            <a href="{{url('stock_details')}}" class='sidebar-link'>

                               <span>Stock Management</span>
                           </a>


                                <li class="submenu-item   has-sub">
                                <a href="{{url('reorder')}}" class='sidebar-link'>

                            <span>Reorder Level</span>
                        </a>

                                </li>
                                <li class="submenu-item   has-sub">
                                <a href="{{url('view_request')}}" class='sidebar-link'>

                                   <span>Request Items</span>
                               </a>


                                </li>
                                 <li class="submenu-item   has-sub">
                                 <a href="{{url('serveitems')}}" class='sidebar-link'>

                                   <span>Serve Items</span>
                               </a>

                                </li>
                                    <li class="submenu-item  has-sub">
                                    <a href="{{url('allmedicinez')}}" class='sidebar-link'>

                                   <span>All Medicines</span>
                                </a>

                                </li>
                                    <li class="submenu-item  has-sub">
                                    <a href="{{url('pharma_orders')}}" class='sidebar-link'>

                                    <span>Orders</span>
                                 </a>
                                </li>


                                   </li>




                           <!-- <li class="sidebar-item  has-sub">
                           <a href="{{url('home')}}" class='sidebar-link'>
                           <i class="bi bi-shop"  ></i>
                                <span>Store</span>
                            </a>
                            <ul class="submenu" style="display: none;">
                                <li class="submenu-item ">
                                <a href="{{url('addsuppliers')}}" class='sidebar-link'>

                                <span>All Suppliers</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('view_manufacturers')}}" class='sidebar-link'>

                                <span>All manufacturers</span>
                            </a>
                                </li>
                                <li class="sidebar-item  has-sub">
                                <a href="#" class="sidebar-link">

                                           <span>Medicine</span>
                                       </a>
                                       <ul class="submenu" style="display: none;">
                                           <li class="submenu-item ">
                                               <a href="{{url('view_medicine_category')}}">Category</a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="{{ url('view_medicine_type') }}">Medicine Type</a>
                                           </li>
                                           <li class="submenu-item ">
                                            <a href="{{ url('view_unit') }}">Unit</a>
                                            </li>
                                            <li class="submenu-item ">
                                                <a href="{{ url('view_medicine_group') }}">Medicine Groups</a>
                                                </li>
                                            <li class="submenu-item ">
                                                <a href="{{ url('view_medicine') }}">Manage  Medicine</a>
                                            </li>
                                       </ul>
                                   </li>
                            {{-- <div class="dropdown">
                                <a  href="{{url('view_medicine')}}" class='sidebar-link' class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <span>Medicine </span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:#435ebe;">
                                   <ul>
                                        <a class="dropdown-item" href="{{url('view_medicine_category')}}">Category</a>
                                        <a class="dropdown-item" href="{{url('view_medicine_type')}}">Medicine Type</a>
                                        <a class="dropdown-item" href="{{url('view_unit')}}">Unit</a>
                                        <a class="dropdown-item" href="{{url('view_medicine')}}">Manage Medicine</a>
                                         <a class="dropdown-item" href="{{url('view_stock')}}">Add Stock</a>


                                    </ul>

                                </div>
                              </div> --}}
                                <li class="submenu-item ">
                                <a href="{{url('reorder')}}" class='sidebar-link'>

                                <span>Stock Management</span>
                            </a>

                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('reorder')}}" class='sidebar-link'>

                            <span>Reorder Level</span>
                        </a>

                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('view_request')}}" class='sidebar-link'>

                                   <span>Request Items</span>
                               </a>


                                </li>
                                 <li class="submenu-item ">
                                 <a href="{{url('serveitems')}}" class='sidebar-link'>

                                   <span>Serve Items</span>
                               </a>

                                </li>
                                    <li class="submenu-item ">
                                    <a href="{{url('allmedicinez')}}" class='sidebar-link'>

                                   <span>All Medicines</span>
                                </a>

                                </li>
                                    <li class="submenu-item ">
                                    <a href="{{url('pharma_orders')}}" class='sidebar-link'>

                                    <span>Orders</span>
                                 </a>
                                </li>


                                    <ul>


                                           <li class="submenu-item has-sub ">
                                               <a href="{{url('view_medicine_category')}}">LIFO</a>
                                           </li>
                                           <li class="submenu-item has-sub">
                                               <a href="{{ url('view_medicine_type') }}">Weighted Average</a>
                                           </li>
                                           <li class="submenu-item has-sub">
                                            <a href="{{ url('view_unit') }}">Expiry Date</a>
                                            </li>
                                            <li class="submenu-item has-sub">
                                                <a href="{{ url('view_medicine_group') }}">Profit Percentage</a>
                                                </li>
                                                <li class="submenu-item ">
                                                    <a href="{{ url('payment_type') }}">Payment Type</a>
                                                    </li>
                                        </ul>

                            </ul>


                              @endif
                           @if(Auth::user()->role == 'casuality'|| Auth::user()->role == 'hospitaladmin' )



                           <li class="sidebar-item  has-sub">
                           <a href="{{url('home')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Casuality</span>
                            </a>
                            <ul class="submenu" style="display: none;">
                                <li class="submenu-item ">
                                <a href="#" class='sidebar-link'>

                                <span>Patient Queue</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('casuality_patient')}}" class='sidebar-link'>

                                   <span>Add Casualities</span>
                               </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('all_catualitypatients')}}" class='sidebar-link'>

                                <span>All Patients</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="#" class='sidebar-link'>

                                   <span>Duty Doctors</span>
                               </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="#" class='sidebar-link'>

                                   <span>Duty Nurses</span>
                                </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="#" class='sidebar-link'>

                                   <span>Nursing Notes</span>
                                </a>
                                </li>
                                <li class="submenu-item ">
                                {{-- <a href="{{url('Add_Ambulance_details')}}" class='sidebar-link'>

                                   <span>Ambulance Services</span>
                                </a> --}}
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('ambulance_details')}}" class='sidebar-link'>

                                    <span>Ambulance Services</span>
                                 </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('beds')}}" class='sidebar-link'>

                                    <span>Room Management</span>
                                </a>
                                </li>
                            </ul>
                        </li>






                              @endif
                              @if(Auth::user()->role == 'nurse'|| Auth::user()->role == 'hospitaladmin')


                            <li class="sidebar-item  has-sub">
                            <a href="{{url('home')}}" class='sidebar-link'>
                            <i class="fa fa-user-nurse" style="font-weight: 400;"></i>
                                <span>Nurse</span>
                            </a>
                            <ul class="submenu" style="display: none;">
                                <li class="submenu-item ">
                                <a href="#" class='sidebar-link'>

                                <span>Duty Nurses</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="todaysappointments" class='sidebar-link'>

                                <span>Todays Appointments</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="beds" class='sidebar-link'>

                                <span>Beds</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="#" class='sidebar-link'>
                            </ul>
                            </li> -->
                                            <a href="{{ url('view_unit') }}">Expiry Date</a>
                                            </li>
                                            <li class="submenu-item has-sub">
                                                <a href="{{ url('view_medicine_group') }}">Profit Percentage</a>
                                                </li>
                                                <li class="submenu-item ">
                                                    <a href="{{ url('payment_type') }}">Payment Type</a>
                                                    </li>
                                        </ul> --}}

                            </ul>
                            </li> -->
                                            <a href="{{ url('view_unit') }}">Expiry Date</a>
                                            </li>
                                            <li class="submenu-item has-sub">
                                                <a href="{{ url('view_medicine_group') }}">Profit Percentage</a>
                                                </li>
                                                <li class="submenu-item ">
                                                    <a href="{{ url('payment_type') }}">Payment Type</a>
                                                    </li>
                                        </ul> --}}


                            </ul>
                            </li> -->
                                            <a href="{{ url('view_unit') }}">Expiry Date</a>
                                            </li>
                                            <li class="submenu-item has-sub">
                                                <a href="{{ url('view_medicine_group') }}">Profit Percentage</a>
                                                </li>
                                                <li class="submenu-item ">
                                                    <a href="{{ url('payment_type') }}">Payment Type</a>
                                                    </li>
                                        </ul> --}}


                                   <span>Medicine Stock</span>
                               </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="#" class='sidebar-link'>

                                   <span>Patients Ward Details</span>
                               </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="#" class='sidebar-link'>

                                   <span>Cleaning Staff</span>
                                </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="#" class='sidebar-link'>


                              @endif



                              @endif




                              @endif


                                   <span>Injection/Dressing Room </span>
                                </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="{{url('dutyschedulefetch')}}" class='sidebar-link'>

                                <span>Duty Schedule</span>
                            </a>
                                </li>
                                <li class="submenu-item ">
                                <a href="applyleave" class='sidebar-link'>

                                   <span>Apply Leave</span>
                                </a>
                                </li>
                            </ul>
                        </li>



                              @endif
                        <!-- <li class="sidebar-item  ">
                            <a href="{{url('counter')}}" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Counter</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Registration</span>
                            </a>
                            <ul class="submenu ">
                                 <li class="submenu-item ">
                                    <a href="{{url('allpatients')}}">All Patients</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{url('patientregistration')}}">Patient registration</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{url('patientinsurance')}}">Patient Insurance</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-breadcrumb.html">Biometric Registration</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-button.html">Report</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-card.html">ID Card</a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Appoinments</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{url('queuemanagement')}}">Queue management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{url('appointment')}}">Appoinment </a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-toastify.html"> Patient Tracking</a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Inpatient</span>
                            </a>
                            <ul class="submenu ">
                                   @if(Auth::user()->role == 'hospitaladmin')
                                <li class="submenu-item ">
                                    <a href="{{url('allocatebedsandrooms')}}">Allocate Bed & Room</a>
                                </li>
                                   @endif
                                <li class="submenu-item ">
                                    <a href="{{url('beds')}}"> Bed & Room</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="layout-vertical-1-column.html"> In Patient Admission</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="layout-vertical-navbar.html">Service Cost</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="layout-rtl.html">Patient analysis</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="layout-horizontal.html"> Pharmacy  Integration</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="layout-horizontal.html"> Patient Account</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{url('billing')}}"> Billing & Summary</a>
                                </li>
                            </ul>
                        </li> -->



<!--
                        <li class="sidebar-title">Payment </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span>Finanace</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="form-element-input.html"> Billing Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-element-input-group.html">Current Account</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-element-select.html">Cash Book</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-element-radio.html"> Deposits</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-element-checkbox.html">Credit Payments</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-element-textarea.html">Insurance Payment</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-element-textarea.html">Purchase</a>
                                </li>

                                <li class="submenu-item ">
                                    <a href="form-element-checkbox.html">Pharmacy Sales</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-element-textarea.html">Partial Payment</a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="form-layout.html" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Laboratory</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-pen-fill"></i>
                                <span>HR Management </span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="form-editor-quill.html">Staff Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-editor-ckeditor.html">Attendance</a>
                                </li>

                            </ul>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="form-layout.html" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Equipment Data</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="form-layout.html" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Radiology</span>
                            </a>
                        </li>
                        <li class="sidebar-item has-sub ">
                            <a href="table.html" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Pharmacy </span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="form-editor-quill.html">Medicine Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-editor-ckeditor.html"> Equipment Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-editor-summernote.html">Stock Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-editor-tinymce.html">POS</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-editor-tinymce.html">Purchase Module</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="table-datatable.html" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Administration</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="table-datatable.html" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Security</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Medical data</li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-pentagon-fill"></i>
                                <span>Reception</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="ui-widgets-chatbox.html">Reception Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-widgets-pricing.html">User Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-widgets-todolist.html">Privilege Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-widgets-todolist.html">Role Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-widgets-todolist.html">Data Backup</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-widgets-todolist.html">Encryption Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-widgets-todolist.html">User Tracking</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-egg-fill"></i>
                                <span>Human resource</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="ui-icons-bootstrap-icons.html">Employee Management </a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-icons-fontawesome.html">Salary Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-icons-dripicons.html">Attendance Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-icons-dripicons.html">Leave Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-icons-dripicons.html">Payroll Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-icons-dripicons.html">Loan  Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-icons-dripicons.html">Payslip  Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-icons-dripicons.html">Payroll Analysys  </a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-icons-dripicons.html">Off-Duty / Overtime </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-bar-chart-fill"></i>
                                <span>Procurement</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="ui-chart-chartjs.html">Store Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-chart-apexcharts.html">Stock Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-chart-chartjs.html">Invoice Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-chart-apexcharts.html">Bill Due Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-chart-apexcharts.html">Voucher Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-chart-apexcharts.html">Approval Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-chart-apexcharts.html">Vendor Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-chart-apexcharts.html">Payment Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-chart-apexcharts.html">Barcode</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="ui-file-uploader.html" class='sidebar-link'>
                                <i class="bi bi-cloud-arrow-up-fill"></i>
                                <span>Store management</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-map-fill"></i>
                                <span>Account Management</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="ui-map-google-map.html">Account Module</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-map-jsvectormap.html">Company Management</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-map-jsvectormap.html">Statement</a>
                                </li>
                            </ul>
                        </li>





                        <li class="sidebar-item has-sub">
                            <a href="application-chat.html" class='sidebar-link'>
                                <i class="bi bi-chat-dots-fill"></i>
                                <span>Doctors & Nurses</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="ui-map-google-map.html">Login</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-map-jsvectormap.html">Dashboard</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-map-jsvectormap.html">Admission</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-map-jsvectormap.html">Treatment </a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-map-jsvectormap.html">Service</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-map-jsvectormap.html">Test</a>
                                </li>
                            </ul>
                        </li>



                        <li class="sidebar-item has-sub ">
                            <a href="application-checkout.html" class='sidebar-link'>
                                <i class="bi bi-basket-fill"></i>
                                <span> End of shift cash reconciliation</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="ui-map-google-map.html">Account Module</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-map-jsvectormap.html">Billing Module</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-map-jsvectormap.html">Bill Calculation</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-map-jsvectormap.html">Cash Management</a>
                                </li>

                            </ul>

                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span> Medical diagnostic images</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="auth-login.html">Login</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="auth-register.html">Register</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="auth-forgot-password.html">Forgot Password</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-x-octagon-fill"></i>
                                <span> Clinical</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="error-403.html">403</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="error-404.html">404</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="error-500.html">500</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-x-octagon-fill"></i>
                                <span> Medical Equipments</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="error-403.html"> Equipment Management</a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-title">Communications</li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-x-octagon-fill"></i>
                                <span> Communications</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="error-403.html">Appoinment</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="error-404.html">SMS Module</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="error-500.html">Notification </a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="error-500.html">Chat </a>
                                </li>
                            </ul>
                        </li>



                        <li class="sidebar-item  ">
                            <a href="https://github.com/zuramai/mazer#donate" class='sidebar-link'>
                                <i class="bi bi-cash"></i>
                                <span>Donate</span>
                            </a>
                        </li>
                    -->

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3 style="color:#c30147;">{{Auth::user()->Hospital}}</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="fas fa-stethoscope"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Doctors</h6>
                                                <h6 class="font-extrabold mb-0">2</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="fas fa-user-injured"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Patients</h6>
                                                <h6 class="font-extrabold mb-0">183</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="far fa-calendar-check"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Appoinments</h6>
                                                <h6 class="font-extrabold mb-0">80</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="fas fa-file-medical"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Prescription</h6>
                                                <h6 class="font-extrabold mb-0">112</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="fas fa-file-medical-alt"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Case History</h6>
                                                <h6 class="font-extrabold mb-0">112</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="fas fa-flask"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Lab Report</h6>
                                                <h6 class="font-extrabold mb-0">112</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="fas fa-file-alt"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Document</h6>
                                                <h6 class="font-extrabold mb-0">112</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="fas fa-file-invoice-dollar"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Payment </h6>
                                                <h6 class="font-extrabold mb-0">112</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="text-white">Patients Registrations</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-profile-visit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="text-white">Profile Visit</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                            <use
                                                xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                        </svg>
                                                    <h5 class="mb-0 ms-3">Europe</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-0">862</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-europe"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-success" width="32" height="32" fill="blue" style="width:10px">
                                            <use
                                                xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                        </svg>
                                                    <h5 class="mb-0 ms-3">America</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-0">375</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-america"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-danger" width="32" height="32" fill="blue" style="width:10px">
                                            <use
                                                xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                        </svg>
                                                    <h5 class="mb-0 ms-3">Indonesia</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-0">1025</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-indonesia"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="text-white">Latest Comments</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Comment</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/5.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Congratulations on your graduation!</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/2.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Wow amazing design! Can you make another tutorial for this design?</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body bg-white py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="assets/images/faces/1.jpg" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                <h5 class="font-bold"> {{ Auth::user()->name }}</h5>
                                <p>{{ Auth::user()->role}}</p>
                                <h6 class="text-muted mb-0"><a href="{{url('logt')}}">logout</a> </h6>

                                    </div><br><br>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-white">Recent Messages</h4>
                            </div>
                            <div class="card-content pb-4">
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="assets/images/faces/4.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Hank Schrader</h5>
                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="assets/images/faces/5.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Dean Winchester</h5>
                                        <h6 class="text-muted mb-0">@imdean</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="assets/images/faces/1.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">John Dodol</h5>
                                        <h6 class="text-muted mb-0">@dodoljohn</h6>
                                    </div>
                                </div>
                                <div class="px-4">
                                    <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start
                            Conversation</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-white">Visitors Profile</h4>
                            </div>
                            <div class="card-body ">
                                <div id="chart-visitors-profile"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="http://ahmadsaugi.com/">A. Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from zuramai.github.io/mazer/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Aug 2021 11:16:21 GMT -->

</html>




