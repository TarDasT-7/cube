<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\PlanDescription;
use Illuminate\Http\Request;

class PlanDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $description=PlanDescription::all()->last();;
        return view('admin.pages.plan_description.indexplan_descriotion')->with('description',$description);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $description=new PlanDescription();
        $description->description=$request->input('description');
        $description->save();
        $plans=Plan::all();
        session()->flash('add','توضیحات با موقیت ثبت شد');
        return redirect('admin/plan')->with('plans',$plans);
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

        $description=PlanDescription::find($id);
        return view('admin.pages.plan_description.editplan_descriotion')->with('description',$description);

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
        $description=PlanDescription::find($id);
        $description->description=$request->input('description');
        $description->save();
        $plans=Plan::all();
        session()->flash('update','توضیحات با موقیت به روز رسانی شد');
        return redirect('admin/plan')->with('plans',$plans);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
