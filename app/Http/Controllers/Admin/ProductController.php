<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use App\Models\Size;
use App\Models\Order;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordersNotification = Order::all()->where('status', 0)->take(5);
        $products = Product::latest()->with('category')->get();
        return view('admin.products.index', compact('products', 'ordersNotification'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ordersNotification = Order::all()->where('status', 0)->take(5);
        $sizes = Size::all();
        $categories = Category::all();
        return view('admin.products.create', compact('categories', 'sizes', 'ordersNotification'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $this->uploadImage($request);
        } else {
            $image = '/image/product-default.jpg';
        }
        $attr = $request->only([
            'category_id',
            'size_id',
            'name',
            'product_code',
            'price',
            'price_sale',
            'description',
            'content',
        ]);
        $attr['image'] = $image;
        if ($request->new == true) {
            $new = 1;
            $attr['new'] = $new;
        } else {
            $new = 0;
            $attr['new'] = $new;
        }
        if ($request->highlight == true) {
            $highlight = 1;
            $attr['highlight'] = $highlight;
        } else {
            $highlight = 0;
            $attr['highlight'] = $highlight;
        }
        $product = Product::create($attr);

        return redirect()->route('admin.products.index')->with('alert', 'Add Product Success!');        
    }

    private function uploadImage(Request $request)
    {
        $destinationDir = public_path('image/product');
        $fileName = uniqid('product').'.'.$request->image->extension();
        $request->image->move($destinationDir, $fileName);
        $image = '/image/product/'.$fileName;
        return $image;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $ordersNotification = Order::all()->where('status', 0)->take(5);
            $categories = Category::all();
            $product = Product::findOrFail($id);
            $sizes = Size::all();

            return view('admin.products.edit', compact('categories', 'product', 'sizes', 'ordersNotification'));
        } catch (Exception $e) {
            return redirect()->back()->with($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $product = Product::findOrFail($id);
            if ($request->hasFile('image')) {
                $image = $this->uploadImage($request);
            } else {
                $image = $product->image;
            }
            $attr = $request->only([
                'category_id',
                'size_id',
                'name',
                'product_code',
                'price',
                'price_sale',
                'description',
                'content',
            ]);
            $attr['image'] = $image;
            if ($request->new == true) {
                $new = 1;
                $attr['new'] = $new;
            } else {
                $new = 0;
                $attr['new'] = $new;
            }
            if ($request->highlight == true) {
                $highlight = 1;
                $attr['highlight'] = $highlight;
            } else {
                $highlight = 0;
                $attr['highlight'] = $highlight;
            }
            $product = $product->update($attr);
             
            return redirect()->route('admin.products.index')->with('alert', 'Edit Product Success!'); 
        } catch (Exception $e) {
            return redirect()->back()->with($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();

            return redirect()->route('admin.products.index')->with('alert', 'Delete Product Success');
        } catch (Exception $e) {
            return redirect()->back()->with($e->getMessage());
        }
    }
}
