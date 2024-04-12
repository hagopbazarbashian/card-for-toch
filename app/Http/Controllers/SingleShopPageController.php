<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newproduct;

class SingleShopPageController extends Controller
{
     public function index($id){
        try {
            $newproduct = newproduct::with('photo')->find($id);
            return view('single-shop-page',compact('newproduct'));
        } catch (\Throwable $th) {
           return redirect()->back()->with('error' , 'Error');
        }

     }
}
