<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = StudentModel::all();
        return $student;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new StudentModel();
        $student->username = $request->username;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->image = $request->image;
        $student->certificate = $request->certificate;
        $student->age = $request->age;
        $student->today_date = $request->today_date;
        $student->date = $request->date;
        $student->city = $request->city;
        $student->state = $request->state;
        $student->serial = $request->serial;
        $student->topper = $request->topper;
        $student->completed = $request->completed;
        $student->status = $request->status;
        $result = $student->save();
        if ($result == 1) {
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
        $student = StudentModel::find($id);
        return $student;
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
        $student = StudentModel::find($id);
        $student->username = $request->username;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->image = $request->image;
        $student->certificate = $request->certificate;
        $student->age = $request->age;
        $student->today_date = $request->today_date;
        $student->date = $request->date;
        $student->city = $request->city;
        $student->state = $request->state;
        $student->serial = $request->serial;
        $student->topper = $request->topper;
        $student->completed = $request->completed;
        $student->status = $request->status;
        $student->save();
        if ($student == true) {
            return $student;
        } else {
            return 'data is not updated';
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
        $student = StudentModel::find($id)->delete();
        if ($student == 1) {
            return 'DATA IS DELETED';
        } else {
            return 'DATA IS NOT DELETED';
        }
    }
}
