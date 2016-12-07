<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Just a redirect to Posts page in Admin
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index() {
        return redirect()->route('admin.posts.index');
    }
}
