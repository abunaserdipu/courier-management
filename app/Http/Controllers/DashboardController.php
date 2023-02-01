<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $order_total = Order::get()->count();
        $pending_order = $actions = DB::table('orders')->select('order_status')->where('order_status', 1)->get()->count();
        $amount = DB::table('orders')->sum('orders.order_price');
        return view('dashboard', compact('order_total', 'amount', 'pending_order'));
    }
}
