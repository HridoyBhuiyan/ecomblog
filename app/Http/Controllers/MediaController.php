<?php

namespace App\Http\Controllers;

use App\Models\MediaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index(){

//         return MediaModel::all();


        return view('adminPage.media.media',['data'=>MediaModel::get()]);
    }

    public function postMedia(Request $request){
        $allImg=[];

        foreach ($request->file("allImages") as $item){
            $itemName = explode('.',str_replace(['-',"_"]," ",$item->getClientOriginalName()))[0];
            $mediaPath = 'storage/'.explode('/',$item->storeAs("/public",str_replace(' ','-',$item->getClientOriginalName())))[1];
            MediaModel::insert([
                'media_path'=>$mediaPath,
                'alt_tag'=>$itemName
            ]);
            array_push($allImg, $item->getClientOriginalName());
        }
        return redirect('/admin/media')->with('imageName',$allImg);
    }

    public function deleteMedia($id){
        $image = MediaModel::where('id',$id)->first();
        $imageName = explode('/',$image->media_path)[1];
        Storage::delete("public/".$imageName);
        MediaModel::where("id",$id)->delete();
        return redirect('admin/media')->with('message','Image Remove Successfully');
    }

}
