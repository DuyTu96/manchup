@extends('client.layouts.main')
@section('content')
@include('client.layouts.slider')
<div class="main-container col1-layout">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-8 col-xs-12">
                <div class="home-tab">
                    <ul class="nav home-nav-tabs home-product-tabs">
                        <li class="active"><a href="#featured" data-toggle="tab" aria-expanded="false">Sản Phẩm Nổi Bật</a></li>
                        <li class="divider"></li>
                    </ul>
                    <div id="productTabContent" class="tab-content">
                        <div class="tab-pane active in" id="featured">
                            <div class="featured-pro">
                                <div class="slider-items-products">
                                    <div id="featured-slider" class="product-flexslider hidden-buttons">
                                        <div class="slider-items slider-width-col4">
                                            @foreach ($product_featured as $prd)
                                                <div class="product-item">
                                                    <div class="item-inner">
                                                        <div class="product-thumbnail">
                                                            @if ($prd->price_sale > 0)
                                                                <div class="icon-sale-label sale-left">-{{ 100-number_format($prd->price_sale/$prd->price*100) }}%</div>
                                                            @endif
                                                            @if ($prd->new == 1)
                                                                <div class="icon-new-label new-right">New</div>
                                                            @endif
                                                            <div class="pr-img-area">
                                                                <a title="{{ $prd->name }}" href="{{ route('client.product.info', $prd->id) }}">
                                                                    <figure>
                                                                        <img class="first-img" src="{{ $prd->image }}" alt="{{ $prd->name }}">
                                                                        <img class="hover-img" src="{{ $prd->image }}" alt="{{ $prd->name }}">
                                                                    </figure>
                                                                </a>
                                                                <button type="button" class="add-to-cart-mt addToCart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span> Thêm Vào Giỏ Hàng</span>
                                                                </button>
                                                                <input class="product_id" name="product_id" value="{{ $prd->id }}" type="hidden">
                                                                <input type="hidden" class="qty num-product" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                            </div>
                                                            <div class="pr-info-area">
                                                                <div class="pr-button">
                                                                    <div class="mt-button add_to_wishlist">
                                                                        <a href="#">
                                                                            <i class="fa fa-heart"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="mt-button add_to_compare">
                                                                        <a href="#">
                                                                            <i class="fa fa-signal"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="mt-button quick-view">
                                                                        <a href="{{ route('client.product.info', $prd->id) }}">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title">
                                                                    <a title="{{ $prd->name }}" href="{{ route('client.product.info', $prd->id) }}">{{ $prd->name }}</a>
                                                                </div>
                                                                <div class="item-content">
                                                                    <div class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box">
                                                                            <span class="regular-price">
                                                                                @if ($prd->price_sale >0)
                                                                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($prd->price_sale) }} đ</span> </p>
                                                                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">{{ number_format($prd->price) }} đ</span> </p>
                                                                                @else
                                                                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($prd->price) }} đ</span> </p>
                                                                                @endif
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 hot-products">
                <div class="hot-deal"> <span class="title-text">Hot deal</span>
                    <ul class="products-grid">
                        <li class="item">
                            <div class="product-item">
                                <div class="item-inner">
                                    <div class="product-thumbnail">
                                        <div class="icon-sale-label sale-left">-{{ 100-number_format($product_hot->price_sale/$product_hot->price*100) }}%</div>
                                        <div class="icon-hot-label hot-right">Hot</div>
                                        <div class="pr-img-area"> 
                                            <a title="{{ $product_hot->name }}" href="{{ route('client.product.info', $product_hot->id) }}">
                                                <figure>
                                                    <img class="first-img" src="{{ $product_hot->image }}" alt="{{ $product_hot->name }}">
                                                    <img class="hover-img" src="{{ $product_hot->image }}" alt="{{ $product_hot->name }}">
                                                </figure>
                                            </a>
                                            <button type="button" class="add-to-cart-mt addToCart"> <i class="fa fa-shopping-cart"></i><span> Thêm Vào Giỏ Hàng</span></button>
                                            <input class="product_id" name="product_id" value="{{ $product_hot->id }}" type="hidden">
                                            <input type="hidden" class="qty num-product" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                        </div>
                                        <div class="jtv-box-timer">
                                            <div class="countbox_1 jtv-timer-grid"></div>
                                        </div>
                                        <div class="pr-info-area">
                                            <div class="pr-button">
                                                <div class="mt-button add_to_wishlist">
                                                    <a href="#">
                                                        <i class="fa fa-heart"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-button add_to_compare">
                                                    <a href="#">
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-button quick-view">
                                                    <a href="{{ route('client.product.info', $product_hot->id) }}">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <a title="{{ $product_hot->name }}" href="{{ route('client.product.info', $product_hot->id) }}">{{ $product_hot->name }}</a>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        @if ($product_hot->price_sale >0)
                                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($product_hot->price_sale) }} đ</span> </p>
                                                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">{{ number_format($product_hot->price) }} đ</span> </p>
                                                        @else
                                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($product_hot->price) }} đ</span> </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="special-products">
        <div class="page-header">
            <h2>Màn Chụp Tự Bung</h2>
        </div>
        <div class="special-products-pro">
            <div class="slider-items-products">
                <div id="special-products-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4">
                        @foreach ($productByCate1 as $prdcate)
                            @foreach ($prdcate as $val)
                                <div class="product-item">
                                    <div class="item-inner">
                                        <div class="product-thumbnail">
                                            <div class="icon-sale-label sale-left">-{{ 100-number_format($val->price_sale/$val->price*100) }}%</div>
                                            @if ($val->new == 1)
                                                <div class="icon-new-label new-right">New</div>
                                            @endif
                                            <div class="pr-img-area"> <a title="{{ $val->name }}" href="{{ route('client.product.info', $val->id) }}">
                                                    <figure>
                                                        <img class="first-img" src="{{ $val->image }}" alt="{{ $val->name }}">
                                                        <img class="hover-img" src="{{ $val->image }}" alt="{{ $val->name }}">
                                                    </figure>
                                                </a>
                                                <button type="button" class="add-to-cart-mt addToCart"> <i class="fa fa-shopping-cart"></i><span> Thêm Vào Giỏ Hàng</span> </button>
                                                <input class="product_id" name="product_id" value="{{ $val->id }}" type="hidden">
                                                <input type="hidden" class="qty num-product" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                            </div>
                                            <div class="pr-info-area">
                                                <div class="pr-button">
                                                    <div class="mt-button add_to_wishlist"><a href="#"><i class="fa fa-heart"></i></a></div>
                                                    <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-signal"></i> </a> </div>
                                                    <div class="mt-button quick-view"> <a href="{{ route('client.product.info', $val->id) }}"> <i class="fa fa-search"></i> </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a title="{{ $val->name }}" href="#">{{ $val->name }} </a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            @if ($val->price_sale >0)
                                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($val->price_sale) }} đ</span> </p>
                                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">{{ number_format($val->price) }} đ</span> </p>
                                                            @else
                                                                <p class="special-price"> <span class="price-label">Special Price</span><span class="price">{{ number_format($val->price) }} đ</span></p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="special-products">
        <div class="page-header">
            <h2>Màn Chụp Trẻ Em</h2>
        </div>
        <div class="special-products-pro">
            <div class="slider-items-products">
                <div id="special-products-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4">
                        @foreach ($productByCate2 as $prdcate)
                            @foreach ($prdcate as $val)
                                <div class="product-item">
                                    <div class="item-inner">
                                        <div class="product-thumbnail">
                                            <div class="icon-sale-label sale-left">-{{ 100-number_format($val->price_sale/$val->price*100) }}%</div>
                                            @if ($val->new == 1)
                                                <div class="icon-new-label new-right">New</div>
                                            @endif
                                            <div class="pr-img-area"> <a title="{{ $val->name }}" href="{{ route('client.product.info', $val->id) }}">
                                                    <figure>
                                                        <img class="first-img" src="{{ $val->image }}" alt="{{ $val->name }}">
                                                        <img class="hover-img" src="{{ $val->image }}" alt="{{ $val->name }}">
                                                    </figure>
                                                </a>
                                                <button type="button" class="add-to-cart-mt addToCart"> <i class="fa fa-shopping-cart"></i><span> Thêm Vào Giỏ Hàng</span></button>
                                                <input class="product_id" name="product_id" value="{{ $val->id }}" type="hidden">
                                                <input type="hidden" class="qty num-product" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                            </div>
                                            <div class="pr-info-area">
                                                <div class="pr-button">
                                                    <div class="mt-button add_to_wishlist"><a href="#"><i class="fa fa-heart"></i></a></div>
                                                    <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-signal"></i> </a> </div>
                                                    <div class="mt-button quick-view"> <a href="{{ route('client.product.info', $val->id) }}"> <i class="fa fa-search"></i> </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a title="{{ $val->name }}" href="#">{{ $val->name }} </a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            @if ($val->price_sale >0)
                                                                <p class="special-price"><span class="price-label">Special Price</span><span class="price">{{ number_format($val->price_sale) }} đ</span></p>
                                                                <p class="old-price"><span class="price-label">Regular Price:</span> <span class="price">{{ number_format($val->price) }} đ</span> </p>
                                                            @else
                                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($val->price) }} đ</span> </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="special-products">
        <div class="page-header">
            <h2>Màn Chụp Khung Không Khoan Tường</h2>
        </div>
        <div class="special-products-pro">
            <div class="slider-items-products">
                <div id="special-products-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4">
                        @foreach ($productByCate3 as $prdcate)
                            @foreach ($prdcate as $val)
                                <div class="product-item">
                                    <div class="item-inner">
                                        <div class="product-thumbnail">
                                            <div class="icon-sale-label sale-left">-{{ 100-number_format($val->price_sale/$val->price*100) }}%</div>
                                            @if ($val->new == 1)
                                                <div class="icon-new-label new-right">New</div>
                                            @endif
                                            <div class="pr-img-area"> <a title="{{ $val->name }}" href="{{ route('client.product.info', $val->id) }}">
                                                    <figure>
                                                        <img class="first-img" src="{{ $val->image }}" alt="{{ $val->name }}">
                                                        <img class="hover-img" src="{{ $val->image }}" alt="{{ $val->name }}">
                                                    </figure>
                                                </a>
                                                <button type="button" class="add-to-cart-mt addToCart"> <i class="fa fa-shopping-cart"></i><span> Thêm Vào Giỏ Hàng</span> </button>
                                                <input class="product_id" name="product_id" value="{{ $val->id }}" type="hidden">
                                                <input type="hidden" class="qty num-product" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                            </div>
                                            <div class="pr-info-area">
                                                <div class="pr-button">
                                                    <div class="mt-button add_to_wishlist"><a href="#"><i class="fa fa-heart"></i></a></div>
                                                    <div class="mt-button add_to_compare"><a href="#"> <i class="fa fa-signal"></i></a></div>
                                                    <div class="mt-button quick-view"><a href="{{ route('client.product.info', $val->id) }}"><i class="fa fa-search"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a title="{{ $val->name }}" href="{{ route('client.product.info', $val->id) }}">{{ $val->name }} </a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            @if ($val->price_sale >0)
                                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($val->price_sale) }} đ</span> </p>
                                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">{{ number_format($val->price) }} đ</span>
                                                            </p>
                                                            @else
                                                                <p class="special-price"><span class="price-label">Special Price</span><span class="price">{{ number_format($val->price) }} đ</span> </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div id="latest-news" class="news">
        <div class="page-header">
            <h2>Phản Hồi Của Khách Hành</h2>
        </div>
        <div class="slider-items-products">
            <div id="latest-news-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col6">
                    <div class="item">
                        <div class="jtv-blog">
                            <div class="blog-img">
                                <a href="single_post.html">
                                    <img class="primary-img" src="{{ asset('bower_components/assets-client-ecom/images/blog-img1.jpg') }}" alt="html template">
                                </a>
                                <span class="moretag"></span>
                            </div>
                            <div class="blog-content-jtv">
                                <h2><a href="single_post.html">Chị Nguyễn Thu Hương - 33 tuổi</a><br><br>
                                    <a href="single_post.html">Khu đô thị Xala, Hà Đông, Hà Nội</a><br><br>
                                    <a href="single_post.html">SĐT: 03851*****</a>
                                </h2>
                                <p>
                                    "Mình đã và đang sử dụng màn chụp tự bung Kinh Bắc 2m2, nhân viên tư vấn nhiệt tinh,
                                    màn chất lượng tốt, bền, đẹp. Gấp đi gấp lại khung không bị nhão, cả đại gia đình
                                    của mình hiện nay đang sử dụng những sản phẩm Kinh Bắc được gần 5-6 năm rồi. Thật sự
                                    quá tốt và chất lượng so với những sản phẩm không có tên tuổi hiện nay"
                                </p>
                                <span class="blog-likes"><i class="fa fa-heart"></i> 149 likes</span>
                                <span class="blog-comments"><i class="fa fa-comment"></i> 80 comments</span>
                                <div class="blog-action"> <span>Jan, 20, 2017</span>
                                    <a class="read-more" href="single_post.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="jtv-blog">
                            <div class="blog-img">
                                <a href="single_post.html">
                                    <img class="primary-img" src="{{ asset('bower_components/assets-client-ecom/images/blog-img2.jpg') }}" alt="html template">
                                </a>
                            </div>
                            <div class="blog-content-jtv">
                                <h2>
                                    <a href="single_post.html">Anh Nguyễn Quốc Trường - 41 tuổi <br><br> Quê quán: Hà Nội - SĐT: 08642*****. </a>
                                </h2>
                                <p>
                                    Gia đình mình có 2 bé nên đã từng sử dụng màn rút trẻ em của Kinh Bắc. Chất lượng rất
                                    đảm bảo đặc biệt là sản phẩm dành cho trẻ em. Chất màn mịn, mềm sờ vào cực thích.
                                    Sản phẩm của Kinh Bắc thì chất lượng là số 1 không thể phủ nhận rồi.
                                </p>
                                <span class="blog-likes"><i class="fa fa-heart"></i> 89 likes</span><span class="blog-comments"><i class="fa fa-comment"></i> 10 comments</span>
                                <div class="blog-action"><span>May, 25, 2017</span> <a class="read-more" href="single_post.html">read more</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="jtv-blog">
                            <div class="blog-img">
                                <a href="single_post.html"> <img class="primary-img" src="{{ asset('bower_components/assets-client-ecom/images/blog-img1.jpg') }}" alt="html template"></a> <span class="moretag"></span>
                            </div>
                            <div class="blog-content-jtv">
                                <h2>
                                    <a href="single_post.html">Bác Hoàng Minh Tú - 65 tuổi <br><br> Quê quán: Ninh Bình.</a>
                                </h2>
                                <p>
                                    Đám cưới con gái bác vừa rồi có mua màn khung của Kinh Bắc. Nhân viên nhiệt tình, tư
                                    vấn và lắp ráp chuyên nghiệp. Màn và khung chắc chắn và cực kì đẹp. Sắp tới bác cũng
                                    lắp thêm toàn bộ giường ở nhà là màn khung cho đẹp và tiện hơn. Nhưng chắc chắn sẽ
                                    chọn của Kinh Bắc thôi. Vì các hãng khác bác không thấy chất lượng bằng.
                                </p>
                                <span class="blog-likes"><i class="fa fa-heart"></i> 149 likes</span> <span class="blog-comments"><i class="fa fa-comment"></i> 80 comments</span>
                                <div class="blog-action"> <span>Jan, 20, 2017</span> <a class="read-more" href="single_post.html">read more</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jtv-category-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="jtv-single-cat">
                    <h2 class="cat-title">Màn Chụp Tự Bung 1m8</h2>
                    @foreach ($product4 as $prd4)
                        <div class="jtv-product">
                            <div class="product-img">
                                <a href="{{ route('client.product.info', $prd4->id) }}">
                                    <img src="{{ $prd4->image }}" alt="{{ $prd4->name }}">
                                    <img class="secondary-img" src="{{ $prd4->image }}" alt="{{ $prd4->name }}">
                                </a>
                            </div>
                            <div class="jtv-product-content">
                                <h3><a href="{{ route('client.product.info', $prd4->id) }}">{{ $prd4->name }}</a></h3>
                                <div class="price-box">
                                    @if ($prd4->price_sale > 0)
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($prd4->price_sale) }} đ</span> </p>
                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">{{ number_format($prd4->price) }} đ</span> </p>
                                    @else
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($prd4->price) }} đ</span> </p>
                                    @endif
                                        <h6>7687 lượt Thích</h6>
                                </div>
                                <div class="jtv-product-action">
                                    <div class="jtv-extra-link">
                                        <div class="button-cart">
                                            <button><i class="fa fa-shopping-cart addCart"></i></button>
                                            <input class="product_id" name="product_id" value="{{ $prd4->id }}" type="hidden">
                                            <input type="hidden" class="qty num-product" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                        </div>
                                        <a href="{{ route('client.product.info', $prd4->id) }}" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="jtv-single-cat">
                    <h2 class="cat-title">Màn khung không khoan tường</h2>
                    @foreach ($product5 as $prd5)
                        <div class="jtv-product">
                            <div class="product-img">
                                <a href="{{ route('client.product.info', $prd5->id) }}">
                                    <img src="{{ $prd5->image }}" alt="{{ $prd5->name }}">
                                    <img class="secondary-img" src="{{ $prd5->image }}" alt="{{ $prd5->name }}">
                                </a>
                            </div>
                            <div class="jtv-product-content">
                                <h3><a href="{{ route('client.product.info', $prd5->id) }}">{{ $prd5->name }}</a></h3>
                                <div class="price-box">
                                    @if ($prd5->price_sale > 0)
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($prd5->price_sale) }} đ</span> </p>
                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">{{ number_format($prd5->price) }} đ</span> </p>
                                    @else
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($prd5->price) }} đ</span> </p>
                                    @endif
                                        <h6>7687 lượt Thích</h6>
                                </div>
                                <div class="jtv-product-action">
                                    <div class="jtv-extra-link">
                                        <div class="button-cart">
                                            <button><i class="fa fa-shopping-cart addCart"></i></button>
                                            <input class="product_id" name="product_id" value="{{ $prd5->id }}" type="hidden">
                                            <input type="hidden" class="qty num-product" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                        </div>
                                        <a href="{{ route('client.product.info', $prd5->id) }}" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="jtv-single-cat">
                    <h2 class="cat-title">Màn chụp trẻ em thái</h2>
                    @foreach ($product6 as $prd6)
                        <div class="jtv-product">
                            <div class="product-img">
                                <a href="{{ route('client.product.info', $prd6->id) }}">
                                    <img src="{{ $prd6->image }}" alt="{{ $prd6->name }}">
                                    <img class="secondary-img" src="{{ $prd6->image }}" alt="{{ $prd6->name }}">
                                </a>
                            </div>
                            <div class="jtv-product-content">
                                <h3><a href="{{ route('client.product.info', $prd6->id) }}">{{ $prd6->name }}</a></h3>
                                <div class="price-box">
                                    @if ($prd6->price_sale > 0)
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($prd6->price_sale) }} đ</span> </p>
                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">{{ number_format($prd6->price) }} đ</span> </p>
                                    @else
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($prd6->price) }} đ</span> </p>
                                    @endif
                                        <h6>7687 lượt Thích</h6>
                                </div>
                                <div class="jtv-product-action">
                                    <div class="jtv-extra-link">
                                        <div class="button-cart">
                                            <button><i class="fa fa-shopping-cart addCart"></i></button>
                                            <input class="product_id" name="product_id" value="{{ $prd6->id }}" type="hidden">
                                            <input type="hidden" class="qty num-product" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                        </div>
                                        <a href="{{ route('client.product.info', $prd6->id) }}" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div id="myModal" class="modal fade">
    <div class="modal-dialog newsletter-popup">
        <div class="modal-content"> <button type="button" class="close" data-dismiss="modal"
                aria-hidden="true">&times;</button>
            <div class="modal-body">
                <h4 class="modal-title">NEWSLETTER SIGNUP</h4>
                <form id="newsletter-form" method="post" action="#">
                    <div class="content-subscribe">
                        <div class="form-subscribe-header">
                            <label>Subscribe to be the first to know about Sales, Events, and Exclusive Offers!</label>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-text newsletter-subscribe"
                                title="Sign up for our newsletter" name="email" placeholder="Enter your email address">
                        </div>
                        <div class="actions">
                            <button class="button-subscribe" title="Subscribe" type="submit">Subscribe</button>
                        </div>
                    </div>
                </form>
                <div class="subscribe-bottom">
                    <input name="notshowpopup" id="notshowpopup" type="checkbox">
                    Don’t show this popup again </div>
            </div>
        </div>
    </div>
</div>
@endsection
