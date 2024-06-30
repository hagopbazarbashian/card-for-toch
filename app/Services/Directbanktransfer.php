<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\{checkout , bonus , newproduct};

class Directbanktransfer 
{
    public static function banktransfer(Request $request ,$checkout)
    {
        try {
            dd('test');
            $checkouts = checkout::with('newproduct')->find($checkout->id);
            $total = $checkouts->price + $checkouts->fee;
            return  view('order-summary-about-banck-trandfer' ,compact('checkout','total'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}    