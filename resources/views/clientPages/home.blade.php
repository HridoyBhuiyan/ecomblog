@extends('index')
@section('title')
    <title>Mobile Dokan | Home Page</title>
@endsection
@section('content')
    <div class="container my-5">
        <div class="productGrid" id="productGrid">



            @foreach($data as $item)
                <div class="d-flex flex-column shadow-lg">
                    <a href="{{url($item->slug)}}" class="m-0 p-0 w-auto">
                    <img src="{{$item->feature_image}}" alt="" class="m-0 w-100">
                    <span class="mx-2 text-danger cardTitle">{{$item->title}}</span>

                    <div class="d-flex justify-content-between cardPrice">
                        <div>
                            <span class="mx-2 cardCurrentPrice">
                                {{strpos($item->official_price,"৳")?explode("৳",$item->official_price)[1]: $item->official_price}}
                            </span>
                            @if($item->unofficial_price)
                                <strike>
                                    {{strpos($item->unofficial_price,"৳")?explode("৳",$item->unofficial_price)[1]: $item->unofficial_price}}
                                </strike>
                            @endif
                        </div>

                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    </a>
                </div>
            @endforeach



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

    <div class="container regularText">
        <h5>Leading computer, laptop and gaming PC retaile and online shop in Bangladesh</h5>
        <p>Lorem ipsum dollar sit Lorem ipsum dollar sit Lorem ipsum dollar
            sit Lorem ipsum dollar sit Lorem ipsum dollar sit Lorem ipsum dollar sit Lorem ipsum dollar sit Lorem ipsum do
            llar sit Lorem ipsum dollar sit Lorem ipsum dollar sit Lorem ipsum dollar sit Lorem ipsum dollar sit Lorem ipsu
            m dollar sit Lorem ipsum dollar sit Lorem ipsum dollar sit Lorem ipsum dollar sit Lorem ipsum dollar sit Lorem
            ipsum dollar sit Lorem ipsum dollar sit Lorem ipsum dollar sit Lorem ipsum dollar sit Lorem ipsum dollar sit Lo
            rem ipsum dollar sit Lorem ipsum dollar sit Lorem ipsum dollar sit Lorem ipsum dollar sit Lorem ipsum dollar sit </p>
    </div>
@endsection
