@extends('index')
@section('content')
    <div class="container my-5">
        <div class="productGrid" id="productGrid">



            @foreach($data as $item)
                <div class="d-flex flex-column shadow-lg">
                    <a href="{{url($item->slug)}}">
                    <img src="{{$item->feature_image}}" alt="" class="my-1">
                    <span class="mx-2 text-danger cardTitle">{{$item->title}}</span>

                    <div class="d-flex justify-content-between cardPrice">
                        <div>
                            <span class="mx-2 cardCurrentPrice">
                                {{$item->official_price}}
                            </span>
                            @if($item->unofficial_price)
                                <strike>
                                    {{$item->unofficial_price}}
                                </strike>
                            @endif
                        </div>

                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    </a>
                </div>
            @endforeach

{{--            @foreach($data as $item)--}}
{{--                <div class="d-flex flex-column shadow-lg">--}}
{{--                    <img src="{{$item->feature_image}}" alt="" class="my-1">--}}
{{--                    <span class="mx-2 text-danger cardTitle">{{$item->title}}</span>--}}
{{--                    <div class="d-flex justify-content-between cardPrice">--}}
{{--                        <div>--}}
{{--                            <span class="mx-2 cardCurrentPrice">--}}
{{--                                {{$item->official_price}}--}}
{{--                            </span>--}}
{{--                            @if($item->unofficial_price)--}}
{{--                                <strike>--}}
{{--                                    {{$item->unofficial_price}}--}}
{{--                                </strike>--}}
{{--                            @endif--}}
{{--                        </div>--}}

{{--                        <i class="fa-regular fa-heart"></i>--}}
{{--                        <i class="fa-solid fa-heart"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}


        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>

    </div>
@endsection
