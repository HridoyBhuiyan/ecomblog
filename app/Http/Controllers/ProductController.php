<?php

namespace App\Http\Controllers;

use App\Models\ProductCategoryModel;
use App\Models\ProductModel;
use App\Models\ProductTagModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Pest\Laravel\json;

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
            $slug=str_replace(" ","-",$request->input('slug'));
        }
        else{
            $slug=str_replace(" ","-",$request->input('title'));
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
            'video_link'=>$request->videoURL,
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
        $data = [
            "product"=>ProductModel::where('slug',$slug)->first(),
            "faq"=>json_decode(ProductModel::where('slug',$slug)->first()->faq),
            "pros"=>json_decode(ProductModel::where('slug',$slug)->first()->pros),
            "cons"=>json_decode(ProductModel::where('slug',$slug)->first()->cons)
        ];
        return view('clientPages.productdetails',['data'=>$data]);
    }

}
