<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\AdvertisementView;
use Illuminate\Http\Request;

class SiteAdvertisementController extends Controller
{
    public function index()
    {
        $advertisements=Advertisement::all();
        return view('site.pages.advertisement.advertisement')->with('advertisements',$advertisements);
    }

    public function show($id)
    {
        $advertisement=Advertisement::find($id);
        $images=$advertisement->advertisement_images;


        /*checking page views */

        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else
            $ip = $_SERVER['REMOTE_ADDR'];

        $i=0;
        $views=$advertisement->advertisement_views;
        foreach ($views as $view){
            if ($view->Ip==$ip){
                $i++;
            }
        }
        if ($i==0){
            $record=new AdvertisementView();
            $record->advertisement_Id=$id;
            $record->ip=$ip;
            $record->save();
        }
        /*end of checking page views*/

        $advertisements=Advertisement::all();
        return view('site.pages.advertisement.advertisement-det')->with('images',$images)->with('advertisement',$advertisement)->with('advertisements',$advertisements);
    }
}
