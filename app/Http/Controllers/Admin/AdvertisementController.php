<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertisements=Advertisement::all();
        return view('admin.pages.advertisement.indexadvertisement')->with('advertisements',$advertisements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.pages.advertisement.createadvertisement');
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
            'client'=> "required|max:255",
            'category'=> "required",
            'desc'=> "required",
            'image'=> "required| dimensions:max_width=1050,max_height=1450,min_width=950,min_height=1350",
            'file'=> "required| size:100000",
        ]);
        $advertisement=new Advertisement();
        $advertisement->title=$request->input('title');
        $advertisement->category=$request->input('category');
        $advertisement->desc=$request->input('desc');
        $advertisement->client=$request->input('client');
        if($file=$request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images/advertisement', $name);
            $advertisement->image = $name;
        }
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = time() .$file->getClientOriginalName();
            $file->move('files/advertisement', $filename);
            $advertisement->video=$filename;
        }
        $advertisement->save();
        $advertisements=Advertisement::all();
        session()->flash('add','محتوا با موفقیت معرفی شد');
        return redirect('admin/advertisement')->with('advertisements',$advertisements);

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
        $advertisement=Advertisement::find($id);
        return view('admin.pages.advertisement.editadvertisement')->with('advertisement',$advertisement);
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
            'client'=> "required|max:255",
            'category'=> "required",
            'desc'=> "required",

        ]);
        $advertisement = Advertisement::find($id);
        $advertisement->title = $request->input('title');
        $advertisement->category = $request->input('category');
        $advertisement->desc = $request->input('desc');
        $advertisement->client = $request->input('client');
        if ($file = $request->file('image')) {
            $request->validate([
                'image'=> "required| dimensions:max_width=1050,max_height=1450,min_width=950,min_height=1350",
            ]);
            $name = time() . $file->getClientOriginalName();
            $file->move('images/advertisement', $name);
            $advertisement->image = $name;
        }
        if ($request->file('file')) {
            $request->validate([
                'file'=> "required| size:100000",
            ]);
            $file = $request->file('file');
            $filename = time() . $file->getClientOriginalName();
            $file->move('files/advertisement', $filename);
            $advertisement->video = $filename;
        }
        $advertisement->save();
        $advertisements=Advertisement::all();
        session()->flash('update','محتوا با موفقیت به روزرسانی شد');
        return redirect('admin/advertisement')->with('advertisements',$advertisements);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advertisement = Advertisement::find($id);
        $advertisement->delete();
        $advertisements=Advertisement::all();
        session()->flash('delete','محتوا با موفقیت حذف شد');
        return redirect('admin/advertisement')->with('advertisements',$advertisements);

    }
}
