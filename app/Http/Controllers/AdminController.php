<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminController extends Controller
{
    public function index(){
        $user = User::get();
        return view('auth.register',['user'=>$user]);
    }


    public function allAdmin(){
        return User::all();
    }

    public function newAdmin(Request $request){

//        return $request;

        $request->validate([
            'fName' => ['required', 'string', 'max:255'],
            'lName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);


        User::insert([
            'name' => $request->fName." ".$request->lName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect("/admin/add")->with('name',$request->fName);
}


}
