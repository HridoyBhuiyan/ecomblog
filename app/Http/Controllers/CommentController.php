<?php

namespace App\Http\Controllers;

use App\Models\CommentModel;
use App\Models\ProductCategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function postComment(Request $request){
        $result = CommentModel::insert([
            'product_id'=>$request->input('productID'),
            'comment'=>$request->input('query'),
            'status'=>'unpublished'
        ]);
        return redirect()->back()->with(['msg'=>'Your Question have posted successfully. It will replied soon.']);
    }

    public function index(){
        $data = CommentModel::orderBy('id','desc')->paginate(10);
        $productData = ProductModel::get();
        $product = [];
        foreach ($data as $items=>$item){
            $id=$item->id;
            $commentId = $productData->where('id',$item->product_id)->pluck('id')->first();
            $title = $productData->where('id',$item->product_id)->pluck('title')->first();
            $slug = $productData->where('id',$item->product_id)->pluck('slug')->first();
            $categoryId = $productData->where('id',$item->product_id)->pluck('category')->first();
            $category = ProductCategoryModel::where('id',$categoryId)->pluck('name')->first();
            $singleProduct=[
                'id'=>$id,
                'commentId'=>$commentId,
                "title"=>$title,
                "categoryID"=>$categoryId,
                "category"=>$category,
                'slug'=>$slug
            ];
            array_push($product,$singleProduct);
        }
        return view('adminPage.comment.comment',['data'=>$data,'product'=>$product]);
    }


    public function postCommentReply(Request $request){
        $id = $request->id;
        $answer = $request->input('answer');
        CommentModel::where('id',$id)->update(['answer'=>$answer,'status'=>'published']);
        return redirect('/admin/comment')->with(['data'=>"Answer Added !"]);
    }


    public function deleteComment($id){
        CommentModel::where('id',$id)->delete();
        return redirect('/')->with(['deleteText'=>"Comment Deleted !!"]);
    }

}
