<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function track(Request $req)
    {
        $result = $req->all();
        return $result;
    }
}
