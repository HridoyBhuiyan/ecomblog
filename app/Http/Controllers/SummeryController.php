<?php

namespace App\Http\Controllers;

use App\Models\BlogCategoryModel;
use App\Models\BlogTagModel;
use App\Models\CommentModel;
use App\Models\MediaModel;
use App\Models\PostModel;
use App\Models\ProductCategoryModel;
use App\Models\ProductModel;
use App\Models\ProductTagModel;
use App\Models\SubscriberModel;
use Illuminate\Http\Request;

class SummeryController extends Controller
{
    public function index(){
        $data = [
            'totalPost'=>PostModel::all()->count(),
            'publishedPost'=>PostModel::where('status','published')->count(),
            'scheduledPost'=>PostModel::all()->count() - PostModel::where('schedule', null)->count(),
            'draftedPost'=>PostModel::where('status', 'draft')->count(),
            'totalProduct'=>ProductModel::all()->count(),
            'publishedProduct'=>ProductModel::where('status','published')->count(),
            'scheduledProduct'=>ProductModel::where('status','published')->count() - ProductModel::where('schedule', null)->count(),
            'draftedProduct'=>ProductModel::where('status','draft')->count(),
            'totalComment'=>CommentModel::all()->count(),
            'pendingComment'=>CommentModel::where('status','unpublished')->count(),
            'approvedComment'=>CommentModel::where('status','published')->count(),
            'totalImage'=>MediaModel::all()->count(),
            'totalSubscriber'=>SubscriberModel::all()->count(),
            'productCategory'=>ProductCategoryModel::all()->count(),
            'productTag'=>ProductTagModel::all()->count(),
            'blogCategory'=>BlogCategoryModel::all()->count(),
            'blogTag'=>BlogTagModel::all()->count()
        ];
        return view('adminPage.summery.summery', ['data'=>$data]);
    }
}
