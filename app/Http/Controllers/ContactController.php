<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use App\Models\ProductCategoryModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('clientPages.contact',['category'=>ProductCategoryModel::all()]);
    }
    public function contactFormPost(Request $request){
        if ($request->input('email')){
            ContactModel::insert([
                "name"=>$request->input('name'),
                'email_id'=>$request->input('email'),
                'details'=>$request->input('message')
            ]);
            return redirect('/contact')->with('message',"Received ! Soon we will response you.");
        }

        else{
            return redirect('/contact')->with('rejection',"Can not proceed ! Important Field Empty !");
        }
    }

    public function messageGet(){
        return view('adminPage.message.message');
    }

}
