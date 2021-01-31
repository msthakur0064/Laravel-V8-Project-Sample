<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * dashboard controller 
 */
class DashboardController extends Controller {

    /**
     * home page
     */
    public function index() {
        return view('admin.dashboard');
    }
}
