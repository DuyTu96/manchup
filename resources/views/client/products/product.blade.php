@extends('client.layouts.main')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul>
                    <li class="home"> <a title="Go to Home Page" href="/">Trang Chủ</a><span>&raquo;</span></li>
                    <li class=""> <a title="Go to Home Page" href="{{ route('client.products.index') }}">Sản Phẩm</a><span>&raquo;</span></li>
                    @if (isset($category))
                        <li><strong>{{ $category->name }}</strong></li>
                    @endif
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
                        <h2>
                            @if (isset($category))
                                {{ $category->name }}
                            @else
                                Sản Phẩm
                            @endif
                        </h2>
                    </div>
                    <div class="toolbar">
                        <div class="view-mode">
                            <ul>
                                <li class="active"> <a href="shop_grid.html"> <i class="fa fa-th-large"></i> </a> </li>
                                <li> <a href="shop_list.html"> <i class="fa fa-th-list"></i> </a> </li>
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
                            @forelse ($products as $product)
                                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="icon-sale-label sale-left">Sale</div>
                                                <div class="icon-new-label new-right">New</div>
                                                <div class="pr-img-area">
                                                    <a title="Ipsums Dolors Untra" href="{{ route('client.product.info', $product->id) }}">
                                                        <figure>
                                                            <img class="first-img" src="{{ $product->image }}" alt=""> <img class="hover-img" src="{{ $product->image }}" alt="{{ $product->name }}">
                                                        </figure>
                                                    </a>
                                                    <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span>
                                                    </button>
                                                </div>
                                                <div class="pr-info-area">
                                                    <div class="pr-button">
                                                        <div class="mt-button add_to_wishlist"> <a href="#"> <i class="fa fa-heart"></i> </a> </div>
                                                        <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-signal"></i> </a> </div>
                                                        <div class="mt-button quick-view"> <a href="{{ route('client.product.info', $product->id) }}"> <i class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                            href="{{ route('client.product.info', $product->id) }}">{{ $product->name }}</a> </div>
                                                    <div class="item-content">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="item-price">
                                                            @if ($product->price_sale >0)
                                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($product->price_sale) }} đ</span> </p>
                                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">{{ number_format($product->price) }} đ</span> </p>
                                                            @else
                                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($product->price) }} đ</span> </p>
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
                        <div class="pagination-area">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
            @include('client.products.shopby')
        </div>
        <hr>
    </div>
</div>
<!-- Main Container End -->
@endsection
