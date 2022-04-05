<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Accounting;
use App\Models\Comment;
use App\Models\Plan;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductView;
use App\Models\ProductSubCategory;
use App\Models\ProductVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteProductController extends Controller
{

    public function category($id )
    {
        $category=ProductCategory::find($id);
        return view('site.pages.product.product')->with('category',$category);
    }
    public function sub_category($id )
    {
        $category=ProductSubCategory::find($id);

        return view('site.pages.product.product_sub')->with('category',$category);
    }

    public function show($id)
    {
        $product=Product::find($id);
        $products=Product::all()->where('product_sub_category',$product->product_sub_category);
        $comments=Comment::all()->where('category','product')->where('sub_category', $id);
        $score=0;
        foreach ($comments as $x) {
            $score = +$x->score;
        }


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
        $views=$product->product_views;
        foreach ($views as $view){
            if ($view->Ip==$ip){
                $i++;
            }
        }
        if ($i==0){
            $record=new ProductView();
            $record->product_Id=$id;
            $record->ip=$ip;
            $record->save();
        }
        /*end of checking page views*/

        $i=0;
        if (Auth::check()) {
            $accounts = Accounting::all()->where('user_id', Auth::id())->where('category', 'پکیج')->where('condition', 1);
            foreach ($accounts as $acc) {
                $date_f = date_timestamp_get($acc->updated_at);
                $date_l = date_timestamp_get(now());
                $pack = Plan::all()->where('good_id', $acc->good_id)->last();
                $credit = ($pack->plan_category_id) * 3600 * 24;
                $time = $date_l - $date_f;
                if ($credit > $time) {
                    $i++;
                }
            }


            $account = Accounting::all()->where('user_id', Auth::id())->where('good_id', $product->good_id)->last();
            if ($account){
                if ($account->condition == 1) {
                    $i++;
            }

            }
        }

        $video=ProductVideo::all()->where('product_id',$id)->where('show_id',0)->last();

        return view('site.pages.product.product-det')->with('i',$i)->with('products',$products)->with('score',$score)->with('product',$product)->with('video',$video)->with('comments',$comments);
    }
}
