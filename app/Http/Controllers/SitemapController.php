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
        return view('clientPages.siteMap',[
            "category"=>ProductCategoryModel::all(),
            "product"=>ProductModel::all(),
            "blog"=>PostModel::all(),
            'blogCategory'=>BlogCategoryModel::all()
        ]);
    }


    public function XMLsitemap(){
        return view('sitemap.xmlsitemap');
    }


    public function XMLProductSitemap(){
        return view('sitemap.xmlproductsitemap');
    }

    public function XMLPostSitemap(){
        return view('sitemap.xmlpostsitemap');
    }


    public function XMLPagesitemap(){
        return view('sitemap.xmlpagesitemap');
    }




}
