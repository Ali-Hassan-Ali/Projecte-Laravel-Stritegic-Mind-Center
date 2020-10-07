<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index()
    {
//        $comments = Comment::all();
//        return view('pages.classroom',compact('comments'));
    }/*end of index*/


    public function create()
    {
        //
    }/*end of create*/


    public function store(Request $request)
    {
//        dd($request->all());
        $comments = Comment::create($request->all());
        //        return redirect()->route('pages.classroom')
        return response()->json($comments);

    }/*end of store*/


    public function show(Comment $comment)
    {
        //
    }/*end of show*/


    public function edit(Comment $comment)
    {
        //
    }/*end of edit*/


    public function update(Request $request, Comment $comment)
    {
        //
    }/*end of update*/


    public function destroy(Comment $comment)
    {
        //
    }/*end of destroy*/

}//end of Controller
