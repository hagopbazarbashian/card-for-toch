<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newproduct;
use App\Models\checkout;
use App\Models\photo;

class SingleShopPageController extends Controller
{
     public function index($id){
        try {
            $newproduct = newproduct::with('photo')->findOrFail($id);
            $newproductalls = newproduct::with('photo')->get();
            $checkout = checkout::where('newproduct_id' ,$id)->first();

            if($checkout){

            }else{
                $checkout = checkout::create([
                    'newproduct_id'=>$id,
                    'quantity'=>'1',
                    'fixprice'=>$newproduct->discount ? $newproduct->price - $newproduct->discount : $newproduct->price,
                    'price'=>$newproduct->discount ? $newproduct->price - $newproduct->discount : $newproduct->price,
                    'symbole'=>$newproduct->symbole
                ]);
            }

            return view('single-shop-page',compact('newproduct','newproductalls' ,'checkout'));
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
