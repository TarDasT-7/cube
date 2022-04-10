<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Contact_Us;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact=Contact_Us::all()->last();
        if(!is_null($contact))
        {
            $rel = 'update';

        }else
        {
            $rel = 'create';
        }
        return view('admin.pages.cubeTeam.contactUs.createOrUpdate',compact(['contact' , 'rel']));
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
            'title'=> "required|max:250",
            'address'=> "required|max:1000",
            'location'=> "required",
            'facebook'=> "max:250",
            'linkedin'=> "max:250",
            'instagram'=> "max:250",
            'telegram'=> "max:250",
            'phone'=> "required|numeric",
            'email'=> "required|email",
        ]);
        $contact=new Contact_Us();
        $contact->title=$request->input('title');
        $contact->phone=$request->input('phone');
        $contact->address=$request->input('address');
        $contact->email=$request->input('email');
        $contact->location=$request->input('location');
        $contact->facebook=$request->input('facebook');
        $contact->linkedin=$request->input('linkedin');
        $contact->instagram=$request->input('instagram');
        $contact->telegram=$request->input('telegram');
        $contact->save();
        session()->flash('add',' ارتباط با ما با موفقیت ایجاد شد');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        $request->validate([
            'title'=> "required|max:250",
            'address'=> "required|max:1000",
            'location'=> "required",
            'facebook'=> "max:250",
            'linkedin'=> "max:250",
            'instagram'=> "max:250",
            'telegram'=> "max:250",
            'phone'=> "required|numeric",
            'email'=> "required|email",
        ]);

        $contact=Contact_Us::find($id);
        $contact->title=$request->input('title');
        $contact->phone=$request->input('phone');
        $contact->address=$request->input('address');
        $contact->email=$request->input('email');
        $contact->location=$request->input('location');
        $contact->facebook=$request->input('facebook');
        $contact->linkedin=$request->input('linkedin');
        $contact->instagram=$request->input('instagram');
        $contact->telegram=$request->input('telegram');
        $contact->save();
        session()->flash('add',' ارتباط با ما با موفقیت ویرایش شد');
        return redirect()->back();
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
