<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Member;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $about=AboutUs::all()->last();
        $members=Member::all();
        return view('site.pages.about_us.about_us')->with('members',$members)->with('about',$about);
    }
}
