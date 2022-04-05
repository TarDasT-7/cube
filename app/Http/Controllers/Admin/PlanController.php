<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\PlanCategory;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans=Plan::all();
        return view('admin.pages.plan.indexplan')->with('plans', $plans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.pages.plan.createplan');
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
            'price'=> "required|numeric",
            'good_id'=> "required|numeric",
            'off_price'=> "required|numeric",
            'category'=> "required",
            'detail'=> "required",
        ]);
        $plan=new Plan();
        $plan->title=$request->input('title');
        $plan->price=$request->input('price');
        $plan->good_id=$request->input('good_id');
        $plan->off_price=$request->input('off_price');
        $plan->plan_category_id=$request->input('category');
        $plan->detail=$request->input('detail');
        $plan->image='plan.jpg';
        $plan->save();
        $plans=Plan::all();
        session()->flash('add','پکیج با موفقیت معرفی شد');
        return redirect('admin/plan')->with('plans', $plans);
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
        $plan=Plan::find($id);

        $categories=PlanCategory::all();
        return view('admin.pages.plan.editplan')->with('categories', $categories)->with('plan',$plan);
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
            'price'=> "required|numeric",
            'good_id'=> "required|numeric",
            'off_price'=> "required|numeric",
            'category'=> "required",
            'detail'=> "required",
        ]);
        $plan=Plan::find($id);
        $plan->title=$request->input('title');
        $plan->price=$request->input('price');
        $plan->good_id=$request->input('good_id');
        $plan->off_price=$request->input('off_price');
        if ($request->input('category')) {
            $plan->plan_category_id = $request->input('category');
        }
        $plan->detail=$request->input('detail');
        $plan->image='plan.jpg';
        $plan->save();
        $plans=Plan::all();
        session()->flash('update','پکیج با موفقیت به روزرسانی شد');
        return redirect('admin/plan')->with('plans', $plans);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan=Plan::find($id);
        $plan->delete();
        $plans=Plan::all();
        session()->flash('delete','پکیج با موفقیت حذف شد');
        return redirect('admin/plan')->with('plans', $plans);
    }
}
