<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogModel;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = BlogModel::all();
        return $blog;
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
        $blog = new BlogModel();
        $blog->title = $request->title;
        $blog->image = $request->image;
        $blog->categoroy = $request->category;
        $blog->desc = $request->desc;
        $blog->author = $request->author;
        $blog->date = $request->date;
        $blog->like = $request->like;
        $blog->comment = $request->comment;
        $blog->status = $request->status;
        $reuslt = $blog->save();
        if ($reuslt == 1) {
            return 'DATA IS INSERTED';
        } else {
            return 'DATA IS NOT INSERTED';
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
        $blog = BlogModel::find($id);
        return $blog;
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
        $blog = BlogModel::find($id);
        $blog->title = $request->title;
        $blog->image = $request->image;
        $blog->categoroy = $request->category;
        $blog->desc = $request->desc;
        $blog->author = $request->author;
        $blog->date = $request->date;
        $blog->like = $request->like;
        $blog->comment = $request->comment;
        $blog->status = $request->status;
        $reuslt = $blog->save();
        if ($reuslt == 1) {
            return $blog;
        } else {
            return 'DATA IS NOT UPDATED';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = BlogModel::find($id)->delete();
        if ($blog == 1) {
            return 'DATA IS DELETED';
        } else {
            return 'DATA IS NOT DELETED';
        }
    }
}
