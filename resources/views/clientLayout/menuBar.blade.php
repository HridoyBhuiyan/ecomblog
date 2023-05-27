<div class="d-flex align-items-center justify-content-center bg-white container-fluid seconderyMenu" style="height: 40px">

    <button id="leftBtnID" class="m-1 d-none">
        <i class="fa-solid fa-chevron-left"></i>
    </button>

    <ul id="horizontalNav" class="d-flex list-unstyled m-0">
        @foreach($category as $item)
            <li class="px-3 py-2"><a href="/category/{{$item->slug}}">{{$item->name}}</a></li>
        @endforeach
    </ul>

    <button id="rightBtnID" class="m-1 d-none">
        <i class="fa-solid fa-chevron-right"></i>
    </button>
</div>
