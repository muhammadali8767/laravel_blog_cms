<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\StaticPage;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::get();
        $posts = Post::get();
        $pages = StaticPage::get();

        return view('home', compact('categories', 'posts', 'pages'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('front.post', compact('post'));
    }

    public function page($slug)
    {
        $page = StaticPage::where('slug', $slug)->firstOrFail();

        return view('front.page', compact('page'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = Post::with('category')->where('category_id', $category->id)->get();

        return view('front.category', compact('posts', 'category'));
    }
    public function category_post($category_slug, $slug)
    {
        $category = Category::where('slug', $category_slug)->firstOrFail();
        $post = Post::where('slug', $slug)->where('category_id', $category->id)->firstOrFail();

        return view('front.post', compact('post'));
    }
}
