<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create() {
        return view('dashboard.category.create');
    }

public function store(Request $request){
    $category=new Category();
    $category->name=$request->name;
    $category->description=$request->description;
    $category->save();
    if($request->model='model'){
        return redirect()->Route('product.create');

    }else{
        return redirect()->Route('dashboard.index');
    }
}


public function destroy(Category $category){
    $category->delete();
    return redirect()->Route('dashbord.index');
}

}








?>