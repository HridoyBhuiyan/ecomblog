@extends('dashboard')
@section('menuContent')

    <div class="border-1 container-fluid border mb-3 bg-white rounded rounded-3 shadow-md">
        <h5 class="text-center py-2 font-semibold">Blog Post</h5>
        <hr class="m-0 pb-2">
        <div class="row">
            <div class="col-3 text-center">
                <p class="my-2">{{$data['totalPost']}}</p>
                <p class="my-2">Total Post</p>
            </div>

            <div class="col-3 text-center">
                <p  class="my-2">{{$data['publishedPost']}}</p>
                <p  class="my-2">Published Post</p>
            </div>

            <div class="col-3 text-center">
                <p  class="my-2">{{$data['scheduledPost']}}</p>
                <p  class="my-2">Scheduled Post</p>
            </div>

            <div class="col-3 text-center">
                <p  class="my-2">{{$data['draftedPost']}}</p>
                <p  class="my-2">Drafted Post</p>
            </div>
        </div>
    </div>


    <div class="border-1 container-fluid border my-3 bg-white rounded rounded-3 shadow-md">
        <h5 class="text-center py-2 font-semibold">Blog Products</h5>
        <hr class="m-0 pb-2">
        <div class="row">
            <div class="col-3 text-center">
                <p class="my-2">{{$data['totalProduct']}}</p>
                <p class="my-2">Total Product</p>
            </div>

            <div class="col-3 text-center">
                <p  class="my-2">{{$data['publishedProduct']}}</p>
                <p  class="my-2">Published Product</p>
            </div>

            <div class="col-3 text-center">
                <p  class="my-2">{{$data['scheduledProduct']}}</p>
                <p  class="my-2">Scheduled Product</p>
            </div>

            <div class="col-3 text-center">
                <p  class="my-2">{{$data['draftedProduct']}}</p>
                <p  class="my-2">Drafted Product</p>
            </div>
        </div>
    </div>



    <div class="border-1 container-fluid border my-3 bg-white rounded rounded-3 shadow-md">
        <h5 class="text-center py-2 font-semibold">Comments</h5>
        <hr class="m-0 pb-2">
        <div class="row">
            <div class="col-4 text-center">
                <p class="my-2">{{$data['totalComment']}}</p>
                <p class="my-2">Total Comments</p>
            </div>

            <div class="col-4 text-center">
                <p  class="my-2">{{$data['pendingComment']}}</p>
                <p  class="my-2">Pending Comment</p>
            </div>

            <div class="col-4 text-center">
                <p  class="my-2">{{$data['approvedComment']}}</p>
                <p  class="my-2">Approved Comment</p>
            </div>

        </div>
    </div>




    <div class="imgSub">
        <div class="border-1 container-fluid border my-3 py-2 bg-white rounded rounded-3 shadow-md">
            <p class="text-center pt-1">{{$data['totalImage']}}</p>
            <hr class="m-0 pb-2">
            <h5 class="text-center py-2 font-semibold">Total image</h5>
        </div>
        <div class="border-1 container-fluid border my-3 py-2 bg-white rounded rounded-3 shadow-md">
            <p class="text-center pt-1">{{$data['totalSubscriber']}}</p>
            <hr class="m-0 pb-2">
            <h5 class="text-center py-2 font-semibold">Total Subscriber</h5>
        </div>
    </div>




    <div class="tagProduct">

        <div class="border-1 container-fluid border my-3 py-2 bg-white rounded rounded-3 shadow-md">
            <p class="text-center pt-1">{{$data['productCategory']}}</p>
            <hr class="m-0 pb-2">
            <h5 class="text-center py-2 font-semibold">Product category</h5>
        </div>

        <div class="border-1 container-fluid border my-3 py-2 bg-white rounded rounded-3 shadow-md">
            <p class="text-center pt-1">{{$data['productTag']}}</p>
            <hr class="m-0 pb-2">
            <h5 class="text-center py-2 font-semibold">product tag</h5>
        </div>

        <div class="border-1 container-fluid border my-3 py-2 bg-white rounded rounded-3 shadow-md">
            <p class="text-center pt-1">{{$data['blogCategory']}}</p>
            <hr class="m-0 pb-2">
            <h5 class="text-center py-2 font-semibold">Blog category</h5>
        </div>
        <div class="border-1 container-fluid border my-3 py-2 bg-white rounded rounded-3 shadow-md">
            <p class="text-center pt-1">{{$data['blogTag']}}</p>
            <hr class="m-0 pb-2">
            <h5 class="text-center py-2 font-semibold">Blog tag</h5>
        </div>

    </div>



@endsection
