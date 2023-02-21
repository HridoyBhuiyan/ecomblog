<?php

namespace App\Http\Controllers;

use App\Models\BlogTagModel;
use App\Models\ProductTagModel;
use Illuminate\Http\Request;

class TagController extends Controller
{
    function index(){
        $data = [
            'blogTag'=>BlogTagModel::paginate(12),
            'productTag'=>ProductTagModel::paginate(12)
        ];
        return view('adminPage.tags.tag',['data'=> $data]);
    }

    public function newBlogTag(Request $request){
        BlogTagModel::insert(['name'=>$request->newBlogTag]);
        return redirect('/admin/tags')->with(['message'=>'Tag insert Success']);
    }

    public function updateBlogTag(Request $request){
        BlogTagModel::where('id', $request->id)->update([
            'name'=>$request->input('updateBlogTag'),
            'content'=>$request->input('updatedProductContent')
        ]);
        return redirect('admin/tags')->with(['tagUpdateMessage'=>"Your Tag is updated"]);
    }

    public function deleteBlogTag($id){
        return BlogTagModel::where('id',$id)->delete();
    }


    public function newProductTag(Request $request){
        ProductTagModel::insert(['name'=>$request->input("productTag")]);
        return redirect('admin/tags')->with(['tagMessage'=>'New Tag added']);
    }
    public function updateProductTag(Request $request){
        ProductTagModel::where('id', $request->input('ID'))->update([
            'name'=>$request->input('productTag'),
            'content'=>$request->input('updatedProductContent')
        ]);
        return redirect('admin/tags')->with(['productTagUpdate'=>"Tag Updated"]);
    }
    public function deleteProductTag($id){
        ProductTagModel::where('id', $id)->delete();
        return redirect('admin/tags')->with(['productTagDelete'=>'Tag Deleted']);
    }




}
