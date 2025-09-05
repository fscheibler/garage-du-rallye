<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::published()
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();

        return view('pages.home.index', compact('blogs'));
    }
}
