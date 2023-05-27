<?php

namespace App\Http\Controllers;

use App\Models\BlogCategoryModel;
use App\Models\PostModel;
use App\Models\ProductCategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index(){
//        return BlogCategoryModel::all();
        return view('clientPages.siteMap',[
            "category"=>ProductCategoryModel::all(),
            "product"=>ProductModel::all(),
            "blog"=>PostModel::all(),
            'blogCategory'=>BlogCategoryModel::all()
        ]);
    }
}
