<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordersNotification = Order::all()->where('status', 0)->take(5);
        $posts = Post::all();
        return view('admin.posts.index', compact('ordersNotification', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ordersNotification = Order::all()->where('status', 0)->take(5);
        return view('admin.posts.create', compact('ordersNotification'));
    }

    private function uploadImage(Request $request)
    {
        $destinationDir = public_path('image/post');
        $fileName = uniqid('post').'.'.$request->image->extension();
        $request->image->move($destinationDir, $fileName);
        $image = '/image/post/'.$fileName;
        return $image;
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
            'title',
            'content',
        ]);
        $attr['image'] = $image;
        $post = Post::create($attr);

        return redirect()->route('admin.posts.index');
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
        $ordersNotification = Order::all()->where('status', 0)->take(5);
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('ordersNotification', 'post'));
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
        $post = Post::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $this->uploadImage($request);
        } else {
            $image = $post->image;
        }
        $attr = $request->only([
            'title',
            'content',
        ]);
        $attr['image'] = $image;
        $post = $post->update($attr);

        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        
        return redirect()->route('admin.posts.index');
    }
}
