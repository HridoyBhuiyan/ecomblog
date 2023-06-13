@extends('dashboard')
@section('menuContent')

    <div class="row">


        <div class="col-6">
            <h2>Blog Category</h2>
            <div class="d-flex align-items-center">
                <form action="{{route('newBlogCategory')}}" method="post">
                    @csrf
                    <input name="blogCategory" type="text" placeholder="New Blog Category" class="border specialInput">
                    <button type="submit" class="btn btn-success border-0">Save</button>
                </form>
            </div>

                @if(session('blogCategory'))
                    <div class="text-success">{{session('blogCategory')}}</div>
                @endif

                @if(session('deleteBlogCategory'))
                    <div class="text-danger">{{session('deleteBlogCategory')}}</div>
                @endif

                @if(session('blogCategoryUpdate'))
                    <div class="text-info">{{session('blogCategoryUpdate')}}</div>
                @endif



            <hr class="w-75">
            <h4>Existing blog Categories</h4>
            <ul class="bg-white border p-2" style="border-radius: 5px">
                @foreach($data['blogCategory'] as $item)
                    <li class="my-2 row">
                        <div class="col-6">
                            <span>{{$item->name}}</span>
                        </div>
                        <div class="col-6">
                            <form action="{{route('deleteBlogCategory',['id'=>$item->id])}}" method="get">
                                @csrf
                                <button type="submit" class="btn bg-danger text-white btnInline mx-1"><i class="px-1 fa-solid fa-trash"></i>Delete</button>
                                <div class="btn bg-dark text-white btnInline mx-1" onclick="blogCategoryModalOpen({{$item}})"><i class="px-1 fa-solid fa-circle-pause"></i>Edit</div>
                            </form>
                        </div>
                    </li>
                @endforeach
                    {{$data['blogCategory']->links()}}
            </ul>
        </div>



        <div class="col-6">
            <h2>Product Categories</h2>
            <div class="d-flex align-items-center">
                <form action="{{route('newProductCategory')}}" method="post">
                    @csrf
                    <input name="productCategory" type="text" placeholder="New Product Category" class="border specialInput">
                    <button class="btn btn-success border-0">Save</button>
                </form>
            </div>

            @if(session('productCategory'))
                <div class="text-success">
                    {{session('productCategory')}}
                </div>
            @endif


            @if(session('productCategoryDelete'))
                <div class="text-danger">
                    {{session('productCategoryDelete')}}
                </div>
            @endif


            @if(session('productUpdateCategory'))
                <div class="text-info">
                    {{session('productUpdateCategory')}}
                </div>
            @endif



            <hr class="w-75">
            <h4>Existing product Categories</h4>
            <ul class="bg-white border p-2" style="border-radius: 5px">
                @foreach($data['productCategory'] as $item)
                    <li class="my-2 row">
                        <div class="col-6">
                            <span>{{$item->name}}</span>
                        </div>
                        <div class="col-6">
                            <form action="{{route('deleteProductCategory',['id'=>$item->id])}}" method="get">
                                @csrf
                                <button type="submit" class="btn bg-danger text-white btnInline mx-1"><i class="px-1 fa-solid fa-trash"></i>Delete</button>
                                <div class="btn bg-dark text-white btnInline mx-1" onclick="productCategoryModalOpen({{$item}})"><i class="px-1 fa-solid fa-circle-pause"></i>Edit</div>
                            </form>
                        </div>
                    </li>
                @endforeach
                {{$data['productCategory']->links()}}
            </ul>
        </div>



        {{--        update blog cateogry--}}
        <div class="d-none position-absolute h-100 w-100 justify-content-center align-items-center" style="background: rgba(208,208,208,0.71)" id="blogCategoryModal">
            <div class="bg-white w-50 p-3 rounded rounded-3 shadow-sm outline-1">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="h4">Update Blog Category</span>
                    <div class="btn btn-danger" onclick="blogCategoryModalHide()">Close</div>
                </div>
                <hr>
                <div>
                    <form action="{{route('updateBlogCategory')}}" method="post">
                        @csrf
                        <input name="deleteBlogCategory" type="text" id="blogCategoryIDUpdate" class="d-none">
                        <p class="m-0 p-0">Title</p>
                        <input name="blogCategoryUpdate" type="text" class="form-control w-100 my-1" id="blogCategoryUpdate">
                        <p class="m-0 p-0">Category Detail</p>
                        <textarea name="updatedBlogContent" id="BlogContentID">
                        </textarea>

                        <p class="m-0 p-0">Meta Description</p>
                        <input name="metaBlogDescriptionID" type="text" class="form-control w-100 my-1" id="metaDescriptionID">
                        <p class="m-0 p-0">Meta Title</p>
                        <input name="metaBlogTitleID" type="text" class="form-control w-100 my-1" id="metaTitleID">


                        <button type="submit" class="btn btn-success w-100 my-1" id="blogCategoryUpdate">Save</button>
                    </form>
                </div>
            </div>
        </div>


        {{--        update Product cateogry--}}
        <div class="d-none position-absolute h-100 w-100 justify-content-center align-items-center" style="background: rgba(208,208,208,0.71)" id="productCategoryModal">
            <div class="bg-white w-50 p-3 rounded rounded-3 shadow-sm outline-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="h4">Update Blog Category</span>
                        <div class="btn btn-danger" onclick="productCategoryModalHide()">Close</div>
                    </div>
                    <hr>
                <form action="{{route('updateProductCategory')}}" method="post">
                    @csrf
                    <div>

                        <input name="updatedProductID" type="text" class="d-none" id="updatedProductID">
                        <p class="m-0 p-0">Title</p>
                        <input name="updatedProductName" type="text" class="form-control w-100 my-1" id="productCategory">
                        <p class="m-0 p-0">Category Detail</p>
                        <textarea name="updatedProductContent" id="productContentID">
                        </textarea>
                        <p class="m-0 p-0">Meta Description</p>
                        <input name="metaDescriptionID" type="text" class="form-control w-100 my-1" id="metaDescriptionID">
                        <p class="m-0 p-0">Meta Title</p>
                        <input name="metaTitleID" type="text" class="form-control w-100 my-1" id="metaTitleID">

                        <button class="btn btn-success w-100 my-1">Save</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script src="https://cdn.tiny.cloud/1/2nvxye6w441ol74rklwjtaq3w9utq0rgkdhg9ni5sh6hehju/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">

        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });

        function blogCategoryModalOpen(item){
            document.getElementById('blogCategoryModal').classList="d-flex position-absolute h-100 w-100 justify-content-center align-items-center"
            document.getElementById('blogCategoryUpdate').value = item.name
            document.getElementById('blogCategoryIDUpdate').value = item.id


            document.getElementById('metaBlogDescriptionID').value = item.id
            document.getElementById('metaBlogTitleID').value = item.id

            tinymce.get("BlogContentID").setContent(item.content);
        }

        function blogCategoryModalHide(){
            document.getElementById('blogCategoryModal').classList="d-none position-absolute h-100 w-100 justify-content-center align-items-center"
        }

        function productCategoryModalOpen(item){
            document.getElementById('productCategoryModal').classList="d-flex position-absolute h-100 w-100 justify-content-center align-items-center"
            document.getElementById('productCategory').value = item.name
            document.getElementById('updatedProductID').value = item.id

            document.getElementById('metaDescriptionID').value = item.meta_description
            document.getElementById('metaTitleID').value = item.title

            tinymce.get("productContentID").setContent(item.content);
        }

        function productCategoryModalHide(){
            document.getElementById('productCategoryModal').classList="d-none position-absolute h-100 w-100 justify-content-center align-items-center"
        }


    </script>



@endsection
