<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Auth;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    //

    public function ledger_acounts(){

        $ledger_account=DB::table('ledgeraccounts')
        ->leftJoin('ledgeraccount_categories', 'ledgeraccount_categories.id', '=', 'ledgeraccounts.accounts_category')
        ->leftJoin('ledgeraccount_subcategories', 'ledgeraccount_subcategories.id', '=', 'ledgeraccounts.accounts_subcategory')
        ->leftjoin('budget_types','budget_types.id','=','ledgeraccounts.budget_cat')
        ->select('*','ledgeraccount_categories.ledgeraccount_categories as category_name','ledgeraccount_subcategories.ledgeraccount_subcategories as subcategory_name','budget_types.budget_name as budget_name'
        ,'ledgeraccount_categories.id as category_id','ledgeraccount_subcategories.id as subcategory_id','ledgeraccounts.id as id','budget_types.id as budget_id')
        ->get();
        // dd($ledger_account);
        $category=DB::table('ledgeraccount_categories')->get();
        $subcategory=DB::table('ledgeraccount_subcategories')->get();
        $budget_cat=DB::table('budget_types')->get();
      
        return view('Accounts.index',compact('ledger_account','category','subcategory','budget_cat'));

    }

    public function save_ledger_acounts(Request $request){

        DB::table('ledgeraccounts')->insert(
            array(
                   'accounts_name'     =>   $request->accounts_name,
                   'accounts_category'     =>   $request->accounts_category,
                   'accounts_subcategory'     =>   $request->accounts_subcategory,
                   'budget_cat' => $request->budget_cat,
                   'default_currency' =>    $request->default_currency,
                   'accounts_desc'   =>   $request->accounts_desc,
                   'accounts_company'   =>   Auth::user()->Hospital,
            ) 
       );

       return redirect(route('ledger_acounts'));
    }

    public function update_ledger_acounts(Request $request){

        $data= array(
            'accounts_name'=>$request->accounts_name,
            'accounts_category'=>$request->accounts_category,
            'accounts_subcategory'=>$request->accounts_subcategory,
            'budget_cat'=>$request->editbudget_cat,
            'default_currency' =>$request->default_currency,
            'accounts_desc'=>$request->accounts_desc);
        DB::table('ledgeraccounts')->where('id', $request->id)->update($data);

        return redirect(route('ledger_acounts'));
    }

    public function delete_ledger_accounts(Request $request)
    {
        $id=$request->account_id;
     $check_datas_exist = DB::table('journal_items')->where('journal_transaction_account',$id)->count();

    if($check_datas_exist==0){
        DB::table('ledgeraccounts')->where('id',$id)->delete();
        return response()->json([
            'response' => 1
        ]);
    }else{

        return response()->json([
            'response' => 0
        ]);
    }



    }

    public function journal(Request $request){

        if(!empty($request->journal_from) && !empty($request->journal_to)){

            $journal_transaction=DB::table('journal_transactions')
            ->where('journal_hospital',Auth::user()->Hospital)
            ->whereDate('journal_date','>=',$request->journal_from)
            ->whereDate('journal_date','<=',$request->journal_to)
            ->select('*','journal_transactions.id as transaction_id')
            ->orderBy('journal_transactions.journal_addedon', 'desc')
            ->paginate(9999999);


        }else{

            $journal_transaction=DB::table('journal_transactions')
            ->where('journal_hospital',Auth::user()->Hospital)
            ->select('*','journal_transactions.id as transaction_id')
            ->orderBy('journal_transactions.journal_addedon', 'desc')
            ->paginate(8);

        }

        // dd($journal_transaction);
        $journal_from=$request->journal_from;
        $journal_to=$request->journal_to;
        $account=DB::table('ledgeraccounts')
        ->Leftjoin('ledgeraccount_subcategories as a', 'a.id', '=', 'ledgeraccounts.accounts_subcategory')
        ->Leftjoin('ledgeraccount_categories as b', 'b.id', '=', 'ledgeraccounts.accounts_category')
        ->select('*','ledgeraccounts.id as id')
        ->get();
        $hospitals=DB::table('hospitals')->get();
        return view('Accounts.journal',compact('journal_transaction','account','hospitals','journal_from','journal_to'));
    }

    public function save_journal(Request $request){

        DB::table('journal')->insert(
            array(
                   'journal_date'     =>   $request->journal_date,
                   'journal_from_account'   =>   $request->journal_from_account,
                   'journal_to_account'   =>   $request->journal_to_account,
                   'debit_or_credit'   =>   $request->debit_or_credit,
                   'journal_amount'   =>   $request->journal_amount,
                   'journal_hospital'   =>   $request->journal_hospital,
                   'journal_remarks'   =>   $request->journal_remarks,
            )
       );

       return redirect(route('journal'));

    }

    public function update_journal_acounts(Request $request){

        $data= array(
            'journal_date'=>$request->journal_date,
            'journal_from_account'=>$request->journal_from_account,
            'journal_to_account'=>$request->journal_to_account,
            'debit_or_credit'=>$request->debit_or_credit,
            'journal_amount'=>$request->journal_amount,
            'journal_hospital'=>$request->journal_hospital,
            'journal_remarks'=>$request->journal_remarks,
        );
        DB::table('journal')->where('id', $request->journal_id)->update($data);
        return redirect(route('journal'));
    }

    public function delete_journal($id){

        DB::table('journal')->where('id',$id)->delete();
        return redirect(route('journal'));
    }


    public function ledger_acount_categories(){

        $ledgeraccount_categories=DB::table('ledgeraccount_categories')->get();
        return view('Accounts.ledger_acount_categories',compact('ledgeraccount_categories'));
    }

    public function save_ledger_acounts_categories(Request $request){

        DB::table('ledgeraccount_categories')->insert(
            array(
                   'ledgeraccount_categories'     =>   $request->ledgeraccount_categories,
                   'ledgeraccount_categories_desc'   =>   $request->ledgeraccount_categories_desc,

            )
       );
       return redirect(route('ledger_acount_categories'));
    }

    public function update_ledger_acount_categories(Request $request){

        $data= array(
            'ledgeraccount_categories'=>$request->ledgeraccount_categories,
            'ledgeraccount_categories_desc'=>$request->ledgeraccount_categories_desc,
        );
        DB::table('ledgeraccount_categories')->where('id', $request->id)->update($data);
        return redirect(route('ledger_acount_categories'));
    }

    public function delete_ledger_categories($id){

        DB::table('ledgeraccount_categories')->where('id',$id)->delete();
        return redirect(route('ledger_acount_categories'));
    }

    public function ledger_acount_subcategories(){
        $categories=DB::table('ledgeraccount_categories')->get();
        $ledgeraccount_subcategories=DB::table('ledgeraccount_subcategories')->leftJoin('ledgeraccount_categories', 'ledgeraccount_categories.id', '=', 'ledgeraccount_subcategories.ledgeraccount_categories')
        ->select('ledgeraccount_subcategories.id as id','ledgeraccount_subcategories.ledgeraccount_categories as cat_id','ledgeraccount_categories.ledgeraccount_categories as ledgeraccount_categories','ledgeraccount_subcategories','ledgeraccount_subcategories_desc','accountssub_update_privilage')
        ->get();
        return view('Accounts.ledgeraccount_subcategories',compact('categories','ledgeraccount_subcategories'));

    }

    public function save_ledger_acounts_subcategories(Request $request){

        DB::table('ledgeraccount_subcategories')->insert(
            array(
                   'ledgeraccount_categories'     =>   $request->ledgeraccount_categories,
                   'ledgeraccount_subcategories'   =>   $request->ledgeraccount_subcategories,
                   'ledgeraccount_subcategories_desc'   =>   $request->ledgeraccount_subcategories_desc,
            )
       );
       return redirect(route('ledger_acount_subcategories'));

    }

    public function update_ledger_acount_subcategories(Request $request){

        $data= array(
            'ledgeraccount_categories'=>$request->ledgeraccount_categories,
            'ledgeraccount_subcategories'=>$request->ledgeraccount_subcategories,
            'ledgeraccount_subcategories_desc'=>$request->ledgeraccount_subcategories_desc,
        );
        DB::table('ledgeraccount_subcategories')->where('id', $request->sub_cat_id)->update($data);
        return redirect(route('ledger_acount_subcategories'));

    }

    public function delete_ledger_accounts_subcategories($id){

        DB::table('ledgeraccount_subcategories')->where('id',$id)->delete();

        return redirect(route('ledger_acount_subcategories'));



    }

    public function get_subcat(Request $request){

        $parent_id = $request->cat_id;

        $subcategories =  DB::table('ledgeraccount_subcategories')->select('*')->get();
        return response()->json([
            'subcategories' => $subcategories
        ]);

    }
    public function create_transaction(){

        $account=DB::table('ledgeraccounts')
        ->Leftjoin('ledgeraccount_subcategories as a', 'a.id', '=', 'ledgeraccounts.accounts_subcategory')
        ->Leftjoin('ledgeraccount_categories as b', 'b.id', '=', 'ledgeraccounts.accounts_category')
        ->Leftjoin('budget_types as c', 'c.id', '=', 'ledgeraccounts.budget_cat')
        // ->Leftjoin('default_currency as c', 'c.id', '=', 'ledgeraccounts.default_currency')
        // ->Leftjoin('budget_types as c', 'c.id', '=', 'ledgeraccounts.budget_cat')
        ->select('*','ledgeraccounts.id as id')
        ->orderBy('ledgeraccounts.accounts_name', 'asc')
        ->get();
        $hospitals=DB::table('hospitals')->get();
        $category=DB::table('ledgeraccount_categories')->get();
        $subcategory=DB::table('ledgeraccount_subcategories')->get();
        $budget_cat=DB::table('budget_types')->get();
    
      return view('Accounts.new_transaction',compact('account','hospitals','category','subcategory','budget_cat'));
       
    }

    public function create_new_journal(Request $request){


        // dd($request->request);


      $journal_items_transaction= DB::table('journal_transactions')->insertGetId(
            array(
                   'journal_date'     =>   $request->journal_date,
                   'journal_narration'   =>   $request->journal_narration,
                   'journal_hospital'   =>   Auth::user()->Hospital,
                   'journal_addedby'   =>   Auth::id(),
            )
       );


    $debit_array= array_combine($request->credit_to_account,$request->credit_amount);
    $credit_array= array_combine($request->debit_from_account,$request->debit_amount);

        // echo strlen($debit_array)."<br>".strlen($debit_array);

        // if(strlen($debit_array))


    foreach($debit_array as $key=>$value){


                DB::table('journal_items')->insert(
                array(
                       'journal_items_transaction'  => $journal_items_transaction,
                       'journal_items_type'   =>   1,
                       'journal_items_from_account'  =>   $key,
                       'journal_transaction_account'  =>   $key,
                       'journal_items_amount'  =>  $value
                )
           );

        }

        foreach($credit_array as $key=>$value){


            DB::table('journal_items')->insert(
            array(
                   'journal_items_transaction'  => $journal_items_transaction,
                   'journal_items_type'   =>   2,
                   'journal_items_to_account'  =>   $key,
                   'journal_transaction_account'  =>   $key,
                   'journal_items_amount'  =>  $value
            )
       );

    }








        return response()->json([
            'response' => "success"
        ]);


    }



    public function create_new_stock_transaction(Request $request){



        $transaction_id= DB::table('stock_transaction_table_acc')->insertGetId(
            array(
                   'stock_transaction_type' =>   $request->stock_transaction_type,
                   'stock_transaction_date' =>   $request->stock_transaction_date,
                   'stock_transaction_subtype'   =>   $request->stock_transaction_subtype,
                   'stock_transaction_remarks'   =>   $request->stock_transaction_remarks,
                   'stock_transaction_company'   =>   Auth::user()->Hospital,
                   'stock_transaction_by'   =>   Auth::id(),
            )
       );

       foreach ( $request->item as $idx => $val ) {
        $final_transaction_array[] = [ $val, $request->reciept_rate[$idx],$request->receipt_qty[$idx] ];
          }
        //   dd($final_transaction_array);


          foreach($final_transaction_array as $key){

            DB::table('fifo_table_acc')->insert(
                array(
                       'tranaction_date'  => $request->stock_transaction_date,
                       'transaction_id'   =>   $transaction_id,
                       'transaction_type'   =>   $request->stock_transaction_type,
                       'item'  =>   $key[0],
                       'receipt_qty'  =>   $key[2],
                       'receipt_rate'  =>   $key[1],
                       'receipt_amount'  => $key[2]*$key[1],
                       'balance_qty'  =>   $key[2],
                       'balance_rate'  =>   $key[1],
                       'balance_amount'  =>   $key[2]*$key[1],
                       'transaction_company'  =>    Auth::user()->Hospital,
                       'transaction_addedby'  =>   Auth::id(),
                       'added_bal_qty'  =>   $key[2],
                       'added_bal_rate'  =>   $key[1],
                       'added_bal_amnt'  =>   $key[2]*$key[1],
                )
           );

          }

          return response()->json([
            'response' => "success"
        ]);


    }

    public function edit_journal($id){

        $journal_transaction=DB::table('journal_transactions')->where('id',$id)->select('*','journal_transactions.id as transaction_id')->first();

        $journal_items=DB::table('journal_items as q')
        ->Leftjoin('ledgeraccounts as a', 'a.id', '=', 'q.journal_transaction_account')
        ->select('q.*','q.id as journal_id', 'a.accounts_name as from_name','a.id as from_id')
        ->where('q.journal_items_transaction',$id)
        ->orderBy('q.id', 'asc')
        ->get();

        $account=DB::table('ledgeraccounts')->get();
        $hospitals=DB::table('hospitals')->get();

        return view('Accounts.edit_journal',compact('journal_transaction','journal_items','account','hospitals'));

    }

    public function delete_journalitems_frontend($id){



        DB::table('journal_items')->where('id',$id)->delete();


        return response()->json([
            'response' => "success"
        ]);
    }


    public function update_new_journal( Request $request ){

        // dd($request->request);


        if(!empty($request->edit_debit_account) && !empty($request->edit_debit_amount) && !empty($request->edit_debit_trans_item)){

        foreach ( $request->edit_debit_account as $idx => $val ) {
        $edit_debit_array[] = [ $val, $request->edit_debit_amount[$idx],$request->edit_debit_trans_item[$idx] ];
          }

          foreach($edit_debit_array as $key){

            $data= array(
                'journal_items_from_account'=>$key[0],
                'journal_transaction_account'=>$key[0],
                'journal_items_amount'=>$key[1],
            );
            DB::table('journal_items')->where('id', $key[2])->update($data);
          }



        }





        if(!empty($request->edit_credit_account) && !empty($request->edit_credit_amount) && !empty($request->edit_credit_trans_item)){

            foreach ( $request->edit_credit_account as $idx => $val ) {
            $edit_credit_array[] = [ $val, $request->edit_credit_amount[$idx],$request->edit_credit_trans_item[$idx] ];
              }

              foreach($edit_credit_array as $key){

                $data= array(
                    'journal_items_to_account'=>$key[0],
                    'journal_transaction_account'=>$key[0],
                    'journal_items_amount'=>$key[1],
                );
                DB::table('journal_items')->where('id', $key[2])->update($data);
              }
            }
            if(!empty($request->credit_to_account) && !empty($request->credit_amount) && !empty($request->transaction_id)){
                foreach ( $request->credit_to_account as $idx => $val ) {
                $add_credit_array[] = [ $val, $request->credit_amount[$idx]];
                  }

                //   dd($request->transaction_id);


                  foreach($add_credit_array as $key){


                    DB::table('journal_items')->insert(
                        array(
                            'journal_items_to_account'=>$key[0],
                            'journal_transaction_account'=>$key[0],
                            'journal_items_type'=>2,
                            'journal_items_amount'=>$key[1],
                            'journal_items_transaction'=>$request->transaction_id,
                        )
                   );





                  }



                }





            if(!empty($request->debit_from_account) && !empty($request->debit_amount) && !empty($request->transaction_id)){

                foreach ( $request->debit_from_account as $idx => $val ) {
                $add_debit_array[] = [ $val, $request->debit_amount[$idx]];
                  }

                  foreach($add_debit_array as $key){


                    DB::table('journal_items')->insert(
                        array(
                            'journal_items_from_account'=>$key[0],
                            'journal_transaction_account'=>$key[0],
                            'journal_items_type'=>1,
                            'journal_items_amount'=>$key[1],
                            'journal_items_transaction'=>$request->transaction_id,
                        )
                   );





                  }



                }




                return response()->json([
                    'response' => "success"
                ]);




    }

public function delete_full_journal_transaction(Request $request){


    DB::table('journal_transactions')->where('id',$request->journal_transaction_id)->delete();
    DB::table('journal_items')->where('journal_items_transaction',$request->journal_transaction_id)->delete();



    return response()->json([
        'response' => "success"
    ]);

}

public function ledger(Request $request){


    $account=DB::table('ledgeraccounts')
    ->Leftjoin('ledgeraccount_subcategories as a', 'a.id', '=', 'ledgeraccounts.accounts_subcategory')
    ->select('*','ledgeraccounts.id as id')
    ->orderBy('ledgeraccounts.accounts_name','asc')
    ->get();


    $ledger_from=$request->ledger_from;
    $ledger_to=$request->ledger_to;
    $ledger_account=$request->ledger_account;

    if(!empty($request->ledger_from)||!empty($request->ledger_to)||!empty($request->ledger_account)){

        if(!empty($request->ledger_account)){

            $ledger_account_result=DB::table('ledgeraccounts')
            ->Leftjoin('ledgeraccount_subcategories as a', 'a.id', '=', 'ledgeraccounts.accounts_subcategory')
            ->where('ledgeraccounts.id',$request->ledger_account)
            ->where('accounts_company',Auth::user()->Hospital)
            ->select('*','ledgeraccounts.id as id')
            ->get();

        }else{

            $ledger_account_result=DB::table('ledgeraccounts')
            ->Leftjoin('ledgeraccount_subcategories as a', 'a.id', '=', 'ledgeraccounts.accounts_subcategory')
            ->where('accounts_company',Auth::user()->Hospital)
            ->select('*','ledgeraccounts.id as id')
            ->get();
        }



    }else{
        $ledger_account_result=array();
    }



  return view('Accounts.ledger',compact('account','ledger_account','ledger_from','ledger_to','ledger_account','ledger_account_result'));

}


public function trialbalance(Request $request){

    $account=DB::table('ledgeraccounts')
    ->Leftjoin('ledgeraccount_subcategories as a', 'a.id', '=', 'ledgeraccounts.accounts_subcategory')
    ->select('*','ledgeraccounts.id as id')
    ->orderBy('ledgeraccounts.accounts_name','asc')
    ->get();
    

    $ledger_from=$request->ledger_from;
    $ledger_to=$request->ledger_to;
    $ledger_account=$request->ledger_account;

    if(!empty($request->ledger_from)||!empty($request->ledger_to)||!empty($request->ledger_account)){

        if(!empty($request->ledger_account)){

            $ledger_account_result=DB::table('ledgeraccounts')
            ->Leftjoin('ledgeraccount_subcategories as a', 'a.id', '=', 'ledgeraccounts.accounts_subcategory')
            ->where('id',$request->ledger_account)
            ->where('accounts_company',Auth::user()->Hospital)
            ->select('*','ledgeraccounts.id as id')
            ->get();

        }else{

            $ledger_account_result=DB::table('ledgeraccounts')
            ->Leftjoin('ledgeraccount_subcategories as a', 'a.id', '=', 'ledgeraccounts.accounts_subcategory')
            ->where('accounts_company',Auth::user()->Hospital)
            ->select('*','ledgeraccounts.id as id')
            ->get();
        }



    }else{
        $ledger_account_result=array();
    }



  return view('Accounts.trial_balance',compact('account','ledger_account','ledger_from','ledger_to','ledger_account','ledger_account_result'));


}

public function profitandlossaccount(Request $request){


    $account=DB::table('ledgeraccounts')
    ->Leftjoin('ledgeraccount_subcategories as a', 'a.id', '=', 'ledgeraccounts.accounts_subcategory')
    ->select('*','ledgeraccounts.id as id')
    ->get();


    $ledger_from=$request->ledger_from;
    $ledger_to=$request->ledger_to;
    $ledger_account=$request->ledger_account;
    $sub_cat=DB::table('ledgeraccount_subcategories')->get();

    if(!empty($request->ledger_from)||!empty($request->ledger_to)||!empty($request->ledger_account)){

        if(!empty($request->ledger_account)){

            $ledger_account_result=DB::table('ledgeraccounts')
            ->Leftjoin('ledgeraccount_subcategories','ledgeraccount_subcategories.id','=','ledgeraccounts.accounts_subcategory')
            ->where('id',$request->ledger_account)
            ->where('accounts_company',Auth::user()->Hospital)
            ->select('*','ledgeraccounts.id as id','ledgeraccount_subcategories.ledgeraccount_subcategories as subcat_name')
            ->get();

        }else{

            $ledger_account_result=DB::table('ledgeraccounts')
            ->Leftjoin('ledgeraccount_subcategories','ledgeraccount_subcategories.id','=','ledgeraccounts.accounts_subcategory')
            ->where('accounts_company',Auth::user()->Hospital)
            ->select('*','ledgeraccounts.id as id','ledgeraccount_subcategories.ledgeraccount_subcategories as subcat_name')
            ->get();
        }



    }else{
        $ledger_account_result=array();
    }



  return view('Accounts.profitandloss',compact('account','sub_cat','ledger_account','ledger_from','ledger_to','ledger_account','ledger_account_result'));




}


public function create_new_ledger_account(Request $request){


  //  dd($request->request);

     DB::table('ledgeraccounts')->insert(
        array(
            'accounts_name'     =>   $request->accounts_name,
            'accounts_category'     =>   $request->accounts_category,
            'accounts_subcategory'     =>   $request->accounts_subcategory,
            'budget_cat' => $request->budget_cat,
            'default_currency' =>    $request->default_currency,
            'accounts_desc'   =>   $request->accounts_desc,
            'accounts_company'   =>   Auth::user()->Hospital,


             // 'default_account'  =>   $request->default_account,
         )
    );
    $accounts=DB::table('ledgeraccounts')
    ->Leftjoin('ledgeraccount_subcategories as a', 'a.id', '=', 'ledgeraccounts.accounts_subcategory')
    ->Leftjoin('ledgeraccount_categories as b', 'b.id', '=', 'ledgeraccounts.accounts_category')
    ->Leftjoin('budget_types as c', 'c.id', '=', 'ledgeraccounts.budget_cat')
    ->select('*','ledgeraccounts.id as id')
    ->orderBy('ledgeraccounts.id', 'desc')
    ->get();

    return response()->json([
        'response' => "success",
        'accounts' => $accounts
    ]);



}

public function balancesheet(Request $request){


    $account=DB::table('ledgeraccounts')
    ->Leftjoin('ledgeraccount_subcategories as a', 'a.id', '=', 'ledgeraccounts.accounts_subcategory')
    ->select('*','ledgeraccounts.id as id')
    ->orderBy('ledgeraccounts.accounts_name','asc')
    ->get();


    $ledger_from=$request->ledger_from;
    $ledger_to=$request->ledger_to;
    $ledger_account=$request->ledger_account;

    if(!empty($request->ledger_from)||!empty($request->ledger_to)||!empty($request->ledger_account)){

        if(!empty($request->ledger_account)){

            $ledger_account_result=DB::table('ledgeraccounts')
            ->Leftjoin('ledgeraccount_subcategories as a', 'a.id', '=', 'ledgeraccounts.accounts_subcategory')
            ->where('id',$request->ledger_account)
            ->where('accounts_company',Auth::user()->Hospital)
            ->select('*','ledgeraccounts.id as id')
            ->get();

        }else{

            $ledger_account_result=DB::table('ledgeraccounts')
            ->Leftjoin('ledgeraccount_subcategories as a', 'a.id', '=', 'ledgeraccounts.accounts_subcategory')
            ->where('accounts_company',Auth::user()->Hospital)
            ->select('*','ledgeraccounts.id as id')
            ->get();
        }



    }else{
        $ledger_account_result=array();
    }



  return view('Accounts.balance_sheet',compact('account','ledger_account','ledger_from','ledger_to','ledger_account','ledger_account_result'));


}

public function stock_section(){
$account=array();
$hospitals=array();
$category=array();
$subcategory=array();
$items=DB::table('stock_items_acc')
->Leftjoin('stock_categories_acc as a', 'a.id', '=', 'stock_items_acc.stock_items_cat')
->Leftjoin('stock_subcategories_acc as b', 'b.id', '=', 'stock_items_acc.stock_items_subcat')
->where('stock_items_acc.stock_items_company',Auth::user()->Hospital)
->select('*','stock_items_acc.id as id')
->get();
return view('Accounts.stock_selection',compact('account','hospitals','category','subcategory','items'));


}

public function stock_issue(){

    $account=array();
    $hospitals=array();
    $category=array();
    $subcategory=array();
    $items=DB::table('stock_items_acc')
    ->Leftjoin('stock_categories_acc as a', 'a.id', '=', 'stock_items_acc.stock_items_cat')
    ->Leftjoin('stock_subcategories_acc as b', 'b.id', '=', 'stock_items_acc.stock_items_subcat')
    ->where('stock_items_acc.stock_items_company',Auth::user()->Hospital)
    ->select('*','stock_items_acc.id as id')
    ->get();
    return view('Accounts.stock_issue',compact('account','hospitals','category','subcategory','items'));
}

public function stock_categories(){

    $stock_categories=DB::table('stock_categories_acc')
    ->where('stock_categories_acc.stock_categories_company',Auth::user()->Hospital)
    ->get();


    return view('Accounts.stock_categories',compact('stock_categories'));


}

public function save_stock_categories(Request $request){

    DB::table('stock_categories_acc')->insert(
        array(
               'stock_categories_name'     =>   $request->stock_categories_name,
               'stock_categories_company'     =>   Auth::user()->Hospital,
        )
   );

   return redirect(route('stock_categories'));


}

public function update_stock_categories(Request $request){

    $data= array(
        'stock_categories_name'=>$request->stock_categories_name
        );
    DB::table('stock_categories_acc')->where('id', $request->id)->update($data);

    return redirect(route('stock_categories'));


}

public function delete_stock_category(Request $request){

    $id=$request->id;
    $check_datas_exist = DB::table('stock_items')->where('stock_items_cat',$id)->count();

   if($check_datas_exist==0){
       DB::table('stock_categories_acc')->where('id',$id)->delete();
       return response()->json([
           'response' => 1
       ]);
   }else{

       return response()->json([
           'response' => 0
       ]);
   }

}

public function stock_subcategories(){

    $stock_subcategories=DB::table('stock_subcategories_acc')
    ->Leftjoin('stock_categories_acc as a', 'a.id', '=', 'stock_subcategories_acc.stock_subcategories_category')
    ->where('stock_subcategories_acc.stock_subcategories_company',Auth::user()->Hospital)
    ->select('*','stock_subcategories_acc.id as id')
    ->get();
    $category=DB::table('stock_categories_acc')
    ->where('stock_categories_acc.stock_categories_company',Auth::user()->Hospital)
    ->get();


    return view('Accounts.stock_subcategories',compact('stock_subcategories','category'));


}

public function save_stock_subcategories(Request $request){

    DB::table('stock_subcategories_acc')->insert(
        array(
               'stock_subcategories_name'     =>   $request->stock_subcategories_name,
               'stock_subcategories_category'     =>   $request->stock_subcategories_category,
               'stock_subcategories_company'     =>   Auth::user()->Hospital,
        )
   );

   return redirect(route('stock_subcategories'));
}

public function delete_stock_subcategory(Request $request){

    $id=$request->id;
    $check_datas_exist = DB::table('stock_items')->where('stock_items_subcat',$id)->count();

   if($check_datas_exist==0){
       DB::table('stock_subcategories_acc')->where('id',$id)->delete();
       return response()->json([
           'response' => 1
       ]);
   }else{

       return response()->json([
           'response' => 0
       ]);
   }

}

public function get_item_with_group(Request $request){
 $data = DB::table('stock_items_acc')
->Leftjoin('stock_categories_acc as a', 'a.id', '=', 'stock_items_acc.stock_items_cat')
->Leftjoin('stock_subcategories_acc as b', 'b.id', '=', 'stock_items_acc.stock_items_subcat')
->where('stock_items_acc.stock_items_company',Auth::user()->Hospital)
->where('stock_items_acc.stock_items_groups',$request->group)
->select('*','stock_items_acc.id as id')
->get();
 return response()->json($data);
}

public function update_stock_subcategories(Request $request){

    // dd($request);
        $data= array(
            'stock_subcategories_name'=>$request->stock_subcategories_name,
            'stock_subcategories_category'=>$request->stock_subcategories_category
            );

        // dd($data);
       DB::table('stock_subcategories_acc')->where('id',$request->id)->update($data);

        //dd($var);

    return redirect(route('stock_subcategories'));


}

public function stock_items(Request $request){

    $stock_items=DB::table('stock_items_acc')
    ->Leftjoin('stock_categories_acc as a', 'a.id', '=', 'stock_items_acc.stock_items_cat')
    ->Leftjoin('stock_subcategories_acc as b', 'b.id', '=', 'stock_items_acc.stock_items_subcat')
    ->Leftjoin('stock_groups_acc as d', 'd.id', '=', 'stock_items_acc.stock_items_groups')
    ->where('stock_items_acc.stock_items_company',Auth::user()->Hospital)
    ->select('*','stock_items_acc.id as id')
    ->get();
   $stock_cat = DB::table('stock_categories_acc')->where('stock_categories_company',Auth::user()->Hospital)->get();
   $stock_subcat = DB::table('stock_subcategories_acc')->where('stock_subcategories_company',Auth::user()->Hospital)->get();
   $stock_groups = DB::table('stock_groups_acc')->get();

    return view('Accounts.stock_items',compact('stock_items','stock_cat','stock_subcat','stock_groups'));


}

public function save_stock_items(Request $request){

   // dd($request);
    DB::table('stock_items_acc')->insert(
        array(
               'stock_items_itemcode'    =>   $request->stock_items_itemcode,
               'stock_items_name'        =>   $request->stock_items_name,
               'stock_items_cat'         =>   $request->stock_items_cat,
               'stock_items_subcat'      =>   $request->stock_items_subcat,
               'stock_items_groups'      =>   $request->stock_items_groups,
               'stock_items_desc'        =>   $request->stock_items_desc,
               'stock_items_company'     =>   Auth::user()->Hospital,
               'stock_items_addedby'     =>   Auth::user()->id,
        )
   );

   return redirect(route('stock_items'));

}

public function update_stock_items(Request $request){


    $data= array(
        'stock_items_itemcode'    =>   $request->stock_items_itemcode,
        'stock_items_name'        =>   $request->stock_items_name,
        'stock_items_cat'         =>   $request->stock_items_cat,
        'stock_items_subcat'      =>   $request->stock_items_subcat,
        'stock_items_groups'      =>   $request->stock_items_groups,
        'stock_items_desc'        =>   $request->stock_items_desc,
    );

    DB::table('stock_items_acc')->where('id',$request->id)->update($data);

    return redirect(route('stock_items'));


}


public function delete_stock_items(Request $request){

    $id=$request->id;
    $check_datas_exist_fifo = DB::table('fifo_table_acc')->where('item',$id)->count();
    $check_datas_exist_lifo = DB::table('lifo_table_acc')->where('item',$id)->count();
    $check_datas_exist_weighted_avg = DB::table('weighted_avg_table_acc')->where('item',$id)->count();

   if($check_datas_exist_fifo==1 || $check_datas_exist_lifo==1 || $check_datas_exist_weighted_avg==1){

    return response()->json([
        'response' => 0
    ]);

   }else{

    DB::table('stock_items_acc')->where('id',$id)->delete();
    return response()->json([
        'response' => 1
    ]);

   }

}

public function store_ledger(Request $request){

    if(($request->post())){

        $from_date=$request->from_date;
        $to_date=$request->to_date;
        $transaction_group_select=$request->transaction_group_select;
        $item_select=$request->item_select;
        $item_select_options=DB::table('stock_items_acc')
        ->Leftjoin('stock_categories_acc as a', 'a.id', '=', 'stock_items_acc.stock_items_cat')
        ->Leftjoin('stock_subcategories_acc as b', 'b.id', '=', 'stock_items_acc.stock_items_subcat')
        ->Leftjoin('stock_groups_acc as d', 'd.id', '=', 'stock_items_acc.stock_items_groups')
        ->where('stock_items_acc.stock_items_company',Auth::user()->Hospital)
        ->where('stock_items_acc.stock_items_groups', $transaction_group_select)
        ->select('*','stock_items_acc.id as id')
        ->get();

        $query=DB::table('fifo_table_acc')
        ->Leftjoin('stock_transaction_table_acc as a', 'a.id', '=', 'fifo_table_acc.transaction_id')
        ->Leftjoin('stock_items_acc as b', 'b.id', '=', 'fifo_table_acc.item')
        ->Leftjoin('stock_groups_acc as d', 'd.id', '=', 'b.stock_items_groups')
        ->where('fifo_table_acc.transaction_company',Auth::user()->Hospital);

        if(!empty($transaction_group_select)){

        $query->where('b.stock_items_groups',$transaction_group_select);

        }

        if(!empty($item_select)){

            $query->where('b.id',$item_select);

         }

         if(!empty($from_date)&&!empty($to_date)){

            $query->whereBetween("tranaction_date",
            [
                $from_date,
                $to_date
            ]);

         }


        $query->select('*','fifo_table_acc.id as id','a.id as transaction_id');

        $query->orderBy('fifo_table_acc.tranaction_date','ASC');

        $ledger_datas=$query->get();


// CLOSING AND OPENING STOCKS


        $query=DB::table('fifo_table_acc')
        ->Leftjoin('stock_transaction_table_acc as a', 'a.id', '=', 'fifo_table_acc.transaction_id')
        ->Leftjoin('stock_items_acc as b', 'b.id', '=', 'fifo_table_acc.item')
        ->Leftjoin('stock_groups_acc as d', 'd.id', '=', 'b.stock_items_groups')
        ->where('fifo_table_acc.transaction_company',Auth::user()->Hospital);

        if(!empty($transaction_group_select)){

        $query->where('b.stock_items_groups',$transaction_group_select);

        }

        if(!empty($item_select)){

        $query->where('b.id',$item_select);

         }

         $query->where('tranaction_date', '<', $from_date);
         $query->where('transaction_type', 1);
         $query->select('fifo_table_acc.id as  rec_id','tranaction_date','balance_qty','balance_rate','balance_amount');
         $opening_values=$query->get();






         $query2=DB::table('fifo_table_acc')
         ->Leftjoin('stock_transaction_table_acc as a', 'a.id', '=', 'fifo_table_acc.transaction_id')
         ->Leftjoin('stock_items_acc as b', 'b.id', '=', 'fifo_table_acc.item')
         ->Leftjoin('stock_groups_acc as d', 'd.id', '=', 'b.stock_items_groups')
         ->where('fifo_table_acc.transaction_company',Auth::user()->Hospital);

         if(!empty($transaction_group_select)){

         $query2->where('b.stock_items_groups',$transaction_group_select);

         }

         if(!empty($item_select)){

         $query2->where('b.id',$item_select);

          }

          $query2->where('tranaction_date', '<=', $to_date);
          $query2->where('transaction_type', 1);
          $query2->select('fifo_table_acc.id as  rec_id','tranaction_date','balance_qty','balance_rate','balance_amount');
          $closing_values=$query2->get();










        $opening_rate="";
        $opening_amt="";
        $closing_qty="";
        $closing_rate="";
        $closing_amt="";


// ENDED CLOSING AND OPENING STOCKS


        }
    else
    {
        $from_date="";
        $to_date="";
        $transaction_group_select="";
        $item_select="";
        $item_select_options="";
        $ledger_datas=array();

        $opening_values=array();
        $closing_values=array();
        $opening_rate="";
        $opening_amt="";
        $closing_qty="";
        $closing_rate="";
        $closing_amt="";
    }

    $stock_groups = DB::table('stock_groups_acc')->get();
    return view('Accounts.fifo_store_ledger',compact('ledger_datas'
    ,'stock_groups',
    'from_date','to_date',
    'transaction_group_select',
    'item_select','item_select_options','opening_values','closing_values'));

}

public function get_total_number_of_item(Request $request){

    $item = $request->item;

    $balance_qty=DB::table('fifo_table_acc')
    ->where('fifo_table_acc.item',$item)
    ->where('fifo_table_acc.transaction_company',Auth::user()->Hospital)
    ->sum('balance_qty');

    return response()->json( $balance_qty);



}


public function create_new_stock_issue(Request $request){


    // dd($request->request);

    $transaction_id= DB::table('stock_transaction_table_acc')->insertGetId(
        array(
               'stock_transaction_type' =>   $request->stock_transaction_type,
               'stock_transaction_date' =>   $request->stock_transaction_date,
               'stock_transaction_subtype'   =>   $request->stock_transaction_subtype,
               'stock_transaction_remarks'   =>   $request->stock_transaction_remarks,
               'stock_transaction_company'   =>   Auth::user()->Hospital,
               'stock_transaction_by'   =>   Auth::id(),
        )
   );

   foreach ( $request->item as $idx => $val ) {
    $final_transaction_array[] = [ $val, $request->receipt_qty[$idx] ];
      }


    //   dd($final_transaction_array);

      foreach($final_transaction_array as $final){

        $loop_item=$final[0];
        $loop_qty=$final[1];
        $balance_qty=DB::table('fifo_table_acc')
        ->where('fifo_table_acc.item',$loop_item)
        ->where('fifo_table_acc.transaction_company',Auth::user()->Hospital)
        ->sum('balance_qty');
        $balance_row=DB::table('fifo_table_acc')
        ->where('fifo_table_acc.item',$loop_item)
        ->where('fifo_table_acc.transaction_company',Auth::user()->Hospital)
        ->count('balance_qty');

        if($loop_qty<=$balance_qty){


              $primary_value=$loop_qty;

                  for($i = 0; $i < $balance_row; $i++){


                    if($primary_value>0){


                    $first_data=DB::table('fifo_table_acc')
                    ->where('fifo_table_acc.item',$loop_item)
                    ->where('fifo_table_acc.transaction_company',Auth::user()->Hospital)
                    ->where('fifo_table_acc.transaction_type',1)
                    ->where('fifo_table_acc.balance_qty', '>',0)
                    ->select('*')
                    ->orderBy('fifo_table_acc.tranaction_date','ASC')
                    ->limit(1)->get();

                        if($first_data[0]->balance_qty>$primary_value){

                            $diff_value=$first_data[0]->balance_qty-$primary_value;

                            DB::table('fifo_table_acc')->insert(
                                        array(
                                               'tranaction_date'  => $request->stock_transaction_date,
                                               'transaction_id'   =>   $transaction_id,
                                               'transaction_type'   =>  $request->stock_transaction_type,
                                               'item'  =>   $first_data[0]->item,
                                               'issue_qty'  => $primary_value,
                                               'issue_rate'  => $first_data[0]->balance_rate,
                                               'issue_amount'  => $first_data[0]->balance_rate*$primary_value,
                                               'balance_qty'  => $primary_value,
                                               'balance_rate'  => $first_data[0]->balance_rate,
                                               'balance_amount'  => $first_data[0]->balance_rate*$primary_value,
                                               'transaction_company'  =>    Auth::user()->Hospital,
                                               'transaction_addedby'  =>   Auth::id(),
                                               'issue_recpt_id'  =>  $first_data[0]->id,
                                        )
                                   );

                                   DB::table('fifo_table_acc')
                                   ->where('id',$first_data[0]->id)
                                   ->update([
                                       'balance_qty' => DB::raw('balance_qty - '.$primary_value),
                                       'balance_amount' => $first_data[0]->balance_rate*($first_data[0]->balance_qty-$primary_value),

                                   ]);

                            $primary_value =  0;


                        }else{


                            DB::table('fifo_table_acc')->insert(
                                array(
                                       'tranaction_date'  => $request->stock_transaction_date,
                                       'transaction_id'   =>   $transaction_id,
                                       'transaction_type'   =>  $request->stock_transaction_type,
                                       'item'  =>   $first_data[0]->item,
                                       'issue_qty'  =>$first_data[0]->balance_qty,
                                       'issue_rate'  => $first_data[0]->balance_rate,
                                       'issue_amount'  => $first_data[0]->balance_rate*$first_data[0]->balance_qty,
                                       'balance_qty'  => $first_data[0]->balance_qty,
                                       'balance_rate'  => $first_data[0]->balance_rate,
                                       'balance_amount'  =>   $first_data[0]->balance_rate*$first_data[0]->balance_qty,
                                       'transaction_company'  =>    Auth::user()->Hospital,
                                       'transaction_addedby'  =>   Auth::id(),
                                       'issue_recpt_id'  =>  $first_data[0]->id,
                                )
                           );

                           DB::table('fifo_table_acc')
                           ->where('id',$first_data[0]->id)
                           ->update([
                               'balance_qty' => DB::raw('balance_qty - '.$first_data[0]->balance_qty),
                               'balance_amount' =>0,

                           ]);

                    $primary_value =  $primary_value-$first_data[0]->balance_qty;




                        }


                    }

                  }



    }


      }



      return response()->json([
        'response' => "success"
    ]);



}

public function ledger_budget_category()
{
    $budget_cat=DB::table('budget_types')->get();
    return view('Accounts.budget_categories',compact('budget_cat'));
}
public function save_ledger_budget_category(Request $request)
{
    DB::table('budget_types')->insert(
        array(
               'budget_name'     =>   $request->budget_cat_name,
               'budget_desc'   =>   $request->budget_cat_desc,
        )
   );
   return redirect(route('ledger_budget_category'));
}
public function update_ledger_budget_category(Request $request)
{
    $edit_data=array(
     'budget_name'=>$request->edit_budget_name,
     'budget_desc'=>$request->edit_budget_desc,
    );
    // dd($edit_data);
    DB::table('budget_types')->where('id',$request->budget_id)->update($edit_data);
    return redirect(route('ledger_budget_category'));
}
public function delete_ledger_budget_category($id)
{
    DB::table('budget_types')->where('id',$id)->delete();
    return redirect(route('ledger_budget_category'));
}
//reshma
public function expense_report()
{
    return view('Accounts.view_expense_report');
}

public function budget_forecasting()
{
    return view('Accounts.budget_forecasting');
}
public function add_account()
{
    return view('Accounts.add_account');
}


public function budget_forecat_dept()
{
    return view('Accounts.budget_forecat_dept');
}

public function i_p_bank_bal()
{
    return view('Accounts.i_p_bank_bal');
}

public function reconcile_bank_entries()
{
    return view('Accounts.reconcile_bank_entries');
}
public function bank_recon_report()
{
    return view('Accounts.bank_recon_report');
}




//reshma
}
