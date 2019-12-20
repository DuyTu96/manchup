@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <h2 class="header-title">Data Table</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="#">Tables</a>
                    <span class="breadcrumb-item active">Data Table</span>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-overflow" style="color: black">
                    <div class="form-group">
                        <td><label for="">Tên Khách Hàng : </label> {{ $order->user_name }}</td>
                    </div>
                    <div class="form-group">
                        <td><label for="">Email :</label> {{ $order->user_email }}</td>
                    </div>
                    <div class="form-group">
                        <td><label for="">Số Điện Thoại :</label> {{ $order->user_phone }}</td>
                    </div>
                    <div class="form-group">
                        <td><label for="">Địa Chỉ :</label> {{ $order->user_address }}</td>
                    </div>
                    <table class="table table-hover table-xl">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Sản Phẩm</th>
                                <th>Giá</th>
                                <th>Số Lượng</th>
                                <th>Thành Tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $key = 1 @endphp
                            @foreach ($orderDetail as  $detail)
                                <tr>
                                    <td>{{ $key++ }}</td>
                                    <td>
                                        @foreach ($products as $product)
                                            @if ($detail->product_id == $product->id)
                                                {{ $product->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ number_format($detail->price) }} VND</td>
                                    <td>{{ $detail->quantity }}</td>
                                    <td>{{ number_format($detail->price * $detail->quantity) }} VND</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-right" style="font-size: 20px; color: red">
                        Tổng Tiền : {{ number_format($order->total_price) }} VND
                    </div>
                    <hr>                    
                    @if ($order->status == 0)
                        <div class="text-right">
                            <a href="{{ route('admin.order.finishOrder', $order->id) }}"><button class="btn btn-info checkconfirm">Xác Nhận Hoàn Thành</button></a>
                        </div>
                    @else
                        <div class="text-right">
                            <button class="btn btn-danger">Đã Hoàn Thành</button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Wrapper END -->
@endsection
