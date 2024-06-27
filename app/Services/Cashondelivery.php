<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\{checkout , bonus , newproduct};

class Cashondelivery
{
    public static function cashondelivery(Request $request ,$checkout)
    {     
        try {
            $checkouts = checkout::with('newproduct')->find($checkout->id);
            $total = $checkouts->price + $checkouts->fee;
            return  view('order-summary' ,compact('checkout','total'));
        } catch (\Throwable $th) {
            throw $th;
        }
          
    }
}       