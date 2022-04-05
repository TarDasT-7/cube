<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Accounting;
use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteUserController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $name=explode(' ',$user->name);
        $addressses=Address::all()->where('user_id',Auth::id());
        $accounts=Accounting::all()->whereNotIn('category', 'پکیج')->where('condition',1);
        return view('site.pages.profile.indexprofile')->with('addresses',$addressses)->with('user',$user)->with('name',$name)->with('accounts',$accounts);
    }

    public function update(Request $request)
    {
        $user=Auth::user();
        $user->name=$request->input('name');
        $user->birthday=$request->input('birthday');
        if ($request->input('gender')) {
            $user->gender = $request->input('gender');
        }
        $user->id_num=$request->input('id_num');
        $user->phone=$request->input('phone');
        $user->email=$request->input('email');
        $user->save();
        $user=Auth::user();
        return redirect('indexprofile')->with('user',$user);
    }
}
