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
        return view('admin.pages.contactUs.indexcontactus')->with('contact',$contact);
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
            'title'=> "required|max:255",
            'address'=> "required",
            'location'=> "required",
            'facebook'=> "required",
            'linkedin'=> "required",
            'instagram'=> "required",
            'telegram'=> "required",
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
        $contact=Contact_Us::all()->last();
        session()->flash('add','توضیحات ارتباط با ما با موفقیت ایجاد شد');
        return redirect('admin/contactUs')->with('contact',$contact);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comments=Comment::all()->where('category','contact');
        return view('admin.pages.contact_message.contact_message')->with('comments',$comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact=Contact_Us::find($id);
        return view('admin.pages.contactUs.editcontactus')->with('contact',$contact);
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
            'title'=> "required|max:255",
            'address'=> "required",
            'location'=> "required",
            'facebook'=> "required",
            'linkedin'=> "required",
            'instagram'=> "required",
            'telegram'=> "required",
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
        $contact=Contact_Us::all()->last();
        session()->flash('add','توضیحات ارتباط با ما با موفقیت به روزرسانی شد');
        return redirect('admin/contactUs')->with('contact',$contact);
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
