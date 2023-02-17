<?php

namespace App\Http\Controllers;

use App\Models\BlogCategoryModel;
use App\Models\ProductCategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        $data = [
            'blogCategory'=>BlogCategoryModel::get(),
            'productCategory'=>ProductCategoryModel::all()
        ];
        return view('adminPage.category.category',['data'=>$data]);
    }

    function newBlogCategory(Request $request){
        BlogCategoryModel::insert(['name'=>$request->input('blogCategory')]);
        return redirect('admin/category')->with(['blogCategory'=>"New Category Added"]);
    }
    public function updateBlogCategory(Request $request){

    }
    public function deleteBlogCategory(Request $request){

    }
    public function newProductCategory(Request $request){

    }
    public function updateProductCategory(Request $request){

    }
    public function deleteProductCategory(Request $request){

    }

}
