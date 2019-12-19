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
    public function index(Request $request)
    {
        $cookie = unserialize($request->cookie('cart'));
        $categories = Category::all();
        return view('client.products.product', compact('categories', 'cookie'));
    }

    public function show(Request $request, $id)
    {
        $cookie = unserialize($request->cookie('cart'));
        $categories = Category::all();
        $category = Category::findOrFail($id);
        $products = Product::latest('id')->where('category_id', $id)->paginate(12);
        return view('client.products.product', compact('products', 'categories', 'category', 'cookie'));
    }
    public function info(Request $request, $id)
    {
        $cookie = unserialize($request->cookie('cart'));
        $product = Product::findOrFail($id);
        $imageProduct = Image::all()->where('product_id', $id);
        $categories = Category::all();
        return view('client.products.product_info', compact('categories', 'imageProduct', 'product', 'cookie'));
    }
}
