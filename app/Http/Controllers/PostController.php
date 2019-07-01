<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //localhost:8000/ --this is the home page
    public function index(){
        $categories = Category::get();
        return view('partials.content', compact('categories'));
    }

    //localhost:8000/post -post page
    public function post(){
        return view('post');
    }

    public function signup(){
        return view('Registration.signup');
    }

    public function login(){
        return view('Registration.login');
    }

    public function create(){
        return view('Post.create');
    }

}
