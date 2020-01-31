<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use DB;
use Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $cookie = unserialize($request->cookie('cart'));
        $categories = Category::all();
        $product_featured = DB::table('products')
            ->where('highlight', 1)
            ->orderBy('id', 'DESC')
            ->limit(5)
            ->get();
        $product_hot = Product::firstOrFail();
        $productByCate1 = $this->productByCate(1);
        $productByCate2 = $this->productByCate(2);
        $productByCate3 = $this->productByCate(3);
        $product4 = Product::all()->where('category_id', 4)->take(3);
        $product5 = Product::all()->where('category_id', 5)->take(3);
        $product6 = Product::all()->where('category_id', 6)->take(3);
        return view('client.index', compact('categories', 'cookie', 'product_featured', 'product_hot', 'productByCate1', 'productByCate2', 'productByCate3',
            'product4', 'product5', 'product6'));
    }

    public function productByCate($cat)
    {
        $subcategory = Category::all()->where('parent_id', $cat);
        $count = 0;
        foreach ($subcategory as $key => $sub) {
            $productByCate[] = Product::all()->where('category_id', $sub->id);
        }
        return $productByCate;
    }

    public function search(Request $request)
    {
        $cookie = unserialize($request->cookie('cart'));
        $categories = Category::all();
        $sizes = Size::all();
        $search = $request->search;
        $products = Product::where('name', 'like', "%$search%")->orWhere('price', 'like', "%$search%")->paginate(15);
        
        return view('client.products.product', compact('products', 'cookie', 'categories', 'sizes'));
    }
}
