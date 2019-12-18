<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('client.products.product', compact('categories'));
    }

    public function show($id)
    {
        $categories = Category::all();
        $category = Category::findOrFail($id);
        $products = Product::latest('id')->where('category_id', $id)->paginate(12);
        return view('client.products.product', compact('products', 'categories', 'category'));
    }
    public function info($id)
    {
        $product = Product::findOrFail($id);
        $imageProduct = Image::all()->where('product_id', $id);
        $categories = Category::all();
        return view('client.products.product_info', compact('categories', 'imageProduct', 'product'));
    }
}
