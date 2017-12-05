<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laracast\Flash\Flash;
use App\Delivery;
use App\Comment;

class CommentAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::orderBy('id','DESC')->paginate();

        $comments->each(function($comments){
            $comments->user;
        });
        return view('admin.comment.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deliveries = Delivery::orderBy('name','ASC')->pluck('name','id');
        return view('admin.comment.create',compact('deliveries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->user_id = \Auth::user()->id;
        $comment->delivery_id = $request->delivery;
        $comment->comment     = $request->comment;
        $comment->score       = $request->score;
        $comment->save();

        flash('Se ha creado el comentario con extito')->success();
        return redirect()->route('comment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::findOrFail($id);
        return view('admin.comment.show','comment');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        $deliveries = Delivery::orderBy('name','ASC')->pluck('name','id');
        return view('admin.comment.edit',compact('comment','deliveries'));
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
        $comment = Comment::findOrFail($id);
        $comment->fill($request->all());
        $comment->save();

        flash('El comentario se ha modificado con exito')->warning();
        return redirect()->route('comment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        flash('El comentario se ha eliminado con exito')->warning();
        return redirect()->route('comment.index');
    }
}
