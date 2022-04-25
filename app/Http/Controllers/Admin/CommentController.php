<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use App\Models\CommentCourse;
use App\Models\CommentPodcast;
use App\Models\CommentBlog;
use App\Models\CommentFreevideo;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Comment::all();
        return view('admin.pages.cubeTeam.messages.comments')->with('messages',$messages);
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

            'email'=>'required|max:250|email',
            'name'=>'required|max:250',
            'text'=>'required|min:2|max:5000',
            'user'=>'',
            'location'=>'required|max:250',
            'rel_id'=>'required',

        ]);
        $success2=null;
        $comment = new Comment();
        $comment->user_id =$request->user ;
        $comment->email=$request->email;
        $comment->name = $request->name;
        $comment->text=$request->text;
        $success1=$comment->save();
        switch ($request->location) {
            case 'course':
                $rel = new CommentCourse();
                $rel->comment_id = $comment->id;
                $rel->course_id = $request->rel_id;
                $success2=$rel->save();

                break;

            case 'podcast':
                $rel = new CommentPodcast();
                $rel->comment_id = $comment->id;
                $rel->part_id = $request->rel_id;
                $success2=$rel->save();

                break;

            case 'blog':
                $rel = new CommentBlog();
                $rel->comment_id = $comment->id;
                $rel->blog_id = $request->rel_id;
                $success2=$rel->save();

                break;

            case 'free':
                $rel = new CommentFreevideo();
                $rel->comment_id = $comment->id;
                $rel->freevideo_id = $request->rel_id;
                $success2=$rel->save();

                break;
        }
        if($success1 && !is_null($success2))
        {
            return 0;
        }else
        {
            return 1;
        }

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
        //
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
        // dd( $request->all() , $id);

        switch ($request->action) {
            case 'rm':
                $comment = Comment::find($id);
                if($comment->courses && count($comment->courses) > 0)
                {
                    $rel = CommentCourse::where('comment_id' , $id)->get()->first()->delete();
                }
                if($comment->podcasts && count($comment->podcasts) > 0)
                {
                    $rel = CommentPodcast::where('comment_id' , $id)->get()->first()->delete();
                }
                if($comment->blogs && count($comment->blogs) > 0)
                {
                    $rel = CommentBlog::where('comment_id' , $id)->get()->first()->delete();
                }
                $comment->delete();
                session()->flash('add',' کامنت حذف شد');
                break;
            
            case 'acc':
                $comment = Comment::find($id);
                $comment->status = 1;
                $comment->save();
                session()->flash('add',' کامنت تایید شد');
                break;
        }

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
        dd(0);
    }
}
