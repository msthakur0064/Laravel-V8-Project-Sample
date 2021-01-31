<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * the controller for home page 
 */
class homeController extends Controller {

    /**
     * home page
     */
    public function index() {
        return view('home');
    }
}
