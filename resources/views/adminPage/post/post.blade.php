@extends('dashboard')
@section('menuContent')

    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog Post</li>
            </ol>
        </nav>

        @if(session('success'))
        <nav aria-label="breadcrumb">
            <div class="breadcrumb text-success">
                {{session('success')}}
            </div>
        </nav>
        @endif

        @if(request()->has('newschedule'))
            <nav aria-label="breadcrumb">
                <div class="breadcrumb text-info">
                    New Post have Scheduled !
                </div>
            </nav>
        @endif

        @if(request()->has('drafted'))
            <nav aria-label="breadcrumb">
                <div class="breadcrumb text-warning">
                    New Post have Drafted!
                </div>
            </nav>
        @endif

        @if(session('deletedData'))
            <nav aria-label="breadcrumb">
                <div class="breadcrumb text-danger">
                    Deleted Post ID : {{session('deletedData')}}
                </div>
            </nav>
        @endif

        @if(request()->query('deleted') === 'true')
            <nav aria-label="breadcrumb">
                <div class="breadcrumb text-danger">
                    Post Deleted
                </div>
            </nav>
        @endif



        <div id="notification"></div>

        <div>
            <div class="btn btn-success">
                <a href="{{route('addNewBlog')}}" class="text-white">
                <i class="px-1 fa-solid fa-square-plus"></i>New Post
                </a>
            </div>
            <div class="btn btn-info"><i class="px-1 fa-solid fa-file"></i>Published</div>
            <div class="btn btn-danger"><i class="px-1 fa-solid fa-circle-pause"></i>Draft</div>
        </div>

        <hr>
    <div class="existingPostList">
        @foreach($data as $item)
            <div class="breadcrumb d-flex flex-row align-item-center justify-items-center">
                <div class="w-75">
                    <a href="{{route('blogUpdate',[$item->id])}}">
                            {{$item->title}}
                    </a>
                    <div class="postInfo row">
                        <div class="col-3">
                            <a href="/{{$item->slug}}" target="_blank">Preview</a>
                        </div>
                        <div class="col-3">ID :<span> {{$item->id}} </span></div>
                        <div class="col-3">Date : <span>{{substr($item->created_at, 0, 10)}}</span></div>
                        @if($item->status=="draft")
                            <div class="col-3">Status :  <span class="text-danger">Draft</span></div>
                        @elseif($item->status=="published")
                            <div class="col-3">Status :  <span class="text-success">Published</span></div>
                        @endif
                    </div>
                </div>
                <div class="w-25 d-flex flex-row align-item-center justify-content-between" style="align-items: center">

                    <div>
                        <button type="submit" class="btn bg-danger text-white btnInline mx-1" onclick="deletePost({{$item->id}})"><i class="px-1 fa-solid fa-trash"></i>Delete</button>
                    </div>

                    <form class="m-0" action="{{route('blogUpdate',[$item->id])}}" method="GET">
                    <button class="btn bg-dark text-white btnInline mx-1"><i class="px-1 fa-solid fa-circle-pause"></i>Edit</button>
                    </form>

                </div>
            </div>
        @endforeach

        {{$data->links()}}

    </div>
    </div>

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    function deletePost(id){
        let check = window.confirm("Are You Sure to delete?")
        if(check==true){
            axios.get("/admin/deleteProduct/"+id)
                .then((response)=>{

                    if(response.status==200){
                        window.location.href="/admin/product?deleted=true"
                    }
                })
                .catch((error)=>{
                    console.log(error)
                })
        }
        else{
            return 0;
        }


    }
</script>
