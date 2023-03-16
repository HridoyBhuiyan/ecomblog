@extends('index')
@section('content')
    <div class="container my-2">
        <div class="row">


            @foreach($data as $item)
                <a href="{{$item->slug}}" class="col-lg-6 col-md-6 col-sm-12 my-2">
                    <div class="row blogItem" id="blogItem">
                        <div class="col-4 bg-white d-flex align-items-center justify-content-center">
                            <img src="{{$item->thumbnail}}" alt="">
                        </div>
                        <div class="col-8">
                            <span class="blogCardTitle">{{$item->title}}</span>
                            <p class="regularText" id="blogContent">{{substr($item->blog_content,0,170)}}</p>
                        </div>
                    </div>
                </a>
            @endforeach


            <div class="blogPagination mt-2 mb-5">
                @if($_SERVER['REQUEST_URI']=='/blog')
                    <a href="{{$data->nextPageUrl()}}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">Next »</a>
                @else
                    {{$data->links()}}
                @endif
            </div>



        </div>
    </div>
@endsection
