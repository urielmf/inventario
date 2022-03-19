<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if (!$user->access) {
            $this->perform();
        return redirect()->route('login')->withErrors(['msg' => 'Su usuario no tiene acceso a la plataforma']);
        }else{
            return view('home');
        }
    }

    public function perform()
    {
        Session::flush();
        Auth::logout();
    }
}
