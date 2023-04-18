<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use App\Models\ProductCategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    function homeFeed (){
        $products = ProductModel::where('status','published')->orderby('updated_at','DESC')->take(10)->get();
        $productList = [];
        foreach ($products as $item){
            $data = [
                'title'=>$item->title,
                'link'=>'https://mobiledokan.org/'.$item->slug,
                'category'=>ProductCategoryModel::where('id',$item->category)->first()->name,
                'create_date'=>$item->updated_at,
                'description'=>$item->meta_description,
                ];
            array_push($productList,$data);
        }

         $data = [
            'pubDate'=>ProductModel::orderBy('updated_at','DESC')->first()->updated_at,
            'productList'=>$productList
        ];
        return response()->view('rssfeed.homeFeed',["data"=>$data])->header('Content-Type', 'text/xml');
    }


    function postFeed($slug){
        if (ProductModel::where('slug',$slug)->count()==1){
            $requestedCategory = ProductModel::where('slug',$slug)->first()->category;
            $requestedTag = ProductModel::where('slug',$slug)->first()->tags;
            $data = [
                "product"=>ProductModel::where('slug',$slug)->first(),
                "faq"=>json_decode(ProductModel::where('slug',$slug)->first()->faq),
                "pros"=>json_decode(ProductModel::where('slug',$slug)->first()->pros),
                "cons"=>json_decode(ProductModel::where('slug',$slug)->first()->cons),
            ];
            return response()->view('rssfeed.productFeed',["data"=>$data])->header('Content-Type', 'text/xml');
        }

        else if (PostModel::where('slug', $slug)->count()==1){
            $data = [
                "postData"=>PostModel::where('slug', $slug)->get()->first(),
                "admin"=>"admin"
            ];
            return response()->view('rssfeed.blogItemFeed',['data'=>$data])->header('Content-Type','text/xml');
        }
        else{ return redirect('/');}
    }


    function categoryFeed($slug){
        $data = ProductCategoryModel::where('slug',$slug)->first();
        return response()->view("rssfeed.categoryFeed",['data'=>$data])->header('Content-Type','text/xml');
    }


    function blogFeed(){
        return response()->view('rssfeeid.blogFeed')->header('Content-Type','text/xml');
    }

}
