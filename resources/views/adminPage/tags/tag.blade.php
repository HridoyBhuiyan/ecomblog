@extends('dashboard')
@section('menuContent')

    <div class="row position-relative">
        <div class="col-6">
            <h2>Blog Tag</h2>
            @if(session('message'))
                <div class="text-success">{{session('message')}}</div>
            @endif

            @if(session('tagUpdateMessage'))
                <div class="text-success">{{session('tagUpdateMessage')}}</div>
            @endif


            <div class="d-flex align-items-center">
                <form action="{{route('newBlogTag')}}" method="POST">
                    @csrf
                    <input name="newBlogTag" type="text" placeholder="New Blog Tag" class="border specialInput">
                    <button type="submit" class="btn btn-success border-0">Save</button>
                </form>
            </div>

            @if(request()->has("deleted"))
            <div class="text-danger">Blog Tag is deleted</div>
            @endif

            <hr class="w-75">
            <h4>Existing blog tags</h4>
            <ul class="bg-white border p-2" style="border-radius: 5px">
                @foreach($data['blogTag'] as $item)
                    <li class="my-2 row">
                        <div class="col-6">
                            <span>{{$item->name}}</span>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn bg-danger text-white btnInline mx-1" onclick="blogTagDelete({{$item}})"><i class="px-1 fa-solid fa-trash"></i>Delete</button>
                            <button class="btn bg-dark text-white btnInline mx-1" onclick="blogTagEdit({{$item}})"><i class="px-1 fa-solid fa-circle-pause"></i>Edit</button>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>


        <div class="col-6">
            <h2>Product Tag</h2>

            <div class="d-flex align-items-center">
                <form action="{{route('newProductTag')}}" method="POST">
                    @csrf
                <input name="productTag" type="text" placeholder="New Product Tag" class="border specialInput">
                <button type="submit" class="btn btn-success border-0">Save</button>
                </form>
            </div>


            @if(session('tagMessage'))
                <div class="text-success">
                    {{session('tagMessage')}}
                </div>
            @endif


            @if(session('productTagUpdate'))
                <div class="text-success">
                    {{session('productTagUpdate')}}
                </div>
            @endif

            @if(session('productTagDelete'))
                <div class="text-danger">
                    {{session('productTagDelete')}}
                </div>
            @endif




            <hr class="w-75">
            <h4>Existing product tags</h4>
            <ul class="bg-white border p-2" style="border-radius: 5px">
                @foreach($data['productTag'] as $item)
                <li class="my-2 row">
                    <div class="col-6">
                        <span>{{$item->name}}</span>
                    </div>
                    <div class="col-6">
                        <form action="{{route('deleteProductTag', ['id'=>$item->id])}}" method="GET">
                            @csrf
                            <button type="submit" class="btn bg-danger text-white btnInline mx-1"><i class="px-1 fa-solid fa-trash"></i>Delete</button>
                            <div class="btn bg-dark text-white btnInline mx-1" onclick="productTagEdit({{$item}})"><i class="px-1 fa-solid fa-circle-pause"></i>Edit</div>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>


{{--        update blog tag--}}
        <div class="d-none position-absolute h-100 w-100 justify-content-center align-items-center" style="background: rgba(208,208,208,0.71)" id="blogTagModal">
            <div class="bg-white w-50 p-3 rounded rounded-3 shadow-sm outline-1">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="h4">Update Blog Tag</span>
                    <div class="btn btn-danger" onclick="blogTagModalHide()">Close</div>
                </div>
                <hr>
                <div>
                    <form action="{{route('updateBlogTag')}}" method="POST">
                        @csrf
                        <input name="id" type="text" class="d-none" id="blogTagID">
                        <input name="updateBlogTag" type="text" class="form-control w-100 my-1" id="blogTag">
                        <button type="submit" class="btn btn-success w-100 my-1" id="blogTagUpdate">Save</button>
                    </form>
                </div>
            </div>
        </div>


{{--        update Product tag--}}
        <div class="d-none position-absolute h-100 w-100 justify-content-center align-items-center" style="background: rgba(208,208,208,0.71)" id="productTagModal">
            <div class="bg-white w-50 p-3 rounded rounded-3 shadow-sm outline-1">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="h4">Update Blog Tag</span>
                    <div class="btn btn-danger" onclick="productTagModalHide()">Close</div>
                </div>
                <hr>
                <form action="{{route('updateProductTag')}}" method="POST">
                    @csrf
                <div>
                    <input name="ID" value="" type="text" class="d-none" id="productTagUpdate">
                    <input name="productTag" type="text" class="form-control w-100 my-1" id="productTag">
                    <button class="btn btn-success w-100 my-1" type="submit">Save</button>
                </div>
                </form>
            </div>
        </div>


    </div>


    <script type="text/javascript" src="{{asset('resources/js/app.js')}}"></script>
    <script>
        function blogTagEdit(item){
            console.log(item)
            document.getElementById('blogTagModal').classList="d-flex position-absolute h-100 w-100 justify-content-center align-items-center";
            document.getElementById('blogTag').value = item.name;
            document.getElementById('blogTagID').value = item.id
        }

        function blogTagModalHide(){
            document.getElementById('blogTagModal').classList="d-none position-absolute h-100 w-100 justify-content-center align-items-center"
        }

        function blogTagDelete(data){
            axios.get('/admin/deleteBlogTag/'+data.id)
                .then(response=>{
                    if(response.status==200){
                        window.location.href = "/admin/tags?deleted"
                    }
                })
                .catch(error=>{console.log(error)})
        }

        function productTagEdit(item){
            document.getElementById('productTagModal').classList="d-flex position-absolute h-100 w-100 justify-content-center align-items-center"
            document.getElementById('productTag').value = item.name
            document.getElementById('productTagUpdate').value = item.id
        }

        function productTagModalHide(){
            document.getElementById('productTagModal').classList="d-none position-absolute h-100 w-100 justify-content-center align-items-center"
        }
    </script>



@endsection

