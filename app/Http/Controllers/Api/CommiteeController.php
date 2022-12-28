<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommiteeModel;

class CommiteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commitee = CommiteeModel::all();
        return $commitee;
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
        $commitee = new CommiteeModel();
        $commitee->username = $request->username;
        $commitee->email = $request->email;
        $commitee->phone = $request->phone;
        $commitee->age = $request->age;
        $commitee->image = $request->image;
        $commitee->nationality = $request->nationality;
        $commitee->address = $request->address;
        $commitee->category = $request->category;
        $commitee->spand_year = $request->spand_year;
        $commitee->date = $request->date;
        $commitee->status = $request->status;
        $commitee->save();
        if ($commitee == true) {
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
        $commitee = CommiteeModel::find($id);
        return $commitee;
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
        $commitee = CommiteeModel::find($id);
        $commitee->username = $request->username;
        $commitee->email = $request->email;
        $commitee->phone = $request->phone;
        $commitee->age = $request->age;
        $commitee->image = $request->image;
        $commitee->nationality = $request->nationality;
        $commitee->address = $request->address;
        $commitee->category = $request->category;
        $commitee->spand_year = $request->spand_year;
        $commitee->date = $request->date;
        $commitee->status = $request->status;
        $commitee->save();
        if ($commitee == true) {
            return $commitee;
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
        $commitee = CommiteeModel::find($id)->delete();
        if ($commitee == true) {
            return 'DATA IS DELETED';
        } else {
            return 'DATA IS NOT DELETED';
        }
    }
}
