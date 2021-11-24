<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;

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

    public function territory()
    {
        return view('front.territory');
    }

    public function eiz_vazifasi()
    {
        return view('front.eiz_vazifasi');
    }

    public function sirdaryo_eiz_mk()
    {
        return view('front.sirdaryo_eiz_mk');
    }

    public function bussiness()
    {
        return view('front.bussiness');
    }

    public function why()
    {
        return view('front.why');
    }

    public function privilege()
    {
        return view('front.privilege');
    }

    public function activity_types()
    {
        return view('front.activity_types');
    }

    public function project()
    {
        return view('front.project');
    }

    public function news()
    {
        return view('front.news');
    }

    public function multimedia()
    {
        return view('front.multimedia');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function post_contact(Request $request)
    {
        dd($request->except('_token'));
        return view('front.post_contact');
    }














    // public function project()
    // {
    //     return view('front.project');
    // }

    // public function elements()
    // {
    //     return view('front.elements');
    // }

    // public function projectDetails()
    // {
    //     return view('front.projectDetails');
    // }

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
}
