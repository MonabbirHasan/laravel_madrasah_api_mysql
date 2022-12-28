<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ParentModel;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parent = ParentModel::all();
        return $parent;
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
        $parent = new ParentModel();
        $parent->username = $request->username;
        $parent->image = $request->image;
        $parent->nid = $request->nid;
        $parent->now_date = $request->now_date;
        $parent->age = $request->age;
        $parent->city = $request->city;
        $parent->state = $request->state;
        $parent->address = $request->address;
        $parent->profession = $request->profession;
        $parent->phone = $request->phone;
        $parent->email = $request->email;
        $parent->nationality = $request->nationality;
        $parent->student = $request->student;
        $parent->status = $request->status;
        $result = $parent->save();
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
        $parent = ParentModel::find($id);
        return $parent;
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
        $parent = ParentModel::find($id);
        $parent->username = $request->username;
        $parent->image = $request->image;
        $parent->nid = $request->nid;
        $parent->now_date = $request->now_date;
        $parent->age = $request->age;
        $parent->city = $request->city;
        $parent->state = $request->state;
        $parent->address = $request->address;
        $parent->profession = $request->profession;
        $parent->phone = $request->phone;
        $parent->email = $request->email;
        $parent->nationality = $request->nationality;
        $parent->student = $request->student;
        $parent->status = $request->status;
        $result = $parent->save();
        if ($result == 1) {
            return $parent;
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
        $parent = ParentModel::find($id)->delete();
        if ($parent == true) {
            return 'DATA IS DELETED';
        } else {
            return 'DATA IS NOT DELETED';
        }
    }
}
