<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getSignup() {
        return view('user.signup');
    }

    public function postSignup(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4'
        ]);

        $user = new User([
            'name' => $request->input("name"),
            'email' => $request->input("email"),
            'password' => bcrypt($request->input("password"))
        ]);
        $user->save();

        return redirect()->route('user.profile');
    }

    public function getSignin() {
        return view('user.signin');
    }

    public function postSignin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->input('email'),
            'password' => $request->input('password')])) {
            return redirect()->route('user.profile');
        }
        return redirect()->back();
    }

    public function getProfile() {
        return view('user.profile');
    }

    public function logout() {
        Auth::logout();
        return redirect()->back();
    }
}
