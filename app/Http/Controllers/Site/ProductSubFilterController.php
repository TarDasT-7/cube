<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductSubCategory;
use Illuminate\Http\Request;

class ProductSubFilterController extends Controller
{
    public function filter(Request $request )
    {
        $i = 0;
        $products = [];

        /* Checking price*/
        if ($request->min_price) {
            $min_price = $request->min_price;
        } else {
            $min_price = 0;
        }

        if ($request->max_price) {
            $max_price = $request->max_price;
        } else {
            $max_price = 10000000;
        }


        /* Checking language*/

        if ($request->language) {
            foreach ($request->language as $language) {
                $languages = Product::all()->where('language', $language)->whereBetween('off_price', [$min_price,$max_price]);
                foreach ($languages as $product) {
                    $products[$i] = $product;
                    $i++;
                }
            }
        }

        /* Checking level*/
        if ($request->level) {
            foreach ($request->level as $level) {
                $levels = Product::all()->where('level', $level)->whereBetween('off_price', [$min_price,$max_price]);
                foreach ($levels as $product) {
                    $products[$i] = $product;
                    $i++;
                }
            }
        }

        /* Checking title*/
        if ($request->title) {
            $count=count($products)-1;
            $products=array_splice($products,0,$count);
            $products=Product::all()->where('title', $request->title);
        }

        /*freshin courses*/
        $count=count($products);
        $x=0; $y=0;
        foreach($products as $first_product) {
            if ($first_product){
                foreach ($products as $sec_product) {
                    if ($sec_product){
                        if ($y != $x && $first_product->id == $sec_product->id) {
                            $products[$y] = null;

                        }
                    }
                    $y++;

                }
            }
            $x++;
        }
        $m=0;
        foreach ($products as$product){
            if (!$product){
                unset($products[$m]);
            }
            $m++;
        }
        return view('site.pages.product.product_sub')->with('products',$products);
    }


}

