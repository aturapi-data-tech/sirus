<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Models\Post;
use Inertia\Inertia;


class PostController extends Controller
{
       /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts from database
        $posts = Post::latest()->get();

        //render with data "posts"
        return Inertia::render('Post/Index', ['posts' => $posts]);
        
    }
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return Inertia::render('Post/Create');
    }
    
    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        //set validation
        $request->validate([
            'name'   => 'required',
            'description' => 'required',
        ]);

        //create post
        $post = Post::create([
            'name'     => $request->name,
            'description'   => $request->description
        ]);

        if($post) {
            
            return Inertia::location(route('posts.index'));
            // return redirect()->back();
        }
    }
}
