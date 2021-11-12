<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function about()
    {
        return view('front.about');
    }

    public function project()
    {
        return view('front.project');
    }

    public function elements()
    {
        return view('front.elements');
    }

    public function projectDetails()
    {
        return view('front.projectDetails');
    }

    public function blog()
    {
        // $posts = Post::latest()->paginate(5);
        $posts = app(PostRepository::class)->getAllWithPaginate(5);
        // dd($posts);
        return view('front.blog', compact('posts'));
    }

    public function singleBlog($id)
    {
        $post = app(PostRepository::class)->getEdit($id);
        return view('front.singleBlog', compact('post'));
    }

    public function services()
    {
        return view('front.services');
    }

    public function contact()
    {
        return view('front.contact');
    }
}
