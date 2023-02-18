@extends('dashboard')
@section('menuContent')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add New Post</li>
        </ol>
    </nav>


    <form action="{{route('postNewPostData')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h5>Post Title</h5>

        <input value="{{$data['title']}}" name="title" id="titleID" type="text" class="form-control" placeholder="Title Here">
        <h5 class="my-1 mt-3">Content Here</h5>
        <textarea name="content" id="contentID">
            {{$data['content']}}
        </textarea>
        <div class="row">
            <div class="col-6">
                <h5 class="my-1 mt-3">Update Thumbnail</h5>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    </div>
                    <div>
                        <input name="thumbnail" class="bg-white rounded-2" type="file"  id="thumbnailID">
                    </div>
                </div>
            <div class="rounded">
                <h5 class="my-1 mt-3">Category selection</h5>

                                <select name="category" id="categoryID" class="form-select w-100" style="border: none" aria-label="Default select example">
                                    @foreach($data['allCategory'] as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
            </div>
        </div>
            <div class="col-6 rounded">
                <h5 class="my-1 mt-3">Current Thumbnail</h5>
                <img src="{{$data['thumbnail']}}" alt="" style="height: 200px">
            </div>
        </div>

        <h5 class="my-1 mt-3">Tags</h5>
        <select name="tag" id="tagID" class="form-select w-100" style="border: none" aria-label="Default select example">
            @foreach($data['allTags'] as $item)
                <option value="{{$item->id}}" class="d-flex justify-content-center align-items-center">
                    {{$item->name}}
                </option>
            @endforeach
        </select>
        <div class="my-1">
            <div class="d-inline">Selected Tags: </div>
            <ul name="selectedTags" class="selectedTags" id="selectedTags">
                @foreach($data['tags'] as $item)
                    <li>
                        <input type="hidden" name="items[]" value="{{$item->id}}">
                        {{$item->name}}
                    </li>
                @endforeach
            </ul>
        </div>


        <h5 class="my-1 mt-3">Post Slug</h5>
        <input name="slug" value="{{$data['slug']}}" id="slugID" type="text" class="form-control" placeholder="Post Slug here" aria-label="Meta Title" aria-describedby="basic-addon2">

        <h5 class="my-1 mt-3">Meta Title</h5>

        <input value="{{$data['metaTitle']}}" name="metaTitle" id="metaTitleID" type="text" class="form-control" placeholder="Meta Title" aria-label="Meta Title" aria-describedby="basic-addon2">

        <h5 class="my-1 mt-3">Meta Description</h5>
        <input value="{{$data['metaDescription']}}" name="metaDescription" id="metaDescriptionID" type="text" class="form-control" placeholder="Meta Description" aria-label="Meta Title" aria-describedby="basic-addon2">

        <hr>

        <div class="d-flex w-100" style="justify-content: space-around">
            <div>
                <span class="h5 shadow-sm">Set Publishing Time : </span>
                <input value="{{$data['schedule']}}" type="datetime-local" id="scheduleTime" class="border-0 rounded">
            </div>
            <div class="btn btn-dark w-25" id="blogPostSchedule">Schedule</div>
        </div>

        <hr>

        <div class="d-flex w-100" style="justify-content: space-around">
            <button type="submit" class="btn btn-info w-25">Post</button>
            <div class="btn btn-danger w-25" id="postDraft">Draft</div>
        </div>
    </form>


    <script src="https://cdn.tiny.cloud/1/2nvxye6w441ol74rklwjtaq3w9utq0rgkdhg9ni5sh6hehju/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>

        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>

@endsection
