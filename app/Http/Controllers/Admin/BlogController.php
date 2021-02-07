<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * blog controller
 */
class BlogController extends Controller {
    /**
     * blog listing page
     */
    public function index() {
        return view('admin.blog');
    }
}
