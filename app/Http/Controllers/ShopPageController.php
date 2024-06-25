<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shopslider;
use App\Models\newproduct;
use App\Models\shopcard;
use Illuminate\Support\Facades\Session;

class ShopPageController extends Controller
{
     public  function index(){
        // try {

            $newproducts = newproduct::get();
            return view('shop-page' ,compact('newproducts'));

        // } catch (\Exception $e) {
        //     return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        // }

    }

}
