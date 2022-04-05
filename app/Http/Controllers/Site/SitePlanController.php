<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\PlanDescription;
use Illuminate\Http\Request;

class SitePlanController extends Controller
{
    public function index()
    {
        $desc=PlanDescription::all()->last();
        $packages=Plan::all();
       return view('site.pages.plan.plan')->with('desc',$desc)->with('packages',$packages);
    }
}
