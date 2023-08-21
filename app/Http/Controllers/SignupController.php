<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller{
    public function index(){
        return view('components/signup');
    }
    public function store(Request $request){
        request()->validate([
            'profileimg' => 'required|image|mimes:png,jpg,svg,jfif,jpeg|max:7168',
            'fullname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirmepassword' => 'required',
            'phone' => 'required',
        ]);
        $imageName = uniqid() . '.' . $request->file('profileimg')->getClientOriginalExtension();
        $request->file('profileimg')->move(public_path('profile_images'), $imageName);
        $data  = [
            'profileimg' => $imageName,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => $request->password,
            'confirmepassword' => $request->confirmepassword,
            'phone' => $request->phone,
        ];
        User::create($data);
         return redirect()->back()->with('success', 'signup succesfully'); 
   
}
}