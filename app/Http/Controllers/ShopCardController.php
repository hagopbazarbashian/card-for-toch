<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\shopcard;


class ShopCardController extends Controller
{
     public function addToCart(Request $request){
        // dd($request->title);
        $userSession = Session::getId();

        // Check if the item already exists in the cart for the current user session
        $existingItem = shopcard::where('title', $request->title)->first();

        if ($existingItem) {
            // If the item exists, increment the 'many' field
            $existingItem->increment('many');
            $existingItem->price = $existingItem->price + $existingItem->fix_price;
            $existingItem->save();
        } else {
            // If the item does not exist, create a new item in the cart
            $shopcard = shopcard::create([
                'user_session' => $userSession,
                'title' => $request->title,
                'photo' => $request->photo,
                'price' => $request->price,
                'fix_price'=>$request->price,
                'many' => 1,  // Initial 'many' value
            ]);
        }


     }

     public function updatepricecard(Request $request){

        $shopcard = shopcard::where('id' , $request->productId)->first();
        $shopcard->update([
            'many'=>$request->newQuantity
        ]);

        session_start();

        $fixPrice = $shopcard->fix_price;

        // Get the previous value from the session or set a default value
        $previousMany = isset($_SESSION['previous_many']) ? $_SESSION['previous_many'] : $shopcard->many;

        if ($shopcard->many > $previousMany) {
            // Increase the price when the quantity is greater than the previous value
            $shopcard->update([
                'price' => $shopcard->price + $fixPrice
            ]);
        } elseif ($shopcard->many < $previousMany) {
            // Decrease the price when the quantity is less than the previous value
            $shopcard->update([
                'price' => $shopcard->price - $fixPrice
            ]);
        } else {

        }

        // Update the session with the current value for the next comparison
        $_SESSION['previous_many'] = $shopcard->many;

        // return response()->json(['price' => $shopcard->price]);

     }
}
