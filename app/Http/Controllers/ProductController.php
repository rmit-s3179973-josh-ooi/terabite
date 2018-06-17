<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
    
    protected function getProduct($id)
    {
    	$product = Product::with(['images','category','reviews'])->find($id);
    	
    	return view('product',['product'=>$product]);
    }
    
	
    protected function search(Request $request)
    {
        $request->validate([
            'brand'=>'array',
            'rating'=>'integer'
        ]);

        $products = Product::with(['images'])->get();
        
        $brand = $this->getBrands();   

        if($request->has("search"))
            $products = $this->searchQuery($products, $request->get("search"));

        if($request->has("brand"))
            $products = $this->filterBrands($products, $request->get("brand"));

        if($request->has("rating"))
            $products = $this->filterRating($products, $request->get("rating"));

        if($request->has("sort"))
            $products = $this->sortProduct($products, $request->get("sort"));
    	
        
        if(!is_null($products))
            $products = $products->paginate(15);
        
        // dd($products);
    	return view('product_listing',['products'=>$products,'brands'=>$brand]);
    }

    protected function filter(Request $request)
    {
        dd($request->all());
        if(!$request->has('brands') && !$request->has('rating'))
            return redirect()->route('website.get.search');


        $brands = $request->get("brand");
        $rating = $request->get("rating");
        
        $products = Product::all();        
        $union = collect();
        // $prd = $products->where('rating',5.0);
        for($i = 0; $i< count($brands);$i++)
        {
            $prd = $products->where('manufacturer',$brands[$i]);
            $union = $union->union($prd);    
        }        
        
        

        $filter = $union->intersect($rating);
        

        return view('product_listing',['products'=>$filter,'brands'=>$this->getBrands()]);

    }

    private function searchQuery(Collection $products, $searchQuery)
    {
        $strArray = explode(" ",$searchQuery);
        $allProducts = Product::where('product_name', 'like', '%' . $searchQuery . '%')->get();
        
        $products = $allProducts->intersect($products);
        
        return $products;
    }

    private function filterBrands(Collection $products, $brands)
    {
        $AllProducts = Product::all();        
        $union = collect();
        
        for($i = 0; $i< count($brands);$i++)
        {
            $prd = $AllProducts->where('manufacturer',$brands[$i]);
            $union = $union->union($prd);    
        }   

        $products = $products->intersect($union);

        return $products;
    }
    private function filterRating(Collection $products, $rating)
    {
        $products = $products->filter(function($item) use ($rating) {
            return $item->rating >= $rating;
        });
        return $products;
    }

    private function sortProduct(Collection $products, $sort)
    {
        switch($sort)
        {
            case 'plh':
                $products = $products->sortBy('price');
                break;
            case 'phl':
                $products = $products->sortByDesc('price');
                break;
        }
        return $products;
    }
    private function getBrands()
    {
        return Product::select('manufacturer')->distinct()->get()->map(function($item, $key) {
            return $item["manufacturer"];
        })->toArray();   
    }

   
}

