<?php

namespace App\Http\Controllers;
use Validator;
use App\Post;
use App\Category;
use App\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //localhost:8000/ --this is the home page
    public function index(){
        $categories = Category::get();
        $posts = Post::get();
        return view('partials.content', compact('categories', 'posts'));
    }

    //localhost:8000/post -post page
    public function post(){
        $categories = Category::get();
        return view('Post.post', compact('categories'));
    }

    public function signup(){
        return view('Registration.signup');
    }

    public function login(){
        return view('Registration.login');
    }

    public function create(){
        $categories = Category::get();
        return view('Post.create', compact('categories'));
    }

    //post method
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required'

            ]);

        if($validator->fails()){
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        // check for if its working /TESTing

        // dd($request->all());

        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;

        $post->save();
        return back();

    }

    public function show($id){
        $post = Post::find($id);
        $categories = Category::get(); //this will b included in all sidebar pages for error
        return view('Post.post', compact('post', 'categories')); //this returns the view route
    }

}
