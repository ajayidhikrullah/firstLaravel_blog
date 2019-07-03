<?php

namespace App\Http\Controllers;
use Validator;
use App\Post;
use App\Comment;
use App\Category;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    //
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'comment' => 'required'
        ]);

        // dd($request->all());

        if ($validator->fails()){
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->post_id = $request->post_id;
        $comment->save();
        return back();
    }


    public function comment(){
        $comment = Category::get();
        $categories = Category::get();
        return view('Post.comment', compact('comment', 'categories'));
    }









}
