<?php

namespace App\Http\Controllers;

use App\Models\BlogCategoryModel;
use App\Models\ProductCategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        $data = [
            'blogCategory'=>BlogCategoryModel::paginate(12),
            'productCategory'=>ProductCategoryModel::paginate(12)
        ];
        return view('adminPage.category.category',['data'=>$data]);
    }

    function newBlogCategory(Request $request){
        BlogCategoryModel::insert(['name'=>$request->input('blogCategory')]);
        return redirect('admin/category')->with(['blogCategory'=>"New Category Added"]);
    }

    public function updateBlogCategory(Request $request){
        BlogCategoryModel::where('id',$request->input('deleteBlogCategory'))->update([
            'name'=>$request->input('blogCategoryUpdate'),
            'content'=>$request->input('updatedBlogContent')
            ]);
        return redirect('admin/category')->with(['blogCategoryUpdate'=>"Category have updated"]);
    }

    public function deleteBlogCategory($id){
        BlogCategoryModel::where('id',$id)->delete();
        return redirect('admin/category')->with(['deleteBlogCategory'=>"Blog Category Deleted"]);
    }

    public function newProductCategory(Request $request){
        ProductCategoryModel::insert(['name'=>$request->input('productCategory')]);
        return redirect('admin/category')->with(['productCategory'=>"New Category Added"]);
    }

    public function updateProductCategory(Request $request){
        ProductCategoryModel::where('id',$request->input('updatedProductID'))->update([
            'name'=>$request->input('updatedProductName'),
            'content'=>$request->input('updatedProductContent')
        ]);
        return redirect('admin/category')->with(['productUpdateCategory'=>"Product Category Updated"]);
    }

    public function deleteProductCategory($id){
        ProductCategoryModel::where('id',$id)->delete();
        return redirect('admin/category')->with(['productCategoryDelete'=>"New Category Added"]);
    }

    public function showAllProductCategory(){
        return ProductCategoryModel::all();
    }

    public function categoryPage($slug){
        $categoryData = ProductCategoryModel::where('slug',$slug)->first();
        $products = ProductModel::where('category',$categoryData->id)->get();
        $data = [
            "id"=>$categoryData->id,
            'name'=>$categoryData->name,
            'slug'=>$categoryData->slug,
            'title'=>$categoryData->title,
            'content'=>$categoryData->content,
            'metaDescription'=>$categoryData->meta_description,
            'products'=>$products
        ];
        return view('clientPages.category',['data'=>$data,'category'=>ProductCategoryModel::all()]);
    }
}
