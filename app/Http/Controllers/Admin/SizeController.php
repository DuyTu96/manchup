<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Size;
use App\Models\Order;

class SizeController extends Controller
{
    public function index()
    {
        $ordersNotification = Order::all()->where('status', 0)->take(5);
        $sizes = Size::all();
        return view('admin.sizes.create', compact('sizes', 'ordersNotification'));
    }

    public function store(Request $request)
    {
        $attr = $request->only([
            'size',
        ]);
        Size::create($attr);

        return redirect()->route('admin.sizes.index')->with('alert', 'Thêm Size Thành Công!');
    }

    public function edit($id)
    {
        $ordersNotification = Order::all()->where('status', 0)->take(5);
        $size = Size::findOrFail($id);
        $sizes = Size::all();
        return view('admin.sizes.edit', compact('size', 'sizes', 'ordersNotification'));
    }

    public function update(Request $request, $id)
    {
        $size = Size::findOrFail($id);
        $attr = $request->only([
            'size',
        ]);
        $size = $size->update($attr);

        return redirect()->route('admin.sizes.index')->with('alert', 'Sửa Size Thành Công!');
    }
    
    public function destroy($id)
    {
        $size = Size::findOrFail($id);
        $size->delete();

        return redirect()->route('admin.sizes.index')->with('alert', 'Xóa Size Thành Công!');
    }
}
