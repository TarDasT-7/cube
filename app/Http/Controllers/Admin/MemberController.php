<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members=Member::all();
        return view('admin.pages.member.indexmember')->with('members',$members);
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
            'name'=> "required|max:255",
            'specialty'=> "required|max:255",
            'position'=> "required|max:255",
        ]);
        $member=new Member();
        $member->name=$request->input('name');
        $member->specialty=$request->input('specialty');
        $member->position=$request->input('position');
        $member->save();
        $members=Member::all();
        session()->flash('add','عضو تیم با موفقیت معرفی شد');
        return redirect('admin/member')->with('members',$members);
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
        $member=Member::find($id);
        return view('admin.pages.member.editmember')->with('member',$member);
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
            'name'=> "required|max:255",
            'specialty'=> "required|max:255",
            'position'=> "required|max:255",
        ]);
        $member=Member::find($id);
        $member->name=$request->input('name');
        $member->specialty=$request->input('specialty');
        $member->position=$request->input('position');
        $member->save();
        $members=Member::all();
        session()->flash('delete','مشخصات عضو تیم با موفقیت به روزرسانی شد');
        return redirect('admin/member')->with('members',$members);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member=Member::find($id);
        $member->delete();
        $members=Member::all();
        session()->flash('delete','عضو تیم با موفقیت حذف شد');
        return redirect('admin/member')->with('members',$members);
    }
}
