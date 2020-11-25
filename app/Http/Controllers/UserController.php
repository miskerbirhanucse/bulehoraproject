<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.manage', compact('users'));
    }
    public function profile($id)
    {   
        return dd($id);
    
    }
    public function deleteAdmin($id)
    {
        if ($user = User::find($id)) {
            $id = $user->id;
            $user->roles()->detach($id);
            User::destroy($id);
            return redirect()->back()->with('deleted', 'deleted successfully');
        }
        return redirect()->back()->with('delete-failed', 'can not delete');
    }
    public function approve($id)
    {
        $user = User::find($id);

        $user->approved = !($user->approved);
        $user->save();
        $role = Role::where([
            'user_id' => $id,
        ])->first();

        if ($user->approved) {
            $mess = 'Successfully approved';
            $role->name = 'user';
            $role->save();
        } else {
            $mess = 'Successfully rejected';
            $role->name = 'guest';
            $role->save();
        }
        return redirect()->back()->with('Success', $mess);
    }
}
