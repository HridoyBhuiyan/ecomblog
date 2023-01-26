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
                   <li class="breadcrumb-item"><a href="#">Library</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Data</li>
               </ol>
           </nav>
{{--           breadcrumb end here--}}
       </div>


        <h1>Samsung Galaxy Tab</h1>

{{--        photo section start here--}}
        <div class="row">
            <div class="col-lg-5 col-md-4 d-flex align-items-center justify-content-center">
                <div class="row">
                    <div class="col-12 my-2 d-flex justify-content-center productBinImg">
                        <img src="storage/phoneimg.jpg" alt="">
                    </div>
                    <div class="col-12 productExtraImg d-lg-flex justify-content-center">
                        <img class="m-2" src="storage/phoneimg.jpg" alt="">
                        <img class="m-2" src="storage/phoneimg.jpg" alt="">
                        <img class="m-2" src="storage/phoneimg.jpg" alt="">
                        <img class="m-2" src="storage/phoneimg.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-8">
                <h2 class="pageTitle font-weight-bold">Price in Bangladesh</h2>
                <div class="w-100 mt-4 titleBelowItem">

                    <table border="1" class="w-75">
                        <tr>
                            <td class="w-50 px-2">Official Price</td>
                            <td class="w-50 px-2 regularTextha">Row 1, Cell 2</td>
                        </tr>
                        <tr>
                            <td class="w-50 px-2">Unofficial Price</td>
                            <td class="w-50 px-2 regularTextha">Row 2, Cell 2</td>
                        </tr>
                    </table>

                </div>
                <div class="productKeyFeature d-flex flex-column">
                    <h5 class="mt-lg-4 mt-md-4 mt-sm-2">Key Feature</h5>
                    <span class="regularText">MPN : T295-BSM-T295N</span>
                    <span class="regularText">Model : Galaxy Tab A</span>
                    <span class="regularText">Display : 8-inch WXGA Display</span>
                    <span class="regularText">Storage : 2GB RAM, 32GB ROM</span>
                    <span class="regularText">CPU : Snapdragon 429</span>
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
                                <span id="button-5">Notion</span>
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
                            <h2>Model + Full specifications</h2>

                            <table>
                                <tr>
                                    <th>Processor</th>
                                </tr>
                                <tr>
                                    <td>Processor Brand</td><td>Intel</td>
                                </tr>
                                <tr>
                                    <td>Processor Model</td><td>Celeron 520u</td>
                                </tr>
                                <tr>
                                    <td>Generation</td><td>10th generation</td>
                                </tr>
                                <tr>
                                    <td>Processor Frequency</td><td>1.90 GHz</td>
                                </tr>
                                <tr>
                                    <td>Processor Core</td><td>2</td>
                                </tr>
                                <tr>
                                    <td>Processor Thread</td><td>2</td>
                                </tr>
                                <tr>
                                    <td>CPU Cache</td><td>2 MB</td>
                                </tr>
                                <tr>
                                    <td>Display Size</td><td>14 Inch</td>
                                </tr>
                                <tr>
                                    <td>Display Model</td><td>HD (1366 x 768)</td>
                                </tr>
                                <tr>
                                    <td>Touch screen</td><td>No</td>
                                </tr>
                                <tr>
                                    <td>Display Feature</td><td>16:9 LED Backlit, Non-reflective Anti-Glare</td>
                                </tr>



                            </table>




                        </div>



                    </div>
                    <div id="section-2">
                        <!-- Content for section 2 -->
                        <h2>section 2</h2>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                    </div>
                    <div id="section-3">
                        <!-- Content for section 3 -->
                        section 3<br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                    </div>
                    <div id="section-4">
                        <!-- Content for section 4 -->
                        section 4<br>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                    </div>
                    <div id="section-5">
                        section 5<br>
                        <br>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                        <!-- Content for section 5 -->
                    </div>
                    <div id="section-6">
                        <!-- Content for section 6 -->
                        section 6<br>
                        <br>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

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
