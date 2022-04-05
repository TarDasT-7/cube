<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Promise\all;

class AdminusersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all()->where('role','1');
        $members=User::all();
        return view('admin.pages.adminuser.indexadminuser')->with('users',$users)->with('members',$members);
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
        {
            $user=User::find($request->input('user'));
            $user->role=($request->input('role'));
            $user->save();
            $users=User::all()->where('role',1);
            session()->flash('admin','سمت شخص با موقیت به ادمین ارتقا یافت');
            return redirect('admin/admin')->with('users',$users);


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


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
        $user=User::find($id);
        $user->role=null;
        $user->save();
        $users=User::all()->where('role',1);
        session()->flash('delete','سمت شخص با موقیت به کاربر عادی انتقال یافت');
        return redirect('admin/admin')->with('users',$users);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
