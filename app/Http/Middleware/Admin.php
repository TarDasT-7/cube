<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()){
            if (Auth::user()->admin()){
                return $next($request);
            }
        }
        $user=null;
        if(Auth::check()){
            $user=Auth::user();
        }
        return redirect("/")->with('user',$user);
    }
}
