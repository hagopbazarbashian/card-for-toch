<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shopslider;
use App\Models\newproduct;
use App\Models\shopcard;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


class ShopPageController extends Controller
{
     public function index()
    {
        try {
           if (!Session::has('locale')) {
                App::setLocale('en');
            }
            $newproducts = newproduct::get();
            return view('shop-page', compact('newproducts'));
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    public function setLanguage($lang)
    {
        $languages = ['en', 'hy', 'ru']; // Supported languages
        if (in_array($lang, $languages)) {
            Session::put('locale', $lang);
            App::setLocale($lang);
        }

        return redirect()->back();
    }

}
