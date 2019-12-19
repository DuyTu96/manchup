<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cookie = unserialize($request->cookie('cart'));
        $categories = Category::all();
        return view('client.carts.cart', compact('cookie', 'categories'));
    }

    public function addToCart(Request $request)
    {
        $product_id = $request->product_id;
        $product_num = $request->product_num;
        $cart = unserialize($request->cookie('cart'));
        if (isset ($cart[$product_id]) ) {
            $product = Product::findOrFail($product_id);
            $qty = $product->quantity;
            $product_num = $product_num + $cart[$product_id]["product_num"];
                $cart[$request->product_id] = $this->getProductDetail($product_id, $product_num);
                $cookie = cookie('cart', serialize($cart), 60);
                $qty = count($cart);
        }
        else {
            $cart[$request->product_id] = $this->getProductDetail($product_id, $product_num);
            $cookie = cookie('cart', serialize($cart), 60);
            $qty = count($cart);
        }
        return response()->json([
            'quantity' => $qty,
        ], 200)->withCookie($cookie);
    }

    public function getProductDetail($id, $num)
    {
        $product = Product::findOrFail($id);
        $product_price = $product->price;
        if($product->price_sale <> 0){
            $product_price = $product->price_sale;
        }
        $num_price = $product_price * $num;
        $product_detail = [
            'product_id' => $id,
            'product_name' => $product->name,
            'product_price' => $product_price,
            'product_num' => $num,
            'num_price' => $num_price,
            'product_image' => $product->image,
        ];

        return $product_detail;
    }

    public function update(Request $request)
    {
        $product_id = $request->id;
        $product_num = $request->quantity;
        $cart = unserialize($request->cookie('cart'));
        $cart[$product_id]["product_num"] = $product_num;
        $product = Product::findOrFail($product_id);
        $cart[$product_id]["num_price"] = $product_num * $cart[$product_id]["product_price"];
        $cookie = cookie('cart', serialize($cart), config('number.time'));
        $carts = unserialize($cookie->getValue());
        $total_price = $this->getTotalPrice($carts);
        $summedPrice = $cart[$product_id]["num_price"];

        return response()->json(compact('total_price', 'summedPrice'), 200)->withCookie($cookie);
    }
    
    public static function getTotalPrice($carts)
    {
        $total_price = 0;
        foreach ($carts as $cart)
        {
            $total_price += $cart["num_price"];
        }

        return $total_price;
    }

    public function checkout(Request $request)
    {
        $attributes = $request->only([
            'user_name',
            'user_email',
            'user_address',
            'user_phone',
        ]);
        $cart = unserialize($request->cookie('cart'));
        $total_price = 0;
        foreach ($cart as $key => $val) {
            $total_price += $val["num_price"];
        }
        $attributes['total_price'] = $total_price;
        $order = Order::create($attributes);
        foreach ($cart as $orderDeail) {
            $order_id = $$;
        }
    }

    public function delete(Request $request)
    {
        $product_id = $request->product_id;
        $cart = unserialize($request->cookie('cart'));
        if ($cart[$product_id]) {
            unset($cart[$product_id]);
        }
        $cookie = cookie('cart', serialize($cart), 60);
        $carts = unserialize($cookie->getValue());
        $quantity = count($carts);
        $total_price = $this->getTotalPrice($carts);
        return response()->json(compact('quantity', 'total_price'), 200)->withCookie($cookie);
    }
}
