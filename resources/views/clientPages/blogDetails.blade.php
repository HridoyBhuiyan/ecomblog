@extends('index')
@section('title')
    <title>{{$data['postData']->title}}</title>
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
        <div class="row my-5">
            <div class="col-lg-8">

                <nav aria-label="breadcrumb" class="bg-white p-2 rounded">
                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        <li class="breadcrumb-item active" aria-current="page">Smart phone market condition now a day</li>
                    </ol>
                </nav>


                <h1 class="blogTitle my-2 mt-4">
                    {{$data['postData']->title}}
                </h1>
                <span class="spanText"><b>Date:</b> 21/1/2020</span>
                <span class="spanText"><b>Author:</b> Cool Author</span>
                <hr>

                <div class="blogText">
                    {!! $data['postData']->blog_content !!}
                </div>

                <hr>

                <div class="comment mt-4">
                    <p class="text-center p-2 bg-white rounded">Leave your comment</p>
                    <input class="name w-100 my-2 p-2" placeholder="Your Name"></input>
                    <textarea class="w-100 p-2" placeholder="Your Comment"></textarea>
                    <div>
                        <button class="btn w-100">Submit</button>
                    </div>
                </div>

            </div>


            <div class="col-lg-4 rounded blogSidebarTop">
                <div class="bg-white rounded  mb-1 blogSidebar">
                    <div class="text-center">
                        Related Post
                    </div>
                    <div>

                        <div>

                            <div class="row blogSidebarItem  d-flex flex-row my-3">
                                <div class="col-4">
                                    <img src="/storage/phoneimg.jpg" alt="">
                                </div>
                                <div class="col-8">
                                    <p>New One+ mobile in the market</p>
                                    <p class="blogText">
                                        Building an ecommerce website can be a great way to expand your business, but it can also be expensive.
                                    </p>
                                </div>
                            </div>

                            <div class="row blogSidebarItem  d-flex flex-row my-3">
                                <div class="col-4">
                                    <img src="/storage/phoneimg.jpg" alt="">
                                </div>
                                <div class="col-8">
                                    <p>New One+ mobile in the market</p>
                                    <p class="blogText">
                                        Building an ecommerce website can be a great way to expand your business, but it can also be expensive.
                                    </p>
                                </div>
                            </div>

                            <div class="row blogSidebarItem  d-flex flex-row my-3">
                                <div class="col-4">
                                    <img src="/storage/phoneimg.jpg" alt="">
                                </div>
                                <div class="col-8">
                                    <p>New One+ mobile in the market</p>
                                    <p class="blogText">
                                        Building an ecommerce website can be a great way to expand your business, but it can also be expensive.
                                    </p>
                                </div>
                            </div>

                            <div class="row blogSidebarItem  d-flex flex-row my-3">
                                <div class="col-4">
                                    <img src="/storage/phoneimg.jpg" alt="">
                                </div>
                                <div class="col-8">
                                    <p>New One+ mobile in the market</p>
                                    <p class="blogText">
                                        Building an ecommerce website can be a great way to expand your business, but it can also be expensive.
                                    </p>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
