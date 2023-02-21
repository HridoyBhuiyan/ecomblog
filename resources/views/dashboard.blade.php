<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="pt-1 col-2 bg-white menuItem">
                    <ul>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">
                            <a href="/admin/summery">
                                <i class="fa-solid fa-qrcode"></i>
                                Summery
                            </a>
                        </li>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">

                            <a href="/admin/product">
                                <i class="fa-solid fa-box"></i>
                                Product Post
                            </a>
                        </li>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">

                            <a href="/admin/blog">
                                <i class="fa-solid fa-newspaper"></i>
                                Blog Post
                            </a>
                        </li>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">

                            <a href="/admin/blog">
                                <i class="fa-solid fa-photo-film"></i>
                                Media
                            </a>
                        </li>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">

                            <a href="/admin/category">
                                <i class="fa-solid fa-layer-group"></i>
                                Category
                            </a>
                        </li>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">
                            <a href="/admin/tags">
                                <i class="fa-solid fa-tag"></i>
                                Tags
                            </a>
                        </li>

                        <li class="my-2 py-2 rounded" style="padding-left: 10px">
                            <a href="/admin/footer">
                                <i class="fa-solid fa-rectangle-list"></i>
                                Footer
                            </a>
                        </li>

                        <li class="my-2 py-2 rounded" style="padding-left: 10px">
                            <a href="/admin/add">
                                <i class="fa-solid fa-user-plus"></i>
                                New Admin
                            </a>
                        </li>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">
                            <a href="/admin/comment">
                                <i class="fa-regular fa-comment-dots"></i>
                                Comment
                            </a>
                        </li>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">
                            <a href="/admin/meta">
                                <i class="fa-solid fa-bullhorn"></i>
                                SEO Meta
                            </a>
                        </li>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">
                            <a href="/admin/info">
                                <i class="fa-solid fa-circle-info"></i>
                                Site Info
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-10">


                    @yield('menuContent')


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
