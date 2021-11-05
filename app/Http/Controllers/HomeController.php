<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\StaticPage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pages = StaticPage::get();
        foreach ($pages as $page) {
            echo $page->id .' '. $page->title . '<br>';
        }
        dd();
        return view('home');
    }

    public function post($id)
    {
        $post = Post::where('id', $id)->first();
        return view('front.post', compact('post'));
    }

    public function page($slug)
    {
        $page = StaticPage::where('slug', $slug)->first();
        return view('front.page', compact('page'));
    }
}
