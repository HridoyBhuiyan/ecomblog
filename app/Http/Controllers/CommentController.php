<?php

namespace App\Http\Controllers;

use App\Models\CommentModel;
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

        $data = CommentModel::get();
        $allData=[];
        foreach ($data as $item){
            $newItem = [
                'id'=>$item->id,
                'productID'=>$item->product_id,
                'status'=>$item->status,
                'comment'=>$item->comment,
                'answer'=>$item->answer,
                'productInfo'=>ProductModel::where('id',$item->product_id)->first()
                ];
            array_push($allData,$newItem);
        }
        return view('adminPage.comment.comment',['data'=>$allData]);
    }
}
