<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use App\Models\Size;
use DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $cookie = unserialize($request->cookie('cart'));
        $categories = Category::all();
        $sizes = Size::all();
        $products = Product::latest()->paginate(15);

        return view('client.products.product', compact('categories', 'cookie', 'sizes', 'products'));
    }

    public function show(Request $request, $id)
    {
        $sizes = Size::all();
        $cookie = unserialize($request->cookie('cart'));
        $categories = Category::all();
        $category = Category::findOrFail($id);
        $products = Product::latest('id')->where('category_id', $id)->paginate(12);

        return view('client.products.product', compact('products', 'categories', 'category', 'cookie', 'sizes'));
    }
    public function info(Request $request, $id)
    {
        $cookie = unserialize($request->cookie('cart'));
        $product = Product::findOrFail($id);
        $imageProduct = Image::all()->where('product_id', $id);
        $categories = Category::all();
        return view('client.products.product_info', compact('categories', 'imageProduct', 'product', 'cookie'));
    }

    public function productByParentCate(Request $request, $id)
    {
        $sizes = Size::all();
        $cookie = unserialize($request->cookie('cart'));
        $categories = Category::all();
        $category = Category::findOrFail($id);
        $cate_parent = $categories->where('parent_id', $id);
        foreach ($cate_parent as $value) {
            $products[] = Product::all()->where('category_id', $value->id);
        }

        return view('client.products.productByParentCate', compact('categories', 'category', 'cookie', 'products', 'sizes'));
    }

    public function productBySize(Request $request, $id)
    {
        $sizes = Size::all();
        $cookie = unserialize($request->cookie('cart'));
        $categories = Category::all();
        $size = Size::find($id);
        $prdBySize = Product::all()->where('size_id', $id);

        return view('client.products.productBySize', compact('categories', 'cookie', 'sizes', 'prdBySize', 'size'));
    }
}
