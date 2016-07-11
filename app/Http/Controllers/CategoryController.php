<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use DB;
class CategoryController extends Controller
{
    public function create(){
      return view('Admin.addCategory');
    }
    public function store(Request $request){

            $category= New Category;
            $category->CategoryName=$request->categoryName;
            $category->Description=$request->categoryDescription;
            // $category->Active=$request->categoryActive;
    //
    // $photo = $request->file('categoryFile');
    // $destinationPath = base_path() . '/public/uploads/images';
    // $fileName = str_random(6).'_'. $photo->getClientOriginalName();
    // $uploadFile=$photo->move($destinationPath,$fileName);
    $category->save();
    }
    public function show(){
      $categories=Category::all();
      return view('Admin.categoryList', compact('categories'));
    }
}
