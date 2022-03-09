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
      })->with('pictures:id,title,link,product_id')->inRandomOrder()->get();
      
      return Inertia::render('Shop/Index', [
        'products' => $products
      ]);
    }
}
