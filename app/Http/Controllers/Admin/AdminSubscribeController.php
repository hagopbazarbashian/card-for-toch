<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subscribe;

class AdminSubscribeController extends Controller
{
    public function index(){
        $subscribes = subscribe::orderBy('created_at', 'desc')->get();
        return view('admin.user.subscribe',compact('subscribes'));
     }
}
