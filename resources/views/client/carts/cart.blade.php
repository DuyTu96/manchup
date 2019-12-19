@extends('client.layouts.main')
@section('content')
<section class="main-container col1-layout">
    <div class="main container">
        <div class="col-main">
            <div class="cart">
                <div class="page-content page-order">
                    <div class="page-title"><h2>Shopping Cart</h2></div>
                    <div class="order-detail-content">
                        <div class="table-responsive orderDetail">
                            <table class="table table-bordered cart_summary">
                                <thead>
                                    <tr>
                                        <th class="cart_product">Ảnh Sản Phẩm</th>
                                        <th>Thông Tin</th>
                                        <th>Giá Sản Phẩm</th>
                                        <th>Số Lượng</th>
                                        <th>Tổng Tiền</th>
                                        <th style="width: 5%" class="action"><i class="fa fa-trash-o"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($cookie != false)
                                        @php $subToTal = 0 @endphp
                                        @foreach ($cookie as $cart)
                                            <tr class="product-cart">
                                                <td class="cart_product"><a href="{{ route('client.product.info', $cart['product_id']) }}"><img src="{{ $cart['product_image'] }}"
                                                            alt="Product"></a></td>
                                                <td class="cart_description">
                                                    <p class="product-name"><a href="{{ route('client.product.info', $cart['product_id']) }}">{{ $cart['product_name'] }}</a></p>
                                                    <input type="hidden" name="product_name" value="{{ $cart['product_name'] }}">
                                                    <small><a href="{{ route('client.product.info', $cart['product_id']) }}">Color : Red</a></small><br>
                                                    <small><a href="{{ route('client.product.info', $cart['product_id']) }}">Size : M</a></small>
                                                </td>
                                                <td class="price">
                                                    <span>{{ number_format($cart['product_price']) }}</span>
                                                    <input type="hidden" name="product_price" value="{{ ($cart['product_price']) }}">
                                                </td>
                                                <td class="qty">
                                                    <input class="form-control input-sm input-quantity" name="product_num" id="quantity" type="number" data-id="{{ $cart['product_id'] }}" value="{{ $cart['product_num'] }}" minlength="1" maxlength="99">
                                                </td>
                                                <td class="price">
                                                    <span class="summed-price">{{ number_format($cart['num_price']) }} VND</span>
                                                    <input type="hidden" name="num_price" value="{{ $cart['num_price'] }}">
                                                </td>
                                                <td class="action"><a href="#"><i class="btn btn-danger btn-sm fa fa-trash-o deleteCart"></i></a></td>
                                                <input class="product_id" name="product_id" value="{{ $cart['product_id'] }}" type="hidden">
                                            </tr>
                                            @php $subToTal = $subToTal + $cart['product_num'] * $cart['product_price'] @endphp
                                        @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6">Giỏ Hàng Trống!!!</td>
                                    </tr>
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2" rowspan="2"></td>
                                        <td colspan="2">Tổng Tiền :</td>
                                        <td id="total_price" colspan="3">
                                            @if ($cookie != false)
                                            {{ number_format($subToTal) }} VND
                                            @else
                                            0
                                            @endif
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        
                        <div class="cart_navigation"> 
                            <a class="continue-btn" href="/">
                                <i class="fa fa-arrow-left"></i>&nbsp; Tiếp Tục Mua Sắp
                            </a> 
                            <a class="checkout-btn usernotlogin" data-toggle="modal" data-target="#basic-modal">
                                <i class="fa fa-check"></i> Xác Nhận Đặt Hàng
                            </a>
                            <div class="modal fade" id="basic-modal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="{{ route('client.carts.checkout') }}" method="POST">
                                            @csrf
                                            <div class="modal-header">
                                                <h4>
                                                    Xin Mời Nhập Thông Tin!
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label" for="textinput">Tên Người Nhận :</label>
                                                    <input style="width: 60%" type="text" name="user_name" placeholder="Nhập Tên Người Nhận Hàng..." class="form-control" value="{{ old('user_name') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label" for="textinput">Email Người Nhận :</label>
                                                    <input style="width: 60%" type="text" name="user_email" placeholder="Nhập Email Người Nhận Hàng..." class="form-control" value="{{ old('user_email') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label" for="textinput">Số Điện Thoại :</label>
                                                    <input style="width: 60%" type="text" name="user_phone" placeholder="Nhập Số Điện Thoại..." class="form-control" value="{{ old('user_phone') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label" for="textinput">Địa Chỉ Người Nhận :</label>
                                                    <input style="width: 60%" type="text" name="user_address" placeholder="Địa Chỉ Người Nhận..." class="form-control" value="{{ old('user_address') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label" for="textinput">Ghi Chú :</label>
                                                    <textarea style="height: 200px; border-radius: 15px;" name="requiment" id="" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer no-border">
                                                <div class="text-right">
                                                    <button class="btn btn-default" data-dismiss="modal">Hủy</button>
                                                    <button type="submit" class="btn btn-danger">Đặt Hàng</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
