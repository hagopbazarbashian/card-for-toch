<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\contact;
use App\Models\send_mail_to_user;
use App\Mail\forfreetest;     
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Models\visitor;

class AdminHomeController extends Controller
{
    public function index(Request $request){
        // $visitors = visitor::count();
        return view('admin.home');
    } 
}
