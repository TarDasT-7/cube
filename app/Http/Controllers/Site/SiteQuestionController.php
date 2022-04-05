<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteQuestionController extends Controller
{
    public function show()
    {
        $questions=Question::all();
        return view('site.pages.question.question')->with('questions',$questions);
    }
    public function store(Request $request)
    {
        $request->validate([
            'question'=> "required|max:255",
            'name'=> "required|max:255",
            'email'=> "required|email",


        ]);
        $question = new Question();
        $question->question =$request->input('question');
        $question->name =$request->input('name');
        $question->email =$request->input('email');
        $question->save();
        $questions=Question::all();
        return view('site.pages.question.question')->with('questions',$questions);
    }
}
