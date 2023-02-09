<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data = ProductModel::orderBy('id','desc')->get();
        return view('adminPage.product.product', ['data'=>$data]);
    }
}
