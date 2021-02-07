<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

/**
 * admin auth controller
 */
class AuthController extends Controller {
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
        if (Auth::guard('admin')->check()) {
            return redirect(route('admin.dashboard'));
        }
        return view('admin.login');
    }

    /**
     * Show the application login process.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginPost(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $rememberMe = (!empty($request->input('rememberMe'))) ? true : false;
        $adminData = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        if (Auth::guard('admin')->attempt($adminData, $rememberMe)) {
            Session::flash('success', 'Login successfully.');
            return redirect()->route('admin.dashboard');
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
        Auth::guard('admin')->logout();
        Session::flash('success', 'Logout successfully.');
        return redirect(route('admin.login'));
    }
}
