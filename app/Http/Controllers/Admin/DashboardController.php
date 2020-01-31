<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $ordersNotification = Order::all()->where('status', 0)->take(5);

        return view('admin.dashboard.dashboard', compact('ordersNotification'));
    }
}
