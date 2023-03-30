<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index()
    {
        $allBlogs = new Blog();
        return view('frontend.home', ['blogs' => $allBlogs->all()]);
    }
}
