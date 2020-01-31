@extends('client.layouts.main')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul>
                    <li class="home"> <a title="Go to Home Page" href="/">Trang Chủ</a><span>&raquo;</span></li>
                    <li class=""> <a title="Go to Home Page" href="{{ route('client.products.index') }}">Sản
                            Phẩm</a><span>&raquo;</span></li>
                    <li><strong>{{ $product->name }}</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="main-container col1-layout">
    <div class="container">
        <div class="row">
            <div class="col-main">
                <div class="product-view-area">
                    <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
                        <div class="icon-sale-label sale-left"> -{{ 100-number_format($product->price_sale/$product->price*100) }}%</div>
                        <div class="large-image"> <a href="{{ $product->image }}" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="{{ $product->image }}" alt="products"> </a> </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
                        <div class="product-name">
                            <h1>{{ $product->name }}</h1>
                        </div>
                        <div class="price-box">
                            <p class="special-price"> <span class="price-label">Special Price</span>
                                <span class="price">
                                    @if ($product->price_sale > 0)
                                    {{ number_format($product->price_sale) }} VND
                                    @else
                                    {{ number_format($product->price) }} VND
                                    @endif
                                </span>
                            </p>
                            <p class="old-price">
                                <span class="price-label">Regular Price:</span> <span class="price">
                                    @if ($product->price_sale >0 )
                                    {{ number_format($product->price) }} VND
                                    @endif
                                </span>
                            </p>
                        </div>
                        <div class="short-description">
                            <h2>Thông Tin Sản Phâm</h2>
                            <p>{!! $product->content !!}</p>
                        </div>
                        <div class="product-variation">
                            <form action="#" method="post">
                                <div class="cart-plus-minus">
                                    <label for="qty">Quantity:</label>
                                    <div class="numbers-row">
                                        <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;"
                                            class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                                        <input class="product_id" name="product_id" value="{{ $product->id }}"
                                            type="hidden">
                                        <input type="text" class="qty num-product" title="Qty" value="1" maxlength="12"
                                            id="qty" name="qty">
                                        <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                            class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                                    </div>
                                </div>
                                <button id="addToCart" class="button pro-add-to-cart" title="Add to Cart"
                                    type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                            </form>
                        </div>
                        <div class="product-cart-option">
                            <ul>
                                <li><a><i class="fa fa-heart"></i><span>Add to Wishlist</span></a></li>
                                <li><a><i class="fa fa-retweet"></i><span>Add to Compare</span></a></li>
                                <li><a><i class="fa fa-envelope"></i><span>Email to a Friend</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-overview-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="product-tab-inner">
                                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                    <li class="active"> <a href="#description" data-toggle="tab">Mô Tả Sản Phẩm</a>
                                    </li>
                                </ul>
                                <div id="productTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="description">
                                        <div class="std">
                                            {!! $product->description !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fb-comments" data-href="https:// Manchupkinhbac.com" data-width="100%" data-numposts="5"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="related-product-area">
                    <div class="page-header">
                        <h2>Sản Phẩm Liên Quan</h2>
                    </div>
                    <div class="related-products-pro">
                        <div class="slider-items-products">
                            <div id="related-product-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col4 fadeInUp">
                                    @foreach ($relatedProduct as $rlp)
                                    <div class="product-item">
                                        <div class="item-inner fadeInUp">
                                            <div class="product-thumbnail">
                                                <div class="icon-sale-label sale-left">
                                                    -{{ 100-number_format($rlp->price_sale/$rlp->price*100) }}%</div>
                                                <div class="icon-new-label new-right">New</div>
                                                <div class="pr-img-area">
                                                    <a href="{{ route('client.product.info', $rlp->id) }}">
                                                        <img class="first-img" src="{{ $rlp->image }}"
                                                            alt="{{ $rlp->name }}">
                                                        <img class="hover-img" src="{{ $rlp->image }}"
                                                            alt="{{ $rlp->name }}">
                                                    </a>
                                                    {{-- <button type="button" class="add-to-cart-mt"><i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button> --}}
                                                </div>
                                                <div class="pr-info-area">
                                                    <div class="pr-button">
                                                        <div class="mt-button add_to_wishlist">
                                                            <a><i class="fa fa-heart"></i> </a>
                                                        </div>
                                                        <div class="mt-button add_to_compare">
                                                            <a><i class="fa fa-signal"></i></a>
                                                        </div>
                                                        <div class="mt-button quick-view">
                                                            <a href="{{ route('client.product.info', $rlp->id) }}"><i
                                                                    class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                            href="{{ route('client.product.info', $rlp->id) }}">{{ $rlp->name }}</a>
                                                    </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="item-price">
                                                            @if ($rlp->price_sale >0)
                                                            <p class="special-price"> <span class="price-label">Special
                                                                    Price</span> <span
                                                                    class="price">{{ number_format($rlp->price_sale) }}
                                                                    đ</span> </p>
                                                            <p class="old-price"> <span class="price-label">Regular
                                                                    Price:</span> <span
                                                                    class="price">{{ number_format($rlp->price) }}
                                                                    đ</span> </p>
                                                            @else
                                                            <p class="special-price"> <span class="price-label">Special
                                                                    Price</span> <span
                                                                    class="price">{{ number_format($rlp->price) }}
                                                                    đ</span> </p>
                                                            @endif
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
</div>
@endsection
