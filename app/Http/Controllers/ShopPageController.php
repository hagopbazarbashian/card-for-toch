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
        try {
            $userSession = Session::getId();
            $shopcards = shopcard::where('user_session', $userSession)->orderBy('created_at', 'desc')->get();
            $total = 0;
            foreach ($shopcards as $shopcard) {
                $total += $shopcard->price;
            }
            $shopcardscount = shopcard::where('user_session', $userSession)->count();  
            $shopsliders = shopslider::orderBy('created_at', 'desc')->get();
            $newproducts = newproduct::with('photo')->orderBy('created_at', 'desc')->get();
            // Zoom
            $newproductszoom1 = newproduct::with('photo')->orderBy('created_at', 'desc')->first();
            $newproductszoom2 = newproduct::with('photo')->orderBy('created_at', 'desc')->skip(1)->first();
            $newproductszoom3 = newproduct::with('photo')->orderBy('created_at', 'desc')->skip(2)->first();
            return view('shop-page' ,compact('shopsliders',
            'newproducts',
            'shopcards',
            'shopcardscount',
            'total',
            'newproductszoom1',
            'newproductszoom2',
            'newproductszoom3'
        ));

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }

    }

}
