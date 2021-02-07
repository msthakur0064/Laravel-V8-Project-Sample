<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * user controller 
 */
class UserController extends Controller {
    /**
     * user listing page
     */
    public function index() {
        return view('admin.user');
    }
}
