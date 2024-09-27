<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
     public function index(){
        return view('register');
     }

     public function setLanguage($lang)
    {
        $languages = ['en', 'hy', 'ru']; // Supported languages
        if (in_array($lang, $languages)) {
            Session::put('locale', $lang);
            App::setLocale($lang);
        }
    }
}
   