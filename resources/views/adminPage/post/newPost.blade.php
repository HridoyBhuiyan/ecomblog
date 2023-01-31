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
        <h5>Post Title</h5>
        <input type="text" class="form-control" placeholder="Title Here" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <h5 class="my-1 mt-3">Content Here</h5>
        <textarea id="default-editor"></textarea>
        <div class="row">
            <div class="col-6">
                <h5 class="my-1 mt-3">Post Thumbnail</h5>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    </div>
                    <div>
                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="col-6 rounded">
                <h5 class="my-1 mt-3">Category selection</h5>
                <select class="form-select w-100" style="border: none" aria-label="Default select example">
                   @foreach($data as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <h5 class="my-1 mt-3">Post Slug</h5>
        <input type="text" class="form-control" placeholder="Meta Title" aria-label="Meta Title" aria-describedby="basic-addon2">

        <h5 class="my-1 mt-3">Meta Title</h5>
        <input type="text" class="form-control" placeholder="Meta Title" aria-label="Meta Title" aria-describedby="basic-addon2">

        <h5 class="my-1 mt-3">Meta Description</h5>
        <input type="text" class="form-control" placeholder="Meta Description" aria-label="Meta Title" aria-describedby="basic-addon2">

        <hr>

        <div class="d-flex w-100" style="justify-content: space-around">
            <button class="btn btn-info w-25">Post</button>
            <button class="btn btn-danger w-25">Draft</button>
            <button class="btn btn-dark w-25">Schedule</button>
        </div>


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
