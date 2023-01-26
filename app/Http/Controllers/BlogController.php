<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(){
        return view('adminPage.post.post');
    }



    function blogView(){
        $data = PostModel::all();
        return view('clientPages.blog',['data'=>$data]);
    }

}
