<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('frontend.blog');
    }

    public function blog_details()
    {
        return view('frontend.blog-details');
    }

    public function blog_details_2()
    {
        return view('frontend.blog-details-2');
    }

    public function blog_details_3()
    {
        return view('frontend.blog-details-3');
    }

    public function blog_details_4()
    {
        return view('frontend.blog-details-4');
    }
}
