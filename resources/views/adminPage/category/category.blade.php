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


                @if(session('blogCategory'))
                    <div class="text-success">{{session('blogCategory')}}</div>
                @endif


            </div>
            <hr class="w-75">
            <h4>Existing blog Categories</h4>
            <ul class="bg-white border p-2" style="border-radius: 5px">
                @foreach($data['blogCategory'] as $item)
                    <li class="my-2 row">
                        <div class="col-6">
                            <span>{{$item->name}}</span>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn bg-danger text-white btnInline mx-1"><i class="px-1 fa-solid fa-trash"></i>Delete</button>
                            <button class="btn bg-dark text-white btnInline mx-1" onclick="blogCategoryModalOpen({{$item}})"><i class="px-1 fa-solid fa-circle-pause"></i>Edit</button>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>




        <div class="col-6">
            <h2>Product Categories</h2>
            <div class="d-flex align-items-center">
                <input type="text" placeholder="New Product Category" class="border specialInput">
                <button class="btn btn-success border-0">Save</button>
            </div>
            <hr class="w-75">
            <h4>Existing product Categories</h4>
            <ul class="bg-white border p-2" style="border-radius: 5px">
                @foreach($data['productCategory'] as $item)
                    <li class="my-2 row">
                        <div class="col-6">
                            <span>{{$item->name}}</span>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn bg-danger text-white btnInline mx-1"><i class="px-1 fa-solid fa-trash"></i>Delete</button>
                            <button class="btn bg-dark text-white btnInline mx-1" onclick="productCategoryModalOpen({{$item}})"><i class="px-1 fa-solid fa-circle-pause"></i>Edit</button>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>



        {{--        update blog tag--}}
        <div class="d-none position-absolute h-100 w-100 justify-content-center align-items-center" style="background: rgba(208,208,208,0.71)" id="blogTagModal">
            <div class="bg-white w-50 p-3 rounded rounded-3 shadow-sm outline-1">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="h4">Update Blog Category</span>
                    <div class="btn btn-danger" onclick="blogCategoryModalHide()">Close</div>
                </div>
                <hr>
                <div>
                    <input type="text" class="form-control w-100 my-1" id="blogTag">
                    <button class="btn btn-success w-100 my-1" id="blogCategoryUpdate">Save</button>
                </div>
            </div>
        </div>

        {{--        update Product tag--}}
        <div class="d-none position-absolute h-100 w-100 justify-content-center align-items-center" style="background: rgba(208,208,208,0.71)" id="productTagModal">
            <div class="bg-white w-50 p-3 rounded rounded-3 shadow-sm outline-1">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="h4">Update Blog Category</span>
                    <div class="btn btn-danger" onclick="productCategoryModalHide()">Close</div>
                </div>
                <hr>
                <div>
                    <input type="text" class="form-control w-100 my-1" id="productTag">
                    <button class="btn btn-success w-100 my-1">Save</button>
                </div>
            </div>
        </div>



    </div>



    <script type="text/javascript">
        function blogCategoryModalOpen(item){
            document.getElementById('blogTagModal').classList="d-flex position-absolute h-100 w-100 justify-content-center align-items-center"
            document.getElementById('blogTag').value = item.name
            document.getElementById('blogTag').setAttribute('value',item.id)

        }

        function blogCategoryModalHide(){
            document.getElementById('blogTagModal').classList="d-none position-absolute h-100 w-100 justify-content-center align-items-center"
        }

        function productCategoryModalOpen(item){
            console.log(item)
            document.getElementById('productTagModal').classList="d-flex position-absolute h-100 w-100 justify-content-center align-items-center"
            document.getElementById('productTag').value = item.name
        }

        function productCategoryModalHide(){
            document.getElementById('productTagModal').classList="d-none position-absolute h-100 w-100 justify-content-center align-items-center"
        }


    </script>




@endsection
