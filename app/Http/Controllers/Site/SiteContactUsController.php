<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Contact_Us;
use Illuminate\Http\Request;

class SiteContactUsController extends Controller
{
    public function index()
    {
        $contact=Contact_Us::all()->last();
        return view('site.pages.contact_us.contact_us')->with('contact',$contact);
   }
}
