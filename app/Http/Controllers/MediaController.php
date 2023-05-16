<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index(){
        return view('adminPage.media.media');
    }
    public function postMedia(Request $request){

    }
}
