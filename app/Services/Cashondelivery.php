<?php

namespace App\Services;
use Illuminate\Http\Request;

class Cashondelivery
{
    public static function cashondelivery(Request $request)
    {
          return redirect()->back()->with('success', 'Successfully registered your order!');
    }
}    