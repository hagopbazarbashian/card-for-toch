<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newproduct;

class ViewAllProductController extends Controller 
{
     public function index(){
        $newproducts = newproduct::with('photo')->get();
        return view('view-all-product',compact('newproducts'));
     }
}
