<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show(){
        $users=User::all();
        return view('admin.managerole',compact('users'));
    }
    public function changerole($id){
        $userId=$id;
        return view('admin.editRole',compact('userId'));
    }
    public function store($id,Request $request){
        $role=Role::where('user_id',$id)->first();
        $role->name=$request->role;
        $role->save();
        $users=User::all();
        return view('admin.managerole',compact('users'));
    }
}
