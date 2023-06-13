<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $user = User::get();
        return view('auth.register',['user'=>$user]);
    }

    public function test(){

    }

    public function allAdmin(){
        return User::all();
    }

}
