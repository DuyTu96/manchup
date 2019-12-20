<aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
    <div class="block shop-by-side">
        <div class="sidebar-bar-title">
            <h3>Tùy Chọn Mua Sắm</h3>
        </div>
        <div class="block-content">            
            <div class="manufacturer-area">
                <h2 class="saider-bar-title">Danh Mục</h2>
                <div class="saide-bar-menu">
                    <ul>
                        @foreach ($categories as $category)
                            @if ($category->parent_id == 0)
                                <li><a href="{{ route('client.products.productByParentCate', $category->id) }}"><i class="fa fa-angle-right"></i> {{ $category->name }}</a></li>
                            @else
                            <li><a href="{{ route('client.product.show', $category->id) }}"><i class="fa fa-angle-right"></i> {{ $category->name }}</a></li>
                            @endif
                            
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="manufacturer-area">
                <h2 class="saider-bar-title">Size</h2>
                <div class="saide-bar-menu">
                    <ul>
                        @foreach ($sizes as $size)
                            <li><a href="{{ route('client.products.productBySize', $size->id) }}"><i class="fa fa-angle-right"></i> Sản Phẩm {{ $size->size }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>