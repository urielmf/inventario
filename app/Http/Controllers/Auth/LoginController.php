<?php

namespace App\Http\Controllers\Auth;

use App\Models\Recordlogin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }  

    public function username(){
        return 'username';
    }

    public function authenticated(){
        //Request $request, $user
        // $user->last_login = now();
        // $user->save();
        $recordlogin = new Recordlogin();
        $user = Auth::user();
        $recordlogin->username =  $user->username;
        $recordlogin->user_id =  $user->id;
        $recordlogin->save();
        return redirect()->route('home');

    }
}
