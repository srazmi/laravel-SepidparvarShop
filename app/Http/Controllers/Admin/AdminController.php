<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Model\Baskets;
use App\Model\Product;
use App\Model\Factor;
use App\Model\Posts;
use Carbon\Carbon;
use Spatie\Analytics\Period;
use Analytics;
use App\Libraries\GoogleAnalytics;

class AdminController extends Controller
{
    public function dashboard2()
    {
        $products = Product::all();
        $baskets = Baskets::orderBy('created_at', 'DESC')
                        ->where('created_at', '>=', Carbon::now()->subMonth())
                        ->get();
                        // dd($baskets);
        $factors = Factor::all();
        $recentfactor = Factor::where('factorstate_id', '=', 2)->get();

        $startDate = Carbon::now()->subYear();
        $endDate = Carbon::now();
        //$data = GoogleAnalytics::visitors_and_pageviews();
        //dd($data);exit;
        $analyticsData_one = Analytics::fetchVisitorsAndPageViews(Period::create($startDate, $endDate));
        $dates = $analyticsData_one->pluck('date');
        $visitors = $analyticsData_one->pluck('visitors');
        $pageViews= $analyticsData_one->pluck('pageViews');

        $analyticsData = Analytics::fetchMostVisitedPages(Period::create($startDate, $endDate), 7);
        $url = $analyticsData->pluck('url');
        $pageViews2 = $analyticsData->pluck('pageViews');
        
        
        return view ("layouts.Admin.partials.dashboard2",compact('baskets','products','recentfactor','factors','analyticsData'));   
    }

    public function dashboard3()
    {
        return view ("layouts.Admin.partials.dashboard3");   
    }
}
