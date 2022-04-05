<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SendPrice;
use Illuminate\Http\Request;

class SendPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $price=SendPrice::all()->last();
        return view('admin.pages.accounting.indexsend_price')->with('price',$price);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'price'=> "required|max:255",
        ]);
        $price = new SendPrice();
        $price->price = $request->input('price');
        $price->save();


        $price=SendPrice::all()->last();
        session()->flash('add','دسته بندی با موفقیت معرفی شد');
        return redirect('admin/send_price')->with('price',$price);

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
        $price=SendPrice::find($id);
        return view('admin.pages.accounting.editsend_price')->with('price',$price);
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
            'price'=> "required|max:255",
        ]);
        $price = SendPrice::find($id);
        $price->price = $request->input('price');
        $price->save();
        $price=SendPrice::all()->last();
        session()->flash('add','دسته بندی با موفقیت معرفی شد');
        return redirect('admin/send_price')->with('price',$price);

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
