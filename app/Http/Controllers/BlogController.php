<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\PostModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(){
        $data = PostModel::paginate(10);
        return view('adminPage.post.post',["data"=>$data]);
    }

    function blogView(){
        $data = PostModel::simplePaginate(10);
        return view('clientPages.blog',['data'=>$data]);
    }

    function create(){
        $data = CategoryModel::all();
        return view('adminPage.post.newPost',["data"=>$data]);
    }

}
