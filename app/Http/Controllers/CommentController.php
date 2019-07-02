<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(Request $request){
        $validator = Validator::make($request->all, [
            'comment' => 'required',
        ]);

        if ($validator->fails()){
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->save();
        return back();
    }

    









}
