<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\User;

class UserController extends Controller
{
    public function listingPage(Request $request) {
        $users = User::all();
        return View('userListing')->with('users', $users);
    }

    public function userForm(Request $request) {
        return View('userForm');
    }

    public function createUser(Request $request) {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->photo = $request->photo;
        $user->save();

        return redirect('/');
    }

    public function editUserForm($id) {
        $user = User::find($id);

        return View('userForm')->with('user',$user);
    }

    public function updateUser($id, Request $request) {
        $user = User::find($id);
        $user->name = $request->name; 
        $user->email = $request->email; 
        $user->photo = $request->photo;
        $user->save();
        
        return redirect('/');
    }

    public function deleteUser($id) {
        $user = User::find($id)->delete();

        return redirect('/');
    }
}
