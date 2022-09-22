<?php

use App\Http\Controllers\Emergencycare;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\storecontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeoLocationController;
use App\Http\Controllers\NursingStation;
use App\Http\Controllers\issued_summary;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//  return view('frontpage');
//});
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/hr', 'HomeController@hr')->name('hr');
Route::get('/pharmacy', 'HomeController@pharmacy')->name('pharmacy');
Route::get('/doctor', 'HomeController@doctor')->name('doctor');
Route::get('/nurse', 'HomeController@nurse')->name('nurse');
Route::get('/counter', 'HomeController@counter')->name('counter');
Route::get('/store', 'HomeController@store')->name('store');
Route::get('/casuality', 'HomeController@casuality')->name('casuality');
Route::get('/lab', 'HomeController@lab')->name('lab');
Route::get('/admindashboard', 'homeController@admindashboard')->name('admindashboard');
Route::get('/logt', 'HomeController@logout')->name('home');
Route::any('/patientregistration', 'patientcontroller@patientregistration')->name('allpatients');
Route::any('/getdepartmentdoctor', 'patientcontroller@getdepartmentdoctor')->name('getdepartmentdoctor');
Route::post('/addpatient', 'patientcontroller@addpatient')->name('addpatient');
Route::any('/allpatients', 'patientcontroller@allpatients')->name('allpatients');
Route::any('/viewpatient{id}', 'patientController@viewpatient');
Route::any('/editpatient{id}', 'patientController@editpatient');
Route::any('editthepatient', 'patientController@editthepatient');
Route::any('/beds', 'bedsController@beds');
Route::any('/allocatebed', 'bedsController@allocatebed');
Route::any('/allocateroom', 'bedsController@allocateroom');
Route::any('/allocatenonacroom', 'bedsController@allocatenonacroom');
Route::any('/hospitals', 'hospitalController@hospitals');
Route::any('/addhospital', 'hospitalController@addhospital');
// Route::any('/admins', 'hospitalController@admins');
Route::any('/roles', 'hospitalController@roles');
//rooms
Route::any('/addroomtypes', 'hospitalController@addroomtypes');
Route::any('/saveroomtypes', 'hospitalController@saveroomtypes');
Route::any('/delroomtypes{id}', 'hospitalController@delroomtypes');
Route::any('/delrooms{id}', 'hospitalController@delrooms');
Route::any('/update_roomtypes', 'hospitalController@update_roomtypes');
Route::any('/addroomstypes', 'hospitalController@addroomstypes');
Route::any('/saveroomstypes', 'hospitalController@saveroomstypes');
Route::any('/update_roomstype', 'hospitalController@update_roomstype');
//stafs
Route::any('/addadmins','hospitalController@addadmins');
Route::any('/allhospitals','hospitalController@allhospitals');
Route::any('/appointment{id}','hospitalController@appointment');
Route::any('/getdoctordetails{id}','hospitalController@getdoctordetails');
Route::any('/get_cons_fees','hospitalController@get_cons_fees');
Route::any('/bookappointment','hospitalController@bookappointment');
Route::any('/allappointment','hospitalController@allappointment');
Route::any('/print_appointment{id}','hospitalController@print_appointment')->name('print_appointment');
Route::any('/edit_appointment{id}','hospitalController@edit_appointment');
Route::any('/update_appointment','hospitalController@update_appointment')->name('update_appointment');
Route::any('/delete_appointment{id}','hospitalController@delete_appointment')->name('delete_appointment');
Route::any('/cross_consult{id}','hospitalController@cross_consult')->name('cross_consult');
Route::any('/queuemanagement','hospitalController@queuemanagement');
Route::any('/clinicalnotes','bedsController@clinicalnotes');
Route::any('/callthepatient{id}','hospitalController@callthepatient');
Route::any('/addstaffs','addController@addstaffs');
Route::any('/editstafff','addController@editstafff');
Route::any('/addthestaffs','addController@addthestaffs');
Route::any('/staffs','addController@allstaffs');
Route::any('/managestaff{id}','hrcontroller@managestaff');
Route::any('/managedepstaff{id}','departmentcontroller@managedepstaff');
Route::any('/disableuser{id}','addController@disableuser');
Route::any('/enableuser{id}','addController@enableuser');
Route::any('/Consultation{id}/{patient_id}','doctorController@consultation');
Route::any('/managepatient{id}','doctorController@managepatient');
Route::any('/staffsalary{id}','addController@staffsalary');
Route::any('/paysalary','addController@paysalary');
Route::any('/attendanceview','hrcontroller@attendanceview');
Route::any('/monthwise','hrController@monthwise');
Route::any('/attendancetostaff','hrController@attendancetostaff');


Route::any('/consult','doctorController@consult');
Route::any('/addsalary','addController@addsalary');
Route::any('/addallowance','addController@addallowance');
Route::any('/addleavetype','addController@addleavetype');
Route::any('/editleavetype','addController@editleavetype');
Route::any('/addreduction','addController@addreduction');
Route::any('/allowancedelete{id}','addController@allowancedelete');
Route::any('/leavetypedelete{id}','addController@leavetypedelete');
Route::any('/reductiondelete{id}','addController@reductiondelete');
Route::any('/giveallowance{id}','addController@giveallowance');
Route::any('/givereduction{id}','addController@givereduction');
Route::any('/allowancetostaff','addController@allowancetostaff');
Route::any('/counter','hospitalController@counter');
Route::any('/Pharmacy','PharmacyController@pharmacy');
Route::any('/addmedicinez','PharmacyController@addmedicinez');
Route::any('/allmedicinez','PharmacyController@allmedicinez');
Route::any('/todaysappointments','doctorController@todaysappointments');
Route::any('/todaysappointmentsall','hospitalController@todaysappointmentsall');
Route::any('/reappointments','doctorController@reappointments');
Route::any('/dutyschedulefetch','doctorController@dutyschedulefetch');
Route::any('/dutyschedule','hrController@dutyschedule');
Route::any('/dutydelete{id}','hrController@dutydelete');
Route::any('/applyleave','doctorController@applyleave');
Route::any('/file','doctorController@file');
Route::any('/appliedleave','hrcontroller@appliedleave');
Route::any('/hrleaveapprove','hrcontroller@hrleaveapprove');
Route::any('/leaves','hrcontroller@leaves');
Route::any('/leaveapprove','departmentcontroller@leaveapprove');
Route::any('/leavedecline','departmentcontroller@leavedecline');
Route::any('/depleaves','departmentcontroller@depleaves');
Route::any('/addloan','hrcontroller@addloan')->name('addloan');
Route::any('/payslip','hrcontroller@payslip')->name('payslip');
Route::any('/payslipbulk','hrcontroller@payslipbulk')->name('payslipbulk');
Route::any('/generatepayslip','hrcontroller@generatepayslip')->name('generatepayslip');
Route::any('/generatebbulkpayslip','hrcontroller@generatebbulkpayslip')->name('generatebbulkpayslip');
Route::any('/allstaffsal','hrcontroller@allstaffsal');
Route::get('/loans','hrcontroller@loans')->name('loans');
Route::get('/addleavecategory','hrcontroller@addleavecategory')->name('addleavecategory');
Route::any('/editdeallowance','hrcontroller@editdeallowance')->name('editdeallowance');
Route::any('/editdereduction','hrcontroller@editdereduction')->name('editdereduction');

Route::any('/addnonfixedallowance','addController@addnonfixedallowance')->name('addnonfixedallowance');
Route::any('/depqueue','doctorController@depqueue');
Route::any('/filedownload{id}','PharmacyController@filedownload');
Route::any('/loandelete{id}','hrcontroller@loandelete');
Route::any('/addadmins', 'hospitalController@addadmins');
Route::any('/allhospitals', 'hospitalController@allhospitals');
Route::any('/appointment{id}', 'hospitalController@appointment');
Route::any('/getdoctordetails{id}', 'hospitalController@getdoctordetails');
Route::any('/get_cons_fees', 'hospitalController@get_cons_fees');
Route::any('/bookappointment', 'hospitalController@bookappointment');
Route::any('/allappointment', 'hospitalController@allappointment');
Route::any('/print_appointment{id}', 'hospitalController@print_appointment')->name('print_appointment');
Route::any('/edit_appointment{id}', 'hospitalController@edit_appointment');
Route::any('/update_appointment', 'hospitalController@update_appointment')->name('update_appointment');
Route::any('/delete_appointment{id}', 'hospitalController@delete_appointment')->name('delete_appointment');
Route::any('/cross_consult{id}', 'hospitalController@cross_consult')->name('cross_consult');
Route::any('/queuemanagement', 'hospitalController@queuemanagement');
Route::any('/clinicalnotes', 'bedsController@clinicalnotes');
Route::any('/callthepatient{id}', 'hospitalController@callthepatient');
Route::any('/addstaffs', 'addController@addstaffs');
Route::any('/editstafff', 'addController@editstafff');
Route::any('/addthestaffs', 'addController@addthestaffs');
Route::any('/staffs', 'addController@allstaffs');
Route::any('/managestaff{id}', 'hrcontroller@managestaff');
Route::any('/managedepstaff{id}', 'departmentcontroller@managedepstaff');
Route::any('/disableuser{id}', 'addController@disableuser');
Route::any('/enableuser{id}', 'addController@enableuser');
Route::any('/Consultation{id}', 'doctorController@consultation');
Route::any('/managepatient{id}', 'doctorController@managepatient');
Route::any('/staffsalary{id}', 'addController@staffsalary');
Route::any('/paysalary', 'addController@paysalary');
Route::any('/attendanceview', 'hrController@attendanceview');
Route::any('/monthwise', 'hrController@monthwise');
Route::any('/attendancetostaff', 'hrController@attendancetostaff');


Route::any('/consult', 'doctorController@consult');
Route::any('/addsalary', 'addController@addsalary');
Route::any('/addallowance', 'addController@addallowance');
Route::any('/addleavetype', 'addController@addleavetype');
Route::any('/editleavetype', 'addController@editleavetype');
Route::any('/addreduction', 'addController@addreduction');
Route::any('/allowancedelete{id}', 'addController@allowancedelete');
Route::any('/leavetypedelete{id}', 'addController@leavetypedelete');
Route::any('/reductiondelete{id}', 'addController@reductiondelete');
Route::any('/giveallowance{id}', 'addController@giveallowance');
Route::any('/givereduction{id}', 'addController@givereduction');
Route::any('/allowancetostaff', 'addController@allowancetostaff');
Route::any('/counter', 'hospitalController@counter');
Route::any('/Pharmacy', 'PharmacyController@pharmacy');
Route::any('/addmedicinez', 'PharmacyController@addmedicinez');
Route::any('/allmedicinez', 'PharmacyController@allmedicinez');
Route::any('/todaysappointments', 'doctorController@todaysappointments');
Route::any('/todaysappointmentsall', 'hospitalController@todaysappointmentsall');
Route::any('/reappointments', 'doctorController@reappointments');
Route::any('/dutyschedulefetch', 'doctorController@dutyschedulefetch');
Route::any('/dutyschedule', 'hrController@dutyschedule');
Route::any('/dutydelete{id}', 'hrController@dutydelete');
Route::any('/applyleave', 'doctorController@applyleave');
Route::any('/file', 'doctorController@file');
Route::any('/appliedleave', 'hrcontroller@appliedleave');
Route::any('/hrleaveapprove', 'hrcontroller@hrleaveapprove');
Route::any('/leaves', 'hrcontroller@leaves');
Route::any('/leaveapprove', 'departmentcontroller@leaveapprove');
Route::any('/leavedecline', 'departmentcontroller@leavedecline');
Route::any('/depleaves', 'departmentcontroller@depleaves');
Route::any('/addloan', 'hrcontroller@addloan')->name('addloan');
Route::any('/payslip', 'hrcontroller@payslip')->name('payslip');
Route::any('/payslipbulk', 'hrcontroller@payslipbulk')->name('payslipbulk');
Route::any('/generatepayslip', 'hrcontroller@generatepayslip')->name('generatepayslip');
Route::any('/generatebbulkpayslip', 'hrcontroller@generatebbulkpayslip')->name('generatebbulkpayslip');
Route::any('/allstaffsal', 'hrcontroller@allstaffsal');
Route::get('/loans', 'hrcontroller@loans')->name('loans');
Route::get('/addleavecategory', 'hrcontroller@addleavecategory')->name('addleavecategory');
Route::any('/editdeallowance', 'hrcontroller@editdeallowance')->name('editdeallowance');
Route::any('/editdereduction', 'hrcontroller@editdereduction')->name('editdereduction');

Route::any('/addnonfixedallowance', 'addController@addnonfixedallowance')->name('addnonfixedallowance');
Route::any('/depqueue', 'doctorController@depqueue');
Route::any('/filedownload{id}', 'PharmacyController@filedownload');
Route::any('/loandelete{id}', 'hrcontroller@loandelete');
// Pharmacy

Route::any('/serving', 'PharmacyController@serving');
Route::any('/alldoctors', 'PharmacyController@alldoctors');
Route::any('/pharmacyserved{id}', 'PharmacyController@pharmacyserve');
Route::any('/yoyo', 'PharmacyController@pharmacyserved');
Route::any('/reorder', 'PharmacyController@reorder');
Route::any('/expired', 'PharmacyController@expired');
Route::any('/addmed', 'PharmacyController@addmed');
Route::get('/searchmeds', 'PharmacyController@searchmeds')->name('searchmeds');
Route::get('/wardbeds', 'departmentcontroller@wardbeds')->name('wardbeds');
Route::get('/ip', 'patientcontroller@ip')->name('ip');
Route::any('/manage_biils', 'pharmacycontroller@view_bill')->name('manage_bills');
Route::any('/request_items', 'PharmacyController@request_items')->name('request_items');
Route::any('/add_request_items', 'PharmacyController@add_request_items')->name('add_request_items');
Route::any('/view_request_items{request_intendid}', 'PharmacyController@view_request_items')->name('view_request_items');
Route::any('/edit_request_items{request_intendid}', 'PharmacyController@edit_request_items')->name('edit_request_items');
Route::any('/update_request_items', 'PharmacyController@update_request_items')->name('update_request_items');
Route::any('/requestitems', 'storecontroller@create_requestitems')->name('requestitems');
Route::any('/depstaffs', 'departmentcontroller@depstaffs')->name('depstaffs');
//department
Route::any('/depstock', 'departmentcontroller@depstock')->name('depstock');
Route::any('/depbeds', 'departmentcontroller@depbeds')->name('depbeds');
Route::any('/deppats', 'departmentcontroller@deppats')->name('deppats');
Route::any('/removepatientfrombed', 'departmentcontroller@removepatientfrombed')->name('removepatientfrombed');
Route::any('/usermanagement', 'hospitalcontroller@usermanagement')->name('usermanagement');
Route::any('/adddepartments', 'hospitalcontroller@adddepartments')->name('adddepartments');
Route::any('/add_phardept', 'hospitalcontroller@add_phardept')->name('add_phardept');
Route::any('/view_dept_sub{phar_deptid}', 'hospitalcontroller@view_dept_sub')->name('view_dept_sub');
Route::any('/edit_dep_sub{phar_deptid}', 'hospitalcontroller@edit_dep_sub')->name('edit_dep_sub');
Route::any('/addfloor', 'hospitalcontroller@addfloor')->name('addfloor');
Route::any('/save_floor', 'hospitalcontroller@save_floor')->name('save_floor');
Route::any('/update_floor', 'hospitalcontroller@update_floor')->name('update_floor');
Route::any('/delete_floor/{floor_id}', 'hospitalcontroller@delete_floor')->name('delete_floor');
// vipin
Route::any('/add_labdept','labdepartment_controller@add_labdept')->name('add_labdept');
Route::any('/lab_departments','labdepartment_controller@store')->name('lab_departments');
Route::any('/update_labdepartment','labdepartment_controller@update')->name('update_labdepartment');
Route::any('/delete_labdepartment{id}','labdepartment_controller@destroy')->name('delete_department');
Route::any('/theatre_category','operation_theatre_controller@add_theatre')->name('theatre_category');
Route::any('/add_theatrecat','operation_theatre_controller@store')->name('add_theatrecat');
Route::any('/update_theatrecat','operation_theatre_controller@update')->name('update_theatrecat');
Route::any('/delete_theatre{id}','operation_theatre_controller@destroy')->name('delete_theatre');
Route::any('/doctor_preclabtest','labdepartment_controller@doctor_preclabtest')->name('doctor_preclabtest');
Route::any('/view_patient_test/{id}/{patient_id}','labdepartment_controller@display_test_details')->name('view_patient_test');
Route::any('/add_labdept', 'labdepartment_controller@add_labdept')->name('add_labdept');
Route::any('/lab_departments', 'labdepartment_controller@store')->name('lab_departments');
Route::any('/update_labdepartment', 'labdepartment_controller@update')->name('update_labdepartment');
Route::any('/delete_labdepartment{id}', 'labdepartment_controller@destroy')->name('delete_department');
Route::any('/theatre_category', 'operation_theatre_controller@add_theatre')->name('theatre_category');
Route::any('/add_theatrecat', 'operation_theatre_controller@store')->name('add_theatrecat');
Route::any('/update_theatrecat', 'operation_theatre_controller@update')->name('update_theatrecat');
Route::any('/delete_theatre{id}', 'operation_theatre_controller@destroy')->name('delete_theatre');
// vipin
Route::any('/add_pharmacy_sub', 'hospitalcontroller@add_pharmacy_sub')->name('add_pharmacy_sub');
Route::any('/update_phar_dept', 'hospitalcontroller@update_phar_dept')->name('update_phar_dept');
Route::any('/delete_pharma_dept/{phar_deptid}', 'hospitalcontroller@delete_pharma_dept')->name('delete_pharma_dept');
Route::any('/adddepartmentadmin', 'hospitalcontroller@adddepartmentadmin')->name('adddepartmentadmin');
Route::any('/view_dept_admin', 'hospitalcontroller@view_dept_admin')->name('view_dept_admin');
Route::any('/adddepadmins', 'hospitalcontroller@adddepadmins')->name('adddepadmins');
Route::any('/new_department', 'hospitalcontroller@new_department')->name('new_department');
Route::any('/update_department', 'hospitalcontroller@update_department')->name('update_department');
Route::any('/delete_department{id}', 'hospitalcontroller@delete_department')->name('delete_department');
Route::any('/delete_roles{id}', 'hospitalcontroller@delete_roles')->name('delete_roles');
Route::any('/saverole_details', 'hospitalcontroller@saverole_details')->name('saverole_details');
Route::any('/detailpatient{id}', 'patientcontroller@detailpatient');
Route::any('/dischargepatient{id}', 'patientcontroller@dischargepatient');
//lab
Route::any('/labcategory', 'labcontroller@labcategory');
Route::any('/dellabcat{id}', 'labcontroller@dellabcat');
Route::any('/labtests', 'labcontroller@labtests');
Route::any('/dellabtest{id}', 'labcontroller@dellabtest');
Route::any('/labprofile', 'labcontroller@labprofile');
Route::any('/patlabtest', 'labcontroller@labtestpat');
Route::any('/dellabprof{id}', 'labcontroller@dellabprof');
Route::any('/update_lab_tests', 'labcontroller@update_lab_tests');
Route::any('/alllabtests', 'labcontroller@alllabtests');
Route::any('/alllabtestsview', 'labcontroller@alllabtestsview');
Route::post('/viewlabproff', 'labcontroller@viewlabproff');
Route::any('/viewlabres{id}', 'labcontroller@viewlabres');
Route::any('/uploadlabres{id}', 'labcontroller@uploadlabres');
Route::any('/submitlabres', 'labcontroller@submitlabres');

//admin



//Pharmacy


// vipin
Route::any('/requestitems_save', 'storecontroller@save_item')->name('requestitems_save');
// Route::any('/request','requestcontroller@index')->name('request');
Route::any('/pharmarequest_save', 'requestcontroller@store')->name('pharmarequest_save');
Route::any('/pharma_orders', 'requestcontroller@view_request')->name('pharma_orders');
Route::any('/upload_request', 'requestcontroller@update')->name('upload_request');
Route::any('/delete_request{id}', 'requestcontroller@destroy')->name('delete_request');
// vipin
Route::any('/store_addmedicine', 'Medicine_details@index')->name('store_addmedicine');
Route::any('/save_medicine', 'Medicine_details@store')->name('save_medicine');
Route::any('/update_medicine', 'Medicine_details@update')->name('update_medicine');
Route::any('/delete_medicines{id}', 'Medicine_details@destroy')->name('delete_medicines');

//Store Suppliers
Route::any('/addsuppliers', 'storecontroller@index')->name('addsuppliers');
Route::any('/suppliers_save', 'storecontroller@store')->name('suppliers_save');
Route::any('/suppliers_details{id}', 'storecontroller@show')->name('suppliers_details');
Route::any('/upload_suppliers', 'storecontroller@update')->name('upload_suppliers');
Route::any('/delete_suppliers{id}', 'storecontroller@destroy')->name('delete_suppliers');
Route::any('/supplier_ledger_details{id}', 'storecontroller@supplier_ledger_details')->name('supplier_ledger_details');
Route::any('/add_installment_details{id}', 'storecontroller@add_installment_details')->name('add_installment_details');
Route::any('/update_installment_details','storecontroller@update_installment_details')->name('update_installment_details');
Route::any('/supplier_paid_details{id}', 'storecontroller@supplier_paid_details')->name('paid_details');

// Store Manufacturer

Route::any('/view_manufacturers', 'storecontroller@create_manufacturer')->name('view_manufacturers');
Route::any('/add_manufacturers', 'storecontroller@add_manufacturer')->name('add_manufacturers');
Route::any('/view_manufacturer_details{id}', 'storecontroller@show_details_manufacturer')->name('view_manufacturer_details');
Route::any('/edit_manufacturer', 'storecontroller@edit_manufacturer')->name('edit_manufacturer');
Route::any('/update_manufacturer', 'storecontroller@update_manufacturer')->name('update_manufacturer');
Route::any('/delete_manufacturer{id}', 'storecontroller@delete_manufacturer')->name('delete_manufacturer');
Route::any('/manufacturer_ledger_details{id}', 'storecontroller@manufacturer_ledger_details')->name('manufacturer_ledger_details');
Route::any('/add_installment{id}', 'storecontroller@add_installment')->name('add_installment');
Route::any('/manufacturer_paid_details{id}', 'storecontroller@manufacturer_paid_details')->name('manufacturer_paid_details');

// Store Medicines
Route::any('/view_medicine_category', 'storecontroller@create_category_details')->name('view_medicine_category');
Route::any('/create_category', 'storecontroller@add_category')->name('create_category');
Route::any('/edit_category', 'storecontroller@category_edit')->name('edit_category');
Route::any('/update_category', 'storecontroller@update_category')->name('update_category');
Route::any('/delete_category{id}', 'storecontroller@delete_category')->name('delete_category');
// Medicine Type
Route::any('/view_medicine_type', 'storecontroller@create_type_details')->name('view_medicine_type');
Route::any('/create_type', 'storecontroller@add_type')->name('create_type');
Route::any('/edit_type', 'storecontroller@type_edit')->name('edit_type');
Route::any('/update_type', 'storecontroller@update_type')->name('update_type');
Route::any('/delete_type{id}', 'storecontroller@delete_type')->name('delete_type');
// Unit
Route::any('/view_unit', 'storecontroller@create_unit_details')->name('view_unit');
Route::any('/create_unit', 'storecontroller@add_unit')->name('create_unit');
Route::any('/edit_unit', 'storecontroller@edit_unit')->name('edit_unit');
Route::any('/update_unit', 'storecontroller@update_unit')->name('update_unit');
Route::any('/delete_unit{id}', 'storecontroller@delete_unit')->name('delete_unit');
// Add New Item
Route::any('/view_item', 'store_oneController@create_item_details')->name('view_item');
Route::any('/create_item', 'store_oneController@add_item')->name('create_item');
Route::any('/edit_item', 'store_oneController@edit_item1')->name('edit_item');
Route::any('/update_item', 'store_oneController@update_new_item')->name('update_item');
Route::any('/delete_item{id}', 'store_oneController@item_delete')->name('delete_item');

// Medecine Group
Route::any('/view_medicine_group', 'storecontroller@create_medicine_group')->name('view_medicine_group');
Route::any('/create_medicine_group', 'storecontroller@add_group')->name('create_medicine_group');
Route::any('/edit_group', 'storecontroller@edit_group')->name('edit_group');
Route::any('/update_group', 'storecontroller@update_group')->name('update_group');
Route::any('/delete_group{id}', 'storecontroller@delete_group')->name('delete_group');
//sarjana added payment type
Route::any('/payment_type', 'storecontroller@create_payment_type')->name('payment_type');
Route::any('/add_payment_type', 'storecontroller@add_payment_type')->name('add_payment_type');
Route::any('/edit_payment_type', 'storecontroller@edit_payment_type')->name('edit_payment_type');
Route::any('/update_payment_type', 'storecontroller@update_payment_type')->name('update_payment_type');
Route::any('/delete_payment_type{payment_id}', 'storecontroller@delete_payment_type')->name('delete_payment_type');
// Medicine Brand Name
Route::any('/view_brand_name', 'storecontroller@create_brand_name')->name('view_brand_name');
Route::any('/create_brand', 'storecontroller@add_brand')->name('create_brand');
Route::any('/edit_brand', 'storecontroller@edit_brand')->name('edit_brand');
Route::any('/update_brand', 'storecontroller@update_brand')->name('update_brand');
Route::any('/delete_brand{id}', 'storecontroller@delete_brand')->name('delete_brand');

// Medicine Generic Name
Route::any('/view_generic_name', 'storecontroller@create_generic_name')->name('view_generic_name');
Route::any('/create_generic', 'storecontroller@add_generic')->name('create_generic');
Route::any('/edit_generic', 'storecontroller@edit_generic')->name('edit_generic');
Route::any('/update_generic', 'storecontroller@update_generic')->name('update_generic');
Route::any('/delete_generic{id}', 'storecontroller@delete_generic')->name('delete_generic');

// add Medicine
// Route::any('/view_medicine_datas','storecontroller@view_medicine_details')->name('view_medicine_datas');

Route::any('/show_items_details', 'store_oneController@show_new_item')->name('show_items_details');
Route::any('/create_new_item', 'store_oneController@create_new_item')->name('create_new_item');
Route::any('/view_new_items{id}', 'store_oneController@view_new_items')->name('view_new_items');
Route::any('/edit_item{id}', 'store_oneController@edit_item')->name('edit_item');
Route::any('/item_update', 'store_oneController@update_item')->name('item_update');
Route::any('/item_delete{id}', 'store_oneController@delete_item_details')->name('delete_item_details');

// add Purchase
Route::any('view_purchase', 'storecontroller@create_purchase')->name('create_purchase');
Route::any('purchase_order_view', 'storecontroller@purchase_order_view')->name('purchase_order_view');
Route::any('show_purchase_detailes{id}', 'storecontroller@show_purchase_order')->name('show_purchase_order');
Route::any('manage_purchase', 'storecontroller@view_received_details')->name('manage_purchase');
Route::any('view_purchse_print', 'storecontroller@print_purchase')->name('view_purchase_print');
Route::any('print{id}', 'storecontroller@print_purchase_detailes')->name('print');
Route::any('view_purchase_detailes{id}', 'storecontroller@view_purchase_detailes')->name('view_purchase_detailes');
Route::any('create_purchase_new_item', 'storecontroller@create_purchase_new_item')->name('create_purchase_new_item');
Route::any('edit_purchase_detailes{id}', 'storecontroller@edit_purchase_detailes')->name('edit_purchase_detailes');
Route::any('purchase_detailes_view{id}', 'storecontroller@purchase_detailes_view')->name('purchase_detailes_view');
Route::any('item_edit_detailes{id}', 'storecontroller@item_edit_detailes')->name('edit_purchase_detailes');
Route::any('item_edit', 'storecontroller@item_edit')->name('item_edit');
Route::any('item_update', 'storecontroller@item_update')->name('item_update');
Route::any('update_purchase_items', 'storecontroller@update_purchase_items')->name('update_purchase_items');
Route::any('return_detailes{id}', 'storecontroller@return_detailes')->name('return_detailes');
Route::any('edit_return_detailes{id}', 'storecontroller@edit_return_detailes')->name('edit_return_detailes');
Route::any('return_items', 'storecontroller@return_items')->name('return_items');
Route::any('return_items_one', 'storecontroller@return_items_one')->name('return_items-one');
Route::any('create_purchase_medicine', 'storecontroller@create_purchase_medicine')->name('create_purchase_medicine');
Route::any('add_advance_payment', 'storecontroller@create_advance_payment')->name('create_advance_payment');
Route::any('update_payment', 'storecontroller@update_payment')->name('update_payment');
Route::any('received_order_detailes', 'storecontroller@received_order_detailes')->name('received_order_detailes');
Route::any('store_request_view', 'storecontroller@store_request_view')->name('store_request_view');
Route::any('add_installment_details{id}', 'storecontroller@add_installment_details')->name('add_installment_details');

//add issue request from another departments
Route::any('view_request', 'storecontroller@department_request')->name('view_request');
Route::any('view_request_details{request_intendid}', 'storecontroller@department_view_request_details')->name('view_request_details');
Route::any('issue_request', 'storecontroller@issue_request')->name('issue_request');
Route::any('issued_items{id}', 'storecontroller@requested_items')->name('issued_items');
Route::any('store_issued_items{id}', 'storecontroller@store_issued_items')->name('issued_items');
Route::any('issued_inventory', 'storecontroller@issue_stock')->name('issued_inventory');



// Store Stock details
Route::any('view_stock_details', 'store_oneController@stock_details')->name('stock_details');
Route::any('stock_details', 'store_oneController@stock_details')->name('stock_details');
Route::any('create_stock{id}', 'store_oneController@create_stock')->name('create_stock');
Route::any('edit_stock_details{id}', 'store_oneController@edit_stock_details')->name('edit_stock_details');
Route::any('update_stock', 'store_oneController@update_stock')->name('update_stock');
Route::any('add_stock', 'store_oneController@add_stock')->name('add_stock');
Route::any('view_add_stock_details{id}', 'store_oneController@view_add_details')->name('view_add_stock_details');
Route::any('view_add_new_stock_details', 'store_oneController@view_add_new_stock_details')->name('view_add_new_stock_details');
Route::any('view_purchase_details_stock{id}', 'store_oneController@view_purchase_details_stock')->name('view_purchase_details_stock');
Route::any('issue_stock_details', 'storeController@issue_stock_details')->name('issue_stock_details');
Route::any('store_reorder', 'storeController@store_reorder')->name('store_reorder');
Route::any('empty_stock', 'storeController@empty_stock')->name('empty_stock');

// Store issued details
Route::any('display_issued_stock ', 'storeController@display_issued_stock')->name('display_issued_stock');
Route::any('view_issued_details{id}', 'storeController@view_issued_details')->name('view_issued_details');

// Route::any('update_stock','storecontroller@update_stock')->name('update_stock');
// Route::any('get_item_data_ajax','storecontroller@get_item_data_ajax')->name('get_item_data_ajax');

//inventory settings
Route::any('inventory_setting', 'storecontroller@inventory_setting')->name('inventory_setting');
Route::any('view_setting', 'storecontroller@view_setting')->name('view_setting');
Route::any('accounting_method', 'storecontroller@accounting_method')->name('accounting_method');
Route::any('update_profit_percentage', 'storecontroller@profit_percentage')->name('update_profit_percentage');

// Store Substore Details
Route::any('view_substore_details', 'storecontroller@substore_details')->name('substore_details');
Route::any('add_substore', 'storecontroller@add_substore')->name('add_substore');
Route::any('view_substore', 'storecontroller@view_substore')->name('view_substore');
Route::any('/edit_substore{id}', 'storeController@edit_substore')->name('edit_item');
Route::any('/update_substore', 'storeController@update_substore')->name('update_substore');
Route::any('/delete_substore{id}','storecontroller@delete_substore')->name('delete_substore');
Route::any('/show_substore','storecontroller@show_substore')->name('show_substore');
Route::any('/show_store_details{id}','storecontroller@show_store_details')->name('show_store_details');
Route::any('/department_store_details{id}','storecontroller@department_store_details')->name('department_store_details');







// Store Request items
Route::any('/Emergency_care', 'Emergencycare@index')->name('Emergency_care');
Route::get('/Nursing_station', 'NursingStation@index')->name('Nursing_station');

Route::any('/Add_Ambulance_details', 'ambulancecontroller@index')->name('Add_Ambulance_details');
Route::any('/saveamb_details', 'ambulancecontroller@store_data')->name('saveamb_details');
Route::any('/update_details', 'ambulancecontroller@update_data')->name('update_details');
Route::any('/delete_ambulance{id}', 'ambulancecontroller@destroy')->name('delete_ambulance');
Route::any('/savepatientamb_details', 'ambulancecontroller@save')->name('savepatientamb_details');
// vipin
Route::any('/casuality_patient', 'casualitycontroller@index')->name('casuality_patient');
Route::any('/catuality_register', 'casualitycontroller@create')->name('catuality_register');
Route::any('/addcatualities', 'casualitycontroller@store')->name('addcatualities');
Route::any('/catualitypatient', 'casualitycontroller@addpatient')->name('catualitypatient');
Route::any('/all_catualitypatients', 'casualitycontroller@allpatients')->name('all_catualitypatients');
Route::any('/update_cpatient', 'casualitycontroller@update_cpatient')->name('update_cpatient');
Route::any('/view_cltypatient{id}', 'casualitycontroller@show')->name('view_cltypatient');
//sarjana added
Route::any('/manage_casu_type', 'casualitycontroller@manage_casu_type')->name('manage_casu_type');
Route::any('/save_casu_type', 'casualitycontroller@save_casu_type')->name('save_casu_type');
Route::any('/update_casu_type', 'casualitycontroller@update_casu_type')->name('update_casu_type');
Route::any('/delete_casuality_type{id}', 'casualitycontroller@delete_casuality_type')->name('delete_casuality_type');
Route::any('/search_casu_pat', 'casualitycontroller@search_casu_pat')->name('search_casu_pat');
//vipin
Route::any('/patient_details', 'casualitycontroller@patient_details')->name('patient_details');
Route::any('/casuality_billing{id}', 'casualitycontroller@casuality_billing')->name('casuality_billing');
Route::any('/ambulance_details', 'ambulancecontroller@ambulance_details')->name('ambulance_details');
Route::any('/allocateamb', 'ambulancecontroller@allocateamb')->name('allocateamb');
Route::any('/addamb_patient', 'ambulancecontroller@addamb_patient')->name('addamb_patient');
Route::any('/ambpatient_details', 'ambulancecontroller@ambpatient_details')->name('ambpatient_details');
Route::any('/cancel_patient', 'ambulancecontroller@cancel_patient')->name('cancel_patient');
Route::any('/manualattendance', 'hrcontroller@manualattendance')->name('manualattendance');
Route::get('/billing', function () {
    return view('hospitals/billing');
});
Route::get('/addmedicines', function () {
    return view('pharmacy/addmedicine');
});
Route::get('/attendance', function () {
    return view('hr/attendance');
});
Route::get('/addeps', function () {
    return view('addeps');
});

Route::get('/medicine', function () {
    return view('pharmacy/addmed');
});
Route::any('/allocatebedsandrooms', 'bedsController@allocatebedsandrooms');
Route::any('/allocatebedsnrooms', 'hospitalController@allocatebedsnrooms');
Route::any('/addit', 'hospitalcontroller@addit');
Route::any('/log', 'homeController@log');
Route::any('/reg', 'homeController@reg');
Route::get('/adminlog', function () {
    return view('admindashboard/adminlogin');
});
Route::get('/myaccount', function () {
    return view('home');
});
Route::get('/testerr', function () {
    return view('testerr');
});

Route::get('/patientinsurance', function () {
    return view('patient.patinsurance');
});
Route::any('/addpatinsurance', 'patientcontroller@addpatinsurance');
Route::post('projects/importProject', 'ProjectController@importProject')->name('importProject');
Route::resource('projects', ProjectController::class);
Auth::routes();

Route::get('/expanse_type', 'ExpanseController@index')->name('expanse_type');
Route::post('/save_expanse_type', 'ExpanseController@save_expanse_type')->name('save_expanse_type');
Route::post('/update_expanse_type', 'ExpanseController@update_expanse_type')->name('update_expanse_type');
Route::any('/delete_expanse_type{id}', 'ExpanseController@delete_expanse_type')->name('delete_expanse_type');




Route::get('/expanse_type', 'ExpanseController@index')->name('expanse_type');




Route::get('/home', 'HomeController@index')->name('home');

//Accounts Module by Anu s Kumar
Route::get('/ledger_acounts', 'AccountsController@ledger_acounts')->name('ledger_acounts');
Route::post('/save_ledger_acounts', 'AccountsController@save_ledger_acounts')->name('save_ledger_acounts');
Route::post('/update_ledger_acounts', 'AccountsController@update_ledger_acounts')->name('update_ledger_acounts');
Route::any('/delete_ledger_accounts', 'AccountsController@delete_ledger_accounts')->name('delete_ledger_accounts');

Route::any('/journal', 'AccountsController@journal')->name('journal');
Route::post('/save_journal', 'AccountsController@save_journal')->name('save_journal');
Route::post('/update_journal_acounts', 'AccountsController@update_journal_acounts')->name('update_journal_acounts');
Route::any('/delete_journal{id}', 'AccountsController@delete_journal')->name('delete_journal');

Route::get('/ledger_acount_categories', 'AccountsController@ledger_acount_categories')->name('ledger_acount_categories');
Route::post('/save_ledger_acounts_categories', 'AccountsController@save_ledger_acounts_categories')->name('save_ledger_acounts_categories');
Route::post('/update_ledger_acount_categories', 'AccountsController@update_ledger_acount_categories')->name('update_ledger_acount_categories');
Route::any('/delete_ledger_accounts_categories/{id}', 'AccountsController@delete_ledger_categories')->name('delete_ledger_accounts_categories');

Route::get('/ledger_acount_subcategories', 'AccountsController@ledger_acount_subcategories')->name('ledger_acount_subcategories');
Route::post('/save_ledger_acounts_subcategories', 'AccountsController@save_ledger_acounts_subcategories')->name('save_ledger_acounts_subcategories');
Route::post('/update_ledger_acount_subcategories', 'AccountsController@update_ledger_acount_subcategories')->name('update_ledger_acount_subcategories');
Route::any('/delete_ledger_accounts_subcategories/{id}', 'AccountsController@delete_ledger_accounts_subcategories')->name('delete_ledger_accounts_subcategories');

//vipin start
Route::any('/ledger_budget_category','AccountsController@ledger_budget_category')->name('ledger_budget_category');
Route::any('/save_ledger_budget_category','AccountsController@save_ledger_budget_category')->name('save_ledger_budget_category');
Route::any('/update_ledger_budget_category','AccountsController@update_ledger_budget_category')->name('update_ledger_budget_category');
Route::any('/delete_ledger_budget_category/{id}','AccountsController@delete_ledger_budget_category')->name('delete_ledger_budget_category');

Route::any('/expense_report','AccountsController@expense_report')->name('expense_report');
//vipin end

Route::any('/get_subcat', 'AccountsController@get_subcat')->name('get_subcat');
Route::any('/create_transaction', 'AccountsController@create_transaction')->name('create_transaction');
Route::post('/create_new_journal', 'AccountsController@create_new_journal')->name('create_new_journal');
Route::post('/create_new_stock_transaction', 'AccountsController@create_new_stock_transaction')->name('create_new_stock_transaction');
Route::get('/edit_journal{id}', 'AccountsController@edit_journal')->name('edit_journal');
Route::post('/delete_journalitems_frontend/{id}', 'AccountsController@delete_journalitems_frontend')->name('delete_journalitems_frontend');
Route::post('/update_new_journal', 'AccountsController@update_new_journal')->name('update_new_journal');
Route::post('/delete_full_journal_transaction', 'AccountsController@delete_full_journal_transaction')->name('delete_full_journal_transaction');
Route::any('/ledger', 'AccountsController@ledger')->name('ledger');
Route::any('/trialbalance', 'AccountsController@trialbalance')->name('trialbalance');
Route::any('/profitandlossaccount', 'AccountsController@profitandlossaccount')->name('profitandlossaccount');
Route::post('/create_new_ledger_account', 'AccountsController@create_new_ledger_account')->name('create_new_ledger_account');
Route::any('/balancesheet', 'AccountsController@balancesheet')->name('balancesheet');
Route::any('/stock_section', 'AccountsController@stock_section')->name('stock_section');
Route::any('/stock_issue', 'AccountsController@stock_issue')->name('stock_issue');
Route::any('/stock_categories', 'AccountsController@stock_categories')->name('stock_categories');
Route::any('/stock_subcategories', 'AccountsController@stock_subcategories')->name('stock_subcategories');
Route::any('/save_stock_categories', 'AccountsController@save_stock_categories')->name('save_stock_categories');
Route::any('/update_stock_categories', 'AccountsController@update_stock_categories')->name('update_stock_categories');
Route::post('/update_stock_subcategories', 'AccountsController@update_stock_subcategories')->name('update_stock_subcategories');
Route::any('/delete_stock_category', 'AccountsController@delete_stock_category')->name('delete_stock_category');
Route::any('/save_stock_subcategories', 'AccountsController@save_stock_subcategories')->name('save_stock_subcategories');
Route::any('/delete_stock_subcategory', 'AccountsController@delete_stock_subcategory')->name('delete_stock_subcategory');
Route::any('/stock_items', 'AccountsController@stock_items')->name('stock_items');
Route::any('/save_stock_items', 'AccountsController@save_stock_items')->name('save_stock_items');
Route::post('/update_stock_items', 'AccountsController@update_stock_items')->name('update_stock_items');
Route::post('/delete_stock_items', 'AccountsController@delete_stock_items')->name('delete_stock_items');
Route::post('/get_item_with_group', 'AccountsController@get_item_with_group')->name('get_item_with_group');
Route::any('/store_ledger', 'AccountsController@store_ledger')->name('store_ledger');
Route::any('/get_total_number_of_item', 'AccountsController@get_total_number_of_item')->name('get_total_number_of_item');
Route::post('/create_new_stock_issue', 'AccountsController@create_new_stock_issue')->name('create_new_stock_issue');
//Ended Accounts module
//sarjana added consultation
Route::post('/addhistory', 'doctorController@addhistory')->name('addhistory');
Route::post('/managehistory', 'doctorController@managehistory')->name('managehistory');
Route::any('/edit_history{history_id}', 'doctorController@edit_history')->name('edit_history');
Route::any('/update_history', 'doctorController@update_history')->name('update_history');
Route::post('/add_prescription', 'doctorController@add_prescription')->name('add_prescription');
// Route::post('/add_labtest','doctorController@add_labtest')->name('add_labtest');
Route::any('/view_prescription{id}', 'doctorController@view_prescription')->name('view_prescription');
Route::any('/edit_prescription{id}', 'doctorController@edit_prescription')->name('edit_prescription');
Route::any('/update_prescription', 'doctorController@update_prescription')->name('update_prescription');
Route::any('/delete_prescription_med{presc_id}', 'doctorController@delete_prescription_med')->name('delete_prescription_med');
Route::any('/get_subdept_floor{id}', 'hospitalController@get_subdept_floor')->name('get_subdept_floor');
// Route::post('/add_labtest','doctorController@add_labtest')->name('add_labtest');
// Route::any('/edit_labtest{id}','doctorController@update_labtest')->name('edit_labtest');
Route::any('/add_labtest','doctorController@add_labtest')->name('add_labtest');
Route::any('/view_lab_description/{id}','doctorController@view_lab_description')->name('view_lab_description');
Route::any('/edit_labtest/{id}','doctorController@edit_labtest')->name('edit_labtest');
Route::any('/update_labtest','doctorController@update_labtest')->name('update_labtest');
Route::any('/delete_labtest/{id}','doctorController@delete_labtest')->name('delete_labtest');
route::any('/delete_preclab{id}','doctorController@delete_preclab');
Route::any('/add_surgery','doctorController@add_surgery')->name('add_surgery');
Route::any('/print_uploads{id}','doctorController@print_uploads')->name('print_uploads');
Route::any('/add_procedure/{id}','doctorController@add_procedure')->name('add_procedure');
Route::any('/otpatient_details','doctorController@otpatient_details')->name('otpatient_details');
Route::any('/add_ot_patient','doctorController@add_ot_patient')->name('add_ot_patient');
Route::any('/edit_ot_patient','doctorController@update_ot_patient')->name('edit_ot_patient');
Route::any('surgery_delete{id}','doctorController@surgery_delete')->name('surgery_delete');
Route::any('/add_surgery_types','surgeryController@add_surgery_types')->name('add_surgery_types');
Route::any('/add_surtypes','surgeryController@store')->name('add_surtypes');
Route::any('/update_surtypes','surgeryController@update')->name('update_surtypes');
Route::any('/delete_surgery{id}','surgeryController@destroy')->name('delete_surgery');
Route::any('/calendar_event','CalenderController@index')->name('calendar-event');
Route::any('/calendar_event/action','CalenderController@action');
Route::any('/add_labtest', 'doctorController@add_labtest')->name('add_labtest');
Route::any('/view_lab_description{id}', 'doctorController@view_lab_description')->name('view_lab_description');
Route::any('/edit_labtest{id}', 'doctorController@edit_labtest')->name('edit_labtest');
Route::any('/update_labtest', 'doctorController@update_labtest')->name('update_labtest');
Route::any('/delete_labtest{id}', 'doctorController@delete_labtest')->name('delete_labtest');
route::any('/delete_preclab{id}', 'doctorController@delete_preclab');
Route::any('/add_surgery', 'doctorController@add_surgery')->name('add_surgery');
Route::any('/print_uploads{id}', 'doctorController@print_uploads')->name('print_uploads');
Route::any('/add_procedure{id}', 'doctorController@add_procedure')->name('add_procedure');
Route::any('/otpatient_details', 'doctorController@otpatient_details')->name('otpatient_details');
Route::any('/add_ot_patient', 'doctorController@add_ot_patient')->name('add_ot_patient');
Route::any('/edit_ot_patient', 'doctorController@update_ot_patient')->name('edit_ot_patient');
Route::any('surgery_delete{id}', 'doctorController@surgery_delete')->name('surgery_delete');
// Route::any('/add_surgery_types', 'surgeryController@add_surgery_types')->name('add_surgery_types');
Route::any('/add_surtypes', 'surgeryController@store')->name('add_surtypes');
Route::any('/update_surtypes', 'surgeryController@update')->name('update_surtypes');
Route::any('delete_surgery{id}', 'surgeryController@destroy')->name('delete_surgery');
Route::get('calendar-event', 'CalenderController@index')->name('calendar-event');
Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);

//Reshma

Route::any('system_setup','SystemSetup@index')->name('system_setup');

Route::any('company_details','SystemSetup@company')->name('company_details');
Route::any('add_company_details','SystemSetup@addcompany')->name('add_company_details');
Route::any('edit_company_details','SystemSetup@editcompany')->name('edit_company_details');
Route::any('view_company_details','SystemSetup@viewcompany')->name('view_company_details');

Route::any('weekend_holiday','SystemSetup@holiday')->name('weekend_holiday');
Route::any('add_new_holiday','SystemSetup@addholiday')->name('add_new_holiday');
Route::any('edit_holiday','SystemSetup@editholiday')->name('edit_holiday');
Route::any('holiday_2017','SystemSetup@holiday2017')->name('holiday_2017');
Route::any('holiday_2018','SystemSetup@holiday2018')->name('holiday_2018');
Route::any('holiday_2019','SystemSetup@holiday2019')->name('holiday_2019');
Route::any('holiday_2020','SystemSetup@holiday2020')->name('holiday_2020');
Route::any('holiday_2021','SystemSetup@holiday2021')->name('holiday_2021');
Route::any('holiday_2022','SystemSetup@holiday2022')->name('holiday_2022');

Route::any('other_confgn','SystemSetup@othrconftn')->name('other_confgn');
Route::any('company_branch','SystemSetup@branch')->name('company_branch');
Route::any('add_company_branch','SystemSetup@addbranch')->name('add_company_branch');
Route::any('edit_company_branch','SystemSetup@editbranch')->name('edit_company_branch');
Route::any('configu_ration','SystemSetup@Configtn')->name('configu_ration');
Route::any('courts','SystemSetup@courts')->name('courts');
Route::any('add_court','SystemSetup@addcourt')->name('add_court');
Route::any('edit_court','SystemSetup@editcourt')->name('edit_court');



// Route::any('company_details','SystemSetting@index')->name('company_details');
// Route::any('add_company_details','SystemSetting@addcompany')->name('add_company_details');
// Route::any('edit_company_details','SystemSetting@editcompany')->name('edit_company_details');
// Route::any('view_company_details','SystemSetting@viewcompany')->name('view_company_details');

// Route::any('weekend_holiday','Holidays@index')->name('weekend_holiday');
// Route::any('add_new_holiday','Holidays@addholiday')->name('add_new_holiday');
// Route::any('edit_holiday','Holidays@editholiday')->name('edit_holiday');
// Route::any('holiday_2017','Holidays@holiday2017')->name('holiday_2017');
// Route::any('holiday_2018','Holidays@holiday2018')->name('holiday_2018');
// Route::any('holiday_2019','Holidays@holiday2019')->name('holiday_2019');
// Route::any('holiday_2020','Holidays@holiday2020')->name('holiday_2020');
// Route::any('holiday_2021','Holidays@holiday2021')->name('holiday_2021');
// Route::any('holiday_2022','Holidays@holiday2022')->name('holiday_2022');



// Route::any('other_confgn','OtherConfigtn@index')->name('other_confgn');
// Route::any('company_branch','OtherConfigtn@branch')->name('company_branch');
// Route::any('add_company_branch','OtherConfigtn@addbranch')->name('add_company_branch');
// Route::any('edit_company_branch','OtherConfigtn@editbranch')->name('edit_company_branch');
// Route::any('configu_ration','OtherConfigtn@Configtn')->name('configu_ration');

// Route::any('company_branch','CompanyBranch@index')->name('company_branch');
// Route::any('add_company_branch','CompanyBranch@addbranch')->name('add_company_branch');
// Route::any('edit_company_branch','CompanyBranch@editbranch')->name('edit_company_branch');
// Route::any('company_branch','CompanyBranch@index')->name('company_branch');

//Route::any('configu_ration','Configuration@index')->name('configu_ration');

//Reshma


//mugunth

//Client-list
Route::any('add_newclient',"ClientManagement@create")->name('add_newclient');
Route::any('client_list','ClientManagement@view')->name('client_list');
Route::any('edit_client','ClientManagement@edit')->name('edit_client');
Route::any('view-client','ClientManagement@show')->name('view-client');
Route::any('client-index',"ClientManagement@index")->name('client-index');
//end Client-List

//Client-Documents
Route::any('client-document','ClientManagement@document')->name('client-document');
Route::any('add-document','ClientManagement@addDocument')->name('add-document');
Route::any('view-document','ClientManagement@viewDocument')->name('view-document');
//end Client-Documents

//Client-Pickup
Route::any('client-pickup','ClientManagement@clientPickup')->name('client-pickup');
Route::any('add-pickup','ClientManagement@addPickups')->name('add-pickup');
Route::any('view-pickup','ClientManagement@viewPickups')->name('view-pickup');
//Client-Pickup
//complaint
Route::any('complaint-list','ClientManagement@complaintList')->name('complaint-list');
Route::any('add-Complaint','ClientManagement@addComplaint')->name('add-Complaint');
//end complaint

//Follow Up
Route::any('follow-up','ClientManagement@followup')->name('follow-up');
Route::any('add-follow','ClientManagement@addFollow')->name('add-follow');
//end Follow Up

//service
Route::any('client-service','ClientManagement@service')->name('client-service');
Route::any('add-service','ClientManagement@addService')->name('add-service');
//end service


//mugunth



//vinu
Route::any('file_managementindex',"filemanagement@index")->name('file_managementindex');
Route::any('file-list',"filemanagement@view")->name('file-list');
Route::any('edit-file',"filemanagement@edit")->name('edit-file');
Route::any('add-new-file',"filemanagement@addnew")->name('add-new-file');

Route::any('template-category',"filemanagement@template")->name('template-category');
//vinu

//beljin

Route::any('/u_details',"filemanagement@u_details")->name('u_details');
Route::any('/add_user',"filemanagement@add_user")->name('add_user');
Route::any('/change_password',"filemanagement@change_password")->name('change_password');
//beljin


?>



