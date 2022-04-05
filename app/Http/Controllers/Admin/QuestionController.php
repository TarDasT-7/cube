<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\QuestionCategory;
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
        $questions=Question::all();
        return view('admin.pages.question.indexquestion')->with('questions',$questions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=QuestionCategory::all();
        return view('admin.pages.question.createquestion')->with('categories',$categories);
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
            'question'=> "required|max:255",
            'name'=> "required|max:255",
            'answer'=> "required|max:255",
            'email'=> "required|email",
            'category'=> "required",


        ]);

        $question = new Question();
        $question->question =$request->input('question');
        $question->name =Auth::user()->name;
        $question->email =Auth::user()->email;
        $question->answer =$request->input('answer');
        $question->question_category_id = $request->input('category');
        $question->save();
        $categories=QuestionCategory::all();
        $questions=Question::all();
        session()->flash('add','سوال و جواب با موفقیت اضافه شد');
        return redirect('question')->with('questions', $questions)->with('categories', $categories);
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
        $categories=QuestionCategory::all();
        $question=Question::find($id);
        return view('admin.pages.question.editquestion')->with('question',$question)->with('categories',$categories);
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
            'question'=> "required|max:255",
            'name'=> "required|max:255",
            'answer'=> "required|max:255",
            'email'=> "required|email",
            'category'=> "required",


        ]);
        $question=Question::find($id);
        $question->question=$request->input('question');
        $question->answer=$request->input('answer');
        $question->question_category_id=$request->input('category');
        $question->save();
        $categories=QuestionCategory::all();
        $questions=Question::all();
        session()->flash('update','سوال و جواب با موفقیت به روزرسانی شد');
        return redirect('question')->with('questions',$questions)->with('categories',$categories);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question=Question::find($id);
        $question->delete();

        $categories=QuestionCategory::all();
        $questions=Question::all();
        session()->flash('delete','سوال و جواب با موفقیت حذف شد');
        return redirect('question')->with('questions',$questions)->with('categories',$categories);
    }
}
