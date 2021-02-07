<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * category controller
 */
class CategoryController extends Controller {
    /**
     * category listing page
     */
    public function index() {
        return view('admin.category');
    }
}
