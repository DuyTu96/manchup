<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use DB;

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
        return view('client.index', compact('categories', 'cookie', 'product_featured', 'product_hot', 'productByCate1', 'productByCate2', 'productByCate3'));
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
}
