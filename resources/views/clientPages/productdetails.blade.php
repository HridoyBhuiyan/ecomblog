@extends('index')
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
                        <img src="{{$data["product"]->feature_image}}" alt="">
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
                            <td class="w-50 px-2 regularTextha">{{$data["product"]->unofficial_price}}</td>
                        </tr>
                    </table>

                </div>
                <div class="productKeyFeature d-flex flex-column">
                    <h5 class="mt-lg-4 mt-md-4 mt-sm-2">Key Feature</h5>
                    <span class="regularText">Release Date : {{$data["product"]->release_date}}</span>
                    <span class="regularText">OS version : Galaxy Tab A</span>
                    <span class="regularText">Display : 8-inch WXGA Display</span>
                    <span class="regularText">Camera : 2GB RAM, 32GB ROM</span>
                    <span class="regularText">Battery : Snapdragon 429</span>
                    <span class="regularText">GPU : Adreno 504</span>
                    <span class="regularText">Battery : 5100 mAh</span>
                </div>


                <hr>

                <div>
                    <div class="row mt-3">
                        <div class="col-6 border-right">
                            <h5>You may like</h5>
                            <a href=""><i class="fa-solid fa-arrow-right"></i><span class="mx-1">Iphone 12 pro+</span></a>
                            <br>
                            <a href=""><i class="fa-solid fa-arrow-right"></i><span class="mx-1">Samsung 12 pro+</span></a>
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
                        <button id="button-1" class="btnScroll btn">
                            <a id="button-1" href="#specification">
                                <img id="button-1" src="/storage/clipboard.png">
                                <span id="button-1">Spec</span>

                            </a>
                        </button>
                        <button id="button-2" class="btnScroll btn">
                            <a id="button-2" href="#description">
                                <img id="button-2" src="/storage/description.png">
                                <span id="button-2">Details</span>
                                </a>
                        </button>
                        <button id="button-3" class="btnScroll btn">
                            <a id="button-3" href="#pros&cons">
                                <img id="button-3" src="/storage/yn.png">
                                <span id="button-3">Pros & Cons</span>
                            </a>
                            </button>
                        <button id="button-4" class="btnScroll btn">
                            <a id="button-4" href="#video">
                                <img id="button-4" src="/storage/play.png">
                                <span id="button-4">Video</span>
                                </a>
                        </button>
                        <button id="button-5" class="btnScroll btn">
                            <a id="button-5" href="#things-to-know">
                                <img id="button-5" src="/storage/ttk.png">
                                <span id="button-5">Overview</span>
                                </a>
                        </button>
                        <button id="button-6" class="btnScroll btn">
                            <a id="button-6" href="#faq">
                                <img  id="button-6" src="/storage/faq.png">
                                <span  id="button-6">FAQ</span>
                                </a>
                        </button>
                        </div>
                    </div>
                    <div id="section-1">


                        <div class="">
                            <h4>Specifications</h4>
                            {!! $data["product"]->specification !!}
                        </div>



                    </div>
                    <div id="section-2">
                        <!-- Content for section 2 -->
                        <h4>Description</h4>
                        {!! $data["product"]->description !!}
                    </div>

                    @if($data['pros'] ||$data['cons'])

                    <div id="section-3">
                        <!-- Content for section 3 -->
                        <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                    <h4>Pros</h4>
                                    <ul>
                                        @foreach($data['pros'] as $item)
                                            <li>{{$item}}</li>
                                        @endforeach
                                    </ul>
                                    </div>


                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <h4>Cons</h4>
                                            <ul>
                                                @foreach($data['cons'] as $item)
                                                    <li>{{$item}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                        </div>

                    </div>

                    @endif

                    <div id="section-4">
                        <!-- Content for section 4 -->
                        <h4>Video</h4>

                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NIjJqa8jxbE" allow="autoplay; encrypted-media; fullscreen" frameborder="0"></iframe>
                        </div>

                    </div>
                    <div id="section-5">
                        <h4>Overview</h4>
                        {!! $data['product']->things_to_know !!}

                        <!-- Content for section 5 -->
                    </div>
                    <div id="section-6">
                        <!-- Content for section 6 -->
                        <h4>FAQ</h4>

                        @foreach($data['faq'] as $item)
                        <div>
                            <b>Question : </b> {{$item->question}}
                            <br>
                            <b>Answer : </b> {{$item->answer}}
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>



{{--            Related product Section--}}



            <div class="col-lg-4 col-md-4 col-sm-12 ">



                <div class="p-1 border bg-white relatedSection">
                    <div class="h5 text-center my-2" style="color:#022335">Popular product</div>
                    <hr>
                    <div>


                        <div class="row relatedProduct my-1">
                            <div class="col-3">
                                <img src="storage/mobile.webp" alt="">
                            </div>
                            <div class="col-9">
                                <span>Samsung Galary S10+</span>
                                <p class="cardCurrentPrice text-danger">20,000$</p>
                            </div>
                        </div>



                        <div class="row relatedProduct my-1">
                            <div class="col-3">
                                <img src="storage/mobile.webp" alt="">
                            </div>
                            <div class="col-9">
                                <span>Samsung Galary S10+ 2023 edition</span>
                                <p class="cardCurrentPrice text-danger">20,000$</p>
                            </div>
                        </div>



                        <div class="row relatedProduct my-1">
                            <div class="col-3">
                                <img src="storage/mobile.webp" alt="">
                            </div>
                            <div class="col-9">
                                <span>Samsung Galary S10+ 2023 edition</span>
                                <p class="cardCurrentPrice text-danger">20,000$</p>
                            </div>
                        </div>



                        <div class="row relatedProduct my-1">
                            <div class="col-3">
                                <img src="storage/mobile.webp" alt="">
                            </div>
                            <div class="col-9">
                                <span>Samsung Galary S10+ 2023 edition</span>
                                <p class="cardCurrentPrice text-danger">20,000$</p>
                            </div>
                        </div>




                    </div>
                </div>

            </div>
        </div>

{{--        tab end here--}}
    </div>
@endsection
