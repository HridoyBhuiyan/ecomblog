@extends('index')
@section('content')
    <div class="container my-2">
        <div class="row">


            @foreach($data as $item)
                <div class="col-lg-6 col-md-6 col-sm-12 my-2">
                    <div class="row blogItem" id="blogItem">
                        <div class="col-4 bg-white d-flex align-items-center justify-content-center">
                            <img src="{{$item->thumbnail}}" alt="">
                        </div>
                        <div class="col-8">
                            <span class="blogCardTitle">{{$item->title}}</span>
                            <p class="regularText" id="blogContent">{{substr($item->blog_content,0,170)}}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
