<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function delete($id)
    {
    	Category::destroy($id);

    	return redirect()->route('admin.category.get.home');
    }

    public function index()
    {
    	$categories = Category::all();

    	return view('admin.category.home',['title'=>'category','categories'=>$categories]);
    }

    public function create()
    {
        return view('admin.category.add',['title'=>'category']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' =>'required'
        ]);

        Category::create([
            'category_name' => $request->get('category_name')
        ]);

        return redirect()->route('admin.category.get.home');
    }
}
