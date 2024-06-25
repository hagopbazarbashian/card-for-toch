<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newproduct;

class ShopInfoController extends Controller
{
     public function index($id){
         try {
             $newproduct = newproduct::find($id);
             $total = $newproduct->price + $newproduct->fee;
             return view('checkout' , compact('newproduct','total'));
         } catch (\Throwable $th) {
            throw $th;
         }
     }
}
  