<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use DB;

class OrderController extends Controller
{
    public function index()
    {
        $ordersNotification = Order::all()->where('status', 0)->take(5);
        $orders = Order::all()->where('status', 0);
        return view('admin.orders.index', compact('orders', 'ordersNotification'));
    }

    public function processed()
    {
        $ordersNotification = Order::all()->where('status', 0)->take(5);
        $orders = Order::where('status', 1)->orWhere('status', 2)->get();
        return view('admin.orders.processed', compact('orders', 'ordersNotification'));
    }
    public function show($id)
    {
        $ordersNotification = Order::all()->where('status', 0)->take(5);
        $order = Order::findOrFail($id);
        $orderDetail = OrderDetail::all()->where('order_id', $id);
        $products = Product::all();
        return view('admin.orders.show', compact('order', 'orderDetail', 'products', 'ordersNotification'));
    }

    public function finishOrder($id)
    {
        DB::table('orders')
        ->where('id', $id)
        ->update(['status' => 1]);

        return redirect()->route('admin.orders.index')->with('alert', 'Đã Hoàn Thành Đơn Hàng!');
    }

    public function cancelOrder($id)
    {
        DB::table('orders')
        ->where('id', $id)
        ->update(['status' => 2]);

        return redirect()->route('admin.orders.index')->with('alert', 'Đã Hủy Đơn Hàng!');
    }
}
