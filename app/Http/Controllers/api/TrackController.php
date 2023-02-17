<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackController extends Controller
{
    public function track(Request $req)
    {
        $search_value = $req->item;
        $result = DB::table('orders')->where('sender_contact', $search_value)->join('order_statuses', 'orders.id', '=', 'order_statuses.id')->select('orders.*', 'order_statuses.status')->get();
        return $result;
    }
}
