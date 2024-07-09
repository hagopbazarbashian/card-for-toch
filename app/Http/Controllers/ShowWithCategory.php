<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newproduct;

class ShowWithCategory extends Controller
{
    public function index($id){
        try {
            $newproduc_with_categorys = newproduct::where('category_id',$id)->get();
            return view('show-with-category',compact('newproduc_with_categorys'));
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }
}
