<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="pt-1 col-2 bg-white menuItem">
                    <ul>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">
                            <a href="/admin/summery">
                                Summery
                            </a>
                        </li>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">
                            <a href="/admin/product">Product Post</a>
                        </li>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">
                            <a href="/admin/blog">Blog Post</a>
                        </li>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">
                            <a href="/admin/blog">Media</a>
                        </li>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">
                            <a href="/admin/category">Category</a>
                        </li>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">
                            <a href="/admin/category">Tags</a>
                        </li>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">
                            <a href="/admin/footer">Footer</a>
                        </li>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">
                            <a href="/admin/add">New Admin</a>
                        </li>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">
                            <a href="/admin/meta">SEO Meta</a>
                        </li>
                        <li class="my-2 py-2 rounded" style="padding-left: 10px">
                            <a href="/admin/info">Site Info</a>
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
