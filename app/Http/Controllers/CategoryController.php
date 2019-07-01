<?php

namespace App\Http\Controllers;

//imorting my own category model
use App\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function create(){
        $categories = Category::get();
        return view('Category.create', compact('categories'));
    }


    public function store(Request $request){
        //validate category
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories|max:255',
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $category = new Category;

        $category->name = $request->name;

        $category->save();
        return back();

    }

}
