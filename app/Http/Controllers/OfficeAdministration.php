<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use DB;

class OfficeAdministration extends Controller
{
    public function office_admin_index()
    {
        return view('OfficeAdministration.office_admin_index');
    }

    public function creditor_list(Request $request)
    {

        $date_from = $request['date_from'];
        $date_to = $request ['date_to'];
        DB::table('cra_creditor_list')->insert([
            'date_from' => $date_from,
            'date_to' => $date_to,
        ]);
        return view('OfficeAdministration.creditor_list');
    }
    public function creditors_aging_report()
    {
        return view('OfficeAdministration.creditors_aging_report');
    }
    public function supplier_expense_report()
    {
        return view('OfficeAdministration.supplier_expense_report');
    }
    public function pay_supplier_invoice()
    {
        return view('OfficeAdministration.pay_supplier_invoice');
    }
    public function supplier_credit_notes()
    {
        return view('OfficeAdministration.supplier_credit_notes');
    }
    public function supplier_invoice()
    {

        $view_list = DB::table('cra_supplier_invoice')->get();

        return view('OfficeAdministration.supplier_invoice',compact('view_list'));
    }

    public function add_supplier_invoice(Request $request)
    {
        
        $invoice_date = $request['invoice_date'];
        $invoice_number = $request['invoice_number'];
        $supplier = $request['supplier'];
        $branch = $request['branch'];
        $ipo_number = $request['ipo_number'];
        $due_date = $request['due_date'];
        $approver = $request['approver'];
        $currency = $request['currency'];
        $exchange_rate = $request['exchange_rate'];
        $holding_tax = $request['holding_tax'];
        $holding_vat = $request['holding_vat'];
        $voucher_date = $request['voucher_date'];
        $voucher_number = $request['voucher_number'];
        $client = $request['client'];
        $file = $request['file'];
        $account = $request['account'];
        $drawings = $request['drawings'];
        $drawings_item = $request['drawings_item'];
        $amount = $request['amount'];
        $vat_tax = $request['vat_tax'];
        $description = $request['description'];

        DB::table('cra_supplier_invoice')->insert([

            'invoice_date' => $invoice_date,
            'invoice_number' => $invoice_number,
            'supplier' => $supplier,
            'branch' => $branch,
            'ipo_number' => $ipo_number,
            'due_date' => $due_date,
            'approver' => $approver,
            'currency' => $currency,
            'exchange_rate' => $exchange_rate,
            'holding_tax' => $holding_tax,
            'holding_vat' => $holding_vat,
            'voucher_date' => $voucher_date,
            'voucher_number' => $voucher_number,
            'client' => $client,
            'file' => $file,
            'account' => $account,
            'drawings' => $drawings,
            'drawings_item' => $drawings_item,
            'amount' => $amount,
            'vat_tax' => $vat_tax,
            'description' => $description,
            
        ]);




        return redirect('/supplier_invoice');
    }


    public function balances()
    {
        return view('OfficeAdministration.balance');
    }

    public function cheques()
    {
        return view('OfficeAdministration.cheque');
    }

    public function file_offices()
    {
        return view('OfficeAdministration.file_office');
    }

    public function Payments()
    {
        return view('OfficeAdministration.Payment');
    }

    public function budgets()
    {
        return view('OfficeAdministration.budget');
    }
    public function supplier_monthly_schedule()
    {
        return view('OfficeAdministration.supplier_monthly_schedule');
    }
    public function suppliers_list()
    {
        return view('OfficeAdministration.suppliers_list');
    }
    public function contractual_suppliers()
    {
        return view('OfficeAdministration.contractual_supplier');
    }

    public function payments_transfers()
    {
        return view('OfficeAdministration.payments_transfer');
    }

    public function payment_reports()
    {
        return view('OfficeAdministration.payment_report');
    }

    public function petty_payments()
    {
        return view('OfficeAdministration.petty_payment');
    }
    public function petty_reports()
    {
        return view('OfficeAdministration.petty_report');
    }

    public function settled_fees()
    {
        return view('OfficeAdministration.settled_fee');
    }

    public function settlement_reports()
    {
        return view('OfficeAdministration.settlement_report');
    }

    public function undeposited_funds()
    {
        return view('OfficeAdministration.undeposited_fund');
    }
    public function view_supplier_credit()
    {
        return view('OfficeAdministration.view_supplier_credit');
    }
    public function edit_supplier_credit()
    {
        return view('OfficeAdministration.edit_supplier_credit');
    }
    public function view_supplier_invoice()
    {
        return view('OfficeAdministration.view_supplier_invoice');
    }
    public function edit_supplier_invoice()
    {
        return view('OfficeAdministration.edit_supplier_invoice');
    }
    public function view_supplier_list()
    {
        return view('OfficeAdministration.view_supplier_list');
    }
    public function edit_supplier_list()
    {
        return view('OfficeAdministration.edit_supplier_list');
    }
    
}