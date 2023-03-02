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
| routes are loaded by the RouteServiceProvider within a group whicsubject_category
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//  return view('frontpage');
//});
    Auth::routes();
//superadmin
    Route::get('/superadminhome', "superadmincontroller@index")->name('superadminhome');
    Route::any('company_list', "superadmincontroller@show_company_list")->name('company_list');
    Route::post('reg_company', "superadmincontroller@reg_company")->name('reg_company');
    Route::post('/changestatus_com', "superadmincontroller@changestatus_company")->name('changestatus_com');
    Route::get('/edit_company/{id}', "superadmincontroller@edit_company")->name('edit_company');
    Route::put('/update_company/{id}', "superadmincontroller@update_company")->name('update_company');
    Route::any('/delete_company/{id}', "superadmincontroller@delete_company")->name('delete_company');
    //superadmin
//mange employee route start
    Route::any('employee_list',"employeecontroller@employee_list")->name('employee_list');
    Route::any('create_employee/getrole/{id}', "addcontroller@get_role")->name('getrole');
    //mange employee route end
//home controller
    Route::get('/', 'homecontroller@index')->name('home');
    Route::get('/home', 'homecontroller@index')->name('home');
    Route::get('/admin', 'homecontroller@index')->name('home');
    Route::get('/admindashboard', 'homecontroller@admindashboard')->name('admindashboard');
    Route::get('/logt', 'homecontroller@logout')->name('home');
    //home controller
//add controller
    Route::any('/addstaffs', 'addController@addstaffs');
    Route::any('/editstafff', 'addController@editstafff');
    Route::post('/addthestaffs', 'addController@addthestaffs');
    Route::post('/addstaffss', 'addController@addstaffss');
    Route::any('/add_staff', 'addController@add_staff');
    Route::any('/staffsalary{id}', 'addController@staffsalary');
    Route::any('/paysalary', 'addController@paysalary');
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
    Route::any('/addnonfixedallowance', 'addController@addnonfixedallowance')->name('addnonfixedallowance');
    Route::any('/staffs', 'addController@allstaffs');
    //add controller
//hr controller
    Route::any('/managestaff{id}', 'hrcontroller@managestaff');
    Route::any('/attendanceview', 'hrcontroller@attendanceview');
    Route::any('/monthwise', 'hrController@monthwise');
    Route::any('/attendancetostaff', 'hrController@attendancetostaff');
    Route::any('/appliedleave', 'hrcontroller@appliedleave');
    Route::any('/hrleaveapprove', 'hrcontroller@hrleaveapprove');
    Route::any('/leaves', 'hrcontroller@leaves');
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
    Route::any('/loandelete{id}', 'hrcontroller@loandelete');
    Route::any('/manualattendance', 'hrcontroller@manualattendance')->name('manualattendance');
    Route::get('/attendance', function () {
        return view('hr/attendance');
    }
    );
    //hr controller
//department controller
    Route::any('/managedepstaff{id}', 'departmentcontroller@managedepstaff');
    Route::any('/leaveapprove', 'departmentcontroller@leaveapprove');
    Route::any('/leavedecline', 'departmentcontroller@leavedecline');
    Route::any('/depleaves', 'departmentcontroller@depleaves');
    //department controller
//doctor controller
    Route::any('/applyleave', 'doctorController@applyleave');
    Route::any('/file', 'doctorController@file');
    //doctor controller
//store controller
    Route::any('/requestitems', 'storecontroller@create_requestitems')->name('requestitems');
    //store controller
//hospital controller
    Route::any('/usermanagement', 'hospitalcontroller@usermanagement')->name('usermanagement');
    //hospital controller
//store controller
    Route::any('/addsuppliers', 'storecontroller@index')->name('addsuppliers');
    Route::any('/suppliers_save', 'storecontroller@store')->name('suppliers_save');
    Route::any('/suppliers_details{id}', 'storecontroller@show')->name('suppliers_details');
    Route::any('/upload_suppliers', 'storecontroller@update')->name('upload_suppliers');
    Route::any('/delete_suppliers{id}', 'storecontroller@destroy')->name('delete_suppliers');
    Route::any('/supplier_ledger_details{id}', 'storecontroller@supplier_ledger_details')->name('supplier_ledger_details');
    Route::any('/add_installment_details{id}', 'storecontroller@add_installment_details')->name('add_installment_details');
    Route::any('/update_installment_details', 'storecontroller@update_installment_details')->name('update_installment_details');
    Route::any('/supplier_paid_details{id}', 'storecontroller@supplier_paid_details')->name('paid_details');
    //store controller
//accounts controller
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
    Route::any('/ledger_budget_category', 'AccountsController@ledger_budget_category')->name('ledger_budget_category');
    Route::any('/save_ledger_budget_category', 'AccountsController@save_ledger_budget_category')->name('save_ledger_budget_category');
    Route::any('/update_ledger_budget_category', 'AccountsController@update_ledger_budget_category')->name('update_ledger_budget_category');
    Route::any('/delete_ledger_budget_category/{id}', 'AccountsController@delete_ledger_budget_category')->name('delete_ledger_budget_category');
    Route::any('/expense_report', 'AccountsController@expense_report')->name('expense_report');
    Route::any('/budget_forecasting', 'AccountsController@budget_forecasting')->name('budget_forecasting');
    Route::any('/add_account', 'AccountsController@add_account')->name('add_account');
    Route::any('/budget_forecat_dept', 'AccountsController@budget_forecat_dept')->name('budget_forecat_dept');
    Route::any('/i_p_bank_bal', 'AccountsController@i_p_bank_bal')->name('i_p_bank_bal');
    Route::any('/reconcile_bank_entries', 'AccountsController@reconcile_bank_entries')->name('reconcile_bank_entries');
    Route::any('/bank_recon_report', 'AccountsController@bank_recon_report')->name('bank_recon_report');
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
    //accounts controller
//acc index controller
    Route::any('accindex', 'accindex@index')->name('accindex');
    //acc index controller
//calender controller
    Route::any('/calendar_event', 'CalenderController@index')->name('calendar-event');
    Route::any('/calendar_event/action', 'CalenderController@action');
    Route::get('calendar-event', 'CalenderController@index')->name('calendar-event');
    Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);
    //calender controller
// calender index controller
    Route::any('calander', "Calender@index")->name('calander');
    // calender index controller
// system setup controller
        //index
    Route::any('system_setup', 'SystemSetup@index')->name('system_setup');
        //company
    Route::any('company_details', 'SystemSetup@company')->name('company_details');
    Route::any('add_company_details', 'SystemSetup@addcompany')->name('add_company_details');
    Route::any('edit_company_details/{id}', 'SystemSetup@editcompany')->name('edit_company_details');
    Route::any('update_company_details/{id}', 'SystemSetup@updatecompany')->name('update_company_details');
    Route::any('view_company_details', 'SystemSetup@viewcompany')->name('view_company_details');
        //weekend and holiday
    Route::any('weekend_holiday', 'SystemSetup@holiday')->name('weekend_holiday');
    Route::any('add_new_holiday', 'SystemSetup@addholiday')->name('add_new_holiday');
    Route::any('/edit_holiday/{id}', 'SystemSetup@editholiday')->name('edit_holiday');
    Route::any('/update_holiday', 'SystemSetup@updateholiday')->name('update_holiday');
    Route::any('/delete_holiday/{id}', 'SystemSetup@deleteholiday')->name('delete_holiday');
    Route::any('edit_holiday', 'SystemSetup@editholiday')->name('edit_holiday');
    Route::any('holiday_2017', 'SystemSetup@holiday2017')->name('holiday_2017');
    Route::any('holiday_2018', 'SystemSetup@holiday2018')->name('holiday_2018');
    Route::any('holiday_2019', 'SystemSetup@holiday2019')->name('holiday_2019');
    Route::any('holiday_2020', 'SystemSetup@holiday2020')->name('holiday_2020');
    Route::any('holiday_2021', 'SystemSetup@holiday2021')->name('holiday_2021');
    Route::any('holiday_2022', 'SystemSetup@holiday2022')->name('holiday_2022');
        //Other Configuration
    Route::any('other_confgn', 'SystemSetup@othrconftn')->name('other_confgn');
        //Company branch
    Route::any('company_branch', 'SystemSetup@branch')->name('company_branch');
    Route::any('add_company_branch', 'SystemSetup@addbranch')->name('add_company_branch');
    Route::any('/edit_company_branch/{id}', 'SystemSetup@editbranch')->name('edit_company_branch');
    Route::any('/update_company_branch/{id}', 'SystemSetup@updatebranch')->name('update_company_branch');
    Route::any('/delete_company_branch/{id}', 'SystemSetup@deletebranch')->name('delete_company_branch');
        //configurations
    Route::any('configu_ration', 'SystemSetup@Configtn')->name('configu_ration');
        //courts
    Route::any('courts', 'SystemSetup@courts')->name('courts');
    Route::any('add_court', 'SystemSetup@addcourt')->name('add_court');
    Route::any('edit_court/{id}', 'SystemSetup@editcourt')->name('edit_court');
    Route::any('/update_court', 'SystemSetup@updatecourt')->name('update_court');
    Route::any('/delete_court/{id}', 'SystemSetup@deletecourt')->name('delete_court');
    Route::any('add_court_category', 'SystemSetup@addcourtcategory')->name('add_court_category');
        //letter types
    Route::any('letter_types', 'SystemSetup@lettertype')->name('letter_types');
    Route::any('add_letter_category', 'SystemSetup@addlettercategory')->name('add_letter_category');
    Route::any('edit_letter_type/{id}', 'SystemSetup@editlettertype')->name('edit_letter_type');
    Route::any('/update_letter_type', 'SystemSetup@updatelettertype')->name('update_letter_type');
    Route::any('/delete_letter_type/{id}', 'SystemSetup@deletelettertype')->name('delete_letter_type');
    Route::any('document_letter_category', 'SystemSetup@documentlettercategory')->name('document_letter_category');
    Route::post('/changestatus_lettertypes',"SystemSetup@changestatus_lettertypes")->name('changestatus_lettertypes');

        //payment items
    Route::any('payment_items', 'SystemSetup@paymentitem')->name('payment_items');
    Route::any('add_payment_item', 'SystemSetup@addpaymentitem')->name('add_payment_item');
    Route::any('edit_payment_item/{id}', 'SystemSetup@editpaymentitem')->name('edit_payment_item');
    Route::any('/update_payment_item', 'SystemSetup@updatepaymentitem')->name('update_payment_item');
    Route::any('/delete_payment_item/{id}', 'SystemSetup@deletepaymentitem')->name('delete_payment_item');
    Route::post('/changestatus_paymentitems',"SystemSetup@changestatus_paymentitems")->name('changestatus_paymentitems');
        //description selection
    Route::any('description_selectn', 'SystemSetup@descriptionselection')->name('description_selectn');
    Route::any('add_desc_sel', 'SystemSetup@adddescsel')->name('add_desc_sel');
    Route::any('edit_desc_sel/{id}', 'SystemSetup@editdescsel')->name('edit_desc_sel');
    Route::any('/update_desc_sel', 'SystemSetup@updatedescsel')->name('update_desc_sel');
    Route::any('/delete_desc_sel/{id}', 'SystemSetup@deletedescsel')->name('delete_desc_sel');
    Route::post('/changestatus_descsel',"SystemSetup@changestatus_descsel")->name('changestatus_descsel');

        //tax chart
    Route::any('tax_chart_main', 'SystemSetup@taxchartmain')->name('tax_chart_main');
    Route::any('tax_chart', 'SystemSetup@taxchart')->name('tax_chart');
    Route::any('add_tax_chart', 'SystemSetup@addtaxchart')->name('add_tax_chart');
    Route::any('edit_tax_chart/{id}', 'SystemSetup@edittaxchart')->name('edit_tax_chart');
    Route::any('/update_tax_chart', 'SystemSetup@updatetaxchart')->name('update_tax_chart');
    Route::any('/delete_tax_chart/{id}', 'SystemSetup@deletetaxchart')->name('delete_tax_chart');
    Route::post('/changestatus_taxchart',"SystemSetup@changestatus_taxchart")->name('changestatus_taxchart');
        //taxexcise
    Route::any('tax_excise', 'SystemSetup@taxexcise')->name('tax_excise');
    Route::any('add_tax_excise', 'SystemSetup@addtaxexcise')->name('add_tax_excise');
    Route::any('edit_tax_excise/{id}', 'SystemSetup@edittaxexcise')->name('edit_tax_excise');
    Route::any('/update_tax_excise', 'SystemSetup@updatetaxexcise')->name('update_tax_excise');
    Route::any('/delete_tax_excise/{id}', 'SystemSetup@deletetaxexcise')->name('delete_tax_excise');
    Route::post('/changestatus_taxexcise',"SystemSetup@changestatus_taxexcise")->name('changestatus_taxexcise');
        //tax_vat
    Route::any('tax_vat', 'SystemSetup@taxvat')->name('tax_vat');
    Route::any('add_tax_vat', 'SystemSetup@addtaxvat')->name('add_tax_vat');
    Route::any('edit_tax_vat/{id}', 'SystemSetup@edittaxvat')->name('edit_tax_vat');
    Route::any('/update_tax_vat', 'SystemSetup@updatetaxvat')->name('update_tax_vat');
    Route::any('/delete_tax_vat/{id}', 'SystemSetup@deletetaxvat')->name('delete_tax_vat');
    Route::post('/changestatus_taxvat',"SystemSetup@changestatus_taxvat")->name('changestatus_taxvat');
        //tax_wht
    Route::any('tax_wht', 'SystemSetup@taxwht')->name('tax_wht');
    Route::any('add_tax_wht', 'SystemSetup@addtaxwht')->name('add_tax_wht');
    Route::any('edit_tax_wht/{id}', 'SystemSetup@edittaxwht')->name('edit_tax_wht');
    Route::any('/update_tax_wht', 'SystemSetup@updatetaxwht')->name('update_tax_wht');
    Route::any('/delete_tax_wht/{id}', 'SystemSetup@deletetaxwht')->name('delete_tax_wht');
        //tax_wht-vat
    Route::any('tax_wht-vat', 'SystemSetup@taxwhtvat')->name('tax_wht-vat');
    Route::any('add_tax_wht-vat', 'SystemSetup@addtaxwhtvat')->name('add_tax_wht-vat');
    Route::any('edit_tax_wht-vat/{id}', 'SystemSetup@edittaxwhtvat')->name('edit_tax_wht-vat');
    Route::any('/update_tax_wht_vat', 'SystemSetup@updatetaxwhtvat')->name('update_tax_wht_vat');
    Route::any('/delete_tax_wht-vat/{id}', 'SystemSetup@deletetaxwhtvat')->name('delete_tax_wht-vat');
        //notifications
    Route::any('notifications', 'SystemSetup@notifications')->name('notifications');
        //template category
    Route::any('template_category', 'SystemSetup@templatecategory')->name('template_category');
    Route::any('add_template_category', 'SystemSetup@addtemplatecategory')->name('add_template_category');
    Route::any('edit_template_category/{id}', 'SystemSetup@edittemplatecategory')->name('edit_template_category');
    Route::any('/update_template_category', 'SystemSetup@updatetemplatecategory')->name('update_template_category');
    Route::any('/delete_template_category/{id}', 'SystemSetup@deletetemplatecategory')->name('delete_template_category');
    Route::any('document_template_category', 'SystemSetup@documenttemplatecategory')->name('document_template_category');
    Route::post('/changestatus_template',"SystemSetup@changestatus_template")->name('changestatus_template');
        //paired accounts
    Route::any('paired_account', 'SystemSetup@pairedaccount')->name('paired_account');
    Route::any('add_account_pairs', 'SystemSetup@addaccountpairs')->name('add_account_pairs');
    Route::any('edit_account_pairs/{id}', 'SystemSetup@editaccountpairs')->name('edit_account_pairs');
    Route::any('/update_paired_account', 'SystemSetup@updatepairedaccount')->name('update_paired_account');
    Route::any('/delete_account_pairs/{id}', 'SystemSetup@deletepairedaccount')->name('delete_account_pairs');
        //file types
    Route::any('file_types', 'SystemSetup@filetypes')->name('file_types');
    Route::any('add_file_types', 'SystemSetup@addfiletypes')->name('add_file_types');
    Route::any('edit_file_types/{id}', 'SystemSetup@editfiletypes')->name('edit_file_types');
    Route::any('/update_file_types', 'SystemSetup@updatefiletypes')->name('update_file_types');
    Route::any('/delete_file_types/{id}', 'SystemSetup@deletefiletypes')->name('delete_file_types');
    Route::post('/changestatus_filetypes',"SystemSetup@changestatus_filetypes")->name('changestatus_filetypes');

        //invoice_items
    Route::any('invoice_items', 'SystemSetup@invoiceitems')->name('invoice_items');
    Route::any('add_invoice_item', 'SystemSetup@addinvoiceitem')->name('add_invoice_item');
    Route::any('edit_invoice_item/{id}', 'SystemSetup@editinvoiceitem')->name('edit_invoice_item');
    Route::any('/update_invoice_item', 'SystemSetup@updateinvoiceitem')->name('update_invoice_item');
    Route::any('/delete_invoice_item/{id}', 'SystemSetup@deleteinvoiceitem')->name('delete_invoice_item');
    Route::any('add_gl_account', 'SystemSetup@addglaccount')->name('add_gl_account');
        //currency_list
    Route::any('currency_list', 'SystemSetup@currencylist')->name('currency_list');
    Route::any('add_currency', 'SystemSetup@addcurrency')->name('add_currency');
    Route::any('edit_currency/{id}', 'SystemSetup@editcurrency')->name('edit_currency');
    Route::any('/update_currency', 'SystemSetup@updatecurrency')->name('update_currency');
    Route::any('/delete_currency/{id}', 'SystemSetup@deletecurrency')->name('delete_currency');
        //database backups
    Route::any('database_backup', 'SystemSetup@databasebackup')->name('database_backup');
        //tansport zone
    Route::any('Transport_zones', 'SystemSetup@transportzone')->name('Transport_zones');
    Route::any('add_transport_zone', 'SystemSetup@addtransportzone')->name('add_transport_zone');
    Route::any('edit_transport_zone/{id}', 'SystemSetup@edittransportzone')->name('edit_transport_zone');
    Route::any('/update_transport_zone', 'SystemSetup@updatetransportzone')->name('update_transport_zone');
    Route::any('/delete_transport_zone/{id}', 'SystemSetup@deletetransportzone')->name('delete_transport_zone');
    Route::post('/changestatus_transportzones',"SystemSetup@changestatus_transportzones")->name('changestatus_transportzones');
        //billable activities
    Route::any('billable_activities', 'SystemSetup@billableactivities')->name('billable_activities');
    Route::any('add_billable_activities', 'SystemSetup@addbillableactivities')->name('add_billable_activities');
    Route::any('edit_billable_activities/{id}', 'SystemSetup@editbillableactivities')->name('edit_billable_activities');
    Route::any('/update_billable_activities', 'SystemSetup@updatebillableactivities')->name('update_billable_activities');
    Route::any('/delete_billable_activities/{id}', 'SystemSetup@deletebillableactivities')->name('delete_billable_activities');
    Route::post('/changestatus_billableactivities',"SystemSetup@changestatus_billableactivities")->name('changestatus_billableactivities');
        //bank account details
    Route::any('bank_details', 'SystemSetup@bankdetails')->name('bank_details');
    Route::any('add_bank_account', 'SystemSetup@addbankaccount')->name('add_bank_account');
    Route::any('edit_bank_account/{id}', 'SystemSetup@editbankaccount')->name('edit_bank_account');
    Route::any('/update_bank_account', 'SystemSetup@updatebankaccount')->name('update_bank_account');
    Route::any('/delete_bank_account/{id}', 'SystemSetup@deletebankaccount')->name('delete_bank_account');
    Route::any('add_bank_document', 'SystemSetup@bankdocument')->name('add_bank_document');
        //leave days per year
    Route::any('leave_days_year', 'SystemSetup@leavedays')->name('leave_days_year');
    Route::any('add_leave_days', 'SystemSetup@addleavedays')->name('add_leave_days');
    Route::any('edit_leave_days/{id}', 'SystemSetup@editleavedays')->name('edit_leave_days');
    Route::any('/update_leave_days', 'SystemSetup@updateleavedays')->name('update_leave_days');
    Route::any('/delete_leave_days/{id}', 'SystemSetup@deleteleavedays')->name('delete_leave_days');
        //hourly rates
    Route::any('hourly_rates', 'SystemSetup@hourlyrates')->name('hourly_rates');
    Route::any('add_hourly_rates', 'SystemSetup@addhourlyrates')->name('add_hourly_rates');
    Route::any('edit_hourly_rates/{id}', 'SystemSetup@edithourlyrates')->name('edit_hourly_rates');
    Route::any('/update_hourly_rates', 'SystemSetup@updatehourlyrates')->name('update_hourly_rates');
    Route::any('/delete_hourly_rates/{id}', 'SystemSetup@deletehourlyrates')->name('delete_hourly_rates');
        //partner revenue share
    Route::any('partner_revenue_share', 'SystemSetup@partnerrevenueshare')->name('partner_revenue_share');
    Route::any('add_partner_revenue', 'SystemSetup@addpartnerrevenue')->name('add_partner_revenue');
        //menu access configuration
    Route::any('menu_access_configuration', 'SystemSetup@menuaccess')->name('menu_access_configuration');
        //usefullinks
    Route::any('useful_links', 'SystemSetup@usefullinks')->name('useful_links');
    // system setup controller
//client invoicing controller
    Route::any('drn_fee_notes', 'clientinvoicing@drnfee')->name('drn_fee_notes');
    Route::any('new_drn_fee_notes', 'clientinvoicing@newdrnfee')->name('new_drn_fee_notes');
    Route::any('receipt-report', 'clientinvoicing@receiptReport')->name('receipt-report');
    Route::any('reverse-receipt', 'clientinvoicing@reverseReport')->name('reverse-receipt');
    Route::any('receipt-reprint', 'clientinvoicing@receiptReprint')->name('receipt-reprint');
    Route::any('issue-receipt', 'clientinvoicing@issuceReceipt')->name('issue-receipt');
    Route::any('quotation', 'clientinvoicing@Quotation')->name('quotation');
    Route::any('new-document', 'clientinvoicing@newDocumnet')->name('new-document');
    Route::any('edit-document', 'clientinvoicing@editDocument')->name('edit-document');
    //Report
    Route::any('client_invoicingindex', "clientinvoicing@index")->name('client_invoicingindex');
    Route::any('debtors_aging_report', "clientinvoicing@deptorsaggingreport")->name('debtors_aging_report');
    Route::any('debtors_list', "clientinvoicing@deptorslist")->name('debtors_list');
    Route::any('fee_note_items_billed', "clientinvoicing@filenoteitembilled")->name('fee_note_items_billed');
    Route::any('fee_note_items_received', "clientinvoicing@filenoteitemreceived")->name('fee_note_items_received');
    Route::any('fee_note_report', "clientinvoicing@feenotereport")->name('fee_note_report');
    Route::any('other_reports', "clientinvoicing@otherreport")->name('other_reports');
    Route::any('quotation_item_report', "clientinvoicing@quotationitemreport")->name('quotation_item_report');
    Route::any('fee_expected_advocate', "clientinvoicing@feeexpectedadvocate")->name('fee_expected_advocate');
    Route::any('credit_notes', "clientinvoicing@creditnotes")->name('credit_notes');
    Route::any('new_credit_notes', "clientinvoicing@newcreditnotes")->name('new_credit_notes');
    Route::any('capture_billable_items', "clientinvoicing@billable_items")->name('billable_items');
    Route::any('view_bill', "clientinvoicing@view_bill_item")->name('view_bill_item');
    //client invoicing controller
//user management controller
        //index
    Route::any('user_management', 'UserManagement@index')->name('user_management');
        //manage user accounts
    Route::any('manage_user_account', 'UserManagement@manageuseraccount')->name('manage_user_account');
    Route::any('reg_new_user', 'UserManagement@regnewuser')->name('reg_new_user');
    Route::any('/user_destroy/{id}', "UserManagement@userdestroy")->name('user_destroy');
    Route::any('/user_edit/{id}', 'UserManagement@useredit')->name('user_edit');
    Route::any('/update_user', 'UserManagement@userupdate')->name('update_user');
    Route::any('user_attachments', 'UserManagement@attachments')->name('user_attachments');
    Route::any('user_comments', 'UserManagement@comments')->name('user_comments');
        //change password
    Route::any('change_user_password', 'UserManagement@changepassword')->name('change_user_password');
        //manage user group
    Route::any('manage_user_group', 'UserManagement@manageusergrp')->name('manage_user_group');
    Route::any('add_new_user_grp', 'UserManagement@addnewusergrp')->name('add_new_user_grp');
    Route::any('/update_group', 'UserManagement@updategroup')->name('update_group');
    Route::any('/edit_new_user_grp/{id}', 'UserManagement@editnewusergrp')->name('edit_new_user_grp');
    Route::any('/user_group_destroy/{id}', "UserManagement@usergroupdestroy")->name('user_group_destroy');
        //view roles per user
    Route::any('view_roles_per_user', 'UserManagement@rolesperuser')->name('view_roles_per_user');
    Route::any('edit_view_roles', 'UserManagement@editviewroles')->name('edit_view_roles');
        //manage user roles
    Route::any('manage_job_title', 'UserManagement@manageJobTitle')->name('manage_job_title');
    Route::any('add_user_roles', 'UserManagement@adduserrole')->name('add_user_roles');
    Route::any('/edit_user_roles/{id}', 'UserManagement@edituserrole')->name('edit_user_roles');
    Route::any('/update_role', 'UserManagement@updaterole')->name('update_role');
    Route::any('/user_role_destroy/{id}', "UserManagement@userroledestroy")->name('user_role_destroy');
    Route::any('edit_user_roles/{id}', 'UserManagement@edituserrole')->name('edit_user_roles');
    Route::any('/update_user_roles', 'UserManagement@updateuserrole')->name('update_user_roles');
    Route::any('/delete_user_roles/{id}', 'UserManagement@deleteuserrole')->name('delete_user_roles');
        //manage user department
    Route::any('manage_user_department', 'UserManagement@manageuserdepartment')->name('manage_user_department');
    Route::any('add_user_department', 'UserManagement@adduserdepartment')->name('add_user_department');
    Route::any('/edit_user_department/{id}', 'UserManagement@edituserdepartment')->name('edit_user_department');
    Route::any('/update_user_department', 'UserManagement@updateuserdepartment')->name('update_user_department');
    Route::any('/destroy_user_department/{id}', "UserManagement@destroyuserdepsrtment")->name('destroy_user_department');
    Route::any('edit_user_department/{id}', 'UserManagement@edituserdepartment')->name('edit_user_department');
    Route::any('/update_user_department', 'UserManagement@updateuserdepartment')->name('update_user_department');
    Route::any('/delete_user_department/{id}', 'UserManagement@deleteuserdepartment')->name('delete_user_department');
        //manage towns
    Route::any('manage_towns', 'UserManagement@managetowns')->name('manage_towns');
    Route::any('add_town', 'UserManagement@addtown')->name('add_town');
    Route::any('edit_town/{id}', 'UserManagement@edittown')->name('edit_town');
    Route::any('/update_town', 'UserManagement@updatetown')->name('update_town');
    Route::any('/delete_town/{id}', 'UserManagement@deletetown')->name('delete_town');
        //advocate targets
    Route::any('advocates_target', 'UserManagement@advocatestarget')->name('advocates_target');
    Route::any('add_new_entry', 'UserManagement@addnew')->name('add_new_entry');
    Route::any('edit_advocate_target', 'UserManagement@editadvocatetarget')->name('edit_advocate_target');
    Route::any('advocates_target_2021', 'UserManagement@advocatestarget2021')->name('advocates_target_2021');
    Route::any('advocates_target_2022', 'UserManagement@advocatestarget2022')->name('advocates_target_2022');
    Route::any('advocates_target_2023', 'UserManagement@advocatestarget2023')->name('advocates_target_2023');
    Route::any('advocates_target_2024', 'UserManagement@advocatestarget2024')->name('advocates_target_2024');
    Route::any('advocates_target_2025', 'UserManagement@advocatestarget2025')->name('advocates_target_2025');
    Route::any('advocates_target_2026', 'UserManagement@advocatestarget2026')->name('advocates_target_2026');
    //user management controller
    //job position/titles
    Route::any('view_job_perm_role/{id}', 'UserManagement@view_job_perm_role')->name('view_job_perm_depart');
    //job position/titles
//client management controller
        //Client-list
    Route::any('add-client', "ClientManagement@addNewClient")->name('add-client');
    Route::any('add_newclient', "ClientManagement@addNewclient")->name('add_newclient');
    Route::any('client_list/{id}', 'ClientManagement@view')->name('client_list');
    Route::any('/edit_person/{individual_id}', 'ClientManagement@edit_person')->name('edit_person');
    Route::any('show-client/{id}', 'ClientManagement@show')->name('show-client');
    Route::any('client-index', "ClientManagement@index")->name('client-index');
    Route::any('update-client', "ClientManagement@updateClient")->name('update-client');
    Route::any('delete-client/{id}', "ClientManagement@deleteClient")->name('delete-client');
    Route::post('/changestatus_individual',"ClientManagement@changestatus_individual")->name('changestatus_individual');
    //coporate
    Route::any('add_corporate', 'ClientManagement@addCorporate')->name('add-corporate');
    Route::any('corporate-list/{company_id}', 'ClientManagement@listCorporate')->name('corporate-list');
    Route::post('/changestatus_corporate',"ClientManagement@changestatus_corporate")->name('changestatus_corporate');
    Route::any('/edit_client/{corporate_id}','ClientManagement@edit_corporate')->name('edit_client');
    Route::any('/update-corporate','ClientManagement@Update_corporate')->name('update-corporate');
    Route::any('/delete_client/{corporate_id}','ClientManagement@Corporate_destroy')->name('delete_client');
    Route::any('/corporate-document/{corporate_id}','ClientManagement@CorporateDocument')->name('corporate-document');
    Route::any('add-corporate-document','ClientManagement@addCorporatedocument')->name('add-corporate-document');
    Route::any('corporate-document-details/{id}','ClientManagement@viewCorporateDocument')->name('corporate-document-details');
    Route::any('edit-corporate-document/{id}','ClientManagement@editCorporateDocument')->name('edit-corporate-document');
    Route::any('update-document-details','ClientManagement@updateDocumentDetails')->name('update-document-details');
    Route::any('view-document-details/{id}','ClientManagement@viewDocummentDetails')->name('view-document-details');
    Route::any('send_mail', 'ClientManagement@send_mail')->name('send_mail');
    Route::any('post_important_date', 'ClientManagement@post_important_date')->name('post_important_date');
        //Lawyer
    Route::any('asign-lawyer','ClientManagement@asignlawyer')->name('asign-lawyer');
    Route::any('add_lawyer','ClientManagement@add_lawyer')->name('add_lawyer');
    Route::any('edit_lawyer/{id}','ClientManagement@edit_lawyer')->name('edit_lawyer');
    Route::any('update_lawyer',"ClientManagement@update_lawyer")->name('update_lawyer');
    Route::any('view_lawyer/{id}','ClientManagement@view_lawyer')->name('view_lawyer');
    Route::any('/delete_lawyer/{id}','ClientManagement@delete_lawyer')->name('delete_lawyer');
        //Client-Documents
    Route::any('client-document/{id}', 'ClientManagement@document')->name('client-document');
    Route::any('create-document/{individual_id}', 'ClientManagement@createDocument')->name('create-document');
    Route::any('add-document', 'ClientManagement@addDocument')->name('add-document');
    Route::any('view-document/{id}', 'ClientManagement@viewDocument')->name('view-document');
    Route::any('edit-documents/{id}', 'ClientManagement@editDocument')->name('edit-documents');
    Route::any('view_corporate_document/{id}', 'ClientManagement@showcorporatedocument')->name('view_corporate_document');
    Route::any('delete-document/{id}', 'ClientManagement@deleteDocument')->name('delete-document');
    Route::any('update-document', 'ClientManagement@updatedocument')->name('update-document');
        //Client-Pickup
    Route::any('client-pickup', 'ClientManagement@clientPickup')->name('client-pickup');
    Route::any('add-pickup', 'ClientManagement@formPickup')->name('add-pickup');
    Route::any('store-pickup', 'ClientManagement@storePickup')->name('store-pickup');
    Route::any('/view-pickup/{id}', 'ClientManagement@viewPickups')->name('view-pickup');
    Route::any('/delete-pickup/{id}', 'ClientManagement@deletePickup')->name('delete-pickup');
        //complaint
    Route::any('complaint-list', 'ClientManagement@complaintList')->name('complaint-list');
    Route::any('create-Complaint', 'ClientManagement@createComplaint')->name('create-Complaint');
    Route::any('add-Complaint', 'ClientManagement@addComplaint')->name('add-Complaint');
    Route::any('edit_complaint/{id}', 'ClientManagement@editComplaint')->name('edit-Complaint');
    Route::any('update-Complaint', 'ClientManagement@updateComplaint')->name('update-Complaint');
    Route::any('view-Complaint/{id}', 'ClientManagement@viewComplaint')->name('view-Complaint');
    Route::any('delete-Complaint/{id}', 'ClientManagement@deleteComplaint')->name('delete-Complaint');
        //Follow Up
    Route::any('follow-up', 'ClientManagement@followup')->name('follow-up');
    Route::any('add-follow', 'ClientManagement@addFollowup')->name('add-follow');
    Route::any('edit-follow/{id}', 'ClientManagement@editFollow')->name('edit-follow');
    Route::any('update-follow', 'ClientManagement@updateFollow')->name('update-follow');
    Route::any('delete-follow/{id}', 'ClientManagement@deleteFollow')->name('delete-follow');
        //service
    Route::any('client-service', 'ClientManagement@service')->name('client-service');
    Route::any('add-service', 'ClientManagement@addService')->name('add-service');
    Route::any('edit-service/{id}', 'ClientManagement@editService')->name('edit-service');
    Route::any('update-service', 'ClientManagement@updateService')->name('update-service');
    Route::any('delete-service/{id}', 'ClientManagement@deleteService')->name('delete-service');
        //Quotation
    Route::any('Quotation', 'ClientManagement@Quotation')->name('Quotation');
    Route::any('add-Quotation', 'ClientManagement@addQuotation')->name('add-Quotation');
    Route::any('edit-Quotation/{id}', 'ClientManagement@editQuotation')->name('edit-Quotation');
    Route::any('update-Quotation', 'ClientManagement@updateQuotation')->name('update-Quotation');
    Route::any('delete-Quotation/{id}', 'ClientManagement@deleteQuotation')->name('delete-Quotation');
        //communication
    Route::any('communication-list', 'ClientManagement@ListCommunication')->name('communication-list');
    Route::any('add-communication', 'ClientManagement@addCommunication')->name('add-communication');
    Route::any('edit-communication/{id}', 'ClientManagement@editCommunication')->name('edit-communication');
    Route::any('/update-communication', 'ClientManagement@updateCommunication')->name('update-communication');
    Route::any('/delete-communication/{id}', 'ClientManagement@deleteCommunication')->name('delete-communication');
    Route::any('new_communication', 'ClientManagement@add_communication')->name('add_communication');
        //search list
    Route::any('search-list', 'ClientManagement@listSearch')->name('search-list');
    Route::any('register-client', 'ClientManagement@registerClient')->name('register-client');
    //client management controller
//file management controller
        //index
    Route::any('file_managementindex', "filemanagement@index")->name('file_managementindex');
        //manage files
    Route::any('file-list', "filemanagement@views")->name('file-list');
    Route::any('/edit-file/{id}', "filemanagement@edit")->name('edit-file');
    Route::any('update/{id}', "filemanagement@update")->name('update');
    Route::any('view-list/{id}', 'filemanagement@viewlist')->name('view-list');
    Route::any('add-task', "filemanagement@addtask")->name('add-task');
    Route::any('/file_destroy/{id}', "filemanagement@file_destroy")->name('file_destroy');
    Route::any('add-new-file', "filemanagement@addnew")->name('add-new-file');
        //File Archive
    Route::any('file-archive', "filemanagement@filearchive")->name('file-archive');
    Route::any('add-box-no', "filemanagement@addboxno")->name('add-box-no');
    Route::any('view-box-no', "filemanagement@viewboxno")->name('view-box-no');
    Route::any('/edit-box-no/{id}', "filemanagement@editboxno")->name('edit-box-no');
    Route::any('update-box/{id}', "filemanagement@updatebox")->name('update-box');
    Route::any('delete-box/{id}', "filemanagement@deleteboxno")->name('delete-box');
        //document templates
    Route::any('template-category', "filemanagement@template")->name('template-category');
    Route::any('add-template', "filemanagement@addtemplate")->name('add-template');
    Route::any('edit_template/{id}', "filemanagement@edittemplate")->name('edit_template');
    Route::any('update_template/{id}', "filemanagement@updatetemplate")->name('update_template');
    Route::any('delete_template/{id}', "filemanagement@deletetemplate")->name('delete_template');
        //file progress/bringup
    Route::any('add-file-progress', "filemanagement@addprogress")->name('add-file-progress');
    Route::any('/edit-file-progress/{id}', "filemanagement@editprogress")->name('edit-file-progress');
    Route::any('update_progress/{id}', "filemanagement@update_progress")->name('update_progress');
    Route::any('/delete-file-progress/{id}', "filemanagement@delete_progress")->name('delete-file-progress');
    Route::any('progress-bringup', "filemanagement@progressbringup")->name('progress-bringup');
    Route::any('add-new-bringup', "filemanagement@addbringup")->name('add-new-bringup');
    Route::any('file-action-hours', "filemanagement@fileactionhours")->name('file-action-hours');
    Route::any('add-file-progress-action', "filemanagement@addfileprogressaction")->name('add-file-progress-action');
    Route::any('add-file-bringup-reminder', "filemanagement@addfilebringupreminder")->name('add-file-bringupreminder');
    Route::any('book-court', "filemanagement@bookcourt")->name('book-court');
    Route::any('court-attendance-sheet', "filemanagement@courtattendance")->name('court-attendance-sheet');
    Route::any('arbiration-sheet', "filemanagement@arbirationsheet")->name('arbiration-sheet');
    Route::any('conveyance-sheet', "filemanagement@conveyance")->name('conveyance-sheet');
    Route::any('file-progress-list',"filemanagement@fileprogresslist")->name('file-progress-list');
    Route::any('meeting-rooms', "filemanagement@meetingrooms")->name('meeting-rooms');
    Route::any('view-file-list-progress/{id}', 'filemanagement@viewfilelisprogress')->name('view-file-list-progress');
    Route::any('bringup', "filemanagement@bringup")->name('bringup');
    Route::any('file-progress-report', "filemanagement@fileprogressreport")->name('file-progress-report');
    Route::any('file-status-summary', "filemanagement@filestatussummary")->name('file-status-summary');
        //diary management
    Route::any('diary-management', "filemanagement@diarymanagement")->name('diary-management');
    Route::any('add-event', "filemanagement@addevent")->name('add-event');
    Route::any('/event_delete/{id}', "filemanagement@eventdelete")->name('event_delete');
    Route::any('/edit_event/{id}', "filemanagement@editevent")->name('editevent');
    Route::any('update_event/{id}', "filemanagement@updateevent")->name('update_event');
        //workflow
    Route::any('work-flow', "filemanagement@workflow")->name('work-flow');
    Route::any('new-workflow', "filemanagement@newworkflow")->name('new-workflow');
    Route::any('/delete-workflow/{id}', "filemanagement@deleteworkflow")->name('delete-workflow');
    Route::any('/edit-workflow/{id}', "filemanagement@editworkflow")->name('editworkflow');
    Route::any('/update-workflow', "filemanagement@updatworkflow")->name('update-workflow');
        //document manager
    Route::any('document-manager', "filemanagement@documentmanager")->name('document-manager');
    Route::any('upload-document', "filemanagement@uploaddocument")->name('upload-document');
    Route::any('generate-document', "filemanagement@generatedocument")->name('generate-document');
        //file report
    Route::any('file-report', "filemanagement@filereport")->name('file-report');
    Route::any('file-opened-report', "filemanagement@fileopenreport")->name('file-opened-report');
    Route::any('file-closed-report', "filemanagement@fileclosedreport")->name('file-closed-report');
    Route::any('file-pending', "filemanagement@filepending")->name('file-pending');
    Route::any('file-pending-approval', "filemanagement@filependingapproval")->name('file-pending-approval');
    Route::any('instructions-past', "filemanagement@instructionspast")->name('instructions-past');
        //add ons
    Route::any('outgoing-letters', "filemanagement@outgoingletter")->name('outgoing-letters');
    Route::any('add-outgoing-letters', "filemanagement@addoutgoingletters")->name('add-outgoing-letters');
    Route::any('edit-outgoing-letters/{id}', "filemanagement@editoutgoingletter")->name('add-outgoing-letters');
    Route::any('/update_outgoing_letters/{id}', "filemanagement@updateoutgoingletters")->name('update_outgoing_letters');
    Route::any('/delete_outgoing_letter/{id}', "filemanagement@deleteoutgoingletter")->name('delete_outgoing_letter');
    Route::any('incomming-letters', "filemanagement@incommingletters")->name('incomming-letters');
    Route::any('add-incomming-letters', "filemanagement@addincommingletters")->name('add-incomming-letters');
    Route::any('safe-item-request', "filemanagement@safeitemrequest")->name('safe-item-request');
    Route::any('safe-register-report', "filemanagement@saferegisterreport")->name('safe-register-report');
    Route::any('/u_details', "filemanagement@u_details")->name('u_details');
        //office instructions
    Route::any('/file-list-progress-report', "filemanagement@filelistprogressreport")->name('file-list-progress-report');
    Route::any('/client-monthly-file-status', "filemanagement@clientmonthlystatus")->name('client-monthly-file-status');
    Route::any('/staff-monthly-status-report', "filemanagement@staffmonthlystatusreport")->name('staff-monthly-status-report');
    Route::any('/office_instructions', "filemanagement@new_instructions")->name('new_instruction');
    Route::any('/new_office_instructions', "filemanagement@add_new_instructions")->name('add_new_instructions');
    Route::any('update_office_instruction/{id}', "filemanagement@updateofficeinstructions")->name('update_office_instruction');
    Route::any('/delete_office/{id}', "filemanagement@destroyofficeinstruction")->name('delete_office');
    Route::any('/instructions_report', "filemanagement@view_new_instructions")->name('view_new_instructions');
    Route::any('/file_instruction', "filemanagement@new_file_instructions")->name('new_file_instructions');
    Route::any('/file_new_instruction', "filemanagement@add_new_file_instructions")->name('add_new_file_instructions');
        //safe management
    Route::any('/Safe_management', "filemanagement@safe_management_list")->name('safe_management_list');
    Route::any('/new_Safe_management', "filemanagement@new_safe_management_list")->name('new_safe_management_list');
    Route::any('/edit_Safe_management/{id}', "filemanagement@editsafemanagement_list")->name('edit_Safe_management');
    Route::any('/update_Safe_management/{id}', "filemanagement@updatesafemanagement_list")->name('update_Safe_management');
    Route::any('/delete_Safe_management/{id}', "filemanagement@deletesafemanagement")->name('edit_Safe_management');
    Route::any('/Request_staff_item', "filemanagement@Request_staff_item_list")->name('Request_staff_item_list');
    Route::any('/edit_safe_item/{id}', "filemanagement@edit_safe_item")->name('edit_safe_item');
    Route::any('/update_safe_item/{id}', "filemanagement@update_Request_staff_item")->name('update_safe_item');
    Route::any('/delete_safe_item/{id}', "filemanagement@delete_safe_item")->name('delete_safe_item');
    Route::any('/new_Request_staff_item', "filemanagement@add_Request_staff_item_list")->name('add_Request_staff_item_list');
    Route::any('/Process_Request', "filemanagement@Process_Request_list")->name('Process_Request_list');
        //file instructions
    Route::any('/edit_file_instruction/{id}', "filemanagement@edit_file_instruction_list")->name('edit_file_instruction');
    Route::any('update_file_instruction/{id}', "filemanagement@updatefileinstruction")->name('update_file_instruction');
    Route::any('/edit_office_instruction/{id}', "filemanagement@edit_office_instruction_list")->name('edit_office_instruction_list');
    Route::any('/delete_instruction/{id}', "filemanagement@destroyfileinstruction")->name('delete_instruction');
    //file management controller
// hr index controller
        //index
    Route::any('hrindex', 'hrindex@index')->name('hrindex');
        //recruitment
    Route::any('recruitment', 'hrindex@recruitment')->name('recruitment');
             //job posts
    Route::any('job_posts', 'hrindex@job_posts')->name('job_posts');
    Route::any('edit_job_post/{id}', 'hrindex@edit_job_post')->name('edit_job_post');
    Route::any('/update_job_post', 'hrindex@update_job_post')->name('update_job_post');
    Route::any('/delete_job_post/{id}', 'hrindex@delete_job_post')->name('delete_job_post');
    Route::any('/view_job_post/{id}', 'hrindex@view_job_post')->name('view_job_post');
    Route::any('create_job_post', 'hrindex@create_job_post')->name('create_job_post');
            //job applications
    Route::any('view_job_applications', 'hrindex@view_job_applications')->name('view_job_applications');
    Route::any('view_application_details', 'hrindex@view_application_details')->name('view_application_details');
    Route::any('view_job_appl_details_1', 'hrindex@view_job_appl_details_1')->name('view_job_appl_details_1');
    Route::any('view_job_appl_details_2', 'hrindex@view_job_appl_details_2')->name('view_job_appl_details_2');
            //reviewd applications
    Route::any('reviewed_details', 'hrindex@reviewed_details')->name('reviewed_details');
        //employee
    Route::any('addemployee', "employeecontroller@store")->name('addemployee');
    Route::any('create_employee/{id}',"employeecontroller@create")->name('create_employee');
        //Manage Staffs
    Route::any('/edit_staff_details/{id}', 'hrindex@edit_staff_details')->name('edit_staff_details');
    Route::any('/view_staff_details/{id}', 'hrindex@view_staff_details')->name('view_staff_details');
        //department
    Route::any('hr_department', 'hrindex@hrdepartment')->name('hr_department');
        //performance
    Route::any('performance_department', 'hrindex@performance_department')->name('performance_department');
    Route::any('quarterly_performance_form', 'hrindex@quarterly_performance_form')->name('quarterly_performance_form');
    Route::any('add_kpi', 'hrindex@add_kpi')->name('add_kpi');
    Route::any('mid_year_performance', 'hrindex@mid_year_performance')->name('mid_year_performance');
    Route::any('annual_performance_form', 'hrindex@annual_performance_form')->name('annual_performance_form');
        //overtime
    Route::any('over_time', 'hrindex@over_time_list')->name('over_time');
    Route::any('view_over_time', 'hrindex@viewover_time_list')->name('view_over_time');
        //assignment
    Route::any('add_assingment', 'hrindex@add_assignment')->name('add_assingment');
    Route::any('edit-assigment/{id}', 'hrindex@editassigment')->name('edit-assigment');
    Route::any('update-assigment', 'hrindex@updateassigment')->name('update-assigment');
    Route::any('drop-assigment/{id}', 'hrindex@dropassigment')->name('drop-assigment');
        //bank
    Route::any('add_bank_names', 'hrindex@addbanknames')->name('add_bank_names');
    Route::any('bank_names', 'hrindex@bank_names')->name('bank_names');
    Route::any('/edit_bank_name/{id}', 'hrindex@editbanknames')->name('edit_bank_name');
    Route::any('/update_bank', 'hrindex@updatebankname')->name('update_bank');
    Route::any('/delete_bank/{id}', 'hrindex@deletebank')->name('delete_bank');
        //task allocation
    Route::any('task_allocation', 'hrindex@task_allocation')->name('task_allocation');
    Route::any('view_task_allocation', 'hrindex@view_task_allocation')->name('view_task_allocation');
    Route::any('edit_task_allocation', 'hrindex@edit_task_allocation')->name('edit_task_allocation');
        //timesheet
    Route::any('timesheet', 'hrindex@timesheets')->name('timesheet');
    Route::any('timesheetweek', 'hrindex@timesheetweeks')->name('timesheetweek');
    Route::any('viewsheet', 'hrindex@viewsheets')->name('viewsheet');
    Route::any('timesheetmonth', 'hrindex@timesheetmonths')->name('timesheetmonth');
    Route::any('monthviewsheet', 'hrindex@monthviewsheets')->name('monthviewsheet');
        //leave request
    Route::any('leave_request_details', 'hrindex@leave_request')->name('leave_request_details');
    Route::any('addleaverequest', 'hrindex@addleaverequest')->name('addleaverequest');
    Route::any('approve_leave_request', 'hrindex@approve_leave_request')->name('approve_leave_request');
    Route::any('view_leave_request', 'hrindex@view_leave_request')->name('view_leave_request');
    Route::any('edit_leave_request/{id}', 'hrindex@edit_leave_request')->name('edit_leave_request');
    Route::any('/update_leave_request', 'hrindex@update_leave_request')->name('update_leave_request');
    Route::any('/leave_balance', 'hrindex@leave_balance')->name('leave_balance');
        //internal memo
    Route::any('internal_memos', 'hrindex@internal_memos')->name('internal_memos');
    Route::any('view_memo', 'hrindex@view_memo')->name('view_memo');
    Route::any('edit_memo', 'hrindex@edit_memo')->name('edit_memo');
        //Attendance Sheet
    Route::any('attendance_sheet', 'hrindex@attendance_sheet')->name('attendance_sheet');
    Route::any('view_attendance', 'hrindex@view_attendance')->name('view_attendance');
        //Manage Salary
    Route::any('manage_salary', 'hrindex@manage_salary')->name('manage_salary');
    Route::any('manage_salary_index', 'hrindex@manage_salary_index')->name('manage_salary_index');
    Route::any('allowances', 'hrindex@allowances')->name('allowances');
    Route::any('commissions', 'hrindex@commissions')->name('commissions');
    Route::any('loan', 'hrindex@loan')->name('loan');
    Route::any('statutory_deductions', 'hrindex@statutory_deductions')->name('statutory_deductions');
    Route::any('other_payment', 'hrindex@other_payment')->name('other_payment');
    Route::any('overtime', 'hrindex@overtime')->name('overtime');
    //hr index controller
//Store controller
    Route::any('Store_&_Inventory_index', 'store@index')->name('Store_&_Inventory_index');
    Route::any('manage_categories', 'store@list_manage_categories')->name('manage_categories');
    Route::any('add_product', 'store@addproduct')->name('add_product');
    Route::any('/edit_product/{id}', 'store@editproduct')->name('edit_product');
    Route::any('update_product', 'store@updateproduct')->name('update_product');
    Route::any('/delete_product/{id}', 'store@deleteproduct')->name('delete_product');
    Route::any('manage_items', 'store@list_manage_items')->name('manage_items');
    Route::any('stock_list', 'store@stock_list_tab')->name('stock_list');
    Route::any('request_item', 'store@request_items')->name('request_item');
    Route::any('item_movement', 'store@item_movement_report')->name('item_movement');
    Route::any('view_item_movement', 'store@view_item_movement_report')->name('view_item_movement');
    Route::any('re_order', 'store@re_order_list')->name('re_order');
    Route::any('view_item_details', 'store@viewitemdetails')->name('view_item_details');
    Route::any('edit_manage_categories', 'store@edit_list_manage_categories')->name('edit_manage_categories');
    Route::any('edit_request_item', 'store@edit_request_items')->name('edit_request_item');
    Route::any('add_categories', 'store@list_add_categories')->name('add_categories');
    Route::any('edit_categories', 'store@list_edit_categories')->name('edit_categories');
    Route::any('view_requst', 'store@list_view_requst')->name('view_requst');
    Route::any('new_categories', 'store@newcategories')->name('new_categories');
    Route::any('/edit_category/{id}', 'store@editcategory')->name('edit_category');
    Route::any('update_category', 'store@updatecategory')->name('update_category');
    Route::any('/delete_category/{id}', 'store@deletecategory')->name('delete_category');
    Route::any('issue_view_requst', 'store@list_issue_requst')->name('issue_view_requst');
    Route::any('addmanage_items', 'store@add_manage_items')->name('addmanage_items');
    Route::any('/edit_manage_items/{id}', 'store@editmanage_items')->name('edit_manage_items');
    Route::any('update_manage_items', 'store@update_manage_items')->name('update_manage_items');
    Route::any('/drop_manage_items/{id}', 'store@drop_manage_items')->name('drop_manage_items');
    //Store controller
//Purchase Management controller
    Route::any('purchase_index', 'PurchaseManagement@index_purchase')->name('purchase_index');
    Route::any('purchase_order', 'PurchaseManagement@purchase_order')->name('purchase_order');
    Route::any('store_purchase', 'PurchaseManagement@store_purchase')->name('store_purchase');
    Route::any('view_purchase_order/{id}', 'PurchaseManagement@view_purchase_order')->name('view_purchase_order');
    Route::any('purchase_order_report', 'PurchaseManagement@purchase_order_report')->name('purchase_order_report');
    Route::any('vendor_performance_report', 'PurchaseManagement@vendor_performance_report')->name('vendor_performance_report');
    Route::any('purchase_print/{purchase_id}', 'PurchaseManagement@purchase_print')->name('purchase_print');
    Route::any('view_supplier/{id}', 'PurchaseManagement@view_supplier')->name('view_supplier');
    Route::any('edit_supplier/{id}', 'PurchaseManagement@edit_supplier')->name('edit_supplier');
    Route::any('delete_supplier/{id}', 'PurchaseManagement@delete_supplier')->name('delete_supplier');
    Route::any('ledger_details/{supplier_name}', 'PurchaseManagement@ledger_details')->name('ledger_details');
    Route::any('purchase_view/{purchase_id}', 'PurchaseManagement@purchase_view')->name('purchase_view');
    Route::any('edit_purchase/{id}', 'PurchaseManagement@edit_purchase')->name('edit_purchase');
    Route::any('update_purchase', 'PurchaseManagement@update_purchase')->name('update_purchase');
    Route::any('supplier', 'PurchaseManagement@suppliers')->name('supplier');
    Route::any('store_supplier', 'PurchaseManagement@store_supplier')->name('store_supplier');
    Route::any('ledger_add_payment/{purchase_id}', 'PurchaseManagement@ledger_add_payment')->name('ledger_add_payment');
    Route::any('update_ledger_add_payment', 'PurchaseManagement@update_ledger_add_payment')->name('update_ledger_add_payment');
    //Purchase Management controller
//practice Area Management controller
        //index
    Route::any('practice_area_index', 'PracticeAreaManagement@practice_area_index')->name('practice_area_index');
        //personal injury
    Route::any('personal_injury', 'PracticeAreaManagement@personalinjury')->name('personal_injury');
    Route::any('add_injury', 'PracticeAreaManagement@addinjury')->name('add_injury');
    Route::any('/edit_injury/{id}', 'PracticeAreaManagement@editinjury')->name('edit_injury');
    Route::any('view_injury', 'PracticeAreaManagement@view_injury')->name('view_injury');
    Route::any('/update_injury', 'PracticeAreaManagement@updateinjury')->name('update_injury');
    Route::any('/delete_injury/{id}', 'PracticeAreaManagement@deleteinjury')->name('delete_injury');
        //family law
    Route::any('family_law', 'PracticeAreaManagement@family_law')->name('family_law');
    Route::any('add_family_law', 'PracticeAreaManagement@addfamilylaw')->name('add_family_law');
    Route::any('view_family_law/{id}', 'PracticeAreaManagement@view_family_law')->name('view_family_law');
    Route::any('/edit_family_law/{id}', 'PracticeAreaManagement@edit_family_law')->name('edit_family_law');
    Route::any('/update_family_law', 'PracticeAreaManagement@updatefamilylaw')->name('update_family_law');
    Route::any('/delete_law/{id}', 'PracticeAreaManagement@deletelaw')->name('delete_law');
        //general practice
    Route::any('general_practice', 'PracticeAreaManagement@general_practice')->name('general_practice');
    Route::any('add_practice', 'PracticeAreaManagement@addpractice')->name('add_practice');
    Route::any('view_general_practice/{id}', 'PracticeAreaManagement@view_general_practice')->name('view_general_practice');
    Route::any('/edit_general_practice/{id}', 'PracticeAreaManagement@edit_general_practice')->name('edit_general_practice');
    Route::any('/update_practice', 'PracticeAreaManagement@updatepractice')->name('update_practice');
    Route::any('/delete_practice/{id}', 'PracticeAreaManagement@deletepractice')->name('delete_practice');
    Route::any('estate_plan', 'PracticeAreaManagement@estate_plan')->name('estate_plan');
        //estate plan
    Route::any('add_estate_plan', 'PracticeAreaManagement@addestateplan')->name('add_estate_plan');
    Route::any('view_estate_plan/{id}', 'PracticeAreaManagement@view_estate_plan')->name('view_estate_plan');
    Route::any('/edit_estate_plan/{id}', 'PracticeAreaManagement@edit_estate_plan')->name('edit_estate_plan');
    Route::any('update_estate_plan', 'PracticeAreaManagement@updateestateplan')->name('update_estate_plan');
    Route::any('/delete_estate_plan/{id}', 'PracticeAreaManagement@deleteestateplan')->name('delete_estate_plan');
        //real estate
    Route::any('real_estate', 'PracticeAreaManagement@real_estate')->name('real_estate');
    Route::any('add_real_estate', 'PracticeAreaManagement@addrealestate')->name('add_real_estate');
    Route::any('view_real_estate/{id}', 'PracticeAreaManagement@view_real_estate')->name('view_real_estate');
    Route::any('/edit_real_estate/{id}', 'PracticeAreaManagement@edit_real_estate')->name('edit_real_estate');
    Route::any('update_real_estate', 'PracticeAreaManagement@updaterealestate')->name('update_real_estate');
    Route::any('/delete_real_estate/{id}', 'PracticeAreaManagement@deleterealestate')->name('delete_real_estate');
        //criminal law
    Route::any('criminal_law', 'PracticeAreaManagement@criminal_law')->name('criminal_law');
    Route::any('add_criminal_law', 'PracticeAreaManagement@addcriminallaw')->name('add_criminal_law');
    Route::any('view_criminal_law/{id}', 'PracticeAreaManagement@view_criminal_law')->name('view_criminal_law');
    Route::any('/edit_criminal_law/{id}', 'PracticeAreaManagement@edit_criminal_law')->name('edit_criminal_law');
    Route::any('update_criminal_law', 'PracticeAreaManagement@updatecriminallaw')->name('add_criminal_law');
    Route::any('/delete_criminal_law/{id}', 'PracticeAreaManagement@deletecriminallaw')->name('delete_criminal_law');
        //civil litigation
    Route::any('civil_litigation', 'PracticeAreaManagement@civil_litigation')->name('civil_litigation');
    Route::any('add_civil_litigation', 'PracticeAreaManagement@addcivillitigation')->name('add_civil_litigation');
    Route::any('view_civil_litigation/{id}', 'PracticeAreaManagement@view_civil_litigation')->name('view_civil_litigation');
    Route::any('/edit_civil_litigation/{id}', 'PracticeAreaManagement@edit_civil_litigation')->name('edit_civil_litigation');
    Route::any('update_civil_litigation', 'PracticeAreaManagement@updatecivillitigation')->name('update_civil_litigation');
    Route::any('/delete_civil_litigation/{id}', 'PracticeAreaManagement@deletecivillitigation')->name('update_civil_litigation');
        //bussiness law
    Route::any('business_law', 'PracticeAreaManagement@business_law')->name('business_law');
    Route::any('add_business_law', 'PracticeAreaManagement@addbusinesslaw')->name('add_business_law');
    Route::any('view_business_law/{id}', 'PracticeAreaManagement@view_business_law')->name('view_business_law');
    Route::any('/edit_business_law/{id}', 'PracticeAreaManagement@edit_business_law')->name('edit_business_law');
    Route::any('update_business_law', 'PracticeAreaManagement@updatebusinesslaw')->name('update_business_law');
    Route::any('/delete_business_law/{id}', 'PracticeAreaManagement@deletebusinesslaw')->name('delete_business_law');
    Route::any('guardianship_law', 'PracticeAreaManagement@guardianship_law')->name('guardianship_law');
        //guardianship law
    Route::any('add_guardian', 'PracticeAreaManagement@addguardian')->name('add_guardian');
    Route::any('view_guardianship_law/{id}', 'PracticeAreaManagement@view_guardianship_law')->name('view_guardianship_law');
    Route::any('/edit_guardianship_law/{id}', 'PracticeAreaManagement@edit_guardianship_law')->name('edit_guardianship_law');
    Route::any('/update_guardian', 'PracticeAreaManagement@updateguardian')->name('update_guardian');
    Route::any('/delete_guardian/{id}', 'PracticeAreaManagement@deleteguardian')->name('delete_guardian');
        //probate law
    Route::any('probate_law', 'PracticeAreaManagement@probate_law')->name('probate_law');
    Route::any('add_probate_law', 'PracticeAreaManagement@addprobatelaw')->name('add_probate_law');
    Route::any('view_probate_law/{id}', 'PracticeAreaManagement@view_probate_law')->name('view_probate_law');
    Route::any('/edit_probate_law/{id}', 'PracticeAreaManagement@edit_probate_law')->name('edit_probate_law');
    Route::any('update_probate_law', 'PracticeAreaManagement@updateprobatelaw')->name('update_probate_law');
    Route::any('/delete_probate_law/{id}', 'PracticeAreaManagement@deleteprobatelaw')->name('delete_probate_law');
        //workers compensation
    Route::any('workers_compensation', 'PracticeAreaManagement@workers_compensation')->name('workers_compensation');
    Route::any('add_workers_compensation', 'PracticeAreaManagement@addworkerscompensation')->name('add_workers_compensation');
    Route::any('/edit_workers_compensation/{id}', 'PracticeAreaManagement@edit_workers_compensation')->name('edit_workers_compensation');
    Route::any('update_workers_compensation', 'PracticeAreaManagement@updateworkerscompensation')->name('update_workers_compensation');
    Route::any('/delete_workers_compensation/{id}', 'PracticeAreaManagement@deleteworkerscompensation')->name('delete_workers_compensation');
    Route::any('view_workers_compensation/{id}', 'PracticeAreaManagement@view_workers_compensation')->name('view_workers_compensation');
        //practice area
    Route::any('practice_area', 'PracticeAreaManagement@practice_area')->name('practice_area');
    Route::any('store_practice_area', 'PracticeAreaManagement@store_practice_area')->name('store_practice_area');
    Route::any('matter_type', 'PracticeAreaManagement@matter_type')->name('matter_type');
    Route::any('edit_practice_area/{id}', 'PracticeAreaManagement@edit_practice_area')->name('edit_practice_area');
    Route::any('update_practice_area', 'PracticeAreaManagement@update_practice_area')->name('update_practice_area');
    Route::any('delete_practice_area/{id}', 'PracticeAreaManagement@delete_practice_area')->name('delete_practice_area');
    //practice Area Management controller
//Elibrary controller
        //index
    Route::any('libraryindex', 'elibrary@index')->name('libraryindex');
        //subject
    Route::any('subject/{id}', 'elibrary@subjects')->name('subject');
    Route::any('add_subject', 'elibrary@addsubjects')->name('add_subject');
    Route::any('/editsubject/{id}', 'elibrary@editsubjects')->name('editsubject');
    Route::any('update_subject', 'elibrary@updatesubjects')->name('update_subject');
    Route::any('/deletesubject/{id}', 'elibrary@deletesubjects')->name('deletesubject');
        //file
    Route::any('file/{id}', 'elibrary@files')->name('file');
    Route::any('add_file', 'elibrary@addfiles')->name('add_file');
    Route::any('/editfile/{id}', 'elibrary@editfiles')->name('editfile');
    Route::any('update_file', 'elibrary@updatefiles')->name('updatee_file');
    Route::any('/delete_file/{id}', 'elibrary@deletefiles')->name('deletefile');
    Route::any('viewfile', 'elibrary@viewfiles')->name('viewfile');
        //site
    Route::any('site/{id}', 'elibrary@sites')->name('site');
    Route::any('add_site', 'elibrary@addsites')->name('add_site');
    Route::any('update_site', 'elibrary@updatesites')->name('update_site');
    Route::any('/editsite/{id}', 'elibrary@editsites')->name('editsite');
    Route::any('/delete_site/{id}', 'elibrary@deletesites')->name('delete_site');
        //precedence
    Route::any('precedence/{id}', 'elibrary@precedences')->name('precedence');
    Route::any('add_precedence', 'elibrary@addprecedences')->name('add_precedence');
    Route::any('/editprecedence/{id}', 'elibrary@editprecedences')->name('editprecedence');
    Route::any('update_precedence', 'elibrary@updateprecedences')->name('update_precedence');
    Route::any('/delete_precedence/{id}', 'elibrary@deleteprecedence')->name('delete_precedence');
    Route::any('viewprecedence/{id}', 'elibrary@viewprecedences')->name('viewprecedence');
        //subject category
    Route::any('subject_category/{id}', 'elibrary@subject_categorys')->name('subject_category');
    Route::any('add_subject_category', 'elibrary@addsubject_categorys')->name('add_subject_category');
    Route::any('/editsubject_category/{id}', 'elibrary@editsubject_categorys')->name('editsubject_category');
    Route::any('/update_subject_category', 'elibrary@updatesubjectcategorys')->name('update_subject_category');
    Route::any('/deletesubject_category/{id}', 'elibrary@deletesubject_categorys')->name('deletesubject_category');
    Route::any('editsubject_category', 'elibrary@editsubject_categorys')->name('editsubject_category');
    //Elibrary controller
//Tender Management controller
        //index
    Route::any('tender_index', 'TenderManagement@tender_index')->name('tender_index');
        //tender details
    Route::any('tender_details', 'TenderManagement@tender_details')->name('tender_details');
    Route::any('store_tender', 'TenderManagement@store_tender')->name('store_tender');
    Route::any('view_tender_details/{id}', 'TenderManagement@view_tender_details')->name('view_tender_details');
    Route::any('edit_tender_details/{id}', 'TenderManagement@edit_tender_details')->name('edit_tender_details');
    Route::any('update_tender_details', 'TenderManagement@update_tender_details')->name('update_tender_details');
    Route::any('delete_tender_details/{id}', 'TenderManagement@delete_tender_details')->name('delete_tender_details');
        //apply tender
    Route::any('apply_tender', 'TenderManagement@apply_tender')->name('apply_tender');
    Route::any('view_apply_tender/{id}', 'TenderManagement@view_apply_tender')->name('view_apply_tender');
    Route::any('tender_applied_details', 'TenderManagement@tender_applied_details')->name('tender_applied_details');
    Route::any('view_tender_applied/{id}', 'TenderManagement@view_tender_applied')->name('view_tender_applied');
    Route::any('store_apply_tender', 'TenderManagement@store_apply_tender')->name('store_apply_tender');
    //Tender Management controller
//Office Administration controller
        //index
    Route::any('office_admin_index', 'OfficeAdministration@office_admin_index')->name('office_admin_index');
        //creditor list
    Route::any('creditor_list', 'OfficeAdministration@creditor_list')->name('creditor_list');
        //creditors aging report
    Route::any('creditors_aging_report', 'OfficeAdministration@creditors_aging_report')->name('creditors_aging_report');
        //supplier expense report
    Route::any('supplier_expense_report', 'OfficeAdministration@supplier_expense_report')->name('supplier_expense_report');
        //supplier invoice
    Route::any('pay_supplier_invoice', 'OfficeAdministration@pay_supplier_invoice')->name('pay_supplier_invoice');
        //supplier credit notes
    Route::any('supplier_credit_notes', 'OfficeAdministration@supplier_credit_notes')->name('supplier_credit_notes');
    Route::any('view_supplier_credit', 'OfficeAdministration@view_supplier_credit')->name('view_supplier_credit');
    Route::any('edit_supplier_credit', 'OfficeAdministration@edit_supplier_credit')->name('edit_supplier_credit');
        //supplier invoice
    Route::any('add_supplier_invoice', 'OfficeAdministration@add_supplier_invoice')->name('add_supplier_invoice');
    Route::any('supplier_invoice', 'OfficeAdministration@supplier_invoice')->name('supplier_invoice');
    Route::any('view_supplier_invoice', 'OfficeAdministration@view_supplier_invoice')->name('view_supplier_invoice');
    Route::any('edit_supplier_invoice', 'OfficeAdministration@edit_supplier_invoice')->name('edit_supplier_invoice');
        //balance on client trust
    Route::any('balance', 'OfficeAdministration@balances')->name('balance');
        //cheque cancellation
    Route::any('cheque', 'OfficeAdministration@cheques')->name('cheque');
        //file office journals
    Route::any('file_office', 'OfficeAdministration@file_offices')->name('file_office');
        //file payments & transfer
    Route::any('Payment', 'OfficeAdministration@Payments')->name('Payment');
        //monthly budget planner
    Route::any('budget', 'OfficeAdministration@budgets')->name('budget');
        //monthly schedule
    Route::any('supplier_monthly_schedule', 'OfficeAdministration@supplier_monthly_schedule')->name('supplier_monthly_schedule');
    Route::any('view_supplier_invoice_Details', 'OfficeAdministration@view_supplier_invoice_Details')->name('view_supplier_invoice_Details');
        //supplier list
    Route::any('suppliers_list', 'OfficeAdministration@suppliers_list')->name('suppliers_list');
    Route::any('view_supplier_list', 'OfficeAdministration@view_supplier_list')->name('view_supplier_list');
    Route::any('edit_supplier_list', 'OfficeAdministration@edit_supplier_list')->name('edit_supplier_list');
        //non-contractual supplier
    Route::any('contractual_supplier', 'OfficeAdministration@contractual_suppliers')->name('contractual_supplier');
        //office payments transfer
    Route::any('payments_transfer', 'OfficeAdministration@payments_transfers')->name('payments_transfer');
        //payment reports
    Route::any('payment_report', 'OfficeAdministration@payment_reports')->name('payment_report');
    Route::any('submit_payment_reports', 'OfficeAdministration@submit_payment_reports')->name('submit_payment_reports');
        //petty cash payments
    Route::any('petty_payment', 'OfficeAdministration@petty_payments')->name('petty_payment');
        //petty cash reports
    Route::any('petty_report', 'OfficeAdministration@petty_reports')->name('petty_report');
        //settled paid legal fee
    Route::any('settled_fee', 'OfficeAdministration@settled_fees')->name('settled_fee');
        //settlement report
    Route::any('settlement_report', 'OfficeAdministration@settlement_reports')->name('settlement_report');
        //undeposited fund
    Route::any('undeposited_fund', 'OfficeAdministration@undeposited_funds')->name('undeposited_fund');
    Route::any('submit_undeposit_fund', 'OfficeAdministration@submit_undeposit_fund')->name('submit_undeposit_fund');
    //Office Administration controller
//crm controller
        //index
    Route::any('crm_index', "CrmController@index_view")->name('crm_index');
        //individual
    Route::any('view-registration', 'CrmController@viewRegistration')->name('view-registration');
    Route::any('add-registration', 'CrmController@addRegistration')->name('add-registration');
    Route::any('edit-registration/{id}', 'CrmController@editRegistration')->name('edit-registration');
    Route::any('update-registration', 'CrmController@updateRegistration')->name('update-registration');
    Route::any('delete-registration/{id}', 'CrmController@deleteRegistration')->name('delete-registration');
    Route::any('show-registration/{id}', 'CrmController@showRegistration')->name('show-registration');
        //corporate
    Route::any('Corporate', "CrmController@Corporates")->name('Corporate');
    Route::any('edit_Corporate/{Id}', "CrmController@edit_Corporates")->name('edit_Corporate');
    Route::any('view_Corporate/{id}', "CrmController@view_Corporates")->name('view_Corporate');
    Route::any('add_Corporate', "CrmController@add_Corporates")->name('add_Corporate');
    Route::any('update_Corporate', "CrmController@update_Corporates")->name('update_Corporate');
    Route::any('drop_Corporate/{id}', "CrmController@drop_Corporates")->name('drop_Corporate');
        //lead
    Route::any('lead', "CrmController@leads")->name('lead');
    Route::any('view_lead/{Id}', "CrmController@view_leads")->name('view_lead');
    Route::any('store_proposal_leads', "CrmController@store_proposal_leads")->name('store_proposal_leads');
    Route::any('proposal_lead{Id}', "CrmController@proposal_leads")->name('proposal_lead');
    Route::any('individual_lead', "CrmController@individual_leads")->name('individual_lead');
    Route::any('view_individual_lead/{id}', "CrmController@view_individual_leads")->name('view_individual_lead');
    Route::any('individual_proposal_lead/{id}', "CrmController@individual_proposal_leads")->name('individual_proposal_lead');
    Route::any('store_individual_proposal_leads', "CrmController@store_individual_proposal_leads")->name('store_individual_proposal_leads');
        //manage task
    Route::any('manage_tasks', "CrmController@manage_tasks")->name('manage_tasks');
    Route::any('view_manage_task/{id}', "CrmController@view_manage_task")->name('view_manage_task');
    Route::any('edit_manage_task/{id}', "CrmController@edit_manage_task")->name('edit_manage_task');
    Route::any('add_manage_task', "CrmController@add_manage_tasks")->name('add_manage_task');
    Route::any('update_manage_task', "CrmController@update_manage_task")->name('update_manage_task');
    Route::any('drop_manage_task/{id}', "CrmController@drop_manage_task")->name('drop_manage_task');
        //project
    Route::any('projects',"CrmController@projects")->name('projects');
    Route::any('view_project', "CrmController@view_project")->name('view_project');
    Route::any('edit_project', "CrmController@edit_project")->name('edit_project');
        //expense
    Route::any('expense', "CrmController@expense")->name('expense');
    Route::any('view_expense/{id}', "CrmController@view_expense")->name('view_expense');
    Route::any('edit_expense/{id}', "CrmController@edit_expense")->name('edit_expense');
    Route::any('add_expense', "CrmController@add_expense")->name('add_expense');
    Route::any('update_expense', "CrmController@update_expense")->name('update_expense');
    Route::any('drop_expense/{id}', "CrmController@drop_expense")->name('drop_expense');
        //crm panel
    Route::any('crm_panel', "CrmController@crm_panel")->name('crm_panel');
    //crm controller
    //etc controller
    Route::any('about', "etc@index")->name('about');
    Route::any('help', "etc@index_help")->name('help');
    //etc controller
    //calender
    Route::any('calendar_data', "calender@show")->name('calendar_data');
    Route::any('calendar/store', "calender@store")->name('calendar/store');
    Route::any('calendar/update/{id}', "calender@update");
    Route::any('calendar/delete/{id}', "calender@destroy");
    Route::any('update_calendar/{id}', "calender@updateall");
    //calender
