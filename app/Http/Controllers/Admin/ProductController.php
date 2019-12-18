<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
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
        $products = Product::latest()->with('category')->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
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

        if ($request->hasFile('image1')) {
            $destinationDir = public_path('image/product');
            $fileName = uniqid('product').'.'.$request->image1->extension();
            $request->image1->move($destinationDir, $fileName);
            $image1 = '/image/product/'.$fileName;
        } else {
            $image1 = '/image/product-default.jpg';
        }
        if ($request->hasFile('image2')) {
            $destinationDir = public_path('image/product');
            $fileName = uniqid('product').'.'.$request->image2->extension();
            $request->image2->move($destinationDir, $fileName);
            $image2 = '/image/product/'.$fileName;
        } else {
            $image2 = '/image/product-default.jpg';
        }
        if ($request->hasFile('image3')) {
            $destinationDir = public_path('image/product');
            $fileName = uniqid('product').'.'.$request->image3->extension();
            $request->image3->move($destinationDir, $fileName);
            $image3 = '/image/product/'.$fileName;
        } else {
            $image3 = '/image/product-default.jpg';
        }
        if ($request->hasFile('image4')) {
            $destinationDir = public_path('image/product');
            $fileName = uniqid('product').'.'.$request->image4->extension();
            $request->image4->move($destinationDir, $fileName);
            $image4 = '/image/product/'.$fileName;
        } else {
            $image4 = '/image/product-default.jpg';
        }
        $attributes = [
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
            'image4' => $image4,
            'product_id' => $product->id,
        ];
        
        Image::create($attributes);

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
            $categories = Category::all();
            $product = Product::findOrFail($id);
            $product_image = DB::table('images')
                ->where('product_id', $id)
                ->get();

            return view('admin.products.edit', compact('categories', 'product', 'product_image'));
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
             
            $image_prd = DB::table('images')
                ->where('product_id', $id)
                ->get();
            foreach ($image_prd as $key => $value) {
                $id_image = $value->id;
            }
            $image_prd = Image::findOrFail($id_image);
            if ($request->hasFile('image1')) {
                $destinationDir = public_path('image/product');
                $fileName = uniqid('product').'.'.$request->image1->extension();
                $request->image1->move($destinationDir, $fileName);
                $image1 = '/image/product/'.$fileName;
            } else {
                $image1 = $image_prd->image1;
            }
            if ($request->hasFile('image2')) {
                $destinationDir = public_path('image/product');
                $fileName = uniqid('product').'.'.$request->image2->extension();
                $request->image2->move($destinationDir, $fileName);
                $image2 = '/image/product/'.$fileName;
            } else {
                $image2 = $image_prd->image2;
            }
            if ($request->hasFile('image3')) {
                $destinationDir = public_path('image/product');
                $fileName = uniqid('product').'.'.$request->image3->extension();
                $request->image3->move($destinationDir, $fileName);
                $image3 = '/image/product/'.$fileName;
            } else {
                $image3 = $image_prd->image3;
            }
            if ($request->hasFile('image4')) {
                $destinationDir = public_path('image/product');
                $fileName = uniqid('product').'.'.$request->image4->extension();
                $request->image4->move($destinationDir, $fileName);
                $image4 = '/image/product/'.$fileName;
            } else {
                $image4 = $image_prd->image4;
            }
            $attributes = [
                'image1' => $image1,
                'image2' => $image2,
                'image3' => $image3,
                'image4' => $image4,
                'product_id' => $id,
            ];
            
            $image_prd->update($attributes);
            
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
            $image_prd = DB::table('images')
                ->where('product_id', $id)
                ->get();
            foreach ($image_prd as $key => $value) {
                $id_image = $value->id;
            }
            $image_prd = Image::findOrFail($id_image);
            $image_prd->delete();
            $product->delete();

            return redirect()->route('admin.products.index')->with('alert', 'Delete Product Success');
        } catch (Exception $e) {
            return redirect()->back()->with($e->getMessage());
        }
    }
}
