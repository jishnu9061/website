<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Hash;

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

        // Check validation
       // $this->validate($request, [
         //   'mobile_no' => 'required|regex:/[0-9]{10}/|digits:10',            
      //  ]);

        // Get user record
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
         // Set Auth Details
          \Auth::login($user,$remember_me);
         if ( $user->isRole()=='superadmin') {// do your magic here
     return redirect('/home');
        }
         elseif ( $user->isRole()=='admin') {// do your magic here
     return redirect('/home');
        }
                 elseif ( $user->isRole()=='hospitaladmin') {// do your magic here
     return redirect('/home');
        }
                          
         else{
            return redirect('/'); 
         }
        // Redirect home page
            
    }
}