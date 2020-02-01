<div class="col-md-9 col-sm-8">
    <div class="mtmegamenu">
        <ul>
            <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item">
                    <a href="/">
                        <div class="title title_font"><span style="color: white" class="title-text">Trang Chủ</span></div>
                    </a>
                </div>
            </li>
            <li class="mt-root">
                <div class="mt-root-item"><a href="{{ route('client.products.index') }}">
                        <div class="title title_font"><span style="color: white" class="title-text">Sản Phẩm</span></div>
                    </a></div>
                <ul class="menu-items col-xs-12">
                    <li class="menu-item depth-1 menucol-1-3 ">
                        <div class="title title_font"> <a href="#"> Sản Phẩm</a></div>
                        <ul class="submenu">
                            @foreach ($categories as $category)
                                @if ($category->parent_id == 0)
                                    <li class="menu-item">
                                        <div class="title"> <a href="{{ route('client.products.productByParentCate', $category->id) }}">{{ $category->name }}</a></div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="mt-root">
                <div class="mt-root-item">
                    <a href="contact_us.html">
                        <div class="title title_font"><span style="color: white" class="title-text">Tin Tức</span> </div>
                    </a>
                </div>
            </li>
            <li class="mt-root">
                <div class="mt-root-item">
                    <a href="{{ route('client.post') }}">
                        <div class="title title_font"><span style="color: white" class="title-text">Khuyến Mại</span> </div>
                    </a>
                </div>
            </li>
            <li class="mt-root">
                <div class="mt-root-item">
                    <a href="contact_us.html">
                        <div class="title title_font"><span style="color: white" class="title-text">Liên Hệ</span> </div>
                    </a>
                </div>
            </li>
            <li class="mt-root">
                <div class="mt-root-item">
                    <a href="{{ route('client.info') }}">
                        <div class="title title_font"><span style="color: white" class="title-text">Giới Thiệu</span></div>
                    </a>
                </div>
            </li>
            <li class="mt-root">
                <div class="mt-root-item">
                    <div class="title title_font"><span style="color: #0062bd" class="title-text">.</span></div>
                </div>
            </li>
        </ul>
    </div>
</div>
