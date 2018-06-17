<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use DB;
use App\Image as Picture;
use App\Category;
use Image;
use File;

class ProductController extends Controller
{
    
    public function create()
    {
    	$category = Category::all();	
    	
    	foreach($category as $k=>$c)
    	{
    		$cat[$c->id] = $c->category_name; 
    	}

    	return view('admin.product.add',['title'=>'product', 'category'=>$cat]);
    }

    public function index()
    {
    	$products = Product::all()->paginate(30);
    	return view('admin.product.home',['products'=>$products,'title'=>'product']);
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'name'=>'required',
    		'brand' =>'required',
    		'price' => 'required|integer',
    		'category'=>'required'    		
    	]);
    	Product::create([
    		'product_name'=>$request->get('name'),
    		'manufacturer' => $request->get('brand'),
    		'product_description' => $request->get('description') == null ? '' : $request->get('description'),
    		'price' => intval($request->get('price') * 100),
    		'category_id'=>$request->get('category')
    	]);
    }

    public function edit($id)
    {
    	$product = Product::find($id);
    	$category = Category::all();	
    	
    	foreach($category as $k=>$c)
    	{
    		$cat[$c->id] = $c->category_name; 
    	}
    	return view('admin.product.edit',['title'=>'product','product'=>$product,'category'=>$cat]);
    }

    public function update(Request $request, $id)
    {    	
    	$product = Product::find($id);    	
    	$data = $request->all();


    	$product->update([

    		'product_name'=>$request->get('name'),
    		'manufacturer' => $request->get('brand'),
    		'product_description' => $request->get('description') == null ? '' : $request->get('description'),
    		'price' => intval($request->get('price') * 100),
    		'category_id'=>$request->get('category')
    	]);

    	if($request->hasFile('image'))
    	{
    		$this->handleImage($request,$id);
    	}

    	return redirect()->route('admin.product.get.home');
    }

    public function handleImage(Request $request, $id)
    {
    	$product = Product::find($id);

    	if(!$request->hasFile('image'))
    	{

    		return redirect()->route('admin.product.get.home');
    	}
    	
    	$mimeType = $request->file('image')->getClientMimeType();
    	
    	if($mimeType != 'image/jpeg' && $mimeType != 'image/png' )
    	{

    		return redirect()->route('admin.product.get.home');
    	}
    	$filename = $request->file('image')->getClientOriginalName();
    	$path = public_path() . '/images/ori/';
    	if(File::exists(public_path() . $path . $filename)){
            $filename .= str_random(3);
        }
    	$file = $request->file('image')->move($path,$filename);

    	$imgUrl = $this->processImage($path . $filename);
    	$array = array_add($imgUrl,'product_id',$id);
    	
    	$image = Picture::create($array);
    }

    private function processImage($path)
    {
    	$img = Image::make($path);
    	$filename = str_random(10) . '.jpg';
    	
    	$img->resizeCanvas(1280, 720, 'center', false, 'ffffff');    	
    	$newPath = '/images/edit/' . $filename;
    	$img->save(public_path() . $newPath);
    	
    	$img->resizeCanvas(500,500, 'center', false, 'ffffff');    	
    	$thumbs = '/images/thumbs/' . $filename;
    	$img->save(public_path() . $thumbs);
    	
    	$paths = ['url'=>$newPath, 'thumbs'=>$thumbs];
    	
    	return $paths;
    }
}
