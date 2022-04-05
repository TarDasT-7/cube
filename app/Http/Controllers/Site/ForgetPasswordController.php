<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\ForgetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Trez\RayganSms\Facades\RayganSms;

class ForgetPasswordController extends Controller
{
    public function index()
    {
        return view('auth.forget_password.forget_password_phone');
    }


    public function phone(Request $request)
    {
        $pass=new ForgetPassword();
        $pass->phone=$request->input('phone');
        $users=User::all();
        foreach ($users as $user) {
            if ($user->phone == $pass->phone) {
                $token = rand(100000, 999999);
                RayganSms::sendMessage($pass->phone, 'کاربر گرامی شما میتوانید با کد زیر رمز عبور خود را بازیابی کنید ' . $token);
                $pass->token = $token;
                $pass->save();
                return view('auth.forget_password.forget_password_token')->with('pass', $pass);
            }
        } session()->flash('error', 'کاربری با این شماره تلفن یافت نشد');
        return redirect('forget_password');
    }

    public function token(Request $request)
    {

      $pass=ForgetPassword::all()->last();
      if ($pass->token==$request->input('token')){
          return view('auth.forget_password.forget_password_edit')->with('pass',$pass);
      }else{
          session()->flash('token','کد وارد شده با کد ارسالی مطابقت ندارد');
          return view('auth.forget_password.forget_password_token');
      }

    }

    public function edit()
    {
        return view('auth.forget_password.forget_password_edit');
    }

    public function pass(Request $request)
    {
        $phone=$request->input('pass');
        $users=User::all()->where('phone',$phone);
        if ($request->input('password')==$request->input('password_confirmation')) {
            foreach ($users as $user) {
                $user->password = Hash::make($request->input('password'));
                $user->save();
                return view('auth.register');
            }
        }else{
            session()->flash('pass','پسوورد های وارد شده با یکدیگز مطابقت ندارند');
            return view('auth.forget_password.forget_password_edit')->with('pass',$pass);
        }

    }
}
