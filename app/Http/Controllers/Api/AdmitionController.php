<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdmitionModel;
class AdmitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admition = AdmitionModel::all();
        return $admition;
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
        $admition = new AdmitionModel();
        $admition->username = $request->username;
        $admition->image = $request->image;
        $admition->serial = $request->serial;
        $admition->city = $request->city;
        $admition->state = $request->state;
        $admition->old_madrasah = $request->old_madrasah;
        $admition->certificate = $request->certificate;
        $admition->parent = $request->parent;
        $admition->age = $request->age;
        $admition->add_date = $request->add_date;
        $admition->nationality = $request->nationality;
        $admition->status = $request->status;
        $result = $admition->save();
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
        $admition = AdmitionModel::find($id);
        return $admition;
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
        $admition = AdmitionModel::find($id);
        $admition->username = $request->username;
        $admition->image = $request->image;
        $admition->serial = $request->serial;
        $admition->city = $request->city;
        $admition->state = $request->state;
        $admition->old_madrasah = $request->old_madrasah;
        $admition->certificate = $request->certificate;
        $admition->parent = $request->parent;
        $admition->age = $request->age;
        $admition->add_date = $request->add_date;
        $admition->nationality = $request->nationality;
        $admition->status = $request->status;
        $result = $admition->save();
        if ($result == 1) {
            return $admition;
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
        $admition = AdmitionModel::find($id)->delete();
        if ($admition == true) {
            return 'DATA IS DELETED';
        } else {
            return 'DATA IS NOT DELETED';
        }
    }
}
