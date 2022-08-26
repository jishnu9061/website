<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS</title>

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/all.css">
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>assets/css/app.css">
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>assets/css/customstyle.css">
    <link rel="shortcut icon" href="<?php echo e(asset('/')); ?>assets/images/favicon.html" type="image/x-icon">
    <link rel="stylesheet"href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    
</head>
<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="<?php echo e(url('home')); ?>">
                                
                                <h3 class="text-white">Logo</h3>
                            </a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                            <?php if(Auth::user()->role == 'superadmin'): ?>
                                <li class="sidebar-item  has-sub">
                                    <a href="#" class='sidebar-link'>
                                        <i class="bi bi-stack"></i>
                                            <span>Register main</span>
                                    </a>
                                    <ul class="submenu ">
                                        <li class="submenu-item ">
                                            <a href="<?php echo e(url('hospitals')); ?>" class='sidebar-link'>Add hospitals</a>
                                        </li>
                                        <li class="submenu-item ">
                                            <a href="<?php echo e(url('admins')); ?>" class='sidebar-link'>Add Admins</a>
                                        </li>
                                        <li class="submenu-item ">
                                            <a href="<?php echo e(url('allhospitals')); ?>" class='sidebar-link'>All hospitals</a>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                            <?php if(Auth::user()->role == 'hospitaladmin'): ?>
                                <li class="sidebar-item  has-sub">
                                    <a href="<?php echo e(url('usermanagement')); ?>" class='sidebar-link'>
                                        <i class="fa-regular fa-user"  style="font-weight: 300;"></i>
                                            <span>User Management</span>
                                    </a>
                                    <?php
                                        $admin = array("usermanagement", "adddepartments","add_labdept","add_surgery_types","adddepartmentadmin","addroomstypes","addroomtypes","beds","Add_Ambulance_details");
                                        $lab = array("labcategory", "labtests", "labprofile","patlabtest","alllabtestsview");
                                        $hr = array("addallowance", "addstaffs", "staffs","loans","payslip","attendance","attendanceview","payslipbulk","generatepayslip","managestaff");
                                        $accounts = array("ledger_acount_categories", "ledger_acount_subcategories","ledger_budget_category", "ledger_acounts","journal","ledger","trialbalance","profitandlossaccount");
                                        $doctor = array("Consultation", "todaysappointments", "reappointments","allpatients","dutyschedulefetch","applyleave");
                                        $casuality = array("casuality_patient", "ambulance_details");
                                        $pharmacy = array("serving", "manage_biils","allmedicinez", "allmedicinez","serving", "manage_biils");
                                        $counter = array("todaysappointmentsall", "appointment","patientregistration", "patientinsurance");
                                        $store=array("addsuppliers", "view_manufacturers","view_medicine", "view_medicine_category","view_medicine_type","view_unit","view_medicine_group","view_brand_name","view_generic_name","reorder","view_purchase","stock_details","accounting_method","payment_type");
                                        $operation_t=array("theatre_category");
                                    ?>
                                    <?php if(in_array(request()->path(), $admin)): ?>
                                        <ul class="submenu" style="display: block;">
                                        <?php else: ?>
                                            <ul class="submenu" style="display: none;">
                                    <?php endif; ?>
                                    <li class="submenu-item ">
                                        <a href="<?php echo e(url('usermanagement')); ?>" class='sidebar-link'>
                                            <span>Add Roles</span>
                                        </a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="<?php echo e(url('adddepartments')); ?>" class='sidebar-link'>
                                            <span>Add Departments</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                                </li>
                            <?php endif; ?>
                            <?php if(Auth::user()->role == 'hr' || Auth::user()->role == 'hospitaladmin'): ?>
                                <?php
                                    $hr = array("addallowance", "addstaffs", "staffs","loans","payslip","attendance","attendanceview","payslipbulk","generatepayslip","managestaff");
                                ?>
                                <li class="sidebar-item  has-sub">
                                    <a href="<?php echo e(url('home')); ?>" class='sidebar-link'>
                                        <i class="bi bi-grid-fill" style="font-weight: 400;"></i>
                                            <span>HR</span>
                                    </a>
                                    <?php if(in_array(request()->path(),$hr)): ?>
                                        <ul class="submenu" style="display: block;">
                                        <?php else: ?>
                                            <ul class="submenu" style="display: none;">
                                    <?php endif; ?>
                                    <li class="submenu-item ">
                                        <a href="<?php echo e(url('addallowance')); ?>" class='sidebar-link'>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="<?php echo e(url('addstaffs')); ?>" class='sidebar-link'>
                                            <span>Add Staffs</span>
                                        </a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="<?php echo e(url('staffs')); ?>" class='sidebar-link'>
                                            <span>Manage Staffs</span>
                                        </a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="<?php echo e(url('loans')); ?>" class='sidebar-link'>
                                            <span>Loans</span>
                                        </a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="<?php echo e(url('payslip')); ?>" class='sidebar-link'>
                                            <span>Payslip(Bulk)</span>
                                        </a>
                                    </li>
                                    
                                    <li class="submenu-item ">
                                        <a href="<?php echo e(url('attendanceview')); ?>" class='sidebar-link'>
                                            <span>Attendance(Manual)</span>
                                        </a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="<?php echo e(url('attendance')); ?>" class='sidebar-link'>
                                            <span>Attendance(Csv Upload)</span>
                                        </a>
                                    </li>
                                </ul>
                                </li>
                            <?php endif; ?>
                            <?php if(Auth::user()->role == 'account' || Auth::user()->role == 'hospitaladmin'): ?>
                                <?php
                                    $accounts = array("ledger_acount_categories", "ledger_acount_subcategories","ledger_budget_category", "ledger_acounts","journal","ledger","trialbalance","profitandlossaccount","balancesheet","stock_section","stock_issue","store_ledger","stock_categories","stock_subcategories","stock_items");
                                ?>
                            <li class="sidebar-item  has-sub">
                                <a href="<?php echo e(url('home')); ?>" class="sidebar-link">
                                <i class="fa fa-chart-line" style="font-weight: 400;"></i>

                                           <span>Accounts</span>
                                       </a>
                                   <?php if(in_array(request()->path(), $accounts)): ?>
                                       <ul class="submenu" style="display: block;">
                                     <?php else: ?>
                                     <ul class="submenu" style="display: none;">
                                      <?php endif; ?>
                                           <li class="submenu-item  ">
                                                <a href="<?php echo e(url('ledger_acount_categories')); ?>" class=" sidebar-link">
                                                <span>Account Type</span></a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="<?php echo e(url('ledger_acount_subcategories')); ?>" class="sidebar-link">
                                               <span>Groups</span></a>
                                           </li>
                                           <li class="submenu-item ">
                                                <a href="<?php echo e(url('ledger_budget_category')); ?>" class="sidebar-link">
                                                <span>Budget Category</span></a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="<?php echo e(url('ledger_acounts')); ?>" class=" sidebar-link">
                                               <span>Ledger Account</span>
                                           </a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="<?php echo e(url('journal')); ?>" class=" sidebar-link" >
                                               <span>Journal</span>
                                           </a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="<?php echo e(url('ledger')); ?>" class=" sidebar-link">
                                                   <span>Ledger </span></a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="<?php echo e(url('trialbalance')); ?>" class=" sidebar-link">
                                                   <span>Trial Balance </span></a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="<?php echo e(url('profitandlossaccount')); ?>" class=" sidebar-link">
                                                   <span>Profit And loss Account </span></a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="<?php echo e(url('balancesheet')); ?>" class=" sidebar-link">
                                                   <span>Balance Sheet </span></a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="<?php echo e(url('stock_section')); ?>" class=" sidebar-link">
                                                   <span>Stock Reciept </span></a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="<?php echo e(url('stock_issue')); ?>" class=" sidebar-link">
                                                   <span>Stock Issue </span></a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="<?php echo e(url('store_ledger')); ?>" class=" sidebar-link">
                                                   <span>Store Ledger </span></a>
                                           </li>

                                           <li class="submenu-item ">
                                               <a href="<?php echo e(url('stock_categories')); ?>" class=" sidebar-link">
                                                   <span>Stock Categories </span></a>
                                           </li>

                                           <li class="submenu-item ">
                                               <a href="<?php echo e(url('stock_subcategories')); ?>" class=" sidebar-link">
                                                   <span>Stock Sub Categories </span></a>
                                           </li>
                                           <li class="submenu-item ">
                                               <a href="<?php echo e(url('stock_items')); ?>" class=" sidebar-link">
                                                   <span>Stock Items </span></a>
                                           </li>
                                       </ul>
                                   </li>
                                   <?php endif; ?>
                            <?php if(Auth::user()->role == 'store' || Auth::user()->role == 'hospitaladmin'): ?>
                                <?php
                                    $store=array("addsuppliers", "view_manufacturers","view_medicine", "view_medicine_category","view_medicine_type","view_unit","view_medicine_group","view_brand_name","view_generic_name","reorder","view_purchase","stock_details","accounting_method","payment_type");
                                ?>
                                <li class="sidebar-item  has-sub">
                                    <a href="<?php echo e(url('home')); ?>" class='sidebar-link'>
                                        <i class="bi bi-shop"  ></i>
                                            <span>Inventory </span>
                                    </a>
                                    <?php if(in_array(request()->path(),$store)): ?>
                                        <ul class="submenu" style="display: block;">
                                            <?php else: ?>
                                            <ul class="submenu" style="display:none;">
                                    <?php endif; ?>
                                    <li class="submenu-item  ">
                                        <a href="<?php echo e(url('addsuppliers')); ?>" class=" sidebar-link">
                                            <span>Suppliers</span></a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="<?php echo e(url('view_manufacturers')); ?>" class=" sidebar-link">
                                            <span>Manufacturers</span></a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="<?php echo e(url('show_items_details')); ?>" class=" sidebar-link">
                                            <span>Items</span>
                                        </a>
                                    </li>
                                    <!-- <li class="submenu-item ">
                                        <a href="<?php echo e(url('view_request')); ?>" class=" sidebar-link">
                                            <span>Requested Items</span></a>
                                    </li> -->
                                    <!-- <li class="submenu-item ">
                                        <a href="<?php echo e(url('display_issued_stock')); ?>" class=" sidebar-link">
                                            <span>Issued Items</span></a>
                                    </li> -->
                                    <li class="submenu-item ">
                                        <a href="<?php echo e(url('store_reorder')); ?>" class=" sidebar-link">
                                            <span>Reorder Level</span></a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="<?php echo e(url('empty_stock')); ?>" class=" sidebar-link">
                                            <span>Empty Stock</span></a>
                                    </li>
                                    <!-- <li class="submenu-item ">
                                        <a href="<?php echo e(url('show_substore')); ?>" class=" sidebar-link">
                                            <span>Sub Stores</span></a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="<?php echo e(url('view_substore')); ?>" class=" sidebar-link">
                                            <span>Sub Store Details</span></a>
                                    </li> -->
                                    <!-- <li class="submenu-item ">
                                        <a href="<?php echo e(url('view_substore_details')); ?>" class=" sidebar-link">
                                            <span>Add Department Stores</span></a>
                                    </li> -->
                                    <li class="sidebar-item  has-sub">
                                        <a href="#" class="sidebar-link">
                                            <i class="fa fa-purchase" style="font-weight: 400;"></i>
                                                <span>Purchase</span>
                                        </a>
                                        <ul class="submenu" style="display: none;">
                                            <li class="submenu-item  ">
                                                <a href="<?php echo e(url('view_purchase')); ?>" class=" sidebar-link">
                                                    <span>New Purchase</span>
                                                </a>
                                                <a href="<?php echo e(url('received_order_detailes')); ?>" class=" sidebar-link">
                                                    <span>manage_purchase</span>
                                                </a>
                                                <a href="<?php echo e(url('received_order_detailes')); ?>" class=" sidebar-link">
                                                    <span>Purchase Return</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li class="sidebar-item  has-sub">
                                        <a href="#" class="sidebar-link">
                                            <i class="" style="font-weight: 400;"></i>
                                                <span>Settings</span>
                                        </a>
                                        <ul class="submenu" style="display: none;">
                                            <!-- <li class="submenu-item  ">
                                                <a href="<?php echo e(url('accounting_method')); ?>" class=" sidebar-link">
                                                    <span>Inventory method</span>
                                                </a>
                                            </li> -->
                                            <li class="submenu-item ">
                                                <a href="<?php echo e(url('payment_type')); ?>" class=" sidebar-link">
                                                    <span>Payment Type</span></a>
                                            </li>
                                            <li class="submenu-item ">
                                                <a href="<?php echo e(url('view_medicine_category')); ?>" class=" sidebar-link">
                                                <span>Item Category</span>
                                            </a>
                                            </li>
                                            
                                            
                                        </ul>
                                    </li>
                                </li>
                            <?php endif; ?>
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
            <div class="page-heading" >
                
                <h3 style="color:#c30147;">ERP Global</h3>
            </div>
            <a href="javascript:history.back()"  class="btn btn-primary" style="margin-bottom:10px;">Back</a>
            <div style="margin-left: 83%;margin-top: -8%;">
                <div class="avatar avatar-xl">
                    <img  style="margin-left: 28%;" src="assets/images/faces/1.jpg" alt="Face 1">
                </div>
                <h5 class="font-bold"> <?php echo e(Auth::user()->name); ?></h5>
                <h6 class="text-muted mb-0"><a href="<?php echo e(url('logt')); ?>">logout</a></h6>
                <div>
                    <p><?php echo e(Auth::user()->role); ?></p>
                </div>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <?php echo $__env->yieldContent('content'); ?>
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
    <script src="<?php echo e(asset('/')); ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo e(asset('/')); ?>assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo e(asset('/')); ?>assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="<?php echo e(asset('/')); ?>assets/js/pages/dashboard.js"></script>

    <script src="<?php echo e(asset('/')); ?>assets/js/main.js"></script>
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
                 var SITEURL = "<?php echo e(url('/')); ?>";
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
</body>


<!-- Mirrored from zuramai.github.io/mazer/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Aug 2021 11:16:21 GMT -->

</html>
<?php /**PATH D:\xampp\htdocs\cra_project\CRA\resources\views/layouts/hmsmain.blade.php ENDPATH**/ ?>