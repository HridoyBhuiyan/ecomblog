@extends('dashboard')
@section('menuContent')
<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add New Post</li>
        </ol>
    </nav>


    <div>
        <form action="{{route('postNewPostData')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <h5>Post Title</h5>

            @if($errors->has('title'))
                <div class="text-danger">
                    You maybe missed the title
                </div>
            @endif

        <input name="title" id="titleID" type="text" class="form-control" placeholder="Title Here" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <h5 class="my-1 mt-3">Content Here</h5>
            @if($errors->has('content'))
                <div class="text-danger">
                    You maybe missed the Content
                </div>
            @endif
        <textarea name="content" id="contentID"></textarea>
        <div class="row">
            <div class="col-6">


                <h5 class="my-1 mt-3">Post Thumbnail</h5>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    </div>
                    <div>

                        @if($errors->has('thumbnail'))
                            <div class="text-danger">
                                You maybe missed the thumbnail
                            </div>
                        @endif
                        <input name="thumbnail" class="bg-white rounded-2" type="file"  id="thumbnailID">

                    </div>
                </div>
            </div>


{{--            <input type="file"/>--}}

            <div class="col-6 rounded">
                <h5 class="my-1 mt-3">Category selection</h5>
                @if($errors->has('category'))
                    <div class="text-danger">
                        You maybe missed the Category
                    </div>
                @endif
                <select name="category" id="categoryID" class="form-select w-100" style="border: none" aria-label="Default select example">
                   @foreach($data['category'] as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

            <h5 class="my-1 mt-3">Tags</h5>
            <select name="tag" id="tagID" class="form-select w-100" style="border: none" aria-label="Default select example">
                @foreach($data['tag'] as $item)
                    <option value="{{$item->id}}" class="d-flex justify-content-center align-items-center">
                        {{$item->name}}
                    </option>
                @endforeach
            </select>
            <div class="my-1">
                <div class="d-inline">Selected Tags: </div><ul name="selectedTags" class="selectedTags" id="selectedTags"></ul>
            </div>


        <h5 class="my-1 mt-3">Post Slug</h5>
        <input name="slug" id="slugID" type="text" class="form-control" placeholder="Post Slug here" aria-label="Meta Title" aria-describedby="basic-addon2">

        <h5 class="my-1 mt-3">Meta Title</h5>
            @if($errors->has('metaTitle'))
                <div class="text-danger">
                    You maybe missed the Content
                </div>
            @endif
        <input name="metaTitle" id="metaTitleID" type="text" class="form-control" placeholder="Meta Title" aria-label="Meta Title" aria-describedby="basic-addon2">

        <h5 class="my-1 mt-3">Meta Description</h5>
        <input name="metaDescription" id="metaDescriptionID" type="text" class="form-control" placeholder="Meta Description" aria-label="Meta Title" aria-describedby="basic-addon2">

        <hr>

        <div class="d-flex w-100" style="justify-content: space-around">
            <div>
                <span class="h5 shadow-sm">Set Publishing Time : </span>
                <input type="datetime-local" id="scheduleTime" class="border-0 rounded">
            </div>
            <div class="btn btn-dark w-25" id="blogPostSchedule">Schedule</div>
        </div>

            <hr>

        <div class="d-flex w-100" style="justify-content: space-around">
            <button type="submit" class="btn btn-info w-25">Post</button>

            <div class="btn btn-danger w-25" id="postDraft">Draft</div>
        </div>

        </form>
    </div>



</div>
<script src="https://cdn.tiny.cloud/1/vw3zokhz7kbwxhmtl6uwdc8db3jlldp8h57k1r01rpy2wlgr/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>

     tinymce.init({
         selector: 'textarea',
         plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
         toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
     });
</script>


@endsection
