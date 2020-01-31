<div id="mobile-menu">
    <ul>
        <li><a href="/" class="home1">Trang Chủ</a></li>
        <li><a href="{{ route('client.products.index') }}">Sản Phẩm</a>
            <ul class="level1">
                @foreach ($categories as $category)
                    @if ($category->parent_id != 0)
                        <li style="font-size: 10px"><a href="{{ route('client.product.show', $category->id) }}" class=""><i class="fa fa-chevron-right"></i> {{ $category->name }}</a></li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li><a href="contact_us.html">Tin Tức</a></li>
        <li><a href="about_us.html">Giới Thiệu</a></li>
        <li><a href="blog.html">Phản Hồi</a></li>
    </ul>
</div>
