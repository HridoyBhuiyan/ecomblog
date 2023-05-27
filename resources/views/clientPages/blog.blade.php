@extends('index')
@section('title')
    <title>Mobile Dokan | Blog Page</title>
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
    @include('clientLayout.menuBar',['category'=>$category])
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
