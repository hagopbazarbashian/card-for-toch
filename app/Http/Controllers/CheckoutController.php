<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChekoutRequest;
use App\Models\{checkout , bonus , newproduct};
USE App\Services\{IdramServic , Directbanktransfer , Cashondelivery};

class CheckoutController extends Controller
{
     public function startprocess(ChekoutRequest  $request){

        $userId = session('user_id');
        $newproduct = newproduct::where('id', $request->id)->first();

        if (!$newproduct) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $checkout = checkout::create([
            'user_session'=>$userId,
            'newproduct_id' => $request->id,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'company' => $request->company,
            'city' => $request->city,
            'phonenumber' => $request->phonenumber,
            'email' => $request->email,
            'additionalinformation' => $request->additionalinformation,
            'quantity' => '1',
            'price' => $newproduct->price,
            'fee' => $newproduct->fee,
            'symbole' => $newproduct->symbole,
            'pay_type' => $request->pay_type,
        ]);

        if (isset($request->coupon_number)) {
            
            $bonus = bonus::where('number', $request->coupon_number)->first();

            $checkouts = checkout::pluck('coupon_number')->toArray();

            if ($bonus) {

                if (in_array($request->coupon_number, $checkouts)) {
                    return redirect()->back()->with('error', 'Coupon has already been used.');
                }

                $rateproces = ((float)$checkout->price * (float)$bonus->rate) / 100;
                
                $checkout->update([
                    'coupon_number' => $request->coupon_number,
                    'coupon_rate' => $bonus->rate,
                    'price'=>$rateproces
                ]);

                return redirect()->back()->with('success', 'Coupon applied successfully!');
            } else {
                return redirect()->back()->with('error', 'Invalid coupon number.');
            }
        }
        
        //Idram system servic
        if($checkout->pay_type == 'idram'){
             return $idramservic = IdramServic::idram($request);
        }

        //Directbank Transfer system servic
        if($checkout->pay_type == 'bank_transfer'){
            return $idramservic = Directbanktransfer::banktransfer($request);
        }

        //Cashon Delivery system servic
        if($checkout->pay_type == 'cash_on_delivery'){
            return $idramservic = Cashondelivery::cashondelivery($request);
        }

        return redirect()->back()->with('success', 'Order placed successfully!');

     }
}
  