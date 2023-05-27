@extends('index')
@section('title')
        <title>Mobiledokan | SiteMap</title>
@endsection
@section('seometa')


@endsection
@section('content')
    @include('clientLayout.menuBar',['category'=>$category])

<div class="container">
    <h1 class="text-center">Sitemap of MobileDokan.com</h1>
    <div class="row">

        <div class="col-lg-6">
            <h2>Product List</h2>
            <ul>
                @foreach($product as $item)
                    <li><a href="/{{$item->slug}}" target="_blank">{{$item->title}}</a></li>
                @endforeach
            </ul>

            <h2>Product Category</h2>
            <ul>
                @foreach($category as $item)
                    <li><a href="/{{$item->slug}}" target="_blank">{{$item->name}}</a></li>
                @endforeach
            </ul>

        </div>


        <div class="col-lg-6">
            <h2>Post List</h2>
            <ul>
            @foreach($blog as $item)
                <li><a href="/{{$item->slug}}" target="_blank">{{$item->title}}</a></li>
            @endforeach
            </ul>


            <h2>Blog Category</h2>
            <ul>
                @foreach($blogCategory as $item)
                    <li><a href="/{{$item->slug}}" target="_blank">{{$item->name}}</a></li>
                @endforeach
            </ul>


            <h2>Important Pages</h2>
            <ul>
                    <li><a href="/" target="_blank">About Us</a></li>
                    <li><a href="/" target="_blank">Contact</a></li>
                    <li><a href="/" target="_blank">Privacy Policy</a></li>
                    <li><a href="/" target="_blank">Sitemap</a></li>
                    <li><a href="/" target="_blank">DMCA</a></li>
                    <li><a href="/" target="_blank">Advertisement</a></li>
            </ul>


        </div>

    </div>
</div>

@endsection
