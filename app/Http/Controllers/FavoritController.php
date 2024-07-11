<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; 

class FavoritController extends Controller
{   
    public function storefavorit($id){
        try {

            $userSession = Session::getId();

            $favorit = Favorit::create([
                'user_sessian' => $userSession ?? '',
                'product_id' => $id,
            ]);
        
            return redirect()->back()->with('success', 'Successfully created your favorite list');
        } catch (\Throwable $th) {
            throw $th;
        }

        
    }
    
}
