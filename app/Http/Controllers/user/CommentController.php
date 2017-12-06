<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;


class CommentController extends Controller
{
    
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->user_id = \Auth::user()->id;
        $comment->delivery_id = $request->delivery;
        $comment->comment     = $request->comment;
        $comment->score       = $request->score;
        $comment->save();
        return back();
    }

}
