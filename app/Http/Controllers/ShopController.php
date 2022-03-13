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
      $sort = request()->sort;

      $products = Product::select('id', 'name', 'price', 'slug', 'product_code')
                  ->with('pictures:title,link,product_id')
                  ->when($sort == 'random' || !$sort, function ($query) {
                    $query->inRandomOrder();
                  })
                  ->when($sort == 'price_up', function ($query) {
                    $query->orderBy('price', 'asc');
                  }, function ($query) {
                    $query->orderByDesc('price');
                  })
                  ->get();

      return Inertia::render('Shop/Index', [
          'products' => fn () => $products,
      ]);
    }

    public function getProductsByCategory(string $category_slug)
    { 
      $sort = request()->sort;

      $products = Product::whereHas('categories', function($query) use($category_slug) {
                    $query->where('slug', $category_slug);
                  })->with('pictures:id,title,link,product_id')
                  ->select('id', 'name', 'price', 'slug', 'product_code')
                  ->when($sort == 'random' || !$sort, function ($query) {
                    $query->inRandomOrder();
                  })
                  ->when($sort == 'price_up', function ($query) {
                    $query->orderBy('price', 'asc');
                  }, function ($query) {
                    $query->orderByDesc('price');
                  })
                  ->get();

      return Inertia::render('Shop/Index', [
        'products' => fn () => $products
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
