<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Admin;


/**
 * admin auth controller
 */
class AuthController extends Controller {
    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * admin login page view
     */
    public function login() {
        return view('admin.login');
    }


    /**
     * Show the application loginprocess.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginPost(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $adminData = ['email' => $request->input('email'), 'password' => $request->input('password')];
        if (auth()->guard('admin')->attempt($adminData)) {
            $user = auth()->guard('admin')->user();
            \Session::put('success', 'You are Login successfully!!');
            return redirect()->route('dashboard');
        } else {
            return back()->with('error', 'Username and password are wrong.');
        }
    }

    /**
     * Show the application logout.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout() {
        auth()->guard('admin')->logout();
        \Session::flush();
        \Sessioin::put('success', 'You are logout successfully');
        return redirect(route('adminLogin'));
    }
}
