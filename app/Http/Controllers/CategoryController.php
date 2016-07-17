<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
// use DB;
class CategoryController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }
    public function create(){
      return view('Admin.addCategory');
    }
    public function store(Request $request){

    // upload image
            $category= New Category;
            $image = $request->file('category_file');
            $destinationPath = 'uploads/images';
            if($image->isValid()){
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath,$filename);
              }
    //upload image end
            $category->CategoryName=$request->categoryName;
            $category->Description=$request->categoryDescription;
            $category->Picture = $filename;
    //checkbox isset
            if(isset($request->categoryActive)){
              $check = 'Active';
            }else{
              $check = 'Deactive';
            }
    //checkbox isset end
            $category->Active = $check;
            $category->save();
            return redirect('categoryList');
    }


    public function show(){
      $categories=Category::all();
      return view('Admin.categoryList', compact('categories'));
    }


    public function edit(Category $category){
      // $category = Category::findOrFail($category);
      if($category->Active = 'Active'){
        $status = 'checked';
      }else if($category->Active = 'Deactive'){
        $status = 'unchecked';
      }
      return view('Admin.editCategory', compact('category','status'));
    }


    public function update(Request $request, Category $category){
            $image = $request->file('category_file');
            $destinationPath = 'uploads/images';
            if($image->isValid()){
            $filename = rand(1,10000000).'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath,$filename);
          }
    //upload image end
            $category->CategoryName=$request->CategoryName;
            $category->Description=$request->categoryDescription;
            $category->Picture = $filename;
    //checkbox isset
            if(isset($request->categoryActive)){
              $check = 'Active';
            }else{
              $check = 'Deactive';
            }
    //checkbox isset end
            $category->Active = $check;
            $category->save();
            return redirect('categoryList');
    }
    public function destroy(Category $category){
      $category->delete();
      return back();
    }
}
