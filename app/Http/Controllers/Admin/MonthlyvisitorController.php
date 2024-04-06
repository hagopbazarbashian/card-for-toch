<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\visitor;
use App\Models\cardform;
use DB;
 
class MonthlyvisitorController extends Controller
{
     public function index(){

        // Get monthly statistics
        $monthlyStatistics = visitor::select(
            DB::raw('YEAR(visited_at) as year'),
            DB::raw('MONTH(visited_at) as month'),
            DB::raw('COUNT(*) as visitor_count')
        )
        ->groupBy('year', 'month')
        ->orderBy('year', 'desc')
        ->orderBy('month', 'desc')
        ->get();

        // Load the monthly statistics view
        return view('admin.monthly_statistics.index', compact('monthlyStatistics'));

     }

     public function activ(){
        $cardforms = Cardform::with('socelmedia', 'user')
        ->whereNotNull('photo')  // Add this line to filter records with non-null photos
        ->orderBy('created_at', 'desc')
        ->get();
        return view('admin.monthly_statistics.activ-card',compact('cardforms'));
     }
}
  