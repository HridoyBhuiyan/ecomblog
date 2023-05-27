<nav class="navbar navbar-expand-lg navTop">
    <div class="container">
    <a class="navbar-brand" href="./">
        <img src="https://mobiledokan.org/public/storage/mobile%20dokan%20logo.webp" class="logo">
    </a>
    <button id="target" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <i class="fa-sharp fa-solid fa-bars"></i>
        </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0 w-50 d-flex">
            <input class="form-control mr-sm-2 w-75" type="search" placeholder="Search" aria-label="Search">
            <button class="btn my-2 my-sm-0" type="submit">Search</button>
        </form>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Review</a>
            </li>
        </ul>
        <a href="/blog" class="btn text-white btn-danger">Blog</a>
    </div>
    </div>
</nav>


{{--<div class="d-flex align-items-center justify-content-center bg-white container-fluid seconderyMenu" style="height: 40px">--}}
{{--    <button id="leftBtnID" class="m-1"><i class="fa-solid fa-chevron-left"></i></button>--}}
{{--    <ul id="horizontalNav" class="d-flex list-unstyled m-0">--}}
{{--        <li class="px-3 py-2"><a href="*">Home</a></li>--}}
{{--        <li class="px-3 py-2"><a href="*">Home</a></li>--}}

{{--    </ul>--}}
{{--    <button id="rightBtnID" class="m-1"><i class="fa-solid fa-chevron-right"></i> </button>--}}
{{--</div>--}}


{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.js" integrity="sha512-A/D/17S8jG62ka9f3jPwMs+bKGJ1f/xQts7bAUjTIKQf0anTGjlpuEz3q9q++3qRAVYKS3iVx6KzM8GPtIaYfw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
{{--<script>--}}

{{--    axios.get('showAllProductCategory')--}}
{{--        .then(response => {--}}
{{--            const categoryJSON = response.data;--}}
{{--            categoryJSON.map((item, index)=>{--}}
{{--                console.log(item)--}}
{{--                const horizontalNav = document.getElementById('horizontalNav')--}}
{{--                const li = document.createElement('li')--}}
{{--                li.setAttribute('class','px-3 py-2');--}}
{{--                const a = document.createElement('a')--}}
{{--                a.setAttribute('href',"/category/"+item.slug)--}}
{{--                a.appendChild(document.createTextNode(item.name))--}}
{{--                li.appendChild(a)--}}
{{--                horizontalNav.appendChild(li)--}}
{{--            })--}}

{{--        })--}}
{{--        .catch(error => {--}}
{{--            console.log(error);--}}
{{--        });--}}


{{--</script>--}}
