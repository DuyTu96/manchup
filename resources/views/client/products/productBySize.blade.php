@extends('client.layouts.main')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul>
                    <li class="home"> <a title="Go to Home Page" href="/">Home</a><span>&raquo;</span></li>
                    <li class=""> <a title="Go to Home Page">Sản Phẩm</a><span>&raquo;</span>
                    </li>
                    <li><strong>Sản Phẩm Size {{ $size->size }}</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="main-container col2-left-layout">
    <div class="container">
        <div class="row">
            <div class="col-main col-sm-9 col-xs-12 col-sm-push-3">
                <div class="shop-inner">
                    <div class="page-title">
                        <h2>Sản Phẩn Size {{ $size->size }}</h2>
                    </div>
                    <div class="toolbar">
                        <div class="view-mode">
                            <ul>
                                <li class="active"> <a> <i class="fa fa-th-large"></i> </a> </li>
                                <li> <a> <i class="fa fa-th-list"></i> </a> </li>
                            </ul>
                        </div>
                        <div class="sorter">
                            <div class="short-by">
                                <label>Sort By:</label>
                                <select>
                                    <option selected="selected">Position</option>
                                    <option>Name</option>
                                    <option>Price</option>
                                    <option>Size</option>
                                </select>
                            </div>
                            <div class="short-by page">
                                <label>Show:</label>
                                <select>
                                    <option selected="selected">18</option>
                                    <option>20</option>
                                    <option>25</option>
                                    <option>30</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="product-grid-area">
                        <ul class="products-grid">
                            @forelse ($prdBySize as $value)
                                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="icon-sale-label sale-left"> -{{ 100-number_format($value->price_sale/$value->price*100) }}%</div>
                                                @if ($value->new == 1)
                                                    <div class="icon-new-label new-right">New</div>
                                                @endif
                                                <div class="pr-img-area">
                                                    <a title="Ipsums Dolors Untra" href="{{ route('client.product.info', $value->id) }}" >
                                                        <figure>
                                                            <img style="width: 250px; height: 250px;" class="first-img" src="{{ $value->image }}" alt="">
                                                            <img style="width: 250px; height: 250px;" class="hover-img" src="{{ $value->image }}" alt="">
                                                        </figure>
                                                    </a>
                                                    <button type="button" class="add-to-cart-mt addToCart"> <i class="fa fa-shopping-cart"></i><span> Thêm Vào Giỏ Hàng</span> </button>
                                                    <input class="product_id" name="product_id" value="{{ $value->id }}" type="hidden">
                                                    <input type="hidden" class="qty num-product" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                </div>
                                                <div class="pr-info-area">
                                                    <div class="pr-button">
                                                        <div class="mt-button add_to_wishlist"> <a> <i class="fa fa-heart"></i> </a> </div>
                                                        <div class="mt-button add_to_compare"> <a> <i class="fa fa-signal"></i> </a> </div>
                                                        <div class="mt-button quick-view"> <a href="{{ route('client.product.info', $value->id) }}"> <i class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                            href="{{ route('client.product.info', $value->id) }}">{{ $value->name }}</a> </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="item-price">
                                                            @if ($value->price_sale >0)
                                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($value->price_sale) }} đ</span> </p>
                                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">{{ number_format($value->price) }} đ</span> </p>
                                                            @else
                                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($value->price) }} đ</span> </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                Products Do Not Exist!!!
                            @endforelse
                        </ul>
                        <div class="pagination-area"></div>
                    </div>
                </div>
            </div>
            @include('client.products.shopby')
        </div>
    </div>
    <hr>
</div>
<!-- Main Container End -->
@endsection
