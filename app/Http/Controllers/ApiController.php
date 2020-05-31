<?php

namespace App\Http\Controllers;

use App\MyUserModel;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function create(Request $request)
    {
        $myuser=new MyUserModel;
        $myuser->email=$request->input('email');
        $myuser->password=$request->input('password');
        $myuser->firstname=$request->input('firstname');
        $myuser->lastname=$request->input('lastname');
        $myuser->phone=$request->input('phone');
        $myuser->image=$request->input('image');
        $myuser->interests=$request->input('interests');
        $myuser->save();
        return response()->json($myuser);
    }

    public function show(){
        $users=MyUserModel::all();
        return response()->json($users);
    }

    public function showbyid($id){
        $user=MyUserModel::find($id);
        return response()->json($user);
    }
    public function userLogin($email,$password){
        $user=MyUserModel::all()->where('email', $email)->where('password', $password)->first();
        return response()->json($user);
    }

    public function deletebyid(Request $request,$id){
        $user=MyUserModel::find($id);
        $user->delete();
        return response()->json($user);

    }
    public function updatebyid(Request $request,$id){
        $user=MyUserModel::find($id);
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->firstname=$request->input('firstname');
        $user->lastname=$request->input('lastname');
        $user->phone=$request->input('phone');
        $user->image=$request->input('image');
        $user->interests=$request->input('interests');

        $user->save();
        return response()->json($user);

    }

}
