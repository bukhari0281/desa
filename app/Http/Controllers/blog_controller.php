<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blog_controller extends Controller
{
    function index() {
        return view('pages.admin.blog.index');
    }
}
