<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = CategoryModel::all();
        return $category;
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
        $category = new CategoryModel();
        $category->name = $request->name;
        $category->is_sub = $request->is_sub;
        $category->image = $request->image;
        $category->status = $request->status;
        $result = $category->save();
        if ($result == 1) {
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
        $category = CategoryModel::find($id);
        return $category;
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
        $category = CategoryModel::find($id);
        $category->name = $request->name;
        $category->is_sub = $request->is_sub;
        $category->image = $request->image;
        $category->status = $request->status;
        $result = $category->save();
        if ($result == 1) {
            return $category;
        } else {
            return 'DATA IS NOT INSERTED';
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
        $category = CategoryModel::find($id)->delete();
        if ($category == true) {
            return 'DATA IS DELETED';
        } else {
            return 'DATA IS NOT DELETED';
        }
    }
}
