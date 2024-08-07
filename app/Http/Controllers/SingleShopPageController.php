<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{newproduct,checkout,additionalphoto};

class SingleShopPageController extends Controller
{
     public function index($id){
        try {

            $newproductalls = newproduct::find($id);

            $additinelphotos = additionalphoto::where('new_product_id', $newproductalls->id)->get();

            $newproductallsall = newproduct::get();
            
            return view('single-shop-page',compact('newproductalls','newproductallsall','additinelphotos'));

        } catch (\Throwable $th) {
           return redirect()->back()->with('error' , 'Error');
        }

     }


     public function quantityprocesssyatemstore(Request $request){
        $checkout = checkout::where('newproduct_id' ,$request->myproductid)->first();

        if ($checkout) {
            $total = $checkout->fixprice * $request->formData;

            $checkout->update([
                'quantity' => $request->formData,
                'price' => $total
            ]);

            // Return the updated quantity and price
            return response()->json([
                'quantity' => $checkout->quantity,
                'price' => $checkout->price,
                'symbole'=>$checkout->symbole
            ]);
        } else {
            // Handle the case where no checkout entry is found
            return response()->json(['error' => 'Checkout entry not found'], 404);
        }



     }
}
