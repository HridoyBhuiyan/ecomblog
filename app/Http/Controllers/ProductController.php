<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use App\Models\ProductCategoryModel;
use App\Models\ProductModel;
use App\Models\ProductTagModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        $data = ProductModel::orderBy('id','desc')->get();
        return view('adminPage.product.product', ['data'=>$data]);
    }

    public function addNewProduct(){
        $data = [
            'category'=>ProductCategoryModel::all(),
            'tag'=>ProductTagModel::all()
        ];
        return view('adminPage.product.newProduct',['data'=>$data]);
    }

    public function createNewProduct(Request $request){
        $faqData = [];
        if ($request->hasFile('thumbnail')){
            $path = Storage::url($request->file('thumbnail')->store('/public'));
        }
        else{
            $path=null;
        }
        if ($request->has('question') && $request->has('answer')){
            $question = $request->input('question');
            $answer = $request->input('answer');

            for ($i = 0; $i < sizeof($question); $i++){
                $data = ['question' => $question[$i],'answer' => $answer[$i]];
                array_push($faqData, $data);
            }
        }

        if ($request->has('slug') && strlen($request->slug)>0){
            $slug= Str::slug($request->input('slug'),'-');
        }
        else{
            $slug= Str::slug($request->input('title'),'-');
        }

        if ($request->has("videoURL")){
            strpos($request->input('videoURL'), "=")?$videoLink=explode('=',$request->input('videoURL')): $videoLink=null;
        }
        else{
            $videoLink = null;
        }

        ProductModel::insert([
            'title'=>$request->title,
            'description'=>$request->phoneDetails,
            'slug'=>$slug,
            'meta_title'=>$request->metaTitle,
            'meta_description'=>$request->metaTitle,
            'feature_image'=>$path,
            'specification'=>$request->phoneSpecification,
            'things_to_know'=>$request->phoneOverview,
            'release_date'=>$request->releaseDate,
            'OS_version'=>$request->OSVersion,
            'display'=>$request->displaySize,
            'camera'=>$request->phoneCamera,
            'ram'=>$request->phoneRam,
            'battery'=>$request->phoneBattery,
            'pros'=>json_encode($request->props),
            'cons'=>json_encode($request->cons),
            'video_link'=>$videoLink,
            'faq'=>json_encode($faqData),
            'loved'=>0,
            'official_price'=>$request->officialPrice,
            'unofficial_price'=>$request->unofficialPrice,
            'category'=>$request->category,
            'tags'=>$request->tag,
            'status'=>"published"
        ]);

        return redirect('/admin/product')->with(['newProductAdd'=>"New Product Added"]);
    }

    public function allProductList(){
        $data = ProductModel::orderBy('id',"desc")->paginate(10);
        return view('clientPages.home',['data'=>$data]);
    }

    public function singleProduct($slug){
        if (ProductModel::where('slug',$slug)->count()==1){
            $data = [
                "product"=>ProductModel::where('slug',$slug)->first(),
                "faq"=>json_decode(ProductModel::where('slug',$slug)->first()->faq),
                "pros"=>json_decode(ProductModel::where('slug',$slug)->first()->pros),
                "cons"=>json_decode(ProductModel::where('slug',$slug)->first()->cons)
            ];
//            return $data;
            return view('clientPages.productdetails',['data'=>$data]);
        }
        else if (PostModel::where('slug', $slug)->count()==1){
                $data = [
                    "postData"=>PostModel::where('slug', $slug)->get()->first(),
                    "admin"=>"admin"
                ];
                return view('clientPages.blogDetails',['data'=>$data]);
            }
        else{ return redirect('/');}

    }

    public function updateProductPage($id){
        $productData = ProductModel::where('id',$id)->first();
        $data = ['product'=>$productData,
            'pros'=>json_decode($productData->pros),
            'cons'=>json_decode($productData->cons),
            'faq'=>json_decode($productData->faq),
            'currentCategory'=>ProductCategoryModel::where('id',$id)->first(),
            'categories'=>ProductCategoryModel::all(),
            'tags'=>ProductTagModel::all()
            ];
        return view('adminPage.product.updateProduct',['data'=>$data]);
    }

    public function updateProduct(Request $request){
        $id = $request->id;
        if ($request->has('title')){
            ProductModel::where("id",$id)->update(['title'=>$request->title]);
        }
        if ($request->has('slug')){
            ProductModel::where("id",$id)->update(['slug'=>Str::slug($request->slug,'-')]);
        }
        if ($request->has('officialPrice')){
            ProductModel::where("id",$id)->update(['official_price'=>$request->officialPrice]);
        }
        if ($request->has('unofficialPrice')){
            ProductModel::where("id",$id)->update(['unofficial_price'=>$request->unofficialPrice]);
        }
        if ($request->has('releaseDate')){
            ProductModel::where("id",$id)->update(['release_date'=>$request->releaseDate]);
        }
        if ($request->has('OSVersion')){
            ProductModel::where("id",$id)->update(['OS_version'=>$request->OSVersion]);
        }
        if ($request->has('displaySize')){
            ProductModel::where("id",$id)->update(['display'=>$request->displaySize]);
        }
        if ($request->has('phoneCamera')){
            ProductModel::where("id",$id)->update(['camera'=>$request->phoneCamera]);
        }
        if ($request->has('phoneRam')){
            ProductModel::where("id",$id)->update(['ram'=>$request->phoneRam]);
        }
        if ($request->has('phoneBattery')){
            ProductModel::where("id",$id)->update(['battery'=>$request->phoneBattery]);
        }
        if ($request->has('phoneSpecification')){
            ProductModel::where("id",$id)->update(['specification'=>$request->phoneSpecification]);
        }
        if ($request->has('phoneDetails')){
            ProductModel::where("id",$id)->update(['description'=>$request->phoneDetails]);
        }
        if ($request->has('phoneOverview')){
            ProductModel::where("id",$id)->update(['things_to_know'=>$request->phoneOverview]);
        }
        if ($request->has('props')){
            ProductModel::where("id",$id)->update(['pros'=>$request->props]);
        }
        if ($request->has('cons')){
            ProductModel::where("id",$id)->update(['cons'=>$request->cons]);
        }

//        if ($request->has('question') || $request->has('answer')){
//
//        }

        if ($request->hasFile('thumbnail')){
            $image = $request->file('thumbnail');
            $imageType = $image->getClientOriginalExtension();
            if ($imageType=="jpg"){
                $imageURL = $this->handleJpgPhoto($image);
                ProductModel::where('id',$id)->update(['feature_image'=>$imageURL]);
            }
            else{
                $imageURL = $this->handlePngPhoto($image);
                ProductModel::where('id',$id)->update(['feature_image'=>$imageURL]);
            }
        }
        if ($request->has('videoURL')){
            strpos($request->input('videoURL'), "=")?$videoLink=explode('=',$request->input('videoURL'))[1]: $videoLink=$request->input('videoURL');
            ProductModel::where("id",$id)->update(['video_link'=>$videoLink]);
        }
        if ($request->has('metaTitle')){
            ProductModel::where("id",$id)->update(['meta_title'=>$request->metaTitle]);
        }
        if ($request->has('metaDescription')){
            ProductModel::where("id",$id)->update(['meta_description'=>$request->metaDescription]);
        }

        return redirect('admin/product')->with(['updateText'=>'Product Updated !']);
    }


    function handleJpgPhoto($imgFile, ){
        $imageHeight = getimagesize($imgFile)[1];
        $imageWidth = getimagesize($imgFile)[0];
        $imageSize = filesize($imgFile)/1012;
        $image = $imgFile->storeAs('public', $imgFile->getClientOriginalName());
        $imageBaseName=explode("/", $image)[1];
        $imageName = explode('.',explode("/", $image)[1])[0];
        $imageLocationBefore = public_path("storage/".$imageName.".jpg");

        $imageLocationAfter = public_path('storage/'.$imageName.".webp");
        $img = imagecreatefromjpeg($imageLocationBefore);
        imagepalettetotruecolor($img);
        imagealphablending($img, true);
        imagesavealpha($img, true);
        imagewebp($img, $imageLocationAfter, 40);
        Storage::delete("public/".$imageBaseName);
        return "storage/".$imageName.".webp";
    }

    function handlePngPhoto($imgFile ){
        $imageHeight = getimagesize($imgFile)[1];
        $imageWidth = getimagesize($imgFile)[0];
        $imageSize = filesize($imgFile)/1012;
        $image = $imgFile->storeAs('public', $imgFile->getClientOriginalName());
        $imageBaseName=explode("/", $image)[1];
        $imageName = explode('.',explode("/", $image)[1])[0];
        $imageLocationBefore = public_path("storage/".$imageName.".png");

        $imageLocationAfter = public_path('storage/'.$imageName.".webp");
        $img = imagecreatefrompng($imageLocationBefore);
        imagepalettetotruecolor($img);
        imagealphablending($img, true);
        imagesavealpha($img, true);
        imagewebp($img, $imageLocationAfter, 40);
        Storage::delete("public/".$imageBaseName);
        return "storage/".$imageName.".webp";
    }

    function deleteProduct($id){
        ProductModel::where('id',$id)->delete();
        return redirect('admin/product')->with(['deleteText'=>'Product Deleted']);
    }
}
