<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Sitemap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<div class="bg-light vh-100">
    <div class="container bg-white vh-100">
        <div class="text-center pt-4">This sitemap is generated for <span class="text-danger">Mobile Dokan Org</span>. All copyright of information and data are preserved on this website. If you have any query about this then dont forget to leave your opinion of the contact page. Thank you.</div>
        <div class="pt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="fa-solid fa-house"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="/product-sitemap.xml">
                            Product Sitemap
                        </a>
                    </li>
                </ol>
            </nav>
        </div>

        <hr>


        <div class="row">
            <div class="col-4 font-weight-bold bg-light">Page</div>
            <div class="col-8 font-weight-bold bg-light">URL</div>

            @foreach($data as $item)
                <div class="col-4 ">
                    {{$item->title}}
                </div>
                <div class="col-8">
                    <a href="/{{$item->slug}}" style="color: black">https://mobiledokan.org/{{$item->slug}}</a>
                </div>
            @endforeach

        </div>

    </div>
</div>
</body>
</html>
