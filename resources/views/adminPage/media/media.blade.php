@extends('dashboard')
@section('menuContent')

    <div class="mx-3">


        <form action="{{route('postMedia')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <input class="form-control col-9 rounded-2" type="file" name="allImages[]" multiple>
                <button type="submit" class="col-3 btn btn-success">Upload</button>
            </div>
        </form>


        @if(session('imageName'))
            <div class="h3 text-success mt-3">New Images Added</div>
            <div class="row">
            @foreach(session('imageName') as $item)
                    <div class="col-6"> ✅ {{$item}}</div>
            @endforeach
            </div>

        @endif



        @if(session('message'))
            <div class="h3 text-danger mt-3">{{session('message')}}</div>
        @endif





        <div class="row bg-light mt-4 pt-2 rounded-5">
            @foreach($data as $item)
                <div class="col-2 mediaImgSize mt-4">
                    <img src="/public/{{$item->media_path}}" alt="" class="w-25">
                    <div class="my-2 d-flex justify-content-between">

                        <a href="{{route('deleteMedia',['id'=>$item->id])}}" class="btn btn-success">
                            <i class="fa-solid fa-trash-can"></i>Delete
                        </a>

                        <button class="btn btn-danger text-white" id="copyImage">
                            <i class="fa-solid fa-copy"></i>Copy
                        </button>

                    </div>
                </div>
            @endforeach
        </div>



    </div>


@endsection
