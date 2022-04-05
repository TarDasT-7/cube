<?php

namespace App\Http\Controllers;

use App\Models\Accounting;
use App\Models\Address;
use App\Models\Course;
use App\Models\Plan;
use App\Models\Province;
use App\Models\City;
use App\Models\SendPrice;
use App\Models\Product;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\Auth;

class AccountingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $provinces=Province::all();

            $account = Accounting::all()->where('user_id', Auth::id())->where('condition', 0);
            $count = count($account);
            $accounts=[];
            $i=0;
            foreach ($account as $acc){
                $accounts[$i]=$acc;
            $i++;
            }

            $price = 0;
            for ($i = 0; $i < $count; $i++) {
                $price += ($accounts[$i]->off_price) * $accounts[$i]->number;
            }

            $send_price = SendPrice::all()->last();
            $final_price = $price + $send_price->price;
            $addresses=Address::all()->where('user_id',Auth::id());
            $accounts = Accounting::all()->where('user_id', Auth::id())->where('condition', 0);
            return view('site.pages.accounting.accounting')->with('provinces',$provinces)->with('addresses',$addresses)->with('final_price', $final_price)->with('accounts', $accounts)->with('price', $price)->with('send_price', $send_price);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $i=0;
        if (Auth::check()){
            if ($request->input('category')=='دوره آموزشی'){
                $data=Course::find($request->input('code'));
                $accounts=Accounting::all()->where('category','دوره آموزشی');
                foreach ($accounts as $acc){
                    if ($data->good_id==$acc->good_id){
                        $i++;
                    }else{

                    }
                }
            }elseif ($request->input('category')=='محصولات'){
                $data=Product::find($request->input('code'));
                $accounts=Accounting::all()->where('category','محصولات');
                foreach ($accounts as $acc){
                    if ($data->good_id==$acc->good_id){
                        $i++;
                    }else{

                    }
                }
            }elseif ($request->input('category')=='پکیج') {
                $data = Plan::find($request->input('code'));
                $accounts = Accounting::all()->where('category', 'پکیج');
                foreach ($accounts as $acc) {
                    $date_f=date_timestamp_get($acc->updated_at);
                    $date_l=date_timestamp_get(now());
                    $pack=Plan::all()->where('good_id', $acc->good_id)->last();
                    $credit=($pack->plan_category_id)*3600*24;
                    $time=$date_l-$date_f;
                    if ($data->good_id == $acc->good_id && $acc->condition == 0) {
                        $i++;
                    }elseif($credit>$time){
                        $i++;
                    }
                    }
                }

            if ($i==0) {
                $account = new Accounting();
                $account->category = $request->input('category');
                $account->image = $data->image;
                if ($request->input('category') == 'دوره آموزشی') {
                    $account->title = $data->title;
                } elseif ($request->input('category') == 'محصولات') {
                    $account->title = $data->name;
                } elseif ($request->input('category') == 'پکیج') {
                    $account->title = $data->title;
                }

                $account->good_id = $data->good_id;
                $account->user_id = Auth::id();
                $account->price = $data->price;
                $account->off_price = $data->off_price;
                $off = $data->price - $data->off_price;
                $account->off = $off;
                $account->condition = 0;
                $account->number = 1;
                $account->save();
                return redirect('account');
            }else{

                if ($request->input('category') == 'دوره آموزشی') {
                    session()->flash('exist','این دوره قبلا توسط شما به سبد خرید اضافه شده یا خریداری شده است یا پکیجی برای شما فعال است');
                    return redirect()->back();
                } elseif ($request->input('category') == 'محصولات') {
                    session()->flash('exist',' این محصول قبلا توسط شما به سبد خرید اضافه شده یا خریداری شده است یا پکیجی برای شما فعال است');
                    return redirect()->back();
                } elseif ($request->input('category') == 'پکیج') {
                    session()->flash('exist','پکیج قبلی خریداری شده توسط شما هنوز اعتبار دارد');
                    return redirect()->back();
                }

            }
        }else {
            session()->flash('limited','برای اضافه کردن کالا به سبد خرید باید ابتدا وارد پنل کاربری خود شوید');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function load()
    {  $account = Accounting::all()->where('user_id', Auth::id())->where('condition', 0);
        $count = count($account);
        $accounts=[];
        $i=0;
        foreach ($account as $acc){
            $accounts[$i]=$acc;
            $i++;
        }

        $price=0;
        for ($i=0; $i<$count; $i++){
            $price+=($accounts[$i]->off_price)*($accounts[$i]->number);
        }

        $send_price = SendPrice::all()->last();
        $final_price=$price+$send_price->price;
       $data=array('finalprice'=>$final_price,'price'=>$price);
        return json_encode($data);
    }



    public function calculation(Request $request)
    {  $account = Accounting::all()->where('user_id', Auth::id())->where('condition', 0);
        $count = count($account);
        $accounts=[];
        $i=0;
        foreach ($account as $acc){
            $accounts[$i]=$acc;
            $i++;
        }
        $price=0;
        $data=str_replace('&','',$request->data);
        $numbers=explode("number=",$data);
        for ($i=0; $i<$count; $i++){
            $price+=($accounts[$i]->off_price)*$numbers[$i+1];
            $accounts[$i]->number=$numbers[$i+1];
            $accounts[$i]->save();
        }
        $send_price = SendPrice::all()->last();;
        $final_price=$price+$send_price->price;
        /*      $addresses=Address::all()->where('user_id',Auth::id());
          $accounts=Accounting::all()->where('user_id', Auth::id())->where('condition', 0);*/
        //return view('site.pages.accounting.accounting')->with('addresses',$addresses)->with('final_price',$final_price)->with('accounts',$accounts)->with('price',$price)->with('send_price',$send_price);
        $data=array('finalprice'=>$final_price,'price'=>$price);
        return json_encode($data);
    }

    public function select(Request $request)
    {
        $cat=$request->data;
        $province=Province::find(1);
        $cities=City::all()->where('province_id', $province->id);

        foreach ($cities as $city){
            $data=array('id'=>$city->id,'name'=>$city->name);
            return json_encode($data);
        }
    }



    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function address(Request $request)
    {

        $address=new Address();
        $address->user_id=Auth::id();
        $address->province=$request->input('province');
        $address->city=$request->input('city');
        $address->name=$request->input('name');
        $address->phone=$request->input('phone');
        $address->address=$request->input('address');
        $address->postal_code=$request->input('postal_code');
        $address->save();
        return redirect('account');
 }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $account=Accounting::find($id);
        $account->delete();
        return redirect('account');

    }
}
