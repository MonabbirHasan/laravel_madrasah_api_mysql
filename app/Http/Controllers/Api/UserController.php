<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=UserModel::all();
        return $users;
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
        $Users = new UserModel();
        $Users->username = $request->username;
        $Users->image = $request->image;
        $Users->phone = $request->phone;
        $Users->email = $request->email;
        $Users->city = $request->city;
        $Users->state = $request->state;
        $Users->address = $request->address;
        $Users->status = $request->status;
        $resutl = $Users->save();
        if ($resutl == 1) {
            return $Users;
        } else {
            return response()->json('DATA NOT FOUND!');
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
        $Users = UserModel::find($id);
        return $Users;
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
        $Users = UserModel::find($id);
        $Users->username = $request->username;
        $Users->image = $request->image;
        $Users->phone = $request->phone;
        $Users->email = $request->email;
        $Users->city = $request->city;
        $Users->state = $request->state;
        $Users->address = $request->address;
        $Users->status = $request->status;
        $result = $Users->save();
        if ($result == 1) {
            return $Users;
        } else {
            return response()->json('USER DATA IS DELETED');
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
        $Users = UserModel::find($id)->delete();
        if ($Users == 1) {
            return response()->json('USER DATA IS DELETED');
        } else {
            return response()->json('SOMTHING IS PROBLEM');
        }
    }
}
