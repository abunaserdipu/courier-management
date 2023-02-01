<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackController extends Controller
{
    public function index()
    {

        return view('track');
    }

    public function orderTrack()
    {
        $track_system = $_GET['track-system'];
        $track_search = $_GET['track-search'];
        $data = DB::table('orders')->select('receiver_name', 'sender_name', 'order_weight', 'order_status')->where($track_system, $track_search)->orWhere($track_system, $track_search)->get();
    }
}
