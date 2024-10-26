<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $active = 'beranda';
        return view('home.index',  compact('active'));
    }

    public function about()
    {
        $active = 'about';
        return view('home.about',  compact('active'));
    }

    public function contact()
    {
        $active = 'contact';
        return view('home.contact',  compact('active'));
    }
    public function faq()
    {
        $active = 'faq';
        return view('home.faq',  compact('active'));
    }
    public function dashboard()
    {
        $active = "dashboard";
        $userId = auth()->user()->id;
        $blogs = Blog::where('user_id', $userId)->get(); // where User id == auth()
        return view('admin.dashboard', compact('active', 'blogs'));
    }
}
