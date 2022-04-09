<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FreeVideo;
use App\Models\FreevideoQuestion;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions=faq::all();
        return view('admin.pages.cubeTeam.faq.index')->with('questions',$questions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::where('related' , 'سوالات')->get();
        $rel = 'create';
        return view('admin.pages.cubeTeam.faq.createOrUpdate' , compact(['rel' , 'categories']));
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
            'description'=> "required|max:5000",
            'position'=> "required|max:50",
            'category'=> "required",
            'items.*'=> "",
        ]);

        $faq = new Faq();
        $faq->position=$request->position;
        $faq->title=$request->title;
        $faq->text=$request->description;
        $faq->category_id=$request->category;
        $faq->save();
        switch ($request->position) {
            case 'fre':
                foreach ($request->items as $key => $item) {
                    $vq=new FreevideoQuestion();
                    $vq->question_id=$faq->id;
                    $vq->video_id=$item;
                    $vq->save();;
                }
                break;
        
        }

        session()->flash('add','سوال و جواب با موفقیت اضافه شد');
        return redirect()->route('question.index');
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
        $question=Faq::find($id);
        $categories=Category::where('related' , 'سوالات')->get();
        $rel = 'update';
        return view('admin.pages.cubeTeam.faq.createOrUpdate' , compact(['question' , 'rel' , 'categories']));
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
            'description'=> "required|max:5000",
            'category'=> "required",
        ]);

        $faq =Faq::find($id);
        $faq->title=$request->title;
        $faq->text=$request->description;
        $faq->category_id=$request->category;
        $faq->save();

        session()->flash('add','سوال و جواب با موفقیت ویرایش شد');
        return redirect()->route('question.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question=Faq::find($id);
        switch ($question->position) {
            case 'fre':
                $items=FreevideoQuestion::where('question_id' , $id)->get();
                foreach ($items as $key => $item) {
                    $item->delete();
                }
                break;
            
            default:
                # code...
                break;
        }
        $question->delete();

        session()->flash('delete','سوال و جواب با موفقیت حذف شد');
        return redirect()->route('question.index');
    }


    public function position(Request $request)
    {
        switch ($request->position) {
            case 'fre':

                $items=FreeVideo::all();

                break;
            
            default:
                $items=null;
                break;
        }

        return $items;
    }
}
