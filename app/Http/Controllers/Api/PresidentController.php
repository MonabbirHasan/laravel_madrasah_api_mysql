<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PresidentModel;

class PresidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $president = PresidentModel::all();
        return $president;
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
        $president = new PresidentModel();
        $president->username = $request->username;
        $president->email = $request->email;
        $president->phone = $request->phone;
        $president->age = $request->age;
        $president->image = $request->image;
        $president->nationality = $request->nationality;
        $president->address = $request->address;
        $president->category = $request->category;
        $president->spand_year = $request->spand_year;
        $president->date = $request->date;
        $president->status = $request->status;
        $president->save();
        if ($president == true) {
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
        $president = PresidentModel::find($id);
        return $president;
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
        $president = PresidentModel::find($id);
        $president->username = $request->username;
        $president->email = $request->email;
        $president->phone = $request->phone;
        $president->age = $request->age;
        $president->image = $request->image;
        $president->nationality = $request->nationality;
        $president->address = $request->address;
        $president->category = $request->category;
        $president->spand_year = $request->spand_year;
        $president->date = $request->date;
        $president->status = $request->status;
        $president->save();
        if ($president == true) {
            return $president;
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
        $president = PresidentModel::find($id)->delete();
        if ($president == true) {
            return 'DATA IS DELETED';
        } else {
            return 'DATA IS NOT DELETED';
        }
    }
}
