<?php

namespace App\Http\Controllers;

use App\MyCommentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{
    public function createComment(Request $request)
    {
        $mycomment=new MyCommentModel;
        $mycomment->subject=$request->input('subject');
        $mycomment->content=$request->input('content');
        $mycomment->author=$request->input('author');
        $mycomment->date=$request->input('date');
        $mycomment->user_id=$request->input('user_id');
        $mycomment->save();
        return response()->json($mycomment);
    }


    public function show(){
    $comments=MyCommentModel::all();
    return response()->json($comments);
    }

    public function daylycomments(){
        $sql='SELECT date, COUNT(date) occurrences FROM comments GROUP BY date';
        $comments=DB::select($sql);
        return response()->json($comments);
    }


}
