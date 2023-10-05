<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('register.index',[
            "title" => "Register",
            "active" => "register"
    ]);
    }
    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
    User::create($validatedData);
    $request->session()->flash('success', 'Registration Succesfull!, Please Login');
    return redirect('/login');
    // cara ke dua
    // return redirect('/login')->with('success', 'Registration Succesfull!, Please Login')

    }
}