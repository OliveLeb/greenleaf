<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
      $products = Product::take(8)->with('pictures')->inRandomOrder()->get();
      
      return Inertia::render('Shop/Index', [
          'products' => $products,
      ]);
    }

    public function getProductsByCategory(string $category_slug)
    { 
      $products = Product::whereHas('categories', function($query) use($category_slug) {
        $query->where('slug', $category_slug);
      })->with('pictures:id,title,link,product_id')
      ->select('id', 'name', 'price', 'slug')
      ->inRandomOrder()
      ->get();

      return Inertia::render('Shop/Index', [
        'products' => $products
      ]);
    }


    /*
    * Display the specified resource
    *
    * @param \App\Models\Product $Product
    * @return \Illuminate\Response
    */
    public function show(Product $product)
    {
      return Inertia::render('Shop/ShowProduct', [
        'product' => $product,
        'pictures'=> $product->pictures
      ]);
    }
}
