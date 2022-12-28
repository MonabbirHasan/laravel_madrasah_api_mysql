<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeacherModel;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Teacher = TeacherModel::all();
        return $Teacher;
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
        $Teacher = new TeacherModel();
        $Teacher->username = $request->username;
        $Teacher->image = $request->image;
        $Teacher->email = $request->email;
        $Teacher->phone = $request->phone;
        $Teacher->certificate = $request->certificate;
        $Teacher->age = $request->age;
        $Teacher->gender = $request->gender;
        $Teacher->city = $request->city;
        $Teacher->state = $request->state;
        $Teacher->serial = $request->serial;
        $Teacher->address = $request->address;
        $Teacher->status = $request->status;
        $result = $Teacher->save();
        if ($result == true) {
            return response()->json('DATA IS INSERTED');
        } else {
            return response()->json('DATA IS NOT INSERTED');
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
        $Teacher = TeacherModel::find($id);
        return response()->json($Teacher);
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
        $Teacher = TeacherModel::find($id);
        $Teacher->username = $request->username;
        $Teacher->image = $request->image;
        $Teacher->email = $request->email;
        $Teacher->phone = $request->phone;
        $Teacher->certificate = $request->certificate;
        $Teacher->age = $request->age;
        $Teacher->gender = $request->gender;
        $Teacher->city = $request->city;
        $Teacher->state = $request->state;
        $Teacher->serial = $request->serial;
        $Teacher->address = $request->address;
        $Teacher->status = $request->status;
        $result = $Teacher->save();
        if ($result == 1) {
            return response()->json($Teacher);
        } else {
            return response()->json('DATA IS NOT UPDATED');
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
        $Teacher = TeacherModel::find($id)->delete();

        if ($Teacher == 1) {
            return response()->json('DATA IS DELETED');
        } else {
            return response()->json('DATA IS  NOT DELETED');
        }
    }
}
