<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
use App\Models\RoleUser;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        $roles=Role::all();
        return view('admin.pages.userManagement.users.index' , compact(['roles','users']));

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
        $request->validate([
            'first_name'=>'required|max:250',
            'last_name'=>'required|max:250',
            'national_code'=>'required|digits:10',
            'phone'=>'required|digits:11',
            'birthday'=>'required|date',
            'gender'=>'required|max:250',
            'email'=>'required|email',
            'password'=>'required|min:8|max:16',
            'image'=>'max:1500',
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->national_code = $request->national_code;
        $user->phone = $request->phone;
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if($file=$request->file('image')) {

            $extension ='.'.$file->extension();
            $path='images/users';
            
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }

            $name ='usr-'. time() . $extension;
            $file->move($path, $name);
            $user->profile_photo_path = $name;

        }

        $user->save();

        session()->flash('add','کاربر با موفقیت ایجاد شد');
        return redirect()->route('user.index');
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
        //
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
        $request->validate([
            'first_name'=>'required|max:250',
            'last_name'=>'required|max:250',
            'national_code'=>'required|digits:10',
            'phone'=>'required|digits:11',
            'birthday'=>'required|date',
            'gender'=>'required|max:250',
            'email'=>'required|email',
            'image'=>'max:1500',
        ]);

        $user =User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->national_code = $request->national_code;
        $user->phone = $request->phone;
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->email = $request->email;

        if($file=$request->file('image')) {

            $rm = 'images/users/'.$user->profile_photo_path;
            File::delete($rm);
            $extension ='.'.$file->extension();
            $path='images/users';
            
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }

            $name ='usr-'. time() . $extension;
            $file->move($path, $name);
            $user->profile_photo_path = $name;

        }

        $user->save();

        session()->flash('add','کاربر با موفقیت ویرایش شد');
        return redirect()->route('user.index');
    }

    public function role(Request $request , $id)
    {
        $request->validate([
            'roles'=>'required',
        ]);


        $roleUser = RoleUser::where('user_id' , $id)->get();
        $rmRole=array();

        if (in_array("0", $request->roles))
        {
            foreach($roleUser as $rm){
                $rm->delete();
            }
                
        }else
        {
            foreach($roleUser as $key=>$ru)
            {
                if (!in_array($ru->id, $request->roles))
                {
                    $ru->delete();
                }else
                {
                    $rmRole[$key] = $ru->id;
                }
            }

            foreach($request->roles as $role)
            {
                if (!in_array($role, $rmRole))
                {
                    $ru=new RoleUser();
                    $ru->user_id = $id;
                    $ru->role_id = $role;
                    $ru->save();
                }
            }
        }

        
        session()->flash('update','کاربر با موفقیت ویرایش شد');
        return redirect()->route('user.index');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =User::find($id);
        $roleUser = RoleUser::where('user_id' , $id)->delete();
        $rm = 'images/users/'.$user->profile_photo_path;
        File::delete($rm);
        $user->delete();

        session()->flash('delete','کاربر با موفقیت حذف شد');
        return redirect()->route('user.index');
    }
}
