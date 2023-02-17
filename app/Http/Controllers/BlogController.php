<?php

namespace App\Http\Controllers;

use App\Models\BlogCategoryModel;
use App\Models\PostModel;
use App\Models\BlogTagModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    function responseBack( $message, $data,$statusCode){
        return response()->json([
            'message'=>$message,
            'data'=>$data
        ],$statusCode);
    }

    function index(){
        $data = PostModel::orderBy('id','desc')->paginate(10);
        return view('adminPage.post.post',["data"=>$data]);
    }

    function blogView(){
        $data = PostModel::simplePaginate(10);
        return view('clientPages.blog',['data'=>$data]);
    }

    function create(){
        $category = BlogCategoryModel::all();
        $tag = BlogTagModel::all();
        $data = [
            'category'=>$category,
            'tag'=>$tag
            ];
        return view('adminPage.post.newPost',["data"=>$data]);
    }

    function postNewPostData(Request $request){

        $request->validate([
            'title'=>"required",
            'metaTitle'=>"required",
            'metaDescription'=>"required",
            'content'=>"required",
            'thumbnail'=>"required",
            'category'=>"required",
        ]);


        $title = $request->input('title');
        $metaTitle = $request->input('metaTitle');
        $metaDescription=$request->input('metaDescription');
        $tag = json_encode("[".implode(',',$request->input('items'))."]",true);
        $content = $request->input('content');
        $thumbnail = $request->file('thumbnail')->store('public');
        $thumbnailPath = Storage::url($thumbnail);
        $category = $request->input('category');
        $slug = strtolower($request->input('slug'));
        $finalSlug = str_replace(" ","-", $slug);
        if (PostModel::where('slug',$finalSlug)->count()==0){
            $finalSlug == $finalSlug;
        }
        else{
            $lastPostID = PostModel::orderBy('id', 'DESC')->first()->id;
            $finalSlug = $lastPostID."-".$finalSlug;
        }

        PostModel::insert([
            'title'=>$title,
            'meta_title'=>$metaTitle,
            'meta_description'=>$metaDescription,
            'thumbnail'=>$thumbnailPath,
            'blog_content'=>$content,
            'category'=>$category,
            'tag'=>$tag,
            'slug'=>$finalSlug,
        ]);
        return redirect('/admin/blog')->with('success','✓ New Post Added !');
    }

    function scheduledPost(Request $request){
        $validator = Validator::make($request->all(),[
            'title'=>"required",
            'metaTitleID'=>"required",
            'metaDescriptionID'=>"required",
            'contentID'=>"required",
            'thumbnailID'=>"required",
            'scheduleTime'=>"required",
        ],[
            'required'=>"You missed the :attribute "
        ]);


        if ($validator->fails()){
            return $this->responseBack("error!",$validator->errors(), 401);
        }
        else{
            $thumbnail = $request->file('thumbnailID')->store('public');
            $thumbnailPath = Storage::url($thumbnail);
            $slug = strtolower($request->input('slugID'));
            $finalSlug = str_replace(" ","-", $slug);
            if (PostModel::where('slug',$finalSlug)->count()==0){
                $finalSlug == $finalSlug;
            }
            else{
                $lastPostID = PostModel::orderBy('id', 'DESC')->first()->id;
                $finalSlug = $lastPostID."-".$finalSlug;
            }

            $result = PostModel::insert([
                'title'=>$request->input('title'),
                'meta_title'=>$request->input('metaTitleID'),
                'meta_description'=>$request->input('metaDescriptionID'),
                'thumbnail'=>$thumbnailPath,
                'blog_content'=>$request->input('contentID'),
                'category'=>$request->input(''),
                'schedule'=>$request->input('scheduleTime'),
                'slug'=> $finalSlug,
                'tag'=>$request->input('tags'),
                'status'=>'draft'
            ]);
            return $this->responseBack("Successfully added",$result,200);
        }
    }

    function draftPost(Request $request){

        $validator = Validator::make($request->all(),[
            'title'=>"required",
            'metaTitleID'=>"required",
            'metaDescriptionID'=>"required",
            'contentID'=>"required",
            'thumbnailID'=>"required"
        ],[
            'required'=>"You missed the :attribute "
        ]);


        if ($validator->fails()){
            return $this->responseBack("error!",$validator->errors(), 401);
        }
        else{
            $thumbnail = $request->file('thumbnailID')->store('public');
            $thumbnailPath = Storage::url($thumbnail);
            $slug = strtolower($request->input('slugID'));
            $finalSlug = str_replace(" ","-", $slug);
            if (PostModel::where('slug',$finalSlug)->count()==0){
                $finalSlug == $finalSlug;
            }
            else{
                $lastPostID = PostModel::orderBy('id', 'DESC')->first()->id;
                $finalSlug = $lastPostID."-".$finalSlug;
            }

            $result = PostModel::insert([
                'title'=>$request->input('title'),
                'meta_title'=>$request->input('metaTitleID'),
                'meta_description'=>$request->input('metaDescriptionID'),
                'thumbnail'=>$thumbnailPath,
                'blog_content'=>$request->input('contentID'),
                'category'=>$request->input(''),
                'slug'=> $finalSlug,
                'tag'=>$request->input('tags'),
                'status'=>'draft'
            ]);
            return $this->responseBack("Successfully added",$result,200);
        }
    }

    function deletePost($id){
        PostModel::where('id', $id)->delete();
        return redirect('/admin/blog')->with('deletedData',$id);
    }


    function updatePost($id){
        $currentPost = PostModel::where('id',$id)->first();
        $tags = array();

        $allExistingTag = explode(',',str_replace(['"','[',']'],"",$currentPost->tag));


        foreach ($allExistingTag as $item){
            $tagItem = BlogTagModel::where('id',$item)->first();
            array_push( $tags,$tagItem);
        }

        $data = [
            'id'=>$currentPost->id,
            'title'=>$currentPost->title,
            'content'=>$currentPost->blog_content,
            'metaTitle'=>$currentPost->meta_title,
            'metaDescription'=>$currentPost->meta_description,
            'tags'=>$tags,
            'thumbnail'=>$currentPost->thumbnail,
            'currentCategory'=>$currentPost->category,
            'currentTags'=>$currentPost->tag,
            'schedule'=>$currentPost->schedule,
            'slug'=>$currentPost->slug,
            'status'=>$currentPost->status,
            'allCategory'=>BlogCategoryModel::all(),
            'allTags'=>BlogTagModel::all()
        ];


        return view('adminPage.post.updatePost',['data'=>$data]);
    }

}
