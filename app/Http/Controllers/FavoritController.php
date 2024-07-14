<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; 
use App\Models\favorit;
class FavoritController extends Controller   
{   
    public function storefavorit($id){
        try {

            $userSession = Session::getId();

            $favorit = favorit::create([
                'user_sessian' => $userSession ?? '',
                'product_id' => $id,
            ]);
        
            return redirect()->back()->with('succes', 'Successfully created your favorite list');
        } catch (\Throwable $th) {
            throw $th;
        }

        
    }


    public function listfavorit($id){
       $favorits = favorit::where('user_sessian' , $id)->with('newproduct')->get();
       dd($favorits);
    }
    
}
