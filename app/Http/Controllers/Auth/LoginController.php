<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Hash;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->user = new User;
       
    }

    public function login(Request $request)
    {
       
        $remember_me  = ( !empty( $request->remember_me) )? TRUE : FALSE;

        $user = User::where('uniqueid', $request->get('email'))->first();
        if($user)
        {
            $dd= (Hash::check( $request->get('password'), $user->password)); 
        }
       else
        {
            \Session::put('errors', 'Invalid Details..!!');
            return back();
        }
           
        // Check Condition Mobile No. Found or Not
        if($request->get('email') != $user->uniqueid) {
            \Session::put('errors', 'Invalid Details..!!');
            return back();
        }     
        elseif($dd != "true"){
            \Session::put('errors', 'Invalid Details..!!');
            return back();
        }
        if($request->session()->has('justlogin'))
         {                 
         $request->session()->get('justlogin');
         }
        if($user->status == 0){
            \Session::put('errors', 'User is InActive..!! Contant Admin');
            return back();
        }


        \Auth::login($user,$remember_me);
        
        if ( $user->role == 1) {// do your magic here
            return redirect('/superadminhome');
            }
            elseif ( $user->role == 2) {// do your magic here
            DB::table('users_ip_track')->insert([
                'uniqueid'=>$user->uniqueid,
                'company_id'=>$user->company_id,
                'login_at' => Carbon::now()->toDateTimeString(),
                'ip_address' => $request->ip(),
            ]);
                return redirect('/home');
            }
                elseif ( $user->role == 3) {// do your magic here
                    return redirect('/home');
                }
            else{
                \Session::put('errors', 'Invalid Details..!!');
                return back();
        }
        // Redirect home page
            
    }
}