@extends('index')
@section('title')
    <title>{{$data["product"]->title}}</title>
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
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "Executive Anvil",
      "description": "Sleeker than ACME's Classic Anvil, the Executive Anvil is perfect for the business traveler looking for something to drop from a height.",
      "review": {
        "@type": "Review",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "4",
          "bestRating": "5"
        },
        "author": {
          "@type": "Person",
          "name": "Fred Benson"
        }
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.4",
        "reviewCount": "89"
      }
    }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "What is the return policy?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<p>Most unopened items in new condition and returned within <b>90 days</b> will receive a refund or exchange. Some items have a modified return policy noted on the receipt or packing slip. Items that are opened or damaged or do not have a receipt may be denied a refund or exchange. Items purchased online or in-store may be returned to any store.</p><p>Online purchases may be returned via a major parcel carrier. <a href=https://example.com/returns> Click here </a> to initiate a return.</p>"
        }
      }, {
        "@type": "Question",
        "name": "How long does it take to process a refund?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We will reimburse you for returned items in the same way you paid for them. For example, any amounts deducted from a gift card will be credited back to a gift card. For returns by mail, once we receive your return, we will process it within 4–5 business days. It may take up to 7 days after we process the return to reflect in your account, depending on your financial institution's processing time."
        }
      }, {
        "@type": "Question",
        "name": "What is the policy for late/non-delivery of items ordered online?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<p>Our local teams work diligently to make sure that your order arrives on time, within our normaldelivery hours of 9AM to 8PM in the recipient's time zone. During  busy holiday periods like Christmas, Valentine's and Mother's Day, we may extend our delivery hours before 9AM and after 8PM to ensure that all gifts are delivered on time. If for any reason your gift does not arrive on time, our dedicated Customer Service agents will do everything they can to help successfully resolve your issue.</p><p><a href=https://example.com/orders/>Click here</a> to complete the form with your order-related question(s).</p>"
        }
      }, {
        "@type": "Question",
        "name": "When will my credit card be charged?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We'll attempt to securely charge your credit card at the point of purchase online. If there's a problem, you'll be notified on the spot and prompted to use another card. Once we receive verification of sufficient funds, your payment will be completed and transferred securely to us. Your account will be charged in 24 to 48 hours."
        }
      }, {
        "@type": "Question",
        "name": "Will I be charged sales tax for online orders?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Local and State sales tax will be collected if your recipient's mailing address is in: <ul><li>Arizona</li><li>California</li><li>Colorado</li></ul>"}
        }]
    }
    </script>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "Cheese Knife Pro",
        "review": {
          "@type": "Review",
          "name": "Cheese Knife Pro review",
          "author": {
            "@type": "Person",
            "name": "Pascal Van Cleeff"
          },
          "positiveNotes": {
            "@type": "ItemList",
            "itemListElement": [
              {
                "@type": "ListItem",
                "position": 1,
                "name": "Consistent results"
              },
              {
                "@type": "ListItem",
                "position": 2,
                "name": "Still sharp after many uses"
              }
            ]
          },
          "negativeNotes": {
            "@type": "ItemList",
            "itemListElement": [
              {
                "@type": "ListItem",
                "position": 1,
                "name": "No child protection"
              },
              {
                "@type": "ListItem",
                "position": 2,
                "name": "Lacking advanced features"
              }
            ]
          }
        }
      }
    </script>

@endsection
@section('content')
    <div class="container">

       <div class="my-4">
{{--           breadcrumb start here--}}
           <nav aria-label="breadcrumb m-0 p-0">
               <ol class="breadcrumb">
                   <li class="breadcrumb-item">
                       <a href="#">
                           <i class="fa-sharp fa-solid fa-house"></i>
                       </a>
                   </li>
                   <li class="breadcrumb-item"><a href="/">Product</a></li>
                   <li class="breadcrumb-item active" aria-current="page">{{$data["product"]->title}}</li>
               </ol>
           </nav>
{{--           breadcrumb end here--}}
       </div>


        <h1>
            {{$data["product"]->title}}
        </h1>

{{--        photo section start here--}}
        <div class="row">
            <div class="col-lg-5 col-md-4 d-flex align-items-center justify-content-center">
                <div class="row">
                    <div class="col-12 my-2 d-flex justify-content-center productBinImg">
                        <img src="{{URL::to('public',$data["product"]->feature_image)}}" alt="">
                    </div>
                    <div class="col-12 productExtraImg d-lg-flex justify-content-center">
{{--                        <img class="m-2" src="storage/phoneimg.jpg" alt="">--}}
{{--                        <img class="m-2" src="storage/phoneimg.jpg" alt="">--}}
{{--                        <img class="m-2" src="storage/phoneimg.jpg" alt="">--}}
{{--                        <img class="m-2" src="storage/phoneimg.jpg" alt="">--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-8">
                <h2 class="pageTitle font-weight-bold">Price in Bangladesh</h2>
                <div class="w-100 mt-4 titleBelowItem">

                    <table border="1" class="w-75">
                        <tr>
                            <td class="w-50 px-2">Official Price</td>
                            <td class="w-50 px-2 regularTextha">
                                {{$data["product"]->official_price}}
                            </td>
                        </tr>
                        <tr>
                            <td class="w-50 px-2">Unofficial Price</td>
                            <td class="w-50 px-2 regularText">{{$data["product"]->unofficial_price}}</td>
                        </tr>
                    </table>

                </div>
                <div class="productKeyFeature d-flex flex-column">
                    <h5 class="mt-lg-4 mt-md-4 mt-sm-2">Key Feature</h5>
                    <span class="regularText"> <span class="font-semibold">Release Date :</span> {{$data["product"]->release_date}}</span>
                    <span class="regularText"> <span class="font-semibold">OS version :</span> {{$data['product']->OS_version}}</span>
                    <span class="regularText"> <span class="font-semibold">Display :</span> {{$data['product']->display}}</span>
                    <span class="regularText"> <span class="font-semibold">Camera :</span> {{$data['product']->camera}}</span>
                    <span class="regularText"> <span class="font-semibold">RAM :</span> {{$data['product']->ram}}</span>
                    <span class="regularText"> <span class="font-semibold">Battery :</span> {{$data['product']->battery}}</span>

                </div>


                <hr>

                <div>
                    <div class="row mt-3">
                        <div class="col-6 border-right">
                            <h5>You may like</h5>
                            @foreach($data['similarCategoryProduct'] as $item)
                                <a href=""><i class="fa-solid fa-arrow-right"></i><span class="mx-1">{{$item->title}}</span></a>
                                <br>
                            @endforeach

                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-center flex-column">
                            <div class="h4 mt-2">
                                <i class="fa-solid fa-heart"></i> 9
                            </div>
                             <p>People Choose This</p>
                        </div>
                    </div>
                    <hr>
                </div>

            </div>
        </div>
{{--        photo section end here--}}



{{--        tab start here--}}
        <div class="row my-5">
            <div class="col-lg-8 col-md-8 col-sm-12">


                <div class="scrollContainer">
                    <div>
                        <h6 class="text-center bg-white py-2">Table Content</h6>
                        <div class="d-flex align-items-center justify-content-between">


                            @if(!$data["product"]->specification==null)
                                <button id="button-1" class="btnScroll btn">
                                    <a id="button-1" href="#specification">
                                        <img id="button-1" src="public/storage/clipboard.png">
                                        <span id="button-1">Spec</span>
                                    </a>
                                </button>
                            @endif

                                @if($data["product"]->description)
                                    <button id="button-2" class="btnScroll btn">
                                        <a id="button-2" href="#description">
                                            <img id="button-2" src="public/storage/description.png">
                                            <span id="button-2">Details</span>
                                        </a>
                                    </button>
                                @endif


                                @if($data['pros'] ||$data['cons'])
                                    <button id="button-3" class="btnScroll btn">
                                        <a id="button-3" href="#pros&cons">
                                            <img id="button-3" src="public/storage/yn.png">
                                            <span id="button-3">Pros & Cons</span>
                                        </a>
                                    </button>
                                @endif


                                @if($data["product"]->video_link)
                                    <button id="button-4" class="btnScroll btn">
                                        <a id="button-4" href="#video">
                                            <img id="button-4" src="public/storage/play.png">
                                            <span id="button-4">Video</span>
                                        </a>
                                    </button>
                                @endif


                                @if($data['product']->things_to_know)
                                    <button id="button-5" class="btnScroll btn">
                                        <a id="button-5" href="#things-to-know">
                                            <img id="button-5" src="public/storage/ttk.png">
                                            <span id="button-5">Overview</span>
                                        </a>
                                    </button>
                                @endif

                                @if($item->question)
                                    <button id="button-6" class="btnScroll btn">
                                        <a id="button-6" href="#faq">
                                            <img  id="button-6" src="public/storage/faq.png">
                                            <span  id="button-6">FAQ</span>
                                        </a>
                                    </button>
                                @endif
                        </div>
                    </div>




                    @if(!$data["product"]->specification==null)
                    <div id="section-1">

                        <div>
                            <h4>{{$data["product"]->title}} full Specifications</h4>
                            <div class="productSpecification">
                            {!! $data["product"]->specification !!}
                            </div>
                        </div>

                    </div>
                    @endif



                    @if($data["product"]->description)
                        <div id="section-2">
                            <!-- Content for section 2 -->
                            <h4>{{$data["product"]->title}} Description</h4>
                            {!! $data["product"]->description !!}
                        </div>
                    @endif






                    @if($data['pros'] ||$data['cons'])
                    <div id="section-3">
                        <!-- Content for section 3 -->
                        <div class="row p-0 m-0">

                                    <div class="col-lg-6 col-md-6 col-sm-12 m-0 p-0">
                                    <h4 class="bg-success p-2 text-white">Pros</h4>
                                    <ul class="list-unstyled">
                                        @foreach($data['pros'] as $item)
                                            <li class="p-1">✅{{$item}}</li>
                                        @endforeach
                                    </ul>
                                    </div>


                                    <div class="col-lg-6 col-md-6 col-sm-12 m-0 p-0">
                                    <h4 class="bg-danger p-2 text-white">Cons</h4>
                                    <ul class="list-unstyled">
                                        @foreach($data['cons'] as $item)
                                            <li class="p-1">❌{{$item}}</li>
                                        @endforeach
                                    </ul>
                                    </div>


                            </div>

                    </div>
                    @endif


                    @if($data["product"]->video_link)
                            <div id="section-4">
                                <!-- Content for section 4 -->
                                <h4>{{$data["product"]->title}} Video</h4>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$data["product"]->video_link}}" allow="autoplay; encrypted-media; fullscreen" frameborder="0"></iframe>
                                </div>
                            </div>
                    @endif



                    @if($data['product']->things_to_know)
                        <div id="section-5">
                            <h4>{{$data["product"]->title}} Overview</h4>
                            {!! $data['product']->things_to_know !!}
                            <!-- Content for section 5 -->
                        </div>
                    @endif

                    @if($data['product']->question)
                        <div id="section-6">
                            <!-- Content for section 6 -->
                            <h4>{{$data["product"]->title}} FAQ</h4>
                            @foreach($data['faq'] as $item)
                                <div>
                                    <div class="font-weight-bold py-1"> {{$item->question}}</div>
                                    <div>{{$item->answer}}</div>
                                </div>
                            @endforeach
                        </div>
                    @endif






                    <div id="section-7" class="bg-white p-2 mt-3 rounded">
                        <!-- Content for section 6 -->
                        <h4>Leave your Query</h4>
                        @if(session('msg'))
                            <p class="text-success">{{session("msg")}}</p>
                        @endif
                        <form action="{{route('postComment',['productID'=>$data["product"]->id])}}" method="post">
                            @csrf
                        <textarea name="query" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <button class="btn btn-success w-100 mt-2" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>



{{--            Related product Section--}}



            <div class="col-lg-4 col-md-4 col-sm-12 ">



                <div class="p-1 border bg-white relatedSection">
                    <div class="h5 text-center my-2" style="color:#022335">Popular product</div>
                    <hr>
                    <div>

                        @foreach($data['similarTagProduct'] as $item)
                            <div class="row relatedProduct my-1">
                                <div class="col-3">
                                    <img src="{{URL::to('public',$item->feature_image)}}" alt="">
                                </div>
                                <div class="col-9">
                                    <span>{{$item->title}}</span>
                                    <p class="cardCurrentPrice text-danger">
                                        {{strpos($item->official_price,"৳")?explode("৳",$item->official_price)[1]: $item->official_price}}
                                    </p>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>

            </div>
        </div>

{{--        tab end here--}}
    </div>
@endsection
