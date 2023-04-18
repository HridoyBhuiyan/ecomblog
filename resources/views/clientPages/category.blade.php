@extends('index')
@section('title')
    @if($data['title'])
        <title>Mobiledokan | {{$data['title']}}</title>
    @else
        <title>Mobiledokan | {{$data['name']}} </title>
    @endif
@endsection
@section('seometa')
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="MobileDokan.org"/>
    <meta property="og:title" content="Mobile dokan bangladesh"/>
    <meta property="og:description" content="Full description of mobile dokan .org"/>
    <link rel="canonical" href="https://mobiledokan.org"/>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "NewsArticle",
      "headline": "Title of a News Article",
      "image": [
        "https://example.com/photos/1x1/photo.jpg",
        "https://example.com/photos/4x3/photo.jpg",
        "https://example.com/photos/16x9/photo.jpg"
       ],
      "datePublished": "2015-02-05T08:00:00+08:00",
      "dateModified": "2015-02-05T09:20:00+08:00",
      "author": [{
          "@type": "Person",
          "name": "Jane Doe",
          "url": "https://example.com/profile/janedoe123"
        },{
          "@type": "Person",
          "name": "John Doe",
          "url": "https://example.com/profile/johndoe123"
      }]
    }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Books",
        "item": "https://example.com/books"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Science Fiction",
        "item": "https://example.com/books/sciencefiction"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Award Winners"
      }]
    }
    </script>
@endsection
@section('content')
    <div class="container">
        <h2 class="text-center">{{$data['title']}}</h2>
        <div class="my-4">
{{--                       breadcrumb start here--}}
            <nav aria-label="breadcrumb m-0 p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/"><i class="fa-sharp fa-solid fa-house"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="/category/{{$data['slug']}}">{{$data['name']}}</a></li>
                </ol>
            </nav>
{{--                       breadcrumb end here--}}
        </div>
            <div class="regularText">{{$data['content']}}</div>
        <hr>


        <div class="productGrid" id="productGrid">

        @foreach($data['products'] as $item)
            @if($item->status=='published')
                <div class="d-flex flex-column shadow-lg">
                    <a href="{{url($item->slug)}}" class="m-0 p-0 w-auto">
                        <img src="{{URL::to('public',$item->feature_image)}}" alt="" class="m-0 w-100">
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
            @endif
        @endforeach
            </div>


    </div>
@endsection
